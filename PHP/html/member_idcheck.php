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
<title>�ߺ�ID ��ȸ</title>
<meta http-equiv="content-type" content="text/html; charset=euc-kr">
<link rel="stylesheet" href="include/font.css">

<script language = "javascript">
	function Close_me(v)
	{
		opener.form2.check_id.value = v;
		self.close();
	}
</script>

<body bgcolor="#FFFFFF" text="#000000" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<table border="0" width="300" cellspacing="0" cellpadding="0">
	<tr>
		<td  height="30" bgcolor="blue"><font color="white" size="3"><b>&nbsp;�ߺ� ID ����</b></font></td>
	</tr>
	<tr><td  height="40"></td></tr>
<?
$query="select * from member where uid68='$uid';";
$result=mysql_query($query);
if(!$result) exit($query);
$count=mysql_num_rows($result);
  if ($count==0)
     echo("<tr>
		<td height='50' valign='middle' align='center'>
			<font color='#666666'><b>$uid</b>�� ��� ������ ���̵��Դϴ�.</font>  
		</td>
	</tr>
	<tr>
		<td height='50' align='center'>
			<a href='javascript:Close_me(\"yes\")'><img src='images/b_ok1.gif' border='0'></a>
		</td>
	</tr>");
     //check_id  "yes" 
  else
     echo("<tr>
		<td height='50' valign='middle' align='center'>
			<font color='#666666'><b>$uid</b>�� ����� �� �����ϴ�.</font>  
		</td>
	</tr>
	<tr>
		<td height='50' align='center'>
			<a href='javascript:Close_me(\"\")'><img src='images/b_ok1.gif' border='0'></a>
		</td>
	</tr>");
?>
<!-- �ߺ� ���̵� ���� ��� -->
<!--
	<tr>
		<td height="50" valign="middle" align="center">
			<font color="#666666"><b>????</b>�� ��� ������ ���̵��Դϴ�.</font>  
		</td>
	</tr>
	<tr>
		<td height="50" align="center">
			<a href="javascript:Close_me('yes')"><img src="images/b_ok1.gif" border="0"></a>
		</td>
	</tr>
-->
<!-- �ߺ� ���̵� �ִ� ���-->
<!--
	<tr>
		<td height="50" valign="middle" align="center">
			<font color="#666666"><b>????</b>�� ����� �� �����ϴ�.</font>  
		</td>
	</tr>
	<tr>
		<td height="50" align="center">
			<a href="javascript:Close_me('')"><img src="images/b_ok1.gif" border="0"></a>
		</td>
	</tr>
-->

</table>
	 
</body>
</html>