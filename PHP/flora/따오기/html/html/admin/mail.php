<!-------------------------------------------------------------------------------------------->	
<!-- 프로그램 : 쇼핑몰 따라하기 실습지시서 (실습용 HTML)                                    -->
<!--                                                                                        -->
<!-- 만 든 이 : 윤형태 (2008.2.4)                                                           -->
<!-------------------------------------------------------------------------------------------->	
<html>
<head>
<title>쇼핑몰 홈페이지</title>
<meta http-equiv="content-type" content="text/html; charset=euc-kr">
<link rel="stylesheet" href="include/font.css">
<script language="JavaScript" src="include/common.js"></script>
</head>

<body bgcolor=white text=black link=blue vlink=purple alink=red leftmargin=0 topmargin=0 marginwidth=0 marginheight=0>

<div align="center">

<br>

<form name="form1" method="post" action="mail_send.php">

<table width="600" height="300" border="0" cellspacing="0" cellpadding="10">
	<tr bgcolor="#F2F2F2">	
		<td>

			보낸이 : <input type="text" name="from_email" size="40" value="hongsiki@naver.com"><br>
			받는이 : <input type="text" name="to_email"   size="40" value=""><br>
			글제목 : <input type="text" name="title"      size="70" value=""><br>
			글내용 : <textarea name="content" rows="10" cols="70"></textarea><br>
			<br>
			<div align="center">
				<input type="submit" value="메일 보내기">
				<input type="reset" value="지우기">
			</div>

		</td>
	</tr>
</table>

</form>

</div>

<br>
</body>
</html>