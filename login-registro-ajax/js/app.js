let burgerIconElement = document.querySelector('.nav-bar__icon');
let collapseElement = document.querySelector('.nav-bar__collapse');

burgerIconElement.addEventListener('click', () => {
    collapseElement.classList.toggle('show');
});
