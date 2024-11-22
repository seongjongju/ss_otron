<script language='javascript'>
<!--
function fun_bottom_submit() {
    f = eval('document.f_bottom'); 
	f.target='ifr_ok';

    if(f.name.value=='') 	{ alert('<?=$str_pds_46[$c_lang]?>'); f.name.focus(); return; }
    if(f.mobile.value=='') 	{ alert('<?=$str_pds_47[$c_lang]?>'); f.mobile.focus(); return; }
    if(f.email.value=='') 	{ alert('<?=$str_pds_48[$c_lang]?>'); f.email.focus(); return; }

	if(f.privacy.checked==false) { alert('<?=$str_pds_49[$c_lang]?>'); return; }

	f.submit();
}
//-->
</script>


<?php
	if($mid!="") {	//	서브페이지
?>
				</div><!--sub_contents-->
			</div><!--contents-->
<?php
	}
?>
			<footer>
				<div id="footer">
					
					<div class="in_Layer flex-box cf">
						<div class="top_btn">
							<img src="../images/ico/top_btn.png">
						</div>
						<div class="f_form cf">
						<form action='../../core/res/contact.act.php' method=post name=f_bottom enctype='multipart/form-data'>
							<div class="f_form_in">
								<div class="f_tit">
									<strong>
										간편상담신청
									</strong>
									<div class="f_policy">
										<a href="javascript:fun_pop_privacy()">개인정보처리방침 보기</a>
										<label>
											<input type="checkbox" name="privacy">
											<div class="indicator"></div><!--indicator-->
											<span>동의</span>
										</label> 
									</div><!--f_policy-->
								</div><!--f_tit-->
								<div class="form_con">
									<dl class="labelA half" style="display:block">
										<dd>
											<label class="input_label" for="td1"">성명을 입력해주세요.</label>
											<input name="name" id="td1" class="name">
										</dd>
									</dl>
									<dl class="labelA half">
										<dd>
											<label class="input_label" for="td2">연락처를 입력해주세요.</label>
											<input name="mobile" id="td2" class="tel phone" maxlength="13">
										</dd>
									</dl>
									<dl class="labelA half">
										<dd>
											<label class="input_label" for="td3">이메일을 입력해주세요.</label>
											<input name="email" id="td3" class="e-mail">
										</dd>
									</dl>
									<dl class="labelA">
										<dd class="flex-box memo">
											<label class="input_label" for="td4">내용을 입력해주세요. (150자 이내)</label>
											<input name="memo" id="td4" >
										</dd>
									</dl>
								</div><!--form_con-->
								<div class="form_btn">
									<a href="javascript:fun_bottom_submit()" class="flex-box">문의하기</a>
								</div><!--form_btn-->
							</div><!--f_form_in-->
							<input type=hidden name=title		value='간편상담신청'>
							<input type=hidden name=spamNoCheck	value='Y'>
							<input type=hidden name=subj		value='B'>
							<input type=hidden name=act			value='make'>
							<input type=hidden name=layout_folder	value='<?=$ext_layout_folder?>'>
						</form>	
						</div><!--f_form-->	

						<div class="f_info">
							<div class="f_form_in">
								<div class="f_top">
									<a class="f_logo" href="home.php">
										<img src="../images/common/f_logo.png">
									</a><!--f_logo-->
								</div><!--f_top-->
								<div class="f_mid">
									<ul class="f_btn">
										<li><a href="javascript:fun_pop_privacy()" class="flex-box">개인정보 처리방침</a></li>
									</ul><!--f_btn-->
								</div><!--f_mid-->
								<div class="f_bot">
									<ul class="f_tel">
										<li>TEL: 1577-7412</li>
										<li>FAX: 02-3452-8026</li>
									</ul>
									<ul class="f_text">
										<li><strong>선릉캠퍼스</strong>&nbsp;  서울시 강남구 테헤란로 311, 아남타워 807(역삼동)</li>
										<li><strong>청담캠퍼스</strong>&nbsp;  서울시 강남구 도산대로 412, 남강빌딩 3(청담동)</li>
									</ul>
									<p class="f_copy">COPYRIGHT 2024 <a href="">BIOCARE.</a> ALL RIGHTS RESERVED</p>
									<p class="f_copy">created by <a href="http://sinbiweb.co.kr?s_url=bl-biocare.com" target=_blank>sinbiweb</a></p>
								</div><!--f_bot-->
							</div>
						</div><!--f_info-->	
					</div><!--in_Layer-->
				</div><!-- end : id : footer -->
			</footer><!-- end : footer -->
		</div><!-- end : id : wrap -->
	</body>
</html>


