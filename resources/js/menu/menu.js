let lastOne = null, rest_menu_open = 0;

$(document).ready(function() {
    let hideAll = function(){
        $(".my-select-wrapper").each(function () {
            $(this).find(".select-values").fadeOut();
            $(this).find("i").css({'transform' : 'rotate(0deg)'});
        });
    };


    /*******************************************************************************************************************
     *
     *      Trigger on click on "select menu"
     *
     ******************************************************************************************************************/

    $(".my-select-value").click(function () {
        let parent = $(this).parent();

        // Hide all of them !!
        hideAll();

        let currentElement = parent.find(".select-values");
        let parent_Id = parent.attr('id');

        if(parent_Id !== lastOne){
            lastOne = parent_Id;
            parent.find(".select-values").fadeIn();
            parent.find("i").css({'transform' : 'rotate(180deg)'});
        }else{
            lastOne = null;
            parent.find(".select-values").fadeOut();
            parent.find("i").css({'transform' : 'rotate(0deg)'});
        }
    });

    /*******************************************************************************************************************
     *
     *      Use value of it :)
     *
     ******************************************************************************************************************/
    $(".my-option").click(function () {
        $(this).parent().parent().find("p").text($(this).text());
        $(this).parent().parent().attr("value", $(this).attr("value"));
        hideAll();
    });


    /*******************************************************************************************************************
     *      When we click "reveal rest of menu, it should :
     *          1. remove border from top
     *          2. set border on rest div
     *          3. set padding on rest div
     *          4. height = auto
     ******************************************************************************************************************/

    $(".other-searches-button").click(function () {
        if(rest_menu_open === 0){
            rest_menu_open = 1;

            $("#search-console").css("border-bottom", "0px");
            $(".rest-of-search-options").css("border-bottom", "1px solid #d5d9dd");
            $(".rest-of-search-options").css("padding-bottom", "14px");

            let height = 50;
            $(".rest-of-search-options").find(".search-row").each(function () {
                height += $(this).height();
            });
            height += $(".check-boxes").height();

            $(".rest-of-search-options").css("height", height + "px");

            // $("#search-console").find(".search-wrapper").css("border-bottom", "1px solid #d5d9dd");
            $("#search-console").find(".just-line").css("display", "block");

        }else{
            rest_menu_open = 0;
            $("#search-console").css("border-bottom", "1px solid #d5d9dd");
            $(".rest-of-search-options").css("border-bottom", "0px");
            $(".rest-of-search-options").css("padding-bottom", "0px");
            $(".rest-of-search-options").css("height", "0px");

            // $("#search-console").find(".search-wrapper").css("border-bottom", "0px");
            $("#search-console").find(".just-line").css("display", "none");
        }
    });

    /*******************************************************************************************************************
     *
     *      Checkbox action ::
     *          1. Set check icon
     *          2. Set value Da - Ne
     *
     ******************************************************************************************************************/
    $(".check-wrapper").click(function () {
        if($(this).attr('value') === 'Ne'){
            $(this).find(".check-place").append('<i class="fas fa-check"></i>');
            $(this).find(".check-place").css("background", "#00C0CD");
            $(this).attr('value', 'Da');
        }else{
            $(this).find(".check-place").empty();
            $(this).find(".check-place").css("background", "#fff");
            $(this).attr('value', 'Ne');
        }
    });

    /*******************************************************************************************************************
     *
     *      Hide all menu elements if we click on somewhere else
     *
     ******************************************************************************************************************/

    $(document).click(function (e) {
        if($(e.target).closest('.my-select-wrapper').length === 0){
            hideAll();
        }
    });

    /*******************************************************************************************************************
     *
     *      Search it !!
     *
     ******************************************************************************************************************/

    $(".search-button").click(function () {
        let url = '/nekretnine';

        $(".my-select-wrapper").each(function () {
            //console.log($(this).attr('id') + ': ' + $(this).attr('value'));
            if($(this).attr('value') !== "0"){
                console.log("Found this : " + $(this).attr('id') + ':: value ' + $(this).attr('value'));

                url += '?filter%5B%5D='+$(this).attr('id')+'&filter_values%5B%5D=' + $(this).attr('value');
            }
        });

        if(url !== '/nekretnine'){
            url += '&limit=12';
            window.location = url;
        }
    });
});
