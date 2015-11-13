<?
include "common.php";

$tel = sprintf("%-3s%-4s%-4s", $tel1, $tel2, $tel3);
$birthday = sprintf("%04d-%02d-%02d", $birthday1, $birthday2, $birthday3);

$query="update juso set name68='$name',tel68='$tel',sm68=$sm,birthday68='$birthday',juso68='$juso' where no68=$no;";
$result=mysql_query($query);
if(!$result) exit("$query");
?>

<script>location.href="juso_list.php"</script>