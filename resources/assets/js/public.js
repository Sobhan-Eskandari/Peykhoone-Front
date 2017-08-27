import Typed from 'typed.js';
import Waves from 'node-waves';
import $ from 'jquery'
import noUiSlider from 'nouislider'
import wNumb from 'wnumb'
import SmoothScroll from 'smooth-scroll'
import 'owl.carousel';


// active category item in real state page
$('ul li a.estate-category-link').click(function () {
    $('ul li a.estate-category-link').removeClass("categoryItem-is-active");
    $(this).addClass("categoryItem-is-active");
});

$('ul li a.m-dashboard-headerMenu-item').click(function () {
    $('ul li a.m-dashboard-headerMenu-item').removeClass("dashboard-Menu-is-active");
    $(this).addClass("dashboard-Menu-is-active");
});

// Home page hamkaran slider
$(document).ready(function() {
    $('.owl-carousel').owlCarousel({

        loop: true,
        margin: 10,
        nav: true,
        items: 1,
        navText: ["<i class='fa fa-chevron-left hi-fontSize-28 gradient-text'></i>", "<i class='fa hi-fontSize-28 gradient-text fa-chevron-right'></i>"]
    });
});


$('ul li a.estate-category-link').click(function () {
    $('ul li a.estate-category-link').removeClass("categoryItem-is-active");
    $(this).addClass("categoryItem-is-active");
});



//smooth scroll
$("a").on('click', function (event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
        // Prevent default anchor click behavior
        event.preventDefault();
        // Store hash
        var hash = this.hash;
        // Using jQuery's animate() method to add smooth page scroll
        // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
        $('html, body').animate({
            scrollTop: $(hash).offset().top
        }, 800, function () {
            // Add hash (#) to URL when done scrolling (default click behavior)
            window.location.hash = hash;
        });
    } // End if

});


//smooth scroll
$("a").on('click', function (event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
        // Prevent default anchor click behavior
        event.preventDefault();
        // Store hash
        var hash = this.hash;
        // Using jQuery's animate() method to add smooth page scroll
        // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
        $('html, body').animate({
            scrollTop: $(hash).offset().top
        }, 800, function () {
            // Add hash (#) to URL when done scrolling (default click behavior)
            window.location.hash = hash;
        });
    } // End if
});

//******************   Gallery Aks khane Autplay ********************
$('.carousel').on('slide.bs.carousel', function () {
    let el = $(".carousel-indicators .active");
    console.log(el.offset().left - 200);
    $('.carousel-indicators').animate({scrollLeft: el.offset().left - 800}, 1000);
});


//****************** Navigation safe baz shode agahi ********************
$("#l-navigator a").on('click',function () {
    $("#l-navigator").find('i').removeClass('gradient-text');

    $(this).find('i').addClass('gradient-text');
});



$(".carousel-control-prev").on('click', function () {
    $('.carousel').carousel(6);
});

//******************  Tozihate Moshaver dare safe agahie Baz shode ********************
$.fn.extend({
    animateCss: function (animationName) {
        var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
        this.addClass('animated ' + animationName).one(animationEnd, function () {
            $(this).removeClass('animated ' + animationName);
        });
        return this;
    }
});
let isVisible = false;
$("#showTozihateMoshaver").on('click', function () {
    if (isVisible) {
        isVisible = false;
        $(".m-tozihateMoshaver").attr("style", "box-shadow:none;height:13ex;");
        $("#showTozihateMoshaver i").css({'transform': 'rotate(' + 0 + 'deg)'});
    } else {
        isVisible = true;
        $(".m-tozihateMoshaver").attr("style", "box-shadow:0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23) !important;height:90%;");
        $("#showTozihateMoshaver i").css({'transform': 'rotate(' + 180 + 'deg)'});
    }
});

if ($(window).width() <= 991) {
    $(".is-justified-center").addClass('justify-content-center');
}
if ($(window).width() <= 991) {
    $(".is-changedto-fluid").toggleClass('container','container-fluid');
}

