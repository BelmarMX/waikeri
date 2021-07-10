/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*****************************!*\
  !*** ./src/js/simulator.js ***!
  \*****************************/
$(document).ready(function (e) {
  var exchange = {
    usa_to_bol: 3245635.12,
    usa_to_mex: 19.878958,
    bol_to_usa: 0.00000030810611,
    bol_to_mex: 0.000006125089,
    mex_to_usa: 0.050304448,
    mex_to_bol: 163262.93
  };

  if (document.querySelector('#simulator')) {
    var calculate = function calculate() {
      var quantity = parseFloat($('#sim_quantity').val());
      var origin = $('#sim_origin').val();
      var destiny = $('#sim_destiny').val();
      var subtotal = 0.00;
      var comission = 0.00;
      var total = 0.00;
      var currency = {
        usa: 'USD',
        mex: 'MXN',
        bol: 'VES'
      };

      if (isNaN(quantity)) {
        quantity = 0.00;
      }

      var change = 1;

      if (origin != destiny) {
        change = exchange[origin + '_to_' + destiny];
      }

      subtotal = quantity * change;
      comission_origin = parseFloat(quantity * 0.04);
      comission_destiny = parseFloat(subtotal * 0.04);
      total_origin = parseFloat(quantity - comission_origin);
      total_destiny = parseFloat(subtotal - comission_destiny);

      if (isNaN(comission_origin)) {
        comission_origin = 0.00;
      }

      if (isNaN(comission_destiny)) {
        comission_destiny = 0.00;
      }

      if (isNaN(total_origin)) {
        total_origin = 0.00;
      }

      if (isNaN(total_destiny)) {
        total_destiny = 0.00;
      }

      $('#origin_comission .amount').html(comission_origin.toFixed(2));
      $('#origin_comission .currency').html(currency[origin]);
      $('#destiny_comission .amount').html(comission_destiny.toFixed(2));
      $('#destiny_comission .currency').html(currency[destiny]);
      $('#origin_total .amount').html(total_origin.toFixed(2));
      $('#origin_total .currency').html(currency[origin]);
      $('#destiny_total .amount').html(total_destiny.toFixed(2));
      $('#destiny_total .currency').html(currency[destiny]);
      $('#conversion_rate .currency_destiny').html(currency[destiny]);
      $('#conversion_rate .currency_origin').html(currency[origin]);
      $('#conversion_rate .equals_to').html(change.toFixed(6));
      return {
        quantity: quantity,
        comission_origin: comission_origin,
        comission_destiny: comission_destiny,
        total_origin: total_origin,
        total_destiny: total_destiny,
        currency_origin: currency[origin],
        currency_destiny: currency[destiny]
      };
    };

    var reset = function reset() {
      $('#sim_quantity').val(0.00);
      $('#sim_origin').val('mex').change();
      $('#sim_origin').parent('.language-select').find('.current').text('MEX (MXN)');
      $('#sim_destiny').val('bol').change();
      $('#sim_destiny').parent('.language-select').find('.current').text('BOL (VES)');
      $('#origin_comission .amount').html(0.00);
      $('#origin_comission .currency').html('MXN');
      $('#destiny_comission .amount').html(0.00);
      $('#destiny_comission .currency').html('VES');
      $('#origin_total .amount').html(0.00);
      $('#origin_total .currency').html('MXN');
      $('#destiny_total .amount').html(0.00);
      $('#destiny_total .currency').html('VES');
      $('#conversion_rate .currency_origin').html('MXN');
      $('#conversion_rate .currency_destiny').html('VES');
      $('#conversion_rate .equals_to').html(163262.93);
    };

    var fill_four_step = function fill_four_step() {
      amounts = calculate();
      var mail_beneficiario = $('#sim_beneficiario_correo').val();
      var name_beneficiario = $('#sim_beneficiario_nombre').val();
      var beneficiario_name = name_beneficiario.split(" ")[0];
      var sucursal_code = 403020;
      var account_number = 1488729751;
      var message = "Hola ".concat(beneficiario_name, ", te he realizado una transferencia de $").concat(amounts.total_destiny.toFixed(2), " ").concat(amounts.currency_destiny);
      $('#res_total_sent').html(amounts.quantity.toFixed(2));
      $('#res_comission').html(amounts.comission_origin.toFixed(2));
      $('#res_total_original').html(amounts.total_origin.toFixed(2));
      $('#res_conversion').html(amounts.total_destiny.toFixed(2));
      $('.res_origin_currency').html(amounts.currency_origin);
      $('.res_destiny_currency').html(amounts.currency_destiny);
      $('#res_first_name_beneficiario').html(beneficiario_name);
      $('#res_beneficiario_name').html(name_beneficiario);
      $('#res_beneficiario_email').html(mail_beneficiario);
      $('#sim_beneficiario_mensaje').attr('placeholder', message);
    };

    $('#sim_quantity').on('keyup', function (e) {
      calculate();
    });
    $('#sim_origin').on('change', function (e) {
      var img = $(this).val();
      $('#origin_flag').attr('src', "img/".concat(img, "-flag.png")); // ----

      calculate();
    });
    $('#sim_destiny').on('change', function (e) {
      var img = $(this).val();
      $('#destiny_flag').attr('src', "img/".concat(img, "-flag.png")); // ----

      calculate();
    });
    $('#step_one').on('click', function (e) {
      $('#step_one_container').addClass('d-none');
      $('#step_two_container').removeClass('d-none');
      $('#step_three_container').addClass('d-none');
      $('#step_four_container').addClass('d-none');
    });
    $('#step_two').on('click', function (e) {
      $('#step_one_container').addClass('d-none');
      $('#step_two_container').addClass('d-none');
      $('#step_three_container').removeClass('d-none');
      $('#step_four_container').addClass('d-none');
    });
    $('#step_three').on('click', function (e) {
      fill_four_step();
      $('#step_one_container').addClass('d-none');
      $('#step_two_container').addClass('d-none');
      $('#step_three_container').addClass('d-none');
      $('#step_four_container').removeClass('d-none');
    });
    $('#step_four').on('click', function (e) {
      reset();
      $('#step_one_container').removeClass('d-none');
      $('#step_two_container').addClass('d-none');
      $('#step_three_container').addClass('d-none');
      $('#step_four_container').addClass('d-none');
    });
  }
});
/******/ })()
;