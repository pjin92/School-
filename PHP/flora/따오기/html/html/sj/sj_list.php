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
	<title>성적처리 프로그램</title>
	<link rel="stylesheet" href="font.css">
</head>
<body>

<table width="400" border="0">
  <form name="form1 nethod="post" action="sj_list.php">
  <tr>
	<td>
		이름 : <input type="text" name="text1" size = "10" value="<?=$text1?>">
		<input type="button" value="검색" onClick="javascript:form1.submit();">
	</td>
	<td align="right"><a href="sj_new.html">입력</a>&nbsp</td>
  </tr>
  </form>
</table>
<table width="400" border="1" cellpadding="1" cellspacing="0">
  <tr bgcolor="lightblue">
    <td width="100" align="center">이름</td>
    <td width="50"  align="center">국어</td>
    <td width="50"  align="center">영어</td>
    <td width="50"  align="center">수학</td>
    <td width="50"  align="center">총점</td>
    <td width="50"  align="center">평균</td>
	<td width="50"  align="center">삭제</td>
  </tr>
<?
if(!$text1)
	$query="select * from sj order by name39;";
else
	$query="select * from sj where name39 like '$text1%' order by name39;";

	$result=mysql_query($query);
	if(!$result) exit("쿼리에러");
	$count=mysql_num_rows($result);

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
		$avg=sprintf("%6.1f",$row[avg39]);
		echo("<tr bgcolor='lightyellow'>
				<td width='100' align='center'><a href='sj_edit.php?no=$row[no39]'> $row[name39]</a></td>
				<td width='50'  align='center'>$row[kor39]</td>
				<td width='50'  align='center'>$row[eng39]</td>
				<td width='50'  align='center'>$row[mat39]</td>
				<td width='50'  align='center'>$row[hap39]</td>
				<td align='right'> $avg</td>
				<td align='center'>
				<a href='sj_delete.php?no=$row[no39]' onClick='javascript:return confirm(\"삭제할까요?\");'>삭제</a>
				</td>
			 </tr>");
	}
?>
</table>

<?
	$blocks = ceil($pages/$page_block);
	$block = ceil($page/$page_block);
	$page_s = $page_block * ($block-1);
	$page_e = $page_block * $block;
	if($blocks <= $block) $page_e = $pages;

	echo("<table width='400' border='0' cellspacing='0' cellpadding='0'>
		<tr>
			<td align='center'>");
	if ($block > 1)
	{
		$tmp = $page_s;
		echo("<a href='sj_list.php?page=$tmp&text1=$text1'><img src='images/i_prev.gif' align='absmiddle' border='0'></a>&nbsp");
	}
	for($i=$page_s+1; $i<=$page_e; $i++)
	{
		if($page ==$i)
			echo("<font color='red'><b>$i</b></font>&nbsp");
		else
			echo("<a href='sj_list.php?page=$i&text1=$text1'>[$i]</a>&nbsp");
	}
	if ($block < $blocks)
	{
		$tmp = $page_e+1;
		echo("&nbsp<a href='sj_list.php?page=$tmp&text1=$text1'><img src='images/i_next.gif' align='absmiddle' border='0'></a>");
	}
	echo("</td>
		</tr>
		</table>");
?>
</body>
</html>