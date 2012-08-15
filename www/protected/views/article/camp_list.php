<?php
$this->breadcrumbs = $this->breadcrumb_data;
?>
    <div class="main">
        <div class="yinghui-block">
        	<dl>
            	<dt><h1>最新营会活动</h1><span class="more"><a href="" target="_self" >更多&nbsp;>></a></span></dt>
                <dd>
                	<ul>
     									<?php foreach($articles as $article):?>
                    	<li>
											<?php if(ArticleHelper::hasImage($article)): ?>
												<a class="pic" href="<?php echo url('article/view/id/'.$article->id); ?>" target="_blank">
													<?php echo ArticleHelper::renderThumbnail($article, '217', '150'); ?>
												</a>
											<?php endif; ?>
                            <h1><?php echo $article->title; ?></h1>
                            <p><?php echo mb_substr(strip_tags($article->body), 0, 50, 'UTF-8'); ?>...</p>
                            <h6><a href="<?php echo url('article/view/id/'.$article->id); ?>" target="_blank">了解详情&gt;&gt;</a></h6>
                        </li>
												<?php endforeach; ?>
                    </ul>
                </dd>
            </dl>
        </div>
        <div class="page">
        	<ul>
            	<li class="Wider"><a href="" target="_self">&lt;&lt;</a></li>
                <li><a href="" target="_self">&lt;</a></li>
                <li><a href="" target="_self">1</a></li>
                <li><a href="" target="_self">2</a></li>
                <li><a href="" target="_self">3</a></li>
                <li><a href="" target="_self">...</a></li>
                <li><a href="" target="_self">&gt;</a></li>
                <li class="Wider"><a href="" target="_self">&gt;&gt;</a></li>
            </ul>
        </div>
    </div>