<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
use yii\helpers\Url;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>


<main>
    <div>
        <?= $content ?>
    </div>
	<a href="#" class="btn-wpp">
		<img src="<?= Url::to('@web/imgs/icons/icon__whatsapp-white.svg') ?>" alt="">
		<span>Ayuda</span>
	</a>
</main>
<!-- ============================================================== -->
<!-- Page plugins -->
<!-- ============================================================== -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="<?= Url::to('@web/js/register-form.js') ?>" type="text/javascript"></script>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
