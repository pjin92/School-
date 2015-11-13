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
<?
	if (!$sel1) $sel1=0;
	if (!$text1)
    $query="select * from qa order by pos1 desc, pos2;";
	else
	{
		if ($sel1==0)          // 제목
			$query="select * from qa where title39 like '%$text1%'   order by pos1 desc, pos2;";
		else if ($sel1==1)    // 내용
			$query="select * from qa where content39 like '%$text1%'   order by pos1 desc, pos2;";
		else                        // 작성자
			$query="select * from qa where name39 like '%$text1%'   order by pos1 desc, pos2;";
	}
	$result=mysql_query($query);
	$count=mysql_num_rows($result);

?>
			<!--  현재 페이지 자바스크립  -------------------------------------------->
			<script Language="Javascript">
				function Search_qa()	
				{
					form2.page.value=1;
					form2.submit();
				}
			</script>

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
				<tr>
					<td align="right" class="cmfont">
						<font color="#686868">게시물:</font><?=$count?> &nbsp;&nbsp; <font color="#686868">페이지:</font>

<?
	$lastpage=ceil($count/$page_block);
	if(!$page)
		echo("1 /$lastpage");
	else
		echo("$page / $lastpage")
?>
					</td>
				</tr>
			</table>

			<table border="0" cellpadding="0" cellspacing="0" width="690" class="cmfont">
				<tr><td colspan="5" height="3" bgcolor="8B9CBF"></td></tr>
				<tr bgcolor="F2F2F2" >
					<td width="90" height="25" align="center">번호</td>
					<td align="center">제목</td>
					<td width="90" align="center">작성자</td>
					<td width="90" align="center">작성일</td>
					<td width="90" align="center">조회</td>
				</tr>
<?
	if(!$page) $page=1;
	$pages = ceil($count/$page_line);
	$first = 1;
	if ($count>0) $first = $page_line*($page-1);
	$page_last=$count-$first;
	if ($page_last>$page_line) $page_last=$page_line;
	if($count>0) mysql_data_seek($result,$first);

	for($i=0;$i<$page_last;$i++)
	{
		$row=mysql_fetch_array($result);
		$title39 = stripslashes($row[title39]);

		echo("<tr><td height='1' bgcolor='#DEDCDD'colspan='5'></td></tr>
				<tr height='25' bgcolor='#FFFFFF'>	
					<td width='90' align='center'><font color='#686868'>$row[no39]</font></td>
					<td>");
		$n=strlen($row[pos2]);     // 문자열길이
		if ($n==1)   // 정상 글인 경우
			echo("<a href='qa_read.php?no=$row[no39]&count=$row[count39]&page=$page&sel1=$sel1&text1=$text1'>&nbsp;<font color='#4186C7'>$title39");
		else             // 답변글인 경우
		{
		for($j=0;  $j<$n-2;  $j++) echo("&nbsp;&nbsp;");
		echo("<img src='images/i_re.gif' border='0' align='absmiddle'>&nbsp;<a href='qa_read.php?no=$row[no39]&count=$row[count39]&page=$page&sel1=$sel1&text1=$text1'>&nbsp;<font color='#4186C7'>$title39");
		}
		echo("</font></a></td>	
					<td width='90' align='center'><font color='#686868'>$row[name39]</font></td>	
					<td width='90' align='center'><font color='#686868'>$row[writeday39]</font></td>	
					<td width='90' align='center'><font color='#686868'>$row[count39]</font></td>
				</tr>");
	}

?>




				<tr><td colspan="5" height="2" bgcolor="8B9CBF"></td></tr>
			</table>

			<table border="0" cellpadding="0" cellspacing="0" width="690">
				<!-- form2 시작 -->
				<form name="form2" method="post" action="qa.php">
				<input type="hidden" name="page" value="1">
				<tr>
					<td height="40">&nbsp;
						<select name="sel1" class="cmfont1">
<?
	for($i=0;$i<$n_qasearch;$i++)
	{
    if ($i==$sel1)
		echo("<option value='$i' selected>$a_qasearch[$i]</option>");
    else
		echo("<option value='$i'>$a_qasearch[$i]</option>");
	}
?>
						</select>
						<input type='text' name='text1' size="10" maxlength="20" value="<?=$text1?>" class="cmfont1">			
						<input type="image" src="images/i_search.gif" align="absmiddle" border="0" onclick="javascript:Search_qa();">
					</td>
					<td align="right">
						<a href="qa_new.php"><img src="images/b_new.gif" border="0"></a>&nbsp;
					</td>
				</tr>
				</form>
				<!-- form2 끝 -->
			</table>
<?
	$blocks = ceil($pages/$page_block);
	$block = ceil($page/$page_block);
	$page_s = $page_block * ($block-1);
	$page_e = $page_block * $block;
	if($blocks <= $block) $page_e = $pages;

	echo("<table width='690' border='0' cellspacing='0' cellpadding='0'>
		<tr>
			<td height='30' class='cmfont' align='center'>");
	if ($block > 1)
	{
		$tmp = $page_s;
		echo("<a href='qa.php?page=$tmp&sel1=$sel1&text1=$text1'><img src='images/i_prev.gif' align='absmiddle' border='0'></a>&nbsp");
	}
	for($i=$page_s+1; $i<=$page_e; $i++)
	{
		if($page ==$i)
			echo("<font color='#FC0504'><b>$i</b></font>&nbsp");
		else
			echo("<a href='qa.php?page=$i&sel1=$sel1&text1=$text1'>[$i]</a>&nbsp");
	}
	if ($block < $blocks)
	{
		$tmp = $page_e+1;
		echo("&nbsp<a href='qa.php?page=$tmp&sel1=$sel1&text1=$text1'><img src='images/i_next.gif' align='absmiddle' border='0'></a>");
	}
	echo("</td>
		</tr>
		</table>");
?>
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