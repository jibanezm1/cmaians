<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Proyectos */

$this->title = 'Create Proyectos';
$this->params['breadcrumbs'][] = ['label' => 'Proyectos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="proyectos-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
