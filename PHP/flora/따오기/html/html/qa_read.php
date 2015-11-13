<!-------------------------------------------------------------------------------------------->	
<!-- 프로그램 : 쇼핑몰 따라하기 실습지시서 (실습용 HTML)                                    -->
<!--                                                                                        -->
<!-- 만 든 이 : 윤형태 (2008.2.4)                                                           -->
<!-------------------------------------------------------------------------------------------->	
<?
	include "common.php";
	$count=$count+1;
	$query="update qa set count39='$count' where no39=$no;";
	$result = mysql_query($query);
?>
<html>
<head>
<title>인덕닷컴 쇼핑몰</title>
<meta http-equiv="content-type" content="text/html; charset=euc-kr">
<link href="include/font.css" rel="stylesheet" type="text/css">
<script language="Javascript" src="include/common.js"></script>
</head>

<body style="margin:0">
<center>

<table width="959" border="0" cellspacing="0" cellpadding="0" align="center">
	<tr> 
		<td>
			<!--  상단 왼쪽 로고  -------------------------------------------->
			<table border="0" cellspacing="0" cellpadding="0" width="182">
				<tr>
					<td><a href="index.html"><img src="images/top_logo.gif" width="182" height="40" border="0"></a></td>
				</tr>
			</table>
		</td>
		<td align="right" valign="bottom">
			<!--  상단메뉴 시작 (main_topmemnu.php) : Home/로그인/회원가입/장바구니/주문배송조회/즐겨찾기추가  ---->	
<?
	include "main_topmenu.php";
?>
			<!--  상단메뉴 끝 (main_topmemnu.php)  ---------->	
		</td>
	</tr>
</table>

<!--  상단 메인 이미지 --------------------------------------------------->
<table width="959" border="0" cellspacing="0" cellpadding="0" align="center">
	<tr>
		<td><img src="images/main_image0.jpg" width="182" height="175"></td>
	  <td><img src="images/main_image1.jpg" width="777" height="175"></td>
	</tr>
</table>

<!--  Category 메뉴 : 가로형인 경우  --------------------------------------
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

<!-- 상품 검색 시작 (main_top.php) ------------------------------------->
<?
	include "main_top.php";
?>
<!-- 상품 검색 끝 (main_top.php) --------------------------------------->

<table width="959" border="0" cellspacing="0" cellpadding="0" align="center">
	<tr><td height="10" colspan="2"></td></tr>
	<tr>
		<td height="100%" valign="top">
			<!--  화면 좌측메뉴 시작 (main_left.php) ------------------------------->
<?
	include "main_left.php";
?>
			<!--  화면 좌측메뉴 끝 (main_left.php) --------------------------------->
		</td>
		<td width="10"></td>
		<td valign="top">

<!-------------------------------------------------------------------------------------------->	
<!-- 시작 : 다른 웹페이지 삽입할 부분                                                       -->
<!-------------------------------------------------------------------------------------------->	

			<!--  현재 페이지 자바스크립  -------------------------------------------->
			<script Language="Javascript">

				function Go_Reply()	{
					form2.action="qa_reply.php";
					form2.submit();
				}

				function Check_Modify()	{
					if (form2.passwd.value)
					{
							form2.action="qa_modify.php";
							form2.submit();
					}
					else
					{
						alert('암호를 입력하세요.');
						form2.passwd.focus();
					}
					return;
				}

				function Check_Delete()	{
					if (form2.passwd.value)
					{
							form2.action="qa_delete.php";
							form2.submit();
					}
					else
					{
						alert('암호를 입력하세요.');
						form2.passwd.focus();
					}
					return;
				}
			</script>

