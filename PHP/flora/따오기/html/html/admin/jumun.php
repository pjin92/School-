<!-------------------------------------------------------------------------------------------->	
<!-- 프로그램 : 쇼핑몰 따라하기 실습지시서 (실습용 HTML)                                    -->
<!--                                                                                        -->
<!-- 만 든 이 : 윤형태 (2008.2.4)                                                           -->
<!-------------------------------------------------------------------------------------------->	
<?
	include "../common.php";
	$query="select * from jumun order by no39;";
	$result=mysql_query($query);
	$count=mysql_num_rows($result);
	$row=mysql_fetch_array($result);

	$today = date("Y-m-d");
	
	$today1=sprintf("%04d",substr($today,0,4));
?>
<html>
<head>
<title>쇼핑몰 홈페이지</title>
<meta http-equiv="content-type" content="text/html; charset=euc-kr">
<link rel="stylesheet" href="include/font.css">
<script language="JavaScript" src="include/common.js"></script>
<script>
	function go_update(no,pos)
	{
		state=form1.state[pos].value;
		location.href="jumun_update.php?no="+no+"&newstate="+state+"&page="+form1.page.value+
			"&sel1="+form1.sel1.value+"&sel2="+form1.sel2.value+"&text1="+form1.text1.value+
			"&day1_y="+form1.day1_y.value+"&day1_m="+form1.day1_m.value+"&day1_d="+form1.day1_d.value+
			"&day2_y="+form1.day2_y.value+"&day2_m="+form1.day2_m.value+"&day2_d="+form1.day2_d.value;
	}
</script>
</head>

<body bgcolor="white" text="black" link="blue" vlink="purple" alink="red" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

<center>

<br>
<script> document.write(menu());</script>

<form name="form1" method="post" action="jumun.php">
<input type="hidden" name="page" value="<?=$page?>">

<table width="800" border="0" cellspacing="0" cellpadding="0">
	<tr height="40">
		<td align="left"  width="100" valign="bottom">&nbsp 주문수 : <font color="#FF0000"><?=$count?></font></td>
		<td align="right" width="650" valign="bottom">
			기간 : 
			<input type="text" name="day1_y" size="4" value="<?=$today1?>">
			<select name="day1_m">
<?
	for($i=0;$i<$n_month;$i++)
	{
    if ($i==$day1_m)
		echo("<option value='$i' selected>$a_month[$i]</option>");
    else
		echo("<option value='$i'>$a_month[$i]</option>");
	}
?>
			</select>
			<select name="day1_d">
<?
	for($i=0;$i<$n_day;$i++)
	{
    if ($i==$day1_d)
		echo("<option value='$i' selected>$a_day[$i]</option>");
    else
		echo("<option value='$i'>$a_day[$i]</option>");
	}
?>
			</select> - 
			<input type="text" name="day2_y" size="4" value="<?=$today1?>">
			<select name="day2_m">
<?
	for($i=0;$i<$n_month;$i++)
	{
    if ($i==$day2_m)
		echo("<option value='$i' selected>$a_month[$i]</option>");
    else
		echo("<option value='$i'>$a_month[$i]</option>");
	}
?>
			</select>
			<select name="day2_d">
<?
	for($i=0;$i<$n_day;$i++)
	{
    if ($i==$day2_d)
		echo("<option value='$i' selected>$a_day[$i]</option>");
    else
		echo("<option value='$i'>$a_day[$i]</option>");
	}
?>
			</select> &nbsp
			<select name="sel1">
<?
	for($i=0;$i<$n_state;$i++)
	{
    if ($i==$sel1)
		echo("<option value='$i' selected>$a_state[$i]</option>");
    else
		echo("<option value='$i'>$a_state[$i]</option>");
	}
?>
			</select> &nbsp 
			<select name="sel2">
<?
	for($i=0;$i<$n_search;$i++)
	{
    if ($i==$sel2)
		echo("<option value='$i' selected>$a_search[$i]</option>");
    else
		echo("<option value='$i'>$a_search[$i]</option>");
	}
?>
			</select>
			<input type="text" name="text1" size="10" value="<?=$text1?>">&nbsp
		</td>
		<td align="left" width="50" height="50" valign="bottom">
			<input type="button" value="검색" onclick="javascript:form1.submit();"> &nbsp;
		</td>
	</tr>
	<tr><td height="5"></td></tr>
</table>

<table width="800" border="1" cellspacing="0" cellpadding="0" bordercolordark="white" bordercolorlight="black">


	<tr bgcolor="#CCCCCC" height="23"> 
		<td width="70"  align="center">주문번호</td>
    <td width="70"  align="center">주문일</td>
	  <td width="250" align="center">상품명</td>
		<td width="40"  align="center">제품수</td>	
		<td width="70"  align="center">총금액</td>
    <td width="65"  align="center">주문자</td>
		<td width="50"  align="center">결재</td>
    <td width="135" align="center">주문상태</td>
    <td width="50"  align="center">삭제</td>
	</tr>
