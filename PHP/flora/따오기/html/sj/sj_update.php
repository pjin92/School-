<?
	include "common.php";
	$query="update sj set name59='$name',kor59=$kor,eng59=$eng,mat59=$mat,hap59=$hap,avg59=$avg where no59=$no;";
	$result=mysql_query($query);
	if(!$result) exit("Äõ¸®¿¡·¯");
?>
<script>location.href="sj_list.php"</script>