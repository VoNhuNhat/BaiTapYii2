<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;

/* @var $this yii\web\View */
/* @var $model frontend\models\User */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <!-- <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?> -->

    <?= $form->field($model, 'firstname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'surname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'birthday')->widget(DatePicker::classname(), [
        'options' => ['placeholder' => 'Enter birth date ...'],
        'pluginOptions' => [
            'autoclose'=>true,
            'format'=>'yyyy/mm/dd'
        ]
    ]);?>

    <!-- <?= $form->field($model, 'auth_key')->textInput(['maxlength' => true]) ?> -->

    <!-- <?= $form->field($model, 'password_hash')->textInput(['maxlength' => true]) ?> -->

    <!-- <?= $form->field($model, 'password_reset_token')->textInput(['maxlength' => true]) ?> -->

    <!-- <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?> -->

    <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'file')->fileInput() ?>

    <!-- <?= $form->field($model, 'status')->textInput() ?> -->

    <!-- <?= $form->field($model, 'created_at')->textInput() ?> -->

    <!-- <?= $form->field($model, 'updated_at')->textInput() ?> -->

    <!-- <?= $form->field($model, 'verification_token')->textInput(['maxlength' => true]) ?> -->

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
