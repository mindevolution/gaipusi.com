<?php
/**
 * Controller is the customized base controller class.
 * All controller classes for this application should extend from this base class.
 */
class Controller extends CController
{
	/**
	 * @var string the default layout for the controller view. Defaults to '//layouts/column1',
	 * meaning using a single column layout. See 'protected/views/layouts/column1.php'.
	 */
	public $layout='//layouts/column1';
	/**
	 * @var array context menu items. This property will be assigned to {@link CMenu::items}.
	 */
	public $menu=array();
	/**
	 * @var array the breadcrumbs of the current page. The value of this property will
	 * be assigned to {@link CBreadcrumbs::links}. Please refer to {@link CBreadcrumbs::links}
	 * for more details on how to specify this property.
	 */
	public $breadcrumbs=array();
	
		public function init()
		{
				  
				   if(isset($_REQUEST['lang'])&&$_REQUEST['lang']!="")  //通过lang参数识别语言
		
				   {
		
					   Yii::app()->language=$_REQUEST['lang'];
		
					   setcookie('lang',$_REQUEST['lang']);
		
				   }elseif(isset($_COOKIE['lang'])&&$_COOKIE['lang']!="")  //通过$_COOKIE['lang']识别语言
		
				   {
		
					   Yii::app()->language=$_COOKIE['lang'];
		
				   }else{   //通过系统或浏览器识别语言
		
					   $lang=explode(',',$_SERVER['HTTP_ACCEPT_LANGUAGE']);
					   //var_dump($lang);
					   Yii::app()->language=strtolower(str_replace('-','_',$lang[0]));
		
				   }
	
	  }

}