<?
    include "common.php";
?>
<?
$query="select no59, name59 from member where uid59='$uid' and passwd59='$pwd';";
$result=mysql_query($query);
if(!$result) exit("Äõ¸®¿¡·¯");
$count=mysql_num_rows($result);
if ($count>0)
{
   $row=mysql_fetch_array($result);
   setcookie("cookie_no",$row[no59]);
   setcookie("cookie_name",$row[name59]);
   echo("<script>location.href='index.html'</script>");
}
else
   echo("<script>location.href='member_login.php'</script>");
?>