let image = document.querySelector('.carousel_img');
let leftBtn = document.querySelector('.left');
let rightBtn = document.querySelector('.right');

let imgAry = ['./secondProjectOjt/images/istockphoto-1072707398-1024x1024.jpg', './secondProjectOjt/images/istockphoto-1093952582-1024x1024.jpg', './secondProjectOjt/images/istockphoto-961254308-1024x1024.jpg'];

let value = 0;
leftBtn.addEventListener('click', () => {
    value -= 1;

    if (value < 0) {
        value = imgAry.length - 1;
        image.src = imgAry[value];
    } else {
        image.src = imgAry[value];
    }
})


rightBtn.addEventListener('click', () => {
    value += 1;
    if (value == imgAry.length) {
        value = 0;
        image.src = imgAry[value]
    } else {
        image.src = imgAry[value];
    }
})