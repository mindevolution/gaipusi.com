	<div id="logo">
		<img class="png" src="img/logo.png" width="468" height="74" alt="" />
	</div>
        <?php foreach($category as $i => $cate):?>
	<div class="nav png">
        <ul>
			<li><a href="#"><?php echo $cate->name;?></a>|
                            <?php foreach($category_child[$i] as $child):?>
            	<!--<ul>
                	<li class="first"><a href="" target="_blank"><?php echo $child->name;?></a></li>
                </ul>-->
                             <?php endforeach;?>
            </li>
            
	</ul>
        <?php endforeach;?>
    </div>

