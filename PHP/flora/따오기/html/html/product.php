<!-------------------------------------------------------------------------------------------->	
<!-- ���α׷� : ���θ� �����ϱ� �ǽ����ü� (�ǽ��� HTML)                                    -->
<!--                                                                                        -->
<!-- �� �� �� : ������ (2008.2.4)                                                           -->
<!-------------------------------------------------------------------------------------------->	
<?
	include "common.php";
	$query="select * from product where menu39=$menu;";
	$result=mysql_query($query);
	$count=mysql_num_rows($result); 
?>
<html>
<head>
<title>�δ����� ���θ�</title>
<meta http-equiv="content-type" content="text/html; charset=euc-kr">
<link href="include/font.css" rel="stylesheet" type="text/css">
<script language="Javascript" src="include/common.js"></script>
</head>

<body style="margin:0">
<center>

<table width="959" border="0" cellspacing="0" cellpadding="0" align="center">
	<tr> 
		<td>
			<!--  ��� ���� �ΰ�  -------------------------------------------->
			<table border="0" cellspacing="0" cellpadding="0" width="182">
				<tr>
					<td><a href="index.html"><img src="images/top_logo.gif" width="182" height="40" border="0"></a></td>
				</tr>
			</table>
		</td>
		<td align="right" valign="bottom">
			<!--  ��ܸ޴� : Home/�α���/ȸ������/��ٱ���/�ֹ������ȸ/���ã���߰�  ---------->	
<?
	include "main_topmenu.php";
?>
			<!--  ��ܸ޴� �� (main_topmemnu.php)  ---------->	
		</td>
	</tr>
</table>

<!--  ��� ���� �̹��� --------------------------------------------------->
<table width="959" border="0" cellspacing="0" cellpadding="0" align="center">
	<tr>
		<td><img src="images/main_image0.jpg" width="182" height="175"></td>
	  <td><img src="images/main_image1.jpg" width="777" height="175"></td>
	</tr>
</table>

<!--  Category �޴� : �������� ���  --------------------------------------
<table width="959" height="25" border="0" cellspacing="0" cellpadding="0" align="center">
	<tr>
		<td align="left" bgcolor="#F7F7F7">
			<table border="0" cellspacing="0" cellpadding="0">
				<tr>
					<td><a href="product.html?no=1"><img src="images/main_menu01_off.gif" width="96" height="30" border="0"  onmouseover="img_change('on')" onmouseout="img_change('off')"></a></td>
					<td><a href="product.html?no=2"><img src="images/main_menu02_off.gif" width="96" height="30" border="0"  onmouseover="img_change('on')" onmouseout="img_change('off')"></a></td>
					<td><a href="product.html?no=3"><img src="images/main_menu03_off.gif" width="96" height="30" border="0"  onmouseover="img_change('on')" onmouseout="img_change('off')"></a></td>
					<td><a href="product.html?no=4"><img src="images/main_menu04_off.gif" width="96" height="30" border="0"  onmouseover="img_change('on')" onmouseout="img_change('off')"></a></td>
					<td><a href="product.html?no=5"><img src="images/main_menu05_off.gif" width="96" height="30" border="0"  onmouseover="img_change('on')" onmouseout="img_change('off')"></a></td>
					<td><a href="product.html?no=6"><img src="images/main_menu06_off.gif" width="96" height="30" border="0"  onmouseover="img_change('on')" onmouseout="img_change('off')"></a></td>
					<td><a href="product.html?no=7"><img src="images/main_menu07_off.gif" width="96" height="30" border="0"  onmouseover="img_change('on')" onmouseout="img_change('off')"></a></td>
					<td><a href="product.html?no=8"><img src="images/main_menu08_off.gif" width="96" height="30" border="0"  onmouseover="img_change('on')" onmouseout="img_change('off')"></a></td>
					<td><a href="product.html?no=9"><img src="images/main_menu09_off.gif" width="96" height="30" border="0"  onmouseover="img_change('on')" onmouseout="img_change('off')"></a></td>
					<td><a href="product.html?no=10"><img src="images/main_menu10_off.gif" width="96" height="30" border="0"  onmouseover="img_change('on')" onmouseout="img_change('off')"></a></td>
				</tr>
			</table>
		</td>
	</tr>
