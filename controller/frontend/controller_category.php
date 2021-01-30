<?php
	class controller_category{
		public $model;

		public function __construct(){
			$this->model = new model();

			$arr = $this->model->fetch("select * from tbl_category_product");
			include 'view/frontend/view_category.php';
		}
	}
	new controller_category();
?>