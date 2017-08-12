import Typed from 'typed.js';
import Waves from 'node-waves';
import $ from 'jquery'
import noUiSlider from 'nouislider'
import wNumb from 'wnumb'

Waves.attach('.m-btn',['waves-light']);
Waves.attach('.m-btn-gradientOutline',['waves-light']);
Waves.attach('.filter-search-btn',['waves-light']);
Waves.attach('.m-filters-btn',['waves-block']);
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

//****************** Cost Slider ********************
// var stepSlider = document.getElementById('slider-step');
//
// noUiSlider.create(stepSlider, {
//     start: [50000, 5000000],
//     step: 50000,
//     connect: true,
//     direction: 'rtl',
//     tooltips: true,
//     range: {
//         'min': 50000,
//         'max': 5000000
//     },
//     format: wNumb({
//         decimals: 0,
//         thousand: ',',
//         postfix: ' تومان',
//     })
// });
//
//
// stepSlider.noUiSlider.on('update', function(){
//
// });

// <!-- Initialize the plugin: -->
$(document).ready(function() {
    $('#example-getting-started').multiselect({
        nonSelectedText: 'انتخاب کنید',
        includeSelectAllOption: true,
        allSelectedText: 'همه‌‌ی موارد'
    });
});

//****************** Filters Tray ********************
let isTrayOpen = false;
$("#filters-cost-btn").click(function() {
    if (isTrayOpen){
        closeTray();
        openTray(this);
    }else{
        isTrayOpen = true;
        openTray(this);
    }
});
$("#filters-metr-btn").click(function() {
    if (isTrayOpen){
        closeTray();
        openTray(this);
    }else{
        isTrayOpen = true;
        openTray(this);
    }
});
$("#filters-room-btn").click(function() {
    if (isTrayOpen){
        closeTray();
        openTray(this);
    }else{
        isTrayOpen = true;
        openTray(this);
    }
});
$("#filters-noemelk-btn").click(function() {
    if (isTrayOpen){
        closeTray();
        openTray(this);
    }else{
        isTrayOpen = true;
        openTray(this);
    }
});
$("#filters-moamele-btn").click(function() {
    if (isTrayOpen){
        closeTray();
        openTray(this);
    }else{
        isTrayOpen = true;
        openTray(this);
    }
});

function closeTray() {
    $(".m-filters-btn i").removeClass('gradient-text');
    $('.filter-selected').css('color','#949494');
    $("#filters-tray").animate({
        "margin-top": -124
    }, 530, $.bez([0.45, -0.41, 0.52, 1.04]));
}
function openTray(element) {
    $(element).find('i').addClass('gradient-text');
    $(element).find('.filter-selected').css('color','black');
    $("#filters-tray").animate({
        "margin-top":0
    }, 530, $.bez([0.86, 0, 0.07, 1]));
}

