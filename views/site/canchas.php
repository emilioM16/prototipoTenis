<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use app\assets\OthersAsset;
use yii\widgets\Breadcrumbs;
use yii\helpers\Url;
use rmrevin\yii\fontawesome\FAS;
OthersAsset::register($this);

?>
<div class="container contenedorListado">

<?php
$this->title = 'Canchas';
$this->params['breadcrumbs'][] = $this->title;



?>

    <div class="site-canchas">
        <div class="page-header">
            <h1>Canchas<p><small>Listado de las canchas del predio</small></p></h1>
        </div>
        <div class="row">
            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="thumbnail">
                        <img src="/img/cancha1.jpg" alt="...">
                    <div class="caption">
                        <h4>Cancha N°1</h4>
                        <p><?php echo FAS::i('clock');?> Disponible de 12:00 a 15:00 </p>
                        <p><?php echo FAS::i('users');?> Capacidad: 800 personas</p>
                        <?php 
                        echo Html::a('Ver',
                            [
                              'cancha',
                            ],
                            [
                              'class'=>'btn btn-md btn-primary btnVer',
                            ]);
                            ?>  
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="thumbnail">
                        <img src="/img/cancha2.jpg" alt="...">
                    <div class="caption">
                        <h4>Cancha N°2</h4>
                        <p><?php echo FAS::i('clock');?> Disponible de 9:00 a 14:00 </p>
                        <p><?php echo FAS::i('users');?> Capacidad: 10 personas</p>
                        <?php 
                        echo Html::a('Ver',
                            [
                              'cancha',
                            ],
                            [
                              'class'=>'btn btn-md btn-primary btnVer',
                            ]);
                            ?>                  
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="thumbnail">
                        <img src="/img/cancha6.jpg" alt="...">
                    <div class="caption">
                        <h4>Cancha N°3</h4>
                        <p><?php echo FAS::i('clock');?> Disponible de 9:00 a 12:00 </p>
                        <p><?php echo FAS::i('users');?> Capacidad: 50 personas</p>
                        <?php 
                        echo Html::a('Ver',
                            [
                              'cancha',
                            ],
                            [
                              'class'=>'btn btn-md btn-primary btnVer',
                            ]);
                            ?>  
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="thumbnail">
                        <img src="/img/cancha4.jpg" alt="...">
                    <div class="caption">
                        <h4>Cancha N°4</h4>
                        <p><?php echo FAS::i('clock');?> Disponible de 13:00 a 18:00 </p>
                        <p><?php echo FAS::i('users');?> Capacidad: 30 personas</p>
                        <?php 
                        echo Html::a('Ver',
                            [
                              'cancha',
                            ],
                            [
                              'class'=>'btn btn-md btn-primary btnVer',
                            ]);
                            ?>  
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="thumbnail">
                        <img src="/img/cancha5.jpg" alt="...">
                    <div class="caption">
                        <h4>Cancha N°5</h4>
                        <p><?php echo FAS::i('clock');?> Disponible de 9:00 a 10:00 </p>
                        <p><?php echo FAS::i('users');?> Capacidad: 10 personas</p>
                        <?php 
                        echo Html::a('Ver',
                            [
                              'cancha',
                            ],
                            [
                              'class'=>'btn btn-md btn-primary btnVer',
                            ]);
                            ?>  
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="thumbnail">
                        <img src="/img/cancha3.jpg" alt="...">
                    <div class="caption">
                        <h4>Cancha N°6</h4>
                        <p><?php echo FAS::i('clock');?> Disponible de 13:00 a 15:00 </p>
                        <p><?php echo FAS::i('users');?> Capacidad: 700 personas</p>
                        <?php 
                        echo Html::a('Ver',
                            [
                              'cancha',
                            ],
                            [
                              'class'=>'btn btn-md btn-primary btnVer',
                            ]);
                            ?>  
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
