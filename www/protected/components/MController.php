<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MController
 *
 * @author Mance
 */
class MController extends Controller {

    public $navigation = array();
    public $child = array();
		public $category;
		public $sub_category;
   
    public function __construct($id, $module = null) 
    {
        parent::__construct($id,$module);
        
                $criteria = new CDbCriteria();
                $criteria->select = 'id,parent_id,name,lang';
                $lang_new =  isset($_GET['lang']) ? $_GET['lang'] : Yii::app()->language; 
                Yii::app()->setLanguage($lang_new);
                $criteria->condition = 'parent_id=0 AND lang = "'.$lang_new.'"';
                $category = Category::model()->findAll($criteria);
                
              
//                var_dump($category);
                $nav_array = array();
                $category_child[] = array();
                foreach($category as $key => $category_parent)
                {
                    
                    $criteria_child = new CDbCriteria();
                    $criteria_child->condition = 'parent_id='.$category_parent->id;
                    $category_child[$category_parent->id] = Category::model()->findAll($criteria_child);
                    
                    
                    foreach($category_child[$category_parent->id] as $value)
                    {
                        $child_array[$category_parent->id][] = array(
                            'label' => $value->name,
                            'url' => url('article/list/cid/'.$value->id),
                        );
                    }
                    
                    $nav_array[$key] = array(
                        'label' => $category_parent->name,
                        'url' => url('article/list/cid/'.$category_parent->id),
                       
                    );
                  
                    //判断是否有二级菜单
                    if(isset($child_array[$category_parent->id]))
                    {
                        $nav_array[$key]['items'] = $child_array[$category_parent->id];
                    }
                    
               
                }
         
            $this->navigation = $nav_array;
    }

}

?>
