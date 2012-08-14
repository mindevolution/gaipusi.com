<?php

class ArticleController extends MController
{
        public $layout='//layouts/article-list';
	public function actionView($id)
	{
            add_css('css/article.css');
            $category = Category::model()->findByPK($id);
           // $this->pageTitle() = $category->name.'-'.$this->pageTitle;
            $article = Article::model()->findAll(array(
                'condition' => 'id=:id',
                'order' => 'id desc',
                'params' => array(':id' => $id),
            ));
        
		$this->render('index',array(
                    'article' => $article,
                  
                ));
	}
        public function actionList($cid = null) 
        {
            $criteria = new CDbCriteria();
            if($cid)
            {
							  // 判断是否是根目录id，如果是根目录则搜索所有的该下面的文章
                $cid = (int) $cid;
								$category = Category::model()->findByPk($cid);
								// Add css by category
								CssHelper::addListCss($category);
								if(! $category->parent_id) {// 如果parent_id为空或者是null，则是根目录
								    $sub_category_arr = array();
								    // 搜索所有的子目录
										$sub_categories = Category::model()->findAll('parent_id=:p_id',
											array(':p_id' => $cid));
										foreach($sub_categories as $val) {
											   $sub_category_arr[] = $val->id;
										}
										$condition = "cat_id in (" .implode(',', $sub_category_arr).')';
								} else {
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
    
						$view_file = strtolower(str_replace(' ', '_', $category->list_layout));
            $this->render($view_file,array(
                'articles'=>$articles,
                'pages'=>$pager,
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