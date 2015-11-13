
<!-- 상품 검색 시작 (main_top.php) ------------------------------------->
<table width="959" height="25" border="0" cellspacing="0" cellpadding="0" align="center">
	<tr><td height="1" colspan="5" bgcolor="#F7F7F7"></td></tr>
	<tr bgcolor="#F0F0F0">
	<?
		if(!$cookie_no)
		{
			echo("<td width='181' align='center'><font color='#666666'>&nbsp <b>Welcome ! &nbsp;&nbsp 고객님.</b></font></td>");
		}
		else
		{
			echo("<td width='181' align='center'><font color='#666666'>&nbsp <b>Welcome ! &nbsp;&nbsp $cookie_name.</b></font></td>");
		}
	?>
		<td style="font-size:9pt;color:#666666;font-family:돋움;padding-left:5px;"></td>
		<td align="right" style="font-size:9pt;color:#666666;font-family:돋움;"><b>상품검색 ▶&nbsp</b></td>
		<!-- form1 시작 -->
		<form name="form1" method="post" action="product_search.html">
		<td width="135">
			<input type="text" name="findtext" maxlength="40" size="20" class="cmfont1">&nbsp;
		</td>
		</form>
		<!-- form1 끝 -->
		<td width="60"><a href="javascript:Search()"><img src="images/i_search1.gif" border="0"></a></td>
	</tr>
	<tr><td height="1" colspan="5" bgcolor="#E5E5E5"></td></tr>
</table>
<!-- 상품 검색 끝 (main_top.php) --------------------------------------->

