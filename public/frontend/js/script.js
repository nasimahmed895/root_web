// @ts-ignore
$(document).ready(function () {


    // @ts-ignore
    $('.demo').slick({
        prevArrow: "<img class='a-left control-c prev slick-prev' src='public/frontend/Icon_Images/left.png'>",
        nextArrow: "<img class='a-right control-c next slick-next' src='public/frontend/Icon_Images/right.png'>",
        infinite: true,
        speed: 300,
        slidesToShow: 3,
        slidesToScroll: 1,
        centerPadding: '40px',
        responsive: [
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 2.5,
                    slidesToScroll: 1,
                    infinite: true,
                }
            },
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    infinite: true,
                }
            },
            {
                breakpoint: 800,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                }
            },
            {
                breakpoint: 500,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                }
            }
        ]
    });


    // @ts-ignore
    $('.client_think2').slick({
        prevArrow: "<img class='a-left control-c prev slick-prev' src='public/frontend/Icon_Images/left.png'>",
        nextArrow: "<img class='a-right control-c next slick-next' src='public/frontend/Icon_Images/right.png'>",
        speed: 300,
        slidesToShow: 3,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                    infinite: true,
                }
            },
            {
                breakpoint: 770,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                }
            },
            {
                breakpoint: 680,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                }
            }
        ]
    });


});

// @ts-ignore
$('.slider_planning').slick({
    prevArrow: "<img class='a-left control-c prev slick-prev' src='public/frontend/Icon_Images/left.png'>",
    nextArrow: "<img class='a-right control-c next slick-next' src='public/frontend/Icon_Images/right.png'>",
    dots: true,
    infinite: true,
    speed: 300,
    slidesToShow: 3,
    slidesToScroll: 1,
    responsive: [
        {
            breakpoint: 1080,
            settings: {
                slidesToShow: 2.5,
                slidesToScroll: 1,
                infinite: true,
                dots: true
            }
        },
        {
            breakpoint: 800,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
                dots: true,
                infinite: true,
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                dots: true,
                infinite: true,
            }
        }
    ]
});


// @ts-ignore
$("button#navbar-down-icon, button#navbar-up-icon").on("click", function () {
    // @ts-ignore
    var menu_down = $("#navbar-down-icon");
    // @ts-ignore
    var menu_up = $("#navbar-up-icon");
    var sohow_hide = $(".activtichack");
    if (!menu_down.hasClass("d-none")) {
        menu_down.addClass("d-none");
        menu_up.removeClass("d-none");
        sohow_hide.removeClass("d-none");
    } else {
        menu_down.removeClass("d-none");
        menu_up.addClass("d-none");
        sohow_hide.addClass("d-none");
    }
});
let appy_button = document.getElementById("appy_button");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function () {
    scrollFunction()
};

function scrollFunction() {
    if (document.body.scrollTop > 400 || document.documentElement.scrollTop > 400) {
        appy_button.classList.add("button_scroll");
    } else {
        appy_button.classList.remove("button_scroll");

    }
}

var htmlCollection = document.getElementsByClassName('item');
//getting elements by class name into an HTMLCollection

var itemsId = Array.from(htmlCollection);
//turning the HTMLcollection into an array for easier manipulation of the elements

var sectionDeg = 360 / itemsId.length;
//sectioning the (imaginary) circle into a number of section equalling the number of items
//it can be used on more elements

var radianSectionDeg = sectionDeg * Math.PI * 2 / 360;
//transforming from degrees into radians

var radiusLength = 270;
//the distance between the center of the circle to the element
//edit this number to increase/decrease that distance

for (var i = 0; i < itemsId.length; i++) {
    // @ts-ignore
    itemsId[i].style.top = radiusLength * Math.sin(radianSectionDeg * i - 5.215) - 50 + 'px';
    // @ts-ignore
    itemsId[i].style.left = radiusLength * Math.cos(radianSectionDeg * i - 5.220) - 50 + 'px';
}


var rotation = 0;
var center = document.getElementById('center');
var ReferenceIndex = 0;
showReferences();
function showReferences() {


    var i;
    var References = document.getElementsByClassName("item");
    for (i = 0; i < References.length; i++) {
        References[i].classList.remove('active');
    }
    ReferenceIndex++;
    if (ReferenceIndex > References.length) {
        ReferenceIndex = 1;

    }
    References[ReferenceIndex - 1].classList.add('active');
    setTimeout(showReferences, 3000);


    rotation = rotation - radianSectionDeg;
    // @ts-ignore
    center.style.transform = 'rotate(' + rotation + 'rad)';
    // @ts-ignore
    for (var i = 0; i < itemsId.length; i++) {
        // @ts-ignore
        itemsId[i].style.transform = 'rotate(' + -rotation + 'rad)';
        // itemsId[i].style.transition = ' 100ms ease all';
        // transition: 300ms ease all;r
    }


}





var htmlCollection2 = document.getElementsByClassName('item2');
//getting elements by class name into an HTMLCollection

var itemsId2 = Array.from(htmlCollection2);
//turning the HTMLcollection into an array for easier manipulation of the elements

var sectionDeg2 = 360 / itemsId2.length;
//sectioning the (imaginary) circle into a number of section equalling the number of items
//it can be used on more elements

var radianSectionDeg2 = sectionDeg2 * Math.PI * 2 / 360;
//transforming from degrees into radians

var radiusLength2 = 270;
//the distance between the center of the circle to the element
//edit this number to increase/decrease that distance

for (var i = 0; i < itemsId2.length; i++) {
    // @ts-ignore
    itemsId2[i].style.top = radiusLength2 * Math.sin(radianSectionDeg2 * i - 2.120) - 50 + 'px';
    // @ts-ignore
    itemsId2[i].style.left = radiusLength2 * Math.cos(radianSectionDeg2 * i - 2.120) - 50 + 'px';
}


var rotation2 = 0;
var center2 = document.getElementById('center2');
var ReferenceIndex2 = 0;
showReferences2();
function showReferences2() {


    var i;
    var References2 = document.getElementsByClassName("item2");
    for (i = 0; i < References2.length; i++) {
        References2[i].classList.remove('active');
    }
    ReferenceIndex2++;
    if (ReferenceIndex2 > References2.length) {
        ReferenceIndex2 = 1;

    }
    References2[ReferenceIndex2 - 1].classList.add('active');
    setTimeout(showReferences2, 3000);


    rotation2 = rotation2 - radianSectionDeg2;
    // @ts-ignore
    center2.style.transform = 'rotate(' + rotation2 + 'rad)';
    // @ts-ignore
    for (var i = 0; i < itemsId2.length; i++) {
        // @ts-ignore
        itemsId2[i].style.transform = 'rotate(' + -rotation2 + 'rad)';
        // itemsId2[i].style.transition = ' 100ms ease all';
        // transition: 300ms ease all;r
    }


}


(function () {
    var $body = document.body,
        $menu_trigger = $body.getElementsByClassName("menu-trigger")[0];

    if (typeof $menu_trigger !== "undefined") {
        $menu_trigger.addEventListener("click", function () {
            $body.className = $body.className == "menu-active" ? "" : "menu-active";
        });
    }
}.call(this));