// <!-- Initialize the plugin: -->
$('.example-getting-started').multiselect({
    nonSelectedText: 'انتخاب کنید',
    includeSelectAllOption: true,
    allSelectedText: 'همه‌‌ی موارد'
});


//****************** Site Loading ********************

$(window).load(function () {
    $("#loading").remove();
    $("#content").show();
});

//****************** Wave Js ********************
Waves.attach('.m-btn', ['waves-light']);
Waves.attach('.filter-search-btn', ['waves-light']);
Waves.attach('.m-filters-btn', ['waves-block']);
Waves.attach('.is-wave-animated', ['waves-light']);
Waves.attach('.is-wave-animated-dark', ['waves-block']);
Waves.attach('#tajrobePeykhoone', ['waves-block']);
Waves.init();

//****************** Ads Card Hover Effect ********************
$(".is-hovered-adCard").mouseenter(function () {
    $(this).find(".m-card-moreInfo").addClass('show');
    $(this).find(".m-card-azhansName").addClass('showTooltip');
    $(this).find(".m-card-moreInfo").css('color', 'white');
    $(this).find(".home-cost").css('font-weight', 'bold');
});
$(".is-hovered-adCard").mouseleave(function () {
    $(this).find(".m-card-moreInfo").removeClass('show');
    $(this).find(".m-card-azhansName").removeClass('showTooltip');
    $(this).find(".m-card-moreInfo").css('color', 'white');
    $(this).find(".m-card-moreInfo").css('color', 'black');
    $(this).find(".home-cost").css('font-weight', 'normal');
});

if ($(window).width() <= 768) {
    // do something for medium screens
    $(".is-hovered-adCard").find(".m-card-moreInfo").addClass('show');
    $(".is-hovered-adCard").find(".m-card-azhansName").addClass('showTooltip');
    $(".is-hovered-adCard").find(".m-card-moreInfo").css('color', 'white');
    $(".is-hovered-adCard").find(".home-cost").css('font-weight', 'bold');
} else {
    $(".is-hovered-adCard").find(".m-card-moreInfo").removeClass('show');
    $(".is-hovered-adCard").find(".m-card-azhansName").removeClass('showTooltip');
    $(".is-hovered-adCard").find(".m-card-moreInfo").css('color', 'white');
    $(".is-hovered-adCard").find(".m-card-moreInfo").css('color', 'black');
    $(".is-hovered-adCard").find(".home-cost").css('font-weight', 'normal');
}
$(".m-horizental-card-hover").hover(function () {
    $(this).find("button.m-horizentalCard-btn").addClass('show');
});
// ============[ Translate English digits to farsi ]===========
let translate = function (englishNumber) {
    let chars = englishNumber.split('');
    let arabicNumbers = ['۰', '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹'];
    for (let i = 0; i < chars.length; i++) {
        if (/\d/.test(chars[i])) {
            chars[i] = arabicNumbers[chars[i]];
        }
    }
    return chars.join('');
};


$("#noemelk-filters").hide();
$("#noemoamele-filters").hide();
$("#tedadekhab-filters").hide();
$("#costs-tray-row").hide();
$("#metraj-tray-row").hide();
//****************** Filters Tray ********************
let isTrayOpen = false;
let openedTray = "";
let selectedBtn;
$("#filters-cost-btn").click(function () {
    selectedBtn = this;
    if (isTrayOpen) {
        closeTray("gheimat");
    } else {
        isTrayOpen = true;
        openTray("gheimat");
    }
});
$("#filters-metr-btn").click(function () {
    selectedBtn = this;
    if (isTrayOpen) {
        closeTray("metraj");
    } else {
        isTrayOpen = true;
        openTray("metraj");
    }
});
$("#filters-room-btn").click(function () {
    selectedBtn = this;
    if (isTrayOpen) {
        closeTray("tedadekhab");
    } else {
        isTrayOpen = true;
        openTray("tedadekhab");
    }
});
$("#filters-noemelk-btn").click(function () {
    selectedBtn = this;
    if (isTrayOpen) {
        closeTray("noemelk");
    } else {
        isTrayOpen = true;
        openTray("noemelk");
    }
});
$("#filters-moamele-btn").click(function () {
    selectedBtn = this;
    if (isTrayOpen) {
        closeTray("noemoamele");
    } else {
        isTrayOpen = true;
        openTray("noemoamele");
    }
});

