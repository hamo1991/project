<?php
use yii\helpers\Html;
?>
<div id="lang">
    <ul id="flags">
        <?php foreach ($langs as $lang):?>
            <li class="item-lang">
                <?= Html::a( \yii\helpers\Html::img("@web/images/flags/" . $lang->image, ['alt' => "flag", 'class' => 'flag']), '/'.$lang->url.Yii::$app->getRequest()->getLangUrl()) ?>
            </li>
        <?php endforeach;?>
    </ul>
</div>