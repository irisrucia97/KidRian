<?php
session_start();
$id=$_POST['id'];
$pw=$_POST['pw'];
$db=mysqli_connect("localhost","root","irisrucia97","kidrian");
 
$check="SELECT * FROM user_info WHERE userid='$id'";
$result=mysqli_query($db,$check); 
if($result){
    $row=mysqli_fetch_array($result); //하나의 열을 배열로 가져오기
	echo $row['userid'];
    if($row['userpw']==$pw){  //MYSQLI_ASSOC 필드명으로 첨자 가능
        $_SESSION['userid']=$id;           //로그인 성공 시 세션 변수 만들기
        if(isset($_SESSION['userid']))    //세션 변수가 참일 때
        {
            header('Location: logintest.php');   //로그인 성공 시 페이지 이동
        }
        else{
            echo "세션 저장 실패";
        }            
    }
    else{
        echo "wrong id or pw";
    }
}
else{
    echo "db연결 실패";
}
?>
