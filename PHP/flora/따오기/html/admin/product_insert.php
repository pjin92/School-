<?
	include "../common.php";
	if(!$icon_new)$icon_new=0; else $icon_new=1;
	if(!$icon_hit)$icon_hit=0; else $icon_hit=1;
	if(!$icon_sale)$icon_sale=0; else $icon_sale=1;
	$regday=sprintf("%04d-%02d-%02d",$regday1,$regday2,$regday3);
	$name59=addslashes($name);
	$content59=addslashes($content);
	if(strcmp($image1,""))
	{
		if(!copy($image1,"../product/$image1_name"))exit("업로드 실패.");
	}
	if(strcmp($image2,""))
	{
		if(!copy($image2,"../product/$image2_name"))exit("업로드 실패.");
	}
	if(strcmp($image3,""))
	{
		if(!copy($image3,"../product/$image3_name"))exit("업로드 실패.");
	}
	$query="insert into product(menu59,code59,name59,coname59,price59,opt159,opt259,content_html59,content59,status59,regday59,icon_new59,icon_hit59,icon_sale59,discount59,image159,image259,image359)
				values('$menu','$code','$name59','$coname','$price','$opt1','$opt2','$content_html','$content59','$status','$regday','$icon_new','$icon_hit','$icon_sale',$discount,'$image1_name','$image2_name','$image3_name');";
	$result=mysql_query($query);
	if(!$result) exit("쿼리에러");
?>
<script>location.href="product.php"</script>