import Typed from 'typed.js';
import Waves from 'node-waves';
import $ from 'jquery'

Waves.attach('.m-btn',['waves-float','waves-light']);
Waves.attach('.m-btn-gradientOutline',['waves-float','waves-light']);
Waves.init();

$( ".is-hovered-adCard" ).mouseenter(function() {
    $( this ).find(".m-card-moreInfo").addClass('show');
    $( this ).find(".m-card-moreInfo").css('color','white');
    $( this ).find(".home-cost").css('font-weight','bold');
});
$( ".is-hovered-adCard" ).mouseleave(function() {
    $( this ).find(".m-card-moreInfo").removeClass('show');
    $( this ).find(".m-card-moreInfo").css('color','black');
    $( this ).find(".home-cost").css('font-weight','normal');
});