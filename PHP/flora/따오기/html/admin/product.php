<!-------------------------------------------------------------------------------------------->	
<!-- ���α׷� : ���θ� �����ϱ� �ǽ����ü� (�ǽ��� HTML)                                    -->
<!--                                                                                        -->
<!-- �� �� �� : ������ (2008.2.4)                                                           -->
<!-------------------------------------------------------------------------------------------->	
<?
	include "../common.php";
	$query="select * from product order by name59";
	$result=mysql_query($query);
	if(!$result) exit("��������");
	$count=mysql_num_rows($result);
?>
<html>
<head>
<title>���θ� ������ Ȩ������</title>
<meta http-equiv="content-type" content="text/html; charset=euc-kr">
<link rel="stylesheet" href="include/font.css">
<script language="JavaScript" src="include/common.js"></script>
<script>
	function go_new()
	{
		location.href="product_new.php";
	}
</script>
</head>

<body bgcolor="white" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

<center>

<br>
<script> document.write(menu());</script>

<table width="800" border="0" cellspacing="0" cellpadding="0">
	<form name="form1" method="post" action="product.php">
	<tr height="40">
		<td align="left"  width="150" valign="bottom">&nbsp ��ǰ�� : <font color="#FF0000"><?=$count?></font></td>
		<td align="right" width="550" valign="bottom">
		<?
		echo("<select name='sel1'>");
for($i=0;$i<$n_sel1;$i++)
{
    if ($i==0)
       echo("<option value='$i' selected>$a_sel1[$i]</option>");
    else
       echo("<option value='$i'>$a_sel1[$i]</option>");
}
echo("</select>");


			?>
			<?
		echo("<select name='sel2'>");
for($i=0;$i<$n_sel2;$i++)
{
    if ($i==0)
       echo("<option value='$i' selected>$a_sel2[$i]</option>");
    else
       echo("<option value='$i'>$a_sel2[$i]</option>");
}
echo("</select>");


			?>
			<?
		echo("<select name='sel3'>");
for($i=0;$i<$n_sel3;$i++)
{
    if ($i==0)
       echo("<option value='$i' selected>$a_sel3[$i]</option>");
    else
       echo("<option value='$i'>$a_sel3[$i]</option>");
}
echo("</select>");


			?>
			<?
		echo("<select name='sel4'>");
for($i=0;$i<$n_sel4;$i++)
{
    if ($i==0)
       echo("<option value='$i' selected>$a_sel4[$i]</option>");
    else
       echo("<option value='$i'>$a_sel4[$i]</option>");
}
echo("</select>");


			?>
			<input type="text" name="text1" size="10" value="">&nbsp
		</td>
		<td align="left" width="100" valign="bottom">
			<input type="button" value="�˻�" onclick="javascript:form1.submit();"> &nbsp;&nbsp
			<input type="button" value="�Է�" onclick="javascript:go_new();">
		</td>
	</tr>
	<tr><td height="5"></td></tr>
	</form>
</table>

<table width="800" border="1" cellspacing="0" bordercolordark="white" bordercolorlight="black">
	<tr bgcolor="#CCCCCC" height="23"> 
		<td width="100" align="center">��ǰ�з�</td>
		<td width="100" align="center">��ǰ�ڵ�</td>
		<td width="280" align="center">��ǰ��</td>
		<td width="70"  align="center">�ǸŰ�</td>
		<td width="50"  align="center">����</td>
		<td width="120" align="center">�̺�Ʈ</td>
		<td width="80"  align="center">����/����</td>
	</tr>
<?
	if (!$sel1)   $sel1=0;
	if (!$sel2)   $sel2=0;
	if (!$sel3)   $sel3=0;
	if (!$sel4)   $sel4=0;
	if (!$text1) $text1=""; 
		  
	$k=0;
	if ($sel1 != 0)        { $s[$k] = "status59=" . $sel1;  $k++; }
	if ($sel2 == 1)       { $s[$k] = "icon_new59=1";      $k++; }
	elseif ($sel2==2)   { $s[$k] = "icon_hit59=1";         $k++; }
	elseif ($sel2==3)   { $s[$k] = "icon_sale59=1";       $k++; }
	if ($sel3 != 0)        { $s[$k] = "menu59=" . $sel3;   $k++; }
	if ($text1)
	{
		if ($sel4==0)       { $s[$k] = "name59 like '%" . $text1 . "%'"; $k++; }
		elseif ($sel4==1) { $s[$k] = "code59 like '%" . $text1 . "%'"; $k++; }
	}
	if (strlen($s) > 0)
	{
		$tmp=implode(" and ", $s); 
		$tmp = " where " . $tmp;
	}
	$query="select * from product " . $tmp . " order by name59";

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
	$price=number_format($row[price59]);
	$menu= $a_menu[$row[menu59]];
    $status= $a_status[$row[status59]];
	$name=stripslashes($row[name59]);
	if($row[icon_new59]==0) $icon1=""; else $icon1="New";
	if($row[icon_hit59]==0) $icon2=""; else $icon2="Hit";
	if($row[icon_sale59]==0) $icon3=""; else $icon3="Sale";
	$icon=$icon1." ".$icon2." ".$icon3." (".$row[discount59]."%)";

	echo("<tr bgcolor='#F2F2F2' height='23'>
			<td width='100' align='center'>$menu&nbsp</td>
			<td width='100' align='center'>$row[code59]&nbsp</td>
			<td width='280' align='center'>$name&nbsp</td>
			<td width='70' align='center'>$price&nbsp</td>
			<td width='50' align='center'>$status&nbsp</td>
			<td width='120' align='center'>$icon &nbsp</td>
			<td width='80' align='center'>
			<a href='product_edit.php?no=$row[no59]&sel1=$sel1&sel2=$sel2&sel3=$sel3&sel4=$sel4&text1=$text1&page=$page'>����</a>/
			<a href='product_delete.php?no=$row[no59]&sel1=$sel1&sel2=$sel2&sel3=$sel3&sel4=$sel4&text1=$text1&page=$page' onclick='javascript:return confirm(\"�����ұ�� ?\");'>����</a>
		</td>
		  </tr>");
  }
  ?>
  

</table>
<br>

<?
	$blocks=ceil($pages/$page_block);
	$block=ceil($page/$page_block);
	$page_s=$page_block*($block-1);
	$page_e=$page_block*$block;
	if($blocks<=$block)$page_e=$pages;
	echo("<table width='800' border='0' cellspacing='0' cellpadding='0'>
			<tr>
				<td align='center'>");
	if($block>1)
	{
		$tmp=$page_s;
		echo("<a href='product.php?page=$tmp&text1=$text1'>
				<img src='images/i_prev.gif' align='absmiddle' border='0'>
			  </a>$nbsp");
	}
	for($i=$page_s+1;$i<=$page_e;$i++)
	{
		if($page==$i)
			echo("<font color='red'><b>$i</b></font>&nbsp");
		else
			echo("<a href='product.php?page=$i&text1=$text1'>[$i]</a>&nbsp");
	}
	if($block<$blocks)
	{
		$tmp=$page_e+1;
		echo("&nbsp<a href='product.php?page=$tmp&text1=$text1'>
				<img src='images/i_next.gif' align='absmiddle' border='0'>
			  </a>");
	}
	echo("		</td>
			</tr>
		  </table>");
?>

</center>

</body>
</html>