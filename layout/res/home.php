<?php
	$not_html = "Y";
	$ext_layout_folder = "layout/res";
	require_once("../../core/res/data.php");
	require_once("start_html.php");

// ---------------------------------------------------------------------------------------------------------
//	메뉴 설정
// ---------------------------------------------------------------------------------------------------------
	// 1차메뉴명
	$ext_menu[0] = "Company";			$ext_link[0] = "home.php?go=page0.0&mid=00";
	$ext_menu[1] = "BUSSINES";			$ext_link[1] = "home.php?go=page1.0&mid=10";
	$ext_menu[2] = "NEWS";				$ext_link[2] = "home.php?go=pds.list&pds_type=1&mid=20";
	$ext_menu[3] = "CONTACT";			$ext_link[3] = "home.php?go=contact.make&s_subj=A&mid=30";


	// 2차메뉴명
	$ext_menu2[0][0] = "CEO 인사말";		$ext_link2[0][0] = "home.php?go=page0.0&mid=00";
	$ext_menu2[0][1] = "운영철학";			$ext_link2[0][1] = "home.php?go=page0.1&mid=01";
	$ext_menu2[0][2] = "비전 & 목표";		$ext_link2[0][2] = "home.php?go=page0.2&mid=02";
	$ext_menu2[0][3] = "CI & BI";			$ext_link2[0][3] = "home.php?go=page0.3&mid=03";
	$ext_menu2[0][4] = "조직도";			$ext_link2[0][4] = "home.php?go=page0.4&mid=04";
	$ext_menu2[0][5] = "오시는 길";			$ext_link2[0][5] = "home.php?go=page0.5&mid=05";

	$ext_menu2[1][0] = "건강검진";			$ext_link2[1][0] = "home.php?go=page1.0&mid=10";
	$ext_menu2[1][1] = "웰니스";			$ext_link2[1][1] = "home.php?go=page1.1&mid=11";
	$ext_menu2[1][2] = "라이프컨시어지";	$ext_link2[1][2] = "home.php?go=page1.2&mid=12";
	$ext_menu2[1][3] = "경영컨설팅";		$ext_link2[1][3] = "home.php?go=page1.3&mid=13";

	$ext_menu2[2][0] = "공지사항";			$ext_link2[2][0] = "home.php?go=pds.list&pds_type=1&mid=20";
	$ext_menu2[2][1] = "회사소식";			$ext_link2[2][1] = "home.php?go=pds.list&pds_type=2&mid=21";
	$ext_menu2[2][2] = "보도자료";			$ext_link2[2][2] = "home.php?go=pds.list&pds_type=3&mid=22";

	$ext_menu2[3][0] = "제휴문의";			$ext_link2[3][0] = "home.php?go=contact.make&s_subj=A&mid=30";
	$ext_menu2[3][1] = "1:1질문";			$ext_link2[3][1] = "home.php?go=contact.make&s_subj=B&mid=31";



// ---------------------------------------------------------------------------------------------------------
//	메뉴제목 정리
// ---------------------------------------------------------------------------------------------------------


	if($go=="main") {
		$sor_body = "main.php";	
	}
	else {
		$mid1  = substr($mid,0,1);	// 1차메뉴
		$mid2  = substr($mid,1,1);	// 2차메뉴

		$sor_body = "../../core/res/".$go.".php";
		if(!file_exists($sor_body) ) {	// 파일 연결이 잘못되었다면.
			$mid = $mid1 = $mid2 ="";
			$sor_body	= "main.php";	
		}
	}


/* ---------------------------------------------------------------------------------------------------------
	HTML 출력 부분
--------------------------------------------------------------------------------------------------------- */
	require 'top.php';
	require $sor_body;
	require 'bottom.php';

	if($go=="main") {
		require '../../core/res/popup_data.php';	// 팝업창이 있는지 검사한다.
	}

	include_once("../../google_analytics.php");


?>