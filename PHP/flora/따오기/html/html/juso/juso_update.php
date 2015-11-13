<?
	include "common.php";

	$tel39 = sprintf("%-3s%-4s%-4s", $tel1, $tel2, $tel3);
	$birthday39 = sprintf("%04d-%02d-%02d", $birthday1, $birthday2, $birthday3);

	$query="update juso set name39='$name39', tel39='$tel39', sm39=$sm39, birthday39='$birthday39', juso39='$juso39' where no39=$no39;";
	$result=mysql_query($query);
	if(!$result) exit("Äõ¸®¿¡·¯");
?>

<script>location.href="juso_list.php"</script>