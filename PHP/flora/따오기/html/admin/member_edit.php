<!-------------------------------------------------------------------------------------------->	
<!-- 프로그램 : 쇼핑몰 따라하기 실습지시서 (실습용 HTML)                                    -->
<!--                                                                                        -->
<!-- 만 든 이 : 윤형태 (2008.2.4)                                                           -->
<!-------------------------------------------------------------------------------------------->	
<?
	include "../common.php";
?>
<html>
<head>
<title>쇼핑몰 홈페이지</title>
<meta http-equiv="content-type" content="text/html; charset=euc-kr">
<link rel="stylesheet" href="include/font.css">
<script language="JavaScript" src="include/common.js"></script>
<script>
	function OpenWinZip(zip_kind)
	{
		window.open("zipcode.php?zip_kind="+zip_kind, "", "scrollbars=no,width=500,height=250");
	}
</script>
</head>

<body bgcolor="white" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<?
  $query="select * from member where no59=$no;";
 
  $result=mysql_query($query);
  if(!$result) exit("쿼리에러");
  $row=mysql_fetch_array($result);

  $phone1=trim(substr($row[phone59],0,3));
  $phone2=trim(substr($row[phone59],3,4));
  $phone3=trim(substr($row[phone59],7,4));

  $zip1=trim(substr($row[zip59],0,3));
  $zip2=trim(substr($row[zip59],3,3));

  $tel1=trim(substr($row[tel59],0,3));
  $tel2=trim(substr($row[tel59],3,4));
  $tel3=trim(substr($row[tel59],7,4));

  $birthday1=trim(substr($row[birthday59],0,4));
  $birthday2=trim(substr($row[birthday59],5,2));
  $birthday3=trim(substr($row[birthday59],8,2));
?>

<center>

<br>
<script> document.write(menu());</script>
<br>
<br>

<form name="form2" method="post" action="member_update.php">

<input type="hidden" name="no" value="<?=$row[no59]?>">

<table width="600" border="1" cellspacing="0" cellpadding="4" bordercolordark="white" bordercolorlight="black">
	<tr height="20"> 
		<td width="100" align="center" bgcolor="#CCCCCC">ID</td>
		<td width="500" bgcolor="#F2F2F2"><?=$row[uid59]?></td>
	</tr>
	<tr height="20"> 
		<td width="100" align="center" bgcolor="#CCCCCC">암호</td>
		<td width="500" bgcolor="#F2F2F2">
			<input type="text" name="passwd" value="<?=$row[passwd59]?>" size="20" maxlength="20">
		</td>
	</tr>
	<tr height="20"> 
		<td width="100" align="center" bgcolor="#CCCCCC">이름</td>
		<td width="500" bgcolor="#F2F2F2">
			<input type="text" name="name" value="<?=$row[name59]?>" size="20" maxlength="20">
		</td>
	</tr>
	<tr height="20"> 
		<td width="100" align="center" bgcolor="#CCCCCC">생일</td>
		<td width="500" bgcolor="#F2F2F2">
      <input type="text" name="birthday1" size="4" maxlength ="4" value="<?=$birthday1?>">-
      <input type="text" name="birthday2" size="2" maxlength ="2" value="<?=$birthday2?>">-
      <input type="text" name="birthday3" size="2" maxlength ="2" value="<?=$birthday3?>"> 
			&nbsp;&nbsp 
	<?
		if($row[sm59] ==1)
		{
			echo("<input type='radio' name='sm' value='1' checked>양력
			<input type='radio' name='sm' value='2' >음력");
		}
		else
		{
			echo("<input type='radio' name='sm' value='1'>양력 
			<input type='radio' name='sm' value='2' checked >음력");
		}
	?>
		</td>
	</tr>
	<tr height="20"> 
		<td width="100" align="center" bgcolor="#CCCCCC">전화번호</td>
		<td width="500" bgcolor="#F2F2F2">
			<input type="text" name="tel1" value="<?=$tel1?>"   size="3" maxlength="3"> -
			<input type="text" name="tel2" value="<?=$tel2?>"  size="4" maxlength="4"> -
			<input type="text" name="tel3" value="<?=$tel3?>" size="4" maxlength="4">
		</td>
	</tr>
	<tr height="20"> 
		<td width="100" align="center" bgcolor="#CCCCCC">핸드폰</td>
		<td width="500" bgcolor="#F2F2F2">
			<input type="text" name="phone1" value="<?=$phone1?>"   size="3" maxlength="3"> -
			<input type="text" name="phone2" value="<?=$phone2?>"  size="4" maxlength="4"> -
			<input type="text" name="phone3" value="<?=$phone3?>" size="4" maxlength="4">
		</td>
	</tr>
	<tr height="20"> 
		<td width="100" align="center" bgcolor="#CCCCCC">E-Mail</td>
		<td width="500" bgcolor="#F2F2F2">
			<input type="text" name="email" value="<?=$row[email59]?>" size="40" maxlength="40">
		</td>
	</tr>
	<tr height="20"> 
		<td width="100" align="center" bgcolor="#CCCCCC">주소</td>
		<td width="500" bgcolor="#F2F2F2">
			<input type="text" name="zip1" value="<?=$zip1?>" size="3" maxlength="3"> -
			<input type="text" name="zip2" value="<?=$zip2?>" size="3" maxlength="3"> &nbsp 
			<input type="button" value="우편번호 찾기" onClick="javascript:OpenWinZip(0);"> <br>
			<input type="text" name="juso" value="<?=$row[juso59]?>" size="50" maxlength="200">
		</td>
	</tr>
	<tr height="20"> 
		<td width="100" align="center" bgcolor="#CCCCCC">회원구분</td>
		<td width="500" bgcolor="#F2F2F2">
	<?
		if($row[gubun59] ==0)
		{
			echo("<input type='radio' name='gubun' value='0' checked>회원
			<input type='radio' name='gubun' value='1' >탈퇴");
		}
		else
		{
			echo("<input type='radio' name='gubun' value='0'>회원
			<input type='radio' name='gubun' value='1' checked >탈퇴");
		}
	?>
		</td>
	</tr>
</table>

<br>
<table width="800" border="0" cellspacing="0" cellpadding="7">
	<tr> 
		<td align="center">
			<input type="submit" value="수정하기"> &nbsp;&nbsp
			<input type="button" value="이전화면" onClick="javascript:history.back();">
		</td>
	</tr>
</table>

</form>

</center>

<br>
</body>
</html>