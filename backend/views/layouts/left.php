<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/hamo.jpg" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p>Hamo Harutyunyan</p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                'items' => [
                    ['label' => 'Menu Shoes','options' => ['class' => 'header']],
                    ['label' => 'Products', 'icon' => 'fab fa-product-hunt', 'url' => ['/products']],
                    ['label' => 'Categories', 'icon' => 'fab fa-contao', 'url' => ['/categories']],
                    ['label' => 'Brands', 'icon' => 'fab fa-bandcamp', 'url' => ['/brands']],
                    ['label' => 'Slider', 'icon' => 'fas fa-play', 'url' => ['/slider']],
                    ['label' => 'Info', 'icon' => 'fas fa-info-circle', 'url' => ['/info']],
                    ['label' => 'Blog', 'icon' => 'fab fa-bitcoin', 'url' => ['/blog/blog']],
                    ['label' => 'Brands & Categories', 'icon' => 'fas fa-list-ol', 'url' => ['/rules']],
                    ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
                    [
                        'label' => 'Some tools',
                        'icon' => 'share',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Gii', 'icon' => 'file-code-o', 'url' => ['/gii'],],

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
            ]
        ) ?>

    </section>

</aside>
