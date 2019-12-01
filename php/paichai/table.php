<?php
echo "<style>";
echo "span{display:inline-block; width:150px; line-height:20px; border:1px solid white; text-align:center; color:white; padding:5px;}";
echo "span:hover{color:rgb(255,255,000); background: green;}";
echo "h1{color:white; font-size:50pt; font-family:times new roman; text-shadow:7px 7px 10px 4px gray;}";
echo "h2{font-size:25pt;}";
echo "strong{font-size:10pt; fint-family:궁서;text-shadow:5px 5px 10px 3px black;}";
echo "</style>";
$db_con=mysqli_connect("203.250.133.87","s1920","1920","s1920_db");
$result=mysqli_query($db_con, "select * from movie order by id desc");
echo "<div style='height:100%;text-align:center;background:lightslategray;'>";
echo "<div style='height:100px;text-align:center;background:black;color:white;'>";
echo "<h1>Movie Friends</h1>";
echo "</div>";
echo "<div align=center style='width:15%;height:83%;float:left;background:black;padding-top:30px;'>";
echo "<a href=movie.html><span>";
echo "<strong>영화 후기 작성 바로가기</strong>";
echo "</span></a><br><br>";
echo "<a href=#><span>";
echo "<strong>드라마 후기 보러가기</strong>";
echo "</span></a>";
echo "</div>";
echo "<div align=center style='width:75%;float:right;'>";
echo "<h4 align=left>◀ 자유롭게 영화리뷰를 작성하세요</h4>";
echo "<h2><b style='color:red'>Re</b><b style='color:blue'>vi</b><b style='color:green'>ew</b></h2>";
echo "<table><tr><th style='width:80px;background:white;'>번 호</th>
	<th style='width:200px;background:white;'> 영 화 제 목 </th> 
	<th style='width:100px;background:white;'>작성자</th> 
	<th style='width:100px;background:white;'>작성날짜</th>
	<th style='width:80px;background:white;'>조 회 수</th></tr>";
$i=1;
while($row=mysqli_fetch_array($result)) {
	echo "<tr style='background:paleturquoise;'><th>{$i}</th>
		<th><a href=read.php?id={$row[id]}> {$row[moviename]}</a></th>
		<th>{$row[name]}</th>
		<th>{$row[date]}</th>";
	echo "<th>{$row[count]}</th></tr>";
	$i++;
	}
echo "</table><br>";
echo "<form method=get action=moviesearch.php target=if1>
	<input type=search name=sname size=30>
	<input type=submit value='검 색'></form>";
echo "</div>";
echo "</div>";
mysqli_close($db_con);
?>
