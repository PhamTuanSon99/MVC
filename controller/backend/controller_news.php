<?php
	class controller_news{
		public $model;
		public function __construct(){
			$this->model = new model();

			$act = isset($_GET["act"])?$_GET["act"]:"";
			switch ($act) {
				case 'delete':
					$id = isset($_GET["id"])?$_GET["id"]:0;
					$delete_img = $this->model->fetch_once("select c_img from tbl_news where pk_news_id=$id");
					if(file_exists("public/upload/news/".$delete_img->c_img)){
							unlink("public/upload/news/".$delete_img->c_img);
					}
					$this->model->execute("delete from tbl_news where pk_news_id=$id");
					header("location:admin.php?controller=news");
					break;
			}

			$record_per_page = 4;
			$total = $this->model->count("select * from tbl_news");
			$num_page = ceil($total/$record_per_page);
			$page = isset($_GET["p"])&&$_GET["p"]>0?$_GET["p"]-1:0;
			$from = $page*$record_per_page;
			$arr = $this->model->fetch("select * from tbl_news order by pk_news_id desc limit $from,$record_per_page");

			include 'view/backend/view_news.php';
		}

	}
	new controller_news();
?>