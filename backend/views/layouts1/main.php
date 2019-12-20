<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use yii\helpers\Url;
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


<div class="wrapper">

    <?= \hosannahighertech\lbootstrap\widgets\SideBar::widget([
        'bgImage'=>'@web/img/sidebar-5.jpg', //Don't define it if there is none
        'header'=>[
            'title'=>'Gokang',
            'url'=>['/default/index']
        ],
        // 'links'=>[
        //     ['title'=>'Dashboard', 'url'=>['site/index'], 'icon'=>'home'],
        //     ['title'=>'Users', 'url'=>['user/index'], 'icon'=>'users'],
        //     ['title'=>'Tukang', 'url'=>['tukang/index'], 'icon'=>'portfolio'],
        //     ['title'=>'kategori Tukang', 'url'=>['kategori-tukang/index'], 'icon'=>'albums'],
        //     ['title'=>'Booking', 'url'=>['dashboard/index'], 'icon'=>'notebook'],
        //     ['title'=>'Logout', 'url'=>['site/logout'], 'icon'=>'power','linkOptions'=>['data-method'=>'post']   ]
            
        //     ]
        'items' => [
            ['label' => 'Gii', 'icon' => 'file-code-o', 'url' => ['/user']],
            ['label' => 'Debug', 'icon' => 'dashboard', 'url' => ['/debug']],
            ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
            [
                'label' => 'Some tools',
                'icon' => 'share',
                'url' => '#',
                'items' => [
                    ['label' => 'Gii', 'icon' => 'file-code-o', 'url' => ['/gii'],],
                    ['label' => 'Debug', 'icon' => 'dashboard', 'url' => ['/debug'],],
                    [
                        'label' => 'Level One',
                        'icon' => 'circle-o',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Level Two', 'icon' => 'circle-o', 'url' => '#',],
                            [
                                'label' => 'Level Two',
                                'icon' => 'circle-o',
                                'url' => '#',
                                'items' => [
                                    ['label' => 'Level Three', 'icon' => 'circle-o', 'url' => '#',],
                                    ['label' => 'Level Three', 'icon' => 'circle-o', 'url' => '#',],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ]); ?>
    
    
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
                            <a href="{Url::toRoute('site/logout', true)}">
                                <i class="fa fa-lock"></i> <span>Keluar</span>
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

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>