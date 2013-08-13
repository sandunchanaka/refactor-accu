/*!
* jQuery JavaScript Library v1.6.1
* http://jquery.com/
*
* Copyright 2011, John Resig
* Dual licensed under the MIT or GPL Version 2 licenses.
* http://jquery.org/license
*
* Includes Sizzle.js
* http://sizzlejs.com/
* Copyright 2011, The Dojo Foundation
* Released under the MIT, BSD, and GPL Licenses.
*
* Date: Thu May 12 15:04:36 2011 -0400
*/
(function (a, b) {
    function cy(a) { return f.isWindow(a) ? a : a.nodeType === 9 ? a.defaultView || a.parentWindow : !1 } function cv(a) { if (!cj[a]) { var b = f("<" + a + ">").appendTo("body"), d = b.css("display"); b.remove(); if (d === "none" || d === "") { ck || (ck = c.createElement("iframe"), ck.frameBorder = ck.width = ck.height = 0), c.body.appendChild(ck); if (!cl || !ck.createElement) cl = (ck.contentWindow || ck.contentDocument).document, cl.write("<!doctype><html><body></body></html>"); b = cl.createElement(a), cl.body.appendChild(b), d = f.css(b, "display"), c.body.removeChild(ck) } cj[a] = d } return cj[a] } function cu(a, b) { var c = {}; f.each(cp.concat.apply([], cp.slice(0, b)), function () { c[this] = a }); return c } function ct() { cq = b } function cs() { setTimeout(ct, 0); return cq = f.now() } function ci() { try { return new a.ActiveXObject("Microsoft.XMLHTTP") } catch (b) { } } function ch() { try { return new a.XMLHttpRequest } catch (b) { } } function cb(a, c) { a.dataFilter && (c = a.dataFilter(c, a.dataType)); var d = a.dataTypes, e = {}, g, h, i = d.length, j, k = d[0], l, m, n, o, p; for (g = 1; g < i; g++) { if (g === 1) for (h in a.converters) typeof h == "string" && (e[h.toLowerCase()] = a.converters[h]); l = k, k = d[g]; if (k === "*") k = l; else if (l !== "*" && l !== k) { m = l + " " + k, n = e[m] || e["* " + k]; if (!n) { p = b; for (o in e) { j = o.split(" "); if (j[0] === l || j[0] === "*") { p = e[j[1] + " " + k]; if (p) { o = e[o], o === !0 ? n = p : p === !0 && (n = o); break } } } } !n && !p && f.error("No conversion from " + m.replace(" ", " to ")), n !== !0 && (c = n ? n(c) : p(o(c))) } } return c } function ca(a, c, d) { var e = a.contents, f = a.dataTypes, g = a.responseFields, h, i, j, k; for (i in g) i in d && (c[g[i]] = d[i]); while (f[0] === "*") f.shift(), h === b && (h = a.mimeType || c.getResponseHeader("content-type")); if (h) for (i in e) if (e[i] && e[i].test(h)) { f.unshift(i); break } if (f[0] in d) j = f[0]; else { for (i in d) { if (!f[0] || a.converters[i + " " + f[0]]) { j = i; break } k || (k = i) } j = j || k } if (j) { j !== f[0] && f.unshift(j); return d[j] } } function b_(a, b, c, d) { if (f.isArray(b)) f.each(b, function (b, e) { c || bF.test(a) ? d(a, e) : b_(a + "[" + (typeof e == "object" || f.isArray(e) ? b : "") + "]", e, c, d) }); else if (!c && b != null && typeof b == "object") for (var e in b) b_(a + "[" + e + "]", b[e], c, d); else d(a, b) } function b$(a, c, d, e, f, g) { f = f || c.dataTypes[0], g = g || {}, g[f] = !0; var h = a[f], i = 0, j = h ? h.length : 0, k = a === bU, l; for (; i < j && (k || !l); i++) l = h[i](c, d, e), typeof l == "string" && (!k || g[l] ? l = b : (c.dataTypes.unshift(l), l = b$(a, c, d, e, l, g))); (k || !l) && !g["*"] && (l = b$(a, c, d, e, "*", g)); return l } function bZ(a) { return function (b, c) { typeof b != "string" && (c = b, b = "*"); if (f.isFunction(c)) { var d = b.toLowerCase().split(bQ), e = 0, g = d.length, h, i, j; for (; e < g; e++) h = d[e], j = /^\+/.test(h), j && (h = h.substr(1) || "*"), i = a[h] = a[h] || [], i[j ? "unshift" : "push"](c) } } } function bD(a, b, c) { var d = b === "width" ? bx : by, e = b === "width" ? a.offsetWidth : a.offsetHeight; if (c === "border") return e; f.each(d, function () { c || (e -= parseFloat(f.css(a, "padding" + this)) || 0), c === "margin" ? e += parseFloat(f.css(a, "margin" + this)) || 0 : e -= parseFloat(f.css(a, "border" + this + "Width")) || 0 }); return e } function bn(a, b) { b.src ? f.ajax({ url: b.src, async: !1, dataType: "script" }) : f.globalEval((b.text || b.textContent || b.innerHTML || "").replace(bf, "/*$0*/")), b.parentNode && b.parentNode.removeChild(b) } function bm(a) { f.nodeName(a, "input") ? bl(a) : a.getElementsByTagName && f.grep(a.getElementsByTagName("input"), bl) } function bl(a) { if (a.type === "checkbox" || a.type === "radio") a.defaultChecked = a.checked } function bk(a) { return "getElementsByTagName" in a ? a.getElementsByTagName("*") : "querySelectorAll" in a ? a.querySelectorAll("*") : [] } function bj(a, b) { var c; if (b.nodeType === 1) { b.clearAttributes && b.clearAttributes(), b.mergeAttributes && b.mergeAttributes(a), c = b.nodeName.toLowerCase(); if (c === "object") b.outerHTML = a.outerHTML; else if (c !== "input" || a.type !== "checkbox" && a.type !== "radio") { if (c === "option") b.selected = a.defaultSelected; else if (c === "input" || c === "textarea") b.defaultValue = a.defaultValue } else a.checked && (b.defaultChecked = b.checked = a.checked), b.value !== a.value && (b.value = a.value); b.removeAttribute(f.expando) } } function bi(a, b) { if (b.nodeType === 1 && !!f.hasData(a)) { var c = f.expando, d = f.data(a), e = f.data(b, d); if (d = d[c]) { var g = d.events; e = e[c] = f.extend({}, d); if (g) { delete e.handle, e.events = {}; for (var h in g) for (var i = 0, j = g[h].length; i < j; i++) f.event.add(b, h + (g[h][i].namespace ? "." : "") + g[h][i].namespace, g[h][i], g[h][i].data) } } } } function bh(a, b) { return f.nodeName(a, "table") ? a.getElementsByTagName("tbody")[0] || a.appendChild(a.ownerDocument.createElement("tbody")) : a } function X(a, b, c) { b = b || 0; if (f.isFunction(b)) return f.grep(a, function (a, d) { var e = !!b.call(a, d, a); return e === c }); if (b.nodeType) return f.grep(a, function (a, d) { return a === b === c }); if (typeof b == "string") { var d = f.grep(a, function (a) { return a.nodeType === 1 }); if (S.test(b)) return f.filter(b, d, !c); b = f.filter(b, d) } return f.grep(a, function (a, d) { return f.inArray(a, b) >= 0 === c }) } function W(a) { return !a || !a.parentNode || a.parentNode.nodeType === 11 } function O(a, b) { return (a && a !== "*" ? a + "." : "") + b.replace(A, "`").replace(B, "&") } function N(a) { var b, c, d, e, g, h, i, j, k, l, m, n, o, p = [], q = [], r = f._data(this, "events"); if (!(a.liveFired === this || !r || !r.live || a.target.disabled || a.button && a.type === "click")) { a.namespace && (n = new RegExp("(^|\\.)" + a.namespace.split(".").join("\\.(?:.*\\.)?") + "(\\.|$)")), a.liveFired = this; var s = r.live.slice(0); for (i = 0; i < s.length; i++) g = s[i], g.origType.replace(y, "") === a.type ? q.push(g.selector) : s.splice(i--, 1); e = f(a.target).closest(q, a.currentTarget); for (j = 0, k = e.length; j < k; j++) { m = e[j]; for (i = 0; i < s.length; i++) { g = s[i]; if (m.selector === g.selector && (!n || n.test(g.namespace)) && !m.elem.disabled) { h = m.elem, d = null; if (g.preType === "mouseenter" || g.preType === "mouseleave") a.type = g.preType, d = f(a.relatedTarget).closest(g.selector)[0], d && f.contains(h, d) && (d = h); (!d || d !== h) && p.push({ elem: h, handleObj: g, level: m.level }) } } } for (j = 0, k = p.length; j < k; j++) { e = p[j]; if (c && e.level > c) break; a.currentTarget = e.elem, a.data = e.handleObj.data, a.handleObj = e.handleObj, o = e.handleObj.origHandler.apply(e.elem, arguments); if (o === !1 || a.isPropagationStopped()) { c = e.level, o === !1 && (b = !1); if (a.isImmediatePropagationStopped()) break } } return b } } function L(a, c, d) { var e = f.extend({}, d[0]); e.type = a, e.originalEvent = {}, e.liveFired = b, f.event.handle.call(c, e), e.isDefaultPrevented() && d[0].preventDefault() } function F() { return !0 } function E() { return !1 } function m(a, c, d) { var e = c + "defer", g = c + "queue", h = c + "mark", i = f.data(a, e, b, !0); i && (d === "queue" || !f.data(a, g, b, !0)) && (d === "mark" || !f.data(a, h, b, !0)) && setTimeout(function () { !f.data(a, g, b, !0) && !f.data(a, h, b, !0) && (f.removeData(a, e, !0), i.resolve()) }, 0) } function l(a) { for (var b in a) if (b !== "toJSON") return !1; return !0 } function k(a, c, d) { if (d === b && a.nodeType === 1) { var e = "data-" + c.replace(j, "$1-$2").toLowerCase(); d = a.getAttribute(e); if (typeof d == "string") { try { d = d === "true" ? !0 : d === "false" ? !1 : d === "null" ? null : f.isNaN(d) ? i.test(d) ? f.parseJSON(d) : d : parseFloat(d) } catch (g) { } f.data(a, c, d) } else d = b } return d } var c = a.document, d = a.navigator, e = a.location, f = function () { function H() { if (!e.isReady) { try { c.documentElement.doScroll("left") } catch (a) { setTimeout(H, 1); return } e.ready() } } var e = function (a, b) { return new e.fn.init(a, b, h) }, f = a.jQuery, g = a.$, h, i = /^(?:[^<]*(<[\w\W]+>)[^>]*$|#([\w\-]*)$)/, j = /\S/, k = /^\s+/, l = /\s+$/, m = /\d/, n = /^<(\w+)\s*\/?>(?:<\/\1>)?$/, o = /^[\],:{}\s]*$/, p = /\\(?:["\\\/bfnrt]|u[0-9a-fA-F]{4})/g, q = /"[^"\\\n\r]*"|true|false|null|-?\d+(?:\.\d*)?(?:[eE][+\-]?\d+)?/g, r = /(?:^|:|,)(?:\s*\[)+/g, s = /(webkit)[ \/]([\w.]+)/, t = /(opera)(?:.*version)?[ \/]([\w.]+)/, u = /(msie) ([\w.]+)/, v = /(mozilla)(?:.*? rv:([\w.]+))?/, w = d.userAgent, x, y, z, A = Object.prototype.toString, B = Object.prototype.hasOwnProperty, C = Array.prototype.push, D = Array.prototype.slice, E = String.prototype.trim, F = Array.prototype.indexOf, G = {}; e.fn = e.prototype = { constructor: e, init: function (a, d, f) { var g, h, j, k; if (!a) return this; if (a.nodeType) { this.context = this[0] = a, this.length = 1; return this } if (a === "body" && !d && c.body) { this.context = c, this[0] = c.body, this.selector = a, this.length = 1; return this } if (typeof a == "string") { a.charAt(0) !== "<" || a.charAt(a.length - 1) !== ">" || a.length < 3 ? g = i.exec(a) : g = [null, a, null]; if (g && (g[1] || !d)) { if (g[1]) { d = d instanceof e ? d[0] : d, k = d ? d.ownerDocument || d : c, j = n.exec(a), j ? e.isPlainObject(d) ? (a = [c.createElement(j[1])], e.fn.attr.call(a, d, !0)) : a = [k.createElement(j[1])] : (j = e.buildFragment([g[1]], [k]), a = (j.cacheable ? e.clone(j.fragment) : j.fragment).childNodes); return e.merge(this, a) } h = c.getElementById(g[2]); if (h && h.parentNode) { if (h.id !== g[2]) return f.find(a); this.length = 1, this[0] = h } this.context = c, this.selector = a; return this } return !d || d.jquery ? (d || f).find(a) : this.constructor(d).find(a) } if (e.isFunction(a)) return f.ready(a); a.selector !== b && (this.selector = a.selector, this.context = a.context); return e.makeArray(a, this) }, selector: "", jquery: "1.6.1", length: 0, size: function () { return this.length }, toArray: function () { return D.call(this, 0) }, get: function (a) { return a == null ? this.toArray() : a < 0 ? this[this.length + a] : this[a] }, pushStack: function (a, b, c) { var d = this.constructor(); e.isArray(a) ? C.apply(d, a) : e.merge(d, a), d.prevObject = this, d.context = this.context, b === "find" ? d.selector = this.selector + (this.selector ? " " : "") + c : b && (d.selector = this.selector + "." + b + "(" + c + ")"); return d }, each: function (a, b) { return e.each(this, a, b) }, ready: function (a) { e.bindReady(), y.done(a); return this }, eq: function (a) { return a === -1 ? this.slice(a) : this.slice(a, +a + 1) }, first: function () { return this.eq(0) }, last: function () { return this.eq(-1) }, slice: function () { return this.pushStack(D.apply(this, arguments), "slice", D.call(arguments).join(",")) }, map: function (a) { return this.pushStack(e.map(this, function (b, c) { return a.call(b, c, b) })) }, end: function () { return this.prevObject || this.constructor(null) }, push: C, sort: [].sort, splice: [].splice }, e.fn.init.prototype = e.fn, e.extend = e.fn.extend = function () { var a, c, d, f, g, h, i = arguments[0] || {}, j = 1, k = arguments.length, l = !1; typeof i == "boolean" && (l = i, i = arguments[1] || {}, j = 2), typeof i != "object" && !e.isFunction(i) && (i = {}), k === j && (i = this, --j); for (; j < k; j++) if ((a = arguments[j]) != null) for (c in a) { d = i[c], f = a[c]; if (i === f) continue; l && f && (e.isPlainObject(f) || (g = e.isArray(f))) ? (g ? (g = !1, h = d && e.isArray(d) ? d : []) : h = d && e.isPlainObject(d) ? d : {}, i[c] = e.extend(l, h, f)) : f !== b && (i[c] = f) } return i }, e.extend({ noConflict: function (b) { a.$ === e && (a.$ = g), b && a.jQuery === e && (a.jQuery = f); return e }, isReady: !1, readyWait: 1, holdReady: function (a) { a ? e.readyWait++ : e.ready(!0) }, ready: function (a) { if (a === !0 && ! --e.readyWait || a !== !0 && !e.isReady) { if (!c.body) return setTimeout(e.ready, 1); e.isReady = !0; if (a !== !0 && --e.readyWait > 0) return; y.resolveWith(c, [e]), e.fn.trigger && e(c).trigger("ready").unbind("ready") } }, bindReady: function () { if (!y) { y = e._Deferred(); if (c.readyState === "complete") return setTimeout(e.ready, 1); if (c.addEventListener) c.addEventListener("DOMContentLoaded", z, !1), a.addEventListener("load", e.ready, !1); else if (c.attachEvent) { c.attachEvent("onreadystatechange", z), a.attachEvent("onload", e.ready); var b = !1; try { b = a.frameElement == null } catch (d) { } c.documentElement.doScroll && b && H() } } }, isFunction: function (a) { return e.type(a) === "function" }, isArray: Array.isArray || function (a) { return e.type(a) === "array" }, isWindow: function (a) { return a && typeof a == "object" && "setInterval" in a }, isNaN: function (a) { return a == null || !m.test(a) || isNaN(a) }, type: function (a) { return a == null ? String(a) : G[A.call(a)] || "object" }, isPlainObject: function (a) { if (!a || e.type(a) !== "object" || a.nodeType || e.isWindow(a)) return !1; if (a.constructor && !B.call(a, "constructor") && !B.call(a.constructor.prototype, "isPrototypeOf")) return !1; var c; for (c in a); return c === b || B.call(a, c) }, isEmptyObject: function (a) { for (var b in a) return !1; return !0 }, error: function (a) { throw a }, parseJSON: function (b) { if (typeof b != "string" || !b) return null; b = e.trim(b); if (a.JSON && a.JSON.parse) return a.JSON.parse(b); if (o.test(b.replace(p, "@").replace(q, "]").replace(r, ""))) return (new Function("return " + b))(); e.error("Invalid JSON: " + b) }, parseXML: function (b, c, d) { a.DOMParser ? (d = new DOMParser, c = d.parseFromString(b, "text/xml")) : (c = new ActiveXObject("Microsoft.XMLDOM"), c.async = "false", c.loadXML(b)), d = c.documentElement, (!d || !d.nodeName || d.nodeName === "parsererror") && e.error("Invalid XML: " + b); return c }, noop: function () { }, globalEval: function (b) { b && j.test(b) && (a.execScript || function (b) { a.eval.call(a, b) })(b) }, nodeName: function (a, b) { return a.nodeName && a.nodeName.toUpperCase() === b.toUpperCase() }, each: function (a, c, d) { var f, g = 0, h = a.length, i = h === b || e.isFunction(a); if (d) { if (i) { for (f in a) if (c.apply(a[f], d) === !1) break } else for (; g < h; ) if (c.apply(a[g++], d) === !1) break } else if (i) { for (f in a) if (c.call(a[f], f, a[f]) === !1) break } else for (; g < h; ) if (c.call(a[g], g, a[g++]) === !1) break; return a }, trim: E ? function (a) { return a == null ? "" : E.call(a) } : function (a) { return a == null ? "" : (a + "").replace(k, "").replace(l, "") }, makeArray: function (a, b) { var c = b || []; if (a != null) { var d = e.type(a); a.length == null || d === "string" || d === "function" || d === "regexp" || e.isWindow(a) ? C.call(c, a) : e.merge(c, a) } return c }, inArray: function (a, b) { if (F) return F.call(b, a); for (var c = 0, d = b.length; c < d; c++) if (b[c] === a) return c; return -1 }, merge: function (a, c) { var d = a.length, e = 0; if (typeof c.length == "number") for (var f = c.length; e < f; e++) a[d++] = c[e]; else while (c[e] !== b) a[d++] = c[e++]; a.length = d; return a }, grep: function (a, b, c) { var d = [], e; c = !!c; for (var f = 0, g = a.length; f < g; f++) e = !!b(a[f], f), c !== e && d.push(a[f]); return d }, map: function (a, c, d) { var f, g, h = [], i = 0, j = a.length, k = a instanceof e || j !== b && typeof j == "number" && (j > 0 && a[0] && a[j - 1] || j === 0 || e.isArray(a)); if (k) for (; i < j; i++) f = c(a[i], i, d), f != null && (h[h.length] = f); else for (g in a) f = c(a[g], g, d), f != null && (h[h.length] = f); return h.concat.apply([], h) }, guid: 1, proxy: function (a, c) { if (typeof c == "string") { var d = a[c]; c = a, a = d } if (!e.isFunction(a)) return b; var f = D.call(arguments, 2), g = function () { return a.apply(c, f.concat(D.call(arguments))) }; g.guid = a.guid = a.guid || g.guid || e.guid++; return g }, access: function (a, c, d, f, g, h) { var i = a.length; if (typeof c == "object") { for (var j in c) e.access(a, j, c[j], f, g, d); return a } if (d !== b) { f = !h && f && e.isFunction(d); for (var k = 0; k < i; k++) g(a[k], c, f ? d.call(a[k], k, g(a[k], c)) : d, h); return a } return i ? g(a[0], c) : b }, now: function () { return (new Date).getTime() }, uaMatch: function (a) { a = a.toLowerCase(); var b = s.exec(a) || t.exec(a) || u.exec(a) || a.indexOf("compatible") < 0 && v.exec(a) || []; return { browser: b[1] || "", version: b[2] || "0"} }, sub: function () { function a(b, c) { return new a.fn.init(b, c) } e.extend(!0, a, this), a.superclass = this, a.fn = a.prototype = this(), a.fn.constructor = a, a.sub = this.sub, a.fn.init = function (d, f) { f && f instanceof e && !(f instanceof a) && (f = a(f)); return e.fn.init.call(this, d, f, b) }, a.fn.init.prototype = a.fn; var b = a(c); return a }, browser: {} }), e.each("Boolean Number String Function Array Date RegExp Object".split(" "), function (a, b) { G["[object " + b + "]"] = b.toLowerCase() }), x = e.uaMatch(w), x.browser && (e.browser[x.browser] = !0, e.browser.version = x.version), e.browser.webkit && (e.browser.safari = !0), j.test(" ") && (k = /^[\s\xA0]+/, l = /[\s\xA0]+$/), h = e(c), c.addEventListener ? z = function () { c.removeEventListener("DOMContentLoaded", z, !1), e.ready() } : c.attachEvent && (z = function () { c.readyState === "complete" && (c.detachEvent("onreadystatechange", z), e.ready()) }); return e } (), g = "done fail isResolved isRejected promise then always pipe".split(" "), h = [].slice; f.extend({ _Deferred: function () { var a = [], b, c, d, e = { done: function () { if (!d) { var c = arguments, g, h, i, j, k; b && (k = b, b = 0); for (g = 0, h = c.length; g < h; g++) i = c[g], j = f.type(i), j === "array" ? e.done.apply(e, i) : j === "function" && a.push(i); k && e.resolveWith(k[0], k[1]) } return this }, resolveWith: function (e, f) { if (!d && !b && !c) { f = f || [], c = 1; try { while (a[0]) a.shift().apply(e, f) } finally { b = [e, f], c = 0 } } return this }, resolve: function () { e.resolveWith(this, arguments); return this }, isResolved: function () { return !!c || !!b }, cancel: function () { d = 1, a = []; return this } }; return e }, Deferred: function (a) { var b = f._Deferred(), c = f._Deferred(), d; f.extend(b, { then: function (a, c) { b.done(a).fail(c); return this }, always: function () { return b.done.apply(b, arguments).fail.apply(this, arguments) }, fail: c.done, rejectWith: c.resolveWith, reject: c.resolve, isRejected: c.isResolved, pipe: function (a, c) { return f.Deferred(function (d) { f.each({ done: [a, "resolve"], fail: [c, "reject"] }, function (a, c) { var e = c[0], g = c[1], h; f.isFunction(e) ? b[a](function () { h = e.apply(this, arguments), h && f.isFunction(h.promise) ? h.promise().then(d.resolve, d.reject) : d[g](h) }) : b[a](d[g]) }) }).promise() }, promise: function (a) { if (a == null) { if (d) return d; d = a = {} } var c = g.length; while (c--) a[g[c]] = b[g[c]]; return a } }), b.done(c.cancel).fail(b.cancel), delete b.cancel, a && a.call(b, b); return b }, when: function (a) { function i(a) { return function (c) { b[a] = arguments.length > 1 ? h.call(arguments, 0) : c, --e || g.resolveWith(g, h.call(b, 0)) } } var b = arguments, c = 0, d = b.length, e = d, g = d <= 1 && a && f.isFunction(a.promise) ? a : f.Deferred(); if (d > 1) { for (; c < d; c++) b[c] && f.isFunction(b[c].promise) ? b[c].promise().then(i(c), g.reject) : --e; e || g.resolveWith(g, b) } else g !== a && g.resolveWith(g, d ? [a] : []); return g.promise() } }), f.support = function () { var a = c.createElement("div"), b = c.documentElement, d, e, f, g, h, i, j, k, l, m, n, o, p, q, r; a.setAttribute("className", "t"), a.innerHTML = "   <link/><table></table><a href='/a' style='top:1px;float:left;opacity:.55;'>a</a><input type='checkbox'/>", d = a.getElementsByTagName("*"), e = a.getElementsByTagName("a")[0]; if (!d || !d.length || !e) return {}; f = c.createElement("select"), g = f.appendChild(c.createElement("option")), h = a.getElementsByTagName("input")[0], j = { leadingWhitespace: a.firstChild.nodeType === 3, tbody: !a.getElementsByTagName("tbody").length, htmlSerialize: !!a.getElementsByTagName("link").length, style: /top/.test(e.getAttribute("style")), hrefNormalized: e.getAttribute("href") === "/a", opacity: /^0.55$/.test(e.style.opacity), cssFloat: !!e.style.cssFloat, checkOn: h.value === "on", optSelected: g.selected, getSetAttribute: a.className !== "t", submitBubbles: !0, changeBubbles: !0, focusinBubbles: !1, deleteExpando: !0, noCloneEvent: !0, inlineBlockNeedsLayout: !1, shrinkWrapBlocks: !1, reliableMarginRight: !0 }, h.checked = !0, j.noCloneChecked = h.cloneNode(!0).checked, f.disabled = !0, j.optDisabled = !g.disabled; try { delete a.test } catch (s) { j.deleteExpando = !1 } !a.addEventListener && a.attachEvent && a.fireEvent && (a.attachEvent("onclick", function b() { j.noCloneEvent = !1, a.detachEvent("onclick", b) }), a.cloneNode(!0).fireEvent("onclick")), h = c.createElement("input"), h.value = "t", h.setAttribute("type", "radio"), j.radioValue = h.value === "t", h.setAttribute("checked", "checked"), a.appendChild(h), k = c.createDocumentFragment(), k.appendChild(a.firstChild), j.checkClone = k.cloneNode(!0).cloneNode(!0).lastChild.checked, a.innerHTML = "", a.style.width = a.style.paddingLeft = "1px", l = c.createElement("body"), m = { visibility: "hidden", width: 0, height: 0, border: 0, margin: 0, background: "none" }; for (q in m) l.style[q] = m[q]; l.appendChild(a), b.insertBefore(l, b.firstChild), j.appendChecked = h.checked, j.boxModel = a.offsetWidth === 2, "zoom" in a.style && (a.style.display = "inline", a.style.zoom = 1, j.inlineBlockNeedsLayout = a.offsetWidth === 2, a.style.display = "", a.innerHTML = "<div style='width:4px;'></div>", j.shrinkWrapBlocks = a.offsetWidth !== 2), a.innerHTML = "<table><tr><td style='padding:0;border:0;display:none'></td><td>t</td></tr></table>", n = a.getElementsByTagName("td"), r = n[0].offsetHeight === 0, n[0].style.display = "", n[1].style.display = "none", j.reliableHiddenOffsets = r && n[0].offsetHeight === 0, a.innerHTML = "", c.defaultView && c.defaultView.getComputedStyle && (i = c.createElement("div"), i.style.width = "0", i.style.marginRight = "0", a.appendChild(i), j.reliableMarginRight = (parseInt((c.defaultView.getComputedStyle(i, null) || { marginRight: 0 }).marginRight, 10) || 0) === 0), l.innerHTML = "", b.removeChild(l); if (a.attachEvent) for (q in { submit: 1, change: 1, focusin: 1 }) p = "on" + q, r = p in a, r || (a.setAttribute(p, "return;"), r = typeof a[p] == "function"), j[q + "Bubbles"] = r; return j } (), f.boxModel = f.support.boxModel; var i = /^(?:\{.*\}|\[.*\])$/, j = /([a-z])([A-Z])/g; f.extend({ cache: {}, uuid: 0, expando: "jQuery" + (f.fn.jquery + Math.random()).replace(/\D/g, ""), noData: { embed: !0, object: "clsid:D27CDB6E-AE6D-11cf-96B8-444553540000", applet: !0 }, hasData: function (a) { a = a.nodeType ? f.cache[a[f.expando]] : a[f.expando]; return !!a && !l(a) }, data: function (a, c, d, e) { if (!!f.acceptData(a)) { var g = f.expando, h = typeof c == "string", i, j = a.nodeType, k = j ? f.cache : a, l = j ? a[f.expando] : a[f.expando] && f.expando; if ((!l || e && l && !k[l][g]) && h && d === b) return; l || (j ? a[f.expando] = l = ++f.uuid : l = f.expando), k[l] || (k[l] = {}, j || (k[l].toJSON = f.noop)); if (typeof c == "object" || typeof c == "function") e ? k[l][g] = f.extend(k[l][g], c) : k[l] = f.extend(k[l], c); i = k[l], e && (i[g] || (i[g] = {}), i = i[g]), d !== b && (i[f.camelCase(c)] = d); if (c === "events" && !i[c]) return i[g] && i[g].events; return h ? i[f.camelCase(c)] : i } }, removeData: function (b, c, d) { if (!!f.acceptData(b)) { var e = f.expando, g = b.nodeType, h = g ? f.cache : b, i = g ? b[f.expando] : f.expando; if (!h[i]) return; if (c) { var j = d ? h[i][e] : h[i]; if (j) { delete j[c]; if (!l(j)) return } } if (d) { delete h[i][e]; if (!l(h[i])) return } var k = h[i][e]; f.support.deleteExpando || h != a ? delete h[i] : h[i] = null, k ? (h[i] = {}, g || (h[i].toJSON = f.noop), h[i][e] = k) : g && (f.support.deleteExpando ? delete b[f.expando] : b.removeAttribute ? b.removeAttribute(f.expando) : b[f.expando] = null) } }, _data: function (a, b, c) { return f.data(a, b, c, !0) }, acceptData: function (a) { if (a.nodeName) { var b = f.noData[a.nodeName.toLowerCase()]; if (b) return b !== !0 && a.getAttribute("classid") === b } return !0 } }), f.fn.extend({ data: function (a, c) { var d = null; if (typeof a == "undefined") { if (this.length) { d = f.data(this[0]); if (this[0].nodeType === 1) { var e = this[0].attributes, g; for (var h = 0, i = e.length; h < i; h++) g = e[h].name, g.indexOf("data-") === 0 && (g = f.camelCase(g.substring(5)), k(this[0], g, d[g])) } } return d } if (typeof a == "object") return this.each(function () { f.data(this, a) }); var j = a.split("."); j[1] = j[1] ? "." + j[1] : ""; if (c === b) { d = this.triggerHandler("getData" + j[1] + "!", [j[0]]), d === b && this.length && (d = f.data(this[0], a), d = k(this[0], a, d)); return d === b && j[1] ? this.data(j[0]) : d } return this.each(function () { var b = f(this), d = [j[0], c]; b.triggerHandler("setData" + j[1] + "!", d), f.data(this, a, c), b.triggerHandler("changeData" + j[1] + "!", d) }) }, removeData: function (a) { return this.each(function () { f.removeData(this, a) }) } }), f.extend({ _mark: function (a, c) { a && (c = (c || "fx") + "mark", f.data(a, c, (f.data(a, c, b, !0) || 0) + 1, !0)) }, _unmark: function (a, c, d) { a !== !0 && (d = c, c = a, a = !1); if (c) { d = d || "fx"; var e = d + "mark", g = a ? 0 : (f.data(c, e, b, !0) || 1) - 1; g ? f.data(c, e, g, !0) : (f.removeData(c, e, !0), m(c, d, "mark")) } }, queue: function (a, c, d) { if (a) { c = (c || "fx") + "queue"; var e = f.data(a, c, b, !0); d && (!e || f.isArray(d) ? e = f.data(a, c, f.makeArray(d), !0) : e.push(d)); return e || [] } }, dequeue: function (a, b) { b = b || "fx"; var c = f.queue(a, b), d = c.shift(), e; d === "inprogress" && (d = c.shift()), d && (b === "fx" && c.unshift("inprogress"), d.call(a, function () { f.dequeue(a, b) })), c.length || (f.removeData(a, b + "queue", !0), m(a, b, "queue")) } }), f.fn.extend({ queue: function (a, c) { typeof a != "string" && (c = a, a = "fx"); if (c === b) return f.queue(this[0], a); return this.each(function () { var b = f.queue(this, a, c); a === "fx" && b[0] !== "inprogress" && f.dequeue(this, a) }) }, dequeue: function (a) { return this.each(function () { f.dequeue(this, a) }) }, delay: function (a, b) { a = f.fx ? f.fx.speeds[a] || a : a, b = b || "fx"; return this.queue(b, function () { var c = this; setTimeout(function () { f.dequeue(c, b) }, a) }) }, clearQueue: function (a) { return this.queue(a || "fx", []) }, promise: function (a, c) { function m() { --h || d.resolveWith(e, [e]) } typeof a != "string" && (c = a, a = b), a = a || "fx"; var d = f.Deferred(), e = this, g = e.length, h = 1, i = a + "defer", j = a + "queue", k = a + "mark", l; while (g--) if (l = f.data(e[g], i, b, !0) || (f.data(e[g], j, b, !0) || f.data(e[g], k, b, !0)) && f.data(e[g], i, f._Deferred(), !0)) h++, l.done(m); m(); return d.promise() } }); var n = /[\n\t\r]/g, o = /\s+/, p = /\r/g, q = /^(?:button|input)$/i, r = /^(?:button|input|object|select|textarea)$/i, s = /^a(?:rea)?$/i, t = /^(?:autofocus|autoplay|async|checked|controls|defer|disabled|hidden|loop|multiple|open|readonly|required|scoped|selected)$/i, u = /\:/, v, w; f.fn.extend({ attr: function (a, b) { return f.access(this, a, b, !0, f.attr) }, removeAttr: function (a) { return this.each(function () { f.removeAttr(this, a) }) }, prop: function (a, b) { return f.access(this, a, b, !0, f.prop) }, removeProp: function (a) { a = f.propFix[a] || a; return this.each(function () { try { this[a] = b, delete this[a] } catch (c) { } }) }, addClass: function (a) { if (f.isFunction(a)) return this.each(function (b) { var c = f(this); c.addClass(a.call(this, b, c.attr("class") || "")) }); if (a && typeof a == "string") { var b = (a || "").split(o); for (var c = 0, d = this.length; c < d; c++) { var e = this[c]; if (e.nodeType === 1) if (!e.className) e.className = a; else { var g = " " + e.className + " ", h = e.className; for (var i = 0, j = b.length; i < j; i++) g.indexOf(" " + b[i] + " ") < 0 && (h += " " + b[i]); e.className = f.trim(h) } } } return this }, removeClass: function (a) { if (f.isFunction(a)) return this.each(function (b) { var c = f(this); c.removeClass(a.call(this, b, c.attr("class"))) }); if (a && typeof a == "string" || a === b) { var c = (a || "").split(o); for (var d = 0, e = this.length; d < e; d++) { var g = this[d]; if (g.nodeType === 1 && g.className) if (a) { var h = (" " + g.className + " ").replace(n, " "); for (var i = 0, j = c.length; i < j; i++) h = h.replace(" " + c[i] + " ", " "); g.className = f.trim(h) } else g.className = "" } } return this }, toggleClass: function (a, b) { var c = typeof a, d = typeof b == "boolean"; if (f.isFunction(a)) return this.each(function (c) { var d = f(this); d.toggleClass(a.call(this, c, d.attr("class"), b), b) }); return this.each(function () { if (c === "string") { var e, g = 0, h = f(this), i = b, j = a.split(o); while (e = j[g++]) i = d ? i : !h.hasClass(e), h[i ? "addClass" : "removeClass"](e) } else if (c === "undefined" || c === "boolean") this.className && f._data(this, "__className__", this.className), this.className = this.className || a === !1 ? "" : f._data(this, "__className__") || "" }) }, hasClass: function (a) { var b = " " + a + " "; for (var c = 0, d = this.length; c < d; c++) if ((" " + this[c].className + " ").replace(n, " ").indexOf(b) > -1) return !0; return !1 }, val: function (a) { var c, d, e = this[0]; if (!arguments.length) { if (e) { c = f.valHooks[e.nodeName.toLowerCase()] || f.valHooks[e.type]; if (c && "get" in c && (d = c.get(e, "value")) !== b) return d; return (e.value || "").replace(p, "") } return b } var g = f.isFunction(a); return this.each(function (d) { var e = f(this), h; if (this.nodeType === 1) { g ? h = a.call(this, d, e.val()) : h = a, h == null ? h = "" : typeof h == "number" ? h += "" : f.isArray(h) && (h = f.map(h, function (a) { return a == null ? "" : a + "" })), c = f.valHooks[this.nodeName.toLowerCase()] || f.valHooks[this.type]; if (!c || !("set" in c) || c.set(this, h, "value") === b) this.value = h } }) } }), f.extend({ valHooks: { option: { get: function (a) { var b = a.attributes.value; return !b || b.specified ? a.value : a.text } }, select: { get: function (a) { var b, c = a.selectedIndex, d = [], e = a.options, g = a.type === "select-one"; if (c < 0) return null; for (var h = g ? c : 0, i = g ? c + 1 : e.length; h < i; h++) { var j = e[h]; if (j.selected && (f.support.optDisabled ? !j.disabled : j.getAttribute("disabled") === null) && (!j.parentNode.disabled || !f.nodeName(j.parentNode, "optgroup"))) { b = f(j).val(); if (g) return b; d.push(b) } } if (g && !d.length && e.length) return f(e[c]).val(); return d }, set: function (a, b) { var c = f.makeArray(b); f(a).find("option").each(function () { this.selected = f.inArray(f(this).val(), c) >= 0 }), c.length || (a.selectedIndex = -1); return c } } }, attrFn: { val: !0, css: !0, html: !0, text: !0, data: !0, width: !0, height: !0, offset: !0 }, attrFix: { tabindex: "tabIndex" }, attr: function (a, c, d, e) { var g = a.nodeType; if (!a || g === 3 || g === 8 || g === 2) return b; if (e && c in f.attrFn) return f(a)[c](d); if (!("getAttribute" in a)) return f.prop(a, c, d); var h, i, j = g !== 1 || !f.isXMLDoc(a); c = j && f.attrFix[c] || c, i = f.attrHooks[c], i || (!t.test(c) || typeof d != "boolean" && d !== b && d.toLowerCase() !== c.toLowerCase() ? v && (f.nodeName(a, "form") || u.test(c)) && (i = v) : i = w); if (d !== b) { if (d === null) { f.removeAttr(a, c); return b } if (i && "set" in i && j && (h = i.set(a, d, c)) !== b) return h; a.setAttribute(c, "" + d); return d } if (i && "get" in i && j) return i.get(a, c); h = a.getAttribute(c); return h === null ? b : h }, removeAttr: function (a, b) { var c; a.nodeType === 1 && (b = f.attrFix[b] || b, f.support.getSetAttribute ? a.removeAttribute(b) : (f.attr(a, b, ""), a.removeAttributeNode(a.getAttributeNode(b))), t.test(b) && (c = f.propFix[b] || b) in a && (a[c] = !1)) }, attrHooks: { type: { set: function (a, b) { if (q.test(a.nodeName) && a.parentNode) f.error("type property can't be changed"); else if (!f.support.radioValue && b === "radio" && f.nodeName(a, "input")) { var c = a.value; a.setAttribute("type", b), c && (a.value = c); return b } } }, tabIndex: { get: function (a) { var c = a.getAttributeNode("tabIndex"); return c && c.specified ? parseInt(c.value, 10) : r.test(a.nodeName) || s.test(a.nodeName) && a.href ? 0 : b } } }, propFix: { tabindex: "tabIndex", readonly: "readOnly", "for": "htmlFor", "class": "className", maxlength: "maxLength", cellspacing: "cellSpacing", cellpadding: "cellPadding", rowspan: "rowSpan", colspan: "colSpan", usemap: "useMap", frameborder: "frameBorder", contenteditable: "contentEditable" }, prop: function (a, c, d) { var e = a.nodeType; if (!a || e === 3 || e === 8 || e === 2) return b; var g, h, i = e !== 1 || !f.isXMLDoc(a); c = i && f.propFix[c] || c, h = f.propHooks[c]; return d !== b ? h && "set" in h && (g = h.set(a, d, c)) !== b ? g : a[c] = d : h && "get" in h && (g = h.get(a, c)) !== b ? g : a[c] }, propHooks: {} }), w = { get: function (a, c) { return a[f.propFix[c] || c] ? c.toLowerCase() : b }, set: function (a, b, c) { var d; b === !1 ? f.removeAttr(a, c) : (d = f.propFix[c] || c, d in a && (a[d] = b), a.setAttribute(c, c.toLowerCase())); return c } }, f.attrHooks.value = { get: function (a, b) { if (v && f.nodeName(a, "button")) return v.get(a, b); return a.value }, set: function (a, b, c) { if (v && f.nodeName(a, "button")) return v.set(a, b, c); a.value = b } }, f.support.getSetAttribute || (f.attrFix = f.propFix, v = f.attrHooks.name = f.valHooks.button = { get: function (a, c) { var d; d = a.getAttributeNode(c); return d && d.nodeValue !== "" ? d.nodeValue : b }, set: function (a, b, c) { var d = a.getAttributeNode(c); if (d) { d.nodeValue = b; return b } } }, f.each(["width", "height"], function (a, b) { f.attrHooks[b] = f.extend(f.attrHooks[b], { set: function (a, c) { if (c === "") { a.setAttribute(b, "auto"); return c } } }) })), f.support.hrefNormalized || f.each(["href", "src", "width", "height"], function (a, c) { f.attrHooks[c] = f.extend(f.attrHooks[c], { get: function (a) { var d = a.getAttribute(c, 2); return d === null ? b : d } }) }), f.support.style || (f.attrHooks.style = { get: function (a) { return a.style.cssText.toLowerCase() || b }, set: function (a, b) { return a.style.cssText = "" + b } }), f.support.optSelected || (f.propHooks.selected = f.extend(f.propHooks.selected, { get: function (a) { var b = a.parentNode; b && (b.selectedIndex, b.parentNode && b.parentNode.selectedIndex) } })), f.support.checkOn || f.each(["radio", "checkbox"], function () { f.valHooks[this] = { get: function (a) { return a.getAttribute("value") === null ? "on" : a.value } } }), f.each(["radio", "checkbox"], function () { f.valHooks[this] = f.extend(f.valHooks[this], { set: function (a, b) { if (f.isArray(b)) return a.checked = f.inArray(f(a).val(), b) >= 0 } }) }); var x = Object.prototype.hasOwnProperty, y = /\.(.*)$/, z = /^(?:textarea|input|select)$/i, A = /\./g, B = / /g, C = /[^\w\s.|`]/g, D = function (a) { return a.replace(C, "\\$&") }; f.event = { add: function (a, c, d, e) { if (a.nodeType !== 3 && a.nodeType !== 8) { if (d === !1) d = E; else if (!d) return; var g, h; d.handler && (g = d, d = g.handler), d.guid || (d.guid = f.guid++); var i = f._data(a); if (!i) return; var j = i.events, k = i.handle; j || (i.events = j = {}), k || (i.handle = k = function (a) { return typeof f != "undefined" && (!a || f.event.triggered !== a.type) ? f.event.handle.apply(k.elem, arguments) : b }), k.elem = a, c = c.split(" "); var l, m = 0, n; while (l = c[m++]) { h = g ? f.extend({}, g) : { handler: d, data: e }, l.indexOf(".") > -1 ? (n = l.split("."), l = n.shift(), h.namespace = n.slice(0).sort().join(".")) : (n = [], h.namespace = ""), h.type = l, h.guid || (h.guid = d.guid); var o = j[l], p = f.event.special[l] || {}; if (!o) { o = j[l] = []; if (!p.setup || p.setup.call(a, e, n, k) === !1) a.addEventListener ? a.addEventListener(l, k, !1) : a.attachEvent && a.attachEvent("on" + l, k) } p.add && (p.add.call(a, h), h.handler.guid || (h.handler.guid = d.guid)), o.push(h), f.event.global[l] = !0 } a = null } }, global: {}, remove: function (a, c, d, e) { if (a.nodeType !== 3 && a.nodeType !== 8) { d === !1 && (d = E); var g, h, i, j, k = 0, l, m, n, o, p, q, r, s = f.hasData(a) && f._data(a), t = s && s.events; if (!s || !t) return; c && c.type && (d = c.handler, c = c.type); if (!c || typeof c == "string" && c.charAt(0) === ".") { c = c || ""; for (h in t) f.event.remove(a, h + c); return } c = c.split(" "); while (h = c[k++]) { r = h, q = null, l = h.indexOf(".") < 0, m = [], l || (m = h.split("."), h = m.shift(), n = new RegExp("(^|\\.)" + f.map(m.slice(0).sort(), D).join("\\.(?:.*\\.)?") + "(\\.|$)")), p = t[h]; if (!p) continue; if (!d) { for (j = 0; j < p.length; j++) { q = p[j]; if (l || n.test(q.namespace)) f.event.remove(a, r, q.handler, j), p.splice(j--, 1) } continue } o = f.event.special[h] || {}; for (j = e || 0; j < p.length; j++) { q = p[j]; if (d.guid === q.guid) { if (l || n.test(q.namespace)) e == null && p.splice(j--, 1), o.remove && o.remove.call(a, q); if (e != null) break } } if (p.length === 0 || e != null && p.length === 1) (!o.teardown || o.teardown.call(a, m) === !1) && f.removeEvent(a, h, s.handle), g = null, delete t[h] } if (f.isEmptyObject(t)) { var u = s.handle; u && (u.elem = null), delete s.events, delete s.handle, f.isEmptyObject(s) && f.removeData(a, b, !0) } } }, customEvent: { getData: !0, setData: !0, changeData: !0 }, trigger: function (c, d, e, g) {
        var h = c.type || c, i = [], j; h.indexOf("!") >= 0 && (h = h.slice(0, -1), j = !0), h.indexOf(".") >= 0 && (i = h.split("."), h = i.shift(), i.sort()); if (!!e && !f.event.customEvent[h] || !!f.event.global[h]) {
            c = typeof c == "object" ? c[f.expando] ? c : new f.Event(h, c) : new f.Event(h), c.type = h, c.exclusive = j, c.namespace = i.join("."), c.namespace_re = new RegExp("(^|\\.)" + i.join("\\.(?:.*\\.)?") + "(\\.|$)"); if (g || !e) c.preventDefault(), c.stopPropagation(); if (!e) {
                f.each(f.cache, function () {
                    var a = f.expando, b = this[a]; b && b.events && b.events[h] && f.event.trigger(c, d, b.handle.elem
)
                }); return
            } if (e.nodeType === 3 || e.nodeType === 8) return; c.result = b, c.target = e, d = d ? f.makeArray(d) : [], d.unshift(c); var k = e, l = h.indexOf(":") < 0 ? "on" + h : ""; do { var m = f._data(k, "handle"); c.currentTarget = k, m && m.apply(k, d), l && f.acceptData(k) && k[l] && k[l].apply(k, d) === !1 && (c.result = !1, c.preventDefault()), k = k.parentNode || k.ownerDocument || k === c.target.ownerDocument && a } while (k && !c.isPropagationStopped()); if (!c.isDefaultPrevented()) { var n, o = f.event.special[h] || {}; if ((!o._default || o._default.call(e.ownerDocument, c) === !1) && (h !== "click" || !f.nodeName(e, "a")) && f.acceptData(e)) { try { l && e[h] && (n = e[l], n && (e[l] = null), f.event.triggered = h, e[h]()) } catch (p) { } n && (e[l] = n), f.event.triggered = b } } return c.result
        } 
    }, handle: function (c) { c = f.event.fix(c || a.event); var d = ((f._data(this, "events") || {})[c.type] || []).slice(0), e = !c.exclusive && !c.namespace, g = Array.prototype.slice.call(arguments, 0); g[0] = c, c.currentTarget = this; for (var h = 0, i = d.length; h < i; h++) { var j = d[h]; if (e || c.namespace_re.test(j.namespace)) { c.handler = j.handler, c.data = j.data, c.handleObj = j; var k = j.handler.apply(this, g); k !== b && (c.result = k, k === !1 && (c.preventDefault(), c.stopPropagation())); if (c.isImmediatePropagationStopped()) break } } return c.result }, props: "altKey attrChange attrName bubbles button cancelable charCode clientX clientY ctrlKey currentTarget data detail eventPhase fromElement handler keyCode layerX layerY metaKey newValue offsetX offsetY pageX pageY prevValue relatedNode relatedTarget screenX screenY shiftKey srcElement target toElement view wheelDelta which".split(" "), fix: function (a) { if (a[f.expando]) return a; var d = a; a = f.Event(d); for (var e = this.props.length, g; e; ) g = this.props[--e], a[g] = d[g]; a.target || (a.target = a.srcElement || c), a.target.nodeType === 3 && (a.target = a.target.parentNode), !a.relatedTarget && a.fromElement && (a.relatedTarget = a.fromElement === a.target ? a.toElement : a.fromElement); if (a.pageX == null && a.clientX != null) { var h = a.target.ownerDocument || c, i = h.documentElement, j = h.body; a.pageX = a.clientX + (i && i.scrollLeft || j && j.scrollLeft || 0) - (i && i.clientLeft || j && j.clientLeft || 0), a.pageY = a.clientY + (i && i.scrollTop || j && j.scrollTop || 0) - (i && i.clientTop || j && j.clientTop || 0) } a.which == null && (a.charCode != null || a.keyCode != null) && (a.which = a.charCode != null ? a.charCode : a.keyCode), !a.metaKey && a.ctrlKey && (a.metaKey = a.ctrlKey), !a.which && a.button !== b && (a.which = a.button & 1 ? 1 : a.button & 2 ? 3 : a.button & 4 ? 2 : 0); return a }, guid: 1e8, proxy: f.proxy, special: { ready: { setup: f.bindReady, teardown: f.noop }, live: { add: function (a) { f.event.add(this, O(a.origType, a.selector), f.extend({}, a, { handler: N, guid: a.handler.guid })) }, remove: function (a) { f.event.remove(this, O(a.origType, a.selector), a) } }, beforeunload: { setup: function (a, b, c) { f.isWindow(this) && (this.onbeforeunload = c) }, teardown: function (a, b) { this.onbeforeunload === b && (this.onbeforeunload = null) } }}
    }, f.removeEvent = c.removeEventListener ? function (a, b, c) { a.removeEventListener && a.removeEventListener(b, c, !1) } : function (a, b, c) { a.detachEvent && a.detachEvent("on" + b, c) }, f.Event = function (a, b) { if (!this.preventDefault) return new f.Event(a, b); a && a.type ? (this.originalEvent = a, this.type = a.type, this.isDefaultPrevented = a.defaultPrevented || a.returnValue === !1 || a.getPreventDefault && a.getPreventDefault() ? F : E) : this.type = a, b && f.extend(this, b), this.timeStamp = f.now(), this[f.expando] = !0 }, f.Event.prototype = { preventDefault: function () { this.isDefaultPrevented = F; var a = this.originalEvent; !a || (a.preventDefault ? a.preventDefault() : a.returnValue = !1) }, stopPropagation: function () { this.isPropagationStopped = F; var a = this.originalEvent; !a || (a.stopPropagation && a.stopPropagation(), a.cancelBubble = !0) }, stopImmediatePropagation: function () { this.isImmediatePropagationStopped = F, this.stopPropagation() }, isDefaultPrevented: E, isPropagationStopped: E, isImmediatePropagationStopped: E }; var G = function (a) { var b = a.relatedTarget; a.type = a.data; try { if (b && b !== c && !b.parentNode) return; while (b && b !== this) b = b.parentNode; b !== this && f.event.handle.apply(this, arguments) } catch (d) { } }, H = function (a) { a.type = a.data, f.event.handle.apply(this, arguments) }; f.each({ mouseenter: "mouseover", mouseleave: "mouseout" }, function (a, b) { f.event.special[a] = { setup: function (c) { f.event.add(this, b, c && c.selector ? H : G, a) }, teardown: function (a) { f.event.remove(this, b, a && a.selector ? H : G) } } }), f.support.submitBubbles || (f.event.special.submit = { setup: function (a, b) { if (!f.nodeName(this, "form")) f.event.add(this, "click.specialSubmit", function (a) { var b = a.target, c = b.type; (c === "submit" || c === "image") && f(b).closest("form").length && L("submit", this, arguments) }), f.event.add(this, "keypress.specialSubmit", function (a) { var b = a.target, c = b.type; (c === "text" || c === "password") && f(b).closest("form").length && a.keyCode === 13 && L("submit", this, arguments) }); else return !1 }, teardown: function (a) { f.event.remove(this, ".specialSubmit") } }); if (!f.support.changeBubbles) { var I, J = function (a) { var b = a.type, c = a.value; b === "radio" || b === "checkbox" ? c = a.checked : b === "select-multiple" ? c = a.selectedIndex > -1 ? f.map(a.options, function (a) { return a.selected }).join("-") : "" : f.nodeName(a, "select") && (c = a.selectedIndex); return c }, K = function (c) { var d = c.target, e, g; if (!!z.test(d.nodeName) && !d.readOnly) { e = f._data(d, "_change_data"), g = J(d), (c.type !== "focusout" || d.type !== "radio") && f._data(d, "_change_data", g); if (e === b || g === e) return; if (e != null || g) c.type = "change", c.liveFired = b, f.event.trigger(c, arguments[1], d) } }; f.event.special.change = { filters: { focusout: K, beforedeactivate: K, click: function (a) { var b = a.target, c = f.nodeName(b, "input") ? b.type : ""; (c === "radio" || c === "checkbox" || f.nodeName(b, "select")) && K.call(this, a) }, keydown: function (a) { var b = a.target, c = f.nodeName(b, "input") ? b.type : ""; (a.keyCode === 13 && !f.nodeName(b, "textarea") || a.keyCode === 32 && (c === "checkbox" || c === "radio") || c === "select-multiple") && K.call(this, a) }, beforeactivate: function (a) { var b = a.target; f._data(b, "_change_data", J(b)) } }, setup: function (a, b) { if (this.type === "file") return !1; for (var c in I) f.event.add(this, c + ".specialChange", I[c]); return z.test(this.nodeName) }, teardown: function (a) { f.event.remove(this, ".specialChange"); return z.test(this.nodeName) } }, I = f.event.special.change.filters, I.focus = I.beforeactivate } f.support.focusinBubbles || f.each({ focus: "focusin", blur: "focusout" }, function (a, b) { function e(a) { var c = f.event.fix(a); c.type = b, c.originalEvent = {}, f.event.trigger(c, null, c.target), c.isDefaultPrevented() && a.preventDefault() } var d = 0; f.event.special[b] = { setup: function () { d++ === 0 && c.addEventListener(a, e, !0) }, teardown: function () { --d === 0 && c.removeEventListener(a, e, !0) } } }), f.each(["bind", "one"], function (a, c) { f.fn[c] = function (a, d, e) { var g; if (typeof a == "object") { for (var h in a) this[c](h, d, a[h], e); return this } if (arguments.length === 2 || d === !1) e = d, d = b; c === "one" ? (g = function (a) { f(this).unbind(a, g); return e.apply(this, arguments) }, g.guid = e.guid || f.guid++) : g = e; if (a === "unload" && c !== "one") this.one(a, d, e); else for (var i = 0, j = this.length; i < j; i++) f.event.add(this[i], a, g, d); return this } }), f.fn.extend({ unbind: function (a, b) { if (typeof a == "object" && !a.preventDefault) for (var c in a) this.unbind(c, a[c]); else for (var d = 0, e = this.length; d < e; d++) f.event.remove(this[d], a, b); return this }, delegate: function (a, b, c, d) { return this.live(b, c, d, a) }, undelegate: function (a, b, c) { return arguments.length === 0 ? this.unbind("live") : this.die(b, null, c, a) }, trigger: function (a, b) { return this.each(function () { f.event.trigger(a, b, this) }) }, triggerHandler: function (a, b) { if (this[0]) return f.event.trigger(a, b, this[0], !0) }, toggle: function (a) { var b = arguments, c = a.guid || f.guid++, d = 0, e = function (c) { var e = (f.data(this, "lastToggle" + a.guid) || 0) % d; f.data(this, "lastToggle" + a.guid, e + 1), c.preventDefault(); return b[e].apply(this, arguments) || !1 }; e.guid = c; while (d < b.length) b[d++].guid = c; return this.click(e) }, hover: function (a, b) { return this.mouseenter(a).mouseleave(b || a) } }); var M = { focus: "focusin", blur: "focusout", mouseenter: "mouseover", mouseleave: "mouseout" }; f.each(["live", "die"], function (a, c) { f.fn[c] = function (a, d, e, g) { var h, i = 0, j, k, l, m = g || this.selector, n = g ? this : f(this.context); if (typeof a == "object" && !a.preventDefault) { for (var o in a) n[c](o, d, a[o], m); return this } if (c === "die" && !a && g && g.charAt(0) === ".") { n.unbind(g); return this } if (d === !1 || f.isFunction(d)) e = d || E, d = b; a = (a || "").split(" "); while ((h = a[i++]) != null) { j = y.exec(h), k = "", j && (k = j[0], h = h.replace(y, "")); if (h === "hover") { a.push("mouseenter" + k, "mouseleave" + k); continue } l = h, M[h] ? (a.push(M[h] + k), h = h + k) : h = (M[h] || h) + k; if (c === "live") for (var p = 0, q = n.length; p < q; p++) f.event.add(n[p], "live." + O(h, m), { data: d, selector: m, handler: e, origType: h, origHandler: e, preType: l }); else n.unbind("live." + O(h, m), e) } return this } }), f.each("blur focus focusin focusout load resize scroll unload click dblclick mousedown mouseup mousemove mouseover mouseout mouseenter mouseleave change select submit keydown keypress keyup error".split(" "), function (a, b) { f.fn[b] = function (a, c) { c == null && (c = a, a = null); return arguments.length > 0 ? this.bind(b, a, c) : this.trigger(b) }, f.attrFn && (f.attrFn[b] = !0) }), function () { function u(a, b, c, d, e, f) { for (var g = 0, h = d.length; g < h; g++) { var i = d[g]; if (i) { var j = !1; i = i[a]; while (i) { if (i.sizcache === c) { j = d[i.sizset]; break } if (i.nodeType === 1) { f || (i.sizcache = c, i.sizset = g); if (typeof b != "string") { if (i === b) { j = !0; break } } else if (k.filter(b, [i]).length > 0) { j = i; break } } i = i[a] } d[g] = j } } } function t(a, b, c, d, e, f) { for (var g = 0, h = d.length; g < h; g++) { var i = d[g]; if (i) { var j = !1; i = i[a]; while (i) { if (i.sizcache === c) { j = d[i.sizset]; break } i.nodeType === 1 && !f && (i.sizcache = c, i.sizset = g); if (i.nodeName.toLowerCase() === b) { j = i; break } i = i[a] } d[g] = j } } } var a = /((?:\((?:\([^()]+\)|[^()]+)+\)|\[(?:\[[^\[\]]*\]|['"][^'"]*['"]|[^\[\]'"]+)+\]|\\.|[^ >+~,(\[\\]+)+|[>+~])(\s*,\s*)?((?:.|\r|\n)*)/g, d = 0, e = Object.prototype.toString, g = !1, h = !0, i = /\\/g, j = /\W/; [0, 0].sort(function () { h = !1; return 0 }); var k = function (b, d, f, g) { f = f || [], d = d || c; var h = d; if (d.nodeType !== 1 && d.nodeType !== 9) return []; if (!b || typeof b != "string") return f; var i, j, n, o, q, r, s, t, u = !0, w = k.isXML(d), x = [], y = b; do { a.exec(""), i = a.exec(y); if (i) { y = i[3], x.push(i[1]); if (i[2]) { o = i[3]; break } } } while (i); if (x.length > 1 && m.exec(b)) if (x.length === 2 && l.relative[x[0]]) j = v(x[0] + x[1], d); else { j = l.relative[x[0]] ? [d] : k(x.shift(), d); while (x.length) b = x.shift(), l.relative[b] && (b += x.shift()), j = v(b, j) } else { !g && x.length > 1 && d.nodeType === 9 && !w && l.match.ID.test(x[0]) && !l.match.ID.test(x[x.length - 1]) && (q = k.find(x.shift(), d, w), d = q.expr ? k.filter(q.expr, q.set)[0] : q.set[0]); if (d) { q = g ? { expr: x.pop(), set: p(g)} : k.find(x.pop(), x.length === 1 && (x[0] === "~" || x[0] === "+") && d.parentNode ? d.parentNode : d, w), j = q.expr ? k.filter(q.expr, q.set) : q.set, x.length > 0 ? n = p(j) : u = !1; while (x.length) r = x.pop(), s = r, l.relative[r] ? s = x.pop() : r = "", s == null && (s = d), l.relative[r](n, s, w) } else n = x = [] } n || (n = j), n || k.error(r || b); if (e.call(n) === "[object Array]") if (!u) f.push.apply(f, n); else if (d && d.nodeType === 1) for (t = 0; n[t] != null; t++) n[t] && (n[t] === !0 || n[t].nodeType === 1 && k.contains(d, n[t])) && f.push(j[t]); else for (t = 0; n[t] != null; t++) n[t] && n[t].nodeType === 1 && f.push(j[t]); else p(n, f); o && (k(o, h, f, g), k.uniqueSort(f)); return f }; k.uniqueSort = function (a) { if (r) { g = h, a.sort(r); if (g) for (var b = 1; b < a.length; b++) a[b] === a[b - 1] && a.splice(b--, 1) } return a }, k.matches = function (a, b) { return k(a, null, null, b) }, k.matchesSelector = function (a, b) { return k(b, null, null, [a]).length > 0 }, k.find = function (a, b, c) { var d; if (!a) return []; for (var e = 0, f = l.order.length; e < f; e++) { var g, h = l.order[e]; if (g = l.leftMatch[h].exec(a)) { var j = g[1]; g.splice(1, 1); if (j.substr(j.length - 1) !== "\\") { g[1] = (g[1] || "").replace(i, ""), d = l.find[h](g, b, c); if (d != null) { a = a.replace(l.match[h], ""); break } } } } d || (d = typeof b.getElementsByTagName != "undefined" ? b.getElementsByTagName("*") : []); return { set: d, expr: a} }, k.filter = function (a, c, d, e) { var f, g, h = a, i = [], j = c, m = c && c[0] && k.isXML(c[0]); while (a && c.length) { for (var n in l.filter) if ((f = l.leftMatch[n].exec(a)) != null && f[2]) { var o, p, q = l.filter[n], r = f[1]; g = !1, f.splice(1, 1); if (r.substr(r.length - 1) === "\\") continue; j === i && (i = []); if (l.preFilter[n]) { f = l.preFilter[n](f, j, d, i, e, m); if (!f) g = o = !0; else if (f === !0) continue } if (f) for (var s = 0; (p = j[s]) != null; s++) if (p) { o = q(p, f, s, j); var t = e ^ !!o; d && o != null ? t ? g = !0 : j[s] = !1 : t && (i.push(p), g = !0) } if (o !== b) { d || (j = i), a = a.replace(l.match[n], ""); if (!g) return []; break } } if (a === h) if (g == null) k.error(a); else break; h = a } return j }, k.error = function (a) { throw "Syntax error, unrecognized expression: " + a }; var l = k.selectors = { order: ["ID", "NAME", "TAG"], match: { ID: /#((?:[\w\u00c0-\uFFFF\-]|\\.)+)/, CLASS: /\.((?:[\w\u00c0-\uFFFF\-]|\\.)+)/, NAME: /\[name=['"]*((?:[\w\u00c0-\uFFFF\-]|\\.)+)['"]*\]/, ATTR: /\[\s*((?:[\w\u00c0-\uFFFF\-]|\\.)+)\s*(?:(\S?=)\s*(?:(['"])(.*?)\3|(#?(?:[\w\u00c0-\uFFFF\-]|\\.)*)|)|)\s*\]/, TAG: /^((?:[\w\u00c0-\uFFFF\*\-]|\\.)+)/, CHILD: /:(only|nth|last|first)-child(?:\(\s*(even|odd|(?:[+\-]?\d+|(?:[+\-]?\d*)?n\s*(?:[+\-]\s*\d+)?))\s*\))?/, POS: /:(nth|eq|gt|lt|first|last|even|odd)(?:\((\d*)\))?(?=[^\-]|$)/, PSEUDO: /:((?:[\w\u00c0-\uFFFF\-]|\\.)+)(?:\((['"]?)((?:\([^\)]+\)|[^\(\)]*)+)\2\))?/ }, leftMatch: {}, attrMap: { "class": "className", "for": "htmlFor" }, attrHandle: { href: function (a) { return a.getAttribute("href") }, type: function (a) { return a.getAttribute("type") } }, relative: { "+": function (a, b) { var c = typeof b == "string", d = c && !j.test(b), e = c && !d; d && (b = b.toLowerCase()); for (var f = 0, g = a.length, h; f < g; f++) if (h = a[f]) { while ((h = h.previousSibling) && h.nodeType !== 1); a[f] = e || h && h.nodeName.toLowerCase() === b ? h || !1 : h === b } e && k.filter(b, a, !0) }, ">": function (a, b) { var c, d = typeof b == "string", e = 0, f = a.length; if (d && !j.test(b)) { b = b.toLowerCase(); for (; e < f; e++) { c = a[e]; if (c) { var g = c.parentNode; a[e] = g.nodeName.toLowerCase() === b ? g : !1 } } } else { for (; e < f; e++) c = a[e], c && (a[e] = d ? c.parentNode : c.parentNode === b); d && k.filter(b, a, !0) } }, "": function (a, b, c) { var e, f = d++, g = u; typeof b == "string" && !j.test(b) && (b = b.toLowerCase(), e = b, g = t), g("parentNode", b, f, a, e, c) }, "~": function (a, b, c) { var e, f = d++, g = u; typeof b == "string" && !j.test(b) && (b = b.toLowerCase(), e = b, g = t), g("previousSibling", b, f, a, e, c) } }, find: { ID: function (a, b, c) { if (typeof b.getElementById != "undefined" && !c) { var d = b.getElementById(a[1]); return d && d.parentNode ? [d] : [] } }, NAME: function (a, b) { if (typeof b.getElementsByName != "undefined") { var c = [], d = b.getElementsByName(a[1]); for (var e = 0, f = d.length; e < f; e++) d[e].getAttribute("name") === a[1] && c.push(d[e]); return c.length === 0 ? null : c } }, TAG: function (a, b) { if (typeof b.getElementsByTagName != "undefined") return b.getElementsByTagName(a[1]) } }, preFilter: { CLASS: function (a, b, c, d, e, f) { a = " " + a[1].replace(i, "") + " "; if (f) return a; for (var g = 0, h; (h = b[g]) != null; g++) h && (e ^ (h.className && (" " + h.className + " ").replace(/[\t\n\r]/g, " ").indexOf(a) >= 0) ? c || d.push(h) : c && (b[g] = !1)); return !1 }, ID: function (a) { return a[1].replace(i, "") }, TAG: function (a, b) { return a[1].replace(i, "").toLowerCase() }, CHILD: function (a) { if (a[1] === "nth") { a[2] || k.error(a[0]), a[2] = a[2].replace(/^\+|\s*/g, ""); var b = /(-?)(\d*)(?:n([+\-]?\d*))?/.exec(a[2] === "even" && "2n" || a[2] === "odd" && "2n+1" || !/\D/.test(a[2]) && "0n+" + a[2] || a[2]); a[2] = b[1] + (b[2] || 1) - 0, a[3] = b[3] - 0 } else a[2] && k.error(a[0]); a[0] = d++; return a }, ATTR: function (a, b, c, d, e, f) { var g = a[1] = a[1].replace(i, ""); !f && l.attrMap[g] && (a[1] = l.attrMap[g]), a[4] = (a[4] || a[5] || "").replace(i, ""), a[2] === "~=" && (a[4] = " " + a[4] + " "); return a }, PSEUDO: function (b, c, d, e, f) { if (b[1] === "not") if ((a.exec(b[3]) || "").length > 1 || /^\w/.test(b[3])) b[3] = k(b[3], null, null, c); else { var g = k.filter(b[3], c, d, !0 ^ f); d || e.push.apply(e, g); return !1 } else if (l.match.POS.test(b[0]) || l.match.CHILD.test(b[0])) return !0; return b }, POS: function (a) { a.unshift(!0); return a } }, filters: { enabled: function (a) { return a.disabled === !1 && a.type !== "hidden" }, disabled: function (a) { return a.disabled === !0 }, checked: function (a) { return a.checked === !0 }, selected: function (a) { a.parentNode && a.parentNode.selectedIndex; return a.selected === !0 }, parent: function (a) { return !!a.firstChild }, empty: function (a) { return !a.firstChild }, has: function (a, b, c) { return !!k(c[3], a).length }, header: function (a) { return /h\d/i.test(a.nodeName) }, text: function (a) { var b = a.getAttribute("type"), c = a.type; return a.nodeName.toLowerCase() === "input" && "text" === c && (b === c || b === null) }, radio: function (a) { return a.nodeName.toLowerCase() === "input" && "radio" === a.type }, checkbox: function (a) { return a.nodeName.toLowerCase() === "input" && "checkbox" === a.type }, file: function (a) { return a.nodeName.toLowerCase() === "input" && "file" === a.type }, password: function (a) { return a.nodeName.toLowerCase() === "input" && "password" === a.type }, submit: function (a) { var b = a.nodeName.toLowerCase(); return (b === "input" || b === "button") && "submit" === a.type }, image: function (a) { return a.nodeName.toLowerCase() === "input" && "image" === a.type }, reset: function (a) { var b = a.nodeName.toLowerCase(); return (b === "input" || b === "button") && "reset" === a.type }, button: function (a) { var b = a.nodeName.toLowerCase(); return b === "input" && "button" === a.type || b === "button" }, input: function (a) { return /input|select|textarea|button/i.test(a.nodeName) }, focus: function (a) { return a === a.ownerDocument.activeElement } }, setFilters: { first: function (a, b) { return b === 0 }, last: function (a, b, c, d) { return b === d.length - 1 }, even: function (a, b) { return b % 2 === 0 }, odd: function (a, b) { return b % 2 === 1 }, lt: function (a, b, c) { return b < c[3] - 0 }, gt: function (a, b, c) { return b > c[3] - 0 }, nth: function (a, b, c) { return c[3] - 0 === b }, eq: function (a, b, c) { return c[3] - 0 === b } }, filter: { PSEUDO: function (a, b, c, d) { var e = b[1], f = l.filters[e]; if (f) return f(a, c, b, d); if (e === "contains") return (a.textContent || a.innerText || k.getText([a]) || "").indexOf(b[3]) >= 0; if (e === "not") { var g = b[3]; for (var h = 0, i = g.length; h < i; h++) if (g[h] === a) return !1; return !0 } k.error(e) }, CHILD: function (a, b) { var c = b[1], d = a; switch (c) { case "only": case "first": while (d = d.previousSibling) if (d.nodeType === 1) return !1; if (c === "first") return !0; d = a; case "last": while (d = d.nextSibling) if (d.nodeType === 1) return !1; return !0; case "nth": var e = b[2], f = b[3]; if (e === 1 && f === 0) return !0; var g = b[0], h = a.parentNode; if (h && (h.sizcache !== g || !a.nodeIndex)) { var i = 0; for (d = h.firstChild; d; d = d.nextSibling) d.nodeType === 1 && (d.nodeIndex = ++i); h.sizcache = g } var j = a.nodeIndex - f; return e === 0 ? j === 0 : j % e === 0 && j / e >= 0 } }, ID: function (a, b) { return a.nodeType === 1 && a.getAttribute("id") === b }, TAG: function (a, b) { return b === "*" && a.nodeType === 1 || a.nodeName.toLowerCase() === b }, CLASS: function (a, b) { return (" " + (a.className || a.getAttribute("class")) + " ").indexOf(b) > -1 }, ATTR: function (a, b) { var c = b[1], d = l.attrHandle[c] ? l.attrHandle[c](a) : a[c] != null ? a[c] : a.getAttribute(c), e = d + "", f = b[2], g = b[4]; return d == null ? f === "!=" : f === "=" ? e === g : f === "*=" ? e.indexOf(g) >= 0 : f === "~=" ? (" " + e + " ").indexOf(g) >= 0 : g ? f === "!=" ? e !== g : f === "^=" ? e.indexOf(g) === 0 : f === "$=" ? e.substr(e.length - g.length) === g : f === "|=" ? e === g || e.substr(0, g.length + 1) === g + "-" : !1 : e && d !== !1 }, POS: function (a, b, c, d) { var e = b[2], f = l.setFilters[e]; if (f) return f(a, c, b, d) } } }, m = l.match.POS, n = function (a, b) { return "\\" + (b - 0 + 1) }; for (var o in l.match) l.match[o] = new RegExp(l.match[o].source + /(?![^\[]*\])(?![^\(]*\))/.source), l.leftMatch[o] = new RegExp(/(^(?:.|\r|\n)*?)/.source + l.match[o].source.replace(/\\(\d+)/g, n)); var p = function (a, b) { a = Array.prototype.slice.call(a, 0); if (b) { b.push.apply(b, a); return b } return a }; try { Array.prototype.slice.call(c.documentElement.childNodes, 0)[0].nodeType } catch (q) { p = function (a, b) { var c = 0, d = b || []; if (e.call(a) === "[object Array]") Array.prototype.push.apply(d, a); else if (typeof a.length == "number") for (var f = a.length; c < f; c++) d.push(a[c]); else for (; a[c]; c++) d.push(a[c]); return d } } var r, s; c.documentElement.compareDocumentPosition ? r = function (a, b) { if (a === b) { g = !0; return 0 } if (!a.compareDocumentPosition || !b.compareDocumentPosition) return a.compareDocumentPosition ? -1 : 1; return a.compareDocumentPosition(b) & 4 ? -1 : 1 } : (r = function (a, b) { if (a === b) { g = !0; return 0 } if (a.sourceIndex && b.sourceIndex) return a.sourceIndex - b.sourceIndex; var c, d, e = [], f = [], h = a.parentNode, i = b.parentNode, j = h; if (h === i) return s(a, b); if (!h) return -1; if (!i) return 1; while (j) e.unshift(j), j = j.parentNode; j = i; while (j) f.unshift(j), j = j.parentNode; c = e.length, d = f.length; for (var k = 0; k < c && k < d; k++) if (e[k] !== f[k]) return s(e[k], f[k]); return k === c ? s(a, f[k], -1) : s(e[k], b, 1) }, s = function (a, b, c) { if (a === b) return c; var d = a.nextSibling; while (d) { if (d === b) return -1; d = d.nextSibling } return 1 }), k.getText = function (a) { var b = "", c; for (var d = 0; a[d]; d++) c = a[d], c.nodeType === 3 || c.nodeType === 4 ? b += c.nodeValue : c.nodeType !== 8 && (b += k.getText(c.childNodes)); return b }, function () { var a = c.createElement("div"), d = "script" + (new Date).getTime(), e = c.documentElement; a.innerHTML = "<a name='" + d + "'/>", e.insertBefore(a, e.firstChild), c.getElementById(d) && (l.find.ID = function (a, c, d) { if (typeof c.getElementById != "undefined" && !d) { var e = c.getElementById(a[1]); return e ? e.id === a[1] || typeof e.getAttributeNode != "undefined" && e.getAttributeNode("id").nodeValue === a[1] ? [e] : b : [] } }, l.filter.ID = function (a, b) { var c = typeof a.getAttributeNode != "undefined" && a.getAttributeNode("id"); return a.nodeType === 1 && c && c.nodeValue === b }), e.removeChild(a), e = a = null } (), function () { var a = c.createElement("div"); a.appendChild(c.createComment("")), a.getElementsByTagName("*").length > 0 && (l.find.TAG = function (a, b) { var c = b.getElementsByTagName(a[1]); if (a[1] === "*") { var d = []; for (var e = 0; c[e]; e++) c[e].nodeType === 1 && d.push(c[e]); c = d } return c }), a.innerHTML = "<a href='#'></a>", a.firstChild && typeof a.firstChild.getAttribute != "undefined" && a.firstChild.getAttribute("href") !== "#" && (l.attrHandle.href = function (a) { return a.getAttribute("href", 2) }), a = null } (), c.querySelectorAll && function () { var a = k, b = c.createElement("div"), d = "__sizzle__"; b.innerHTML = "<p class='TEST'></p>"; if (!b.querySelectorAll || b.querySelectorAll(".TEST").length !== 0) { k = function (b, e, f, g) { e = e || c; if (!g && !k.isXML(e)) { var h = /^(\w+$)|^\.([\w\-]+$)|^#([\w\-]+$)/.exec(b); if (h && (e.nodeType === 1 || e.nodeType === 9)) { if (h[1]) return p(e.getElementsByTagName(b), f); if (h[2] && l.find.CLASS && e.getElementsByClassName) return p(e.getElementsByClassName(h[2]), f) } if (e.nodeType === 9) { if (b === "body" && e.body) return p([e.body], f); if (h && h[3]) { var i = e.getElementById(h[3]); if (!i || !i.parentNode) return p([], f); if (i.id === h[3]) return p([i], f) } try { return p(e.querySelectorAll(b), f) } catch (j) { } } else if (e.nodeType === 1 && e.nodeName.toLowerCase() !== "object") { var m = e, n = e.getAttribute("id"), o = n || d, q = e.parentNode, r = /^\s*[+~]/.test(b); n ? o = o.replace(/'/g, "\\$&") : e.setAttribute("id", o), r && q && (e = e.parentNode); try { if (!r || q) return p(e.querySelectorAll("[id='" + o + "'] " + b), f) } catch (s) { } finally { n || m.removeAttribute("id") } } } return a(b, e, f, g) }; for (var e in a) k[e] = a[e]; b = null } } (), function () { var a = c.documentElement, b = a.matchesSelector || a.mozMatchesSelector || a.webkitMatchesSelector || a.msMatchesSelector; if (b) { var d = !b.call(c.createElement("div"), "div"), e = !1; try { b.call(c.documentElement, "[test!='']:sizzle") } catch (f) { e = !0 } k.matchesSelector = function (a, c) { c = c.replace(/\=\s*([^'"\]]*)\s*\]/g, "='$1']"); if (!k.isXML(a)) try { if (e || !l.match.PSEUDO.test(c) && !/!=/.test(c)) { var f = b.call(a, c); if (f || !d || a.document && a.document.nodeType !== 11) return f } } catch (g) { } return k(c, null, null, [a]).length > 0 } } } (), function () { var a = c.createElement("div"); a.innerHTML = "<div class='test e'></div><div class='test'></div>"; if (!!a.getElementsByClassName && a.getElementsByClassName("e").length !== 0) { a.lastChild.className = "e"; if (a.getElementsByClassName("e").length === 1) return; l.order.splice(1, 0, "CLASS"), l.find.CLASS = function (a, b, c) { if (typeof b.getElementsByClassName != "undefined" && !c) return b.getElementsByClassName(a[1]) }, a = null } } (), c.documentElement.contains ? k.contains = function (a, b) { return a !== b && (a.contains ? a.contains(b) : !0) } : c.documentElement.compareDocumentPosition ? k.contains = function (a, b) { return !!(a.compareDocumentPosition(b) & 16) } : k.contains = function () { return !1 }, k.isXML = function (a) { var b = (a ? a.ownerDocument || a : 0).documentElement; return b ? b.nodeName !== "HTML" : !1 }; var v = function (a, b) { var c, d = [], e = "", f = b.nodeType ? [b] : b; while (c = l.match.PSEUDO.exec(a)) e += c[0], a = a.replace(l.match.PSEUDO, ""); a = l.relative[a] ? a + "*" : a; for (var g = 0, h = f.length; g < h; g++) k(a, f[g], d); return k.filter(e, d) }; f.find = k, f.expr = k.selectors, f.expr[":"] = f.expr.filters, f.unique = k.uniqueSort, f.text = k.getText, f.isXMLDoc = k.isXML, f.contains = k.contains } (); var P = /Until$/, Q = /^(?:parents|prevUntil|prevAll)/, R = /,/, S = /^.[^:#\[\.,]*$/, T = Array.prototype.slice, U = f.expr.match.POS, V = { children: !0, contents: !0, next: !0, prev: !0 }; f.fn.extend({ find: function (a) { var b = this, c, d; if (typeof a != "string") return f(a).filter(function () { for (c = 0, d = b.length; c < d; c++) if (f.contains(b[c], this)) return !0 }); var e = this.pushStack("", "find", a), g, h, i; for (c = 0, d = this.length; c < d; c++) { g = e.length, f.find(a, this[c], e); if (c > 0) for (h = g; h < e.length; h++) for (i = 0; i < g; i++) if (e[i] === e[h]) { e.splice(h--, 1); break } } return e }, has: function (a) { var b = f(a); return this.filter(function () { for (var a = 0, c = b.length; a < c; a++) if (f.contains(this, b[a])) return !0 }) }, not: function (a) { return this.pushStack(X(this, a, !1), "not", a) }, filter: function (a) { return this.pushStack(X(this, a, !0), "filter", a) }, is: function (a) { return !!a && (typeof a == "string" ? f.filter(a, this).length > 0 : this.filter(a).length > 0) }, closest: function (a, b) { var c = [], d, e, g = this[0]; if (f.isArray(a)) { var h, i, j = {}, k = 1; if (g && a.length) { for (d = 0, e = a.length; d < e; d++) i = a[d], j[i] || (j[i] = U.test(i) ? f(i, b || this.context) : i); while (g && g.ownerDocument && g !== b) { for (i in j) h = j[i], (h.jquery ? h.index(g) > -1 : f(g).is(h)) && c.push({ selector: i, elem: g, level: k }); g = g.parentNode, k++ } } return c } var l = U.test(a) || typeof a != "string" ? f(a, b || this.context) : 0; for (d = 0, e = this.length; d < e; d++) { g = this[d]; while (g) { if (l ? l.index(g) > -1 : f.find.matchesSelector(g, a)) { c.push(g); break } g = g.parentNode; if (!g || !g.ownerDocument || g === b || g.nodeType === 11) break } } c = c.length > 1 ? f.unique(c) : c; return this.pushStack(c, "closest", a) }, index: function (a) { if (!a || typeof a == "string") return f.inArray(this[0], a ? f(a) : this.parent().children()); return f.inArray(a.jquery ? a[0] : a, this) }, add: function (a, b) { var c = typeof a == "string" ? f(a, b) : f.makeArray(a && a.nodeType ? [a] : a), d = f.merge(this.get(), c); return this.pushStack(W(c[0]) || W(d[0]) ? d : f.unique(d)) }, andSelf: function () { return this.add(this.prevObject) } }), f.each({ parent: function (a) { var b = a.parentNode; return b && b.nodeType !== 11 ? b : null }, parents: function (a) { return f.dir(a, "parentNode") }, parentsUntil: function (a, b, c) { return f.dir(a, "parentNode", c) }, next: function (a) { return f.nth(a, 2, "nextSibling") }, prev: function (a) { return f.nth(a, 2, "previousSibling") }, nextAll: function (a) { return f.dir(a, "nextSibling") }, prevAll: function (a) { return f.dir(a, "previousSibling") }, nextUntil: function (a, b, c) { return f.dir(a, "nextSibling", c) }, prevUntil: function (a, b, c) { return f.dir(a, "previousSibling", c) }, siblings: function (a) { return f.sibling(a.parentNode.firstChild, a) }, children: function (a) { return f.sibling(a.firstChild) }, contents: function (a) { return f.nodeName(a, "iframe") ? a.contentDocument || a.contentWindow.document : f.makeArray(a.childNodes) } }, function (a, b) { f.fn[a] = function (c, d) { var e = f.map(this, b, c), g = T.call(arguments); P.test(a) || (d = c), d && typeof d == "string" && (e = f.filter(d, e)), e = this.length > 1 && !V[a] ? f.unique(e) : e, (this.length > 1 || R.test(d)) && Q.test(a) && (e = e.reverse()); return this.pushStack(e, a, g.join(",")) } }), f.extend({ filter: function (a, b, c) { c && (a = ":not(" + a + ")"); return b.length === 1 ? f.find.matchesSelector(b[0], a) ? [b[0]] : [] : f.find.matches(a, b) }, dir: function (a, c, d) { var e = [], g = a[c]; while (g && g.nodeType !== 9 && (d === b || g.nodeType !== 1 || !f(g).is(d))) g.nodeType === 1 && e.push(g), g = g[c]; return e }, nth: function (a, b, c, d) { b = b || 1; var e = 0; for (; a; a = a[c]) if (a.nodeType === 1 && ++e === b) break; return a }, sibling: function (a, b) { var c = []; for (; a; a = a.nextSibling) a.nodeType === 1 && a !== b && c.push(a); return c } }); var Y = / jQuery\d+="(?:\d+|null)"/g, Z = /^\s+/, $ = /<(?!area|br|col|embed|hr|img|input|link|meta|param)(([\w:]+)[^>]*)\/>/ig, _ = /<([\w:]+)/, ba = /<tbody/i, bb = /<|&#?\w+;/, bc = /<(?:script|object|embed|option|style)/i, bd = /checked\s*(?:[^=]|=\s*.checked.)/i, be = /\/(java|ecma)script/i, bf = /^\s*<!(?:\[CDATA\[|\-\-)/, bg = { option: [1, "<select multiple='multiple'>", "</select>"], legend: [1, "<fieldset>", "</fieldset>"], thead: [1, "<table>", "</table>"], tr: [2, "<table><tbody>", "</tbody></table>"], td: [3, "<table><tbody><tr>", "</tr></tbody></table>"], col: [2, "<table><tbody></tbody><colgroup>", "</colgroup></table>"], area: [1, "<map>", "</map>"], _default: [0, "", ""] }; bg.optgroup = bg.option, bg.tbody = bg.tfoot = bg.colgroup = bg.caption = bg.thead, bg.th = bg.td, f.support.htmlSerialize || (bg._default = [1, "div<div>", "</div>"]), f.fn.extend({ text: function (a) { if (f.isFunction(a)) return this.each(function (b) { var c = f(this); c.text(a.call(this, b, c.text())) }); if (typeof a != "object" && a !== b) return this.empty().append((this[0] && this[0].ownerDocument || c).createTextNode(a)); return f.text(this) }, wrapAll: function (a) { if (f.isFunction(a)) return this.each(function (b) { f(this).wrapAll(a.call(this, b)) }); if (this[0]) { var b = f(a, this[0].ownerDocument).eq(0).clone(!0); this[0].parentNode && b.insertBefore(this[0]), b.map(function () { var a = this; while (a.firstChild && a.firstChild.nodeType === 1) a = a.firstChild; return a }).append(this) } return this }, wrapInner: function (a) { if (f.isFunction(a)) return this.each(function (b) { f(this).wrapInner(a.call(this, b)) }); return this.each(function () { var b = f(this), c = b.contents(); c.length ? c.wrapAll(a) : b.append(a) }) }, wrap: function (a) { return this.each(function () { f(this).wrapAll(a) }) }, unwrap: function () { return this.parent().each(function () { f.nodeName(this, "body") || f(this).replaceWith(this.childNodes) }).end() }, append: function () { return this.domManip(arguments, !0, function (a) { this.nodeType === 1 && this.appendChild(a) }) }, prepend: function () { return this.domManip(arguments, !0, function (a) { this.nodeType === 1 && this.insertBefore(a, this.firstChild) }) }, before: function () { if (this[0] && this[0].parentNode) return this.domManip(arguments, !1, function (a) { this.parentNode.insertBefore(a, this) }); if (arguments.length) { var a = f(arguments[0]); a.push.apply(a, this.toArray()); return this.pushStack(a, "before", arguments) } }, after: function () { if (this[0] && this[0].parentNode) return this.domManip(arguments, !1, function (a) { this.parentNode.insertBefore(a, this.nextSibling) }); if (arguments.length) { var a = this.pushStack(this, "after", arguments); a.push.apply(a, f(arguments[0]).toArray()); return a } }, remove: function (a, b) { for (var c = 0, d; (d = this[c]) != null; c++) if (!a || f.filter(a, [d]).length) !b && d.nodeType === 1 && (f.cleanData(d.getElementsByTagName("*")), f.cleanData([d])), d.parentNode && d.parentNode.removeChild(d); return this }, empty: function () { for (var a = 0, b; (b = this[a]) != null; a++) { b.nodeType === 1 && f.cleanData(b.getElementsByTagName("*")); while (b.firstChild) b.removeChild(b.firstChild) } return this }, clone: function (a, b) { a = a == null ? !1 : a, b = b == null ? a : b; return this.map(function () { return f.clone(this, a, b) }) }, html: function (a) { if (a === b) return this[0] && this[0].nodeType === 1 ? this[0].innerHTML.replace(Y, "") : null; if (typeof a == "string" && !bc.test(a) && (f.support.leadingWhitespace || !Z.test(a)) && !bg[(_.exec(a) || ["", ""])[1].toLowerCase()]) { a = a.replace($, "<$1></$2>"); try { for (var c = 0, d = this.length; c < d; c++) this[c].nodeType === 1 && (f.cleanData(this[c].getElementsByTagName("*")), this[c].innerHTML = a) } catch (e) { this.empty().append(a) } } else f.isFunction(a) ? this.each(function (b) { var c = f(this); c.html(a.call(this, b, c.html())) }) : this.empty().append(a); return this }, replaceWith: function (a) { if (this[0] && this[0].parentNode) { if (f.isFunction(a)) return this.each(function (b) { var c = f(this), d = c.html(); c.replaceWith(a.call(this, b, d)) }); typeof a != "string" && (a = f(a).detach()); return this.each(function () { var b = this.nextSibling, c = this.parentNode; f(this).remove(), b ? f(b).before(a) : f(c).append(a) }) } return this.length ? this.pushStack(f(f.isFunction(a) ? a() : a), "replaceWith", a) : this }, detach: function (a) { return this.remove(a, !0) }, domManip: function (a, c, d) { var e, g, h, i, j = a[0], k = []; if (!f.support.checkClone && arguments.length === 3 && typeof j == "string" && bd.test(j)) return this.each(function () { f(this).domManip(a, c, d, !0) }); if (f.isFunction(j)) return this.each(function (e) { var g = f(this); a[0] = j.call(this, e, c ? g.html() : b), g.domManip(a, c, d) }); if (this[0]) { i = j && j.parentNode, f.support.parentNode && i && i.nodeType === 11 && i.childNodes.length === this.length ? e = { fragment: i} : e = f.buildFragment(a, this, k), h = e.fragment, h.childNodes.length === 1 ? g = h = h.firstChild : g = h.firstChild; if (g) { c = c && f.nodeName(g, "tr"); for (var l = 0, m = this.length, n = m - 1; l < m; l++) d.call(c ? bh(this[l], g) : this[l], e.cacheable || m > 1 && l < n ? f.clone(h, !0, !0) : h) } k.length && f.each(k, bn) } return this } }), f.buildFragment = function (a, b, d) { var e, g, h, i = b && b[0] ? b[0].ownerDocument || b[0] : c; a.length === 1 && typeof a[0] == "string" && a[0].length < 512 && i === c && a[0].charAt(0) === "<" && !bc.test(a[0]) && (f.support.checkClone || !bd.test(a[0])) && (g = !0, h = f.fragments[a[0]], h && h !== 1 && (e = h)), e || (e = i.createDocumentFragment(), f.clean(a, i, e, d)), g && (f.fragments[a[0]] = h ? e : 1); return { fragment: e, cacheable: g} }, f.fragments = {}, f.each({ appendTo: "append", prependTo: "prepend", insertBefore: "before", insertAfter: "after", replaceAll: "replaceWith" }, function (a, b) { f.fn[a] = function (c) { var d = [], e = f(c), g = this.length === 1 && this[0].parentNode; if (g && g.nodeType === 11 && g.childNodes.length === 1 && e.length === 1) { e[b](this[0]); return this } for (var h = 0, i = e.length; h < i; h++) { var j = (h > 0 ? this.clone(!0) : this).get(); f(e[h])[b](j), d = d.concat(j) } return this.pushStack(d, a, e.selector) } }), f.extend({ clone: function (a, b, c) { var d = a.cloneNode(!0), e, g, h; if ((!f.support.noCloneEvent || !f.support.noCloneChecked) && (a.nodeType === 1 || a.nodeType === 11) && !f.isXMLDoc(a)) { bj(a, d), e = bk(a), g = bk(d); for (h = 0; e[h]; ++h) bj(e[h], g[h]) } if (b) { bi(a, d); if (c) { e = bk(a), g = bk(d); for (h = 0; e[h]; ++h) bi(e[h], g[h]) } } return d }, clean: function (a, b, d, e) {
        var g; b = b || c, typeof b.createElement == "undefined" && (b = b.ownerDocument ||
b[0] && b[0].ownerDocument || c); var h = [], i; for (var j = 0, k; (k = a[j]) != null; j++) { typeof k == "number" && (k += ""); if (!k) continue; if (typeof k == "string") if (!bb.test(k)) k = b.createTextNode(k); else { k = k.replace($, "<$1></$2>"); var l = (_.exec(k) || ["", ""])[1].toLowerCase(), m = bg[l] || bg._default, n = m[0], o = b.createElement("div"); o.innerHTML = m[1] + k + m[2]; while (n--) o = o.lastChild; if (!f.support.tbody) { var p = ba.test(k), q = l === "table" && !p ? o.firstChild && o.firstChild.childNodes : m[1] === "<table>" && !p ? o.childNodes : []; for (i = q.length - 1; i >= 0; --i) f.nodeName(q[i], "tbody") && !q[i].childNodes.length && q[i].parentNode.removeChild(q[i]) } !f.support.leadingWhitespace && Z.test(k) && o.insertBefore(b.createTextNode(Z.exec(k)[0]), o.firstChild), k = o.childNodes } var r; if (!f.support.appendChecked) if (k[0] && typeof (r = k.length) == "number") for (i = 0; i < r; i++) bm(k[i]); else bm(k); k.nodeType ? h.push(k) : h = f.merge(h, k) } if (d) { g = function (a) { return !a.type || be.test(a.type) }; for (j = 0; h[j]; j++) if (e && f.nodeName(h[j], "script") && (!h[j].type || h[j].type.toLowerCase() === "text/javascript")) e.push(h[j].parentNode ? h[j].parentNode.removeChild(h[j]) : h[j]); else { if (h[j].nodeType === 1) { var s = f.grep(h[j].getElementsByTagName("script"), g); h.splice.apply(h, [j + 1, 0].concat(s)) } d.appendChild(h[j]) } } return h
    }, cleanData: function (a) { var b, c, d = f.cache, e = f.expando, g = f.event.special, h = f.support.deleteExpando; for (var i = 0, j; (j = a[i]) != null; i++) { if (j.nodeName && f.noData[j.nodeName.toLowerCase()]) continue; c = j[f.expando]; if (c) { b = d[c] && d[c][e]; if (b && b.events) { for (var k in b.events) g[k] ? f.event.remove(j, k) : f.removeEvent(j, k, b.handle); b.handle && (b.handle.elem = null) } h ? delete j[f.expando] : j.removeAttribute && j.removeAttribute(f.expando), delete d[c] } } } 
    }); var bo = /alpha\([^)]*\)/i, bp = /opacity=([^)]*)/, bq = /-([a-z])/ig, br = /([A-Z]|^ms)/g, bs = /^-?\d+(?:px)?$/i, bt = /^-?\d/, bu = /^[+\-]=/, bv = /[^+\-\.\de]+/g, bw = { position: "absolute", visibility: "hidden", display: "block" }, bx = ["Left", "Right"], by = ["Top", "Bottom"], bz, bA, bB, bC = function (a, b) { return b.toUpperCase() }; f.fn.css = function (a, c) { if (arguments.length === 2 && c === b) return this; return f.access(this, a, c, !0, function (a, c, d) { return d !== b ? f.style(a, c, d) : f.css(a, c) }) }, f.extend({ cssHooks: { opacity: { get: function (a, b) { if (b) { var c = bz(a, "opacity", "opacity"); return c === "" ? "1" : c } return a.style.opacity } } }, cssNumber: { zIndex: !0, fontWeight: !0, opacity: !0, zoom: !0, lineHeight: !0, widows: !0, orphans: !0 }, cssProps: { "float": f.support.cssFloat ? "cssFloat" : "styleFloat" }, style: function (a, c, d, e) { if (!!a && a.nodeType !== 3 && a.nodeType !== 8 && !!a.style) { var g, h, i = f.camelCase(c), j = a.style, k = f.cssHooks[i]; c = f.cssProps[i] || i; if (d === b) { if (k && "get" in k && (g = k.get(a, !1, e)) !== b) return g; return j[c] } h = typeof d; if (h === "number" && isNaN(d) || d == null) return; h === "string" && bu.test(d) && (d = +d.replace(bv, "") + parseFloat(f.css(a, c))), h === "number" && !f.cssNumber[i] && (d += "px"); if (!k || !("set" in k) || (d = k.set(a, d)) !== b) try { j[c] = d } catch (l) { } } }, css: function (a, c, d) { var e, g; c = f.camelCase(c), g = f.cssHooks[c], c = f.cssProps[c] || c, c === "cssFloat" && (c = "float"); if (g && "get" in g && (e = g.get(a, !0, d)) !== b) return e; if (bz) return bz(a, c) }, swap: function (a, b, c) { var d = {}; for (var e in b) d[e] = a.style[e], a.style[e] = b[e]; c.call(a); for (e in b) a.style[e] = d[e] }, camelCase: function (a) { return a.replace(bq, bC) } }), f.curCSS = f.css, f.each(["height", "width"], function (a, b) { f.cssHooks[b] = { get: function (a, c, d) { var e; if (c) { a.offsetWidth !== 0 ? e = bD(a, b, d) : f.swap(a, bw, function () { e = bD(a, b, d) }); if (e <= 0) { e = bz(a, b, b), e === "0px" && bB && (e = bB(a, b, b)); if (e != null) return e === "" || e === "auto" ? "0px" : e } if (e < 0 || e == null) { e = a.style[b]; return e === "" || e === "auto" ? "0px" : e } return typeof e == "string" ? e : e + "px" } }, set: function (a, b) { if (!bs.test(b)) return b; b = parseFloat(b); if (b >= 0) return b + "px" } } }), f.support.opacity || (f.cssHooks.opacity = { get: function (a, b) { return bp.test((b && a.currentStyle ? a.currentStyle.filter : a.style.filter) || "") ? parseFloat(RegExp.$1) / 100 + "" : b ? "1" : "" }, set: function (a, b) { var c = a.style, d = a.currentStyle; c.zoom = 1; var e = f.isNaN(b) ? "" : "alpha(opacity=" + b * 100 + ")", g = d && d.filter || c.filter || ""; c.filter = bo.test(g) ? g.replace(bo, e) : g + " " + e } }), f(function () { f.support.reliableMarginRight || (f.cssHooks.marginRight = { get: function (a, b) { var c; f.swap(a, { display: "inline-block" }, function () { b ? c = bz(a, "margin-right", "marginRight") : c = a.style.marginRight }); return c } }) }), c.defaultView && c.defaultView.getComputedStyle && (bA = function (a, c) { var d, e, g; c = c.replace(br, "-$1").toLowerCase(); if (!(e = a.ownerDocument.defaultView)) return b; if (g = e.getComputedStyle(a, null)) d = g.getPropertyValue(c), d === "" && !f.contains(a.ownerDocument.documentElement, a) && (d = f.style(a, c)); return d }), c.documentElement.currentStyle && (bB = function (a, b) { var c, d = a.currentStyle && a.currentStyle[b], e = a.runtimeStyle && a.runtimeStyle[b], f = a.style; !bs.test(d) && bt.test(d) && (c = f.left, e && (a.runtimeStyle.left = a.currentStyle.left), f.left = b === "fontSize" ? "1em" : d || 0, d = f.pixelLeft + "px", f.left = c, e && (a.runtimeStyle.left = e)); return d === "" ? "auto" : d }), bz = bA || bB, f.expr && f.expr.filters && (f.expr.filters.hidden = function (a) { var b = a.offsetWidth, c = a.offsetHeight; return b === 0 && c === 0 || !f.support.reliableHiddenOffsets && (a.style.display || f.css(a, "display")) === "none" }, f.expr.filters.visible = function (a) { return !f.expr.filters.hidden(a) }); var bE = /%20/g, bF = /\[\]$/, bG = /\r?\n/g, bH = /#.*$/, bI = /^(.*?):[ \t]*([^\r\n]*)\r?$/mg, bJ = /^(?:color|date|datetime|email|hidden|month|number|password|range|search|tel|text|time|url|week)$/i, bK = /^(?:about|app|app\-storage|.+\-extension|file|widget):$/, bL = /^(?:GET|HEAD)$/, bM = /^\/\//, bN = /\?/, bO = /<script\b[^<]*(?:(?!<\/script>)<[^<]*)*<\/script>/gi, bP = /^(?:select|textarea)/i, bQ = /\s+/, bR = /([?&])_=[^&]*/, bS = /^([\w\+\.\-]+:)(?:\/\/([^\/?#:]*)(?::(\d+))?)?/, bT = f.fn.load, bU = {}, bV = {}, bW, bX; try { bW = e.href } catch (bY) { bW = c.createElement("a"), bW.href = "", bW = bW.href } bX = bS.exec(bW.toLowerCase()) || [], f.fn.extend({ load: function (a, c, d) { if (typeof a != "string" && bT) return bT.apply(this, arguments); if (!this.length) return this; var e = a.indexOf(" "); if (e >= 0) { var g = a.slice(e, a.length); a = a.slice(0, e) } var h = "GET"; c && (f.isFunction(c) ? (d = c, c = b) : typeof c == "object" && (c = f.param(c, f.ajaxSettings.traditional), h = "POST")); var i = this; f.ajax({ url: a, type: h, dataType: "html", data: c, complete: function (a, b, c) { c = a.responseText, a.isResolved() && (a.done(function (a) { c = a }), i.html(g ? f("<div>").append(c.replace(bO, "")).find(g) : c)), d && i.each(d, [c, b, a]) } }); return this }, serialize: function () { return f.param(this.serializeArray()) }, serializeArray: function () { return this.map(function () { return this.elements ? f.makeArray(this.elements) : this }).filter(function () { return this.name && !this.disabled && (this.checked || bP.test(this.nodeName) || bJ.test(this.type)) }).map(function (a, b) { var c = f(this).val(); return c == null ? null : f.isArray(c) ? f.map(c, function (a, c) { return { name: b.name, value: a.replace(bG, "\r\n")} }) : { name: b.name, value: c.replace(bG, "\r\n")} }).get() } }), f.each("ajaxStart ajaxStop ajaxComplete ajaxError ajaxSuccess ajaxSend".split(" "), function (a, b) { f.fn[b] = function (a) { return this.bind(b, a) } }), f.each(["get", "post"], function (a, c) { f[c] = function (a, d, e, g) { f.isFunction(d) && (g = g || e, e = d, d = b); return f.ajax({ type: c, url: a, data: d, success: e, dataType: g }) } }), f.extend({ getScript: function (a, c) { return f.get(a, b, c, "script") }, getJSON: function (a, b, c) { return f.get(a, b, c, "json") }, ajaxSetup: function (a, b) { b ? f.extend(!0, a, f.ajaxSettings, b) : (b = a, a = f.extend(!0, f.ajaxSettings, b)); for (var c in { context: 1, url: 1 }) c in b ? a[c] = b[c] : c in f.ajaxSettings && (a[c] = f.ajaxSettings[c]); return a }, ajaxSettings: { url: bW, isLocal: bK.test(bX[1]), global: !0, type: "GET", contentType: "application/x-www-form-urlencoded", processData: !0, async: !0, accepts: { xml: "application/xml, text/xml", html: "text/html", text: "text/plain", json: "application/json, text/javascript", "*": "*/*" }, contents: { xml: /xml/, html: /html/, json: /json/ }, responseFields: { xml: "responseXML", text: "responseText" }, converters: { "* text": a.String, "text html": !0, "text json": f.parseJSON, "text xml": f.parseXML} }, ajaxPrefilter: bZ(bU), ajaxTransport: bZ(bV), ajax: function (a, c) { function w(a, c, l, m) { if (s !== 2) { s = 2, q && clearTimeout(q), p = b, n = m || "", v.readyState = a ? 4 : 0; var o, r, u, w = l ? ca(d, v, l) : b, x, y; if (a >= 200 && a < 300 || a === 304) { if (d.ifModified) { if (x = v.getResponseHeader("Last-Modified")) f.lastModified[k] = x; if (y = v.getResponseHeader("Etag")) f.etag[k] = y } if (a === 304) c = "notmodified", o = !0; else try { r = cb(d, w), c = "success", o = !0 } catch (z) { c = "parsererror", u = z } } else { u = c; if (!c || a) c = "error", a < 0 && (a = 0) } v.status = a, v.statusText = c, o ? h.resolveWith(e, [r, c, v]) : h.rejectWith(e, [v, c, u]), v.statusCode(j), j = b, t && g.trigger("ajax" + (o ? "Success" : "Error"), [v, d, o ? r : u]), i.resolveWith(e, [v, c]), t && (g.trigger("ajaxComplete", [v, d]), --f.active || f.event.trigger("ajaxStop")) } } typeof a == "object" && (c = a, a = b), c = c || {}; var d = f.ajaxSetup({}, c), e = d.context || d, g = e !== d && (e.nodeType || e instanceof f) ? f(e) : f.event, h = f.Deferred(), i = f._Deferred(), j = d.statusCode || {}, k, l = {}, m = {}, n, o, p, q, r, s = 0, t, u, v = { readyState: 0, setRequestHeader: function (a, b) { if (!s) { var c = a.toLowerCase(); a = m[c] = m[c] || a, l[a] = b } return this }, getAllResponseHeaders: function () { return s === 2 ? n : null }, getResponseHeader: function (a) { var c; if (s === 2) { if (!o) { o = {}; while (c = bI.exec(n)) o[c[1].toLowerCase()] = c[2] } c = o[a.toLowerCase()] } return c === b ? null : c }, overrideMimeType: function (a) { s || (d.mimeType = a); return this }, abort: function (a) { a = a || "abort", p && p.abort(a), w(0, a); return this } }; h.promise(v), v.success = v.done, v.error = v.fail, v.complete = i.done, v.statusCode = function (a) { if (a) { var b; if (s < 2) for (b in a) j[b] = [j[b], a[b]]; else b = a[v.status], v.then(b, b) } return this }, d.url = ((a || d.url) + "").replace(bH, "").replace(bM, bX[1] + "//"), d.dataTypes = f.trim(d.dataType || "*").toLowerCase().split(bQ), d.crossDomain == null && (r = bS.exec(d.url.toLowerCase()), d.crossDomain = !(!r || r[1] == bX[1] && r[2] == bX[2] && (r[3] || (r[1] === "http:" ? 80 : 443)) == (bX[3] || (bX[1] === "http:" ? 80 : 443)))), d.data && d.processData && typeof d.data != "string" && (d.data = f.param(d.data, d.traditional)), b$(bU, d, c, v); if (s === 2) return !1; t = d.global, d.type = d.type.toUpperCase(), d.hasContent = !bL.test(d.type), t && f.active++ === 0 && f.event.trigger("ajaxStart"); if (!d.hasContent) { d.data && (d.url += (bN.test(d.url) ? "&" : "?") + d.data), k = d.url; if (d.cache === !1) { var x = f.now(), y = d.url.replace(bR, "$1_=" + x); d.url = y + (y === d.url ? (bN.test(d.url) ? "&" : "?") + "_=" + x : "") } } (d.data && d.hasContent && d.contentType !== !1 || c.contentType) && v.setRequestHeader("Content-Type", d.contentType), d.ifModified && (k = k || d.url, f.lastModified[k] && v.setRequestHeader("If-Modified-Since", f.lastModified[k]), f.etag[k] && v.setRequestHeader("If-None-Match", f.etag[k])), v.setRequestHeader("Accept", d.dataTypes[0] && d.accepts[d.dataTypes[0]] ? d.accepts[d.dataTypes[0]] + (d.dataTypes[0] !== "*" ? ", */*; q=0.01" : "") : d.accepts["*"]); for (u in d.headers) v.setRequestHeader(u, d.headers[u]); if (d.beforeSend && (d.beforeSend.call(e, v, d) === !1 || s === 2)) { v.abort(); return !1 } for (u in { success: 1, error: 1, complete: 1 }) v[u](d[u]); p = b$(bV, d, c, v); if (!p) w(-1, "No Transport"); else { v.readyState = 1, t && g.trigger("ajaxSend", [v, d]), d.async && d.timeout > 0 && (q = setTimeout(function () { v.abort("timeout") }, d.timeout)); try { s = 1, p.send(l, w) } catch (z) { status < 2 ? w(-1, z) : f.error(z) } } return v }, param: function (a, c) { var d = [], e = function (a, b) { b = f.isFunction(b) ? b() : b, d[d.length] = encodeURIComponent(a) + "=" + encodeURIComponent(b) }; c === b && (c = f.ajaxSettings.traditional); if (f.isArray(a) || a.jquery && !f.isPlainObject(a)) f.each(a, function () { e(this.name, this.value) }); else for (var g in a) b_(g, a[g], c, e); return d.join("&").replace(bE, "+") } }), f.extend({ active: 0, lastModified: {}, etag: {} }); var cc = f.now(), cd = /(\=)\?(&|$)|\?\?/i; f.ajaxSetup({ jsonp: "callback", jsonpCallback: function () { return f.expando + "_" + cc++ } }), f.ajaxPrefilter("json jsonp", function (b, c, d) { var e = b.contentType === "application/x-www-form-urlencoded" && typeof b.data == "string"; if (b.dataTypes[0] === "jsonp" || b.jsonp !== !1 && (cd.test(b.url) || e && cd.test(b.data))) { var g, h = b.jsonpCallback = f.isFunction(b.jsonpCallback) ? b.jsonpCallback() : b.jsonpCallback, i = a[h], j = b.url, k = b.data, l = "$1" + h + "$2"; b.jsonp !== !1 && (j = j.replace(cd, l), b.url === j && (e && (k = k.replace(cd, l)), b.data === k && (j += (/\?/.test(j) ? "&" : "?") + b.jsonp + "=" + h))), b.url = j, b.data = k, a[h] = function (a) { g = [a] }, d.always(function () { a[h] = i, g && f.isFunction(i) && a[h](g[0]) }), b.converters["script json"] = function () { g || f.error(h + " was not called"); return g[0] }, b.dataTypes[0] = "json"; return "script" } }), f.ajaxSetup({ accepts: { script: "text/javascript, application/javascript, application/ecmascript, application/x-ecmascript" }, contents: { script: /javascript|ecmascript/ }, converters: { "text script": function (a) { f.globalEval(a); return a } } }), f.ajaxPrefilter("script", function (a) { a.cache === b && (a.cache = !1), a.crossDomain && (a.type = "GET", a.global = !1) }), f.ajaxTransport("script", function (a) { if (a.crossDomain) { var d, e = c.head || c.getElementsByTagName("head")[0] || c.documentElement; return { send: function (f, g) { d = c.createElement("script"), d.async = "async", a.scriptCharset && (d.charset = a.scriptCharset), d.src = a.url, d.onload = d.onreadystatechange = function (a, c) { if (c || !d.readyState || /loaded|complete/.test(d.readyState)) d.onload = d.onreadystatechange = null, e && d.parentNode && e.removeChild(d), d = b, c || g(200, "success") }, e.insertBefore(d, e.firstChild) }, abort: function () { d && d.onload(0, 1) } } } }); var ce = a.ActiveXObject ? function () { for (var a in cg) cg[a](0, 1) } : !1, cf = 0, cg; f.ajaxSettings.xhr = a.ActiveXObject ? function () { return !this.isLocal && ch() || ci() } : ch, function (a) { f.extend(f.support, { ajax: !!a, cors: !!a && "withCredentials" in a }) } (f.ajaxSettings.xhr()), f.support.ajax && f.ajaxTransport(function (c) { if (!c.crossDomain || f.support.cors) { var d; return { send: function (e, g) { var h = c.xhr(), i, j; c.username ? h.open(c.type, c.url, c.async, c.username, c.password) : h.open(c.type, c.url, c.async); if (c.xhrFields) for (j in c.xhrFields) h[j] = c.xhrFields[j]; c.mimeType && h.overrideMimeType && h.overrideMimeType(c.mimeType), !c.crossDomain && !e["X-Requested-With"] && (e["X-Requested-With"] = "XMLHttpRequest"); try { for (j in e) h.setRequestHeader(j, e[j]) } catch (k) { } h.send(c.hasContent && c.data || null), d = function (a, e) { var j, k, l, m, n; try { if (d && (e || h.readyState === 4)) { d = b, i && (h.onreadystatechange = f.noop, ce && delete cg[i]); if (e) h.readyState !== 4 && h.abort(); else { j = h.status, l = h.getAllResponseHeaders(), m = {}, n = h.responseXML, n && n.documentElement && (m.xml = n), m.text = h.responseText; try { k = h.statusText } catch (o) { k = "" } !j && c.isLocal && !c.crossDomain ? j = m.text ? 200 : 404 : j === 1223 && (j = 204) } } } catch (p) { e || g(-1, p) } m && g(j, k, m, l) }, !c.async || h.readyState === 4 ? d() : (i = ++cf, ce && (cg || (cg = {}, f(a).unload(ce)), cg[i] = d), h.onreadystatechange = d) }, abort: function () { d && d(0, 1) } } } }); var cj = {}, ck, cl, cm = /^(?:toggle|show|hide)$/, cn = /^([+\-]=)?([\d+.\-]+)([a-z%]*)$/i, co, cp = [["height", "marginTop", "marginBottom", "paddingTop", "paddingBottom"], ["width", "marginLeft", "marginRight", "paddingLeft", "paddingRight"], ["opacity"]], cq, cr = a.webkitRequestAnimationFrame || a.mozRequestAnimationFrame || a.oRequestAnimationFrame; f.fn.extend({ show: function (a, b, c) { var d, e; if (a || a === 0) return this.animate(cu("show", 3), a, b, c); for (var g = 0, h = this.length; g < h; g++) d = this[g], d.style && (e = d.style.display, !f._data(d, "olddisplay") && e === "none" && (e = d.style.display = ""), e === "" && f.css(d, "display") === "none" && f._data(d, "olddisplay", cv(d.nodeName))); for (g = 0; g < h; g++) { d = this[g]; if (d.style) { e = d.style.display; if (e === "" || e === "none") d.style.display = f._data(d, "olddisplay") || "" } } return this }, hide: function (a, b, c) { if (a || a === 0) return this.animate(cu("hide", 3), a, b, c); for (var d = 0, e = this.length; d < e; d++) if (this[d].style) { var g = f.css(this[d], "display"); g !== "none" && !f._data(this[d], "olddisplay") && f._data(this[d], "olddisplay", g) } for (d = 0; d < e; d++) this[d].style && (this[d].style.display = "none"); return this }, _toggle: f.fn.toggle, toggle: function (a, b, c) { var d = typeof a == "boolean"; f.isFunction(a) && f.isFunction(b) ? this._toggle.apply(this, arguments) : a == null || d ? this.each(function () { var b = d ? a : f(this).is(":hidden"); f(this)[b ? "show" : "hide"]() }) : this.animate(cu("toggle", 3), a, b, c); return this }, fadeTo: function (a, b, c, d) { return this.filter(":hidden").css("opacity", 0).show().end().animate({ opacity: b }, a, c, d) }, animate: function (a, b, c, d) { var e = f.speed(b, c, d); if (f.isEmptyObject(a)) return this.each(e.complete, [!1]); a = f.extend({}, a); return this[e.queue === !1 ? "each" : "queue"](function () { e.queue === !1 && f._mark(this); var b = f.extend({}, e), c = this.nodeType === 1, d = c && f(this).is(":hidden"), g, h, i, j, k, l, m, n, o; b.animatedProperties = {}; for (i in a) { g = f.camelCase(i), i !== g && (a[g] = a[i], delete a[i]), h = a[g], f.isArray(h) ? (b.animatedProperties[g] = h[1], h = a[g] = h[0]) : b.animatedProperties[g] = b.specialEasing && b.specialEasing[g] || b.easing || "swing"; if (h === "hide" && d || h === "show" && !d) return b.complete.call(this); c && (g === "height" || g === "width") && (b.overflow = [this.style.overflow, this.style.overflowX, this.style.overflowY], f.css(this, "display") === "inline" && f.css(this, "float") === "none" && (f.support.inlineBlockNeedsLayout ? (j = cv(this.nodeName), j === "inline" ? this.style.display = "inline-block" : (this.style.display = "inline", this.style.zoom = 1)) : this.style.display = "inline-block")) } b.overflow != null && (this.style.overflow = "hidden"); for (i in a) k = new f.fx(this, b, i), h = a[i], cm.test(h) ? k[h === "toggle" ? d ? "show" : "hide" : h]() : (l = cn.exec(h), m = k.cur(), l ? (n = parseFloat(l[2]), o = l[3] || (f.cssNumber[i] ? "" : "px"), o !== "px" && (f.style(this, i, (n || 1) + o), m = (n || 1) / k.cur() * m, f.style(this, i, m + o)), l[1] && (n = (l[1] === "-=" ? -1 : 1) * n + m), k.custom(m, n, o)) : k.custom(m, h, "")); return !0 }) }, stop: function (a, b) { a && this.queue([]), this.each(function () { var a = f.timers, c = a.length; b || f._unmark(!0, this); while (c--) a[c].elem === this && (b && a[c](!0), a.splice(c, 1)) }), b || this.dequeue(); return this } }), f.each({ slideDown: cu("show", 1), slideUp: cu("hide", 1), slideToggle: cu("toggle", 1), fadeIn: { opacity: "show" }, fadeOut: { opacity: "hide" }, fadeToggle: { opacity: "toggle"} }, function (a, b) { f.fn[a] = function (a, c, d) { return this.animate(b, a, c, d) } }), f.extend({ speed: function (a, b, c) { var d = a && typeof a == "object" ? f.extend({}, a) : { complete: c || !c && b || f.isFunction(a) && a, duration: a, easing: c && b || b && !f.isFunction(b) && b }; d.duration = f.fx.off ? 0 : typeof d.duration == "number" ? d.duration : d.duration in f.fx.speeds ? f.fx.speeds[d.duration] : f.fx.speeds._default, d.old = d.complete, d.complete = function (a) { d.queue !== !1 ? f.dequeue(this) : a !== !1 && f._unmark(this), f.isFunction(d.old) && d.old.call(this) }; return d }, easing: { linear: function (a, b, c, d) { return c + d * a }, swing: function (a, b, c, d) { return (-Math.cos(a * Math.PI) / 2 + .5) * d + c } }, timers: [], fx: function (a, b, c) { this.options = b, this.elem = a, this.prop = c, b.orig = b.orig || {} } }), f.fx.prototype = { update: function () { this.options.step && this.options.step.call(this.elem, this.now, this), (f.fx.step[this.prop] || f.fx.step._default)(this) }, cur: function () { if (this.elem[this.prop] != null && (!this.elem.style || this.elem.style[this.prop] == null)) return this.elem[this.prop]; var a, b = f.css(this.elem, this.prop); return isNaN(a = parseFloat(b)) ? !b || b === "auto" ? 0 : b : a }, custom: function (a, b, c) { function h(a) { return d.step(a) } var d = this, e = f.fx, g; this.startTime = cq || cs(), this.start = a, this.end = b, this.unit = c || this.unit || (f.cssNumber[this.prop] ? "" : "px"), this.now = this.start, this.pos = this.state = 0, h.elem = this.elem, h() && f.timers.push(h) && !co && (cr ? (co = 1, g = function () { co && (cr(g), e.tick()) }, cr(g)) : co = setInterval(e.tick, e.interval)) }, show: function () { this.options.orig[this.prop] = f.style(this.elem, this.prop), this.options.show = !0, this.custom(this.prop === "width" || this.prop === "height" ? 1 : 0, this.cur()), f(this.elem).show() }, hide: function () { this.options.orig[this.prop] = f.style(this.elem, this.prop), this.options.hide = !0, this.custom(this.cur(), 0) }, step: function (a) { var b = cq || cs(), c = !0, d = this.elem, e = this.options, g, h; if (a || b >= e.duration + this.startTime) { this.now = this.end, this.pos = this.state = 1, this.update(), e.animatedProperties[this.prop] = !0; for (g in e.animatedProperties) e.animatedProperties[g] !== !0 && (c = !1); if (c) { e.overflow != null && !f.support.shrinkWrapBlocks && f.each(["", "X", "Y"], function (a, b) { d.style["overflow" + b] = e.overflow[a] }), e.hide && f(d).hide(); if (e.hide || e.show) for (var i in e.animatedProperties) f.style(d, i, e.orig[i]); e.complete.call(d) } return !1 } e.duration == Infinity ? this.now = b : (h = b - this.startTime, this.state = h / e.duration, this.pos = f.easing[e.animatedProperties[this.prop]](this.state, h, 0, 1, e.duration), this.now = this.start + (this.end - this.start) * this.pos), this.update(); return !0 } }, f.extend(f.fx, { tick: function () { for (var a = f.timers, b = 0; b < a.length; ++b) a[b]() || a.splice(b--, 1); a.length || f.fx.stop() }, interval: 13, stop: function () { clearInterval(co), co = null }, speeds: { slow: 600, fast: 200, _default: 400 }, step: { opacity: function (a) { f.style(a.elem, "opacity", a.now) }, _default: function (a) { a.elem.style && a.elem.style[a.prop] != null ? a.elem.style[a.prop] = (a.prop === "width" || a.prop === "height" ? Math.max(0, a.now) : a.now) + a.unit : a.elem[a.prop] = a.now } } }), f.expr && f.expr.filters && (f.expr.filters.animated = function (a) { return f.grep(f.timers, function (b) { return a === b.elem }).length }); var cw = /^t(?:able|d|h)$/i, cx = /^(?:body|html)$/i; "getBoundingClientRect" in c.documentElement ? f.fn.offset = function (a) { var b = this[0], c; if (a) return this.each(function (b) { f.offset.setOffset(this, a, b) }); if (!b || !b.ownerDocument) return null; if (b === b.ownerDocument.body) return f.offset.bodyOffset(b); try { c = b.getBoundingClientRect() } catch (d) { } var e = b.ownerDocument, g = e.documentElement; if (!c || !f.contains(g, b)) return c ? { top: c.top, left: c.left} : { top: 0, left: 0 }; var h = e.body, i = cy(e), j = g.clientTop || h.clientTop || 0, k = g.clientLeft || h.clientLeft || 0, l = i.pageYOffset || f.support.boxModel && g.scrollTop || h.scrollTop, m = i.pageXOffset || f.support.boxModel && g.scrollLeft || h.scrollLeft, n = c.top + l - j, o = c.left + m - k; return { top: n, left: o} } : f.fn.offset = function (a) { var b = this[0]; if (a) return this.each(function (b) { f.offset.setOffset(this, a, b) }); if (!b || !b.ownerDocument) return null; if (b === b.ownerDocument.body) return f.offset.bodyOffset(b); f.offset.initialize(); var c, d = b.offsetParent, e = b, g = b.ownerDocument, h = g.documentElement, i = g.body, j = g.defaultView, k = j ? j.getComputedStyle(b, null) : b.currentStyle, l = b.offsetTop, m = b.offsetLeft; while ((b = b.parentNode) && b !== i && b !== h) { if (f.offset.supportsFixedPosition && k.position === "fixed") break; c = j ? j.getComputedStyle(b, null) : b.currentStyle, l -= b.scrollTop, m -= b.scrollLeft, b === d && (l += b.offsetTop, m += b.offsetLeft, f.offset.doesNotAddBorder && (!f.offset.doesAddBorderForTableAndCells || !cw.test(b.nodeName)) && (l += parseFloat(c.borderTopWidth) || 0, m += parseFloat(c.borderLeftWidth) || 0), e = d, d = b.offsetParent), f.offset.subtractsBorderForOverflowNotVisible && c.overflow !== "visible" && (l += parseFloat(c.borderTopWidth) || 0, m += parseFloat(c.borderLeftWidth) || 0), k = c } if (k.position === "relative" || k.position === "static") l += i.offsetTop, m += i.offsetLeft; f.offset.supportsFixedPosition && k.position === "fixed" && (l += Math.max(h.scrollTop, i.scrollTop), m += Math.max(h.scrollLeft, i.scrollLeft)); return { top: l, left: m} }, f.offset = { initialize: function () { var a = c.body, b = c.createElement("div"), d, e, g, h, i = parseFloat(f.css(a, "marginTop")) || 0, j = "<div style='position:absolute;top:0;left:0;margin:0;border:5px solid #000;padding:0;width:1px;height:1px;'><div></div></div><table style='position:absolute;top:0;left:0;margin:0;border:5px solid #000;padding:0;width:1px;height:1px;' cellpadding='0' cellspacing='0'><tr><td></td></tr></table>"; f.extend(b.style, { position: "absolute", top: 0, left: 0, margin: 0, border: 0, width: "1px", height: "1px", visibility: "hidden" }), b.innerHTML = j, a.insertBefore(b, a.firstChild), d = b.firstChild, e = d.firstChild, h = d.nextSibling.firstChild.firstChild, this.doesNotAddBorder = e.offsetTop !== 5, this.doesAddBorderForTableAndCells = h.offsetTop === 5, e.style.position = "fixed", e.style.top = "20px", this.supportsFixedPosition = e.offsetTop === 20 || e.offsetTop === 15, e.style.position = e.style.top = "", d.style.overflow = "hidden", d.style.position = "relative", this.subtractsBorderForOverflowNotVisible = e.offsetTop === -5, this.doesNotIncludeMarginInBodyOffset = a.offsetTop !== i, a.removeChild(b), f.offset.initialize = f.noop }, bodyOffset: function (a) { var b = a.offsetTop, c = a.offsetLeft; f.offset.initialize(), f.offset.doesNotIncludeMarginInBodyOffset && (b += parseFloat(f.css(a, "marginTop")) || 0, c += parseFloat(f.css(a, "marginLeft")) || 0); return { top: b, left: c} }, setOffset: function (a, b, c) { var d = f.css(a, "position"); d === "static" && (a.style.position = "relative"); var e = f(a), g = e.offset(), h = f.css(a, "top"), i = f.css(a, "left"), j = (d === "absolute" || d === "fixed") && f.inArray("auto", [h, i]) > -1, k = {}, l = {}, m, n; j ? (l = e.position(), m = l.top, n = l.left) : (m = parseFloat(h) || 0, n = parseFloat(i) || 0), f.isFunction(b) && (b = b.call(a, c, g)), b.top != null && (k.top = b.top - g.top + m), b.left != null && (k.left = b.left - g.left + n), "using" in b ? b.using.call(a, k) : e.css(k) } }, f.fn.extend({ position: function () { if (!this[0]) return null; var a = this[0], b = this.offsetParent(), c = this.offset(), d = cx.test(b[0].nodeName) ? { top: 0, left: 0} : b.offset(); c.top -= parseFloat(f.css(a, "marginTop")) || 0, c.left -= parseFloat(f.css(a, "marginLeft")) || 0, d.top += parseFloat(f.css(b[0], "borderTopWidth")) || 0, d.left += parseFloat(f.css(b[0], "borderLeftWidth")) || 0; return { top: c.top - d.top, left: c.left - d.left} }, offsetParent: function () { return this.map(function () { var a = this.offsetParent || c.body; while (a && !cx.test(a.nodeName) && f.css(a, "position") === "static") a = a.offsetParent; return a }) } }), f.each(["Left", "Top"], function (a, c) { var d = "scroll" + c; f.fn[d] = function (c) { var e, g; if (c === b) { e = this[0]; if (!e) return null; g = cy(e); return g ? "pageXOffset" in g ? g[a ? "pageYOffset" : "pageXOffset"] : f.support.boxModel && g.document.documentElement[d] || g.document.body[d] : e[d] } return this.each(function () { g = cy(this), g ? g.scrollTo(a ? f(g).scrollLeft() : c, a ? c : f(g).scrollTop()) : this[d] = c }) } }), f.each(["Height", "Width"], function (a, c) { var d = c.toLowerCase(); f.fn["inner" + c] = function () { return this[0] ? parseFloat(f.css(this[0], d, "padding")) : null }, f.fn["outer" + c] = function (a) { return this[0] ? parseFloat(f.css(this[0], d, a ? "margin" : "border")) : null }, f.fn[d] = function (a) { var e = this[0]; if (!e) return a == null ? null : this; if (f.isFunction(a)) return this.each(function (b) { var c = f(this); c[d](a.call(this, b, c[d]())) }); if (f.isWindow(e)) { var g = e.document.documentElement["client" + c]; return e.document.compatMode === "CSS1Compat" && g || e.document.body["client" + c] || g } if (e.nodeType === 9) return Math.max(e.documentElement["client" + c], e.body["scroll" + c], e.documentElement["scroll" + c], e.body["offset" + c], e.documentElement["offset" + c]); if (a === b) { var h = f.css(e, d), i = parseFloat(h); return f.isNaN(i) ? h : i } return this.css(d, typeof a == "string" ? a : a + "px") } }), a.jQuery = a.$ = f
})(window);

(function($){$.toJSON=function(o)
{if(typeof(JSON)=='object'&&JSON.stringify)
return JSON.stringify(o);var type=typeof(o);if(o===null)
return"null";if(type=="undefined")
return undefined;if(type=="number"||type=="boolean")
return o+"";if(type=="string")
return $.quoteString(o);if(type=='object')
{if(typeof o.toJSON=="function")
return $.toJSON(o.toJSON());if(o.constructor===Date)
{var month=o.getUTCMonth()+1;if(month<10)month='0'+month;var day=o.getUTCDate();if(day<10)day='0'+day;var year=o.getUTCFullYear();var hours=o.getUTCHours();if(hours<10)hours='0'+hours;var minutes=o.getUTCMinutes();if(minutes<10)minutes='0'+minutes;var seconds=o.getUTCSeconds();if(seconds<10)seconds='0'+seconds;var milli=o.getUTCMilliseconds();if(milli<100)milli='0'+milli;if(milli<10)milli='0'+milli;return'"'+year+'-'+month+'-'+day+'T'+
hours+':'+minutes+':'+seconds+'.'+milli+'Z"';}
if(o.constructor===Array)
{var ret=[];for(var i=0;i<o.length;i++)
ret.push($.toJSON(o[i])||"null");return"["+ret.join(",")+"]";}
var pairs=[];for(var k in o){var name;var type=typeof k;if(type=="number")
name='"'+k+'"';else if(type=="string")
name=$.quoteString(k);else
continue;if(typeof o[k]=="function")
continue;var val=$.toJSON(o[k]);pairs.push(name+":"+val);}
return"{"+pairs.join(", ")+"}";}};$.evalJSON=function(src)
{if(typeof(JSON)=='object'&&JSON.parse)
return JSON.parse(src);return eval("("+src+")");};$.secureEvalJSON=function(src)
{if(typeof(JSON)=='object'&&JSON.parse)
return JSON.parse(src);var filtered=src;filtered=filtered.replace(/\\["\\\/bfnrtu]/g,'@');filtered=filtered.replace(/"[^"\\\n\r]*"|true|false|null|-?\d+(?:\.\d*)?(?:[eE][+\-]?\d+)?/g,']');filtered=filtered.replace(/(?:^|:|,)(?:\s*\[)+/g,'');if(/^[\],:{}\s]*$/.test(filtered))
return eval("("+src+")");else
throw new SyntaxError("Error parsing JSON, source is not valid.");};$.quoteString=function(string)
{if(string.match(_escapeable))
{return'"'+string.replace(_escapeable,function(a)
{var c=_meta[a];if(typeof c==='string')return c;c=a.charCodeAt();return'\\u00'+Math.floor(c/16).toString(16)+(c%16).toString(16);})+'"';}
return'"'+string+'"';};var _escapeable=/["\\\x00-\x1f\x7f-\x9f]/g;var _meta={'\b':'\\b','\t':'\\t','\n':'\\n','\f':'\\f','\r':'\\r','"':'\\"','\\':'\\\\'};})(jQuery);

(function ($) {
    if (typeof ($.fi) == 'undefined') {
        $.fi = {};
    }

    $.fi.languageId = 1;
    $.fi.languageCode = 'en-GB';
    $.fi.virtualPath = '/portal';
    $.fi.isAccessibility = false;
    $.fi.form = {
            // This helper creates object that could be send to WebServices. Since WebService uses JSON, we can use strongly typed 
            // arguments for the WebMethods. Please note that you have to use objects that are based on IC.Proxy classes. The name of
            // proxy object property should be same as the name of the form element.
            objectHelper: {
                // create object based on controlSelector string and options
                create: function (controlSelector, options) {
                    var obj = {};
                    var opt = $.extend({}, { namePrefix: '', removePrefix: true }, options);
                    // namePrefix could be used to make objects that contain array/object inside.
                    var elements = $(controlSelector);
                    if (opt.namePrefix.length > 0) elements = elements.filter('[name*=' + opt.namePrefix + ']');
                    elements.each(function () {
                        var key = $(this).attr('name');
                        if (typeof (key) == 'undefined' || $.trim(key).length == 0) return;
                        var value = $(this).val();
                        var dataType = $(this).attr('dataType');
                        if (typeof (dataType) == 'undefined' || $.trim(dataType).lenght == 0 || dataType == 'string') {
                        } else {
                            if (dataType == 'int') {
                                if ($.trim(value).length == 0) value = 0;
                                else {
                                    value = parseInt(value);
                                }
                            } else if (dataType == 'bool') {
                                value = (value == true);
                            }
                        }
                        if (opt.namePrefix.length > 0 && opt.removePrefix) {
                            obj[key.replace(opt.namePrefix, '')] = value;
                        } else {
                            obj[key] = value;
                        }
                    });
                    return obj;
                },
                // Loads object and set values to the form elements
                load: function (obj, controlSelector, options) {
                    var opt = $.extend({}, { callback: false, clearValidation: true, namePrefix: '', removePrefix: true }, options);
                    var elements = $(controlSelector);
                    if (opt.namePrefix.length > 0) elements = elements.filter('[name*=' + opt.namePrefix + ']');
                    elements.each(function () {
                        var key = $(this).attr('name');
                        if (opt.namePrefix.length > 0 && opt.removePrefix) key = key.replace(opt.namePrefix, '');
                        var value = obj[key];
                        if (typeof (value) != 'undefined') {
                            var dataType = $(this).attr('dataType');
                            if (dataType == 'bool') {
                                value = (value == true) ? "1" : "0";
                            }
                            if(value == null) return;
                            $(this).attr('initVal', value);
                            $(this).val(value);
                        }
                    });

                    if ($.isFunction(opt.callback)) {
                        opt.callback(obj);
                    }

                    if (opt.clearValidation) {
                        $.fi.form.validationHelper.clear(elements);
                    }
                }
            }
    };
    $.fi.helpers = {
        validators: {
            requriedFieldValidator: function (element) {
                var v = element.val();
                if (v == null || $.trim(v).length == 0 || v == '0') {
                    return false;
                }

                if(element.hasClass('watermark')){
                    if(v == element.attr('title')){
                        return false;
                    }
                }
                return true;
            },
            emailValidator: function (element) {
                if ($.fi.helpers.validators.requriedFieldValidator(element)) {
                    var v = element.val();
                    var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
                    return (reg.test(v) == true);
                }
                return true;
            },
            urlValidator: function (element) {
                if ($.fi.helpers.validators.requriedFieldValidator(element)) {
                    var v = element.val();
                    var reg = /^[\w\-_]+(\.[\w\-_]+)+([\w\-\.,@?^=%&amp;:/~\+#!]*[\w\-\@?^=%&amp;/~\+#!])?/;
                    return (reg.test(v) == true);
                }
                return true;
            }

        }
    };

    $.fi.resources = {
        utilities: {
            close: { 'en-GB': 'Close', 'ar-AE': 'إغلاق' }
        },
        forms: {
            charsLeft: {
                'en-GB': '<span>{0}</span> characters left',
                'ar-AE': 'باقى <span>{0}</span> حرف'
            },
            wordsLeft: {
                'en-GB': '<span>{0}</span> words left',
                'ar-AE': 'باقى <span>{0}</span> حرف'
            },
            invalidEmailAddress: {
                'en-GB': 'Invalid email address',
                'ar-AE': 'عنوان البريد غير صحيح'
            },
            invalidURLAddress: {
                'en-GB': 'Invalid URL. Please do not include http://',
                'ar-AE': 'عنوان البريد غير صحيح'
            },
            generalError: {
                'en-GB': 'System was not able to process your request. Please try again.'
            }
        },
        weekdays: {
            saturday: { 'en-GB': 'Saturday', 'ar-AE': 'السبت' },
            sunday: { 'en-GB': 'Sunday', 'ar-AE': 'الأحد' },
            monday: { 'en-GB': 'Monday', 'ar-AE': 'الإثنين' },
            tuesday: { 'en-GB': 'Tuesday', 'ar-AE': 'الثلاثاء' },
            wednesday: { 'en-GB': 'Wednesday', 'ar-AE': 'الأربعاء' },
            thursday: { 'en-GB': 'Thursday', 'ar-AE': 'الخميس' },
            friday: { 'en-GB': 'Friday', 'ar-AE': 'الجمعة' },
            sat: { 'en-GB': 'Sat', 'ar-AE': 'السبت' },
            sun: { 'en-GB': 'Sun', 'ar-AE': 'الأحد' },
            mon: { 'en-GB': 'Mon', 'ar-AE': 'الإثنين' },
            tue: { 'en-GB': 'Tue', 'ar-AE': 'الثلاثاء' },
            wed: { 'en-GB': 'Wed', 'ar-AE': 'الأربعاء' },
            thu: { 'en-GB': 'Thu', 'ar-AE': 'الخميس' },
            fri: { 'en-GB': 'Fri', 'ar-AE': 'الجمعة' },
            fullOrder: ['sunday', 'monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday'],
            shortOrder: ['sun', 'mon', 'tue', 'wed', 'thu', 'fri', 'sat'],
            getDayName: function (i) {
                return $.fi.resources.weekdays[$.fi.resources.weekdays.fullOrder[i]][$.fi.languageCode];
            },
            getDayNameAbbr: function (i) {
                return $.fi.resources.weekdays[$.fi.resources.weekdays.shortOrder[i]][$.fi.languageCode];
            }
        },
        months: {
            january: { 'en-GB': 'January', 'ar-AE': 'يناير' },
            february: { 'en-GB': 'February', 'ar-AE': 'فبراير' },
            march: { 'en-GB': 'March', 'ar-AE': 'مارس' },
            april: { 'en-GB': 'April', 'ar-AE': 'أبريل' },
            may: { 'en-GB': 'May', 'ar-AE': 'مايو' },
            june: { 'en-GB': 'June', 'ar-AE': 'يونيو' },
            july: { 'en-GB': 'July', 'ar-AE': 'يوليو' },
            august: { 'en-GB': 'August', 'ar-AE': 'أغسطس' },
            september: { 'en-GB': 'September', 'ar-AE': 'سبتمبر' },
            october: { 'en-GB': 'October', 'ar-AE': 'أكتوبر' },
            november: { 'en-GB': 'November', 'ar-AE': 'نوفمبر' },
            december: { 'en-GB': 'December', 'ar-AE': 'ديسمبر' },

            jan: { 'en-GB': 'Jan', 'ar-AE': 'يناير' },
            feb: { 'en-GB': 'Feb', 'ar-AE': 'فبراير' },
            mar: { 'en-GB': 'Mar', 'ar-AE': 'مارس' },
            apr: { 'en-GB': 'Apr', 'ar-AE': 'أبريل' },
            may: { 'en-GB': 'May', 'ar-AE': 'مايو' },
            jun: { 'en-GB': 'Jun', 'ar-AE': 'يونيو' },
            jul: { 'en-GB': 'Jul', 'ar-AE': 'يوليو' },
            aug: { 'en-GB': 'Aug', 'ar-AE': 'أغسطس' },
            sep: { 'en-GB': 'Sep', 'ar-AE': 'سبتمبر' },
            oct: { 'en-GB': 'Oct', 'ar-AE': 'أكتوبر' },
            nov: { 'en-GB': 'Nov', 'ar-AE': 'نوفمبر' },
            dec: { 'en-GB': 'Dec', 'ar-AE': 'ديسمبر' },

            fullOrder: ['january', 'february', 'march', 'april', 'may', 'june', 'july', 'august', 'september', 'october', 'november', 'december'],
            shortOrder: ['jan', 'feb', 'mar', 'apr', 'may', 'jun', 'jul', 'aug', 'sep', 'oct', 'nov', 'dec'],

            getMonthName: function (i) {
                return $.fi.resources.months[$.fi.resources.months.fullOrder[i]][$.fi.languageCode];
            },
            getMonthNameAbbr: function (i) {
                return $.fi.resources.months[$.fi.resources.months.shortOrder[i]][$.fi.languageCode];
            }

        }
    };

    String.prototype.limit = function (len) {
        var result = $.trim(this);
        if (this.length > len) {
            result = this.substring(0, len + 1);
            while (result.substring(result.length - 1, result.length) !== " " && result.length > 0) {
                result = result.substring(0, result.length - 1);
            }
            result = $.trim(result) + '&hellip;';
        }
        return result;
    };

    String.prototype.format = function () {
        var args = arguments;
        return this.replace(/{(\d+)}/g, function (match, number) {
            return typeof args[number] != 'undefined'
      ? args[number]
      : '{' + number + '}'
    ;
        });
    };

    $(document).ready(function () {
        $(document).ready(function () {
            $('blockquote p').each(function () {
                var qc = '<span class="quote-close">&#8221;</span>';
                var t = $(this).html();
                var i = t.lastIndexOf(' ');
                $(this).html('<span class="quote-open">&#8220</span>' + t.substring(0, i) + ' <nobr>' + t.substring(i + 1) + qc + '</nobr>');
                //if ($.browser.msie && parseFloat($.browser.version) < 8) $(this).addClass('ie7fix');
                //$(this).parent().append('<span class="clear"></span>');
            });
        });

        $('a[rel=external]').attr('target', '_blank');

        // BOX
        $('div.box h2.box a.title').click(function (event) {
            event.preventDefault();
            if ($(this).hasClass('working')) return;
            var th = $(this);
            var to = th.parents('div.box').find(th.attr('href'));
            if ($(this).parent().hasClass('expanded')) {
                th.addClass('working');
                to.slideUp(500, function () {
                    th.removeClass('working').parent().removeClass('expanded').addClass('collapsed')
                });
            } else {
                th.addClass('working');
                to.slideDown(500, function () { th.removeClass('working'); });
                $(this).parent().removeClass('collapsed').addClass('expanded');
            }
        });
    });
})(jQuery);
/*
 * jQuery Easing v1.3 - http://gsgd.co.uk/sandbox/jquery/easing/
 *
 * Uses the built in easing capabilities added In jQuery 1.1
 * to offer multiple easing options
 *
 * TERMS OF USE - jQuery Easing
 * 
 * Open source under the BSD License. 
 * 
 * Copyright © 2008 George McGinley Smith
 * All rights reserved.
 * 
 * Redistribution and use in source and binary forms, with or without modification, 
 * are permitted provided that the following conditions are met:
 * 
 * Redistributions of source code must retain the above copyright notice, this list of 
 * conditions and the following disclaimer.
 * Redistributions in binary form must reproduce the above copyright notice, this list 
 * of conditions and the following disclaimer in the documentation and/or other materials 
 * provided with the distribution.
 * 
 * Neither the name of the author nor the names of contributors may be used to endorse 
 * or promote products derived from this software without specific prior written permission.
 * 
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND ANY 
 * EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF
 * MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE
 *  COPYRIGHT OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL,
 *  EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE
 *  GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED 
 * AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING
 *  NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED 
 * OF THE POSSIBILITY OF SUCH DAMAGE. 
 *
*/

// t: current time, b: begInnIng value, c: change In value, d: duration
jQuery.easing['jswing'] = jQuery.easing['swing'];

jQuery.extend( jQuery.easing,
{
	def: 'easeOutQuad',
	swing: function (x, t, b, c, d) {
		//alert(jQuery.easing.default);
		return jQuery.easing[jQuery.easing.def](x, t, b, c, d);
	},
	easeInQuad: function (x, t, b, c, d) {
		return c*(t/=d)*t + b;
	},
	easeOutQuad: function (x, t, b, c, d) {
		return -c *(t/=d)*(t-2) + b;
	},
	easeInOutQuad: function (x, t, b, c, d) {
		if ((t/=d/2) < 1) return c/2*t*t + b;
		return -c/2 * ((--t)*(t-2) - 1) + b;
	},
	easeInCubic: function (x, t, b, c, d) {
		return c*(t/=d)*t*t + b;
	},
	easeOutCubic: function (x, t, b, c, d) {
		return c*((t=t/d-1)*t*t + 1) + b;
	},
	easeInOutCubic: function (x, t, b, c, d) {
		if ((t/=d/2) < 1) return c/2*t*t*t + b;
		return c/2*((t-=2)*t*t + 2) + b;
	},
	easeInQuart: function (x, t, b, c, d) {
		return c*(t/=d)*t*t*t + b;
	},
	easeOutQuart: function (x, t, b, c, d) {
		return -c * ((t=t/d-1)*t*t*t - 1) + b;
	},
	easeInOutQuart: function (x, t, b, c, d) {
		if ((t/=d/2) < 1) return c/2*t*t*t*t + b;
		return -c/2 * ((t-=2)*t*t*t - 2) + b;
	},
	easeInQuint: function (x, t, b, c, d) {
		return c*(t/=d)*t*t*t*t + b;
	},
	easeOutQuint: function (x, t, b, c, d) {
		return c*((t=t/d-1)*t*t*t*t + 1) + b;
	},
	easeInOutQuint: function (x, t, b, c, d) {
		if ((t/=d/2) < 1) return c/2*t*t*t*t*t + b;
		return c/2*((t-=2)*t*t*t*t + 2) + b;
	},
	easeInSine: function (x, t, b, c, d) {
		return -c * Math.cos(t/d * (Math.PI/2)) + c + b;
	},
	easeOutSine: function (x, t, b, c, d) {
		return c * Math.sin(t/d * (Math.PI/2)) + b;
	},
	easeInOutSine: function (x, t, b, c, d) {
		return -c/2 * (Math.cos(Math.PI*t/d) - 1) + b;
	},
	easeInExpo: function (x, t, b, c, d) {
		return (t==0) ? b : c * Math.pow(2, 10 * (t/d - 1)) + b;
	},
	easeOutExpo: function (x, t, b, c, d) {
		return (t==d) ? b+c : c * (-Math.pow(2, -10 * t/d) + 1) + b;
	},
	easeInOutExpo: function (x, t, b, c, d) {
		if (t==0) return b;
		if (t==d) return b+c;
		if ((t/=d/2) < 1) return c/2 * Math.pow(2, 10 * (t - 1)) + b;
		return c/2 * (-Math.pow(2, -10 * --t) + 2) + b;
	},
	easeInCirc: function (x, t, b, c, d) {
		return -c * (Math.sqrt(1 - (t/=d)*t) - 1) + b;
	},
	easeOutCirc: function (x, t, b, c, d) {
		return c * Math.sqrt(1 - (t=t/d-1)*t) + b;
	},
	easeInOutCirc: function (x, t, b, c, d) {
		if ((t/=d/2) < 1) return -c/2 * (Math.sqrt(1 - t*t) - 1) + b;
		return c/2 * (Math.sqrt(1 - (t-=2)*t) + 1) + b;
	},
	easeInElastic: function (x, t, b, c, d) {
		var s=1.70158;var p=0;var a=c;
		if (t==0) return b;  if ((t/=d)==1) return b+c;  if (!p) p=d*.3;
		if (a < Math.abs(c)) { a=c; var s=p/4; }
		else var s = p/(2*Math.PI) * Math.asin (c/a);
		return -(a*Math.pow(2,10*(t-=1)) * Math.sin( (t*d-s)*(2*Math.PI)/p )) + b;
	},
	easeOutElastic: function (x, t, b, c, d) {
		var s=1.70158;var p=0;var a=c;
		if (t==0) return b;  if ((t/=d)==1) return b+c;  if (!p) p=d*.3;
		if (a < Math.abs(c)) { a=c; var s=p/4; }
		else var s = p/(2*Math.PI) * Math.asin (c/a);
		return a*Math.pow(2,-10*t) * Math.sin( (t*d-s)*(2*Math.PI)/p ) + c + b;
	},
	easeInOutElastic: function (x, t, b, c, d) {
		var s=1.70158;var p=0;var a=c;
		if (t==0) return b;  if ((t/=d/2)==2) return b+c;  if (!p) p=d*(.3*1.5);
		if (a < Math.abs(c)) { a=c; var s=p/4; }
		else var s = p/(2*Math.PI) * Math.asin (c/a);
		if (t < 1) return -.5*(a*Math.pow(2,10*(t-=1)) * Math.sin( (t*d-s)*(2*Math.PI)/p )) + b;
		return a*Math.pow(2,-10*(t-=1)) * Math.sin( (t*d-s)*(2*Math.PI)/p )*.5 + c + b;
	},
	easeInBack: function (x, t, b, c, d, s) {
		if (s == undefined) s = 1.70158;
		return c*(t/=d)*t*((s+1)*t - s) + b;
	},
	easeOutBack: function (x, t, b, c, d, s) {
		if (s == undefined) s = 1.70158;
		return c*((t=t/d-1)*t*((s+1)*t + s) + 1) + b;
	},
	easeInOutBack: function (x, t, b, c, d, s) {
		if (s == undefined) s = 1.70158; 
		if ((t/=d/2) < 1) return c/2*(t*t*(((s*=(1.525))+1)*t - s)) + b;
		return c/2*((t-=2)*t*(((s*=(1.525))+1)*t + s) + 2) + b;
	},
	easeInBounce: function (x, t, b, c, d) {
		return c - jQuery.easing.easeOutBounce (x, d-t, 0, c, d) + b;
	},
	easeOutBounce: function (x, t, b, c, d) {
		if ((t/=d) < (1/2.75)) {
			return c*(7.5625*t*t) + b;
		} else if (t < (2/2.75)) {
			return c*(7.5625*(t-=(1.5/2.75))*t + .75) + b;
		} else if (t < (2.5/2.75)) {
			return c*(7.5625*(t-=(2.25/2.75))*t + .9375) + b;
		} else {
			return c*(7.5625*(t-=(2.625/2.75))*t + .984375) + b;
		}
	},
	easeInOutBounce: function (x, t, b, c, d) {
		if (t < d/2) return jQuery.easing.easeInBounce (x, t*2, 0, c, d) * .5 + b;
		return jQuery.easing.easeOutBounce (x, t*2-d, 0, c, d) * .5 + c*.5 + b;
	}
});

/*
 *
 * TERMS OF USE - EASING EQUATIONS
 * 
 * Open source under the BSD License. 
 * 
 * Copyright © 2001 Robert Penner
 * All rights reserved.
 * 
 * Redistribution and use in source and binary forms, with or without modification, 
 * are permitted provided that the following conditions are met:
 * 
 * Redistributions of source code must retain the above copyright notice, this list of 
 * conditions and the following disclaimer.
 * Redistributions in binary form must reproduce the above copyright notice, this list 
 * of conditions and the following disclaimer in the documentation and/or other materials 
 * provided with the distribution.
 * 
 * Neither the name of the author nor the names of contributors may be used to endorse 
 * or promote products derived from this software without specific prior written permission.
 * 
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND ANY 
 * EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF
 * MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE
 *  COPYRIGHT OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL,
 *  EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE
 *  GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED 
 * AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING
 *  NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED 
 * OF THE POSSIBILITY OF SUCH DAMAGE. 
 *
 */
/**
* jQuery lightBox plugin
* This jQuery plugin was inspired and based on Lightbox 2 by Lokesh Dhakar (http://www.huddletogether.com/projects/lightbox2/)
* and adapted to me for use like a plugin from jQuery.
* @name jquery-lightbox-0.5.js
* @author Leandro Vieira Pinho - http://leandrovieira.com
* @version 0.5
* @date April 11, 2008
* @category jQuery plugin
* @copyright (c) 2008 Leandro Vieira Pinho (leandrovieira.com)
* @license CCAttribution-ShareAlike 2.5 Brazil - http://creativecommons.org/licenses/by-sa/2.5/br/deed.en_US
* @example Visit http://leandrovieira.com/projects/jquery/lightbox/ for more informations about this jQuery plugin
*/

// Offering a Custom Alias suport - More info: http://docs.jquery.com/Plugins/Authoring#Custom_Alias
(function ($) {
    /**
    * $ is an alias to jQuery object
    *
    */
    $.fn.lightBox = function (settings) {
        // Settings to configure the jQuery lightBox plugin how you like
        settings = jQuery.extend({
            // Configuration related to overlay
            overlayBgColor: '#000', 	// (string) Background color to overlay; inform a hexadecimal value like: #RRGGBB. Where RR, GG, and BB are the hexadecimal values for the red, green, and blue values of the color.
            overlayOpacity: 0.8, 	// (integer) Opacity value to overlay; inform: 0.X. Where X are number from 0 to 9
            // Configuration related to navigation
            fixedNavigation: false, 	// (boolean) Boolean that informs if the navigation (next and prev button) will be fixed or not in the interface.
            // Configuration related to images
            imageLoading: 'content/siteimages/loadinfo.gif', 	// (string) Path and the name of the loading icon
            imageBtnPrev: 'content/siteimages/prev.png', 		// (string) Path and the name of the prev button image
            imageBtnNext: 'content/siteimages/next.png', 		// (string) Path and the name of the next button image
            imageBtnClose: 'content/siteimages/close.png', 	// (string) Path and the name of the close btn
            imageBlank: 'content/siteimages/lightbox-blank.gif', 		// (string) Path and the name of a blank image (one pixel)
            // Configuration related to container image box
            containerBorderSize: 10, 		// (integer) If you adjust the padding in the CSS for the container, #lightbox-container-image-box, you will need to update this value
            containerResizeSpeed: 400, 	// (integer) Specify the resize duration of container image. These number are miliseconds. 400 is default.
            // Configuration related to texts in caption. For example: Image 2 of 8. You can alter either "Image" and "of" texts.
            txtImage: 'Image', // (string) Specify text "Image"
            txtOf: 'of', 	// (string) Specify text "of"
            // Configuration related to keyboard navigation
            keyToClose: 'c', 	// (string) (c = close) Letter to close the jQuery lightBox interface. Beyond this letter, the letter X and the SCAPE key is used to.
            keyToPrev: 'p', 	// (string) (p = previous) Letter to show the previous image
            keyToNext: 'n', 	// (string) (n = next) Letter to show the next image.
            // Don´t alter these variables in any way
            imageArray: [],
            activeImage: 0
        }, settings);
        // Caching the jQuery object with all elements matched
        var jQueryMatchedObj = this; // This, in this context, refer to jQuery object
        /**
        * Initializing the plugin calling the start function
        *
        * @return boolean false
        */
        function _initialize() {
            _start(this, jQueryMatchedObj); // This, in this context, refer to object (link) which the user have clicked
            return false; // Avoid the browser following the link
        }
        /**
        * Start the jQuery lightBox plugin
        *
        * @param object objClicked The object (link) whick the user have clicked
        * @param object jQueryMatchedObj The jQuery object with all elements matched
        */
        function _start(objClicked, jQueryMatchedObj) {
            // Hime some elements to avoid conflict with overlay in IE. These elements appear above the overlay.
            $('embed, object, select').css({ 'visibility': 'hidden' });
            // Call the function to create the markup structure; style some elements; assign events in some elements.
            _set_interface();
            // Unset total images in imageArray
            settings.imageArray.length = 0;
            // Unset image active information
            settings.activeImage = 0;
            // We have an image set? Or just an image? Let´s see it.
            if (jQueryMatchedObj.length == 1) {
                settings.imageArray.push(new Array(objClicked.getAttribute('href'), objClicked.getAttribute('title')));
            } else {
                // Add an Array (as many as we have), with href and title atributes, inside the Array that storage the images references		
                for (var i = 0; i < jQueryMatchedObj.length; i++) {
                    settings.imageArray.push(new Array(jQueryMatchedObj[i].getAttribute('href'), jQueryMatchedObj[i].getAttribute('title')));
                }
            }
            while (settings.imageArray[settings.activeImage][0] != objClicked.getAttribute('href')) {
                settings.activeImage++;
            }
            // Call the function that prepares image exibition
            _set_image_to_view();
        }
        /**
        * Create the jQuery lightBox plugin interface
        *
        * The HTML markup will be like that:
        <div id="jquery-overlay"></div>
        <div id="jquery-lightbox">
        <div id="lightbox-container-image-box">
        <div id="lightbox-container-image">
        <img src="../fotos/XX.jpg" id="lightbox-image">
        <div id="lightbox-nav">
        <a href="#" id="lightbox-nav-btnPrev"></a>
        <a href="#" id="lightbox-nav-btnNext"></a>
        </div>
        <div id="lightbox-loading">
        <a href="#" id="lightbox-loading-link">
        <img src="../images/lightbox-ico-loading.gif">
        </a>
        </div>
        </div>
        </div>
        <div id="lightbox-container-image-data-box">
        <div id="lightbox-container-image-data">
        <div id="lightbox-image-details">
        <span id="lightbox-image-details-caption"></span>
        <span id="lightbox-image-details-currentNumber"></span>
        </div>
        <div id="lightbox-secNav">
        <a href="#" id="lightbox-secNav-btnClose">
        <img src="../images/lightbox-btn-close.gif">
        </a>
        </div>
        </div>
        </div>
        </div>
        *
        */
        function _set_interface() {
            // Apply the HTML markup into body tag
            $('body').append('<div id="jquery-overlay"></div><div id="jquery-lightbox"><div id="lightbox-container-image-box"><span class="lightbox-tl"></span><span class="lightbox-tr"></span><div id="lightbox-container-image"><img id="lightbox-image"><div id="lightbox-loading"><a href="#" id="lightbox-loading-link"><img src="' + settings.imageLoading + '"></a></div><span class="lightbox-l"></span><span class="lightbox-r"></span><div class="lightbox-tc">&nbsp;</div><div class="lightbox-bc">&nbsp;</div><span class="lightbox-bl"></span><span class="lightbox-br"></span></div></div><div id="lightbox-container-image-data-box"><div id="lightbox-container-image-data"><div id="lightbox-image-details"><span id="lightbox-image-details-caption"></span><span id="lightbox-image-details-currentNumber"></span></div><div id="lightbox-secNav"><a href="#" id="lightbox-secNav-btnClose"><img src="' + settings.imageBtnClose + '"></a><a href="#" id="lightbox-nav-btnPrev"></a><a href="#" id="lightbox-nav-btnNext"></a></div></div></div></div>');
            // Get page sizes
            var arrPageSizes = ___getPageSize();

            $('#lightbox-nav-btnPrev').css({ 'background': 'url(' + settings.imageBtnPrev + ') top left no-repeat' });
            $('#lightbox-nav-btnNext').css({ 'background': 'url(' + settings.imageBtnNext + ') top left no-repeat' });

            $('#lightbox-nav-btnPrev').click(function (event) {
                event.preventDefault();
                if ($(this).hasClass('disabled')) {
                    return false;
                }
                settings.activeImage = settings.activeImage - 1;
                _set_image_to_view();
                return false;
            });

            $('#lightbox-nav-btnNext').click(function (event) {
                event.preventDefault();
                if ($(this).hasClass('disabled')) {
                    return false;
                }
                settings.activeImage = settings.activeImage + 1;
                _set_image_to_view();
                return false;
            });

            // Style overlay and show it

            $('#jquery-overlay').css({
                backgroundColor: settings.overlayBgColor,
                opacity: settings.overlayOpacity,
                width: arrPageSizes[0],
                height: arrPageSizes[1]
            }).fadeIn();
            // Get page scroll
            var arrPageScroll = ___getPageScroll();
            // Calculate top and left offset for the jquery-lightbox div object and show it
            $('#jquery-lightbox').css({
                top: arrPageScroll[1] + (arrPageSizes[3] / 10),
                left: arrPageScroll[0]
            }).show();
            // Assigning click events in elements to close overlay
            $('#jquery-overlay,#jquery-lightbox').click(function () {
                _finish();
            });
            // Assign the _finish function to lightbox-loading-link and lightbox-secNav-btnClose objects
            $('#lightbox-loading-link,#lightbox-secNav-btnClose').click(function () {
                _finish();
                return false;
            });
            // If window was resized, calculate the new overlay dimensions
            $(window).resize(function () {
                // Get page sizes
                var arrPageSizes = ___getPageSize();
                // Style overlay and show it
                $('#jquery-overlay').css({
                    width: arrPageSizes[0],
                    height: arrPageSizes[1]
                });
                // Get page scroll
                var arrPageScroll = ___getPageScroll();
                // Calculate top and left offset for the jquery-lightbox div object and show it
                $('#jquery-lightbox').css({
                    top: arrPageScroll[1] + (arrPageSizes[3] / 10),
                    left: arrPageScroll[0]
                });
            });
        }
        /**
        * Prepares image exibition; doing a image´s preloader to calculate it´s size
        *
        */
        function _set_image_to_view() { // show the loading
            // Show the loading
            $('#lightbox-loading').show();
            $('#lightbox-image').css({ visibility: 'hidden' });
            if (settings.fixedNavigation) {
                $('#lightbox-image,#lightbox-container-image-data-box,#lightbox-image-details-currentNumber').hide();
            } else {
                // Hide some elements
                // #lightbox-nav-btnPrev,#lightbox-nav-btnNext
                $('#lightbox-container-image-data-box,#lightbox-image-details-currentNumber').hide();
            }
            // Image preload process
            var objImagePreloader = new Image();
            objImagePreloader.onload = function () {
                $('#lightbox-image').attr('src', settings.imageArray[settings.activeImage][0]);
                // Perfomance an effect in the image container resizing it
                _resize_container_image_box(objImagePreloader.width, objImagePreloader.height);
                //	clear onLoad, IE behaves irratically with animated gifs otherwise
                objImagePreloader.onload = function () { };
            };
            objImagePreloader.src = settings.imageArray[settings.activeImage][0];
        };
        /**
        * Perfomance an effect in the image container resizing it
        *
        * @param integer intImageWidth The image´s width that will be showed
        * @param integer intImageHeight The image´s height that will be showed
        */
        function _resize_container_image_box(intImageWidth, intImageHeight) {
            // Get current width and height
            var intCurrentWidth = $('#lightbox-container-image-box').width();
            var intCurrentHeight = $('#lightbox-container-image-box').height();
            // Get the width and height of the selected image plus the padding
            var intWidth = (intImageWidth + /*(settings.containerBorderSize * 2)*/0); // Plus the image´s width and the left and right padding value
            var intHeight = (intImageHeight + /*(settings.containerBorderSize * 2)*/0); // Plus the image´s height and the left and right padding value
            // Diferences
            var intDiffW = intCurrentWidth - intWidth;
            var intDiffH = intCurrentHeight - intHeight;
            // Perfomance the effect
            $('#lightbox-container-image-box').animate({ width: intWidth, height: intHeight }, settings.containerResizeSpeed, function () { _show_image(); });
            if ((intDiffW == 0) && (intDiffH == 0)) {
                if ($.browser.msie) {
                    ___pause(250);
                } else {
                    ___pause(100);
                }
            }
            $('#lightbox-container-image-data-box').css({ width: intImageWidth });
            //$('#lightbox-nav-btnPrev,#lightbox-nav-btnNext').css({ height: intImageHeight + (settings.containerBorderSize * 2) });
        };
        /**
        * Show the prepared image
        *
        */
        function _show_image() {
            $('#lightbox-loading').hide();
            $('#lightbox-image').css({ visibility: 'visible' }).hide();
            $('#lightbox-image').fadeIn(function () {
                _show_image_data();
                _set_navigation();
            });
            _preload_neighbor_images();
        };
        /**
        * Show the image information
        *
        */
        function _show_image_data() {
            $('#lightbox-container-image-data-box').slideDown('fast');
            $('#lightbox-image-details-caption').hide();
            if (settings.imageArray[settings.activeImage][1]) {
                $('#lightbox-image-details-caption').html(settings.imageArray[settings.activeImage][1]).show();
            }
            // If we have a image set, display 'Image X of X'
            if (settings.imageArray.length > 1) {
                $('#lightbox-image-details-currentNumber').html(settings.txtImage + ' ' + (settings.activeImage + 1) + ' ' + settings.txtOf + ' ' + settings.imageArray.length).show();
            }
        }
        /**
        * Display the button navigations
        *
        */
        function _set_navigation() {
            $('#lightbox-nav').show();

            // Instead to define this configuration in CSS file, we define here. And it´s need to IE. Just.




            // Show the prev button, if not the first image in set
            if (settings.activeImage != 0) {
                $('#lightbox-nav-btnPrev').removeClass('disabled').css({ opacity: 1 });
                /*if ( settings.fixedNavigation ) {
                $('#lightbox-nav-btnPrev').css({ 'background' : 'url(' + settings.imageBtnPrev + ') top left no-repeat' })
                .unbind()
                .bind('click',function() {
                settings.activeImage = settings.activeImage - 1;
                _set_image_to_view();
                return false;
                });
                } else {
                // Show the images button for Next buttons
                $('#lightbox-nav-btnPrev').unbind().hover(function() {
                $(this).css({ 'background' : 'url(' + settings.imageBtnPrev + ') top left no-repeat' });
                },function() {
                $(this).css({ 'background' : 'url(' + settings.imageBtnPrev + ') top left no-repeat' });
                }).show().bind('click',function() {
                settings.activeImage = settings.activeImage - 1;
                _set_image_to_view();
                return false;
                });
                }*/
            } else {
                $('#lightbox-nav-btnPrev').addClass('disabled').css({ opacity: 0.3 });
            }

            // Show the next button, if not the last image in set
            if (settings.activeImage != (settings.imageArray.length - 1)) {
                $('#lightbox-nav-btnNext').removeClass('disabled').css({ opacity: 1 });
                /*if ( settings.fixedNavigation ) {
                $('#lightbox-nav-btnNext').css({ 'background' : 'url(' + settings.imageBtnNext + ') top left no-repeat' })
                .unbind()
                .bind('click',function() {
                settings.activeImage = settings.activeImage + 1;
                _set_image_to_view();
                return false;
                });
                } else {
                // Show the images button for Next buttons
                $('#lightbox-nav-btnNext').unbind().hover(function() {
                $(this).css({ 'background' : 'url(' + settings.imageBtnNext + ') top left no-repeat' });
                },function() {
                $(this).css({ 'background' : 'url(' + settings.imageBtnNext + ') top left no-repeat' });
                }).show().bind('click',function() {
                settings.activeImage = settings.activeImage + 1;
                _set_image_to_view();
                return false;
                });
                }*/
            } else {
                $('#lightbox-nav-btnNext').addClass('disabled').css({ opacity: 0.3 });
            }
            // Enable keyboard navigation
            _enable_keyboard_navigation();
        }
        /**
        * Enable a support to keyboard navigation
        *
        */
        function _enable_keyboard_navigation() {
            $(document).keydown(function (objEvent) {
                _keyboard_action(objEvent);
            });
        }
        /**
        * Disable the support to keyboard navigation
        *
        */
        function _disable_keyboard_navigation() {
            $(document).unbind();
        }
        /**
        * Perform the keyboard actions
        *
        */
        function _keyboard_action(objEvent) {
            // To ie
            if (objEvent == null) {
                keycode = event.keyCode;
                escapeKey = 27;
                // To Mozilla
            } else {
                keycode = objEvent.keyCode;
                escapeKey = objEvent.DOM_VK_ESCAPE;
            }
            // Get the key in lower case form
            key = String.fromCharCode(keycode).toLowerCase();
            // Verify the keys to close the ligthBox
            if ((key == settings.keyToClose) || (key == 'x') || (keycode == escapeKey)) {
                _finish();
            }
            // Verify the key to show the previous image
            if ((key == settings.keyToPrev) || (keycode == 37)) {
                // If we´re not showing the first image, call the previous
                if (settings.activeImage != 0) {
                    settings.activeImage = settings.activeImage - 1;
                    _set_image_to_view();
                    _disable_keyboard_navigation();
                }
            }
            // Verify the key to show the next image
            if ((key == settings.keyToNext) || (keycode == 39)) {
                // If we´re not showing the last image, call the next
                if (settings.activeImage != (settings.imageArray.length - 1)) {
                    settings.activeImage = settings.activeImage + 1;
                    _set_image_to_view();
                    _disable_keyboard_navigation();
                }
            }
        }
        /**
        * Preload prev and next images being showed
        *
        */
        function _preload_neighbor_images() {
            if ((settings.imageArray.length - 1) > settings.activeImage) {
                objNext = new Image();
                objNext.src = settings.imageArray[settings.activeImage + 1][0];
            }
            if (settings.activeImage > 0) {
                objPrev = new Image();
                objPrev.src = settings.imageArray[settings.activeImage - 1][0];
            }
        }
        /**
        * Remove jQuery lightBox plugin HTML markup
        *
        */
        function _finish() {
            $('#jquery-lightbox').remove();
            $('#jquery-overlay').fadeOut(function () { $('#jquery-overlay').remove(); });
            // Show some elements to avoid conflict with overlay in IE. These elements appear above the overlay.
            $('embed, object, select').css({ 'visibility': 'visible' });
        }
        /**
        / THIRD FUNCTION
        * getPageSize() by quirksmode.com
        *
        * @return Array Return an array with page width, height and window width, height
        */
        function ___getPageSize() {
            var xScroll, yScroll;
            if (window.innerHeight && window.scrollMaxY) {
                xScroll = window.innerWidth + window.scrollMaxX;
                yScroll = window.innerHeight + window.scrollMaxY;
            } else if (document.body.scrollHeight > document.body.offsetHeight) { // all but Explorer Mac
                xScroll = document.body.scrollWidth;
                yScroll = document.body.scrollHeight;
            } else { // Explorer Mac...would also work in Explorer 6 Strict, Mozilla and Safari
                xScroll = document.body.offsetWidth;
                yScroll = document.body.offsetHeight;
            }
            var windowWidth, windowHeight;
            if (self.innerHeight) {	// all except Explorer
                if (document.documentElement.clientWidth) {
                    windowWidth = document.documentElement.clientWidth;
                } else {
                    windowWidth = self.innerWidth;
                }
                windowHeight = self.innerHeight;
            } else if (document.documentElement && document.documentElement.clientHeight) { // Explorer 6 Strict Mode
                windowWidth = document.documentElement.clientWidth;
                windowHeight = document.documentElement.clientHeight;
            } else if (document.body) { // other Explorers
                windowWidth = document.body.clientWidth;
                windowHeight = document.body.clientHeight;
            }
            // for small pages with total height less then height of the viewport
            if (yScroll < windowHeight) {
                pageHeight = windowHeight;
            } else {
                pageHeight = yScroll;
            }
            // for small pages with total width less then width of the viewport
            if (xScroll < windowWidth) {
                pageWidth = xScroll;
            } else {
                pageWidth = windowWidth;
            }
            arrayPageSize = new Array(pageWidth, pageHeight, windowWidth, windowHeight);
            return arrayPageSize;
        };
        /**
        / THIRD FUNCTION
        * getPageScroll() by quirksmode.com
        *
        * @return Array Return an array with x,y page scroll values.
        */
        function ___getPageScroll() {
            var xScroll, yScroll;
            if (self.pageYOffset) {
                yScroll = self.pageYOffset;
                xScroll = self.pageXOffset;
            } else if (document.documentElement && document.documentElement.scrollTop) {	 // Explorer 6 Strict
                yScroll = document.documentElement.scrollTop;
                xScroll = document.documentElement.scrollLeft;
            } else if (document.body) {// all other Explorers
                yScroll = document.body.scrollTop;
                xScroll = document.body.scrollLeft;
            }
            arrayPageScroll = new Array(xScroll, yScroll);
            return arrayPageScroll;
        };
        /**
        * Stop the code execution from a escified time in milisecond
        *
        */
        function ___pause(ms) {
            var date = new Date();
            curDate = null;
            do { var curDate = new Date(); }
            while (curDate - date < ms);
        };
        // Return the jQuery object for chaining. The unbind method is used to avoid click conflict when the plugin is called more than once
        return this.unbind('click').click(_initialize);
    };
})(jQuery); // Call and execute the function immediately passing the jQuery object
/*********************
//* jQuery Multi Level CSS Menu V1.1
//* Author: Future Internet 
//* Last update: Dec 27 2010': Add delay to prevent from displaying sub menus because of mouse movements or hiding sub menus because of fast movement of mouse
//* Support/Questions: support@fi.ae
*********************/
var jqueryslidemenu = {

    animateduration: { over: 100, out: 100, delay: 100, hoverDelay: 1 }, //duration of slide in/ out animation / delay before displaying or hiding menu, in milliseconds

    buildmenu: function (menuid, isArabic) {
        var me = this;

        me.fitMainMenu = function (step) {
            if (typeof (step) == 'undefined') {
                // fit menu
                var totalWidth = me.e.find('ul.primary-navigation').width();
                // calculate item width
                var ct = 0;
                var totalItems = 0;
                me.e.find('ul.primary-navigation').children().each(function () {
                    $(this).css({ paddingLeft: 0, paddingRight: 0 });
                    ct += $(this).outerWidth(1);
                    totalItems++;
                });
                var diff = totalWidth - ct;
                var additionToEachItem = diff / totalItems;
                me.e.find('ul.primary-navigation').children().each(function () {
                    if (diff > 0) {
                        var p = ($(this).outerWidth(1) - $(this).width());
                        var av = p;
                        p += additionToEachItem;
                        var pl = Math.floor(p / 2);
                        var pr = Math.ceil(p / 2);
                        diff -= pl + pr - av;
                        if (diff < 0) {
                            pl += diff / 2;
                            pr += diff / 2;
                            diff = 0;
                        }

                        if ($(this).hasClass('last') && diff > 0) {
                            pl += Math.floor(diff / 2);
                            pr += Math.floor(diff / 2);
                            diff = 0;
                        }

                        $(this).css({ paddingLeft: pl, paddingRight: pr });
                    }
                });
            } else {
                var everythingIsLoaded = true;
                me.e.find('ul.primary-navigation a.first-level').each(function () { everythingIsLoaded = $(this).hasClass('loaded') ? everythingIsLoaded : false });
                if (everythingIsLoaded) {
                    me.e.find('ul.primary-navigation').children().find('a.first-level').addClass('checked').find('span.toi').remove();
                    me.fitMainMenu();
                } else {
                    window.setTimeout(function () { me.fitMainMenu(1); }, 100);
                }
            }
        };



        jQuery(document).ready(function ($) {
            me.e = $('#' + menuid);
            me.fitMainMenu(1);

            var $mainmenu = $("#" + menuid + " ul.primary-navigation");

            $('#' + menuid + ' ul.primary-navigation ul').css({ opacity: '0.95' });

            var $headers = $mainmenu.children();

            function bindDisplaySubItems(item) {
                var $curobj = $(item);
                var $subul = $(item).find('ul:eq(0)');

                // fix the width
                $subul.width(1000);
                var w = 0;
                $subul.find('li').each(function () {
                    var wi = $(this).css({ float: 'left' }).width();
                    $(this).css({ float: 'none' });
                    if (wi > w) w = wi;
                });
                $subul.find('li').width(w).find('a').css({ display: 'block' });
                $subul.width($subul.find('li:first').outerWidth(1));
                var self = item;
                self.timer = null;
                self._dimensions = { w: self.offsetWidth, h: self.offsetHeight, subulw: $subul.outerWidth(), subulh: $subul.outerHeight() };
                $subul.css({ top: self._dimensions.h + "px" });
                $curobj.hover(
				    function (e) {
				        var thisItem = $(this);
				        if (self.timer != null) {
				            window.clearTimeout(self.timer);
				            self.timer = null;
				        }
				        if (!thisItem.hasClass('hover')) {
				            self.timer = window.setTimeout(function () {
				                self.timer = null;
				                thisItem.addClass("hover");
				                var $targetul = thisItem.children("ul:eq(0)");

				                // fix the position
				                var l = self.offset().left + self.width() + 5;
				                var w = 340;

				                var ml = $('#' + menuid).offset().left;
				                var mw = $('#' + menuid).width();

				                if (l < ml) {
				                    $targetul.removeClass('position-left');
				                } else {
				                    if (l - ml + w > mw) {
				                        $targetul.addClass('position-left');
				                    }
				                }

				                try {
				                    if ($targetul.queue().length <= 1) //if 1 or less queued animations
				                        $targetul.css({ width: self._dimensions.subulw + 'px' }).slideDown(jqueryslidemenu.animateduration.over);
				                } catch (er) { $targetul.css({ width: self._dimensions.subulw + 'px' }).slideDown(jqueryslidemenu.animateduration.over); }
				            }, jqueryslidemenu.animateduration.delay, function () {
				                $(thisItem).find('ul').show();
				            });
				        }
				    },
				    function (e) {
				        var thisItem = $(this);
				        if (self.timer != null) {
				            window.clearTimeout(self.timer);
				            self.timer = null;
				        }
				        if (thisItem.hasClass('hover')) {
				            self.timer = window.setTimeout(function () {
				                self.timer = null;
				                thisItem.removeClass("hover");
				                var $targetul = thisItem.children("ul:eq(0)")
				                $targetul.slideUp(jqueryslidemenu.animateduration.out)
				            }, jqueryslidemenu.animateduration.delay);
				        }
				    }
			    );

                // bind sub-sub-....
                if ($subul.find('ul').length > 0) {
                    $subul.children().each(function () { bindDisplaySubItems($(this)); });
                }
            }

            $headers.each(function (i) {
                bindDisplaySubItems($(this));
            }); //end $headers.each()
            $mainmenu.find("ul").hide();
        }) //end document.ready
    }
};

(function ($) {
    $.fn.textToImage = function (options) {
        var opt = $.extend({}, $.fn.textToImage.defaults, options);
        return this.each(function () {
            var e = $(this);

            var t = e.text();
            var html = '<img class="text-to-image" src="' + opt.handler + "?text=" + encodeURIComponent(t) + "&st=" + opt.styleName + "." + opt.languageCode + "&rtl=" + (opt.direction == 'rtl' ? "1" : "0") + '" alt="' + t + '" />';
            if (opt.enableHover) {
                html = html.replace('/>', ' rel="' + opt.handler + "?text=" + t + "&st=" + opt.styleName + "-h." + opt.languageCode + "&rtl=" + (opt.direction == 'rtl' ? "1" : "0") + '" />');
            }

            if (opt.keepText) {
                e.html('<span class="toi">' + t + '</span>' + html);
            } else {
                e.html(html);
            }
            if (opt.callback) {
                e.find('img').load(function () {
                    opt.callback($(this));
                });
            }
        });

    };

    $.fn.textToImage.defaults = {
        handler: 'toi.ashx',
        styleName: 'mainmenu',
        languageCode: 'ar-ae',
        direction: 'rtl',
        enableHover: false,
        keepText: false,
        callback: false
    };
})(jQuery);
/*
SWFUpload: http://www.swfupload.org, http://swfupload.googlecode.com

mmSWFUpload 1.0: Flash upload dialog - http://profandesign.se/swfupload/,  http://www.vinterwebb.se/

SWFUpload is (c) 2006-2007 Lars Huring, Olov Nilzén and Mammon Media and is released under the MIT License:
http://www.opensource.org/licenses/mit-license.php
 
SWFUpload 2 is (c) 2007-2008 Jake Roberts and is released under the MIT License:
http://www.opensource.org/licenses/mit-license.php
*/

var SWFUpload; if (SWFUpload == undefined) { SWFUpload = function (a) { this.initSWFUpload(a) } } SWFUpload.prototype.initSWFUpload = function (b) { try { this.customSettings = {}; this.settings = b; this.eventQueue = []; this.movieName = "SWFUpload_" + SWFUpload.movieCount++; this.movieElement = null; SWFUpload.instances[this.movieName] = this; this.initSettings(); this.loadFlash(); this.displayDebugInfo() } catch (a) { delete SWFUpload.instances[this.movieName]; throw a } }; SWFUpload.instances = {}; SWFUpload.movieCount = 0; SWFUpload.version = "2.2.0 2009-03-25"; SWFUpload.QUEUE_ERROR = { QUEUE_LIMIT_EXCEEDED: -100, FILE_EXCEEDS_SIZE_LIMIT: -110, ZERO_BYTE_FILE: -120, INVALID_FILETYPE: -130 }; SWFUpload.UPLOAD_ERROR = { HTTP_ERROR: -200, MISSING_UPLOAD_URL: -210, IO_ERROR: -220, SECURITY_ERROR: -230, UPLOAD_LIMIT_EXCEEDED: -240, UPLOAD_FAILED: -250, SPECIFIED_FILE_ID_NOT_FOUND: -260, FILE_VALIDATION_FAILED: -270, FILE_CANCELLED: -280, UPLOAD_STOPPED: -290 }; SWFUpload.FILE_STATUS = { QUEUED: -1, IN_PROGRESS: -2, ERROR: -3, COMPLETE: -4, CANCELLED: -5 }; SWFUpload.BUTTON_ACTION = { SELECT_FILE: -100, SELECT_FILES: -110, START_UPLOAD: -120 }; SWFUpload.CURSOR = { ARROW: -1, HAND: -2 }; SWFUpload.WINDOW_MODE = { WINDOW: "window", TRANSPARENT: "transparent", OPAQUE: "opaque" }; SWFUpload.completeURL = function (a) { if (typeof (a) !== "string" || a.match(/^https?:\/\//i) || a.match(/^\//)) { return a } var c = window.location.protocol + "//" + window.location.hostname + (window.location.port ? ":" + window.location.port : ""); var b = window.location.pathname.lastIndexOf("/"); if (b <= 0) { path = "/" } else { path = window.location.pathname.substr(0, b) + "/" } return path + a }; SWFUpload.prototype.initSettings = function () { this.ensureDefault = function (b, a) { this.settings[b] = (this.settings[b] == undefined) ? a : this.settings[b] }; this.ensureDefault("upload_url", ""); this.ensureDefault("preserve_relative_urls", false); this.ensureDefault("file_post_name", "Filedata"); this.ensureDefault("post_params", {}); this.ensureDefault("use_query_string", false); this.ensureDefault("requeue_on_error", false); this.ensureDefault("http_success", []); this.ensureDefault("assume_success_timeout", 0); this.ensureDefault("file_types", "*.*"); this.ensureDefault("file_types_description", "All Files"); this.ensureDefault("file_size_limit", 0); this.ensureDefault("file_upload_limit", 0); this.ensureDefault("file_queue_limit", 0); this.ensureDefault("flash_url", "swfupload.swf"); this.ensureDefault("prevent_swf_caching", true); this.ensureDefault("button_image_url", ""); this.ensureDefault("button_width", 1); this.ensureDefault("button_height", 1); this.ensureDefault("button_text", ""); this.ensureDefault("button_text_style", "color: #999999; font-size: 12pt;"); this.ensureDefault("button_text_top_padding", 0); this.ensureDefault("button_text_left_padding", 0); this.ensureDefault("button_action", SWFUpload.BUTTON_ACTION.SELECT_FILES); this.ensureDefault("button_disabled", false); this.ensureDefault("button_placeholder_id", ""); this.ensureDefault("button_placeholder", null); this.ensureDefault("button_cursor", SWFUpload.CURSOR.ARROW); this.ensureDefault("button_window_mode", SWFUpload.WINDOW_MODE.WINDOW); this.ensureDefault("debug", false); this.settings.debug_enabled = this.settings.debug; this.settings.return_upload_start_handler = this.returnUploadStart; this.ensureDefault("swfupload_loaded_handler", null); this.ensureDefault("file_dialog_start_handler", null); this.ensureDefault("file_queued_handler", null); this.ensureDefault("file_queue_error_handler", null); this.ensureDefault("file_dialog_complete_handler", null); this.ensureDefault("upload_start_handler", null); this.ensureDefault("upload_progress_handler", null); this.ensureDefault("upload_error_handler", null); this.ensureDefault("upload_success_handler", null); this.ensureDefault("upload_complete_handler", null); this.ensureDefault("debug_handler", this.debugMessage); this.ensureDefault("custom_settings", {}); this.customSettings = this.settings.custom_settings; if (!!this.settings.prevent_swf_caching) { this.settings.flash_url = this.settings.flash_url + (this.settings.flash_url.indexOf("?") < 0 ? "?" : "&") + "preventswfcaching=" + new Date().getTime() } if (!this.settings.preserve_relative_urls) { this.settings.upload_url = SWFUpload.completeURL(this.settings.upload_url); this.settings.button_image_url = SWFUpload.completeURL(this.settings.button_image_url) } delete this.ensureDefault }; SWFUpload.prototype.loadFlash = function () { var a, b; if (document.getElementById(this.movieName) !== null) { throw "ID " + this.movieName + " is already in use. The Flash Object could not be added" } a = document.getElementById(this.settings.button_placeholder_id) || this.settings.button_placeholder; if (a == undefined) { throw "Could not find the placeholder element: " + this.settings.button_placeholder_id } b = document.createElement("div"); b.innerHTML = this.getFlashHTML(); a.parentNode.replaceChild(b.firstChild, a); if (window[this.movieName] == undefined) { window[this.movieName] = this.getMovieElement() } }; SWFUpload.prototype.getFlashHTML = function () { return ['<object id="', this.movieName, '" type="application/x-shockwave-flash" data="', this.settings.flash_url, '" width="', this.settings.button_width, '" height="', this.settings.button_height, '" class="swfupload">', '<param name="wmode" value="', this.settings.button_window_mode, '" />', '<param name="movie" value="', this.settings.flash_url, '" />', '<param name="quality" value="high" />', '<param name="menu" value="false" />', '<param name="allowScriptAccess" value="always" />', '<param name="flashvars" value="' + this.getFlashVars() + '" />', "</object>"].join("") }; SWFUpload.prototype.getFlashVars = function () { var b = this.buildParamString(); var a = this.settings.http_success.join(","); return ["movieName=", encodeURIComponent(this.movieName), "&amp;uploadURL=", encodeURIComponent(this.settings.upload_url), "&amp;useQueryString=", encodeURIComponent(this.settings.use_query_string), "&amp;requeueOnError=", encodeURIComponent(this.settings.requeue_on_error), "&amp;httpSuccess=", encodeURIComponent(a), "&amp;assumeSuccessTimeout=", encodeURIComponent(this.settings.assume_success_timeout), "&amp;params=", encodeURIComponent(b), "&amp;filePostName=", encodeURIComponent(this.settings.file_post_name), "&amp;fileTypes=", encodeURIComponent(this.settings.file_types), "&amp;fileTypesDescription=", encodeURIComponent(this.settings.file_types_description), "&amp;fileSizeLimit=", encodeURIComponent(this.settings.file_size_limit), "&amp;fileUploadLimit=", encodeURIComponent(this.settings.file_upload_limit), "&amp;fileQueueLimit=", encodeURIComponent(this.settings.file_queue_limit), "&amp;debugEnabled=", encodeURIComponent(this.settings.debug_enabled), "&amp;buttonImageURL=", encodeURIComponent(this.settings.button_image_url), "&amp;buttonWidth=", encodeURIComponent(this.settings.button_width), "&amp;buttonHeight=", encodeURIComponent(this.settings.button_height), "&amp;buttonText=", encodeURIComponent(this.settings.button_text), "&amp;buttonTextTopPadding=", encodeURIComponent(this.settings.button_text_top_padding), "&amp;buttonTextLeftPadding=", encodeURIComponent(this.settings.button_text_left_padding), "&amp;buttonTextStyle=", encodeURIComponent(this.settings.button_text_style), "&amp;buttonAction=", encodeURIComponent(this.settings.button_action), "&amp;buttonDisabled=", encodeURIComponent(this.settings.button_disabled), "&amp;buttonCursor=", encodeURIComponent(this.settings.button_cursor)].join("") }; SWFUpload.prototype.getMovieElement = function () { if (this.movieElement == undefined) { this.movieElement = document.getElementById(this.movieName) } if (this.movieElement === null) { throw "Could not find Flash element" } return this.movieElement }; SWFUpload.prototype.buildParamString = function () { var c = this.settings.post_params; var b = []; if (typeof (c) === "object") { for (var a in c) { if (c.hasOwnProperty(a)) { b.push(encodeURIComponent(a.toString()) + "=" + encodeURIComponent(c[a].toString())) } } } return b.join("&amp;") }; SWFUpload.prototype.destroy = function () { try { this.cancelUpload(null, false); var a = null; a = this.getMovieElement(); if (a && typeof (a.CallFunction) === "unknown") { for (var c in a) { try { if (typeof (a[c]) === "function") { a[c] = null } } catch (e) { } } try { a.parentNode.removeChild(a) } catch (b) { } } window[this.movieName] = null; SWFUpload.instances[this.movieName] = null; delete SWFUpload.instances[this.movieName]; this.movieElement = null; this.settings = null; this.customSettings = null; this.eventQueue = null; this.movieName = null; return true } catch (d) { return false } }; SWFUpload.prototype.displayDebugInfo = function () { this.debug(["---SWFUpload Instance Info---\n", "Version: ", SWFUpload.version, "\n", "Movie Name: ", this.movieName, "\n", "Settings:\n", "\t", "upload_url:               ", this.settings.upload_url, "\n", "\t", "flash_url:                ", this.settings.flash_url, "\n", "\t", "use_query_string:         ", this.settings.use_query_string.toString(), "\n", "\t", "requeue_on_error:         ", this.settings.requeue_on_error.toString(), "\n", "\t", "http_success:             ", this.settings.http_success.join(", "), "\n", "\t", "assume_success_timeout:   ", this.settings.assume_success_timeout, "\n", "\t", "file_post_name:           ", this.settings.file_post_name, "\n", "\t", "post_params:              ", this.settings.post_params.toString(), "\n", "\t", "file_types:               ", this.settings.file_types, "\n", "\t", "file_types_description:   ", this.settings.file_types_description, "\n", "\t", "file_size_limit:          ", this.settings.file_size_limit, "\n", "\t", "file_upload_limit:        ", this.settings.file_upload_limit, "\n", "\t", "file_queue_limit:         ", this.settings.file_queue_limit, "\n", "\t", "debug:                    ", this.settings.debug.toString(), "\n", "\t", "prevent_swf_caching:      ", this.settings.prevent_swf_caching.toString(), "\n", "\t", "button_placeholder_id:    ", this.settings.button_placeholder_id.toString(), "\n", "\t", "button_placeholder:       ", (this.settings.button_placeholder ? "Set" : "Not Set"), "\n", "\t", "button_image_url:         ", this.settings.button_image_url.toString(), "\n", "\t", "button_width:             ", this.settings.button_width.toString(), "\n", "\t", "button_height:            ", this.settings.button_height.toString(), "\n", "\t", "button_text:              ", this.settings.button_text.toString(), "\n", "\t", "button_text_style:        ", this.settings.button_text_style.toString(), "\n", "\t", "button_text_top_padding:  ", this.settings.button_text_top_padding.toString(), "\n", "\t", "button_text_left_padding: ", this.settings.button_text_left_padding.toString(), "\n", "\t", "button_action:            ", this.settings.button_action.toString(), "\n", "\t", "button_disabled:          ", this.settings.button_disabled.toString(), "\n", "\t", "custom_settings:          ", this.settings.custom_settings.toString(), "\n", "Event Handlers:\n", "\t", "swfupload_loaded_handler assigned:  ", (typeof this.settings.swfupload_loaded_handler === "function").toString(), "\n", "\t", "file_dialog_start_handler assigned: ", (typeof this.settings.file_dialog_start_handler === "function").toString(), "\n", "\t", "file_queued_handler assigned:       ", (typeof this.settings.file_queued_handler === "function").toString(), "\n", "\t", "file_queue_error_handler assigned:  ", (typeof this.settings.file_queue_error_handler === "function").toString(), "\n", "\t", "upload_start_handler assigned:      ", (typeof this.settings.upload_start_handler === "function").toString(), "\n", "\t", "upload_progress_handler assigned:   ", (typeof this.settings.upload_progress_handler === "function").toString(), "\n", "\t", "upload_error_handler assigned:      ", (typeof this.settings.upload_error_handler === "function").toString(), "\n", "\t", "upload_success_handler assigned:    ", (typeof this.settings.upload_success_handler === "function").toString(), "\n", "\t", "upload_complete_handler assigned:   ", (typeof this.settings.upload_complete_handler === "function").toString(), "\n", "\t", "debug_handler assigned:             ", (typeof this.settings.debug_handler === "function").toString(), "\n"].join("")) }; SWFUpload.prototype.addSetting = function (b, c, a) { if (c == undefined) { return (this.settings[b] = a) } else { return (this.settings[b] = c) } }; SWFUpload.prototype.getSetting = function (a) { if (this.settings[a] != undefined) { return this.settings[a] } return "" }; SWFUpload.prototype.callFlash = function (functionName, argumentArray) { argumentArray = argumentArray || []; var movieElement = this.getMovieElement(); var returnValue, returnString; try { returnString = movieElement.CallFunction('<invoke name="' + functionName + '" returntype="javascript">' + __flash__argumentsToXML(argumentArray, 0) + "</invoke>"); returnValue = eval(returnString) } catch (ex) { throw "Call to " + functionName + " failed" } if (returnValue != undefined && typeof returnValue.post === "object") { returnValue = this.unescapeFilePostParams(returnValue) } return returnValue }; SWFUpload.prototype.selectFile = function () { this.callFlash("SelectFile") }; SWFUpload.prototype.selectFiles = function () { this.callFlash("SelectFiles") }; SWFUpload.prototype.startUpload = function (a) { this.callFlash("StartUpload", [a]) }; SWFUpload.prototype.cancelUpload = function (a, b) { if (b !== false) { b = true } this.callFlash("CancelUpload", [a, b]) }; SWFUpload.prototype.stopUpload = function () { this.callFlash("StopUpload") }; SWFUpload.prototype.getStats = function () { return this.callFlash("GetStats") }; SWFUpload.prototype.setStats = function (a) { this.callFlash("SetStats", [a]) }; SWFUpload.prototype.getFile = function (a) { if (typeof (a) === "number") { return this.callFlash("GetFileByIndex", [a]) } else { return this.callFlash("GetFile", [a]) } }; SWFUpload.prototype.addFileParam = function (a, b, c) { return this.callFlash("AddFileParam", [a, b, c]) }; SWFUpload.prototype.removeFileParam = function (a, b) { this.callFlash("RemoveFileParam", [a, b]) }; SWFUpload.prototype.setUploadURL = function (a) { this.settings.upload_url = a.toString(); this.callFlash("SetUploadURL", [a]) }; SWFUpload.prototype.setPostParams = function (a) { this.settings.post_params = a; this.callFlash("SetPostParams", [a]) }; SWFUpload.prototype.addPostParam = function (a, b) { this.settings.post_params[a] = b; this.callFlash("SetPostParams", [this.settings.post_params]) }; SWFUpload.prototype.removePostParam = function (a) { delete this.settings.post_params[a]; this.callFlash("SetPostParams", [this.settings.post_params]) }; SWFUpload.prototype.setFileTypes = function (a, b) { this.settings.file_types = a; this.settings.file_types_description = b; this.callFlash("SetFileTypes", [a, b]) }; SWFUpload.prototype.setFileSizeLimit = function (a) { this.settings.file_size_limit = a; this.callFlash("SetFileSizeLimit", [a]) }; SWFUpload.prototype.setFileUploadLimit = function (a) { this.settings.file_upload_limit = a; this.callFlash("SetFileUploadLimit", [a]) }; SWFUpload.prototype.setFileQueueLimit = function (a) { this.settings.file_queue_limit = a; this.callFlash("SetFileQueueLimit", [a]) }; SWFUpload.prototype.setFilePostName = function (a) { this.settings.file_post_name = a; this.callFlash("SetFilePostName", [a]) }; SWFUpload.prototype.setUseQueryString = function (a) { this.settings.use_query_string = a; this.callFlash("SetUseQueryString", [a]) }; SWFUpload.prototype.setRequeueOnError = function (a) { this.settings.requeue_on_error = a; this.callFlash("SetRequeueOnError", [a]) }; SWFUpload.prototype.setHTTPSuccess = function (a) { if (typeof a === "string") { a = a.replace(" ", "").split(",") } this.settings.http_success = a; this.callFlash("SetHTTPSuccess", [a]) }; SWFUpload.prototype.setAssumeSuccessTimeout = function (a) { this.settings.assume_success_timeout = a; this.callFlash("SetAssumeSuccessTimeout", [a]) }; SWFUpload.prototype.setDebugEnabled = function (a) { this.settings.debug_enabled = a; this.callFlash("SetDebugEnabled", [a]) }; SWFUpload.prototype.setButtonImageURL = function (a) { if (a == undefined) { a = "" } this.settings.button_image_url = a; this.callFlash("SetButtonImageURL", [a]) }; SWFUpload.prototype.setButtonDimensions = function (c, a) { this.settings.button_width = c; this.settings.button_height = a; var b = this.getMovieElement(); if (b != undefined) { b.style.width = c + "px"; b.style.height = a + "px" } this.callFlash("SetButtonDimensions", [c, a]) }; SWFUpload.prototype.setButtonText = function (a) { this.settings.button_text = a; this.callFlash("SetButtonText", [a]) }; SWFUpload.prototype.setButtonTextPadding = function (b, a) { this.settings.button_text_top_padding = a; this.settings.button_text_left_padding = b; this.callFlash("SetButtonTextPadding", [b, a]) }; SWFUpload.prototype.setButtonTextStyle = function (a) { this.settings.button_text_style = a; this.callFlash("SetButtonTextStyle", [a]) }; SWFUpload.prototype.setButtonDisabled = function (a) { this.settings.button_disabled = a; this.callFlash("SetButtonDisabled", [a]) }; SWFUpload.prototype.setButtonAction = function (a) { this.settings.button_action = a; this.callFlash("SetButtonAction", [a]) }; SWFUpload.prototype.setButtonCursor = function (a) { this.settings.button_cursor = a; this.callFlash("SetButtonCursor", [a]) }; SWFUpload.prototype.queueEvent = function (b, c) { if (c == undefined) { c = [] } else { if (!(c instanceof Array)) { c = [c] } } var a = this; if (typeof this.settings[b] === "function") { this.eventQueue.push(function () { this.settings[b].apply(this, c) }); setTimeout(function () { a.executeNextEvent() }, 0) } else { if (this.settings[b] !== null) { throw "Event handler " + b + " is unknown or is not a function" } } }; SWFUpload.prototype.executeNextEvent = function () { var a = this.eventQueue ? this.eventQueue.shift() : null; if (typeof (a) === "function") { a.apply(this) } }; SWFUpload.prototype.unescapeFilePostParams = function (c) { var e = /[$]([0-9a-f]{4})/i; var f = {}; var d; if (c != undefined) { for (var a in c.post) { if (c.post.hasOwnProperty(a)) { d = a; var b; while ((b = e.exec(d)) !== null) { d = d.replace(b[0], String.fromCharCode(parseInt("0x" + b[1], 16))) } f[d] = c.post[a] } } c.post = f } return c }; SWFUpload.prototype.testExternalInterface = function () { try { return this.callFlash("TestExternalInterface") } catch (a) { return false } }; SWFUpload.prototype.flashReady = function () { var a = this.getMovieElement(); if (!a) { this.debug("Flash called back ready but the flash movie can't be found."); return } this.cleanUp(a); this.queueEvent("swfupload_loaded_handler") }; SWFUpload.prototype.cleanUp = function (a) { try { if (this.movieElement && typeof (a.CallFunction) === "unknown") { this.debug("Removing Flash functions hooks (this should only run in IE and should prevent memory leaks)"); for (var c in a) { try { if (typeof (a[c]) === "function") { a[c] = null } } catch (b) { } } } } catch (d) { } window.__flash__removeCallback = function (e, f) { try { if (e) { e[f] = null } } catch (g) { } } }; SWFUpload.prototype.fileDialogStart = function () { this.queueEvent("file_dialog_start_handler") }; SWFUpload.prototype.fileQueued = function (a) { a = this.unescapeFilePostParams(a); this.queueEvent("file_queued_handler", a) }; SWFUpload.prototype.fileQueueError = function (a, c, b) { a = this.unescapeFilePostParams(a); this.queueEvent("file_queue_error_handler", [a, c, b]) }; SWFUpload.prototype.fileDialogComplete = function (b, c, a) { this.queueEvent("file_dialog_complete_handler", [b, c, a]) }; SWFUpload.prototype.uploadStart = function (a) { a = this.unescapeFilePostParams(a); this.queueEvent("return_upload_start_handler", a) }; SWFUpload.prototype.returnUploadStart = function (a) { var b; if (typeof this.settings.upload_start_handler === "function") { a = this.unescapeFilePostParams(a); b = this.settings.upload_start_handler.call(this, a) } else { if (this.settings.upload_start_handler != undefined) { throw "upload_start_handler must be a function" } } if (b === undefined) { b = true } b = !!b; this.callFlash("ReturnUploadStart", [b]) }; SWFUpload.prototype.uploadProgress = function (a, c, b) { a = this.unescapeFilePostParams(a); this.queueEvent("upload_progress_handler", [a, c, b]) }; SWFUpload.prototype.uploadError = function (a, c, b) { a = this.unescapeFilePostParams(a); this.queueEvent("upload_error_handler", [a, c, b]) }; SWFUpload.prototype.uploadSuccess = function (b, a, c) { b = this.unescapeFilePostParams(b); this.queueEvent("upload_success_handler", [b, a, c]) }; SWFUpload.prototype.uploadComplete = function (a) { a = this.unescapeFilePostParams(a); this.queueEvent("upload_complete_handler", a) }; SWFUpload.prototype.debug = function (a) { this.queueEvent("debug_handler", a) }; SWFUpload.prototype.debugMessage = function (c) { if (this.settings.debug) { var a, d = []; if (typeof c === "object" && typeof c.name === "string" && typeof c.message === "string") { for (var b in c) { if (c.hasOwnProperty(b)) { d.push(b + ": " + c[b]) } } a = d.join("\n") || ""; d = a.split("\n"); a = "EXCEPTION: " + d.join("\nEXCEPTION: "); SWFUpload.Console.writeLine(a) } else { SWFUpload.Console.writeLine(c) } } }; SWFUpload.Console = {}; SWFUpload.Console.writeLine = function (d) { var b, a; try { b = document.getElementById("SWFUpload_Console"); if (!b) { a = document.createElement("form"); document.getElementsByTagName("body")[0].appendChild(a); b = document.createElement("textarea"); b.id = "SWFUpload_Console"; b.style.fontFamily = "monospace"; b.setAttribute("wrap", "off"); b.wrap = "off"; b.style.overflow = "auto"; b.style.width = "700px"; b.style.height = "350px"; b.style.margin = "5px"; a.appendChild(b) } b.value += d + "\n"; b.scrollTop = b.scrollHeight - b.clientHeight } catch (c) { alert("Exception: " + c.name + " Message: " + c.message) } };

/*
Uploadify v3.0.0
Copyright (c) 2010 Ronnie Garcia

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in
all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE.
*/

if (jQuery) (
	function (jQuery) {
	    jQuery.extend(jQuery.fn, {
	        uploadify: function (options, swfUploadOptions) {
	            jQuery(this).each(function () {
	                var clone = jQuery(this).clone();
	                var settings = jQuery.extend({
	                    // Required Settings
	                    id: jQuery(this).attr('id'),
	                    swf: 'uploadify.swf',
	                    uploader: 'uploadify.php',

	                    // Options
	                    auto: false,
	                    buttonClass: '',
	                    buttonCursor: 'hand',
	                    buttonImage: false,
	                    buttonText: 'SELECT FILES',
	                    cancelImage: 'uploadify-cancel.png',
	                    checkExisting: 'uploadify-check-existing.php',
	                    debug: false,
	                    fileObjName: 'Filedata',
	                    fileSizeLimit: 0,
	                    fileTypeDesc: 'All Files (*.*)',
	                    fileTypeExts: '*.*',
	                    height: 30,
	                    method: 'post',
	                    multi: false,
	                    queueID: false,
	                    queueSizeLimit: 999,
	                    removeCompleted: true,
	                    removeTimeout: 3,
	                    requeueErrors: true,
	                    postData: {},
	                    preventCaching: true,
	                    progressData: 'percentage',
	                    // simUploadLimit  : 1, // Not possible with swfUpload
	                    successTimeout: 30,
	                    transparent: true,
	                    uploadLimit: 999,
	                    uploaderType: 'html5', // the other option is 'flash'
	                    width: 120,

	                    // Events
	                    skipDefault: [],
	                    onClearQueue: function () { },
	                    onDialogOpen: function () { },
	                    onDialogClose: function () { },
	                    onInit: function () { },
	                    onQueueComplete: function () { },
	                    onSelectError: function () { },
	                    onSelect: function () { },
	                    onSWFReady: function () { },
	                    onUploadCancel: function () { },
	                    onUploadComplete: function () { },
	                    onUploadError: function () { },
	                    onUploadProgress: function () { },
	                    onUploadStart: function () { }
	                }, options);

	                var swfUploadSettings = {
	                    assume_success_timeout: settings.successTimeout,
	                    button_placeholder_id: settings.id,
	                    button_image_url: settings.buttonImage,
	                    button_width: settings.width,
	                    button_height: settings.height,
	                    button_text: settings.buttonText,
	                    button_text_style: settings.buttonTextStyle,
	                    button_text_top_padding: 0,
	                    button_text_left_padding: 0,
	                    button_action: (settings.multi ? SWFUpload.BUTTON_ACTION.SELECT_FILES : SWFUpload.BUTTON_ACTION.SELECT_FILE),
	                    button_disabled: false,
	                    button_cursor: (settings.buttonCursor == 'arrow' ? SWFUpload.CURSOR.ARROW : SWFUpload.CURSOR.HAND),
	                    button_window_mode: (settings.transparent ? SWFUpload.WINDOW_MODE.TRANSPARENT : SWFUpload.WINDOW_MODE.OPAQUE),
	                    debug: settings.debug,
	                    requeue_on_error: settings.requeueErrors,
	                    file_post_name: settings.fileObjName,
	                    file_size_limit: settings.fileSizeLimit,
	                    file_types: settings.fileTypeExts,
	                    file_types_description: settings.fileTypeDesc,
	                    file_queue_limit: settings.queueSizeLimit,
	                    file_upload_limit: settings.uploadLimit,
	                    flash_url: settings.swf,
	                    prevent_swf_caching: settings.preventCaching,
	                    post_params: settings.postData,
	                    upload_url: settings.uploader,
	                    use_query_string: (settings.method == 'get'),

	                    // Event Handlers 
	                    file_dialog_complete_handler: onDialogClose,
	                    file_dialog_start_handler: onDialogOpen,
	                    file_queued_handler: onSelect,
	                    file_queue_error_handler: onSelectError,
	                    flash_ready_handler: settings.onSWFReady,
	                    upload_complete_handler: onUploadComplete,
	                    upload_error_handler: onUploadError,
	                    upload_progress_handler: onUploadProgress,
	                    upload_start_handler: onUploadStart,
	                    upload_success_handler: onUploadSuccess
	                }
	                if (swfUploadOptions) {
	                    swfUploadSettings = jQuery.extend(swfUploadSettings, swfUploadOptions);
	                }
	                swfUploadSettings = jQuery.extend(swfUploadSettings, settings);

	                // Create the swfUpload instance
	                window['uploadify_' + settings.id] = new SWFUpload(swfUploadSettings);
	                var swfuploadify = window['uploadify_' + settings.id];
	                swfuploadify.original = clone;

	                // Wrap the uploadify instance
	                var wrapper = jQuery('<div />', {
	                    id: settings.id,
	                    'class': 'uploadify',
	                    css: {
	                        'height': settings.height + 'px',
	                        'position': 'relative',
	                        'width': settings.width + 'px'
	                    }
	                });
	                jQuery('#' + swfuploadify.movieName).wrap(wrapper);

	                // Create the file queue
	                if (!settings.queueID) {
	                    var queue = jQuery('<div />', {
	                        id: settings.id + '_queue',
	                        'class': 'uploadifyQueue'
	                    });
	                    jQuery('#' + settings.id).after(queue);
	                    swfuploadify.settings.queueID = settings.queueID = settings.id + '_queue';
	                }

	                // Create some queue related objects and variables
	                swfuploadify.queue = {
	                    files: {}, // The files in the queue
	                    filesSelected: 0, // The number of files selected in the last select operation
	                    filesQueued: 0, // The number of files added to the queue in the last select operation
	                    filesReplaced: 0, // The number of files replaced in the last select operation
	                    filesCancelled: 0, // The number of files that were cancelled instead of replaced
	                    filesErrored: 0, // The number of files that caused error in the last select operation
	                    averageSpeed: 0, // The average speed of the uploads in KB
	                    queueLength: 0, // The number of files in the queue
	                    queueSize: 0, // The size in bytes of the entire queue
	                    uploadSize: 0, // The size in bytes of the upload queue
	                    queueBytesUploaded: 0, // The size in bytes that have been uploaded for the current upload queue
	                    uploadQueue: [], // The files currently to be uploaded
	                    errorMsg: 'Some files were not added to the queue:'
	                };

	                // Create the button
	                if (!settings.buttonImage) {
	                    var button = jQuery('<div />', {
	                        id: settings.id + '_button',
	                        'class': 'uploadifyButton ' + settings.buttonClass,
	                        html: '<span class="uploadifyButtonText">' + settings.buttonText + '</span>'
	                    });
	                    jQuery('#' + settings.id).append(button);
	                    jQuery('#' + swfuploadify.movieName).css({ position: 'absolute', 'z-index': 1 });
	                } else {
	                    jQuery('#' + swfuploadify.movieName).addClass(settings.buttonClass);
	                }

	                // -----------------------------
	                // Begin Event Handler Functions
	                // -----------------------------

	                // Triggered once when file dialog is closed
	                function onDialogClose(filesSelected, filesQueued, queueLength) {
	                    var stats = swfuploadify.getStats();
	                    swfuploadify.queue.filesErrored = filesSelected - filesQueued;
	                    swfuploadify.queue.filesSelected = filesSelected;
	                    swfuploadify.queue.filesQueued = filesQueued - swfuploadify.queue.filesCancelled;
	                    swfuploadify.queue.queueLength = queueLength;
	                    if (jQuery.inArray('onDialogClose', swfuploadify.settings.skipDefault) < 0) {
	                        if (swfuploadify.queue.filesErrored > 0) {
	                            alert(swfuploadify.queue.errorMsg);
	                        }
	                    }
	                    if (swfuploadify.settings.onDialogClose) swfuploadify.settings.onDialogClose(swfuploadify.queue);
	                    if (swfuploadify.settings.auto) jQuery('#' + swfuploadify.settings.id).uploadifyUpload('*');
	                }

	                function onDialogOpen() {
	                    // Reset some queue info
	                    swfuploadify.queue.errorMsg = 'Some files were not added to the queue:';
	                    swfuploadify.queue.filesReplaced = 0;
	                    swfuploadify.queue.filesCancelled = 0;
	                    if (swfuploadify.settings.onDialogOpen) swfuploadify.settings.onDialogOpen();
	                }

	                // Triggered once for each file added to the queue
	                function onSelect(file) {
	                    if (jQuery.inArray('onSelect', swfuploadify.settings.skipDefault) < 0) {
	                        // Check if a file with the same name exists in the queue
	                        var queuedFile = {};
	                        for (var n in swfuploadify.queue.files) {
	                            queuedFile = swfuploadify.queue.files[n];
	                            if (queuedFile.name == file.name) {
	                                var replaceQueueItem = confirm('The file named "' + file.name + '" is already in the queue.\nDo you want to replace the existing item in the queue?');
	                                if (!replaceQueueItem) {
	                                    swfuploadify.cancelUpload(file.id);
	                                    swfuploadify.queue.filesCancelled++;
	                                    return false;
	                                } else {
	                                    jQuery('#' + queuedFile.id).remove();
	                                    swfuploadify.cancelUpload(queuedFile.id);
	                                    swfuploadify.queue.filesReplaced++;
	                                }
	                            }
	                        }

	                        // Get the size of the file
	                        var fileSize = Math.round(file.size / 1024);
	                        var suffix = 'KB';
	                        if (fileSize > 1000) {
	                            fileSize = Math.round(fileSize / 1000);
	                            suffix = 'MB';
	                        }
	                        var fileSizeParts = fileSize.toString().split('.');
	                        fileSize = fileSizeParts[0];
	                        if (fileSizeParts.length > 1) {
	                            fileSize += '.' + fileSizeParts[1].substr(0, 2);
	                        }
	                        fileSize += suffix;

	                        // Truncate the filename if it's too long
	                        var fileName = file.name;
	                        if (fileName.length > 25) {
	                            fileName = fileName.substr(0, 25) + '...';
	                        }

	                        // Add the file item to the queue
	                        jQuery('#' + swfuploadify.settings.queueID).append('<div id="' + file.id + '" class="uploadifyQueueItem">								<div class="cancel">									<a href="javascript:jQuery(\'#' + swfuploadify.settings.id + '\').uploadifyCancel(\'' + file.id + '\')"><img src="' + swfuploadify.settings.cancelImage + '" border="0" /></a>								</div>								<span class="fileName">' + fileName + ' (' + fileSize + ')</span><span class="data"></span>								<div class="uploadifyProgress">									<div class="uploadifyProgressBar"><!--Progress Bar--></div>								</div>							</div>');
	                        swfuploadify.queue.queueSize += file.size;
	                    }
	                    swfuploadify.queue.files[file.id] = file;
                        if(file!=null){
                            file.swfu = swfuploadify;
                        }
	                    if (swfuploadify.settings.onSelect) swfuploadify.settings.onSelect(file);
	                }

	                // Triggered when a file is not added to the queue
	                function onSelectError(file, errorCode, errorMsg) {
	                    if (jQuery.inArray('onSelectError', swfuploadify.settings.skipDefault) < 0) {
	                        switch (errorCode) {
	                            case SWFUpload.QUEUE_ERROR.QUEUE_LIMIT_EXCEEDED:
	                                if (swfuploadify.settings.queueSizeLimit > errorMsg) {
	                                    swfuploadify.queue.errorMsg += '\nThe number of files selected exceeds the remaining upload limit (' + errorMsg + ').';
	                                } else {
	                                    swfuploadify.queue.errorMsg += '\nThe number of files selected exceeds the queue size limit (' + swfuploadify.settings.queueSizeLimit + ').';
	                                }
	                                break;
	                            case SWFUpload.QUEUE_ERROR.FILE_EXCEEDS_SIZE_LIMIT:
	                                
                                    swfuploadify.queue.errorMsg += '\nThe file "' + file.name + '" exceeds the size limit (' + swfuploadify.settings.fileSizeLimit + ').';
	                                break;
	                            case SWFUpload.QUEUE_ERROR.ZERO_BYTE_FILE:
	                                swfuploadify.queue.errorMsg += '\nThe file "' + file.name + '" is empty.';
	                                break;
	                            case SWFUpload.QUEUE_ERROR.FILE_EXCEEDS_SIZE_LIMIT:
	                                swfuploadify.queue.errorMsg += '\nThe file "' + file.name + '" is not an accepted file type (' + swfuploadify.settings.fileTypeDesc + ').';
	                                break;
	                        }
	                    }
	                    if (errorCode != SWFUpload.QUEUE_ERROR.QUEUE_LIMIT_EXCEEDED) {
	                        delete swfuploadify.queue.files[file.id];
	                    }
                        if(file != null){
                            file.swfu = swfuploadify;
                        }
	                    if (swfuploadify.settings.onSelectError) swfuploadify.settings.onSelectError(file, errorCode, errorMsg);
	                }

	                // Triggered when all the files in the queue have been processed
	                function onQueueComplete() {
	                    var stats = swfuploadify.getStats();
	                    if (swfuploadify.settings.onQueueComplete) swfuploadify.settings.onQueueComplete(stats);
	                }

	                // Triggered when a file upload successfully completes
	                function onUploadComplete(file) {
	                    var stats = swfuploadify.getStats();
	                    swfuploadify.queue.queueLength = stats.files_queued;
	                    if (swfuploadify.queue.uploadQueue[0] == '*') {
	                        if (swfuploadify.queue.queueLength > 0) {
	                            swfuploadify.startUpload();
	                        } else {
	                            swfuploadify.queue.uploadQueue = [];
	                            if (swfuploadify.settings.onQueueComplete) swfuploadify.settings.onQueueComplete(stats);
	                        }
	                    } else {
	                        if (swfuploadify.queue.uploadQueue.length > 0) {
	                            swfuploadify.startUpload(swfuploadify.queue.uploadQueue.shift());
	                        } else {
	                            swfuploadify.queue.uploadQueue = [];
                                try{
	                            if (swfuploadify.settings.onQueueComplete) setting.onQueueComplete(stats);
                                }catch(e){}
	                        }
	                    }
	                    if (jQuery.inArray('onUploadComplete', swfuploadify.settings.skipDefault) < 0) {
	                        if (swfuploadify.settings.removeCompleted) {
	                            switch (file.filestatus) {
	                                case SWFUpload.FILE_STATUS.COMPLETE:
	                                    setTimeout(function () {
	                                        if (jQuery('#' + file.id)) {
	                                            swfuploadify.queue.queueSize -= file.size;
	                                            delete swfuploadify.queue.files[file.id]
	                                            jQuery('#' + file.id).fadeOut(500, function () {
	                                                jQuery(this).remove();
	                                            });
	                                        }
	                                    }, swfuploadify.settings.removeTimeout * 1000);
	                                    break;
	                                case SWFUpload.FILE_STATUS.ERROR:
	                                    if (!swfuploadify.settings.requeueErrors) {
	                                        setTimeout(function () {
	                                            if (jQuery('#' + file.id)) {
	                                                swfuploadify.queue.queueSize -= file.size;
	                                                delete swfuploadify.queue.files[file.id];
	                                                jQuery('#' + file.id).fadeOut(500, function () {
	                                                    jQuery(this).remove();
	                                                });
	                                            }
	                                        }, swfuploadify.settings.removeTimeout * 1000);
	                                    }
	                                    break;
	                            }
	                        }
	                    }
	                    if (swfuploadify.settings.onUploadComplete) swfuploadify.settings.onUploadComplete(file, swfuploadify.queue);
	                }

	                // Triggered when a file upload returns an error
	                function onUploadError(file, errorCode, errorMsg) {
	                    var errorString = 'Error';
	                    if (errorCode != SWFUpload.UPLOAD_ERROR.FILE_CANCELLED && errorCode != SWFUpload.UPLOAD_ERROR.UPLOAD_STOPPED) {
	                        jQuery('#' + file.id).addClass('uploadifyError');
	                    }
	                    jQuery('#' + file.id).find('.uploadifyProgressBar').css('width', '1px');
	                    switch (errorCode) {
	                        case SWFUpload.UPLOAD_ERROR.HTTP_ERROR:
	                            errorString = 'HTTP Error (' + errorMsg + ')';
	                            break;
	                        case SWFUpload.UPLOAD_ERROR.MISSING_UPLOAD_URL:
	                            errorString = 'Missing Upload URL';
	                            break;
	                        case SWFUpload.UPLOAD_ERROR.IO_ERROR:
	                            errorString = 'IO Error';
	                            break;
	                        case SWFUpload.UPLOAD_ERROR.SECURITY_ERROR:
	                            errorString = 'Security Error';
	                            break;
	                        case SWFUpload.UPLOAD_ERROR.UPLOAD_LIMIT_EXCEEDED:
	                            alert('The upload limit has been reached (' + errorMsg + ').');
	                            errorString = 'Exceeds Upload Limit';
	                            break;
	                        case SWFUpload.UPLOAD_ERROR.UPLOAD_FAILED:
	                            errorString = 'Failed';
	                            break;
	                        case SWFUpload.UPLOAD_ERROR.SPECIFIED_FILE_ID_NOT_FOUND:
	                            break;
	                        case SWFUpload.UPLOAD_ERROR.FILE_VALIDATION_FAILED:
	                            errorString = 'Validation Error';
	                            break;
	                        case SWFUpload.UPLOAD_ERROR.FILE_CANCELLED:
	                            errorString = 'Cancelled';
	                            swfuploadify.queue.queueSize -= file.size;
	                            if (file.status == SWFUpload.FILE_STATUS.IN_PROGRESS || jQuery.inArray(file.id, swfuploadify.queue.uploadQueue) >= 0) {
	                                swfuploadify.queue.uploadSize -= file.size;
	                            }
	                            delete swfuploadify.queue.files[file.id];
	                            break;
	                        case SWFUpload.UPLOAD_ERROR.UPLOAD_STOPPED:
	                            errorString = 'Stopped';
	                            break;
	                    }
	                    if (errorCode != SWFUpload.UPLOAD_ERROR.SPECIFIED_FILE_ID_NOT_FOUND && file.status != SWFUpload.FILE_STATUS.COMPLETE) {
	                        jQuery('#' + file.id).find('.data').html(' - ' + errorString);
	                    }
	                    if (swfuploadify.settings.onUploadError) swfuploadify.settings.onUploadError(file, errorCode, errorMsg, errorString, swfuploadify.queue);
	                }

	                // Triggered periodically during a file upload
	                function onUploadProgress(file, fileBytesLoaded, fileTotalBytes) {
	                    var timer = new Date();
	                    var newTime = timer.getTime();
	                    var lapsedTime = newTime - swfuploadify.timer;
	                    swfuploadify.timer = newTime;
	                    var lapsedBytes = fileBytesLoaded - swfuploadify.bytesLoaded;
	                    swfuploadify.bytesLoaded = fileBytesLoaded;
	                    var queueBytesLoaded = swfuploadify.queue.queueBytesUploaded + fileBytesLoaded;
	                    var percentage = Math.round(fileBytesLoaded / fileTotalBytes * 100);

	                    // Calculate the average speed
	                    var mbs = 0;
	                    var kbs = (lapsedBytes / 1024) / (lapsedTime / 1000);
	                    kbs = Math.floor(kbs * 10) / 10;
	                    if (swfuploadify.queue.averageSpeed > 0) {
	                        swfuploadify.queue.averageSpeed = (swfuploadify.queue.averageSpeed + kbs) / 2;
	                    } else {
	                        swfuploadify.queue.averageSpeed = kbs;
	                    }
	                    if (kbs > 1000) {
	                        mbs = (kbs * .001);
	                        swfuploadify.queue.averageSpeed = mbs;
	                    }
	                    var suffix = 'KB/s';
	                    if (mbs > 0) {
	                        suffix = 'MB/s';
	                    }

	                    if (jQuery.inArray('onUploadProgress', swfuploadify.settings.skipDefault) < 0) {
	                        if (swfuploadify.settings.progressData == 'percentage') {
	                            jQuery('#' + file.id).find('.data').html(' - ' + percentage + '%');
	                        } else if (swfuploadify.settings.progressData == 'speed') {
	                            jQuery('#' + file.id).find('.data').html(' - ' + percentage + suffix);
	                        }
	                        jQuery('#' + file.id).find('.uploadifyProgressBar').css('width', percentage + '%');
	                    }
	                    if (swfuploadify.settings.onUploadProgress) swfuploadify.settings.onUploadProgress(file, fileBytesLoaded, fileTotalBytes, queueBytesLoaded, swfuploadify.queue.uploadSize);
	                }

	                // Triggered right before a file is uploaded
	                function onUploadStart(file) {
	                    var timer = new Date();
	                    swfuploadify.timer = timer.getTime();
	                    swfuploadify.bytesLoaded = 0;
	                    if (swfuploadify.queue.uploadQueue.length == 0) {
	                        swfuploadify.queue.uploadSize = file.size;
	                    }
	                    if (swfuploadify.settings.checkExisting !== false) {
	                        jQuery.ajax({
	                            type: 'POST',
	                            async: false,
	                            url: swfuploadify.settings.checkExisting,
	                            data: { filename: file.name },
	                            success: function (data) {
	                                if (data == 1) {
	                                    var overwrite = confirm('A file with the name "' + file.name + '" already exists on the server.\nWould you like to replace the existing file?');
	                                    if (!overwrite) {
	                                        swfuploadify.cancelUpload(file.id);
	                                        jQuery('#' + file.id).remove();
	                                        if (swfuploadify.queue.uploadQueue.length > 0 && swfuploadify.queue.queueLength > 0) {
	                                            if (swfuploadify.queue.uploadQueue[0] == '*') {
	                                                swfuploadify.startUpload();
	                                            } else {
	                                                swfuploadify.startUpload(swfuploadify.queue.uploadQueue.shift());
	                                            }
	                                        }
	                                    }
	                                }
	                            }
	                        });
	                    }
	                    if (swfuploadify.settings.onUploadStart) swfuploadify.settings.onUploadStart(file);
	                }

	                // Triggered when a file upload returns a successful code
	                function onUploadSuccess(file, data, response) {
	                    swfuploadify.queue.queueBytesUploaded += file.size;
	                    jQuery('#' + file.id).find('.data').html(' - Complete');
	                    if (swfuploadify.settings.onUploadSuccess) swfuploadify.settings.onUploadSuccess(file, data, response);
	                }

	                // ---------------------------
	                // End Event Handler Functions
	                // ---------------------------
	            });
	        },

	        // Cancel a file upload and remove it from the queue
	        uploadifyCancel: function (fileID) {
	            var id = jQuery(this).selector.replace('#', '');
	            var swfuploadify = window['uploadify_' + id];
	            var delay = -1;
	            if (arguments[0]) {
	                if (arguments[0] == '*') {
	                    jQuery('#' + swfuploadify.settings.queueID).find('.uploadifyQueueItem').each(function () {
	                        delay++;
	                        swfuploadify.cancelUpload(jQuery(this).attr('id'));
	                        jQuery(this).delay(100 * delay).fadeOut(500, function () {
	                            jQuery(this).remove();

	                        });
	                    });
	                    swfuploadify.queue.queueSize = 0;
	                } else {
	                    for (var n = 0; n < arguments.length; n++) {
	                        swfuploadify.cancelUpload(arguments[n]);
	                        jQuery('#' + arguments[n]).delay(100 * n).fadeOut(500, function () {
	                            jQuery(this).remove();
	                        });
	                    }
	                }
	            } else {
	                jQuery('#' + swfuploadify.settings.queueID).find('.uploadifyQueueItem').get(0).fadeOut(500, function () {
	                    jQuery(this).remove();
	                    swfuploadify.cancelUpload(jQuery(this).attr('id'));
	                });
	            }
	        },

	        // Get rid of the instance of Uploadify
	        uploadifyDestroy: function () {
	            var id = jQuery(this).selector.replace('#', '');
	            var swfuploadify = window['uploadify_' + id];
	            swfuploadify.destroy();
	            jQuery('#' + id + '_queue').remove();
	            jQuery('#' + id).replaceWith(swfuploadify.original);
	            delete window['uploadify_' + id];
	        },

	        // Disable the select button
	        uploadifyDisable: function (isDisabled) {
	            var id = jQuery(this).selector.replace('#', '');
	            var swfuploadify = window['uploadify_' + id];
	            swfuploadify.setButtonDisabled(isDisabled);
	        },

	        // Update or retrieve a setting
	        uploadifySettings: function (name, value, resetObjects) {
	            var id = jQuery(this).selector.replace('#', '');
	            var swfuploadify = window['uploadify_' + id];
	            if (typeof (arguments[0]) == 'object') {
	                for (var n in value) {
	                    setData(n, value[n]);
	                }
	            }
	            if (arguments.length == 1) {
	                return swfuploadify.settings[name];
	            } else {
	                setData(name, value, resetObjects);
	            }

	            function setData(settingName, settingValue, resetObjects) {
	                switch (settingName) {
	                    case 'uploader':
	                        swfuploadify.setUploadURL(settingValue);
	                        break;
	                    case 'postData':
	                        if (!resetObjects) {
	                            value = jQuery.extend(swfuploadify.settings.postData, settingValue);
	                        }
	                        swfuploadify.setPostParams(settingValue);
	                        break;
	                    case 'method':
	                        if (settingValue == 'get') {
	                            swfuploadify.setUseQueryString(true);
	                        } else {
	                            swfuploadify.setUseQueryString(false);
	                        }
	                        break;
	                    case 'fileObjName':
	                        swfuploadify.setFilePostName(settingValue);
	                        break;
	                    case 'fileTypeExts':
	                        swfuploadify.setFileTypes(settingValue, swfuploadify.settings.fileTypeDesc);
	                        break;
	                    case 'fileTypeDesc':
	                        swfuploadify.setFileTypes(swfuploadify.settings.fileTypeExts, settingValue);
	                        break;
	                    case 'fileSizeLimit':
	                        swfuploadify.setFileSizeLimit(settingValue);
	                        break;
	                    case 'uploadLimit':
	                        swfuploadify.setFileUploadLimit(settingValue);
	                        break;
	                    case 'queueSizeLimit':
	                        swfuploadify.setFileQueueLimit(settingValue);
	                        break;
	                    case 'buttonImage':
	                        jQuery('#' + swfuploadify.settings.id + '_button').remove();
	                        swfuploadify.setButtonImageURL(settingValue);
	                        break;
	                    case 'buttonCursor':
	                        if (settingValue == 'arrow') {
	                            swfuploadify.setButtonCursor(SWFUpload.CURSOR.ARROW);
	                        } else {
	                            swfuploadify.setButtonCursor(SWFUpload.CURSOR.HAND);
	                        }
	                        break;
	                    case 'buttonText':
	                        jQuery('#' + swfuploadify.settings.id + '_button').find('.uploadifyButtonText').html(settingValue);
	                        break;
	                    case 'width':
	                        swfuploadify.setButtonDimensions(settingValue, swfuploadify.settings.height);
	                        break;
	                    case 'height':
	                        swfuploadify.setButtonDimensions(swfuploadify.settings.width, settingValue);
	                        break;
	                    case 'multi':
	                        if (settingValue) {
	                            swfuploadify.setButtonAction(SWFUpload.BUTTON_ACTION.SELECT_FILES);
	                        } else {
	                            swfuploadify.setButtonAction(SWFUpload.BUTTON_ACTION.SELECT_FILE);
	                        }
	                        break;
	                }
	                swfuploadify.settings[settingName] = value;
	            }
	        },

	        // Stop the current upload and requeue what is in progress
	        uploadifyStop: function () {
	            var id = jQuery(this).selector.replace('#', '');
	            var swfuploadify = window['uploadify_' + id];
	            swfuploadify.stopUpload();
	        },

	        // Upload the first file, a select number of files, or all the files in the queue
	        uploadifyUpload: function () {
	            var id = jQuery(this).selector.replace('#', '');
	            var swfuploadify = window['uploadify_' + id];

	            // Reset the queue information
	            swfuploadify.queue.averageSpeed = 0;
	            swfuploadify.queue.uploadSize = 0;
	            swfuploadify.queue.bytesUploaded = 0;
	            swfuploadify.queue.uploadQueue = [];

	            if (arguments[0]) {
	                if (arguments[0] == '*') {
	                    swfuploadify.queue.uploadSize = swfuploadify.queue.queueSize;
	                    swfuploadify.queue.uploadQueue.push('*');
	                    swfuploadify.startUpload();
	                } else {
	                    for (var n = 0; n < arguments.length; n++) {
	                        swfuploadify.queue.uploadSize += swfuploadify.queue.files[arguments[n]].size;
	                        swfuploadify.queue.uploadQueue.push(arguments[n]);
	                    }
	                    swfuploadify.startUpload(swfuploadify.queue.uploadQueue.shift());
	                }
	            } else {
	                swfuploadify.startUpload();
	            }
	        }
	    })
	}
)(jQuery);
(function ($) {
    var elemenObejcts = {};
    var Dialog = function (element, options) {
        var me = this;
        me.e = element;
        me.dialog = {};

        me.options = options;

        me.set = function (n, v) {
            if (n == "title") {
                me.dialog.h.find('h2 span.title').text(v);
            }
        };

        me.createDialog = function () {
            var d = $('<div/>').addClass('dialog').hide();
            me.dialog.e = d;
            $('body').append(d);

            var header = $('<div/>').addClass('dialog-header');
            me.dialog.e.append(header);
            me.dialog.h = header;
            me.dialog.h.append('<h2><span class="title"></span><a href="#" class="close">' + $.fi.resources.utilities['close'][$.fi.languageCode] + '</a></h2>');

            if (me.options.title.length > 0) {
                me.set('title', me.options.title);
            } else {
                if (me.e.attr('title')) {
                    me.set('title', me.e.attr('title'));
                }
            }

            me.dialog.h.find('a.close').click(function (event) {
                event.preventDefault();
                me.hide();
            });

            me.e.removeAttr('title');

            var content = $('<div/>').addClass('dialog-body');
            me.dialog.e.append(content);
            me.dialog.c = content;
            me.dialog.c.append(me.e.clone());
            me.e.remove();
        };

        me.show = function (content) {
            me.dialog.e.show();
            me.dialog.c.width(me.options.width);
            me.dialog.c.removeClass('scroll');
            if (me.options.height != 'auto') {
                me.dialog.c.height('auto');
                if (me.options.height < me.dialog.c.outerHeight(1)) {
                    me.dialog.c.addClass('scroll');
                }
            }
            me.dialog.c.height(me.options.height);

            var l = Math.max($(document).width(), $(window).width()) - me.dialog.e.outerWidth(1);
            var t = $(window).height() - me.dialog.e.outerHeight(1);
            me.dialog.e.css({ left: l / 2, top: t / 2 });

        };

        me.hide = function () {
            me.dialog.e.hide();
        };

        me.createDialog();
        if (me.options.autoOpen) {
            me.show();
        }


        me.invokeAction = function (args) {
            var f = args[0];
            if (f == "show") {
                if (args.length > 1) {
                    me.show(args[1]);
                } else {
                    me.show();
                }
            }
            else if (f == "hide") {
                me.hide();
            } else if (f == "set") {
                me.set(args[1], args[2]);
            } else if (f == "render") {
                args[1](me.dialog.e);
            }
        };
    };

    $.fn.dialog = function (options) {
        var args = arguments;
        if (typeof ('options') == 'object' || typeof ('options') == 'undefined' || options == null || typeof (options.indexOf) == 'undefined') {
            var opts = $.extend(true, {}, $.fn.dialog.Defaults, options);
            return this.each(function () {
                var e = $(this);
                var obj = new Dialog(e, opts);
                elemenObejcts[e.attr('id')] = obj;
            });
        } else {
            var result = [];
            this.each(function () {
                var e = $(this);
                var obj = elemenObejcts[e.attr('id')];
                if (typeof (obj) != 'undefined') {
                    result.push(obj.invokeAction(args));
                }
            });
            return result;
        }

    };

    $.fn.dialog.Defaults = {
        modal: false,
        title: '',
        showClose: true,
        content: '',
        autoOpen: false,
        width: 'auto',
        height: 'auto'
    };
})(jQuery);
(function ($) {
    var PageListing = function (element, options) {
        var me = this;
        me.e = $(element);
        me.options = options;

        me.pageIndex = me.options.initialPage;
        me.pageSize = me.options.rows * me.options.cols;

        me.ul = me.e.find('.general-listing');
        me.isWorking = false;
        me.pager = {
            ul: me.e.find('.pager'),
            info: me.e.find('.pager li.info'),
            prev: me.e.find('.pager li a.previous'),
            next: me.e.find('.pager li a.next')
        };
        me.totalPages = me.options.initialTotalPages;
        me.totalRecords = 0;

        me.updatePager = function () {
            me.pager.info.text(me.options.pagerFormat.replace('{0}', me.pageIndex).replace('{1}', me.totalPages));

            if (me.pageIndex > 1) {
                me.pager.prev.removeClass('disabled');
            } else {
                me.pager.prev.addClass('disabled');
            }

            if (me.pageIndex < me.totalPages) {
                me.pager.next.removeClass('disabled');
            } else {
                me.pager.next.addClass('disabled');
            }

            // check page numbers
            me.pager.ul.find('li[rel=page],li.hidden-pages').remove();

            if (me.totalPages < me.options.pagerGroupSize * 2 + 1) {
                var p = me.pager.prev.parent();
                for (var i = 1, ii = me.totalPages; i <= ii; i++) {
                    p.after('<li id="page_' + i + '" rel="page"><a href="#' + i + '">' + i + '</a></li>');
                    p = p.next();
                }



            } else {
                var p = me.pager.prev.parent();
                // add first group
                var m = 0;

                var b = Math.ceil((me.options.pagerGroupSize - 1.0) / 2);
                var a = me.options.pagerGroupSize - b - 1;

                for (var i = 1, ii = Math.min(me.options.pagerGroupSize, me.totalPages); i <= ii; i++) {
                    if (i <= m) continue;
                    p.after('<li id="page_' + i + '" rel="page"><a href="#' + i + '">' + i + '</a></li>');
                    p = p.next();
                    m = i;
                }


                if (me.pageIndex - b > me.options.pagerGroupSize + 1) {
                    p.after('<li class="hidden-pages">&hellip;</li>');
                    p = p.next();
                }

                if (me.pageIndex - b < me.totalPages - me.options.pagerGroupSize + 1) {
                    for (var i = me.pageIndex - b, ii = Math.min(me.pageIndex + a, me.totalPages); i <= ii; i++) {
                        if (i <= m) continue;
                        p.after('<li id="page_' + i + '" rel="page"><a href="#' + i + '">' + i + '</a></li>');
                        p = p.next();
                        m = i;
                    }

                    if (me.pageIndex + a < me.totalPages - me.options.pagerGroupSize) {
                        p.after('<li class="hidden-pages">&hellip;</li>');
                        p = p.next();
                    }
                }

                for (var i = me.totalPages - me.options.pagerGroupSize + 1, ii = me.totalPages; i <= ii; i++) {
                    if (i <= m) continue;
                    p.after('<li id="page_' + i + '" rel="page"><a href="#' + i + '">' + i + '</a></li>');
                    p = p.next();
                    m = i;
                }
            }

            me.pager.ul.find('li[rel=page] a').removeClass('current');

            me.pager.ul.find('li#page_' + me.pageIndex + ' a').addClass('current');

            me.pager.ul.find('li[rel=page] a').click(function (event) {
                event.preventDefault();
                me.loadPage(parseInt($(this).attr('href').replace('#', '')));
            });
        };

        me.fixHeight = function () {
            me.ul.css({ height: 'auto' });
            me.ul.css({ height: me.ul.outerHeight(1) });
        };

        me.loadPage = function (pageIndex) {
            if (me.isWorking) return;
            me.isWorking = true;
            me.e.addClass('loading');
            me.ul.empty();
            me.pageIndex = pageIndex;

            var p = { pageIndex: pageIndex, pageSize: me.pageSize, languageId: $.fi.languageId, languageCode: $.fi.languageCode};
            if (me.options.postData) {
                p = me.options.postData(p);
            }
            if (me.options.monitorHash) {
                window.location.hash = "#page=" + pageIndex;
            }
            $.ajax({
                url: me.options.feedUrl,
                data: $.toJSON(p),
                success: function (response) {
                    var data = response.d;
                    me.totalPages = data.total;
                    me.totalRecords = data.records;
                    me.pageIndex = data.page;
                    if (data.items.length > 0) {
                        for (var i = 0, ii = data.items.length; i < ii; i++) {
                            var item = data.items[i];
                            var title = item.title;
                            if (title.length > me.options.titleTextLimit) {
                                title = title.substring(0, Math.max(me.options.titleTextLimit - 5, me.options.titleTextLimit - 5 + title.substring(me.options.titleTextLimit - 5).indexOf(' '))) + '&hellip;';
                            }

                            var intro = item.intro;
                            if (intro.length > me.options.introTextLimit) {
                                intro = intro.substring(0, Math.max(me.options.introTextLimit - 5, me.options.introTextLimit - 5 + intro.substring(me.options.introTextLimit - 5).indexOf(' '))) + '&hellip;';
                            }

                            var li = $('<li/>').addClass('web-page');
                            li.append('<span class="date" title="' + item.shortDate + '">' + item.date + '</span>');
                            li.append($('<h4/>').append($('<a/>').attr('href', item.link).attr('title', item.title).html(title)));
                            li.append($('<p/>').addClass('intro').html(intro));
                            li.append('<span class="clearfix"></span>');
                            me.ul.append(li);
                        }
                    }
                    // do something
                    me.updatePager();
                    me.e.removeClass('loading');
                    me.fixHeight();
                    me.isWorking = false;
                    if (me.options.scrollToResult) {
                        $('html, body').animate({ scrollTop: me.ul.offset().top }, 500);
                    }
                    if (me.options.loadCompletedCallback) {
                        me.options.loadCompletedCallback(data.total);
                    }
                },
                error: function () {
                },
                type: "POST",
                contentType: 'application/json; charset=utf-8',
                dataType: 'json'
            });
        };

        me.pager.next.click(function (event) {
            event.preventDefault();
            if ($(this).hasClass('disabled')) return;
            me.loadPage(me.pageIndex + 1);
        });

        me.pager.prev.click(function (event) {
            event.preventDefault();
            if ($(this).hasClass('disabled')) return;
            me.loadPage(me.pageIndex - 1);
        });

        me.updatePager();
        if (me.options.monitorHash) {
            $(window).bind('hashchange', function () {
                if (me.isWorking) return;
                if (window.location.hash.indexOf('#page=') == 0) {
                    var v = window.location.hash.replace('#page=', '');
                    if (!isNaN(v)) {
                        v = parseInt(v);
                        me.loadPage(v);
                    }
                }
            });

            // process hash
            if (window.location.hash.indexOf('#page=') == 0) {
                var v = window.location.hash.replace('#page=', '');
                if (!isNaN(v)) {
                    v = parseInt(v);
                    me.loadPage(v);
                }
            }
        }

        me.invokeAction = function (args) {
            var f = args[0];
            if (f == 'load') {
                me.loadPage(args[1]);
            }
        };


    };

    $.fn.pageListing = function (options) {
        var args = arguments;
        if (typeof ('options') == 'object' || typeof ('options') == 'undefined' || options == null || typeof (options.indexOf) == 'undefined') {
            var opts = $.extend(true, {}, $.fn.pageListing.defaults, options);
            return this.each(function () {
                var e = $(this);
                var obj = new PageListing(e, opts);
                e.data('obj', obj);
            });
        } else {
            var result = [];
            this.each(function () {
                var e = $(this);
                var obj = e.data('obj');
                if (typeof (obj) != 'undefined') {
                    result.push(obj.invokeAction(args));
                }
            });
            return result;
        }
    };

    $.fn.pageListing.defaults = {
        rows: 7,
        cols: 1,
        feedUrl: 'services/AjaxHandler.asmx/AdvancedSearch',
        postData: false,
        pagerFormat: 'Page {0} of {1}',
        monitorHash: true,
        pagerGroupSize: 3,
        initialPage: 1,
        initialTotalPages: 1,
        titleTextLimit: 90,
        introTextLimit: 150,
        loadCompletedCallback: false,
        scrollToResult: true
    };
})(jQuery);
(function ($) {
    var Slider = function (element, options) {

        //---------------------------------------- initializing
        var me = this;
        me.e = element;
        me.options = options;
        me.pager = {};
        me.pager.e = me.e.find(me.options.pager);
        me.list = me.e.find(me.options.pageSelector);
        me.pager.pageIndex = me.options.pageIndex;
        me.pager.totalPages = me.options.totalPages;

        //---------------------------------------- next and previous logic
        me.pager.next = me.pager.e.find('a.next');
        me.pager.prev = me.pager.e.find('a.previous');
        me.pager.info = me.pager.e.find('li.info');

        me.pager.next.click(function (event) {
            event.preventDefault();

            if ($(this).hasClass('disabled')) return;
            me.loadPage(me.pager.pageIndex + 1);
        });

        me.pager.prev.click(function (event) {
            event.preventDefault();

            if ($(this).hasClass('disabled')) return;
            me.loadPage(me.pager.pageIndex - 1);
        });


        me.goToPage = function (pageIndex,lcallback) {
            // CreateNewPage is for automatically creating new page on each load and it is useful when you have pagination ul first and then item inside,
            // if you want to reduce markup and you just need fade effect, you can disable this option to add new items directly to the parent ul item,
            // in this case the logic for calculating height might be a little bit different.
            if (me.options.createNewPage) {
                var li = me.list.find('li[rel=' + pageIndex + ']');
                if(li.length == 0){
li = me.list.find('li[data-page=' + pageIndex + ']');
}
                li.width(me.itemWidth);
                var h = li.outerHeight(1);
                if (me.options.containerHeightSelector) {
                    if (me.e.find(me.options.containerHeightSelector).hasClass('absolute')) {
                        var hi = me.e.find(me.options.containerHeightSelector);
                        var th = hi.height();
                        hi.removeClass('absolute').css({ height: 'auto' });
                        h = me.e.find(me.options.containerHeightSelector).outerHeight(1);
                        hi.addClass('absolute').height(th);
                    } else {
                        h = me.e.find(me.options.containerHeightSelector).outerHeight(1);
                    }
                }
                me.list.height(h);
                if (me.options.effect == 'slide') {
                    me.list.width(me.list.children().length * li.outerWidth(1) + 5);
                    if (me.options.direction == 'left') {
                        me.list.animate({ left: (1 - pageIndex) * li.outerWidth(1) }, me.options.speed, me.options.easing,lcallback);
                    } else {
                        me.list.animate({ left: (pageIndex - me.list.children().length) * li.outerWidth(1) - 5 }, me.options.speed, me.options.easing,lcallback);
                    }
                } else if (me.options.effect == 'fade') {
                    li.hide().fadeIn(me.options.speed, me.options.easing, lcallback);
                }
            } else {
                if (me.options.isTableMode) {
                    
                } else {
                    var li = me.list.find('li');
                    li.width(me.itemWidth);
                    var h = li.outerHeight(1);
                    if (me.options.containerHeightSelector) {
                        if (me.e.find(me.options.containerHeightSelector).hasClass('absolute')) {
                            var hi = me.e.find(me.options.containerHeightSelector);
                            var th = hi.height();
                            hi.removeClass('absolute').css({ height: 'auto' });
                            h = me.e.find(me.options.containerHeightSelector).outerHeight(1);
                            hi.addClass('absolute').height(th);
                        } else {
                            h = me.e.find(me.options.containerHeightSelector).outerHeight(1);
                        }
                    }
                    me.list.height(h);
                    if (me.options.effect == 'fade') {
                        li.hide().fadeIn(me.options.speed, me.options.easing, lcallback);
                    }
                }
            }

            me.updatePager();
            if (me.options.loadCompleted) {
                me.options.loadCompleted(li);
            }
            me.e.removeClass('loading');
        };

        //----------------------------------------- Load Page
        me.loadPage = function (pageIndex, lcallback) {
            if (me.e.hasClass('loading')) {
                return;
            }

            if (me.pager.pageIndex == pageIndex) return;
            if (me.options.loadingCallback) {
                me.options.loadingCallback(me.e);
            } else {
                me.e.addClass('loading');
            }
            if (me.options.effect == 'fade') {
                // no need to cache items, 
                me.list.empty();
            } else {

                if (me.list.find('li[rel=' + pageIndex + '],li[data-page=' + pageIndex + ']').length > 0) {
                    me.pager.pageIndex = pageIndex;
                    // page exists
                    me.goToPage(pageIndex,lcallback);
                    return;
                }
            }

            var postData = me.options.postParams();
            postData.pageIndex = pageIndex;
            postData.pageSize = me.options.pageSize;

            $.ajax({
                url: me.options.feeder,
                data: $.toJSON(postData),
                success: function (response) {
                    var d = response.d;
                    me.pager.totalPages = d.total;
                    me.pager.pageIndex = d.page;
                    if (me.options.createNewPage) {
                        var li = $('<li/>').addClass('page').attr('rel', me.pager.pageIndex);
                        me.options.renderCallback(li, d);
                        me.list.append(li);
                        if (me.options.direction == "right") {
                            me.list.css({ left: -me.itemWidth - 5 });
                        }
                    } else {
                        me.options.renderCallback(me.list, d);
                    }
                    me.goToPage(me.pager.pageIndex,lcallback);
                },
                error: function () {

                },
                type: "POST",
                contentType: 'application/json; charset=utf-8',
                dataType: 'json'
            });


        };


        //--------------------------------------------------------------------- Update pager
        me.updatePager = function () {
            if (me.options.showInfo) {
                me.pager.info.text(me.options.resources.pagerFormat.replace('{0}', me.pager.pageIndex).replace('{1}', me.pager.totalPages));
            } else if (me.options.showViewAll) {
                //
            }

            if (me.pager.pageIndex > 1) {
                me.pager.prev.removeClass('disabled');
            } else {
                me.pager.prev.addClass('disabled');
            }

            if (me.pager.pageIndex < Math.min(me.pager.totalPages, me.options.maxPages)) {
                me.pager.next.removeClass('disabled');
            } else {
                me.pager.next.addClass('disabled');
            }


            if (me.options.showPageNumbers) {
                // check page numbers
                me.pager.e.find('li[rel=page],li.hidden-pages').remove();

                if (me.pager.totalPages < me.options.pagerGroupSize * 2 + 1) {
                    var p = me.pager.prev.parent();
                    for (var i = 1, ii = me.pager.totalPages; i <= ii; i++) {
                        p.after('<li id="page_' + i + '" rel="page"><a href="#' + i + '">' + i + '</a></li>');
                        p = p.next();
                    }



                } else {
                    var p = me.pager.prev.parent();
                    // add first group
                    var m = 0;

                    var b = Math.ceil((me.options.pagerGroupSize - 1.0) / 2);
                    var a = me.options.pagerGroupSize - b - 1;

                    for (var i = 1, ii = Math.min(me.options.pagerGroupSize, me.pager.totalPages); i <= ii; i++) {
                        if (i <= m) continue;
                        p.after('<li id="page_' + i + '" rel="page"><a href="#' + i + '">' + i + '</a></li>');
                        p = p.next();
                        m = i;
                    }


                    if (me.pager.pageIndex - b > me.options.pagerGroupSize + 1) {
                        p.after('<li class="hidden-pages">&hellip;</li>');
                        p = p.next();
                    }

                    if (me.pager.pageIndex - b < me.pager.totalPages - me.options.pagerGroupSize + 1) {
                        for (var i = me.pager.pageIndex - b, ii = Math.min(me.pager.pageIndex + a, me.pager.totalPages); i <= ii; i++) {
                            if (i <= m) continue;
                            p.after('<li id="page_' + i + '" rel="page"><a href="#' + i + '">' + i + '</a></li>');
                            p = p.next();
                            m = i;
                        }

                        if (me.pager.pageIndex + a < me.pager.totalPages - me.options.pagerGroupSize) {
                            p.after('<li class="hidden-pages">&hellip;</li>');
                            p = p.next();
                        }
                    }

                    for (var i = me.pager.totalPages - me.options.pagerGroupSize + 1, ii = me.pager.totalPages; i <= ii; i++) {
                        if (i <= m) continue;
                        p.after('<li id="page_' + i + '" rel="page"><a href="#' + i + '">' + i + '</a></li>');
                        p = p.next();
                        m = i;
                    }
                }

                me.pager.e.find('li[rel=page] a').removeClass('current');

                me.pager.e.find('li#page_' + me.pager.pageIndex + ' a').addClass('current');

                me.pager.e.find('li[rel=page] a').click(function (event) {
                    event.preventDefault();
                    me.loadPage(parseInt($(this).attr('href').replace('#', '')));
                });
            } else if (me.options.useDottedPages) {
                if (me.pager.e.find('li.meta-dotted-pages').length == 0) {
                    for (var i = 0; i < me.options.maxPages; i++) {
                        me.pager.e.prepend('<li class="meta-dotted-pages"><a href="#' + (i + 1) + '" title="Go to page ' + (i + 1) + '" class="icons gray-bullet-icon">Page ' + (i + 1) + '</a></li>');
                    }
                    me.pager.e.find('li.meta-dotted-pages a').click(function (event) {
                        event.preventDefault();
                        me.loadPage(parseInt($(this).attr('href').replace('#', '')));
                    });
                }

                me.pager.e.find('li.meta-dotted-pages').removeClass('current');
                me.pager.e.find('li.meta-dotted-pages a[href*="#' + me.pager.pageIndex + '"]').parent().addClass('current');
            }
            if (me.list.outerHeight(1) > 0) {
                me.list.parent().animate({ height: me.list.outerHeight(1) }, me.options.speed, me.options.easing);
            }
        };

        //------------------------------------------------------------------- initialize
        me.initalize = function () {
            if (!me.list.hasClass('absolute')) {
                me.list.addClass('absolute');
                if (me.options.containerHeightSelector) {
                    me.list.height(me.e.find(me.options.containerHeightSelector).outerHeight(1));
                } else {
                    me.list.height(me.list.children().outerHeight(1));
                }
                me.itemWidth = me.list.parent().width();
                me.list.children().width(me.itemWidth);

                me.updatePager();
            }
        };


        if (me.options.delayedInitialize) {
            me.options.delayedInitialize(me.initalize);
        } else {
            me.initalize();
        }

        if (me.pager.pageIndex < 1) {
            me.loadPage(1);
        } else {
            me.updatePager();
        }

        if (me.options.updateUrl) {
            $(window).bind('hashchange', function () {
                if (window.location.hash.indexOf('#page=') == 0) {
                    var v = window.location.hash.replace('#page=', '');
                    if (!isNaN(v)) {
                        v = parseInt(v);
                        me.loadPage(v);
                    }
                }
            });

            // process hash
            if (window.location.hash.indexOf('#page=') == 0) {
                var v = window.location.hash.replace('#page=', '');
                if (!isNaN(v)) {
                    v = parseInt(v);
                    me.loadPage(v);
                }
            }
        }

        me.auto = {};
        me.auto.timer = null;

        me.auto.tick = function () {
            me.auto.timer = null;
            var np = me.pager.pageIndex + 1;
            if (np > me.options.maxPages || np > me.pager.totalPages) {
                np = 1;
            }
            me.loadPage(np, function(){
				me.auto.setTimer();
			});
        };

        me.auto.setTimer = function () {
            me.auto.clearTimer();
            me.auto.timer = window.setTimeout(function () { me.auto.tick(); }, me.options.autoSlideDelay);
        };

        me.auto.clearTimer = function () {
            if (me.auto.timer == null) return;
            clearTimeout(me.auto.timer);
            me.auto.timer = null;
        }

        if (me.options.autoSlide) {
            me.auto.setTimer();
            me.list.hover(function () { me.auto.clearTimer(); }, function () { me.auto.setTimer(); });
            me.pager.e.hover(function () { me.auto.clearTimer(); }, function () { me.auto.setTimer(); });
        }

        if (me.options.triggerOnClick) {
            $(me.options.triggerOnClick).click(function (event) {
                event.preventDefault();
                me.loadPage(1);
            });
        }
    };

    $.fn.slippy = function (options) {
        var opts = $.extend({}, $.fn.slippy.defaults, options);

        return this.each(function () {
            new Slider($(this), opts);
        });
    };

    $.fn.slippy.defaults = {
        feeder: '',

        // callbacks
        postParams: false,
        renderCallback: false,
        loadCompleted: false,

        pageIndex: 1,
        totalPages: 5,
        maxPages: 5,
        pageSize: 3,
        pager: 'ul.pager',
        pageSelector: 'ul.pagination',
        effect: 'slide',
        direction: 'left',
        speed: 500,
        easing: 'easeOutQuad',
        autoSlide: false,
        autoSlideDelay: 3000,
        showPageNumbers: false,
        useDottedPages: false,
        showViewAll: false,
        viewAllLink: '',
        showInfo: false,
        containerHeightSelector: '',
        pagerGroupSize: 3,
        createNewPage: true,
        isTableMode: false,
        triggerOnClick: false,
        updateUrl: false,
        delayedInitialize: false,
        loadingCallback: false,
        resources: {
            pagerFormat: 'Page {0} of {1}'
        }
    };
})(jQuery);
(function ($) {

    var LimitedTextArea = function (element, options) {
        var me = this;
        me.e = element;
        me.options = options;
        if (me.options.wordLimit) {
            me.maxLength = 150;
            if (isNaN(me.options.maxLength)) {
                me.maxLength = me.e.attr('rel');
                if (isNaN(me.maxLength)) {
                    me.maxLength = 500;
                } else {
                    me.maxLength = parseInt(me.maxLength);
                }
            } else {
                me.maxLength = parseInt(me.options.maxLength);
            }
            me.span = me.e.parent().find('.textarea-limit');
            if (me.span.length == 0) {
                me.span = $('<span/>').addClass('textarea-limit');
                me.e.after(me.span);
            }
            me.span.html($.fi.resources.forms.wordsLeft[$.fi.languageCode].replace('{0}', me.maxLength));
        } else {
            me.maxLength = 100;
            if (isNaN(me.options.maxLength)) {
                me.maxLength = me.e.attr('maxlength');
                if (isNaN(me.maxLength)) {
                    me.maxLength = 500;
                } else {
                    me.maxLength = parseInt(me.maxLength);
                }
            } else {
                me.maxLength = parseInt(me.options.maxLength);
            }

            me.span = me.e.parent().find('.textarea-limit');
            if (me.span.length == 0) {
                me.span = $('<span/>').addClass('textarea-limit');
                me.e.after(me.span);
            }
            me.span.html($.fi.resources.forms.charsLeft[$.fi.languageCode].replace('{0}', me.maxLength));
        }

        me.e.keyup(function () {
            me.check();
        }).mouseup(function () {
            me.check();
        }).change(function () {
            me.check();
        });

        me.check = function () {
            if (me.options.wordLimit) {
                var words = me.e.val().match(/\S+/g);
                var length = words && words.length || 0;
                while (length > me.maxLength) {
                    me.e.val(me.e.val().substring(0, me.e.val().lastIndexOf(' ')));
                    words = me.e.val().match(/\S+/g);
                    length = words && words.length || 0;
                }
                me.span.find('span').text(me.maxLength - length);
            } else {
                if (me.e.val().length > me.maxLength) {
                    me.e.val(me.e.val().substring(0, me.maxLength));
                }
                me.span.find('span').text(me.maxLength - me.e.val().length);
            }
        };

        me.check();

        me.grow = function () {
            var linesCount = 0;
            var obj = me.e.get(0);
            var lines = obj.value.split('\n');
            for (var i = lines.length - 1; i >= 0; --i) {
                linesCount += Math.floor((lines[i].length / me.colsDefault) + 1);
            }

            if (linesCount >= me.rowsDefault) {
                obj.rows = linesCount + 1;
            } else {
                obj.rows = me.rowsDefault;
            }
        }

        me.initAutoGrow = function () {
            me.colsDefault = me.e.attr('cols');
            me.e.css({ minHeight: me.e.height(), height: 'auto', maxHeight: me.options.maxHeight });
            me.rowsDefault = me.e.attr('rows');
            me.e.keyup(function () { me.grow(); })
                .focus(function () { me.grow(); })
                .change(function () { me.grow(); })
                .mouseup(function () { me.grow(); });
        };

        if (me.e.hasClass('auto-grow')) {
            me.initAutoGrow();
            me.grow();
        }
    };

    $.fn.limitedTextArea = function (options) {
        var opt = $.extend({}, $.fn.limitedTextArea.defaults, options);
        return this.each(function () {
            new LimitedTextArea($(this), opt);
        });
    };

    $.fn.limitedTextArea.defaults = {
        maxLength: 'auto',
        autoGrow: true,
        maxHeight: 300,
        wordLimit: false
    };
})(jQuery);
(function ($) {
    var PhotoGallery = function (element, options) {
        var me = this;
        me.e = $(element);
        me.options = options;
        me.layout = me.options.initialLayout;
        me.pageIndex = me.options.initialPage;
        me.pageSize = me.options.pageSize;

        me.lst = me.e.find('.general-listing');

        //--------------------------------------------------------------------------------------------------- Filters
        if (me.options.useInlineFilter) {
            me.filters = { e: $(me.options.filteringSelector),
                year: $(me.options.filteringSelector).find('select[name=year]'),
                keywords: $(me.options.filteringSelector).find('input[name=keywords]'),
                search: $(me.options.filteringSelector).find('input[name=search]'),
                getKeywords: function () {
                    var v = me.filters.keywords.val();
                    if (v == me.filters.keywords.attr('def')) return '';
                    return v;
                }
            };

            me.filters.year.change(function () {
                me.loadPage(1);
            });

            // Search button handler
            me.filters.search.click(function (event) {
                event.preventDefault();
                me.loadPage(1);
            });

            me.filters.keywords.keypress(function (event) {
                if (event.which == "13") {
                    event.preventDefault();
                    me.filters.search.click();
                }
            });
        } else {
            me.filters = {};
        }

        //------------------------------------------------------------------------------------------------ PAGER
        me.isWorking = false;
        me.pager = {
            ul: me.e.find('.pager'),
            info: me.e.find('.pager li.info'),
            prev: me.e.find('.pager li a.previous'),
            next: me.e.find('.pager li a.next')
        };
        me.totalPages = me.options.initialTotalPages;
        me.totalRecords = 0;

        // Update pager info and also current page number.
        me.updatePager = function () {

            if (me.layout == 'recent') {
                me.pager.ul.hide();
            } else {
                me.pager.ul.show();
            }

            me.pager.info.text(me.options.resources.pagerFormat.replace('{0}', me.pageIndex).replace('{1}', me.totalPages));

            if (me.pageIndex > 1) {
                me.pager.prev.removeClass('disabled');
            } else {
                me.pager.prev.addClass('disabled');
            }

            if (me.pageIndex < me.totalPages) {
                me.pager.next.removeClass('disabled');
            } else {
                me.pager.next.addClass('disabled');
            }

            // check page numbers
            me.pager.ul.find('li[rel=page],li.hidden-pages').remove();

            if (me.totalPages < me.options.pagerGroupSize * 2 + 1) {
                var p = me.pager.prev.parent();
                for (var i = 1, ii = me.totalPages; i <= ii; i++) {
                    p.after('<li id="page_' + i + '" rel="page"><a href="#' + i + '">' + i + '</a></li>');
                    p = p.next();
                }
            } else {
                var p = me.pager.prev.parent();
                // add first group
                var m = 0;

                var b = Math.ceil((me.options.pagerGroupSize - 1.0) / 2);
                var a = me.options.pagerGroupSize - b - 1;

                for (var i = 1, ii = Math.min(me.options.pagerGroupSize, me.totalPages); i <= ii; i++) {
                    if (i <= m) continue;
                    p.after('<li id="page_' + i + '" rel="page"><a href="#' + i + '">' + i + '</a></li>');
                    p = p.next();
                    m = i;
                }


                if (me.pageIndex - b > me.options.pagerGroupSize + 1) {
                    p.after('<li class="hidden-pages">&hellip;</li>');
                    p = p.next();
                }

                if (me.pageIndex - b < me.totalPages - me.options.pagerGroupSize + 1) {
                    for (var i = me.pageIndex - b, ii = Math.min(me.pageIndex + a, me.totalPages); i <= ii; i++) {
                        if (i <= m) continue;
                        p.after('<li id="page_' + i + '" rel="page"><a href="#' + i + '">' + i + '</a></li>');
                        p = p.next();
                        m = i;
                    }

                    if (me.pageIndex + a < me.totalPages - me.options.pagerGroupSize) {
                        p.after('<li class="hidden-pages">&hellip;</li>');
                        p = p.next();
                    }
                }

                for (var i = me.totalPages - me.options.pagerGroupSize + 1, ii = me.totalPages; i <= ii; i++) {
                    if (i <= m) continue;
                    p.after('<li id="page_' + i + '" rel="page"><a href="#' + i + '">' + i + '</a></li>');
                    p = p.next();
                    m = i;
                }
            }

            me.pager.ul.find('li[rel=page] a').removeClass('current');

            me.pager.ul.find('li#page_' + me.pageIndex + ' a').addClass('current');

            me.pager.ul.find('li[rel=page] a').click(function (event) {
                event.preventDefault();
                me.loadPage(parseInt($(this).attr('href').replace('#', '')));
            });

            me.lst.height('auto');


        };

        // next page handler
        me.pager.next.click(function (event) {
            event.preventDefault();
            if ($(this).hasClass('disabled')) return;
            me.loadPage(me.pageIndex + 1);
        });

        // previous page handler
        me.pager.prev.click(function (event) {
            event.preventDefault();
            if ($(this).hasClass('disabled')) return;
            me.loadPage(me.pageIndex - 1);
        });


        //----------------------------------------------------------------------------------------------- Listing
        // fix the height of the ul, so the page will not move while loading new items
        me.fixHeight = function () {
            me.lst.height('auto');
            me.lst.height(me.lst.outerHeight(1));
        };

        // load items in selected page
        me.loadPage = function (pageIndex) {
            if (me.isWorking) return;
            me.isWorking = true;
            me.e.addClass('loading');
            me.fixHeight();
            me.lst.empty();
            me.pageIndex = pageIndex;
            if (me.options.monitorHash) {
                window.location.hash = "#page=" + pageIndex;
            }

            var p = { pageIndex: pageIndex, pageSize: me.pageSize, languageId: $.fi.languageId, languageCode: $.fi.languageCode };
            if (me.options.useInlineFilter) {
                p.keywords = me.filters.getKeywords();
                p.year = me.filters.year.val();
                p.showAll = me.layout != 'recent';
            }
            if (me.options.postData) {
                p = me.options.postData(p);
            }

            $.ajax({
                url: me.options.feedUrl,
                data: $.toJSON(p),
                success: function (response) {
                    var data = response.d;
                    me.totalPages = data.total;
                    me.totalRecords = data.records;
                    me.pageIndex = data.page;
                    me.layout = data.layout;

                    if (me.layout == 'recent') {
                        me.lst.append('<li class="header"><h2>' + me.options.resources.recentPhotos + '</h2></li>');
                        for (var i = 0, ii = data.recent.length; i < ii; i++) {
                            var item = data.recent[i];
                            var li = $('<li/>').addClass('photo');
                            if (i == 0) li.addClass('featured');
                            else li.addClass('side');
                            li.append('<a href="#' + item.id + '" class="image-frame"><img src="' + item.image + '" alt="' + item.title + '" /></a>');
                            li.append('<div class="item-details"><span class="date">' + item.date + (i == 0 ? ' | ' : '') + '<span>' + me.options.resources.photos.replace('{0}', item.photos) + '</span></div>');
                            li.append('<h4><a href="#' + item.id + '">' + item.title + '</a></h4>');
                            me.lst.append(li);
                        }
                        me.lst.append('<li class="more"><a href="#" class="more">' + me.options.resources.viewAll + '</a></li>');

                        if (data.mostViewed.length > 0) {
                            me.lst.append('<li class="header"><h2>' + me.options.resources.mostViewed + '</h2></li>');
                            for (var i = 0, ii = data.mostViewed.length; i < ii; i++) {
                                var item = data.mostViewed[i];
                                var li = $('<li/>').addClass('photo');
                                if (i % me.options.rows == 0 && i > 0) li.addClass('last');
                                li.append('<a href="#' + item.id + '" class="image-frame"><img src="' + item.image + '" alt="' + item.title + '" /></a>');
                                li.append('<div class="item-details"><span class="date">' + item.date + '<span>' + me.options.resources.photos.replace('{0}', item.photos) + '</span></div>');
                                li.append('<h4><a href="#' + item.id + '">' + item.title + '</a></h4>');
                                me.lst.append(li);
                            }
                        }
                    } else {
                        if (me.options.addHeader) {
                            if (me.filters.year.val() > 0) {
                                me.lst.append('<li class="header"><h2>' + me.options.resources.title.replace('{0}', me.filters.year.val()) + '</h2></li>');
                            } else {
                                me.lst.append('<li class="header"><h2>' + me.options.resources.searchResult + '</h2></li>');
                            }
                        }
                        if (data.items.length > 0) {
                            for (var i = 0, ii = data.items.length; i < ii; i++) {
                                var item = data.items[i];
                                var li = $('<li/>').addClass('photo');
                                if (i % me.options.rows == 0 && i > 0) li.addClass('last');
                                li.append('<a href="#' + item.id + '" class="image-frame"><img src="' + item.image + '" alt="' + item.title + '" /></a>');
                                li.append('<div class="item-details"><span class="date">' + item.date + '<span>' + me.options.resources.photos.replace('{0}', item.photos) + '</span></div>');
                                li.append('<h4><a href="#' + item.id + '">' + item.title + '</a></h4>');
                                me.lst.append(li);
                            }
                        } else {
                            me.lst.append('<li class="empty">' + me.options.resources.noResult + '</li>');
                        }
                    }
                    me.lst.append('<li class="clearfix"></li>');
                    me.activateLinks();
                    /*
                    // do something
                    if (me.filters.year.val() > 0) {
                    me.e.find('h2').html(me.options.resources.title.replace('{0}', me.filters.year.val()));
                    } else {
                    me.e.find('h2').html(me.options.resources.searchResult);
                    }*/
                    me.updatePager();
                    me.e.removeClass('loading');
                    me.isWorking = false;

                    if (me.options.scrollToResult) {
                        $('html, body').animate({ scrollTop: me.e.parent().offset().top }, 500);
                    }
                    if (me.options.loadCompletedCallback) {
                        me.options.loadCompletedCallback(data.total);
                    }
                },
                error: function () {
                },
                type: "POST",
                contentType: 'application/json; charset=utf-8',
                dataType: 'json'
            });
        };

        me.startSlideShow = function (albumId) {
            var targetItem = $('#pa_' + albumId);
            if (targetItem.length == 0) {
                // load album
                $.ajax({
                    url: me.options.albumLoader,
                    data: $.toJSON({ albumId: albumId }),
                    success: function (response) {
                        var d = response.d;
                        var ul = $('<ul/>').attr('id', 'pa_' + albumId).hide();
                        for (var i = 0, ii = d.length; i < ii; i++) {
                            ul.append('<li><a href="' + d[i].image + '" title="' + d[i].title + '"></a></li>');
                        }

                        $('body').append(ul);

                        ul.find('li a').lightBox();
                        ul.find('li:first a').click();
                    },
                    error: function () {
                    },
                    type: "POST",
                    contentType: 'application/json; charset=utf-8',
                    dataType: 'json'
                });
            } else {
                // album is there, just start slide show
                targetItem.find('li:first a').click();
            }
        };

        me.activateLinks = function () {
            me.lst.find('li.photo a').click(function (event) {
                event.preventDefault();
                var id = $(this).attr('href');
                id = id.substring(id.indexOf('#') + 1);
                me.startSlideShow(parseInt(id));
            });

            me.lst.find('li.more a').click(function (event) {
                event.preventDefault();

                var y = me.filters.year.get(0);
                y.selectedIndex = 1;
                me.filters.year.change();
                me.loadPage(1);
            });
        };


        //------------------------------------------------------------------------------------------ Initialize
        me.updatePager();
        me.activateLinks();

        if (me.options.monitorHash) {
            try {
                $(window).bind('hashchange', function () {
                    if (me.isWorking) return;
                    if (window.location.hash.indexOf('#page=') == 0) {
                        var v = window.location.hash.replace('#page=', '');
                        if (!isNaN(v)) {
                            v = parseInt(v);
                            me.loadPage(v);
                        }
                    }
                });
            } catch (errr) { /* old browsers do not support this feature */ }

            // process hash
            if (window.location.hash.indexOf('#page=') == 0) {
                var v = window.location.hash.replace('#page=', '');
                if (!isNaN(v)) {
                    v = parseInt(v);
                    me.loadPage(v);
                }
            }
        }

        me.invokeAction = function (args) {
            var f = args[0];
            if (f == 'load') {
                me.loadPage(args[1]);
            }
        };
    };



    //------------------------------------------------------------------------------------- jQuery FN Definition
    $.fn.photoGallery = function (options) {
        var args = arguments;
        if (typeof ('options') == 'object' || typeof ('options') == 'undefined' || options == null || typeof (options.indexOf) == 'undefined') {
            var opts = $.extend(true, {}, $.fn.photoGallery.defaults, options);
            return this.each(function () {
                var e = $(this);
                var obj = new PhotoGallery(e, opts);
                e.data('obj', obj);
            });
        } else {
            var result = [];
            this.each(function () {
                var e = $(this);
                var obj = e.data('obj');
                if (typeof (obj) != 'undefined') {
                    result.push(obj.invokeAction(args));
                }
            });
            return result;
        }
    };

    //--------------------------------------------------------------------------------------- Defaults

    $.fn.photoGallery.defaults = {
        pageSize: 12,
        rows: 4,
        feedUrl: 'services/AjaxHandler.asmx/LoadPhotoGalleries',
        albumLoader: 'services/AjaxHandler.asmx/LoadPhotoGalleryItems',
        pagerGroupSize: 3,
        initialPage: 1,
        initialTotalPages: 1,
        filteringSelector: '',
        initialLayout: 'recent',
        speed: 400,
        resources: {
            noResult: 'No item found to match your search criteria',
            pagerFormat: 'Page {0} of {1}',
            title: '{0} Photos',
            photos: 'Photos: {0}',
            searchResult: 'Search result',
            recentPhotos: 'Recent Photos',
            mostViewed: 'Most Viewed',
            viewAll: 'View More Photos'
        },
        loadCompletedCallback: false,
        postData: false,
        useInlineFilter: true,
        monitorHash: true,
        scrollToResult: true,
        addHeader: true
    };
})(jQuery);
//v1.7
// Flash Player Version Detection
// Detect Client Browser type
// Copyright 2005-2007 Adobe Systems Incorporated.  All rights reserved.
var isIE  = (navigator.appVersion.indexOf("MSIE") != -1) ? true : false;
var isWin = (navigator.appVersion.toLowerCase().indexOf("win") != -1) ? true : false;
var isOpera = (navigator.userAgent.indexOf("Opera") != -1) ? true : false;

function ControlVersion()
{
	var version;
	var axo;
	var e;

	// NOTE : new ActiveXObject(strFoo) throws an exception if strFoo isn't in the registry

	try {
		// version will be set for 7.X or greater players
		axo = new ActiveXObject("ShockwaveFlash.ShockwaveFlash.7");
		version = axo.GetVariable("$version");
	} catch (e) {
	}

	if (!version)
	{
		try {
			// version will be set for 6.X players only
			axo = new ActiveXObject("ShockwaveFlash.ShockwaveFlash.6");
			
			// installed player is some revision of 6.0
			// GetVariable("$version") crashes for versions 6.0.22 through 6.0.29,
			// so we have to be careful. 
			
			// default to the first public version
			version = "WIN 6,0,21,0";

			// throws if AllowScripAccess does not exist (introduced in 6.0r47)		
			axo.AllowScriptAccess = "always";

			// safe to call for 6.0r47 or greater
			version = axo.GetVariable("$version");

		} catch (e) {
		}
	}

	if (!version)
	{
		try {
			// version will be set for 4.X or 5.X player
			axo = new ActiveXObject("ShockwaveFlash.ShockwaveFlash.3");
			version = axo.GetVariable("$version");
		} catch (e) {
		}
	}

	if (!version)
	{
		try {
			// version will be set for 3.X player
			axo = new ActiveXObject("ShockwaveFlash.ShockwaveFlash.3");
			version = "WIN 3,0,18,0";
		} catch (e) {
		}
	}

	if (!version)
	{
		try {
			// version will be set for 2.X player
			axo = new ActiveXObject("ShockwaveFlash.ShockwaveFlash");
			version = "WIN 2,0,0,11";
		} catch (e) {
			version = -1;
		}
	}
	
	return version;
}

// JavaScript helper required to detect Flash Player PlugIn version information
function GetSwfVer(){
	// NS/Opera version >= 3 check for Flash plugin in plugin array
	var flashVer = -1;
	
	if (navigator.plugins != null && navigator.plugins.length > 0) {
		if (navigator.plugins["Shockwave Flash 2.0"] || navigator.plugins["Shockwave Flash"]) {
			var swVer2 = navigator.plugins["Shockwave Flash 2.0"] ? " 2.0" : "";
			var flashDescription = navigator.plugins["Shockwave Flash" + swVer2].description;
			var descArray = flashDescription.split(" ");
			var tempArrayMajor = descArray[2].split(".");			
			var versionMajor = tempArrayMajor[0];
			var versionMinor = tempArrayMajor[1];
			var versionRevision = descArray[3];
			if (versionRevision == "") {
				versionRevision = descArray[4];
			}
			if (versionRevision[0] == "d") {
				versionRevision = versionRevision.substring(1);
			} else if (versionRevision[0] == "r") {
				versionRevision = versionRevision.substring(1);
				if (versionRevision.indexOf("d") > 0) {
					versionRevision = versionRevision.substring(0, versionRevision.indexOf("d"));
				}
			}
			var flashVer = versionMajor + "." + versionMinor + "." + versionRevision;
		}
	}
	// MSN/WebTV 2.6 supports Flash 4
	else if (navigator.userAgent.toLowerCase().indexOf("webtv/2.6") != -1) flashVer = 4;
	// WebTV 2.5 supports Flash 3
	else if (navigator.userAgent.toLowerCase().indexOf("webtv/2.5") != -1) flashVer = 3;
	// older WebTV supports Flash 2
	else if (navigator.userAgent.toLowerCase().indexOf("webtv") != -1) flashVer = 2;
	else if ( isIE && isWin && !isOpera ) {
		flashVer = ControlVersion();
	}	
	return flashVer;
}

// When called with reqMajorVer, reqMinorVer, reqRevision returns true if that version or greater is available
function DetectFlashVer(reqMajorVer, reqMinorVer, reqRevision)
{
	versionStr = GetSwfVer();
	if (versionStr == -1 ) {
		return false;
	} else if (versionStr != 0) {
		if(isIE && isWin && !isOpera) {
			// Given "WIN 2,0,0,11"
			tempArray         = versionStr.split(" "); 	// ["WIN", "2,0,0,11"]
			tempString        = tempArray[1];			// "2,0,0,11"
			versionArray      = tempString.split(",");	// ['2', '0', '0', '11']
		} else {
			versionArray      = versionStr.split(".");
		}
		var versionMajor      = versionArray[0];
		var versionMinor      = versionArray[1];
		var versionRevision   = versionArray[2];

        	// is the major.revision >= requested major.revision AND the minor version >= requested minor
		if (versionMajor > parseFloat(reqMajorVer)) {
			return true;
		} else if (versionMajor == parseFloat(reqMajorVer)) {
			if (versionMinor > parseFloat(reqMinorVer))
				return true;
			else if (versionMinor == parseFloat(reqMinorVer)) {
				if (versionRevision >= parseFloat(reqRevision))
					return true;
			}
		}
		return false;
	}
}

function AC_AddExtension(src, ext)
{
  if (src.indexOf('?') != -1)
    return src.replace(/\?/, ext+'?'); 
  else
    return src + ext;
}

function AC_Generateobj(objAttrs, params, embedAttrs) 
{ 
  var str = '';
  if (isIE && isWin && !isOpera)
  {
    str += '<object ';
    for (var i in objAttrs)
    {
      str += i + '="' + objAttrs[i] + '" ';
    }
    str += '>';
    for (var i in params)
    {
      str += '<param name="' + i + '" value="' + params[i] + '" /> ';
    }
    str += '</object>';
  }
  else
  {
    str += '<embed ';
    for (var i in embedAttrs)
    {
      str += i + '="' + embedAttrs[i] + '" ';
    }
    str += '> </embed>';
  }

  document.write(str);
}

function AC_FL_RunContent(){
  var ret = 
    AC_GetArgs
    (  arguments, ".swf", "movie", "clsid:d27cdb6e-ae6d-11cf-96b8-444553540000"
     , "application/x-shockwave-flash"
    );
  AC_Generateobj(ret.objAttrs, ret.params, ret.embedAttrs);
}

function AC_SW_RunContent(){
  var ret = 
    AC_GetArgs
    (  arguments, ".dcr", "src", "clsid:166B1BCA-3F9C-11CF-8075-444553540000"
     , null
    );
  AC_Generateobj(ret.objAttrs, ret.params, ret.embedAttrs);
}

function AC_GetArgs(args, ext, srcParamName, classid, mimeType){
  var ret = new Object();
  ret.embedAttrs = new Object();
  ret.params = new Object();
  ret.objAttrs = new Object();
  for (var i=0; i < args.length; i=i+2){
    var currArg = args[i].toLowerCase();    

    switch (currArg){	
      case "classid":
        break;
      case "pluginspage":
        ret.embedAttrs[args[i]] = args[i+1];
        break;
      case "src":
      case "movie":	
        args[i+1] = AC_AddExtension(args[i+1], ext);
        ret.embedAttrs["src"] = args[i+1];
        ret.params[srcParamName] = args[i+1];
        break;
      case "onafterupdate":
      case "onbeforeupdate":
      case "onblur":
      case "oncellchange":
      case "onclick":
      case "ondblclick":
      case "ondrag":
      case "ondragend":
      case "ondragenter":
      case "ondragleave":
      case "ondragover":
      case "ondrop":
      case "onfinish":
      case "onfocus":
      case "onhelp":
      case "onmousedown":
      case "onmouseup":
      case "onmouseover":
      case "onmousemove":
      case "onmouseout":
      case "onkeypress":
      case "onkeydown":
      case "onkeyup":
      case "onload":
      case "onlosecapture":
      case "onpropertychange":
      case "onreadystatechange":
      case "onrowsdelete":
      case "onrowenter":
      case "onrowexit":
      case "onrowsinserted":
      case "onstart":
      case "onscroll":
      case "onbeforeeditfocus":
      case "onactivate":
      case "onbeforedeactivate":
      case "ondeactivate":
      case "type":
      case "codebase":
      case "id":
        ret.objAttrs[args[i]] = args[i+1];
        break;
      case "width":
      case "height":
      case "align":
      case "vspace": 
      case "hspace":
      case "class":
      case "title":
      case "accesskey":
      case "name":
      case "tabindex":
        ret.embedAttrs[args[i]] = ret.objAttrs[args[i]] = args[i+1];
        break;
      default:
        ret.embedAttrs[args[i]] = ret.params[args[i]] = args[i+1];
    }
  }
  ret.objAttrs["classid"] = classid;
  if (mimeType) ret.embedAttrs["type"] = mimeType;
  return ret;
}

/*!
 * jQuery Cycle Plugin (with Transition Definitions)
 * Examples and documentation at: http://jquery.malsup.com/cycle/
 * Copyright (c) 2007-2009 M. Alsup
 * Version: 2.73 (04-NOV-2009)
 * Dual licensed under the MIT and GPL licenses:
 * http://www.opensource.org/licenses/mit-license.php
 * http://www.gnu.org/licenses/gpl.html
 * Requires: jQuery v1.2.6 or later
 *
 * Originally based on the work of:
 *	1) Matt Oakes
 *	2) Torsten Baldes (http://medienfreunde.com/lab/innerfade/)
 *	3) Benjamin Sterling (http://www.benjaminsterling.com/experiments/jqShuffle/)
 */
;(function($) {

var ver = '2.73';

// if $.support is not defined (pre jQuery 1.3) add what I need
if ($.support == undefined) {
	$.support = {
		opacity: !($.browser.msie)
	};
}

function debug(s) {
	if ($.fn.cycle.debug)
		log(s);
}		
function log() {
	if (window.console && window.console.log)
		window.console.log('[cycle] ' + Array.prototype.join.call(arguments,' '));
	//$('body').append('<div>'+Array.prototype.join.call(arguments,' ')+'</div>');
};

// the options arg can be...
//   a number  - indicates an immediate transition should occur to the given slide index
//   a string  - 'stop', 'pause', 'resume', or the name of a transition effect (ie, 'fade', 'zoom', etc)
//   an object - properties to control the slideshow
//
// the arg2 arg can be...
//   the name of an fx (only used in conjunction with a numeric value for 'options')
//   the value true (only used in conjunction with a options == 'resume') and indicates
//	 that the resume should occur immediately (not wait for next timeout)

$.fn.cycle = function(options, arg2) {
	var o = { s: this.selector, c: this.context };

	// in 1.3+ we can fix mistakes with the ready state
	if (this.length === 0 && options != 'stop') {
		if (!$.isReady && o.s) {
			log('DOM not ready, queuing slideshow');
			$(function() {
				$(o.s,o.c).cycle(options,arg2);
			});
			return this;
		}
		// is your DOM ready?  http://docs.jquery.com/Tutorials:Introducing_$(document).ready()
		log('terminating; zero elements found by selector' + ($.isReady ? '' : ' (DOM not ready)'));
		return this;
	}

	// iterate the matched nodeset
	return this.each(function() {
		var opts = handleArguments(this, options, arg2);
		if (opts === false)
			return;

		// stop existing slideshow for this container (if there is one)
		if (this.cycleTimeout)
			clearTimeout(this.cycleTimeout);
		this.cycleTimeout = this.cyclePause = 0;

		var $cont = $(this);
		var $slides = opts.slideExpr ? $(opts.slideExpr, this) : $cont.children();
		var els = $slides.get();
		if (els.length < 2) {
			log('terminating; too few slides: ' + els.length);
			return;
		}

		var opts2 = buildOptions($cont, $slides, els, opts, o);
		if (opts2 === false)
			return;

		var startTime = opts2.continuous ? 10 : getTimeout(opts2.currSlide, opts2.nextSlide, opts2, !opts2.rev);

		// if it's an auto slideshow, kick it off
		if (startTime) {
			startTime += (opts2.delay || 0);
			if (startTime < 10)
				startTime = 10;
			debug('first timeout: ' + startTime);
			this.cycleTimeout = setTimeout(function(){go(els,opts2,0,!opts2.rev)}, startTime);
		}
	});
};

// process the args that were passed to the plugin fn
function handleArguments(cont, options, arg2) {
	if (cont.cycleStop == undefined)
		cont.cycleStop = 0;
	if (options === undefined || options === null)
		options = {};
	if (options.constructor == String) {
		switch(options) {
		case 'stop':
			cont.cycleStop++; // callbacks look for change
			if (cont.cycleTimeout)
				clearTimeout(cont.cycleTimeout);
			cont.cycleTimeout = 0;
			$(cont).removeData('cycle.opts');
			return false;
		case 'pause':
			cont.cyclePause = 1;
			return false;
		case 'resume':
			cont.cyclePause = 0;
			if (arg2 === true) { // resume now!
				options = $(cont).data('cycle.opts');
				if (!options) {
					log('options not found, can not resume');
					return false;
				}
				if (cont.cycleTimeout) {
					clearTimeout(cont.cycleTimeout);
					cont.cycleTimeout = 0;
				}
				go(options.elements, options, 1, 1);
			}
			return false;
		case 'prev':
		case 'next':
			var opts = $(cont).data('cycle.opts');
			if (!opts) {
				log('options not found, "prev/next" ignored');
				return false;
			}
			$.fn.cycle[options](opts);
			return false;
		default:
			options = { fx: options };
		};
		return options;
	}
	else if (options.constructor == Number) {
		// go to the requested slide
		var num = options;
		options = $(cont).data('cycle.opts');
		if (!options) {
			log('options not found, can not advance slide');
			return false;
		}
		if (num < 0 || num >= options.elements.length) {
			log('invalid slide index: ' + num);
			return false;
		}
		options.nextSlide = num;
		if (cont.cycleTimeout) {
			clearTimeout(cont.cycleTimeout);
			cont.cycleTimeout = 0;
		}
		if (typeof arg2 == 'string')
			options.oneTimeFx = arg2;
		go(options.elements, options, 1, num >= options.currSlide);
		return false;
	}
	return options;
};

function removeFilter(el, opts) {
	if (!$.support.opacity && opts.cleartype && el.style.filter) {
		try { el.style.removeAttribute('filter'); }
		catch(smother) {} // handle old opera versions
	}
};

// one-time initialization
function buildOptions($cont, $slides, els, options, o) {
	// support metadata plugin (v1.0 and v2.0)
	var opts = $.extend({}, $.fn.cycle.defaults, options || {}, $.metadata ? $cont.metadata() : $.meta ? $cont.data() : {});
	if (opts.autostop)
		opts.countdown = opts.autostopCount || els.length;

	var cont = $cont[0];
	$cont.data('cycle.opts', opts);
	opts.$cont = $cont;
	opts.stopCount = cont.cycleStop;
	opts.elements = els;
	opts.before = opts.before ? [opts.before] : [];
	opts.after = opts.after ? [opts.after] : [];
	opts.after.unshift(function(){ opts.busy=0; });

	// push some after callbacks
	if (!$.support.opacity && opts.cleartype)
		opts.after.push(function() { removeFilter(this, opts); });
	if (opts.continuous)
		opts.after.push(function() { go(els,opts,0,!opts.rev); });

	saveOriginalOpts(opts);

	// clearType corrections
	if (!$.support.opacity && opts.cleartype && !opts.cleartypeNoBg)
		clearTypeFix($slides);

	// container requires non-static position so that slides can be position within
	if ($cont.css('position') == 'static')
		$cont.css('position', 'relative');
	if (opts.width)
		$cont.width(opts.width);
	if (opts.height && opts.height != 'auto')
		$cont.height(opts.height);

	if (opts.startingSlide)
		opts.startingSlide = parseInt(opts.startingSlide);

	// if random, mix up the slide array
	if (opts.random) {
		opts.randomMap = [];
		for (var i = 0; i < els.length; i++)
			opts.randomMap.push(i);
		opts.randomMap.sort(function(a,b) {return Math.random() - 0.5;});
		opts.randomIndex = 0;
		opts.startingSlide = opts.randomMap[0];
	}
	else if (opts.startingSlide >= els.length)
		opts.startingSlide = 0; // catch bogus input
	opts.currSlide = opts.startingSlide = opts.startingSlide || 0;
	var first = opts.startingSlide;

	// set position and zIndex on all the slides
	$slides.css({position: 'absolute', top:0, left:0}).hide().each(function(i) {
		var z = first ? i >= first ? els.length - (i-first) : first-i : els.length-i;
		$(this).css('z-index', z)
	});

	// make sure first slide is visible
	$(els[first]).css('opacity',1).show(); // opacity bit needed to handle restart use case
	removeFilter(els[first], opts);

	// stretch slides
	if (opts.fit && opts.width)
		$slides.width(opts.width);
	if (opts.fit && opts.height && opts.height != 'auto')
		$slides.height(opts.height);

	// stretch container
	var reshape = opts.containerResize && !$cont.innerHeight();
	if (reshape) { // do this only if container has no size http://tinyurl.com/da2oa9
		var maxw = 0, maxh = 0;
		for(var j=0; j < els.length; j++) {
			var $e = $(els[j]), e = $e[0], w = $e.outerWidth(), h = $e.outerHeight();
			if (!w) w = e.offsetWidth;
			if (!h) h = e.offsetHeight;
			maxw = w > maxw ? w : maxw;
			maxh = h > maxh ? h : maxh;
		}
		if (maxw > 0 && maxh > 0)
			$cont.css({width:maxw+'px',height:maxh+'px'});
	}

	if (opts.pause)
		$cont.hover(function(){this.cyclePause++;},function(){this.cyclePause--;});

	if (supportMultiTransitions(opts) === false)
		return false;

	// apparently a lot of people use image slideshows without height/width attributes on the images.
	// Cycle 2.50+ requires the sizing info for every slide; this block tries to deal with that.
	var requeue = false;
	options.requeueAttempts = options.requeueAttempts || 0;
	$slides.each(function() {
		// try to get height/width of each slide
		var $el = $(this);
		this.cycleH = (opts.fit && opts.height) ? opts.height : $el.height();
		this.cycleW = (opts.fit && opts.width) ? opts.width : $el.width();

		if ( $el.is('img') ) {
			// sigh..  sniffing, hacking, shrugging...  this crappy hack tries to account for what browsers do when
			// an image is being downloaded and the markup did not include sizing info (height/width attributes);
			// there seems to be some "default" sizes used in this situation
			var loadingIE	= ($.browser.msie  && this.cycleW == 28 && this.cycleH == 30 && !this.complete);
			var loadingFF	= ($.browser.mozilla && this.cycleW == 34 && this.cycleH == 19 && !this.complete);
			var loadingOp	= ($.browser.opera && ((this.cycleW == 42 && this.cycleH == 19) || (this.cycleW == 37 && this.cycleH == 17)) && !this.complete);
			var loadingOther = (this.cycleH == 0 && this.cycleW == 0 && !this.complete);
			// don't requeue for images that are still loading but have a valid size
			if (loadingIE || loadingFF || loadingOp || loadingOther) {
				if (o.s && opts.requeueOnImageNotLoaded && ++options.requeueAttempts < 100) { // track retry count so we don't loop forever
					log(options.requeueAttempts,' - img slide not loaded, requeuing slideshow: ', this.src, this.cycleW, this.cycleH);
					setTimeout(function() {$(o.s,o.c).cycle(options)}, opts.requeueTimeout);
					requeue = true;
					return false; // break each loop
				}
				else {
					log('could not determine size of image: '+this.src, this.cycleW, this.cycleH);
				}
			}
		}
		return true;
	});

	if (requeue)
		return false;

	opts.cssBefore = opts.cssBefore || {};
	opts.animIn = opts.animIn || {};
	opts.animOut = opts.animOut || {};

	$slides.not(':eq('+first+')').css(opts.cssBefore);
	if (opts.cssFirst)
		$($slides[first]).css(opts.cssFirst);

	if (opts.timeout) {
		opts.timeout = parseInt(opts.timeout);
		// ensure that timeout and speed settings are sane
		if (opts.speed.constructor == String)
			opts.speed = $.fx.speeds[opts.speed] || parseInt(opts.speed);
		if (!opts.sync)
			opts.speed = opts.speed / 2;
		while((opts.timeout - opts.speed) < 250) // sanitize timeout
			opts.timeout += opts.speed;
	}
	if (opts.easing)
		opts.easeIn = opts.easeOut = opts.easing;
	if (!opts.speedIn)
		opts.speedIn = opts.speed;
	if (!opts.speedOut)
		opts.speedOut = opts.speed;

	opts.slideCount = els.length;
	opts.currSlide = opts.lastSlide = first;
	if (opts.random) {
		opts.nextSlide = opts.currSlide;
		if (++opts.randomIndex == els.length)
			opts.randomIndex = 0;
		opts.nextSlide = opts.randomMap[opts.randomIndex];
	}
	else
		opts.nextSlide = opts.startingSlide >= (els.length-1) ? 0 : opts.startingSlide+1;

	// run transition init fn
	if (!opts.multiFx) {
		var init = $.fn.cycle.transitions[opts.fx];
		if ($.isFunction(init))
			init($cont, $slides, opts);
		else if (opts.fx != 'custom' && !opts.multiFx) {
			log('unknown transition: ' + opts.fx,'; slideshow terminating');
			return false;
		}
	}

	// fire artificial events
	var e0 = $slides[first];
	if (opts.before.length)
		opts.before[0].apply(e0, [e0, e0, opts, true]);
	if (opts.after.length > 1)
		opts.after[1].apply(e0, [e0, e0, opts, true]);

	if (opts.next)
		$(opts.next).bind(opts.prevNextEvent,function(){return advance(opts,opts.rev?-1:1)});
	if (opts.prev)
		$(opts.prev).bind(opts.prevNextEvent,function(){return advance(opts,opts.rev?1:-1)});
	if (opts.pager)
		buildPager(els,opts);

	exposeAddSlide(opts, els);

	return opts;
};

// save off original opts so we can restore after clearing state
function saveOriginalOpts(opts) {
	opts.original = { before: [], after: [] };
	opts.original.cssBefore = $.extend({}, opts.cssBefore);
	opts.original.cssAfter  = $.extend({}, opts.cssAfter);
	opts.original.animIn	= $.extend({}, opts.animIn);
	opts.original.animOut   = $.extend({}, opts.animOut);
	$.each(opts.before, function() { opts.original.before.push(this); });
	$.each(opts.after,  function() { opts.original.after.push(this); });
};

function supportMultiTransitions(opts) {
	var i, tx, txs = $.fn.cycle.transitions;
	// look for multiple effects
	if (opts.fx.indexOf(',') > 0) {
		opts.multiFx = true;
		opts.fxs = opts.fx.replace(/\s*/g,'').split(',');
		// discard any bogus effect names
		for (i=0; i < opts.fxs.length; i++) {
			var fx = opts.fxs[i];
			tx = txs[fx];
			if (!tx || !txs.hasOwnProperty(fx) || !$.isFunction(tx)) {
				log('discarding unknown transition: ',fx);
				opts.fxs.splice(i,1);
				i--;
			}
		}
		// if we have an empty list then we threw everything away!
		if (!opts.fxs.length) {
			log('No valid transitions named; slideshow terminating.');
			return false;
		}
	}
	else if (opts.fx == 'all') {  // auto-gen the list of transitions
		opts.multiFx = true;
		opts.fxs = [];
		for (p in txs) {
			tx = txs[p];
			if (txs.hasOwnProperty(p) && $.isFunction(tx))
				opts.fxs.push(p);
		}
	}
	if (opts.multiFx && opts.randomizeEffects) {
		// munge the fxs array to make effect selection random
		var r1 = Math.floor(Math.random() * 20) + 30;
		for (i = 0; i < r1; i++) {
			var r2 = Math.floor(Math.random() * opts.fxs.length);
			opts.fxs.push(opts.fxs.splice(r2,1)[0]);
		}
		debug('randomized fx sequence: ',opts.fxs);
	}
	return true;
};

// provide a mechanism for adding slides after the slideshow has started
function exposeAddSlide(opts, els) {
	opts.addSlide = function(newSlide, prepend) {
		var $s = $(newSlide), s = $s[0];
		if (!opts.autostopCount)
			opts.countdown++;
		els[prepend?'unshift':'push'](s);
		if (opts.els)
			opts.els[prepend?'unshift':'push'](s); // shuffle needs this
		opts.slideCount = els.length;

		$s.css('position','absolute');
		$s[prepend?'prependTo':'appendTo'](opts.$cont);

		if (prepend) {
			opts.currSlide++;
			opts.nextSlide++;
		}

		if (!$.support.opacity && opts.cleartype && !opts.cleartypeNoBg)
			clearTypeFix($s);

		if (opts.fit && opts.width)
			$s.width(opts.width);
		if (opts.fit && opts.height && opts.height != 'auto')
			$slides.height(opts.height);
		s.cycleH = (opts.fit && opts.height) ? opts.height : $s.height();
		s.cycleW = (opts.fit && opts.width) ? opts.width : $s.width();

		$s.css(opts.cssBefore);

		if (opts.pager)
			$.fn.cycle.createPagerAnchor(els.length-1, s, $(opts.pager), els, opts);

		if ($.isFunction(opts.onAddSlide))
			opts.onAddSlide($s);
		else
			$s.hide(); // default behavior
	};
}

// reset internal state; we do this on every pass in order to support multiple effects
$.fn.cycle.resetState = function(opts, fx) {
	fx = fx || opts.fx;
	opts.before = []; opts.after = [];
	opts.cssBefore = $.extend({}, opts.original.cssBefore);
	opts.cssAfter  = $.extend({}, opts.original.cssAfter);
	opts.animIn	= $.extend({}, opts.original.animIn);
	opts.animOut   = $.extend({}, opts.original.animOut);
	opts.fxFn = null;
	$.each(opts.original.before, function() { opts.before.push(this); });
	$.each(opts.original.after,  function() { opts.after.push(this); });

	// re-init
	var init = $.fn.cycle.transitions[fx];
	if ($.isFunction(init))
		init(opts.$cont, $(opts.elements), opts);
};

// this is the main engine fn, it handles the timeouts, callbacks and slide index mgmt
function go(els, opts, manual, fwd) {
	// opts.busy is true if we're in the middle of an animation
	if (manual && opts.busy && opts.manualTrump) {
		// let manual transitions requests trump active ones
		$(els).stop(true,true);
		opts.busy = false;
	}
	// don't begin another timeout-based transition if there is one active
	if (opts.busy)
		return;

	var p = opts.$cont[0], curr = els[opts.currSlide], next = els[opts.nextSlide];

	// stop cycling if we have an outstanding stop request
	if (p.cycleStop != opts.stopCount || p.cycleTimeout === 0 && !manual)
		return;

	// check to see if we should stop cycling based on autostop options
	if (!manual && !p.cyclePause &&
		((opts.autostop && (--opts.countdown <= 0)) ||
		(opts.nowrap && !opts.random && opts.nextSlide < opts.currSlide))) {
		if (opts.end)
			opts.end(opts);
		return;
	}

	// if slideshow is paused, only transition on a manual trigger
	if (manual || !p.cyclePause) {
		var fx = opts.fx;
		// keep trying to get the slide size if we don't have it yet
		curr.cycleH = curr.cycleH || $(curr).height();
		curr.cycleW = curr.cycleW || $(curr).width();
		next.cycleH = next.cycleH || $(next).height();
		next.cycleW = next.cycleW || $(next).width();

		// support multiple transition types
		if (opts.multiFx) {
			if (opts.lastFx == undefined || ++opts.lastFx >= opts.fxs.length)
				opts.lastFx = 0;
			fx = opts.fxs[opts.lastFx];
			opts.currFx = fx;
		}

		// one-time fx overrides apply to:  $('div').cycle(3,'zoom');
		if (opts.oneTimeFx) {
			fx = opts.oneTimeFx;
			opts.oneTimeFx = null;
		}

		$.fn.cycle.resetState(opts, fx);

		// run the before callbacks
		if (opts.before.length)
			$.each(opts.before, function(i,o) {
				if (p.cycleStop != opts.stopCount) return;
				o.apply(next, [curr, next, opts, fwd]);
			});

		// stage the after callacks
		var after = function() {
			$.each(opts.after, function(i,o) {
				if (p.cycleStop != opts.stopCount) return;
				o.apply(next, [curr, next, opts, fwd]);
			});
		};

		if (opts.nextSlide != opts.currSlide) {
			// get ready to perform the transition
			opts.busy = 1;
			if (opts.fxFn) // fx function provided?
				opts.fxFn(curr, next, opts, after, fwd);
			else if ($.isFunction($.fn.cycle[opts.fx])) // fx plugin ?
				$.fn.cycle[opts.fx](curr, next, opts, after);
			else
				$.fn.cycle.custom(curr, next, opts, after, manual && opts.fastOnEvent);
		}

		// calculate the next slide
		opts.lastSlide = opts.currSlide;
		if (opts.random) {
			opts.currSlide = opts.nextSlide;
			if (++opts.randomIndex == els.length)
				opts.randomIndex = 0;
			opts.nextSlide = opts.randomMap[opts.randomIndex];
		}
		else { // sequence
			var roll = (opts.nextSlide + 1) == els.length;
			opts.nextSlide = roll ? 0 : opts.nextSlide+1;
			opts.currSlide = roll ? els.length-1 : opts.nextSlide-1;
		}

		if (opts.pager)
			$.fn.cycle.updateActivePagerLink(opts.pager, opts.currSlide);
	}

	// stage the next transtion
	var ms = 0;
	if (opts.timeout && !opts.continuous)
		ms = getTimeout(curr, next, opts, fwd);
	else if (opts.continuous && p.cyclePause) // continuous shows work off an after callback, not this timer logic
		ms = 10;
	if (ms > 0)
		p.cycleTimeout = setTimeout(function(){ go(els, opts, 0, !opts.rev) }, ms);
};

// invoked after transition
$.fn.cycle.updateActivePagerLink = function(pager, currSlide) {
	$(pager).each(function() {
		$(this).find('a').removeClass('activeSlide').filter('a:eq('+currSlide+')').addClass('activeSlide');
	});
};

// calculate timeout value for current transition
function getTimeout(curr, next, opts, fwd) {
	if (opts.timeoutFn) {
		// call user provided calc fn
		var t = opts.timeoutFn(curr,next,opts,fwd);
		while ((t - opts.speed) < 250) // sanitize timeout
			t += opts.speed;
		debug('calculated timeout: ' + t + '; speed: ' + opts.speed);
		if (t !== false)
			return t;
	}
	return opts.timeout;
};

// expose next/prev function, caller must pass in state
$.fn.cycle.next = function(opts) { advance(opts, opts.rev?-1:1); };
$.fn.cycle.prev = function(opts) { advance(opts, opts.rev?1:-1);};

// advance slide forward or back
function advance(opts, val) {
	var els = opts.elements;
	var p = opts.$cont[0], timeout = p.cycleTimeout;
	if (timeout) {
		clearTimeout(timeout);
		p.cycleTimeout = 0;
	}
	if (opts.random && val < 0) {
		// move back to the previously display slide
		opts.randomIndex--;
		if (--opts.randomIndex == -2)
			opts.randomIndex = els.length-2;
		else if (opts.randomIndex == -1)
			opts.randomIndex = els.length-1;
		opts.nextSlide = opts.randomMap[opts.randomIndex];
	}
	else if (opts.random) {
		if (++opts.randomIndex == els.length)
			opts.randomIndex = 0;
		opts.nextSlide = opts.randomMap[opts.randomIndex];
	}
	else {
		opts.nextSlide = opts.currSlide + val;
		if (opts.nextSlide < 0) {
			if (opts.nowrap) return false;
			opts.nextSlide = els.length - 1;
		}
		else if (opts.nextSlide >= els.length) {
			if (opts.nowrap) return false;
			opts.nextSlide = 0;
		}
	}

	if ($.isFunction(opts.prevNextClick))
		opts.prevNextClick(val > 0, opts.nextSlide, els[opts.nextSlide]);
	go(els, opts, 1, val>=0);
	return false;
};

function buildPager(els, opts) {
	var $p = $(opts.pager);
	$.each(els, function(i,o) {
		$.fn.cycle.createPagerAnchor(i,o,$p,els,opts);
	});
   $.fn.cycle.updateActivePagerLink(opts.pager, opts.startingSlide);
};

$.fn.cycle.createPagerAnchor = function(i, el, $p, els, opts) {
	var a;
	if ($.isFunction(opts.pagerAnchorBuilder))
		a = opts.pagerAnchorBuilder(i,el);
	else
		a = '<a href="#">'+(i+1)+'</a>';
		
	if (!a)
		return;
	var $a = $(a);
	// don't reparent if anchor is in the dom
	if ($a.parents('body').length === 0) {
		var arr = [];
		if ($p.length > 1) {
			$p.each(function() {
				var $clone = $a.clone(true);
				$(this).append($clone);
				arr.push($clone[0]);
			});
			$a = $(arr);
		}
		else {
			$a.appendTo($p);
		}
	}

	$a.bind(opts.pagerEvent, function(e) {
		e.preventDefault();
		opts.nextSlide = i;
		var p = opts.$cont[0], timeout = p.cycleTimeout;
		if (timeout) {
			clearTimeout(timeout);
			p.cycleTimeout = 0;
		}
		if ($.isFunction(opts.pagerClick))
			opts.pagerClick(opts.nextSlide, els[opts.nextSlide]);
		go(els,opts,1,opts.currSlide < i); // trigger the trans
		return false;
	});
	
	if (opts.pagerEvent != 'click')
		$a.click(function(){return false;}); // supress click
	
	if (opts.pauseOnPagerHover)
		$a.hover(function() { opts.$cont[0].cyclePause++; }, function() { opts.$cont[0].cyclePause--; } );
};

// helper fn to calculate the number of slides between the current and the next
$.fn.cycle.hopsFromLast = function(opts, fwd) {
	var hops, l = opts.lastSlide, c = opts.currSlide;
	if (fwd)
		hops = c > l ? c - l : opts.slideCount - l;
	else
		hops = c < l ? l - c : l + opts.slideCount - c;
	return hops;
};

// fix clearType problems in ie6 by setting an explicit bg color
// (otherwise text slides look horrible during a fade transition)
function clearTypeFix($slides) {
	function hex(s) {
		s = parseInt(s).toString(16);
		return s.length < 2 ? '0'+s : s;
	};
	function getBg(e) {
		for ( ; e && e.nodeName.toLowerCase() != 'html'; e = e.parentNode) {
			var v = $.css(e,'background-color');
			if (v.indexOf('rgb') >= 0 ) {
				var rgb = v.match(/\d+/g);
				return '#'+ hex(rgb[0]) + hex(rgb[1]) + hex(rgb[2]);
			}
			if (v && v != 'transparent')
				return v;
		}
		return '#ffffff';
	};
	$slides.each(function() { $(this).css('background-color', getBg(this)); });
};

// reset common props before the next transition
$.fn.cycle.commonReset = function(curr,next,opts,w,h,rev) {
	$(opts.elements).not(curr).hide();
	opts.cssBefore.opacity = 1;
	opts.cssBefore.display = 'block';
	if (w !== false && next.cycleW > 0)
		opts.cssBefore.width = next.cycleW;
	if (h !== false && next.cycleH > 0)
		opts.cssBefore.height = next.cycleH;
	opts.cssAfter = opts.cssAfter || {};
	opts.cssAfter.display = 'none';
	$(curr).css('zIndex',opts.slideCount + (rev === true ? 1 : 0));
	$(next).css('zIndex',opts.slideCount + (rev === true ? 0 : 1));
};

// the actual fn for effecting a transition
$.fn.cycle.custom = function(curr, next, opts, cb, speedOverride) {
	var $l = $(curr), $n = $(next);
	var speedIn = opts.speedIn, speedOut = opts.speedOut, easeIn = opts.easeIn, easeOut = opts.easeOut;
	$n.css(opts.cssBefore);
	if (speedOverride) {
		if (typeof speedOverride == 'number')
			speedIn = speedOut = speedOverride;
		else
			speedIn = speedOut = 1;
		easeIn = easeOut = null;
	}
	var fn = function() {$n.animate(opts.animIn, speedIn, easeIn, cb)};
	$l.animate(opts.animOut, speedOut, easeOut, function() {
		if (opts.cssAfter) $l.css(opts.cssAfter);
		if (!opts.sync) fn();
	});
	if (opts.sync) fn();
};

// transition definitions - only fade is defined here, transition pack defines the rest
$.fn.cycle.transitions = {
	fade: function($cont, $slides, opts) {
		$slides.not(':eq('+opts.currSlide+')').css('opacity',0);
		opts.before.push(function(curr,next,opts) {
			$.fn.cycle.commonReset(curr,next,opts);
			opts.cssBefore.opacity = 0;
		});
		opts.animIn	   = { opacity: 1 };
		opts.animOut   = { opacity: 0 };
		opts.cssBefore = { top: 0, left: 0 };
	}
};

$.fn.cycle.ver = function() { return ver; };

// override these globally if you like (they are all optional)
$.fn.cycle.defaults = {
	fx:			  'fade', // name of transition effect (or comma separated names, ex: fade,scrollUp,shuffle)
	timeout:	   4000,  // milliseconds between slide transitions (0 to disable auto advance)
	timeoutFn:	 null,  // callback for determining per-slide timeout value:  function(currSlideElement, nextSlideElement, options, forwardFlag)
	continuous:	   0,	  // true to start next transition immediately after current one completes
	speed:		   1000,  // speed of the transition (any valid fx speed value)
	speedIn:	   null,  // speed of the 'in' transition
	speedOut:	   null,  // speed of the 'out' transition
	next:		   null,  // selector for element to use as click trigger for next slide
	prev:		   null,  // selector for element to use as click trigger for previous slide
	prevNextClick: null,  // callback fn for prev/next clicks:	function(isNext, zeroBasedSlideIndex, slideElement)
	prevNextEvent:'click',// event which drives the manual transition to the previous or next slide
	pager:		   null,  // selector for element to use as pager container
	pagerClick:	   null,  // callback fn for pager clicks:	function(zeroBasedSlideIndex, slideElement)
	pagerEvent:	  'click', // name of event which drives the pager navigation
	pagerAnchorBuilder: null, // callback fn for building anchor links:  function(index, DOMelement)
	before:		   null,  // transition callback (scope set to element to be shown):	 function(currSlideElement, nextSlideElement, options, forwardFlag)
	after:		   null,  // transition callback (scope set to element that was shown):  function(currSlideElement, nextSlideElement, options, forwardFlag)
	end:		   null,  // callback invoked when the slideshow terminates (use with autostop or nowrap options): function(options)
	easing:		   null,  // easing method for both in and out transitions
	easeIn:		   null,  // easing for "in" transition
	easeOut:	   null,  // easing for "out" transition
	shuffle:	   null,  // coords for shuffle animation, ex: { top:15, left: 200 }
	animIn:		   null,  // properties that define how the slide animates in
	animOut:	   null,  // properties that define how the slide animates out
	cssBefore:	   null,  // properties that define the initial state of the slide before transitioning in
	cssAfter:	   null,  // properties that defined the state of the slide after transitioning out
	fxFn:		   null,  // function used to control the transition: function(currSlideElement, nextSlideElement, options, afterCalback, forwardFlag)
	height:		  'auto', // container height
	startingSlide: 0,	  // zero-based index of the first slide to be displayed
	sync:		   1,	  // true if in/out transitions should occur simultaneously
	random:		   0,	  // true for random, false for sequence (not applicable to shuffle fx)
	fit:		   0,	  // force slides to fit container
	containerResize: 1,	  // resize container to fit largest slide
	pause:		   0,	  // true to enable "pause on hover"
	pauseOnPagerHover: 0, // true to pause when hovering over pager link
	autostop:	   0,	  // true to end slideshow after X transitions (where X == slide count)
	autostopCount: 0,	  // number of transitions (optionally used with autostop to define X)
	delay:		   0,	  // additional delay (in ms) for first transition (hint: can be negative)
	slideExpr:	   null,  // expression for selecting slides (if something other than all children is required)
	cleartype:	   !$.support.opacity,  // true if clearType corrections should be applied (for IE)
	cleartypeNoBg: false, // set to true to disable extra cleartype fixing (leave false to force background color setting on slides)
	nowrap:		   0,	  // true to prevent slideshow from wrapping
	fastOnEvent:   0,	  // force fast transitions when triggered manually (via pager or prev/next); value == time in ms
	randomizeEffects: 1,  // valid when multiple effects are used; true to make the effect sequence random
	rev:		   0,	 // causes animations to transition in reverse
	manualTrump:   true,  // causes manual transition to stop an active transition instead of being ignored
	requeueOnImageNotLoaded: true, // requeue the slideshow if any image slides are not yet loaded
	requeueTimeout: 250   // ms delay for requeue
};

})(jQuery);


/*!
 * jQuery Cycle Plugin Transition Definitions
 * This script is a plugin for the jQuery Cycle Plugin
 * Examples and documentation at: http://malsup.com/jquery/cycle/
 * Copyright (c) 2007-2008 M. Alsup
 * Version:	 2.72
 * Dual licensed under the MIT and GPL licenses:
 * http://www.opensource.org/licenses/mit-license.php
 * http://www.gnu.org/licenses/gpl.html
 */
(function($) {

//
// These functions define one-time slide initialization for the named
// transitions. To save file size feel free to remove any of these that you
// don't need.
//
$.fn.cycle.transitions.none = function($cont, $slides, opts) {
	opts.fxFn = function(curr,next,opts,after){
		$(next).show();
		$(curr).hide();
		after();
	};
}

// scrollUp/Down/Left/Right
$.fn.cycle.transitions.scrollUp = function($cont, $slides, opts) {
	$cont.css('overflow','hidden');
	opts.before.push($.fn.cycle.commonReset);
	var h = $cont.height();
	opts.cssBefore ={ top: h, left: 0 };
	opts.cssFirst = { top: 0 };
	opts.animIn	  = { top: 0 };
	opts.animOut  = { top: -h };
};
$.fn.cycle.transitions.scrollDown = function($cont, $slides, opts) {
	$cont.css('overflow','hidden');
	opts.before.push($.fn.cycle.commonReset);
	var h = $cont.height();
	opts.cssFirst = { top: 0 };
	opts.cssBefore= { top: -h, left: 0 };
	opts.animIn	  = { top: 0 };
	opts.animOut  = { top: h };
};
$.fn.cycle.transitions.scrollLeft = function($cont, $slides, opts) {
	$cont.css('overflow','hidden');
	opts.before.push($.fn.cycle.commonReset);
	var w = $cont.width();
	opts.cssFirst = { left: 0 };
	opts.cssBefore= { left: w, top: 0 };
	opts.animIn	  = { left: 0 };
	opts.animOut  = { left: 0-w };
};
$.fn.cycle.transitions.scrollRight = function($cont, $slides, opts) {
	$cont.css('overflow','hidden');
	opts.before.push($.fn.cycle.commonReset);
	var w = $cont.width();
	opts.cssFirst = { left: 0 };
	opts.cssBefore= { left: -w, top: 0 };
	opts.animIn	  = { left: 0 };
	opts.animOut  = { left: w };
};
$.fn.cycle.transitions.scrollHorz = function($cont, $slides, opts) {
	$cont.css('overflow','hidden').width();
	opts.before.push(function(curr, next, opts, fwd) {
		$.fn.cycle.commonReset(curr,next,opts);
		opts.cssBefore.left = fwd ? (next.cycleW-1) : (1-next.cycleW);
		opts.animOut.left = fwd ? -curr.cycleW : curr.cycleW;
	});
	opts.cssFirst = { left: 0 };
	opts.cssBefore= { top: 0 };
	opts.animIn   = { left: 0 };
	opts.animOut  = { top: 0 };
};
$.fn.cycle.transitions.scrollVert = function($cont, $slides, opts) {
	$cont.css('overflow','hidden');
	opts.before.push(function(curr, next, opts, fwd) {
		$.fn.cycle.commonReset(curr,next,opts);
		opts.cssBefore.top = fwd ? (1-next.cycleH) : (next.cycleH-1);
		opts.animOut.top = fwd ? curr.cycleH : -curr.cycleH;
	});
	opts.cssFirst = { top: 0 };
	opts.cssBefore= { left: 0 };
	opts.animIn   = { top: 0 };
	opts.animOut  = { left: 0 };
};

// slideX/slideY
$.fn.cycle.transitions.slideX = function($cont, $slides, opts) {
	opts.before.push(function(curr, next, opts) {
		$(opts.elements).not(curr).hide();
		$.fn.cycle.commonReset(curr,next,opts,false,true);
		opts.animIn.width = next.cycleW;
	});
	opts.cssBefore = { left: 0, top: 0, width: 0 };
	opts.animIn	 = { width: 'show' };
	opts.animOut = { width: 0 };
};
$.fn.cycle.transitions.slideY = function($cont, $slides, opts) {
	opts.before.push(function(curr, next, opts) {
		$(opts.elements).not(curr).hide();
		$.fn.cycle.commonReset(curr,next,opts,true,false);
		opts.animIn.height = next.cycleH;
	});
	opts.cssBefore = { left: 0, top: 0, height: 0 };
	opts.animIn	 = { height: 'show' };
	opts.animOut = { height: 0 };
};

// shuffle
$.fn.cycle.transitions.shuffle = function($cont, $slides, opts) {
	var i, w = $cont.css('overflow', 'visible').width();
	$slides.css({left: 0, top: 0});
	opts.before.push(function(curr,next,opts) {
		$.fn.cycle.commonReset(curr,next,opts,true,true,true);
	});
	// only adjust speed once!
	if (!opts.speedAdjusted) {
		opts.speed = opts.speed / 2; // shuffle has 2 transitions
		opts.speedAdjusted = true;
	}
	opts.random = 0;
	opts.shuffle = opts.shuffle || {left:-w, top:15};
	opts.els = [];
	for (i=0; i < $slides.length; i++)
		opts.els.push($slides[i]);

	for (i=0; i < opts.currSlide; i++)
		opts.els.push(opts.els.shift());

	// custom transition fn (hat tip to Benjamin Sterling for this bit of sweetness!)
	opts.fxFn = function(curr, next, opts, cb, fwd) {
		var $el = fwd ? $(curr) : $(next);
		$(next).css(opts.cssBefore);
		var count = opts.slideCount;
		$el.animate(opts.shuffle, opts.speedIn, opts.easeIn, function() {
			var hops = $.fn.cycle.hopsFromLast(opts, fwd);
			for (var k=0; k < hops; k++)
				fwd ? opts.els.push(opts.els.shift()) : opts.els.unshift(opts.els.pop());
			if (fwd) {
				for (var i=0, len=opts.els.length; i < len; i++)
					$(opts.els[i]).css('z-index', len-i+count);
			}
			else {
				var z = $(curr).css('z-index');
				$el.css('z-index', parseInt(z)+1+count);
			}
			$el.animate({left:0, top:0}, opts.speedOut, opts.easeOut, function() {
				$(fwd ? this : curr).hide();
				if (cb) cb();
			});
		});
	};
	opts.cssBefore = { display: 'block', opacity: 1, top: 0, left: 0 };
};

// turnUp/Down/Left/Right
$.fn.cycle.transitions.turnUp = function($cont, $slides, opts) {
	opts.before.push(function(curr, next, opts) {
		$.fn.cycle.commonReset(curr,next,opts,true,false);
		opts.cssBefore.top = next.cycleH;
		opts.animIn.height = next.cycleH;
	});
	opts.cssFirst  = { top: 0 };
	opts.cssBefore = { left: 15, height: 0 };
	opts.animIn	   = { top: 0 };
	opts.animOut   = { height: 0 };
};
$.fn.cycle.transitions.turnDown = function($cont, $slides, opts) {
	opts.before.push(function(curr, next, opts) {
		$.fn.cycle.commonReset(curr,next,opts,true,false);
		opts.animIn.height = next.cycleH;
		opts.animOut.top   = curr.cycleH;
	});
	opts.cssFirst  = { top: 0 };
	opts.cssBefore = { left: 15, top: 0, height: 0 };
	opts.animOut   = { height: 0 };
};
$.fn.cycle.transitions.turnLeft = function($cont, $slides, opts) {
	opts.before.push(function(curr, next, opts) {
		$.fn.cycle.commonReset(curr,next,opts,false,true);
		opts.cssBefore.left = next.cycleW;
		opts.animIn.width = next.cycleW;
	});
	opts.cssBefore = { top: 0, width: 0  };
	opts.animIn	   = { left: 15 };
	opts.animOut   = { width: 0 };
};
$.fn.cycle.transitions.turnRight = function($cont, $slides, opts) {
	opts.before.push(function(curr, next, opts) {
		$.fn.cycle.commonReset(curr,next,opts,false,true);
		opts.animIn.width = next.cycleW;
		opts.animOut.left = curr.cycleW;
	});
	opts.cssBefore = { top: 0, left: 0, width: 0 };
	opts.animIn	   = { left: 15 };
	opts.animOut   = { width: 0 };
};

// zoom
$.fn.cycle.transitions.zoom = function($cont, $slides, opts) {
	opts.before.push(function(curr, next, opts) {
		$.fn.cycle.commonReset(curr,next,opts,false,false,true);
		opts.cssBefore.top = next.cycleH/2;
		opts.cssBefore.left = next.cycleW/2;
		opts.animIn	   = { top: 0, left: 0, width: next.cycleW, height: next.cycleH };
		opts.animOut   = { width: 0, height: 0, top: curr.cycleH/2, left: curr.cycleW/2 };
	});
	opts.cssFirst = { top:0, left: 0 };
	opts.cssBefore = { width: 0, height: 0 };
};

// fadeZoom
$.fn.cycle.transitions.fadeZoom = function($cont, $slides, opts) {
	opts.before.push(function(curr, next, opts) {
		$.fn.cycle.commonReset(curr,next,opts,false,false);
		opts.cssBefore.left = next.cycleW/2;
		opts.cssBefore.top = next.cycleH/2;
		opts.animIn	= { top: 0, left: 0, width: next.cycleW, height: next.cycleH };
	});
	opts.cssBefore = { width: 0, height: 0 };
	opts.animOut  = { opacity: 0 };
};

// blindX
$.fn.cycle.transitions.blindX = function($cont, $slides, opts) {
	var w = $cont.css('overflow','hidden').width();
	opts.before.push(function(curr, next, opts) {
		$.fn.cycle.commonReset(curr,next,opts);
		opts.animIn.width = next.cycleW;
		opts.animOut.left   = curr.cycleW;
	});
	opts.cssBefore = { left: w, top: 0 };
	opts.animIn = { left: 0 };
	opts.animOut  = { left: w };
};
// blindY
$.fn.cycle.transitions.blindY = function($cont, $slides, opts) {
	var h = $cont.css('overflow','hidden').height();
	opts.before.push(function(curr, next, opts) {
		$.fn.cycle.commonReset(curr,next,opts);
		opts.animIn.height = next.cycleH;
		opts.animOut.top   = curr.cycleH;
	});
	opts.cssBefore = { top: h, left: 0 };
	opts.animIn = { top: 0 };
	opts.animOut  = { top: h };
};
// blindZ
$.fn.cycle.transitions.blindZ = function($cont, $slides, opts) {
	var h = $cont.css('overflow','hidden').height();
	var w = $cont.width();
	opts.before.push(function(curr, next, opts) {
		$.fn.cycle.commonReset(curr,next,opts);
		opts.animIn.height = next.cycleH;
		opts.animOut.top   = curr.cycleH;
	});
	opts.cssBefore = { top: h, left: w };
	opts.animIn = { top: 0, left: 0 };
	opts.animOut  = { top: h, left: w };
};

// growX - grow horizontally from centered 0 width
$.fn.cycle.transitions.growX = function($cont, $slides, opts) {
	opts.before.push(function(curr, next, opts) {
		$.fn.cycle.commonReset(curr,next,opts,false,true);
		opts.cssBefore.left = this.cycleW/2;
		opts.animIn = { left: 0, width: this.cycleW };
		opts.animOut = { left: 0 };
	});
	opts.cssBefore = { width: 0, top: 0 };
};
// growY - grow vertically from centered 0 height
$.fn.cycle.transitions.growY = function($cont, $slides, opts) {
	opts.before.push(function(curr, next, opts) {
		$.fn.cycle.commonReset(curr,next,opts,true,false);
		opts.cssBefore.top = this.cycleH/2;
		opts.animIn = { top: 0, height: this.cycleH };
		opts.animOut = { top: 0 };
	});
	opts.cssBefore = { height: 0, left: 0 };
};

// curtainX - squeeze in both edges horizontally
$.fn.cycle.transitions.curtainX = function($cont, $slides, opts) {
	opts.before.push(function(curr, next, opts) {
		$.fn.cycle.commonReset(curr,next,opts,false,true,true);
		opts.cssBefore.left = next.cycleW/2;
		opts.animIn = { left: 0, width: this.cycleW };
		opts.animOut = { left: curr.cycleW/2, width: 0 };
	});
	opts.cssBefore = { top: 0, width: 0 };
};
// curtainY - squeeze in both edges vertically
$.fn.cycle.transitions.curtainY = function($cont, $slides, opts) {
	opts.before.push(function(curr, next, opts) {
		$.fn.cycle.commonReset(curr,next,opts,true,false,true);
		opts.cssBefore.top = next.cycleH/2;
		opts.animIn = { top: 0, height: next.cycleH };
		opts.animOut = { top: curr.cycleH/2, height: 0 };
	});
	opts.cssBefore = { left: 0, height: 0 };
};

// cover - curr slide covered by next slide
$.fn.cycle.transitions.cover = function($cont, $slides, opts) {
	var d = opts.direction || 'left';
	var w = $cont.css('overflow','hidden').width();
	var h = $cont.height();
	opts.before.push(function(curr, next, opts) {
		$.fn.cycle.commonReset(curr,next,opts);
		if (d == 'right')
			opts.cssBefore.left = -w;
		else if (d == 'up')
			opts.cssBefore.top = h;
		else if (d == 'down')
			opts.cssBefore.top = -h;
		else
			opts.cssBefore.left = w;
	});
	opts.animIn = { left: 0, top: 0};
	opts.animOut = { opacity: 1 };
	opts.cssBefore = { top: 0, left: 0 };
};

// uncover - curr slide moves off next slide
$.fn.cycle.transitions.uncover = function($cont, $slides, opts) {
	var d = opts.direction || 'left';
	var w = $cont.css('overflow','hidden').width();
	var h = $cont.height();
	opts.before.push(function(curr, next, opts) {
		$.fn.cycle.commonReset(curr,next,opts,true,true,true);
		if (d == 'right')
			opts.animOut.left = w;
		else if (d == 'up')
			opts.animOut.top = -h;
		else if (d == 'down')
			opts.animOut.top = h;
		else
			opts.animOut.left = -w;
	});
	opts.animIn = { left: 0, top: 0 };
	opts.animOut = { opacity: 1 };
	opts.cssBefore = { top: 0, left: 0 };
};

// toss - move top slide and fade away
$.fn.cycle.transitions.toss = function($cont, $slides, opts) {
	var w = $cont.css('overflow','visible').width();
	var h = $cont.height();
	opts.before.push(function(curr, next, opts) {
		$.fn.cycle.commonReset(curr,next,opts,true,true,true);
		// provide default toss settings if animOut not provided
		if (!opts.animOut.left && !opts.animOut.top)
			opts.animOut = { left: w*2, top: -h/2, opacity: 0 };
		else
			opts.animOut.opacity = 0;
	});
	opts.cssBefore = { left: 0, top: 0 };
	opts.animIn = { left: 0 };
};

// wipe - clip animation
$.fn.cycle.transitions.wipe = function($cont, $slides, opts) {
	var w = $cont.css('overflow','hidden').width();
	var h = $cont.height();
	opts.cssBefore = opts.cssBefore || {};
	var clip;
	if (opts.clip) {
		if (/l2r/.test(opts.clip))
			clip = 'rect(0px 0px '+h+'px 0px)';
		else if (/r2l/.test(opts.clip))
			clip = 'rect(0px '+w+'px '+h+'px '+w+'px)';
		else if (/t2b/.test(opts.clip))
			clip = 'rect(0px '+w+'px 0px 0px)';
		else if (/b2t/.test(opts.clip))
			clip = 'rect('+h+'px '+w+'px '+h+'px 0px)';
		else if (/zoom/.test(opts.clip)) {
			var top = parseInt(h/2);
			var left = parseInt(w/2);
			clip = 'rect('+top+'px '+left+'px '+top+'px '+left+'px)';
		}
	}

	opts.cssBefore.clip = opts.cssBefore.clip || clip || 'rect(0px 0px 0px 0px)';

	var d = opts.cssBefore.clip.match(/(\d+)/g);
	var t = parseInt(d[0]), r = parseInt(d[1]), b = parseInt(d[2]), l = parseInt(d[3]);

	opts.before.push(function(curr, next, opts) {
		if (curr == next) return;
		var $curr = $(curr), $next = $(next);
		$.fn.cycle.commonReset(curr,next,opts,true,true,false);
		opts.cssAfter.display = 'block';

		var step = 1, count = parseInt((opts.speedIn / 13)) - 1;
		(function f() {
			var tt = t ? t - parseInt(step * (t/count)) : 0;
			var ll = l ? l - parseInt(step * (l/count)) : 0;
			var bb = b < h ? b + parseInt(step * ((h-b)/count || 1)) : h;
			var rr = r < w ? r + parseInt(step * ((w-r)/count || 1)) : w;
			$next.css({ clip: 'rect('+tt+'px '+rr+'px '+bb+'px '+ll+'px)' });
			(step++ <= count) ? setTimeout(f, 13) : $curr.css('display', 'none');
		})();
	});
	opts.cssBefore = { display: 'block', opacity: 1, top: 0, left: 0 };
	opts.animIn	   = { left: 0 };
	opts.animOut   = { left: 0 };
};

})(jQuery);

(function ($) {
    var ExhibitorList = function (element, options) {
        var me = this;
        me.e = $(element);
        me.options = options;

        me.pageIndex = me.options.initialPage;
        me.pageSize = me.options.pageSize;

        me.lst = me.e.find('.general-table tbody.data');

        //--------------------------------------------------------------------------------------------------- Filters
        if (me.options.useInlineFilter) {
            me.filters = { e: $(me.options.filteringSelector),
                country: $(me.options.filteringSelector).find('select[name*=ddlCountries]'),
                keywords: $(me.options.filteringSelector).find('input[name*=Keywords]'),
                stype: $(me.options.filteringSelector).find('select[name*=ExhibitorType]'),
                sector: $(me.options.filteringSelector).find('select[name*=Sector]'),
                search: $(me.options.filteringSelector).find('input[name*=btnSearch]')
            };

            // Search button handler
            me.filters.search.click(function (event) {
                event.preventDefault();
                me.loadPage(1);
            });

            me.filters.keywords.keypress(function (event) {
                if (event.which == "13") {
                    event.preventDefault();
                    me.filters.search.click();
                }
            });
        } else {
            me.filters = {};
        }

        //------------------------------------------------------------------------------------------------ PAGER
        me.isWorking = false;
        me.pager = {
            ul: me.e.find('.pager')
        };
        me.totalPages = me.options.initialTotalPages;

        // Update pager info and also current page number.
        me.updatePager = function () {
            // check page numbers
            me.pager.ul.empty();

            // add pages
            for (var i = me.totalPages; i > 0; i--) {
                me.pager.ul.append('<li class="meta-dotted-pages {0}"><a href="#{1}" class="icons gray-bullet-icon" title="Go to page {1}">Go to page {1}</a></li>'.format(
                    i == me.pageIndex ? 'current' : ' ',
                    i));
            }

            me.pager.ul.find('li a').click(function (event) {
                event.preventDefault();
                me.loadPage(parseInt($(this).attr('href').replace('#', '')));
            });


        };

        //----------------------------------------------------------------------------------------------- Listing
        // fix the height of the ul, so the page will not move while loading new items
        me.fixHeight = function () {
            me.lst.css({ height: 'auto' });
            me.lst.css({ height: me.lst.outerHeight(1) });
        };

        me.e.find('a.initial-search').click(function (event) {
            event.preventDefault();
            me.e.find('a.initial-search').removeClass('current');
            if ($(this).hasClass('all-items')) {
                me.options.queryInitials = '';
            } else {
                me.options.queryInitials = $(this).attr('rel');
            }

            $(this).addClass('current');
            me.loadPage(1);

        });

        // load items in selected page
        me.loadPage = function (pageIndex) {
            if (me.isWorking) return;
            me.isWorking = true;
            var h = me.lst.height();
            me.lst.empty().append('<tr class="loading"><td colspan="3">&nbsp;</td></tr>');
            me.lst.find('tr').height(h);
            me.pageIndex = pageIndex;
            if (me.options.monitorHash) {
                window.location.hash = "#page=" + pageIndex;
            }

            var p = { pageIndex: pageIndex, pageSize: me.pageSize, languageId: $.fi.languageId, languageCode: $.fi.languageCode, sord: 'asc', sidx: 'TradeName' };
            if (me.options.useInlineFilter) {
                p.keywords = me.filters.keywords.val();
                p.stype = me.filters.stype.val();
                p.sector = me.filters.sector.val();
                if (p.sector == '0') p.sector = '';
                p.country = me.filters.country.val();
                p.initial = me.options.queryInitials;
            }

            if (me.options.postData) {
                p = me.options.postData(p);
            }

            $.ajax({
                url: me.options.feedUrl,
                data: $.toJSON(p),
                success: function (response) {
                    var data = response.d;
                    me.totalPages = data.total;
                    me.pageIndex = data.page;
                    me.lst.empty();
                    if (data.items.length > 0) {
                        for (var i = 0, ii = data.items.length; i < ii; i++) {
                            var item = data.items[i];
                            var tr = $('<tr/>').addClass('data');
                            if(item.isSticky) tr.addClass('exh_pm');
                            tr.append('<td class="arrow"><a href="{0}" title="View {1}\'s profile"><strong>{2}{3}{4}</strong></a></td>'.format(
                                    item.link,
                                    item.tradeName.replace(/"/ig, ''),
                                    item.tradeName,
                                    item.acronym && $.trim(item.acronym).length > 0 ? ('(' + item.acronym + ')') : '',
                                    item.isSticky ? '<span class="exh_pm"></span>' : ''
                                ));
                            tr.append('<td class="nw">{0}</td>'.format(item.countryName));
                            tr.append('<td class="nw">{0}</td>'.format(item.standNumber));
                            me.lst.append(tr);
                        }
                    } else {
                        me.lst.append('<tr class="empty"><td colspan="3">' + me.options.resources.noResult + '</td></tr>');
                    }

                    me.updatePager();
                    me.isWorking = false;
                    if (me.options.scrollToResult) {
                        $('html, body').animate({ scrollTop: me.e.parent().offset().top }, 500);
                    }

                    if (me.options.loadCompletedCallback) {
                        me.options.loadCompletedCallback(data.total);
                    }
                },
                error: function () {
                },
                type: "POST",
                contentType: 'application/json; charset=utf-8',
                dataType: 'json'
            });
        };


        //------------------------------------------------------------------------------------------ Initialize
        me.updatePager();

        if (me.options.monitorHash) {
            try {
                $(window).bind('hashchange', function () {
                    if (me.isWorking) return;
                    if (window.location.hash.indexOf('#page=') == 0) {
                        var v = window.location.hash.replace('#page=', '');
                        if (!isNaN(v)) {
                            v = parseInt(v);
                            me.loadPage(v);
                        }
                    }
                });
            } catch (errr) { /* old browsers do not support this feature */ }

            // process hash
            if (window.location.hash.indexOf('#page=') == 0) {
                var v = window.location.hash.replace('#page=', '');
                if (!isNaN(v)) {
                    v = parseInt(v);
                    me.loadPage(v);
                }
            }
        }

        me.invokeAction = function (args) {
            var f = args[0];
            if (f == 'load') {
                me.loadPage(args[1]);
            }
        };
    };



    //------------------------------------------------------------------------------------- jQuery FN Definition
    $.fn.exhibitorList = function (options) {
        var args = arguments;
        if (typeof ('options') == 'object' || typeof ('options') == 'undefined' || options == null || typeof (options.indexOf) == 'undefined') {
            var opts = $.extend(true, {}, $.fn.exhibitorList.defaults, options);
            return this.each(function () {
                var e = $(this);
                var obj = new ExhibitorList(e, opts);
                e.data('obj', obj);
            });
        } else {
            var result = [];
            this.each(function () {
                var e = $(this);
                var obj = e.data('obj');
                if (typeof (obj) != 'undefined') {
                    result.push(obj.invokeAction(args));
                }
            });
            return result;
        }
    };

    //--------------------------------------------------------------------------------------- Defaults

    $.fn.exhibitorList.defaults = {
        pageSize: 7,
        feedUrl: 'services/AjaxHandler.asmx/SearchExhibitors',
        queryInitials: '',
        initialPage: 1,
        initialTotalPages: 1,
        filteringSelector: '',
        speed: 400,
        resources: {
            noResult: 'No item found to match your search criteria',
            searchResult: 'Search Result',
            allExhibitors: 'All Exhibitors'
        },
        loadCompletedCallback: false,
        postData: false,
        useInlineFilter: true,
        monitorHash: true,
        scrollToResult: true,
        addHeader: true
    };
})(jQuery);
(function ($) {
    var NewsListing = function (element, options) {
        var me = this;
        me.e = $(element);
        me.options = options;

        me.pageIndex = me.options.initialPage;
        me.pageSize = me.options.rows * me.options.cols;

        me.ul = me.e.find('.general-listing');
        me.isWorking = false;
        me.pager = {
            ul: me.e.find('.pager'),
            info: me.e.find('.pager li.info'),
            prev: me.e.find('.pager li a.previous'),
            next: me.e.find('.pager li a.next')
        };
        me.totalPages = me.options.initialTotalPages;
        me.totalRecords = 0;

        me.updatePager = function () {
            me.pager.info.text(me.options.pagerFormat.replace('{0}', me.pageIndex).replace('{1}', me.totalPages));

            if (me.pageIndex > 1) {
                me.pager.prev.removeClass('disabled');
            } else {
                me.pager.prev.addClass('disabled');
            }

            if (me.pageIndex < me.totalPages) {
                me.pager.next.removeClass('disabled');
            } else {
                me.pager.next.addClass('disabled');
            }

            // check page numbers
            me.pager.ul.find('li[rel=page],li.hidden-pages').remove();

            if (me.totalPages < me.options.pagerGroupSize * 2 + 1) {
                var p = me.pager.prev.parent();
                for (var i = 1, ii = me.totalPages; i <= ii; i++) {
                    p.after('<li id="page_' + i + '" rel="page"><a href="#' + i + '">' + i + '</a></li>');
                    p = p.next();
                }



            } else {
                var p = me.pager.prev.parent();
                // add first group
                var m = 0;

                var b = Math.ceil((me.options.pagerGroupSize - 1.0) / 2);
                var a = me.options.pagerGroupSize - b - 1;

                for (var i = 1, ii = Math.min(me.options.pagerGroupSize, me.totalPages); i <= ii; i++) {
                    if (i <= m) continue;
                    p.after('<li id="page_' + i + '" rel="page"><a href="#' + i + '">' + i + '</a></li>');
                    p = p.next();
                    m = i;
                }


                if (me.pageIndex - b > me.options.pagerGroupSize + 1) {
                    p.after('<li class="hidden-pages">&hellip;</li>');
                    p = p.next();
                }

                if (me.pageIndex - b < me.totalPages - me.options.pagerGroupSize + 1) {
                    for (var i = me.pageIndex - b, ii = Math.min(me.pageIndex + a, me.totalPages); i <= ii; i++) {
                        if (i <= m) continue;
                        p.after('<li id="page_' + i + '" rel="page"><a href="#' + i + '">' + i + '</a></li>');
                        p = p.next();
                        m = i;
                    }

                    if (me.pageIndex + a < me.totalPages - me.options.pagerGroupSize) {
                        p.after('<li class="hidden-pages">&hellip;</li>');
                        p = p.next();
                    }
                }

                for (var i = me.totalPages - me.options.pagerGroupSize + 1, ii = me.totalPages; i <= ii; i++) {
                    if (i <= m) continue;
                    p.after('<li id="page_' + i + '" rel="page"><a href="#' + i + '">' + i + '</a></li>');
                    p = p.next();
                    m = i;
                }
            }

            me.pager.ul.find('li[rel=page] a').removeClass('current');

            me.pager.ul.find('li#page_' + me.pageIndex + ' a').addClass('current');

            me.pager.ul.find('li[rel=page] a').click(function (event) {
                event.preventDefault();
                me.loadPage(parseInt($(this).attr('href').replace('#', '')));
            });
        };

        me.fixHeight = function () {
            me.ul.css({ height: 'auto' });
            me.ul.css({ height: me.ul.outerHeight(1) });
        };

        me.loadPage = function (pageIndex) {
            if (me.isWorking) return;
            me.isWorking = true;
            me.e.addClass('loading');
            me.ul.empty();
            me.pageIndex = pageIndex;

            var p = { pageIndex: pageIndex, pageSize: me.pageSize, languageId: me.options.languageId, languageCode: me.options.languageCode, isArchived: me.options.isArchived, thumbnailSizeFactor: me.options.thumbnailSizeFactor, excludeItems: me.options.excludeItems, categoryId: me.options.categoryId };
            if (me.options.postData) {
                p = me.options.postData(p);
            }
            if (me.options.monitorHash) {
                window.location.hash = "#page=" + pageIndex;
            }
            $.ajax({
                url: me.options.feedUrl,
                data: $.toJSON(p),
                success: function (response) {
                    var data = response.d;
                    me.totalPages = data.total;
                    me.totalRecords = data.records;
                    me.pageIndex = data.page;
                    if (data.items.length > 0) {
                        for (var i = 0, ii = data.items.length; i < ii; i++) {
                            var item = data.items[i];
                            var title = item.title;
                            if (title.length > me.options.titleTextLimit) {
                                title = title.substring(0, Math.max(me.options.titleTextLimit - 5, me.options.titleTextLimit - 5 + title.substring(me.options.titleTextLimit - 5).indexOf(' '))) + '&hellip;';
                            }

                            var intro = item.intro;
                            if (intro.length > me.options.introTextLimit) {
                                intro = intro.substring(0, Math.max(me.options.introTextLimit - 5, me.options.introTextLimit - 5 + intro.substring(me.options.introTextLimit - 5).indexOf(' '))) + '&hellip;';
                            }

                            var li = $('<li/>').addClass('news');
                            var a = $('<a/>').addClass('image-frame-1-small').attr('href', item.link + me.options.urlAddition).attr('title', item.title).append($('<img/>').attr('src', item.image).attr('alt', item.title));
                            li.append(a);
                            var d = $('<div/>').addClass('inner');
                            d.append('<span class="date" title="' + item.shortDate + '">' + item.date + '</span>');
                            d.append($('<h4/>').append($('<a/>').attr('href', item.link + me.options.urlAddition).attr('title', item.title).html(title)));
                            d.append($('<p/>').addClass('excerpt').html(intro));
                            li.append(d);
                            li.append('<span class="clear"></span>');
                            me.ul.append(li);
                        }
                    }
                    // do something
                    me.updatePager();
                    me.e.removeClass('loading');
                    me.fixHeight();
                    me.isWorking = false;
                    if (me.options.scrollToResult) {
                        $('html, body').animate({ scrollTop: me.ul.offset().top }, 500);
                    }
                    if (me.options.loadCompletedCallback) {
                        me.options.loadCompletedCallback(data.total);
                    }
                },
                error: function () {
                },
                type: "POST",
                contentType: 'application/json; charset=utf-8',
                dataType: 'json'
            });
        };

        me.pager.next.click(function (event) {
            event.preventDefault();
            if ($(this).hasClass('disabled')) return;
            me.loadPage(me.pageIndex + 1);
        });

        me.pager.prev.click(function (event) {
            event.preventDefault();
            if ($(this).hasClass('disabled')) return;
            me.loadPage(me.pageIndex - 1);
        });

        me.updatePager();
        if (me.options.monitorHash) {
            $(window).bind('hashchange', function () {
                if (me.isWorking) return;
                if (window.location.hash.indexOf('#page=') == 0) {
                    var v = window.location.hash.replace('#page=', '');
                    if (!isNaN(v)) {
                        v = parseInt(v);
                        me.loadPage(v);
                    }
                }
            });

            // process hash
            if (window.location.hash.indexOf('#page=') == 0) {
                var v = window.location.hash.replace('#page=', '');
                if (!isNaN(v)) {
                    v = parseInt(v);
                    me.loadPage(v);
                }
            }
        }

        me.invokeAction = function (args) {
            var f = args[0];
            if (f == 'load') {
                me.loadPage(args[1]);
            }
        };


    };

    $.fn.newsListing = function (options) {
        var args = arguments;
        if (typeof ('options') == 'object' || typeof ('options') == 'undefined' || options == null || typeof (options.indexOf) == 'undefined') {
            var opts = $.extend(true, {}, $.fn.newsListing.defaults, options);
            return this.each(function () {
                var e = $(this);
                var obj = new NewsListing(e, opts);
                e.data('obj', obj);
            });
        } else {
            var result = [];
            this.each(function () {
                var e = $(this);
                var obj = e.data('obj');
                if (typeof (obj) != 'undefined') {
                    result.push(obj.invokeAction(args));
                }
            });
            return result;
        }
    };

    $.fn.newsListing.defaults = {
        rows: 7,
        cols: 1,
        languageId: 1,
        languageCode: 'en-GB',
        thumbnailSizeFactor: '8c1x5c1wffffff',
        feedUrl: 'services/AjaxHandler.asmx/LoadNewsList',
        postData: false,
        excludeItems: [],
        isArchived: false,
        pagerFormat: 'Page {0} of {1}',
        className: '',
        monitorHash: true,
        nextLabel: 'Next',
        previousLabel: 'Previous',
        pagerGroupSize: 3,
        initialPage: 1,
        initialTotalPages: 1,
        titleTextLimit: 90,
        introTextLimit: 150,
        categoryId: -1,
        urlAddition: '',
        loadCompletedCallback: false,
		scrollToResult:true
    };
})(jQuery);
(function ($) {
    var NewsListing = function (element, options) {
        var me = this;
        me.e = $(element);
        me.options = options;

        me.pageIndex = 0;
        me.pageSize = me.options.rows * me.options.cols;

        me.ul = $('<ul/>').addClass('general-listing ' + me.options.className);
        me.e.append(me.ul).append('<span class="clear"></span>');
        me.isWorking = false;
        me.pager = false;
        me.totalPages = 0;
        me.totalRecords = 0;

        me.initializePager = function () {
            me.pager = {};
            me.pager.ul = $('<ul/>').addClass('pager');
            me.e.append(me.pager.ul).append('<span class="clear"></span>');

            var li = $('<li/>').addClass('info');
            me.pager.ul.append(li);

            me.pager.ul.append('<li class="first"><a href="#" class="previous disabled" title="' + me.options.previousLabel + '"><span class="arrow arrow-previous">' + me.options.previousLabel + '</span></a></li>');

            me.pager.ul.append('<li><a href="#" class="next disabled" title="' + me.options.nextLabel + '"><span class="arrow arrow-next">' + me.options.nextLabel + '</span></a></li>');

            me.pager.info = li;
            me.pager.prev = me.pager.ul.find('a.previous');
            me.pager.next = me.pager.ul.find('a.next');

            me.pager.next.click(function (event) {
                event.preventDefault();
                if ($(this).hasClass('disabled')) return;
                me.loadPage(me.pageIndex + 1);
            });

            me.pager.prev.click(function (event) {
                event.preventDefault();
                if ($(this).hasClass('disabled')) return;
                me.loadPage(me.pageIndex - 1);
            });
        };

        me.updatePager = function () {
            if (me.pager == false) {
                me.initializePager();
            }
            me.pager.info.text(me.options.pagerFormat.replace('{0}', me.pageIndex).replace('{1}', me.totalPages));

            if (me.pageIndex > 1) {
                me.pager.prev.removeClass('disabled');
            } else {
                me.pager.prev.addClass('disabled');
            }

            if (me.pageIndex < me.totalPages) {
                me.pager.next.removeClass('disabled');
            } else {
                me.pager.next.addClass('disabled');
            }

            // check page numbers
            me.pager.ul.find('li[rel=page],li.hidden-pages').remove();

            if (me.totalPages < me.options.pagerGroupSize * 2 + 1) {
                var p = me.pager.prev.parent();
                for (var i = 1, ii = me.totalPages; i <= ii; i++) {
                    p.after('<li id="page_' + i + '" rel="page"><a href="#' + i + '">' + i + '</a></li>');
                    p = p.next();
                }



            } else {
                var p = me.pager.prev.parent();
                // add first group
                var m = 0;

                var b = Math.ceil((me.options.pagerGroupSize - 1.0) / 2);
                var a = me.options.pagerGroupSize - b - 1;

                for (var i = 1, ii = Math.min(me.options.pagerGroupSize, me.totalPages); i <= ii; i++) {
                    if (i <= m) continue;
                    p.after('<li id="page_' + i + '" rel="page"><a href="#' + i + '">' + i + '</a></li>');
                    p = p.next();
                    m = i;
                }


                if (me.pageIndex - b > me.options.pagerGroupSize + 1) {
                    p.after('<li class="hidden-pages">&hellip;</li>');
                    p = p.next();
                }

                if (me.pageIndex - b < me.totalPages - me.options.pagerGroupSize + 1) {
                    for (var i = me.pageIndex - b, ii = Math.min(me.pageIndex + a, me.totalPages); i <= ii; i++) {
                        if (i <= m) continue;
                        p.after('<li id="page_' + i + '" rel="page"><a href="#' + i + '">' + i + '</a></li>');
                        p = p.next();
                        m = i;
                    }

                    if (me.pageIndex + a < me.totalPages - me.options.pagerGroupSize) {
                        p.after('<li class="hidden-pages">&hellip;</li>');
                        p = p.next();
                    }
                }

                for (var i = me.totalPages - me.options.pagerGroupSize + 1, ii = me.totalPages; i <= ii; i++) {
                    if (i <= m) continue;
                    p.after('<li id="page_' + i + '" rel="page"><a href="#' + i + '">' + i + '</a></li>');
                    p = p.next();
                    m = i;
                }
            }

            me.pager.ul.find('li[rel=page] a').removeClass('current');

            me.pager.ul.find('li#page_' + me.pageIndex + ' a').addClass('current');

            me.pager.ul.find('li[rel=page] a').click(function (event) {
                event.preventDefault();
                me.loadPage(parseInt($(this).attr('href').replace('#', '')));
            });
        };

        me.fixHeight = function () {
            var mh = 0;
            me.ul.find('li').each(function () {
                var h = $(this).outerHeight(1);
                if (h > mh) mh = h;
            });
            me.ul.animate({ height: mh });
        };

        me.loadPage = function (pageIndex) {
            if (me.isWorking) return;
            me.isWorking = true;
            me.e.addClass('loading');
            me.ul.empty();
            me.pageIndex = pageIndex;
            $.ajax({
                url: me.options.feedUrl,
                data: $.toJSON({ pageIndex: pageIndex, pageSize: me.pageSize, languageId: me.options.languageId, languageCode: me.options.languageCode, isArchived: me.options.isArchived, thumbnailSizeFactor: me.options.thumbnailSizeFactor, excludeItems: me.options.excludeItems, categoryId: me.options.categoryId }),
                success: function (response) {
                    var data = response.d;
                    me.totalPages = data.total;
                    me.totalRecords = data.records;
                    me.pageIndex = data.page;
                    if (data.items.length > 0) {
                        for (var i = 0, ii = data.items.length; i < ii; i++) {
                            var item = data.items[i];
                            var li = $('<li/>');
                            var a = $('<a/>').addClass('image-frame-small').attr('href', item.link + me.options.urlAddition).append($('<img/>').attr('src', item.image).attr('alt', item.title));
                            li.append(a);
                            li.append($('<a/>').attr('href', item.link + me.options.urlAddition).text(item.title));
                            li.append('<span class="date" title="' + item.date + '">' + item.shortDate + '</span>');
                            me.ul.append(li);
                        }
                    }
                    // do something
                    me.updatePager();
                    me.e.removeClass('loading');
                    me.fixHeight();
                    me.isWorking = false;
                },
                error: function () {
                },
                type: "POST",
                contentType: 'application/json; charset=utf-8',
                dataType: 'json'
            });
        };

        me.loadPage(1);
    };

    $.fn.otherNewsListing = function (options) {
        var opts = $.extend({}, $.fn.otherNewsListing.defaults, options);
        return this.each(function () {
            var e = $(this);
            new NewsListing(e, opts);
        });
    };

    $.fn.otherNewsListing.defaults = {
        rows: 1,
        cols: 4,
        languageId: 1,
        languageCode: 'en-GB',
        thumbnailSizeFactor: '701x4b1wffffff',
        feedUrl: 'services/AjaxHandler.asmx/LoadNewsList',
        excludeItems: [],
        isArchived: false,
        pagerFormat: 'Page {0} of {1}',
        className: '',
        nextLabel: 'Next',
        previousLabel: 'Previous',
        pagerGroupSize: 3,
        categoryId: -1,
        urlAddition: ''

    };
})(jQuery);
(function ($) {
    var SXForm = function (element, options) {
        var me = this;
        me.e = element;
        me.options = options;

        // enable validation
        me.enableLiveValidation = function () {
            var controls = me.e.find('input.validate,select.validate,textarea.validate');
            controls.bind('change blur', function () {
                var el = $(this);
                me.validateElement(el);
            });

            // more complicated ones
            me.e.find('ul.validate input,table.validate input').bind('change blur', function () {
                var el = $(this);
                me.validateElement(el);
            });
        };

        me.validateElement = function (el) {
            var result = $.fi.helpers.validators.requriedFieldValidator(el);
            if (el.parents(".items").length > 0 || el.parents(".checkbox-list").length > 0) {
                // item is part of group so we should apply group validation
                var p = el.parents(".items");
                if (p.hasClass('required-1-chk') || p.hasClass('required-1-rb')) {
                    // at least one checkbox/radiobutton should be selected
                    result = result || p.find('input:checked').length > 0;
                    if (!result) {
                        el.parents('div.field-value').find('small').text(el.parents('li.field').find('label small').text());
                    }
                } else {
                    if (el.parents('.checkbox-list').length > 0) {
                        p = el.parents(".checkbox-list");
                        if (p.hasClass('required-1-chk') || p.hasClass('required-1-rb')) {
                            // at least one checkbox/radiobutton should be selected
                            result = result || p.find('input:checked').length > 0;
                            if (!result) {
                                el.parents('div.field-value').find('small').text(el.parents('li.field').find('label small').text());
                            }
                        }
                    }
                }
            } else {
                if (result && el.hasClass('email')) {
                    result = $.fi.helpers.validators.emailValidator(el);
                    if (!result) {
                        el.parents('div.field-value').find('small').text($.fi.resources.forms.invalidEmailAddress[$.fi.languageCode]);
                    } else {
                        el.parents('div.field-value').find('small').text(el.parents('li').find('label small').text());
                    }
                } else if (result && el.hasClass('url')) {
                    result = $.fi.helpers.validators.urlValidator(el);
                    if (!result) {
                        el.parents('div.field-value').find('small').text($.fi.resources.forms.invalidURLAddress[$.fi.languageCode]);
                    } else {
                        el.parents('div.field-value').find('small').text(el.parents('li').find('label small').text());
                    }
                } else {
                    el.parents('div.field-value').find('small').text(el.parents('li').find('label small').text());
                }
            }
            if (result) {
                el.parents('div.field-value').find('small').hide();
            } else {
                el.parents('div.field-value').find('small').show().css({display:'block'});
            }
            return result;
        };

        me.validateForm = function () {
            var isValid = true;
            var focus = false;
            var controls = me.e.find('input.required,select.required,textarea.required,.validate input');
            controls.each(function () {
                var el = $(this);
                var result = me.validateElement(el);

                if (!result) {
                    isValid = false;
                    if (!focus) {
                        el.focus();
                        focus = true;
                    }
                }
            });
            return isValid;
        };

        // add text-limit to textarea
        me.e.find('textarea.autolimit').limitedTextArea({ maxLength: 500 });
        me.e.find('textarea.word-limit').limitedTextArea({ wordLimit: true });

        // add limit to contact-numbers
        me.e.find('input.textbox-code,input.textbox-phone').keypress(function (ev) {
            var code = ev.which;
            switch (code) {
                case 0:
                case 8:
                    return;
            }
            var key = String.fromCharCode(code);
            if (me.options.phoneAllowedCharacters.indexOf(key) != -1) return true;
            return false;
        });

        me.e.find('input.number-only').keypress(function (ev) {
            var code = ev.which;
            switch (code) {
                case 0:
                case 8:
                    return;
            }
            var key = String.fromCharCode(code);
            if ('0123456789'.indexOf(key) != -1) return true;
            return false;
        });

        // setup editor
        if (me.e.find('textarea.editor').length > 0) {
            me.e.find('textarea.editor').tinymce({
                // Location of TinyMCE script
                script_url: $.fi.virtualPath + '/Controls/tiny_mce/tiny_mce.js',

                // General options
                theme: "advanced",
                plugins: "paste,directionality,visualchars,nonbreaking,xhtmlxtras,searchreplace",
                setup: function (ed) {
                    // Gets executed after DOM to HTML string serialization
                    ed.onPostProcess.add(function (ed, o) {
                        // State get is set when contents is extracted from editor
                        if (o.get) {
                            // Replace all strong/b elements with em elements
                            o.content = o.content.replace(/&/ig, '&amp;');
                            o.content = o.content.replace(/</ig, '&lt;');
                            o.content = o.content.replace(/>/ig, '&gt;');
                        }
                    });
                },
                // Theme options
                theme_advanced_buttons1: "undo,redo,|,bold,italic,underline,strikethrough,|,ltr,rtl,|,justifyleft,justifycenter,justifyright,justifyfull,|,sub,sup",
                theme_advanced_buttons2: "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,link,unlink,anchor,image,charmap",
                theme_advanced_buttons3: "styleselect,formatselect,|,cleanup,removeformat,visualchars,nonbreaking",
                theme_advanced_toolbar_location: "top",
                theme_advanced_toolbar_align: "left",
                theme_advanced_statusbar_location: "bottom",
                theme_advanced_resizing: false,

                convert_urls: false,

                content_css: "/portal/content/css/editor.css?" + new Date().getTime(),
                theme_advanced_styles: "More Info link Box=more-link-box;Quote Credit=qoute-credit"

            });
        }

        // add uploadify
        me.e.find('div.fuploadify').each(function () {
            var parent = $(this); // div.field-value
            var hiddenField = parent.find('input[type=hidden]');
            var fupload = parent.find('input[type=file]');
            var settings = {};
            if (!fupload.hasClass('multi')) {
                settings = $.extend(true, {}, {
                    multi: false,
                    swf: $.fi.virtualPath + '/controls/uploadify/uploadify.swf',
                    uploader: $.fi.virtualPath + '/services/ExhibitionPackage/logouploader.ashx',
                    folder: '/',
                    cancelImage: 'content/icimages/cancel.png',
                    fileTypeDesc: 'All Files',
                    fileTypeExts: '*.*',
                    fileSizeLimit: 2048,
                    auto: true,
                    buttonImage: $.fi.virtualPath + '/Content/siteImages/blank-50.gif',
                    buttonText: ' ',
                    postData: { 'tgstyle': 'imagebank' },
                    width: 100,
                    height: 24,
                    buttonCursor: 'pointer',
                    debug: false,
                    checkExisting: false,
                    removeCompleted: true,
                    removeTimeout: 0,
                    requeueErrors: false,
                    uploadButtonText: 'Choose File',
                    onUploadStart: function (file) {
                        parent.addClass('uploading');
                    },
                    onUploadComplete: function () {
                        parent.removeClass('uploading');
                        me.e.find('li.actions div.xform-msg').remove();
                    },
                    onUploadSuccess: function (file, data, response) {
                        var itemId = $.trim(data.substring(data.indexOf('\n')));
                        if (itemId.indexOf('###') >= 0) {
                            alert("Uploading process failed. Please try again.");
                            alert(itemId);
                            return;
                        }
                        parent.find('small').hide();
                        me.options.uploadifySuccess(parent, file, data, response);
                    },
                    'onUploadError': function (e, n, m) {
                        console.log(parent);
                        if (parent.find('small').length > 0) {
                            parent.find('small').text('An error happened during uploading the file. Please try again.').show();
                        } else {
                            parent.append('<small>An error happened during uploading the file. Please try again.</small>');
                            parent.find('small').show();
                        }
                    }
                }, me.options.uploadifySettings);
            } else {
                settings = $.extend(true, {}, {
                    multi: true,
                    swf: $.fi.virtualPath + '/controls/uploadify/uploadify.swf',
                    uploader: $.fi.virtualPath + '/services/ExhibitionPackage/ProductImageUpload.ashx',
                    folder: '/',
                    cancelImage: 'content/icimages/cancel.png',
                    fileTypeDesc: 'All Files',
                    fileTypeExts: '*.*',
                    fileSizeLimit: 1024,
                    auto: true,
                    buttonImage: $.fi.virtualPath + '/Content/siteImages/blank-50.gif',
                    buttonText: ' ',
                    postData: { 'tgstyle': 'imagebank' },
                    width: 100,
                    queueSizeLimit: fupload.attr('rel') || 6,
                    height: 24,
                    buttonCursor: 'pointer',
                    debug: false,
                    checkExisting: false,
                    removeCompleted: true,
                    removeTimeout: 0,
                    requeueErrors: false,
                    uploadButtonText: 'Choose File',
                    onUploadStart: function (file) {
                        parent.addClass('uploading');
                    },
                    onUploadComplete: function () {
                        parent.removeClass('uploading');
                        me.e.find('li.actions div.xform-msg').remove();
                    },
                    onUploadSuccess: function (file, data, response) {
                        var itemId = $.trim(data.substring(data.indexOf('\n')));
                        if (itemId.indexOf('###') >= 0) {
                            alert("Uploading process failed. Please try again.");
                            alert(itemId);
                            return;
                        }
                        parent.find('small').hide();
                        me.options.uploadifySuccess(parent, file, data, response);
                    },
                    'onUploadError': function (e, n, m) {
                        console.log(parent);
                        if (parent.find('small').length > 0) {
                            parent.find('small').text('An error happened during uploading the file. Please try again.').show();
                        } else {
                            parent.append('<small>An error happened during uploading the file. Please try again.</small>');
                            parent.find('small').show();
                        }
                    }
                }, me.options.uploadifySettings);
            }

            // item specific settings
            $.each(me.options.itemSpecificUploadifySettings, function (i, s) {
                if (parent.hasClass(s.className)) {
                    settings = $.extend({}, settings, s.settings);
                }
            });

            fupload.uploadify(settings);
            parent.find('div.uploadify').prepend('<span>' + settings.uploadButtonText + '</span>');
        });

        me.enableLiveValidation();
        // check the submit button
        me.e.find('input[type=submit]').click(function (event) {
            if (me.validateForm()) {

                // check for file upload
                if (me.e.find('div.fuploadify').length > 0 && me.e.find('div.fuploadify.uploading').length > 0) {
                    event.preventDefault();
                    $(this).after('<div class="xform-msg">' + me.options.fileUploadInProgressMessage + '</div>');
                    return;
                }

                // check for html content
                me.e.find('input,select,textarea').each(function () {
                    var t = $(this);
                    var v = t.val();
                    if (v && v.indexOf('<') > -1 && v.indexOf('>') > -1) {
                        // escape the text
                        v = v.replace(/&/ig, '&amp;').replace(/</ig, '&lt;').replace(/>/ig, '&gt;');
                        t.val(v);
                    }
                });

                if (me.options.hideSubmitButton) {
                    $(this).hide();
                    me.e.find('.hide-on-submit').hide();
                    $(this).after('<div class="xform-msg">' + me.options.submitMessage + '</div>');
                }
                me.options.onSubmit(event);
            } else {
                event.preventDefault();
            }
        });

        me.e.find('input,select,textarea').each(function () {
            var t = $(this);
            var v = t.val();
            if (v && (v.indexOf('&lt;') > -1 || v.indexOf('&gt;') > -1)) {
                // unescape the text
                v = v.replace(/&lt;/ig, '<').replace(/&gt;/ig, '>').replace(/&amp\;/ig, '&');
                t.val(v);
            }
        });
        me.e.find('ul.items li input').change(function(){
            if($(this).attr('checked')){
                $(this).parent().addClass('checked');
            }else{
                $(this).parent().removeClass('checked');
            }
        }).change();
    };

    $.fn.xForm = function (options) {
        var opt = $.extend(true, {}, $.fn.xForm.defaults, options);
        return this.each(function () {
            $(this).data('xForm', new SXForm($(this), opt));
        });
    };

    $.fn.xForm.defaults = {
        uploadifySettings: {
            uploadButtonText: 'Choose File'
        },
        hideSubmitButton: true,
        submitMessage: 'Saving...',
        fileUploadInProgressMessage: 'Uploading file... Please Wait!',
        phoneAllowedCharacters: '0123456789+',
        uploadifySuccess: function () { },
        itemSpecificUploadifySettings: [],
        onSubmit: $.noop
    };
})(jQuery);
(function ($) {
    var AdvancedSearch = function (element, options) {
        var me = this;
        me.e = element;
        me.options = options;

        // define sections
        me.search = {};
        me.news = {};
        me.pages = {};
        me.events = {};
        me.faqs = {};
        me.circulars = {};
        me.photos = {};
        me.videos = {};

        me.loading = 0;
        me.resultSize = 0;

        ///////////////////////////////////////////////////////////////////////// SEARCH BOX
        me.search.e = me.e.find('div#gf-search');
        me.search.keywords = me.search.e.find('input[name=query]');
        me.search.getFromDate = function(){ return me.search.e.find('select[name=fromDay]').val() + '/' + me.search.e.find('select[name=fromMonth]').val() + '/' + me.search.e.find('select[name=fromYear]').val();}
        me.search.getToDate = function(){ return me.search.e.find('select[name=toDay]').val() + '/' + me.search.e.find('select[name=toMonth]').val() + '/' + me.search.e.find('select[name=toYear]').val();}

        me.search.searchIn = '';

        me.search.e.find('input.checkbox').change(function () {
            if ($(this).attr('checked')) {
                me.search.searchIn += "," + $(this).val();
            } else {
                me.search.searchIn = me.search.searchIn.replace("," + $(this).val(), '');
            }
        }).change();
        me.search.submit = me.search.e.find('input.main-button');
        me.search.submit.click(function (event) {
            event.preventDefault();
            var s = me.search.searchIn.split(',');
            me.loading = 0;
            me.resultSize = 0;
            me.e.find('p.empty-result').remove();
            me.e.find('div.search-result').children().hide();
            if (s.length < 1) return;
            if ($.trim(me.search.keywords.val()).length < 2) return;
            for (var i = 0; i < s.length; i++) {
                if (s[i].length > 0) {
                    me[s[i]].load();
                    me[s[i]].e.show().css({ visibility: 'hidden' });
                    me[s[i]].h2.find('span').text(me.search.keywords.val());
                    me.loading++;
                }
            }
            if (me.loading > 0) me.search.submit.css({ visibility: 'hidden' }).parent().addClass('loading');
        });

        me.checkResult = function () {
            if (me.loading == 0) {
                if (me.resultSize == 0) {
                    // show empty result
                    me.e.find('div.search-result').prepend('<p class="empty-result">' + me.options.resources.noResult + '</p>');
                } else {
                }
                me.search.submit.css({ visibility: 'visible' }).parent().removeClass('loading');
            }

        }

        //////////////////////////////////////////////////////////////////////// NEWS
        me.news.e = me.e.find('div.news-result');
        me.news.load = function () {
            me.news.e.newsListing('load', '1');
        };
        if (me.news.e.children().length == 0) {
            me.news.e.hide();
            me.news.h2 = $('<h2/>').append('<a href="#">' + me.options.resources.newsResultFor.replace('{0}', '<span class="search-term"></span>') + '</a>');
            me.news.ul = $('<ul/>').addClass('general-listing');
            me.news.e.append(me.news.h2).append(me.news.ul);
            me.news.pager = $('<ul/>').addClass('pager');
            me.news.e.append(me.news.pager);
            me.news.pager.append('<li class="info">' + me.options.resources.pagerFormat.replace('{0}', 0).replace('{1}', 0) + '</li>');
            me.news.pager.append('<li class="first"><a href="#" class="previous"><span class="arrow arrow-previous">Previous</span></a></li>');
            me.news.pager.append('<li><a href="#" class="next"><span class="arrow arrow-next">Next</span></a></li>');
        } else {
            me.news.h2 = me.news.e.find('h2');
            me.news.ul = me.news.e.find('ul.general-listing');
            me.news.pager = me.news.e.find('ul.pager');
        }

        me.news.pageNumber = me.options.pageIndex + 1;
        
        me.news.h2.find('a').click(function(event){
            event.preventDefault();
            me.search.e.find('input.checkbox').attr('checked',false).change();
            me.search.e.find('input.checkbox[value=news]').attr('checked',true).change();
            me.search.submit.click();
        });

        me.news.e.newsListing({
            rows: me.options.pageSize,
            cols: 1,
            feedUrl: me.options.url,
            titleTextLimit: 1000,
            introTextLimit: 10000,
            postData: function (p) {
                p.languageId = $.fi.languageId;
                p.languageCode = $.fi.languageCode;
                p.keywords = me.search.keywords.val();
                p.startDate = me.search.getFromDate();
                p.endDate = me.search.getToDate();
                p.pageNumber = p.pageIndex;
                p.searchIn = 'news';
                return p;
            },
            monitorHash: false,
            loadCompletedCallback: function (pages) {
                if (pages > 0) {
                    // no result for news
                    me.news.e.css({ visibility: 'visible' });
                }else{
                    me.news.e.hide();
                }
                if (me.loading > 0) {
                    me.resultSize += pages;
                    me.loading--;
                    me.checkResult();
                }
            },
            pagerFormat: me.options.resources.pagerFormat,
            scrollToResult:false
        });


        //////////////////////////////////////////////////////////////////////////////////////// Photos
        me.photos.e = me.e.find('div.photos-result');
        me.photos.load = function () {
            me.photos.e.photoGallery('load', '1');
        };

        if (me.photos.e.children().length == 0) {
            me.photos.e.hide();
            me.photos.h2 = $('<h2/>').append('<a href="#">' + me.options.resources.photoResultFor.replace('{0}', '<span class="search-term"></span>') + '</a>');
            me.photos.ul = $('<ul/>').addClass('general-listing');
            me.photos.e.append(me.photos.h2).append(me.photos.ul);
            me.photos.pager = $('<ul/>').addClass('pager');
            me.photos.e.append(me.photos.pager);
            me.photos.pager.append('<li class="info">' + me.options.resources.pagerFormat.replace('{0}', 0).replace('{1}', 0) + '</li>');
            me.photos.pager.append('<li class="first"><a href="#" class="previous"><span class="arrow arrow-previous">Previous</span></a></li>');
            me.photos.pager.append('<li><a href="#" class="next"><span class="arrow arrow-next">Next</span></a></li>');
        } else {
            me.photos.h2 = me.photos.e.find('h2');
            me.photos.ul = me.photos.e.find('ul.general-listing');
            me.photos.pager = me.photos.e.find('ul.pager');
        }

        me.photos.pageNumber = me.options.pageIndex + 1;

        me.photos.h2.find('a').click(function(event){
            event.preventDefault();
            me.search.e.find('input.checkbox').attr('checked',false).change();
            me.search.e.find('input.checkbox[value=photos]').attr('checked',true).change();
            me.search.submit.click();
        });

        me.photos.e.photoGallery({
            pageSize: me.options.pageSize,
            feedUrl: me.options.url,
            postData: function (p) {
                p.languageId = $.fi.languageId;
                p.languageCode = $.fi.languageCode;
                p.keywords = me.search.keywords.val();
                p.startDate = me.search.getFromDate();
                p.endDate = me.search.getToDate();
                p.pageNumber = p.pageIndex;
                p.searchIn = 'photos';
                return p;
            },
            monitorHash: false,
            useInlineFilter: false,
            loadCompletedCallback: function (pages) {
                if (pages > 0) {
                    me.photos.e.css({ visibility: 'visible' });
                }else{
                    me.photos.e.hide();
                }
                if (me.loading > 0) {
                    me.resultSize += pages;
                    me.loading--;
                    me.checkResult();
                }
            },
            resources: {
                pagerFormat: me.options.resources.pagerFormat
            },
            addHeader:false,
            scrollToResult:false
        });

        //////////////////////////////////////////////////////////////////////// Web Pages
        me.pages.e = me.e.find('div.pages-result');
        me.pages.load = function () {
            me.pages.e.pageListing('load', '1');
        };
        if (me.pages.e.children().length == 0) {
            me.pages.e.hide();
            me.pages.h2 = $('<h2/>').append('<a href="#">' + me.options.resources.pageResultFor.replace('{0}', '<span class="search-term"></span>') + '</a>');
            me.pages.ul = $('<ul/>').addClass('general-listing');
            me.pages.e.append(me.pages.h2).append(me.pages.ul);
            me.pages.pager = $('<ul/>').addClass('pager');
            me.pages.e.append(me.pages.pager);
            me.pages.pager.append('<li class="info">' + me.options.resources.pagerFormat.replace('{0}', 0).replace('{1}', 0) + '</li>');
            me.pages.pager.append('<li class="first"><a href="#" class="previous"><span class="arrow arrow-previous">Previous</span></a></li>');
            me.pages.pager.append('<li><a href="#" class="next"><span class="arrow arrow-next">Next</span></a></li>');
        } else {
            me.pages.h2 = me.pages.e.find('h2');
            me.pages.ul = me.pages.e.find('ul.general-listing');
            me.pages.pager = me.pages.e.find('ul.pager');
        }

        me.pages.pageNumber = me.options.pageIndex + 1;

        me.pages.h2.find('a').click(function(event){
            event.preventDefault();
            me.search.e.find('input.checkbox').attr('checked',false).change();
            me.search.e.find('input.checkbox[value=pages]').attr('checked',true).change();
            me.search.submit.click();
        });

        me.pages.e.pageListing({
            rows: me.options.pageSize,
            cols: 1,
            feedUrl: me.options.url,
            titleTextLimit: 1000,
            introTextLimit: 10000,
            postData: function (p) {
                p.languageId = $.fi.languageId;
                p.languageCode = $.fi.languageCode;
                p.keywords = me.search.keywords.val();
                p.startDate = me.search.getFromDate();
                p.endDate = me.search.getToDate();
                p.pageNumber = p.pageIndex;
                p.searchIn = 'pages';
                return p;
            },
            monitorHash: false,
            loadCompletedCallback: function (pages) {
                if (pages > 0) {
                    // no result for news
                    me.pages.e.css({ visibility: 'visible' });
                }else{
                    me.pages.e.hide();
                }
                if (me.loading > 0) {
                    me.resultSize += pages;
                    me.loading--;
                    me.checkResult();
                }
            },
            pagerFormat: me.options.resources.pagerFormat,
            scrollToResult:false
        });

    };

    $.fn.advancedSearch = function (options) {
        var opt = $.extend(true, {}, $.fn.advancedSearch.defaults, options);

        return this.each(function () {
            new AdvancedSearch($(this), opt);
        });
    }

    $.fn.advancedSearch.defaults = {
        url: 'Services/AjaxHandler.asmx/AdvancedSearch',
        pageSize: 5,
        pageIndex: 0,
        totalPages: [],
        resources: {
            pagerFormat: 'Page {0} of {1}',
            newsResultFor: 'News result for {0}',
            eventResultFor: 'Event result for {0}',
            faqResultFor: 'FAQ result for {0}',
            circularResultFor: 'Circular result for {0}',
            photoResultFor: 'Photo result for {0}',
            pageResultFor: 'Web page result for {0}',
            noResult: '',
            readMore: 'Read More'
        }
        
    };
})(jQuery);
(function ($) {

    var ImageGallery = function (element, options) {
        var me = this;

        me.e = $(element);
        me.options = options;

        me.imagesUl = me.e.find('ul');
        me.pager = $('<ul/>').addClass('pager cf');
        me.e.append(me.pager);
        me.totalItems = me.options.imageThumbnails.length;

        var info = $('<li/>').addClass('label').text(me.options.pagerFormat.replace('{0}', 1).replace('{1}', me.totalItems));

        me.pager.append(info);
        me.imagesUl.empty();

        for (var i = 1, ii = me.totalItems; i <= ii; i++) {
            me.imagesUl.append('<li id="img_' + i + '" class="' + (i == 1 ? 'default' : '') + '"><a href="' + me.options.lightBoxImages[i - 1] + '" ><img src="' + me.options.imageThumbnails[i - 1] + '" alt="" /></a></li>');
            me.pager.append('<li class="' + (i == 1 ? 'current' : '') + '"><a href="#img_' + i + '">' + i + '</a>');
        }

        me.pager.find('a').click(function (event) {
            event.preventDefault();
            if ($(this).parent().hasClass('current')) return;

            var targetItem = me.imagesUl.find($(this).attr('href'));
            me.pager.children().removeClass('current');
            $(this).parent().addClass('current');
            me.imagesUl.find('.default').fadeOut(400, function () { $(this).removeClass('default'); });
            targetItem.hide().addClass('default').fadeIn(400);
        });

        me.imagesUl.find('a').lightBox();
    };

    $.fn.inlineImageGallery = function (options) {
        var opts = $.extend({}, $.fn.inlineImageGallery.defaults, options);

        return this.each(function () {
            new ImageGallery($(this), opts);
        });
    };

    $.fn.inlineImageGallery.defaults = {
        imageThumbnails: [],
        lightBoxImages: [],
        pagerFormat: 'Image {0} of {1}'
    };

})(jQuery);
(function ($) {
    var AJAXFormSubmit = function (element, options) {
        var me = this;
        me.e = element;
        me.options = options;

        me.submit = me.e.find('input.submit');
        me.reset = me.e.find('input.reset');
        me.message = me.e.find('div.message');

        me.message.hide();
        me.reset.click(function () {
            me.e.find('textarea.limit').val('').change();
            window.setTimeout(function () { me.e.find('select.custom').change(); me.e.find('div.field-value small').hide(); }, 1);
            me.e.find('div.field-value small').hide();
        });
        me.enableLiveValidation = function () {
            var controls = me.e.find('input.required,select.required,textarea.required');
            controls.bind('change blur', function () {
                var el = $(this);
                me.validateElement(el);
            });
        };

        me.validateElement = function (el) {
            var result = $.fi.helpers.validators.requriedFieldValidator(el);
            if (result && el.hasClass('email')) {
                result = $.fi.helpers.validators.emailValidator(el);
                if (!result) {
                    el.parents('div.field-value').find('small').text($.fi.resources.forms.invalidEmailAddress[$.fi.languageCode]);
                } else {
                    el.parents('div.field-value').find('small').text(el.parents('li').find('label small').text());
                }
            } else {
                el.parents('div.field-value').find('small').text(el.parents('li').find('label small').text());
            }

            if (result) {
                el.parents('div.field-value').find('small').hide();
            } else {
                el.parents('div.field-value').find('small').show();
            }
            return result;
        }

        me.validateForm = function () {
            var isValid = true;
            var focus = false;
            var controls = me.e.find('input.required,select.required,textarea.required');
            controls.each(function () {
                var el = $(this);
                var result = me.validateElement(el);

                if (!result) {
                    isValid = false;
                    if (!focus) {
                        el.focus();
                        focus = true;
                    }
                }
            });
            return isValid;
        };
        me.e.find('textarea.limit').limitedTextArea();
        /*me.e.find('input[type=file]').fileUploadify({
            resources: me.options.resources,
            onSelect: function (file) {
                if (file != null) {
                    var phi = file.swfu.settings.button_placeholder_id;
                    var sm = $('#' + phi).parents('div.field-value').find('small');
                    if (sm.data('timer') != null) {
                        window.clearTimeout(sm.data('timer'));
                        sm.data('timer', null);
                    }
                    sm.hide();
                    $('#' + phi).uploadifyDisable(true);

                    $('#' + phi).parents('div.field-value').find('div.uploadifyQueueItem .cancel a').click(function () {
                        $('#' + phi).uploadifyDisable(false);
                        me.pendingFiles = false;
                        me.uploadedFile = '';
                    });

                    me.pendingFiles = true;
                }
            },
            onCancel: function (args) {
            },
            onSelectError: function (file, errorCode, errorMsg) {
                if (file != null) {
                    // show error message
                    switch (errorCode) {
                        case SWFUpload.QUEUE_ERROR.FILE_EXCEEDS_SIZE_LIMIT:
                            var phi = file.swfu.settings.button_placeholder_id;
                            var sm = $('#' + phi).parents('div.field-value').find('small');
                            sm.html(me.options.resources.sizeError.replace("{0}", file.name).replace("{1}", file.swfu.settings.file_size_limit).replace("{2}", Math.round(file.size / 1024)));
                            sm.show();
                            var timer = window.setTimeout(function () { sm.hide(); sm.data('timer', null); }, 10000);
                            sm.data('timer', timer);
                            me.pendingFiles = false;
                            me.uploadedFile = '';
                            $('#' + phi).uploadifyDisable(false);
                            break;
                    }
                }
            },
            onSuccess: function (file) {
                me.uploadedFile = file.filePath;
                me.uploadCompleted = true;
                me.pendingFiles = false;
                me.submit.click();
            },
            onError: function () {
                me.pendingFiles = true;
                me.uploadCompleted = false;
                me.mode = '';
                var upi = me.e.find('.uploadify').attr('id');
                $('#' + upi).next().addClass('pending');
                me.submit.show();
                me.message.hide();
            },
            uploadifySettings: me.options.uploadifySettings
        });*/
        me.pendingFiles = false;
        me.enableLiveValidation();
        me.uploadCompleted = true;
        me.mode = '';
        me.submit.click(function (event) {
            event.preventDefault();
            if (me.validateForm()) {
                me.submit.hide();
                me.message.html('&nbsp;').show();
                // check for file upload

                if (me.pendingFiles) {
                    me.mode = 'upload';
                    var upi = me.e.find('.uploadify').attr('id');
                    $('#' + upi).uploadifyUpload();
                    $('#' + upi).next().removeClass('pending');
                    me.uploadCompleted = false;
                    return;
                }

                var controls = me.e.find('.field-value input,.field-value select, .field-value textarea');
                var p = {};
                controls.each(function () {
                    var el = $(this);
                    p[el.attr('name')] = el.val();
                });
                if (me.uploadedFile) {
                    var upi = me.e.find('.uploadify').attr('id');
                    p[upi] = me.uploadedFile;
                }

                if (me.options.postData && $.isFunction(me.options.postData)) {
                    p = me.options.postData(p);
                }
                $.ajax({
                    url: me.options.url,
                    data: $.toJSON(p),
                    success: function (response) {
                        var d = response.d;
                        var result = null;
                        if (me.options.responseHandler) {
                            result = me.options.responseHandler(d);
                            if (result.processed) {
                                me.e.hide();
                                me.e.parent().find('div.success').html(result.message);
                                me.e.parent().find('div.success').show();
                                me.e.find('.field-value input, .field-value textarea').val('').change();
                                me.e.find('.field-value select').val('0').change();
                            } else {
                                me.submit.show();
                                me.message.removeClass('loading').text($.fi.resources.forms.generalError[$.fi.languageCode]);
                            }
                        } else {
                            me.submit.show();
                            me.message.removeClass('loading').text($.fi.resources.forms.generalError[$.fi.languageCode]);
                        }
                    },
                    error: function () {
                        me.submit.show();
                        me.message.removeClass('loading').text($.fi.resources.forms.generalError[$.fi.languageCode]);
                    },
                    type: "POST",
                    contentType: 'application/json; charset=utf-8',
                    dataType: 'json'
                });
                me.e.hide();
                me.e.parent().find('div.success').show();
                $('html, body').animate({ scrollTop: me.e.parent().offset().top }, 500);
            } else {

            }
        });
    };

    $.fn.ajaxForm = function (options) {
        var opts = $.extend({}, $.fn.ajaxForm.defaults, options);
        return this.each(function () {
            new AJAXFormSubmit($(this), opts);
        });

    };

    $.fn.ajaxForm.defaults = {
        url: 'services/AjaxHandler.asmx/SubmitQuestion',
        postData: false,
        responseHandler: false,
        uploadifySettings: {},
        resources: {
            chooseFile: 'Choose file',
            sizeError: 'The file <strong>"{0}"</strong>  exceeds the size limit <strong>{1}KB</strong>. Selected file size is: <strong>{2}KB</strong>.'
        }
    };
})(jQuery);
/* ------------------------------------------------------------------------
	Class: prettyPhoto
	Use: Lightbox clone for jQuery
	Author: Stephane Caron (http://www.no-margin-for-errors.com)
	Version: 3.1.3
------------------------------------------------------------------------- */
(function($) {
	$.prettyPhoto = {version: '3.1.3'};
	
	$.fn.prettyPhoto = function(pp_settings) {
		pp_settings = jQuery.extend({
			animation_speed: 'fast', /* fast/slow/normal */
			slideshow: 5000, /* false OR interval time in ms */
			autoplay_slideshow: false, /* true/false */
			opacity: 0.80, /* Value between 0 and 1 */
			show_title: true, /* true/false */
			allow_resize: true, /* Resize the photos bigger than viewport. true/false */
			default_width: 500,
			default_height: 344,
			counter_separator_label: '/', /* The separator for the gallery counter 1 "of" 2 */
			theme: 'pp_default', /* light_rounded / dark_rounded / light_square / dark_square / facebook */
			horizontal_padding: 20, /* The padding on each side of the picture */
			hideflash: false, /* Hides all the flash object on a page, set to TRUE if flash appears over prettyPhoto */
			wmode: 'opaque', /* Set the flash wmode attribute */
			autoplay: true, /* Automatically start videos: True/False */
			modal: false, /* If set to true, only the close button will close the window */
			deeplinking: false, /* Allow prettyPhoto to update the url to enable deeplinking. */
			overlay_gallery: true, /* If set to true, a gallery will overlay the fullscreen image on mouse over */
			keyboard_shortcuts: true, /* Set to false if you open forms inside prettyPhoto */
			changepicturecallback: function(){}, /* Called everytime an item is shown/changed */
			callback: function(){}, /* Called when prettyPhoto is closed */
			ie6_fallback: true,
			markup: '<div class="pp_pic_holder"> \
						<div class="ppt">&nbsp;</div> \
						<div class="pp_top"> \
							<div class="pp_left"></div> \
							<div class="pp_middle"></div> \
							<div class="pp_right"></div> \
						</div> \
						<div class="pp_content_container"> \
							<div class="pp_left"> \
							<div class="pp_right"> \
								<div class="pp_content"> \
									<div class="pp_loaderIcon"></div> \
									<div class="pp_fade"> \
										<a href="#" class="pp_expand" title="Expand the image">Expand</a> \
										<div class="pp_hoverContainer"> \
											<a class="pp_next" href="#">next</a> \
											<a class="pp_previous" href="#">previous</a> \
										</div> \
										<div id="pp_full_res"></div> \
										<div class="pp_details"> \
											<div class="pp_nav"> \
												<a href="#" class="pp_arrow_previous">Previous</a> \
												<p class="currentTextHolder">0/0</p> \
												<a href="#" class="pp_arrow_next">Next</a> \
											</div> \
											<p class="pp_description"></p> \
											<div class="pp_social">{pp_social}</div> \
											<a class="pp_close" href="#">Close</a> \
										</div> \
									</div> \
								</div> \
							</div> \
							</div> \
						</div> \
						<div class="pp_bottom"> \
							<div class="pp_left"></div> \
							<div class="pp_middle"></div> \
							<div class="pp_right"></div> \
						</div> \
					</div> \
					<div class="pp_overlay"></div>',
			gallery_markup: '<div class="pp_gallery"> \
								<a href="#" class="pp_arrow_previous">Previous</a> \
								<div> \
									<ul> \
										{gallery} \
									</ul> \
								</div> \
								<a href="#" class="pp_arrow_next">Next</a> \
							</div>',
			image_markup: '<img id="fullResImage" src="{path}" />',
			flash_markup: '<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="{width}" height="{height}"><param name="wmode" value="{wmode}" /><param name="allowfullscreen" value="true" /><param name="allowscriptaccess" value="always" /><param name="movie" value="{path}" /><embed src="{path}" type="application/x-shockwave-flash" allowfullscreen="true" allowscriptaccess="always" width="{width}" height="{height}" wmode="{wmode}"></embed></object>',
			quicktime_markup: '<object classid="clsid:02BF25D5-8C17-4B23-BC80-D3488ABDDC6B" codebase="http://www.apple.com/qtactivex/qtplugin.cab" height="{height}" width="{width}"><param name="src" value="{path}"><param name="autoplay" value="{autoplay}"><param name="type" value="video/quicktime"><embed src="{path}" height="{height}" width="{width}" autoplay="{autoplay}" type="video/quicktime" pluginspage="http://www.apple.com/quicktime/download/"></embed></object>',
			iframe_markup: '<iframe src ="{path}" width="{width}" height="{height}" frameborder="no"></iframe>',
			inline_markup: '<div class="pp_inline">{content}</div>',
			custom_markup: '',
			social_tools: '<div class="twitter"><a href="http://twitter.com/share" class="twitter-share-button" data-count="none">Tweet</a><script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script></div><div class="facebook"><iframe src="http://www.facebook.com/plugins/like.php?locale=en_US&href={location_href}&amp;layout=button_count&amp;show_faces=true&amp;width=500&amp;action=like&amp;font&amp;colorscheme=light&amp;height=23" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:500px; height:23px;" allowTransparency="true"></iframe></div>' /* html or false to disable */
		}, pp_settings);
		
		// Global variables accessible only by prettyPhoto
		var matchedObjects = this, percentBased = false, pp_dimensions, pp_open,
		
		// prettyPhoto container specific
		pp_contentHeight, pp_contentWidth, pp_containerHeight, pp_containerWidth,
		
		// Window size
		windowHeight = $(window).height(), windowWidth = $(window).width(),

		// Global elements
		pp_slideshow;
		
		doresize = true, scroll_pos = _get_scroll();
	
		// Window/Keyboard events
		$(window).unbind('resize.prettyphoto').bind('resize.prettyphoto',function(){ _center_overlay(); _resize_overlay(); });
		
		if(pp_settings.keyboard_shortcuts) {
			$(document).unbind('keydown.prettyphoto').bind('keydown.prettyphoto',function(e){
				if(typeof $pp_pic_holder != 'undefined'){
					if($pp_pic_holder.is(':visible')){
						switch(e.keyCode){
							case 37:
								$.prettyPhoto.changePage('previous');
								e.preventDefault();
								break;
							case 39:
								$.prettyPhoto.changePage('next');
								e.preventDefault();
								break;
							case 27:
								if(!settings.modal)
								$.prettyPhoto.close();
								e.preventDefault();
								break;
						};
						// return false;
					};
				};
			});
		};
		
		/**
		* Initialize prettyPhoto.
		*/
		$.prettyPhoto.initialize = function() {
			
			settings = pp_settings;
			
			if(settings.theme == 'pp_default') settings.horizontal_padding = 16;
			if(settings.ie6_fallback && $.browser.msie && parseInt($.browser.version) == 6) settings.theme = "light_square"; // Fallback to a supported theme for IE6
			
			// Find out if the picture is part of a set
			theRel = $(this).attr('rel');
			galleryRegExp = /\[(?:.*)\]/;
			isSet = (galleryRegExp.exec(theRel)) ? true : false;
			
			// Put the SRCs, TITLEs, ALTs into an array.
			pp_images = (isSet) ? jQuery.map(matchedObjects, function(n, i){ if($(n).attr('rel').indexOf(theRel) != -1) return $(n).attr('href'); }) : $.makeArray($(this).attr('href'));
			pp_titles = (isSet) ? jQuery.map(matchedObjects, function(n, i){ if($(n).attr('rel').indexOf(theRel) != -1) return ($(n).find('img').attr('alt')) ? $(n).find('img').attr('alt') : ""; }) : $.makeArray($(this).find('img').attr('alt'));
			pp_descriptions = (isSet) ? jQuery.map(matchedObjects, function(n, i){ if($(n).attr('rel').indexOf(theRel) != -1) return ($(n).attr('title')) ? $(n).attr('title') : ""; }) : $.makeArray($(this).attr('title'));
			
			if(pp_images.length > 30) settings.overlay_gallery = false;
			
			set_position = jQuery.inArray($(this).attr('href'), pp_images); // Define where in the array the clicked item is positionned
			rel_index = (isSet) ? set_position : $("a[rel^='"+theRel+"']").index($(this));
			
			_build_overlay(this); // Build the overlay {this} being the caller
			
			if(settings.allow_resize)
				$(window).bind('scroll.prettyphoto',function(){ _center_overlay(); });
			
			
			$.prettyPhoto.open();
			
			return false;
		}


		/**
		* Opens the prettyPhoto modal box.
		* @param image {String,Array} Full path to the image to be open, can also be an array containing full images paths.
		* @param title {String,Array} The title to be displayed with the picture, can also be an array containing all the titles.
		* @param description {String,Array} The description to be displayed with the picture, can also be an array containing all the descriptions.
		*/
		$.prettyPhoto.open = function(event) {
			if(typeof settings == "undefined"){ // Means it's an API call, need to manually get the settings and set the variables
				settings = pp_settings;
				if($.browser.msie && $.browser.version == 6) settings.theme = "light_square"; // Fallback to a supported theme for IE6
				pp_images = $.makeArray(arguments[0]);
				pp_titles = (arguments[1]) ? $.makeArray(arguments[1]) : $.makeArray("");
				pp_descriptions = (arguments[2]) ? $.makeArray(arguments[2]) : $.makeArray("");
				isSet = (pp_images.length > 1) ? true : false;
				set_position = 0;
				_build_overlay(event.target); // Build the overlay {this} being the caller
			}

			if($.browser.msie && $.browser.version == 6) $('select').css('visibility','hidden'); // To fix the bug with IE select boxes
			
			if(settings.hideflash) $('object,embed,iframe[src*=youtube],iframe[src*=vimeo]').css('visibility','hidden'); // Hide the flash

			_checkPosition($(pp_images).size()); // Hide the next/previous links if on first or last images.
		
			$('.pp_loaderIcon').show();
		
			if(settings.deeplinking)
				setHashtag();
		
			// Rebuild Facebook Like Button with updated href
			if(settings.social_tools){
				facebook_like_link = settings.social_tools.replace('{location_href}', encodeURIComponent(location.href)); 
				$pp_pic_holder.find('.pp_social').html(facebook_like_link);
			}
			
			// Fade the content in
			if($ppt.is(':hidden')) $ppt.css('opacity',0).show();
			$pp_overlay.show().fadeTo(settings.animation_speed,settings.opacity);

			// Display the current position
			$pp_pic_holder.find('.currentTextHolder').text((set_position+1) + settings.counter_separator_label + $(pp_images).size());

			// Set the description
			if(pp_descriptions[set_position] != ""){
				$pp_pic_holder.find('.pp_description').show().html(unescape(pp_descriptions[set_position]));
			}else{
				$pp_pic_holder.find('.pp_description').hide();
			}
			
			// Get the dimensions
			movie_width = ( parseFloat(getParam('width',pp_images[set_position])) ) ? getParam('width',pp_images[set_position]) : settings.default_width.toString();
			movie_height = ( parseFloat(getParam('height',pp_images[set_position])) ) ? getParam('height',pp_images[set_position]) : settings.default_height.toString();
			
			// If the size is % based, calculate according to window dimensions
			percentBased=false;
			if(movie_height.indexOf('%') != -1) { movie_height = parseFloat(($(window).height() * parseFloat(movie_height) / 100) - 150); percentBased = true; }
			if(movie_width.indexOf('%') != -1) { movie_width = parseFloat(($(window).width() * parseFloat(movie_width) / 100) - 150); percentBased = true; }
			
			// Fade the holder
			$pp_pic_holder.fadeIn(function(){
				// Set the title
				(settings.show_title && pp_titles[set_position] != "" && typeof pp_titles[set_position] != "undefined") ? $ppt.html(unescape(pp_titles[set_position])) : $ppt.html('&nbsp;');
				
				imgPreloader = "";
				skipInjection = false;
				
				// Inject the proper content
				switch(_getFileType(pp_images[set_position])){
					case 'image':
						imgPreloader = new Image();

						// Preload the neighbour images
						nextImage = new Image();
						if(isSet && set_position < $(pp_images).size() -1) nextImage.src = pp_images[set_position + 1];
						prevImage = new Image();
						if(isSet && pp_images[set_position - 1]) prevImage.src = pp_images[set_position - 1];

						$pp_pic_holder.find('#pp_full_res')[0].innerHTML = settings.image_markup.replace(/{path}/g,pp_images[set_position]);

						imgPreloader.onload = function(){
							// Fit item to viewport
							pp_dimensions = _fitToViewport(imgPreloader.width,imgPreloader.height);

							_showContent();
						};

						imgPreloader.onerror = function(){
							alert('Image cannot be loaded. Make sure the path is correct and image exist.');
							$.prettyPhoto.close();
						};
					
						imgPreloader.src = pp_images[set_position];
					break;
				
					case 'youtube':
						pp_dimensions = _fitToViewport(movie_width,movie_height); // Fit item to viewport
						
						// Regular youtube link
						movie_id = getParam('v',pp_images[set_position]);
						
						// youtu.be link
						if(movie_id == ""){
							movie_id = pp_images[set_position].split('youtu.be/');
							movie_id = movie_id[1];
							if(movie_id.indexOf('?') > 0)
								movie_id = movie_id.substr(0,movie_id.indexOf('?')); // Strip anything after the ?

							if(movie_id.indexOf('&') > 0)
								movie_id = movie_id.substr(0,movie_id.indexOf('&')); // Strip anything after the &
						}

						movie = 'http://www.youtube.com/embed/'+movie_id;
						(getParam('rel',pp_images[set_position])) ? movie+="?rel="+getParam('rel',pp_images[set_position]) : movie+="?rel=1";
							
						if(settings.autoplay) movie += "&autoplay=1";
					
						toInject = settings.iframe_markup.replace(/{width}/g,pp_dimensions['width']).replace(/{height}/g,pp_dimensions['height']).replace(/{wmode}/g,settings.wmode).replace(/{path}/g,movie);
					break;
				
					case 'vimeo':
						pp_dimensions = _fitToViewport(movie_width,movie_height); // Fit item to viewport
					
						movie_id = pp_images[set_position];
						var regExp = /http:\/\/(www\.)?vimeo.com\/(\d+)/;
						var match = movie_id.match(regExp);
						
						movie = 'http://player.vimeo.com/video/'+ match[2] +'?title=0&amp;byline=0&amp;portrait=0';
						if(settings.autoplay) movie += "&autoplay=1;";
				
						vimeo_width = pp_dimensions['width'] + '/embed/?moog_width='+ pp_dimensions['width'];
				
						toInject = settings.iframe_markup.replace(/{width}/g,vimeo_width).replace(/{height}/g,pp_dimensions['height']).replace(/{path}/g,movie);
					break;
				
					case 'quicktime':
						pp_dimensions = _fitToViewport(movie_width,movie_height); // Fit item to viewport
						pp_dimensions['height']+=15; pp_dimensions['contentHeight']+=15; pp_dimensions['containerHeight']+=15; // Add space for the control bar
				
						toInject = settings.quicktime_markup.replace(/{width}/g,pp_dimensions['width']).replace(/{height}/g,pp_dimensions['height']).replace(/{wmode}/g,settings.wmode).replace(/{path}/g,pp_images[set_position]).replace(/{autoplay}/g,settings.autoplay);
					break;
				
					case 'flash':
						pp_dimensions = _fitToViewport(movie_width,movie_height); // Fit item to viewport
					
						flash_vars = pp_images[set_position];
						flash_vars = flash_vars.substring(pp_images[set_position].indexOf('flashvars') + 10,pp_images[set_position].length);

						filename = pp_images[set_position];
						filename = filename.substring(0,filename.indexOf('?'));
					
						toInject =  settings.flash_markup.replace(/{width}/g,pp_dimensions['width']).replace(/{height}/g,pp_dimensions['height']).replace(/{wmode}/g,settings.wmode).replace(/{path}/g,filename+'?'+flash_vars);
					break;
				
					case 'iframe':
						pp_dimensions = _fitToViewport(movie_width,movie_height); // Fit item to viewport
				
						frame_url = pp_images[set_position];
						frame_url = frame_url.substr(0,frame_url.indexOf('iframe')-1);

						toInject = settings.iframe_markup.replace(/{width}/g,pp_dimensions['width']).replace(/{height}/g,pp_dimensions['height']).replace(/{path}/g,frame_url);
					break;
					
					case 'ajax':
						doresize = false; // Make sure the dimensions are not resized.
						pp_dimensions = _fitToViewport(movie_width,movie_height);
						doresize = true; // Reset the dimensions
					
						skipInjection = true;
						$.get(pp_images[set_position],function(responseHTML){
							toInject = settings.inline_markup.replace(/{content}/g,responseHTML);
							$pp_pic_holder.find('#pp_full_res')[0].innerHTML = toInject;
							_showContent();
						});
						
					break;
					
					case 'custom':
						pp_dimensions = _fitToViewport(movie_width,movie_height); // Fit item to viewport
					
						toInject = settings.custom_markup;
					break;
				
					case 'inline':
						// to get the item height clone it, apply default width, wrap it in the prettyPhoto containers , then delete
						myClone = $(pp_images[set_position]).clone().append('<br clear="all" />').css({'width':settings.default_width}).wrapInner('<div id="pp_full_res"><div class="pp_inline"></div></div>').appendTo($('body')).show();
						doresize = false; // Make sure the dimensions are not resized.
						pp_dimensions = _fitToViewport($(myClone).width(),$(myClone).height());
						doresize = true; // Reset the dimensions
						$(myClone).remove();
						toInject = settings.inline_markup.replace(/{content}/g,$(pp_images[set_position]).html());
					break;
				};

				if(!imgPreloader && !skipInjection){
					$pp_pic_holder.find('#pp_full_res')[0].innerHTML = toInject;
				
					// Show content
					_showContent();
				};
			});

			return false;
		};

	
		/**
		* Change page in the prettyPhoto modal box
		* @param direction {String} Direction of the paging, previous or next.
		*/
		$.prettyPhoto.changePage = function(direction){
			currentGalleryPage = 0;
			
			if(direction == 'previous') {
				set_position--;
				if (set_position < 0) set_position = $(pp_images).size()-1;
			}else if(direction == 'next'){
				set_position++;
				if(set_position > $(pp_images).size()-1) set_position = 0;
			}else{
				set_position=direction;
			};
			
			rel_index = set_position;

			if(!doresize) doresize = true; // Allow the resizing of the images
			$('.pp_contract').removeClass('pp_contract').addClass('pp_expand');

			_hideContent(function(){ $.prettyPhoto.open(); });
		};


		/**
		* Change gallery page in the prettyPhoto modal box
		* @param direction {String} Direction of the paging, previous or next.
		*/
		$.prettyPhoto.changeGalleryPage = function(direction){
			if(direction=='next'){
				currentGalleryPage ++;

				if(currentGalleryPage > totalPage) currentGalleryPage = 0;
			}else if(direction=='previous'){
				currentGalleryPage --;

				if(currentGalleryPage < 0) currentGalleryPage = totalPage;
			}else{
				currentGalleryPage = direction;
			};
			
			slide_speed = (direction == 'next' || direction == 'previous') ? settings.animation_speed : 0;

			slide_to = currentGalleryPage * (itemsPerPage * itemWidth);

			$pp_gallery.find('ul').animate({left:-slide_to},slide_speed);
		};


		/**
		* Start the slideshow...
		*/
		$.prettyPhoto.startSlideshow = function(){
			if(typeof pp_slideshow == 'undefined'){
				$pp_pic_holder.find('.pp_play').unbind('click').removeClass('pp_play').addClass('pp_pause').click(function(){
					$.prettyPhoto.stopSlideshow();
					return false;
				});
				pp_slideshow = setInterval($.prettyPhoto.startSlideshow,settings.slideshow);
			}else{
				$.prettyPhoto.changePage('next');	
			};
		}


		/**
		* Stop the slideshow...
		*/
		$.prettyPhoto.stopSlideshow = function(){
			$pp_pic_holder.find('.pp_pause').unbind('click').removeClass('pp_pause').addClass('pp_play').click(function(){
				$.prettyPhoto.startSlideshow();
				return false;
			});
			clearInterval(pp_slideshow);
			pp_slideshow=undefined;
		}


		/**
		* Closes prettyPhoto.
		*/
		$.prettyPhoto.close = function(){
			if($pp_overlay.is(":animated")) return;
			
			$.prettyPhoto.stopSlideshow();
			
			$pp_pic_holder.stop().find('object,embed').css('visibility','hidden');
			
			$('div.pp_pic_holder,div.ppt,.pp_fade').fadeOut(settings.animation_speed,function(){ $(this).remove(); });
			
			$pp_overlay.fadeOut(settings.animation_speed, function(){
				if($.browser.msie && $.browser.version == 6) $('select').css('visibility','visible'); // To fix the bug with IE select boxes
				
				if(settings.hideflash) $('object,embed,iframe[src*=youtube],iframe[src*=vimeo]').css('visibility','visible'); // Show the flash
				
				$(this).remove(); // No more need for the prettyPhoto markup
				
				$(window).unbind('scroll.prettyphoto');
				
				clearHashtag();
				
				settings.callback();
				
				doresize = true;
				
				pp_open = false;
				
				delete settings;
			});
		};
	
		/**
		* Set the proper sizes on the containers and animate the content in.
		*/
		function _showContent(){
			$('.pp_loaderIcon').hide();

			// Calculate the opened top position of the pic holder
			projectedTop = scroll_pos['scrollTop'] + ((windowHeight/2) - (pp_dimensions['containerHeight']/2));
			if(projectedTop < 0) projectedTop = 0;

			$ppt.fadeTo(settings.animation_speed,1);

			// Resize the content holder
			$pp_pic_holder.find('.pp_content')
				.animate({
					height:pp_dimensions['contentHeight'],
					width:pp_dimensions['contentWidth']
				},settings.animation_speed);
			
			// Resize picture the holder
			$pp_pic_holder.animate({
				'top': projectedTop,
				'left': (windowWidth/2) - (pp_dimensions['containerWidth']/2),
				width:pp_dimensions['containerWidth']
			},settings.animation_speed,function(){
				$pp_pic_holder.find('.pp_hoverContainer,#fullResImage').height(pp_dimensions['height']).width(pp_dimensions['width']);

				$pp_pic_holder.find('.pp_fade').fadeIn(settings.animation_speed); // Fade the new content

				// Show the nav
				if(isSet && _getFileType(pp_images[set_position])=="image") { $pp_pic_holder.find('.pp_hoverContainer').show(); }else{ $pp_pic_holder.find('.pp_hoverContainer').hide(); }
			
				if(pp_dimensions['resized']){ // Fade the resizing link if the image is resized
					$('a.pp_expand,a.pp_contract').show();
				}else{
					$('a.pp_expand').hide();
				}
				
				if(settings.autoplay_slideshow && !pp_slideshow && !pp_open) $.prettyPhoto.startSlideshow();
				
				settings.changepicturecallback(); // Callback!
				
				pp_open = true;
			});
			
			_insert_gallery();
		};
		
		/**
		* Hide the content...DUH!
		*/
		function _hideContent(callback){
			// Fade out the current picture
			$pp_pic_holder.find('#pp_full_res object,#pp_full_res embed').css('visibility','hidden');
			$pp_pic_holder.find('.pp_fade').fadeOut(settings.animation_speed,function(){
				$('.pp_loaderIcon').show();
				
				callback();
			});
		};
	
		/**
		* Check the item position in the gallery array, hide or show the navigation links
		* @param setCount {integer} The total number of items in the set
		*/
		function _checkPosition(setCount){
			(setCount > 1) ? $('.pp_nav').show() : $('.pp_nav').hide(); // Hide the bottom nav if it's not a set.
		};
	
		/**
		* Resize the item dimensions if it's bigger than the viewport
		* @param width {integer} Width of the item to be opened
		* @param height {integer} Height of the item to be opened
		* @return An array containin the "fitted" dimensions
		*/
		function _fitToViewport(width,height){
			resized = false;

			_getDimensions(width,height);
			
			// Define them in case there's no resize needed
			imageWidth = width, imageHeight = height;

			if( ((pp_containerWidth > windowWidth) || (pp_containerHeight > windowHeight)) && doresize && settings.allow_resize && !percentBased) {
				resized = true, fitting = false;
			
				while (!fitting){
					if((pp_containerWidth > windowWidth)){
						imageWidth = (windowWidth - 200);
						imageHeight = (height/width) * imageWidth;
					}else if((pp_containerHeight > windowHeight)){
						imageHeight = (windowHeight - 200);
						imageWidth = (width/height) * imageHeight;
					}else{
						fitting = true;
					};

					pp_containerHeight = imageHeight, pp_containerWidth = imageWidth;
				};
			
				_getDimensions(imageWidth,imageHeight);
				
				if((pp_containerWidth > windowWidth) || (pp_containerHeight > windowHeight)){
					_fitToViewport(pp_containerWidth,pp_containerHeight)
				};
			};
			
			return {
				width:Math.floor(imageWidth),
				height:Math.floor(imageHeight),
				containerHeight:Math.floor(pp_containerHeight),
				containerWidth:Math.floor(pp_containerWidth) + (settings.horizontal_padding * 2),
				contentHeight:Math.floor(pp_contentHeight),
				contentWidth:Math.floor(pp_contentWidth),
				resized:resized
			};
		};
		
		/**
		* Get the containers dimensions according to the item size
		* @param width {integer} Width of the item to be opened
		* @param height {integer} Height of the item to be opened
		*/
		function _getDimensions(width,height){
			width = parseFloat(width);
			height = parseFloat(height);
			
			// Get the details height, to do so, I need to clone it since it's invisible
			$pp_details = $pp_pic_holder.find('.pp_details');
			$pp_details.width(width);
			detailsHeight = parseFloat($pp_details.css('marginTop')) + parseFloat($pp_details.css('marginBottom'));
			
			$pp_details = $pp_details.clone().addClass(settings.theme).width(width).appendTo($('body')).css({
				'position':'absolute',
				'top':-10000
			});
			detailsHeight += $pp_details.height();
			detailsHeight = (detailsHeight <= 34) ? 36 : detailsHeight; // Min-height for the details
			if($.browser.msie && $.browser.version==7) detailsHeight+=8;
			$pp_details.remove();
			
			// Get the titles height, to do so, I need to clone it since it's invisible
			$pp_title = $pp_pic_holder.find('.ppt');
			$pp_title.width(width);
			titleHeight = parseFloat($pp_title.css('marginTop')) + parseFloat($pp_title.css('marginBottom'));
			$pp_title = $pp_title.clone().appendTo($('body')).css({
				'position':'absolute',
				'top':-10000
			});
			titleHeight += $pp_title.height();
			$pp_title.remove();
			
			// Get the container size, to resize the holder to the right dimensions
			pp_contentHeight = height + detailsHeight;
			pp_contentWidth = width;
			pp_containerHeight = pp_contentHeight + titleHeight + $pp_pic_holder.find('.pp_top').height() + $pp_pic_holder.find('.pp_bottom').height();
			pp_containerWidth = width;
		}
	
		function _getFileType(itemSrc){
			if (itemSrc.match(/youtube\.com\/watch/i) || itemSrc.match(/youtu\.be/i)) {
				return 'youtube';
			}else if (itemSrc.match(/vimeo\.com/i)) {
				return 'vimeo';
			}else if(itemSrc.match(/\b.mov\b/i)){ 
				return 'quicktime';
			}else if(itemSrc.match(/\b.swf\b/i)){
				return 'flash';
			}else if(itemSrc.match(/\biframe=true\b/i)){
				return 'iframe';
			}else if(itemSrc.match(/\bajax=true\b/i)){
				return 'ajax';
			}else if(itemSrc.match(/\bcustom=true\b/i)){
				return 'custom';
			}else if(itemSrc.substr(0,1) == '#'){
				return 'inline';
			}else{
				return 'image';
			};
		};
	
		function _center_overlay(){
			if(doresize && typeof $pp_pic_holder != 'undefined') {
				scroll_pos = _get_scroll();
				contentHeight = $pp_pic_holder.height(), contentwidth = $pp_pic_holder.width();

				projectedTop = (windowHeight/2) + scroll_pos['scrollTop'] - (contentHeight/2);
				if(projectedTop < 0) projectedTop = 0;
				
				if(contentHeight > windowHeight)
					return;

				$pp_pic_holder.css({
					'top': projectedTop,
					'left': (windowWidth/2) + scroll_pos['scrollLeft'] - (contentwidth/2)
				});
			};
		};
	
		function _get_scroll(){
			if (self.pageYOffset) {
				return {scrollTop:self.pageYOffset,scrollLeft:self.pageXOffset};
			} else if (document.documentElement && document.documentElement.scrollTop) { // Explorer 6 Strict
				return {scrollTop:document.documentElement.scrollTop,scrollLeft:document.documentElement.scrollLeft};
			} else if (document.body) {// all other Explorers
				return {scrollTop:document.body.scrollTop,scrollLeft:document.body.scrollLeft};
			};
		};
	
		function _resize_overlay() {
			windowHeight = $(window).height(), windowWidth = $(window).width();
			
			if(typeof $pp_overlay != "undefined") $pp_overlay.height($(document).height()).width(windowWidth);
		};
	
		function _insert_gallery(){
			if(isSet && settings.overlay_gallery && _getFileType(pp_images[set_position])=="image" && (settings.ie6_fallback && !($.browser.msie && parseInt($.browser.version) == 6))) {
				itemWidth = 52+5; // 52 beign the thumb width, 5 being the right margin.
				navWidth = (settings.theme == "facebook" || settings.theme == "pp_default") ? 50 : 30; // Define the arrow width depending on the theme
				
				itemsPerPage = Math.floor((pp_dimensions['containerWidth'] - 100 - navWidth) / itemWidth);
				itemsPerPage = (itemsPerPage < pp_images.length) ? itemsPerPage : pp_images.length;
				totalPage = Math.ceil(pp_images.length / itemsPerPage) - 1;

				// Hide the nav in the case there's no need for links
				if(totalPage == 0){
					navWidth = 0; // No nav means no width!
					$pp_gallery.find('.pp_arrow_next,.pp_arrow_previous').hide();
				}else{
					$pp_gallery.find('.pp_arrow_next,.pp_arrow_previous').show();
				};

				galleryWidth = itemsPerPage * itemWidth;
				fullGalleryWidth = pp_images.length * itemWidth;
				
				// Set the proper width to the gallery items
				$pp_gallery
					.css('margin-left',-((galleryWidth/2) + (navWidth/2)))
					.find('div:first').width(galleryWidth+5)
					.find('ul').width(fullGalleryWidth)
					.find('li.selected').removeClass('selected');
				
				goToPage = (Math.floor(set_position/itemsPerPage) < totalPage) ? Math.floor(set_position/itemsPerPage) : totalPage;

				$.prettyPhoto.changeGalleryPage(goToPage);
				
				$pp_gallery_li.filter(':eq('+set_position+')').addClass('selected');
			}else{
				$pp_pic_holder.find('.pp_content').unbind('mouseenter mouseleave');
				// $pp_gallery.hide();
			}
		}
	
		function _build_overlay(caller){
			// Inject Social Tool markup into General markup
			if(settings.social_tools)
				facebook_like_link = settings.social_tools.replace('{location_href}', encodeURIComponent(location.href)); 

			settings.markup=settings.markup.replace('{pp_social}',(settings.social_tools)?facebook_like_link:''); 
			
			$('body').append(settings.markup); // Inject the markup
			
			$pp_pic_holder = $('.pp_pic_holder') , $ppt = $('.ppt'), $pp_overlay = $('div.pp_overlay'); // Set my global selectors
			
			// Inject the inline gallery!
			if(isSet && settings.overlay_gallery) {
				currentGalleryPage = 0;
				toInject = "";
				for (var i=0; i < pp_images.length; i++) {
					if(!pp_images[i].match(/\b(jpg|jpeg|png|gif)\b/gi)){
						classname = 'default';
						img_src = '';
					}else{
						classname = '';
						img_src = pp_images[i];
					}
					toInject += "<li class='"+classname+"'><a href='#'><img src='" + img_src + "' width='50' alt='' /></a></li>";
				};
				
				toInject = settings.gallery_markup.replace(/{gallery}/g,toInject);
				
				$pp_pic_holder.find('#pp_full_res').after(toInject);
				
				$pp_gallery = $('.pp_pic_holder .pp_gallery'), $pp_gallery_li = $pp_gallery.find('li'); // Set the gallery selectors
				
				$pp_gallery.find('.pp_arrow_next').click(function(){
					$.prettyPhoto.changeGalleryPage('next');
					$.prettyPhoto.stopSlideshow();
					return false;
				});
				
				$pp_gallery.find('.pp_arrow_previous').click(function(){
					$.prettyPhoto.changeGalleryPage('previous');
					$.prettyPhoto.stopSlideshow();
					return false;
				});
				
				$pp_pic_holder.find('.pp_content').hover(
					function(){
						$pp_pic_holder.find('.pp_gallery:not(.disabled)').fadeIn();
					},
					function(){
						$pp_pic_holder.find('.pp_gallery:not(.disabled)').fadeOut();
					});

				itemWidth = 52+5; // 52 beign the thumb width, 5 being the right margin.
				$pp_gallery_li.each(function(i){
					$(this)
						.find('a')
						.click(function(){
							$.prettyPhoto.changePage(i);
							$.prettyPhoto.stopSlideshow();
							return false;
						});
				});
			};
			
			
			// Inject the play/pause if it's a slideshow
			if(settings.slideshow){
				$pp_pic_holder.find('.pp_nav').prepend('<a href="#" class="pp_play">Play</a>')
				$pp_pic_holder.find('.pp_nav .pp_play').click(function(){
					$.prettyPhoto.startSlideshow();
					return false;
				});
			}
			
			$pp_pic_holder.attr('class','pp_pic_holder ' + settings.theme); // Set the proper theme
			
			$pp_overlay
				.css({
					'opacity':0,
					'height':$(document).height(),
					'width':$(window).width()
					})
				.bind('click',function(){
					if(!settings.modal) $.prettyPhoto.close();
				});

			$('a.pp_close').bind('click',function(){ $.prettyPhoto.close(); return false; });

			$('a.pp_expand').bind('click',function(e){
				// Expand the image
				if($(this).hasClass('pp_expand')){
					$(this).removeClass('pp_expand').addClass('pp_contract');
					doresize = false;
				}else{
					$(this).removeClass('pp_contract').addClass('pp_expand');
					doresize = true;
				};
			
				_hideContent(function(){ $.prettyPhoto.open(); });
		
				return false;
			});
		
			$pp_pic_holder.find('.pp_previous, .pp_nav .pp_arrow_previous').bind('click',function(){
				$.prettyPhoto.changePage('previous');
				$.prettyPhoto.stopSlideshow();
				return false;
			});
		
			$pp_pic_holder.find('.pp_next, .pp_nav .pp_arrow_next').bind('click',function(){
				$.prettyPhoto.changePage('next');
				$.prettyPhoto.stopSlideshow();
				return false;
			});
			
			_center_overlay(); // Center it
		};

		if(!pp_alreadyInitialized && getHashtag()){
			pp_alreadyInitialized = true;
			
			// Grab the rel index to trigger the click on the correct element
			hashIndex = getHashtag();
			hashRel = hashIndex;
			hashIndex = hashIndex.substring(hashIndex.indexOf('/')+1,hashIndex.length-1);
			hashRel = hashRel.substring(0,hashRel.indexOf('/'));

			// Little timeout to make sure all the prettyPhoto initialize scripts has been run.
			// Useful in the event the page contain several init scripts.
			setTimeout(function(){ $("a[rel^='"+hashRel+"']:eq("+hashIndex+")").trigger('click'); },50);
		}
		
		return this.unbind('click.prettyphoto').bind('click.prettyphoto',$.prettyPhoto.initialize); // Return the jQuery object for chaining. The unbind method is used to avoid click conflict when the plugin is called more than once
	};
	
	function getHashtag(){
		url = location.href;
		hashtag = (url.indexOf('#!') != -1) ? decodeURI(url.substring(url.indexOf('#!')+2,url.length)) : false;
		return hashtag;
	};
	
	function setHashtag(){
		if(typeof theRel == 'undefined') return; // theRel is set on normal calls, it's impossible to deeplink using the API
		location.hash = '!' + theRel + '/'+rel_index+'/';
	};
	
	function clearHashtag(){
		// Clear the hashtag only if it was set by prettyPhoto
		url = location.href;
		hashtag = (url.indexOf('#!prettyPhoto')) ? true : false;
		if(hashtag) location.hash = "!prettyPhoto";
	}
	
	function getParam(name,url){
	  name = name.replace(/[\[]/,"\\\[").replace(/[\]]/,"\\\]");
	  var regexS = "[\\?&]"+name+"=([^&#]*)";
	  var regex = new RegExp( regexS );
	  var results = regex.exec( url );
	  return ( results == null ) ? "" : results[1];
	}
	
})(jQuery);

var pp_alreadyInitialized = false; // Used for the deep linking to make sure not to call the same function several times.
