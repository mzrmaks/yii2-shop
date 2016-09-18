<?php
use yii\helpers\Html;
use yii\helpers\Markdown;
?>
<?php /** @var $model \common\models\Product */ ?>

<div class="col-sm-3">
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

    </div>
</div>
