<div class="online_support block">
			  <div class="new_title">
				<h2>Hỗ trợ trực tuyến</h2>
			  </div>
			  <div class="block-content">
			  <?php 
			  	foreach($arr as $rows)
			  	{
			   ?>
				<div class="sp_1">
				  <p><?php echo $rows->c_name; ?></p>
				  <p><?php echo $rows->c_contact; ?></p>
				</div>
				<?php } ?>
				
			  </div>
			</div>