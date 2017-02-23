<?php
use yii\helpers\Url;

?>

<!--moovie-list start-->
<section class="movie-list">
    <!--movie-list-header start-->
    <div class="movie-list-header">
        <div class="container">
            <div class="columns pt-3">
                <div class="single-column">
                    <header class="clearfix">
                        <div class="left">
                            <h3 class="text-gray-dark">Movies</h3>
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
                            <a href="<?=Url::toRoute(['movies/show-movie', 'id' => 123])?>">
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
                            <a href="http://bumbu.tv/view.html" target="_blank">
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
                            <a href="http://bumbu.tv/view.html" target="_blank">
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
                            <a href="http://bumbu.tv/view.html" target="_blank">
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
                            <a href="http://bumbu.tv/view.html" target="_blank">
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
                            <a href="http://bumbu.tv/view.html" target="_blank">
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
                            <a href="http://bumbu.tv/view.html" target="_blank">
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

<!--moovie-list start-->
<section class="movie-list">
    <!--movie-list-header start-->
    <div class="movie-list-header">
        <div class="container">
            <div class="columns pt-3">
                <div class="single-column">
                    <header class="clearfix">
                        <div class="left">
                            <h3 class="text-gray-dark">Cartoons</h3>
                            <span class="text-gray">Lorem ipsum dolor sit amet</span>
                        </div>
                        <div class="right">
                            <a href="#" class="btn btn-outline">All</a>
                            <div class="btn-group">
                                <button class="btn" type="button" data-carousel="cartoons" data-direction="prev"><i class="fa fa-arrow-left"
                                                                                                                    aria-hidden="true"></i></button>
                                <button class="btn" type="button" data-carousel="cartoons" data-direction="next"><i class="fa fa-arrow-right"
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
                <div class="owl-carousel js-cartoon-carousel">
                    <div class="single-column">
                        <!--movie-list__item start-->
                        <div class="movie-list__item">
                            <a href="#">
                                <img src="<?=Yii::getAlias('@web/web/assets/')?>img/6.jpg" class="img-responsive js-tilt" alt="">
                            </a>
                            <div class="movie-list__item-desc">
                                <span class="branch-ref css-truncate css-truncate-target" title="Моана (2016)">Моана (2016)</span>
                                <i class="branch-ref css-truncate css-truncate-target text-gray text-small">Мультфильм,
                                    Детский, Семейный</i>
                            </div>
                        </div>
                        <!--movie-list__item   end-->
                    </div>
                    <div class="single-column">
                        <!--movie-list__item start-->
                        <div class="movie-list__item">
                            <a href="#">
                                <img src="<?=Yii::getAlias('@web/web/assets/')?>img/11.jpg" class="img-responsive js-tilt" alt="">
                            </a>
                            <div class="movie-list__item-desc">
                                    <span class="branch-ref css-truncate css-truncate-target"
                                          title="В поисках Дори (2016)">В поисках Дори (2016)</span>
                                <i class="branch-ref css-truncate css-truncate-target text-gray text-small">Мультфильм,
                                    Детский, Семейный</i>
                            </div>
                        </div>
                        <!--movie-list__item   end-->
                    </div>
                    <div class="single-column">
                        <!--movie-list__item start-->
                        <div class="movie-list__item">
                            <a href="#">
                                <img src="<?=Yii::getAlias('@web/web/assets/')?>img/9.jpg" class="img-responsive js-tilt" alt="">
                            </a>
                            <div class="movie-list__item-desc">
                                <span class="branch-ref css-truncate css-truncate-target"
                                      title="Кубо. Легенда о самурае (2016)">Кубо. Легенда о самурае (2016)</span>
                                <i class="branch-ref css-truncate css-truncate-target text-gray text-small">Мультфильм,
                                    Детский, Семейный</i>
                            </div>
                        </div>
                        <!--movie-list__item   end-->
                    </div>
                    <div class="single-column">
                        <!--movie-list__item start-->
                        <div class="movie-list__item">
                            <a href="#">
                                <img src="<?=Yii::getAlias('@web/web/assets/')?>img/10.jpg" class="img-responsive js-tilt" alt="">
                            </a>
                            <div class="movie-list__item-desc">
                                <span class="branch-ref css-truncate css-truncate-target"
                                      title="Тайная жизнь домашних животных (2016)">Тайная жизнь домашних животных (2016)</span>
                                <i class="branch-ref css-truncate css-truncate-target text-gray text-small">Мультфильм,
                                    Детский</i>
                            </div>
                        </div>
                        <!--movie-list__item   end-->
                    </div>
                    <div class="single-column">
                        <!--movie-list__item start-->
                        <div class="movie-list__item">
                            <a href="#">
                                <img src="<?=Yii::getAlias('@web/web/assets/')?>img/8.jpg" class="img-responsive js-tilt" alt="">
                            </a>
                            <div class="movie-list__item-desc">
                                <span class="branch-ref css-truncate css-truncate-target" title="Тролли (2016)">Тролли (2016)</span>
                                <i class="branch-ref css-truncate css-truncate-target text-gray text-small">Мультфильм,
                                    Семейный</i>
                            </div>
                        </div>
                        <!--movie-list__item   end-->
                    </div>
                    <div class="single-column">
                        <!--movie-list__item start-->
                        <div class="movie-list__item">
                            <a href="#">
                                <img src="<?=Yii::getAlias('@web/web/assets/')?>img/6.jpg" class="img-responsive js-tilt" alt="">
                            </a>
                            <div class="movie-list__item-desc">
                                <span class="branch-ref css-truncate css-truncate-target" title="Моана (2016)">Моана (2016)</span>
                                <i class="branch-ref css-truncate css-truncate-target text-gray text-small">Мультфильм,
                                    Детский, Семейный</i>
                            </div>
                        </div>
                        <!--movie-list__item   end-->
                    </div>
                    <div class="single-column">
                        <!--movie-list__item start-->
                        <div class="movie-list__item">
                            <a href="#">
                                <img src="<?=Yii::getAlias('@web/web/assets/')?>img/11.jpg" class="img-responsive js-tilt" alt="">
                            </a>
                            <div class="movie-list__item-desc">
                                    <span class="branch-ref css-truncate css-truncate-target"
                                          title="В поисках Дори (2016)">В поисках Дори (2016)</span>
                                <i class="branch-ref css-truncate css-truncate-target text-gray text-small">Мультфильм,
                                    Детский, Семейный</i>
                            </div>
                        </div>
                        <!--movie-list__item   end-->
                    </div>
                    <div class="single-column">
                        <!--movie-list__item start-->
                        <div class="movie-list__item">
                            <a href="#">
                                <img src="<?=Yii::getAlias('@web/web/assets/')?>img/9.jpg" class="img-responsive js-tilt" alt="">
                            </a>
                            <div class="movie-list__item-desc">
                                <span class="branch-ref css-truncate css-truncate-target"
                                      title="Кубо. Легенда о самурае (2016)">Кубо. Легенда о самурае (2016)</span>
                                <i class="branch-ref css-truncate css-truncate-target text-gray text-small">Мультфильм,
                                    Детский, Семейный</i>
                            </div>
                        </div>
                        <!--movie-list__item   end-->
                    </div>
                    <div class="single-column">
                        <!--movie-list__item start-->
                        <div class="movie-list__item">
                            <a href="#">
                                <img src="<?=Yii::getAlias('@web/web/assets/')?>img/10.jpg" class="img-responsive js-tilt" alt="">
                            </a>
                            <div class="movie-list__item-desc">
                                <span class="branch-ref css-truncate css-truncate-target"
                                      title="Тайная жизнь домашних животных (2016)">Тайная жизнь домашних животных (2016)</span>
                                <i class="branch-ref css-truncate css-truncate-target text-gray text-small">Мультфильм,
                                    Детский</i>
                            </div>
                        </div>
                        <!--movie-list__item   end-->
                    </div>
                    <div class="single-column">
                        <!--movie-list__item start-->
                        <div class="movie-list__item">
                            <a href="#">
                                <img src="<?=Yii::getAlias('@web/web/assets/')?>img/8.jpg" class="img-responsive js-tilt" alt="">
                            </a>
                            <div class="movie-list__item-desc">
                                <span class="branch-ref css-truncate css-truncate-target" title="Тролли (2016)">Тролли (2016)</span>
                                <i class="branch-ref css-truncate css-truncate-target text-gray text-small">Мультфильм,
                                    Семейный</i>
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

