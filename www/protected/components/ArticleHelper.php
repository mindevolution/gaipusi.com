<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ArticleHelper
 *
 * @author peniel
 */
class ArticleHelper
{
	static public function getImageRealPath(CActiveRecord $article)
	{
		return Yii::getPathOfAlias('images').DS.$article->pic;
	}

	static public function hasImage(CActiveRecord $article)
	{
		return is_file(ArticleHelper::getImageRealPath($article));
	}

	static public function renderThumbnail(CActiveRecord $article, $width, $height)
	{
		if(is_file(ArticleHelper::getImageRealPath($article)))
		{
			$image = Yii::app()->image->load(ArticleHelper::getImageRealPath($article));
			$image->smart_resize($width, $height)->quality(95)->sharpen(20);
			$image->save(dirname(ArticleHelper::getImageRealPath($article)).'/thumbnail/'.$article->pic);
			return CHtml::image(bu().DS.'images/thumbnail/'.$article->pic, $article->title);
		}	
	}
}

?>
