<?php

use kartik\form\ActiveForm;
use yii\helpers\Html;
use kartik\grid\GridView;
use kartik\export\ExportMenu;
use kartik\date\DatePicker;

/* @var $this yii\web\View */
/* @var $searchModel app\models\FormsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
/* @var $startDate app\models\FormsSearch */
/* @var $endDate app\models\FormsSearch */

$this->title                     = 'Forms';
$this->params[ 'breadcrumbs' ][] = $this->title;

$columns = require(__DIR__ . '/_columns.php');

$fullExportMenu = ExportMenu::widget([
	 'dataProvider'    => $dataProvider,
	 'columns'         => $columns,
	 'pjaxContainerId' => 'crud-datatable-pjax',
	 'filename'        => 'tigo-registros',
	 'target'          => ExportMenu::TARGET_BLANK,
	 'fontAwesome'     => true,
	 'clearBuffers'    => true,
	 'exportConfig'    => [
		  ExportMenu::FORMAT_HTML => false,
		  ExportMenu::FORMAT_PDF  => false,
		  ExportMenu::FORMAT_TEXT => false,
	 ],
	 'dropdownOptions' => [
		  'label'       => 'Export',
		  'class'       => 'btn btn-default',
		  'itemsBefore' => [
				'<li class="dropdown-header">Export All Data</li>',
		  ],
	 ],
]);

?>
<div class="row">
	<div class="col-md-12">
		<div class="box box-default">
			<div class="box-body">
				<?php
				$form = ActiveForm::begin([
					 'action'               => ['index'],
					 'method'               => 'get',
					 'tooltipStyleFeedback' => true, // shows tooltip styled validation error feedback
				]);
				?>
				<?php echo '<label class="control-label">Date Range</label>';
				echo DatePicker::widget([
					 'model'         => $searchModel,
					 'attribute'     => 'startDate',
					 'attribute2'    => 'endDate',
					 'options'       => ['value' => $startDate],
					 'options2'      => ['value' => $endDate],
					 'type'          => DatePicker::TYPE_RANGE,
					 'form'          => $form,
					 'pluginOptions' => [
						  'format'    => 'yyyy-mm-dd',
						  'autoclose' => true,
					 ]
				]);
				?>
				<br/>
				<div class="form-group">
					<?= Html::submitButton('Filter', ['class' => 'btn btn-primary']) ?>
				</div>
				<?php ActiveForm::end(); ?>
			</div>
			<!-- /.box-body -->
		</div>
		<!-- /.box -->
	</div>
	<!-- /.col -->
</div>
<div class="forms-index">
	<h1><?= Html::encode($this->title) ?></h1>
	<?= GridView::widget([
		 'dataProvider' => $dataProvider,
		 'filterModel'  => $searchModel,
		 'columns'      => $columns,
		 'toolbar'      => [
			  $fullExportMenu,
		 ],
		 'panel'        => [
			  'type'    => 'primary',
			  'heading' => '<i class="glyphicon glyphicon-list"></i> Registros',
			  'before'  => '<em>* Resize table columns just like a spreadsheet by dragging the column edges.</em>',
			  'after'   => '<div class="clearfix"></div>',
		 ]
	]); ?>
</div>
