<?
	include "common.php";
	$query="insert into sj(name59,kor59,eng59,mat59,hap59,avg59)
				values('$name',$kor,$eng,$mat,$hap,$avg);";
	$result=mysql_query($query);
	if(!$result) exit("Äõ¸®¿¡·¯");
?>
<script>location.href="sj_list.php"</script>