<div class="row justify-content-center">
	<div class="col-md-12">
		<!-- card -->
		<div style="margin:15px 0px">
			<a href="admin.php?controller=add_edit_user&act=add" class="btn btn-primary">Add</a>
		</div>
		<div class="card border-primary">
			<div class="card card-header bg-primary text-white" style="padding:7px !important;">Login</div>
				<div class="card-body">
				<!-- table -->
				<table class="table table-hover table-bordered">
					<tr>
						<th>Họ và tên</th>
						<th>Email</th>
						<th style="width: 150px;"></th>
					</tr>
					<?php
						foreach ($arr as $value) {
					?>
					<tr>
						<td><?php echo $value->c_fullname; ?></td>
						<td><?php echo $value->c_email; ?></td>
						<td style="text-align: center;">
							<a href="admin.php?controller=add_edit_user&act=edit&id=<?php echo $value->pk_user_id ?>">Edit</a>
							&nbsp;&nbsp;
							<a href="admin.php?controller=user&act=delete&id=<?php echo $value->pk_user_id ?>">Delete</a>
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
						<li class="page-item"><a class="page-link" href="admin.php?controller=user&p=<?php echo $i; ?>"><?php echo $i; ?></a></li>
						<?php } ?>
					</ul>
				</div>
			</div>
		</div>
		<!-- end card -->
	</div>
</div>