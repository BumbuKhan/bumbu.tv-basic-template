<?php
use yii\helpers\Html;
use app\assets\AppAsset;


AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div id="wrapper">
    <!--header start-->
    <header class="header header_theme_dark border-bottom">
        <div class="container">
            <div class="columns py-3">
                <!--header__logo start-->
                <div class="one-fifth column">
                    <div class="header__logo pt-2">
                        <a href="http://bumbu.tv"><b>BUMBU.TV</b> <sup>&beta;</sup></a>
                    </div>
                </div>
                <!--header__logo   end-->

                <div class="four-fifths column">
                    <div class="columns">
                        <div class="three-fourths column">
                            <!--header__search start-->
                            <div class="header_search">
                                <form>
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                    <input class="form-control input-block" type="text"
                                           placeholder="Search">
                                </form>
                            </div>
                            <!--header__search   end-->
                        </div>
                        <div class="one-fourth column">
                            <!--header__signin start-->
                            <div class="header__signin clearfix">
                                <a href="#" class="btn right">Signin</a>
                            </div>
                            <!--header__signin   end-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--header   end-->

    <?=$content?>

    <!--footer start-->
    <footer class="footer">
        <div class="container">
            <div class="columns">
                <div class="single-column">
                    <ul class="footer__items">
                        <li>&copy; 2017 BumbuTV</li>
                        <li><a href="#">Terms</a></li>
                        <li><a href="#">Privacy</a></li>
                        <li><a href="#">Security</a></li>
                        <li><a href="#">Help</a></li>
                        <li><a href="#">About project</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!--footer   end-->
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
