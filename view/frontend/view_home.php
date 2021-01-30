<div class="owl-slider">
				<div class="item"> 
				  <!-- ============================ -->
				  <div id="myCarousel" class="carousel slide" data-ride="carousel"> 
					<!-- Indicators -->
					<ol class="carousel-indicators">
					  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					  <li data-target="#myCarousel" data-slide-to="1"></li>
					  <li data-target="#myCarousel" data-slide-to="2"></li>
					  <li data-target="#myCarousel" data-slide-to="3"></li>
					</ol>

					<!-- Wrapper for slides -->
					<div class="carousel-inner">
					  <div class="item active"> <img src="public/frontend/images/la.jpg" alt="Los Angeles"> </div>
					  <div class="item"> <img src="public/frontend/images/slideshow1221b.jpg" alt="Los Angeles"> </div>
					  <div class="item"> <img src="public/frontend/images/chicago.jpg" alt="Chicago"> </div>
					  <div class="item"> <img src="public/frontend/images/ny.jpg" alt="New York"> </div>
					</div>

					<!-- Left and right controls --> 
				  </div>
				  <!-- ============================ --> 
				</div>
			  </div>


			<div class="special-collection">
			  <div class="tabs-container">
				<div class="clearfix">
				  <h2>Sản phẩm nổi bật</h2>
				</div>
			  </div>
			  <div class="tabs-content row">
				<div id="content-tabb1" class="content-tab content-tab-proindex" style="display:none">
				  <div class="clearfix"> 
				<?php 
					foreach($hotproduct as $rows)
					{
				 ?>
					<!-- box product -->
					<div class="col-xs-6 col-md-3 col-sm-6 ">
					  <div class="product-grid" id="product-1168979">
						<div class="image"> <a href="index.php?controller=product_detail&id=<?php echo $rows->pk_product_id; ?>"><img src="public/upload/product/<?php echo $rows->c_img; ?>" title="<?php echo $rows->c_name; ?>" alt="<?php echo $rows->c_name; ?>" class="img-responsive"></a> </div>
						<div class="info">
						  <h3 class="name"><a href="index.php?controller=product_detail&id=<?php echo $rows->pk_product_id; ?>"><?php echo $rows->c_name; ?></a></h3>
						  <p class="price-box"> <span class="special-price"> <span class="price product-price"> <?php echo number_format($rows->c_price); ?> </span> </span> </p>
						  <div class="action-btn">
							<form action="cart/add" method="post" enctype="multipart/form-data" id="product-actions-1168979">
							  <a href="index.php?controller=product_detail&id=<?php echo $rows->pk_product_id; ?>" class="button">Chi tiết</a>
							</form>
						  </div>
						</div>
					  </div>
					</div>
					<!-- end box product --> 
				<?php } ?>
					 

				  </div>
				</div>
			  </div>
			</div>
			<div class="wrapper-tab-collections" style="margin-top:0px;">
			  <div class="tabs-container">
				<ul class="list-unstyled">
				  <li><a href="#content-taba1" class="head-tabs head-tab1" data-src=".head-tab1">
					<h2>Sản phẩm mới</h2>
					</a></li>
				</ul>
			  </div>
			  <div class="tabs-content row">
				<div id="content-taba4" class="content-tab content-tab-proindex"> 

				  <?php 
					foreach($newproduct as $rows)
					{
				 ?>
					<!-- box product -->
					<div class="col-xs-6 col-md-3 col-sm-6 ">
					  <div class="product-grid" id="product-1168979">
						<div class="image"> <a href="index.php?controller=product_detail&id=<?php echo $rows->pk_product_id; ?>"><img src="public/upload/product/<?php echo $rows->c_img; ?>" title="<?php echo $rows->c_name; ?>" alt="<?php echo $rows->c_name; ?>" class="img-responsive"></a> </div>
						<div class="info">
						  <h3 class="name"><a href="index.php?controller=product_detail&id=<?php echo $rows->pk_product_id; ?>"><?php echo $rows->c_name; ?></a></h3>
						  <p class="price-box"> <span class="special-price"> <span class="price product-price"> <?php echo number_format($rows->c_price); ?> </span> </span> </p>
						  <div class="action-btn">
							<form action="cart/add" method="post" enctype="multipart/form-data" id="product-actions-1168979">
							  <a href="index.php?controller=product_detail&id=<?php echo $rows->pk_product_id; ?>" class="button">Chi tiết</a>
							</form>
						  </div>
						</div>
					  </div>
					</div>
					<!-- end box product --> 
				<?php } ?> 





				</div>
			  </div>
			</div>