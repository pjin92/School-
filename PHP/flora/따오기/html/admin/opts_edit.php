<!-------------------------------------------------------------------------------------------->	
<!-- ���α׷� : ���θ� �����ϱ� �ǽ����ü� (�ǽ��� HTML)                                    -->
<!--                                                                                        -->
<!-- �� �� �� : ������ (2008.2.4)                                                           -->
<!-------------------------------------------------------------------------------------------->	
<?
	include "../common.php";
?>
<?
  $query="select * from opts where no59=$no1;";
  $result=mysql_query($query);
  if(!$result) exit("��������");
  $row=mysql_fetch_array($result);
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

<form name="form1" method="post" action="opts_update.php">
<?
  $query="select * from opt where no59=$no1;";
  $result=mysql_query($query);
  if(!$result) exit("��������");
  $row=mysql_fetch_array($result);
?>
<input type="hidden" name="no1" value="<?=$row[no59]?>">
<?
  $query="select * from opts where no59=$no2;";
  $result=mysql_query($query);
  if(!$result) exit("��������");
  $row=mysql_fetch_array($result);
?>
<input type="hidden" name="no2" value="<?=$row[no59]?>">

<table width="500" border="1" cellspacing="0" bordercolordark="white" bordercolorlight="black">
	<tr> 
		<td width="100" height="20" bgcolor="#CCCCCC" align="center">
			<font color="#142712">�ҿɼǹ�ȣ</font>
		</td>
		<td width="400" height="20"  bgcolor="#F2F2F2"><?=$row[no59]?></td>
	</tr>
	<tr> 
		<td width="100" height="20" bgcolor="#CCCCCC" align="center">
			<font color="#142712">�ҿɼǸ�</font>
		</td>
		<td width="400" height="20"  bgcolor="#F2F2F2">
			<input type="text" name="name" value="<?=$row[name59]?>" size="20" maxlength="20">
		</td>
	</tr>
</table>
<br>
<table width="500" border="0" cellspacing="0" cellpadding="7">
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
