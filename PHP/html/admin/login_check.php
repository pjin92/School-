	<?
	
	include   "dbconifg.php";
	
	if($adminid == $admin_id and $adminpw == $admin_pw)
	{
		
		setcookie("cookie_admin","yes");
		echo("<script>location.href='member.php'</script>");
	}
	else
	{
		setcookie("cookie_admin","");
		echo("<script>location.href='index.html'</script>");
	}
	?>