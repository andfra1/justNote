var burger = document.getElementById('js-burger');
var headerMenu = document.getElementById('js-header_menu');

if (burger) {
  burger.addEventListener('click', burgerSwitch, false);
}

function burgerSwitch() {
  if (this.value === "on") {
    burgerOff();
  } else if (this.value === "off") {
    burgerOn();
  }
}

function burgerOff() {
  burger.classList.remove('burger-change');
  burger.value = "off";
  headerMenu.classList.add('header_menu-hidden');
};

function burgerOn() {
  burger.classList.add('burger-change');
  burger.value = "on";
  headerMenu.classList.remove('header_menu-hidden');
};