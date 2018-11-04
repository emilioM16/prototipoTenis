<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use app\assets\OthersAsset;
use yii\widgets\Breadcrumbs;
use yii\helpers\Url;
use rmrevin\yii\fontawesome\FAS;
use yii\bootstrap\ActiveForm;
OthersAsset::register($this);

?>
<div class="container">

<?php
$this->title = 'Buscador de partidos';
$this->params['breadcrumbs'][] = $this->title;



?>

    <div class="site-buscadorPartidos">
        <div class='row'>
            <div class='col-lg-4 col-lg-offset-4'>    

                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title" align='center' >Buscador de partidos</h3>
                    </div>
                    <div class="panel-body">
                        <form>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nombre y apellido </label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Nombre y apellido...">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Número de preclasificación </label>
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Número de preclasificación">
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Submit</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>