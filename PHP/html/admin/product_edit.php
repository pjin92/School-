<!-------------------------------------------------------------------------------------------->	
<!-- ���α׷� : ���θ� �����ϱ� �ǽ����ü� (�ǽ��� HTML)                                    -->
<!--                                                                                        -->
<!-- �� �� �� : ������ (2008.2.4)                                                           -->
<!-------------------------------------------------------------------------------------------->	
<?
include "../common.php";
$query = "select * from product where no68=$no;";
	$result=mysql_query($query);
	if(!$result) exit("��������");
	$row=mysql_fetch_array($result);

?>

<html>
<head>
<title>���θ� ������ Ȩ������</title>
<meta http-equiv="content-type" content="text/html; charset=euc-kr">
<link rel="stylesheet" href="include/font.css">
<script language="JavaScript" src="include/common.js"></script>

<script language="JavaScript">
	function imageView(strImage)
	{
		this.document.images["big"].src = strImage;
	}
</script>

</head>

<body bgcolor="white" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

<form name="form1" method="post" action="product_update.php" enctype="multipart/form-data">

<input type="hidden" name="sel1" value="<?=$sel1?>">
<input type="hidden" name="sel2" value="<?=$sel2?>">
<input type="hidden" name="sel3" value="<?=$sel3?>">
<input type="hidden" name="sel4" value="<?=$sel4?>">
<input type="hidden" name="text1" value="<?=$text1?>">
<input type="hidden" name="page" value="<?=$page?>">
<input type="hidden" name="no" value="<?=$row[no68]?>">

<?
	
	$name68 = stripslashes($row[name68]);
	$content68 = stripslashes($row[content68]);
	if ($row[content_html68]=="0")
		$content68=htmlspecialchars($content68); 
	else
		$content68=nl2br($content68);
	
	$regday1=substr($row[regday68],0,4);
	$regday2=substr($row[regday68],5,2);
	$regday3=substr($row[regday68],8,2);

?>

<center>

<br>
<script> document.write(menu());</script>
<br>
<br>

<table width="800" border="1" cellspacing="0" cellpadding="3" bordercolordark="white" bordercolorlight="black">
	<tr height="23"> 
		<td width="100" bgcolor="#CCCCCC" align="center">��ǰ�з�</td>
    <td width="700" bgcolor="#F2F2F2">
			<select name="menu">
<?
	for($i=0;$i<$n_menu;$i++)
	{
		if ($i==$row[menu68])
			echo("<option value='$i' selected>$a_menu[$i]</option>");
		else
			echo("<option value='$i'>$a_menu[$i]</option>");
     }
?>
			</select>
		</td>
	</tr>
	<tr height="23"> 
		<td width="100" bgcolor="#CCCCCC" align="center">��ǰ�ڵ�</td>
		<td width="700"  bgcolor="#F2F2F2">
			<input type="text" name="code" value="<?=$row[code68]?>" size="20" maxlength="20">
		</td>
	</tr>
	<tr> 
		<td width="100" bgcolor="#CCCCCC" align="center">��ǰ��</td>
		<td width="700"  bgcolor="#F2F2F2">
			<input type="text" name="name" value="<?=$name68?>" size="60" maxlength="60">
		</td>
	</tr>
	<tr> 
		<td width="100" bgcolor="#CCCCCC" align="center">������</td>
		<td width="700"  bgcolor="#F2F2F2">
			<input type="text" name="coname" value="<?=$row[coname68]?>" size="30" maxlength="30">
		</td>
	</tr>
	<tr> 
		<td width="100" bgcolor="#CCCCCC" align="center">�ǸŰ�</td>
		<td width="700"  bgcolor="#F2F2F2">
			<input type="text" name="price" value="<?=$row[price68]?>" size="12" maxlength="12"> ��
		</td>
	</tr>
	<tr> 
		<td width="100" bgcolor="#CCCCCC" align="center">�ɼ�</td>
    <td width="700"  bgcolor="#F2F2F2">
			<select name="opt1">
			<option value="0">�ɼǼ���</option>
	<?
	$query="select  *  from  opt order by name68;";
	$result=mysql_query($query);
	if(!$result) exit("��������");
	$count=mysql_num_rows($result);

	for($i=0;$i<$count;$i++)
	{
		$row1=mysql_fetch_array($result);
		if ($row[opt1]==$row1[no68])
			echo("<option value='$row1[no68]' selected>$row1[name68]</option>");
		else
			echo("<option value='$row1[no68]'>$row1[name68]</option>");
	}
