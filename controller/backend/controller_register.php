<?php
	class controller_register{
		public $model;

		public function __construct()
		{
			$this->model = new model();

			$c_fullname = isset($_POST["c_fullname"])?$_POST["c_fullname"]:"";
			$c_email = isset($_POST["c_email"])?$_POST["c_email"]:"";
			$c_password = isset($_POST["c_password"])?$_POST["c_password"]:"";
			$c_password = md5($c_password);
			$this->model->add_user($c_email, $c_password, $c_fullname);
			$c_user = $this->model->fetch_once("select * from tbl_user where c_email = '$c_email' and c_password = '$c_password' and c_fullname = '$c_fullname'");
			if(isset($c_user) == true)
			{
				$_SESSION["c_email"] = $c_user->c_email;
				//header("location:admin.php");
			}
			include "view/backend/view_register.php";
		}
	}
	new controller_register();
?>