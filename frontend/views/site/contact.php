<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;


$this->title = 'Contact';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="breadcrumbs">
    <div class="container">
        <?php if (Yii::$app->session->hasFlash('success')): ?>
            <div class="alert alert-success">
                <button aria-hidden="true" style="display: block" data-dismiss="alert" class="close" type="button">X
                </button>
                <?= Yii::$app->session->getFlash('success') ?>
            </div>
        <?php endif; ?>


        <?php if (Yii::$app->session->hasFlash('error')): ?>
            <div class="alert alert-danger">
                <button aria-hidden="true" data-dismiss="alert" class="close" type="button">X</button>
                <?= Yii::$app->session->getFlash('error') ?>
            </div>
        <?php endif; ?>
        <div class="row">
            <div class="col">
                <p class="bread"><span><a href="<?= \yii\helpers\Url::to(['/']) ?>">Home</a></span> /
                    <span>Contact</span></p>
            </div>
        </div>
    </div>
</div>


<div id="colorlib-contact">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h3>Contact Information</h3>
                <div class="row contact-info-wrap">
                    <div class="col-md-3">
                        <p>
                            <span><i class="icon-location"></i></span><?= \frontend\widgets\info\InfoWidget::widget(['action' => 'address']); ?>
                        </p>
                    </div>
                    <div class="col-md-3">
                        <p><span><i class="icon-phone3"></i></span> <a
                                    href="tel://1234567920"><?= \frontend\widgets\info\InfoWidget::widget(['action' => 'phone']); ?></a>
                        </p>
                    </div>
                    <div class="col-md-3">
                        <p><span><i class="icon-paperplane"></i></span> <a
                                    href="mailto:info@yoursite.com"><?= \frontend\widgets\info\InfoWidget::widget(['action' => 'email']); ?></a>
                        </p>
                    </div>
                    <div class="col-md-3">
                        <p><span><i class="icon-globe"></i></span> <a href="#">yoursite.com</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="contact-wrap animated bounceInLeft">
                    <h2 style="font-size: 40px">Get In Touch</h2>
                    <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

                    <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>

                    <?= $form->field($model, 'email') ?>

                    <?= $form->field($model, 'subject') ?>

                    <?= $form->field($model, 'body')->textarea(['rows' => 6]) ?>

                    <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                        'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                    ]) ?>

                    <div class="form-group">
                        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                    </div>

                    <?php ActiveForm::end(); ?>

                </div>
            </div>
            <div class="col-md-6 animated bounceInRight">
                <div id="map" class="colorlib-map"></div>
            </div>
        </div>
    </div>
</div>

<script>
    var map;
    function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
            center: {lat: 40.807240, lng: 43.847615},
            zoom: 18
        });

        var marker = new google.maps.Marker({
            position: {lat: 40.807240, lng: 43.847615},
            map: map,
            title: 'ArmShoes shop',
            animation: google.maps.Animation.BOUNCE,
            draggable: true
        });
    }

</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAwtvaOIGoZZezU3Sm-KDZAtnGxtY5VOUI&callback=initMap"></script>
