<?
include "../common.php";

	$query="update opts set name68='$name' where no68=$no2;";
	$result=mysql_query($query);
	if(!$result) exit("Äõ¸®¿¡·¯");
	
?>
<script>location.href="opts.php?no1=<?=$no1?>"</script>