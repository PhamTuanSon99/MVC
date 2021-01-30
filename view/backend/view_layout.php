<!DOCTYPE html>
<html>
<head>
	<title>Admin page</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="public/backend/css/bootstrap.min.css">
  <script type="text/javascript" src="public/backend/ckeditor/ckeditor.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="admin.php?controller=category_product">Danh mục sản phẩm</a>
          </li>
		<li class="nav-item active">
            <a class="nav-link" href="admin.php?controller=product">Sản phẩm</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="admin.php?controller=news">Tin tức</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="admin.php?controller=user">Danh sách người dùng</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="admin.php?controller=support_online">Support Online</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="admin.php?controller=logout">Logout</a>
          </li>
        </ul>        
      </div>
    </nav>
    <div class="container" style="margin-top: 70px;">
    	<?php 
    		if(file_exists($controller) == true)
    			include $controller;
    	 ?>
    </div>
</body>
</html>