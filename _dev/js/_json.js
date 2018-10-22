$(document).ready(function () {
  var d = new Date();

  $.getJSON("./json/notes.json", function (data) {
    var tplNote = $('#tpl-note');
    $.each(data, function (key, val) {
      var tplNoteRepl = tplNote.clone().html();
      tplNoteRepl = tplNoteRepl.replace(/{title}/g, val.title)
        .replace(/{id}/g, key)
        .replace(/{content}/g, val.content)
        .replace(/{date}/g, val.date)
        .replace(/{priority}/g, val.priority)
        .replace(/{color}/g, val.color);

      $('.notes').append(tplNoteRepl);
    });
    //dodaje event do arrow i musi byc po wczytaniu jsona
    $('.note_banner_arrow').on('click', function () {
      $(this).parent().siblings('.note_content').toggleClass('note_content-show');
      $(this).toggleClass('note_banner_arrow-spin');
    });
    $('.options_color_pick').on('click', function () {
      var color = $(this).attr('data-notecolor');
      $(this).closest('.notes_item').attr('class', 'notes_item note').addClass('notes_item-' + color);
    });
    $('.reminderHour').val(d.getHours());
    $('.reminderMin').val(d.getMinutes());
  });
})