jQuery(document).ready(function($) {
    function initMap() {
        var mapCanvas = $('#map');

        var location = new google.maps.LatLng(mapCanvas.data('lat'), mapCanvas.data('lng'));
        var mapOptions = {
            center: location,
            zoom: 14,
            panControl: false,
            mapTypeControl: false,
            zoomControl: false,
            streetViewControl: false,
            scrollwheel:false,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        }

        var map = new google.maps.Map(document.getElementById('map'), mapOptions);
        var styles = [{"featureType": "landscape", "stylers": [{"saturation": -100}, {"lightness": 65}, {"visibility": "on"}]}, {"featureType": "poi", "stylers": [{"saturation": -100}, {"lightness": 51}, {"visibility": "simplified"}]}, {"featureType": "road.highway", "stylers": [{"saturation": -100}, {"visibility": "simplified"}]}, {"featureType": "road.arterial", "stylers": [{"saturation": -100}, {"lightness": 30}, {"visibility": "on"}]}, {"featureType": "road.local", "stylers": [{"saturation": -100}, {"lightness": 40}, {"visibility": "on"}]}, {"featureType": "transit", "stylers": [{"saturation": -100}, {"visibility": "simplified"}]}, {"featureType": "administrative.province", "stylers": [{"visibility": "off"}]}, {"featureType": "water", "elementType": "labels", "stylers": [{"visibility": "on"}, {"lightness": -25}, {"saturation": -100}]}, {"featureType": "water", "elementType": "geometry", "stylers": [{"hue": "#ffff00"}, {"lightness": -25}, {"saturation": -97}]}];

        var markerImage = '../marker.png';

        var marker = new google.maps.Marker({
            position: location,
            map: map,
            icon: markerImage
        });

        var naam = mapCanvas.data('naam'),
            straat = mapCanvas.data('straat'),
            postcode = mapCanvas.data('postcode');
        map.set('styles', styles);
        var contentString = 
            '<div class="info-window text-center">' +
                '<h3>Adres</h3>' +
                '<div class="info-content">' +
                    '<ul>' +
                        '<li>'+ naam +'</li>' +
                        '<li>'+ straat +'</li>' +
                        '<li>'+ postcode +'</li>' +
                    '</ul>' +
                '</div>' +
            '</div>';

        var infowindow = new google.maps.InfoWindow({
            content: contentString,
            maxWidth: 400
        });

        marker.addListener('click', function () {
            infowindow.open(map, marker);
        });
    }
    google.maps.event.addDomListener(window, 'load', initMap);

});


