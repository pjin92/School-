<!-------------------------------------------------------------------------------------------->	
<!-- ���α׷� : ���θ� �����ϱ� �ǽ����ü� (�ǽ��� HTML)                                    -->
<!--                                                                                        -->
<!-- �� �� �� : ������ (2008.2.4)                                                           -->
<!-------------------------------------------------------------------------------------------->	
<?
	include "../common.php";
	$query="select * from opt order by name68";
	$result=mysql_query($query);
	if(!$result) exit("��������");
	$count=mysql_num_rows($result);
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
		location.href="opt_new.html";
	}
</script>
</head>

<body bgcolor="white" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

<center>
<br>
<script> document.write(menu());</script>

<table width="450" border="0" cellspacing="0" cellpadding="0">
	<tr>
		<td align="left"  width="250" height="50" valign="bottom">&nbsp �ɼǼ� : <font color="#FF0000"><?=$count?></font></td>
		<td align="right" width="200" height="50" valign="bottom">
			<input type="button" value="�ű��Է�" onclick="javascript:go_new();"> &nbsp
		</td>
	</tr>
	<tr><td height="5" colspan="2"></td></tr>
</table>

<table width="450" border="1" cellspacing="0" cellpadding="4"  bordercolordark="white" bordercolorlight="black">
	<tr bgcolor="#CCCCCC" height="20"> 
		<td width="50"  align="center"><font color="#142712">��ȣ</font></td>
		<td width="200" align="center"><font color="#142712">�ɼǸ�</font></td>
		<td width="100" align="center"><font color="#142712">����/����</font></td>
		<td width="100" align="center"><font color="#142712">�ҿɼ�����</font></td>
	</tr>
	<?
	  $query="select * from opt order by name68";
	  $result=mysql_query($query);
	  if(!$result) exit("��������");
	  $count=mysql_num_rows($result);

	  if(!$page)$page=1;
	  $pages=ceil($count/$page_line);
	  $first=1;
	  if($count>0)$first=$page_line*($page-1);
	  $page_last=$count-$first;
	  if($page_last>$page_line)$page_last=$page_line;
	  if($count>0)mysql_data_seek($result,$first);
	  for($i=0;$i<$page_last;$i++)
	  {
		$row=mysql_fetch_array($result);
		echo("<tr bgcolor='#F2F2F2' height='23'>
				<td align='center'>$row[no68]&nbsp</td>
				<td align='center'>$row[name68]&nbsp</td>
				<td align='center'>
				<a href='opt_edit.php?no1=$row[no68]&page=$page&sel1=$sel1&text1=$text1'>����</a>/
				<a href='opt_delete.php?no1=$row[no68]&page=$page&sel1=$sel1&text1=$text1' onclick='javascript:return confirm(\"�����ұ�� ?\");'>����</a>
			</td>
			<td width='100' align='center'><a href='opts.php?no1=$row[no68]'>�ҿɼ�����</a></td>
			  </tr>");
	 }
?>
</table>

<br>
</center>

</body>
</html>