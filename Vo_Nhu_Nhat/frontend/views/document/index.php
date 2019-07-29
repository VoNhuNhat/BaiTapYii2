<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\DocumentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Documents';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="document-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Document', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

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

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
