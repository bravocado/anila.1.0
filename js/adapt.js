! function (a, b, c, d) {
    function m(a, b) {
        l.href = e, f = e, h(a, b)
    }

    function n() {
        clearTimeout(g);
        var c, h, n, o, p, q, a = b.documentElement ? b.documentElement.clientWidth : 0,
            r = k,
            s = k - 1;
        for (e = ""; r--;)
            if (c = j[r].split("="), h = c[0], q = c[1] ? c[1].replace(/\s/g, "") : d, p = h.match("to"), n = p ? parseInt(h.split("to")[0], 10) : parseInt(h, 10), o = p ? parseInt(h.split("to")[1], 10) : d, !o && r === s && a > n || a > n && o >= a) {
                q && (e = i + q);
                break
            }
        f ? f !== e && m(r, a) : (m(r, a), i && (b.head || b.getElementsByTagName("head")[0]).appendChild(l))
    }

    function o() {
        clearTimeout(g), g = setTimeout(n, 16)
    }
    if (c) {
        var e, f, g, h = c.callback || function () {}, i = c.path ? c.path : "",
            j = c.range,
            k = j.length,
            l = b.createElement("link");
        l.rel = "stylesheet", l.media = "screen", n(), c.dynamic && (a.addEventListener ? a.addEventListener("resize", o, !1) : a.attachEvent ? a.attachEvent("onresize", o) : a.onresize = o)
    }
}(this, this.document, ADAPT_CONFIG);