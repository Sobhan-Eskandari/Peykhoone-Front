import 'materialize-stepper'
import 'jquery'
import Waves from 'node-waves';
import mixitup from 'mixitup';


// ****************** Animate Css ********************
$.fn.extend({
    animateCss: function (animationName) {
        var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
        this.addClass('animated ' + animationName).one(animationEnd, function () {
            $(this).removeClass('animated ' + animationName);
        });
        return this;
    }
});

// ****************** Dropdowns Acitvator ********************
$( document ).ready(function() {
    $('.is-radio-dropdown').multiselect();

    $('.is-checkbox-dropdown').multiselect({
        nonSelectedText: 'انتخاب کنید',
        includeSelectAllOption: true,
        allSelectedText: 'همه‌‌ی موارد'
    });
});


//****************** Site Loading ********************
$(window).load(function () {
    $("#loading").remove();
    $("#content").show();
});

// ****************** Horizental Stepper ********************
$('.stepper').activateStepper({
    linearStepsNavigation: true, //allow navigation by clicking on the next and previous steps on linear steppers
    autoFocusInput: true, //since 2.1.1, stepper can auto focus on first input of each step
    autoFormCreation: true, //control the auto generation of a form around the stepper (in case you want to disable it)
    showFeedbackLoader: true //set if a loading screen will appear while feedbacks functions are running
});


//****************** Wave Js ********************
Waves.attach('.is-wave-animated', ['waves-light']);
Waves.attach('.is-wave-animated-dark', ['waves-block']);
Waves.init();

//************ Show and hide Rahno ejare va kharid pishkharid **************
let rahn_ejare_section = $("#is-rahn-ejare-section");
let foroosh_pishforoosh_section = $("#is-foroosh-pishforoosh-section");
let sanad_section = $("#is-sanad-section");
rahn_ejare_section.hide();
$("#rahn_ejare").click(function () {
    foroosh_pishforoosh_section.hide();
    sanad_section.hide();
    rahn_ejare_section.show();
});
$("#foroosh_pishforoosh").click(function () {
    setTimeout(function(){
        foroosh_pishforoosh_section.show();
        sanad_section.show();
        rahn_ejare_section.hide();
    }, 500);
});

//********** Show and hide مسکونی خانه  ************
var config = {
    animation: {
        enable: false
    },
    selectors: {
        target: '.mix'
    }
};
if( $('.mix-container').length ) {
    var mixer = mixitup('.mix-container',config);
    mixer.filter('.is-typeof-maskooni');
}

$('#noe_melk').change(function() {
    if ($(this).find(':selected').val() === '1') {
        mixer.filter('.is-typeof-maskooni');
    } else if ($(this).find(':selected').val() === '2') {
        mixer.filter('.is-typeof-edari');
    } else if ($(this).find(':selected').val() === '3') {
        mixer.filter('.is-typeof-tejari');
    } else if ($(this).find(':selected').val() === '4') {
        mixer.filter('.is-typeof-zamin');
    } else if ($(this).find(':selected').val() === '5') {
        mixer.filter('.is-typeof-mostaghelat');
    }
});

//************ Show and hide Chansal sakht va kolangi **************
let bazsazishodeParent = $("#bazsazishode").parent();
let ghabeleSokoonatParent = $("#ghabele_sokoonat").parent();
bazsazishodeParent.hide();
ghabeleSokoonatParent.hide();
$("#nosaz").click(function () {
   bazsazishodeParent.hide();
   ghabeleSokoonatParent.hide();
});
$("#chansalsakht").click(function () {
    bazsazishodeParent.show();
    ghabeleSokoonatParent.hide();
});
$("#kolangi").click(function () {
    bazsazishodeParent.show();
    ghabeleSokoonatParent.show();
});

//************ Show and hide معاوضه **************
$("#saghfe_mablagh_moaveze").parent().parent().slideUp();
$('#moaveze').change(function() {
    if(this.checked) {
        $("#saghfe_mablagh_moaveze").parent().parent().slideDown();
    }else{
        $("#saghfe_mablagh_moaveze").parent().parent().slideUp();
    }
});

//************ Show and hide پیش فروش **************
$("#is-pishforoosh-section").slideUp();
$('#pishforoosh').change(function() {
    if(this.checked) {
        $("#is-pishforoosh-section").slideDown();
    }else{
        $("#is-pishforoosh-section").slideUp();
    }
});

//************ Show and hide دارای وام **************
$("#is-daraievam-section").slideUp();
$('#daraievam').change(function() {
    if(this.checked) {
        $("#is-daraievam-section").slideDown();
    }else{
        $("#is-daraievam-section").slideUp();
    }
});

//************ Show and hide فروش با مستاجر  **************
$("#is-forooshBaMostajer-section").slideUp();
$('#foroosh_ba_mostajer').change(function() {
    if(this.checked) {
        $("#is-forooshBaMostajer-section").slideDown();
    }else{
        $("#is-forooshBaMostajer-section").slideUp();
    }
});

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
