<?php
$page_id = 'top'; //ページ独自にスタイルを指定する場合は入力
$page_title = ''; //ページ名
$page_description = '';
$page_keyword = 'ステーキ,三笠会館,西銀座,数寄屋橋,東京';
$page_path = ''; //階層
$extra_css = '
<link rel="stylesheet" type="text/css" href="assets/css/index.css">
'; //何か追加で読み込みたいCSSがあればlinkタグごと記述
	// <script src="../assets/js/index.js"></script>


$extra_js = '
<script src="assets/js/_page/top.js"></script>
'; //何か追加で読み込みたいJSがあればscriptタグごと記述
include '_header.php'; ?>

		<div id="page-container">
			<div id="page-container-inner">

				<header id="kv-conttainer" class="js__full-screen">
					<div id="kv-inner">
						<div id="kv-content">
							<img src="assets/img/common/logo.svg" alt="">
						</div>
						<div id="slider-loader">
<svg version="1.1" id="svg-kv-circle" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
	 y="0px" width="426px" height="426px" viewBox="0 0 426 426" enable-background="new 0 0 426 426" xml:space="preserve">
<path fill="none" stroke="#b2a170" stroke-width="2" stroke-miterlimit="10" d="M213.016,1.625
	c116.575,0,211.078,94.461,211.078,210.985s-94.503,210.985-211.078,210.985c-116.575,0-211.078-94.461-211.078-210.985
	C1.938,96.085,96.441,1.625,213.016,1.625z"/>
