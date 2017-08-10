import Typed from 'typed.js';
import Waves from 'node-waves';
import $ from 'jquery'
import noUiSlider from 'nouislider'
import wNumb from 'wnumb'

Waves.attach('.m-btn',['waves-float','waves-light']);
Waves.attach('.m-btn-gradientOutline',['waves-float','waves-light']);
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


stepSlider.noUiSlider.on('update', function(){

});