</table>
------------------------------------------------------------------------>

<!-- ��ǰ �˻� ���� (main_top.php) ------------------------------------->
<?
	include "main_top.php";
?>
<!-- ��ǰ �˻� �� (main_top.php) --------------------------------------->

<table width="959" border="0" cellspacing="0" cellpadding="0" align="center">
	<tr><td height="10" colspan="2"></td></tr>
	<tr>
		<td height="100%" valign="top">
			<!--  ȭ�� �����޴� ���� (main_left.php) ------------------------------->
<?
	include "main_left.php";
?>
			<!--  ȭ�� �����޴� �� (main_left.php) --------------------------------->
		</td>
		<td width="10"></td>
		<td valign="top">


<!-------------------------------------------------------------------------------------------->	
<!-- ���� : �ٸ� �������� ������ �κ�                                                       -->
<!-------------------------------------------------------------------------------------------->	

      <!-- ���� ��ǰ��� -->

			<!-- form2 ���� -->
			<form name="form2" method="post" action="product.php">
			<input type="hidden" name="menu" value="<?=$menu?>">

			<table border="0" cellpadding="0" cellspacing="5" width="767" class="cmfont" bgcolor="#efefef">
				<tr>
					<td bgcolor="white" align="center">
						<table border="0" cellpadding="0" cellspacing="0" width="751" class="cmfont">
							<tr>
								<td align="center" valign="middle">
									<table border="0" cellpadding="0" cellspacing="0" width="730" height="40" class="cmfont">
										<tr>
											<td width="500" class="cmfont">
												<font color="#C83762" class="cmfont"><b><?=$a_menu[$menu]?> &nbsp</b></font>&nbsp
											</td>
											<td align="right" width="274">
												<table width="100%" border="0" cellpadding="0" cellspacing="0" class="cmfont">
													<tr>
														<td align="right"><font color="EF3F25"><b><?=$count?></b></font> ���� ��ǰ.&nbsp;&nbsp;&nbsp</td>
														<td width="100">
															<select name="sort" size="1" class="cmfont" onChange="form2.submit()">
<?
															for($j=0;$j<$n_sort;$j++)
															{
															if ($j==$sort)
																echo("<option value='$j' selected>$a_sort[$j]</option>");
															else
																echo("<option value='$j'>$a_sort[$j]</option>");
															}
?>
																<!--
																<option value="new" selected>�Ż�ǰ�� ����</option>
																<option value="up">���ݼ� ����</option>
																<option value="down">�����ݼ� ����</option>
																<option value="name">��ǰ�� ����</option>
																-->
															</select>
														</td>
													</tr>
												</table>
											</td>
										</tr>
									</table>
								</td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
			</form>
			<!-- form2 -->

			<table border="0" cellpadding="0" cellspacing="0">
