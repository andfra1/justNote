/*jshint esversion: 6 */

function modalOn(){
  $('#modal').addClass('modal--on');
}

function modalOff(){
  $('#modal').removeClass('modal--on');
}

$('#modal').on('click', ()=>{
  modalOff();
});