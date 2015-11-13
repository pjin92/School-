<?
	include "../common.php";

	$query="delete from member where no39=$no;";
	$result=mysql_query($query);
	if(!$result) exit("¸â¹öµô¸®Æ®Äõ¸®¿¡·¯");
?>

<script>location.href="member.php"</script>