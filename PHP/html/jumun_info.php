<!-------------------------------------------------------------------------------------------->	
<!-- ���α׷� : ���θ� �����ϱ� �ǽ����ü� (�ǽ��� HTML)                                    -->
<!--                                                                                        -->
<!-- �� �� �� : ������ (2008.2.4)                                                           -->
<!-------------------------------------------------------------------------------------------->	
<?
	include "common.php";
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
<title>�ູ�� �ϻ�</title>
<meta http-equiv="content-type" content="text/html; charset=euc-kr">
<link href="include/font.css" rel="stylesheet" type="text/css">
<script language="Javascript" src="include/common.js"></script>
</head>

<body style="margin:0">
<center>

<table width="959" border="0" cellspacing="0" cellpadding="0" align="center">
	<tr> 
		<td>
			<!--  ��� ���� �ΰ�  -------------------------------------------->
			<table border="0" cellspacing="0" cellpadding="0" width="182">
				<tr>
					<td><a href="index.html"><img src="images/top_logo.gif" width="182" height="40" border="0"></a></td>
				</tr>
			</table>
		</td>
		<td align="right" valign="bottom">
			<!--  ��ܸ޴� ���� (main_topmemnu.php) : Home/�α���/ȸ������/��ٱ���/�ֹ������ȸ/���ã���߰�  ---->	
			<?
				include "main_topmenu.php";
			?>
			<!--  ��ܸ޴� �� (main_topmemnu.php)  ---------->	
		</td>
	</tr>
</table>

<!--  ��� ���� �̹��� --------------------------------------------------->
<table width="959" border="0" cellspacing="0" cellpadding="0" align="center">
	<tr>
		<td><img src="images/main_image0.jpg" width="182" height="175"></td>
	  <td><img src="images/main_image1.gif" width="777" height="175"></td>
	</tr>
</table>

<!--  Category �޴� : �������� ���  --------------------------------------
<table width="959" height="25" border="0" cellspacing="0" cellpadding="0" align="center">
	<tr>
		<td align="left" bgcolor="#F7F7F7">
			<table border="0" cellspacing="0" cellpadding="0">
				<tr>
					<td><a href="product.html?no=1"><img src="images/main_menu01_off.gif" width="96" height="30" border="0"  onmouseover="img_change('on')" onmouseout="img_change('off')"></a></td>
					<td><a href="product.html?no=2"><img src="images/main_menu02_off.gif" width="96" height="30" border="0"  onmouseover="img_change('on')" onmouseout="img_change('off')"></a></td>
					<td><a href="product.html?no=3"><img src="images/main_menu03_off.gif" width="96" height="30" border="0"  onmouseover="img_change('on')" onmouseout="img_change('off')"></a></td>
					<td><a href="product.html?no=4"><img src="images/main_menu04_off.gif" width="96" height="30" border="0"  onmouseover="img_change('on')" onmouseout="img_change('off')"></a></td>
					<td><a href="product.html?no=5"><img src="images/main_menu05_off.gif" width="96" height="30" border="0"  onmouseover="img_change('on')" onmouseout="img_change('off')"></a></td>
					<td><a href="product.html?no=6"><img src="images/main_menu06_off.gif" width="96" height="30" border="0"  onmouseover="img_change('on')" onmouseout="img_change('off')"></a></td>
					<td><a href="product.html?no=7"><img src="images/main_menu07_off.gif" width="96" height="30" border="0"  onmouseover="img_change('on')" onmouseout="img_change('off')"></a></td>
					<td><a href="product.html?no=8"><img src="images/main_menu08_off.gif" width="96" height="30" border="0"  onmouseover="img_change('on')" onmouseout="img_change('off')"></a></td>
					<td><a href="product.html?no=9"><img src="images/main_menu09_off.gif" width="96" height="30" border="0"  onmouseover="img_change('on')" onmouseout="img_change('off')"></a></td>
					<td><a href="product.html?no=10"><img src="images/main_menu10_off.gif" width="96" height="30" border="0"  onmouseover="img_change('on')" onmouseout="img_change('off')"></a></td>
				</tr>
			</table>
		</td>
	</tr>
</table>
------------------------------------------------------------------------>

<!-- ��ǰ �˻� ���� (main_top.php) ------------------------------------->
<?
include "main_top.php";
?>
<!-- ��ǰ �˻� �� (main_top.php) --------------------------------------->

<table width="959" border="0" cellspacing="0" cellpadding="0" align="center">
	<tr><td height="10" colspan="2"></td></tr>
	<tr>
		<td height="100%" valign="top">
			<!--  ȭ�� �����޴� ���� (main_left.php) ------------------------------->
			<?
				include "main_left.php";
			?>
			<!--  ȭ�� �����޴� �� (main_left.php) --------------------------------->
		</td>
		<td width="10"></td>
		<td valign="top">