<?
	if($sort==1)		// ���ݼ� if($sort=="up")
		$query="select * from product where menu39=$menu order by price39 desc";
	elseif($sort==2) // �����ݼ� elseif($sort=="down")
		$query="select * from product where menu39=$menu order by price39";
	elseif($sort==3)  // �̸��� elseif($sort=="name")
		$query="select * from product where menu39=$menu order by name39";
	else					// �Ż�ǰ��
		$query="select * from product where menu39=$menu order by no39 desc";

	$num_col=5;   
	$num_row=4;                   // column��, row��
	$page_line=$num_col*$num_row;       
	$result=mysql_query($query);
	$count=mysql_num_rows($result);           // ����� ��ǰ ����
	$icount=0;       // ����� ��ǰ���� ī����


	if(!$page) $page=1;
	$pages = ceil($count/$page_line);
	$first = 1;
	if ($count>0) $first = $page_line*($page-1);
	$page_last=$count-$first;
	if ($page_last>$page_line) $page_last=$page_line;
	if($count>0) mysql_data_seek($result,$first);

	for($i=0;$i<$page_last;$i++)
	{
	for ($ir=0; $ir<$num_row; $ir++)
	{
		echo("<tr>");
		for ($ic=0;  $ic<$num_col;  $ic++)
		{
			if ($icount <= $page_last-1)
			{
				$row=mysql_fetch_array($result);
				$image1=$row[image1];
				$price = number_format($row[price39]). "��";
				$discount = number_format(round($row[price39]*(100-$row[discount39])/100, -2))."��";
				echo("<td width='150' height='205' align='center' valign='top'>
							<table border='0' cellpadding='0' cellspacing='0' width='100' class='cmfont'>
								<tr> 
									<td align='center'> 
										<a href='product_detail.php?no=$row[no39]'><img src='product/$image1' width='120' height='140' border='0'></a>
									</td>
								</tr>
								<tr><td height='5'></td></tr>
								<tr> 
									<td height='20' align='center'>
										<a href='product_detail.php?no=$row[no39]'><font color='444444'>$row[name39]</font></a>&nbsp;
										<img src='images/i_new.gif' align='absmiddle' vspace='1'> ");
				if($row[icon_hit39]==1)
					echo("<img src='images/i_hit.gif' align='absmiddle' vspace='1'>");
				else
					echo("");
				if($row[icon_sale39]==1)
					echo("<img src='images/i_sale.gif' align='absmiddle' vspace='1'><font color='red'>&nbsp;$row[discount39]%</font>
									</td>
								</tr>
								<tr><td height='20' align='center'><strike>$price</strike><br><b>$discount</b></td></tr>
							</table>
						</td>");
				else
					echo("			</td>
								</tr>
								<tr><td height='20' align='center'><b>$price</b></td></tr>
							</table>
						</td>");
			}
			else
				echo("<td></td>");      // ��ǰ ���� ���
		$icount++;
		}
		echo("</tr>");
	}
	}
?>
			</table>
<?
	$blocks = ceil($pages/$page_block);
	$block = ceil($page/$page_block);
	$page_s = $page_block * ($block-1);
	$page_e = $page_block * $block;
	if($blocks <= $block) $page_e = $pages;

	echo("<table width='690' border='0' cellspacing='0' cellpadding='0'>
		<tr>
			<td height='40' class='cmfont' align='center'>");
	if ($block > 1)
	{
		$tmp = $page_s;
		echo("<a href='product.php?page=$tmp&text1=$text1'><img src='images/i_prev.gif' align='absmiddle' border='0'></a>&nbsp");
	}
	for($i=$page_s+1; $i<=$page_e; $i++)
	{
		if($page ==$i)
			echo("<font color='#FC0504'><b>$i</b></font>&nbsp");
		else
			echo("<a href='product.php?page=$i&text1=$text1'>[$i]</a>&nbsp");
	}
	if ($block < $blocks)
	{
		$tmp = $page_e+1;
		echo("&nbsp<a href='product.php?page=$tmp&text1=$text1'><img src='images/i_next.gif' align='absmiddle' border='0'></a>");
	}
	echo("</td>
		</tr>
		</table>");
?>
<!-------------------------------------------------------------------------------------------->	
<!-- �� : �ٸ� �������� ������ �κ�                                                         -->
<!-------------------------------------------------------------------------------------------->	

		</td>
	</tr>
</table>
<br><br>

<!-- ȭ�� �ϴ� �κ� ���� (main_bottom.php) : ȸ������/ȸ��Ұ�/�̿�����/���κ�ȣ��å ... ---------->
<?
	include "main_bottom.php";
?>
<!-- ȭ�� �ϴ� �κ� �� (main_bottom.php) : ȸ������/ȸ��Ұ�/�̿�����/���κ�ȣ��å ... ---------->

&nbsp
</center>
</body>
</html>