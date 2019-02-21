<?php
$this->title = 'Blog';
?>
<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col">
                <p class="bread"><span>News</span></p>
            </div>
        </div>

    </div>
</div>
<div class="breadcrumbs-two animated bounceInLeft">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="breadcrumbs-img"
                     style="background-size: cover; background-image: url(<?= \yii\helpers\Url::to(['/']) . 'images/blog-bg.jpg' ?>);">
                    <h2 style="color: white">All New's</h2>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="colorlib-product container" >
    <div class="container-fluid" id="blog">
        <div class="row">
            <?php
            if(!empty($articles)){
                foreach ($articles as $article){
                    ?>
                    <div class="col-sm-6 text-center animated bounceInUp">
                        <div class="featured">
                            <a id="box" href="<?= '/article/' . $article['slug']?>"
                               class="featured-img"
                               style="background-image: url(<?= \yii\helpers\Url::to(['/']) . 'images/uploads/blog/' . $article['image']?>);"></a>
                            <div class="desc">
                                <h2><a style="color: black; text-decoration: none" href="<?= '/article/'.$article['slug'];?>"><?= $article['title'];?></a></h2>
                            </div>
                            <div class="comment_blog">
                                <p><?= substr($article['content'],0,155).'...';?></p>
                                    <a style="display: block;color: black;font-size: 18px" href="<?= '/article/'.$article['slug'];?>">Leave a comments
                                        <img  src="<?= \yii\helpers\Url::to('@web/images/comment.png') ?>" alt="Logo"></a>
                            </div>
                        </div>
                        <br><br>
                    </div>
                    <?php

                }
            }
            ?>
        </div>
    </div>
</div>
