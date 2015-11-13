<?
	include "common.php";

	$query="delete from juso where no39=$no;";
	$result=mysql_query($query);
	if(!$result) exit("Äõ¸®¿¡·¯");
?>

<script>location.href="juso_list.php"</script>