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
				function CheckAgree() 
				{
					if (form2.agree.checked == false) 
					{
						alert("�̿��� ���뿡 ���Ǹ� üũ�� �ֽʽÿ�.");
						return;
					}
					location.href = "member_join.php";
				}
			</script>

			<table border="0" cellpadding="0" cellspacing="0" width="747">
				<tr><td height="13"></td></tr>
				<tr>
					<td height="30" align="center">
						<p><img src="images/login_title.gif" width="747" height="30" border="0"></p>
					</td>
				</tr>
				<tr><td height="13"></td></tr>
			</table>

			<table border="0" cellpadding="0" cellspacing="0" width="685" class="cmfont">
				<tr>
					<td><img src="images/login_title1.gif" width="85" height="15" border="0"></td>
				</tr>
				<tr><td height="10"></td></tr>
			</table>

			<table border="0" cellpadding="5" cellspacing="1" width="685" bgcolor="cccccc">
				<tr>
					<td align="center" bgcolor="efefef">
						<table border="0" cellpadding="0" cellspacing="30" width="100%" bgcolor="white">
							<tr>
								<td align="center">
									<table border="0" cellpadding="0" cellspacing="0" width="100%" class="cmfont">
										<tr>
											<td>
												<p><textarea style="font-size:9pt; letter-spacing:-1px; line-height:18px; border-style:solid;border-width:1px;border-color:DCDCDC; color:464646; background:F6F6F6; width:605px; height:383px;padding:20px;">��1��. ��Ģ

[�δ�����] ���θ��� �����ŷ�����ȸ���� ������ ǥ�ؾ���� ����ϰ� �ֽ��ϴ�

��1��(����)
�� ����� �δ����� ȸ��(���ڻ�ŷ� �����)�� ��ϴ� �δ����� ���̹� ��
(���� �������̶� �Ѵ�)���� �����ϴ� ���ͳ� ���� ����(���� �����񽺡��� �Ѵ�)��
�̿��Կ� �־� ���̹� ���� �̿����� �Ǹ�/�ǹ� �� å�ӻ����� �������� �������� �մϴ�.

�ء�PC���, ���� ���� �̿��ϴ� ���ڻ�ŷ��� ���ؼ��� �� ������ ������ �ʴ� �� 
�� ����� �ؿ��մϴ١�

��2��(����)
�硰���� �̶� �δ����� ȸ�簡 ��ȭ �Ǵ� �뿪(���� ����ȭ��̶� ��)�� �̿��ڿ���
�����ϱ� ���Ͽ� ��ǻ�͵� ������ż��� �̿��Ͽ� ��ȭ���� �ŷ��� �� �ֵ��� ������ 
������ �������� ���ϸ�, �ƿ﷯ ���̹����� ��ϴ� ������� �ǹ̷ε� ����մϴ�.

. . .


��24��(���Ǳ� �� �ذŹ�)
�硰������ �̿��ڰ��� �߻��� ���ڻ�ŷ� ���￡ ���� �Ҽ��� ���� ����� �̿�����
�ּҿ� ���ϰ�, �ּҰ� ���� ��쿡�� �żҸ� �����ϴ� ��������� ���Ӱ��ҷ� �մϴ�. 
�ٸ�, ���� ��� �̿����� �ּ� �Ǵ� �żҰ� �и����� �ʰų� �ܱ� �������� ��쿡��
�λ�Ҽ۹����� ���ҹ����� �����մϴ�.

�衰������ �̿��ڰ��� ����� ���ڻ�ŷ� �Ҽۿ��� �ѱ����� �����մϴ�.
</textarea></p>
											</td>
										</tr>
										<tr>
											<td height="30">
												<!-- form2  ���� --->
												<form name = "form2">
												<input type="checkbox" name="agree" value="ok">
												�̿��� ���뿡 �����Ͻø� ������ �ֽʽÿ�.
												</form>
												<!-- form2 �� --->
											</td>
										</tr>
									</table>
									
								</td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
			<table border="0" cellpadding="0" cellspacing="0" width="685" class="cmfont">
				<tr>
					<td height="45" align="right">
						<a href="javascript:CheckAgree()"><img src="images/b_agreeok.gif" border="0"></a> 
						<a href="index.html"><img src="images/b_agreeno.gif" border="0"></a>
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