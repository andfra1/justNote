if ($('.nh_checkbox')) {
  $('.nh_checkbox').on('click', nmo_toggle);
}

function nmo_toggle() {
  if ($('.nh_checkbox').is(':checked')) {
    $('.header_bottom').removeClass('header_bottom-hide');
    $('.nmo').removeClass('nmo-hide');
  } else {
    $('.header_bottom').addClass('header_bottom-hide');
    $('.nmo').addClass('nmo-hide');
  }
}