<!-------------------------------------------------------------------------------------------->	
<!-- ���α׷� : ���θ� �����ϱ� �ǽ����ü� (�ǽ��� HTML)                                    -->
<!--                                                                                        -->
<!-- �� �� �� : ������ (2008.2.4)                                                           -->
<!-------------------------------------------------------------------------------------------->	
<?
	include "../common.php";
	$query = "select * from faq where no39=$no;";
	$result=mysql_query($query);
	if(!$result) exit("��������ť����Ʈ��������");
	$row=mysql_fetch_array($result);
	$title39 = stripslashes($row[title39]);
	$content39 = stripslashes($row[content39]);
?>
<html>
<head>
<title>���θ� Ȩ������</title>
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

<form name="form1" method="post" action="faq_update.php">
<input type="hidden" name="no" value="<?=$row[no39]?>">
<table width="600" border="1" cellspacing="0" bordercolordark="white" bordercolorlight="black">
	<tr> 
		<td width="100" height="20" bgcolor="#CCCCCC" align="center">
			<font color="#142712">������</font>
		</td>
		<td width="500" height="20"  bgcolor="#F2F2F2">
			&nbsp <input type="text" name="title" value="<?=$title39?>" size="67">
		</td>
	</tr>
	<tr> 
		<td width="100" height="20" bgcolor="#CCCCCC" align="center">
			<font color="#142712">�۳���</font>
		</td>
		<td width="500" height="20" bgcolor="#F2F2F2">
			&nbsp <textarea name="content" rows="7" cols="65"><?=$content39?></textarea>
		</td>
	</tr>
</table>
<br>
<table width="600" border="0" cellspacing="0" cellpadding="7">
	<tr> 
		<td align="center">
			<input type="submit" value="�� �� �� ��"> &nbsp;&nbsp
			<input type="button" value="�� �� ȭ ��" onClick="javascript:history.back();">
		</td>
	</tr>
</table>

</form>

</center>

</body>
</html>
