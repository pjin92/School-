<!-------------------------------------------------------------------------------------------->	
<!-- ���α׷� : ���θ� �����ϱ� �ǽ����ü� (�ǽ��� HTML)                                    -->
<!--                                                                                        -->
<!-- �� �� �� : ������ (2008.2.4)                                                           -->
<!-------------------------------------------------------------------------------------------->	
<?
	if (!$cookie_admin){
	echo("<script>location.href='index.html'</script>");
	}
	include "../common.php";
	
	$query="select name68 from opt where no68=$no1;";

	$result=mysql_query($query);
	if(!$result) exit("��������");
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

<table width="450" border="0" cellspacing="0" cellpadding="0">
	<tr height="50">
		<td align="left"  width="300" valign="bottom">&nbsp �ɼǸ� : <font color="#0457A2"><b><?=$row[name68]?></b></font></td>
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
	  $query="select * from opts where opt_no68=$no1 order by no68";
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
				<a href='opts_edit.php?no1=$row[opt_no68]&no2=$row[no68]&page=$page&sel1=$sel1&text1=$text1'>����</a>/
				<a href='opts_delete.php?no1=$row[opt_no68]&no2=$row[no68]&page=$page&sel1=$sel1&text1=$text1' onclick='javascript:return confirm(\"�����ұ�� ?\");'>����</a>
			</td>
			  </tr>");
	 }
?>
</table>
</center>

</body>
</html>