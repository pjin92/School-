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

	if (strcmp($image1, ""))  
	{
      if (!copy($image1,"../product/$image1_name")) exit("업로드 실패.");
	}
	if (strcmp($image2, ""))
	{
      if (!copy($image2,"../product/$image2_name")) exit("업로드 실패.");
	}
	if (strcmp($image3, ""))
	{
	 if (!copy($image3,"../product/$image3_name")) exit("업로드 실패.");
	}

	$query="insert into product(menu68,code68,name68,coname68,price68,opt1,opt2,content_html68,content68,status68,regday68,icon_new68,icon_hit68,icon_sale68,discount68,image1,image2,image3) values('$menu','$code','$name68','$coname','$price','$opt1','$opt2','$content_html','$content68','$status','$regday','$icon_new','$icon_hit','$icon_sale','$discount','$image1_name','$image2_name','$image3_name');";

	$result=mysql_query($query);
	if(!$result) exit("쿼리에러");
?>

<script>location.href="product.php"</script>