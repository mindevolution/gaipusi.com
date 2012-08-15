<?php
<<<<<<< HEAD
$this->breadcrumbs = array(
	'文章列表'
);
=======
$this->breadcrumbs = $this->breadcrumb_data;
>>>>>>> fbacca4f68a0bbba83a869759a26610c9322ab9d
?>
    <div class="main">
        <div class="yinghui-block">
        	<dl>
            	<dt><h1>最新营会活动</h1><span class="more"><a href="" target="_self" >更多&nbsp;>></a></span></dt>
                <dd>
                	<ul>
     									<?php foreach($articles as $article):?>
                    	<li>
                        	<a href="<?php echo url('article/view/id/'.$article->id); ?>" target="_blank" class="pic" ><img src="img/pic-yinghui.jpg" width="217"  /></a>
                            <h1><?php echo $article->title; ?></h1>
                            <p><?php // echo $article->description; ?></p>
                            <h6><a href="<?php echo url('article/view/id/'.$article->id); ?>" target="_blank">了解详情&gt;&gt;</a></h6>
                        </li>
												<?php endforeach; ?>
                    </ul>
                </dd>
            </dl>
        </div>
        <div class="yinghui-block block-last">
        	<dl>
            	<dt><h1>往期营会活动</h1><span><a href="" target="_self" >更多&nbsp;>></a></span></dt>
                <dd>
                	<ul>
                    	<li>
                        	<a href="" target="_blank" class="pic" ><img src="img/pic-yinghui.jpg" width="217"  /></a>
                            <h1>2009年圣诞晚会</h1>
                            <p>2009年圣诞晚会圆满的在本校举行，在活动期间，学生、家长和教师们都表现出了极大的热的表演活动。</p>
                            <h6><a href="" target="_blank">了解详情&gt;&gt;</a></h6>
                        </li>
                        <li>
                        	<a href="" target="_blank" class="pic" ><img src="img/pic-yinghui.jpg" width="217"  /></a>
                            <h1>2009年圣诞晚会</h1>
                            <p>2009年圣诞晚会圆满的在本校举行，在活动期间，学生、家长和教师们都表现出了极大的热的表演活动。</p>
                            <h6><a href="" target="_blank">了解详情&gt;&gt;</a></h6>
                        </li>
                        <li class="li-last">
                        	<a href="" target="_blank" class="pic" ><img src="img/pic-yinghui.jpg" width="217"  /></a>
                            <h1>2009年圣诞晚会</h1>
                            <p>2009年圣诞晚会圆满的在本校举行，在活动期间，学生、家长和教师们都表现出了极大的热的表演活动。</p>
                            <h6><a href="" target="_blank">了解详情&gt;&gt;</a></h6>
                        </li>
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