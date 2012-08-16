<?php

class ArticleController extends MController
{

	public $layout = '//layouts/article-list';

	public function actionView($id)
	{
		add_css('css/article.css');
		Article::hitsPlus($id);
		$article = Article::model()->find(array(
			'condition' => 'id=:id',
			'order' => 'id desc',
			'params' => array(':id' => $id),
			));
		// 得到当前的分类和子分类
		$cid = $article->cat_id;
		$this->parent_id = $article->cat_id;
		$this->category = CategoryHelper::getCategory($cid);
		$this->sub_category = CategoryHelper::menuItems(CategoryHelper::getSubCategory($this->category->id));
		$this->breadcrumb_data = CategoryHelper::getBreadcrumb($cid);
		$this->breadcrumb_data[] = $article->title;

		$preArticle = Article::getPreArticle($article);
		$pagePreNextArray = array();
		if ($preArticle)
		{
			$pagePreNextArray[] = '上一篇:' . l($preArticle->title, 'article/view/id/' . $preArticle->id);
		}
		$nextArticle = Article::getNextArticle($article);
		if ($nextArticle)
		{
			$pagePreNextArray[] = '下一篇:' . l($nextArticle->title, 'article/view/id/' . $nextArticle->id);
		}
                //招生信息
                $criteriaRe = new CDbCriteria();
                $criteriaRe ->condition = 'cat_id = 4';
                $criteriaRe ->order = 'id desc';
                $criteriaRe ->limit = '3';
                $this->recuitments = Article::model()->findAll($criteriaRe);
                
                 //招聘信息
                $criteriaZh = new CDbCriteria();
                $criteriaZh ->condition = 'maincat_id = 13';
                $criteriaZh ->order = 'id desc';
                $criteriaZh ->limit = '3';
                $this->invites = Article::model()->findAll($criteriaZh);
                
                 //联系我们
                $criteriaCon = new CDbCriteria();
                $criteriaCon ->order = 'id desc';
                $this->connect = Connect::model()->findAll($criteriaCon);
                
                

		$this->render('index', array(
			'article' => $article,
			'pagePreNext' => $pagePreNextArray,
		));
	}

	public function actionList($cid = null)
	{

		// 得到当前的分类和子分类
		$this->category = CategoryHelper::getCategory($cid);
		if($this->category->list_layout == 'Staff List')
		{
			redirect('teacher/list/cid/'.$cid);
		}
		$this->sub_category = CategoryHelper::menuItems(CategoryHelper::getSubCategory($this->category->id));
		$this->breadcrumb_data = CategoryHelper::getBreadcrumb($cid);

		$criteria = new CDbCriteria();
		if ($cid)
		{
			// 判断是否是根目录id，如果是根目录则搜索所有的该下面的文章
			$cid = (int) $cid;
			$category = Category::model()->findByPk($cid);
			// Add css by category
			CssHelper::addListCss($category);
			if (!$category->parent_id)
			{// 如果parent_id为空或者是null，则是根目录
				$this->parent_id = $category->id;
				$sub_category_arr = array();
				// 搜索所有的子目录
				$sub_categories = Category::model()->findAll('parent_id=:p_id', array(':p_id' => $cid));
				foreach ($sub_categories as $val)
				{
					$sub_category_arr[] = $val->id;
				}
				$condition = "cat_id in (" . implode(',', $sub_category_arr) . ')';
			} else
			{
				$this->parent_id = $category->parent_id;
				$condition = "cat_id = " . $cid;
			}
			$criteria->condition = $condition;
		}
		$criteria->order = 'id desc';
		$count = Article::model()->count($criteria);
		$pager = new CPagination($count);
		$pager->pageSize = 3;
		$pager->applyLimit($criteria);
		$articles = Article::model()->findAll($criteria);
                
                 //招生信息
                $criteriaRe = new CDbCriteria();
                $criteriaRe ->condition = 'cat_id = 4';
                $criteriaRe ->order = 'id desc';
                $criteriaRe ->limit = '3';
                $this->recuitments = Article::model()->findAll($criteriaRe);
                
                 //招聘信息
                $criteriaZh = new CDbCriteria();
                $criteriaZh ->condition = 'maincat_id = 13';
                $criteriaZh ->order = 'id desc';
                $criteriaZh ->limit = '3';
                $this->invites = Article::model()->findAll($criteriaZh);
                
                 //联系我们
                $criteriaCon = new CDbCriteria();
                $criteriaCon ->order = 'id desc';
                $this->connect = Connect::model()->findAll($criteriaCon);
                

		$view_file = strtolower(str_replace(' ', '_', $category->list_layout));
		$this->render($view_file, array(
			'articles' => $articles,
			'pages' => $pager,
		));
	}

	// Uncomment the following methods and override them if needed
	/*
	  public function filters()
	  {
	  // return the filter configuration for this controller, e.g.:
	  return array(
	  'inlineFilterName',
	  array(
	  'class'=>'path.to.FilterClass',
	  'propertyName'=>'propertyValue',
	  ),
	  );
	  }

	  public function actions()
	  {
	  // return external action classes, e.g.:
	  return array(
	  'action1'=>'path.to.ActionClass',
	  'action2'=>array(
	  'class'=>'path.to.AnotherActionClass',
	  'propertyName'=>'propertyValue',
	  ),
	  );
	  }
	 */
}