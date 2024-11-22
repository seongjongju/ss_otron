		<!--메인에만 들어가는 js-->
			<script type="text/javascript" src="../js/main_gsap.js"></script>
			<script type="text/javascript" src="../js/ScrollTrigger.min.js"></script>
			<script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
		<!--메인에만 들어가는 js-->


			<div id="visual">
				<div class="main_visual">
					<div class="mv_slider">
			<?php
				//
				//  메인이미지 또는 영상출력 샘플
				//
				$sql = "select * from main_img where enable='Y' order by seq asc";
				$res = mysqli_query($connect,$sql);
				for($i=0; $set=mysqli_fetch_array($res); $i++)	{
					if($set[link_url]!="") {
						if($set[link_type]=='A')		{ $link_url = "<a href='$set[link_url]'>"; }	// 현재창
						else if($set[link_type]=='B')	{ $link_url = "<a href='$set[link_url]' target=_blank>"; }	// 새창
						else							{ $link_url = ""; }	// 새창
					} else {
						$link_url = "";
					}

					if($set[gubun]=='A') {	// 이미지
			?>
						<li class="item video slick-slide visual01">
							<?=$link_url?>
							<div class="in_Layer">
								<div class="slogan">
									<div class="p_sl1">
										<p><span><?=str_replace("\n","<br>",$set[doc_1])?></span></p>
									</div><!--sl2-->
								</div><!-- end : class : slogen -->
							</div><!--in_Layer-->
							<div class="pic pc" style="background-image:url('/file/main_img/<?=$set[num]?>/<?=$set[img_1]?>')">
							</div><!--pic-->
							</a>
						</li><!--slick-slide visual01-->
			<?php
					}
					else if($set[gubun]=='B') {	// 영상
			?>
						<li class="item video slick-slide">
							<video  class="slide-video slide-media"  playsinline loop muted preload="metadata" poster="">
								<source src="/file/main_img/<?=$set[num]?>/file_1/<?=rawurlencode($set['file_1'])?>" type="video/mp4"></source>
							</video>
						</li>
			<?php
					}
				}
			?>
					</div><!--mv_slider-->
					<div class="slider-nav">
						<div class="mv_prev mv_arr"><img src="../images/ico/mv_left.png"></div><!--mv_prev-->
						<div class="slider_dots_warp">
						</div><!--slider_dots_warp-->
						<div class="mv_next mv_arr"><img src="../images/ico/mv_right.png"></div><!--mv_next-->
					</div><!--slider_nav-->
					<div class="scroll_wrap">
						<p>SCROLL DOWN</p>
						<div>
							<span></span>
						</div>
					</div><!--scroll_wrap-->
				</div><!--main_visual-->
			</div><!-- end : id : visual -->
			<script>
				$(document).ready(function(){
					main_visual();
				});
				var $slick_carousel = $('.mv_slider');
					$slick_carousel.on('init', function(event, slick) {
						$slick_carousel.find('.slick-current').removeClass('slick-active').addClass('reset-animation');
						setTimeout( function() {
							$slick_carousel.find('.slick-current').removeClass('reset-animation').addClass('slick-active');
						}, 1);
					});
			</script>
			
			<div id="contents">
				<div class="main_contents">
					<div class="section01 main_sec">
						<div class="in_Layer ">
							<div class="mc_tit" style="text-align:center;">
								<span>
									BUSSINES
								</span>
								<h2>
									AI 기술을 활용한 스마트한<br>
									디지털 헬스케어 기업 바이오랩스
								</h2>
							</div><!--mc_tit-->
							<ul class="bis_list ">
								<li  class="on">
									<div class="bis_info_box">
										<div class="bis_in">
											<dl>
												<dt>건강검진</dt>
												<dd>
													<p>
														건강검진 플랫폼 자체 개발 (지적재산권 보유), <br>
														전국 370여 대학병원 및 검진기관과 협력 네트워크 구축
													</p>
												</dd>
											</dl>
											<a href="home.php?go=page1.0&mid=10">
												<img src="../images/contents/mc01_btn.png">
											</a>
										</div><!--bis_in-->
									</div><!--bis_info_box-->
									<div class="bis_img" data-tab="bis1">
										<div class="img_tit">
											<h2>건강검진</h2>
										</div><!--intro_tit-->
									</div><!--bis_img-->
								</li>
								<li>
									<div class="bis_info_box">
										<div class="bis_in">
											<dl>
												<dt>웰니스</dt>
												<dd>
													<p>
														단순히 몸의 건강뿐 아니라 마음과 영혼의 평화까지  <br>
														추구하는 종합적인 개념의 서비스
													</p>
												</dd>
											</dl>
											<a href="home.php?go=page1.1&mid=11">
												<img src="../images/contents/mc01_btn.png">
											</a>
										</div><!--bis_in-->
									</div><!--bis_info_box-->
									<div class="bis_img" data-tab="bis2">
										<div class="img_tit">
											<h2>웰니스</h2>
										</div><!--intro_tit-->
									</div><!--bis_img-->
								</li>
								<li >
									<div class="bis_info_box">
										<div class="bis_in">
											<dl>
												<dt>라이프 컨시어지</dt>
												<dd>
													<p>
														고객의 삶의 질을 향상시키는  <br>
														개인 맞춤형 생활서비스
													</p>
												</dd>
											</dl>
											<a href="home.php?go=page1.2&mid=12">
												<img src="../images/contents/mc01_btn.png">
											</a>
										</div><!--bis_in-->
									</div><!--bis_info_box-->
									<div class="bis_img" data-tab="bis3">
										<div class="img_tit">
											<h2>라이프<br>컨시어지</h2>
										</div><!--intro_tit-->
									</div><!--bis_img-->
								</li>
								<li>
									<div class="bis_info_box">
										<div class="bis_in">
											<dl>
												<dt>경영컨설팅</dt>
												<dd>
													<p>
														병원과 의료기관의 효율적인 경영과 성장을  <br>
														지원하기 위한 서비스를 제공하는 사업
													</p>
												</dd>
											</dl>
											<a href="home.php?go=page1.3&mid=13">
												<img src="../images/contents/mc01_btn.png">
											</a>
										</div><!--bis_in-->
									</div><!--bis_info_box-->
									<div class="bis_img" data-tab="bis4">
										<div class="img_tit">
											<h2>경영컨설팅</h2>
										</div><!--intro_tit-->
									</div><!--bis_img-->
								</li>
							</ul><!--intro_list-->
							<script>
								 $(document).ready(function(){
									   $('ul.bis_list > li .bis_img').click(function(){
										$('ul.bis_list li').removeClass('on');
										$(this).parent('ul.bis_list > li').addClass('on');
									});

								});
							</script>
						</div><!--in_Layer-->
					</div><!--section02-->


					<div class="section02 main_sec">
						<div class="mc_tit">
							<div class="in_Layer">
								<span>
									NEWS
								</span>
								<h2>
									바이오케어는 개인 맞춤형 건강관리와 정서적 지원을 통해<br>
									삶의 질을 향상시키는 혁신적인 솔루션입니다
								</h2>
							</div><!--in_Layer-->
						</div><!--mc_tit-->
						<div class="news_slide_wrap">
							<div class="in_Layer">
								<div class="news_nav flex-box">
									<div class="news_arr_wrap flex-box">
										<div class="news_arr mc01_prev"><img src="../images/ico/mc02_prev.png"><span>PREV</span></div><!--mc01_next-->
										<div class="line"></div>
										<div class="news_arr mc01_next"><span>NEXT</span><img src="../images/ico/mc02_next.png"></div><!--mc01_prev-->
									</div><!--mc01_arr-->
									<a href="home.php?go=pds.list&pds_type=1&mid=20" class="news_btn flex-box"><img src="../images/ico/mc02_more.png"></a><!--mc01_prev-->
								</div><!--mc01_nav-->
								<div class="news_slide">
									<ul class="news_list  swiper-wrapper">
							<?php
								$sql = "select a.pds_type, a.num, a.title, a.memo, a.file_1, a.days, b.name as pds_name 
										from pds a left outer join pds_info b on (a.pds_type=b.pds_type) order by days desc limit 10 ";
								$res = mysqli_query($connect,$sql);
								for($i=0; $set = mysqli_fetch_array($res); $i++) {
									$img_view = "<img src='../images/board/noimage.jpg'>";
									if($set[file_1] != "") {    // 파일이 있다면...
										$f_type = _get_file_type($set[file_1]);
										if($f_type=="image") {
											$img_url  = "../../file/pds/".$set[num]."_1/".$set[num]."_thum.jpg";
											$img_view = "<img src='$img_url'>";
										} 
									}
									else {	// 첨부파일이 없다면 컨텐츠의 이미지테그로 대체함
										$img_url = _find_img_src($set[memo]);
										if($img_url!="") {
											$img_view = "<img src='$img_url'>";
										}
									}

									if($set[pds_type]=='1')		 $go_mid = "20";
									else if($set[pds_type]=='2') $go_mid = "21";
									else if($set[pds_type]=='3') $go_mid = "22";
							?>
										<li class="swiper-slide">
											<a href="home.php?go=pds.list&pds_type=<?=$set[pds_type]?>&num=<?=$set[num]?>&mid=<?=$go_mid?>">
												<div class="news_img">
													<?=$img_view?>
												</div><!--mc01_img-->
												<h2 class="tit"><?=$set[title]?></h2>
												<p class="text">
													<?=_han_substr(_get_strip_tags($set[memo]),200)?>
												</p>
												<div class="line"></div>
												<dl class="flex-box">
													<dt>
														<strong><?=$set[pds_name]?></strong>
														<span></span>
														<p><?=str_replace("-",".", substr($set[days],0,10) )?></p>
													</dt>
													<dd>자세히보기 +</dd>
												</dl>
											</a>
										</li><!--swiper-slide-->
							<?php
								}
							?>
									</ul><!--news_list-->
								</div><!--news_slide-->
							</div><!--in_Layer-->
						</div><!--news_slide_wrap-->
						<script>
							$(document).ready(function(){
								News();
							});
						</script>
					</div><!--section01-->
					
					
					<div class="section03 main_sec">
						<div class="in_Layer">
							<div class="mc_tit">
								<span>
									COMPANY
								</span>
								<h2>
									바이오랩스는 바이오케어를 통하여 <br>
									기업의 발전과 개인의 건강한 행복이 실현되는 세상을 꿈꿉니다.	
								</h2>
							</div><!--mc_tit-->
						</div><!--in_Layer-->
						<div class="mc03_gra_wrap">
							<div class="in_Layer">
								<a href="home.php?go=page0.2&mid=02" class="marker"><img src="../images/contents/mc01_btn.png"></a>
								<div class="mc03_gra_tit">
									<strong>비전 &amp; 목표</strong>
									<h2>더불어 성장하는 회사</h2>
								</div><!--mc03_gra_tit-->
								<div class="mc_gra">
									<div class="cir"></div>
									<div class="bar"></div>
									<div class="line"></div>
									<ul class="list">
										<li>
											<img src="../images/contents/mc03_1.png">
											<div></div>
											<p>고객중심</p>
										</li>
										<li>
											<img src="../images/contents/mc03_2.png">
											<div></div>
											<p>직원발전</p>
										</li>
										<li>
											<img src="../images/contents/mc03_3.png">
											<div></div>
											<p>사회공헌</p>
										</li>
									</ul><!--list-->
								</div><!--mc_gra-->
							</div><!--in_Layer-->
						</div><!--mc03_gra_wrap-->
					</div><!--section03-->
				</div><!--main_contents-->
			</div><!-- end : id : contents -->