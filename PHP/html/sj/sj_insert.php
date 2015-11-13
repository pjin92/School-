<?
include "common.php";

$query="insert into sj (name68, kor68, eng68, mat68, hap68, avg68)
values('$name',$kor,$eng,$mat,$hap,$avg);";
$result=mysql_query($query);
if(!$result) exit("$query");
?>

<script>location.href="sj_list.php"</script>