<!-------------------------------------------------------------------------------------------->	
<!-- ���� : �ٸ� �������� ������ �κ�                                                       -->
<!-------------------------------------------------------------------------------------------->	

			<table border="0" cellpadding="0" cellspacing="0" width="747">
				<tr><td height="13"></td></tr>
				<tr>
					<td height="30" align="center"><img src="images/jumun_title.gif" width="746" height="30" border="0"></td>
				</tr>
				<tr><td height="13"></td></tr>
			</table>
			<table border="0" cellpadding="0" cellspacing="0" width="690">
				<tr>
					<td><img src="images/jumun_title2.gif" border="0" align="absmiddle"></td>
				</tr>
				<tr><td height="5"></td></tr>
			</table>

			<table border="0" cellpadding="0" cellspacing="0" width="685" class="cmfont">
				<tr><td colspan="6" height="2" bgcolor="8B9CBF"></td></tr>
				<tr>
					<td width="60"  bgcolor="F2F2F2" align="center" height="30"></td>
					<td width="395" bgcolor="F2F2F2" align="center">��ǰ��</td>
					<td width="50"  bgcolor="F2F2F2" align="center">����</td>
					<td width="90"  bgcolor="F2F2F2" align="center">�ݾ�</td>
					<td width="90"  bgcolor="F2F2F2" align="center">�հ�</td>
				</tr>
				<tr><td colspan="6" bgcolor="DEDCDD"></td></tr>

				<?
	$query=" select * from ((jumuns left join opts as opts1 on jumuns.opts_no1=opts1.no68) left join opts as opts2 on jumuns.opts_no2=opts2.no68) left join product on jumuns.product_no68=product.no68 where jumuns.jumun_no68=$no;";
	
	$result=mysql_query($query);
	$count=mysql_num_rows($result);
	for($i=0;$i<$count;$i++)
	{
		$row1=mysql_fetch_array($result);

		$price = number_format($row1[price68]);
		$cash = number_format($row1[cash68]);
		$name68 = stripslashes($row1[name68]);
		$image1=$row1[image1];

		if($row1[product_no68]==0){
			$name68="��ۺ�";
			$image1="nopic.jpg";
			$price="2500";
			$discount="";}

		

		echo("<tr>
					<td width='60'>
						<a href='product_detail.php?no=$row1[no68]'><img src='product/$image1' width='50' height='50' border='0'></a>
					</td>
					<td height='52'>
						<a href='product_detail.php?no=$row1[no68]'><font color='686868'>$name68 </font><br><font color='#0068CC'>[�ɼ�]</font> $row1[11]&nbsp; $row1[14] $discount</a>
					</td>
					<td align='center'><font color='686868'>$row1[num68]</font></td>
					<td align='right'><font color='686868'>$price ��</font></td>
					<td align='right'><font color='686868'>$cash ��</font></td>
				</tr>
				<tr><td colspan='6' background='images/line_dot.gif'></td></tr>");
	}
?>
				<tr><td colspan="6" height="2" bgcolor="8B9CBF"></td></tr>
			</table>

			<br><br><br>

			<table border="0" cellpadding="0" cellspacing="0" width="690">
				<tr>
					<td><img src="images/jumun_title3.gif" border="0" align="absmiddle"></td>
				</tr>
				<tr><td height="5"></td></tr>
			</table>
			<table border="0" cellpadding="0" cellspacing="0" width="685" class="cmfont">
				<tr><td height="2" bgcolor="8B9CBF"></td></tr>
			</table>
			<table border="0" cellpadding="0" cellspacing="1" width="685" bgcolor="#EEEEEE" class="cmfont">
				<tr height="25">
					<td width="100" bgcolor="#F2F2F2">&nbsp;�ֹ���ȣ</td>
					<td width="242" bgcolor="#FFFFFF">&nbsp;<font color="#686868"><?=$row[no68]?><font></td>
					<td width="100" bgcolor="#F2F2F2">&nbsp;�����ݾ�</td>
					<td width="243" bgcolor="#FFFFFF">&nbsp;<font color="#D06404"><b><?=$total_cash?> ��</b></font></td>
				</tr>
				<tr height="25">
					<td width="100" bgcolor="#F2F2F2">&nbsp;�������</td>
					<td width="242" bgcolor="#FFFFFF">&nbsp;<font color="#686868">
<?
	if ($row[pay_method68]==0) 
          echo("ī��");
    else
          echo("������");

?>						</font>
					</td>
					<td width="100" bgcolor="#F2F2F2">&nbsp;���ι�ȣ</td>
					<td width="243" bgcolor="#FFFFFF">&nbsp;<font color="#686868">12341234</font></td>
				</tr>
				<tr height="25">
					<td width="100" bgcolor="#F2F2F2">&nbsp;ī������</td>
					<td width="242" bgcolor="#FFFFFF">&nbsp;<font color="#686868">
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
?>						</font>
					</td>
					<td width="100" bgcolor="#F2F2F2">&nbsp;�Һ�</td>
					<td width="243" bgcolor="#FFFFFF">&nbsp;<font color="#686868">
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
						</font>
					</td>
				</tr>
				<tr height="25">
					<td width="100" bgcolor="#F2F2F2">&nbsp;������</td>
					<td width="242" bgcolor="#FFFFFF">&nbsp;<font color="#686868">
<?
	if($row[pay_method68]==1)
	{
		if($row[bank_kind68]==1)
			echo("�������� :  000000-00-000000 ");
		else
			echo("�������� : 111-111-111111");
	}
	else
	echo("��");
?>
						</font>
					</td>
					<td width="100" bgcolor="#F2F2F2">&nbsp;�������</td>
					<td width="243" bgcolor="#FFFFFF">&nbsp;<font color="#686868">
<?
	if ($row[pay_method68]==1) 
		echo("$row[bank_sender68]");
	else
		echo("��");
?>						</font>
					</td>
				</tr>
			</table>
			<table border="0" cellpadding="0" cellspacing="0" width="685" class="cmfont">
				<tr><td height="2" bgcolor="8B9CBF"></td></tr>
			</table>

			<br><br><br>

			<table border="0" cellpadding="0" cellspacing="0" width="690">
				<tr>
					<td><img src="images/jumun_title4.gif" border="0" align="absmiddle"></td>
				</tr>
				<tr><td height="5"></td></tr>
			</table>
			<table border="0" cellpadding="0" cellspacing="0" width="685" class="cmfont">
				<tr><td height="2" bgcolor="8B9CBF"></td></tr>
			</table>
			<table border="0" cellpadding="0" cellspacing="1" width="685" bgcolor="#EEEEEE" class="cmfont">
				<tr height="25">
					<td width="100" bgcolor="#F2F2F2">&nbsp;�ֹ��ڸ�</td>
					<td bgcolor="#FFFFFF" colspan="3">&nbsp;<font color="#686868"><?=$row[o_name68]?> </font></td>
				</tr>
				<tr height="25">
					<td width="100" bgcolor="#F2F2F2">&nbsp;��ȭ��ȣ</td>
					<td width="242" bgcolor="#FFFFFF">&nbsp;<font color="#686868"><?=$o_tel?></font></td>
					<td width="100" bgcolor="#F2F2F2">&nbsp;�޴���</td>
					<td width="243" bgcolor="#FFFFFF">&nbsp;<font color="#686868"><?=$o_phone?></font></td>
				</tr>
				<tr height="25">
					<td width="100" bgcolor="#F2F2F2">&nbsp;�̸���</td>
					<td bgcolor="#FFFFFF" colspan="3">&nbsp;<font color="#686868"><?=$row[o_email68]?></font></td>
				</tr>
				<tr><td height="1" bgcolor="8B9CBF" colspan="4"></td></tr>
				<tr height="25">
					<td width="100" bgcolor="#F2F2F2">&nbsp;�����θ�</td>
					<td bgcolor="#FFFFFF" colspan="3">&nbsp;<font color="#686868"><?=$row[r_name68]?> </font></td>
				</tr>
				<tr height="25">
					<td width="100" bgcolor="#F2F2F2">&nbsp;��ȭ��ȣ</td>
					<td width="242" bgcolor="#FFFFFF">&nbsp;<font color="#686868"><?=$r_tel?></font></td>
					<td width="100" bgcolor="#F2F2F2">&nbsp;�޴���</td>
					<td width="243" bgcolor="#FFFFFF">&nbsp;<font color="#686868"><?=$r_phone?></font></td>
				</tr>
				<tr height="25">
					<td width="100" bgcolor="#F2F2F2">&nbsp;����ּ�</td>
					<td bgcolor="#FFFFFF" colspan="3">&nbsp;<font color="#686868">[<?=$r_zip?>] &nbsp; <?=$row[r_juso68]?></font></td>
				</tr>
				<tr height="25">
					<td width="100" bgcolor="#F2F2F2">&nbsp;�޸�</td>
					<td bgcolor="#FFFFFF" colspan="3">&nbsp;<?=$memo68?><font color="#686868"></font></td>
				</tr>
				
			</table>
			<table border="0" cellpadding="0" cellspacing="0" width="685" class="cmfont">
				<tr><td height="2" bgcolor="8B9CBF"></td></tr>
			</table>

			<table border="0" cellpadding="0" cellspacing="0" width="690">
				<tr>
					<td height="40" class="cmfont" align="right">
						<img src="images/b_list.gif" border="0" OnClick="location.href='jumun.php?page=1'" style="cursor:hand">&nbsp;&nbsp;&nbsp
					</td>
				</tr>
			</table>

<!-------------------------------------------------------------------------------------------->	
<!-- �� : �ٸ� �������� ������ �κ�                                                         -->
<!-------------------------------------------------------------------------------------------->	

		</td>
	</tr>
</table>
<br><br>

<!-- ȭ�� �ϴ� �κ� ���� (main_bottom.php) : ȸ������/ȸ��Ұ�/�̿�����/���κ�ȣ��å ... ---------->
<?
include "main_bottom.php";
?>

<!-- ȭ�� �ϴ� �κ� �� (main_bottom.php) : ȸ������/ȸ��Ұ�/�̿�����/���κ�ȣ��å ... ---------->

&nbsp
</center>

</body>
</html>