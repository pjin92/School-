<!-------------------------------------------------------------------------------------------->	
<!-- ���α׷� : ���θ� �����ϱ� �ǽ����ü� (�ǽ��� HTML)                                    -->
<!--                                                                                        -->
<!-- �� �� �� : ������ (2008.2.4)                                                           -->
<!-------------------------------------------------------------------------------------------->	
<?
	include "../common.php";
?>
<html>
<head>
<title>���θ� ������ Ȩ������</title>
<meta http-equiv="content-type" content="text/html; charset=euc-kr">
<link rel="stylesheet" href="include/font.css">
<script language="JavaScript" src="include/common.js"></script>
</head>

<body bgcolor="white" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

<form name="form1" method="post" action="product_insert.php" enctype="multipart/form-data">

<center>

<br>
<script> document.write(menu());</script>
<br>
<br>

<table width="800" border="1" cellspacing="0" cellpadding="3" bordercolordark="white" bordercolorlight="black">
	<tr height="23"> 
		<td width="100" bgcolor="#CCCCCC" align="center">��ǰ�з�</td>
    <td width="700" bgcolor="#F2F2F2">
			<?
		echo("<select name='menu'>");
for($i=0;$i<$n_menu;$i++)
{
    if ($i==0)
       echo("<option value='$i' selected>$a_menu[$i]</option>");
    else
       echo("<option value='$i'>$a_menu[$i]</option>");
}
echo("</select>");


			?>
		</td>
	</tr>
	<tr height="23"> 
		<td width="100" bgcolor="#CCCCCC" align="center">��ǰ�ڵ�</td>
		<td width="700" bgcolor="#F2F2F2">
			<input type="text" name="code" value="" size="20" maxlength="20">
		</td>
	</tr>
	<tr> 
		<td width="100" bgcolor="#CCCCCC" align="center">��ǰ��</td>
		<td width="700" bgcolor="#F2F2F2">
			<input type="text" name="name" value="" size="60" maxlength="60">
		</td>
	</tr>
	<tr> 
		<td width="100" bgcolor="#CCCCCC" align="center">������</td>
		<td width="700" bgcolor="#F2F2F2">
			<input type="text" name="coname" value="" size="30" maxlength="30">
		</td>
	</tr>
	<tr> 
		<td width="100" bgcolor="#CCCCCC" align="center">�ǸŰ�</td>
		<td width="700" bgcolor="#F2F2F2">
			<input type="text" name="price" value="" size="12" maxlength="12"> ��
		</td>
	</tr>
	<tr> 
		<td width="100" bgcolor="#CCCCCC" align="center">�ɼ�</td>
    <td width="700" bgcolor="#F2F2F2">
			<?
				$query="select * from opt order by name68";
				$result=mysql_query($query);
				if(!$result) exit("��������");
				$count=mysql_num_rows($result);
				echo("<select name='opt1'>
				<option value='0' selected>�ɼǼ���</option>");
				for($i=0;$i<$count;$i++)
				{
					$row=mysql_fetch_array($result);
					$name=$row[name68];
					echo("<option value='$row[no68]'>$name </option>");
				}
				echo("</select>");

			?>
			<?
				$query="select * from opt order by name68";
				$result=mysql_query($query);
				if(!$result) exit("��������");
				$count=mysql_num_rows($result);
				echo("<select name='opt2'>
				<option value='0' selected>�ɼǼ���</option>");
				for($i=0;$i<$count;$i++)
				{
					$row=mysql_fetch_array($result);
					$name=$row[name68];
					echo("<option value='$row[no68]'>$name </option>");
				}
				echo("</select>");

			?>
		</td>
	</tr>
	<tr> 
		<td width="100" bgcolor="#CCCCCC" align="center">��ǰ����</td>
		<td width="700" bgcolor="#F2F2F2">
			<input type="radio" name="content_html" value="0" checked> Text
			<input type="radio" name="content_html" value="1"> Html<br>
			<textarea name="content" rows="10" cols="80"></textarea>
		</td>
	</tr>
	<tr> 
		<td width="100" bgcolor="#CCCCCC" align="center">��ǰ����</td>
    <td width="700" bgcolor="#F2F2F2">
			<input type="radio" name="status" value="1" checked> �Ǹ���
			<input type="radio" name="status" value="2"> �Ǹ�����
			<input type="radio" name="status" value="3"> ǰ��
		</td>
	</tr>
	<tr> 
		<td width="100" bgcolor="#CCCCCC" align="center">������</td>
		<td width="700" bgcolor="#F2F2F2">
			<input type="checkbox" name="icon_new" value="1"> New &nbsp;&nbsp	
			<input type="checkbox" name="icon_hit" value="1"> Hit &nbsp;&nbsp	
			<input type="checkbox" name="icon_sale" value="1" onclick="form1.discount.disabled=!form1.discount.disabled;"> Sale &nbsp;&nbsp
			������ : <input type="text" name="discount" value="" size="3" maxlength="3" disabled> %
		</td>
	</tr>
	<tr> 
		<td width="100" bgcolor="#CCCCCC" align="center">�����</td>
		<td width="700" bgcolor="#F2F2F2">
		<?
			$today1=date("Y");
			$today2=date("m");
			$today3=date("d");
		?>

			<input type="text" name="regday1" value="<?=$today1?>" size="4" maxlength="4"> �� &nbsp
			<input type="text" name="regday2" value="<?=$today2?>" size="2" maxlength="2"> �� &nbsp
			<input type="text" name="regday3" value="<?=$today3?>" size="2" maxlength="2"> ��
		</td>
	</tr>
	<tr> 
		<td width="100" bgcolor="#CCCCCC" align="center">�̹���</td>
		<td width="700" bgcolor="#F2F2F2">
			<b>�̹���1</b>: <input type="file" name="image1" size="30" value="ã�ƺ���"><br>
			<b>�̹���2</b>: <input type="file" name="image2" size="30" value="ã�ƺ���"><br>
			<b>�̹���3</b>: <input type="file" name="image3" size="30" value="ã�ƺ���"><br>
		</td>
	</tr>
</table>

<br>
<table width="800" border="0" cellspacing="0" cellpadding="7">
	<tr> 
		<td align="center">
			<input type="submit" value="����ϱ�"> &nbsp;&nbsp
			<input type="button" value="����ȭ��" onClick="javascript:history.back();">
		</td>
	</tr>
</table>

</form>

</center>

</body>
</html>
