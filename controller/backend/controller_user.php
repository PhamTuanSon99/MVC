<?php
	class controller_user{
		public $model;

		public function __construct(){
			$this->model = new model();

			$act = isset($_GET['act'])?$_GET['act']:"";

			switch ($act) {
				case 'delete':
					$id = $_GET['id'];
					$this->model->delete_user($id);
					header("location:admin.php?controller=user");
					break;
			}
			//--------
			//so ban ghi tren mot trang
			$record_per_page = 4;
			//tinh tong so ban ghi
			$total = $this->model->count("select * from tbl_user");
			//tinh so trang = tongsobanghi/sobanghitrenmottrang
			$num_page = ceil($total/$record_per_page);
			//lay bien trang tu url
			$page = isset($_GET["p"])&&$_GET["p"]>0?$_GET["p"]-1:0;
			//lay tu ban ghi bao nhieu tuong ung trang bao nhieu = tranghientai * soluongbanghi
			$from = $page*$record_per_page;
			//lay tat ca cac ban ghi bang ham fetch
			$arr = $this->model->fetch("select * from tbl_user order by pk_user_id desc limit $from,$record_per_page");
			//--------
			//load view
			//$data = $this->model->fetch("select * from tbl_user");
			include 'view/backend/view_user.php';
		}
	}
	new controller_user();
?>