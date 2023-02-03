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
    <meta http-equiv="cache-control" content="max-age=0">
    <meta http-equiv="cache-control" content="no-cache">
    <meta http-equiv="expires" content="0">
    <meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT">
    <meta http-equiv="pragma" content="no-cache">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta content="noindex" name="robots">
    <meta name="description" content="Elegí el plan pospago y recibí WhatsApp gratis">
    <meta name="keywords" content="">
    <meta name="author" content="movistar">
    <meta name="viewport" content="width=480, user-scalable=no" id="viewport">
    <meta name="MobileOptimized" content="480" id="wViewport">
    <link rel="shortcut icon" type="image/x-icon" href="./images/favicon.ico">
    <!-- Carga de fuentes -->
    <link rel="preload" href="./fonts/TelefonicaWeb-Light.ttf" as="font" crossorigin="anonymous">
    <link rel="preload" href="./fonts/TelefonicaWeb-Regular.ttf" as="font" crossorigin="anonymous">
    <link rel="preload" href="./fonts/TelefonicaWeb-Bold.ttf" as="font" crossorigin="anonymous">
    <link rel="preload" href="./fonts/Guthen-Bloots-Alt1.ttf" as="font" crossorigin="anonymous">
    <!-- Estilos -->
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/libraries.min.css">
    <link rel="stylesheet" href="./css/styles-portabilidad-v4.min.css">
    <!-- Scripts JS -->
    <script src="./js/jquery.min.js" type="text/javascript"></script>
    <!-- <script defer="" src="./js/site.min.js" type="text/javascript"></script> -->
    <script defer="" src="./js/planesGenerator-v1.min.js" type="text/javascript"></script>
    <script defer="" src="./js/libraries.min.js" type="text/javascript"></script>
    <script defer="" src="./js/sliders.min.js" type="text/javascript"></script>
    <script defer="" src="./js/automatizaWhatsapp.js" type="text/javascript"></script>
    <script async="" src="./js/analyticsEvents.min.js" type="text/javascript"></script>
    <script async="" src="./js/inputEventsHandler.min.js" type="text/javascript"></script>
    <script async="" src="./js/modernizr-custom.js" type="text/javascript"></script>
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
		</main>
		<?php $this->endBody() ?>
    <script async="" src="./js/register-form.js" type="text/javascript"></script>
	</body>
</html>
<?php $this->endPage() ?>
