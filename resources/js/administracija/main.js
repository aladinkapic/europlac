$( document ).ready(function() {
    /*******************************************************************************************************************
     *
     *      Here we work with menu - moving left or right. If we click once, it will close big menu part, twice close
     *      left menu completely.
     *
     ******************************************************************************************************************/

    let leftMenu = $(".left-menu");
    let contentWrapper = $(".content-wrapper");



    if(localStorage['menu-set'] !== 'set'){
        if((window.innerWidth < 1300 && window.innerWidth >= 800)){
            leftMenu.addClass("left-menu-first-stage").removeClass("left-menu-second-stage");
            contentWrapper.addClass("content-wrapper-first-stage").removeClass("content-wrapper-second-stage");
        }

        if((window.innerWidth < 800)){
            leftMenu.addClass("left-menu-second-stage").removeClass("left-menu-first-stage");
            contentWrapper.addClass("content-wrapper-second-stage").removeClass("content-wrapper-first-stage");
        }
    }else{
        if(localStorage['menu-state'] === 'partially-open'){
            leftMenu.addClass("left-menu-first-stage").removeClass("left-menu-second-stage");
            contentWrapper.addClass("content-wrapper-first-stage").removeClass("content-wrapper-second-stage");
        }

        if(localStorage['menu-state'] === 'closed'){
            leftMenu.addClass("left-menu-second-stage").removeClass("left-menu-first-stage");
            contentWrapper.addClass("content-wrapper-second-stage").removeClass("content-wrapper-first-stage");
        }
    }


    $(".left-menu-icon").click(function () {
        localStorage['menu-set'] = 'set';

        if(localStorage['menu-state'] === 'fully-open'){
            localStorage['menu-state'] = 'partially-open';

            leftMenu.addClass("left-menu-first-stage").removeClass("left-menu-second-stage");
            contentWrapper.addClass("content-wrapper-first-stage").removeClass("content-wrapper-second-stage");
        }
        else if(localStorage['menu-state'] === 'partially-open'){
            localStorage['menu-state'] = 'closed';

            leftMenu.addClass("left-menu-second-stage").removeClass("left-menu-first-stage");
            contentWrapper.addClass("content-wrapper-second-stage").removeClass("content-wrapper-first-stage");
        }
        else{
            localStorage['menu-state'] = 'fully-open';

            leftMenu.removeClass("left-menu-second-stage").removeClass("left-menu-first-stage");
            contentWrapper.removeClass("content-wrapper-second-stage").removeClass("content-wrapper-first-stage");
        }

        console.log(localStorage['menu-state']);
    });

    /*******************************************************************************************************************
     *
     *      When we press huge buttons, it will change values of the left part - show different links
     *
     ******************************************************************************************************************/


    $(".small-one").click(function () {
        let value = $(this).attr('value') + "-property";

        if(value === 'home-property'){
            window.location = '/administracija';
            return;
        }

        localStorage['menu-state'] = 'partially-open';

        leftMenu.removeClass("left-menu-second-stage").removeClass("left-menu-first-stage");
        contentWrapper.removeClass("content-wrapper-second-stage").removeClass("content-wrapper-first-stage");

        // hide all other elements
        $('.small-one-text').each(function () {
            $(this).css('display', 'none');
        });

        $("div").find('[value="' + value +'"]').css('display', 'block');
    });


    /*******************************************************************************************************************
     *
     *      To avoid using a links, we could manage it through jquery to use linking of pages via "link" attribute.
     *
     ******************************************************************************************************************/

    $(".small-one-linked, .home-icon").click(function () {
        if(!$(this).attr('link')) return;

        window.location = $(this).attr('link');
    });

    /*******************************************************************************************************************
     *
     *      When we have situation to upload image and preview it into browser before saving - there you go
     *
     ******************************************************************************************************************/

    $('.photo-input').change(function () {
        var data = new FormData();
        var ins = document.getElementById($(this).attr('id')).files.length;

        data.append($(this).attr('id'), document.getElementById($(this).attr('id')).files[0]);

        let fotoID    = $(this).attr('foto-name');
        let previewID = $(this).attr('id') + '-title';
        let src       = $(this).attr('source');
        // document.getElementById("loading_wrapper").style.display = 'block'; /** show loading part **/

        console.log("Preview ID " + previewID);
        var xml = new XMLHttpRequest();
        xml.onreadystatechange = function() {
            if (this.readyState === 4 && this.status === 200) {
                console.log(this.responseText);
                var source = src + this.responseText;

                console.log(source);

                source = source.replace(' ', '');

                console.log(fotoID);
                var image = document.getElementById(fotoID);
                image.setAttribute('src', source);

                // ** ovdje ćemo postaviti naziv fotografije, tako da je kasnije možemo samo strpati u bazu ** //
                document.getElementById(previewID).value = this.responseText;
                // document.getElementById("loading_wrapper").style.display = 'none'; /** hide loading part **/
            }
        };
        xml.open('POST', $(this).attr('url'));

        // ** Postavi tokene ** //
        var metas = document.getElementsByTagName('meta');
        for (var i=0; i<metas.length; i++) {
            if (metas[i].getAttribute("name") == "csrf-token") {
                xml.setRequestHeader("X-CSRF-Token", metas[i].getAttribute("content"));
            }
        }

        xml.send(data); // napravi http
    });

});


/***********************************************************************************************************************
 *
 *      Loading part - If we wait for request : Show it !
 *
 **********************************************************************************************************************/
function showLoading() {
    $("#loading-gif").css('display', 'block');
}
function hideLoading(){
    $("#loading-gif").css('display', 'none');
}

/***********************************************************************************************************************
 *
 *      FILTERS
 *
 **********************************************************************************************************************/

