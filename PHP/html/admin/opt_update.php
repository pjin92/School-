<?
include "../common.php";

	$query="update opt set name68='$name' where no68=$no1;";
	$result=mysql_query($query);
	if(!$result) exit("Äõ¸®¿¡·¯");
	
?>
<script>location.href="opt.php"</script>