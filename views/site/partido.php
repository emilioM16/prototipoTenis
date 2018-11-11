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
$this->title = $j1.' vs. '.$j2;
$this->params['breadcrumbs'][] = ['label' => 'Partidos', 'url' => ['partidos']];
$this->params['breadcrumbs'][] = $this->title;


?>

    <div class="site-cancha">

        <!-- <div class="page-header headerCancha">
            <h1 align="center">
                <?php
                    echo Html::a($j1,
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
                        'class'=>'',
                    ])
                    .'   '.
                     Html::a($j2,
                    [
                      'jugador',
                      'idJugador'=> 1,
                      'nombre'=>'Stanislas Wawrinka',
                      'ranking'=>'2',
                      'nroPre'=>'4',
                      'fechaNac'=> '23 de septiembre de 1988',
                      'ciudad'=>'Tandil',
                      'pais'=> 'Argentina'
                    ],
                    [
                      'class'=>'',
                    ]);
                ?>              
            </h1>
        </div> -->



        <div class="row headerCancha">
            <div class="col-lg-12 text-center">
                <div class="col-lg-5 imagenJugadorPartido">
                    <div class="row">
                        <h1 align="center">
                        <?php
                        echo Html::a($j1,
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
                            'class'=>'text-center',
                        ]);
                        ?>
                        </h1>
                    </div>
                    <div class="row">
                        <?php
                            echo Html::a('<img src="/img/'.$j1.'.png" alt="..." class="img-rounded">',
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
                                'class'=>'',
                            ]);
                        ?>
                        
                    </div>
                </div>
                <div class="col-lg-2 vs">
                    <h1 class="text-center"> vs. </h1>
                </div>
                <div class="col-lg-5 imagenJugadorPartido">
                    <div class="row">
                            <h1 align="center">
                            <?php
                                echo Html::a($j2,
                                [
                                'jugador',
                                'idJugador'=> 1,
                                'nombre'=>'Stanislas Wawrinka',
                                'ranking'=>'2',
                                'nroPre'=>'4',
                                'fechaNac'=> '23 de septiembre de 1988',
                                'ciudad'=>'Tandil',
                                'pais'=> 'Argentina'
                                ],
                                [
                                'class'=>'',
                                ]);
                            ?>
                            </h1>
                        </div>
                        <div class="row">
                            <?php
                                    echo Html::a('<img src="/img/'.$j2.'.png" alt="..." class="img-rounded">',
                                    [
                                    'jugador',
                                    'idJugador'=> 1,
                                    'nombre'=>'Stanislas Wawrinka',
                                    'ranking'=>'2',
                                    'nroPre'=>'4',
                                    'fechaNac'=> '23 de septiembre de 1988',
                                    'ciudad'=>'Tandil',
                                    'pais'=> 'Argentina'
                                    ],
                                    [
                                    'class'=>'',
                                    ]);
                                ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img src="/img/multimedia1.jpg" alt="...">
                        </div>
                        <div class="item">
                            <img src="/img/multimedia2.jpg" alt="...">
                        </div>
                        <div class="item">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/85u0eDQ_T4k"></iframe>
                            </div>
                        </div>
                    </div>

                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>            
            </div>
            <div class="col-lg-6 text-center">
                <div class="well">
                    <p><h4><u>Información del partido</u></h4></p><br>
                    <p><?php echo FAS::i('calendar-alt'). ' <b>Fecha:</b> '.$fecha ?></p>
                    <p><?php echo FAS::i('clock'). ' <b>Hora de inicio:</b> '.$horaInicio ?></p>
                    <p><?php echo FAS::i('clock'). ' <b>Hora de finalización:</b> '.$horaFin ?></p>
                    <p>
                        <?php 
                            echo FAS::i('table-tennis'); 
                            echo ' <b>Disputado en la cancha N°1</b> (';
                            echo Html::a('Ver información de la cancha',
                                [
                                  'cancha',
                                  'idCancha'=> 1,
                                ],
                                [
                                  'class'=>'',
                                ]);
                                
                        ?>)
                    </p>
                    <p>
                        <?php 
                            echo FAS::i('user'); 
                            echo ' <b>Juez de silla: </b>';
                            echo Html::a('Mohamed Lahyani',
                                [
                                  'juez',
                                ],
                                [
                                  'class'=>'',
                                ]);
                                
                        ?>
                    </p>
                    <p><?php echo FAS::i('chart-line').' <b>Resultado:</b> '.$resu ?></p>
                    <p><?php echo FAS::i('chart-line').' <b>Instancia:</b> '.$instancia ?></p>

                </div>
            </div>
        </div>   
    </div>
</div>
