const loginBox = document.querySelector('#login');
const registerBox = document.querySelector('#register');

document.querySelector('#show-register').addEventListener('click', (e) => {
    e.preventDefault();
    loginBox.style.display = "none";
    registerBox.style.display = "flex";
});

document.querySelector('#show-login').addEventListener('click', (e) => {
    e.preventDefault();
    registerBox.style.display = "none";
    loginBox.style.display = "flex";
});