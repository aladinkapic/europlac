let selected_estate_id = 1;

// $("body").on('click', '.schedule', function ()  {
//
// });

$(document).ready(function() {
    $(".schedule").click(function () {
        let date = $(".swiper-slide-active .calendar-date").val();
        let week_day = $(".swiper-slide-active .calendar-day").val();
        selected_estate_id = $("#estate-full-id").val();

        let time_from = $("#calendar-time-from").text(), time_to = $("#calendar-time-to").text();


        $("#wanted-message").val(
            "Poštovani, zakazao bih posjetu / pregled nekretnine (" + $("#estate-full-name").text() + "), " + date +
            " (" + week_day + ") u periodu od " + time_from + "-" + time_to + '. \n\n'
        );

        console.log(selected_estate_id);

        $( ".my-prefered-option" ).trigger( "click" ); // Trigger click event
    });


    // Send email from estate
    $(".send-button").click(function () {
        $.notify("Vaša poruka je uspješno poslana !", "success");
    });
});


