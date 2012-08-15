<?php
/* @var $this ArticleController */

$this->breadcrumbs= $this->breadcrumb_data;
?>

    <div class="main">
        
        <div class="article">
        	<h1><?php echo $article->title;?></h1>
            <h6>作者：<span class="writer"><?php echo $article->author;?></span>&nbsp;&nbsp;浏览次数：<span class="number"><?php echo $article->hits;?></span>&nbsp;&nbsp;发布日期：<span class="day"><?php echo $article->datetime;?></span> </h6>
            <p><?php echo $article->body;?><p> 
        </div>
        <ul class="xiangguan">
					<?php foreach ($pagePreNext as $v): ?>
        	<li><?php echo $v; ?></li>
					<?php endforeach; ?>
        </ul>
        <div class="clear"></div>
        <div class="liuyan">
        	<h1>我要留言</h1>
            <form>
            	<ul>
                	<li class="name"><p>姓名(name)：</p><input type="text" id="name" value="您的姓名" /></li>
                    <li class="email"><p>邮箱(Email)：</p><input type="text" id="email" value="您的邮箱" /></li>
                    <li class="messages"><p>内容(messages):</p><input type="textarea" id="messages" value="您想要提交的内容" /></li>
                    <li class="tijiao"><input type="submit" id="submit" value="提交" /><input type="reset" id="reset" value="重置" /></li>
                </ul>
            </form>
            <div class="clear"></div>.
        </div>
    </div>

	<?php
		$this->widget('application.components.CContactForm', array(
		));
	?>