/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!******************************!*\
  !*** ./resources/js/user.js ***!
  \******************************/
$('#btn-save').click(function (event) {
  event.preventDefault(); // if(isValidName($('input[name="name"]').val())){
  //     console.log('send request')

  $.ajax({
    type: 'POST',
    url: '/user/store',
    data: {
      _token: $('meta[name="csrf-token"]').attr('content'),
      name: $('input[name="name"]').val(),
      email: $('input[name="phone"]').val(),
      address: $('input[name="address"]').val(),
      phone: $('input[name="phone"]').val()
    },
    success: function success(res) {
      //    console.log(res);
      if (res.status) {
        window.location.href = res.url;
      }

      if (!res.status) {
        alert(res.message);
      }
    },
    error: function error(errors) {
      // console.log(errors)
      var messageError = errors.responseJSON.errors;

      if (messageError['name']) {
        // console.log(messageError['name']) 
        $('span.error-name').show();
        $('span.error-name').html(messageError['name'][0]);
      }

      if (messageError['email']) {
        // console.log(messageError['name']) 
        $('span.error-email').show();
        $('span.error-email').html(messageError['email'][0]);
      }

      if (messageError['phone']) {
        // console.log(messageError['name']) 
        $('span.error-phone').show();
        $('span.error-phone').html(messageError['phone'][0]);
      }
    }
  }); // }
});
$('input[name="name"]').on('change', 'blur', 'keypress', function () {
  isValidName($(this).val());
});

function isValidName(value) {
  $('span.error-name').hide();
  $('span.error-name').html('');

  if (!value) {
    $('span.error-name').show();
    $('span.error-name').html('Vui long nhap ten');
    return false;
  }

  return true;
}
/******/ })()
;