<?php

class NavigationController extends Controller
{
    public $layout = "//layout/header";
	public function actionIndex()
	{
                $criteria = new CDbCriteria();
                $criteria->select = 'id,parent_id,name,lang';
                $criteria->condition = 'parent_id=0';
                $category = Category::model()->findAll($criteria);
                
                $category_child[] = array();
                foreach($category as $category_parent)
                {
                    $criteria_clild = new CDbCriteria();
                    $criteria_child->condition = 'parent_id='.$category_parent->id;
                    $category_child[] = Category::model()->findAll($criteria_child);
                }
                
		$this->render('index',array(
                    'category'=>$categoroy,
                    'category_child'=>$category_child,
                    
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