<!-------------------------------------------------------------------------------------------->	
<!-- ���α׷� : ���θ� �����ϱ� �ǽ����ü� (�ǽ��� HTML)                                    -->
<!--                                                                                        -->
<!-- �� �� �� : ������ (2008.2.4)                                                           -->
<!-------------------------------------------------------------------------------------------->	
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
			<script language = "javascript">
				function FindZip(zip_kind) 
				{
					window.open("zipcode.php?zip_kind="+zip_kind, "", "scrollbars=no,width=500,height=250");
				}
				function check_id()	{
					if (!form2.uid.value) {
						alert("ID�� �Է��Ͻʽÿ�.");	form2.uid.focus();	return;
					}
					window.open("member_idcheck.php?uid="+form2.uid.value,"","scrollbars=no,width=300,height=200");
				}
				function Check_Value() {
					if (!form2.check_id.value) {
						alert("�ߺ�ID ���縦 ���� �Ͻʽÿ�.");	form2.uid.focus();	return;
					}
					if (!form2.uid.value) {
						alert("���̵� �߸��Ǿ����ϴ�.");	form2.uid.focus();	return;
					}
					if (!form2.passwd.value) {
						alert("��ȣ�� �߸��Ǿ����ϴ�.");	form2.passwd.focus();	return;
					}
					if (!form2.passwd1.value) {
						alert("��ȣ�� �߸��Ǿ����ϴ�.");	form2.passwd1.focus();	return;
					}
					if (form2.passwd.value != form2.passwd1.value) {
						alert("��ȣ�� ��ġ���� �ʽ��ϴ�.");	
						form2.passwd1.focus();	return;
					}
					if (!form2.name.value) {
						alert("�̸��� �߸��Ǿ����ϴ�.");	form2.name.focus();	return;
					}
					if (!form2.birthday1.value || !form2.birthday2.value || !form2.birthday3.value) {
						alert("������ �߸��Ǿ����ϴ�.");	form2.birthday1.focus();	return;
					}
					if (!form2.tel1.value || !form2.tel2.value || !form2.tel3.value) {
						alert("��ȭ��ȣ�� �߸��Ǿ����ϴ�.");	form2.tel1.focus();	return;
					}
					if (!form2.phone1.value || !form2.phone2.value || !form2.phone3.value) {
						alert("�ڵ����� �߸��Ǿ����ϴ�.");	form2.phone1.focus();	return;
					}
					if (!form2.zip1.value || !form2.zip2.value) {
						alert("�����ȣ�� �߸��Ǿ����ϴ�.");	form2.zip1.focus();	return;
					}
					if (!form2.juso.value) {
						alert("�ּҰ� �߸��Ǿ����ϴ�.");	form2.juso.focus();	return;
					}
					if (!form2.email.value) {
						alert("�̸����� �߸��Ǿ����ϴ�.");	form2.email.focus();	return;
					}

					form2.submit();
				}
			</script>

			<table border="0" cellpadding="0" cellspacing="0" width="747">
				<tr><td height="13"></td></tr>
				<tr>
					<td height="30" align="center">
						<img src="images/login_title.gif" width="747" height="30" border="0">
					</td>
				</tr>
				<tr><td height="13"></td></tr>
			</table>
			<table border="0" cellpadding="0" cellspacing="0" width="685" class="cmfont">
				<tr>
					<td><img src="images/login_title2.gif" border="0"></td>
				</tr>
				<tr><td height="10"></td></tr>
			</table>

			<table border="0" cellpadding="5" cellspacing="1" width="685" bgcolor="cccccc">
				<!-- form2 ���� -->
				<form name="form2" method="post" action="member_insert.php">
				<input type="hidden" name="check_id" value=""> 
				<tr>
					<td align="center" bgcolor="efefef">
						<table border="0" cellpadding="0" cellspacing="5" width="100%" bgcolor="white">
							<tr>
								<td align="center">
									<table border="0" cellpadding="0" cellspacing="0" width="635" class="cmfont">
										<tr>
											<td width="127" height="30">
												<img align="absmiddle" src="images/i_dot.gif" border="0"> <font color="898989"><b>���̵�</b></font>
											</td>
											<td>
												<input type="text" name="uid" maxlength = "12" value="" size="20" class="cmfont1"> 
												<a href="javascript:check_id();"><img align="absmiddle" src="images/b_idcheck.gif" border="0"></a>
											</td>
										</tr>
										<tr>
											<td width="127" height="30">
												<img align="absmiddle" src="images/i_dot.gif" border="0"> <font color="898989"><b>��й�ȣ</b></font>
											</td>
											<td>
												<input TYPE="password" name="passwd" maxlength = "10" size="20" class="cmfont1">
											</td>
										</tr>
										<tr>
											<td width="127" height="30">
												<img align="absmiddle" src="images/i_dot.gif" border="0"> <font color="898989"><b>��й�ȣ Ȯ��</b></font>
											</td>
											<td>
												<input TYPE="password" name="passwd1" maxlength = "10" size="20" class="cmfont1">
											</td>
										</tr>
										<tr><td colspan="2" height="10"></td></tr>
										<tr><td colspan="2" bgcolor="E6DDD5"></td></tr>
										<tr><td colspan="2" height="10"></td></tr>
									</table>
									<table border="0" cellpadding="0" cellspacing="0" width="635" class="cmfont">
										<tr>
											<td width="127" height="30">
												<img align="absmiddle" src="images/i_dot.gif" border="0"> <font color="898989"><b>�� ��</b></font>
											</td>
											<td>
												<input type="text" name="name" maxlength = "10" value = "" size="20" class="cmfont1">
											</td>
										</tr>
										<tr>
											<td width="127" height="30">
												<img align="absmiddle" src="images/i_dot.gif" border="0"> <font color="898989"><b>�������</b></font>
											</td>
											<td>
												<input type="text" name='birthday1' size = "4" maxlength = "4" value = "" class="cmfont1"> <font color="898989">��</font> 
												<input type="text" name='birthday2' size = "2" maxlength = "2" value = "" class="cmfont1"> <font color="898989">��</font> 
												<input type="text" name='birthday3' size = "2" maxlength = "2" value = "" class="cmfont1"> <font color="898989">��</font> 
												<input type="radio" name='sm' value = "1" checked> <font color="898989">���</font> 
												<input type="radio" name='sm' value = "2" > <font color="898989">����</font></td>
										</tr>
										<tr><td colspan="2" height="10"></td></tr>
										<tr><td colspan="2" bgcolor="E6DDD5"></td></tr>
										<tr><td colspan="2" height="10"></td></tr>
									</table>
									<table border="0" cellpadding="0" cellspacing="0" width="635" class="cmfont">
										<tr>
											<td width="127" height="30">
												<img align="absmiddle" src="images/i_dot.gif" border="0"> <font color="898989"><b>��ȭ ��ȣ</b></font>
											</td>
											<td>
												<input type="text" name='tel1' size = "4" maxlength = "4" value = "" class="cmfont1"><font color="898989">-</font>
												<input type="text" name='tel2' size = "4" maxlength = "4" value = "" class="cmfont1"><font color="898989">-</font>
												<input type="text" name='tel3' size = "4" maxlength = "4" value = "" class="cmfont1">
											</td>
										</tr>
										<tr>
											<td width="127" height="30">
												<img align="absmiddle" src="images/i_dot.gif" border="0"> <font color="898989"><b>�ڵ��� ��ȣ</b></font>
											</td>
											<td>
												<input type="text" name='phone1' size = "4" maxlength = "4" value = "" class="cmfont1"><font color="898989">-</font>
												<input type="text" name='phone2' size = "4" maxlength = "4" value = "" class="cmfont1"><font color="898989">-</font>
												<input type="text" name='phone3' size = "4" maxlength = "4" value = "" class="cmfont1">
											</td>
										</tr>
										<tr>
											<td width="127" height="50">
												<img align="absmiddle" src="images/i_dot.gif" border="0"> <font color="898989"><b>�� ��</b></font>
											</td>
											<td>
												<input type="text" name='zip1' size = "4" maxlength = "3" value = "" class="cmfont1"><font color="898989">-</font>
												<input type="text" name='zip2' size = "4" maxlength = "3" value = "" class="cmfont1"> 
												<a href="javascript:FindZip(0)"><img align="absmiddle" src="images/b_zip.gif" border="0"></a><br>
												<input type="text" name='juso' size = "50" maxlength = "200" value = "" class="cmfont1"><br>
											</td>
										</tr>
										<tr>
											<td width="127" height="30">
												<img align="absmiddle" src="images/i_dot.gif" border="0"> <font color="898989"><b>E-Mail</b></font>
											</td>
											<td>
												<input type="text" name='email' size = "50" maxlength = "50" value = "" class="cmfont1">
											</td>
										</tr>
									</table>
			
								</td>
							</tr>
						</table>
					</td>
				</tr>
				</form>
				<!-- form2 �� -->
			</table>
			<table border="0" cellpadding="0" cellspacing="0" width="685" class="cmfont">
				<tr>
					<td height="45" align="right">
						<a href="javascript:Check_Value();"><img src="images/b_add.gif" border="0"></a>&nbsp;&nbsp
						<a href="javascript:form2.reset();"><img src="images/b_reset.gif" border="0"></a>
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