// see more product button
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