<?
	include "common.php";

	$zip=sprintf("%-3s%-3s",$zip1,$zip2);
	$tel=sprintf("%-3s%-4s%-4s",$tel1,$tel2,$tel3);
	$phone=sprintf("%-3s%-4s%-4s",$phone1,$phone2,$phone3);
	$birthday=sprintf("%04d-%02d-%02d",$birthday1,$birthday2,$birthday3);

	$query="insert into member (uid39, passwd39, name39, birthday39, sm39, tel39, phone39, email39, zip39, juso39, gubun39) values('$uid','$passwd','$name','$birthday',$sm,'$tel','$phone','$email','$zip','$juso',0);";
	$result=mysql_query($query);
	if(!$result) exit("Äõ¸®¿¡·¯");
?>

<script>location.href="member_joinend.php"</script>