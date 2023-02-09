(function ($) {

	"use strict";

	const form = document.querySelector('#form-number');
	const statusMessage = document.getElementById('register__status');

	form.addEventListener('submit', e => {
		e.preventDefault();

		saveRegister();
	})

	function saveRegister() {

		var data = {
				"serviceToken": "23262625d98ea7ad00a4fd06901c0961",	// Token de identificaci�n de campa�a
				"serviceAction": "c2c",									// Canal en el que se procesar� el lead ingresado (c2c / form)
				"visitId": "",											// (opcional) ID de la visita en la que se gener� el lead
				"contentUrl": window.location.href,										// (opcional) URL en la que se gener� el lead
				"contentId": "",										// (opcional) ID del contenido en que se gener� el lead
				"templateId": "",										// (opcional) ID del template con que se construy� el contenido
				"sourceId": "",										// (opcional) ID de origen asociado a la generaci�n del lead
				"thankyouPageUrl": "",									// (opcional) URL de thankyou page a la que se redirig� el lead
				"formId": "",											// (opcional) ID del formulario en que se produjo la conversi�n
				"buttonId": "",										// (opcional) ID del bot�n en que se produjo la conversi�n
				"contactData": {
			"email": "",						// (opcional) Email del contacto
			"firstname": "",								// (opcional) Nombre del contacto
			"lastname": "",								// (opcional) Apellido del contacto
			"language": "",									// (opcional) Idioma del contacto
			"owner": "",											// (opcional) Responsable del contacto (agente reservado en el canal c2c)
			"company": "",										// (opcional) Compa��a del contacto
			"position": "",										// (opcional) Posici�n del contacto
			"phone": phone,								// Tel�fono del contacto (se utilizar� para procesar el canal c2c)
			"mobile": "",											// (opcional) M�vil del contacto
			"fax": "",											// (opcional) Fax del contacto
			"website": "",										// (opcional) Sitio Web del contacto
			"address1": "",										// (opcional) Direcci�n 1 del contacto
			"address2": "",										// (opcional) Direcci�n 2 del contacto
			"country": "",										// (opcional) Pa�s del contacto
			"state": "",							// (opcional) Estado del contacto
			"city": "",										// (opcional) Ciudad del contacto
			"zip": "",											// (opcional) C�digo Postal del contacto
			"facebook": "",										// (opcional) Cuenta de Facebook del contacto
			"twitter": "",											// (opcional) Cuenta de Twitter del contacto
			"skype": "",											// (opcional) Cuenta de Skype del contacto
			"googlePlus": "",										// (opcional) Cuenta de Google Plus del contacto
			"linkedin": "",										// (opcional) Cuenta de Linkedin del contacto
			"instagram": "",										// (opcional) Cuenta de Instagram del contacto
			"crm_current_plan": "",						// (opcional) Dato personalizado del contacto
			"crm_account_number": "",						// (opcional) Dato personalizado del contacto
			"referredDate": "",									// (opcional) Fecha de ingreso del contacto como referido
			"referredByContactId": "",								// (opcional) Contacto original que lo referenci�
			"referredAtCampaignId": "",							// (opcional) Campa�a en que se ingres� el referido
			"referredAtInteractionId": "",							// (opcional) ID de interacci�n en que se ingres� el referido
				"Codigo_Origen": "Afiliados_KicKads",
				"Codigo_Campaña" : "Movil_Portabilidad",
				"Codigo_Descripcion":"",
				"utm_CC":"P_AFI_KICKADS_0_H"
		}
		}

		var settings = {
		"method": "POST",
		"url": "https://mas-tma.inconcertcc.com/public/integration/process",
		"contentType": "application/json",
		"dataType": "json",
		"data": JSON.stringify(data),
		"async": true,
		"crossDomain": true,
		"processData": false
		}

		$.ajax(settings).done(function (response) {
			console.log('res:', response);

			switch(response.data.status) {
				case 'duplicate':
						statusMessage.textContent = 'El número fue registrado anteriormente';
						break;
				case 'new':
						statusMessage.textContent = 'Número registrado con éxito!';
					break;
			}
		});

		var dataString = 'phone=' + phone;

		$.ajax({
			type: "POST",
			url: "forms/register",
			data: dataString,
			success: function (data) {
				console.log(data);
			},
			error: function (exception, data) {
				console.error(data);
			}
		});
	}
})(jQuery);