<?php 
	class controller_hotnews{
		public $model;
		public function __construct(){
			$this->model = new model();
			//lay cac ban ghi trong tbl_news co c_hotnews = 1
			$arr = $this->model->fetch("select * from tbl_news order by pk_news_id desc");
			//load view
			include "view/frontend/view_hotnews.php";
		}
	}
	new controller_hotnews();
 ?>