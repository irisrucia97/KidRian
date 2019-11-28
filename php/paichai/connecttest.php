<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <title>MySql-PHP 연결 테스트</title>
</head>
<body>
 
<?php
echo "MySql 연결 테스트<br>";
 
$db = mysqli_connect("localhost", "root", "irisrucia97", "kidrian","59789");
 
if($db){
    echo "connect : 성공<br>";
}
else{
    echo "disconnect : 실패<br>";
}
$signup=mysqli_query($db,"INSERT INTO user_info (userid,userpw,name,email)
VALUES ('a','a','a','a')");
$result = mysqli_query($db, 'SELECT VERSION() as VERSION');
$data = mysqli_fetch_assoc($result);
echo $data['VERSION'];
?>
 
</body>
</html>