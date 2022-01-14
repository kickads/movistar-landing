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
			<form class="form">
				<h2 class="form__title">Déjanos tus datos para recibir más información</h2>
				<div class="form__item">
					<input type="text" name="full-name" id="full-name" class="form__item-field" autocomplete="off" placeholder="Nombre y apellido">
					<label for="full-name" class="form__item-label">Nombre</label>
				</div>
				<div class="form__item">
					<input type="number" name="phone" id="phone" class="form__item-field" autocomplete="off" placeholder="30XXXXXXX">
					<label for="full-name" class="form__item-label">Número móvil</label>
				</div>
                <div>
                    <input type="hidden" id="form-ktoken" name="form-ktoken" value="<?php echo $ktoken ?>">
                    <input type="hidden" id="form-pubId" name="form-pubId" value="<?php echo $pubId ?>">
                    <input type="hidden" id="form-providerId" name="form-providerId" value="<?php echo $providerId ?>">
                    <h5 class="errorContent red-text">
                        *Verifica que tus datos estén correctos.
                    </h5>
                    <h5 class="successContent green-text">
                        Muchas gracias. En breve te contactaremos.
                    </h5>
                </div>
				<div class="form__info">
					<p class="form__info-text"> Al presionar "Te llamamos" aceptas los
						<a href="https://www.tigo.com.co/legal-y-regulatorio/politicas-tigo#politicas-tigo-terminos-y-condiciones-de-la-pagina-web" class="form__info-link"
						   target="_blank">
							términos y condiciones
						</a>
					</p>
					<button class="form__btn" id="register">TE LLAMAMOS</button>
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
	<section class="plans">
		<div class="plans__container wrapper">
			<div class="plans__container-1">
				<h2 class="plans__title">¡Elige el servicio que prefieras!</h2>
				<p class="plans__text">Con los nuevos planes pospago puedes compartir datos a tu computador o tablet.</p>
			</div>
			<div class="plans__container-2">
				<div class="cards-mob">
					<div class="card-accordion">
						<div class="tabs">
							<div class="tab">
								<input type="checkbox" id="chck1">
								<label class="tab-label" for="chck1">
									<div class="tab-info">
										<div class="tab-info__content-1">
											<div>ANTES 25GB</div>
											<div>Ahora 50GB</div>
										</div>
										<div class="tab-info__content-2">$45MIL</div>
									</div>
								</label>
								<div class="tab-content">
									<div class="tab-content__header-1">
										<p></p>
										<hr>
									</div>
									<ul class="tab-content__items">
										<li>
											<img src="<?= \yii\helpers\Url::to('@web/imgs/icons/icon__check.svg') ?>" alt="icon">
											<span>Hasta 8GB de internet para compartir</span>
										</li>
										<li>
											<img src="<?= \yii\helpers\Url::to('@web/imgs/icons/icon__check.svg') ?>" alt="icon">
											<span>Disfruta de Facebook, WhatsApp e Instagram sin consumir datos</span>
										</li>
										<li>
											<img src="<?= \yii\helpers\Url::to('@web/imgs/icons/icon__amazon-prime.svg') ?>" alt="icon">
											<span>3 meses de cortesía Amazon Prime Video. Luego, $17.900 al mes</span>
										</li>
										<li>
											<img src="<?= \yii\helpers\Url::to('@web/imgs/icons/icon__amazon-music.svg') ?>" alt="icon">
											<span>1 mes de cortesía Amazon Music. Luego, $14.900 al mes</span>
										</li>
										<li>
											<img src="<?= \yii\helpers\Url::to('@web/imgs/icons/icon__deezer.svg') ?>" alt="icon">
											<span>Deezer es 3 meses de cortesía luego $14.900</span>
										</li>
										<li>
											<img src="<?= \yii\helpers\Url::to('@web/imgs/icons/icon__check.svg') ?>" alt="icon">
											<span>Llamadas ilimitadas LDI a EEUU, Puerto Rico y Canadá.</span>
										</li>
										<li>
											<img src="<?= \yii\helpers\Url::to('@web/imgs/icons/icon__check.svg') ?>" alt="icon">
											<span>Voz y SMS ilimitados a todo destino nacional</span>
										</li>
									</ul>
								</div>
							</div>
							<div class="tab">
								<input type="checkbox" id="chck2">
								<label class="tab-label" for="chck2">
									<div class="tab-info">
										<div class="tab-info__content-1">
											<div>ANTES 40GB</div>
											<div>Ahora 80GB</div>
										</div>
										<div class="tab-info__content-2">$60MIL</div>
									</div>
								</label>
								<div class="tab-content">
									<div class="tab-content__header-2">
										<p></p>
										<hr>
									</div>
									<ul class="tab-content__items">
										<li>
											<img src="<?= \yii\helpers\Url::to('@web/imgs/icons/icon__check.svg') ?>" alt="icon">
											<span>Hasta 22 GB de internet para compartir</span>
										</li>
										<li>
											<img src="<?= \yii\helpers\Url::to('@web/imgs/icons/icon__check.svg') ?>" alt="icon">
											<span>Disfruta de Facebook, WhatsApp e Instagram sin consumir datos</span>
										</li>
										<li>
											<img src="<?= \yii\helpers\Url::to('@web/imgs/icons/icon__amazon-prime.svg') ?>" alt="icon">
											<span>3 meses de cortesía Amazon Prime Video. Luego, $17.900 al mes</span>
										</li>
										<li>
											<img src="<?= \yii\helpers\Url::to('@web/imgs/icons/icon__amazon-music.svg') ?>" alt="icon">
											<span>1 mes de cortesía Amazon Music. Luego, $14.900 al mes</span>
										</li>
										<li>
											<img src="<?= \yii\helpers\Url::to('@web/imgs/icons/icon__deezer.svg') ?>" alt="icon">
											<span>Deezer es 3 meses de cortesía luego $14.900</span>
										</li>
										<li>
											<img src="<?= \yii\helpers\Url::to('@web/imgs/icons/icon__check.svg') ?>" alt="icon">
											<span>Llamadas ilimitadas LDI a EEUU, Puerto Rico y Canadá.</span>
										</li>
										<li>
											<img src="<?= \yii\helpers\Url::to('@web/imgs/icons/icon__check.svg') ?>" alt="icon">
											<span>Voz y SMS ilimitados a todo destino nacional</span>
										</li>
									</ul>
								</div>
							</div>
							<div class="tab">
								<input type="checkbox" id="chck3">
								<label class="tab-label" for="chck3">
									<div class="tab-info">
										<div class="tab-info__content-1">
											<div>ANTES 75GB</div>
											<div>Ahora 150GB</div>
										</div>
										<div class="tab-info__content-2">$75MIL</div>
									</div>
								</label>
								<div class="tab-content">
									<div class="tab-content__header-3">
										<p></p>
										<hr>
									</div>
									<ul class="tab-content__items">
										<li>
											<img src="<?= \yii\helpers\Url::to('@web/imgs/icons/icon__check.svg') ?>" alt="icon">
											<span>Hasta 45GB de internet para compartir</span>
										</li>
										<li>
											<img src="<?= \yii\helpers\Url::to('@web/imgs/icons/icon__check.svg') ?>" alt="icon">
											<span>Disfruta de Facebook, WhatsApp e Instagram sin consumir datos</span>
										</li>
										<li>
											<img src="<?= \yii\helpers\Url::to('@web/imgs/icons/icon__amazon-prime.svg') ?>" alt="icon">
											<span>3 meses de cortesía Amazon Prime Video. Luego, $17.900 al mes</span>
										</li>
										<li>
											<img src="<?= \yii\helpers\Url::to('@web/imgs/icons/icon__amazon-music.svg') ?>" alt="icon">
											<span>1 mes de cortesía Amazon Music. Luego, $14.900 al mes</span>
										</li>
										<li>
											<img src="<?= \yii\helpers\Url::to('@web/imgs/icons/icon__deezer.svg') ?>" alt="icon">
											<span>Deezer es 3 meses de cortesía luego $14.900</span>
										</li>
										<li>
											<img src="<?= \yii\helpers\Url::to('@web/imgs/icons/icon__check.svg') ?>" alt="icon">
											<span>Llamadas ilimitadas LDI a EEUU, Puerto Rico y Canadá.</span>
										</li>
										<li>
											<img src="<?= \yii\helpers\Url::to('@web/imgs/icons/icon__check.svg') ?>" alt="icon">
											<span>Voz y SMS ilimitados a todo destino nacional</span>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="cards-desk">
					<div class="benefits">
						<div class="benefits__header">
							<div>ANTES 25GB</div>
							<div>Ahora 50GB</div>
							<div>$45MIL</div>
							<div>IVA incluido</div>
						</div>
						<div class="benefits__body">
							<ul class="benefits__items">
								<li>
									<img src="<?= \yii\helpers\Url::to('@web/imgs/icons/icon__check.svg') ?>" alt="icon">
									<span>Hasta 8GB de internet para compartir</span>
								</li>
								<li>
									<img src="<?= \yii\helpers\Url::to('@web/imgs/icons/icon__check.svg') ?>" alt="icon">
									<span>Disfruta de Facebook, WhatsApp e Instagram sin consumir datos</span>
								</li>
								<li>
									<img src="<?= \yii\helpers\Url::to('@web/imgs/icons/icon__amazon-prime.svg') ?>" alt="icon">
									<span>3 meses de cortesía Amazon Prime Video. Luego, $17.900 al mes</span>
								</li>
								<li>
									<img src="<?= \yii\helpers\Url::to('@web/imgs/icons/icon__amazon-music.svg') ?>" alt="icon">
									<span>1 mes de cortesía Amazon Music. Luego, $14.900 al mes</span>
								</li>
								<li>
									<img src="<?= \yii\helpers\Url::to('@web/imgs/icons/icon__deezer.svg') ?>" alt="icon">
									<span>Deezer es 3 meses de cortesía luego $14.900</span>
								</li>
								<li>
									<img src="<?= \yii\helpers\Url::to('@web/imgs/icons/icon__check.svg') ?>" alt="icon">
									<span>Llamadas ilimitadas LDI a EEUU, Puerto Rico y Canadá.</span>
								</li>
								<li>
									<img src="<?= \yii\helpers\Url::to('@web/imgs/icons/icon__check.svg') ?>" alt="icon">
									<span>Voz y SMS ilimitados a todo destino nacional</span>
								</li>
							</ul>
						</div>
					</div>
					<div class="benefits">
						<div class="benefits__header">
							<div>ANTES 40GB</div>
							<div>Ahora 80GB</div>
							<div>$60MIL</div>
							<div>IVA incluido</div>
						</div>
						<div class="benefits__body">
							<ul class="benefits__items">
								<li>
									<img src="<?= \yii\helpers\Url::to('@web/imgs/icons/icon__check.svg') ?>" alt="icon">
									<span>Hasta 22GB de internet para compartir</span>
								</li>
								<li>
									<img src="<?= \yii\helpers\Url::to('@web/imgs/icons/icon__check.svg') ?>" alt="icon">
									<span>Disfruta de Facebook, WhatsApp e Instagram sin consumir datos</span>
								</li>
								<li>
									<img src="<?= \yii\helpers\Url::to('@web/imgs/icons/icon__amazon-prime.svg') ?>" alt="icon">
									<span>3 meses de cortesía Amazon Prime Video. Luego, $17.900 al mes</span>
								</li>
								<li>
									<img src="<?= \yii\helpers\Url::to('@web/imgs/icons/icon__amazon-music.svg') ?>" alt="icon">
									<span>1 mes de cortesía Amazon Music. Luego, $14.900 al mes</span>
								</li>
								<li>
									<img src="<?= \yii\helpers\Url::to('@web/imgs/icons/icon__deezer.svg') ?>" alt="icon">
									<span>Deezer es 3 meses de cortesía luego $14.900</span>
								</li>
								<li>
									<img src="<?= \yii\helpers\Url::to('@web/imgs/icons/icon__check.svg') ?>" alt="icon">
									<span>Llamadas ilimitadas LDI a EEUU, Puerto Rico y Canadá.</span>
								</li>
								<li>
									<img src="<?= \yii\helpers\Url::to('@web/imgs/icons/icon__check.svg') ?>" alt="icon">
									<span>Voz y SMS ilimitados a todo destino nacional</span>
								</li>
							</ul>
						</div>
					</div>
					<div class="benefits">
						<div class="benefits__header">
							<div>ANTES 75GB</div>
							<div>Ahora 150GB</div>
							<div>$75MIL</div>
							<div>IVA incluido</div>
						</div>
						<div class="benefits__body">
							<ul class="benefits__items">
								<li>
									<img src="<?= \yii\helpers\Url::to('@web/imgs/icons/icon__check.svg') ?>" alt="icon">
									<span>Hasta 45GB de internet para compartir</span>
								</li>
								<li>
									<img src="<?= \yii\helpers\Url::to('@web/imgs/icons/icon__check.svg') ?>" alt="icon">
									<span>Disfruta de Facebook, WhatsApp e Instagram sin consumir datos</span>
								</li>
								<li>
									<img src="<?= \yii\helpers\Url::to('@web/imgs/icons/icon__amazon-prime.svg') ?>" alt="icon">
									<span>3 meses de cortesía Amazon Prime Video. Luego, $17.900 al mes</span>
								</li>
								<li>
									<img src="<?= \yii\helpers\Url::to('@web/imgs/icons/icon__amazon-music.svg') ?>" alt="icon">
									<span>1 mes de cortesía Amazon Music. Luego, $14.900 al mes</span>
								</li>
								<li>
									<img src="<?= \yii\helpers\Url::to('@web/imgs/icons/icon__deezer.svg') ?>" alt="icon">
									<span>Deezer es 3 meses de cortesía luego $14.900</span>
								</li>
								<li>
									<img src="<?= \yii\helpers\Url::to('@web/imgs/icons/icon__check.svg') ?>" alt="icon">
									<span>Llamadas ilimitadas LDI a EEUU, Puerto Rico y Canadá.</span>
								</li>
								<li>
									<img src="<?= \yii\helpers\Url::to('@web/imgs/icons/icon__check.svg') ?>" alt="icon">
									<span>Voz y SMS ilimitados a todo destino nacional</span>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="terms">
		<div class="term__container wrapper">
			<div class="card-accordion">
				<div class="tabs">
					<div class="tab">
						<input type="checkbox" id="chck4">
						<label class="tab-label" for="chck4">
							<div class="tab-info">
								Términos y condiciones
							</div>
						</label>
						<div class="tab-terms tab-content">
							<ul class="tab-terms__items">
								<li>Promoción válida hasta el 31 de enero 2021.</li>
								<li>Aplica únicamente para solicitudes de portación directas a pospago.</li>
								<li>Aplica para planes pospago con cargo básico mensual igual o superior a $45mil.</li>
								<li>Promoción Doble Datos: Beneficio durante los primeros 6 meses a partir de la portación exitosa.</li>
								<li>El beneficio de Doble Datos aplica solo en los recursos para navegar.</li>
								<li>Promoción Primer Cargo Básico Gratis: Aplica en canales seleccionados.</li>
								<li>Aplican términos y condiciones. Más información
									<a href="https://www.tigo.com.co/">www.tigo.com.co/</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="pass-number">
		<div class="pass-number-container wrapper">
			<div class="pass-number__header">
				<h2>Pasar tu número a Tigo es muy fácil</h2>
				<p>Este proceso lo podrás realizar tú mismo cuando la SIM de Tigo llegue a tu casa teniendo en cuenta lo siguiente:</p>
			</div>
			<div class="pass-number__body">
				<div class="pass-number__item">
					<img src="<?= \yii\helpers\Url::to('@web/imgs/icons/icon__phone.svg') ?>" alt="image">
					<p>Usa tu Smartphone con la SIM tu operador actual</p>
				</div>
				<div class="pass-number__item">
					<img src="<?= \yii\helpers\Url::to('@web/imgs/icons/icon__credit-card.svg') ?>" alt="image">
					<p>Usa tu Smartphone con la SIM tu operador actual</p>
				</div>
				<div class="pass-number__item">
					<img src="<?= \yii\helpers\Url::to('@web/imgs/icons/icon__file.svg') ?>" alt="image">
					<p>Usa tu Smartphone con la SIM tu operador actual</p>
				</div>
				<div class="pass-number__item">
					<img src="<?= \yii\helpers\Url::to('@web/imgs/icons/icon__download.svg') ?>" alt="image">
					<p>Usa tu Smartphone con la SIM tu operador actual</p>
				</div>
			</div>
		</div>
	</section>
	<section class="contact">
		<div class="contact__content wrapper">
			<h2>Contáctanos</h2>
			<div class="contact__items">
				<div class="contact__item-1">
					<a href="">
						<img src="<?= \yii\helpers\Url::to('@web/imgs/icons/icon__call.svg') ?>" alt="image">
						<span>Llámanos gratis</span>
						<span>Línea de venta #503</span>
					</a>
					<button>LLAMAR</button>
				</div>
				<div class="contact__item-2">
					<a href="">
						<img src="<?= \yii\helpers\Url::to('@web/imgs/icons/icon__whatsapp-blue.svg') ?>" alt="image">
						<span>Escríbenos a whatsapp</span>
						<span>Un asesor experto te atenderá</span>
					</a>
					<button>CHATEAR</button>
				</div>
			</div>
		</div>
	</section>
	<div class="conditions">
		<p>Este portal usa cookies y puede recolectar datos personales.</p>
		<p>
			Este portal usa cookies y puede recolectar datos personales. Para continuar acepte nuestro
			<a href="" target="_blank">Aviso de Privacidad</a>
			y los
			<a href="" target="_blank">
				Términos y Condiciones
			</a>
		</p>
		<div class="conditions__action">
			<div class="conditions__action-read">
				<span>LEER MÁS</span>
				<img src="<?= \yii\helpers\Url::to('@web/imgs/icons/icon__arrow.svg') ?>" alt="">
			</div>
			<button class="conditions__action-btn">ACEPTO</button>
		</div>
	</div>
