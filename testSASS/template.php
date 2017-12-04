<?php
$page_id = 'top'; //ページ独自にスタイルを指定する場合は入力
$page_title = ''; //ページ名
$page_description = '';
$page_keyword = '';
$page_path = ''; //階層
$extra_css = '
'; //何か追加で読み込みたいCSSがあればlinkタグごと記述
$extra_js = '
'; //何か追加で読み込みたいJSがあればscriptタグごと記述
include '_header.php'; ?>

<section class="section-container">
  <div class="breadcrumb">
    <ul>
      <li><a href="#">トップ</a><span>&gt;</span></li>
      <li><a href="#">ユーザー設定</a><span>&gt;</span></li>
      <li>ユーザー一括登録・変更</li>
    </ul>
  </div>
	<h1>H1</h1>
	<h2>H2</h2>
	<h2 class="step">
		<span class="number">STEP.1</span>ポイント付与基準を検索してください
	</h2>
	<div class="">
		<h3>H3</h3>
		<ul class="form-list half">
			<li>
				<dl>
					<dt><label for="">テキスト</label></dt>
					<dd><input type="text" placeholder="ダミーダミー" class="w-max"></dd>
				</dl>
			</li>
			<li>
				<dl>
					<dt><label for="">セレクト</label></dt>
					<dd>
						<div class="select w-max">
							<span class="display">ダミーダミー</span>
							<select name="" id="">
								<option value=""></option>
							</select>
						</div>
					</dd>
				</dl>
			</li>
		</ul>
		<ul class="form-list">
			<li>
				<dl class="error">
					<dt><label for="">テキスト</label></dt>
					<dd><input type="text" placeholder="ダミーダミー" class="w390"> <span class="form-text error ml20">※エラーメッセージ入る</span></dd>
				</dl>
			</li>
		</ul>
		<ul class="form-list">
			<li>
				<input type="text" class="small w90" value="20161012">
				<div class="select small w70">
					<span class="display">10</span>
					<select name="" id="">
						<option value=""></option>
					</select>
				</div>
			</li>
		</ul>
		<ul class="form-list">
			<li>
				<dl>
					<dt><label for="">ラジオボタン</label></dt>
					<dd>
						<label class="radio"><input type="radio" name="sample1">ON</label>
						<label class="radio"><input type="radio" name="sample1">OFF</label>
					</dd>
				</dl>
			</li>
			<li>
				<dl>
					<dt><label for="">チェックボックス</label></dt>
					<dd>
						<label class="checkbox"><input type="checkbox">ON</label>
						<label class="checkbox"><input type="checkbox">OFF</label>
						<label class="checkbox"><input type="checkbox">ヘルプアイコン <span class="help">?</span></label>
					</dd>
				</dl>　
			</li>
		</ul>
		<div class="search-box">
			<ul class="form-list">
				<li>
					<dl>
						<dt><label for="">付与基準名</label></dt>
						<dd><input type="text" placeholder="ダミーダミー" class="w-max"></dd>
					</dl>
				</li>
        <li>
          <dl>
            <dt><label for="">テキストエリア</label></dt>
            <dd><textarea name="" class="w-max"></textarea></dd>
          </dl>
        </li>
				<li>
					<dl>
						<dt><label for="">付与期間</label></dt>
						<dd>
							<div class="select w70">
								<span class="display">ダミーダミー</span>
								<select name="" id="">
									<option value=""></option>
								</select>
							</div>
							<span class="form-text">年</span>
							<div class="select w70">
								<span class="display">ダミーダミー</span>
								<select name="" id="">
									<option value=""></option>
								</select>
							</div>
							<span class="form-text">月</span>
							<div class="select w70">
								<span class="display">ダミーダミー</span>
								<select name="" id="">
									<option value=""></option>
								</select>
							</div>
							<span class="form-text">日　〜　</span>
							<div class="select w70">
								<span class="display">ダミーダミー</span>
								<select name="" id="">
									<option value=""></option>
								</select>
							</div>
							<span class="form-text">年</span>
							<div class="select w70">
								<span class="display">ダミーダミー</span>
								<select name="" id="">
									<option value=""></option>
								</select>
							</div>
							<span class="form-text">月</span>
							<div class="select w70">
								<span class="display">ダミーダミー</span>
								<select name="" id="">
									<option value=""></option>
								</select>
							</div>
							<span class="form-text">日</span>
						</dd>
					</dl>
				</li>
			</ul>
			<div class="form-action">
				<div class="btn icon-search btn-center w230"><button>検索</button></div>
			</div>
		</div>

		<div class="tab">
			<ul class="clearfix">
				<li class="active"><a href="#">カテゴリA</a></li>
				<li class=""><a href="#">カテゴリB</a></li>
			</ul>
		</div>

		<div class="display-amount">表示件数
			<div class="select small w70">
				<span class="display">10</span>
				<select name="" id="">
					<option value=""></option>
				</select>
			</div>
		</div>

		<table class="table">
			<tr>
				<th><div class="th-inner">グループ名 <span class="sort-asc"></span><span class="sort-desc"></span></div></th>
				<th><div class="th-inner">よみ</div></th>
				<th><div class="th-inner">有効期限 <span class="sort-asc"></span><span class="sort-desc"></span></div></th>
				<th><div class="th-inner"></div></th>
			</tr>
			<tr>
				<td>全社員</td>
				<td>ぜんしゃいん</td>
				<td>2020年12月31日</td>
				<td class="mark"><label class="radio"><input type="radio"></label></td>
			</tr>
		</table>
		<div class="table-foot">
			<div class="btn type-brown icon-add w230 h25 btn-center"><a href="#">IPアドレスを新規追加</a></div>
		</div>

		<div class="pagination">
			<ul>
				<li><a href="#">&lt;</a></li>
				<li class="active"><span>1</span></li>
				<li><a href="#">2</a></li>
				<li><a href="#">3</a></li>
				<li><a href="#">4</a></li>
				<li><a href="#">5</a></li>
				<li>…</li>
				<li><a href="#">100</a></li>
				<li><a href="#">&gt;</a></li>
			</ul>
		</div>

		<div class="btn btn-inline w230"><a href="#">選択</a></div>
		<div class="btn btn-inline icon-search w230"><a href="#">検索</a></div>
		<div class="btn btn-inline icon-upload w230"><a href="#">アップロード</a></div>
		<div class="btn btn-inline icon-download w230"><a href="#">ダウンロード</a></div>
		<div class="btn type-gray btn-inline w110"><a href="#">キャンセル</a></div>
		<div class="btn type-red btn-inline icon-arrow w230 h50"><a href="#">確定</a></div>
		<div class="btn btn-inline w50 h20"><a href="#">追加</a></div>
		<div class="btn type-gray btn-inline w50 h20"><a href="#">削除</a></div>
		<div class="btn type-name btn-inline w200 h25"><a href="#">福利 太郎</a></div>


	</div>
	<h2>ユーザー画面に反映させる賞品の情報を変更します</h2>
	<div class="section-content">
		<div class="movable-list-box">
			<div class="left-box">
				<p class="title">表示</p>
				<ul class="list">
					<li><div class="list-inner"><span class="number">ST0001</span><span class="name">東急ハンズ</span></div></li>
					<li><div class="list-inner"><span class="number">ST0003</span><span class="name">スターバックス</span></div></li>
					<li><div class="list-inner"><span class="number">ST0004</span><span class="name">Amazon</span></div></li>
					<li><div class="list-inner"><span class="number">ST0006</span><span class="name">楽天</span></div></li>
					<li><div class="list-inner"><span class="number">ST0007</span><span class="name">ローソン</span></div></li>
					<li><div class="list-inner"><span class="number">ST0008</span><span class="name">ファミリーマート</span></div></li>
				</ul>
			</div>
			<div class="control-box">
				<div class="btn type-gray action-hidden">
          <div onclick= MouseClick(0)><span>非表示</span>
          </div>
        </div>
				<div class="btn action-show">
          <div onclick= MouseClick(1)><span>表示</span>
          </div>
        </div>
			</div>

			<div class="right-box">
				<p class="title">非表示</p>
				<ul class="list">
					<li><div class="list-inner"><span class="number">ST0002</span><span class="name">ミニストップ</span></div></li>
					<li><div class="list-inner"><span class="number">ST0005</span><span class="name">マクドナルド</span></div></li>
				</ul>
			</div>
      <script type="text/javascript">
      function MouseClick(num)
      {
        if(num == 0){
          //nodeで帰ってくるから0番目を指定
            document.getElementsByClassName('right-box')[0].style.display = 'none';

        }else{
            document.getElementsByClassName('right-box')[0].style.display = 'block';
        }
      }
      </script>
		</div>
		<p class="notice text-right">※反映は翌日以降となります</p>
	</div>
