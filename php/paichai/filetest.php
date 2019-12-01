<?php
	$db_con=mysqli_connect("203.250.133.87","s1920","1920","s1920_db");
	$upload_dir="upload/";
	$upload_file=$upload_dir.$_FILES['file']['name'];
	echo $_FILES['file']['name'];
	move_uploaded_file($_FILES['file']['tmp_name'],$upload_file);
?>