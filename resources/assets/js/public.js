import Typed from 'typed.js';
import Waves from 'node-waves';
import $ from 'jquery'
import noUiSlider from 'nouislider'
import wNumb from 'wnumb'
import SmoothScroll from 'smooth-scroll'

Waves.attach('.m-btn',['waves-light']);
Waves.attach('.filter-search-btn',['waves-light']);
Waves.attach('.m-filters-btn',['waves-block']);
Waves.attach('.is-wave-animated',['waves-light']);
Waves.attach('#tajrobePeykhoone',['waves-block']);
Waves.init();

//****************** Ads Card Hover Effect ********************
$( ".is-hovered-adCard" ).mouseenter(function() {
    $( this ).find(".m-card-moreInfo").addClass('show');
    $( this ).find(".m-card-azhansName").addClass('showTooltip');
    $( this ).find(".m-card-moreInfo").css('color','white');
    $( this ).find(".home-cost").css('font-weight','bold');
});
$( ".is-hovered-adCard" ).mouseleave(function() {
    $( this ).find(".m-card-moreInfo").removeClass('show');
    $( this ).find(".m-card-azhansName").removeClass('showTooltip');
    $( this ).find(".m-card-moreInfo").css('color','white');
    $( this ).find(".m-card-moreInfo").css('color','black');
    $( this ).find(".home-cost").css('font-weight','normal');
});

if ($(window).width() <= 768) {
    // do something for medium screens
    $( ".is-hovered-adCard" ).find(".m-card-moreInfo").addClass('show');
    $( ".is-hovered-adCard" ).find(".m-card-azhansName").addClass('showTooltip');
    $( ".is-hovered-adCard" ).find(".m-card-moreInfo").css('color','white');
    $( ".is-hovered-adCard" ).find(".home-cost").css('font-weight','bold');
}else{
    $( ".is-hovered-adCard" ).find(".m-card-moreInfo").removeClass('show');
    $( ".is-hovered-adCard" ).find(".m-card-azhansName").removeClass('showTooltip');
    $( ".is-hovered-adCard" ).find(".m-card-moreInfo").css('color','white');
    $( ".is-hovered-adCard" ).find(".m-card-moreInfo").css('color','black');
    $( ".is-hovered-adCard" ).find(".home-cost").css('font-weight','normal');
}

