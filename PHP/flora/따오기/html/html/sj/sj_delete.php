<?
	include "common.php";

	$query="delete from sj where no39=$no;";
	$result=mysql_query($query);
	if(!$result) exit("��������");
?>

<script>location.href="sj_list.php"</script>