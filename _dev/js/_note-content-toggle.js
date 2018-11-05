if($('.js-nh_title')) {
  $('.js-nh_title').on('click', ncToggle);
}

function ncToggle() {
  $(this).parent().siblings('.js-note_content').toggleClass('note_content-hide');
}