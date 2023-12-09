let menu =  document.querySelector('#menu-bars');
let navbar = document.querySelector('.navbar');

let form_container = document.querySelector('.form_container');
let content_btn = document.querySelector('.content-btn');
let iconClose = document.querySelector('.icon-close');
let content = document.querySelector('.content');

menu.onclick = () => {
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
}

window.onscroll = () => {
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
}

document.querySelector('#search-icon').onclick = () => {
    document.querySelector('#search-form').classList.toggle('active');
}

document.querySelector('#close').onclick = () => {
    document.querySelector('#search-form').classList.remove('active');
}

content_btn.addEventListener('click', () => {
    // content.classList.remove('active-content');
    content.classList.add('active-content');
    form_container.classList.add('active-form');
});

iconClose.addEventListener('click', () => {
    form_container.classList.remove('active-form');
    content.classList.remove('active-content');
    // content.classList.add('active-content');
});
