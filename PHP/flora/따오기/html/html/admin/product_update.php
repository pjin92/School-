<?
	include "../common.php";

	if (!$icon_new)   $icon_new=0;   else   $icon_new=1;
	if (!$icon_hit)   $icon_hit=0;   else   $icon_hit=1;
	if (!$icon_sale)   $icon_sale=0;   else   $icon_sale=1;
	$regday = sprintf("%04d-%02d-%02d", $regday1, $regday2, $regday3);
	$name39 = addslashes($name);
	$content39 = addslashes($content);

	$image1_name=$imagename1;
	if ($checkno1=="1") $image1_name="";    // 삭제 체크가 된 경우


	$image2_name=$imagename2;
	if ($checkno2=="1") $image2_name="";    // 삭제 체크가 된 경우


	$image3_name=$imagename3;
	if ($checkno3=="1") $image3_name="";    // 삭제 체크가 된 경우

	if (strcmp($image1, ""))      // 선택한 파일이 있는지 조사
	{
      if (file_exists("../product/$image1_name")) exit("동일한 파일이름 있음.");
      if (!copy($image1,"../product/$image1_name")) exit("업로드 실패.");
	}
	if (strcmp($image2, ""))      // 선택한 파일이 있는지 조사
	{
      if (file_exists("../product/$image2_name")) exit("동일한 파일이름 있음.");
      if (!copy($image2,"../product/$image2_name")) exit("업로드 실패.");
	}
	if (strcmp($image3, ""))      // 선택한 파일이 있는지 조사
	{
      if (file_exists("../product/$image3_name")) exit("동일한 파일이름 있음.");
      if (!copy($image3,"../product/$image3_name")) exit("업로드 실패.");
	}

	$query="update product set menu39='$menu', code39='$code', name39='$name39', coname39='$coname', price39='$price', opt1='$opt1', opt2='$opt2', content_html39='$content_html', content39='$content39', status39='$status', regday39='$regday', icon_new39='$icon_new', icon_hit39='$icon_hit', icon_sale39='$icon_sale', discount39='$discount', image1='$image1_name', image2='$image2_name', image3='$image3_name' where no39=$no;";

	$result=mysql_query($query);
	if(!$result) exit("프로덕트업데이트쿼리에러");

	echo("<script>location.href='product.php?&sel1=$sel1&sel2=$sel2&sel3=$sel3&sel4=$sel4&text1=$text1&page=$page'</script>");
?>




