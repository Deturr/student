<?php

use app\models\Student;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\StudentSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Overzicht Studenten die te laat waren';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="student-index">

    <h1><?= Html::encode($this->title) ?></h1>


    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            //['class' => 'yii\grid\SerialColumn'],
            //'id',
            [
                'attribute' => 'naam',
                  'label'     => 'Naam Student',
            ],
            'klas',
            [
                'attribute' => 'minuten',
                  'label'     => 'Minuten te laat',
            ],
            [
                'attribute' => 'reden',
                  'label'     => 'Reden te laat',
            ],
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Student $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); 
    ?>

<p>
        <?= Html::a('Weer eentje telaat!', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<table>
        <h3>Statistieken</h3>
        <p>Hoogste aantal minuten te laat: <?php echo $hoogste;; ?></p>
        <p>Gemiddeld aantal minuten te laat: <?php echo $gemiddelde; ?></p>
        <p>Totaal aantal minuten te laat: <?php echo $totaal; ?></p>
</table>

</div>