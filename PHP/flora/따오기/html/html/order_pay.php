<!-------------------------------------------------------------------------------------------->	
<!-- ���α׷� : ���θ� �����ϱ� �ǽ����ü� (�ǽ��� HTML)                                    -->
<!--                                                                                        -->
<!-- �� �� �� : ������ (2008.2.4)                                                           -->
<!-------------------------------------------------------------------------------------------->	
<?
	include "common.php";
?>
<html>
<head>
<title>�δ����� ���θ�</title>
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
	  <td><img src="images/main_image1.jpg" width="777" height="175"></td>
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

			<!--  ���� ������ �ڹٽ�ũ��  -------------------------------------------->
			<script language="javascript">

			function Check_Value() 
			{
				if (form2.pay_method[0].checked)
				{
					if (!form2.card_kind.value) {
						alert("ī�������� �����ϼ���.");	form2.card_kind.focus();	return;
					}
					if (!form2.card_no1.value || form2.card_no1.value.length!=4) {
						alert("ī���ȣ�� �Է��ϼ���.");	form2.card_no1.focus();	return;
					}
					if (!form2.card_no2.value || form2.card_no2.value.length!=4) {
						alert("ī���ȣ�� �Է��ϼ���.");	form2.card_no2.focus();	return;
					}
					if (!form2.card_no3.value || form2.card_no3.value.length!=4) {
						alert("ī���ȣ�� �Է��ϼ���.");	form2.card_no3.focus();	return;
					}
					if (!form2.card_no4.value || form2.card_no4.value.length!=4) {
						alert("ī���ȣ�� �Է��ϼ���.");	form2.card_no4.focus();	return;
					}
					if (!form2.card_year.value) {
						alert("ī��Ⱓ �⵵�� �����ϼ���.");	form2.card_year.focus();	return;
					}
					if (!form2.card_month.value) {
						alert("ī��Ⱓ ���� �����ϼ���.");	form2.card_month.focus();	return;
					}
					if (!form2.card_pw.value) {
						alert("ī�� ��ȣ ���� 2�ڸ��� �����ϼ���.");	form2.card_pw.focus();	return;
					}
				}
				else
				{
					if (!form2.bank_kind.value) {
						alert("�Ա��� ������ �����ϼ���.");	form2.bank_kind.focus();	return;
					}
					if (!form2.bank_sender.value) {
						alert("�Ա��� �̸��� �Է��ϼ���.");	form2.bank_sender.focus();	return;
					}
				}
				
				form2.submit();
			}

			function PaySel(n) 
			{
				if (n == 0) {
					form2.card_kind.disabled = false;
					form2.card_no1.disabled = false;
					form2.card_no2.disabled = false;
					form2.card_no3.disabled = false;
					form2.card_no4.disabled = false;
					form2.card_year.disabled = false;
					form2.card_month.disabled = false;
					form2.card_pw.disabled = false;
					form2.bank_kind.disabled = true;
					form2.bank_sender.disabled = true;
				}
				else {
					form2.card_kind.disabled = true;
					form2.card_no1.disabled = true;
					form2.card_no2.disabled = true;
					form2.card_no3.disabled = true;
					form2.card_no4.disabled = true;
					form2.card_year.disabled = true;
					form2.card_month.disabled = true;
					form2.card_pw.disabled = true;
					form2.bank_kind.disabled = false;
					form2.bank_sender.disabled = false;
				}
			}

			</script>

			<table border="0" cellpadding="0" cellspacing="0" width="747">
				<tr><td height="13"></td></tr>
				<tr>
					<td height="30" align="center"><img src="images/jumun_title.gif" width="746" height="30" border="0"></td>
				</tr>
				<tr><td height="13"></td></tr>
			</table>

			<table border="0" cellpadding="0" cellspacing="0" width="710">
				<tr>
					<td><img src="images/order_title1.gif" width="65" height="15" border="0"></td>
				</tr>
				<tr><td height="10"></td></tr>
			</table>

			<table border="0" cellpadding="5" cellspacing="1" width="710" class="cmfont" bgcolor="#CCCCCC">
				<tr bgcolor="F0F0F0" height="23" class="cmfont">
					<td width="440" align="center">��ǰ</td>
					<td width="70"  align="center">����</td>
					<td width="100" align="center">����</td>
					<td width="100" align="center">�հ�</td>
				</tr>
