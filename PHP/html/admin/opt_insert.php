<?
include "../common.php";

$query="insert into opt(name68)
values('$name');";
$result=mysql_query($query);
if(!$result) exit("$query");
?>

<script>location.href="opt.php"</script>