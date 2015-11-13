<?
	include "common.php";

	$today = date("Y-m-d");
	$title39 = addslashes($title);
	$content39 = addslashes($content);
	$query="insert into qa (title39,name39,email39,passwd39,writeday39,count39,ishtml39,content39) values('$title39','$name','$email','$passwd','$today',0,'$yn_text','$content39');";
	$result=mysql_query($query);
	if(!$result) exit("큐에이인설트쿼리에러");
	$pos1=mysql_insert_id();
	$pos2="A";
	$query="update qa set pos1='$pos1', pos2='$pos2' where no39=$pos1;";
	$result=mysql_query($query);
	if(!$result) exit("큐에이업데이트쿼리에러");
?>
<script>location.href="qa.php"</script>