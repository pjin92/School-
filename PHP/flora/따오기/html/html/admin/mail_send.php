<?
	include "../common.php";
	$add_header = "Return-Path: ".$from_email." \n";
	$add_header .= "From: ". $from_email . "<".$from_email.">\n"; 
	$add_header .= "Reply-to: ". $from_email. "\n";
	$add_header .= "X-Priority: 3\n";
	$add_header .= "X-Mailer: PHP_mailer \n";
	$add_header .= "Content-Type: text/html;charset=EUC-KR\n"; 
	$add_header .= "MIME-Version: 1.0\n";
	$add_header .= "\n\n"; 

	$success =mail($to_email, $title, $content, $add_header);

	if(!$success)
	{
		echo "<script>alert('메일보내기 실패');location.href='./mail.php';</script>";
	}
	else
	{
		echo "<script>alert('메일을 보내주셔서 감사합니다.');location.href='./jumun.php';</script>";
	}
?> 