<?if(!$cookie_admin) 
	echo("<script>location.href='index.html'</script>");
?>
<?
	include "../common.php";

	$query="delete from faq where no68=$no;";
	$result=mysql_query($query);
	if(!$result) exit("FAQDeleteQueryE");
	echo("<script>location.href='faq.php'</script>");
?>