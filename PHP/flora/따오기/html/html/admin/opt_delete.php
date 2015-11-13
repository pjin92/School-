<?
	include "../common.php";

	$no= $no1;

	$query="delete from opt where no39=$no;";
	$result=mysql_query($query);
	if(!$result) exit("¿ÀÇÇÆ¼µô¸®Æ®Äõ¸®¿¡·¯");
?>

<script>location.href="opt.php"</script>