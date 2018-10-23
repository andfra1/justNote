if($('.js-nh_title')) {
  $('.js-nh_title').on('click', ncToggle);
}

console.log($(this).parent().siblings('.js-note_content'));

function ncToggle() {
  $(this).parent().siblings('.js-note_content').toggleClass('note_content-hide');
}