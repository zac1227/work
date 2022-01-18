<?php
	 $id = $_GET['id'];
	 $account = $_GET['account'];
	 if(isset($_POST["id"])){
		 $id = $_POST["id"];
		 $account = $_POST["account"];
		 $manager_pasw = $_POST["manager_pasw"];
		 $categories = $_POST["categories"];
		 $mananger_name = $_POST["manager_name"];
		 $manager_dept = $_POST["manager_dept"];
		 include "dblink.php";
		 $sql = "UPDATE `teacher` SET `account` = '$account', `manager_dept` = '$manager_dept', `categories` = '$categories', `manager_pasw` = '$manager_pasw' WHERE `teacher`.`id` = $id";
		 $result = mysqli_query($link, $sql);
		 echo "<script>alert('您已修改此筆資料!'); location.href = 'manedit.php';</script>";
		 mysqli_close($link);
		 }
?>