<!--series-list start-->
<section class="series-list">
    <!--movie-list-header start-->
    <div class="movie-list-header">
        <div class="container">
            <div class="columns py-3">
                <div class="single-column">
                    <header class="clearfix">
                        <div class="left">
                            <h3 class="text-gray-dark">Series</h3>
                            <span class="text-gray">Lorem ipsum dolor sit amet</span>
                        </div>
                        <div class="right">
                            <a href="#" class="btn btn-outline">All</a>
                            <div class="btn-group">
                                <button class="btn" type="button" data-carousel="series" data-direction="prev"><i class="fa fa-arrow-left"
                                                                                                                  aria-hidden="true"></i></button>
                                <button class="btn" type="button" data-carousel="series" data-direction="next"><i class="fa fa-arrow-right"
                                                                                                                  aria-hidden="true"></i></button>
                            </div>
                        </div>
                    </header>
                </div>
            </div>
        </div>
    </div>
    <!--movie-list-header   end-->

    <!--series-list__items start-->
    <div class="series-list__items">
        <div class="container">
            <div class="columns">
                <div class="owl-carousel js-series-carousel">
                    <div class="single-column">
                        <!--series-list__item start-->
                        <div class="series-list__item js-series-item"
                             style="background: linear-gradient(to bottom, #4F5B67, #A0A9B0);">
                            <a href="#">
                                <span class="series-list__item-title">MR. Robot</span>
                                <span class="series-list__item-genres">Action, History, Fantasy</span>

                                <img class="series-list__item-poster-left" src="<?=Yii::getAlias('@web/web/assets/')?>img/1-left.jpg" alt="">
                                <img class="series-list__item-poster-middle" src="<?=Yii::getAlias('@web/web/assets/')?>img/1-middle.jpg" alt="">
                                <img class="series-list__item-poster-right" src="<?=Yii::getAlias('@web/web/assets/')?>img/1-right.jpg" alt="">
                            </a>
                        </div>
                        <!--series-list__item   end-->
                    </div>
                    <div class="single-column">
                        <!--series-list__item start-->
                        <div class="series-list__item js-series-item"
                             style="background: linear-gradient(to bottom, #0F1010, #6F7373);">
                            <a href="#">
                                <span class="series-list__item-title">Game Of Thrones</span>
                                <span class="series-list__item-genres">Action, History, Fantasy</span>

                                <img class="series-list__item-poster-left" src="<?=Yii::getAlias('@web/web/assets/')?>img/2-left.jpg" alt="">
                                <img class="series-list__item-poster-middle" src="<?=Yii::getAlias('@web/web/assets/')?>img/2-middle.jpg" alt="">
                                <img class="series-list__item-poster-right" src="<?=Yii::getAlias('@web/web/assets/')?>img/2-right.jpg" alt="">
                            </a>
                        </div>
                        <!--series-list__item   end-->
                    </div>
                    <div class="single-column">
                        <!--series-list__item start-->
                        <div class="series-list__item js-series-item"
                             style="background: linear-gradient(to bottom, #938D6D, #E4DCD2);">
                            <a href="#">
                                <span class="series-list__item-title">Walking Dead</span>
                                <span class="series-list__item-genres">Action, History, Fantasy</span>

                                <img class="series-list__item-poster-left" src="<?=Yii::getAlias('@web/web/assets/')?>img/3-left.jpg" alt="">
                                <img class="series-list__item-poster-middle" src="<?=Yii::getAlias('@web/web/assets/')?>img/3-middle.jpg" alt="">
                                <img class="series-list__item-poster-right" src="<?=Yii::getAlias('@web/web/assets/')?>img/3-right.jpg" alt="">
                            </a>
                        </div>
                        <!--series-list__item   end-->
                    </div>
                    <div class="single-column">
                        <!--series-list__item start-->
                        <div class="series-list__item js-series-item"
                             style="background: linear-gradient(to bottom, #4F5B67, #A0A9B0);">
                            <a href="#">
                                <span class="series-list__item-title">MR. Robot</span>
                                <span class="series-list__item-genres">Action, History, Fantasy</span>

                                <img class="series-list__item-poster-left" src="<?=Yii::getAlias('@web/web/assets/')?>img/1-left.jpg" alt="">
                                <img class="series-list__item-poster-middle" src="<?=Yii::getAlias('@web/web/assets/')?>img/1-middle.jpg" alt="">
                                <img class="series-list__item-poster-right" src="<?=Yii::getAlias('@web/web/assets/')?>img/1-right.jpg" alt="">
                            </a>
                        </div>
                        <!--series-list__item   end-->
                    </div>
                    <div class="single-column">
                        <!--series-list__item start-->
                        <div class="series-list__item js-series-item"
                             style="background: linear-gradient(to bottom, #0F1010, #6F7373);">
                            <a href="#">
                                <span class="series-list__item-title">Game Of Thrones</span>
                                <span class="series-list__item-genres">Action, History, Fantasy</span>

                                <img class="series-list__item-poster-left" src="<?=Yii::getAlias('@web/web/assets/')?>img/2-left.jpg" alt="">
                                <img class="series-list__item-poster-middle" src="<?=Yii::getAlias('@web/web/assets/')?>img/2-middle.jpg" alt="">
                                <img class="series-list__item-poster-right" src="<?=Yii::getAlias('@web/web/assets/')?>img/2-right.jpg" alt="">
                            </a>
                        </div>
                        <!--series-list__item   end-->
                    </div>
                    <div class="single-column">
                        <!--series-list__item start-->
                        <div class="series-list__item js-series-item"
                             style="background: linear-gradient(to bottom, #938D6D, #E4DCD2);">
                            <a href="#">
                                <span class="series-list__item-title">Walking Dead</span>
                                <span class="series-list__item-genres">Action, History, Fantasy</span>

                                <img class="series-list__item-poster-left" src="<?=Yii::getAlias('@web/web/assets/')?>img/3-left.jpg" alt="">
                                <img class="series-list__item-poster-middle" src="<?=Yii::getAlias('@web/web/assets/')?>img/3-middle.jpg" alt="">
                                <img class="series-list__item-poster-right" src="<?=Yii::getAlias('@web/web/assets/')?>img/3-right.jpg" alt="">
                            </a>
                        </div>
                        <!--series-list__item   end-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--series-list__items   end-->
