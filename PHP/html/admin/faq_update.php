<?if(!$cookie_admin) 
	echo("<script>location.href='index.html'</script>");
?>
<?
	include "../common.php";


	$title68 = addslashes($title);
	$content68 = addslashes($content);

	$query="update faq set title68='$title68', content68='$content68' where no68=$no;";

	$result=mysql_query($query);
	if(!$result) exit("FAQUpdateQueryE");

	echo("<script>location.href='faq.php'</script>");
?>


