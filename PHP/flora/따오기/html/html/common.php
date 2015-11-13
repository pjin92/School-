<?
	$link_sv = mysql_connect("localhost","shop39","dpfzk1");
	if(!$link_sv) exit("서버연결에러");
	$link_db = mysql_select_db("shop39",$link_sv);
	if(!$link_db) exit("DB연결에러");

	$admin_id="admin";
	$admin_pw="1234";

	$baesongbi = 2500;
    $max_baesongbi = 50000;

	
	$a_idname=array("이름", "ID");

	$a_sort=array("신상품순 정렬", "고가격순 정렬", "저가격순 정렬", "상품명 정렬");   
	$n_sort=count($a_sort);

	$a_status=array("상품상태","판매중","판매중지","품절");
	$n_status=count($a_status);

	$a_icon=array("아이콘","New","Hit","Sale");
	$n_icon=count($a_icon);

	$a_productselect=array("제품이름","제품번호");

	$a_menu=array("분류선택","메뉴1","메뉴2","메뉴3","메뉴4","메뉴5","메뉴6","메뉴7","메뉴8","메뉴9","메뉴10");
	$n_menu=count($a_menu);              // 분류 개수

	$a_state=array("전체","주문신청","주문확인","입금확인", "배송중","주문완료","주문취소");
	$n_state=count($a_state);

	$a_search=array("주문번호","고객명","상품명");
	$n_search=count($a_search);

	$a_qasearch=array("제목","내용","작성자");
	$n_qasearch=count($a_qasearch);

	$a_month=array("1","2","3","4","5","6","7","8","9","10","11","12");
	$n_month=count($a_month);

	$a_day=array("1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31");
	$n_day=count($a_day);

	$page_line=5;
	$page_block=5;
?>