<?
	include "../common.php";

	$zip=sprintf("%-3s%-3s",$zip1,$zip2);
	$tel=sprintf("%-3s%-4s%-4s",$tel1,$tel2,$tel3);
	$phone=sprintf("%-3s%-4s%-4s",$phone1,$phone2,$phone3);
	$birthday=sprintf("%04d-%02d-%02d",$birthday1,$birthday2,$birthday3);

	$query="update member set passwd39='$passwd', name39='$name', birthday39='$birthday', sm39=$sm, tel39='$tel', phone39='$phone', email39='$email', zip39='$zip', juso39='$juso', gubun39=$gubun where no39=$no;";
	$result=mysql_query($query);
	if(!$result) exit("���θ��������Ʈ��������");
?>

<script>location.href="member.php"</script>