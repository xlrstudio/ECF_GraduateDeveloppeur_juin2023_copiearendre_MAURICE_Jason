(()=>{function e(e,t){for(var a=0;a<t.length;a++){var o=t[a];o.enumerable=o.enumerable||!1,o.configurable=!0,"value"in o&&(o.writable=!0),Object.defineProperty(e,o.key,o)}}function t(e,t){if(t.has(e))throw new TypeError("Cannot initialize the same private elements twice on an object")}function a(e,t,a){if(!t.has(e))throw new TypeError("attempted to get private field on non-instance");return a}function o(e,t){return function(e,t){if(t.get)return t.get.call(e);return t.value}(e,n(e,t,"get"))}function r(e,t,a){return function(e,t,a){if(t.set)t.set.call(e,a);else{if(!t.writable)throw new TypeError("attempted to set read only private field");t.value=a}}(e,n(e,t,"set"),a),a}function n(e,t,a){if(!t.has(e))throw new TypeError("attempted to "+a+" private field on non-instance");return t.get(e)}var c=new WeakMap,i=new WeakSet;function l(e){if("false"!==document.body.getAttribute("data-ea-dark-scheme-is-enabled")){var t="auto"===e?matchMedia("(prefers-color-scheme: dark)").matches?"dark":"light":e;document.body.classList.remove("ea-light-scheme","ea-dark-scheme"),document.body.classList.add("light"===t?"ea-light-scheme":"ea-dark-scheme"),localStorage.setItem(o(this,c),e),document.body.style.colorScheme=t}}var s=new(function(){"use strict";function n(){var e,a;!function(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}(this,n),t(e=this,a=i),a.add(e),function(e,a,o){t(e,a),a.set(e,o)}(this,c,{writable:!0,value:void 0}),r(this,c,"ea/colorScheme")}var s,d,u;return s=n,(d=[{key:"updateColorScheme",value:function(){var e=localStorage.getItem(o(this,c))||"auto";a(this,i,l).call(this,e)}},{key:"createColorSchemeSelector",value:function(){var e=this;if(null!==document.querySelector(".dropdown-settings")){var t=document.querySelectorAll(".dropdown-settings"),r=localStorage.getItem(o(this,c))||"auto";t.forEach((function(t){var o=t.querySelectorAll("a.dropdown-appearance-item[data-ea-color-scheme]"),n=t.querySelector('a.dropdown-appearance-item[data-ea-color-scheme="'.concat(r,'"]'));o.forEach((function(e){e.classList.remove("active")})),n.classList.add("active"),o.forEach((function(t){t.addEventListener("click",(function(){var o=t.getAttribute("data-ea-color-scheme");a(e,i,l).call(e,o);var r=document.querySelectorAll("a.dropdown-appearance-item[data-ea-color-scheme]"),n=document.querySelectorAll('a.dropdown-appearance-item[data-ea-color-scheme="'.concat(o,'"]'));r.forEach((function(e){e.classList.remove("active")})),n.forEach((function(e){e.classList.add("active")}))}))}))}))}}}])&&e(s.prototype,d),u&&e(s,u),Object.defineProperty(s,"prototype",{writable:!1}),n}());s.updateColorScheme(),window.matchMedia("(prefers-color-scheme: dark)").addEventListener("change",(function(e){s.updateColorScheme()})),document.addEventListener("DOMContentLoaded",(function(){s.createColorSchemeSelector()}))})();