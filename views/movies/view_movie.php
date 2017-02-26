<?php
use yii\helpers\Url;
use app\assets\VideoPlayerAsset;

VideoPlayerAsset::register($this);
?>

<!--movie-details start-->
<section class="movie-details">
    <div class="container">
        <div class="columns">
            <div class="single-column">
                <!--movie-details__description start-->
                <div class="movie-details__description clearfix" style="background-image: url('<?=Yii::getAlias('@web/web/assets/')?>img/1-blur.jpg')">
                    <div class="movie-details__description-transparent-bg"></div>

                    <div class="movie-details__description-poster">
                        <img src="<?=Yii::getAlias('@web/web/assets/')?>img/1.jpg" class="img-responsive" alt="">
                        <button class="btn btn-block btn-primary js-play-btn">Watch</button>
                    </div>
                    <div class="movie-details__description-info">
                        <table>
                            <tr>
                                <td>
                                    <h1 class="movie-details__description-title">Обитель зла</h1>
                                    <div class="movie-details__description-data">
                                        <span>120 min</span>
                                        <span>August 2016</span>
                                        <span>Fantasy, Fiction, Comedy</span>
                                    </div>
                                    <p class="mb-0">
                                        <small>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab adipisci
                                            animi cupiditate deserunt fugit, molestias repudiandae sapiente ullam?
                                            Aspernatur aut in iure labore quisquam. Aliquam aliquid consequuntur
                                            dolorum magnam qui? A alias aliquid delectus et, facere illo labore molestias neque omnis
                                            qui sed, vitae? Architecto asperiores aut eius esse excepturi harum ipsa
                                            iste maiores mollitia, provident, sequi similique unde voluptate?
                                        </small>
                                    </p>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <!--movie-details__description   end-->
            </div>
        </div>
    </div>
</section>
<!--movie-details   end-->

<!--video-player start-->
<div class="video-player">
    <div class="container" id="watch">
        <div class="columns">
            <div class="single-column">

                <video id="bumbu-player" class="video-js vjs-big-play-centered vjs-bumbu-skin" width="980"
                       height="400">
                    <source src="<?=Yii::getAlias('@web/web/assets/')?>video/ed/ed_hd.mp4" type="video/mp4"/>
                    <source src="<?=Yii::getAlias('@web/web/assets/')?>/video/ed/ed_hd.ogv" type="video/ogg"/>

                    <!--<track kind="subtitles" src="src/video/ed/captions.en.vtt" srclang="en" label="English" default>-->

                    <p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a
                        web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports
                            HTML5 video</a></p>
                </video>

            </div>
        </div>
    </div>
</div>
<!--video-player   end-->

