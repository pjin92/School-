<?
	include "common.php";

	$title39 = addslashes($title);
	$content39 = addslashes($content);

	$query="update qa set title39='$title39', name39='$name', email39='$email', passwd39='$passwd', ishtml39='$ishtml', content39='$content39' where no39=$no;";
	$result=mysql_query($query);
	if(!$result) exit("ť���̾�����Ʈ��������");
?>

<script>location.href="qa.php"</script>