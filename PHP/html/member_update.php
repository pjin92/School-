<?
include "common.php";
setcookie("cookie_name",$name);
$zip=sprintf("%-3s%-3s",$zip1,$zip2);
$tel=sprintf("%-3s%-4s%-4s",$tel1,$tel2,$tel3);
$phone=sprintf("%-3s%-4s%-4s",$phone1,$phone2,$phone3);
$birthday=sprintf("%04d-%02d-%02d",$birthday1,$birthday2,$birthday3);

if(!$passwd1)

	$query="update member set name68='$name',birthday68='$birthday',sm68='$sm',tel68='$tel',phone68='$phone',email68='$email',zip68='$zip',juso68='$juso' where no68=$cookie_no;";
	else
	$query="update member set passwd68='$passwd1' ,name68='$name',birthday68='$birthday',sm68='$sm',tel68='$tel',phone68='$phone',email68='$email',zip68='$zip',juso68='$juso' where no68=$cookie_no;";
	$result=mysql_query($query);
	if(!$result) exit("��������");
	
?>
<script>location.href="member_edit.php"</script>