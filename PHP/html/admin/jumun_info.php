<!-------------------------------------------------------------------------------------------->	
<!-- ���α׷� : ���θ� �����ϱ� �ǽ����ü� (�ǽ��� HTML)                                    -->
<!--                                                                                        -->
<!-- �� �� �� : ������ (2008.2.4)                                                           -->
<!-------------------------------------------------------------------------------------------->	
<?if(!$cookie_admin) 
	echo("<script>location.href='index.html'</script>");
?>
<?
	include "../common.php";
	$query = "select * from jumun where no68=$no;";
	$result=mysql_query($query);
	$row=mysql_fetch_array($result);

	$o_tel1=trim(substr($row[o_tel68],0,3));       
	$o_tel2=trim(substr($row[o_tel68],3,4));       
	$o_tel3=trim(substr($row[o_tel68],7,4));        

	$o_phone1=trim(substr($row[o_phone68],0,3));      
	$o_phone2=trim(substr($row[o_phone68],3,4));        
	$o_phone3=trim(substr($row[o_phone68],7,4));       

	$o_zip1=trim(substr($row[o_zip68],0,3));
	$o_zip2=trim(substr($row[o_zip68],3,3));

	$o_tel=$o_tel1."-".$o_tel2."-".$o_tel3;
	$o_phone=$o_phone1."-".$o_phone2."-".$o_phone3;
	$o_zip=$o_zip1."-".$o_zip2;

	$r_tel1=trim(substr($row[r_tel68],0,3));        
	$r_tel2=trim(substr($row[r_tel68],3,4));      
	$r_tel3=trim(substr($row[r_tel68],7,4));      

	$r_phone1=trim(substr($row[r_phone68],0,3));        
	$r_phone2=trim(substr($row[r_phone68],3,4));       
	$r_phone3=trim(substr($row[r_phone68],7,4));       

	$r_zip1=trim(substr($row[r_zip68],0,3));
	$r_zip2=trim(substr($row[r_zip68],3,3));

	$r_tel=$r_tel1. "-".$r_tel2."-".$r_tel3;
	$r_phone=$r_phone1."-".$r_phone2."-".$r_phone3;
	$r_zip=$r_zip1."-".$r_zip2;

	$total_cash = number_format($row[total_cash68]);
	$memo68 = stripslashes($row[memo68]);
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
        <td width="300" height="20" bgcolor="#EEEEEE"><font size="3"><b><?=$row[no68]?></b></font></td>
        <td width="100" height="20" bgcolor="#CCCCCC" align="center"><font color="#142712">�ֹ���</font></td>
        <td width="300" height="20" bgcolor="#EEEEEE"><?=$row[jumunday68]?></td>
	</tr>
</table>
<br>
<table width="800" border="1" cellspacing="0" cellpadding="4" bordercolordark="white" bordercolorlight="black">
	<tr> 
        <td width="100" height="20" bgcolor="#CCCCCC" align="center"><font color="#142712">�ֹ���</font></td>
        <td width="300" height="20" bgcolor="#EEEEEE"><?=$row[o_name68]?> 
<?
	if ($row[member_no68]==0) 
          echo("(��ȸ��)");
    else
          echo("");

?>		</td>
		<td width="100" height="20" bgcolor="#CCCCCC" align="center"><font color="#142712">�ֹ�����ȭ</font></td>
        <td width="300" height="20" bgcolor="#EEEEEE"><?=$o_tel?> </td>
	</tr>
	<tr> 
        <td width="100" height="20" bgcolor="#CCCCCC" align="center"><font color="#142712">�ֹ��� E-Mail</font></td>
        <td width="300" height="20" bgcolor="#EEEEEE"><?=$row[o_email68]?></td>
        <td width="100" height="20" bgcolor="#CCCCCC" align="center"><font color="#142712">�ֹ����ڵ���</font></td>
        <td width="300" height="20" bgcolor="#EEEEEE"><?=$o_phone?></td>
	</tr>
	<tr> 
        <td width="100" height="20" bgcolor="#CCCCCC" align="center"><font color="#142712">�ֹ����ּ�</font></td>
        <td width="300" height="20" bgcolor="#EEEEEE" colspan="3">(<?=$o_zip?>) <?=$row[o_juso68]?></td>
	</tr>
	</tr>
