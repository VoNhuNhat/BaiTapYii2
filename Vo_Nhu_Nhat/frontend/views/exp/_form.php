<?php
namespace common\models;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;
use yii\helpers\ArrayHelper;
use frontend\models\User;
use Yii;

/* @var $this yii\web\View */
/* @var $model frontend\models\Exp */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="exp-form">

    <?php $id = Yii::$app->user->getId(); ?>

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'exp_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'start_date')->widget(DatePicker::classname(), [
        'options' => ['placeholder' => 'Enter start date ...'],
        'pluginOptions' => [
            'autoclose'=>true,
            'format'=>'yyyy/mm/dd'
        ]
    ]);?>

    <?= $form->field($model, 'end_date')->widget(DatePicker::classname(), [
        'options' => ['placeholder' => 'Enter end date ...'],
        'pluginOptions' => [
            'autoclose'=>true,
            'format'=>'yyyy/mm/dd'
        ]
    ]);?>

    <?= $form->field($model, 'company')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
