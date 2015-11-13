<?
	include "common.php";

	$query="select no39, name39 from member where uid39='$uid' and passwd39='$pwd';";
	$result=mysql_query($query);
	if(!$result) exit("¸â¹öÃ¼Å©Äõ¸®¿¡·¯");
	$count=mysql_num_rows($result); 
	if($count>0)
	{
	$row=mysql_fetch_array($result);
	setcookie("cookie_no",$row[no39]);
	setcookie("cookie_name",$row[name39]);
	echo '<meta http-equiv="Refresh" content="0; url=index.html">';
	}
	else
	echo '<meta http-equiv="Refresh" content="0; url=member_login.php">';
?>


