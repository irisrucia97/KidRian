<?php
$db_con=mysqli_connect("203.250.133.87","s1920","1920","s1920_db");
$upload_dir="upload/";
$upload_file=$upload_dir.$_FILES['file']['name'];

move_uploaded_file($_FILES['file']['tmp_name'],$upload_file);

$result=mysqli_query($db_con, "select * from movie where id={$_GET[id]}");
$row= mysqli_fetch_array($result);
echo "<div align=center style='background:cornsilk;'>{$row[moviename]}</div>";
echo "<div align=left style='background:blanchedalmond;'>작성자 : {$row[name]}</div>";
echo "<div align=left style='background:blanchedalmond;'>영화소개 : {$row[message]}</div><br>";
echo "첨부파일 : <a href= {$upload_file}>{$_FILES[file][name]}</a><br>";
echo "<a href=table.php>목 록</a> <a href=del.php?id={$_GET[id]}>삭 제</a>";

mysqli_query($db_con, "update movie set count=count+1 where id={$_GET[id]}");
mysqli_close($db_con);
?>
