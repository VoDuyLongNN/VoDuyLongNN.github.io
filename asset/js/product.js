
const btnSeeMore = document.querySelector('.js-see-more')
const menuLoadMore = document.querySelector('.js-menu-load-more')
const btnCollapse = document.querySelector('.js-collapse')

function showMenuLoadMore(){
   menuLoadMore.classList.add('open')
   btnSeeMore.classList.add('remove')
   btnCollapse.classList.add('open')
}

function hideMenuLoadMore(){
   menuLoadMore.classList.remove('open')
   btnSeeMore.classList.remove('remove')
   btnCollapse.classList.remove('open')
}

btnSeeMore.addEventListener('click', showMenuLoadMore)
btnCollapse.addEventListener('click', hideMenuLoadMore)

//see more button laptop
const btnLoadmoreLaptop = document.querySelector('.js-see-more-laptop')
const loadMoreProductLaptop = document.querySelector('.js-container-loadmore')

function showListProductLaptop(){
   loadMoreProductLaptop.classList.add('open')
   btnLoadmoreLaptop.classList.add('remove')
}

btnLoadmoreLaptop.addEventListener('click', showListProductLaptop)