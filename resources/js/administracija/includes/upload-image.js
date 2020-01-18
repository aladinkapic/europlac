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
            var source = src + this.responseText;

            source = source.replace(' ', '');

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
