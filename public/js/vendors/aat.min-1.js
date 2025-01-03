(function (o, i) {
    typeof exports == 'object' && typeof module < 'u' ? i(exports) : typeof define == 'function' && define.amd ? define(['exports'], i) : ((o = typeof globalThis < 'u' ? globalThis : o || self), i((o.aat = {})));
})(this, function (o) {
    'use strict';
    function i(s, e, t) {
        return Math.min(Math.max(s, e), t);
    }
    function l({ from: s, to: e, percentage: t, unit: n }) {
        return s + (e - s) * t + (n || '');
    }
    const a = { offsetBottom: 0, offsetTop: 0, offsetRight: 0, offsetLeft: 0, addWrapper: !1, wrapperClass: '', container: document.documentElement };
    class c {
        static Container(e = document.documentElement) {
            return new h(e);
        }
        static Element(e, t) {
            return new d(e, { ...a, ...t });
        }
        onScroll(e) {
            (this._handler = e), this._onScroll();
        }
    }
    class h extends c {
        constructor(e) {
            super(), (this._container = e), (e === document.documentElement ? window : e).addEventListener('scroll', this._onScroll.bind(this));
        }
        _onScroll() {
            const e = this._container.scrollTop,
                t = this._container.scrollHeight - this._container.clientHeight,
                n = i(e / t, 0, 1) || 0,
                r = this._container.scrollLeft,
                p = this._container.scrollWidth - this._container.clientWidth,
                _ = i(r / p, 0, 1) || 0;
            this._handler && typeof this._handler == 'function' && requestAnimationFrame(() => this._handler({ percentageY: n, percentageX: _ }));
        }
    }
    class d extends c {
        constructor(e, t) {
            super(), (this._element = e), (this._options = t), (this._lastPercentageY = null), (this._lastPercentageX = null), this._options.addWrapper && this._addWrapper(), (this._options.container === document.documentElement ? window : this._options.container).addEventListener('scroll', this._onScroll.bind(this)), requestAnimationFrame(() => this._onScroll());
        }
        _addWrapper() {
            (this._wrapper = document.createElement('div')), this._options.wrapperClass && this._wrapper.classList.add(this._options.wrapperClass), this._element.parentNode.insertBefore(this._wrapper, this._element), this._wrapper.appendChild(this._element);
        }
        get _containerClientHeight() {
            return this._options.container === window ? window.innerHeight : this._options.container.clientHeight;
        }
        get _containerClientWidth() {
            return this._options.container === window ? window.innerWidth : this._options.container.clientWidth;
        }
        get _elRectRelativeToContainer() {
            const t = (this._options.addWrapper ? this._wrapper : this._element).getBoundingClientRect();
            if (this._options.container === document.documentElement) return t;
            const n = this._options.container.getBoundingClientRect();
            return { width: t.width, height: t.width, left: t.left - n.left, top: t.top - n.top, right: t.right - n.right, bottom: t.bottom - n.bottom };
        }
        _calculatePercentageY() {
            const e = this._elRectRelativeToContainer,
                t = this._containerClientHeight - this._options.offsetBottom,
                n = this._options.offsetTop,
                r = t - n;
            return i((t - e.top) / r, 0, 1);
        }
        _calculatePercentageX() {
            const e = this._elRectRelativeToContainer,
                t = this._containerClientWidth - this._options.offsetRight,
                n = this._options.offsetLeft,
                r = t - n;
            return i((t - e.left) / r, 0, 1);
        }
        _onScroll() {
            const e = this._calculatePercentageY(),
                t = this._calculatePercentageX();
            this._handler && typeof this._handler == 'function' && (this._lastPercentageY !== e || this._lastPercentageX !== t) && requestAnimationFrame(() => this._handler({ percentageY: e, percentageX: t })), (this._lastPercentageY = e), (this._lastPercentageX = t);
        }
    }
    (o.ScrollObserver = c), (o.valueAtPercentage = l), Object.defineProperty(o, Symbol.toStringTag, { value: 'Module' });
});
