<!-------------------------------------------------------------------------------------------->	
<!-- 프로그램 : 쇼핑몰 따라하기 실습지시서 (실습용 HTML)                                    -->
<!--                                                                                        -->
<!-- 만 든 이 : 윤형태 (2008.2.4)                                                           -->
<!-------------------------------------------------------------------------------------------->	
<?
	include "../common.php";
	$query = "select * from jumun where no39=$no;";
	$result=mysql_query($query);
	$row=mysql_fetch_array($result);

	$o_tel1=trim(substr($row[o_tel39],0,3));        // 0번 위치에서 3자리 문자열 추출
	$o_tel2=trim(substr($row[o_tel39],3,4));        // 3번 위치에서 4자리
	$o_tel3=trim(substr($row[o_tel39],7,4));        // 7번 위치에서 4자리

	$o_phone1=trim(substr($row[o_phone39],0,3));        // 0번 위치에서 3자리 문자열 추출
	$o_phone2=trim(substr($row[o_phone39],3,4));        // 3번 위치에서 4자리
	$o_phone3=trim(substr($row[o_phone39],7,4));        // 7번 위치에서 4자리

	$o_zip1=trim(substr($row[o_zip39],0,3));
	$o_zip2=trim(substr($row[o_zip39],3,3));

	$o_tel=$o_tel1."-".$o_tel2."-".$o_tel3;
	$o_phone=$o_phone1."-".$o_phone2."-".$o_phone3;
	$o_zip=$o_zip1."-".$o_zip2;

	$r_tel1=trim(substr($row[r_tel39],0,3));        // 0번 위치에서 3자리 문자열 추출
	$r_tel2=trim(substr($row[r_tel39],3,4));        // 3번 위치에서 4자리
	$r_tel3=trim(substr($row[r_tel39],7,4));        // 7번 위치에서 4자리

	$r_phone1=trim(substr($row[r_phone39],0,3));        // 0번 위치에서 3자리 문자열 추출
	$r_phone2=trim(substr($row[r_phone39],3,4));        // 3번 위치에서 4자리
	$r_phone3=trim(substr($row[r_phone39],7,4));        // 7번 위치에서 4자리

	$r_zip1=trim(substr($row[r_zip39],0,3));
	$r_zip2=trim(substr($row[r_zip39],3,3));

	$r_tel=$r_tel1. "-".$r_tel2."-".$r_tel3;
	$r_phone=$r_phone1."-".$r_phone2."-".$r_phone3;
	$r_zip=$r_zip1."-".$r_zip2;

	$total_cash = number_format($row[total_cash39]);
	$memo39 = stripslashes($row[memo39]);
?>
<html>
<head>
<title>쇼핑몰 홈페이지</title>
<meta http-equiv="content-type" content="text/html; charset=euc-kr">
<link rel="stylesheet" href="include/font.css">
<script language="JavaScript" src="include/common.js"></script>
</head>

<body bgcolor="white" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

<center>

<br>
<script> document.write(menu());</script>
<br>
<br>

<table width="800" border="1" cellspacing="0" cellpadding="4" bordercolordark="white" bordercolorlight="black">
	<tr> 
        <td width="100" height="20" bgcolor="#CCCCCC" align="center"><font color="#142712">주문번호</font></td>
        <td width="300" height="20" bgcolor="#EEEEEE"><font size="3"><b><?=$row[no39]?></b></font></td>
        <td width="100" height="20" bgcolor="#CCCCCC" align="center"><font color="#142712">주문일</font></td>
        <td width="300" height="20" bgcolor="#EEEEEE"><?=$row[jumunday39]?></td>
	</tr>
</table>
<br>
<table width="800" border="1" cellspacing="0" cellpadding="4" bordercolordark="white" bordercolorlight="black">
	<tr> 
        <td width="100" height="20" bgcolor="#CCCCCC" align="center"><font color="#142712">주문자</font></td>
        <td width="300" height="20" bgcolor="#EEEEEE"><?=$row[o_name39]?> 
<?
	if ($row[member_no39]==0) 
          echo("(비회원)");
    else
          echo("");

