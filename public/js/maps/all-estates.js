/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 1);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/maps/all-estates.js":
/*!******************************************!*\
  !*** ./resources/js/maps/all-estates.js ***!
  \******************************************/
/*! no static exports found */
/***/ (function(module, exports) {

google.maps.event.addDomListener(window, 'load', init);

function init() {
  // Basic options for a simple Google Map
  // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
  var y = 15.904128746032708,
      x = 44.96673432135165,
      marker;

  if (coodinates.length) {
    x = coodinates[0]['x'];
    y = coodinates[0]['y'];
  }

  var mapOptions = {
    // How zoomed in you want the map to start at (always required)
    zoom: 11,
    disableDefaultUI: true,
    // The latitude and longitude to center the map (always required)
    center: new google.maps.LatLng(x, y),
    // New York
    // How you would like to style the map.
    // This is where you would paste any style found on Snazzy Maps.
    styles: [{
      "featureType": "all",
      "elementType": "geometry.fill",
      "stylers": [{
        "weight": "2.00"
      }]
    }, {
      "featureType": "all",
      "elementType": "geometry.stroke",
      "stylers": [{
        "color": "#9c9c9c"
      }]
    }, {
      "featureType": "all",
      "elementType": "labels.text",
      "stylers": [{
        "visibility": "on"
      }]
    }, {
      "featureType": "landscape",
      "elementType": "all",
      "stylers": [{
        "color": "#f2f2f2"
      }]
    }, {
      "featureType": "landscape",
      "elementType": "geometry.fill",
      "stylers": [{
        "color": "#ffffff"
      }]
    }, {
      "featureType": "landscape.man_made",
      "elementType": "geometry.fill",
      "stylers": [{
        "color": "#ffffff"
      }]
    }, {
      "featureType": "poi",
      "elementType": "all",
      "stylers": [{
        "visibility": "off"
      }]
    }, {
      "featureType": "road",
      "elementType": "all",
      "stylers": [{
        "saturation": -100
      }, {
        "lightness": 45
      }]
    }, {
      "featureType": "road",
      "elementType": "geometry.fill",
      "stylers": [{
        "color": "#eeeeee"
      }]
    }, {
      "featureType": "road",
      "elementType": "labels.text.fill",
      "stylers": [{
        "color": "#7b7b7b"
      }]
    }, {
      "featureType": "road",
      "elementType": "labels.text.stroke",
      "stylers": [{
        "color": "#ffffff"
      }]
    }, {
      "featureType": "road.highway",
      "elementType": "all",
      "stylers": [{
        "visibility": "simplified"
      }]
    }, {
      "featureType": "road.arterial",
      "elementType": "labels.icon",
      "stylers": [{
        "visibility": "off"
      }]
    }, {
      "featureType": "transit",
      "elementType": "all",
      "stylers": [{
        "visibility": "off"
      }]
    }, {
      "featureType": "water",
      "elementType": "all",
      "stylers": [{
        "color": "#46bcec"
      }, {
        "visibility": "on"
      }]
    }, {
      "featureType": "water",
      "elementType": "geometry.fill",
      "stylers": [{
        "color": "#c8d7d4"
      }]
    }, {
      "featureType": "water",
      "elementType": "labels.text.fill",
      "stylers": [{
        "color": "#070707"
      }]
    }, {
      "featureType": "water",
      "elementType": "labels.text.stroke",
      "stylers": [{
        "color": "#ffffff"
      }]
    }]
  }; // Get the HTML DOM element that will contain your map
  // We are using a div with id="map" seen below in the <body>

  var mapElement = document.getElementById('map'); // Create the Google Map using our element and options defined above

  var map = new google.maps.Map(mapElement, mapOptions);

  for (var i = 0; i < coodinates.length; i++) {
    var category = 7;
    if (coodinates[i]['category'] === 1) category = 'Apartman.png';else if (coodinates[i]['category'] === 2) category = 'Kuca.png';else if (coodinates[i]['category'] === 3) category = 'poslovni.png';else if (coodinates[i]['category'] === 4) category = 'Stan.png';else if (coodinates[i]['category'] === 5) category = 'Vikendica.png';else if (coodinates[i]['category'] === 6) category = 'Vila.png';else if (coodinates[i]['category'] === 7) category = 'Zemljiste.png';
    marker = new google.maps.Marker({
      position: new google.maps.LatLng(coodinates[i]['x'], coodinates[i]['y']),
      map: map,
      title: coodinates[i]['title'],
      icon: '/images/icons/' + category
    });
    console.log(coodinates[i]);
  } // // Let's also add a marker while we're at it
  // var marker = new google.maps.Marker({
  //     position: new google.maps.LatLng(40.6700, -73.9400),
  //     map: map,
  //     title: 'Snazzy!'
  // });

}

$(document).ready(function () {
  if (localStorage.getItem("estates-preview-map") !== null) {
    $(".open-close-button").empty();
    $(".open-close-button").append('<p>Otvorite kartu</p>\n' + '<i class="far fa-plus-square"></i>');
    $(".estates-map").css('height', '0px');
  }

  $(".open-close-button").click(function () {
    $(".open-close-button").empty();

    if (localStorage.getItem("estates-preview-map") === null) {
      // If it isn't set, that means map is fully visible
      $(".open-close-button").append('<p>Otvorite kartu</p>\n' + '<i class="far fa-plus-square"></i>');
      localStorage['estates-preview-map'] = 'set-it'; // only strings

      $(".estates-map").animate({
        height: '0px'
      });
    } else {
      $(".open-close-button").append('<p>Zatvorite kartu</p>\n' + '<i class="far fa-minus-square"></i>');
      localStorage.removeItem("estates-preview-map");
      $(".estates-map").animate({
        height: '500px'
      });
    }
  });
  $(".single-estate").click(function () {
    var url = $(this).attr('id-value');
    window.location = '/nekretnine/pregled-nekretnine/' + url;
  });
});

/***/ }),

/***/ 1:
/*!************************************************!*\
  !*** multi ./resources/js/maps/all-estates.js ***!
  \************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! C:\xampp\htdocs\europlac\resources\js\maps\all-estates.js */"./resources/js/maps/all-estates.js");


/***/ })

/******/ });