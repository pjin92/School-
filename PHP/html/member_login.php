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
			</script>

			<!---- 화면 우측(로그인) S -------------------------------------------------->	
			<table border="0" cellpadding="0" cellspacing="0" width="747">
				<tr><td height="13"></td></tr>
				<tr>
					<td height="30" align="center">
						<img src="images/login_title.gif" width="747" height="30" border="0">
					</td>
				</tr>
				<tr><td height="47"></td></tr>
			</table>
			<table border="0" cellpadding="0" cellspacing="0" width="720">
				<tr>
					<td width="747" align="center" valign="top">
						<table border="0" cellpadding="0" cellspacing="8" width="523" bgcolor="E9E9E9">
							<tr>
								<td height="210" align="center" bgcolor="white">
									<table border="0" height="120" cellpadding="0" cellspacing="0" width="440">
										<tr>
											<td width="120" align="center"><img src="images/login_image1.gif" width="110" height="90" border="0"></td>
											<td width="320">
												<table border="0" cellpadding="0" cellspacing="0" width="320">
													<tr>
														<td height="35">
															<p style="padding-left:10px;"><img src="images/login_image2.gif" width="220" height="21" border="0"></p>
														</td>
													</tr>
												</table>
												<table border="0" cellpadding="0" cellspacing="0" width="320">
													<!-- form2 시작 ------>
													<form name = "form2" method = "post" action = "member_check.php">
													<tr>
														<td width="220" height="25">
															<p style="padding-left:10px;">
															<img align="absmiddle" src="images/login_id.gif" width="40" height="13" border="0"> 
															<input type="text" name="uid" size="20" maxlength="12" class="cmfont1">
															</p>
														</td>
														<td width="100" rowspan="2">
															<a href="javascript:Login_Check()" onfocus="this.blur()"><img align="absmiddle" src="images/b_login.gif" width="50" height="39" border="0"></a>
														</td>
													</tr>
													<tr>
														<td width="220" height="25">
															<p style="padding-left:10px;">
															<img align="absmiddle" src="images/login_pw.gif" width="40" height="13" border="0"> 
															<input type="password" name="pwd" size="20" maxlength="12" class="cmfont1">
															</p>
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
									<table border="0" cellpadding="0" cellspacing="0" width="511">
										<tr>
											<td align="center">
												<table border="0" cellpadding="0" cellspacing="0">
													<tr>
														<td height="30"><img src="images/login_image6.gif" border="0"></td>
														<td height="30">
															<a href="member_idpw.html" onfocus="this.blur()"><img src="images/b_id.gif" width="64" height="19" border="0" align="absmiddle"></a> &nbsp; 
															<a href="member_idpw.html" onfocus="this.blur()"><img src="images/b_pw.gif" width="64" height="19" border="0" align="absmiddle"></a>
														</td>
													</tr>
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


<!-- 화면 하단 부분 : 회사정보/회사소개/이용정보/개인보호정책 ... ---------------------------->
<br><br>
<table width="959" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
	<tr> 
		<td background="images/footer_bg.gif" height="11"></td>
	</tr>
	<tr><td height="5"></td></tr>
	<tr> 
		<td> 
			<table width="959" border="0" cellspacing="0" cellpadding="0">
				<tr> 
					<td valign="top"><a href="index.html"><img src="images/footer_logo.gif" border="0"></a></td>
					<td width="28"></td>
					<td> 
						<table border="0" cellspacing="0" cellpadding="0">
							<tr> 
								<td> 
									<table border="0" cellspacing="0" cellpadding="0">
										<tr> 
											<td><a href="company.html"><img src="images/footer_menu01.gif" border="0"></a></td>
											<td><img src="images/footer_line.gif"></td>
											<td><a href="useinfo.html"><img src="images/footer_menu02.gif" border="0"></a></td>
											<td><img src="images/footer_line.gif"></td>
											<td><a href="policy.html"><img src="images/footer_menu03.gif" border="0"></a></td>
										</tr>
									</table>
								</td>
							</tr>
							<tr> 
								<td><img src="images/footer_copyright.gif"></td>
							</tr>
						</table>
					</td>
					<td align="right" valign="top">
						<table border="0" cellspacing="0" cellpadding="0">
							<tr> 
								<td align="right">
										<a href="index.html"><img src="images/footer_home.gif" border="0"></a>&nbsp
										<a href="#top"><img src="images/footer_top.gif" border="0"></a>
								</td>
							</tr>
							<tr>
								<td>
									<table border="0" cellspacing="0" cellpadding="0">
										<tr> 
											<td><A HREF="http://www.ftc.go.kr/" target="_blank"><img src="images/footer_pic1.gif" border=0></A></td>
											<td><img src="footer_line.gif" width="3" height="42"></td>
											<td><A HREF="http://www.sgic.co.kr/" target="_blank"><img src="images/footer_pic2.gif" border=0></a></td>
										</tr>
									</table>
								</td>
							<tr> 
						</table>
					</td>
				</tr>
			</table>
		</td>
	</tr>
</table>
&nbsp
</center>

</body>
</html>