<?
	include "common.php";
	$tel=sprintf("%-3s%-4s%-4s",$tel1,$tel2,$tel3);
	$birthday=sprintf("%04d-%02d-%02d",$birthday1,$birthday2,$birthday3);
	$query="insert into juso(name59,tel59,sm59,birthday59,juso59)
				values('$name','$tel',$sm,'$birthday','$juso');";
	$result=mysql_query($query);
	if(!$result) exit("��������");
?>
<script>location.href="juso_list.php"</script>