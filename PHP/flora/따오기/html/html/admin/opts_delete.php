<?
	include "../common.php";

	$opt_no= $no1;
	$no=$no2;

	$query="delete from opts where no39=$no;";
	$result=mysql_query($query);
	if(!$result) exit("����Ƽ��������Ʈ��������");
?>

<script>location.href="opts.php?no1=<?=$no1?>"</script>