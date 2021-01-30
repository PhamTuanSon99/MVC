<?php 
	class controller_home{
		public $model;
		public function __construct(){
			$this->model = new model();
			//lay cac san pham noi bat trong tbl_product -> c_hotproduct = 1
			$hotproduct = $this->model->fetch("select * from tbl_product where c_hotproduct=1 order by pk_product_id desc limit 0,8");
			//lay cac san pham moi
			$newproduct = $this->model->fetch("select * from tbl_product order by pk_product_id desc limit 0,4");
			//load view
			include "view/frontend/view_home.php";
		}
	}
	new controller_home();
 ?>