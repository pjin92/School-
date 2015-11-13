<?
	include "../common.php";
	$query="delete from opts where no68=$no2;";
	$result=mysql_query($query);
	if(!$result) exit("Äõ¸®¿¡·¯");
?>
<script>location.href="opts.php?no1=<?=$no1?>"</script>