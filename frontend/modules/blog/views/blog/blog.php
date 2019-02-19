<?php

use yii\widgets\Pjax;
use yii\widgets\ActiveForm;
use yii\helpers\Html;

$this->registerJs(
    '$("document").ready(function(){ 
        $("#new_comment").on("pjax:end", function() {
            $.pjax.reload({container:"#comments"});  //Reload GridView
            $("#comments-comment").val("");
        });
    });'
);
?>

<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col">
                <p class="bread"><span><?= $article['title'] ?></span></p>
            </div>
        </div>
    </div>
</div>

    <div class="colorlib-product container" id="blog">
        <div class="container-fluid">
            <div class="row">
                <div class="animated bounceInUp">
                    <div class="featured">
                        <a class="featured-img"
                           style="background-image: url(<?= \yii\helpers\Url::to(['/']) . 'images/uploads/blog/' . $article['image'] ?>);"></a>
                        <div class="desc">
                            <h2><a style="color: black; text-decoration: none"><?= $article['title']; ?></a></h2>
                        </div>
                        <div class="comment_blog">
                            <p style="color: black"><?= $article['content'] ?></p>
                        </div>
                    </div>
                </div>

            </div>
            <?php Pjax::begin(['id' => 'comments']) ?>
            <div style="margin: 20px 0;box-shadow: 0 0 10px;background-color: #f2f2f2;padding: 10px;overflow-y: scroll;height: 300px">
                <ul>
                    <?php
                    if (!empty($article['comments'])) {
                        foreach ($article['comments'] as $comm) {
                            ?>
                            <li style="border-bottom: 1px solid black;padding: 5px 0">
                                <div><p><strong style="font-weight: bold"><?= $comm['user']['username']; ?></strong></p></div>
                                <div><p style="color: black"><?= $comm['comment']; ?></p></div>
                                <div>
                                    <time><?= date('H:i  - F j, Y', strtotime($comm['created_at'])); ?></time>
                                </div>
                            </li>
                            <?php
                        }
                    }
                    ?>
                </ul>
            </div>
            <?php Pjax::end() ?>
            <?php
            if (!Yii::$app->user->isGuest) {
                Pjax::begin(['id' => 'new_comment']);
                $form = ActiveForm::begin(['options' => ['data-pjax' => true]]);
                echo $form->field($comment, 'comment')->textarea();
                echo '<div class="form-group">';
                echo Html::submitButton('Send', ['class' => 'btn btn-primary']);
                echo '</div>';
                ActiveForm::end();
                Pjax::end();
            }

            ?>
        </div>

    </div>

