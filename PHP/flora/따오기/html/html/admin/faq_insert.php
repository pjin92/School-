<?
	include "../common.php";

	$title39 = addslashes($title);
	$content39 = addslashes($content);

	$query="insert into faq (title39,content39) values('$title39','$content39');";

	$result=mysql_query($query);
	if(!$result) exit("에프에이큐인설트쿼리에러");
?>
<script>location.href="faq.php"</script>