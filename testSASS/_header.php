<!DOCTYPE html>
<html lang="ja">
<head>
<meta name="format-detection" content="telephone=no,address=no,email=no">
<meta charset="utf-8">
<title><?php echo ($page_title!="")?$page_title."|":"インセンティブ・プラス"; ?></title>
<!-- SEO -->
<link rel="canonical" href="<?php echo $page_path; ?>index.php">
<meta name="description" content="<?php echo $page_description; ?>"/>
<meta name="keyword" content="<?php echo $page_keyword; ?>"/>
<meta property="og:locale" content="ja_JP" />
<meta property="og:type" content="website" />
<meta property="og:url" content="" />
<meta property="og:title" content="インセンティブ・プラス" />
<meta property="og:description" content="<?php echo $page_description; ?>" />
<meta property="og:site_name" content="インセンティブ・プラス" />
<meta property="og:image" content="" />
<meta property="fb:app_id" content="" />

<meta name="twitter:card" content="summary" />
<meta name="twitter:url" content="">
<meta name="twitter:description" content="<?php echo $page_description; ?>" />
<meta name="twitter:title" content="<?php echo ($page_title!="")?$page_title."|":""; ?>インセンティブ・プラス" />
<meta name="twitter:site" content="インセンティブ・プラス" />
<meta name="twitter:image" content="" />
<!-- SEO END -->


<!--
<link rel="apple-touch-icon" sizes="57x57" href="<?php echo $page_path; ?>assets/img/common/_meta/apple-touch-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="<?php echo $page_path; ?>assets/img/common/_meta/apple-touch-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="<?php echo $page_path; ?>assets/img/common/_meta/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="<?php echo $page_path; ?>assets/img/common/_meta/apple-touch-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="<?php echo $page_path; ?>assets/img/common/_meta/apple-touch-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="<?php echo $page_path; ?>assets/img/common/_meta/apple-touch-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="<?php echo $page_path; ?>assets/img/common/_meta/apple-touch-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="<?php echo $page_path; ?>assets/img/common/_meta/152x152/apple-touch-icon.png">
<link rel="icon" type="image/png" href="<?php echo $page_path; ?>assets/img/common/_meta/favicon-16x16.png" sizes="16x16">
<link rel="icon" type="image/png" href="<?php echo $page_path; ?>assets/img/common/_meta/favicon-32x32.png" sizes="32x32">
<link rel="icon" type="image/png" href="<?php echo $page_path; ?>assets/img/common/_meta/favicon-96x96.png" sizes="96x96">
<link rel="icon" type="image/png" href="<?php echo $page_path; ?>assets/img/common/_meta/favicon-196x196.png" sizes="196x196">
<meta name="msapplication-TileImage" content="<?php echo $page_path; ?>assets/img/common/_meta/mstile-144x144.png">
-->

<link href="<?php echo $page_path; ?>assets/img/common/_meta/app-touch-icon.png" rel="apple-touch-icon">
<meta name="theme-color" content="#fff">
<meta name="apple-mobile-web-app-title" content="">

<script src="<?php echo $page_path; ?>assets/js/head.js"></script>

<link rel="stylesheet" type="text/css" href="<?php echo $page_path; ?>assets/css/newstyle.css">
<?php echo $extra_css; ?>

<script>
	<!--
	document.write(viewport);
	-->
</script>


</head>
<body<?php echo ($page_id!="top")?' id="lowlayer"':' id="top-page"'; ?> data-page="<?php echo $page_id; ?>">
<div>
	<aside id="side" class="side-show">
		<div class="side-toggle"></div>
		<div id="side-inner">
			<h1 id="site-logo">
				<img src="assets/img/common/logo.png" alt="">
			</h1>
			<div class="user-box">
				<div class="left">
					<div class="photo" style="background-image: url(assets/img/common/user.svg)">
					</div>
				</div>
				<div class="right">
					<p class="name">山田太郎さん</p>
				</div>
			</div>
			<nav class="gnav">
				<ul>
					<li class="navi1 active">
						<a href="index.php">TOP</a>
					</li>
					<li class="navi13">
						<a href="#" class="arrow">ポイントメニュー</a>
						<ul class="sub-nav">
							<li><a href="5-c.php">ポイント付与</a></li>
							<li><a href="5-f.php">付与ポイント履歴・取消</a></li>
							<li><a href="6-a.php">サンキューポイント承認・否認</a></li>
							<li><a href="5-d.php">一括付与用情報出力</a></li>
							<li><a href="5-e.php">一括ポイント付与</a></li>
						</ul>
					</li>
					<li class="navi10"><a href="8-a.php">お知らせ</a></li>
					<li class="navi11"><a href="7-a.php">実績管理</a></li>
					<!-- <li class="navi02"><a href="#">メッセージ <span class="badge number">10</span></a></li> -->
					<li class="navi4">
						<a href="#" class="arrow">ユーザーメニュー</a>
						<ul class="sub-nav">
							<li><a href="2-d.php">新規登録</a></li>
							<li><a href="2-e.php">変更・参照・停止</a></li>
							<li><a href="2-c.php">一括登録・変更用ユーザー情報出力</a></li>
							<li><a href="2-b.php">一括登録・変更</a></li>
						</ul>
					</li>
					<li class="navi14">
						<a href="#" class="arrow">グループメニュー</a>
						<ul class="sub-nav">
							<li><a href="2-f-1.php">新規登録</a></li>
							<li><a href="2-g.php">変更・参照・削除</a></li>
							<li><a href="2-c.php">一括登録・変更用グループ情報出力</a></li>
							<li><a href="2-b.php">一括登録・変更</a></li>
						</ul>
					</li>
					<li class="navi13">
						<a href="#" class="arrow">ポイント付与基準</a>
						<ul class="sub-nav">
							<li><a href="4-b.php">新基準作成</a></li>
							<li><a href="4-a.php">基準変更</a></li>
						</ul>
					</li>
					<li class="navi15">
						<a href="#" class="arrow">取り消し・停止・削除</a>
						<ul class="sub-nav">
							<li><a href="5-f.php">付与ポイントの取消</a></li>
							<li><a href="">ユーザーの利用停止</a></li>
							<li><a href="">グループの削除</a></li>
						</ul>
					</li>
					<li class="navi3">
						<a href="#" class="arrow">設定・変更</a>
						<ul class="sub-nav">
							<li><a href="3-a.php">権限設定</a></li>
							<li><a href="1-a.php">企業個別設定</a></li>
						</ul>
					</li>

				</ul>
			</nav>
		</div>
	</aside>
	<div id="content" class="side-show">
		<header id="header">
			<div id="header-inner" class="clearfix">
				<div class="user-box">
					<p class="name">山田太郎さん</p>
				</div>
				<div class="user-box">
					<p class="logout">ログアウト</p>
				</div>
			</div><!-- /#header-inner -->
		</header>

		<main id="body">
