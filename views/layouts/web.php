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
			<div class="wrapper footer__wrapper">
				<p class="footer__section-1">
					© Tigo Colombia 2022. Servicios móviles prestados por Colombia Móvil S.A. E.S.P. | Servicios fijos prestados por UNE EPM Telecomunicaciones S.A. Todos los derechos
					reservados.
					<span>
						<a href="#" target="_blank" style="color: var(--secondary-tigo);">Términos y condiciones</a>
						|
						<a href="#" target="_blank" style="color: var(--secondary-tigo);">Política de protección de datos
							personales</a>
						|
						<a href="#" target="_blank" style="color: var(--secondary-tigo);">Mapa del sitio</a>
					</span>
				</p>
				<div class="footer__section-3">
					<ul class="footer__list-icons">
						<li>
							<a href="#" target="_blank">
								<img src="<?= \yii\helpers\Url::to('@web/imgs/icons/icon__facebook.svg') ?>" alt="icon" width="25">
							</a>
						</li>
						<li>
							<a href="#" target="_blank">
								<img src="<?= \yii\helpers\Url::to('@web/imgs/icons/icon__twitter.svg') ?>" alt="icon" width="25">
							</a>
						</li>
						<li>
							<a href="#" target="_blank">
								<img src="<?= \yii\helpers\Url::to('@web/imgs/icons/icon__instagram.svg') ?>" alt="icon" width="25">
							</a>
						</li>
						<li>
							<a href="#" target="_blank">
								<img src="<?= \yii\helpers\Url::to('@web/imgs/icons/icon__youtube.svg') ?>" alt="icon" width="25">
							</a>
						</li>
					</ul>
				</div>
				<div class="separator">|</div>
				<div class="footer__section-3">
					<span>
						<img src="<?= \yii\helpers\Url::to('@web/imgs/icons/icon__accesibility.svg') ?>" alt="icon" width="25">
					</span>
					<a href="#" target="_blank" class="footer__link">ACCESIBILIDAD</a>
				</div>
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