?>
			</select> &nbsp; &nbsp; 

			<select name="opt2">
				<option value="0">�ɼǼ���</option>
<?
	$query="select  *  from  opt order by name68;";
	$result=mysql_query($query);
	if(!$result) exit("��������");
	$count=mysql_num_rows($result);

	for($i=0;$i<$count;$i++)
	{
		$row1=mysql_fetch_array($result);
		if ($row[opt2]==$row1[no68])
			echo("<option value='$row1[no68]' selected>$row1[name68]</option>");
		else
			echo("<option value='$row1[no68]'>$row1[name68]</option>");
	}
?>
			</select> &nbsp; &nbsp; 
		</td>
	</tr>
	<tr> 
		<td width="100" bgcolor="#CCCCCC" align="center">��ǰ����</td>
		<td width="700"  bgcolor="#F2F2F2">
		<?
			if ($row[content_html68]==0) 
			echo("<input type='radio' name='content_html' value='0' checked>Text
					<input type='radio' name='content_html' value='1'>Html<br>");
			else
			echo("<input type='radio' name='content_html' value='0' >Text
					<input type='radio' name='content_html' value='1' checked>Html<br>");
		?>
			<textarea name="content" rows="4" cols="70"><?=$content68?></textarea>
		</td>
	</tr>
	<tr> 
		<td width="100" bgcolor="#CCCCCC" align="center">��ǰ����</td>
    <td width="700"  bgcolor="#F2F2F2">
			<?
	if ($row[status68]==1) 
          echo("<input type='radio' name='status' value='1' checked>�Ǹ���
				<input type='radio' name='status' value='2'>�Ǹ�����
				<input type='radio' name='status' value='3'>ǰ��");
    elseif($row[status68]==2) 
          echo("<input type='radio' name='status' value='1'>�Ǹ���
				<input type='radio' name='status' value='2' checked>�Ǹ�����
				<input type='radio' name='status' value='3'>ǰ��");
	else
          echo("<input type='radio' name='status' value='1'>�Ǹ���
				<input type='radio' name='status' value='2'>�Ǹ�����
				<input type='radio' name='status' value='3' checked>ǰ��");
?>
		</td>
	</tr>
	<tr> 
		<td width="100" bgcolor="#CCCCCC" align="center">������</td>
		<td width="700"  bgcolor="#F2F2F2">
		<?
			if ($row[icon_new68]==1) 
				echo("<input type='checkbox' name='icon_new' value='1' checked>New&nbsp;&nbsp");
			else
				echo("<input type='checkbox' name='icon_new' value='1' >New&nbsp;&nbsp");
		?>

		<?
			if ($row[icon_hit68]==1) 
				echo("<input type='checkbox' name='icon_hit' value='1' checked>Hit&nbsp;&nbsp");
			else
				echo("<input type='checkbox' name='icon_hit' value='1' >Hit&nbsp;&nbsp");
		?>

		<?
			if ($row[icon_sale68]==1) 
				echo("<input type='checkbox' name='icon_sale' value='1' onclick='form1.discount.disabled=!form1.discount.disabled;' checked>Sale&nbsp;&nbsp");
			else
				echo("<input type='checkbox' name='icon_sale' value='1' onclick='form1.discount.disabled=!form1.discount.disabled;' >Sale&nbsp;&nbsp");

		?>

		<?
			if ($row[discount68]=="") 
				echo("������ : <input type='text' name='discount' value='' size='3' maxlength='3' disabled>%");
			else
				echo("������ : <input type='text' name='discount' value='$row[discount68]' size='3' maxlength='3'>%");
		?>
		<script language="JavaScript">
			if(document.form1.icon_sale.checked)
			{
				document.form1.discount.disabled=false;
			}
			else
			{
				document.form1.discount.disabled=true;
			}
		</script>
		</td>
	</tr>
	<tr> 
		<td width="100" bgcolor="#CCCCCC" align="center">�����</td>
		<td width="700"  bgcolor="#F2F2F2">
			<input type="text" name="regday1" value="<?=$regday1?>" size="4" maxlength="4"> �� &nbsp
			<input type="text" name="regday2" value="<?=$regday2?>" size="2" maxlength="2"> �� &nbsp
			<input type="text" name="regday3" value="<?=$regday3?>" size="2" maxlength="2"> �� &nbsp
		</td>
	</tr>
	<tr> 
		<td width="100" bgcolor="#CCCCCC" align="center">�̹���</td>
		<td width="700"  bgcolor="#F2F2F2">
		<?
			if(!$row[image1])
				$image1="nopic.jpg";
			else
				$image1=$row[image1];
			if(!$row[image2])
				$image2="nopic.jpg";
			else
					$image2=$row[image2];
			if(!$row[image3])
				$image3="nopic.jpg";
			else
				$image3=$row[image3];
	
		?>

			<table border="0" cellspacing="0" cellpadding="0" align="left">
				<tr>
					<td>
						<table width="390" border="0" cellspacing="0" cellpadding="0">
							<tr>
								<td>
									<input type='hidden' name='imagename1' value='<?=$row[image1]?>'>
									&nbsp;<input type="checkbox" name="checkno1" value="1"> <b>�̹���1</b>: <?=$row[image1]?>
									<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<input type="file" name="image1" size="20" value="ã�ƺ���">
								</td>
							</tr> 
							<tr>
								<td>
									<input type='hidden' name='imagename2' value='<?=$row[image2]?>'>
									&nbsp;<input type="checkbox" name="checkno2" value="1"> <b>�̹���2</b>: <?=$row[image2]?>
									<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<input type="file" name="image2" size="20" value="ã�ƺ���">
								</td>
							</tr> 
							<tr>
								<td>
									<input type='hidden' name='imagename3' value='<?=$row[image3]?>'>
									&nbsp;<input type="checkbox" name="checkno3" value="1"> <b>�̹���3</b>:<?=$row[image3]?>
									<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<input type="file" name="image3" size="20" value="ã�ƺ���">
								</td>
							</tr> 
							<tr>
								<td><br>&nbsp;&nbsp;&nbsp;�� ������ �׸��� üũ�� �ϼ���.</td>
							</tr> 
				  	</table>
						<br><br><br><br><br>
						<table width="390" border="0" cellspacing="0" cellpadding="0">
							<tr>
								<td  valign="middle">&nbsp;
									<img src="../product/<?=$image1?>" width="50" height="50" border="1" style='cursor:hand' onclick="imageView('../product/<?=$image1?>')">&nbsp;
									<img src="../product/<?=$image2?>" width="50" height="50" border="1" style='cursor:hand' onclick="imageView('../product/<?=$image2?>')">&nbsp;
									<img src="../product/<?=$image3?>"  width="50" height="50" border="1" style='cursor:hand' onclick="imageView('../product/<?=$image3?>')">&nbsp;
								</td>
							</tr>				 
						</table>
					</td>
					<td>
						<td align="right" width="310"><img name="big" src="../product/<?=$image1?>" width="300" height="300" border="1"></td>
					</td>
				</tr>
			</table>

		</td>
	</tr>
</table>

<br>
<table width="800" border="0" cellspacing="0" cellpadding="5">
	<tr> 
		<td align="center">
			<input type="submit" value="�����ϱ�"> &nbsp;&nbsp
			<input type="button" value="����ȭ��" onClick="javascript:history.back();">
		</td>
	</tr>
</table>

</form>

</center>

</body>
</html>
