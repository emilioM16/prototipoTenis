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
            <h1>Resultados de la búsqueda de partidos</h1>
        </div>
        <div class="row">
            <div class='col-lg-12'>
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="thumbnail">
                        <div class="caption">
                            <div class="row">
                                <div class="col-lg-6">
                                    <h3>Juan Martín Del Potro - Stanislas Wawrinka</h3>
                                    <p><?php echo FAS::i('calendar-alt');?> Fecha: 13/03/2018</p>
                                    <p><?php echo FAS::i('clock');?> Hora de inicio: 13:00 </p>
                                    <p><?php echo FAS::i('clock');?> Hora de finalización: 17:00 </p>
                                    <p><span class="glyphicon glyphicon-stats" aria-hidden="true"></span> Resultado: 6–1, 6–7, 6-2 </p>
                                    <p class="text-center">
                                    <?php 
                                        echo Html::a('Ver detalle',
                                            [
                                            'partido',
                                            'j1'=> 'Juan Martín del Potro',
                                            'j2'=> 'Stanislas Wawrinka',
                                            'fecha'=> '09/03/2018',
                                            'horaInicio'=> '13:00',
                                            'horaFin'=>'17:00',
                                            'resu'=>'6–1, 6–7, 6-2'
                                            ],
                                            [
                                            'class'=>'btn btn-lg btn-primary btnPartido',
                                            ]);
                                    ?> 
                                    </p> 
                                </div>
                                <div class="col-lg-6">
                                    <div class="col-lg-6"><img src="img/Juan Martín del Potro.png" alt="..." class="img-rounded imagenJugador"></div>
                                    <div class="col-lg-6"><img src="img/Stanislas Wawrinka.png" alt="..." class="img-rounded imagenJugador"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="thumbnail">
                        <div class="caption">
                            <div class="row">
                                <div class="col-lg-6">                    
                                    <h3>Roger Federer - Rafael Nadal</h3>
                                    <p><?php echo FAS::i('calendar-alt');?> Fecha: 13/03/2018</p>
                                    <p><?php echo FAS::i('clock');?> Hora de inicio: 13:00 </p>
                                    <p><?php echo FAS::i('clock');?> Hora de finalización: 17:00 </p>
                                    <p><span class="glyphicon glyphicon-stats" aria-hidden="true"></span> Resultado: 6-2, 6-4</p>
                                    <p class="text-center">
                                    <?php 
                                        echo Html::a('Ver detalle',
                                            [
                                            'partido',
                                            'j1'=> 'Roger Federer',
                                            'j2'=> 'Rafael Nadal',
                                            'fecha'=> '10/03/2018',
                                            'horaInicio'=> '12:00',
                                            'horaFin'=>'16:00',
                                            'resu'=>'6-2, 6-4'
                                            ],
                                            [
                                            'class'=>'btn btn-lg btn-primary btnPartido',
                                            ]);
                                    ?> 
                                    </p> 
                                </div>
                                <div class="col-lg-6">
                                    <div class="col-lg-6"><img src="img/Roger Federer.png" alt="..." class="img-rounded imagenJugador"></div>
                                    <div class="col-lg-6"><img src="img/Rafael Nadal.png" alt="..." class="img-rounded imagenJugador"></div>
                                </div>
                            </div>                           
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="thumbnail">
                        <div class="caption">
                            <div class="row">
                                <div class="col-lg-6">  
                                    <h3>Guido Pella - Marin Čilić</h3>
                                    <p><?php echo FAS::i('calendar-alt');?> Fecha: 13/03/2018</p>
                                    <p><?php echo FAS::i('clock');?> Hora de inicio: 13:00 </p>
                                    <p><?php echo FAS::i('clock');?> Hora de finalización: 17:00 </p>
                                    <p><span class="glyphicon glyphicon-stats" aria-hidden="true"></span> Resultado: 6–1, 6–7 </p>
                                    <p class="text-center">
                                    <?php 
                                        echo Html::a('Ver detalle',
                                            [
                                            'partido',
                                            'j1'=> 'Guido Pella',
                                            'j2'=> 'Marin Čilić',
                                            'fecha'=> '12/03/2018',
                                            'horaInicio'=> '09:00',
                                            'horaFin'=>'12:00',
                                            'resu'=>'6–1, 4–6, 6–3'
                                            ],
                                            [
                                            'class'=>'btn btn-lg btn-primary btnPartido',
                                            ]);
                                    ?> 
                                    </p> 
                                </div>
                                <div class="col-lg-6">
                                    <div class="col-lg-6"><img src="img/Guido Pella.png" alt="..." class="img-rounded imagenJugador"></div>
                                    <div class="col-lg-6"><img src="img/Marin Čilić.png" alt="..." class="img-rounded imagenJugador"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="thumbnail">
                        <div class="caption">
                            <div class="row">
                                <div class="col-lg-6">  
                                    <h3>Dominic Thiem - Novak Djokovic</h3>
                                    <p><?php echo FAS::i('calendar-alt');?> Fecha: 13/03/2018</p>
                                    <p><?php echo FAS::i('clock');?> Hora de inicio: 13:00 </p>
                                    <p><?php echo FAS::i('clock');?> Hora de finalización: 17:00 </p>
                                    <p><span class="glyphicon glyphicon-stats" aria-hidden="true"></span> Resultado: 6–1, 6–7 </p>
                                    <p class="text-center">
                                    <?php 
                                        echo Html::a('Ver detalle',
                                            [
                                            'partido',
                                            'j1'=> 'Dominic Thiem',
                                            'j2'=> 'Novak Djokovic',
                                            'fecha'=> '15/03/2018',
                                            'horaInicio'=> '10:00',
                                            'horaFin'=>'13:00',
                                            'resu'=>'6-4, 7-6(0)'
                                            ],
                                            [
                                            'class'=>'btn btn-lg btn-primary btnPartido',
                                            ]);
                                    ?> 
                                    </p> 
                                </div>
                                <div class="col-lg-6">
                                    <div class="col-lg-6"><img src="img/Dominic Thiem.png" alt="..." class="img-rounded imagenJugador"></div>
                                    <div class="col-lg-6"><img src="img/Novak Djokovic.png" alt="..." class="img-rounded imagenJugador"></div>
                                </div>
                            </div>                                
                        </div>
                    </div>
                </div>
            </div>
        </div>
     

    </div>
</div>
