<?
	include "common.php";

	$zip=sprintf("%-3s%-3s",$zip1,$zip2);
	$tel=sprintf("%-3s%-4s%-4s",$tel1,$tel2,$tel3);
	$phone=sprintf("%-3s%-4s%-4s",$phone1,$phone2,$phone3);
	$birthday=sprintf("%04d-%02d-%02d",$birthday1,$birthday2,$birthday3);
	if(!$passwd1)
	$query="update member set name59='$name',birthday59='$birthday',sm59='$sm',tel59='$tel',phone59='$phone',email59='$email',zip59='$zip',juso59='$juso' where no59=$cookie_no;";
	else
	$query="update member set passwd59='$passwd1' ,name59='$name',birthday59='$birthday',sm59='$sm',tel59='$tel',phone59='$phone',email59='$email',zip59='$zip',juso59='$juso' where no59=$cookie_no;";
	$result=mysql_query($query);
	if(!$result) exit("Äõ¸®¿¡·¯");
?>
<script>location.href="member_edit.php"</script>