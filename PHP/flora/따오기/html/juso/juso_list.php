<!-------------------------------------------------------------------------------------------->	
<!-- ���α׷� : ���θ� �����ϱ� �ǽ����ü� (�ǽ��� HTML)                                    -->
<!--                                                                                        -->
<!-- �� �� �� : ������ (2008.2.4)                                                           -->
<!-------------------------------------------------------------------------------------------->	
<?
	include "common.php";
?>
<html>
<head>
	<title>�ּҷ� ���α׷�</title>
	<link rel="stylesheet" href="font.css">
</head>
<body>
<table width="600" border="0">
	<form name="form1" method="post" action="juso_list.php">
	<tr>
		<td width="400">&nbsp
			�̸�:<input type="text" name="text1" size="10" value="<?=$text1?>">
			<input type="button" value="�˻�" onClick="javascript:form1.submit();">
		</td>
		<td align="right">
			<a href="juso_new.html">�Է�</a>&nbsp
		</td>
	</tr>
	</form>
</table>
<table width="600" border="1" cellpadding="1" cellspacing="0">
  <tr bgcolor="lightblue">
    <td width="80"  align="center">�̸�</td>
    <td width="100"  align="center">��ȭ</td>
    <td width="50"  align="center">��/��</td>
    <td width="70"  align="center">����</td>
    <td width="250" align="center">�ּ�</td>
    <td width="50"  align="center">����</td>
  </tr>
  <?
  if(!$text1)
	$query="select * from juso order by name59";
  else
	$query="select * from juso where name59 like '$text1%' order by name59;";
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
	if($row[sm59]==0)$sm="���";else $sm="����";
	$tel1=trim(substr($row[tel59],0,3));
	$tel2=trim(substr($row[tel59],3,4));
	$tel3=trim(substr($row[tel59],7,4));
	$tel=$tel1."-".$tel2."-".$tel3;
	echo("<tr bgcolor='lightyellow'>
			<td align='center'>&nbsp
				<a href='juso_edit.php?no=$row[no59]'>$row[name59]</a>
			</td>
			<td align='center'>$tel&nbsp</td>
			<td align='center'>$sm&nbsp</td>
			<td align='center'>$row[birthday59]&nbsp</td>
			<td align='left'>$row[juso59]&nbsp</td>
			<td align='center'>
				<a href='juso_delete.php?no=$row[no59]' onClick='javascript:return confirm(\"�����ұ�� ?\");'>
				����
				</a></td>
		  </tr>");
  }
  ?>
			
</table>

<?
	$blocks=ceil($pages/$page_block);
	$block=ceil($page/$page_block);
	$page_s=$page_block*($block-1);
	$page_e=$page_block*$block;
	if($blocks<=$block)$page_e=$pages;
	echo("<table width='600' border='0' cellspacing='0' cellpadding='0'>
			<tr>
				<td align='center'>");
	if($block>1)
	{
		$tmp=$page_s;
		echo("<a href='juso_list.php?page=$tmp&text1=$text1'>
				<img src='images/i_prev.gif' align='absmiddle' border='0'>
			  </a>$nbsp");
	}
	for($i=$page_s+1;$i<=$page_e;$i++)
	{
		if($page==$i)
			echo("<font color='red'><b>$i</b></font>&nbsp");
		else
			echo("<a href='juso_list.php?page=$i&text1=$text1'>[$i]</a>&nbsp");
	}
	if($block<$blocks)
	{
		$tmp=$page_e+1;
		echo("&nbsp<a href='juso_list.php?page=$tmp&text1=$text1'>
				<img src='images/i_next.gif' align='absmiddle' border='0'>
			  </a>");
	}
	echo("		</td>
			</tr>
		  </table>");
?>
		

</body>
</html>
