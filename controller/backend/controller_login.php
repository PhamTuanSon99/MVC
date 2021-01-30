<?php
	class controller_login{
		public $model;

		public function __construct(){
			$this->model = new model();

			if ($_SERVER["REQUEST_METHOD"] == "POST") {
				$c_email = $_POST['c_email'];
				$c_password = $_POST['c_password'];
				$c_password = md5($c_password);
				//lay 1 ban ghi vs c_email
				$check = $this->model->fetch_once("select * from tbl_user where c_email = '$c_email'");
				if ($check->c_password == $c_password) {
					$_SESSION['c_email'] = $c_email;
				}
				header("location:admin.php");
			}
			include 'view/backend/view_login.php'; 
		}

	}

	new controller_login();
?>