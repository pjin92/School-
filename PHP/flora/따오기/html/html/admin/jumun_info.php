<!-------------------------------------------------------------------------------------------->	
<!-- ���α׷� : ���θ� �����ϱ� �ǽ����ü� (�ǽ��� HTML)                                    -->
<!--                                                                                        -->
<!-- �� �� �� : ������ (2008.2.4)                                                           -->
<!-------------------------------------------------------------------------------------------->	
<?
	include "../common.php";
	$query = "select * from jumun where no39=$no;";
	$result=mysql_query($query);
	$row=mysql_fetch_array($result);

	$o_tel1=trim(substr($row[o_tel39],0,3));        // 0�� ��ġ���� 3�ڸ� ���ڿ� ����
	$o_tel2=trim(substr($row[o_tel39],3,4));        // 3�� ��ġ���� 4�ڸ�
	$o_tel3=trim(substr($row[o_tel39],7,4));        // 7�� ��ġ���� 4�ڸ�

	$o_phone1=trim(substr($row[o_phone39],0,3));        // 0�� ��ġ���� 3�ڸ� ���ڿ� ����
	$o_phone2=trim(substr($row[o_phone39],3,4));        // 3�� ��ġ���� 4�ڸ�
	$o_phone3=trim(substr($row[o_phone39],7,4));        // 7�� ��ġ���� 4�ڸ�

	$o_zip1=trim(substr($row[o_zip39],0,3));
	$o_zip2=trim(substr($row[o_zip39],3,3));

	$o_tel=$o_tel1."-".$o_tel2."-".$o_tel3;
	$o_phone=$o_phone1."-".$o_phone2."-".$o_phone3;
	$o_zip=$o_zip1."-".$o_zip2;

	$r_tel1=trim(substr($row[r_tel39],0,3));        // 0�� ��ġ���� 3�ڸ� ���ڿ� ����
	$r_tel2=trim(substr($row[r_tel39],3,4));        // 3�� ��ġ���� 4�ڸ�
	$r_tel3=trim(substr($row[r_tel39],7,4));        // 7�� ��ġ���� 4�ڸ�

	$r_phone1=trim(substr($row[r_phone39],0,3));        // 0�� ��ġ���� 3�ڸ� ���ڿ� ����
	$r_phone2=trim(substr($row[r_phone39],3,4));        // 3�� ��ġ���� 4�ڸ�
	$r_phone3=trim(substr($row[r_phone39],7,4));        // 7�� ��ġ���� 4�ڸ�

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

<table width="800" border="1" cellspacing="0" cellpadding="4" bordercolordark="white" bordercolorlight="black">
	<tr> 
        <td width="100" height="20" bgcolor="#CCCCCC" align="center"><font color="#142712">�ֹ���ȣ</font></td>
        <td width="300" height="20" bgcolor="#EEEEEE"><font size="3"><b><?=$row[no39]?></b></font></td>
        <td width="100" height="20" bgcolor="#CCCCCC" align="center"><font color="#142712">�ֹ���</font></td>
        <td width="300" height="20" bgcolor="#EEEEEE"><?=$row[jumunday39]?></td>
	</tr>
</table>
<br>
<table width="800" border="1" cellspacing="0" cellpadding="4" bordercolordark="white" bordercolorlight="black">
	<tr> 
        <td width="100" height="20" bgcolor="#CCCCCC" align="center"><font color="#142712">�ֹ���</font></td>
        <td width="300" height="20" bgcolor="#EEEEEE"><?=$row[o_name39]?> 
<?
	if ($row[member_no39]==0) 
          echo("(��ȸ��)");
    else
          echo("");

?>		</td>
		<td width="100" height="20" bgcolor="#CCCCCC" align="center"><font color="#142712">�ֹ�����ȭ</font></td>
        <td width="300" height="20" bgcolor="#EEEEEE"><?=$o_tel?> </td>
	</tr>
	<tr> 
        <td width="100" height="20" bgcolor="#CCCCCC" align="center"><font color="#142712">�ֹ��� E-Mail</font></td>
        <td width="300" height="20" bgcolor="#EEEEEE"><?=$row[o_email39]?></td>
        <td width="100" height="20" bgcolor="#CCCCCC" align="center"><font color="#142712">�ֹ����ڵ���</font></td>
        <td width="300" height="20" bgcolor="#EEEEEE"><?=$o_phone?></td>
	</tr>
	<tr> 
        <td width="100" height="20" bgcolor="#CCCCCC" align="center"><font color="#142712">�ֹ����ּ�</font></td>
        <td width="300" height="20" bgcolor="#EEEEEE" colspan="3">(<?=$o_zip?>) <?=$row[o_juso39]?></td>
	</tr>
	</tr>
