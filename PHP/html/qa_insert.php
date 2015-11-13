<?
	include "common.php";

	$today = date("y-m-d");
	$title68 = addslashes($title);
	$content68 = addslashes($content);
	$query="insert into qa (title68,name68,email68,passwd68,writeday68,count68,ishtml68,content68) values('$title','$name','$email','$passwd','$today',0,'$yn_text','$content');";
	$result=mysql_query($query);
	if(!$result) exit("QnAInsertQueryE");
	$pos1=mysql_insert_id();
	$pos2="A";
	$query="update qa set pos1='$pos1', pos2='$pos2' where no68=$pos1;";
	$result=mysql_query($query);
	if(!$result) exit("QnaUpdateQueryE");
?>
<script>location.href="qa.php"</script>