google.maps.event.addDomListener(window, 'load', init);

let marker;
let currentLatitude, currentLongitude;

function init() {
    let lat = $("#x_koordinata").val();
    let lan = $("#y_koordinata").val();

    if(lat === '') lat = 44.967;
    if(lan === '') lan = 15.904;;

    var mapOptions = {
        zoom: 13,
        disableDefaultUI: true,
        center: new google.maps.LatLng(lat , lan ), // New York

        styles: [{"featureType":"all","elementType":"geometry.fill","stylers":[{"weight":"2.00"}]},{"featureType":"all","elementType":"geometry.stroke","stylers":[{"color":"#9c9c9c"}]},{"featureType":"all","elementType":"labels.text","stylers":[{"visibility":"on"}]},{"featureType":"landscape","elementType":"all","stylers":[{"color":"#f2f2f2"}]},{"featureType":"landscape","elementType":"geometry.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"landscape.man_made","elementType":"geometry.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":-100},{"lightness":45}]},{"featureType":"road","elementType":"geometry.fill","stylers":[{"color":"#eeeeee"}]},{"featureType":"road","elementType":"labels.text.fill","stylers":[{"color":"#7b7b7b"}]},{"featureType":"road","elementType":"labels.text.stroke","stylers":[{"color":"#ffffff"}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#46bcec"},{"visibility":"on"}]},{"featureType":"water","elementType":"geometry.fill","stylers":[{"color":"#c8d7d4"}]},{"featureType":"water","elementType":"labels.text.fill","stylers":[{"color":"#070707"}]},{"featureType":"water","elementType":"labels.text.stroke","stylers":[{"color":"#ffffff"}]}]
    };

    var mapElement = document.getElementById('my-locatioon');

    var map = new google.maps.Map(mapElement, mapOptions);

    marker = new google.maps.Marker({
        position: new google.maps.LatLng(lat, lan),
        map: map,
        title: 'Snazzy!',
        draggable: true,
        animation: google.maps.Animation.DROP,
    });

    marker.addListener('dragend', function() {
        var latLng = this.position;
        currentLatitude = latLng.lat();
        currentLongitude = latLng.lng();
        // console.log('lat ' + currentLatitude + ', long + ' + currentLongitude);

        $("#x_koordinata").val(currentLatitude);
        $("#y_koordinata").val(currentLongitude);
    });
}
