<?php
/* @var $this ArticleController */

$this->breadcrumbs= $this->breadcrumb_data;
?>

    <div class="main">
        <div class="teachers">
        	<h1>全职外教信息</h1>
            <div class="teachers-main">
								<?php echo ArticleHelper::renderTeacherThumbnail($article, '165', '165'); ?>
                <div class="article">
                	<h1><?php echo $article->name; ?></h1>
                    <ul>
                    	<li><?php echo t('Sex'); ?>：<?php echo t($article->sex);?></li>
                        <li><?php echo t('Nationality');?>：<?php echo t($article->nationality); ?></li>
                        <li><?php echo t('City');?>：<?php echo t($article->city); ?></li>
                    </ul>
											<?php if($article->qualification): ?>
                    	<p><span>Qualification </span><br />
											<?php echo $article->qualification; ?><br />
											<?php endif; ?>

											<?php if($article->achive): ?>
											<span>Academic achievement:</span><br />
											<?php echo $article->achive; ?><br />
											<?php endif; ?>

											<?php if($article->experience): ?>
											<span>Project experience: </span><br />
											<?php echo $article->experience; ?><br />
											<?php endif; ?>
                </div>
                <div style="clear:both"></div>
            </div>
            <div class="teacher-list">
                <ul>
									<?php foreach($nextThree as $row): ?>
                    <li>
                        <div>
                            <a class="a-img" href="" target="_blank">
														<?php echo ArticleHelper::renderTeacherThumbnail($row, '107', '107'); ?>
                            <dl>
                              <dt><a href="<?php echo url('teacher/view/id/'.$row->id); ?>" target="_self"><?php echo $row->name; ?></a></dt>
															<dd><?php echo t('Sex'); ?>：<?php echo t($row->sex);?></dd>
															<dd><?php echo t('Nationality');?>：<?php echo t($row->nationality); ?></dd>
															<dd><?php echo t('City');?>：<?php echo t($row->city); ?></dd>
                            </dl>
                        </div>
                    </li>
										<?php endforeach; ?>
                </ul>
                <div style="clear:both"></div>
            </div>
        </div>
    </div>

	<?php
		$this->widget('application.components.CContactForm', array(
		));
	?>