<?

	$total=0;
	if(!$n_cart) $n_cart=0;
		for ($i=1;$i<=$n_cart;$i++)
		{
			if($cart[$i])
			{
			list($no, $num, $opts1, $opts2)=explode("^", $cart[$i]);
			$query = "select * from product where no39=$no;";
			$result=mysql_query($query);
			$row=mysql_fetch_array($result);

			$query = "select * from opts where no39=$opts1;";
			$result=mysql_query($query);
			$row1=mysql_fetch_array($result);

			$query = "select * from opts where no39=$opts2;";
			$result=mysql_query($query);
			$row2=mysql_fetch_array($result);

			$image1=$row[image1];
			$discount = number_format(round($row[price39]*(100-$row[discount39])/100,-2));
			$price = number_format(round(($num*$row[price39])*(100-$row[discount39])/100,-2));
			$name39 = stripslashes($row[name39]);
			echo("<tr bgcolor='#FFFFFF'>
					<td height='60' align='center'>
						<table cellpadding='0' cellspacing='0' width='100%'>
							<tr>
								<td width='60'>
									<a href='product_detail.php?no=$row[no39]'><img src='product/$image1' width='50' height='50' border='0'></a>
								</td>
								<td class='cmfont'>
									<a href='product_detail.php?no=$row[no39]'><font color='#0066CC'>$name39</font></a><br>
									[�ɼ�]</font> $row1[name39], $row2[name39]
								</td>
							</tr>
						</table>
					</td>
					<td align='center'><font color='#464646'>$num&nbsp��</font></td>
					<td align='center'><font color='#464646'>$discount</font> ��</td>
					<td align='center'><font color='#464646'>$price</font> ��</td>
				</tr>");
			$total=$total+(($num*$row[price39])*(100-$row[discount39])/100);
			}
		}
		$baesong=number_format($baesongbi)."��";
		$total1=$total + $baesongbi;
		$total2=number_format($total1)."��" ;
		$total3=number_format($total)."��";
?>
				<tr>
					<td colspan="5" bgcolor="#F0F0F0">
						<table width="100%" border="0" cellpadding="0" cellspacing="0" class="cmfont">
							<tr>
								<td bgcolor="#F0F0F0"><img src="images/cart_image1.gif" border="0"></td>
								<td align="right" bgcolor="#F0F0F0">
<?
	if ($total < $max_baesongbi)
	{
		echo("<font color='#0066CC'><b>�� �հ�ݾ�</font></b> : ��ǰ���($total3) + ��۷�($baesong) = <font color='#FF3333'><b>$total2</b></font>&nbsp;&nbsp");
	}
	else
		echo("<font color='#0066CC'><b>�� �հ�ݾ�</font></b> : ��ǰ���($total3) + ��۷�(0��) = <font color='#FF3333'><b>$total3</b></font>&nbsp;&nbsp");
?>
								</td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
			<br><br>

			<table width="710" border="0" cellpadding="0" cellspacing="0" class="cmfont">
				<tr height="3" bgcolor="#CCCCCC"><td></td></tr>
			</table>
			<br><br>
			<br><br>

			<!-- form2 ����  -->
			<form name="form2" method="post"action="order_insert.php">
<?
	$o_zip=sprintf("%-3s%-3s",$o_zip1,$o_zip2);
	$o_tel=sprintf("%-3s%-4s%-4s",$o_tel1,$o_tel2,$o_tel3);
	$o_phone=sprintf("%-3s%-4s%-4s",$o_phone1,$o_phone2,$o_phone3);

	$r_zip=sprintf("%-3s%-3s",$r_zip1,$r_zip2);
	$r_tel=sprintf("%-3s%-4s%-4s",$r_tel1,$r_tel2,$r_tel3);
	$r_phone=sprintf("%-3s%-4s%-4s",$r_phone1,$r_phone2,$r_phone3);

?>
			<input type="hidden" name="o_name"   value="<?=$o_name?>">
			<input type="hidden" name="o_tel"    value="<?=$o_tel?>">
			<input type="hidden" name="o_phone"  value="<?=$o_phone?>">
			<input type="hidden" name="o_email"  value="<?=$o_email?>">
			<input type="hidden" name="o_zip"    value="<?=$o_zip?>">
			<input type="hidden" name="o_juso"   value="<?=$o_juso?>">

			<input type="hidden" name="r_name"   value="<?=$r_name?>">
			<input type="hidden" name="r_tel"    value="<?=$r_tel?>">
			<input type="hidden" name="r_phone"  value="<?=$r_phone?>">
			<input type="hidden" name="r_email"  value="<?=$r_email?>">
			<input type="hidden" name="r_zip"    value="<?=$r_zip?>">
			<input type="hidden" name="r_juso"   value="<?=$r_juso?>">
			<input type="hidden" name="o_memo"    value="<?=$o_memo?>">

			<!-- ������ ���� �� �Է� -->
			<table width="710" border="0" cellpadding="0" cellspacing="0" class="cmfont">
				<tr height="3" bgcolor="#CCCCCC"><td></td></tr>
				<tr height="10"><td></td></tr>
			</table>

			<table width="710" border="0" cellpadding="0" cellspacing="0" class="cmfont">
				<tr>
					<td align="left" valign="top" width="150" STYLE="padding-left:45;padding-top:5"><font size=2 color="#B90319"><b>������</b></font></td>
					<td align="center" width="560">

						<table width="560" border="0" cellpadding="0" cellspacing="0" class="cmfont">
							<tr height="25">
								<td width="150"><b>������ ����</b></td>
								<td width="20"><b>:</b></td>
								<td width="390">
									<input type="radio" name="pay_method"  value="0" onclick="javascript:PaySel(0);" checked>ī�� &nbsp;
									<input type="radio" name="pay_method"  value="1" onclick="javascript:PaySel(1);">������
								</td>
							</tr>
						</table>

					</td>
				</tr>
				<tr height="10"><td></td></tr>
			</table>

			<table width="710" border="0" cellpadding="0" cellspacing="0" class="cmfont">
				<tr height="1" bgcolor="#CCCCCC"><td></td></tr>
				<tr height="10"><td></td></tr>
			</table>
			<!-- ī�� -->
			<table width="710" border="0" cellpadding="0" cellspacing="0" class="cmfont">
				<tr>
					<td align="left" valign="top" width="150" STYLE="padding-left:45;padding-top:5"><font size=2 color="#B90319"><b>ī��</b></font></td>
					<td align="center" width="560">
						<table width="560" border="0" cellpadding="0" cellspacing="0" class="cmfont">
							<tr height="25">
								<td width="150"><b>ī������</b></td>
								<td width="20"><b>:</b></td>
								<td width="390">
									<select name="card_kind" class="cmfont1">
										<option value="">ī�������� �����ϼ���.</option>
										<option value="1">����ī��</option>
										<option value="2">����ī��</option>
										<option value="3">�츮ī��</option>
										<option value="4">�ϳ�ī��</option>
									</select>
								</td>
							</tr>
							<tr height="25">
								<td width="150"><b>ī���ȣ</b></td>
								<td width="20"><b>:</b></td>
								<td width="390">
									<input type="text" name="card_no1" size="4" maxlength="4" value="" class="cmfont1"> -
									<input type="text" name="card_no2" size="4" maxlength="4" value="" class="cmfont1"> -
									<input type="text" name="card_no3" size="4" maxlength="4" value="" class="cmfont1"> -
									<input type="text" name="card_no4" size="4" maxlength="4" value="" class="cmfont1">
								</td>
							</tr>
							<tr height="25">
								<td width="150"><b>ī��Ⱓ</b></td>
								<td width="20"><b>:</b></td>
								<td width="390">
									<input type="text" name="card_month" size="2" maxlength="2" value="" class="cmfont1"> �� / 
									<input type="text" name="card_year"  size="2" maxlength="2" value="" class="cmfont1"> ��
								</td>
							</tr>
							<tr height="25">
								<td width="150"><b>ī���й�ȣ(��2�ڸ�)</b></td>
								<td width="20"><b>:</b></td>
								<td width="390">
									**<input type="password" name="card_pw" size="2" maxlength="2" value="" class="cmfont1">
								</td>
							</tr>
							<tr height="25">
								<td width="150"><b>�Һ�</b></td>
								<td width="20"><b>:</b></td>
								<td width="390">
									<select name="card_halbu" class="cmfont1">
										<option value="0">�Ͻú�</option>
										<option value="3">3 ����</option>
										<option value="6">6 ����</option>
										<option value="9">9 ����</option>
										<option value="12">12 ����</option>
									</select>
								</td>
							</tr>
						</table>

					</td>
				</tr>
				<tr height="10"><td></td></tr>
			</table>

			<table width="710" border="0" cellpadding="0" cellspacing="0" class="cmfont">
				<tr height="1" bgcolor="#CCCCCC"><td></td></tr>
				<tr height="10"><td></td></tr>
			</table>
			<!-- ������ -->
			<table width="710" border="0" cellpadding="0" cellspacing="0" class="cmfont">
				<tr>
					<td align="left" valign="top" width="150" style="padding-left:45;padding-top:5"><font size=2 color="#B90319"><b>������ �Ա�</b></font></td>
					<td align="center" width="560">
						<table width="560" border="0" cellpadding="0" cellspacing="0" class="cmfont">
							<tr height="25">
								<td width="150"><b>���༱��</b></td>
								<td width="20"><b>:</b></td>
								<td width="390">
									<select name="bank_kind"  class="cmfont1" disabled>
										<option value="">�Ա��� ������ �����ϼ���.</option>
										<option value="1">�������� 000-00000-0000</option>
										<option value="2">�������� 000-00000-0000</option>
									</select>
								</td>
							</tr>
							<tr height="25">
								<td width="150"><b>�Ա��� �̸�</b></td>
								<td width="20"><b>:</b></td>
								<td width="390">
									<input type="text" name="bank_sender" size="15" maxlength="20" value="" class="cmfont1" disabled>
								</td>
							</tr>
						</table>

					</td>
				</tr>
				<tr height="10"><td></td></tr>
			</table>

			<table width="710" border="0" cellpadding="0" cellspacing="0" class="cmfont">
				<tr height="3" bgcolor="#CCCCCC"><td></td></tr>
				<tr height="10"><td></td></tr>
			</table>

			</form>

			<table width="710" border="0" cellpadding="0" cellspacing="0" class="cmfont">
				<tr>
					<td align="center">
						<img src="images/b_order3.gif" onclick="Check_Value()" style="cursor:hand">
					</td>
				</tr>
				<tr height="20"><td></td></tr>
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