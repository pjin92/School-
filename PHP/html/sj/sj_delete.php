<?
include "common.php";

$query="delete from sj where no68=$no;";
$result=mysql_query($query);
if(!$result) exit("$query");
?>

<script>location.href="sj_list.php"</script>