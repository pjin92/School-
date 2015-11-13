<?
	include "../common.php";


	$title39 = addslashes($title);
	$content39 = addslashes($content);

	$query="update faq set title39='$title39', content39='$content39' where no39=$no;";

	$result=mysql_query($query);
	if(!$result) exit("에프에이큐업데이트쿼리에러");

	echo("<script>location.href='faq.php'</script>");
?>




