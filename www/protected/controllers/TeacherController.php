<?php

class TeacherController extends MController
{

	public $layout = '//layouts/article-list';


	public function actionList($cid = null)
	{
		add_css('css/teachers-list.css');

		// 得到当前的分类和子分类
		$this->category = CategoryHelper::getCategory($cid);
		$this->sub_category = CategoryHelper::menuItems(CategoryHelper::getSubCategory($this->category->id));
		$this->breadcrumb_data = CategoryHelper::getBreadcrumb($cid);

		$criteria = new CDbCriteria();
		if ($cid)
		{
			// 判断是否是根目录id，如果是根目录则搜索所有的该下面的文章
			$cid = (int) $cid;
			$category = Category::model()->findByPk($cid);
			if(in_array($category->name, array('中文', 'Chinese'))) {
				$criteria->condition = 'lang = "zh_cn"';
			}
			if(in_array($category->name, array('英文', 'English'))) {
				$criteria->condition = 'lang = "en_us"';
			}
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
			} else
			{
				$this->parent_id = $category->parent_id;
			}
		}
		$criteria->order = 'id desc';
		$count = Teacher::model()->count($criteria);
		$pager = new CPagination($count);
		$pager->pageSize = 3;
		$pager->applyLimit($criteria);
		$articles = Teacher::model()->findAll($criteria);

		$view_file = strtolower(str_replace(' ', '_', $category->list_layout));
		$this->render($view_file, array(
			'articles' => $articles,
			'pages' => $pager,
		));
	}

	public function actionView($id)
	{
		add_css('css/teachers-detail.css');


		$article = Teacher::model()->find(array(
			'condition' => 'id=:id',
			'order' => 'id desc',
			'params' => array(':id' => $id),
			));
		$nextThree = Teacher::model()->findAll(array(
			'condition' => 'id>:id',
			'order' => 'id desc',
			'limit' => 3,
			'params' => array(':id' => $id),
			));

		if($article->lang == 'en_us') {
			$parent_id = $cid = 27;
		} else {
			$parent_id = $cid = 26;
		}
		$category = Category::model()->findByPk($cid);
		if(in_array($category->name, array('中文', 'Chinese'))) {
			$criteria->condition = 'lang = "zh_cn"';
		}
		if(in_array($category->name, array('英文', 'English'))) {
			$criteria->condition = 'lang = "en_us"';
		}
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
		}

		// 得到当前的分类和子分类
		$this->parent_id = $parent_id;
		$this->category = CategoryHelper::getCategory($cid);
		$this->sub_category = CategoryHelper::menuItems(CategoryHelper::getSubCategory($this->category->id));
		$this->breadcrumb_data = CategoryHelper::getBreadcrumb($cid);
		$this->breadcrumb_data[] = $article->name;


		$this->render('view_teacher', array(
			'article' => $article,
			'nextThree' => $nextThree,
		));
	}
}