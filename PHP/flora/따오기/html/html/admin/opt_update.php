<?
	include "../common.php";

	$no= $no1;

	$query="update opt set name39='$name' where no39=$no;";
	$result=mysql_query($query);
	if(!$result) exit("����Ƽ������Ʈ��������");
?>

<script>location.href="opt.php"</script>