</table>
<img src="blank.gif" width="10" height="5"><br>
<table width="800" border="1" cellspacing="0" cellpadding="4" bordercolordark="white" bordercolorlight="black">
	<tr> 
        <td width="100" height="20" bgcolor="#CCCCCC" align="center"><font color="#142712">������</font></td>
        <td width="300" height="20" bgcolor="#EEEEEE"><?=$row[r_name68]?></td>
        <td width="100" height="20" bgcolor="#CCCCCC" align="center"><font color="#142712">��������ȭ</font></td>
        <td width="300" height="20" bgcolor="#EEEEEE"><?=$r_tel?></td>
	</tr>
	<tr> 
        <td width="100" height="20" bgcolor="#CCCCCC" align="center"><font color="#142712">������ E-Mail</font></td>
        <td width="300" height="20" bgcolor="#EEEEEE"><?=$row[r_email68]?></td>
        <td width="100" height="20" bgcolor="#CCCCCC" align="center"><font color="#142712">�������ڵ���</font></td>
        <td width="300" height="20" bgcolor="#EEEEEE"><?=$r_phone?></td>
	</tr>
	<tr> 
        <td width="100" height="20" bgcolor="#CCCCCC" align="center"><font color="#142712">�������ּ�</font></td>
        <td width="300" height="20" bgcolor="#EEEEEE" colspan="3">(<?=$r_zip?>) <?=$row[r_juso68]?></td>
	</tr>
	<tr> 
        <td width="100" height="20" bgcolor="#CCCCCC" align="center"><font color="#142712">�޸�</font></td>
        <td width="300" height="50" bgcolor="#EEEEEE" colspan="3"><?=$memo68?></td>
	</tr>
</table>
<br>
<table width="800" border="1" cellspacing="0" cellpadding="4" bordercolordark="white" bordercolorlight="black">
	<tr> 
        <td width="100" height="20" bgcolor="#CCCCCC" align="center"><font color="#142712">��������</font></td>
        <td width="300" height="20" bgcolor="#EEEEEE">
<?
	if ($row[pay_method68]==0) 
          echo("ī��");
    else
          echo("������");

?>
		</td>
        <td width="100" height="20" bgcolor="#CCCCCC" align="center"><font color="#142712">ī����ι�ȣ </font></td>
        <td width="300" height="20" bgcolor="#EEEEEE">
<?
	if ($row[pay_method68]==0) 
          echo("$row[card_okno68]");
    else
          echo("��");

?>&nbsp</td>
	</tr>
	<tr> 
        <td width="100" height="20" bgcolor="#CCCCCC" align="center"><font color="#142712">ī�� �Һ�</font></td>
        <td width="300" height="20" bgcolor="#EEEEEE">
<?
	if($row[card_okno68]!=0)
	{
		if($row[card_halbu68]==0)
			echo("�Ͻú�");
		elseif ($row[card_halbu68]==3)
			echo("3����");
		elseif ($row[card_halbu68]==6)
			echo("6����");
		elseif ($row[card_halbu68]==9)
			echo("9����");
		elseif ($row[card_halbu68]==12)
			echo("12����");
	}
	else
	echo("��");
?>
		
		</td>
        <td width="100" height="20" bgcolor="#CCCCCC" align="center"><font color="#142712">ī������</font></td>
        <td width="300" height="20" bgcolor="#EEEEEE">
<?
	if($row[card_okno68]!=0)
	{
		if($row[card_kind68]==1)
			echo("����ī��");
		elseif ($row[card_kind68]==2)
			echo("����ī��");
		elseif ($row[card_kind68]==3)
			echo("�츮ī��");
		elseif ($row[card_kind68]==4)
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
	if($row[pay_method68]==1)
	{
		if($row[bank_kind68]==1)
			echo("�������� : 000000-00-000000");
		else
			echo("�������� : 111-111-111111");
	}
	else
	echo("��");
?>		
		</td>
        <td width="100" height="20" bgcolor="#CCCCCC" align="center"><font color="#142712">�Ա����̸�</font></td>
        <td width="300" height="20" bgcolor="#EEEEEE">
<?
	if ($row[pay_method68]==1) 
		echo("$row[bank_sender68]");
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
	$query=" select * from jumuns, product, opts as opts1, opts as opts2 where jumuns.product_no68=product.no68 and jumuns.opts_no1=opts1.no68 and jumuns.opts_no2=opts2.no68 and jumuns.jumun_no68='$no';";
	$result=mysql_query($query);
	$count=mysql_num_rows($result);
	for($i=0;$i<$count;$i++)
	{
		$row1=mysql_fetch_array($result);

		$price = number_format($row1[price68]);
		$cash = number_format($row1[cash68]);
		echo("<tr bgcolor='#EEEEEE' height='20'>	
				<td width='340' height='20' align='left'>$row1[12]</td>	
				<td width='50' height='20' align='center'>$row1[num68]</td>	
				<td width='70' height='20' align='right'>$price</td>	
				<td width='70' height='20' align='right'>$cash</td>	
				<td width='50' height='20' align='center'>$row1[discount68] %</td>	
				<td width='60' height='20' align='center'>$row1[30]</td>	
				<td width='60' height='20' align='center'>$row1[name68]</td>	
			</tr>"			
			);
			//$baesong=number_format($baesongbi)."��";

	if($row[total_cash68]<$max_baesongbi)
				echo("<tr bgcolor='#EEEEEE' height='20'>	
				<td width='340' height='20' align='left'>��ۺ�</td>	
				<td width='50' height='20' align='center'>&nbsp;</td>	
				<td width='70' height='20' align='right'>2500</td>	
				<td width='70' height='20' align='right'>2500</td>	
				<td width='50' height='20' align='center'>&nbsp;</td>	
				<td width='60' height='20' align='center'>&nbsp;</td>	
				<td width='60' height='20' align='center'>&nbsp;</td>	
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
