<?
	if(!$cookie_admin) 
	echo("<script>location.href='index.html'</script>");
	include "../common.php";

	if (!$icon_new)   $icon_new=0;   else   $icon_new=1;

	if (!$icon_hit)   $icon_hit=0;   else   $icon_hit=1;

	if (!$icon_sale)   $icon_sale=0;   else   $icon_sale=1;

	$regday = sprintf("%04d-%02d-%02d", $regday1, $regday2, $regday3);

	$name68 = addslashes($name);
	$content68 = addslashes($content);

	$filename1=$image1_name;
	$image1_name=$imagename1;
	if ($checkno1=="1") $image1_name="";    // 삭제 체크가 된 경우
	if ($image1)      // 선택한 파일이 있는지 조사
	{

		if (!copy($image1,"../product/$filename1")) exit("업로드 실패.");
		$image1_name=$filename1;
	}

	$filename2=$image2_name;
	$image2_name=$imagename2;
	if ($checkno2=="1") $image2_name="";    // 삭제 체크가 된 경우
	if ($image2)      // 선택한 파일이 있는지 조사
	{
		if (!copy($image2,"../product/$filename2")) exit("업로드 실패.");
		$image2_name=$filename2;
	}

	$filename3=$image3_name;
	$image3_name=$imagename3;
	if ($checkno3=="1") $image3_name="";    // 삭제 체크가 된 경우
	if ($image3)      // 선택한 파일이 있는지 조사
	{
		if (!copy($image3,"../product/$filename3")) exit("업로드 실패.");
		$image3_name=$filename3;
	}

	

	$query="update product set menu68='$menu', code68='$code', name68='$name68', coname68='$coname', price68='$price', opt1='$opt1', opt2='$opt2', content_html68='$content_html', content68='$content68', status68='$status', regday68='$regday', icon_new68='$icon_new', icon_hit68='$icon_hit', icon_sale68='$icon_sale', discount68='$discount', image1='$image1_name', image2='$image2_name', image3='$image3_name' where no68=$no;";

	$result=mysql_query($query);
	if(!$result) exit("쿼리에러");

	echo("<script>location.href='product.php?&sel1=$sel1&sel2=$sel2&sel3=$sel3&sel4=$sel4&text1=$text1&page=$page'</script>");
?>




