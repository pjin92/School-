<?
	include "common.php";
	$query="delete from juso where no59=$no;";
	$result=mysql_query($query);
	if(!$result) exit("��������");
?>
<script>location.href="juso_list.php"</script>