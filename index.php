<?php 
	/*
		file index.php
	*/
	session_start();
	//load model
	include "model/model.php";
	//lay bien $_GET["controller"] tu url, sau do gan duong dan de ra duong dan thuc cua file. VD: tren url co controller=logout, khi do se gan duong dan thanh controller_logout.php
	$controller = isset($_GET["controller"])?$_GET["controller"]:"";
	if($controller != "")
		$controller = "controller/frontend/controller_$controller.php";
	else
		$controller = "controller/frontend/controller_home.php";
	//load layout
	include "view/frontend/view_layout.php";
 ?>