<?php
use yii\helpers\Html;
use yii\helpers\Markdown;
?>
<?php /** @var $model \common\models\Product */ ?>
<!--
<div class="col-xs-12 well">
    <div class="col-xs-2">
        <?php
/*        $images = $model->images;
        if (isset($images[0])) {
            echo Html::img($images[0]->getUrl(), ['width' => '100%']);
        }
        */?>
    </div>
    <div class="col-xs-6">
        <h2><?/*= Html::encode($model->title) */?></h2>
        <?/*= Markdown::process($model->description) */?>
    </div>

    <div class="col-xs-4 price">
        <div class="row">
            <div class="col-xs-12">$<?/*= $model->price */?></div>
            <div class="col-xs-12"><?/*= Html::a('Add to cart', ['cart/add', 'id' => $model->id], ['class' => 'btn btn-success'])*/?></div>
        </div>
    </div>
</div>
-->
<div class="col-sm-4">
    <div class="product-image-wrapper">
        <div class="single-product">
            <div class="productinfo text-center">
                <?php
                    $images = $model->images;
                    $images = [
                        'images/home/product1.jpg',
                        'images/home/product2.jpg',
                        'images/home/product3.jpg',
                        'images/home/product4.jpg'
                    ];
                    if (isset($images[0])) {
                        echo Html::img($images[0]/*$images[0]->getUrl()*/, ['width' => '100%']);
                    }
                ?>
                <h2><?= $model->price ?> грн.</h2>
                <p><?= $model->title ?></p>
                <a href="#" class="btn btn-default add-to-cart">
                    <i class="fa fa-shopping-cart"></i>
                    В корзину
                </a>
            </div>
            <div class="product-overlay"></div>
        </div>
        <div class="choose">
            <ul class="nav nav-pills nav-justified">
                <li><a href="#"><i class="fa fa-plus-square"></i> В желаемые </a></li>

            </ul>
        </div>
    </div>
</div>