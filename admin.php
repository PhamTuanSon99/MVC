<?php
	session_start();

	include 'model/model.php';

	//kiem tra dang nhap, neu chua co du lieu thi yeu cau dang nhap
	//var_dump(isset($_SESSION["c_email"])); die;
	if (isset($_SESSION["c_email"]) == false) {
		$controller = isset($_GET["controller"])?$_GET["controller"]:"";
		if($controller != "")
		{
			include "controller/backend/controller_$controller.php";
		}else
		{
			include "controller/backend/controller_login.php";
		}
	}else{
		$controller = isset($_GET["controller"])?$_GET["controller"]:"";
		if ($controller != "") {
			$controller = "controller/backend/controller_$controller.php";
		}

		include 'view/backend/view_layout.php';
	}
?>