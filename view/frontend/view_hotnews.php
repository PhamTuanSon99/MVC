<div class="home-blog">
			  <h2 class="title"> <span>Tin tức</span></h2>
			  <div class="row">
				<div class="owl-home-blog owl-home-blog-sidebar"> 
				<?php 
					foreach($arr as $rows)
					{
				 ?>
				  <!-- list hot news -->
				  <div class="item">
					<div class="article"> <a href="index.php?controller=news_detail&id=<?php echo $rows->pk_news_id; ?>" class="image"> <img src="public/upload/news/<?php echo $rows->c_img; ?>" alt="<?php echo $rows->c_name; ?>" title="<?php echo $rows->c_name; ?>" class="img-responsive"> </a>
					  <div class="info">
						<h3><a href="index.php?controller=news_detail&id=<?php echo $rows->c_img; ?>"><?php echo $rows->c_name; ?></a></h3>
						<p class="desc">
						<p><?php echo $rows->c_description; ?></p>
						</p>
					  </div>
					</div>
				  </div>
				  <!-- end list hot news --> 
				  <?php } ?>
				</div>
			  </div>
			</div>