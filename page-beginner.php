<?php

/**
 * Template Name: Beginner Page
 */
get_header();
$static = get_template_directory_uri() . '/assets/static/img';
?>

<main id="main">
  <div class="mainvisual mv06"></div>

  <div class="container">
    <ul id="breadcrumbs-one">
      <li><a href="/">パーソナルジムeviGym</a></li>
      <li><a href="/reserve">ご予約方法</a></li>
      <li><a href="" class="current">初回体験の方へ</a></li>
    </ul>
  </div>

  <section id="Reserve" class="mb-2">
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
            <dd class="beginner" style="padding-bottom:0;margin-bottom:0;">
              <div class="row">
                <div class="col-12 mt10 mb30">
                  <img src="<?php echo esc_url($static . '/reserve/初回体験キャンペーンバナー2025.jpg'); ?>" alt="" class="d-block w-100 mb-4" />
                  <p>利用者14万人突破記念で初回体験トレーニング50分を0円キャンペーンを実施中です！</p>
                  <p class="mt-3 small">※入会されず、体験トレーニングのみの場合は5,500円頂戴します。</p>
                </div>
              </div>

              <div class="row">
                <div class="col-12 mt10 mb30" align="center">
                  <h4>＼初回体験の流れを動画で確認／</h4>
                  <div class="movie-wrap">
                    <iframe width="100%" height="420" src="https://www.youtube.com/embed/jvx8jjUFSfs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard write; encrypted media; gyroscope; picture in picture" allowfullscreen></iframe>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-12 col-xs-11">
                  <div class="row mt10" align="center">
                    <?php get_template_part('template-parts/reserve-register-btns'); ?>
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
                      <h3>持ち物</h3>
                      <p>
                        動きやすい服装＆タオルをお持ちください。<br>
                        トレーニングシューズ（無料で靴置き場有り）or裸足、どちらでも構いません。<br>
                        ミネラルウォーター500ml（常温or冷）を無料でご用意しております。<br>
                        ※シャワーはございません。ボディシート、制汗スプレー等ご準備しております。
                      </p>
                      <br><br>

                      <h3>キャンセル・ご予約変更ポリシー</h3>
                      <p>
                        <span class="red">キャンセル・ご予約変更期限は<b>24時間前</b>までです。</span><br>
                        24時間前のキャンセル・変更は予約システムよりご対応お願いいたします。<br>
                        24時間を切ってのキャンセル・変更は1回分チケット消化（ご返金不可）となります。<br>
                        その際、<a href="/contact/">お問い合わせフォーム</a>より「24時間を切ってのご予約キャンセル」をお選びいただき、項目に記載の上、送信ください。ご協力お願いします。<br>
                      </p>
                      <br><br>

                      <h3>開場時間</h3>
                      <p>
                        10分前からの入室が可能です。<br>
                        ※遅刻の場合はトレーニング時間が少なくなってしまいますのでお早めにお越しください。
                      </p>
                    </div>
                  </div>
                </div>
              </section>
            </dd>
          </dl>
        </div>
      </div>

      <div class="row">
        <iframe id="hacomono-widget-w0001" src="https://enjoy.evigym.com/widgets/1?isFilterableByCategory=true&isShowStudioInfo=true"></iframe>
        <script src="https://enjoy.evigym.com/js/widget.js"></script>
      </div>
      <div class="row">
        <a href="https://page.line.me/324ryeex?openQrModal=true">
          <img class="btn-shadow" src="<?php echo esc_url($static . '/btn-line.svg'); ?>" alt="LINEで予約する">
        </a>
      </div>
    </div>
  </section>

  <section id="Flow" class="mb-4">
    <div class="container" id="flow">
      <div class="row">
        <div class="col-12 tit js-animation" align="center">
          <img src="<?php echo esc_url($static . '/flow.webp'); ?>" alt="Flow">
          <h2>初回体験の流れ</h2>
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
                    <img src="<?php echo esc_url($static . '/flow/no03.webp'); ?>">
                  </div>
                  <div class="col-12 col-sm-8 col-md-8 col-lg-8">
                    <h3>1：予約当日</h3>
                    <p>予約した店舗へご来店ください。</p>
                    <p class="bg-color mt10 mb15">
                      動きやすい服装＆タオルをお持ちください。<br>
                      ※シャワーはございません。ボディシート、制汗スプレーをご準備しております。<br>
                      トレーニングシューズ（無料の靴置き場有り）or裸足、どちらでも構いません。<br>
                      ミネラルウォーター500ml（常温or冷）を無料でご用意しております。
                    </p>
                  </div>
                </div>

                <div class="txtc m20 font-160">▼</div>

                <div class="row">
                  <div class="col-12 col-sm-4 col-md-4 col-lg-4">
                    <img src="<?php echo esc_url($static . '/flow/no04.webp'); ?>">
                  </div>
                  <div class="col-12 col-sm-8 col-md-8 col-lg-8">
                    <h3>2：受付</h3>
                    <p>店舗に着きましたら、予約したお名前をお伝えください。<br>10分前から入室できます。遅刻の場合は時間が短くなりますのでご注意ください。</p>
                  </div>
                </div>

                <div class="txtc m20 font-160">▼</div>

                <div class="row">
                  <div class="col-12 col-sm-4 col-md-4 col-lg-4">
                    <img src="<?php echo esc_url($static . '/flow/no05.webp'); ?>">
                  </div>
                  <div class="col-12 col-sm-8 col-md-8 col-lg-8">
                    <h3>3：カウンセリング</h3>
                    <p>トレーニングの前にカウンセリングを行います。<br>自分の気になる部位や、重点的にトレーニングしたいところをトレーナーにご相談ください。</p>
                  </div>
                </div>

                <div class="txtc m20 font-160">▼</div>

                <div class="row">
                  <div class="col-12 col-sm-4 col-md-4 col-lg-4">
                    <img src="<?php echo esc_url($static . '/flow/no06.webp'); ?>">
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
                    <img src="<?php echo esc_url($static . '/flow/no07.webp'); ?>">
                  </div>
                  <div class="col-12 col-sm-8 col-md-8 col-lg-8">
                    <h3>5：今後の方針の確認</h3>
                    <p>プログラムの感想（不安な点や良かった点）をお伺いし、今後の方針や日常生活でのケア方法などをアドバイスいたします。</p>
                    <p class="bg-color mt10">
                      「トレーニング時の、怪我が心配」という方は、
                      <a href="https://www.sportsanzen.org/hoken/kubun/kubun_i.html" target="_blank">公益財団法人スポーツ安全協会</a>の保険を任意にて活用いただけます。（任意のため、ご自身でご加入いただけますようお願いいたします。）
                    </p>
                  </div>
                </div>

                <div class="row mt10" align="center">
                  <?php get_template_part('template-parts/reserve-register-btns'); ?>
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
                      <h3>ご用意するもの</h3>
                      <p>動きやすい服装＆タオルをご用意ください。<br>トレーニングシューズor裸足、どちらでも構いません。</p>
                      <br><br>

                      <h3>キャンセル・ご予約変更ポリシー</h3>
                      <p>
                        <span class="red">キャンセル・ご予約変更期限は<b>24時間前</b>までです。</span><br>
                        24時間前のキャンセル・変更は予約システムよりご対応お願いいたします。<br>
                        24時間を切ってのキャンセル・変更は1回分チケット消化（ご返金不可）となります。<br>
                        その際、<a href="/contact/">お問い合わせフォーム</a>より「24時間を切ってのご予約キャンセル」をお選びいただき、項目に記載の上、送信ください。ご協力お願いします。<br>
                      </p>
                      <br><br>

                      <h3>開場時間</h3>
                      <p>10分前からの入室が可能です。<br>※遅刻の場合はトレーニング時間が少なくなってしまいますのでお早めにご準備ください。</p>
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
                    <p class="bg-color mt10 mb15">
                      動きやすい服装でご参加ください。<br>
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
                    <p class="bg-color mt10 mb15">
                      お時間になりましたらご予約確定メールに記載のあるビデオ通話へのアクセス用URLへアクセスください。<br>
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
                    <p>
                      トレーニングの前にカウンセリングを行います。<br>
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
                    <p class="bg-color mt10">
                      「トレーニング時の、怪我が心配」という方は、
                      <a href="https://www.sportsanzen.org/hoken/kubun/kubun_i.html" target="_blank" rel="noopener">
                        公益財団法人スポーツ安全協会
                      </a>
                      の保険を任意にて活用いただけます。（任意のため、ご自身でご加入いただけますようお願いいたします。）
                    </p>
                  </div>
                </div>

                <div class="row mt10" align="center">
                  <?php get_template_part('template-parts/reserve-register-btns'); ?>
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
                      <h3>ご用意するもの</h3>
                      <p>
                        動きやすい服装＆タオルをご用意ください。<br>
                        トレーニングシューズor裸足、どちらでも構いません。
                      </p>
                      <br><br>

                      <h3>キャンセル・ご予約変更ポリシー</h3>
                      <p>
                        <span class="red">キャンセル・ご予約変更期限は<b>24時間前</b>までです。</span><br>
                        24時間前のキャンセル・変更は予約システムよりご対応お願いいたします。<br>
                        24時間を切ってのキャンセル・変更は1回分チケット消化（ご返金不可）となります。
                        その際、<a href="/contact/">お問い合わせフォーム</a>より「24時間を切ってのご予約キャンセル」をお選びいただき、項目に記載の上、送信ください。ご協力お願いします。<br>
                      </p>
                      <br><br>

                      <h3>開場時間</h3>
                      <p>
                        10分前からの入室が可能です。<br>
                        ※遅刻の場合はトレーニング時間が少なくなってしまいますのでお早めにご準備ください。
                      </p>
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

  <section id="Reserve">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <dl class="panel">
            <dt>
              <h3><i class="icon-member"></i>定期コース入会済みの方へ</h3>
            </dt>
            <dd>
              <p>
                <a href="/mypage/" target="_blank">マイページ</a>へログインしていただきトレーニング予約ページよりご希望の店舗、日時を選択し予約申請をお願いします。<br>
                ※先に空き状況をご確認したい場合は<a href="/booking/new/" target="_blank">こちら</a>からでもご確認いただけます。<br>
                ※申請時点では予約確定ではございません。予約確定のメールをもって確定となりますのでご留意ください。<br><br>
                疑問・質問は、<a href="/contact#Questions">よくある質問</a>にて確認いただけます。
              </p>

              <?php echo do_shortcode('[contact-form-7 id="795987f" title="コース変更、休会、退会申請フォーム" html_id="form"]'); ?>

              <div class="col-12 lh-160 mt20">
                <small>
                  ※携帯キャリアのメールアドレスですと設定によりメールが届かない場合がございます。お持ちであれば、Gmail等のアドレスにてご登録頂けますとスムーズです。<br>
                  ※受信拒否設定などされている場合は、@evigym.com からのメール受信ができるように設定いただきますようお願いします。
                </small>
              </div>
            </dd>

            <dt>
              <h3><i class="icon-coupon"></i>クーポンサイトご利用の方へ</h3>
            </dt>
            <dd>
              <p>
                会員登録時に「登録のきっかけ」の項目でクーポンを選択、必要事項をご記入ください。<br>
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
              <p>
                <a href="/contact/" target="_blank">お問い合わせフォーム</a>より「おかえり割引き」または「再入会の方」をお選びいただき、ご希望のコースを記載の上、送信ください。<br>
                担当者より折り返しご連絡いたします。<br><br>
                疑問・質問は、<a href="/contact#Questions">よくある質問</a>にて確認いただけます。
              </p>
            </dd>
          </dl>
        </div>
      </div>
    </div>
  </section>
</main>
<?php get_footer();