function closeTray(filterToShow) {
    $(".m-filters-btn i").removeClass('gradient-text');
    $('.filter-selected').css('color', '#949494');
    $("#filters-tray").animate({
        "margin-top": -124
    }, 530, $.bez([0.45, -0.41, 0.52, 1.04]), function () {
        if (openedTray !== filterToShow) {
            switch (filterToShow) {
                case "noemoamele" :
                    openTray("noemoamele");
                    break;
                case "noemelk" :
                    openTray("noemelk");
                    break;
                case "tedadekhab" :
                    openTray("tedadekhab");
                    break;
                case "gheimat" :
                    openTray("gheimat");
                    break;
                case "metraj" :
                    openTray("metraj");
                    break;
            }
        } else {
            openedTray = "";
            showOrHideFilters("");
        }
    });
}
function openTray(filter) {
    $(selectedBtn).find('i').addClass('gradient-text');
    $(selectedBtn).find('.filter-selected').css('color', 'black');
    openedTray = filter;
    showOrHideFilters(filter);
    $("#filters-tray").animate({
        "margin-top": 0
    }, 430, $.bez([0.86, 0, 0.07, 1]));
}

function showOrHideFilters(filter) {
    $("#noemelk-filters").hide();
    $("#noemoamele-filters").hide();
    $("#tedadekhab-filters").hide();
    $("#costs-tray-row").hide();
    $("#metraj-tray-row").hide();
    switch (filter) {
        case "noemoamele" :
            $("#filters-tray-row").show();
            $("#noemoamele-filters").show();
            break;
        case "noemelk" :
            $("#filters-tray-row").show();
            $("#noemelk-filters").show();
            break;
        case "tedadekhab" :
            $("#filters-tray-row").show();
            $("#tedadekhab-filters").show();
            break;
        case "gheimat" :
            $("#filters-tray-row").hide();
            $("#costs-tray-row").show();
            break;
        case "metraj" :
            $("#filters-tray-row").hide();
            $("#metraj-tray-row").show();
            break;
    }
}

//****************** Set kardane title Filter Noe Moamele ********************
let dictionaryOfSelectedMoameleFilters = {
    "خرید و پیش خرید": true,
    "رهن و اجاره": false
};
let moamelefiltersSelectedCount = 1;
$("#kharidVaPishkharid,#rahnVaEjare").click(function () {
    let labelText = $(this).siblings('label').text();

    // tedade checkbox haie entekhab shode ra negah midarad
    if (this.checked) {
        moamelefiltersSelectedCount++;
        // dar dictrionary filterha filtere entekhabi ra true mikonad
        dictionaryOfSelectedMoameleFilters[labelText] = true;
    } else {
        moamelefiltersSelectedCount--;
        // dar dictrionary filterha filtere entekhabi ra false mikonad
        dictionaryOfSelectedMoameleFilters[labelText] = false;
    }

    // dar dictionary iterate mikonad va avvalin filteri ke true shode ra be onvane title set mikonad
    for (var key in dictionaryOfSelectedMoameleFilters) {
        var value = dictionaryOfSelectedMoameleFilters[key];
        if (value) {
            $("#noemoamele-filter-text").text(key);
            break;
        }
    }
    // dar soorati ke tedade filterhaie entekhabi bish az 1 bashad و ... ra ezafe mikonad
    if (moamelefiltersSelectedCount > 1) {
        $("#noemoamele-filter-text").text($("#noemoamele-filter-text").text() + " و ...");
    } else if (moamelefiltersSelectedCount === 0) {
        $("#noemoamele-filter-text").text("انتخاب کنید");
    }
});

