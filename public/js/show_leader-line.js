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

/***/ "./resources/js/show_leader-line.js":
/*!******************************************!*\
  !*** ./resources/js/show_leader-line.js ***!
  \******************************************/
/*! no static exports found */
/***/ (function(module, exports) {

var end = "end";
var sencondend = "second_end";
var leaderline = document.getElementsByClassName("leaderline");
var second_leaderline = document.getElementsByClassName("second_leaderline");

for (var i = 0; i <= leaderline.length - 1; i++) {
  leaderline[i].setAttribute("id", end + i);
  var line = new LeaderLine(document.getElementById('start'), document.getElementById('end' + i)); // line.dash = true ;

  line.setOptions({
    startSocket: 'bottom',
    endSocket: 'top'
  });
  line.color = '#ffa500';
}

for (var _i = 0; _i <= second_leaderline.length - 1; _i++) {
  second_leaderline[_i].setAttribute("id", sencondend + _i);

  // var line2 = new LeaderLine(document.getElementById('end' + _i), document.getElementById('second_end' + _i)); // line2.dash = true ;

  // line2.setOptions({
  //   startSocket: 'bottom',
  //   endSocket: 'top'
  // });
  // line2.color = '#ffa500';
}

// ３階層目に３つokrが設定されてる場合のみ表示する
var second_end2 = document.getElementById("second_end2");

if(second_end2!= null) {
  var line1 = new LeaderLine(document.getElementById('end0'), document.getElementById('second_end0')); // line2.dash = true ;
  var line2 = new LeaderLine(document.getElementById('end1'), document.getElementById('second_end1')); // line2.dash = true ;
  var line3 = new LeaderLine(document.getElementById('end2'), document.getElementById('second_end2')); // line2.dash = true ;
  
  line1.setOptions({
    startSocket: 'bottom',
    endSocket: 'top'
  });
  line1.color = '#ffa500';

  line2.setOptions({
    startSocket: 'bottom',
    endSocket: 'top'
  });
  line2.color = '#ffa500';
  
  line3.setOptions({
    startSocket: 'bottom',
    endSocket: 'top'
  });
  line3.color = '#ffa500';
}

/***/ }),

/***/ 1:
/*!************************************************!*\
  !*** multi ./resources/js/show_leader-line.js ***!
  \************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /Users/kinoshitahiroshitaka/Desktop/okr-app/resources/js/show_leader-line.js */"./resources/js/show_leader-line.js");


/***/ })

/******/ });