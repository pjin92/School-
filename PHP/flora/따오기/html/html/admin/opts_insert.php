<?
	include "../common.php";

	$query="insert into opts (opt_no39,name39) values('$no1','$name');";
	$result=mysql_query($query);
	if(!$result) exit("����Ƽ�����μ�Ʈ��������");
?>

<script>location.href="opts.php?no1=<?=$no1?>"</script>