?>		</td>
		<td width="100" height="20" bgcolor="#CCCCCC" align="center"><font color="#142712">주문자전화</font></td>
        <td width="300" height="20" bgcolor="#EEEEEE"><?=$o_tel?> </td>
	</tr>
	<tr> 
        <td width="100" height="20" bgcolor="#CCCCCC" align="center"><font color="#142712">주문자 E-Mail</font></td>
        <td width="300" height="20" bgcolor="#EEEEEE"><?=$row[o_email39]?></td>
        <td width="100" height="20" bgcolor="#CCCCCC" align="center"><font color="#142712">주문자핸드폰</font></td>
        <td width="300" height="20" bgcolor="#EEEEEE"><?=$o_phone?></td>
	</tr>
	<tr> 
        <td width="100" height="20" bgcolor="#CCCCCC" align="center"><font color="#142712">주문자주소</font></td>
        <td width="300" height="20" bgcolor="#EEEEEE" colspan="3">(<?=$o_zip?>) <?=$row[o_juso39]?></td>
	</tr>
	</tr>
</table>
<img src="blank.gif" width="10" height="5"><br>
<table width="800" border="1" cellspacing="0" cellpadding="4" bordercolordark="white" bordercolorlight="black">
	<tr> 
        <td width="100" height="20" bgcolor="#CCCCCC" align="center"><font color="#142712">수신자</font></td>
        <td width="300" height="20" bgcolor="#EEEEEE"><?=$row[r_name39]?></td>
        <td width="100" height="20" bgcolor="#CCCCCC" align="center"><font color="#142712">수신자전화</font></td>
        <td width="300" height="20" bgcolor="#EEEEEE"><?=$r_tel?></td>
	</tr>
	<tr> 
        <td width="100" height="20" bgcolor="#CCCCCC" align="center"><font color="#142712">수신자 E-Mail</font></td>
        <td width="300" height="20" bgcolor="#EEEEEE"><?=$row[r_email39]?></td>
        <td width="100" height="20" bgcolor="#CCCCCC" align="center"><font color="#142712">수신자핸드폰</font></td>
        <td width="300" height="20" bgcolor="#EEEEEE"><?=$r_phone?></td>
	</tr>
	<tr> 
        <td width="100" height="20" bgcolor="#CCCCCC" align="center"><font color="#142712">수신자주소</font></td>
        <td width="300" height="20" bgcolor="#EEEEEE" colspan="3">(<?=$r_zip?>) <?=$row[r_juso39]?></td>
	</tr>
	<tr> 
        <td width="100" height="20" bgcolor="#CCCCCC" align="center"><font color="#142712">메모</font></td>
        <td width="300" height="50" bgcolor="#EEEEEE" colspan="3"><?=$memo39?></td>
	</tr>
</table>
<br>
<table width="800" border="1" cellspacing="0" cellpadding="4" bordercolordark="white" bordercolorlight="black">
	<tr> 
        <td width="100" height="20" bgcolor="#CCCCCC" align="center"><font color="#142712">지불종류</font></td>
        <td width="300" height="20" bgcolor="#EEEEEE">
<?
	if ($row[pay_method39]==0) 
          echo("카드");
    else
          echo("무통장");

?>
		</td>
        <td width="100" height="20" bgcolor="#CCCCCC" align="center"><font color="#142712">카드승인번호 </font></td>
        <td width="300" height="20" bgcolor="#EEEEEE">
<?
	if ($row[pay_method39]==0) 
          echo("$row[card_okno39]");
    else
          echo("　");

?>&nbsp</td>
	</tr>
	<tr> 
        <td width="100" height="20" bgcolor="#CCCCCC" align="center"><font color="#142712">카드 할부</font></td>
        <td width="300" height="20" bgcolor="#EEEEEE">
<?
	if($row[card_okno39]!=0)
	{
		if($row[card_halbu39]==0)
			echo("일시불");
		elseif ($row[card_halbu39]==3)
			echo("3개월");
		elseif ($row[card_halbu39]==6)
			echo("6개월");
		elseif ($row[card_halbu39]==9)
			echo("9개월");
		elseif ($row[card_halbu39]==12)
			echo("12개월");
	}
	else
	echo("　");
