<?php
use yii\helpers\Html;
use yii\widgets\ListView;
use yii\widgets\Menu;

/* @var $this yii\web\View */
$title = $category === null ? 'Home | E-Shopper' : $category->title;
$this->title = Html::encode($title);
?>

<!--<h1><?/*= Html::encode($title) */?></h1>-->

<section>
<div class="container">

  <div class="row">
      <div class="col-sm-3">
          <div class="left-sidebar">
          <h2>Category</h2>
              <div class="panel-group category-products" id="accordian">
              <!--category-productsr-->
              <?php foreach($menuItems as $item): ?>
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title">
                          <a  data-parrent="#accordian" href="#<?=$item['url'][0].'/'.$item['url']['id'];?>">
                              <span class="badge pull-right">
                                  <i class="fa fa-plus"> </i>
                              </span>
                              <?=$item['label'];?>
                          </a>
                      </h4>
                    </div>
                  </div>
               <?php endforeach; ?>

              </div>
              <div class="brands_products">
                  <h2> Brands </h2>
                  <div class="brands-name">
                      <ul class="nav nav-pills nav-stacked">
                          <?php foreach($brands as $brand): ?>
                            <li><a href="#"><?= $brand['name'] ?></a></li>
                          <?php endforeach; ?>
                      </ul>
                  </div>
              </div>
              <div class="price-range">
                  <h2>Price range</h2>
                  <div class="well text-center">
                      <div class="slider slider-horizontal" style="width: 164px;">
                          <div class="slider-track">
                              <div class="slider-selection" style="left: 41.6667%; width: 33.3333%;"></div>
                              <div class="slider-handle round left-round" style="left: 41.6667%;"></div>
                              <div class="slider-handle round" style="left: 75%;"></div>
                          </div>
                          <div class="tooltip top" style="top: -30px; left: 62.1667px;">
                              <div class="tooltip-arrow"></div>
                              <div class="tooltip-inner">250 : 450</div>
                          </div>
                          <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2">
                      </div>
                      <br>
                      <b class="pull-left">0 грн</b>
                      <b class="pull-right">6000 грн</b>
                  </div>
              </div>
              <div class="shipping text-center">
                  <img src="images/home/shipping.jpg" alt="">
              </div>
              <!--
          <?= Menu::widget([
              'items' => $menuItems,
              'options' => [
                  'class' => 'menu',
              ],
          ]) ?>
-->
      </div>

    </div>
    <div class="col-sm-9 padding-right">
        <div class="features_items">
            <h2 class="title text-center">
                FEATURES ITEMS
            </h2>

            <?= ListView::widget([
                'dataProvider' => $productsDataProvider,
                'itemView' => '_product',
                'summary' => ''
            ]) ?>
        </div>
        <div class="category-tab">
            <div class="col-sm-12">
                <ul class="nav nav-tabs">
                    <?php foreach($menuItems as $item): ?>
                            <li><a href="#<?= $item['label'] ?>" data-toggle="tab"><?= $item['label'] ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="tab-content">

              <?php foreach($menuItems as $item): ?>

                <?php if($item == $menuItems[1]): ?>
                      <div class="tab-pane fade active in" id="<?php echo $item['label']?>" >

                     <?= ListView::widget([
                         'dataProvider' => $productsTabDataProvider,
                         'itemView' => '_productTab',
                         'summary' => ''
                     ]) ?>
                      </div>
                     <?php continue; ?>

                <?php else: ?>
                 <div class="tab-pane fade" id="<?php echo $item['label']?>" >
                   <?= ListView::widget([
                         'dataProvider' => $productsTabDataProvider,
                         'itemView' => '_productTab',
                         'summary' => ''
                     ]) ?>
                 </div>
                <?php endif; ?>

              <?php endforeach; ?>
            </div>

        </div>
        <div class="recommended_items">
            <h2 class="title text-center">
                recommended items
            </h2>
            <div id="recommended-items-carousel" class="carousel slide" data-ride="carosuel">
                <div class="carousel-inner">
                    <div class="item active">
                        <?= ListView::widget([
                            'dataProvider' => $recommendedProductDataProvider,
                            'itemView' => '_recommendedProduct',
                            'summary' => ''
                        ]) ?>
                    </div>
                    <div class="item">
                        <?= ListView::widget([
                            'dataProvider' => $recommendedProductDataProvider,
                            'itemView' => '_recommendedProduct',
                            'summary' => ''
                        ]) ?>
                    </div>
                </div>
                <a href="#recommended-items-carousel" class="left recommended-item-control" data-slide="prev">
                    <i class="fa fa-angle-left"></i>
                </a>
                <a href="#recommended-items-carousel" class="right recommended-item-control" data-slide="next">
                    <i class="fa fa-angle-right"></i>
                </a>
            </div>
        </div>
    </div>
  </div>
</div>
</section>