<?
	include "../common.php";

	$query="insert into opts (opt_no39,name39) values('$no1','$name');";
	$result=mysql_query($query);
	if(!$result) exit("오피티에스인설트쿼리에러");
?>

<script>location.href="opts.php?no1=<?=$no1?>"</script>