<?
	include "../common.php";
	$query="delete from opt where no59=$no1;";
	$result=mysql_query($query);
	if(!$result) exit("��������");
?>
<script>location.href="opt.php"</script>