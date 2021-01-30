<?php
	class controller_add_edit_product{
		public $model;

		public function __construct()
		{
			$this->model = new model();

			$act = isset($_GET['act'])?$_GET['act']:"";

			switch ($act) {
				case 'add':
					$form_action = 'admin.php?controller=add_edit_product&act=do_add';
					break;

				case 'do_add':
					$c_name = $_POST['c_name'];
					$c_price = $_POST['c_price'];
					$fk_category_product_id = $_POST['fk_category_product_id'];
					$c_description = $_POST['c_description'];
					$c_content = $_POST['c_content'];
					$c_hotproduct = isset($_POST['c_hotproduct'])?1:0;
					$c_img = "";

					if($_FILES["c_img"]["name"] != "")
					{
						$c_img = $_FILES["c_img"]["name"];
						$c_img = time().$c_img;
						$tmp_name = $_FILES["c_img"]["tmp_name"];
						move_uploaded_file($tmp_name, "public/upload/product/$c_img");
					}
					// if($_FILES["c_img"]["name"] != ""){
					// 	$c_img = $_FILES["c_img"]["name"];
					// 	$c_img = time().$c_img;
					// 	$tmp_name = $_FILES["c_img"]["tmp_name"];
					// 	move_uploaded_file($tmp_name,"public/upload/product/$c_img");
					// }
					$this->model->execute("insert into tbl_product(c_name,c_description,c_content,c_img,c_hotproduct,fk_category_product_id,c_price) values('$c_name','$c_description','$c_content','$c_img',$c_hotproduct,$fk_category_product_id,$c_price)");
					header('location:admin.php?controller=product');
					break;

				case 'edit':
					$id = isset($_GET["id"])&&is_numeric($_GET["id"])?$_GET["id"]:0;
					$arr = $this->model->fetch_once("select * from tbl_product where pk_product_id = $id");
					$form_action = "admin.php?controller=add_edit_product&act=do_edit&id=$id";
					break;

				case 'do_edit':
					$id = isset($_GET["id"])&&is_numeric($_GET["id"])?$_GET["id"]:0;
					$c_name = $_POST['c_name'];
					$c_price = $_POST['c_price'];
					$fk_category_product_id = intval($_POST["fk_category_product_id"]);
					$c_description = $_POST["c_description"];
					$c_content = $_POST["c_content"];
					$c_hotproduct = isset($_POST["c_hotproduct"])?1:0;
					$c_img = "";

					$this->model->execute("update tbl_product set c_name='$c_name',c_description='$c_description',c_content='$c_content',c_hotproduct=$c_hotproduct,fk_category_product_id=$fk_category_product_id,c_price=$c_price where pk_product_id=$id");

					if($_FILES["c_img"]["name"] != "")
					{
						$delete_img = $this->model->fetch_once("select c_img from tbl_product where pk_product_id=$id");
						if(file_exists("public/upload/product/".$delete_img->c_img)){
							unlink("public/upload/product/".$delete_img->c_img);
							$c_img = $_FILES["c_img"]["name"];
							$c_img = time().$c_img;
							$tmp_name = $_FILES["c_img"]["tmp_name"];
							move_uploaded_file($tmp_name,"public/upload/product/$c_img");
							$this->model->execute("update tbl_product set c_img='$c_img' where pk_product_id=$id");
						}
					}

					header("location:admin.php?controller=product");
					break;
			}
			include 'view/backend/view_add_edit_product.php';
		}
	}
	new controller_add_edit_product();
?>