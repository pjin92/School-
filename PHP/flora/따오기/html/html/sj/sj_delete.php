<?
	include "common.php";

	$query="delete from sj where no39=$no;";
	$result=mysql_query($query);
	if(!$result) exit("Äõ¸®¿¡·¯");
?>

<script>location.href="sj_list.php"</script>