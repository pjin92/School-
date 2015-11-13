<?
	include "../common.php";

	$query="delete from product where no39=$no;";
	$result=mysql_query($query);
	if(!$result) exit("ÇÁ·Î´öÆ®µô¸®Æ®Äõ¸®¿¡·¯");
	echo("<script>location.href='product.php?&sel1=$sel1&sel2=$sel2&sel3=$sel3&sel4=$sel4&text1=$text1&page=$page'</script>");
?>