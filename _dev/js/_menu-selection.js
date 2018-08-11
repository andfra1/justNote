/*jshint esversion: 6 */

$(document).ready(() => {
  $('.notes__checkbox').on('click', () => {
    if ($('.notes__checkbox').is(':checked')) {
      $('#jsSelection').addClass('selection--show');
    } else {
      $('#jsSelection').removeClass('selection--show');
    }
  });
});