<?php
	class controller_add_edit_user{
		public $model;
		public function __construct(){
			$this->model = new model();

			$act = isset($_GET['act'])?$_GET['act']:"";

			switch ($act) {
				case 'add':
					$form_action = "admin.php?controller=add_edit_user&act=do_add";
					break;
				case 'do_add':
					$c_email = $_POST['c_email'];
					$c_password = $_POST['c_password'];
					$c_password = md5($c_password);
					$c_fullname = $_POST['c_fullname'];
					$this->model->add_user($c_email, $c_password, $c_fullname);
					header("location:admin.php?controller=user");
					break;
				case 'edit':
					$id = $_GET['id'];
					//Lay mot ban ghi(de in ra view sua? thong tin)
					$c_user = $this->model->fetch_once("select * from tbl_user where pk_user_id = $id");
					$form_action = "admin.php?controller=add_edit_user&act=do_edit&id=$id";
					break;
				case 'do_edit':
					$pk_user_id = $_GET['id'];
					$c_email = $_POST['c_email'];
					$c_password = $_POST['c_password'];
					$c_fullname = $_POST['c_fullname'];
					$this->model->update_user($pk_user_id, $c_email, $c_password, $c_fullname);
					header("location:admin.php?controller=user");
					break;
			}

			include 'view/backend/view_add_edit_user.php';
		}
	}
	new controller_add_edit_user();
?>