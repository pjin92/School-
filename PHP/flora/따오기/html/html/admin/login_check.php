<?
	include "../common.php";


	if($adminid==$admin_id and $adminpw==$admin_pw)
	{
	setcookie("cookie_admin","yes");
	echo '<meta http-equiv="Refresh" content="0; url=member.php">';
	}
	else
	{
	setcookie("cookie_admin","");
	echo '<meta http-equiv="Refresh" content="0; url=index.html">';
	}
?>


