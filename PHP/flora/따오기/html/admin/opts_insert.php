<?
	include "../common.php";
	
	$query="insert into opts(opt_no59, name59)
				values('$no1', '$name');";
	$result=mysql_query($query);
	if(!$result) exit("Äõ¸®¿¡·¯");
?>
<script>location.href="opts.php?no1=<?=$no1?>"</script>