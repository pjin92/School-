<!-------------------------------------------------------------------------------------------->	
<!-- ���α׷� : ���θ� �����ϱ� �ǽ����ü� (�ǽ��� HTML)                                    -->
<!--                                                                                        -->
<!-- �� �� �� : ������ (2008.2.4)                                                           -->
<!-------------------------------------------------------------------------------------------->	
<?
	include "../common.php";
	$query="select name39 from opt where no39=$no1;";
	$result=mysql_query($query);
	$count=mysql_num_rows($result);
	$row=mysql_fetch_array($result);
?>
<html>
<head>
<title>���θ� Ȩ������</title>
<meta http-equiv="content-type" content="text/html; charset=euc-kr">
<link rel="stylesheet" href="include/font.css">
<script language="JavaScript" src="include/common.js"></script>
<script>
	function go_new()
	{
		location.href="opts_new.php?no1=<?=$no1?>";
	}
</script>
</head>

<body bgcolor="white" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

<center>

<br>
<script> document.write(menu());</script>
<input type="hidden" name="no1" value="<?=$row[no39]?>">

<table width="450" border="0" cellspacing="0" cellpadding="0">
	<tr height="50">
		<td align="left"  width="300" valign="bottom">&nbsp �ɼǸ� : <font color="#0457A2"><b><?=$row[name39]?></b></font></td>
		<td align="right" width="200" valign="bottom">
			<input type="button" value="�ű��Է�" onclick="javascript:go_new();"> &nbsp
		</td>
	</tr>
	<tr><td height="5" colspan="2"></td></tr>
</table>

<table width="500" border="1" cellspacing="0" bordercolordark="white" bordercolorlight="black">
	<tr bgcolor="#CCCCCC" height="20"> 
		<td width="100" align="center"><font color="#142712">�ҿɼǹ�ȣ</font></td>
		<td width="300" align="center"><font color="#142712">�ҿɼǸ�</font></td>
		<td width="100" align="center"><font color="#142712">����/����</font></td>
	</tr>
<?
	$query="select * from opts where opt_no39=$no1 order by no39;";
	$result=mysql_query($query);
	$count=mysql_num_rows($result);
	$row=mysql_fetch_array($result);
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
		
		echo("	<tr bgcolor='#F2F2F2' height='20'>	
		<td width='100' align='center'>$row[no39]</td>
		<td width='300' align='left'>&nbsp$row[name39]</td>
		<td width='100' align='center'>
			<a href='opts_edit.php?no1=$row[opt_no39]&no2=$row[no39]'>����</a>/
			<a href='opts_delete.php?no1=$row[opt_no39]&no2=$row[no39]' onclick='javascript:return confirm(\"�����ұ�� ?\");'>����</a>
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

	echo("<table width='500' border='0' cellspacing='0' cellpadding='0'>
		<tr>
			<td align='center'>");
	if ($block > 1)
	{
		$tmp = $page_s;
		echo("<a href='opts.php??page=$tmp&no1=$no1'><img src='images/i_prev.gif' align='absmiddle' border='0'></a>&nbsp");
	}
	for($i=$page_s+1; $i<=$page_e; $i++)
	{
		if($page ==$i)
			echo("<font color='red'><b>$i</b></font>&nbsp");
		else
			echo("<a href='opts.php?page=$i&no1=$no1'>[$i]</a>&nbsp");
	}
	if ($block < $blocks)
	{
		$tmp = $page_e+1;
		echo("&nbsp<a href='opts.php?page=$tmp&no1=$no1'><img src='images/i_next.gif' align='absmiddle' border='0'></a>");
	}
	echo("</td>
		</tr>
		</table>");
?>
</center>

</body>
</html>