//****************** Set kardane title Filter Noe Melk ********************
let dictionaryOfSelectedMelkFilters = {
    "آپارتمان مسکونی": true,
    "آپارتمان اداری": false,
    "ویلا": false,
    "کلنگی": false,
    "مستغلات": false,
    "زمین": false,
    "تجاری": false,
    "پنت هاوس": false
};
let melkfiltersSelectedCount = 1;
$("#noemelk-filters input").click(function () {
    let labelText = $(this).siblings('label').text();

    // tedade checkbox haie entekhab shode ra negah midarad
    if (this.checked) {
        melkfiltersSelectedCount++;
        // dar dictrionary filterha filtere entekhabi ra true mikonad
        dictionaryOfSelectedMelkFilters[labelText] = true;
    } else {
        melkfiltersSelectedCount--;
        // dar dictrionary filterha filtere entekhabi ra false mikonad
        dictionaryOfSelectedMelkFilters[labelText] = false;
    }

    // dar dictionary iterate mikonad va avvalin filteri ke true shode ra be onvane title set mikonad
    for (var key in dictionaryOfSelectedMelkFilters) {
        var value = dictionaryOfSelectedMelkFilters[key];
        if (value) {
            $("#noemelk-filter-text").text(key);
            break;
        }
    }
    // dar soorati ke tedade filterhaie entekhabi bish az 1 bashad و ... ra ezafe mikonad
    if (melkfiltersSelectedCount > 1) {
        $("#noemelk-filter-text").text($("#noemelk-filter-text").text() + " و ...");
    } else if (melkfiltersSelectedCount === 0) {
        $("#noemelk-filter-text").text("انتخاب کنید");
    }
});

//****************** Set kardane title Filter Tedade Khab ********************
let dictionaryOfSelectedRoomsFilters = {
    "۱ خوابه": true,
    "۲ خوابه": false,
    "۳ خوابه": false,
    "۴ خوابه": false,
    "۵ خوابه": false,
    "بیشتر از ۵ خواب": false,
};
let tedadeKhabfiltersSelectedCount = 1;
$("#tedadekhab-filters input").click(function () {
    let labelText = $(this).siblings('label').text();

    // tedade checkbox haie entekhab shode ra negah midarad
    if (this.checked) {
        tedadeKhabfiltersSelectedCount++;
        // dar dictrionary filterha filtere entekhabi ra true mikonad
        dictionaryOfSelectedRoomsFilters[labelText] = true;
    } else {
        tedadeKhabfiltersSelectedCount--;
        // dar dictrionary filterha filtere entekhabi ra false mikonad
        dictionaryOfSelectedRoomsFilters[labelText] = false;
    }

    // dar dictionary iterate mikonad va avvalin filteri ke true shode ra be onvane title set mikonad
    for (var key in dictionaryOfSelectedRoomsFilters) {
        var value = dictionaryOfSelectedRoomsFilters[key];
        if (value) {
            $("#tedadekhab-filter-text").text(key);
            break;
        }
    }
    // dar soorati ke tedade filterhaie entekhabi bish az 1 bashad و ... ra ezafe mikonad
    if (tedadeKhabfiltersSelectedCount > 1) {
        $("#tedadekhab-filter-text").text($("#tedadekhab-filter-text").text() + " و ...");
    } else if (tedadeKhabfiltersSelectedCount === 0) {
        $("#tedadekhab-filter-text").text("انتخاب کنید");
    }
});

//************ Smooth Scroll ***************
var scrollApp = new SmoothScroll('#tajrobePeykhoone a');
var scrollUp = new SmoothScroll('#goUpBtn');
var scrollHomeInfo = new SmoothScroll('#navigate-to-homeInfo');
var scrollEmkanat = new SmoothScroll('#navigate-to-emkanat');
var scrollMoshakhast = new SmoothScroll('#navigate-to-moshakhast');
var scrollMap = new SmoothScroll('#navigate-to-map');
var scrollMoreHome = new SmoothScroll('#navigate-to-moreHome');
var scrollMainFilter = new SmoothScroll('#filter-section');

