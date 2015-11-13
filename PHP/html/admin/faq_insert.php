<?if(!$cookie_admin) 
	echo("<script>location.href='index.html'</script>");
?>
<?
	include "../common.php";

	$title68 = addslashes($title);
	$content68 = addslashes($content);

	$query="insert into faq (title68,content68) values('$title68','$content68');";

	$result=mysql_query($query);
	if(!$result) exit("FAQQueryInsertE");
?>
<script>location.href="faq.php"</script>