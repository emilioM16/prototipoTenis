<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use app\assets\OthersAsset;
use yii\widgets\Breadcrumbs;

OthersAsset::register($this);

?>
<div class="container">

<?php
$this->title = 'Cancha N°1';
$this->params['breadcrumbs'][] = ['label' => 'Canchas', 'url' => ['canchas']];
$this->params['breadcrumbs'][] = $this->title;


?>

    <div class="site-canchas">
       
    </div>
</div>
