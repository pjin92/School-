<?
	include "../common.php";

	if (!$icon_new)   $icon_new=0;   else   $icon_new=1;
	if (!$icon_hit)   $icon_hit=0;   else   $icon_hit=1;
	if (!$icon_sale)   $icon_sale=0;   else   $icon_sale=1;
	$regday = sprintf("%04d-%02d-%02d", $regday1, $regday2, $regday3);
	$name39 = addslashes($name);
	$content39 = addslashes($content);

	if (strcmp($image1, ""))      // ������ ������ �ִ��� ����
	{
      if (file_exists("../product/$image1_name")) exit("������ �����̸� ����.");
      if (!copy($image1,"../product/$image1_name")) exit("���ε� ����.");
	}

	if (strcmp($image2, ""))      // ������ ������ �ִ��� ����
	{
      if (file_exists("../product/$image2_name")) exit("������ �����̸� ����.");
      if (!copy($image2,"../product/$image2_name")) exit("���ε� ����.");
	}

	if (strcmp($image3, ""))      // ������ ������ �ִ��� ����
	{
      if (file_exists("../product/$image3_name")) exit("������ �����̸� ����.");
      if (!copy($image3,"../product/$image3_name")) exit("���ε� ����.");
	}
	$query="insert into product (menu39,code39,name39,coname39,price39,opt1,opt2,content_html39,content39,status39,regday39,icon_new39,icon_hit39,icon_sale39,discount39,image1,image2,image3) values('$menu','$code','$name39','$coname','$price','$opt1','$opt2','$content_html','$content39','$status','$regday','$icon_new','$icon_hit','$icon_sale','$discount','$image1_name','$image2_name','$image3_name');";

	$result=mysql_query($query);
	if(!$result) exit("���δ�Ʈ�μ�Ʈ��������");


?>

<script>location.href="product.php"</script>