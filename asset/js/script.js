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

const btnOrder = document.querySelector('.js-order')
btnOrder.addEventListener('click', function(){
   alert("Đặt hàng thành công");
})