<?
	if (!$day1_y)  $day1_y=2012;
	if (!$day1_m)  $day1_m=0;
	if (!$day1_d)  $day1_d=0;
	if (!$day2_y)  $day2_y=2012;
	if (!$day2_m)  $day2_m=11;
	if (!$day2_d)  $day2_d=30;

	$m1=(sprintf("%02d",$day1_m)+1);
	$d1=(sprintf("%02d",$day1_d)+1);
	$m2=(sprintf("%02d",$day2_m)+1);
	$d2=(sprintf("%02d",$day2_d)+1);
	$startdate = sprintf("%04d-%02d-%02d",$day1_y,$m1,$d1);
	$enddate = sprintf("%04d-%02d-%02d",$day2_y,$m2,$d2);



	if (!$sel1)   $sel1=0;
	if (!$sel2)   $sel2=0;
	if (!$text1) $text1=""; 
	$k=0;
	$s[$k] = "date_format(jumunday39,'%Y-%m-%d')"." between '".$startdate."' and '".$enddate."'";$k++;
	if ($sel1!=0){ $s[$k] = "state39=" . $sel1;$k++;}
	if ($text1)
	{
    if ($sel2==0) { $s[$k] = "no39 like '%" .$text1. "%'";}
    elseif ($sel2==1) { $s[$k] = "o_name39 '%" .$text1. "%'";}
	elseif ($sel2==2) { $s[$k] = "product_names39 like '%" .$text1. "%'";}
	}
	if($s>0)
	{
    $tmp=implode(" and ", $s); 
	$tmp = "where " . $tmp;
	}

	$query="select * from jumun ".$tmp." order by no39;";
	$result=mysql_query($query);
	$count=mysql_num_rows($result);
	if(!$page) $page=1;
	$pages = ceil($count/$page_line);
	$first = 1;
	if ($count>0) $first = $page_line*($page-1);
	$page_last=$count-$first;
	if ($page_last>$page_line) $page_last=$page_line;
	if($count>0) mysql_data_seek($result,$first);

	for($i=0;$i<$page_last;$i++)
	{
		$row1=mysql_fetch_array($result);

		if ($row1[pay_method39]==0)  
			$pay_method="카드";  
		else   
			$pay_method="현금";
		
		$total_cash = number_format($row1[total_cash39]);

		$color="black";
		if ($row1[state39]==5)  $color="blue";  // 주문완료 
		if ($row1[state39]==6)  $color="red";   // 주문취소

		echo("<tr bgcolor='#F2F2F2' height='23'>	
				<td width='70' align='center'><a href='jumun_info.php?no=$row1[no39]'>$row1[no39]</td>	
				<td width='70' align='center'>$row1[jumunday39]&nbsp</td>	
				<td width='250' align='left'>&nbsp $row1[product_names39]</td>	
				<td width='40' align='center'>$row1[product_nums39]</td>	
				<td width='70' align='right'>$total_cash &nbsp</td>	
				<td width='65' align='center'>$row1[o_name39]</td>
				<td width='50' align='center'>$pay_method</td>
				<td width='135' align='center' valign='bottom'>
				<select name='state' style='font-size:9pt; color:$color'>");
	for($j=0;$j<$n_state;$j++)
	{
    if ($j==$row1[state39])
		echo("<option value='$j' selected>$a_state[$j]</option>");
    else
		echo("<option value='$j'>$a_state[$j]</option>");
	}
		echo("	</select>
				<a href='javascript:go_update(\"$row1[no39]\",$i);'><img src='images/b_edit1.gif' border='0'></a>
				</td>
				<td width='50' align='center' valign='bottom'>
				<a href='jumun_delete.php?no=$row[no39]&day1_y=$day1_y&day1_m=$day1_m&day1_d=$day1_d&day2_y=$day2_y&day2_m=$day2_m&day2_d=$day2_d&sel1=$sel1&sel2=$sel2&text1=$text1'onclick='javascript:return confirm(\"삭제할까요 ?\");'><img src='images/b_delete1.gif' border='0'></a>
				</td>
			 </tr>");
	}
?>
</table>

<br>
<?
	$blocks = ceil($pages/$page_block);
	$block = ceil($page/$page_block);
	$page_s = $page_block * ($block-1);
	$page_e = $page_block * $block;
	if($blocks <= $block) $page_e = $pages;

	echo("<table width='800' border='0' cellspacing='0' cellpadding='0'>
		<tr>
			<td height='30' class='cmfont' align='center'>");
	if ($block > 1)
	{
		$tmp = $page_s;
		echo("<a href='jumun.php?page=$tmp&day1_y=$day1_y&day1_m=$day1_m&day1_d=$day1_d&day2_y=$day2_y&day2_m=$day2_m&day2_d=$day2_d&sel1=&sel1=$sel1&sel2=$sel2&text1=$text1'><img src='images/i_prev.gif' align='absmiddle' border='0'></a>&nbsp");
	}
	for($i=$page_s+1; $i<=$page_e; $i++)
	{
		if($page ==$i)
			echo("<font color='#FC0504'><b>$i</b></font>&nbsp");
		else
			echo("<a href='jumun.php?page=$i&day1_y=$day1_y&day1_m=$day1_m&day1_d=$day1_d&day2_y=$day2_y&day2_m=$day2_m&day2_d=$day2_d&sel1=$sel1&sel2=$sel2&text1=$text1'>[$i]</a>&nbsp");
	}
	if ($block < $blocks)
	{
		$tmp = $page_e+1;
		echo("&nbsp<a href='jumun.php?page=$tmp&day1_y=$day1_y&day1_m=$day1_m&day1_d=$day1_d&day2_y=$day2_y&day2_m=$day2_m&day2_d=$day2_d&sel1=$sel1&sel2=$sel2&text1=$text1'><img src='images/i_next.gif' align='absmiddle' border='0'></a>");
	}
	echo("</td>
		</tr>
		</table>");
?>

</form>

</center>

</body>
</html>