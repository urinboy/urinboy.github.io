let menu_btn = document.querySelector('#menu_btn');
let navbar = document.querySelector('header nav');

menu_btn.onclick = () =>{
    menu_btn.classList.toggle('fa-times');
    navbar.classList.toggle('active');
};

window.onscroll = () =>{
    menu_btn.classList.remove('fa-times');
    navbar.classList.remove('active');
};