<div class="row justify-content-center">
	<div class="col-md-12">
		<!-- card -->
		<div style="margin:15px 0px">
			<a href="admin.php?controller=add_edit_product&act=add" class="btn btn-primary">Thêm mới</a>
		</div>
		<div class="card border-primary">
			<div class="card card-header bg-primary text-white" style="padding:7px !important;">Danh mục sản phẩm</div>
				<div class="card-body">
				<!-- table -->
				<table class="table table-hover table-bordered">
					<tr>
						<th style="width: 100px;">Ảnh</th>
						<th>Tiêu đề</th>
						<th style="width: 150px;">Danh mục</th>
						<th style="width: 120px;">Tin nổi bật</th>
						<th style="width: 150px;"></th>
					</tr>
				<?php 
					foreach($arr as $rows)
					{
				 ?>
					<tr>
						<td>
						<!-- ham file_exists(duongdan) kiem tra xem mot file co ton tai hay khong, tra ve true hoac false -->
							<?php if(file_exists("public/upload/product/".$rows->c_img)){ ?>
							<img src="public/upload/product/<?php echo $rows->c_img; ?>" style="max-width: 100px;">
							<?php } ?>
						</td>
						<td><?php echo $rows->c_name; ?></td>
						<td>
							<?php 
								//lay 1 ban ghi
								$category = $this->model->fetch_once("select * from tbl_category_product where pk_category_product_id=".$rows->fk_category_product_id);
								echo isset($category->c_name)?$category->c_name:"";
							 ?>
						</td>
						<td style="text-align: center;">
							<?php if($rows->c_hotproduct == 1){ ?>
							Hot
							<?php } ?> 
						</td>
						<td style="text-align: center;">
							<a href="admin.php?controller=add_edit_product&act=edit&id=<?php echo $rows->pk_product_id; ?>">Edit</a>
							&nbsp;&nbsp;
							<a href="admin.php?controller=product&act=delete&id=<?php echo $rows->pk_product_id; ?>">Delete</a>
						</td>
					</tr>
				<?php } ?>
				</table>
				<!-- end table -->
				</div>
				<div class="card-footer" style="padding:7px !important">
					<ul class="pagination">
						<li class="page-item"><a class="page-link" href="#">Trang</a></li>
						<?php 
							for($i = 1; $i <= $num_page; $i++)
							{
						 ?>
						<li class="page-item"><a class="page-link" href="admin.php?controller=product&p=<?php echo $i; ?>"><?php echo $i; ?></a></li>
						<?php } ?>
					</ul>
				</div>
			</div>
		</div>
		<!-- end card -->
	</div>
</div>