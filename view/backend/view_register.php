<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="public/backend/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="row justify-content-center">
		<div class="col-md-12">
			<!-- card -->		
			<div class="card  border-primary">
				<div class="card card-header bg-primary text-white">Add edit user</div>
				<div class="card-body">
					<form method="post" action="">
						<!-- form group -->
						<div class="form-group">
							<div class="row">
								<div class="col-md-2 text-right">Full name</div>
								<div class="col-md-10">
									<input type="text" name="c_fullname" value="" class="form-control">
								</div>
							</div>
						</div>
						<!-- end form group -->
						<!-- form group -->
						<div class="form-group">
							<div class="row">
								<div class="col-md-2 text-right">Email</div>
								<div class="col-md-10">
									<input required type="email" name="c_email" value="" class="form-control">
								</div>
							</div>
						</div>
						<!-- end form group -->
						<!-- form group -->
						<div class="form-group">
							<div class="row">
								<div class="col-md-2 text-right">Password</div>
								<div class="col-md-10">
	<input type="password" name="c_password" value="" class="form-control">
								</div>
							</div>
						</div>
						<!-- end form group -->
						<!-- form group -->
						<div class="form-group">
							<div class="row">
								<div class="col-md-2 text-right"></div>
								<div class="col-md-10">
									<input type="submit" value="Process" class="btn btn-primary"> <input type="reset" value="Reset" class="btn btn-danger">
								</div>
							</div>
						</div>
						<!-- end form group -->
					</form>
				</div>
			</div>
			<!-- end card -->
		</div>
	</div>
</div>
</body>
</html>