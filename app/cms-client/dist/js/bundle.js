!function(e){function t(r){if(n[r])return n[r].exports;var o=n[r]={i:r,l:!1,exports:{}};return e[r].call(o.exports,o,o.exports,t),o.l=!0,o.exports}var n={};t.m=e,t.c=n,t.i=function(e){return e},t.d=function(e,n,r){t.o(e,n)||Object.defineProperty(e,n,{configurable:!1,enumerable:!0,get:r})},t.n=function(e){var n=e&&e.__esModule?function(){return e.default}:function(){return e};return t.d(n,"a",n),n},t.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},t.p="",t(t.s="./src/bundles/bundle.js")}({"./src/boot/index.js":function(e,t,n){"use strict";var r=n("./src/boot/registerComponents.js"),o=function(e){return e&&e.__esModule?e:{default:e}}(r);window.document.addEventListener("DOMContentLoaded",function(){(0,o.default)()})},"./src/boot/registerComponents.js":function(e,t,n){"use strict";Object.defineProperty(t,"__esModule",{value:!0});var r=Object.assign||function(e){for(var t=1;t<arguments.length;t++){var n=arguments[t];for(var r in n)Object.prototype.hasOwnProperty.call(n,r)&&(e[r]=n[r])}return e},o=n(0),u=function(e){return e&&e.__esModule?e:{default:e}}(o),s=n("./src/components/index.js"),c=function(e){if(e&&e.__esModule)return e;var t={};if(null!=e)for(var n in e)Object.prototype.hasOwnProperty.call(e,n)&&(t[n]=e[n]);return t.default=e,t}(s);t.default=function(){u.default.component.registerMany(r({},c))}},"./src/bundles/bundle.js":function(e,t,n){"use strict";n("./src/legacy/entwine/index.js"),n("./src/boot/index.js")},"./src/components/Widget.js":function(e,t,n){"use strict";Object.defineProperty(t,"__esModule",{value:!0}),t.default=function(){return o.default.createElement("div",null,"I'm rendered with React!!!")};var r=n(1),o=function(e){return e&&e.__esModule?e:{default:e}}(r)},"./src/components/index.js":function(e,t,n){"use strict";Object.defineProperty(t,"__esModule",{value:!0}),t.Widget=void 0;var r=n("./src/components/Widget.js"),o=function(e){return e&&e.__esModule?e:{default:e}}(r);t.Widget=o.default},"./src/legacy/entwine/index.js":function(e,t,n){"use strict"},0:function(e,t){e.exports=Injector},1:function(e,t){e.exports=React}});