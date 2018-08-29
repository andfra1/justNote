$(document).ready(function () {
  var input = $('.form__row__fieldInput');
  var label = label;

  input.each(function () {
    if ($(this).val() === '' || $(this).val().length <= 0) {
      $(this).siblings(label).removeClass('form__row__fieldLabel--changed');
    } else {
      $(this).siblings(label).addClass('form__row__fieldLabel--changed');
    }
  });

  input
    .on('focus change', function () {
      $(this).siblings(label).addClass('form__row__fieldLabel--changed');
    })
    .on('blur', function () {
      if ($(this).val() === '' || $(this).val().length <= 0) {
        $(this).siblings(label).removeClass('form__row__fieldLabel--changed');
      }
    });
});