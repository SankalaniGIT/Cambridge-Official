/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId])
/******/ 			return installedModules[moduleId].exports;
/******/
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
/******/ 	// identity function for calling harmony imports with the correct context
/******/ 	__webpack_require__.i = function(value) { return value; };
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
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
/******/ 	__webpack_require__.p = "";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 52);
/******/ })
/************************************************************************/
/******/ ({

/***/ 11:
/***/ (function(module, exports) {

var _typeof = typeof Symbol === "function" && typeof Symbol.iterator === "symbol" ? function (obj) { return typeof obj; } : function (obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; };

// ----------------------------------------------------------------------------
// Vegas - Fullscreen Backgrounds and Slideshows with jQuery.
// v1.3.4 - released 2013-12-16 13:28
// Licensed under the MIT license.
// http://vegas.jaysalvat.com/
//----------------------------------------------------------------------------
// Copyright (C) 2010-2013 Jay Salvat
// http://jaysalvat.com/
//----------------------------------------------------------------------------

(function (e) {
    function t(a, n) {
        var o = { align: "center", valign: "center" };
        if (e.extend(o, n), 0 === a.height()) return a.load(function () {
            t(e(this), n);
        }), void 0;
        var i,
            s,
            g,
            d = r(),
            l = d.width,
            u = d.height,
            c = a.width(),
            v = a.height(),
            p = u / l,
            f = v / c;p > f ? (i = u / f, s = u) : (i = l, s = l * f), g = { width: i + "px", height: s + "px", top: "auto", bottom: "auto", left: "auto", right: "auto" }, isNaN(parseInt(o.valign, 10)) ? "top" == o.valign ? g.top = 0 : "bottom" == o.valign ? g.bottom = 0 : g.top = (u - s) / 2 : g.top = 0 - (s - u) / 100 * parseInt(o.valign, 10) + "px", isNaN(parseInt(o.align, 10)) ? "left" == o.align ? g.left = 0 : "right" == o.align ? g.right = 0 : g.left = (l - i) / 2 : g.left = 0 - (i - l) / 100 * parseInt(o.align, 10) + "px", a.css(g);
    }function a() {
        d.prependTo("body").fadeIn();
    }function n() {
        d.fadeOut("fast", function () {
            e(this).remove();
        });
    }function o() {
        return e("body").css("backgroundImage") ? e("body").css("backgroundImage").replace(/url\("?(.*?)"?\)/i, "$1") : void 0;
    }function r() {
        var e = window,
            t = "inner";return "innerWidth" in window || (e = document.documentElement || document.body, t = "client"), { width: e[t + "Width"], height: e[t + "Height"] };
    }var i,
        s = e("<img />").addClass("vegas-background"),
        g = e("<div />").addClass("vegas-overlay"),
        d = e("<div />").addClass("vegas-loading"),
        l = e(),
        u = null,
        c = [],
        v = 0,
        p = 5e3,
        f = function f() {},
        h = { init: function init(r) {
            var i = { src: o(), align: "center", valign: "center", fade: 0, loading: !0, load: function load() {}, complete: function complete() {} };e.extend(i, e.vegas.defaults.background, r), i.loading && a();var g = s.clone();return g.css({ position: "fixed", left: "0px", top: "0px" }).bind("load", function () {
                g != l && (e(window).bind("load resize.vegas", function () {
                    t(g, i);
                }), l.is("img") ? (l.stop(), g.hide().insertAfter(l).fadeIn(i.fade, function () {
                    e(".vegas-background").not(this).remove(), e("body").trigger("vegascomplete", [this, v - 1]), i.complete.apply(g, [v - 1]);
                })) : g.hide().prependTo("body").fadeIn(i.fade, function () {
                    e("body").trigger("vegascomplete", [this, v - 1]), i.complete.apply(this, [v - 1]);
                }), l = g, t(l, i), i.loading && n(), e("body").trigger("vegasload", [l.get(0), v - 1]), i.load.apply(l.get(0), [v - 1]), v && (e("body").trigger("vegaswalk", [l.get(0), v - 1]), i.walk.apply(l.get(0), [v - 1])));
            }).attr("src", i.src), e.vegas;
        }, destroy: function destroy(t) {
            return t && "background" != t || (e(".vegas-background, .vegas-loading").remove(), e(window).unbind("*.vegas"), l = e()), t && "overlay" != t || e(".vegas-overlay").remove(), clearInterval(i), e.vegas;
        }, overlay: function overlay(t) {
            var a = { src: null, opacity: null };return e.extend(a, e.vegas.defaults.overlay, t), g.remove(), g.css({ margin: "0", padding: "0", position: "fixed", left: "0px", top: "0px", width: "100%", height: "100%" }), a.src === !1 && g.css("backgroundImage", "none"), a.src && g.css("backgroundImage", "url(" + a.src + ")"), a.opacity && g.css("opacity", a.opacity), g.prependTo("body"), e.vegas;
        }, slideshow: function slideshow(t, a) {
            var n = { step: v, delay: p, preload: !1, loading: !0, backgrounds: c, walk: f };if (e.extend(n, e.vegas.defaults.slideshow, t), n.backgrounds != c && (t.step || (n.step = 0), t.walk || (n.walk = function () {}), n.preload && e.vegas("preload", n.backgrounds)), c = n.backgrounds, p = n.delay, v = n.step, f = n.walk, clearInterval(i), !c.length) return e.vegas;var o = function o() {
                0 > v && (v = c.length - 1), (v >= c.length || !c[v - 1]) && (v = 0);var t = c[v++];t.walk = n.walk, t.loading = n.loading, t.fade === void 0 && (t.fade = n.fade), t.fade > n.delay && (t.fade = n.delay), e.vegas(t);
            };return o(), a || (u = !1, e("body").trigger("vegasstart", [l.get(0), v - 1])), u || (i = setInterval(o, n.delay)), e.vegas;
        }, next: function next() {
            var t = v;return v && (e.vegas("slideshow", { step: v }, !0), e("body").trigger("vegasnext", [l.get(0), v - 1, t - 1])), e.vegas;
        }, previous: function previous() {
            var t = v;return v && (e.vegas("slideshow", { step: v - 2 }, !0), e("body").trigger("vegasprevious", [l.get(0), v - 1, t - 1])), e.vegas;
        }, jump: function jump(t) {
            var a = v;return v && (e.vegas("slideshow", { step: t }, !0), e("body").trigger("vegasjump", [l.get(0), v - 1, a - 1])), e.vegas;
        }, stop: function stop() {
            var t = v;return v = 0, u = null, clearInterval(i), e("body").trigger("vegasstop", [l.get(0), t - 1]), e.vegas;
        }, pause: function pause() {
            return u = !0, clearInterval(i), e("body").trigger("vegaspause", [l.get(0), v - 1]), e.vegas;
        }, get: function get(e) {
            return null === e || "background" == e ? l.get(0) : "overlay" == e ? g.get(0) : "step" == e ? v - 1 : "paused" == e ? u : void 0;
        }, preload: function preload(t) {
            var a = [];for (var n in t) {
                if (t[n].src) {
                    var o = document.createElement("img");o.src = t[n].src, a.push(o);
                }
            }return e.vegas;
        } };e.vegas = function (t) {
        return h[t] ? h[t].apply(this, Array.prototype.slice.call(arguments, 1)) : "object" != (typeof t === "undefined" ? "undefined" : _typeof(t)) && t ? (e.error("Method " + t + " does not exist"), void 0) : h.init.apply(this, arguments);
    }, e.vegas.defaults = { background: {}, slideshow: {}, overlay: {} };
})(jQuery);

/***/ }),

/***/ 52:
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(11);


/***/ })

/******/ });