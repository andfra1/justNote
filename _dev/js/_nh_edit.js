if ($('.nh_edit')) {
  $('.nh_edit').on('click', note_edit);
}

var d = new Date;
var year = d.getFullYear();
var day = d.getDate() < 10 ? '0' + d.getDate() : d.getDate();
var month = d.getMonth()+1 < 10 ? '0' + d.getMonth()+1 : d.getMonth()+1;

var spaceRemove = /^\ +|\ +$/gm;

function note_edit() {

  var fromDivToInputText = $(this)
  .parent()
  .children()
  .children('.nh_title_text')[0]
  .innerText
  .replace(spaceRemove, "");
  
  var fromInputToDivText = $(this)
  .parent()
  .children()
  .children('.nh_title_text-input')
  .val();
  
var fromBoxToTxtareaText = $(this)
  .parent()
  .parent()
  .children()
  .children()
  .children('.nc_box_text')[0]
  .innerText
  .replace(spaceRemove, "");

  var fromTxtareaToBoxText = $(this)
  .parent()
  .parent()
  .children()
  .children()
  .children('.nc_box_textarea')
  .val();

  if ($(this).data('edit-status') === "off") {
    
    $(this).siblings('.js-nh_title').off('click', ncToggle);

    $(this).data('edit-status', 'on')
      .removeClass('icon-pencil')
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

    $(this).parent()
      .children()
      .children('.nh_title_text')
      .addClass('nh_title_text-hide');

    $(this).parent()
      .children()
      .children('.nh_title_text-input')
      .removeClass('nh_title_text-input-hide')
      .val(fromDivToInputText);

    $(this).parent().parent().children().children()
      .children('.nc_box_textarea')
      .removeClass('nc_box_textarea-hide')
      .text(fromBoxToTxtareaText);

  }
  else if ($(this).data('edit-status') === "on") {
    
    $(this).siblings('.js-nh_title').on('click', ncToggle);

    $(this).data('edit-status', 'off')
      .removeClass('icon-check1')
      .addClass('icon-pencil')
      .parent()
      .parent()
      .find('.js-note_content')
      .addClass('note_content-hide');

    $(this)
      .parent()
      .parent()
      .find('.nc_box_text')
      .removeClass('nc_box_text-hide')
      .text(fromTxtareaToBoxText);

    $(this).parent()
      .children()
      .children('.nh_title_text')
      .removeClass('nh_title_text-hide')
      .text(fromInputToDivText);

    $(this).parent()
      .children()
      .children('.nh_title_text-input')
      .addClass('nh_title_text-input-hide');

    $(this).parent().parent().children().children()
      .children('.nc_box_textarea')
      .addClass('nc_box_textarea-hide');

    $(this).parent()
    .parent()
    .children()
    .children()
    .children('.nc_date_updated')
    .children('span')
    .text(year + '.' + month + '.' + day);
  }
}