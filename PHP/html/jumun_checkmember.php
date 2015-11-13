<?
	include "common.php";

	$query="select no68, name68 from member where uid68='$uid' and passwd68='$pwd';";
	$result=mysql_query($query);
	if(!$result) exit("jumuncheckmemberE");
	$count=mysql_num_rows($result); 
	if($count>0)
	{
	$row=mysql_fetch_array($result);
	setcookie("cookie_no",$row[no68]);
	setcookie("cookie_name",$row[name68]);
	echo '<meta http-equiv="Refresh" content="0; url=jumun.php">';
	}
	else
	echo '<meta http-equiv="Refresh" content="0; url=jumun_login.php">';
?>


