<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\User */

$this->title = $model->username;
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="user-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <!-- <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?> -->
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            // 'id',
            // 'username',
            'firstname',
            'surname',
            [
                'attribute' => 'birthday',
                'value' => isset($model->birthday) ? Yii::$app->formatter->asDate($model->birthday, 'dd-MM-yyyy') : null,
            ],
            // 'auth_key',
            // 'password_hash',
            // 'password_reset_token',
            // 'email:email',
            'phone',
            [
                'attribute' => 'avatar',
                'format' => ['image', ['width' => '300', 'height' => '300']],
                'value' => '@web/uploads/'.$model->avatar,                
            ],
            // 'status',
            // 'created_at',
            // 'updated_at',
            // 'verification_token',
        ],
    ]) ?>

</div>