</section>

<section class="section-container">
	<h1>H1</h1>
	<div class="section-content">
		<p class="headline-text">H1下の説明文文章がここに入りますH1下の説明文文章がここに入りますH1下の説明文文章がここに入ります<br>H1下の説明文文章がここに入りますH1下の説明文文章がここに入りますH1下の説明文文章</p>
		<p class="subhead">文章がここにはいりますこの文章はダミーです文章が</p>
		<p class="text">文章がここにはいりますこの文章はダミーです文章がここにはいりますこの文章はダミーです文章がここにはいりますこの文章はダミーです文章がここにはいりますこの文章はダミーです文章がここにはいりますこの文章はダミーです文章がここにはいりますこの文章はダミーです文章がここにはいりますこの文章はダミーです文章がここにはいりますこの文章はダミーです文章がここにはいりますこの文章はダミーです文章がここにはいりますこの文章はダミーです文章がここにはいりますこの文章はダミーです文章がここにはいりますこの文章はダミーです文章がここにはいりますこの文章はダミーです文章がここにはいりますこの文章はダミーです文章がここにはいりますこの文章はダミーです文章がここにはいりますこの文章はダミーです文章がここにはいりますこの文章はダミーです文章がここにはいりますこの文章はダミーです文章がここにはいりますこの文章はダミーです文章がここにはいりますこの文章はダミーです</p>
		<p class="notice">※注釈がここにはいります注釈がここにはいります<br>※注釈がここにはいります注釈がここにはいります</p>
	</div>
