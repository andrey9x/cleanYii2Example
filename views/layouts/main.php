<?php

use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;

/**
 * @var \yii\web\View $this
 * @var string $content
 */
?>
<?php $this->beginPage(); ?>
<html lang="ru">
    <head>
        <title>PHP Course</title>
        <?php $this->head(); ?>
    </head>
    <body>
    <?php $this->beginBody(); ?>
    <?php
    NavBar::begin([
        'brandLabel' => 'PHP',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar navbar-expand-lg navbar-dark bg-dark fixed-top'
        ]
    ]);
    $menu = [
        ['label' => 'Join', 'url' => ['site/join']],
        ['label' => 'Login', 'url' => ['site/login']]
    ];
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav ml-auto'],
        'items' => $menu
    ]);
    NavBar::end();
    ?>

    <div class="container" style="margin-top: 70px;">
        <?= $content; ?>
    </div>

    <?php $this->endBody(); ?>
    </body>
</html>
<?php $this->endPage(); ?>