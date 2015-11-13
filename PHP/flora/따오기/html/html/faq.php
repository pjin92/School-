<!-------------------------------------------------------------------------------------------->	
<!-- 프로그램 : 쇼핑몰 따라하기 실습지시서 (실습용 HTML)                                    -->
<!--                                                                                        -->
<!-- 만 든 이 : 윤형태 (2008.2.4)                                                           -->
<!-------------------------------------------------------------------------------------------->	
<?
	include "common.php";
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

			<table border="0" cellpadding="0" cellspacing="0" width="747">
				<tr><td height="13"></td></tr>
				<tr>
					<td height="30"><img src="images/faq_title.gif" width="746" height="30" border="0"></td>
				</tr>
				<tr><td height="13"></td></tr>
			</table>

			<table border="0" cellpadding="0" cellspacing="0" width="690">
				<tr>
					<td height="30"><img src="images/faq_title1.gif" border="0"></td>
				</tr>
			</table>


			<table border="0" cellpadding="0" cellspacing="0" width="690" class="cmfont">
				<tr><td colspan="2" height="3" bgcolor="#FFCC00"></td></tr>
				<tr bgcolor="#FFF5D0" >
					<td width="90" height="25" align="center">번호</td>
					<td align="center">제목</td>
				</tr>
<?
	$query="select * from faq order by no39 ;";
	$result=mysql_query($query);
	$count=mysql_num_rows($result);
		for ($i=0; $i<$count; $i++)
	{
		$row=mysql_fetch_array($result);
		$title39 = stripslashes($row[title39]);
		echo("<tr><td height='1' bgcolor='#DEDCDD'colspan='4'></td></tr>
				<tr height='25' bgcolor='#FFFFFF'>	
					<td width='90' align='center'><font color='#686868'>$row[no39]</font></td>	
					<td><a href='faq_read.php?no=$row[no39]'><font color='#686868'>$title39</font></a></td>	
				</tr>");
	}
?>
				<tr><td colspan="2" height="2" bgcolor="#FFCC00"></td></tr>
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