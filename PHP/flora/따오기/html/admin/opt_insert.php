<?
	include "../common.php";
	
	$query="insert into opt(name59)
				values('$name');";
	$result=mysql_query($query);
	if(!$result) exit("��������");
?>
<script>location.href="opt.php"</script>