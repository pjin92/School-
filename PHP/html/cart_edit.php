<?
	include "common.php";

	if (!$n_cart) $n_cart=0;   // ��ǰ���� 0���� �ʱ�ȭ
	switch ($kind)
	{
		case "insert":      // ��ٱ��� ���
		case "order":      // �ٷ� �����ϱ�
		{
			$n_cart++;
			$cart[$n_cart] = implode("^", array($no, $num, $opts1, $opts2));
			setcookie("cart[$n_cart]",$cart[$n_cart]);
			setcookie("n_cart",$n_cart);
			break;
		}
		case "delete":      // ��ǰ����
		{
			setcookie("cart[$pos]","");
			break;
		}
		case "update":     // ���� ����
		{
			list($no, $num, $opts1, $opts2)=explode("^", $cart[$pos]);
			$num = $newnum;
			$cart[$pos] = implode("^", array($no, $num, $opts1, $opts2));
			$cart[$n_cart]=$cart[$pos];
			$n_cart=$pos;
			setcookie("cart[$n_cart]",$cart[$n_cart]);
			break;
		}
		case "deleteall":    // ��ٱ��� ��ü ����
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