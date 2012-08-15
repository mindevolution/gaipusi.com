<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CssHelper
 *
 * @author peniel
 */
class CssHelper
{
	//put your code here
	static public function addListCss(CActiveRecord $category)
	{
		switch($category->list_layout) {
			case 'News List':
        add_css('css/article-list.css');
				break;
			case 'Camp List':
        add_css('css/yinghui-list.css');
				break;
		}
	}
}

?>
