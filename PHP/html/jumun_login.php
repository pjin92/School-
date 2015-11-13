<!-------------------------------------------------------------------------------------------->	
<!-- 프로그램 : 쇼핑몰 따라하기 실습지시서 (실습용 HTML)                                    -->
<!--                                                                                        -->
<!-- 만 든 이 : 윤형태 (2008.2.4)                                                           -->
<!-------------------------------------------------------------------------------------------->	
<html>
<head>
<title>행복한 일상</title>
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
	  <td><img src="images/main_image1.gif" width="777" height="175"></td>
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
			<script language = "javascript">
			function Login_Check() 
			{
				if (!form2.uid.value) {
					alert("아이디를 입력해 주십시오.");
					form2.uid.focus();
					return;
				}
				if (!form2.pwd.value) {
					alert("비밀번호를 입력해 주십시오.");
					form2.pwd.focus();
					return;
				}
				form2.submit();
			}
			function NoMember_Check() 
			{
				if (!form3.name.value) {
					alert("이름을 입력해 주십시오.");
					form3.name.focus();
					return;
				}
				if (!form3.email.value) {
					alert("E-Mail을 입력해 주십시오.");
					form3.email.focus();
					return;
				}
				form3.submit();
			}
			</script>

			<!---- 화면 우측(로그인) S -------------------------------------------------->	
			<table border="0" cellpadding="0" cellspacing="0" width="747">
				<tr><td height="13"></td></tr>
				<tr>
					<td height="30" align="center">
						<img src="images/login_title.gif" width="747" height="30" border="0">
					</td>
				</tr>
				<tr><td height="15"></td></tr>
			</table>
			<table border="0" cellpadding="0" cellspacing="0" width="690">
				<tr>
					<td><img src="images/jumun_title1.gif" border="0" align="absmiddle"></td>
				</tr>
				<tr><td height="40"></td></tr>
			</table>
			<table border="0" cellpadding="0" cellspacing="0" width="720">
				<tr>
					<td width="747" align="center" valign="top">
						<table border="0" cellpadding="0" cellspacing="8" width="523" bgcolor="E9E9E9">
							<tr>
								<td height="237" align="center" bgcolor="white">
									<table border="0" cellpadding="0" cellspacing="0" width="440">
										<tr>
											<td width="120" align="center"><img src="images/login_image1.gif" width="110" height="90" border="0"></td>
											<td width="320">
												<table border="0" cellpadding="0" cellspacing="0" width="320">
													<!-- form2 시작 ------>
													<form name="form2" method="post" action="jumun_checkmember.php">
													<tr>
														<td width="50" height="25" class="smfont">
															<p style="padding-left:10px;">아이디</p>
														</td>
														<td>
															<input type="text" name="uid" size="20" maxlength="12" class="cmfont1">
														</td>
														<td width="100" rowspan="2">
															<a href="javascript:Login_Check()" onfocus="this.blur()"><img align="absmiddle" src="images/b_login.gif" width="50" height="39" border="0"></a>
														</td>
													</tr>
													<tr>
														<td width="50" height="25" class="smfont">
															<p style="padding-left:10px;">암호</p>
														</td>
														<td>
															<input type="password" name="pwd" size="20" maxlength="12" class="cmfont1">
														</td>
													</tr>
													</form>
													<!--form2 끝 ------>
												</table>
											</td>
										</tr>
									</table>
									<table border="0" cellpadding="0" cellspacing="0" width="512">
										<tr><td height="15"></td></tr>
										<tr><td height="2" bgcolor="E9E9E9"></td></tr>
										<tr><td height="15"></td></tr>
									</table>
									<table border="0" cellpadding="0" cellspacing="0" width="440">
										<tr>
											<td width="120" align="center"><img src="images/login_image5.gif" width="110" height="90" border="0"></td>
											<td width="320">
												<table border="0" cellpadding="0" cellspacing="0" width="320">
													<!-- form3 시작 ------>
													<form name="form3" method="post" action="jumun.php">
													<tr>
														<td width="50" height="25" class="smfont">
															<p style="padding-left:10px;">이름</p>
														</td>
														<td>
															<input type="text" name="name" size="20" maxlength="20" class="cmfont1">
														</td>
														<td width="100" rowspan="2">
															<a href="javascript:NoMember_Check()" onfocus="this.blur()"><img align="absmiddle" src="images/b_ok.gif" width="50" height="39" border="0"></a>
														</td>
													</tr>
													<tr>
														<td width="50" height="25" class="smfont">
															<p style="padding-left:10px;">E-Mail</p>
														</td>
														<td>
															<input type="text" name="email" size="20" maxlength="50" class="cmfont1">
														</td>
													</tr>
													</form>
													<!--form3 끝 ------>
												</table>
											</td>
										</tr>
									</table>
								</td>
							</tr>
						</table>
					</td>
				</tr>
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