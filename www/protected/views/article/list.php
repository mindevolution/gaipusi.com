<?php
$this->breadcrumbs = array(
	'文章列表'
);
?>
 <div class="main">
    
     <?php foreach($articles as $article):?>
        <div class="article-list">
        	<ul>
            	<li>
                	<a href="" target="_blank"><img src="img/pic-article-list.jpg" width="113" height="84" /></a>
                    <div class="article">
                    	<h2><a href="" target="_blank"><?php echo l(nl2br($article->title), 'article/view/id/'.$article->id); ?></a></h2>
                        <h6>撰稿人：<span class="writter"><?php echo $article->author;?></span>&nbsp;&nbsp;浏览次数：<span class="number"><?php echo $article->hits;?></span>&nbsp;&nbsp;发布日期：<span class="day"><?php echo $article->datetime;?></span> </h6>
                        <p><?php echo $article->body;?></p>
                    </div>
                    <div class="clear"></div>
                </li>
            </ul>
        </div>
     <?php endforeach;?>
        <div class="page">
        	<?php
                    $this->widget('CLinkPager',array(
                        'pages'=>$pages,
                            )
                            );
		?>
        </div>
    </div>