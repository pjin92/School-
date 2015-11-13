<?
	include "common.php";

	$query="insert into sj (name39,kor39,eng39,mat39,hap39,avg39) values('$name',$kor,$eng,$mat,$hap,$avg);";
	$result=mysql_query($query);
	if(!$result) exit("Äõ¸®¿¡·¯");
?>

<script>location.href="sj_list.php"</script>