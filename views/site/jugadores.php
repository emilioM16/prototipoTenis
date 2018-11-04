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
$this->title = 'Resultados de la búsqueda';
$this->params['breadcrumbs'][] = $this->title;



?>

    <div class="site-canchas">
        <div class="page-header">
            <h1>Resultados de la búsqueda de jugadores</h1>
        </div>
        <div class="row">
            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="thumbnail">
                        <img src="/img/jugador1.jpg" alt="...">
                    <div class="caption">
                        <h4>Juan Martín Del Potro</h4>
                        <p><?php echo FAS::i('chart-line');?> Ranking: 5°</p>
                        <p><?php echo FAS::i('flag');?> País de nacimiento: Argentina</p>
                        <?php 
                        echo Html::a('Ver',
                            [
                              'jugador',
                              'idJugador'=> 1,
                              'nombre'=>'Juan Martín Del Potro',
                              'ranking'=>'2',
                              'nroPre'=>'4',
                              'fechaNac'=> '23 de septiembre de 1988',
                              'ciudad'=>'Tandil',
                              'pais'=> 'Argentina'
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
                        <img src="/img/jugador2.jpg" alt="...">
                    <div class="caption">
                        <h4>Rafael Nadal</h4>
                        <p><?php echo FAS::i('chart-line');?> Ranking: 3°</p>
                        <p><?php echo FAS::i('flag');?> País de nacimiento: España</p>
                        <?php 
                        echo Html::a('Ver',
                            [
                              'jugador',
                              'idJugador'=> 2,
                              'nombre'=>'Rafael Nadal',
                              'ranking'=>'3',
                              'nroPre'=>'2',
                              'fechaNac'=> '3 de junio de 1986',
                              'ciudad'=>'Manacor',
                              'pais'=> 'España'
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
                        <img src="/img/jugador3.jpg" alt="...">
                    <div class="caption">
                        <h4>Novak Đoković</h4>
                        <p><?php echo FAS::i('chart-line');?> Ranking: 2°</p>
                        <p><?php echo FAS::i('flag');?> País de nacimiento: Serbia</p>
                        <?php 
                        echo Html::a('Ver',
                            [
                              'jugador',
                              'idJugador'=> 3,
                              'nombre'=>'Novak Đoković',
                              'ranking'=>'2',
                              'nroPre'=>'5',
                              'fechaNac'=> '22 de mayo de 1987',
                              'ciudad'=>'Belgrado',
                              'pais'=> 'Serbia'
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
                        <img src="/img/jugador4.jpg" alt="...">
                    <div class="caption">
                        <h4>Roger Federer</h4>
                        <p><?php echo FAS::i('chart-line');?> Ranking: 1°</p>
                        <p><?php echo FAS::i('flag');?> País de nacimiento: Suiza</p>
                        <?php 
                        echo Html::a('Ver',
                            [
                              'jugador',
                              'idJugador'=> 4,
                              'nombre'=>'Roger Federer',
                              'ranking'=>'1',
                              'nroPre'=>'6',
                              'fechaNac'=> '8 de agosto de 1981',
                              'ciudad'=>'Basilea',
                              'pais'=> 'Suiza'
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
</div>
