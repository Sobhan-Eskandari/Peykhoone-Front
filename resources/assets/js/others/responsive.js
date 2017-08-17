/**
 * Created by sobhaneskandari on 7/25/17.
 */
$(document).ready(function() {
    // Optimalisation: Store the references outside the event handler:
    var $window = $(window);
    var changeCard = false;
    function checkWidth() {
        var windowsize = $window.width();
        if (windowsize < 992) {
            //if the window is greater than 440px wide then turn on jScrollPane..
            console.log(windowsize);
            reponsiveSmallCard();
            changeCard = true;
        }else{
            if (changeCard){
                reponsiveBigCard();
            }

        }
    }
    // Execute on load
    checkWidth();
    // Bind event listener
    $(window).resize(checkWidth);

    function reponsiveSmallCard() {
        var card = $(".is-last-card");
        console.log(card[0]);
        $(".lastCard").remove();

        var row2 = $("#row2");
        var row4 = $("#row4");

        row2.append(card[0]);
        row4.append(card[1]);
    }

    function reponsiveBigCard() {
        var card = $(".is-last-card");
        console.log(card[0]);
        $(".lastCard").remove();

        var row1 = $("#row1");
        var row3 = $("#row3");

        row1.append(card[0]);
        row3.append(card[1]);
    }

});