</div>
<script>
	const tabContentHeader1 = document.querySelector('.tab-content__header-1');
	const tabContentHeader2 = document.querySelector('.tab-content__header-2');
	const tabContentHeader3 = document.querySelector('.tab-content__header-3');
	const inputCheck1 = document.getElementById('chck1');
	const inputCheck2 = document.getElementById('chck2');
	const inputCheck3 = document.getElementById('chck3');
	const conditionRead = document.querySelector('.conditions__action-read');
	const conditionsBtn = document.querySelector('.conditions__action-btn');
	
	inputCheck1.addEventListener('change', () => {
		if (inputCheck1.checked) {
			tabContentHeader1.style.display = 'block';
		} else {
			tabContentHeader1.style.display = 'none';
		}
	})
	
	inputCheck2.addEventListener('change', () => {
		if (inputCheck2.checked) {
			tabContentHeader2.style.display = 'block';
		} else {
			tabContentHeader2.style.display = 'none';
		}
	})
	
	inputCheck3.addEventListener('change', () => {
		if (inputCheck3.checked) {
			tabContentHeader3.style.display = 'block';
		} else {
			tabContentHeader3.style.display = 'none';
		}
	})
	
	if (localStorage.getItem('TigoCookieConsent')) {
		document.querySelector('.conditions').style.display = 'none';
	} else {
		conditionRead.addEventListener('click', () => {
			document.querySelector('.conditions__action-read img').classList.toggle('rotate');
			if (window.getComputedStyle(document.querySelector('.conditions p:nth-of-type(1)')).getPropertyValue('display') === 'block') {
				document.querySelector('.conditions p:nth-of-type(1)').style.display = 'none';
				document.querySelector('.conditions p:nth-of-type(2)').style.display = 'block';
			} else {
				document.querySelector('.conditions p:nth-of-type(1)').style.display = 'block';
				document.querySelector('.conditions p:nth-of-type(2)').style.display = 'none';
			}
		})
		
		conditionsBtn.addEventListener('click', () => {
			document.querySelector('.conditions').style.display = 'none';
			localStorage.setItem('TigoCookieConsent', 'cookie-accepted');
		});
	}
</script>
