<?php

/**
 * Template Name: Reserve
 */
get_header();
$static = get_template_directory_uri() . '/assets/static/img';
?>

<main id="main">
  <div class="mainvisual mv06"></div>

  <div class="container">
    <ul id="breadcrumbs-one">
      <li><a href="/">パーソナルジムeviGym</a></li>
      <li><a href="" class="current">ご予約方法</a></li>
    </ul>
  </div>

  <section id="Reserve">
    <div class="container">
      <div class="row">
        <div class="col-12 tit js-animation" align="center">
          <img src="<?php echo esc_url($static . '/reserve.webp'); ?>" alt="Reserve">
          <h2>ご予約について</h2>
          <hr>
        </div>
      </div>

      <div class="row">
        <div class="col-12">
          <dl class="panel">
            <dt>
              <h3><i class="icon-first"></i>初回体験の方へ</h3>
            </dt>
            <dd class="beginner">
              <div class="row">
                <div class="col-12 mt10 mb30" align="center">
                  <h4>＼初回体験の流れを動画で確認／</h4>
                  <div class="movie-wrap">
                    <iframe width="100%" height="420" src="https://www.youtube.com/embed/E0kfdVYAtHk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-12 col-xs-11">
                  <div class="row mb30">
                    <div class="col-3 col-xs-2 col-sm-2 col-md-1 pr0">
                      <img src="<?php echo esc_url($static . '/reserve/step01.webp'); ?>" alt="">
                    </div>
                    <div class="col-9 col-xs-10 col-sm-10 col-md-11">
                      <h4>eviGymの会員登録</h4>
                      <p class="font-90">ウェブサイトもしくはLINEにて会員登録を行ってください。</p>
                    </div>
                  </div>

                  <div class="row" align="center">
                    <div class="col-6 col-md-5">
                      LINEで友達登録
                      <hr class="m10">
                      <small>LINEで友達登録を実施</small><br>
                      <a href="https://lin.ee/o8z7iZZ" target="_blank" class="sp-none"><img src="<?php echo esc_url($static . '/reserve/step01-line.webp'); ?>" class="icon-line" alt="LINE"></a>
                      <a href="https://lin.ee/o8z7iZZ" target="_blank" class="pc-none"><img src="<?php echo esc_url($static . '/reserve/step01-line.webp'); ?>" class="icon-line" alt="LINE"></a>
                    </div>
                    <div class="col-6 col-md-5">
                      WEBから登録
                      <hr class="m10">
                      <small>ウェブサイトで会員登録</small><br>
                      <a href="/register" target="_blank"><img src="<?php echo esc_url($static . '/reserve/step01-logo.webp'); ?>" class="icon-evigym" alt="eviGym"></a>
                    </div>
                  </div>
                  <hr>

                  <div class="row">
                    <div class="col-3 col-xs-2 col-sm-2 col-md-1 pr0">
                      <img src="<?php echo esc_url($static . '/reserve/step02.webp'); ?>" alt="">
                    </div>
                    <div class="col-9 col-xs-10 col-sm-10 col-md-11">
                      <h4>日時＆店舗を選択</h4>
                      <p class="font-90">お好きな日時と店舗（実店舗 or オンライン）を選んで仮予約してください。</p>
                    </div>
                  </div>

                  <div class="row mt20">
                    <div class="col-11 col-sm-6 col-md-4">
                      <img src="<?php echo esc_url($static . '/reserve/r-flow01.webp'); ?>" alt="">
                    </div>
                    <div class="col-11 col-sm-6 mt10">
                      <h4>予約希望の日時を選択</h4>
                      <p><a href="/booking/new" target="_blank"><?php echo esc_html(home_url('/booking/new')); ?></a><br><br>
                        ご希望のA)店舗（実店舗 or オンライン）、B)トレーナー(任意)、E)日時を選び、「この内容で予約を進める」ボタンをクリック。<br><br>
                        A) 店舗選択（実店舗 or オンライン）<br>
                        B) トレーナー選択<br>
                        C) カレンダー<br>
                        D）日付移動<br>
                        E）希望日選択<br><br>
                        店舗一覧は <a href="/stores">こちら</a>
                      </p>
                    </div>
                  </div>

                  <hr>

                  <div class="row">
                    <div class="col-3 col-xs-2 col-sm-2 col-md-1 pr0">
                      <img src="<?php echo esc_url($static . '/reserve/step03.webp'); ?>" alt="">
                    </div>
                    <div class="col-9 col-xs-10 col-sm-10 col-md-11">
                      <h4>初回料金の決済</h4>
                      <p class="font-90">クレジットカードで初回の決済を行ってください。</p>
                    </div>
                    <div class="col-12 mt10">
                      <p>予約確定後にSQUAREという決済システムよりメールにて請求が送られます。メールの手順に沿ってクレジットカードで決済をしてください。</p>
                    </div>
                  </div>

                  <hr>

                  <div class="row">
                    <div class="col-3 col-xs-2 col-sm-2 col-md-1 pr0">
                      <img src="<?php echo esc_url($static . '/reserve/step04.webp'); ?>" alt="">
                    </div>
                    <div class="col-9 col-xs-10 col-sm-10 col-md-11">
                      <h4>初回体験</h4>
                      <p class="font-90">ご来店、もしくはオンラインでお試しトレーニング</p>
                    </div>
                  </div>

                  <hr>
                </div>
              </div>
            </dd>

            <dt>
              <h3><i class="icon-member"></i>定期コース入会済みの方へ</h3>
            </dt>
            <dd>
              <p><a href="/mypage" target="_blank">マイページ</a>へログインしていただきトレーニング予約ページよりご希望の店舗、日時を選択し予約申請をお願いします。<br>
                ※先に空き状況をご確認したい場合は<a href="/booking/new" target="_blank">こちら</a>からでもご確認いただけます。<br>
                ※申請時点では予約確定ではございません。予約確定のメールをもって確定となりますのでご留意ください。<br><br>
                疑問・質問は、<a href="/contact#Questions">よくある質問</a>にて確認いただけます。
              </p>

              <?php echo do_shortcode('[contact-form-7 id="795987f" title="コース変更、休会、退会申請フォーム" html_id="form"]'); ?>

              <div class="col-12 lh-160 mt20">
                <small>※携帯キャリアのメールアドレスですと設定によりメールが届かない場合がございます。
                  お持ちであれば、Gmail等のアドレスにてご登録頂けますとスムーズです。<br>
                  ※受信拒否設定などされている場合は、@evigym.com からのメール受信ができるように設定いただきますようお願いします。</small>
              </div>
            </dd>

            <dt>
              <h3><i class="icon-coupon"></i>クーポンサイトご利用の方へ</h3>
            </dt>
            <dd>
              <p>会員登録時に「登録のきっかけ」の項目でクーポンを選択、必要事項をご記入ください。<br>
                上記のご希望の店舗をクリックいただき、トレーニング日時を選択、いただき予約申請をお願いします。<br>
                ※申請時点では予約確定ではございません。予約確定のメールをもって確定となりますのでご留意ください。<br>
                ※クーポンサイトご利用の方は、都度（1回毎）でのご予約をお願いしております。<br><br>
                疑問・質問は、<a href="/contact#Questions">よくある質問</a>にて確認いただけます。
              </p>
            </dd>

            <dt>
              <h3><i class="icon-revival"></i>以前エビジムをご利用されていたお客様へ</h3>
            </dt>
            <dd>
              <p><a href="/contact" target="_blank">お問い合わせフォーム</a>より「おかえり割引き」または「再入会の方」をお選びいただき、ご希望のコースを記載の上、送信ください。<br>
                担当者より折り返しご連絡いたします。<br><br>
                疑問・質問は、<a href="/contact#Questions">よくある質問</a>にて確認いただけます。
              </p>
            </dd>
          </dl>
        </div>
      </div>
    </div>
  </section>

  <section id="Flow">
    <div class="container" id="flow">
      <div class="row">
        <div class="col-12 tit js-animation" align="center">
          <img src="<?php echo esc_url($static . '/flow.webp'); ?>" alt="Flow">
          <h2>ご利用の流れ</h2>
          <hr>
        </div>
      </div>

      <div class="row">
        <div class="col-12">
          <dl class="panel">
            <dt>
              <h3><i class="icon-evigym"></i>実店舗の場合</h3>
            </dt>
            <dd>
              <div class="container">
                <div class="row">
                  <div class="col-12 col-sm-4 col-md-4 col-lg-4">
                    <img src="<?php echo esc_url($static . '/flow/no03.webp'); ?>" alt="">
                  </div>
                  <div class="col-12 col-sm-8 col-md-8 col-lg-8">
                    <h3>1：予約当日</h3>
                    <p>予約した店舗へご来店ください。</p>
                    <p class="bg-color mt10 mb15">動きやすい服装＆タオルをお持ちください。<br>
                      ※シャワーはございません。ボディシート、制汗スプレーをご準備しております。<br>
                      トレーニングシューズ（無料の靴置き場有り）or裸足、どちらでも構いません。<br>
                      ミネラルウォーター500ml（常温or冷）を無料でご用意しております。
                    </p>
                  </div>
                </div>

                <div class="txtc m20 font-160">▼</div>

                <div class="row">
                  <div class="col-12 col-sm-4 col-md-4 col-lg-4">
                    <img src="<?php echo esc_url($static . '/flow/no04.webp'); ?>" alt="">
                  </div>
                  <div class="col-12 col-sm-8 col-md-8 col-lg-8">
                    <h3>2：受付</h3>
                    <p>店舗に着きましたら、予約したお名前をお伝えください。<br>
                      10分前から入室できます。遅刻の場合は時間が短くなりますのでご注意ください。
                    </p>
                  </div>
                </div>

                <div class="txtc m20 font-160">▼</div>

                <div class="row">
                  <div class="col-12 col-sm-4 col-md-4 col-lg-4">
                    <img src="<?php echo esc_url($static . '/flow/no05.webp'); ?>" alt="">
                  </div>
                  <div class="col-12 col-sm-8 col-md-8 col-lg-8">
                    <h3>3：カウンセリング</h3>
                    <p>トレーニングの前にカウンセリングを行います。<br>
                      自分の気になる部位や、重点的にトレーニングしたいところをトレーナーにご相談ください。
                    </p>
                  </div>
                </div>

                <div class="txtc m20 font-160">▼</div>

                <div class="row">
                  <div class="col-12 col-sm-4 col-md-4 col-lg-4">
                    <img src="<?php echo esc_url($static . '/flow/no06.webp'); ?>" alt="">
                  </div>
                  <div class="col-12 col-sm-8 col-md-8 col-lg-8">
                    <h3>4：トレーニング</h3>
                    <p>あなたに合わせたオーダーメイドトレーニングをお楽しみください！</p>
                    <p class="border mt10 mb15 p12">
                      相談例 1：デスクワークで肩こりがひどいので改善したい。<br>
                      相談例 2：夏になり、海やプールでの水着を着る時に自信を持てる体にしたい。<br>
                      相談例 3：年齢的に皮下脂肪が気になるので引き締めたい。
                    </p>
                  </div>
                </div>

                <div class="txtc m20 font-160">▼</div>

                <div class="row">
                  <div class="col-12 col-sm-4 col-md-4 col-lg-4">
                    <img src="<?php echo esc_url($static . '/flow/no07.webp'); ?>" alt="">
                  </div>
                  <div class="col-12 col-sm-8 col-md-8 col-lg-8">
                    <h3>5：今後の方針の確認</h3>
                    <p>プログラムの感想（不安な点や良かった点）をお伺いし、今後の方針や日常生活でのケア方法などをアドバイスいたします。</p>
                    <p class="bg-color mt10">「トレーニング時の、怪我が心配」という方は、
                      <a href="https://www.sportsanzen.org/hoken/kubun/kubun_i.html" target="_blank" rel="noopener">公益財団法人スポーツ安全協会</a>の保険を任意にて活用いただけます。（任意のため、ご自身でご加入いただけますようお願いいたします。）
                    </p>
                  </div>
                </div>
              </div>

              <section class="Note">
                <div class="container">
                  <div class="row mt60">
                    <div class="col-12 tit" align="center">
                      <h2>注意事項</h2>
                      <hr>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-12 col-md-12">
                      <h3>ご予約</h3>
                      <ul class="lh-180 mb30">
                        <li>・ご予約は承認制になりますので、予約確定メールをもってご予約が確定となります。<br>
                          　※予約申請の段階では、予約は確定しておりません。予約確定のメールをもって確定となりますのでご留意ください。</li>
                        <li>・当日のご予約をご希望の方は、各店舗へお電話にてお問い合わせください。<br>
                          　<small>※トレーニング中は、お電話に出られないことがありますので予めご了承ください。</small></li>
                        <li>・お支払いはクレジットカードとなります。<small>(現金をご希望される場合お申し付けください。)</small></li>
                        <li>・クレジットカードでお支払いの場合、ご請求のメールをお送りいたしますのでご対応お願いします。<br>
                          　お支払いは来店日までにご対応ください。お支払いが遅れている場合、お電話にて確認する場合があります。</li>
                      </ul>

                      <h3>持ち物</h3>
                      <p>動きやすい服装＆タオルをお持ちください。<br>
                        トレーニングシューズ（無料で靴置き場有り）or裸足、どちらでも構いません。<br>
                        ミネラルウォーター500ml（常温or冷）を無料でご用意しております。<br>
                        ※シャワーはございません。ボディシート、制汗スプレー等ご準備しております。
                      </p>
                      <br><br>

                      <h3>キャンセル・ご予約変更ポリシー</h3>
                      <p><span class="red">キャンセル・ご予約変更期限は<b>24時間前</b>までです。</span><br>
                        24時間前のキャンセル・変更は予約システムよりご対応お願いいたします。<br>
                        24時間を切ってのキャンセル・変更は1回分チケット消化（ご返金不可）となります。
                        その際、<a href="/contact">お問い合わせフォーム</a>より「24時間を切ってのご予約キャンセル」をお選びいただき、項目に記載の上、送信ください。ご協力お願いします。<br>
                      </p>
                      <br><br>

                      <h3>開場時間</h3>
                      <p>10分前からの入室が可能です。<br>
                        ※遅刻の場合はトレーニング時間が少なくなってしまいますのでお早めにお越しください。</p>
                    </div>
                  </div>
                </div>
              </section>
            </dd>
          </dl>
        </div>
      </div>

      <div class="row">
        <div class="col-12">
          <dl class="panel">
            <dt>
              <h3><i class="icon-online"></i>オンラインの場合</h3>
            </dt>
            <dd>
              <div class="container">
                <div class="row">
                  <div class="col-12 col-sm-4 col-md-4 col-lg-4">
                    <img src="<?php echo esc_url($static . '/reserve/online-01.webp'); ?>" alt="">
                  </div>
                  <div class="col-12 col-sm-8 col-md-8 col-lg-8">
                    <h3>1：予約当日</h3>
                    <p>トレーニングの準備をしてお待ちください。</p>
                    <p class="bg-color mt10 mb15">動きやすい服装でご参加ください。<br>
                      また安定したインターネット接続環境でビデオ通話可能な携帯電話やタブレットもしくはパソコンをご利用ください。<br>
                      軽い運動が可能なスペースの確保してください。(※目安畳1.5畳分程度)<br>
                      水分補給も大切ですので、トレーニング中のお飲み物などご用意しておくことをおすすめいたします。
                    </p>
                  </div>
                </div>

                <div class="txtc m20 font-160">▼</div>

                <div class="row">
                  <div class="col-12 col-sm-4 col-md-4 col-lg-4">
                    <img src="<?php echo esc_url($static . '/reserve/online-02.webp'); ?>" alt="">
                  </div>
                  <div class="col-12 col-sm-8 col-md-8 col-lg-8">
                    <h3>2：受付</h3>
                    <p>お時間になりましたらご予約確定メールに記載のあるビデオ通話へのアクセス用URLへアクセスしてください。</p>
                    <p class="bg-color mt10 mb15">お時間になりましたらご予約確定メールに記載のあるビデオ通話へのアクセス用URLへアクセスください。<br>
                      お持ちのトレーニング器具の活用方法などのアドバイスも可能ですので、ご希望の場合はトレーニング時にトレーナーにお伝えください。
                    </p>
                  </div>
                </div>

                <div class="txtc m20 font-160">▼</div>

                <div class="row">
                  <div class="col-12 col-sm-4 col-md-4 col-lg-4">
                    <img src="<?php echo esc_url($static . '/reserve/online-03.webp'); ?>" alt="">
                  </div>
                  <div class="col-12 col-sm-8 col-md-8 col-lg-8">
                    <h3>3：カウンセリング</h3>
                    <p>トレーニングの前にカウンセリングを行います。<br>
                      自分の気になる部位や、重点的にトレーニングしたいところをトレーナーにご相談ください。
                    </p>
                  </div>
                </div>

                <div class="txtc m20 font-160">▼</div>

                <div class="row">
                  <div class="col-12 col-sm-4 col-md-4 col-lg-4">
                    <img src="<?php echo esc_url($static . '/reserve/online-04.webp'); ?>" alt="">
                  </div>
                  <div class="col-12 col-sm-8 col-md-8 col-lg-8">
                    <h3>4：トレーニング</h3>
                    <p>あなたに合わせたオーダーメイドトレーニングをお楽しみください！</p>
                    <p class="border mt10 mb15 p12">
                      相談例 1：デスクワークで肩こりがひどいので改善したい。<br>
                      相談例 2：夏になり、海やプールでの水着を着る時に自信を持てる体にしたい。<br>
                      相談例 3：年齢的に皮下脂肪が気になるので引き締めたい。
                    </p>
                  </div>
                </div>

                <div class="txtc m20 font-160">▼</div>

                <div class="row">
                  <div class="col-12 col-sm-4 col-md-4 col-lg-4">
                    <img src="<?php echo esc_url($static . '/reserve/online-05.webp'); ?>" alt="">
                  </div>
                  <div class="col-12 col-sm-8 col-md-8 col-lg-8">
                    <h3>5：今後の方針の確認</h3>
                    <p>プログラムの感想（不安な点や良かった点）をお伺いし、今後の方針や日常生活でのケア方法などをアドバイスいたします。</p>
                    <p class="bg-color mt10">「トレーニング時の、怪我が心配」という方は、
                      <a href="https://www.sportsanzen.org/hoken/kubun/kubun_i.html" target="_blank" rel="noopener">公益財団法人スポーツ安全協会</a>の保険を任意にて活用いただけます。（任意のため、ご自身でご加入いただけますようお願いいたします。）
                    </p>
                  </div>
                </div>
              </div>

              <section class="Note">
                <div class="container">
                  <div class="row mt60">
                    <div class="col-12 tit" align="center">
                      <h2>注意事項</h2>
                      <hr>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-12 col-md-12">
                      <h3>ご予約</h3>
                      <ul class="lh-180 mb30">
                        <li>・ご予約は承認制になりますので、予約確定メールをもってご予約が確定となります。</li>
                        　※予約申請の段階では、予約は確定しておりません。予約確定のメールをもって確定となりますのでご留意ください。</li>
                        <li>・当日のご予約をご希望の方は、各店舗へお電話にてお問い合わせください。</li>
                        　<small>※トレーニング中は、お電話に出られないことがありますので予めご了承ください。</small></li>
                        <li>・お支払いはクレジットカードとなります。(現金をご希望される場合お申し付けください。)</li>
                        <li>・クレジットカードでお支払いの場合、ご請求のメールをお送りいたしますのでご対応お願いします。</li>
                        　お支払いは次回のレッスンまでにご対応ください。お支払いが遅れている場合、お電話にて確認する場合があります。</li>
                      </ul>

                      <h3>ご用意するもの</h3>
                      <p>動きやすい服装＆タオルをご用意ください。<br>
                        トレーニングシューズor裸足、どちらでも構いません。
                      </p>
                      <br><br>

                      <h3>キャンセル・ご予約変更ポリシー</h3>
                      <p><span class="red">キャンセル・ご予約変更期限は<b>24時間前</b>までです。</span><br>
                        24時間前のキャンセル・変更は予約システムよりご対応お願いいたします。<br>
                        24時間を切ってのキャンセル・変更は1回分チケット消化（ご返金不可）となります。
                        その際、<a href="/contact">お問い合わせフォーム</a>より「24時間を切ってのご予約キャンセル」をお選びいただき、項目に記載の上、送信ください。ご協力お願いします。<br>
                      </p>
                      <br><br>

                      <h3>開場時間</h3>
                      <p>10分前からの入室が可能です。<br>
                        ※遅刻の場合はトレーニング時間が少なくなってしまいますのでお早めにご準備ください。</p>
                    </div>
                  </div>
                </div>
              </section>
            </dd>
          </dl>
        </div>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>