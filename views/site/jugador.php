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
$this->title = $nombre;
$this->params['breadcrumbs'][] = ['label' => 'Jugadores', 'url' => ['jugadores']];
$this->params['breadcrumbs'][] = $this->title;


?>

    <div class="site-cancha">

        <div class="page-header headerCancha">
            <h1 align="center"><?= $nombre ?></h1>
        </div>



        <div class="row">
            <!-- <div class="col-lg-12"> -->
                <div class="col-lg-6">
                    <img src="/img/jugador<?= $idJugador ?>.jpg" class="img-thumbnail img-responsive">
                </div>
                <div class="col-lg-6">
                    <div class="well">
                        <p><?php echo FAS::i('calendar-alt'). ' <b>Fecha de nacimiento:</b> '.$fechaNac ?></p>
                        <p><?php echo FAS::i('city'). ' <b>Ciudad de nacimiento:</b> '.$ciudad ?></p>
                        <p><?php echo FAS::i('flag'). ' <b>País de nacimiento:</b> '.$pais ?></p>
                        <p><?php echo FAS::i('chart-line').' <b>Ranking:</b> '.$ranking.'°' ?></p>
                        <p><?php echo FAS::i('chart-line').' <b>Número de preclasificación:</b> '.$nroPre.'°' ?></p>

                    </div>
                </div>
            <!-- </div> -->
        </div>
        <br>
        <!-- <div class="row"> -->
        <div class="page-header headerUltimosPartidos">
            <h4 align="left">Últimos tres partidos jugados</h4>
        <!-- </div> -->
        </div>
        <div class="row">
            <div class="col-lg-12">
                <table class="table table-striped table-responsive">
                    <thead>
                        <th> # </th>
                        <th> Fecha </th>
                        <th> Hora </th>
                        <th> Jugador uno </th>
                        <th> Jugador dos </th>
                        <th> Resultado </th>
                        <th></th>
                    </thead>
                    <tbody>
                        <tr>
                            <td> 1 </td>
                            <td> 03/04/2018</td>
                            <td> 15:00 </td>
                            <td> <?= $nombre ?> </td>
                            <td> Roger Federer </td>
                            <td> 6–1, 6–7, 6-2 </td>
                            <td> 
                                <?php 
                                    echo Html::a(FAS::i('eye'),
                                    [
                                    'partido',
                                    ],
                                    [
                                    'class'=>'btn btn-primary',
                                    'data-toggle'=> 'tooltip',
                                    'data-placement'=> 'left',
                                    'title'=> 'Ver',
                                    ]);
                                ?>  
                            </td>
                        </tr>
                        <tr>
                            <td> 2 </td>
                            <td> 01/04/2018</td>
                            <td> 9:00 </td>
                            <td> <?= $nombre ?> </td>
                            <td> Roberto Carballés </td>
                            <td> 6-3, 4-6, 6-4 </td>
                            <td> 
                                <?php 
                                    echo Html::a(FAS::i('eye'),
                                    [
                                    'partido',
                                    ],
                                    [
                                    'class'=>'btn btn-primary',
                                    'data-toggle'=> 'tooltip',
                                    'data-placement'=> 'left',
                                    'title'=> 'Ver',
                                    ]);
                                ?>  
                            </td>                            
                        </tr>
                        <tr>
                            <td> 3 </td>
                            <td> 24/03/2018</td>
                            <td> 16:00 </td>
                            <td> <?= $nombre ?>  </td>
                            <td> Richard Gasquet </td>
                            <td> 7-6(2), 6-4 </td>
                            <td> 
                                <?php 
                                    echo Html::a(FAS::i('eye'),
                                    [
                                    'partido',
                                    ],
                                    [
                                    'class'=>'btn btn-primary',
                                    'data-toggle'=> 'tooltip',
                                    'data-placement'=> 'left',
                                    'title'=> 'Ver',
                                    ]);
                                ?>  
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>