<!--moovie-list start-->
<section class="movie-list">
    <!--movie-list-header start-->
    <div class="movie-list-header">
        <div class="container">
            <div class="columns pt-3">
                <div class="single-column">
                    <header class="clearfix">
                        <div class="left">
                            <h3 class="text-gray-dark">Keep watching</h3>
                            <span class="text-gray">Lorem ipsum dolor sit amet</span>
                        </div>
                        <div class="right">
                            <a href="#" class="btn btn-outline">All</a>
                            <div class="btn-group">
                                <button class="btn" type="button" data-carousel="movies" data-direction="prev"><i class="fa fa-arrow-left"
                                                                                                                  aria-hidden="true"></i></button>
                                <button class="btn" type="button"data-carousel="movies" data-direction="next"><i class="fa fa-arrow-right"
                                                                                                                 aria-hidden="true"></i></button>
                            </div>
                        </div>
                    </header>
                </div>
            </div>
        </div>
    </div>
    <!--movie-list-header   end-->

    <!--movie-list__items start-->
    <div class="movie-list__items">
        <div class="container">
            <div class="columns">
                <div class="owl-carousel js-movie-carousel">
                    <div class="single-column">
                        <!--movie-list__item start-->
                        <div class="movie-list__item">
                            <a href="http://bumbu.tv/view.html">
                                <img src="<?=Yii::getAlias('@web/web/assets/')?>img/1.jpg" class="img-responsive js-tilt" alt="">
                            </a>
                            <div class="movie-list__item-desc">
                                <span class="branch-ref css-truncate css-truncate-target"
                                      title="Обитель зла 6: Последняя глава (2017)">Обитель зла 6: Последняя глава (2017)</span>
                                <i class="branch-ref css-truncate css-truncate-target text-gray text-small">Ужасы,
                                    Фантастика, Боевик</i>
                            </div>
                        </div>
                        <!--movie-list__item   end-->
                    </div>
                    <div class="single-column">
                        <!--movie-list__item start-->
                        <div class="movie-list__item">
                            <a href="#">
                                <img src="<?=Yii::getAlias('@web/web/assets/')?>img/2.jpg" class="img-responsive js-tilt" alt="">
                            </a>
                            <div class="movie-list__item-desc">
                                <span class="branch-ref css-truncate css-truncate-target"
                                      title="Крест. Часть вторая: Двойной обман (2017)">Крест. Часть вторая: Двойной обман (2017)</span>
                                <i class="branch-ref css-truncate css-truncate-target text-gray text-small">Боевик</i>
                            </div>
                        </div>
                        <!--movie-list__item   end-->
                    </div>
                    <div class="single-column">
                        <!--movie-list__item start-->
                        <div class="movie-list__item">
                            <a href="#">
                                <img src="<?=Yii::getAlias('@web/web/assets/')?>img/3.jpg" class="img-responsive js-tilt" alt="">
                            </a>
                            <div class="movie-list__item-desc">
                                <span class="branch-ref css-truncate css-truncate-target"
                                      title="На пятьдесят оттенков темнее (2017)">На пятьдесят оттенков темнее (2017)</span>
                                <i class="branch-ref css-truncate css-truncate-target text-gray text-small">Мелодрама</i>
                            </div>
                        </div>
                        <!--movie-list__item   end-->
                    </div>
                    <div class="single-column">
                        <!--movie-list__item start-->
                        <div class="movie-list__item">
                            <a href="#">
                                <img src="<?=Yii::getAlias('@web/web/assets/')?>img/4.jpg" class="img-responsive js-tilt" alt="">
                            </a>
                            <div class="movie-list__item-desc">
                                    <span class="branch-ref css-truncate css-truncate-target"
                                          title="Команда мечты (2016)">Команда мечты (2016)</span>
                                <i class="branch-ref css-truncate css-truncate-target text-gray text-small">Комедия</i>
                            </div>
                        </div>
                        <!--movie-list__item   end-->
                    </div>
                    <div class="single-column">
                        <!--movie-list__item start-->
                        <div class="movie-list__item">
                            <a href="#">
                                <img src="<?=Yii::getAlias('@web/web/assets/')?>img/5.jpg" class="img-responsive js-tilt" alt="">
                            </a>
                            <div class="movie-list__item-desc">
                                    <span class="branch-ref css-truncate css-truncate-target"
                                          title="Доктор Стрэндж (2016)">Доктор Стрэндж (2016)</span>
                                <i class="branch-ref css-truncate css-truncate-target text-gray text-small">Фэнтези,
                                    Боевик, Приключения</i>
                            </div>
                        </div>
                        <!--movie-list__item   end-->
                    </div>
                    <div class="single-column">
                        <!--movie-list__item start-->
                        <div class="movie-list__item">
                            <a href="#">
                                <img src="<?=Yii::getAlias('@web/web/assets/')?>img/1.jpg" class="img-responsive js-tilt" alt="">
                            </a>
                            <div class="movie-list__item-desc">
                                <span class="branch-ref css-truncate css-truncate-target"
                                      title="Обитель зла 6: Последняя глава (2017)">Обитель зла 6: Последняя глава (2017)</span>
                                <i class="branch-ref css-truncate css-truncate-target text-gray text-small">Ужасы,
                                    Фантастика, Боевик</i>
                            </div>
                        </div>
                        <!--movie-list__item   end-->
                    </div>
                    <div class="single-column">
                        <!--movie-list__item start-->
                        <div class="movie-list__item">
                            <a href="#">
                                <img src="<?=Yii::getAlias('@web/web/assets/')?>img/2.jpg" class="img-responsive js-tilt" alt="">
                            </a>
                            <div class="movie-list__item-desc">
                                <span class="branch-ref css-truncate css-truncate-target"
                                      title="Крест. Часть вторая: Двойной обман (2017)">Крест. Часть вторая: Двойной обман (2017)</span>
                                <i class="branch-ref css-truncate css-truncate-target text-gray text-small">Боевик</i>
                            </div>
                        </div>
                        <!--movie-list__item   end-->
                    </div>
                    <div class="single-column">
                        <!--movie-list__item start-->
                        <div class="movie-list__item">
                            <a href="#">
                                <img src="<?=Yii::getAlias('@web/web/assets/')?>img/3.jpg" class="img-responsive js-tilt" alt="">
                            </a>
                            <div class="movie-list__item-desc">
                                <span class="branch-ref css-truncate css-truncate-target"
                                      title="На пятьдесят оттенков темнее (2017)">На пятьдесят оттенков темнее (2017)</span>
                                <i class="branch-ref css-truncate css-truncate-target text-gray text-small">Мелодрама</i>
                            </div>
                        </div>
                        <!--movie-list__item   end-->
                    </div>
                    <div class="single-column">
                        <!--movie-list__item start-->
                        <div class="movie-list__item">
                            <a href="#">
                                <img src="<?=Yii::getAlias('@web/web/assets/')?>img/4.jpg" class="img-responsive js-tilt" alt="">
                            </a>
                            <div class="movie-list__item-desc">
                                    <span class="branch-ref css-truncate css-truncate-target"
                                          title="Команда мечты (2016)">Команда мечты (2016)</span>
                                <i class="branch-ref css-truncate css-truncate-target text-gray text-small">Комедия</i>
                            </div>
                        </div>
                        <!--movie-list__item   end-->
                    </div>
                    <div class="single-column">
                        <!--movie-list__item start-->
                        <div class="movie-list__item">
                            <a href="#">
                                <img src="<?=Yii::getAlias('@web/web/assets/')?>img/5.jpg" class="img-responsive js-tilt" alt="">
                            </a>
                            <div class="movie-list__item-desc">
                                    <span class="branch-ref css-truncate css-truncate-target"
                                          title="Доктор Стрэндж (2016)">Доктор Стрэндж (2016)</span>
                                <i class="branch-ref css-truncate css-truncate-target text-gray text-small">Фэнтези,
                                    Боевик, Приключения</i>
                            </div>
                        </div>
                        <!--movie-list__item   end-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--movie-list__items   end-->
</section>
<!--moovie-list   end-->