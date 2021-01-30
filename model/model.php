<?php
	include_once 'config.php';

	class model{
		//Lay tat ca cac ban ghi
		function fetch($sql){
			global $db;
			$result = mysqli_query($db, $sql);

			$arr = array();

			while($rows = mysqli_fetch_object($result))
			{
				$arr[] = $rows;
			}

			return $arr;
		}

		//Lay mot ban ghi
		function fetch_once($sql){
			global $db;
			$result = mysqli_query($db, $sql);

			$rows = mysqli_fetch_object($result);

			return $rows;
		}

		//Dem so ban ghi
		function count($sql){
			global $db;

			$result = mysqli_query($db, $sql);
			$count = mysqli_num_rows($result);

			return $count;
		}

		//Ham thuc thi truy van
		function execute($sql){
			global $db;

			if (mysqli_query($db, $sql) == true) {
				return mysqli_insert_id($db);
			}

			return 0;
		}

		function delete_user($id)
		{
			global $db;
			mysqli_query($db, "delete from tbl_user where pk_user_id=$id");
		}

		function add_user($c_email, $c_password, $c_fullname)
		{
			global $db;
			mysqli_query($db, "insert into tbl_user(c_email, c_password, c_fullname) values('$c_email', '$c_password', '$c_fullname')");
			
		}

		function update_user($pk_user_id, $c_email, $c_password, $c_fullname)
		{
			global $db;
			mysqli_query($db, "update tbl_user set c_email = '$c_email', c_password = '$c_password', c_fullname = '$c_fullname' where pk_user_id = $pk_user_id");
		}
	}
?>