(function ($) {

   "use strict";

   const form = document.querySelector('.form');
   const phone = document.querySelector('#phone');
   const loader = document.querySelector('.loader-tigo');
   const btnRegister = document.getElementById('register');

   form.addEventListener('submit', e => {
      e.preventDefault();

      if (phone.value.length <= 12) {
         loader.style.display = 'flex';
         btnRegister.classList.add('btn--disabled');
         btnRegister.setAttribute('disabled', '');

         saveRegister();
      }
   })

   function saveRegister() {
      var name = $("#full-name").val();
      var phone = $("#phone").val();
      var ktoken = $("#form-ktoken").val();
      var pubId = $("#form-pubId").val();
      var providerId = $("#form-providerId").val();

      var dataString = 'name=' + name + '&phone=' + phone + '&ktoken=' + ktoken + '&pubId=' + pubId + '&providerId=' + providerId;

      if ((name.length > 1) || (phone.length > 1)) {
         $.ajax({
            type: "POST",
            url: "forms/register",
            data: dataString,
            success: function (data) {
               if (data == 200) {
                  removeLoader();

                  $('.successContent').fadeIn(1000);
                  $('.errorContent').fadeOut(500);
                  deleteValues();
                  return true;
               } else {
                  removeLoader();

                  $('.errorContent').fadeIn(1000);
                  $('.successContent').fadeOut(500);
                  return false;
               }
            },
            error: function (exception, data) {
               removeLoader();

               $('.errorContent').fadeIn(1000);
               $('.successContent').fadeOut(500);
               return false;
            }
         });
      } else {
         removeLoader();

         $('.errorContent').fadeIn(1000);
         $('.successContent').fadeOut(500);
         return false;
      }
   }

   function removeLoader() {
      loader.style.display = 'none';
      btnRegister.classList.remove('btn--disabled');
      btnRegister.removeAttribute('disabled');
   }

   function deleteValues() {
      $("#full-name").val("");
      $("#phone").val("");
   }

})(jQuery);


