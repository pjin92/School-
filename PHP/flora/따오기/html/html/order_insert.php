<?
	include "common.php";
	$query= "select no39 from jumun where jumunday39=curdate() order by no39 desc;";
	$result=mysql_query($query);
	$count=mysql_num_rows($result);
	$row=mysql_fetch_array($result);
	$zip1=trim(substr($row[zip39],0,3));
	$o_memo39 = addslashes($o_memo);
	$jcount=sprintf("%04d",$count);
	if ($count>0)
		$newno = date("ymd").$jcount+1;
	else
		$newno = date("ymd")."0001";

	$jumunday=date("y-m-d");
	$total_cash=0;
	$product_nums = 0;
	$product_names = "";
	for($i=1;$i<=$n_cart;$i++)
	{
		if($cart[$i])
		{
			list($no,$num,$opts1,$opts2)=explode("^",$cart[$i]);
			$query = "select * from product where no39=$no;";
			$result=mysql_query($query);
			$row1=mysql_fetch_array($result);
			$price=round(($row1[price39])*(100-$row1[discount39])/100,-2);
			$discount=$row1[discount39];
			$cash=$num*$price;
			$opts1 = (int)$opts1;
			$opts2 = (int)$opts2;
			$query="insert into jumuns (jumun_no39, product_no39, num39, price39, cash39, discount39, opts_no1, opts_no2) values ('$newno','$no','$num','$price','$cash','$discount','$opts1','$opts2');";
			$result=mysql_query($query);
			if(!$result) exit("주문s인설트쿼리에러");
			setcookie("cart[$i]","");
			$total_cash=$total_cash+$cash;
			$product_nums = $product_nums + 1;
			if ($product_nums==1) $product_names = $row1[name39];
		}
	}
	if ($product_nums>1)
	{
	$tmp = $product_nums-1;
	$product_names = $product_names . " 외 " . $tmp;
	}
	if ($total_cash < $max_baesongbi) 
	{
	$query="insert into jumuns (jumun_no39, product_no39, num39, price39, cash39, discount39, opts_no1, opts_no2) values ('$newno',0,1,'$baesongbi','$baesongbi',0,0,0);";
	$result=mysql_query($query);
	if(!$result) exit("배송비쿼리에러");
    $total_cash=$total_cash+$baesongbi;
	}

	if ($cookie_no)
	$member_no=$cookie_no;
	else
	$member_no=0;

	$query="insert into jumun (no39,member_no39,jumunday39,product_names39,product_nums39,o_name39,o_tel39,o_phone39,o_email39,o_zip39,o_juso39,r_name39,r_tel39,r_phone39,r_email39,r_zip39,r_juso39,memo39,pay_method39,card_okno39,card_halbu39,card_kind39,bank_kind39,bank_sender39,total_cash39,state39) values ('$newno','$member_no','$jumunday','$product_names','$product_nums','$o_name','$o_tel','$o_phone','$o_email','$o_zip','$o_juso','$r_name','$r_tel','$r_phone','$r_email','$r_zip','$r_juso','$o_memo39','$pay_method',0,'$card_halbu','$card_kind','$bank_kind','$bank_sender','$total_cash',1);";
	$result=mysql_query($query);
	if(!$result) exit("오더인설트쿼리에러");
?>

<script>location.href="order_ok.php"</script>