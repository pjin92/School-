<!-------------------------------------------------------------------------------------------->	
<!-- ���α׷� : ���θ� �����ϱ� �ǽ����ü� (�ǽ��� HTML)                                    -->
<!--                                                                                        -->
<!-- �� �� �� : ������ (2008.2.4)                                                           -->
<!-------------------------------------------------------------------------------------------->	
<?
	include "../common.php";
	$query="select * from faq order by no39 ;";
	$result=mysql_query($query);
	$count=mysql_num_rows($result);
?>
<html>
<head>
<title>���θ� Ȩ������</title>
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
		<td align="left"  height="50" valign="bottom">&nbsp �ڷ�� : <font color="#FF0000"><?=$count?></font></td>
		<td align="right" height="50" valign="bottom">
			<input type="button" value="�ű��Է�" onclick="javascript:go_new();"> &nbsp
		</td>
	</tr>
	<tr><td height="5" colspan="2"></td></tr>
</table>

<table width="600" border="1" cellspacing="0" cellpadding="4"  bordercolordark="white" bordercolorlight="black">
	<tr bgcolor="#CCCCCC" height="20"> 
		<td width="50"  align="center"><font color="#142712">��ȣ</font></td>
		<td width="450" align="center"><font color="#142712">����</font></td>
		<td width="100" align="center"><font color="#142712">����/����</font></td>
	</tr>
<?
	for ($i=0; $i<$count; $i++)
	{
		$row=mysql_fetch_array($result);
		$title39 = stripslashes($row[title39]);
		echo("	<tr bgcolor='#F2F2F2' height='20'>	
		<td width='50'  align='center'>$row[no39]</td>
		<td width='450' align='left'>$title39</td>
		<td width='100' align='center'>
			<a href='faq_edit.php?no=$row[no39]'>����</a>/
			<a href='faq_delete.php?no=$row[no39]' onclick='javascript:return confirm(\"�����ұ�� ?\");'>����</a>
		</td>
	</tr>");
	}
?>

</table>

<br>
</center>

</body>
</html>