// <!-- Initialize the plugin: -->
$(document).ready(function() {
    $('#example-getting-started').multiselect({
        nonSelectedText: 'انتخاب کنید',
        includeSelectAllOption: true,
        allSelectedText: 'همه‌‌ی موارد'
    });
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
// ****************** Cost Slider ********************
var stepSlider = document.getElementById('slider-step');

noUiSlider.create(stepSlider, {
    start: [50000, 5000000],
    step: 50000,
    connect: true,
    direction: 'rtl',
    tooltips: true,
    range: {
        'min': 50000,
        'max': 5000000
    },
    format: wNumb({
        decimals: 0,
        thousand: ',',
        postfix: ' تومان',
    })
});
// ****************** Metraj Slider ********************
var metrajSlider = document.getElementById('metraj-slider');

noUiSlider.create(metrajSlider, {
    start: [10, 50000],
    step: 10,
    connect: true,
    direction: 'rtl',
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

metrajSlider.noUiSlider.on('update', function( values, handle ) {
    // snapValues[handle].innerHTML = values[handle];
    let translatedMin = values[0].replace("متر","");
    let translatedMax = values[1].replace("متر","");

    $("#metraj-place").text( `از ${translate(translatedMin)} تا ${translate(translatedMax)}`);
});


$("#noemelk-filters").hide();
$("#noemoamele-filters").hide();
$("#tedadekhab-filters").hide();
$("#costs-tray-row").hide();
$("#metraj-tray-row").hide();
//****************** Filters Tray ********************
let isTrayOpen = false;
let openedTray = "";
let selectedBtn;
$("#filters-cost-btn").click(function() {
    selectedBtn = this;
    if (isTrayOpen){
        closeTray("gheimat");
    }else{
        isTrayOpen = true;
        openTray("gheimat");
    }
});
$("#filters-metr-btn").click(function() {
    selectedBtn = this;
    if (isTrayOpen){
        closeTray("metraj");
    }else{
        isTrayOpen = true;
        openTray("metraj");
    }
});
$("#filters-room-btn").click(function() {
    selectedBtn = this;
    if (isTrayOpen){
        closeTray("tedadekhab");
    }else{
        isTrayOpen = true;
        openTray("tedadekhab");
    }
});
$("#filters-noemelk-btn").click(function() {
    selectedBtn = this;
    if (isTrayOpen){
        closeTray("noemelk");
    }else{
        isTrayOpen = true;
        openTray("noemelk");
    }
});
$("#filters-moamele-btn").click(function() {
    selectedBtn = this;
    if (isTrayOpen){
        closeTray("noemoamele");
    }else{
        isTrayOpen = true;
        openTray("noemoamele");
    }
});

function closeTray(filterToShow) {
    $(".m-filters-btn i").removeClass('gradient-text');
    $('.filter-selected').css('color','#949494');
    $("#filters-tray").animate({
        "margin-top": -124
    }, 530, $.bez([0.45, -0.41, 0.52, 1.04]),function () {
        if (openedTray !== filterToShow){
            switch (filterToShow){
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
        }else{
            openedTray = "";
            showOrHideFilters("");
        }
    });
}
function openTray(filter) {
    $(selectedBtn).find('i').addClass('gradient-text');
    $(selectedBtn).find('.filter-selected').css('color','black');
    openedTray = filter;
    showOrHideFilters(filter);
    $("#filters-tray").animate({
        "margin-top":0
    }, 430, $.bez([0.86, 0, 0.07, 1]));
}

function showOrHideFilters(filter) {
    $("#noemelk-filters").hide();
    $("#noemoamele-filters").hide();
    $("#tedadekhab-filters").hide();
    $("#costs-tray-row").hide();
    $("#metraj-tray-row").hide();
    switch (filter){
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
    "خرید و پیش خرید" : true,
    "رهن و اجاره" : false
};
let moamelefiltersSelectedCount = 1;
$("#kharidVaPishkharid,#rahnVaEjare").click(function () {
    let labelText = $(this).siblings('label').text();

    // tedade checkbox haie entekhab shode ra negah midarad
    if (this.checked){
        moamelefiltersSelectedCount++;
        // dar dictrionary filterha filtere entekhabi ra true mikonad
        dictionaryOfSelectedMoameleFilters[labelText] = true;
    }else{
        moamelefiltersSelectedCount--;
        // dar dictrionary filterha filtere entekhabi ra false mikonad
        dictionaryOfSelectedMoameleFilters[labelText] = false;
    }

    // dar dictionary iterate mikonad va avvalin filteri ke true shode ra be onvane title set mikonad
    for(var key in dictionaryOfSelectedMoameleFilters) {
        var value = dictionaryOfSelectedMoameleFilters[key];
        if (value){
            $("#noemoamele-filter-text").text(key);
            break;
        }
    }
    // dar soorati ke tedade filterhaie entekhabi bish az 1 bashad و ... ra ezafe mikonad
    if (moamelefiltersSelectedCount > 1){
        $("#noemoamele-filter-text").text($("#noemoamele-filter-text").text() + " و ...");
    }else if (moamelefiltersSelectedCount === 0){
        $("#noemoamele-filter-text").text("انتخاب کنید");
    }
});

//****************** Set kardane title Filter Noe Melk ********************
let dictionaryOfSelectedMelkFilters = {
    "آپارتمان مسکونی" : true,
    "آپارتمان اداری" : false,
    "ویلا" : false,
    "کلنگی" : false,
    "مستغلات" : false,
    "زمین" : false,
    "تجاری" : false,
    "پنت هاوس" : false
};
let melkfiltersSelectedCount = 1;
$("#noemelk-filters input").click(function () {
    let labelText = $(this).siblings('label').text();

    // tedade checkbox haie entekhab shode ra negah midarad
    if (this.checked){
        melkfiltersSelectedCount++;
        // dar dictrionary filterha filtere entekhabi ra true mikonad
        dictionaryOfSelectedMelkFilters[labelText] = true;
    }else{
        melkfiltersSelectedCount--;
        // dar dictrionary filterha filtere entekhabi ra false mikonad
        dictionaryOfSelectedMelkFilters[labelText] = false;
    }

    // dar dictionary iterate mikonad va avvalin filteri ke true shode ra be onvane title set mikonad
    for(var key in dictionaryOfSelectedMelkFilters) {
        var value = dictionaryOfSelectedMelkFilters[key];
        if (value){
            $("#noemelk-filter-text").text(key);
            break;
        }
    }
    // dar soorati ke tedade filterhaie entekhabi bish az 1 bashad و ... ra ezafe mikonad
    if (melkfiltersSelectedCount > 1){
        $("#noemelk-filter-text").text($("#noemelk-filter-text").text() + " و ...");
    }else if (melkfiltersSelectedCount === 0){
        $("#noemelk-filter-text").text("انتخاب کنید");
    }
});

//****************** Set kardane title Filter Tedade Khab ********************
let dictionaryOfSelectedRoomsFilters = {
    "۱ خوابه" : true,
    "۲ خوابه" : false,
    "۳ خوابه" : false,
    "۴ خوابه" : false,
    "۵ خوابه" : false,
    "بیشتر از ۵ خواب" : false,
};
let tedadeKhabfiltersSelectedCount = 1;
$("#tedadekhab-filters input").click(function () {
    let labelText = $(this).siblings('label').text();

    // tedade checkbox haie entekhab shode ra negah midarad
    if (this.checked){
        tedadeKhabfiltersSelectedCount++;
        // dar dictrionary filterha filtere entekhabi ra true mikonad
        dictionaryOfSelectedRoomsFilters[labelText] = true;
    }else{
        tedadeKhabfiltersSelectedCount--;
        // dar dictrionary filterha filtere entekhabi ra false mikonad
        dictionaryOfSelectedRoomsFilters[labelText] = false;
    }

    // dar dictionary iterate mikonad va avvalin filteri ke true shode ra be onvane title set mikonad
    for(var key in dictionaryOfSelectedRoomsFilters) {
        var value = dictionaryOfSelectedRoomsFilters[key];
        if (value){
            $("#tedadekhab-filter-text").text(key);
            break;
        }
    }
    // dar soorati ke tedade filterhaie entekhabi bish az 1 bashad و ... ra ezafe mikonad
    if (tedadeKhabfiltersSelectedCount > 1){
        $("#tedadekhab-filter-text").text($("#tedadekhab-filter-text").text() + " و ...");
    }else if (tedadeKhabfiltersSelectedCount === 0){
        $("#tedadekhab-filter-text").text("انتخاب کنید");
    }
});

//************ Smooth Scroll ***************
var scrollApp = new SmoothScroll('#tajrobePeykhoone a');
var scrollUp = new SmoothScroll('#goUpBtn');