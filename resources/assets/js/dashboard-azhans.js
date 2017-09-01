import 'materialize-stepper'
import 'jquery'
// require('./bootstrap');

// ****************** Dropdowns Acitvator ********************
$( document ).ready(function() {
    $('.is-radio-dropdown').multiselect();

    $('.is-checkbox-dropdown').multiselect({
        nonSelectedText: 'انتخاب کنید',
        includeSelectAllOption: true,
        allSelectedText: 'همه‌‌ی موارد'
    });
    $('.buy-presell-btn').multiselect({
        nonSelectedText: 'خرید و پیش خرید',
        includeSelectAllOption: true,
        allSelectedText: 'همه‌‌ی موارد'
    });
    $('.state-kind-btn').multiselect({
        nonSelectedText: 'آپارتمانی مسکونی',
        includeSelectAllOption: true,
        allSelectedText: 'همه‌‌ی موارد'
    });
    $('.stateKind').multiselect({
        nonSelectedText: 'مسکونی',
        includeSelectAllOption: true,
        allSelectedText: 'همه‌‌ی موارد'
    });
    $('.stateCategory').multiselect({
        nonSelectedText: 'آپارتمان',
        includeSelectAllOption: true,
        allSelectedText: 'همه‌‌ی موارد'
    });
    $('.stateGoal').multiselect({
        nonSelectedText: 'فروش یا پیش فروش',
        includeSelectAllOption: true,
        allSelectedText: 'همه‌‌ی موارد'
    });
    $('.stateProvince').multiselect({
        nonSelectedText: 'گیلان',
        includeSelectAllOption: true,
        allSelectedText: 'همه‌‌ی موارد'
    });
    $('.stateCity').multiselect({
        nonSelectedText: 'رشت',
        includeSelectAllOption: true,
        allSelectedText: 'همه‌‌ی موارد'
    });
    $('.stateDistrict').multiselect({
        nonSelectedText: 'رشت',
        includeSelectAllOption: true,
        allSelectedText: 'همه‌‌ی موارد'
    });
    $('.stateTime').multiselect({
        nonSelectedText: '1 ماه',
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








