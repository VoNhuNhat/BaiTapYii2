<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Document */

$this->title = $model->doc_name;
$this->params['breadcrumbs'][] = ['label' => 'Documents', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="document-view">

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
            'doc_name',
            'description',
            [
                'attribute' => 'content',
                'format' => 'raw',
                'value' => function ($data){
                    $url = Yii::getAlias('@web/document/').$data->content;
                    if ($data->content) {
                        $demo = explode('.', $data->content)[1];
                    }                    
                    if (isset($demo)) {
                        if ($demo == 'jpg' || $demo == 'png' || $demo == 'jpeg') {                        
                            return Html::img($url, ['alt' => 'Click để tải tài liệu', 'width' => '120', 'height' => '100']);
                        } else {
                            return Html::tag('a', $data->content, ['href' => $url]);
                        }
                    } else {
                        return Html::tag('p', 'Không có tài liệu');
                    }                                        
                },                
            ],
        ],
    ]) ?>

</div>