</section>
<!--series-list   end-->

<!--ted-list start-->
<section class="ted-list">
    <!--movie-list-header start-->
    <div class="movie-list-header">
        <div class="container">
            <div class="columns py-3">
                <div class="single-column">
                    <header class="clearfix">
                        <div class="left">
                            <h3 class="text-gray-dark">TED</h3>
                            <span class="text-gray">Covers academic topics</span>
                        </div>
                        <div class="right">
                            <a href="#" class="btn btn-outline">All</a>
                            <div class="btn-group">
                                <button class="btn" type="button" data-carousel="ted" data-direction="prev"><i class="fa fa-arrow-left"
                                                                                                               aria-hidden="true"></i></button>
                                <button class="btn" type="button" data-carousel="ted" data-direction="next"><i class="fa fa-arrow-right"
                                                                                                               aria-hidden="true"></i></button>
                            </div>
                        </div>
                    </header>
                </div>
            </div>
        </div>
    </div>
    <!--movie-list-header   end-->

    <!--ted-list__items start-->
    <div class="ted-list__items">
        <div class="container">
            <div class="columns">
                <div class="one-fourth column">
                    <!--ted-list__item start-->
                    <div class="ted-list__ted-description">
                        <div class="blankslate blankslate-capped">
                            <img src="<?=Yii::getAlias('@web/web/assets/')?>img/TEDlogo.jpg" alt="">
                            <span class="d-block">Ideas worth spreading</span>
                            <span class="d-block mt-3">
                                    <a href="http://www.ted.com/" target="_blank"><small>Learn more about TED</small></a>
                                </span>
                        </div>
                    </div>
                    <!--ted-list__item   end-->
                </div>

                <div class="three-fourths column">
                    <div class="columns">
                        <div class="owl-carousel js-ted-carousel">
                            <div class="single-column">
                                <!--ted-list__item start-->
                                <div class="ted-list__item">
                                    <a href="#">
                                        <img src="<?=Yii::getAlias('@web/web/assets/')?>img/ted-1.jpg" class="img-responsive" alt="">
                                        <div class="ted-list__item-desc">
                                            <span>What time is it on Mars?</span>
                                        </div>
                                        <i>9:15</i>
                                    </a>
                                </div>
                                <!--ted-list__item   end-->
                            </div>
                            <div class="single-column">
                                <!--ted-list__item start-->
                                <div class="ted-list__item">
                                    <a href="#">
                                        <img src="<?=Yii::getAlias('@web/web/assets/')?>img/ted-2.jpg" class="img-responsive" alt="">
                                        <div class="ted-list__item-desc">
                                            <span>The good news of the decade? We're winning the war against child mortality</span>
                                        </div>
                                        <i>14:05</i>
                                    </a>
                                </div>
                                <!--ted-list__item end-->
                            </div>
                            <div class="single-column">
                                <!--ted-list__item start-->
                                <div class="ted-list__item">
                                    <a href="#">
                                        <img src="<?=Yii::getAlias('@web/web/assets/')?>img/ted-3.jpg" class="img-responsive" alt="">
                                        <div class="ted-list__item-desc">
                                            <span>Playlist: Statistically speaking ... a man who loved the world</span>
                                        </div>
                                        <i>8:50</i>
                                    </a>
                                </div>
                                <!--ted-list__item   end-->
                            </div>
                            <div class="single-column">
                                <!--ted-list__item start-->
                                <div class="ted-list__item">
                                    <a href="#">
                                        <img src="<?=Yii::getAlias('@web/web/assets/')?>img/ted-1.jpg" class="img-responsive" alt="">
                                        <div class="ted-list__item-desc">
                                            <span>What time is it on Mars?</span>
                                        </div>
                                        <i>9:15</i>
                                    </a>
                                </div>
                                <!--ted-list__item   end-->
                            </div>
                            <div class="single-column">
                                <!--ted-list__item start-->
                                <div class="ted-list__item">
                                    <a href="#">
                                        <img src="<?=Yii::getAlias('@web/web/assets/')?>img/ted-2.jpg" class="img-responsive" alt="">
                                        <div class="ted-list__item-desc">
                                            <span>The good news of the decade? We're winning the war against child mortality</span>
                                        </div>
                                        <i>14:05</i>
                                    </a>
                                </div>
                                <!--ted-list__item end-->
                            </div>
                            <div class="single-column">
                                <!--ted-list__item start-->
                                <div class="ted-list__item">
                                    <a href="#">
                                        <img src="<?=Yii::getAlias('@web/web/assets/')?>img/ted-3.jpg" class="img-responsive" alt="">
                                        <div class="ted-list__item-desc">
                                            <span>Playlist: Statistically speaking ... a man who loved the world</span>
                                        </div>
                                        <i>8:50</i>
                                    </a>
                                </div>
                                <!--ted-list__item   end-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--ted-list__items   end-->
</section>
<!--ted-list   end-->