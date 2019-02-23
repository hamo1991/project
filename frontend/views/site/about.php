<?php

$this->title = 'About';
?>
<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col">
                <p class="bread"><span><a href="<?= \yii\helpers\Url::to(['/']) ?>">Home</a></span> / <span>About</span></p>
            </div>
        </div>
    </div>
</div>


<div class="colorlib-about">
    <div class="container">
        <div class="row row-pb-lg">
            <?php
            if (!empty($about)) {
                foreach ($about as $a) {
                    ?>
                    <div class="col-sm-6 mb-3 animated bounceInLeft">
                        <div class="video colorlib-video" style="background-image: url(<?= '/images/uploads/about/' . $a['image'] ?>);">
                            <a href="https://vimeo.com/76175542" class="popup-vimeo"><i class="icon-play3"></i></a>
                            <div class="overlay"></div>
                        </div>
                    </div>
                    <div class="col-sm-6 animated bounceInRight">
                        <div class="about-wrap">
                            <h2><?= $a['title'] ?></h2>
                            <p><?= $a['content'] ?></p>

                        </div>
                    </div>
            <?php
                }
            }
            ?>

        </div>
    </div>
</div>