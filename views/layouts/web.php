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
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=G-XKDJM75NVV"></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			
			function gtag() {
				dataLayer.push(arguments);
			}
			
			gtag('js', new Date());
			
			gtag('config', 'G-XKDJM75NVV');
		</script>
		<?php $this->head() ?>
	</head>
	<body>
		<?php $this->beginBody() ?>
		<main>
			<div>
				<?= $content ?>
			</div>
		</main>
		<footer class="footer">
			<div class="wrapper">
				<img src="<?= \yii\helpers\Url::to('@web/imgs/icons/icon__logo.svg') ?>" alt="logo tigo" width="50">
				<a href="#" class="form__info-link footer__link" target="_blank">Aviso de privacidad</a>
				<p class="footer__paragraph">Tigo 2022 Todos los derechos Reservados
					<br>
					La navegación de este sitio constituye la aceptación de los términos y condiciones de uso.
				</p>
			</div>
		</footer>
		<!-- ============================================================== -->
		<!-- Page plugins -->
		<!-- ============================================================== -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="<?= Url::to('@web/js/register-form.js') ?>" type="text/javascript"></script>
		<?php $this->endBody() ?>
	</body>
</html>
<?php $this->endPage() ?>
