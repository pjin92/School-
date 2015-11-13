<?
include "common.php";

$query="update sj set name68='$name',kor68=$kor,eng68=$eng,mat68=$mat,hap68=$hap,avg68=$avg where no68=$no;";
$result=mysql_query($query);
if(!$result) exit("Äõ¸®¿¡·¯");
?>

<script>location.href="sj_list.php"</script>