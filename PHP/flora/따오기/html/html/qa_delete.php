<?
	include "common.php";
	
	$query = "select * from qa where no39=$no;";
	$result=mysql_query($query);
	$row=mysql_fetch_array($result);
	if ($passwd<>$row[passwd39]) 
		echo("<script>history.back();</script>");
	else
	$query="delete from qa where no39=$no;";
	$result=mysql_query($query);
	if(!$result) exit("Å¥¿¡ÀÌµô¸®Æ®Äõ¸®¿¡·¯");
?>
<script>location.href="qa.php"</script>