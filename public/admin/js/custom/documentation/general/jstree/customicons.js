/*
 * ATTENTION: An "eval-source-map" devtool has been used.
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file with attached SourceMaps in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/assets/core/js/custom/documentation/general/jstree/customicons.js":
/*!*************************************************************************************!*\
  !*** ./resources/assets/core/js/custom/documentation/general/jstree/customicons.js ***!
  \*************************************************************************************/
/***/ (() => {

eval(" // Class definition\n\nvar KTJSTreeCustomIcons = function () {\n  // Private functions\n  var exampleCustomIcons = function exampleCustomIcons() {\n    $('#kt_docs_jstree_customicons').jstree({\n      \"core\": {\n        \"themes\": {\n          \"responsive\": false\n        }\n      },\n      \"types\": {\n        \"default\": {\n          \"icon\": \"fa fa-folder text-warning\"\n        },\n        \"file\": {\n          \"icon\": \"fa fa-file  text-warning\"\n        }\n      },\n      \"plugins\": [\"types\"]\n    }); // handle link clicks in tree nodes(support target=\"_blank\" as well)\n\n    $('#kt_docs_jstree_customicons').on('select_node.jstree', function (e, data) {\n      var link = $('#' + data.selected).find('a');\n\n      if (link.attr(\"href\") != \"#\" && link.attr(\"href\") != \"javascript:;\" && link.attr(\"href\") != \"\") {\n        if (link.attr(\"target\") == \"_blank\") {\n          link.attr(\"href\").target = \"_blank\";\n        }\n\n        document.location.href = link.attr(\"href\");\n        return false;\n      }\n    });\n  };\n\n  return {\n    // Public Functions\n    init: function init() {\n      exampleCustomIcons();\n    }\n  };\n}(); // On document ready\n\n\nKTUtil.onDOMContentLoaded(function () {\n  KTJSTreeCustomIcons.init();\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9yZXNvdXJjZXMvYXNzZXRzL2NvcmUvanMvY3VzdG9tL2RvY3VtZW50YXRpb24vZ2VuZXJhbC9qc3RyZWUvY3VzdG9taWNvbnMuanMuanMiLCJtYXBwaW5ncyI6IkNBRUE7O0FBQ0EsSUFBSUEsbUJBQW1CLEdBQUcsWUFBVztFQUNqQztFQUNBLElBQUlDLGtCQUFrQixHQUFHLFNBQXJCQSxrQkFBcUIsR0FBVztJQUNoQ0MsQ0FBQyxDQUFDLDZCQUFELENBQUQsQ0FBaUNDLE1BQWpDLENBQXdDO01BQ3BDLFFBQVM7UUFDTCxVQUFXO1VBQ1AsY0FBYztRQURQO01BRE4sQ0FEMkI7TUFNcEMsU0FBVTtRQUNOLFdBQVk7VUFDUixRQUFTO1FBREQsQ0FETjtRQUlOLFFBQVM7VUFDTCxRQUFTO1FBREo7TUFKSCxDQU4wQjtNQWNwQyxXQUFXLENBQUMsT0FBRDtJQWR5QixDQUF4QyxFQURnQyxDQWtCaEM7O0lBQ0FELENBQUMsQ0FBQyw2QkFBRCxDQUFELENBQWlDRSxFQUFqQyxDQUFvQyxvQkFBcEMsRUFBMEQsVUFBU0MsQ0FBVCxFQUFXQyxJQUFYLEVBQWlCO01BQ3ZFLElBQUlDLElBQUksR0FBR0wsQ0FBQyxDQUFDLE1BQU1JLElBQUksQ0FBQ0UsUUFBWixDQUFELENBQXVCQyxJQUF2QixDQUE0QixHQUE1QixDQUFYOztNQUNBLElBQUlGLElBQUksQ0FBQ0csSUFBTCxDQUFVLE1BQVYsS0FBcUIsR0FBckIsSUFBNEJILElBQUksQ0FBQ0csSUFBTCxDQUFVLE1BQVYsS0FBcUIsY0FBakQsSUFBbUVILElBQUksQ0FBQ0csSUFBTCxDQUFVLE1BQVYsS0FBcUIsRUFBNUYsRUFBZ0c7UUFDNUYsSUFBSUgsSUFBSSxDQUFDRyxJQUFMLENBQVUsUUFBVixLQUF1QixRQUEzQixFQUFxQztVQUNqQ0gsSUFBSSxDQUFDRyxJQUFMLENBQVUsTUFBVixFQUFrQkMsTUFBbEIsR0FBMkIsUUFBM0I7UUFDSDs7UUFDREMsUUFBUSxDQUFDQyxRQUFULENBQWtCQyxJQUFsQixHQUF5QlAsSUFBSSxDQUFDRyxJQUFMLENBQVUsTUFBVixDQUF6QjtRQUNBLE9BQU8sS0FBUDtNQUNIO0lBQ0osQ0FURDtFQVVILENBN0JEOztFQStCQSxPQUFPO0lBQ0g7SUFDQUssSUFBSSxFQUFFLGdCQUFXO01BQ2JkLGtCQUFrQjtJQUNyQjtFQUpFLENBQVA7QUFNSCxDQXZDeUIsRUFBMUIsQyxDQXlDQTs7O0FBQ0FlLE1BQU0sQ0FBQ0Msa0JBQVAsQ0FBMEIsWUFBVztFQUNqQ2pCLG1CQUFtQixDQUFDZSxJQUFwQjtBQUNILENBRkQiLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvYXNzZXRzL2NvcmUvanMvY3VzdG9tL2RvY3VtZW50YXRpb24vZ2VuZXJhbC9qc3RyZWUvY3VzdG9taWNvbnMuanM/NmNjYSJdLCJzb3VyY2VzQ29udGVudCI6WyJcInVzZSBzdHJpY3RcIjtcclxuXHJcbi8vIENsYXNzIGRlZmluaXRpb25cclxudmFyIEtUSlNUcmVlQ3VzdG9tSWNvbnMgPSBmdW5jdGlvbigpIHtcclxuICAgIC8vIFByaXZhdGUgZnVuY3Rpb25zXHJcbiAgICB2YXIgZXhhbXBsZUN1c3RvbUljb25zID0gZnVuY3Rpb24oKSB7XHJcbiAgICAgICAgJCgnI2t0X2RvY3NfanN0cmVlX2N1c3RvbWljb25zJykuanN0cmVlKHtcclxuICAgICAgICAgICAgXCJjb3JlXCIgOiB7XHJcbiAgICAgICAgICAgICAgICBcInRoZW1lc1wiIDoge1xyXG4gICAgICAgICAgICAgICAgICAgIFwicmVzcG9uc2l2ZVwiOiBmYWxzZVxyXG4gICAgICAgICAgICAgICAgfVxyXG4gICAgICAgICAgICB9LFxyXG4gICAgICAgICAgICBcInR5cGVzXCIgOiB7XHJcbiAgICAgICAgICAgICAgICBcImRlZmF1bHRcIiA6IHtcclxuICAgICAgICAgICAgICAgICAgICBcImljb25cIiA6IFwiZmEgZmEtZm9sZGVyIHRleHQtd2FybmluZ1wiXHJcbiAgICAgICAgICAgICAgICB9LFxyXG4gICAgICAgICAgICAgICAgXCJmaWxlXCIgOiB7XHJcbiAgICAgICAgICAgICAgICAgICAgXCJpY29uXCIgOiBcImZhIGZhLWZpbGUgIHRleHQtd2FybmluZ1wiXHJcbiAgICAgICAgICAgICAgICB9XHJcbiAgICAgICAgICAgIH0sXHJcbiAgICAgICAgICAgIFwicGx1Z2luc1wiOiBbXCJ0eXBlc1wiXVxyXG4gICAgICAgIH0pO1xyXG5cclxuICAgICAgICAvLyBoYW5kbGUgbGluayBjbGlja3MgaW4gdHJlZSBub2RlcyhzdXBwb3J0IHRhcmdldD1cIl9ibGFua1wiIGFzIHdlbGwpXHJcbiAgICAgICAgJCgnI2t0X2RvY3NfanN0cmVlX2N1c3RvbWljb25zJykub24oJ3NlbGVjdF9ub2RlLmpzdHJlZScsIGZ1bmN0aW9uKGUsZGF0YSkge1xyXG4gICAgICAgICAgICB2YXIgbGluayA9ICQoJyMnICsgZGF0YS5zZWxlY3RlZCkuZmluZCgnYScpO1xyXG4gICAgICAgICAgICBpZiAobGluay5hdHRyKFwiaHJlZlwiKSAhPSBcIiNcIiAmJiBsaW5rLmF0dHIoXCJocmVmXCIpICE9IFwiamF2YXNjcmlwdDo7XCIgJiYgbGluay5hdHRyKFwiaHJlZlwiKSAhPSBcIlwiKSB7XHJcbiAgICAgICAgICAgICAgICBpZiAobGluay5hdHRyKFwidGFyZ2V0XCIpID09IFwiX2JsYW5rXCIpIHtcclxuICAgICAgICAgICAgICAgICAgICBsaW5rLmF0dHIoXCJocmVmXCIpLnRhcmdldCA9IFwiX2JsYW5rXCI7XHJcbiAgICAgICAgICAgICAgICB9XHJcbiAgICAgICAgICAgICAgICBkb2N1bWVudC5sb2NhdGlvbi5ocmVmID0gbGluay5hdHRyKFwiaHJlZlwiKTtcclxuICAgICAgICAgICAgICAgIHJldHVybiBmYWxzZTtcclxuICAgICAgICAgICAgfVxyXG4gICAgICAgIH0pO1xyXG4gICAgfVxyXG5cclxuICAgIHJldHVybiB7XHJcbiAgICAgICAgLy8gUHVibGljIEZ1bmN0aW9uc1xyXG4gICAgICAgIGluaXQ6IGZ1bmN0aW9uKCkge1xyXG4gICAgICAgICAgICBleGFtcGxlQ3VzdG9tSWNvbnMoKTtcclxuICAgICAgICB9XHJcbiAgICB9O1xyXG59KCk7XHJcblxyXG4vLyBPbiBkb2N1bWVudCByZWFkeVxyXG5LVFV0aWwub25ET01Db250ZW50TG9hZGVkKGZ1bmN0aW9uKCkge1xyXG4gICAgS1RKU1RyZWVDdXN0b21JY29ucy5pbml0KCk7XHJcbn0pO1xyXG4iXSwibmFtZXMiOlsiS1RKU1RyZWVDdXN0b21JY29ucyIsImV4YW1wbGVDdXN0b21JY29ucyIsIiQiLCJqc3RyZWUiLCJvbiIsImUiLCJkYXRhIiwibGluayIsInNlbGVjdGVkIiwiZmluZCIsImF0dHIiLCJ0YXJnZXQiLCJkb2N1bWVudCIsImxvY2F0aW9uIiwiaHJlZiIsImluaXQiLCJLVFV0aWwiLCJvbkRPTUNvbnRlbnRMb2FkZWQiXSwic291cmNlUm9vdCI6IiJ9\n//# sourceURL=webpack-internal:///./resources/assets/core/js/custom/documentation/general/jstree/customicons.js\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval-source-map devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./resources/assets/core/js/custom/documentation/general/jstree/customicons.js"]();
/******/ 	
/******/ })()
;