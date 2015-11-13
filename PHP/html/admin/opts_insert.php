<?
include "../common.php";

$query="insert into opts(opt_no68,name68)
values('$no1','$name');";
$result=mysql_query($query);
if(!$result) exit("$query");
?>

<script>location.href="opts.php?no1=<?=$no1?>"</script>