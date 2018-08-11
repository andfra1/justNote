/*jshint esversion: 6 */

// $('#jsColor').on('click', () => {
//   $('#modal').addClass('modal--on');
// });

// var c = document.getElementById('color');
// var tag = c.getElementsByTagName('div');
// var note = document.getElementsByClassName('notes__item');

// for (var i = 0; i < tag.length; i++) {
//   tag[i].addEventListener('click', setColor, false);
// }

// function setColor() {
//   for (var n = 0; n < note.length; n++) {
//     if (note[n].firstChild.checked) {
//       $(note[n], '[class*= notes__item--]')
//         .removeClass(function (index, css) {
//           return (css.match(/\bnotes__item--\S+/g) || []).join(' ');
//         })
//         .addClass('notes__item--' + $(this).attr('data-pickColor'));
//     }
//   }
// }