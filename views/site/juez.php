<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use app\assets\OthersAsset;
use yii\widgets\Breadcrumbs;
use rmrevin\yii\fontawesome\FAS;
use yii\bootstrap\Modal;

OthersAsset::register($this);

?>
<div class='container'>

<?php
$this->title = 'Mohamed Lahyani';
$this->params['breadcrumbs'][] = ['label' => 'Partido', 'url' => ['partido']];
$this->params['breadcrumbs'][] = $this->title;

Modal::begin([

	'header'=>"<h4 align='center'>Partidos arbitrados</h4>",

	'id'=>'modalArbitrados',

	'size'=>'modal-md',

]);

echo "<div class='row'>
<div class='col-lg-12'>
    <div class='col-sm-12 col-md-12 col-lg-12'>
        <div class='thumbnail'>
            <div class='caption'>
                <div class='row'>
                    <div class='col-lg-12'>
                        <h3>Juan Martín Del Potro vs. Stanislas Wawrinka</h3>
                        <p><?php echo FAS::i('calendar-alt');?> <b>Fecha:</b> 09/03/2018</p>
                        <p><?php echo FAS::i('clock');?> <b>Hora de inicio:</b> 13:00 </p>
                        <p><?php echo FAS::i('clock');?> <b>Hora de finalización:</b> 17:00 </p>
                        <p><span class='glyphicon glyphicon-stats' aria-hidden='true'></span> <b>Resultado:</b> 6–1, 6–7, 6-2 </p>
                        <p class='text-center'>
                        ".Html::a('Ver detalle',
                                [
                                'partido',
                                'j1'=> 'Juan Martín Del Potro',
                                'j2'=> 'Stanislas Wawrinka',
                                'fecha'=> '09/03/2018',
                                'horaInicio'=> '13:00',
                                'horaFin'=>'17:00',
                                'resu'=>'6–1, 6–7, 6-2',
                                'instancia'=> 'Octavos de final'
                                ],
                                [
                                'class'=>'btn btn-lg btn-primary btnPartido',
                                ])."
                        
                        </p> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class='col-sm-12 col-md-12 col-lg-12'>
        <div class='thumbnail'>
            <div class='caption'>
                <div class='row'>
                    <div class='col-lg-12'>                    
                        <h3>Roger Federer vs. Rafael Nadal</h3>
                        <p><?php echo FAS::i('calendar-alt');?> <b>Fecha:</b>: 10/03/2018</p>
                        <p><?php echo FAS::i('clock');?> <b>Hora de inicio:</b> 12:00 </p>
                        <p><?php echo FAS::i('clock');?> <b>Hora de finalización:</b> 16:00 </p>
                        <p><span class='glyphicon glyphicon-stats' aria-hidden='true'></span> <b>Resultado:</b>  6-2, 6-4</p>
                        <p class='text-center'>
                        ".Html::a('Ver detalle',
                                [
                                'partido',
                                'j1'=> 'Roger Federer',
                                'j2'=> 'Rafael Nadal',
                                'fecha'=> '10/03/2018',
                                'horaInicio'=> '12:00',
                                'horaFin'=>'16:00',
                                'resu'=>'6-2, 6-4',
                                'instancia'=> 'Cuartos de final'
                                ],
                                [
                                'class'=>'btn btn-lg btn-primary btnPartido',
                                ])."
                       
                        </p> 
                    </div>
                </div>                           
            </div>
        </div>
    </div>
</div>
</div>";

Modal::end();

?>

    <div class='site-cancha'>

        <div class='page-header headerCancha'>
            <h1 align='center'> Mohamed Lahyani</h1>
        </div>



        <div class='row'>
            <!-- <div class='col-lg-12'> -->
                <div class='col-lg-12 text-center'>
                    <img src='/img/juez.jpg' class='img-thumbnail img-responsive'>
                </div>
        </div>
        <br>
        <div class='row'>
                <div class='col-lg-6 col-lg-offset-3'>
                    <div class='well'>
                        <p><?php echo FAS::i('calendar-alt'). ' <b>Fecha de nacimiento:</b> 27 de junio de 1966' ?></p>
                        <p><?php echo FAS::i('city'). ' <b>Ciudad de nacimiento:</b> Sus-Masa-Draa' ?></p>
                        <p><?php echo FAS::i('flag'). ' <b>País de nacimiento:</b> Marruecos' ?></p>
                        <p><?php echo FAS::i('chart-line').' <b>Tipo:</b> Juez de silla' ?></p>
                        <a data-toggle='modal' data-target='#modalArbitrados' style='cursor: pointer;'><?php echo FAS::i('baseball-ball') ?> Ver partidos arbitrados</a>

                    </div>
                </div>
            <!-- </div> -->
        </div>
    </div>
</div>