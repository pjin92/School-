<!-------------------------------------------------------------------------------------------->	
<!-- ���α׷� : ���θ� �����ϱ� �ǽ����ü� (�ǽ��� HTML)                                    -->
<!--                                                                                        -->
<!-- �� �� �� : ������ (2008.2.4)                                                           -->
<!-------------------------------------------------------------------------------------------->	
<html>
<head>
	<title>�ּҷ� ���α׷�</title>
	<link rel="stylesheet" href="font.css">
</head>

<body>

<form name="form1" method="post" action="juso_insert.php">
<table width="500" border="1" cellpadding="1" cellspacing="0" bgcolor="lightyellow">
  <tr>
    <td width="100" align="center" bgcolor="lightblue">�̸�</td>
    <td width="400" align="left">&nbsp
      <input type="text" name="name" size="10" value="">
    </td>
  </tr>
  <tr>
    <td width="100" align="center" bgcolor="lightblue">��ȭ</td>
    <td width="400" align="left">&nbsp
      <input type="text" name="tel1" size="3" maxlength="3" value="">-
      <input type="text" name="tel2" size="4" maxlength="4" value="">-
      <input type="text" name="tel3" size="4" maxlength="4" value="">
    </td>
  </tr>
  <tr>
    <td width="100" align="center" bgcolor="lightblue">����</td>
    <td width="400" align="left">&nbsp
      <input type="text" name="birthday1" size="4" maxlength="4" value="">-
      <input type="text" name="birthday2" size="2" maxlength="2" value="">-
      <input type="text" name="birthday3" size="2" maxlength="2" value=""> 
			&nbsp;&nbsp 
      <input type="radio" name="sm" value="0" checked>���
      <input type="radio" name="sm" value="1">����
    </td>
  </tr>
  <tr>
    <td width="100" align="center" bgcolor="lightblue">�ּ�</td>
    <td width="400" align="left">&nbsp
      <input type="text" name="juso" size="40" value="">
    </td>
  </tr>
</table>
<br>
<table width="500" border="0">
  <tr>
    <td align="center"> 
	  <input type="submit" value="���"> &nbsp
	  <input type="button" value="����ȭ������" onclick="javascript:history.back();">
	</td>
  </tr>
</table>
</form>

</body>
</html>