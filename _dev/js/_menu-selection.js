/*jshint esversion: 6 */

$(document).ready(() => {
  $('.notes_checkbox').on('click', () => {
    if ($('.notes_checkbox').is(':checked')) {
      $('#jsSelection').addClass('selection-show');
    } else {
      $('#jsSelection').removeClass('selection-show');
    }
  });
});