// ****************** Cost Slider ********************
if( $('#slider-step').length ) {
    var costSlider = document.getElementById('slider-step');

    noUiSlider.create(costSlider, {
        start: [50000, 5000000],
        step: 50000,
        connect: true,
        direction: 'ltr',
        tooltips: true,
        range: {
            'min': 50000,
            'max': 5000000
        },
        format: wNumb({
            decimals: 0,
            thousand: ',',
            postfix: '',
        })
    });

    costSlider.noUiSlider.on('update', function (values, handle) {
        // snapValues[handle].innerHTML = values[handle];
        let translatedMin = values[0].replace("تومان", "");
        let translatedMax = values[1].replace("تومان", "");

        $("#slider-step .noUi-handle-lower .noUi-tooltip").text(` ${translate(translatedMin)}  `);
        $("#slider-step .noUi-handle-upper .noUi-tooltip").text(` ${translate(translatedMax)}  `);
    });
}

// ****************** Metraj Slider ********************
if( $('#metraj-slider').length )  {       // use this if you are using id to check{
    var metrajSlider = document.getElementById('metraj-slider');

    noUiSlider.create(metrajSlider, {
        start: [10, 50000],
        step: 10,
        connect: true,
        direction: 'ltr',
        tooltips: true,
        range: {
            'min': 10,
            'max': 50000
        },
        format: wNumb({
            decimals: 0,
            thousand: ',',
            postfix: 'متر',
        })
    });

    metrajSlider.noUiSlider.on('update', function (values, handle) {
        // snapValues[handle].innerHTML = values[handle];
        let translatedMin = values[0].replace("متر", "");
        let translatedMax = values[1].replace("متر", "");

        $("#metraj-place").text(`از ${translate(translatedMin)} تا ${translate(translatedMax)}`);
        $("#metraj-slider .noUi-handle-lower .noUi-tooltip").text(` ${translate(translatedMin)} متر `);
        $("#metraj-slider .noUi-handle-upper .noUi-tooltip").text(` ${translate(translatedMax)} متر `);
    });
}

// ****************** Sene Bana Slider ********************
if( $('#senebana-slider').length )  {
    // it exists
    var seneBanaSlider = document.getElementById('senebana-slider');

    noUiSlider.create(seneBanaSlider, {
        start: [0, 35],
        step: 2,
        connect: true,
        direction: 'ltr',
        tooltips: true,
        range: {
            'min': 0,
            'max': 35
        },
        format: wNumb({
            decimals: 0,
            thousand: ',',
            postfix: 'سال',
        })
    });

    seneBanaSlider.noUiSlider.on('update', function (values, handle) {

        let translatedMin = values[0].replace("سال", "");
        let translatedMax = values[1].replace("سال", "");

        if (translatedMin == 0) {
            $("#senebana-slider .noUi-handle-lower .noUi-tooltip").text(` نوساز `);
        } else {
            $("#senebana-slider .noUi-handle-lower .noUi-tooltip").text(` ${translate(translatedMin)} سال `);
            // $("#senebana-slider .noUi-handle-lower .noUi-tooltip").text($("#senebana-slider .noUi-handle-lower .noUi-tooltip").text() + 'سال');
        }

        $("#senebana-slider .noUi-handle-upper .noUi-tooltip").text(` ${translate(translatedMax)} سال `);

    });

}


// ****************** Homepage Typed js ********************
var options = {
    strings: ["<strong>با پی خونه ، </strong>آگاهانه ملک انتخاب کن",
        "<strong>با پی خونه ، </strong>در وقت و هزینه هات صرفه جویی کن",
        "<strong>با پی خونه ، </strong>متناسب با علاقه و نیازهات دنبال ملک بگرد",
        "<strong>با پی خونه ، </strong>دنبال آپارتمان و ویلا و مستغلات بگرد",
        "<strong>با پی خونه ، </strong>خونه دار شو",
    ],
    typeSpeed: 60,
    showCursor : true,
    backSpeed : 10,
    backDelay : 900
}
if( $('#typedjs').length )  {
    var typed = new Typed("#typedjs", options);
}


var typed = new Typed("#typedjs", options);



