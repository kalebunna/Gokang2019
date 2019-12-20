<?php
/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use yii\helpers\Url;
use yii\bootstrap\Modal;
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
<?php 

$this->beginBody() ?>


<div class="wrapper">
<?php   if (Yii::$app->controller->action->id === 'login') { 
    /**
     * Do not use this code in your template. Remove it. 
     * Instead, use the code  $this->layout = '//main-login'; in your controller.
     */
        echo $this->render(
            'main-login',
            ['content' => $content]
        );
    }else{
?>
    <?= \hosannahighertech\lbootstrap\widgets\SideBar::widget([
        'bgImage'=>'@web/img/sidebar-5.jpg', //Don't define it if there is none
        'header'=>[
            'title'=>'Gokang',
            'url'=>['/default/index']
        ],
        'links'=>[
            ['title'=>'Dashboard', 'url'=>['site/index'], 'icon'=>'home'],
            ['title'=>'Users', 'url'=>['user/index'], 'icon'=>'users'],
            ['title'=>'Tukang', 'url'=>['tukang/index'], 'icon'=>'portfolio'],
            ['title'=>'kategori Tukang', 'url'=>['kategori-tukang/index'], 'icon'=>'albums'],
            ['title'=>'Booking', 'url'=>['booking/index'], 'icon'=>'notebook'],
            ['title'=>'Rating', 'url'=>['rating/index'], 'icon'=>'power',]
            ]
    ]); ?>
    <?php
Modal::begin([
'headerOptions' => ['id' => 'modalHeader'],
'id' => 'modal',
'size' => 'modal-lg',
'clientOptions' => ['backdrop' => 'static', 'keyboard' => true]
]);
echo "<div id='modalContent'></div>";
Modal::end();
?>
    <div class="main-panel">
    <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">Dashboard</a>
                </div>
                <div class="collapse navbar-collapse">

                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="">
                            <p>Account</p>
                            </a>
                        </li>
                        <!-- <li>
                            <a href="#">
                                <p>Log out</p>
                            </a>
                        </li> -->
                        <li>
                        <?= Html::a(
                                    'Sign out',
                                    ['/site/logout'],
                                    ['data-method' => 'post', 'class' => '']
                                ) ?>
                            </a>
                        </li>
						<li class="separator hidden-lg"></li>
                    </ul>
                </div>
            </div>
        </nav>
		<div class="content">
			<div class="container-fluid">
				<?= $content ?>
			</div>
		</div>

        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>
                        <li>
                            <a href="#">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Company
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Portfolio
                            </a>
                        </li>
                        <li>
                            <a href="#">
                               Blog
                            </a>
                        </li>
                    </ul>
                </nav>
                <p class="copyright pull-right">
                    &copy; <?= date('Y') ?> <a href="http://www.creative-tim.com">Creative Tim</a>, made with love for a better web
                </p>
            </div>
        </footer>

    </div>
</div>
        <?php }?>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>