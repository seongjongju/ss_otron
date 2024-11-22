	<body>
		<div id="wrap">
			<dl id="skip">
				<dt class="hide">메뉴 바로가기</dt>
				<dd><a href="#self">주메뉴 바로가기</a></dd>
				<dd><a href="#self">컨텐츠 바로가기</a></dd>
			</dl>
			<header>
				<div id="header">
					<div class="in_Layer2 cf">
						<div class="h_utill">
							<button type="button" class="gnb_menu m_menu">
								<img src="../images/ico/menu.png" class="off">
								<img src="../images/ico/menu_close.png" class="on">
							</button><!--all_menu-->
							<button type="button" class="gnb_menu all_menu">
								<img src="../images/ico/menu.png" class="off">
								<img src="../images/ico/menu_close.png" class="on">
							</button><!--all_menu-->
						</div><!--h_utill-->
						<h1 class="logo">
							<a href="home.php">
								<img src="../images/common/logo.png" class="off">
								<img src="../images/common/logo_on.png" class="on">
							</a>
						</h1><!--logo-->
		
						<div class="gnb_area cf">
							<ul class="gnb">
					<?php for($i=0; $i<count($ext_menu); $i++) { ?>
								<li class=""><a href="<?=$ext_link[$i]?>"><?=$ext_menu[$i]?></a>
									<ul class="depth_D gb">
								<?php for($j=0; $j<count($ext_link2[$i]); $j++)  { ?>
										<li><a href="<?=$ext_link2[$i][$j]?>"><?=$ext_menu2[$i][$j]?></a></li>
								<?php }?>
									</ul>
									<ul class="depth_D bg">
								<?php for($j=0; $j<count($ext_link2[$i]); $j++)  { ?>
										<li><a href="<?=$ext_link2[$i][$j]?>"><?=$ext_menu2[$i][$j]?></a></li>
								<?php }?>
									</ul>
								</li>
					<?php }?>
							</ul><!--gnb-->
						</div><!--gnb_area-->
					</div><!--in_Layer-->
					
					<div class="m_gnb_wrap">
						
					</div><!--m_gnb_wrap-->
					<div class="m_gnb_wrap">
						<div class="m_gnb_area">
							<ul class="m_gnb">
					<?php for($i=0; $i<count($ext_menu); $i++) { ?>
								<li class=""><a href="#self"><?=$ext_menu[$i]?></a>
									<ul class="m_depth">
										<div class="in_Layer">
								<?php for($j=0; $j<count($ext_link2[$i]); $j++)  { ?>
											<li><a href="<?=$ext_link2[$i][$j]?>"><?=$ext_menu2[$i][$j]?></a></li>
								<?php }?>
										</div>
									</ul>
								</li>
					<?php }?>
							</ul><!--m_gnb-->
						</div><!--m_gnb_area-->
					</div><!--m_gnb_wrap-->
				</div><!-- end : id : header -->

				<div class="all_gnb_wrap">
					<div class="gnb_all">
						<div class="in_Layer3 flex-box">
				<?php for($i=0; $i<count($ext_menu); $i++) { ?>
							<div class="gnb_box">
								<h2><a href="<?=$ext_link[$i]?>"><?=$ext_menu[$i]?></a></h2>
								<ul class="depth">
							<?php for($j=0; $j<count($ext_link2[$i]); $j++)  { ?>
									<li><a href="<?=$ext_link2[$i][$j]?>"><span><?=$ext_menu2[$i][$j]?></span></a></li>
							<?php }?>
								</ul>
							</div>
				<?php }?>
						</div><!--in_layer2-->
					</div><!--gnb_all-->
				</div><!--all_gnb_wrap-->
			</header><!-- end : header -->
<?php
	if($mid!="") {	//	서브페이지
?>
			<div id="visual">
				<div class="sub_visual sub<?=$mid1?>0"><!--1차 댑스 마다 이미지가 달라집니다.-->
					<div class="in_Layer">
						<div class="sv_slogan">
							<h2><?=$ext_menu2[$mid1][$mid2]?></h2>
						</div><!--sv_slogan-->
					</div><!--in_Layer-->
					<div class="pic"></div>

					<div class="sb_menu">
						<div class="in_Layer">
							<div class="sbm">
								<ul class="swiper-wrapper">
						<?php for($j=0; $j<count($ext_link2[$mid1]); $j++)  { ?>
									<li class="swiper-slide <?php if($mid2==$j) echo("on"); ?> "><a href="<?=$ext_link2[$mid1][$j]?>"><span><?=$ext_menu2[$mid1][$j]?></span></a></li>
						<?php }?>
								</ul>
							</div><!--swiper-menu-->
						</div><!--in_Layer-->
					</div>
				</div><!--sub_visual-->
				
				<script>
					$(document).ready(function(){
						 initSwiper();
					});
					$(window).on('resize', function(){
						initSwiper();
					});
				</script>
			</div><!--visual-->
			
			<div id="contents">
				<div class="sub_contents">
<?php
	}
?>
