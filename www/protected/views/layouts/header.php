<div id="page_header">
	<div id="logo">
		<a href="<?php echo bu(); ?>"><img class="png" src="img/logo.png" width="468" height="74" alt="" /></a>
	</div>

	<div class="nav png">
            <?php $this->widget('zii.widgets.CMenu',array(
                                'items'=>$this->navigation, 
                        )); ?>
    </div>

</div>