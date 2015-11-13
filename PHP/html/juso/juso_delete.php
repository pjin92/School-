<?
include "common.php";

$query="delete from juso where no68=$no;";
$result=mysql_query($query);
if(!$result) exit("$query");
?>

<script>location.href="juso_list.php"</script>