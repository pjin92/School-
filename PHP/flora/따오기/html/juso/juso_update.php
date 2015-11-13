<?
	include "common.php";
	$tel=sprintf("%-3s%-4s%-4s",$tel1,$tel2,$tel3);
	$birthday=sprintf("%04d-%02d-%02d",$birthday1,$birthday2,$birthday3);
	$query="update juso set name59='$name',tel59='$tel',sm59=$sm,birthday59='$birthday',juso59='$juso' where no59=$no;";
	$result=mysql_query($query);
	if(!$result) exit("Äõ¸®¿¡·¯");
?>
<script>location.href="juso_list.php"</script>