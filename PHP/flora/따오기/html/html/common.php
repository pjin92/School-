<?
	$link_sv = mysql_connect("localhost","shop39","dpfzk1");
	if(!$link_sv) exit("�������ῡ��");
	$link_db = mysql_select_db("shop39",$link_sv);
	if(!$link_db) exit("DB���ῡ��");

	$admin_id="admin";
	$admin_pw="1234";

	$baesongbi = 2500;
    $max_baesongbi = 50000;

	
	$a_idname=array("�̸�", "ID");

	$a_sort=array("�Ż�ǰ�� ����", "���ݼ� ����", "�����ݼ� ����", "��ǰ�� ����");   
	$n_sort=count($a_sort);

	$a_status=array("��ǰ����","�Ǹ���","�Ǹ�����","ǰ��");
	$n_status=count($a_status);

	$a_icon=array("������","New","Hit","Sale");
	$n_icon=count($a_icon);

	$a_productselect=array("��ǰ�̸�","��ǰ��ȣ");

	$a_menu=array("�з�����","�޴�1","�޴�2","�޴�3","�޴�4","�޴�5","�޴�6","�޴�7","�޴�8","�޴�9","�޴�10");
	$n_menu=count($a_menu);              // �з� ����

	$a_state=array("��ü","�ֹ���û","�ֹ�Ȯ��","�Ա�Ȯ��", "�����","�ֹ��Ϸ�","�ֹ����");
	$n_state=count($a_state);

	$a_search=array("�ֹ���ȣ","����","��ǰ��");
	$n_search=count($a_search);

	$a_qasearch=array("����","����","�ۼ���");
	$n_qasearch=count($a_qasearch);

	$a_month=array("1","2","3","4","5","6","7","8","9","10","11","12");
	$n_month=count($a_month);

	$a_day=array("1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31");
	$n_day=count($a_day);

	$page_line=5;
	$page_block=5;
?>