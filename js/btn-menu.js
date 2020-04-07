const $btnMenu = document.querySelector('.btn-menu');
const $menu = document.querySelector('.mobileUL');

$btnMenu.addEventListener('click', function() {
   $menu.classList.add('mobileULopen');
   
})
const $btnMenuRemove = document.querySelector('.btn-menu');
const $menuRemove = document.querySelector('.remove');

$btnMenu.addEventListener('click', function() {
    $menu.classList.remove('remove');
})
