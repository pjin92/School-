<?
	$link_sv=mysql_connect("localhost","shop59","1234");
	if(!$link_sv) exit("서버연결에러");
	$link_db=mysql_select_db("shop59",$link_sv);
	if(!$link_db) exit("DB연결에러");

	$page_line=3;
	$page_block=3;
	$admin_id="admin";
	$admin_pw="1234";
	$a_menu=array("분류선택","메뉴1","메뉴2","메뉴3","메뉴4","메뉴5","메뉴6","메뉴7","메뉴8","메뉴9","메뉴10");
	$n_menu=count($a_menu);
	$a_status=array("상품상태","판매중","판매중지","품절");
	$n_status=count($a_status);

	$a_sel1=array("상품상태","판매중","판매중지","품절");
	$n_sel1=count($a_sel1);
	$a_sel2=array("아이콘선택","New","Hit","Sale");
	$n_sel2=count($a_sel2);
	$a_sel3=array("분류상태","바지","코드","브라우스");
	$n_sel3=count($a_sel3);
	$a_sel4=array("제품이름","제품번호");
	$n_sel4=count($a_sel4);

	$a_icon=array("아이콘","New","Hit","Sale");
	$n_icon=count($a_icon);

?>