// javaScript login form
const loginDiv = document.querySelector('.js-login');
const model = document.querySelector('.js-model');
const closeFormLogin = document.querySelector('.js-close-form');

function showFormLogin(){
   model.classList.add('open');
}

function hideFormLogin(){
   model.classList.remove('open');
}

loginDiv.addEventListener('click', showFormLogin);
closeFormLogin.addEventListener('click', hideFormLogin);


// javaScript search form
const searchIcon = document.querySelector('.js-right-header-search');
const searchForm = document.querySelector('.js-search');
const closeSearchForm = document.querySelector('.js-close-search');

function showFormSearch(){
   searchForm.classList.add('open');
}

function hideFormSearch(){
   searchForm.classList.remove('open');
}

searchIcon.addEventListener('click', showFormSearch);
closeSearchForm.addEventListener('click', hideFormSearch);


// javaScript card shopping form
const cardIcon = document.querySelector('.js-right-header-card');
const shoppingForm = document.querySelector('.js-shopping-form');
const closeShoppingForm = document.querySelector('.js-close-shopping-form');

function showFormShopping(){
   shoppingForm.classList.add('open');
}

function hideFormShopping(){
   shoppingForm.classList.remove('open');
}

cardIcon.addEventListener('click', showFormShopping);
closeShoppingForm.addEventListener('click', hideFormShopping)

