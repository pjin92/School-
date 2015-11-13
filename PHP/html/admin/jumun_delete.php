<?if(!$cookie_admin) 
	echo("<script>location.href='index.html'</script>");
?>
<?
	include "../common.php";

	$query="delete from jumun where no68=$no;";
	$result=mysql_query($query);
	if(!$result) exit("jumumDeleteE");

	$query="delete from jumuns where jumun_no68=$no;";
	$result=mysql_query($query);
	if(!$result) exit("jumunsDeleteE");

	//echo("<script>location.href='jumun.php?&day1_y=$day1_y&day1_m=$day1_m&day1_d=$day1_d&day2_y=$day2_y&day2_m=$day2_m&day2_d=$day2_d&sel1=$sel1&sel2=$sel2&text1=$text1&page=$page'</script>");
	echo("<script>location.href='jumun.php'</script>");
?>