<?php
$this->breadcrumbs = $this->breadcrumb_data;
?>
 <div class="main">
    
     <?php foreach($articles as $article):?>
        <div class="article-list">
        	<ul>
            	<li>
								<?php if(ArticleHelper::hasImage($article)): ?>
                	<a class="list-img" href="<?php echo url('article/view/id/'.$article->id); ?>" target="_blank">
										<?php echo ArticleHelper::renderThumbnail($article, '113', '84'); ?>
									</a>
								<?php endif; ?>
                    <div class="article">
                    	<h2><?php echo l(nl2br($article->title), 'article/view/id/'.$article->id); ?></h2>
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