</table>
<img src="blank.gif" width="10" height="5"><br>
<table width="800" border="1" cellspacing="0" cellpadding="4" bordercolordark="white" bordercolorlight="black">
	<tr> 
        <td width="100" height="20" bgcolor="#CCCCCC" align="center"><font color="#142712">������</font></td>
        <td width="300" height="20" bgcolor="#EEEEEE"><?=$row[r_name39]?></td>
        <td width="100" height="20" bgcolor="#CCCCCC" align="center"><font color="#142712">��������ȭ</font></td>
        <td width="300" height="20" bgcolor="#EEEEEE"><?=$r_tel?></td>
	</tr>
	<tr> 
        <td width="100" height="20" bgcolor="#CCCCCC" align="center"><font color="#142712">������ E-Mail</font></td>
        <td width="300" height="20" bgcolor="#EEEEEE"><?=$row[r_email39]?></td>
        <td width="100" height="20" bgcolor="#CCCCCC" align="center"><font color="#142712">�������ڵ���</font></td>
        <td width="300" height="20" bgcolor="#EEEEEE"><?=$r_phone?></td>
	</tr>
	<tr> 
        <td width="100" height="20" bgcolor="#CCCCCC" align="center"><font color="#142712">�������ּ�</font></td>
        <td width="300" height="20" bgcolor="#EEEEEE" colspan="3">(<?=$r_zip?>) <?=$row[r_juso39]?></td>
	</tr>
	<tr> 
        <td width="100" height="20" bgcolor="#CCCCCC" align="center"><font color="#142712">�޸�</font></td>
        <td width="300" height="50" bgcolor="#EEEEEE" colspan="3"><?=$memo39?></td>
	</tr>
</table>
<br>
<table width="800" border="1" cellspacing="0" cellpadding="4" bordercolordark="white" bordercolorlight="black">
	<tr> 
        <td width="100" height="20" bgcolor="#CCCCCC" align="center"><font color="#142712">��������</font></td>
        <td width="300" height="20" bgcolor="#EEEEEE">
<?
	if ($row[pay_method39]==0) 
          echo("ī��");
    else
          echo("������");

?>
		</td>
        <td width="100" height="20" bgcolor="#CCCCCC" align="center"><font color="#142712">ī����ι�ȣ </font></td>
        <td width="300" height="20" bgcolor="#EEEEEE">
<?
	if ($row[pay_method39]==0) 
          echo("$row[card_okno39]");
    else
          echo("��");

?>&nbsp</td>
	</tr>
	<tr> 
        <td width="100" height="20" bgcolor="#CCCCCC" align="center"><font color="#142712">ī�� �Һ�</font></td>
        <td width="300" height="20" bgcolor="#EEEEEE">
<?
	if($row[card_okno39]!=0)
	{
		if($row[card_halbu39]==0)
			echo("�Ͻú�");
		elseif ($row[card_halbu39]==3)
			echo("3����");
		elseif ($row[card_halbu39]==6)
			echo("6����");
		elseif ($row[card_halbu39]==9)
			echo("9����");
		elseif ($row[card_halbu39]==12)
			echo("12����");
	}
	else
	echo("��");
?>
		
		</td>
        <td width="100" height="20" bgcolor="#CCCCCC" align="center"><font color="#142712">ī������</font></td>
        <td width="300" height="20" bgcolor="#EEEEEE">
<?
	if($row[card_okno39]!=0)
	{
		if($row[card_kind39]==1)
			echo("����ī��");
		elseif ($row[card_kind39]==2)
			echo("����ī��");
		elseif ($row[card_kind39]==3)
			echo("�츮ī��");
		elseif ($row[card_kind39]==4)
			echo("�ϳ�ī��");

	}
	else
	echo("��");
?>
		</td>
	</tr>
	<tr> 
        <td width="100" height="20" bgcolor="#CCCCCC" align="center"><font color="#142712">������</font></td>
        <td width="300" height="20" bgcolor="#EEEEEE">
<?
	if($row[pay_method39]==1)
	{
		if($row[bank_kind39]==1)
			echo("�������� : 123456-12-123456");
		else
			echo("�������� : 123-123-123456");
	}
	else
	echo("��");
?>		
		</td>
        <td width="100" height="20" bgcolor="#CCCCCC" align="center"><font color="#142712">�Ա����̸�</font></td>
        <td width="300" height="20" bgcolor="#EEEEEE">
<?
	if ($row[pay_method39]==1) 
		echo("$row[bank_sender39]");
	else
		echo("��");
?>
	</tr>
</table>
<br>
<table width="800" border="1" cellspacing="0" cellpadding="4" bordercolordark="white" bordercolorlight="black">
	<tr bgcolor="#CCCCCC"> 
    <td width="340" height="20" align="center"><font color="#142712">��ǰ��</font></td>
		<td width="50"  height="20" align="center"><font color="#142712">����</font></td>
		<td width="70"  height="20" align="center"><font color="#142712">�ܰ�</font></td>
		<td width="70"  height="20" align="center"><font color="#142712">�ݾ�</font></td>
		<td width="50"  height="20" align="center"><font color="#142712">����</font></td>
		<td width="60"  height="20" align="center"><font color="#142712">�ɼ�1</font></td>
		<td width="60"  height="20" align="center"><font color="#142712">�ɼ�2</font></td>
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
	  <td width="100" height="20" bgcolor="#CCCCCC" align="center"><font color="#142712">�ѱݾ�</font></td>
		<td width="700" height="20" bgcolor="#EEEEEE" align="right"><font color="#142712" size="3"><b><?=$total_cash?></b></font> ��&nbsp;&nbsp</td>
	</tr>
</table>

<br>
<table width="800" border="0" cellspacing="0" cellpadding="7">
	<tr> 
		<td align="center">
			<input type="button" value="�� �� ȭ ��" onClick="javascript:history.back();">&nbsp
			<input type="button" value="����Ʈ" onClick="javascript:print();">
		</td>
	</tr>
</table>

</center>

<br>
</body>
</html>
