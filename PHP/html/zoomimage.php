<!-------------------------------------------------------------------------------------------->	
<!-- ���α׷� : ���θ� �����ϱ� �ǽ����ü� (�ǽ��� HTML)                                    -->
<!--                                                                                        -->
<!-- �� �� �� : ������ (2008.2.4)                                                           -->
<!-------------------------------------------------------------------------------------------->	
<?
	include "common.php";
	$query="select * from product where no68=$no";
	$result=mysql_query($query);
    $row=mysql_fetch_array($result);
?>
<html>
<head>
<title>��ǰ Ȯ�� �̹���</title>
<meta http-equiv="Content-Type" content="text/html; charset=euc-kr">
<LINK REL="STYLESHEET" HREF="include/css.css" TYPE="text/css">
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" bgcolor="eeeeee">

<table width="540" height="520" border="0" cellpadding="0" cellspacing="0">
	<tr> 
		<td height="37" colspan="2"><img src="images/zoom_title.gif" width="540" height="41"></td>
	</tr>
	<tr> 
		<td width="540" height="500" align="center" valign = "top">
			<table width="100%" height="33" border="0" cellpadding="0" cellspacing="0"  align="center">
				<tr>
					<td width="100%" height="24" align="center"><font color="#333333" style="font-size:10pt"><b><?=$row[name68]?></b></font></td>
				</tr>
			</table>
			<table width="500" border="1" cellpadding="0"  cellspacing="0" bordercolor="#CCCCCC" >
				<tr> 
					<td width="500" height="500" align="center" valign = "middle" bgcolor="white">
							<a href="javascript:window.close();"><img src="product/<?=$row[image2]?>" height="500" border="0"></a>
					</td>
				</tr>
			</table>
			<table width="500" height="5" cellpadding="0"  cellspacing="0" bordercolor="#CCCCCC">
				<tr height = "5"><td></td></tr>
			</table>
		</td>
	</tr>
	<tr> 
		<td height="30" colspan="2" align="center">
		<a href="javascript:window.close();"><img src="images/b_close.gif" border="0"></a>
		</td>
	</tr>
	<tr> 
		<td height="20" colspan="2" align="center">
	</td>
   </tr>	
</table>
</body>
</html>