<?
	$query = "select * from qa where no39=$no;";
	$result=mysql_query($query);
	$row=mysql_fetch_array($result);
	$title39 =stripslashes($row[title39]); 
	$content39=stripslashes($row[content39]); 
	if ($row[ishtml]=="0")
		$content39=htmlspecialchars($content39);    // text 인 경우
	else
		$content39=nl2br($content39);
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
				<tr><td colspan="2" height="2"></td></tr>
				<tr>
					<td width="104" height="25" align="center" bgcolor="ECEFF4" class="cmfont">제목</td>
					<td width="586" class="cmfont">&nbsp;&nbsp;<?=$title39?></td>
				</tr>
				<tr><td colspan="2" height="2"></td></tr>
				<tr><td colspan="2" background="images/ln1.gif"></td></tr>
				<tr><td colspan="2" height="2"></td></tr>
				<tr>
					<td width="104" height="25" align="center" bgcolor="ECEFF4" class="cmfont">작성자</td>
					<td width="586" class="cmfont">&nbsp;&nbsp;<a href="mailto:<?=$row[email39]?>"><?=$row[name39]?></a></td>
				</tr>
				<tr><td colspan="2" height="2"></td></tr>
				<tr><td colspan="2" background="images/ln1.gif"></td></tr>
				<tr><td colspan="2" height="2"></td></tr>
				<tr>
					<td width="104" height="25" align="center" bgcolor="ECEFF4" class="cmfont">날짜</td>
					<td width="586" class="cmfont">&nbsp;&nbsp;<?=$row[writeday39]?></td>
				</tr>
				<tr><td colspan="2" height="2"></td></tr>
				<tr><td colspan="2" background="images/ln1.gif"></td></tr>
				<tr><td colspan="2" height="2"></td></tr>
				<tr>
					<td width="104" height="25" align="center" bgcolor="ECEFF4" class="cmfont">조회</td>
					<td width="586" class="cmfont">&nbsp;&nbsp;<?=$row[count39]?></td>
				</tr>
				<tr><td colspan="2" height="2"></td></tr>
				<tr><td colspan="2" background="images/ln1.gif"></td></tr>
				<tr><td colspan="2" height="2"></td></tr>
				<tr>
					<td width="104" height="25" align="center" bgcolor="ECEFF4" class="cmfont">내용</td>
					<td width="586" class="cmfont">
						<p style="padding-left:5px;padding-top:5px;padding-right:5px;padding-bottom:5px;"><?=$content39?></p>
					</td>
				</tr>
				<tr><td colspan="2" height="2"></td></tr>
			</table>

			<table border="0" cellpadding="0" cellspacing="0" width="690">
				<tr><td height="3" bgcolor="8B9CBF"></td></tr>
				<tr><td height="5" bgcolor="white"></td></tr>
			</table>

			<table border="0" cellpadding="0" cellspacing="0" width="690">
				<!--  form2 시작 -->
				<form name = "form2" method = "post" action="qa.php">
				<input type="hidden" name="page" value="<?=$page?>">
				<input type="hidden" name="sel1"  value="<?=$sel1?>">
				<input type="hidden" name="text1" value="<?=$text1?>">
				<input type="hidden" name="no" value="<?=$no?>">

				<tr>
					<td>
						&nbsp;Password : <input type='password' name='passwd' size="10" maxlength="20" value="" class="cmfont1">			
					</td>
					<td align="right">
							<a href="javascript:Go_Reply();"><img src="images/b_reply.gif" border="0"></a>&nbsp;
							<a href="javascript:Check_Modify();"><img src="images/b_modify.gif" border="0"></a>&nbsp;
							<a href="javascript:Check_Delete();"><img src="images/b_delete.gif" border="0"></a>&nbsp;
							<a href="javascript:history.back()"> <img src="images/b_list.gif" border="0"></a>&nbsp;
					</td>
				</tr>
				</form>
				<!--  form2 끝 -->
			</table>
<!-------------------------------------------------------------------------------------------->	
<!-- 끝 : 다른 웹페이지 삽입할 부분                                                         -->
<!-------------------------------------------------------------------------------------------->	

		</td>
	</tr>
</table>
<br><br>

<!-- 화면 하단 부분 시작 (main_bottom.php) : 회사정보/회사소개/이용정보/개인보호정책 ... ---------->
<?
	include "main_bottom.php";
?>
<!-- 화면 하단 부분 끝 (main_bottom.php) : 회사정보/회사소개/이용정보/개인보호정책 ... ---------->

&nbsp
</center>
</body>
</html>