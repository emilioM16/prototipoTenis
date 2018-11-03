<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use app\assets\OthersAsset;
use yii\widgets\Breadcrumbs;

OthersAsset::register($this);

?>
<div class="container">

<?php
$this->title = 'Cancha N°'.$idCancha;
$this->params['breadcrumbs'][] = ['label' => 'Canchas', 'url' => ['canchas']];
$this->params['breadcrumbs'][] = $this->title;


?>

    <div class="site-cancha">

        <div class="page-header headerCancha">
            <h1 align="center">Cancha N° <?= $idCancha ?></h1>
        </div>



        <div class="row">
            <!-- <div class="col-lg-12"> -->
                <div class="col-lg-8">
                    <img src="/img/cancha1.jpg" class="img-thumbnail img-responsive">
                </div>
                <div class="col-lg-6">

                </div>
            <!-- </div> -->
        </div>
        <br>
        <div class="row">
            <div class="col-lg-12">
                <table class="table table-striped">
                    <thead>
                        <th> # </th>
                        <th> Fecha </th>
                        <th> Hora </th>
                        <th> Jugador uno </th>
                        <th> Jugador dos </th>
                        <th> Resultado </th>
                    </thead>
                </table>
            </div>
        </div>

    </div>
</div>
