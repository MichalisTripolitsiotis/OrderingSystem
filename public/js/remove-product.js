/*
 * ATTENTION: An "eval-source-map" devtool has been used.
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file with attached SourceMaps in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/remove-product.js":
/*!****************************************!*\
  !*** ./resources/js/remove-product.js ***!
  \****************************************/
/***/ (() => {

eval("$(\".remove-from-cart\").click(function (e) {\n  e.preventDefault();\n  var ele = $(this);\n  $.ajax({\n    headers: {\n      'X-CSRF-TOKEN': $('meta[name=\"csrf-token\"]').attr('content')\n    },\n    url: 'remove-from-cart',\n    method: \"DELETE\",\n    data: {\n      id: ele.attr(\"data-id\")\n    },\n    success: function success(response) {\n      window.location.reload();\n    }\n  });\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvanMvcmVtb3ZlLXByb2R1Y3QuanM/NjYyNyJdLCJuYW1lcyI6WyIkIiwiY2xpY2siLCJlIiwicHJldmVudERlZmF1bHQiLCJlbGUiLCJhamF4IiwiaGVhZGVycyIsImF0dHIiLCJ1cmwiLCJtZXRob2QiLCJkYXRhIiwiaWQiLCJzdWNjZXNzIiwicmVzcG9uc2UiLCJ3aW5kb3ciLCJsb2NhdGlvbiIsInJlbG9hZCJdLCJtYXBwaW5ncyI6IkFBQUFBLENBQUMsQ0FBQyxtQkFBRCxDQUFELENBQXVCQyxLQUF2QixDQUE2QixVQUFVQyxDQUFWLEVBQWE7QUFDdENBLEVBQUFBLENBQUMsQ0FBQ0MsY0FBRjtBQUNBLE1BQUlDLEdBQUcsR0FBR0osQ0FBQyxDQUFDLElBQUQsQ0FBWDtBQUNBQSxFQUFBQSxDQUFDLENBQUNLLElBQUYsQ0FBTztBQUNIQyxJQUFBQSxPQUFPLEVBQUU7QUFDTCxzQkFBZ0JOLENBQUMsQ0FBQyx5QkFBRCxDQUFELENBQTZCTyxJQUE3QixDQUFrQyxTQUFsQztBQURYLEtBRE47QUFJSEMsSUFBQUEsR0FBRyxFQUFFLGtCQUpGO0FBS0hDLElBQUFBLE1BQU0sRUFBRSxRQUxMO0FBTUhDLElBQUFBLElBQUksRUFBRTtBQUFFQyxNQUFBQSxFQUFFLEVBQUVQLEdBQUcsQ0FBQ0csSUFBSixDQUFTLFNBQVQ7QUFBTixLQU5IO0FBT0hLLElBQUFBLE9BQU8sRUFBRSxpQkFBVUMsUUFBVixFQUFvQjtBQUN6QkMsTUFBQUEsTUFBTSxDQUFDQyxRQUFQLENBQWdCQyxNQUFoQjtBQUNIO0FBVEUsR0FBUDtBQVdILENBZEQiLCJzb3VyY2VzQ29udGVudCI6WyIkKFwiLnJlbW92ZS1mcm9tLWNhcnRcIikuY2xpY2soZnVuY3Rpb24gKGUpIHtcclxuICAgIGUucHJldmVudERlZmF1bHQoKTtcclxuICAgIHZhciBlbGUgPSAkKHRoaXMpO1xyXG4gICAgJC5hamF4KHtcclxuICAgICAgICBoZWFkZXJzOiB7XHJcbiAgICAgICAgICAgICdYLUNTUkYtVE9LRU4nOiAkKCdtZXRhW25hbWU9XCJjc3JmLXRva2VuXCJdJykuYXR0cignY29udGVudCcpXHJcbiAgICAgICAgfSxcclxuICAgICAgICB1cmw6ICdyZW1vdmUtZnJvbS1jYXJ0JyxcclxuICAgICAgICBtZXRob2Q6IFwiREVMRVRFXCIsXHJcbiAgICAgICAgZGF0YTogeyBpZDogZWxlLmF0dHIoXCJkYXRhLWlkXCIpIH0sXHJcbiAgICAgICAgc3VjY2VzczogZnVuY3Rpb24gKHJlc3BvbnNlKSB7XHJcbiAgICAgICAgICAgIHdpbmRvdy5sb2NhdGlvbi5yZWxvYWQoKTtcclxuICAgICAgICB9XHJcbiAgICB9KTtcclxufSk7Il0sImZpbGUiOiIuL3Jlc291cmNlcy9qcy9yZW1vdmUtcHJvZHVjdC5qcy5qcyIsInNvdXJjZVJvb3QiOiIifQ==\n//# sourceURL=webpack-internal:///./resources/js/remove-product.js\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval-source-map devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./resources/js/remove-product.js"]();
/******/ 	
/******/ })()
;