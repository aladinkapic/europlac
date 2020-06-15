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
/******/ 	return __webpack_require__(__webpack_require__.s = 5);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/administracija/includes/upload-files.js":
/*!**************************************************************!*\
  !*** ./resources/js/administracija/includes/upload-files.js ***!
  \**************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

$("document").ready(function () {
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });
  $("#files").change(function () {
    var formData = new FormData();
    formData.append('file', $('#files')[0].files[0]); // Append file to data

    formData.append('model', $(this).attr('model')); // Append model name to data

    formData.append('path', $(this).attr('path')); // Append path where to save data
    //console.log(formData.get('file')['name']);

    var id = Date.now();
    var elem = $("#all-uploaded-files-at-once").append('<div class="single-saved-file">' + '<div class="single-saved-file-image">' + '<i class="fas fa-images"></i>' + '</div>' + '<div class="single-saved-file-details">' + '<div class="single-saved-file-details-name">' + '<p>' + formData.get('file')['name'] + '</p>' + '</div>' + '<div class="single-saved-file-details-progress">' + '<div class="single-progress-element" id="progress' + id + '"></div>' + '</div>' + '<div class="single-saved-file-details-percentage">' + '<p id="' + id + '">0%</p>' + '</div>' + '</div>' + '</div>');
    $.ajax({
      url: $(this).attr('url'),
      type: 'POST',
      data: formData,
      processData: false,
      // tell jQuery not to process the data
      contentType: false,
      // tell jQuery not to set contentType
      xhr: function xhr() {
        var xhr = new window.XMLHttpRequest();
        xhr.upload.addEventListener("progress", function (evt) {
          if (evt.lengthComputable) {
            var percentComplete = evt.loaded / evt.total;
            percentComplete = parseInt(percentComplete * 100);
            $("#" + id).html(percentComplete + "%");
            $("#progress" + id).css('width', percentComplete + '%'); // console.log(percentComplete);
          }
        }, false);
        return xhr;
      },
      success: function success(data) {
        console.log(data['success']);

        if (data['success']) {
          var _elem = $("#all-uploaded-files-at-once").append('<input type="hidden" name="_uploaded_files[]" class="uploaded_ids" value="' + data['success'] + '">');
        }
      }
    });
  });
  $(".save-button").click(function () {
    var values = Array();
    $('.uploaded_ids').each(function (index, value) {
      console.log(index);
      values[index] = $(this).val();
    }); // values = JSON.stringify(values);

    $.ajax({
      url: $(this).attr('url'),
      type: 'POST',
      data: {
        values: values,
        model: $(this).attr('model'),
        id: $(this).attr('id'),
        "goto": $(this).attr('goto')
      },
      success: function success(data) {
        location.reload();
      }
    });
  });
});

/***/ }),

/***/ 5:
/*!********************************************************************!*\
  !*** multi ./resources/js/administracija/includes/upload-files.js ***!
  \********************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! E:\Web apps\europlac\resources\js\administracija\includes\upload-files.js */"./resources/js/administracija/includes/upload-files.js");


/***/ })

/******/ });