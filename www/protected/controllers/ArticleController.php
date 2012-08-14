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
            add_css('css/article-list.css');
            $criteria = new CDbCriteria();
            if($cid)
            {
                $cid = (int) $cid;
                $criteria->condition = "cat_id = " . $cid;
            }
            $criteria->order = 'id desc';
            $count = Article::model()->count($criteria);
            $pager = new CPagination($count);
            $pager->pageSize = 6;
            $pager->applyLimit($criteria);
            $articles = Article::model()->findAll($criteria);
    
            $this->render('list',array(
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