!function(){"use strict";var e={d:function(t,r){for(var n in r)e.o(r,n)&&!e.o(t,n)&&Object.defineProperty(t,n,{enumerable:!0,get:r[n]})},o:function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},r:function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})}},t={};e.r(t),e.d(t,{LayoutContext:function(){return _},LayoutContextProvider:function(){return E},WC_FOOTER_SLOT_NAME:function(){return l},WC_HEADER_NAVIGATION_SLOT_NAME:function(){return d},WC_HEADER_PAGE_TITLE_SLOT_NAME:function(){return s},WC_HEADER_SLOT_NAME:function(){return u},WooFooterItem:function(){return i},WooHeaderItem:function(){return c},WooHeaderNavigationItem:function(){return m},WooHeaderPageTitle:function(){return f},getLayoutContextValue:function(){return y},useExtendLayout:function(){return p},useLayoutContext:function(){return w}});var r=window.wp.components,n=window.wp.element,o=window.wc.components;const l="woocommerce_footer_item",i=e=>{let{children:t,order:i=1}=e;return(0,n.createElement)(r.Fill,{name:l},(e=>(0,o.createOrderedChildren)(t,i,e)))};i.Slot=e=>{let{fillProps:t}=e;return(0,n.createElement)(r.Slot,{name:l,fillProps:t},o.sortFillsByOrder)};const u="woocommerce_header_item",a=e=>e&&e.length?`${u}/${e}`:u,c=e=>{let{children:t,order:l=1,name:i=""}=e;return(0,n.createElement)(r.Fill,{name:a(i)},(e=>(0,o.createOrderedChildren)(t,l,e)))};c.Slot=e=>{let{fillProps:t,name:l=""}=e;return(0,n.createElement)(r.Slot,{name:a(l),fillProps:t},o.sortFillsByOrder)};const d="woocommerce_header_navigation_item",m=e=>{let{children:t,order:l=1}=e;return(0,n.createElement)(r.Fill,{name:d},(e=>(0,o.createOrderedChildren)(t,l,e)))};m.Slot=e=>{let{fillProps:t}=e;return(0,n.createElement)(r.Slot,{name:d,fillProps:t},o.sortFillsByOrder)};const s="woocommerce_header_page_title",f=e=>{let{children:t}=e;return(0,n.createElement)(r.Fill,{name:s},t)};f.Slot=e=>{let{fillProps:t}=e;return(0,n.createElement)(r.Slot,{name:s,fillProps:t},(e=>(0,n.createElement)(n.Fragment,null,[...e].pop())))};const _=(0,n.createContext)(void 0),y=function(){let e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:[];return{layoutParts:[...e],extendLayout:t=>{const r=[...e,t];return{...y(r),layoutParts:r}},layoutString:e.join("/"),isDescendantOf:t=>e.includes(t)}},E=e=>{let{children:t,value:r}=e;return(0,n.createElement)(_.Provider,{value:r},t)},w=()=>{const e=(0,n.useContext)(_);if(void 0===e)throw new Error("useLayoutContext must be used within a LayoutContextProvider");return e},p=e=>{const{extendLayout:t}=w();return(0,n.useMemo)((()=>t(e)),[t,e])};(window.wc=window.wc||{}).adminLayout=t}();