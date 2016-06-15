<?php

/* @var $this yii\web\View */

$this->title = 'Рога и Копыта';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Магазин "Рога и Копыта"</h1>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                
            </div>
            <div class="col-lg-4">
                <h2>Наши товары</h2>

                <p>Здесь вы можете ознакомится с нашим ассортиментом</p>

                <p><a class="btn btn-default" href="<?= yii\helpers\Url::to(['product/index']) ?>">Подробнее &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                

                
            </div>
        </div>

    </div>
</div>
