<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use app\assets\OthersAsset;
use yii\widgets\Breadcrumbs;
use rmrevin\yii\fontawesome\FAS;

OthersAsset::register($this);

?>
<div class="container">

<?php
$this->title = 'Mohamed Lahyani';
$this->params['breadcrumbs'][] = ['label' => 'Partido', 'url' => ['partido']];
$this->params['breadcrumbs'][] = $this->title;


?>

    <div class="site-cancha">

        <div class="page-header headerCancha">
            <h1 align="center"> Mohamed Lahyani</h1>
        </div>



        <div class="row">
            <!-- <div class="col-lg-12"> -->
                <div class="col-lg-12 text-center">
                    <img src="/img/juez.jpg" class="img-thumbnail img-responsive">
                </div>
        </div>
        <br>
        <div class="row">
                <div class="col-lg-6 col-lg-offset-3">
                    <div class="well">
                        <p><?php echo FAS::i('calendar-alt'). ' <b>Fecha de nacimiento:</b> 27 de junio de 1966' ?></p>
                        <p><?php echo FAS::i('city'). ' <b>Ciudad de nacimiento:</b> Sus-Masa-Draa' ?></p>
                        <p><?php echo FAS::i('flag'). ' <b>País de nacimiento:</b> Marruecos' ?></p>
                        <p><?php echo FAS::i('chart-line').' <b>Tipo:</b> Juez de silla' ?></p>

                    </div>
                </div>
            <!-- </div> -->
        </div>
    </div>
</div>