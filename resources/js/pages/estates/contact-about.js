let selected_estate_id = 1;

// $("body").on('click', '.schedule', function ()  {
//
// });

$(document).ready(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });


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
    $(".send-estate-message").click(function () {
        let name     = $("#your_name").val();
        let email    = $("#your_email").val();
        let phone    = $("#your_phone").val();
        let message  = $("#wanted-message").val();
        let id       = $("#estate-full-id").val();
        let purpose  = $("#request_showing_of_estate").attr('value');

        if(name === '' || email === '' || phone === '' || message === ''){
            $.notify("Molimo popunite sva polja prije slanja poruke !!", "warning");
            return;
        }

        $("#loading-gif").fadeIn();

        $.ajax({
            type:'POST',
            url: '/email/estate',
            data: {id : id, name : name, email : email, phone : phone, message : message, purpose : purpose },
            success:function(data){
                let response = JSON.parse(data);
                if(response['code'] === '0000'){
                    $.notify(response['message'], "success");

                    $("#your_name").val('');
                    $("#your_email").val('');
                    $("#your_phone").val('');
                    $("#wanted-message").val('');
                }else{
                    $.notify(response['message'], "warning");
                }

                $("#loading-gif").fadeOut();
            }
        });
    });

    $(".send-us-a-message").click(function () {
        let name     = $("#your_name").val();
        let email    = $("#your_email").val();
        let phone    = $("#your_phone").val();
        let message  = $("#wanted-message").val();

        if(name === '' || email === '' || phone === '' || message === ''){
            $.notify("Molimo popunite sva polja prije slanja poruke !!", "warning");
            return;
        }

        $("#loading-gif").fadeIn();

        $.ajax({
            type:'POST',
            url: '/email/contact',
            data: {name : name, email : email, phone : phone, message : message},
            success:function(data){
                let response = JSON.parse(data);
                if(response['code'] === '0000'){
                    $.notify(response['message'], "success");

                    $("#your_name").val('');
                    $("#your_email").val('');
                    $("#your_phone").val('');
                    $("#wanted-message").val('');
                }else{
                    $.notify(response['message'], "warning");
                }

                $("#loading-gif").fadeOut();
            }
        });
    });
});


