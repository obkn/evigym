<?php
/*
 * 新型コロナウィルス対策に関するお知らせ一覧
 * 固定ページスラッグ: covid19 を想定
 */
if (! defined('ABSPATH')) exit;

get_header();
?>
<div align="center" id="covid">
  <p class="emergency">新型ｺﾛﾅｳｲﾙｽ問題・緊急事態宣言を受けての<a href="/covid19action">対策方針はこちら&gt;&gt;</a></p>
</div>
<main id="main">

  <!-- メインビジュアル -->
  <div class="mainvisual mv00"></div>

  <!-- パンくず -->
  <div class="container">
    <ul id="breadcrumbs-one">
      <li>
        <a href="<?php echo esc_url(home_url('/')); ?>" alt="パーソナルトレーニングジムeviGym">
          ホーム
        </a>
      </li>
      <li>
        <a class="current">新型コロナウィルス対策に関するお知らせ</a>
      </li>
    </ul>
  </div>

  <!-- 新型コロナウィルス対策に関するお知らせ一覧 -->
  <section id="News">
    <div class="container">
      <div class="row">
        <div class="col-12 tit" align="center">
          <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/static/img/news.webp'); ?>" alt="News">
          <h2 class="m0">新型コロナウィルス対策に関するお知らせ一覧</h2>
          <hr>
        </div>
      </div>

      <a href="https://peraichi.com/landing_pages/view/w7sgr" target="_blank" rel="noopener">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/static/img/bnr-covid19.webp'); ?>" alt="コロナ対策">
      </a>

      <div class="row mt40">
        <div class="col-11">
          <ul>

            <li>
              <p>
                <a href="<?php echo esc_url(home_url('/news/20220711/')); ?>">
                  2022年7月11日パーソナルジムeviGymの衛生対策に関して
                </a>
              </p>
              <p class="date">2022/07/11</p>
            </li>

            <li>
              <p>
                <a href="<?php echo esc_url(home_url('/news/20220321/')); ?>">
                  2022年3月21日まん延防止等重点措置全面解除　eviGym営業継続（変更なし）に関するお知らせ
                </a>
              </p>
              <p class="date">2022/03/21</p>
            </li>

            <li>
              <p>
                <a href="<?php echo esc_url(home_url('/news/20220305/')); ?>">
                  2022年3月4日 まん延防止等重点措置延長　eviGym営業継続（変更なし）に関するお知らせ
                </a>
              </p>
              <p class="date">2022/03/05</p>
            </li>

            <li>
              <p>
                <a href="<?php echo esc_url(home_url('/news/20220204/')); ?>">
                  2022年2月4日 パーソナルジムeviGymの衛生対策に関して
                </a>
              </p>
              <p class="date">2022/02/04</p>
            </li>

            <li>
              <p>
                <a href="<?php echo esc_url(home_url('/news/20210709/')); ?>">
                  2021年7月9日 2021年7月12日-8月22日の緊急事態宣言下における営業時間（変更なし）と新型コロナウィルス対策に関するお知らせ
                </a>
              </p>
              <p class="date">2021/07/09</p>
            </li>

            <li>
              <p>
                <a href="<?php echo esc_url(home_url('/news/210621/')); ?>">
                  2021年6月21日 まん延防止等重点措置　eviGym営業継続（変更なし）に関するお知らせ
                </a>
              </p>
              <p class="date">2021/06/21</p>
            </li>

            <!-- ここから Laravel の route('covid19.xxxxx') 相当部分
                 URL は /covid19/xxxxxx/ 形式を想定して home_url() にしています -->

            <li>
              <p>
                <a href="<?php echo esc_url(home_url('/covid19/210423/')); ?>">
                  2021年4月23日 緊急事態宣言再発令下を受け、eviGym営業継続についてのお知らせ
                </a>
              </p>
              <p class="date">2021/04/23</p>
            </li>

            <li>
              <p>
                <a href="<?php echo esc_url(home_url('/covid19/210308/')); ?>">
                  2021年3月8日 eviGym通常営業再開のお知らせと新型コロナウィルス感染予防対策について
                </a>
              </p>
              <p class="date">2021/03/08</p>
            </li>

            <li>
              <p>
                <a href="<?php echo esc_url(home_url('/covid19/210203/')); ?>">
                  緊急事態宣言延長に伴う営業時間短縮期間の延長について
                </a>
              </p>
              <p class="date">2021/02/03</p>
            </li>

            <li>
              <p>
                <a href="<?php echo esc_url(home_url('/covid19/210107/')); ?>">
                  2021年1月7日 緊急事態宣言再発令に伴うeviGym営業時間短縮のお知らせ
                </a>
              </p>
              <p class="date">2021/01/07</p>
            </li>

            <li>
              <p>
                <a href="<?php echo esc_url(home_url('/covid19/200619/')); ?>">
                  営業再開に伴うeviGym全店舗での新型コロナウイルス感染防止対策について
                </a>
              </p>
              <p class="date">2020/06/19</p>
            </li>

            <li>
              <p>
                <a href="<?php echo esc_url(home_url('/covid19/200527/')); ?>">
                  営業再開のお知らせ
                </a>
              </p>
              <p class="date">2020/05/27</p>
            </li>

            <li>
              <p>
                <a href="<?php echo esc_url(home_url('/covid19/200519/')); ?>">
                  トレーニング回数の無期限繰越のお知らせと会員様の休会、退会手続きについて
                </a>
              </p>
              <p class="date">2020/05/19</p>
            </li>

            <li>
              <p>
                <a href="<?php echo esc_url(home_url('/covid19/200513/')); ?>">
                  オンラインサービス開始記念 / 自宅で使えるトレーニンググッズプレゼント
                </a>
              </p>
              <p class="date">2020/05/13</p>
            </li>

            <li>
              <p>
                <a href="<?php echo esc_url(home_url('/covid19/200501/')); ?>">
                  オンライントレーニングの正式サービスを開始いたします
                </a>
              </p>
              <p class="date">2020/05/01</p>
            </li>

            <li>
              <p>
                <a href="<?php echo esc_url(home_url('/covid19/200408-2/')); ?>">
                  （追記5/1 会員向けオンライントレーニング対応に関しまして）休業期間中のオンラインセッションのご案内
                </a>
              </p>
              <p class="date">2020/04/08</p>
            </li>

            <li>
              <p>
                <a href="<?php echo esc_url(home_url('/covid19/200408/')); ?>">
                  （追記5/1 店舗休業期間の延長のお知らせ）店舗休業のご案内／4月分のお申し込み回数分の繰越対応のご案内
                </a>
              </p>
              <p class="date">2020/04/08</p>
            </li>

            <li>
              <p>
                <a href="<?php echo esc_url(home_url('/covid19/200401/')); ?>">
                  新型コロナウイルス対策状況を加味し会員様への対応としまして4月分の特別繰越対応を実施いたします。
                </a>
              </p>
              <p class="date">2020/04/01</p>
            </li>

            <li>
              <p>
                <a href="<?php echo esc_url(home_url('/covid19/200326/')); ?>">
                  東京都の自粛要請に伴い3月28日（土）3月29日（日）でトレーニング予約をされている会員様へ
                </a>
              </p>
              <p class="date">2020/03/26</p>
            </li>

            <li>
              <p>
                <a href="<?php echo esc_url(home_url('/covid19/200318/')); ?>">
                  新型コロナウイルスで高まる感染不安に配慮した除菌消臭水を導入
                </a>
              </p>
              <p class="date">2020/03/23</p>
            </li>

            <li>
              <p>
                <a href="<?php echo esc_url(home_url('/covid19/200304/')); ?>">
                  （追記3/17 特別繰越対応のお申し込み締め切りました。）新型コロナウィルス流行に伴うお客様への対応について
                </a>
              </p>
              <p class="date">2020/03/04</p>
            </li>

            <li>
              <p>
                <a href="<?php echo esc_url(home_url('/covid19/200226/')); ?>">
                  （追記6/19 営業再開に伴うeviGym全店舗での新型コロナウイルス感染防止への対策）新型コロナウィルス感染防止策に関しての方針
                </a>
              </p>
              <p class="date">2020/02/26</p>
            </li>

          </ul>
        </div>
      </div>
    </div>
  </section>

</main>

<?php get_footer();
