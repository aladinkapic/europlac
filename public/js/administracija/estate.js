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
/******/ 	return __webpack_require__(__webpack_require__.s = 4);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/administracija/includes/upload-image.js":
/*!**************************************************************!*\
  !*** ./resources/js/administracija/includes/upload-image.js ***!
  \**************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

$('.photo-input').change(function () {
  var data = new FormData();
  var ins = document.getElementById($(this).attr('id')).files.length;
  data.append($(this).attr('id'), document.getElementById($(this).attr('id')).files[0]);
  var fotoID = $(this).attr('foto-name');
  var previewID = $(this).attr('id') + '-title';
  var src = $(this).attr('source'); // document.getElementById("loading_wrapper").style.display = 'block'; /** show loading part **/

  console.log("Preview ID " + previewID);
  var xml = new XMLHttpRequest();

  xml.onreadystatechange = function () {
    if (this.readyState === 4 && this.status === 200) {
      console.log(this.responseText);
      var source = src + this.responseText;
      console.log(source);
      source = source.replace(' ', '');
      console.log(fotoID);
      var image = document.getElementById(fotoID);
      image.setAttribute('src', source); // ** ovdje ćemo postaviti naziv fotografije, tako da je kasnije možemo samo strpati u bazu ** //

      document.getElementById(previewID).value = this.responseText; // document.getElementById("loading_wrapper").style.display = 'none'; /** hide loading part **/
    }
  };

  xml.open('POST', $(this).attr('url')); // ** Postavi tokene ** //

  var metas = document.getElementsByTagName('meta');

  for (var i = 0; i < metas.length; i++) {
    if (metas[i].getAttribute("name") == "csrf-token") {
      xml.setRequestHeader("X-CSRF-Token", metas[i].getAttribute("content"));
    }
  }

  xml.send(data); // napravi http
});

/***/ }),

/***/ "./resources/js/administracija/maps/map.js":
/*!*************************************************!*\
  !*** ./resources/js/administracija/maps/map.js ***!
  \*************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

google.maps.event.addDomListener(window, 'load', init);
var marker;
var currentLatitude, currentLongitude;

function init() {
  var lat = $("#x_koordinata").val();
  var lan = $("#y_koordinata").val();
  if (lat === '') lat = 44.967;
  if (lan === '') lan = 15.904;
  ;
  var mapOptions = {
    zoom: 13,
    disableDefaultUI: true,
    center: new google.maps.LatLng(lat, lan),
    // New York
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
  };
  var mapElement = document.getElementById('my-locatioon');
  var map = new google.maps.Map(mapElement, mapOptions);
  marker = new google.maps.Marker({
    position: new google.maps.LatLng(lat, lan),
    map: map,
    title: 'Snazzy!',
    draggable: true,
    animation: google.maps.Animation.DROP
  });
  marker.addListener('dragend', function () {
    var latLng = this.position;
    currentLatitude = latLng.lat();
    currentLongitude = latLng.lng(); // console.log('lat ' + currentLatitude + ', long + ' + currentLongitude);

    $("#x_koordinata").val(currentLatitude);
    $("#y_koordinata").val(currentLongitude);
  });
}

/***/ }),

/***/ 4:
/*!**************************************************************************************************************!*\
  !*** multi ./resources/js/administracija/maps/map.js ./resources/js/administracija/includes/upload-image.js ***!
  \**************************************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! C:\xampp\htdocs\europlac\resources\js\administracija\maps\map.js */"./resources/js/administracija/maps/map.js");
module.exports = __webpack_require__(/*! C:\xampp\htdocs\europlac\resources\js\administracija\includes\upload-image.js */"./resources/js/administracija/includes/upload-image.js");


/***/ })

/******/ });