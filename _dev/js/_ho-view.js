if ($('.ho_view')){
  $('.ho_view').on('click', notesView);
}

function notesView() {
  if($(this).hasClass('icon-view_stream')) {
    $(this).removeClass('icon-view_stream').addClass('icon-view_module')
    $('.notes').removeClass('notes-grid');
  }
  else if ($(this).hasClass('icon-view_module')) {
    $(this).addClass('icon-view_stream').removeClass('icon-view_module')
    $('.notes').addClass('notes-grid');  
  }
}