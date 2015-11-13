<?
include "../common.php";

$query="delete from opt where no68=$no1;";
$result=mysql_query($query);
if(!$result) exit("$query");
?>

<script>location.href="opt.php"</script>