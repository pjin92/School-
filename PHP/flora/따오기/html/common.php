<?
	$link_sv=mysql_connect("localhost","shop59","1234");
	if(!$link_sv) exit("�������ῡ��");
	$link_db=mysql_select_db("shop59",$link_sv);
	if(!$link_db) exit("DB���ῡ��");

	$page_line=3;
	$page_block=3;
	$admin_id="admin";
	$admin_pw="1234";
	$a_menu=array("�з�����","�޴�1","�޴�2","�޴�3","�޴�4","�޴�5","�޴�6","�޴�7","�޴�8","�޴�9","�޴�10");
	$n_menu=count($a_menu);
	$a_status=array("��ǰ����","�Ǹ���","�Ǹ�����","ǰ��");
	$n_status=count($a_status);

	$a_sel1=array("��ǰ����","�Ǹ���","�Ǹ�����","ǰ��");
	$n_sel1=count($a_sel1);
	$a_sel2=array("�����ܼ���","New","Hit","Sale");
	$n_sel2=count($a_sel2);
	$a_sel3=array("�з�����","����","�ڵ�","���콺");
	$n_sel3=count($a_sel3);
	$a_sel4=array("��ǰ�̸�","��ǰ��ȣ");
	$n_sel4=count($a_sel4);

	$a_icon=array("������","New","Hit","Sale");
	$n_icon=count($a_icon);

?>