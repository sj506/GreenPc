ctntCircle = document.querySelectorAll('.circleList');

ctntCircle.forEach(() => {
    document.addEventListener('scroll', function () {
        var currentScrollValue = document.documentElement.scrollTop;
        console.log('currentScrollValue is ' + currentScrollValue);
    });
});

var swiper = new Swiper('.mySwiper', {
    direction: 'vertical',
    slidesPerView: 3,
    spaceBetween: 10,
    mousewheel: true,
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
});

// const hover = document.querySelectorAll('.hover');
// const hoverCircle = document.querySelectorAll('.swiper-slide');

// hoverCircle.forEach((item) => {
//     item.addEventListener('mouseover', function () {
//         item.classList.toggle('ctntCircleHover');
//     });
// });

// -slide:hover {
//     width: 20rem !important;
//     height: 20rem !important;
//     transition: all 0.7s ease-in-out !important;
// }
