<?php

class TeacherController extends MController
{

	public $layout = '//layouts/article-list';


	public function actionList($cid = null)
	{

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
}