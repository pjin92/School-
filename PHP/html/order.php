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

			<!--  ���� ������ �ڹٽ�ũ��  -------------------------------------------->
			<script language="javascript">

			function Check_Value() {
				if (!form2.o_name.value) {
					alert("�ֹ��� �̸��� �� �� �Ǿ����ϴ�.");	form2.o_name.focus();	return;
				}
				if (!form2.o_tel1.value || !form2.o_tel2.value || !form2.o_tel3.value) {
					alert("��ȭ��ȣ�� �� �� �Ǿ����ϴ�.");	form2.o_tel1.focus();	return;
				}
				if (!form2.o_phone1.value || !form2.o_phone2.value || !form2.o_phone3.value) {
					alert("�ڵ����� �� �� �Ǿ����ϴ�.");	form2.o_phone1.focus();	return;
				}
				if (!form2.o_email.value) {
					alert("�̸����� �� �� �Ǿ����ϴ�.");	form2.o_email.focus();	return;
				}
				if (!form2.o_zip1.value || !form2.o_zip2.value) {
					alert("�����ȣ�� �� �� �Ǿ����ϴ�.");	form2.o_zip1.focus();	return;
				}
				if (!form2.o_juso.value) {
					alert("�ּҰ� �� �� �Ǿ����ϴ�.");	form2.o_email.focus();	return;
				}

				if (!form2.r_name.value) {
					alert("������ ���� �̸��� �� �� �Ǿ����ϴ�.");	form2.r_name.focus();	return;
				}
				if (!form2.r_tel1.value || !form2.r_tel2.value || !form2.r_tel3.value) {
					alert("��ȭ��ȣ�� �� �� �Ǿ����ϴ�.");	form2.r_tel1.focus();	return;
				}
				if (!form2.r_phone1.value || !form2.r_phone2.value || !form2.r_phone3.value) {
					alert("�ڵ����� �� �� �Ǿ����ϴ�.");	form2.r_phone1.focus();	return;
				}
				if (!form2.r_email.value) {
					alert("�̸����� �� �� �Ǿ����ϴ�.");	form2.r_email.focus();	return;
				}
				if (!form2.r_zip1.value || !form2.r_zip2.value) {
					alert("�����ȣ�� �� �� �Ǿ����ϴ�.");	form2.r_zip1.focus();	return;
				}
				if (!form2.r_juso.value) {
					alert("�ּҰ� �� �� �Ǿ����ϴ�.");	form2.r_email.focus();	return;
				}

				form2.submit();
			}

			function FindZip(zip_kind) 
			{
				window.open("zipcode.php?zip_kind="+zip_kind, "", "scrollbars=no,width=500,height=250");
			}

			function SameCopy(str) {
				if (str == "Y") {
					form2.r_name.value = form2.o_name.value;
					form2.r_zip1.value = form2.o_zip1.value;
					form2.r_zip2.value = form2.o_zip2.value;
					form2.r_juso.value = form2.o_juso.value;
					form2.r_tel1.value = form2.o_tel1.value;
					form2.r_tel2.value = form2.o_tel2.value;
					form2.r_tel3.value = form2.o_tel3.value;
					form2.r_phone1.value = form2.o_phone1.value;
					form2.r_phone2.value = form2.o_phone2.value;
					form2.r_phone3.value = form2.o_phone3.value;
					form2.r_email.value = form2.o_email.value;
				}
				else {
					form2.r_name.value = "";
					form2.r_zip1.value = "";
					form2.r_zip2.value = "";
					form2.r_juso.value = "";
					form2.r_tel1.value = "";
					form2.r_tel2.value = "";
					form2.r_tel3.value = "";
					form2.r_phone1.value = "";
					form2.r_phone2.value = "";
					form2.r_phone3.value = "";
					form2.r_email.value = "";
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
					<td><img src="images/order_title1.gif" width="169" height="25" border="0"></td>
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
			$query = "select * from product where no68=$no;";
			$result=mysql_query($query);
			$row=mysql_fetch_array($result);

			$query = "select * from opts where no68=$opts1;";
			$result=mysql_query($query);
			$row1=mysql_fetch_array($result);

			$query = "select * from opts where no68=$opts2;";
			$result=mysql_query($query);
			$row2=mysql_fetch_array($result);


			$image1=$row[image1];
			$discount = number_format(round($row[price68]*(100-$row[discount68])/100,-2));
			$price = number_format(round(($num*$row[price68])*(100-$row[discount68])/100,-2));
			$name68 = stripslashes($row[name68]);

			echo("<tr bgcolor='#FFFFFF'>
					<td height='60' align='center'>
						<table cellpadding='0' cellspacing='0' width='100%'>
							<tr>
								<td width='60'>
									<a href='product_detail.php?no=$row[no68]'><img src='product/$image1' width='50' height='50' border='0'></a>
								</td>
								<td class='cmfont'>
									<a href='product_detail.php?no=$row[no68]'><font color='#0066CC'>$name68</font></a><br>
									[�ɼ�]</font>  $row1[name68], $row2[name68]
								</td>
							</tr>
						</table>
					</td>
					<td align='center'><font color='#464646'>$num&nbsp��</font></td>
					<td align='center'><font color='#464646'>$discount</font> ��</td>
					<td align='center'><font color='#464646'>$price</font> ��</td>
				</tr>");
			$total=$total+(($num*$row[price68])*(100-$row[discount68])/100);
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

			<!-- �ֹ��� ���� -->
			<table width="710" border="0" cellpadding="0" cellspacing="0" class="cmfont">
				<tr height="3" bgcolor="#CCCCCC"><td></td></tr>
			</table>

			<!-- form2 ����  -->
			<form name="form2" method="post" action="order_pay.php">
			<table width="710" border="0" cellpadding="0" cellspacing="0" class="cmfont">
				<tr>
					<td align="left" valign="top" width="150" STYLE="padding-left:45;padding-top:5">
						<font size="2" color="#B90319"><b>�ֹ��� ����</b></font>
					</td>
					<td align="center" width="560">
<?
	$o_no="0"; $o_name=""; $o_tel1=""; $o_tel2=""; $o_tel3=""; $o_phone1=""; $o_phone2=""; $o_phone3=""; $o_email=""; $o_zip1=""; $o_zip2=""; $o_juso="";
	if($cookie_no)
	{
		$query="select * from member where no68=$cookie_no";
		$result=mysql_query($query);
		$row=mysql_fetch_array($result);
		$tel1=trim(substr($row[tel68],0,3));        // 0�� ��ġ���� 3�ڸ� ���ڿ� ����
		$tel2=trim(substr($row[tel68],3,4));        // 3�� ��ġ���� 4�ڸ�
		$tel3=trim(substr($row[tel68],7,4));        // 7�� ��ġ���� 4�ڸ�

		$phone1=trim(substr($row[phone68],0,3));        // 0�� ��ġ���� 3�ڸ� ���ڿ� ����
		$phone2=trim(substr($row[phone68],3,4));        // 3�� ��ġ���� 4�ڸ�
		$phone3=trim(substr($row[phone68],7,4));        // 7�� ��ġ���� 4�ڸ�


		$zip1=trim(substr($row[zip68],0,3));
		$zip2=trim(substr($row[zip68],3,3));

		$o_no=$row[no68];
		$o_name=$row[name68];
		$o_tel1=$tel1;
		$o_tel2=$tel2;
		$o_tel3=$tel3;
		$o_phone1=$phone1;
		$o_phone2=$phone2;
		$o_phone3=$phone3;
		$o_email=$row[email68];
		$o_zip1=$zip1;
		$o_zip2=$zip2;
		$o_juso=$row[juso68];
	}
?>


						<table width="560" border="0" cellpadding="0" cellspacing="0" class="cmfont">
							<tr height="25">
								<td width="150"><b>�ֹ��� ����</b></td>
								<td width="20"><b>:</b></td>
								<td width="660">
									<input type="hidden" name="o_no" value="<?=$o_no?>">
									<input type="text"   name="o_name" size="20" maxlength="10" value="<?=$o_name?>" class="cmfont1">
								</td>
							</tr>
							<tr height="25">
								<td width="150"><b>��ȭ��ȣ</b></td>
								<td width="20"><b>:</b></td>
								<td width="660">
									<input type="text" name="o_tel1" size="4" maxlength="4" value="<?=$o_tel1?>" class="cmfont1"> -
									<input type="text" name="o_tel2" size="4" maxlength="4" value="<?=$o_tel2?>" class="cmfont1"> -
									<input type="text" name="o_tel3" size="4" maxlength="4" value="<?=$o_tel3?>" class="cmfont1">
								</td>
							</tr>
							<tr height="25">
								<td width="150"><b>�޴�����ȣ</b></td>
								<td width="20"><b>:</b></td>
								<td width="660">
									<input type="text" name="o_phone1" size="4" maxlength="4" value="<?=$o_phone1?>" class="cmfont1"> -
									<input type="text" name="o_phone2" size="4" maxlength="4" value="<?=$o_phone2?>" class="cmfont1"> -
									<input type="text" name="o_phone3" size="4" maxlength="4" value="<?=$o_phone3?>" class="cmfont1">
								</td>
							</tr>
							<tr height="25">
								<td width="150"><b>E-Mail</b></td>
								<td width="20"><b>:</b></td>
								<td width="660">
									<input type="text" name="o_email" size="50" maxlength="50" value="<?=$o_email?>" class="cmfont1">
								</td>
							</tr>
							<tr height="50">
								<td width="150"><b>�ּ�</b></td>
								<td width="20"><b>:</b></td>
								<td width="660">
									<input type="text" name="o_zip1" size="3" maxlength="3" value="<?=$o_zip1?>" class="cmfont1"> -
									<input type="text" name="o_zip2" size="3" maxlength="3" value="<?=$o_zip2?>" class="cmfont1">
									<a href="javascript:FindZip(1)"><img src="images/b_zip.gif" align="absmiddle" border="0"></a> <br>
									<input type="text" name="o_juso" size="50" maxlength="200" value="<?=$o_juso?>" class="cmfont1"><br>
								</td>
							</tr>
						</table>

					</td>
				</tr>
				<tr height="10"><td></td></tr>
			</table>

			<!-- ����� ���� -->
			<table width="710" border="0" cellpadding="0" cellspacing="0" class="cmfont">
				<tr height="3" bgcolor="#CCCCCC"><td></td></tr>
				<tr height="10"><td></td></tr>
			</table>

			<table width="710" border="0" cellpadding="0" cellspacing="0" class="cmfont">
				<tr>
					<td align="left" valign="top" width="150" STYLE="padding-left:45;padding-top:5"><font size=2 color="#B90319"><b>����� ����</b></font></td>
					<td align="center" width="560">

						<table width="560" border="0" cellpadding="0" cellspacing="0" class="cmfont">
							<tr height="25">
								<td width="150"><b>�ֹ��������� ����</b></td>
								<td width="20"><b>:</b></td>
								<td width="660">
									<input type="radio" name="same" onclick="SameCopy('Y')">�� &nbsp;
									<input type="radio" name="same" onclick="SameCopy('N')">�ƴϿ�
								</td>
							</tr>
							<tr height="25">
								<td width="150"><b>������ �� ����</b></td>
								<td width="20"><b>:</b></td>
								<td width="660">
									<input type="text" name="r_name" size="20" maxlength="10" value="" class="cmfont1">
								</td>
							</tr>
							<tr height="25">
								<td width="150"><b>��ȭ��ȣ</b></td>
								<td width="20"><b>:</b></td>
								<td width="660">
									<input type="text" name="r_tel1" size="4" maxlength="4" value="" class="cmfont1"> -
									<input type="text" name="r_tel2" size="4" maxlength="4" value="" class="cmfont1"> -
									<input type="text" name="r_tel3" size="4" maxlength="4" value="" class="cmfont1">
								</td>
							</tr>
							<tr height="25">
								<td width="150"><b>�޴�����ȣ</b></td>
								<td width="20"><b>:</b></td>
								<td width="660">
									<input type="text" name="r_phone1" size="4" maxlength="4" value="" class="cmfont1"> -
									<input type="text" name="r_phone2" size="4" maxlength="4" value="" class="cmfont1"> -
									<input type="text" name="r_phone3" size="4" maxlength="4" value="" class="cmfont1">
								</td>
							</tr>
							<tr height="25">
								<td width="150"><b>E-Mail</b></td>
								<td width="20"><b>:</b></td>
								<td width="660">
									<input type="text" name="r_email" size="50" maxlength="50" value="" class="cmfont1">
								</td>
							</tr>
							<tr height="50">
								<td width="150"><b>�ּ�</b></td>
								<td width="20"><b>:</b></td>
								<td width="660">
									<input type="text" name="r_zip1" size="3" maxlength="3" value="" class="cmfont1"> -
									<input type="text" name="r_zip2" size="3" maxlength="3" value="" class="cmfont1">
									<a href="javascript:FindZip(2)"><img src="images/b_zip.gif" align="absmiddle" border="0"></a> <br>
									<input type="text" name="r_juso" size="50" maxlength="200" value="" class="cmfont1"><br>
								</td>
							</tr>
							<tr height="50">
								<td width="150"><b>��۽ÿ䱸����</b></td>
								<td width="20"><b>:</b></td>
								<td width="660">
									<textarea name="o_memo" cols="60" rows="3" class="cmfont1"></textarea>
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