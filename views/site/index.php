<?php

/* @var $this yii\web\View */

$this->title = 'TIGO';
?>
<link href="<?= \yii\helpers\Url::to('@web/css/index.css') ?>" rel="stylesheet" type="text/css"/>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
<div class="site-index">
	<div class="header">
		<div class="wrapper">
			<img src="<?= \yii\helpers\Url::to('@web/imgs/icons/icon__logo.svg') ?>" alt="Logo tigo" class="header__logo">
		</div>
	</div>
	<section class="banner">
		<div class="wrapper banner__container">
			<form action="#" class="form">
				<h2 class="form__title">Déjanos tus datos para recibir más información</h2>
				<div class="form__item">
					<input type="text" name="full-name" id="full-name" class="form__item-field" autocomplete="off" placeholder="Nombre y apellido">
					<label for="full-name" class="form__item-label">Nombre</label>
				</div>
				<div class="form__item">
					<input type="number" name="phone" id="full-name" class="form__item-field" autocomplete="off" placeholder="30XXXXXXX">
					<label for="full-name" class="form__item-label">Número móvil</label>
				</div>
				<div class="form__info">
					<p class="form__info-text"> Al presionar "Te llamamos" aceptas loss
						<a href="https://www.tigo.com.co/legal-y-regulatorio/politicas-tigo#politicas-tigo-terminos-y-condiciones-de-la-pagina-web" class="form__info-link"
						   target="_blank">
							términos y condiciones
						</a>
					</p>
					<button class="form__btn">TE LLAMAMOS</button>
				</div>
			</form>
			<div class="banner__info-content">
				<div class="banner__info">
					<p class="banner__info-text">PÁSATE A POSPAGO DESDE $45MIL</p>
					<p class="banner__info-text">DOBLE DE DATOS X6MESES</p>
					<p class="banner__info-text">+ 1ER MES GRATIS</p>
				</div>
				<span class="banner__terms">Aplican términos y condiciones</span>
			</div>
		</div>
	</section>
	<section class=""></section>
</div>
