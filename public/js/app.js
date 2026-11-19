var creditVal = document.getElementById("credit-val");
var rateVal = document.getElementById("rate-val");
var creditText = document.getElementById("credit-text");
var rateText = document.getElementById("rate-text");
var credit = document.getElementById("credits");
var rate = document.getElementById("rate");

var buttonShowHide = document.getElementById("buttonShowHide");
var showHideForm = document.getElementById("show-hide");

var zipCode = document.getElementById("zip-code");

var advantagesSlider = document.querySelector(".card-slider");

// get values from slider
if (creditVal && creditText && credit) {
    creditText.value = creditVal.value;
    credit.value = creditVal.value;

    creditVal.oninput = function () {
        creditText.value = this.value;
        credit.value = this.value;
    };

    creditText.oninput = function () {
        creditVal.value = this.value;
        credit.value = this.value;
    };
}

if (rateVal && rateText && rate) {
    rateText.value = rateVal.value;
    rate.value = rateVal.value;

    rateVal.oninput = function () {
        rateText.value = this.value;
        rate.value = this.value;
    };

    rateText.oninput = function () {
        rateVal.value = this.value;
        rate.value = this.value;
    };
}

if (buttonShowHide && showHideForm) {
    buttonShowHide.onclick = function () {
        if (showHideForm.style.display == "none") {
            showHideForm.style.display = "block";
        }
    };
}

// Zip code formatter
if (zipCode) {
    zipCode.onkeyup = function (e) {
        var code = this.value;
        var key = e.keyCode || e.charCode;

        if (this.value.length == 2) {
            if (key == 8 || key == 46) {
            } else {
                this.value = code + "-";
            }
        }
        if (this.value.indexOf("--") !== -1) {
            this.value = code.replace("--", "-");
        }
    };
}

// Card slider (jQuery)
// $(document).ready(function($) {
//     $('.card-slider').slick({
//         dots: true,
//         infinite: true,
//         speed: 500,
//         slidesToShow: 1,
//         slidesToScroll: 1,
//         autoplay: false,
//         autoplaySpeed: 2000,
//         arrows: true,
//         responsive: [{
//                 breakpoint: 600,
//                 settings: {
//                     slidesToShow: 1,
//                     slidesToScroll: 1
//                 }
//             },
//             {
//                 breakpoint: 400,
//                 settings: {
//                     arrows: false,
//                     slidesToShow: 1,
//                     slidesToScroll: 1
//                 }
//             }
//         ]
//     });
// });

var z = 999;
$(function () {
    $(".card-grid-item").click(function () {
        var $more = $(this).find(".more");
        $more.css("z-index", z).show();
        z++;

        var h = $more.height();
        $(this).height(h);
    });

    $(".more").click(function (event) {
        event.stopPropagation();
        $(this).hide();
        $(".card-grid-item").height(100);
    });
});
