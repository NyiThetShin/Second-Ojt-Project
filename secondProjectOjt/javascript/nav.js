let toggleTool = document.querySelector('.toggle');
let navMenu = document.querySelector('.nav_menu');
let xMark = document.querySelector('.x_mark');
let xMarkCtn = document.querySelector('.x_mark_ctn')

toggleTool.addEventListener('click',() => {
        toggleTool.style.display = "none";
        xMarkCtn.style.display = "flex";
        xMark.style.display = "flex";
        navMenu.classList.add('active');
        navMenu.style.display = "flex";
})

xMark.addEventListener('click',() => {
    toggleTool.style.display = "flex";
    xMark.style.display = "none";
    xMarkCtn.style.display = "none";
    navMenu.classList.remove('active');
    navMenu.style.display = "";
})



