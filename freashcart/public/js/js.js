const add = document.querySelector('#add');
const reduse = document.querySelector('#reduse');
const total = document.querySelector('#total');
const add_2 = document.querySelector('#add-2');
const reduse_2 = document.querySelector('#reduse-2');
const total_2 = document.querySelector('#total-2');
const add_3 = document.querySelector('#add-3');
const reduse_3 = document.querySelector('#reduse-3');
const total_3 = document.querySelector('#total-3');
let a = 0;
let a_2 = 0;
let a_3 = 0;
add.addEventListener('click', () => {
    a++;
    total.innerHTML = a;
})

reduse.addEventListener('click', () => {
    if (a > 0) {
        a--;
        total.innerHTML = a;
    };
})

add_2.addEventListener('click', () => {
    a_2++;
    total_2.innerHTML = a_2;
})

reduse_2.addEventListener('click', () => {
    if (a_2 > 0) {
        a_2--;
        total_2.innerHTML = a_2;
    };
})

add_3.addEventListener('click', () => {
    a_3++;
    total_3.innerHTML = a_3;
})

reduse_3.addEventListener('click', () => {
    if (a_3 > 0) {
        a_3--;
        total_3.innerHTML = a_3;
    };
})
var swiper = new Swiper(".mySwiper", {
    spaceBetween: 30,
    centeredSlides: true,
    loop: true,
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
});


var swiper_1 = new Swiper(".mySwiper-1", {
    slidesPerView: 1,
    spaceBetween: 10,
    autoplay: {
        delay: 3000,
        disableOnInteraction: false,
    },
    breakpoints: {
        640: {
            slidesPerView: 2,
            spaceBetween: 20,
        },
        768: {
            slidesPerView: 4,
            spaceBetween: 40,
        },
        1400: {
            slidesPerView: 6,
            spaceBetween: 50,
        },
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});


// Set the date we're counting down to
var countDownDate = new Date();
// Update the count down every 1 second
var x = setInterval(function () {

    NewDate = new Date(); //讀取實際時間
    let years = NewDate.getFullYear(); //讀取年份
    let months = NewDate.getMonth(); //讀取月份(1月為0)
    let days = NewDate.getDate(); //讀取實際為該月幾號
    let hours = NewDate.getHours(); //讀取實際小時
    let minutes = NewDate.getMinutes(); //讀取實際分鐘
    let seconds = NewDate.getSeconds(); //讀取實際秒數


    let distance = 2028 - years;
    years = distance * 365;
    let daytotal = years;
    distance = 12 - months;
    months = distance * 30;
    daytotal = daytotal + months;
    distance = 30 - days;
    daytotal = daytotal + days;
    distance = 24 - hours;
    hours = distance;
    distance = 60 - minutes;
    minutes = distance;
    distance = 60 - seconds;
    seconds = distance;

    let dayss = document.querySelector("#days");
    let hourss = document.querySelector('#hours');
    let minss = document.querySelector('#mins');
    let secc = document.querySelector('#sec');
    dayss.innerHTML = daytotal;
    hourss.innerHTML = hours;
    minss.innerHTML = minutes;
    secc.innerHTML = seconds;
}, 1000);



// Set the date we're counting down to
var countDownDate = new Date();
// Update the count down every 1 second
var x = setInterval(function () {

    NewDate = new Date(); //讀取實際時間
    let years = NewDate.getFullYear(); //讀取年份
    let months = NewDate.getMonth(); //讀取月份(1月為0)
    let days = NewDate.getDate(); //讀取實際為該月幾號
    let hours = NewDate.getHours(); //讀取實際小時
    let minutes = NewDate.getMinutes(); //讀取實際分鐘
    let seconds = NewDate.getSeconds(); //讀取實際秒數


    let distance = 2027 - years;
    years = distance * 365;
    let daytotal = years;
    distance = 12 - months;
    months = distance * 30;
    daytotal = daytotal + months;
    distance = 30 - days;
    daytotal = daytotal + days;
    distance = 24 - hours;
    hours = distance;
    distance = 60 - minutes;
    minutes = distance;
    distance = 60 - seconds;
    seconds = distance;

    let dayss = document.querySelector("#days-2");
    let hourss = document.querySelector('#hours-2');
    let minss = document.querySelector('#mins-2');
    let secc = document.querySelector('#sec-2');
    dayss.innerHTML = daytotal;
    hourss.innerHTML = hours;
    minss.innerHTML = minutes;
    secc.innerHTML = seconds;
}, 1000);

// Set the date we're counting down to
var countDownDate = new Date();
// Update the count down every 1 second
var x = setInterval(function () {

    NewDate = new Date(); //讀取實際時間
    let years = NewDate.getFullYear(); //讀取年份
    let months = NewDate.getMonth(); //讀取月份(1月為0)
    let days = NewDate.getDate(); //讀取實際為該月幾號
    let hours = NewDate.getHours(); //讀取實際小時
    let minutes = NewDate.getMinutes(); //讀取實際分鐘
    let seconds = NewDate.getSeconds(); //讀取實際秒數


    let distance = 2040 - years;
    years = distance * 365;
    let daytotal = years;
    distance = 12 - months;
    months = distance * 30;
    daytotal = daytotal + months;
    distance = 30 - days;
    daytotal = daytotal + days;
    distance = 24 - hours;
    hours = distance;
    distance = 60 - minutes;
    minutes = distance;
    distance = 60 - seconds;
    seconds = distance;

    let dayss = document.querySelector("#days-3");
    let hourss = document.querySelector('#hours-3');
    let minss = document.querySelector('#mins-3');
    let secc = document.querySelector('#sec-3');
    dayss.innerHTML = daytotal;
    hourss.innerHTML = hours;
    minss.innerHTML = minutes;
    secc.innerHTML = seconds;
}, 1000);