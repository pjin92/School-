<?
	include "common.php";
	
	$query = "select * from qa where no68=$no;";
	$result=mysql_query($query);
	$row=mysql_fetch_array($result);
	if ($passwd<>$row[passwd68]) 
		echo("<script>history.back();</script>");
	else
	$query="delete from qa where no68=$no;";
	$result=mysql_query($query);
	if(!$result) exit("QnADeleteQueryE");
?>
<script>location.href="qa.php"</script>