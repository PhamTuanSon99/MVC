<?php
	class controller_logout{
		public function __construct(){
			unset($_SESSION['c_email']);
			header("location:admin.php");
		}
	}
	new controller_logout();
?>