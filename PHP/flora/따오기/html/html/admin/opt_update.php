<?
	include "../common.php";

	$no= $no1;

	$query="update opt set name39='$name' where no39=$no;";
	$result=mysql_query($query);
	if(!$result) exit("오피티업데이트쿼리에러");
?>

<script>location.href="opt.php"</script>