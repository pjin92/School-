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
<?
  $query="select * from juso where no59=$no;";
  $result=mysql_query($query);
  if(!$result) exit("��������");
  $row=mysql_fetch_array($result);

  $tel1=trim(substr($row[tel59],0,3));
  $tel2=trim(substr($row[tel59],3,4));
  $tel3=trim(substr($row[tel59],7,4));

  $birthday1=trim(substr($row[birthday59],0,4));
  $birthday2=trim(substr($row[birthday59],5,2));
  $birthday3=trim(substr($row[birthday59],8,2));
?>


<form name="form1" method="post" action="juso_update.php">
<input type="hidden" name="no" value="<?=$no?>">
<table width="500" border="1" cellpadding="1" cellspacing="0" bgcolor="lightyellow">
  <tr>
    <td width="100" align="center" bgcolor="lightblue">�̸�</td>
    <td width="400" align="left">&nbsp
      <input type="text" name="name" size="10" value="<?=$row[name59]?>">
    </td>
  </tr>
  <tr>
    <td width="100" align="center" bgcolor="lightblue">��ȭ</td>
    <td width="400" align="left">&nbsp
      <input type="text" name="tel1" size="3" maxlength="3" value="<?=$tel1?>">-
      <input type="text" name="tel2" size="4" maxlength="4" value="<?=$tel2?>">-
      <input type="text" name="tel3" size="4" maxlength="4" value="<?=$tel3?>">
    </td>
  </tr>
  <tr>
    <td width="100" align="center" bgcolor="lightblue">����</td>
    <td width="400" align="left">&nbsp
      <input type="text" name="birthday1" size="4" maxlength="4" value="<?=$birthday1?>">-
      <input type="text" name="birthday2" size="2" maxlength="2" value="<?=$birthday2?>">-
      <input type="text" name="birthday3" size="2" maxlength="2" value="<?=$birthday3?>"> 
			&nbsp;&nbsp 
	<?
		if($row[sm59]==0)
      echo("<input type='radio' name='sm' value='0' checked>���
			<input type='radio' name='sm' value='1'>����");
			else
			echo("<input type='radio' name='sm' value='0'>���
				<input type='radio' name='sm' value='1' checked>����");
	?>
    </td>
  </tr>
  <tr>
    <td width="100" align="center" bgcolor="lightblue">�ּ�</td>
    <td width="400" align="left">&nbsp
      <input type="text" name="juso" size="40" value="<?=$row[juso59]?>">
    </td>
  </tr>
</table>
<br>
<table width="500" border="0">
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