<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;


AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<header class="header" id="header">
    <div id="header-top" class="header-top">

        <svg xmlns="http://www.w3.org/2000/svg" class="header-logo">
            <text y="45"  >
                КиноПоиск
            </text>
        </svg>

        <span class="header-trio-inputs">
            <input type="text" placeholder="Фильмы, персоны, кинотеатры" class="header-input">
            <a href="#" class="header-inputs" ">

            </a>
            <button class="header-inputs header-button-search" >

            </button>
        </span>

        <div style=" margin-left: 50px; margin-top: auto; margin-bottom: auto; ">
            <h6 style="color: darkgray; margin: 5px 0"> Фильм дня</h6>
            <a href="#" style="color: lightgray; margin: 5px 0; display: inline;">
                    <span style="font-size: 16px;">Гоголь</span>
                    <span style="color: #3bb33b; font-size: 14px;">▲&nbsp;6</span>
            </a>
        </div>

    </div>
    <div id="header-bottom" class="header-bottom">


<nav id="nav_header_main_menu">
      <ul id="header_main_menu">
        <li><a href="#" id="header_main_menu_first_link">Афиша</a>
        <div>
           4444
          </div>
        </li>
        <li><a href="#">Фильмы</a>
          <div>
            7777
          </div>
        </li>
        <li><a href="#">Рейтинги</a>
        <div>
            9999
          </div>
        </li>
        <li><a href="#">Журнал</a>
            <div>
            9999
          </div>
        </li>   
        <li><a href="#">Онлайн</a></li> 
        <li><a href="#" id="smart_tv">СМАРТ ТВ</a></li> 
      </ul>
    </nav>


    </div>
</header>

<div class="main-container">
        <?= $content ?>


    <footer class="footer">

    </footer>
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
