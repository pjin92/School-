<!-------------------------------------------------------------------------------------------->	
<!-- ���α׷� : ���θ� �����ϱ� �ǽ����ü� (�ǽ��� HTML)                                    -->
<!--                                                                                        -->
<!-- �� �� �� : ������ (2008.2.4)                                                           -->
<!-------------------------------------------------------------------------------------------->	
<?
	include "common.php";
	$query = "select * from qa where no68=$no;";
	$result=mysql_query($query);
	$row1=mysql_fetch_array($result);
	if ($passwd<>$row1[passwd68]) 
	echo("<script>history.back();</script>");
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
			<script Language="Javascript">

			function Check_Value() {
				if (!form2.title.value) {
					alert('�������� �Է��Ͽ� �ֽʽÿ�');
					form1.title.focus();
					return;    		
				}
				if (!form2.name.value) {
					alert('�̸��� �Է��Ͽ� �ֽʽÿ�');
					form2.name.focus();
					return;    		
				}
			  if (!form2.passwd.value) {
					alert('��ȣ�� �Է��Ͽ� �ֽʽÿ�');
					form2.password.focus();
					return;    		
				}
				form2.submit();
			}
			</script>
<?
	$query = "select * from qa where no68=$no;";
	$result=mysql_query($query);
	$row=mysql_fetch_array($result);
	$title68 =stripslashes($row[title68]); 
	$content68=stripslashes($row[content68]); 
	if ($row[ishtml]=="0")
		$content68=htmlspecialchars($content68);    // text �� ���
	else
		$content68=nl2br($content68);
?>
			<table border="0" cellpadding="0" cellspacing="0" width="747">
				<tr><td height="13"></td></tr>
				<tr>
					<td height="30"><img src="images/qa_title.gif" width="746" height="30" border="0"></td>
				</tr>
				<tr><td height="13"></td></tr>
			</table>

			<table border="0" cellpadding="0" cellspacing="0" width="690">
				<tr>
					<td><img src="images/qa_title1.gif" border="0"></td>
				</tr>
				<tr><td height="10"></td></tr>
			</table>

			<table border="0" cellpadding="0" cellspacing="0" width="690">
				<tr><td colspan="5" height="3" bgcolor="8B9CBF"></td></tr>

				<!--  form2 ���� -->
				<form name = "form2" method = "post" action = "qa_update.php">
				<input type="hidden" name="page" value="<?=$page?>">
				<input type="hidden" name="sel1"  value="<?=$sel?>">
				<input type="hidden" name="text1" value="<?=$text1?>">
				<input type="hidden" name="no" value="<?=$no?>">

				<tr><td colspan="2" height="2"></td></tr>
				<tr>
					<td width="104" height="25" align="center" bgcolor="ECEFF4" class="cmfont">����</td>
					<td width="586">
						&nbsp;&nbsp;<input type="text" name="title" maxlength="50" size="85" class="cmfont1" value="<?=$title68?>">
					</td>
				</tr>
				<tr><td colspan="2" height="2"></td></tr>
				<tr><td colspan="2" background="images/ln1.gif"></td></tr>
				<tr><td colspan="2" height="2"></td></tr>
				<tr>
					<td width="104" height="25" align="center" bgcolor="ECEFF4" class="cmfont">�ۼ���</td>
					<td width="586">
						&nbsp;&nbsp;<input type="text" name="name" value="<?=$row[name68]?>" size="15" class="cmfont1"><br>
					</td>
				</tr>
				<tr><td colspan="2" height="2"></td></tr>
				<tr><td colspan="2" background="images/ln1.gif"></td></tr>
				<tr><td colspan="2" height="2"></td></tr>
				<tr>
					<td width="104" height="25" align="center" bgcolor="ECEFF4" class="cmfont">Password</td>
					<td width="586">
						&nbsp;&nbsp;<input type="password" name="passwd" value="<?=$row[passwd68]?>" size="10" class="cmfont1"><br>
					</td>
				</tr>
				<tr><td colspan="2" height="2"></td></tr>
				<tr><td colspan="2" background="images/ln1.gif"></td></tr>
				<tr><td colspan="2" height="2"></td></tr>
				<tr>
					<td width="104" height="25" align="center" bgcolor="ECEFF4" class="cmfont">E-Mail</td>
					<td width="586">
						&nbsp;&nbsp;<input type="text" name="email" value="<?=$row[email68]?>" size="30" class="cmfont1"><br>
					</td>
				</tr>
				<tr><td colspan="2" height="2"></td></tr>
				<tr><td colspan="2" background="images/ln1.gif"></td></tr>
				<tr><td colspan="2" height="2"></td></tr>
				<tr>
					<td width="104" height="25" align="center" bgcolor="ECEFF4" class="cmfont">����</td>
					<td width="586" class="cmfont">
						&nbsp;&nbsp;
<?
	if ($row[ishtml68]==0) 
          echo("<input type='radio' name='ishtml' value='0' checked>Text
				<input type='radio' name='ishtml' value='1'>Html");
    else
          echo("<input type='radio' name='ishtml' value='0' >Text
				<input type='radio' name='ishtml' value='1' checked>Html");
?>
					</td>
				</tr>
				<tr><td colspan="2" height="2"></td></tr>
				<tr><td colspan="2" background="images/ln1.gif"></td></tr>
				<tr><td colspan="2" height="2"></td></tr>
				<tr>
					<td width="104" height="25" align="center" bgcolor="ECEFF4" class="cmfont">����</td>
					<td width="586">
						&nbsp;&nbsp;<textarea name="content" rows="20" cols="85" class="cmfont1" align="left"><?=$content68?></textarea>
					</td>
				</tr>
				<tr><td colspan="2" height="2"></td></tr>
				</form>
				<!--  form2 �� -->
			</table>

			<table border="0" cellpadding="0" cellspacing="0" width="690">
				<tr><td height="3" bgcolor="8B9CBF"></td></tr>
				<tr><td height="5" bgcolor="white"></td></tr>
			</table>

			<table border="0" cellpadding="0" cellspacing="0" width="690">
				<tr>
					<td align="right">
							<a href="javascript:Check_Value()"><img src="images/b_save.gif" border="0"></a>&nbsp;
							<a href="javascript:history.back()"><img src="images/b_list.gif" border="0"></a>
					</td>
					<td width="50"></td>
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