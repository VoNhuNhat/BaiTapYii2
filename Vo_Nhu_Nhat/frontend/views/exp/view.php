<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Exp */

$this->title = $model->exp_name;
$this->params['breadcrumbs'][] = ['label' => 'Exps', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="exp-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            // 'id',
            // 'user_id',
            'exp_name',
            [
                'attribute' => 'start_date',
                'value' => isset($model->start_date) ? Yii::$app->formatter->asDate($model->start_date, 'dd-MM-yyyy') : null,
            ],
            [
                'attribute' => 'end_date',
                'value' => isset($model->end_date) ? Yii::$app->formatter->asDate($model->end_date, 'dd-MM-yyyy') : null,
            ],
            'company',
            'description',
        ],
    ]) ?>

</div>
