<?php
use yii\helpers\Html;

/* @var $this \yii\web\View */
/* @var $content string */
?>

<header class="main-header">

    <?= Html::a('<span class="logo-mini">APP</span><span class="logo-lg">ArmShoes</span>', Yii::$app->homeUrl, ['class' => 'logo']) ?>

    <nav class="navbar navbar-static-top" role="navigation">

        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">

            <ul class="nav navbar-nav">

                <li class="dropdown messages-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-envelope-o"></i>
                        <span class="label label-success"><?= \backend\widgets\email\EmailWidget::widget(['count' => 'count']);?></span>
                    </a>
                    <?= \backend\widgets\email\EmailWidget::widget();?>
                </li>
                <li class="dropdown notifications-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-bell-o"></i>
<!--                        <span class="label label-warning">10</span>-->
                    </a>
                    <ul class="dropdown-menu">
                        <li style="font-weight: bold" class="header">Notifications</li>
                        <li>
                            <!-- inner menu: contains the actual data -->
                            <ul class="menu">
                                <li>
                                    <a><i class="fa fa-users text-red"></i><span style="font-weight: bold"><?= \backend\widgets\users\UsersWidget::widget(); ?></span> Registered users</a>
                                </li>

                                <li>
                                    <a href="<?= \yii\helpers\Url::to(['/orders'])?>">
                                        <i class="fa fa-shopping-cart text-green"></i><span style="font-weight: bold"><?= \backend\widgets\order\OrderWidget::widget(); ?></span> Orders
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="<?= \yii\helpers\Url::to(['/images/hamo.jpg']) ?>" class="user-image" alt="User Image"/>
                        <span class="hidden-xs">Hamo Harutyunyan</span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            <img src="<?= \yii\helpers\Url::to(['/images/hamo.jpg']) ?>" class="img-circle"
                                 alt="User Image"/>

                            <p>
                                Hamo Harutyunyan - Web Developer</p>
                        </li>

                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="/" class="btn btn-default btn-flat">Go Site</a>
                            </div>
                            <div class="pull-right">
                                <?= Html::a(
                                    'Sign out',
                                    ['/site/logout'],
                                    ['data-method' => 'post', 'class' => 'btn btn-default btn-flat']
                                ) ?>
                            </div>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                </li>
            </ul>
        </div>
    </nav>
</header>
