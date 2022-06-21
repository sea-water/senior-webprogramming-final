<?
$connect = mysql_connect("localhost","root","haesu6135");

mysql_select_db("final",$connect); // 연결할 db선택

if(!$connect){
	die("연결에 실패했습니다.".mysql_error());//실패하면 연결중지 
}
?>