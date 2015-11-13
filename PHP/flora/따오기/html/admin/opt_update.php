<?
	include "../common.php";

	$query="update opt set name59='$name' where no59=$no1;";
	$result=mysql_query($query);
	if(!$result) exit("Äõ¸®¿¡·¯");
?>
<script>location.href="opt.php"</script>