<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of NavHelper
 *
 * @author peniel
 */
class CategoryHelper
{

	/**
	 * get category by current url
	 * @return Category
	 */
	static public function getCategory($cid)
	{
		if ($cid == null)
		{
			$category = false;
		} else
		{
			$category = Category::model()->findByPk($cid);
			if ($category->parent_id)
			{
				$category = Category::model()->findByPk($category->parent_id);
			}
		}
		return $category;
	}

	/**
	 * Get sub category 
	 */
	static public function getSubCategory($parent_id)
	{
		return Category::model()->findAll('parent_id = :p_id', array(':p_id' => $parent_id));
	}

	static public function menuItems($categories)
	{
		$data = array();
		foreach ($categories as $val)
		{
			$data[] = array(
				'label' => $val->name,
				'url' => url('article/list/cid/' . $val->id),
			);
		}
		return $data;
	}

	static public function isRootCategory($cid)
	{
		$category = Category::model()->findByPk($cid);
		return !$category->parent_id;
	}

	static public function getBreadcrumb($cid)
	{
		$breadcrumb = array();
		$category = Category::model()->findByPk($cid);
		$breadcrumb[] = $category->name;
		if(!self::isRootCategory($cid)) {
			$category_parent = Category::model()->findByPk($category->parent_id);
			array_unshift($breadcrumb, $category_parent->name);
		}
		
		return $breadcrumb;
	}

}

?>
