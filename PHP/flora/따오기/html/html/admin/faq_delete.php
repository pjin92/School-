<?
	include "../common.php";

	$query="delete from faq where no39=$no;";
	$result=mysql_query($query);
	if(!$result) exit("��������ť����Ʈ��������");
	echo("<script>location.href='faq.php'</script>");
?>