</svg>
						</div>
					</div>

					<div class="scroll-down">
						<div class="scroll-down-inner">
							<div class="text">SCROLL</div>
							<div class="arrow">
								<svg version="1.1" id="kv-scroll-down" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
									 y="0px" width="38px" height="16px" viewBox="0 0 38 16" enable-background="new 0 0 38 16" xml:space="preserve">
								<path fill-rule="evenodd" clip-rule="evenodd" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-miterlimit="10" d="
									M37.007,5.859L19,14.008L0.993,5.859"/>
								<path fill-rule="evenodd" clip-rule="evenodd" fill="none" stroke="#FFFFFF" stroke-miterlimit="10" d="M37.007,1L19,9.148L0.993,1"
									/>
								</svg>
							</div>
						</div>
					</div>

					<div id="kv-bg-slider" class="js__full-screen">
						<div class="img no1 js__full-screen"></div>
						<div class="img no2 js__full-screen"></div>
						<div class="img no3 js__full-screen"></div>
					</div>
				</header><!-- /#kv-conttainer -->

				<div id="page-contents-container">

					<section id="news" class="section-container">
						<h2 class="section-title js__vertical">
							<span class="text">NEWS</span>
							<span class="icon">
								<svg version="1.1" id="svg-section-title1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
									 y="0px" width="44.872px" height="18.61px" viewBox="0 0 44.872 18.61" enable-background="new 0 0 44.872 18.61"
									 xml:space="preserve">
									<g>
										<defs>
											<rect id="svg-section-title1-id1" width="44.872" height="18.61"/>
										</defs>
										<clipPath id="svg-section-title1-id2">
											<use xlink:href="#svg-section-title1-id1"  overflow="visible"/>
										</clipPath>
											<circle clip-path="url(#svg-section-title1-id2)" fill="none" stroke="#b2a170" stroke-width="0.8" stroke-miterlimit="10" cx="22.387" cy="9.305" r="8.905"/>

											<circle clip-path="url(#svg-section-title1-id2)" fill="none" stroke="#FFFFFF" stroke-width="0.8" stroke-miterlimit="10" cx="9.305" cy="9.305" r="8.905"/>

											<circle clip-path="url(#svg-section-title1-id2)" fill="none" stroke="#FFFFFF" stroke-width="0.8" stroke-miterlimit="10" cx="35.567" cy="9.305" r="8.905"/>
									</g>
								</svg>

							</span>
						</h2>

						<div class="news-list clearfix">
							<article class="js__vertical">
								<p class="photo" style="background-image:url('assets/img/top/news_dummy-photo1.jpg');"></p>
								<div class="text-container">
									<time class="date">2016.10.25</time>
									<h3 class="title">人気のステーキが新しくなって新登場2016年9月1日(木)～</h3>
									<p class="text">ここに文章が入りますこの文章はダミーです。ここに文章が入りますこの文章はダミーです。ここに文章が入りますこの文章はダミーで…</p>
								</div>
							</article>
							<article class="js__vertical">
								<p class="photo" style="background-image:url('assets/img/top/news_dummy-photo2.jpg');"></p>
								<div class="text-container">
									<time class="date">2016.10.25</time>
									<h3 class="title">人気のステーキが新しくなって新登場2016年9月1日(木)～</h3>
									<p class="text">ここに文章が入りますこの文章はダミーです。ここに文章が入りますこの文章はダミーです。ここに文章が入りますこの文章はダミーで…</p>
								</div>
							</article>
							<article class="js__vertical">
								<p class="photo" style="background-image:url('assets/img/top/news_dummy-photo3.jpg');"></p>
								<div class="text-container">
									<time class="date">2016.10.25</time>
									<h3 class="title">人気のステーキが新しくなって新登場2016年9月1日(木)～</h3>
									<p class="text">ここに文章が入りますこの文章はダミーです。ここに文章が入りますこの文章はダミーです。ここに文章が入りますこの文章はダミーで…</p>
								</div>
							</article>
						</div>

						<div class="btn type-line icon-link w220 center js__vertical">
							<a href=""><span>MORE</span></a>
						</div>


					</section>

					<section id="concept" class="section-container">
						<h2 class="section-title js__vertical">
							<span class="text">CONCEPT</span>
							<span class="icon">
								<svg version="1.1" id="svg-section-title1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
									 y="0px" width="44.872px" height="18.61px" viewBox="0 0 44.872 18.61" enable-background="new 0 0 44.872 18.61"
									 xml:space="preserve">
									<g>
										<defs>
											<rect id="svg-section-title1-id1" width="44.872" height="18.61"/>
										</defs>
										<clipPath id="svg-section-title1-id2">
											<use xlink:href="#svg-section-title1-id1"  overflow="visible"/>
										</clipPath>
											<circle clip-path="url(#svg-section-title1-id2)" fill="none" stroke="#b2a170" stroke-width="0.8" stroke-miterlimit="10" cx="22.387" cy="9.305" r="8.905"/>

											<circle clip-path="url(#svg-section-title1-id2)" fill="none" stroke="#FFFFFF" stroke-width="0.8" stroke-miterlimit="10" cx="9.305" cy="9.305" r="8.905"/>

											<circle clip-path="url(#svg-section-title1-id2)" fill="none" stroke="#FFFFFF" stroke-width="0.8" stroke-miterlimit="10" cx="35.567" cy="9.305" r="8.905"/>
									</g>
								</svg>

							</span>
						</h2>

						<div class="section-content clearfix">

							<div class="photo flr js__vertical">
								<div class="photo-inner js__para front"><img src="assets/img/top/body_photo_l1.png" height="500" width="500" alt=""></div>
							</div>

							<div class="text-container fll">
								<div class="text-inner">
									<h3 class="title js__vertical">INTORNO(イントルノ）は“囲む”<br class="pc">ご縁をつむぐプレシャスな銀座時間</h3>
									<p class="text js__vertical">芳醇に焼き上げられたイタリアンスタイルのステーキを<br class="pc">
										大切な人と囲み楽しむ空間、それが“ビステッケリア”。<br class="pc">
										銀座の地にて長年お客様を迎えてきたホスピタリティはそのままに、<br class="pc">
										新たなビステッケリアの歴史を刻みます。</p>
									<div class="btn type-line icon-link w220">
										<a href=""><span>MORE</span></a>
									</div>
								</div>
								<div class="bg-min no1 js__vertical">
									<div class="js__para back"><img src="assets/img/top/body_photo_s1.png" height="226" width="226" alt=""></div>
								</div>
							</div>

						</div>

					</section>


					<section id="menu" class="section-container">
						<h2 class="section-title js__vertical">
							<span class="text">MENU</span>
							<span class="icon">
								<svg version="1.1" id="svg-section-title1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
									 y="0px" width="44.872px" height="18.61px" viewBox="0 0 44.872 18.61" enable-background="new 0 0 44.872 18.61"
									 xml:space="preserve">
									<g>
										<defs>
											<rect id="svg-section-title1-id1" width="44.872" height="18.61"/>
										</defs>
										<clipPath id="svg-section-title1-id2">
											<use xlink:href="#svg-section-title1-id1"  overflow="visible"/>
										</clipPath>
											<circle clip-path="url(#svg-section-title1-id2)" fill="none" stroke="#b2a170" stroke-width="0.8" stroke-miterlimit="10" cx="22.387" cy="9.305" r="8.905"/>

											<circle clip-path="url(#svg-section-title1-id2)" fill="none" stroke="#FFFFFF" stroke-width="0.8" stroke-miterlimit="10" cx="9.305" cy="9.305" r="8.905"/>

											<circle clip-path="url(#svg-section-title1-id2)" fill="none" stroke="#FFFFFF" stroke-width="0.8" stroke-miterlimit="10" cx="35.567" cy="9.305" r="8.905"/>
									</g>
								</svg>

							</span>
						</h2>

						<div class="section-content clearfix">

							<div class="photo fll js__vertical">
								<div class="photo-inner js__para front"><img src="assets/img/top/body_photo_l2.png" height="500" width="500" alt=""></div>
							</div>

							<div class="text-container flr js__vertical">
								<div class="text-inner">
									<h3 class="title">プライムグレードのビステッカを<br class="pc">
										至極のワインとともに</h3>
									<p class="text">ビステッカはすべてプライムグレードにこだわり、<br class="pc">
										最適な熟成度を見極めて<br class="pc">
										800℃のブロイラーでシンプルに焼けあげます。<br class="pc">
										肉本来の旨みを引き出す数種の塩、<br class="pc">
										こだわりのオリーブオイルと共にお召し上がりください。</p>
									<div class="btn type-line icon-link w220">
										<a href=""><span>MORE</span></a>
									</div>
								</div>
								<div class="bg-min no2 js__vertical">
									<div class="js__para back"><img src="assets/img/top/body_photo_s2.png" height="226" width="226" alt=""></div>
								</div>
							</div>


						</div>

					</section>


					<section id="floor" class="section-container">
						<h2 class="section-title js__vertical">
							<span class="text">FLOOR</span>
							<span class="icon">
								<svg version="1.1" id="svg-section-title1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
									 y="0px" width="44.872px" height="18.61px" viewBox="0 0 44.872 18.61" enable-background="new 0 0 44.872 18.61"
									 xml:space="preserve">
									<g>
										<defs>
											<rect id="svg-section-title1-id1" width="44.872" height="18.61"/>
										</defs>
										<clipPath id="svg-section-title1-id2">
											<use xlink:href="#svg-section-title1-id1"  overflow="visible"/>
										</clipPath>
											<circle clip-path="url(#svg-section-title1-id2)" fill="none" stroke="#b2a170" stroke-width="0.8" stroke-miterlimit="10" cx="22.387" cy="9.305" r="8.905"/>

											<circle clip-path="url(#svg-section-title1-id2)" fill="none" stroke="#FFFFFF" stroke-width="0.8" stroke-miterlimit="10" cx="9.305" cy="9.305" r="8.905"/>

											<circle clip-path="url(#svg-section-title1-id2)" fill="none" stroke="#FFFFFF" stroke-width="0.8" stroke-miterlimit="10" cx="35.567" cy="9.305" r="8.905"/>
									</g>
								</svg>

							</span>
						</h2>

						<div class="photo js__vertical"></div>

						<h3 class="copy js__vertical">薄暮からアフターディナーまで<br>大人に似合う空間</h3>
						<p class="cnt-text js__vertical">銀座の地にて90有余年。昭和初期から銀座に集まる方々をお迎えして参りました。<br>
							大切なお客様のご接待はもちろん、ご家族の記念日や旧知のお仲間との時間に安心して選んでいただけるよう準備を整えております。</p>
						<div class="btn type-line icon-link w220 center">
							<a href=""><span>MORE</span></a>
						</div>

					</section>


					<div id="bg-circle-container">
						<div class="circle no1 size-m js__target">
							<svg version="1.1" id="svg-bg-circle1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
								 y="0px" width="640px" height="640px" viewBox="0 0 640 640" enable-background="new 0 0 640 640" xml:space="preserve">
<path fill="none" stroke="#25333F" stroke-miterlimit="10" d="M320.016,1.251c176.455,0,319.5,142.981,319.5,319.359
	c0,176.377-143.045,319.359-319.5,319.359c-176.455,0-319.5-142.981-319.5-319.359C0.516,144.231,143.561,1.251,320.016,1.251z"/>
<path fill="none" class="js__write" stroke="#595647" stroke-miterlimit="10" d="M320.016,1.251c176.455,0,319.5,142.981,319.5,319.359
	c0,176.377-143.045,319.359-319.5,319.359c-176.455,0-319.5-142.981-319.5-319.359C0.516,144.231,143.561,1.251,320.016,1.251z"/>
							</svg>

						</div>
						<div class="circle no2 size-m js__target">
							<svg version="1.1" id="svg-bg-circle2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
								 y="0px" width="640px" height="640px" viewBox="0 0 640 640" enable-background="new 0 0 640 640" xml:space="preserve">
<path fill="none" stroke="#25333F" stroke-miterlimit="10" d="M320.016,1.251c176.455,0,319.5,142.981,319.5,319.359
	c0,176.377-143.045,319.359-319.5,319.359c-176.455,0-319.5-142.981-319.5-319.359C0.516,144.231,143.561,1.251,320.016,1.251z"/>
<path fill="none" class="js__write" stroke="#595647" stroke-miterlimit="10" d="M320.016,1.251c176.455,0,319.5,142.981,319.5,319.359
	c0,176.377-143.045,319.359-319.5,319.359c-176.455,0-319.5-142.981-319.5-319.359C0.516,144.231,143.561,1.251,320.016,1.251z"/>
							</svg>
						</div>
						<div class="circle no3 size-l js__target">
							<svg version="1.1" id="svg-bg-circle2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
								 y="0px" width="950px" height="950px" viewBox="0 0 950 950" enable-background="new 0 0 950 950" xml:space="preserve">
<path fill="none" stroke="#25333F" stroke-miterlimit="10" d="M475.017,1.319c262.058,0,474.499,212.346,474.499,474.291
	c0,261.944-212.441,474.291-474.499,474.291C212.957,949.9,0.516,737.554,0.516,475.61C0.516,213.664,212.957,1.319,475.017,1.319z"
	/>
<path fill="none" class="js__write" stroke="#595647" stroke-miterlimit="10" d="M475.017,1.319c262.058,0,474.499,212.346,474.499,474.291
	c0,261.944-212.441,474.291-474.499,474.291C212.957,949.9,0.516,737.554,0.516,475.61C0.516,213.664,212.957,1.319,475.017,1.319z"
	/>
							</svg>
						</div>
						<div class="circle no4 size-m js__target">
							<svg version="1.1" id="svg-bg-circle2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
								 y="0px" width="640px" height="640px" viewBox="0 0 640 640" enable-background="new 0 0 640 640" xml:space="preserve">
<path fill="none" stroke="#25333F" stroke-miterlimit="10" d="M320.016,1.251c176.455,0,319.5,142.981,319.5,319.359
	c0,176.377-143.045,319.359-319.5,319.359c-176.455,0-319.5-142.981-319.5-319.359C0.516,144.231,143.561,1.251,320.016,1.251z"/>
<path fill="none" class="js__write" stroke="#595647" stroke-miterlimit="10" d="M320.016,1.251c176.455,0,319.5,142.981,319.5,319.359
	c0,176.377-143.045,319.359-319.5,319.359c-176.455,0-319.5-142.981-319.5-319.359C0.516,144.231,143.561,1.251,320.016,1.251z"/>
							</svg>
						</div>


						<div class="circle no5 size-l js__draw">
							<svg version="1.1" id="svg-bg-circle2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
								 y="0px" width="950px" height="950px" viewBox="0 0 950 950" enable-background="new 0 0 950 950" xml:space="preserve">
<path fill="none" stroke="#25333F" stroke-miterlimit="10" d="M475.017,1.319c262.058,0,474.499,212.346,474.499,474.291
	c0,261.944-212.441,474.291-474.499,474.291C212.957,949.9,0.516,737.554,0.516,475.61C0.516,213.664,212.957,1.319,475.017,1.319z"
	/>
							</svg>
						</div>
						<div class="circle no6 size-ss js__draw">
							<svg version="1.1" id="svg-bg-circle2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
								 y="0px" width="320px" height="320px" viewBox="0 0 320 320" enable-background="new 0 0 320 320" xml:space="preserve">
<path fill="none" stroke="#25333F" stroke-miterlimit="10" d="M160.016,1.18c88.09,0,159.5,71.379,159.5,159.43
	c0,88.05-71.41,159.429-159.5,159.429c-88.089,0-159.5-71.379-159.5-159.429C0.516,72.559,71.926,1.18,160.016,1.18z"/>

							</svg>
						</div>
						<div class="circle no7 size-m js__draw">
							<svg version="1.1" id="svg-bg-circle2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
								 y="0px" width="640px" height="640px" viewBox="0 0 640 640" enable-background="new 0 0 640 640" xml:space="preserve">
<path fill="none" stroke="#25333F" stroke-miterlimit="10" d="M320.016,1.251c176.455,0,319.5,142.981,319.5,319.359
	c0,176.377-143.045,319.359-319.5,319.359c-176.455,0-319.5-142.981-319.5-319.359C0.516,144.231,143.561,1.251,320.016,1.251z"/>

							</svg>
						</div>
						<div class="circle no8 size-s js__draw">
							<svg version="1.1" id="svg-bg-circle2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
								 y="0px" width="400px" height="400px" viewBox="0 0 400 400" enable-background="new 0 0 400 400" xml:space="preserve">
<path fill="none" stroke="#25333F" stroke-miterlimit="10" d="M200.016,0.198c110.18,0,199.5,89.279,199.5,199.412
	c0,110.132-89.319,199.412-199.5,199.412c-110.181,0-199.5-89.279-199.5-199.412C0.516,89.477,89.835,0.198,200.016,0.198z"/>
							</svg>
						</div>

						<div class="circle no9 size-s js__draw">
							<svg version="1.1" id="svg-bg-circle2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
								 y="0px" width="400px" height="400px" viewBox="0 0 400 400" enable-background="new 0 0 400 400" xml:space="preserve">
<path fill="none" stroke="#25333F" stroke-miterlimit="10" d="M200.016,0.198c110.18,0,199.5,89.279,199.5,199.412
	c0,110.132-89.319,199.412-199.5,199.412c-110.181,0-199.5-89.279-199.5-199.412C0.516,89.477,89.835,0.198,200.016,0.198z"/>
							</svg>
						</div>
						<div class="circle no10 size-s js__draw">
							<svg version="1.1" id="svg-bg-circle2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
								 y="0px" width="400px" height="400px" viewBox="0 0 400 400" enable-background="new 0 0 400 400" xml:space="preserve">
<path fill="none" stroke="#25333F" stroke-miterlimit="10" d="M200.016,0.198c110.18,0,199.5,89.279,199.5,199.412
	c0,110.132-89.319,199.412-199.5,199.412c-110.181,0-199.5-89.279-199.5-199.412C0.516,89.477,89.835,0.198,200.016,0.198z"/>
							</svg>
						</div>


						<div class="circle no11 size-m js__target">
							<svg version="1.1" id="svg-bg-circle2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
								 y="0px" width="640px" height="640px" viewBox="0 0 640 640" enable-background="new 0 0 640 640" xml:space="preserve">
<path fill="none" stroke="#25333F" stroke-miterlimit="10" d="M320.016,1.251c176.455,0,319.5,142.981,319.5,319.359
	c0,176.377-143.045,319.359-319.5,319.359c-176.455,0-319.5-142.981-319.5-319.359C0.516,144.231,143.561,1.251,320.016,1.251z"/>
<path fill="none" class="js__write" stroke="#595647" stroke-miterlimit="10" d="M320.016,1.251c176.455,0,319.5,142.981,319.5,319.359
	c0,176.377-143.045,319.359-319.5,319.359c-176.455,0-319.5-142.981-319.5-319.359C0.516,144.231,143.561,1.251,320.016,1.251z"/>
							</svg>
						</div>
						<div class="circle no12 size-ss js__draw">
							<svg version="1.1" id="svg-bg-circle2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
								 y="0px" width="320px" height="320px" viewBox="0 0 320 320" enable-background="new 0 0 320 320" xml:space="preserve">
<path fill="none" stroke="#25333F" stroke-miterlimit="10" d="M160.016,1.18c88.09,0,159.5,71.379,159.5,159.43
	c0,88.05-71.41,159.429-159.5,159.429c-88.089,0-159.5-71.379-159.5-159.429C0.516,72.559,71.926,1.18,160.016,1.18z"/>

							</svg>
						</div>


					</div><!-- /.bg-circle-container -->

				</div><!-- /#page-contents-container -->


			</div><!-- /#page-container-inner -->
		</div><!-- /#page-container -->



<?php include '_footer.php'; ?>