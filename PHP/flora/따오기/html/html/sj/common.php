<?
	$link_sv = mysql_connect("localhost","shop39","dpfzk1");
	if(!$link_sv) exit("�������ῡ��");
	$link_db = mysql_select_db("shop39",$link_sv);
	if(!$link_db) exit("DB���ῡ��");

	$page_line=5;
	$page_block=3;
?>