?>
		
		</td>
        <td width="100" height="20" bgcolor="#CCCCCC" align="center"><font color="#142712">카드종류</font></td>
        <td width="300" height="20" bgcolor="#EEEEEE">
<?
	if($row[card_okno39]!=0)
	{
		if($row[card_kind39]==1)
			echo("국민카드");
		elseif ($row[card_kind39]==2)
			echo("신한카드");
		elseif ($row[card_kind39]==3)
			echo("우리카드");
		elseif ($row[card_kind39]==4)
			echo("하나카드");

	}
	else
	echo("　");
?>
		</td>
	</tr>
	<tr> 
        <td width="100" height="20" bgcolor="#CCCCCC" align="center"><font color="#142712">무통장</font></td>
        <td width="300" height="20" bgcolor="#EEEEEE">
<?
	if($row[pay_method39]==1)
	{
		if($row[bank_kind39]==1)
			echo("국민은행 : 123456-12-123456");
		else
			echo("신한은행 : 123-123-123456");
	}
	else
	echo("　");
?>		
		</td>
        <td width="100" height="20" bgcolor="#CCCCCC" align="center"><font color="#142712">입금자이름</font></td>
        <td width="300" height="20" bgcolor="#EEEEEE">
<?
	if ($row[pay_method39]==1) 
		echo("$row[bank_sender39]");
	else
		echo("　");
?>
	</tr>
</table>
<br>
<table width="800" border="1" cellspacing="0" cellpadding="4" bordercolordark="white" bordercolorlight="black">
	<tr bgcolor="#CCCCCC"> 
    <td width="340" height="20" align="center"><font color="#142712">상품명</font></td>
		<td width="50"  height="20" align="center"><font color="#142712">수량</font></td>
		<td width="70"  height="20" align="center"><font color="#142712">단가</font></td>
		<td width="70"  height="20" align="center"><font color="#142712">금액</font></td>
		<td width="50"  height="20" align="center"><font color="#142712">할인</font></td>
		<td width="60"  height="20" align="center"><font color="#142712">옵션1</font></td>
		<td width="60"  height="20" align="center"><font color="#142712">옵션2</font></td>
	</tr>
<?	
	$query=" select * from jumuns, product, opts as opts1, opts as opts2 where jumuns.product_no39=product.no39 and jumuns.opts_no1=opts1.no39 and jumuns.opts_no2=opts2.no39 and jumuns.jumun_no39=$no;";
	$result=mysql_query($query);
	$count=mysql_num_rows($result);
	for($i=0;$i<$count;$i++)
	{
		$row1=mysql_fetch_array($result);

		$price = number_format($row1[price39]);
		$cash = number_format($row1[cash39]);
		echo("<tr bgcolor='#EEEEEE' height='20'>	
				<td width='340' height='20' align='left'>$row1[12]</td>	
				<td width='50' height='20' align='center'>$row1[num39]</td>	
				<td width='70' height='20' align='right'>$price</td>	
				<td width='70' height='20' align='right'>$cash</td>	
				<td width='50' height='20' align='center'>$row1[discount39] %</td>	
				<td width='60' height='20' align='center'>$row1[30]</td>	
				<td width='60' height='20' align='center'>$row1[name39]</td>	
			</tr>");
	}
?>
</table>

<img src="blank.gif" width="10" height="5"><br>
<table width="800" border="1" cellspacing="0" cellpadding="4" bordercolordark="white" bordercolorlight="black">
	<tr> 
	  <td width="100" height="20" bgcolor="#CCCCCC" align="center"><font color="#142712">총금액</font></td>
		<td width="700" height="20" bgcolor="#EEEEEE" align="right"><font color="#142712" size="3"><b><?=$total_cash?></b></font> 원&nbsp;&nbsp</td>
	</tr>
</table>

<br>
<table width="800" border="0" cellspacing="0" cellpadding="7">
	<tr> 
		<td align="center">
			<input type="button" value="이 전 화 면" onClick="javascript:history.back();">&nbsp
			<input type="button" value="프린트" onClick="javascript:print();">
		</td>
	</tr>
</table>

</center>

<br>
</body>
</html>
