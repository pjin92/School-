<?
	include "../common.php";

	$opt_no= $no1;
	$no = $no2;

	$query="update opts set name39='$name', opt_no39='$opt_no' where no39=$no;";
	$result=mysql_query($query);
	if(!$result) exit("����Ƽ����������Ʈ��������");
?>

<script>location.href="opts.php?no1=<?=$no1?>"</script>