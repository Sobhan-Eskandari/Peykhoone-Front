import 'materialize-stepper'
import 'jquery'

$('.stepper').activateStepper({
    linearStepsNavigation: true, //allow navigation by clicking on the next and previous steps on linear steppers
    autoFocusInput: true, //since 2.1.1, stepper can auto focus on first input of each step
    autoFormCreation: true, //control the auto generation of a form around the stepper (in case you want to disable it)
    showFeedbackLoader: true //set if a loading screen will appear while feedbacks functions are running
});