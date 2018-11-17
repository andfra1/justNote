if($('.hm_item')) {
  $('.hm_item').on('click', itemSelection);
}

function itemSelection() {
  var name = $(this).attr('data-itemname');
  $('.js-notes').children().removeClass('note-hide');
  $('.js-notes').children().each((i,v) => {
    if (v.getAttribute('data-'+name) !== 'true' && v.getAttribute('data-'+name) !== null) {
      v.classList.add('note-hide');
    }
    if (name === 'notes') {
      $('.js-notes').children().removeClass('note-hide');
    }
  });
}