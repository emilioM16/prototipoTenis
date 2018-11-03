<?php
use yii\bootstrap\Carousel;
use yii\helpers\Html;
use rmrevin\yii\fontawesome\FAS;
use yii\widgets\Breadcrumbs;
use edofre\sliderpro\models\Slide;
use edofre\sliderpro\models\slides\Caption;
use edofre\sliderpro\models\slides\Image;
use edofre\sliderpro\models\slides\Layer;
/* @var $this yii\web\View */
use app\assets\AppAsset;

AppAsset::register($this);
$this->title = 'Torneo ATP250';
$this->params['breadcrumbs'] = [];
// echo Breadcrumbs::widget([
//     'homeLink' => ['label' => 'Inicio',
//     'url' => Yii::$app->getHomeUrl()],
//     'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
// ]) 

?>

        <div class="jumbotron jumbo">
            <div class="row">
                
                <div class="col-lg-5 fotoJumbo ">
                    <div class="row">
                        <div class="col-lg-12">
                            <img id="logoATP" src="/img/logoAtpSimple.png">
                        </div>
                    </div>
                    <div class="row textoJumbo">
                        <hr>
                        <p>
                            ¡Bienvenido al sitio informativo del torneo ATP 250! Aquí podrá encontrar toda la información relativa a partidos, jugadores y canchas involucradas
                            en dicho torneo, el cual se desarrolla en el predio del Buenos Aires Lawn Tennis Club. 
                        </p>
                    </div>
                    <!-- <div class="row">
                        <div class='col-lg-12'>
                            <div class="col-lg-6"><span class="glyphicon glyphicon-ok" aria-hidden="true"> Buscar y ver información de los jugadores</span></div>
                            <div class="col-lg-6"><span class="glyphicon glyphicon-ok" aria-hidden="true">dasd</span></div>
                        </div>
                    </div> -->
                </div>
  
        
                <div class='col-lg-7'>
                    <?php
                        $slides = [
                            new Slide([
                                'items' => [
                                    new Image(['src' => '/img/11.jpg']),
                                ],
                            ]),
                            new Slide([
                                'items' => [
                                    new Image(['src' => '/img/3.jpg']),
                                    new Layer(['tag' => 'h3', 'content' => 'Busque y vea información de cada jugador en detalle', 'htmlOptions' => 
                                        ['class' => 
                                            'sp-black sp-padding', 
                                            'data-width' => "400", 
                                            'data-horizontal' => "5%", 
                                            'data-position'=> "bottom",
                                            'data-vertical' => "5%", 
                                            'data-show-delay' => "500",
                                            'data-show-transition' => "up", 
                                            'data-hide-transition' => "down",
                                            'data-hide-delay' => "500",
                                            ]]),
                                ],
                            ]),
                            new Slide([
                                'items' => [
                                    new Image(['src' => '/img/4.jpg']),
                                    new Layer(['tag' => 'h4', 'content' => 'Vea los partidos en desarrollo', 'htmlOptions' => 
                                        ['class' => 
                                            'sp-white sp-padding', 
                                            'data-width' => "300", 
                                            'data-horizontal' => "2%", 
                                            'data-vertical' => "30%", 
                                            'data-show-delay' => "500",
                                            'data-show-transition' => "left", 
                                            'data-hide-transition' => "up",
                                            'data-hide-delay' => "400",
                                            ]]),
                                    new Layer(['tag' => 'h4', 'content' => 'Busque partidos previos', 'htmlOptions' => 
                                        ['class' => 
                                            'sp-white sp-padding', 
                                            'data-width' => "300", 
                                            'data-horizontal' => "4%", 
                                            'data-vertical' => "45%", 
                                            'data-show-delay' => "600",
                                            'data-show-transition' => "left", 
                                            'data-hide-transition' => "up",
                                            'data-hide-delay' => "500",
                                        ]]),
                                        new Layer(['tag' => 'h4', 'content' => 'Vea información completa de cada partido', 'htmlOptions' => 
                                        ['class' => 
                                            'sp-white sp-padding', 
                                            'data-width' => "300", 
                                            'data-horizontal' => "6%", 
                                            'data-vertical' => "60%", 
                                            'data-show-delay' => "700",
                                            'data-show-transition' => "left", 
                                            'data-hide-transition' => "up",
                                            'data-hide-delay' => "600",
                                        ]]),
                                ],
                            ]),
                            new Slide([
                                'items' => [
                                    new Image(['src' => '/img/10.jpg']),
                                    new Layer(['tag' => 'h4', 'content' => 'Visualice las canchas del predio', 'htmlOptions' => 
                                    ['class' => 
                                        'sp-black sp-padding', 
                                        'data-width' => "250", 
                                        'data-horizontal' => "5%", 
                                        'data-position'=> "top",
                                        'data-vertical' => "5%", 
                                        'data-show-delay' => "500",
                                        'data-show-transition' => "left", 
                                        'data-hide-transition' => "down",
                                        'data-hide-delay' => "500",
                                        ]]),
                                ],
                            ]),

                        ];

                        ?>

                        <?= \edofre\sliderpro\SliderPro::widget([
                            'id'            => 'my-slider',
                            'slides'        => $slides,
                            // 'thumbnails'    => $thumbnails,
                            'sliderOptions' => [
                                'width'  => '100%',
                                'height' => 500,
                                'arrows' => true,
                                'buttons'=> false,
                                'waitForLayers'=> true,
                                'init'   => new \yii\web\JsExpression("
                                    function() {
                                        console.log('slider is initialized');
                                    }
                                "),
                            ],
                        ]);
                        ?>
                    </div>
        </div>
</div>


<div id="tituloPartidos">
    <h3>Partidos actualmente en desarrollo</h3>
    <hr>
</div>

<div class="row">
    <div class='col-lg-12'>
        <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="thumbnail">
            <div class="caption">
                <h3>Juan Martín Del Potro - Rafael Nadal</h3>
                <p><span class="glyphicon glyphicon-stats" aria-hidden="true"></span> Resultado pacial: 6–1, 6–7 </p>
                <p><?php echo FAS::i('table-tennis');?> Disputándose en la cancha N°4</p>
                <p><?php echo FAS::i('users');?> Jueces: Andreas Egli, Anne Ullrich, Jake Garner, John Blom, Greg Allensworth</p>
                <p><a href="#" class="btn btn-primary" role="button">Ver más</a></p>
            </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="thumbnail">
            <div class="caption">
                <h3>Roger Federer - Stanislas Wawrinka</h3>
                <p><span class="glyphicon glyphicon-stats" aria-hidden="true"></span> Resultado pacial: 4–6 </p>
                <p><?php echo FAS::i('table-tennis');?> Disputándose en la cancha N°2</p>
                <p><?php echo FAS::i('users');?> Jueces: Andreas Egli, Anne Ullrich, Jake Garner, John Blom, Greg Allensworth</p>
                <p><a href="#" class="btn btn-primary" role="button">Ver más</a></p>
            </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="thumbnail">
            <div class="caption">
                <h3>Guido Pella - Novak Djokovic</h3>
                <p><span class="glyphicon glyphicon-stats" aria-hidden="true"></span> Resultado pacial: 5–7, 6–4 </p>
                <p><?php echo FAS::i('table-tennis');?> Disputándose en la cancha N°1</p>
                <p><?php echo FAS::i('users');?> Jueces: Andreas Egli, Anne Ullrich, Jake Garner, John Blom, Greg Allensworth</p>
                <p><a href="#" class="btn btn-primary" role="button">Ver más</a></p>
            </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="thumbnail">
            <div class="caption">
                <h3>Dominic Thiem - Marin Čilić</h3>
                <p><span class="glyphicon glyphicon-stats" aria-hidden="true"></span> Resultado pacial: 2–6 </p>
                <p><?php echo FAS::i('table-tennis');?> Disputándose en la cancha N°7</p>
                <p><?php echo FAS::i('users');?> Jueces: Andreas Egli, Anne Ullrich, Jake Garner, John Blom, Greg Allensworth</p>
                <p><a href="#" class="btn btn-primary" role="button">Ver más</a></p>
            </div>
            </div>
        </div>
    </div>
</div>