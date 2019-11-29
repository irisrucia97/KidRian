<?php
$id=$_POST['id'];
$pw=$_POST['pw'];
$pwc=$_POST['pwc'];
$name=$_POST['name'];
$email=$_POST['email'];
if($pw!=$pwc) //비밀번호와 비밀번호 확인 문자열이 맞지 않을 경우
{
    echo "비밀번호와 비밀번호 확인이 서로 다릅니다.";
    echo "<a href=signup.html>back page</a>";
    exit();
}
if($id==NULL || $pw==NULL || $name==NULL || $email==NULL) //빈칸 체크
{
    echo "빈 칸을 모두 채워주세요";
    echo "<a href=signup.html>back page</a>";
    exit();
}
 
$db=mysqli_connect("localhost","root","irisrucia97","kidrian");
 
$check="SELECT * from user_info WHERE userid=$id";
$result=mysqli_query($db,$check);

if($result)
{
    echo "중복된 id입니다.";
    echo "<a href=signUp.html>back page</a>";
    exit();
}

$sigup_result = mysqli_query($db,"INSERT INTO user_info(userid,userpw,name,email)
VALUES ('$id','$pw','$name','$email')");


 
?>
