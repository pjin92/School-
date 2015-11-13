<?
	$link_sv=mysql_connect("localhost","shop59","1234");
	if(!$link_sv) exit("서버연결에러");
	$link_db=mysql_select_db("shop59",$link_sv);
	if(!$link_db) exit("DB연결에러");

	$page_line=5;
	$page_block=5;
?>