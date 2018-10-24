if ($('.js-ho_sort') && $('.ho_sort_options_item')) {
$('.js-ho_sort').on('click', ho_soi_toggle);
$('.ho_sort_options_item').on('click', ho_soi_data);
}

function ho_soi_toggle() {
  $('.ho_sort_options').toggleClass('ho_sort_options-hide');
}