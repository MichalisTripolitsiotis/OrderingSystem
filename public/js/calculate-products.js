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

/***/ "./resources/js/calculate-products.js":
/*!********************************************!*\
  !*** ./resources/js/calculate-products.js ***!
  \********************************************/
/***/ (() => {

eval("$(document).ready(function () {\n  update_subtotals();\n  $(document).on('change', '.quantity', function () {\n    update_subtotals();\n  });\n});\n\nwindow.update_subtotals = function () {\n  var sum = 0;\n  $('.product').each(function () {\n    var qty = $(this).find('.quantity').val();\n    var price = $(this).find('.priceInput').val();\n    var amount = qty * price;\n    sum += amount;\n    $(this).find('.subtotal').html('$' + amount);\n  });\n  $('.final-price').html('<strong> Total $' + sum + '</strong>');\n  $('.total').val(sum);\n};//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvanMvY2FsY3VsYXRlLXByb2R1Y3RzLmpzP2IyM2IiXSwibmFtZXMiOlsiJCIsImRvY3VtZW50IiwicmVhZHkiLCJ1cGRhdGVfc3VidG90YWxzIiwib24iLCJ3aW5kb3ciLCJzdW0iLCJlYWNoIiwicXR5IiwiZmluZCIsInZhbCIsInByaWNlIiwiYW1vdW50IiwiaHRtbCJdLCJtYXBwaW5ncyI6IkFBQ0FBLENBQUMsQ0FBQ0MsUUFBRCxDQUFELENBQVlDLEtBQVosQ0FBa0IsWUFBWTtBQUMxQkMsRUFBQUEsZ0JBQWdCO0FBQ2hCSCxFQUFBQSxDQUFDLENBQUNDLFFBQUQsQ0FBRCxDQUFZRyxFQUFaLENBQWUsUUFBZixFQUF5QixXQUF6QixFQUFzQyxZQUFZO0FBQzlDRCxJQUFBQSxnQkFBZ0I7QUFDbkIsR0FGRDtBQUdILENBTEQ7O0FBT0FFLE1BQU0sQ0FBQ0YsZ0JBQVAsR0FBMEIsWUFBWTtBQUNsQyxNQUFJRyxHQUFHLEdBQUcsQ0FBVjtBQUNBTixFQUFBQSxDQUFDLENBQUMsVUFBRCxDQUFELENBQWNPLElBQWQsQ0FBbUIsWUFBWTtBQUMzQixRQUFJQyxHQUFHLEdBQUdSLENBQUMsQ0FBQyxJQUFELENBQUQsQ0FBUVMsSUFBUixDQUFhLFdBQWIsRUFBMEJDLEdBQTFCLEVBQVY7QUFDQSxRQUFJQyxLQUFLLEdBQUdYLENBQUMsQ0FBQyxJQUFELENBQUQsQ0FBUVMsSUFBUixDQUFhLGFBQWIsRUFBNEJDLEdBQTVCLEVBQVo7QUFDQSxRQUFJRSxNQUFNLEdBQUlKLEdBQUcsR0FBR0csS0FBcEI7QUFDQUwsSUFBQUEsR0FBRyxJQUFJTSxNQUFQO0FBQ0FaLElBQUFBLENBQUMsQ0FBQyxJQUFELENBQUQsQ0FBUVMsSUFBUixDQUFhLFdBQWIsRUFBMEJJLElBQTFCLENBQStCLE1BQU1ELE1BQXJDO0FBRUgsR0FQRDtBQVFBWixFQUFBQSxDQUFDLENBQUMsY0FBRCxDQUFELENBQWtCYSxJQUFsQixDQUF1QixxQkFBcUJQLEdBQXJCLEdBQTJCLFdBQWxEO0FBQ0FOLEVBQUFBLENBQUMsQ0FBQyxRQUFELENBQUQsQ0FBWVUsR0FBWixDQUFnQkosR0FBaEI7QUFDSCxDQVpEIiwic291cmNlc0NvbnRlbnQiOlsiXHJcbiQoZG9jdW1lbnQpLnJlYWR5KGZ1bmN0aW9uICgpIHtcclxuICAgIHVwZGF0ZV9zdWJ0b3RhbHMoKTtcclxuICAgICQoZG9jdW1lbnQpLm9uKCdjaGFuZ2UnLCAnLnF1YW50aXR5JywgZnVuY3Rpb24gKCkge1xyXG4gICAgICAgIHVwZGF0ZV9zdWJ0b3RhbHMoKTtcclxuICAgIH0pO1xyXG59KTtcclxuXHJcbndpbmRvdy51cGRhdGVfc3VidG90YWxzID0gZnVuY3Rpb24gKCkge1xyXG4gICAgdmFyIHN1bSA9IDA7XHJcbiAgICAkKCcucHJvZHVjdCcpLmVhY2goZnVuY3Rpb24gKCkge1xyXG4gICAgICAgIHZhciBxdHkgPSAkKHRoaXMpLmZpbmQoJy5xdWFudGl0eScpLnZhbCgpO1xyXG4gICAgICAgIHZhciBwcmljZSA9ICQodGhpcykuZmluZCgnLnByaWNlSW5wdXQnKS52YWwoKTtcclxuICAgICAgICB2YXIgYW1vdW50ID0gKHF0eSAqIHByaWNlKVxyXG4gICAgICAgIHN1bSArPSBhbW91bnQ7XHJcbiAgICAgICAgJCh0aGlzKS5maW5kKCcuc3VidG90YWwnKS5odG1sKCckJyArIGFtb3VudCk7XHJcblxyXG4gICAgfSk7XHJcbiAgICAkKCcuZmluYWwtcHJpY2UnKS5odG1sKCc8c3Ryb25nPiBUb3RhbCAkJyArIHN1bSArICc8L3N0cm9uZz4nKTtcclxuICAgICQoJy50b3RhbCcpLnZhbChzdW0pO1xyXG59XHJcbiJdLCJmaWxlIjoiLi9yZXNvdXJjZXMvanMvY2FsY3VsYXRlLXByb2R1Y3RzLmpzLmpzIiwic291cmNlUm9vdCI6IiJ9\n//# sourceURL=webpack-internal:///./resources/js/calculate-products.js\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval-source-map devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./resources/js/calculate-products.js"]();
/******/ 	
/******/ })()
;