			<!--  ��ܸ޴� ���� (main_topemnu.php) : Home/�α���/ȸ������/��ٱ���/�ֹ������ȸ/���ã���߰�  ---->	
			<table border="0" cellspacing="0" cellpadding="0">
				<tr>
<?
	if($cookie_no)
	echo("
					<td><a href='index.html'><img src='images/top_menu01.gif' border='0'></a></td>
					<td><img src='images/top_menu_line.gif' width='11'></td>
					<td><a href='member_logout.php'><img src='images/top_menu02_1.gif' border='0'></a></td>
					<td><img src='images/top_menu_line.gif' width='11'></td>
					<td><a href='member_edit.php'><img src='images/top_menu03_1.gif' border='0'></a></td>
					<td><img src='images/top_menu_line.gif' width='11'></td>
					<td><a href='cart.php'><img src='images/top_menu05.gif' border='0'></a></td>
					<td><img src='images/top_menu_line.gif' width='11'></td>
					<td><a href='jumun.php'><img src='images/top_menu06.gif' border='0'></a></td>
					<td><img src='images/top_menu_line.gif'width='11'></td>
					<td><img src='images/top_menu08.gif' onclick='javascript:Add_Site();' style='cursor:hand'></td>
	");
	else
	echo("
					<td><a href='index.html'><img src='images/top_menu01.gif' border='0'></a></td>
					<td><img src='images/top_menu_line.gif' width='11'></td>
					<td><a href='member_login.php'><img src='images/top_menu02.gif' border='0'></a></td>
					<td><img src='images/top_menu_line.gif' width='11'></td>
					<td><a href='member_agree.php'><img src='images/top_menu03.gif' border='0'></a></td>
					<td><img src='images/top_menu_line.gif' width='11'></td>
					<td><a href='cart.php'><img src='images/top_menu05.gif' border='0'></a></td>
					<td><img src='images/top_menu_line.gif' width='11'></td>
					<td><a href='jumun_login.php'><img src='images/top_menu06.gif' border='0'></a></td>
					<td><img src='images/top_menu_line.gif'width='11'></td>
					<td><img src='images/top_menu08.gif' onclick='javascript:Add_Site();' style='cursor:hand'></td>
	");
?>

				</tr>
			</table>
			<!--  ��ܸ޴� �� (main_topmenu.php)  ---------->	
