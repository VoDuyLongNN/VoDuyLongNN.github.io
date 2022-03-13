// support product js
// Phone
const itemIconPhoneDiv = document.querySelector('.js-item-icon-phone');
const itemPhoneModel = document.querySelector('.js-phone-support-form');
const closePhoneItem = document.querySelector('.js-close-form-support-phone');

function showSupportFormPhone(){
   itemPhoneModel.classList.add('open')
}

function HideSupportFormPhone(){
   itemPhoneModel.classList.remove('open')
}

itemIconPhoneDiv.addEventListener('click', showSupportFormPhone);
closePhoneItem.addEventListener('click', HideSupportFormPhone);

// Laptop
const itemIconLaptopDiv = document.querySelector('.js-item-icon-laptop');
const itemLaptopModel = document.querySelector('.js-laptop-support-form');
const closeLaptopItem = document.querySelector('.js-close-form-support-laptop');

function showSupportFormlaptop(){
   itemLaptopModel.classList.add('open')
}

function HideSupportFormlaptop(){
   itemLaptopModel.classList.remove('open')
}

itemIconLaptopDiv.addEventListener('click', showSupportFormlaptop);
closeLaptopItem.addEventListener('click', HideSupportFormlaptop);

// PC
const itemIconPcDiv = document.querySelector('.js-item-icon-pc');
const itemPcModel = document.querySelector('.js-pc-support-form');
const closePcItem = document.querySelector('.js-close-form-support-pc');

function showSupportFormMouse(){
   itemPcModel.classList.add('open')
}

function HideSupportFormMouse(){
   itemPcModel.classList.remove('open')
}

itemIconPcDiv.addEventListener('click', showSupportFormMouse);
closePcItem.addEventListener('click', HideSupportFormMouse);

// Mouse
const itemIconMouseDiv = document.querySelector('.js-item-icon-mouse');
const itemMouseModel = document.querySelector('.js-mouse-support-form');
const closeMouseItem = document.querySelector('.js-close-form-support-mouse');

function showSupportFormMouse(){
   itemMouseModel.classList.add('open')
}

function HideSupportFormMouse(){
   itemMouseModel.classList.remove('open')
}

itemIconMouseDiv.addEventListener('click', showSupportFormMouse);
closeMouseItem.addEventListener('click', HideSupportFormMouse);

// Keyboard
const itemIconKeyboardDiv = document.querySelector('.js-item-icon-keyboard');
const itemkeyboardModel = document.querySelector('.js-keyboard-support-form');
const closeKeyboardItem = document.querySelector('.js-close-form-support-keyboard');

function showSupportFormKeyboard(){
   itemkeyboardModel.classList.add('open')
}

function HideSupportFormKeyboard(){
   itemkeyboardModel.classList.remove('open')
}

itemIconKeyboardDiv.addEventListener('click', showSupportFormKeyboard);
closeKeyboardItem.addEventListener('click', HideSupportFormKeyboard);

// Headphone
const itemIconHeadphoneDiv = document.querySelector('.js-item-icon-headphone');
const itemHeadphoneModel = document.querySelector('.js-headphone-support-form');
const closeHeadphoneItem = document.querySelector('.js-close-form-support-headphone');

function showSupportFormKeyboard(){
   itemHeadphoneModel.classList.add('open')
}

function HideSupportFormKeyboard(){
   itemHeadphoneModel.classList.remove('open')
}

itemIconHeadphoneDiv.addEventListener('click', showSupportFormKeyboard);
closeHeadphoneItem.addEventListener('click', HideSupportFormKeyboard);