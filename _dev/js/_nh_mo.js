if ($('.js-nmo')) {
  $('.js-nmo').on('click', nmo_toggle);
}

function nmo_toggle() {
  $('.js-nmo').toggleClass('nmo-hide');
}