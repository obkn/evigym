<?php

/**
 * Template Name: Contact Page
 */
get_header();
$static = get_template_directory_uri() . '/assets/static/img';
?>

<main id="main">
  <div class="mainvisual mv00"></div>

  <div class="container">
    <ul id="breadcrumbs-one">
      <li><a href="/">パーソナルジムeviGym</a></li>
      <li><a href="" class="current">お問い合わせ</a></li>
    </ul>
  </div>

  <section id="Contact">
    <div class="container">
      <div class="row" id="form">
        <div class="col-11 col-lg-9 mt20">
          <a href="https://qururu.jp/recruit/" target="_new" rel="noopener">
            <img src="<?php echo esc_url($static . '/求人バナー.png'); ?>" alt="求人バナー" style="width:103%;">
          </a>
        </div>
      </div>

      <div class="row js-animation">
        <div class="col-12 mt10 js-animation" align="center">
          <p class="mt2 mb20">
            <a href="https://page.line.me/324ryeex" target="_blank" rel="noopener">
              <img src="<?php echo esc_url($static . '/LINE問合せボタン.png'); ?>" alt="LINEでお問い合わせ" style="width:90%;">
            </a>
          </p>
          <h2>お問い合わせ</h2>
          <p class="mt20 txtc">
            サービスについて等、どうぞお気軽にお問い合わせください。<br>
            <span class="red">* 必須項目</span>
          </p>
        </div>
      </div>

      <div class="row" id="form">
        <div class="col-11 col-lg-9">

          <?php echo do_shortcode('[contact-form-7 id="673d89f" title="お問い合わせ"]'); ?>

          <div class="col-12 lh-160 mt10">
            <small>
              ※携帯キャリアのメールアドレスですと設定によりメールが届かない場合がございます。お持ちであれば、Gmail等のアドレスにてご登録頂けますとスムーズです。<br>
              ※受信拒否設定などされている場合は、@evigym.com からのメール受信ができるように設定いただきますようお願いします。
            </small>
          </div>

        </div>
      </div>
    </div>
  </section>

  <hr class="mb60">

  <section id="Questions">
    <div class="container">
      <div class="row">
        <div class="col-12 tit js-animation" align="center">
          <img src="<?php echo esc_url($static . '/faq.webp'); ?>" alt="Q&A よくあるご質問">
          <h2>よくある質問</h2>
          <hr>
        </div>
      </div>

      <div class="row">
        <div class="col-12 col-sm-3 mb30">
          <ul>
            <li><a href="#faq01">初めての方へ</a></li>
            <li><a href="#faq02">入会について</a></li>
            <li><a href="#faq03">ご予約について</a></li>
            <li><a href="#faq04">通い始めたら</a></li>
            <li><a href="#faq05">コースについて</a></li>
            <li><a href="#faq06">退会について</a></li>
            <li><a href="#faq07">休会について</a></li>
            <li><a href="#faq08">復会について</a></li>
            <li><a href="#faq09">ご心配事</a></li>
            <li><a href="#faq10">支払い・請求書など</a></li>
            <li><a href="#faq11">退会について</a></li>
            <li><a href="#faq12">オンライントレーニングについて</a></li>
            <li><a href="#faq13">再入会について</a></li>
          </ul>
        </div>

        <div class="col-12 col-sm-9">
          <h4 id="faq01" class="title">初めての方へ</h4>
          <dl class="panel">
            <dt>パーソナルトレーニングって、何をするんですか？</dt>
            <dd>トレーナーとマンツーマンで行うトレーニングです。<br>
              お客様の目的、目標達成のために完全マンツーマンのサポートでトレーニングを行ないます。<br>
              お客様ひとり一人に合わせた最適な方法で運動を行うことができます。</dd>

            <dt>トレーニング時に必要な持ち物はなんですか？</dt>
            <dd>動きやすいトレーニングウェア・タオルをお持ちください。<br>
              シューズ（無料の靴置き場有）または裸足でもOKです。<br>
              初回はミネラルウォーター500ml（常温or冷）を無料でご用意しております。</dd>

            <dt>みなさん、どのような格好でやってるんですか？</dt>
            <dd>半袖Tシャツに短パンなどの動きやすいウェアの方が多いです。</dd>

            <dt>荷物を保管したいのですが、ロッカーはありますか？</dt>
            <dd>ロッカーはありませんが、シューズのみ無料でお預かりしております。<br>
              着替えやタオルの預かりはお断りしております。盗難・破損については責任を負いかねます。</dd>

            <dt>汗はかきますか？</dt>
            <dd>有酸素運動ではないため大汗はかきませんが、体の奥からじんわり汗をかきます。</dd>

            <dt>どのような方が通っているんですか？</dt>
            <dd>年齢や目的は様々です。運動初心者の方からフォーム確認目的の方まで幅広く通われています。</dd>

            <dt>シャワーや更衣室はありますか？</dt>
            <dd>更衣室がございます。シャワーはありませんが、ウェットシートをご用意しております。</dd>
          </dl>

          <h4 id="faq02" class="title">入会について</h4>
          <dl class="panel">
            <dt>初回体験をしたあとは、入会しなければなりませんか？</dt>
            <dd>いえ、無理な勧誘はございません。体験後にご納得いただけた場合のみご入会ください。</dd>

            <dt>入会金はありますか？</dt>
            <dd>入会金は不要です。料金は定期コースまたは都度払いからお選びいただけます。<br>
              <a href="/plan/" target="_blank" rel="noopener">詳しくはこちら&gt;&gt;</a>
            </dd>

            <dt>入会までの流れを知りたいです。</dt>
            <dd>初回体験後、ご納得いただけましたらその場でご入会、または後日フォームよりお申し込みいただけます。<br>
              <a href="/contact#Contact" target="_blank" rel="noopener">お問い合わせフォームはこちら&gt;&gt;</a>
            </dd>

            <dt>繰越しサービスについて</dt>
            <dd>余ったセッションは無期限・無制限で繰越可能です。<br>
              <img src="<?php echo esc_url($static . '/img/plan-21img01.png'); ?>" alt="" width="599" height="396"><br>
              <a href="/terms/">※会員の権利についてはこちら</a><br>
              <a href="#faq07">※休会についてはこちら</a>
            </dd>
          </dl>

          <h4 id="faq03" class="title">ご予約について</h4>
          <dl class="panel">
            <dt>予約した時間の何分前にジムに行けばいいですか？</dt>
            <dd>ご予約時間の10分前からご入店いただけます。<br><strong>例）11:00予約 → 10:50入店可</strong></dd>

            <dt>当日の予約は大丈夫ですか？</dt>
            <dd>当日のご予約も大歓迎です。各店舗にお電話またはメールでご連絡ください。<br>
              <a href="/stores/" target="_blank" rel="noopener">店舗一覧はこちら&gt;&gt;</a><br>
              メール：<a href="mailto:evigym@evigym.com;">evigym@evigym.com</a>
            </dd>

            <dt>キャンセルや予約の変更はできますか？</dt>
            <dd>キャンセルは予約時間の24時間前まで可能です。それ以降はチケット消化扱いとなります。<br>
              <a href="/stores/" target="_blank" rel="noopener">店舗一覧はこちら&gt;&gt;</a>
            </dd>
          </dl>

          <h4 id="faq04" class="title">通い始めたら</h4>
          <dl class="panel">
            <dt>トレーニングに通わない日は、自宅でトレーニングをするのでしょうか。</dt>
            <dd>強制ではありませんが、効果を感じたい方にはご自宅トレーニングをおすすめしています。</dd>

            <dt>月に何回以上通えば効果がありますか？</dt>
            <dd>理想は週2回ですが、週1回でも十分効果を実感できます。</dd>
          </dl>

          <h4 id="faq05" class="title">コースについて</h4>
          <dl class="panel">
            <dt>お試し初回体験とは何ですか？</dt>
            <dd>エビジムをまだご利用したことがない方が、お試しでパーソナルトレーニングを体験できるメニューです。<br>
              1回のスポット利用11,000円（税込）のところ5,500円（税込）で体験可能です。</dd>

            <dt>定期コースとは何ですか？</dt>
            <dd>毎月1回・2回・4回・6回・8回・12回からお選びいただけます。<br>
              継続的な運動をご希望の方におすすめです。<br>
              ※退会・休会のご連絡があるまで継続利用となります。<br>
              <a href="#faq06">詳しくはこちら&gt;&gt;</a>
            </dd>

            <dt>スポット利用とは何ですか？</dt>
            <dd>定期的に通うのが難しい方へおすすめの1回利用メニューです。入会金も不要で、好きなタイミングでご利用いただけます。</dd>

            <dt>再入会割引きとは何ですか？</dt>
            <dd>退会後4カ月以上経過し再入会される場合、初月20％OFFでご利用いただけます。<br>
              備考欄に「再入会」とご記載ください。<br>
              <strong>入会初月 20％OFF（※備考欄に「再入会」と記載）</strong>
            </dd>

            <dt>コース変更をしたい場合はどうすればよいですか？</dt>
            <dd>お問い合わせフォーム・LINE・店頭でご申請ください。<br>
              定期決済発生の前々月20日までにお手続きお願いします。</dd>
          </dl>

          <h4 id="faq06" class="title">退会について</h4>
          <dl class="panel">
            <dt>退会したい場合はどうしたらいいですか？</dt>
            <dd>お問い合わせフォーム、LINE、店頭でご申請ください。<br>
              定期決済の前々月20日までにお申し出をお願いいたします。<br><br>
              【ご注意とお願い】<br>
              ・退会時、残っているセッション回数は無効となります。<br>
              ・残回数の払い戻しはお受けできません。<br>
              ・退会手続き後は、会員権利（カルテ・靴預かり・動画閲覧等）を喪失します。<br>
              再度ご利用の際は再入会割をご利用ください。</dd>
          </dl>

          <h4 id="faq07" class="title">休会について</h4>
          <dl class="panel">
            <dt>休会したい場合はどうしたらいいですか？</dt>
            <dd>お問い合わせフォーム、LINE、店頭でご申請ください。<br>
              定期決済の前々月20日までにお申し出をお願いいたします。<br><br>
              【制度の概要】<br>
              ・1カ月目：無料<br>
              ・2カ月目以降：月1,100円（税込）のデータ保管料<br><br>
              【ご注意とお願い】<br>
              ・休会期間中は残回数の保持のみ可能です。<br>
              ・2カ月目以降も維持費1,100円/月をお支払いいただくことで権利を保持できます。<br>
              ・維持費が未納の場合は自動退会となります。</dd>
          </dl>

          <h4 id="faq08" class="title">復会について</h4>
          <dl class="panel">
            <dt>復会したい場合はどうしたらいいですか？</dt>
            <dd>休会期間中にトレーニングを再開される場合は、<br>
              メール：<a href="mailto:evigym@evigym.com;">evigym@evigym.com</a><br>
              または<a href="/contact#Contact" target="_blank" rel="noopener">お問い合わせフォーム</a>よりご連絡ください。<br>
              復会当月より残回数と定期プランのご利用が可能です。</dd>
          </dl>

          <h4 id="faq09" class="title">ご心配事</h4>
          <dl class="panel">
            <dt>あまり運動をした事がないのですが、大丈夫ですか？</dt>
            <dd>はい、大丈夫です！お客様一人ひとりの状態・目的に合わせたプログラムを組みます。</dd>

            <dt>高齢なのですが、今から始めても大丈夫ですか？</dt>
            <dd>もちろんです。健康維持や転倒予防にも効果的です。無理のないペースでご案内します。</dd>

            <dt>女性でもトレーニングの負荷は大丈夫でしょうか？</dt>
            <dd>もちろんです。運動経験のない女性でも安心して取り組めます。<br>
              成長ホルモンの分泌によるアンチエイジング効果も期待できます。</dd>

            <dt>妊娠中や産後でもトレーニングできますか？</dt>
            <dd>妊娠中の方は安全のためお断りしています。<br>
              産後の方は医師の診断書のもとでご相談に応じます。</dd>

            <dt>怪我や骨を痛めることはありますか？</dt>
            <dd>事例はありませんが、<a href="https://www.sportsanzen.org/hoken/kubun/kubun_i.html" target="_blank" rel="noopener"><u>公益財団法人スポーツ安全協会</u></a>の保険にも加入可能です。</dd>
          </dl>

          <h4 id="faq10" class="title">支払い・請求書など</h4>
          <dl class="panel">
            <dt>お支払いは現金でも対応いただけますか？</dt>
            <dd>カード決済（VISA・Master・Amex等）または電子決済（PayPay・LINE Pay）が利用可能です。<br>
              現金希望の方は<a href="/contact#Contact">お問い合わせ</a>よりご確認ください。</dd>

            <dt>領収書の発行はできますか？</dt>
            <dd>はい。ご要望いただければ発行いたします。</dd>

            <dt>経費で処理したい場合、請求書や領収書の発行は可能ですか？</dt>
            <dd>はい。会社名宛の領収書等を発行いたします。<br>
              フィットネス手当等のための月会費領収書も対応可能です。</dd>
          </dl>

          <h4 id="faq11" class="title">退会について</h4>
          <dl class="panel">
            <dt>退会について</dt>
            <dd>毎月20日のお引き落とし前までに、メール・LINE・お問い合わせフォームまたは店舗へご連絡ください。</dd>
          </dl>

          <h4 id="faq12" class="title">オンライントレーニングについて</h4>
          <dl class="panel">
            <dt>マシンやフリーウェイトを使わないトレーニングで効果がありますか？</dt>
            <dd>もちろんです。自重でも十分効果的なトレーニングを提供しています。</dd>

            <dt>食事や栄養指導はありますか？</dt>
            <dd>トレーニング前後の時間で簡単なアドバイスを行っています。</dd>

            <dt>自宅でやる場合、騒音が心配です。</dt>
            <dd>ジャンプなどの動作はありません。静音を意識したプランをご提案します。</dd>

            <dt>カメラをオフにしても参加できますか？</dt>
            <dd>可能ですが、フォーム確認のためオンを推奨しています。</dd>
          </dl>

          <h4 id="faq13" class="title">再入会について</h4>
          <dl class="panel">
            <dt>再入会とは何ですか？</dt>
            <dd>退会後4カ月以上経過し再入会される場合、初月20％OFFでご利用いただけます。<br>
              備考欄に「再入会」とご記載ください。<br>
              <strong>入会初月 20％OFF（※備考欄に「再入会」と記載）</strong>
            </dd>
          </dl>
        </div>
      </div>
    </div>
  </section>

</main>
<?php get_footer(); ?>