</section>

<section class="section-container">
	<h1>モーダルについて</h1>
	<div class="section-content">
		<p class="text"><a href="#modal01" class="openmodal">汎用モーダル</a></p>
		<p class="text"><a href="#modal02" class="openmodal">ユーザー詳細表示用モーダル</a></p>
	</div>
</section>


<div class="modal-area">
  <div class="modal-content" id="modal01">
    <div class="modal-head">
      <p class="title">タイトルが入ります</p>
      <div class="close"></div>
    </div>
    <div class="modal-inner">
      <ul class="form-list">
        <li>
          <dl>
            <dt><label>テキスト</label></dt>
            <dd><input type="text" class="w390"></dd>
          </dl>
        </li>
        <li>
          <dl>
            <dt><label>テキスト</label></dt>
            <dd><input type="text" class="w390"></dd>
          </dl>
        </li>
        <li>
          <dl>
            <dt><label>テキスト</label></dt>
            <dd><input type="text" class="w390"></dd>
          </dl>
        </li>
        <li>
          <dl>
            <dt><label>テキスト</label></dt>
            <dd><input type="text" class="w390"></dd>
          </dl>
        </li>
      </ul>
      <div class="form-action center">
        <div class="btn type-gray btn-inline w110"><a href="#">キャンセル</a></div>
        <div class="btn btn-inline w170"><a href="#">ダウンロード</a></div>
      </div>
    </div>
  </div>
	<div class="modal-area">
  <div class="modal-content" id="modal02">
    <div class="f-head">
      <p class="title">ユーザー情報</p>
      <div class="close"></div>
    </div>
    <div class="modal-inner nopadding">
      <table class="user">
        <!-- <tr>
          <th>従業員コード</th>
          <td>P1200</td>
        </tr> -->
        <tr>
          <th>名前</th>
          <td>福利 太郎</td>
        </tr>
        <tr>
          <th>フリガナ</th>
          <td>フクリ タロウ</td>
        </tr>
        <!-- <tr>
          <th>メールアドレス</th>
          <td>xxxxxxx@xxxx.co.jp</td>
        </tr>
        <tr>
          <th>利用開始日</th>
          <td>2016/10/01</td>
        </tr> -->
        <tr>
          <th>グループ</th>
          <td class="scroll">
            <div class="td-content">
              <p>全社</p>
              <p>サービス企画本部</p>
              <p>企画部</p>
              <p>サービス企画本部</p>
              <p>全社</p>
              <p>サービス企画本部</p>
              <p>企画部</p>
              <p>サービス企画本部</p>
              <p>全社</p>
              <p>サービス企画本部</p>
              <p>企画部</p>
              <p>サービス企画本部</p>
            </div>
          </td>
        </tr>
      </table>
    </div>
  </div>
</div>
</div>



<?php include '_footer.php'; ?>
