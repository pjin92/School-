<?
	include "../common.php";
	$query="delete from member where no59=$no;";
	$result=mysql_query($query);
	if(!$result) exit("��������");
?>
<script>location.href="member.php"</script>