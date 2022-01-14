<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use kartik\export\ExportMenu;

/* @var $this yii\web\View */
/* @var $searchModel app\models\FormsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Forms';
$this->params['breadcrumbs'][] = $this->title;

$columns = require(__DIR__.'/_columns.php');

$fullExportMenu = ExportMenu::widget([
    'dataProvider'    => $dataProvider,
    'columns'         => $columns,
    'pjaxContainerId' => 'crud-datatable-pjax',
    'filename'        => 'tigo-registros',
    'target'          => ExportMenu::TARGET_BLANK,
    'fontAwesome'     => true,
    'clearBuffers'    => true,
    'exportConfig' => [
        ExportMenu::FORMAT_HTML => false,
        ExportMenu::FORMAT_PDF  => false,
        ExportMenu::FORMAT_TEXT => false,
    ],
    'dropdownOptions' => [
        'label' => 'Export',
        'class' => 'btn btn-default',
        'itemsBefore' => [
            '<li class="dropdown-header">Export All Data</li>',
        ],
    ],
]);

?>
<div class="forms-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => $columns,
        'toolbar'=>[
            $fullExportMenu,
        ],
        'panel' => [
            'type' => 'primary',
            'heading' => '<i class="glyphicon glyphicon-list"></i> Registros',
            'before'=>'<em>* Resize table columns just like a spreadsheet by dragging the column edges.</em>',
            'after'=> '<div class="clearfix"></div>',
        ]
    ]); ?>

</div>
