<?php
$name=$_POST[name];
$mv=$_POST[mv];
$memo=$_POST[memo];
$pwd=$_POST[pass];
$date=date("Y-m-d");
$db_con=mysqli_connect("localhost","s1920","1920","s1920_db");
$upload_dir="upload/";
$upload_file=$upload_dir.$_FILES['file']['name'];
move_uploaded_file($_FILES['file']['tmp_name'],$upload_file);
$i=$_FILES['file']['name'];
$result=mysqli_query($db_con, "insert into movie(name, moviename,message ,pass,date, count) values('$name', '$mv','$memo','$pwd','$date', 0)");
echo "<meta http-equiv='Refresh' content='2;URL=table.php'>";
mysqli_close($db_con);
?>