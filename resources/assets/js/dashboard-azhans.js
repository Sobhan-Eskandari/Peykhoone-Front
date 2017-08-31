import 'materialize-stepper'
import 'jquery'
import Waves from 'node-waves';
import mixitup from 'mixitup';


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
rahn_ejare_section.hide();
$("#rahn_ejare").click(function () {
    foroosh_pishforoosh_section.hide();
    rahn_ejare_section.show();
});
$("#foroosh_pishforoosh").click(function () {
    setTimeout(function(){
        foroosh_pishforoosh_section.show();
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
var mixer = mixitup('.mix-container',config);
mixer.filter('.is-typeof-maskooni');
$('#noe_melk').change(function() {
    // if ($(this).find(':selected').text() === 'مسکونی (خانه)') {
    //     mixer.filter('.is-typeof-maskooni');
    // } else if ($(this).find(':selected').text() === 'اداری (دفترکار)') {
    //     mixer.filter('.is-typeof-edari');
    // } else if ($(this).find(':selected').text() === 'تجاری (مغازه)') {
    //     mixer.filter('.is-typeof-tejari');
    // } else if ($(this).find(':selected').text() === 'زمین') {
    //     mixer.filter('.is-typeof-zamin');
    // } else if ($(this).find(':selected').text() === 'مستغلات (کل ملک و زمین)') {
    //     mixer.filter('.is-typeof-mostaghelat');
    // }
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

