<?
	include "common.php";

	$title68 = addslashes($title);
	$content68 = addslashes($content);

	$query="update qa set title68='$title', name68='$name', email68='$email', passwd68='$passwd', ishtml68='$ishtml', content68='$content' where no68=$no;";
	$result=mysql_query($query);
	if(!$result) exit("QnAUpdateQueryE");
?>

<script>location.href="qa.php"</script>