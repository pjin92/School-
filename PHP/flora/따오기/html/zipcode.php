<!-------------------------------------------------------------------------------------------->	
<!-- ���α׷� : ���θ� �����ϱ� �ǽ����ü� (�ǽ��� HTML)                                    -->
<!--                                                                                        -->
<!-- �� �� �� : ������ (2008.2.4)                                                           -->
<!-------------------------------------------------------------------------------------------->	
<?
    include " common.php ";
?>
<?
      $link_sv = mysql_connect("localhost", "zip", "zips");
      if (!$link_sv) exit("�������ῡ��");
      $link_db = mysql_select_db("zip", $link_sv);
      if (!$link_db) exit("DB���ῡ��");
?>

<html>
<head>
<title>�����ȣ �� �ּ� ã��</title>
<meta http-equiv="Content-Type" content="text/html; charset=euc-kr">
<link rel="stylesheet" href="include/font.css">

<script language="javascript">
function SearchZip() 
{
	if (!form.dong.value) 
	{
		alert("�˻��Ͻ� ������ �Է��� �ֽʽÿ�.");
		form.dong.focus();
		return;
	}
	form.submit();
}
function SendZip(zip_kind) 
{
	if (form1.jusor.value == "") {
		alert("������ �ּҸ� �Է��Ͽ� �ֽʽÿ�.");
		form1.jusor.focus();
		return;
	}
	var str, zip1, zip2, juso;
	str = form1.post_no.value;
	str = str.split("^^");
	zip1 = str[0];
	zip2 = str[1];
	juso = str[2] + " " + form1.jusor.value;

	if (zip_kind==1)			
	{
		opener.form2.o_zip1.value = zip1;
		opener.form2.o_zip2.value = zip2;
		opener.form2.o_juso.value = juso;
	} else if (zip_kind==2)	{
		opener.form2.r_zip1.value = zip1;
		opener.form2.r_zip2.value = zip2;
		opener.form2.r_juso.value = juso;
	} else {
		opener.form2.zip1.value = zip1;
		opener.form2.zip2.value = zip2;
		opener.form2.juso.value = juso;
	}

	self.close();
}
</script>
</head>
<body bgcolor="#FFFFFF" leftmargin="0"topmargin="0"marginwidth="0"marginheight="0">

<script language="javascript">
	window.resizeTo(500, 340);
</script>

<table width="500" border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td>
			<table border="0" cellpadding="0" cellspacing="0" width="100%">
				<tr>
					<td><p><img src="images/zipcode_title.gif" border="0"></p></td>
				</tr>
			</table>
		</td>
	</tr>
	<tr>
		<td>
			<form  name="form" method="post" action="zipcode.php">
			<table width="385" border="0" cellspacing="0" cellpadding="0" align="center">
				<tr>
					<td width="14">&nbsp;</td>
					<td width="355" align="center">
						<table width="86%" border="0" cellspacing="5" cellpadding="0">
							<tr height="20">
								<td colspan="2" valign="middle" width="305">
									<span style="font-size:9pt;"><font color="#666666"><b>�˻��� ������ �Է��� �ּ���</b></font></span>
								</td>
							</tr>
							<tr> 
								<td width="161"><input name="dong" type="text" size="25" maxlength="20" value = "" style = "border:1 solid #E5E5E5;font-size:9pt"></td>
								<td width="134"><a href = "javascript:SearchZip()"><img src="images/b_search.gif" border="0"></a></td>
							</tr>
						</table>
					</td>
					<td width="16">&nbsp;</td>
				</tr>
			</table>
			</form>
		</td>
	</tr>
</table>

<table width="500" border="0"cellpadding="0"cellspacing="0">
	<form name="form1">

	<tr> 
		<td align="center">			
			<?
				$query="select  *  from  zip  where  juso3  like  '%$dong%'; ";
				$result=mysql_query($query);
				if(!$result) exit("��������");
				$count=mysql_num_rows($result);
				if($dong == "")
				echo("<select style='BACKGROUND-COLOR: #E3E7EB' border='0' name='post_no' style = 'width:440;font-size:9pt'>
				</select>");
				else
				{
				echo("<select style='BACKGROUND-COLOR: #E3E7EB' border='0' name='post_no' style = 'width:440;font-size:9pt'>");
				for($i=0;$i<$count;$i++)
				{
					$row=mysql_fetch_array($result);
					$zip1=trim(substr($row[zip],0,3));
					$zip2=trim(substr($row[zip],4,3));
					$zip3=$zip1."-".$zip2;
					$juso=$row[juso1]." ".$row[juso2]." ".$row[juso3]." ".$row[juso4];
					echo("<option value='$zip1^^$zip2^^$juso'>[$zip3] $juso </option>");
				}
				echo("</select>");
				}
			?>
		</td>
	</tr>
	<tr>
		<td align="center">
			<input type="text" name="jusor" size="50" maxlength="50" STYLE="width:440;border:1 solid #E5E5E5"><br>
			<b><font color="#666666"><span style="font-size:9pt;">������ �ּҸ� �Է��� �ּ���</span></font></b>
		</td>
	</tr>
	<!-- ȸ�������� ��� : SendZip(0), �ֹ����� ��� : SendZip(1), ������� ��� : SendZip(2) -->
	<tr height="55"> 
		<td align="center">
			<a href="javascript:SendZip(0)"><img src="images/b_ok1.gif" border="0"></a>
		</td>
	</tr>
</form>
</table>

</body>
</html>