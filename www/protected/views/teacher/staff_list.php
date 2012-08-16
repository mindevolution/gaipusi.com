<?php
$this->breadcrumbs = $this->breadcrumb_data;
?>
<<<<<<< HEAD
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
                    	<h2><?php echo l(nl2br($article->name), 'article/view/id/'.$article->id); ?></h2>
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
=======
        <div class="teachers">
        	<h1>全职外教信息</h1>
					<br/> <br/>
            <ul>
							<?php foreach ($articles as $k => $article): 
								$class = "";
								if($k%3 == 0 && $k) {
									$class = 'li-last';
								}
								?>
            	<li class="<?php echo $class; ?>">
                    <div>
                        <?php if(ArticleHelper::hasImage($article)): ?>
                	<a class="list-img" href="<?php echo url('teacher/view/id/'.$article->id); ?>" target="_blank">
										<?php echo ArticleHelper::renderTeacherThumbnail($article, '107', '107'); ?>
									</a>
								<?php endif; ?>
                        <dl>
                            <dt><?php echo l($article->name, 'teacher/view/id/'.$article->id); ?></dt>
                            <dd>性别：女</dd>
                            <dd>国籍：Australian</dd>
                            <dd>现在城市：<br />河北&nbsp;&nbsp;石家庄</dd>
                        </dl>
                    </div>
                </li>
								<?php endforeach; ?>
            </ul>
            <div style="clear:both"></div>
        </div>
>>>>>>> 07c0e3d5674336a923c984e17795eb42ae42542e
