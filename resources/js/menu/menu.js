let lastOne = null, rest_menu_open = 0; let current_page = 1;

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
     *          2. Set value 1 - 2 (Ne - Da)
     *
     ******************************************************************************************************************/
    $(".check-wrapper").click(function () {
        if($(this).attr('value') === '1'){
            $(this).find(".check-place").append('<i class="fas fa-check"></i>');
            $(this).find(".check-place").css("background", "#00C0CD");
            $(this).attr('value', '2');
        }else{
            $(this).find(".check-place").empty();
            $(this).find(".check-place").css("background", "#fff");
            $(this).attr('value', '1');
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
    let searchIt = function(){
        let url = '/nekretnine';

        let index = 0;

        let name = $("#menu_name_of_estate").val();
        if(name !== ''){
            if(index++ === 0) url += '?';
            else url += '&';
            url += 'filter%5B%5D=naziv&filter_values%5B%5D=' + name;
        }

        $(".my-select-wrapper").each(function () {
            //console.log($(this).attr('id') + ': ' + $(this).attr('value'));
            if($(this).attr('value') !== "0"){
                if(index++ === 0) url += '?';
                else url += '&';
                url += 'filter%5B%5D='+$(this).attr('id')+'&filter_values%5B%5D=' + $(this).attr('value');
            }
        });

        $(".check-wrapper").each(function () {
            if($(this).attr('value') !== "1"){
                if(index++ === 0) url += '?';
                else url += '&';
                url += 'filter%5B%5D='+$(this).attr('id')+'&filter_values%5B%5D=' + $(this).attr('value');
            }
        });

        if(url !== '/nekretnine'){
            url += '&limit=12&page='+current_page;
            window.location = url;
        }else window.location = (url + '?&page=' + current_page);
    };

    $(".search-button").click(function () {
        searchIt();
    });


    /*******************************************************************************************************************
     *
     *      Set default values !!
     *
     ******************************************************************************************************************/

    let result = window.location.href;
    let array_of_results = result.split('filter');

    let searched_results = Array();
    let odd = null, even = null;

    for(let i=1; i<array_of_results.length; i++){
        var mySubString = array_of_results[i].substring(
            array_of_results[i].lastIndexOf("=") + 1,
            array_of_results[i].lastIndexOf("&")
        );

        if(i === (array_of_results.length - 1)){
            var mySubString = array_of_results[i].substring(
                array_of_results[i].indexOf("=") + 1,
                array_of_results[i].indexOf("&")
            );
        }

        if(i % 2 === 0) {
            odd = mySubString.replace();
            odd = odd.split('%20').join(" ");
            odd = odd.split('%C5%A1').join("š");
            odd = odd.split('%C5%A0').join("Š");
            odd = odd.split('%C4%87').join("ć");
            odd = odd.split('%C4%86').join("Ć");
            odd = odd.split('%C4%91').join("đ");
            odd = odd.split('%C4%90').join("Đ");
            odd = odd.split('%C5%BE').join("ž");
            odd = odd.split('%C5%BD').join("Ž");
            odd = odd.split('%C4%8D').join("č");
            odd = odd.split('%C4%8C').join("Č");
            searched_results.push(new Array(even,  odd));

            if(even === 'naziv'){
                // Pretraga po nazivu nekretnine
                $("#menu_name_of_estate").val(odd)
            }
        }
        else even = mySubString;

        console.log(searched_results);
    }

    $(".my-select-wrapper").each(function () {
        for(let j=0; j<searched_results.length; j++){
            if($(this).attr('id') === searched_results[j][0]){
                $(this).attr('value', searched_results[j][1]);
                //$("#"+searched_results[j][0]+'-paragraph').text(searched_results[j][1]);
                $(this).find("p").text(searched_results[j][1]);
            }
        }
    });

    $(".check-wrapper").each(function () {
        for(let j=0; j<searched_results.length; j++){
            if($(this).attr('id') === searched_results[j][0]){
                $(this).find(".check-place").append('<i class="fas fa-check"></i>');
                $(this).find(".check-place").css("background", "#00C0CD");
                $(this).attr('value', '2');
            }
        }
    });








    /********************************************** OPEN CLOSE MENU ***************************************************/
    $(".exit_menu").click(function () {
        var left_m = document.getElementById("left_menu");
        var window_w = window.innerWidth;

        if(!left_open){
            left_open++;
            left_m.style.right = '-50px';
        }else{
            left_open = 0;
            left_m.style.right = -(left_m.clientWidth + 50) + 'px';
        }
    });

    $(".left_with_sublinks").click(function () {
        let index = $(this).attr('index');
        var sublinks = document.getElementById("left_menu").getElementsByClassName("menu_sublinks");
        //var arrow = document.getElementById("left_menu").getElementsByClassName("fa-icon");

        if(index == currently_open){
            index = -1;
            currently_open = -2;
        }

        for(var i=0; i<sublinks.length; i++){
            if(i == index){
                var all_sublinks = sublinks[i].getElementsByClassName("menu_sublink");
                currently_open = index;
                //arrow[i].className = "fas fa-icon fa-angle-up";
                sublinks[i].style.height = (all_sublinks.length * 40) + 'px';
            }else{
                sublinks[i].style.height = '0px';
                //arrow[i].className = "fas fa-icon fa-angle-down";
            }
        }
    });

    $(".single-page").click(function () {
        current_page = $(this).attr('page');
        searchIt();
    });
});


/** open and close left menu **/
var left_open = 0;

function left_menus(){

}



/*** sublinks ***/

var currently_open = -2;

function show_sublinks(index){

}
