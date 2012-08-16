<div class="side">
    	<div class="nav-side">
        	<h2><img src="img/bg-title-l.png" width="32" height="16" class="png" /><?php echo $this->category->name; ?><img src="img/bg-title-r.png" width="32" height="16" class="png" /></h2>
         <?php $this->widget('zii.widgets.CMenu',array(
                                'items'=>$this->sub_category,
                                
                        )); ?>
        </div>
				<?php echo CHtml::beginForm(url('article/search'), 'get'); ?>
				<?php echo CHtml::textField('search'); ?>
			<?php echo CHtml::endForm(); ?>
    	<ul>
        	<li>
            	<dl>
                	<dt><h2><img src="img/bg-title-l.png" width="32" height="16" class="png" />招生信息<img src="img/bg-title-r.png" width="32" height="16" class="png" /></h2></dt>
                        <?php foreach($this->recuitments as $row):?>
                        
                            <dd><?php echo l(nl2br($row->title), 'article/view/id/'.$row->id)?></dd>
                        
                          <?php endforeach;?>
                        
                </dl>
            </li>
            <li>
            	<dl>
                	<dt><h2><img src="img/bg-title-l.png" width="32" height="16" class="png" />招聘信息<img src="img/bg-title-r.png" width="32" height="16" class="png" /></h2></dt>
                   <?php foreach($this->invites as $value):?>
                    <dd><?php echo l(nl2br($value->title), 'article/view/id/'.$value->id)?></dd>
                    <?php endforeach;?>
                </dl>
            </li>
            <li>
            	<dl>
                	<dt><h2><img src="img/bg-title-l.png" width="32" height="16" class="png" />联系我们<img src="img/bg-title-r.png" width="32" height="16" class="png" /></h2></dt>
                    <dd>
                         <?php foreach($this->connect as $rows):?>
                    	<p>QQ:<?php echo $rows->QQ;?></p>
                        <p>电话：<?php echo $rows->phone;?></p>
                        <p>邮箱：<?php echo $rows->email;?></p>
                        <p>地址：<?php echo $rows->address;?></p>
                        <p>邮编：<?php echo $rows->youbian;?></p>
                        <?php endforeach;?>
                    </dd>
                </dl>
            </li>
        </ul>
        <div class="zixun"><a href="" target="">在线咨询</a></div>
    </div>