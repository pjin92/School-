<?
	include "../common.php";

	$query="delete from faq where no39=$no;";
	$result=mysql_query($query);
	if(!$result) exit("에프에이큐딜리트쿼리에러");
	echo("<script>location.href='faq.php'</script>");
?>