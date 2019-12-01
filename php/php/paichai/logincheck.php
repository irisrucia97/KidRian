<?php
session_start();
$id=$_POST['id'];
$pw=$_POST['password'];
$db=mysqli_connect("203.250.133.87", "s1920", "1920", "s1920_db");
 
$check="SELECT * FROM user_info WHERE userid='$id'";
$result=mysqli_query($db,$check); 
if($result){
    $row=mysqli_fetch_array($result); //하나의 열을 배열로 가져오기
    if($row['userpw']==$pw){  //비밀번호 검사
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
