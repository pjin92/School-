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
	<title>����ó�� ���α׷�</title>
	<link rel="stylesheet" href="font.css">
</head>

<script language="javascript">
function cal_jumsu()
{
	form1.hap.value=Number(form1.kor.value) + Number(form1.eng.value) + Number(form1.mat.value);
	form1.avg.value=(form1.hap.value/3.).toFixed(1);
}
</script>

<body>

<?
	$query="select * from sj where no39=$no;";
	$result=mysql_query($query);
	if(!$result) exit("��������");
	$row=mysql_fetch_array($result);
	$avg=sprintf("%6.1f",$row[avg39]);
?>

<form name="form1" method="post" action="sj_update.php">
<input type="hidden" name="no" value="<?=$no?>">

<table width="300" border="1" cellpadding="1" cellspacing="0" bgcolor="lightyellow">
  <tr>
    <td width="100" align="center" bgcolor="lightblue">�̸�</td>
    <td width="200">
      <input type="text" name="name" size="20" value="<?=$row[name39]?>">
    </td>
  </tr>
  <tr>
    <td width="100" align="center" bgcolor="lightblue">����</td>
    <td width="200">
      <input type="text" name="kor" size="6" value="<?=$row[kor39]?>" onChange="javascript:cal_jumsu();">
    </td>
  </tr>
  <tr>
    <td width="100" align="center" bgcolor="lightblue">����</td>
    <td width="200">
      <input type="text" name="eng" size="6" value="<?=$row[eng39]?>" onChange="javascript:cal_jumsu();">
    </td>
  </tr>
  <tr>
    <td width="100" align="center" bgcolor="lightblue">����</td>
    <td width="200">
      <input type="text" name="mat" size="6" value="<?=$row[mat39]?>" onChange="javascript:cal_jumsu();">
    </td>
  </tr>
  <tr>
    <td width="100" align="center" bgcolor="lightblue">����</td>
    <td width="200">
      <input type="text" name="hap" size="6" value="<?=$row[hap39]?>" readonly style="border:0;background-color:#ffffe0">
    </td>
  </tr>
  <tr>
    <td width="100" align="center" bgcolor="lightblue">���</td>
    <td width="200">
      <input type="text" name="avg" size="6" value="<?=$avg?>" readonly style="border:0;background-color:#ffffe0">
    </td>
  </tr>
</table>
<br>
<table width="300" border="0">
  <tr>
    <td align="center"> 
	  <input type="submit" value="����"> &nbsp
	  <input type="button" value="����ȭ������" onclick="javascript:history.back();">
	</td>
  </tr>
</table>

</form>

</body>
</html>