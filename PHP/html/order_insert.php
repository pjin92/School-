<?
	include "common.php";
	$query= "select no68 from jumun where jumunday68=curdate() order by no68 desc;";
	$result=mysql_query($query);
	//echo($result);
	$count=mysql_num_rows($result);
	//$count = $result;
	$row=mysql_fetch_array($result);
	$zip1=trim(substr($row[zip68],0,3));
	$o_memo = addslashes($o_memo);
	$jcount=sprintf("%04d",$count);
	//echo($jcount);
	if ($count>0)
		$newno = date("ymd").$jcount+1;
	else
		$newno = date("ymd")."0001";

	$jumunday=date("y-m-d");
	$total_cash=0;
	$product_nums = 0;
	$product_names = "";
	//echo($jcount);
	echo($newno);
	for($i=1;$i<=$n_cart;$i++)
	{
		if($cart[$i])
		{
			list($no,$num,$opts1,$opts2)=explode("^",$cart[$i]);
			$query = "select * from product where no68=$no;";
			$result=mysql_query($query);
			$row1=mysql_fetch_array($result);
			$price=round(($row1[price68])*(100-$row1[discount68])/100,-2);
			$discount=$row1[discount68];
			$cash=$num*$price;
			$opts1 = (int)$opts1;
			$opts2 = (int)$opts2;
			$query="insert into jumuns (jumun_no68, product_no68, num68, price68, cash68, discount68, opts_no1, opts_no2) values ('$newno','$no','$num','$price','$cash','$discount','$opts1','$opts2');";
			$result=mysql_query($query);
			if(!$result) exit("Äõ¸®¿¡·¯");
			setcookie("cart[$i]","");
			$total_cash=$total_cash+$cash;
			$product_nums = $product_nums + 1;
			if ($product_nums==1) $product_names = $row1[name68];
		}
	}
	if ($product_nums>1)
	{
	$tmp = $product_nums-1;
	$product_names = $product_names . " ¿Ü " . $tmp;
	}
	if ($total_cash < $max_baesongbi) 
	{
	$query="insert into jumuns (jumun_no68, product_no68, num68, price68, cash68, discount68, opts_no1, opts_no2) values ('$newno',0,1,'$baesongbi','$baesongbi',0,0,0);";
	$result=mysql_query($query);
	if(!$result) exit("Äõ¸®¿¡·¯");
    $total_cash=$total_cash+$baesongbi;
	}

	if ($cookie_no)
	$member_no=$cookie_no;
	else
	$member_no=0;

	if($pay_method==0) //Ä«µå½ÂÀÎ ±âº»°ª
	$card_okno="11111111";
	else
	$card_okno="0";

	$query="insert into jumun (no68,member_no68,jumunday68,product_names68,product_nums68,o_name68,o_tel68,o_phone68,o_email68,o_zip68,o_juso68,r_name68,r_tel68,r_phone68,r_email68,r_zip68,r_juso68,memo68,pay_method68,card_okno68,card_halbu68,card_kind68,bank_kind68,bank_sender68,total_cash68,state68) values ('$newno','$member_no','$jumunday','$product_names','$product_nums','$o_name','$o_tel','$o_phone','$o_email','$o_zip','$o_juso','$r_name','$r_tel','$r_phone','$r_email','$r_zip','$r_juso','$o_memo','$pay_method','$card_okno','$card_halbu','$card_kind','$bank_kind','$bank_sender','$total_cash',1);";
	$result=mysql_query($query);
	if(!$result) exit("Äõ¸®¿¡·¯");

	setcookie("kind","");
?>

<script>location.href="order_ok.php"</script>