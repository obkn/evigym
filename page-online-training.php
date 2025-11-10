<?php

/**
 * Template Name: Online Training Page
 */
get_header();
$static = get_template_directory_uri() . '/assets/static/img';
?>

<main id="main">
  <div class="mainvisual mv09"></div>

  <div class="container">
    <ul id="breadcrumbs-one">
      <li><a href="/">パーソナルジムeviGym</a></li>
      <li><a href="" class="current">オンライントレーニング</a></li>
    </ul>
  </div>

  <section>
    <div class="container">
      <div class="row">
        <div class="col-12 tit js-animation" align="center">
          <img src="<?php echo $static; ?>/online.webp" alt="online">
          <h2>オンライントレーニングについて</h2>
          <hr>
        </div>
      </div>

      <div class="row">
        <div class="col-12 col-sm-10">
          <img src="<?php echo $static; ?>/online-training/img-001.webp" alt="自宅でもしっかり運動できると人気のeviGymオンライントレーニング！">
        </div>
        <div class="col-12 col-sm-10 mt20">
          <h3 class="font-L lh-160">自宅でもしっかり運動できると<br class="pc-none">人気のeviGymオンライントレーニング！</h3>
          <p>外出自粛によるストレスや運動不足へのお悩みを抱える方も多く、自宅でもしっかりと運動をしたいというお客様の声から生まれたeviGymのオンライントレーニング。
            特別な道具は必要ありません！トレーナーがご自宅でもしっかりと運動できるよう親身に指導いたします。</p>
        </div>
      </div>

      <div class="row mt40">
        <div class="col-12 col-sm-10 mb20">
          <img src="<?php echo $static; ?>/online-training/movie-img.webp" alt="ZOOMで自宅がジムになる！">
        </div>
        <div class="col-12 col-sm-10">
          <h3 class="font-L lh-160">ZOOMで自宅がジムになる！</h3>
          <p class="mb20">オンライン通話サービスZOOMを使用して、トレーニングを体験していただけます。スマホ・もしくはパソコンがあればOK！自宅で思い切り身体を動かしてみませんか？</p>
        </div>
      </div>

      <div class="row mt20">
        <div class="col-12 col-sm-10">
          <img src="<?php echo $static; ?>/online-training/img-003.webp" alt="選べる２種類のコース">
        </div>
        <div class="col-12 col-sm-10 mt20">
          <h3 class="font-L lh-160">選べる２種類のコース</h3>
          <p>エビジムのオンライントレーニングでは、<br>1対１のレッスンタイプと複数で受けるグループレッスンの2種類をご用意しております。<br>ご自分に合ったコースでトレーニングをお楽しみ頂けます。</p>
        </div>
        <div class="col-12 col-sm-10 mt20 txtc">
          <img src="<?php echo $static; ?>/online-training/img-003tb_jpg.webp" alt="" class="mw560">
        </div>
        <div class="col-12 col-sm-10 mt30">
          <div class="row btn-group">
            <div class="col-6"><a class="primary-btn btn-small" href="#personal"><span>オンライン</span>パーソナルレッスン詳細</a></div>
            <div class="col-6"><a class="primary-btn btn-small" href="https://hiit.evigym.com/" target="_blank"><span>オンライン</span>グループレッスン詳細</a></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="mb0" id="Point">
    <div class="bg311301" align="center">
      <div class="container mt0">
        <div class="row">
          <div class="col-12 tit">
            <img src="<?php echo $static; ?>/point-w.webp" alt="Price">
            <h2 class="white">eviGymオンラインのポイント</h2>
            <hr class="white">
          </div>
        </div>
      </div>
    </div>

    <p class="txtc mt30">マンツーマンのトレーニングをご希望の方は<br>パーソナルトレーニングがオススメです。<br><br><small>※グループレッスンをご希望の方は<a href="https://hiit.evigym.com/" target="_blank">コチラ</a></small></p>

    <div class="mt0 pt30">
      <div class="container">
        <div class="row point-box">
          <div class="col-11 col-sm-8" id="no01">
            <h3><img src="<?php echo $static; ?>/top/flag01.svg">賃貸住宅でも運動できる！</h3>
            <img src="<?php echo $static; ?>/online-training/img-004.webp" class="mb20" alt="賃貸住宅でも運動できる！">
            <h5>両手が広げられるスペースがあればOK</h5>
            <p class="mt15">トレーニングに必要なのは2畳のスペースだけ。<br>
              マンションでもほかの部屋を気にせずできるトレーニングなので安心。<br>
              気になっていた運動不足を解消しませんか？
            </p>
          </div>
          <div class="col-11 col-sm-8 mt20" id="point01-img">
            <img src="<?php echo $static; ?>/online-training/img-004-1.webp" alt="ジムで通う時間も節約">
            <img src="<?php echo $static; ?>/online-training/img-004-2.webp" alt="外出が心配な方も安心">
          </div>
        </div>

        <div class="point-box mb0">
          <div class="row">
            <div class="col-11 col-sm-8" id="no02">
              <h3><img src="<?php echo $static; ?>/top/flag02.svg">特別な器具は必要なし！</h3>
              <img src="<?php echo $static; ?>/online-training/img-005.webp" class="mb20" alt="自宅でもしっかり鍛えられます">
              <h5>自宅でもしっかり鍛えられます</h5>
              <p class="mt15 mb20">エビジムのオンライントレーニングではダンベルなどの特別な器具は必要ありません。<br>
                自重でもしっかり鍛えることができると好評です！
              </p>
            </div>
          </div>

          <div class="row mt30">
            <div class="col-12 col-sm-6 mb20">
              <img src="<?php echo $static; ?>/online-training/necessary.webp" alt="必要なものについて">
            </div>
          </div>

          <div class="row">
            <div class="col-11 col-sm-6 mb30">
              <img src="<?php echo $static; ?>/online-training/img-06.webp" class="image-photo" alt="身体を動かせるスペース">
              <h4 class="mt10">身体を動かせるスペース<br class="sp-none">(目安は2畳ほど)</h4>
            </div>
            <div class="col-11 col-sm-6 mb30">
              <img src="<?php echo $static; ?>/online-training/img-07.webp" class="image-photo" alt="インターネットが繋がるスマホやタブレットもしくはPC">
              <h4 class="mt10">インターネットが繋がる<br class="pc-none">スマホやタブレットもしくはPC</h4>
              <p class="mt5">※お持ちのトレーニング器具の活用方法などのアドバイスも可能ですので、ご希望の場合セッション時にトレーナーにお伝え下さい。</p>
            </div>
          </div>

          <div class="row">
            <div class="col-11 col-sm-8 bg-color" id="goods">
              <h4>トレーニンググッズを活用しよう！</h4>
              <hr class="w100"><br>
              <img src="<?php echo $static; ?>/online-training/img-005-1.webp" alt="ご自宅に眠っているトレーニング器具の活用サポート！">
              <h5 class="lh-160">ご自宅に眠っているトレーニング器具の活用サポート！</h5>
              <p class="mt5">もし買ったまま眠っているトレーニング器具をお持ちでしたら、それを活用したプランを組みますのでご安心ください。</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div class="container">
    <div class="row btn-group pt30 pb30">
      <div class="col-6">
        <a class="primary-btn btn-small" href="#personal"><span>オンライン</span>パーソナルレッスン詳細</a>
      </div>
      <div class="col-6">
        <a class="primary-btn btn-small" href="https://hiit.evigym.com/" target="_blank"><span>オンライン</span>グループレッスン詳細</a>
      </div>
    </div>
  </div>

  <section class="mb0" id="personal">
    <div class="bg311301" align="center">
      <div class="container mt0">
        <div class="row ">
          <div class="col-12 tit js-animation">
            <img src="<?php echo $static; ?>/personal-w.webp" alt="Personal">
            <h2 class="white">パーソナルトレーニングについて</h2>
            <hr class="white">
          </div>
        </div>
      </div>
    </div>

    <div class="mt0 pt30">
      <div class="container">
        <div class="row point-box">
          <div class="col-11 col-sm-8 mb30" id="no03">
            <h3><img src="<?php echo $static; ?>/top/flag01.svg">トレーニングは無料で録画！</h3>
            <img src="<?php echo $static; ?>/online-training/img-007.webp" class="mb20" alt="トレーニングは無料で録画！">
            <h3>トレーニングは無料で録画！</h3>
            <p class="mt15">
              トレーニングの内容は無料で録画してdropboxにアップ。何度も見返せるので通わない日も自分でトレーニングできます。
            </p>
          </div>

          <div class="bg-color">
            <div class="row m0">
              <div class="col-11 col-sm-8">
                <h4>モデルプラン</h4>
                <hr class="w100">
                <br>
                <img src="<?php echo $static; ?>/online-training/img007-1.webp"><br>
                <p class="mt15 mb20">
                  週2日のプランでも「動画を見ながら自主トレ」ができます！<br>
                  しっかり動きたいという方は、週4日のトレーニングも可能です。<br>
                  動画は過去1年分の動画がすべて会員ページでご覧いただけます。<br>
                  <small>※ご解約後は閲覧することができなくなりますのでご注意ください。</small>
                </p>
              </div>
            </div>
          </div>
        </div>

        <div class="row point-box">
          <div class="col-11 col-sm-8" id="no04">
            <h3><img src="<?php echo $static; ?>/top/flag02.svg">家族や友人とシェアできる！</h3>
            <img src="<?php echo $static; ?>/online-training/img-006.webp" class="mb20" alt="家族や友人とシェアできる！">
            <h3>なんと家族や友人とのシェア可能！</h3>
            <p class="mt15">
              eオンライントレーニングは家族や友人とシェア可能です！追加料金はかかりません。<br>
              友達と割り勘でトレーニング、離れている家族にトレーニングをプレゼント、なんて使い方も！
            </p>
          </div>
        </div>

        <div class="row point-box bg-color">
          <div class="col-11 col-sm-8">
            <h4>トレーニングのシェアイメージ</h4>
            <hr class="w100">
            <br>
            <img src="<?php echo $static; ?>/online-training/img-007-2.webp" alt="トレーニングのシェアイメージ">
            <p class="mt15 mb20">
              トレーニングをシェアできるのがオンラインならでは！<br>
              ひとりだと辛いトレーニングも誰かと一緒なら、きっと楽しく鍛えられるはずです。
            </p>
          </div>

          <div class="col-11 col-sm-8 bg-color">
            <h4>シェアすればこんなにお得！</h4>
            <hr class="w100">
            <br>
            <img src="<?php echo $static; ?>/online-training/img-007-3_jpg.webp" alt="シェアすればこんなにお得！"><br>
            <br><br><br>
            <img src="<?php echo $static; ?>/online-training/img-007-4.webp" class="cardvar" alt="シェアは電子決済での割り勘がオススメ">
            <h4 class="mt15">シェアは電子決済での割り勘がオススメ</h4>
            <p class="mt15 mb20">
              家族や友人との割り勘は電子決済が便利でおすすめです。<br>
              <small>※eviGymでは割り勘での決済は受け付けておりませんので、お客様同士で費用のやりとりをお願いしています。</small>
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div align="center">
      <div class="container mt0">
        <div class="row ">
          <div class="col-12 tit js-animation">
            <h3 class="font-150">料金について</h3>
            <hr class="mb20">
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-11 col-sm-8" align="center">
          <img src="<?php echo $static; ?>/plan/plan-2020-1.webp" alt="入会金＆休会金無料 エビジムは入会金も休会金もすべて無料です。">
          <br><br><br>
          <img src="<?php echo $static; ?>/online-training/img-003bnr_jpg.webp" alt="お試し利用">
          <p class="mt10 font-90 txtl">※通常料金は<a href="/plan/">コチラ</a></p>
          <br><br><br>
          <a href="/reserve/beginner">
            <img class="btn-shadow" src="<?php echo $static; ?>/btn-goyoyaku-off.svg" alt="ご予約はこちら">
          </a>
        </div>
      </div>
    </div>
  </section>

  <section class="bg-color mb0">
    <div class="container">
      <div class="row">
        <div class="col-12 tit" align="center">
          <h3 class="font-150">ご予約の流れについて</h3>
          <hr class="mb20">
        </div>
      </div>
    </div>

    <div class="container">
      <div class="p30 bgffffff mb60">
        <div class="row mb30">
          <div class="col-3 col-xs-2 col-sm-2 col-md-1 pr0">
            <img src="<?php echo $static; ?>/reserve/step01.webp" alt="">
          </div>
          <div class="col-9 col-xs-10 col-sm-10 col-md-11">
            <h4 class="mt25">公式ホームページより予約</h4>
          </div>
          <div class="col-12 mt20">
            <p class="font-90">
              公式ホームページのご予約画面より店舗選択時にオンラインを選択してお進みください。<br>
              ご予約確定後、ビデオ通話へのアクセス用のURLを別途メールにて送付させていただきます。
            </p>
            <img src="<?php echo $static; ?>/online-training/img010-1.webp" class="border1" alt="">
            <br><br><br>
            <p align="center">
              <a href="/reserve/beginner">
                <img src="<?php echo $static; ?>/btn-goyoyaku-off.svg" alt="ご予約はこちら" class="mw320 btn-shadow">
              </a>
            </p>
          </div>
        </div>

        <div class="row mb30">
          <div class="col-3 col-xs-2 col-sm-2 col-md-1 pr0">
            <img src="<?php echo $static; ?>/reserve/step02.webp" alt="">
          </div>
          <div class="col-9 col-xs-10 col-sm-10 col-md-11">
            <h4 class="mt25">ZOOMのURLにアクセス</h4>
          </div>
          <div class="col-12 mt20">
            <p class="font-90">
              ビデオ通話はZoomにて行わせていただきます。<br>
              トレーニング前にアプリをダウンロードし、サインインを完了いただくとスムーズです。
            </p>
          </div>
        </div>

        <div class="row mb30">
          <div class="col-3 col-xs-2 col-sm-2 col-md-1 pr0">
            <img src="<?php echo $static; ?>/reserve/step03.webp" alt="">
          </div>
          <div class="col-9 col-xs-10 col-sm-10 col-md-11">
            <h4 class="mt25">オンラインでトレーニング</h4>
          </div>
          <div class="col-12 mt20">
            <p class="font-90">トレーニングをお楽しみください。</p>
          </div>
        </div>

        <hr>

        <div class="row">
          <div class="col-12">
            <p class="font-90">
              ※お申し込みいただいているコース回数分を店舗もしくはオンラインを選んでご利用できますが、<br>
              店舗の休業期間中はオンラインのみでのご予約受付になります。<br>
              ご予約時に店舗選択で【オンライン】をご選択いただき、予約可能トレーナー・空枠をご確認の上ご予約ください。
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div class="container">
    <div class="row btn-group pt30 pb30">
      <div class="col-6">
        <a class="primary-btn btn-small" href="#personal"><span>オンライン</span>パーソナルレッスン詳細</a>
      </div>
      <div class="col-6">
        <a class="primary-btn btn-small" href="https://hiit.evigym.com/" target="_blank"><span>オンライン</span>グループレッスン詳細</a>
      </div>
    </div>
  </div>

  <section id="Questions">
    <div class="bg311301" align="center">
      <div class="container mt0">
        <div class="row">
          <div class="col-12 tit js-animation mt20">
            <img src="<?php echo $static; ?>/qa-w.webp" alt="Q&A よくあるご質問">
            <h2 class="white">よくある質問</h2>
            <hr class="white">
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-12 col-sm-9 mt40">
          <h4 id="faq01" class="title">初めての方へ</h4>
          <dl class="panel">
            <dt>
              <p>パーソナルトレーニングって、何をするんですか？</p>
            </dt>
            <dd>
              <p>トレーナーとマンツーマンで行うトレーニングです。<br>
                お客様の目的・目標達成のために、完全マンツーマンのサポートで毎回のトレーニングを行ないます。<br>
                お客様ひとり一人のペースに合わせた最適なトレーニング方法で運動を行うことができます。<br>
                映画俳優やアスリートの方々もパーソナルトレーニングを取り入れ、体型維持や身体能力の向上に利用されています。
              </p>
            </dd>

            <dt>
              <p>トレーニング時に必要な持ち物はなんですか？</p>
            </dt>
            <dd>
              <p>動きやすいトレーニングウェア・タオルをお持ちください。<br>
                トレーニングシューズ（無料の靴置き場有り）or裸足はどちらでも構いません。<br>
                お水をウォーターサーバーにて無料で提供しておりますので、マイシェイカーをお持ちいただきますようお願い致します。
              </p>
            </dd>

            <dt>
              <p>みなさん、どのような格好でやってるんですか？</p>
            </dt>
            <dd>
              <p>半そでのTシャツに短パンなどの動きやすいトレーニングウェアの方が多いです。</p>
            </dd>

            <dt>
              <p>荷物を保管したいのですが、ロッカーはありますか？</p>
            </dt>
            <dd>
              <p>ロッカーはありませんが、シューズのみ靴置き場を無料でお貸ししております。<br>
                トレーニング時にトレーナーにお問い合わせください。<br>
                着替えやタオルなどのお預かりはお断りしております。<br>
                靴置き場に置かれたシューズの盗難や破損につきましては、責任を負いかねます。ご了承くださいませ。
              </p>
            </dd>

            <dt>
              <p>汗はかきますか？</p>
            </dt>
            <dd>
              <p>有酸素運動ではないので大汗をかくということはあまりありませんが、<br>
                運動しますので個人差はありますがカラダの奥からじんわり汗をかきます。
              </p>
            </dd>

            <dt>
              <p>どのような方が通っているんですか？</p>
            </dt>
            <dd>
              <p>年齢・性別・運動歴・目的など本当に様々です。<br>
                初めてジムに通う方、フォーム確認のために通う方など、目的に合わせて最適なメニューをご提案しますのでご安心ください。
              </p>
            </dd>

            <dt>
              <p>シャワーや更衣室はありますか？</p>
            </dt>
            <dd>
              <p>更衣室がございます。シャワーはありませんが、ウェットシートやタオルで拭いていただけます。</p>
            </dd>

            <dt>
              <p>無料のトライアルはありますか？</p>
            </dt>
            <dd>
              <p>ございます。初回体験よりオンラインでお申込みください。</p>
            </dd>

            <dt>
              <p>自宅でやる場合騒音が心配です。</p>
            </dt>
            <dd>
              <p>ジャンプなどは致しませんが、騒音が気になる方は事前にご相談ください。<br>
                騒音に配慮したプランをご提案いたします。
              </p>
            </dd>

            <dt>
              <p>こちらの画面をオフにしても参加可能ですか？</p>
            </dt>
            <dd>
              <p>可能ですが、フォームのチェックやアドバイスのために表示いただけると効果が出やすいです。</p>
            </dd>
          </dl>
        </div>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>