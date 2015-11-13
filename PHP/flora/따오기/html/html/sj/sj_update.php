<?
	include "common.php";

	$query="update sj set name39='$name', kor39=$kor, eng39=$eng, mat39=$mat, hap39=$hap, avg39=$avg where no39=$no;";
	$result=mysql_query($query);
	if(!$result) exit("Äõ¸®¿¡·¯");
?>

<script>location.href="sj_list.php"</script>