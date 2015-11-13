<!-------------------------------------------------------------------------------------------->	
<!-- 프로그램 : 쇼핑몰 따라하기 실습지시서 (실습용 HTML)                                    -->
<!--                                                                                        -->
<!-- 만 든 이 : 윤형태 (2008.2.4)                                                           -->
<!-------------------------------------------------------------------------------------------->	
<?
	if (!$cookie_admin){
	echo("<script>location.href='index.html'</script>");
	}
	include "../common.php";
	if(!$text1)
	$query="select * from member order by name68";
else
	if ($sel1==0)
		$query="select * from member where name68 like '$text1%' order by name68;";
	else
		$query="select * from member where uid68 like '$text1%' order by uid68;";
	$result=mysql_query($query);
	$count=mysql_num_rows($result);
	
?>
<html>
<head>
<title>쇼핑몰 관리자 홈페이지</title>
<meta http-equiv="content-type" content="text/html; charset=euc-kr">
<link rel="stylesheet" href="include/font.css">
<script language="JavaScript" src="include/common.js"></script>
</head>

<body bgcolor="white" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

<center>

<br>
<script> document.write(menu());</script>

<table width="800" border="0" cellspacing="0" cellpadding="0">
	<form name="form1" method="post" action="member.php">
	<tr height="40">
		<td width="200" valign="bottom">&nbsp 회원수 : <font color="#FF0000"><?=$count?></font></td>
		<td width="200">&nbsp</td>
		<td width="350" align="right" valign="bottom">
			<?
				echo("<select name='sel1'>");
				for ($i=0; $i<2; $i++)
			{
				if ($sel1==$i)
				echo("<option value='$i' selected>$a_idname[$i]</option>");
			else
				echo("<option value='$i'>$a_idname[$i]</option>");
			}
				echo("</select>");
			?>
			<input type="text" name="text1" size="15" value="<?=$text1?>">&nbsp
		</td>
		<td width="50" valign="bottom">
			<input type="button" value="검색" onclick="javascript:form1.submit();">&nbsp
		</td>
	</tr>
	<tr><td height="5" colspan="4"></td></tr>
	</form>
</table>

<table width="800" border="1" cellspacing="0" bordercolordark="white" bordercolorlight="black">
	<tr bgcolor="#CCCCCC" height="23"> 
		<td width="100" align="center">ID</td>
		<td width="100" align="center">이름</td>
		<td width="100" align="center">전화</td>
		<td width="100" align="center">핸드폰</td>
		<td width="200" align="center">E-Mail</td>
		<td width="100" align="center">회원구분</td>
		<td width="100" align="center">수정/삭제</td>
	</tr>
	<?

	if(!$page) $page=1;
	$pages = ceil($count/$page_line);
	$first = 1;
	if ($count>0) $first = $page_line*($page-1);
	$page_last=$count-$first;
	if ($page_last>$page_line) $page_last=$page_line;
	if($count>0) mysql_data_seek($result,$first);

	for($i=0;$i<$page_last;$i++)
	{
		$row=mysql_fetch_array($result);
		
		if($row[gubun68]==0)
			$gubun="회원";
		else
			$gubun="탈퇴";
			
		$tel1=trim(substr($row[tel68],0,3));        // 0번 위치에서 3자리 문자열 추출
		$tel2=trim(substr($row[tel68],3,4));        // 3번 위치에서 4자리
		$tel3=trim(substr($row[tel68],7,4));        // 7번 위치에서 4자리

		$tel = $tel1 . "-" . $tel2. "-" . $tel3;

		$phone1=trim(substr($row[phone68],0,3));        // 0번 위치에서 3자리 문자열 추출
		$phone2=trim(substr($row[phone68],3,4));        // 3번 위치에서 4자리
		$phone3=trim(substr($row[phone68],7,4));        // 7번 위치에서 4자리

		$phone = $phone1. "-" . $phone2. "-" . $phone3;
		
		echo("<tr bgcolor='#F2F2F2' height='23'>	
				<td width='100'>&nbsp $row[uid68]</td>	
				<td width='100'>&nbsp $row[name68]</td>	
				<td width='100'>&nbsp $tel</td>	
				<td width='100'>&nbsp $phone</td>	
				<td width='200'>&nbsp $row[email68]</td>	
				<td width='100' align='center'>$gubun</td>	
				<td width='100' align='center'>
				<a href='member_edit.php?no=$row[no68]'>수정</a>/
				<a href='member_delete.php?no=$row[no68]' onclick='javascript:return confirm(\"삭제할까요 ?\");'>삭제</a>
				</td>
			 </tr>");
	}
?>
</table>
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
		echo("<a href='member.php?page=$tmp&sel1=$sel1&text1=$text1'>
		<img src='images/i_prev.gif' align='absmiddle' border='0'></a>&nbsp");
	}
	for($i=$page_s+1; $i<=$page_e; $i++)
	{
		if($page ==$i)
			echo("<font color='#FC0504'><b>$i</b></font>&nbsp");
		else
			echo("<a href='member.php?page=$i&sel1=$sel1&text1=$text1'>[$i]</a>&nbsp");
	}
	if ($block < $blocks)
	{
		$tmp = $page_e+1;
		echo("&nbsp<a href='member.php?page=$tmp&sel1=$sel1&text1=$text1'>
		<img src='images/i_next.gif' align='absmiddle' border='0'></a>");
	}
	echo("</td>
		</tr>
		</table>");
?>

</center>

</body>
</html>