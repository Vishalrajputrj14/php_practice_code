const wrapper = document.querySelector('.wrapper');
const loginlink = document.querySelector('.login-link');
const registerlink = document.querySelector('.register-link');
const btnpopup = document.querySelector('.btnlogin-popup');

// Update the selector to match your HTML class for the close button
const iconClose = document.querySelector('.vishal-rajput');

registerlink.addEventListener('click', () => {
    wrapper.classList.add('active');
});

loginlink.addEventListener('click', () => {
    wrapper.classList.remove('active');
});

btnpopup.addEventListener('click', () => {
    wrapper.classList.add('active-popup');
});

// Update this to use the correct class name for the close button
iconClose.addEventListener('click', () => {
    wrapper.classList.remove('active-popup');
});
