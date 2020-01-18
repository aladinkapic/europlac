$("document").ready(function(){
    $(".trigger-to-delete").click(function () {
        $("#delete-item-wrapper").fadeIn();
    });

    $(".close-fa-times").click(function () {
        $("#delete-item-wrapper").fadeOut();
    });


    $(".delete-item-trigger").click(function () {
        let object = $("#delete-item-wrapper");

        if(object.attr('extraId') !== ''){
            window.location = object.attr('url') + '/' + object.attr('extraId');
        }else {
            window.location = object.attr('url');
        }
    });
});
