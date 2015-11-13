<?
	include "common.php";

	if (!$n_cart) $n_cart=0;   // 제품개수 0으로 초기화
	switch ($kind)
	{
		case "insert":      // 장바구니 담기
		case "order":      // 바로 구매하기
		{
			$n_cart++;
			$cart[$n_cart] = implode("^", array($no, $num, $opts1, $opts2));
			setcookie("cart[$n_cart]",$cart[$n_cart]);
			setcookie("n_cart",$n_cart);
			break;
		}
		case "delete":      // 제품삭제
		{
			setcookie("cart[$pos]","");
			break;
		}
		case "update":     // 수량 수정
		{
			list($no, $num, $opts1, $opts2)=explode("^", $cart[$pos]);
			$num = $newnum;
			$cart[$pos] = implode("^", array($no, $num, $opts1, $opts2));
			$cart[$n_cart]=$cart[$pos];
			$n_cart=$pos;
			setcookie("cart[$n_cart]",$cart[$n_cart]);
			break;
		}
		case "deleteall":    // 장바구니 전체 비우기
        for($i=1;$i<=$n_cart;$i++)
		{
		if($i)
			{
			setcookie("cart[$n_cart]","");
			setcookie("n_cart",""); 
			}
		
         $n_cart = 0;
		 break;
		}
	}
	if ($kind=="order")
		echo '<meta http-equiv="Refresh" content="0; url=order.php">';
	else
		echo '<meta http-equiv="Refresh" content="0; url=cart.php">';
?>