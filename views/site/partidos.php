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
                                    <p><?php echo FAS::i('clock');?> Hora: 13:00 </p>
                                    <p><?php echo FAS::i('users');?> Jueces: Andreas Egli, Anne Ullrich, Jake Garner, John Blom, Greg Allensworth</p>
                                    <p class="text-center">
                                    <?php 
                                        echo Html::a('Ver detalle',
                                            [
                                            'partido',
                                            'j1'=> 'Juan Martín del Potro',
                                            'j2'=> 'Stanislas Wawrinka',
                                            
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
                                    <p><span class="glyphicon glyphicon-stats" aria-hidden="true"></span> Resultado pacial: 4–6 </p>
                                    <p><?php echo FAS::i('table-tennis');?> Disputado en la cancha N°2</p>
                                    <p><?php echo FAS::i('users');?> Jueces: Andreas Egli, Anne Ullrich, Jake Garner, John Blom, Greg Allensworth</p>
                                    <p class="text-center">
                                    <?php 
                                        echo Html::a('Ver detalle',
                                            [
                                            'partido',
                                            'idCancha'=> 3,
                                            ],
                                            [
                                            'class'=>'btn btn-lg btn-primary btnPartido',
                                            ]);
                                    ?> 
                                    </p>                                 </div>
                                <div class="col-lg-6">
                                        <div class="col-lg-6"><img src="img/federer.png" alt="..." class="img-rounded imagenJugador"></div>
                                        <div class="col-lg-6"><img src="img/nadal.png" alt="..." class="img-rounded imagenJugador"></div>
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
                                    <p><span class="glyphicon glyphicon-stats" aria-hidden="true"></span> Resultado pacial: 5–7, 6–4 </p>
                                    <p><?php echo FAS::i('table-tennis');?> Disputado en la cancha N°1</p>
                                    <p><?php echo FAS::i('users');?> Jueces: Andreas Egli, Anne Ullrich, Jake Garner, John Blom, Greg Allensworth</p>
                                    <p class="text-center">
                                    <?php 
                                        echo Html::a('Ver detalle',
                                            [
                                            'partido',
                                            'idCancha'=> 3,
                                            ],
                                            [
                                            'class'=>'btn btn-lg btn-primary btnPartido',
                                            ]);
                                    ?> 
                                    </p>                                 </div>
                                <div class="col-lg-6">
                                    <div class="col-lg-6"><img src="img/pell.png" alt="..." class="img-rounded imagenJugador"></div>
                                    <div class="col-lg-6"><img src="img/cilic.png" alt="..." class="img-rounded imagenJugador"></div>
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
                                    <p><span class="glyphicon glyphicon-stats" aria-hidden="true"></span> Resultado pacial: 2–6 </p>
                                    <p><?php echo FAS::i('table-tennis');?> Disputado en la cancha N°7</p>
                                    <p><?php echo FAS::i('users');?> Jueces: Andreas Egli, Anne Ullrich, Jake Garner, John Blom, Greg Allensworth</p>
                                    <p class="text-center">
                                    <?php 
                                        echo Html::a('Ver detalle',
                                            [
                                            'partido',
                                            'idCancha'=> 3,
                                            ],
                                            [
                                            'class'=>'btn btn-lg btn-primary btnPartido',
                                            ]);
                                    ?> 
                                    </p>                                 </div>
                                <div class="col-lg-6">
                                    <div class="col-lg-6"><img src="img/thiem.png" alt="..." class="img-rounded imagenJugador"></div>
                                    <div class="col-lg-6"><img src="img/djokovic.png" alt="..." class="img-rounded imagenJugador"></div>
                                </div>
                            </div>                                
                        </div>
                    </div>
                </div>
            </div>
        </div>
     

    </div>
</div>
