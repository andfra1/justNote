if ($('.nh_edit')) {
  $('.nh_edit').on('click', note_edit);
}

function note_edit(){
  $(this).removeClass('icon-pencil')
  .addClass('icon-check1')
  .parent()
  .parent()
  .find('.js-note_content')
  .removeClass('note_content-hide');

  $(this)
  .parent()
  .parent()
  .find('.nc_box_text')
  .addClass('nc_box_text-hide');

  $(this)
  .parent()
  .parent()
  .find('.js-nh_title').off();

  
  $(this).parent()
  .children()
  .children('.nh_title_text')
  .addClass('nh_title_text-hide');
  
  var spaceRemove = /^\ +|\ +$/gm;
  var fromHeaderText = $(this).parent().children().children('.nh_title_text')[0].innerText.replace(spaceRemove,"");
  var fromBoxText = $(this).parent().parent().children().children().children('.nc_box_text')[0].innerText.replace(spaceRemove,"");
  console.log(fromBoxText);

  $(this).parent()
  .children()
  .children('.nh_title_text-input')
  .removeClass('nh_title_text-input-hide')
  .val(fromHeaderText);

  $(this).parent().parent().children().children()
  .children('.nc_box_textarea')
  .removeClass('nc_box_textarea-hide')
  .text(fromBoxText);
}