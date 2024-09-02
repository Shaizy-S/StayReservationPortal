const toggle  =document.getElementById('menu-toggle');
const list = document.getElementById('menu-list');

toggle.addEventListener('click', function() {
    list.classList.toggle('active');
});
