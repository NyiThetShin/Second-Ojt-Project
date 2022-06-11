let arrowDown = document.querySelector('.ad');
let selectOption = document.querySelector('.select_option');



arrowDown.addEventListener('click',() => {
    selectOption.classList.toggle('active');
})