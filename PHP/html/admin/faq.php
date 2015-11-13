<!-------------------------------------------------------------------------------------------->	
<!-- 프로그램 : 쇼핑몰 따라하기 실습지시서 (실습용 HTML)                                    -->
<!--                                                                                        -->
<!-- 만 든 이 : 윤형태 (2008.2.4)                                                           -->
<!-------------------------------------------------------------------------------------------->	
<?if(!$cookie_admin) 
	echo("<script>location.href='index.html'</script>");

	include "../common.php";
	$query="select * from faq order by no68 ;";
	$result=mysql_query($query);
	$count=mysql_num_rows($result);
?>
<html>
<head>
<title>쇼핑몰 홈페이지</title>
<meta http-equiv="content-type" content="text/html; charset=euc-kr">
<link rel="stylesheet" href="include/font.css">
<script language="JavaScript" src="include/common.js"></script>
<script>
	function go_new()
	{
		location.href="faq_new.php";
	}
</script>
</head>

<body bgcolor="white" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

<center>
<br>
<script> document.write(menu());</script>

<table width="600" border="0" cellspacing="0" cellpadding="0">
	<tr>
		<td align="left"  height="50" valign="bottom">&nbsp 자료수 : <font color="#FF0000"><?=$count?></font></td>
		<td align="right" height="50" valign="bottom">
			<input type="button" value="신규입력" onclick="javascript:go_new();"> &nbsp
		</td>
	</tr>
	<tr><td height="5" colspan="2"></td></tr>
</table>

<table width="600" border="1" cellspacing="0" cellpadding="4"  bordercolordark="white" bordercolorlight="black">
	<tr bgcolor="#CCCCCC" height="20"> 
		<td width="50"  align="center"><font color="#142712">번호</font></td>
		<td width="450" align="center"><font color="#142712">제목</font></td>
		<td width="100" align="center"><font color="#142712">수정/삭제</font></td>
	</tr>
<?
	for ($i=0; $i<$count; $i++)
	{
		$row=mysql_fetch_array($result);
		$title68 = stripslashes($row[title68]);
		echo("	<tr bgcolor='#F2F2F2' height='20'>	
		<td width='50'  align='center'>$row[no68]</td>
		<td width='450' align='left'>$title68</td>
		<td width='100' align='center'>
			<a href='faq_edit.php?no=$row[no68]'>수정</a>/
			<a href='faq_delete.php?no=$row[no68]' onclick='javascript:return confirm(\"삭제할까요 ?\");'>삭제</a>
		</td>
	</tr>");
	}
?>

</table>

<br>
</center>

</body>
</html>