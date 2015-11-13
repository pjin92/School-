<?
	include "../common.php";

	$query="update jumun set state39='$newstate' where no39=$no;";

	$result=mysql_query($query);
	if(!$result) exit("주문업데이트쿼리에러");

	echo("<script>location.href='jumun.php?page=$page&day1_y=$day1_y&day1_m=$day1_m&day1_d=$day1_d&day2_y=$day2_y&day2_m=$day2_m&day2_d=$day2_d&sel1=$sel1&sel2=$sel2&text1=$text1'</script>");
?>




