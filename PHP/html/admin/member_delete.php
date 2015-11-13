<?
include "../common.php";

$query="delete from member where no68=$no;";
$result=mysql_query($query);
if(!$result) exit("$query");
?>

<script>location.href="member.php"</script>