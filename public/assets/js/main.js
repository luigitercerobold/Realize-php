

const selectElement= function (element) {
    return document.querySelector(element);
};


window.sr = ScrollReveal();

const bloque1 = document.querySelector("#block1");


sr.reveal('.animate-left',{
    origin: 'left',
    duration:1000,
    distance: '25rem',
    delay: 300
});
sr.reveal('.animate-right',{
    origin: 'right',
    duration:1000,
    distance: '25rem',
    delay: 300
});
sr.reveal('.animate-top',{
    origin: 'top',
    duration:1000,
    distance: '5rem',
    delay: 400
});
sr.reveal('.animate-bottom',{
    origin: 'bottom',
    duration:1000,
    distance: '10rem',
    delay: 300
});
var mySwiper2 = new Swiper('#swiper-container2', {
    watchSlidesProgress: true,
    watchSlidesVisibility: true,
    slidesPerView: 3

})



$( document ).ready(function() {
   // document.getElementById('block1').style.transform="translateY(50%)";
    $('#logo').css('opacity','0');
    $('#select_logo').click(function(e){
        e.preventDefault();
        $('#logo').trigger('click');
    });


});

var element = document.getElementById('menucontentjeje');
$('.menu-toggle').click(function() {
    if (window.getComputedStyle(element).getPropertyValue('opacity') === "0") {
        element.style.maxHeight = "160px";
        element.style.height = "160px";
        element.style.opacity = "1";

    } else {
        
        element.style.opacity = "0";
        element.style.maxHeight = "0";
        element.style.height = "0";
    }
});


