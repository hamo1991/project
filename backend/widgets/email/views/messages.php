
<ul class="dropdown-menu">
    <li style="font-weight: bold" class="header">You have <?= count($messages)?> messages</li>
    <li>
        <ul class="menu">
            <?php if (!empty($messages)){
                foreach ($messages as $message) {
                    ?>
                    <li>
                        <a href="<?= \yii\helpers\Url::to(["/email/view?id=" . $message['id']])?>">
                            <div class="pull-left">
                                <?= strtoupper($message['name'])?>
                            </div>
                            <h4> <?= substr($message['content'],0,10).'....';?>
                                <small><i class="fa fa-clock-o"></i> <?= $message['date']?></small>
                            </h4>
                            <p><?= $message['email'] ?></p>
                        </a>
                    </li>
                    <?php
                }
            }  ?>
        </ul>
    </li>
    <li  class="footer"><a style="font-weight: bold" href="<?= \yii\helpers\Url::to(['/email'])?>">See All Messages</a></li>
</ul>