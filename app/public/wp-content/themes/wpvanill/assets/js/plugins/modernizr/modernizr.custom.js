/*! modernizr 3.0.0-alpha.3 (Custom Build) | MIT *
 * http://v3.modernizr.com/download/#-boxshadow-checked-csstransforms-csstransforms3d-csstransitions-generatedcontent-smil-svg-touchevents-domprefixes-prefixed-prefixes-printshiv-testallprops-testprop-teststyles !*/
!function(e,t,n){function r(e,t){return typeof e===t}function o(){var e,t,n,o,i,a,s;for(var f in y){if(e=[],t=y[f],t.name&&(e.push(t.name.toLowerCase()),t.options&&t.options.aliases&&t.options.aliases.length))for(n=0;n<t.options.aliases.length;n++)e.push(t.options.aliases[n].toLowerCase());for(o=r(t.fn,"function")?t.fn():t.fn,i=0;i<e.length;i++)a=e[i],s=a.split("."),1===s.length?Modernizr[s[0]]=o:(!Modernizr[s[0]]||Modernizr[s[0]]instanceof Boolean||(Modernizr[s[0]]=new Boolean(Modernizr[s[0]])),Modernizr[s[0]][s[1]]=o),g.push((o?"":"no-")+s.join("-"))}}function i(e){var t=b.className,n=Modernizr._config.classPrefix||"";if(Modernizr._config.enableJSClass){var r=new RegExp("(^|\\s)"+n+"no-js(\\s|$)");t=t.replace(r,"$1"+n+"js$2")}Modernizr._config.enableClasses&&(t+=" "+n+e.join(" "+n),b.className=t)}function a(e){return e.replace(/([a-z])-([a-z])/g,function(e,t,n){return t+n.toUpperCase()}).replace(/^-/,"")}function s(){var e=t.body;return e||(e=w("body"),e.fake=!0),e}function f(e,t,n,r){var o,i,a,f,u="modernizr",c=w("div"),l=s();if(parseInt(n,10))for(;n--;)a=w("div"),a.id=r?r[n]:u+(n+1),c.appendChild(a);return o=["&#173;",'<style id="s',u,'">',e,"</style>"].join(""),c.id=u,(l.fake?l:c).innerHTML+=o,l.appendChild(c),l.fake&&(l.style.background="",l.style.overflow="hidden",f=b.style.overflow,b.style.overflow="hidden",b.appendChild(l)),i=t(c,e),l.fake?(l.parentNode.removeChild(l),b.style.overflow=f,b.offsetHeight):c.parentNode.removeChild(c),!!i}function u(e,t){return!!~(""+e).indexOf(t)}function c(e,t){return function(){return e.apply(t,arguments)}}function l(e,t,n){var o;for(var i in e)if(e[i]in t)return n===!1?e[i]:(o=t[e[i]],r(o,"function")?c(o,n||t):o);return!1}function d(e){return e.replace(/([A-Z])/g,function(e,t){return"-"+t.toLowerCase()}).replace(/^ms-/,"-ms-")}function p(t,r){var o=t.length;if("CSS"in e&&"supports"in e.CSS){for(;o--;)if(e.CSS.supports(d(t[o]),r))return!0;return!1}if("CSSSupportsRule"in e){for(var i=[];o--;)i.push("("+d(t[o])+":"+r+")");return i=i.join(" or "),f("@supports ("+i+") { #modernizr { position: absolute; } }",function(e){return"absolute"==getComputedStyle(e,null).position})}return n}function m(e,t,o,i){function s(){c&&(delete P.style,delete P.modElem)}if(i=r(i,"undefined")?!1:i,!r(o,"undefined")){var f=p(e,o);if(!r(f,"undefined"))return f}var c,l,d,m,h;for(P.style||(c=!0,P.modElem=w("modernizr"),P.style=P.modElem.style),d=e.length,l=0;d>l;l++)if(m=e[l],h=P.style[m],u(m,"-")&&(m=a(m)),P.style[m]!==n){if(i||r(o,"undefined"))return s(),"pfx"==t?m:!0;try{P.style[m]=o}catch(v){}if(P.style[m]!=h)return s(),"pfx"==t?m:!0}return s(),!1}function h(e,t,n,o,i){var a=e.charAt(0).toUpperCase()+e.slice(1),s=(e+" "+N.join(a+" ")+a).split(" ");return r(t,"string")||r(t,"undefined")?m(s,t,o,i):(s=(e+" "+C.join(a+" ")+a).split(" "),l(s,t,n))}function v(e,t,r){return h(e,n,n,t,r)}var g=[];!function(e,t){function n(e,t){var n=e.createElement("p"),r=e.getElementsByTagName("head")[0]||e.documentElement;return n.innerHTML="x<style>"+t+"</style>",r.insertBefore(n.lastChild,r.firstChild)}function r(){var e=w.elements;return"string"==typeof e?e.split(" "):e}function o(e,t){var n=w.elements;"string"!=typeof n&&(n=n.join(" ")),"string"!=typeof e&&(e=e.join(" ")),w.elements=n+" "+e,u(t)}function i(e){var t=C[e[b]];return t||(t={},x++,e[b]=x,C[x]=t),t}function a(e,n,r){if(n||(n=t),v)return n.createElement(e);r||(r=i(n));var o;return o=r.cache[e]?r.cache[e].cloneNode():E.test(e)?(r.cache[e]=r.createElem(e)).cloneNode():r.createElem(e),!o.canHaveChildren||S.test(e)||o.tagUrn?o:r.frag.appendChild(o)}function s(e,n){if(e||(e=t),v)return e.createDocumentFragment();n=n||i(e);for(var o=n.frag.cloneNode(),a=0,s=r(),f=s.length;f>a;a++)o.createElement(s[a]);return o}function f(e,t){t.cache||(t.cache={},t.createElem=e.createElement,t.createFrag=e.createDocumentFragment,t.frag=t.createFrag()),e.createElement=function(n){return w.shivMethods?a(n,e,t):t.createElem(n)},e.createDocumentFragment=Function("h,f","return function(){var n=f.cloneNode(),c=n.createElement;h.shivMethods&&("+r().join().replace(/[\w\-:]+/g,function(e){return t.createElem(e),t.frag.createElement(e),'c("'+e+'")'})+");return n}")(w,t.frag)}function u(e){e||(e=t);var r=i(e);return!w.shivCSS||h||r.hasCSS||(r.hasCSS=!!n(e,"article,aside,dialog,figcaption,figure,footer,header,hgroup,main,nav,section{display:block}mark{background:#FF0;color:#000}template{display:none}")),v||f(e,r),e}function c(e){for(var t,n=e.getElementsByTagName("*"),o=n.length,i=RegExp("^(?:"+r().join("|")+")$","i"),a=[];o--;)t=n[o],i.test(t.nodeName)&&a.push(t.applyElement(l(t)));return a}function l(e){for(var t,n=e.attributes,r=n.length,o=e.ownerDocument.createElement(_+":"+e.nodeName);r--;)t=n[r],t.specified&&o.setAttribute(t.nodeName,t.nodeValue);return o.style.cssText=e.style.cssText,o}function d(e){for(var t,n=e.split("{"),o=n.length,i=RegExp("(^|[\\s,>+~])("+r().join("|")+")(?=[[\\s,>+~#.:]|$)","gi"),a="$1"+_+"\\:$2";o--;)t=n[o]=n[o].split("}"),t[t.length-1]=t[t.length-1].replace(i,a),n[o]=t.join("}");return n.join("{")}function p(e){for(var t=e.length;t--;)e[t].removeNode()}function m(e){function t(){clearTimeout(a._removeSheetTimer),r&&r.removeNode(!0),r=null}var r,o,a=i(e),s=e.namespaces,f=e.parentWindow;return!N||e.printShived?e:("undefined"==typeof s[_]&&s.add(_),f.attachEvent("onbeforeprint",function(){t();for(var i,a,s,f=e.styleSheets,u=[],l=f.length,p=Array(l);l--;)p[l]=f[l];for(;s=p.pop();)if(!s.disabled&&T.test(s.media)){try{i=s.imports,a=i.length}catch(m){a=0}for(l=0;a>l;l++)p.push(i[l]);try{u.push(s.cssText)}catch(m){}}u=d(u.reverse().join("")),o=c(e),r=n(e,u)}),f.attachEvent("onafterprint",function(){p(o),clearTimeout(a._removeSheetTimer),a._removeSheetTimer=setTimeout(t,500)}),e.printShived=!0,e)}var h,v,g="3.7.2",y=e.html5||{},S=/^<|^(?:button|map|select|textarea|object|iframe|option|optgroup)$/i,E=/^(?:a|b|code|div|fieldset|h1|h2|h3|h4|h5|h6|i|label|li|ol|p|q|span|strong|style|table|tbody|td|th|tr|ul)$/i,b="_html5shiv",x=0,C={};!function(){try{var e=t.createElement("a");e.innerHTML="<xyz></xyz>",h="hidden"in e,v=1==e.childNodes.length||function(){t.createElement("a");var e=t.createDocumentFragment();return"undefined"==typeof e.cloneNode||"undefined"==typeof e.createDocumentFragment||"undefined"==typeof e.createElement}()}catch(n){h=!0,v=!0}}();var w={elements:y.elements||"abbr article aside audio bdi canvas data datalist details dialog figcaption figure footer header hgroup main mark meter nav output picture progress section summary template time video",version:g,shivCSS:y.shivCSS!==!1,supportsUnknownElements:v,shivMethods:y.shivMethods!==!1,type:"default",shivDocument:u,createElement:a,createDocumentFragment:s,addElements:o};e.html5=w,u(t);var T=/^$|\b(?:all|print)\b/,_="html5shiv",N=!v&&function(){var n=t.documentElement;return!("undefined"==typeof t.namespaces||"undefined"==typeof t.parentWindow||"undefined"==typeof n.applyElement||"undefined"==typeof n.removeNode||"undefined"==typeof e.attachEvent)}();w.type+=" print",w.shivPrint=m,m(t)}(this,t);var y=[],S={_version:"3.0.0-alpha.3",_config:{classPrefix:"",enableClasses:!0,enableJSClass:!0,usePrefixes:!0},_q:[],on:function(e,t){var n=this;setTimeout(function(){t(n[e])},0)},addTest:function(e,t,n){y.push({name:e,fn:t,options:n})},addAsyncTest:function(e){y.push({name:null,fn:e})}},Modernizr=function(){};Modernizr.prototype=S,Modernizr=new Modernizr,Modernizr.addTest("svg",!!t.createElementNS&&!!t.createElementNS("http://www.w3.org/2000/svg","svg").createSVGRect);var E=S._config.usePrefixes?" -webkit- -moz- -o- -ms- ".split(" "):[];S._prefixes=E;var b=t.documentElement,x="Moz O ms Webkit",C=S._config.usePrefixes?x.toLowerCase().split(" "):[];S._domPrefixes=C;var w=function(){return"function"!=typeof t.createElement?t.createElement(arguments[0]):t.createElement.apply(t,arguments)},T="CSS"in e&&"supports"in e.CSS,_="supportsCSS"in e;Modernizr.addTest("supports",T||_);var N=S._config.usePrefixes?x.split(" "):[];S._cssomPrefixes=N;var k=function(t){var r,o=E.length,i=e.CSSRule;if("undefined"==typeof i)return n;if(!t)return!1;if(t=t.replace(/^@/,""),r=t.replace(/-/g,"_").toUpperCase()+"_RULE",r in i)return"@"+t;for(var a=0;o>a;a++){var s=E[a],f=s.toUpperCase()+"_"+r;if(f in i)return"@-"+s.toLowerCase()+"-"+t}return!1},z=S.testStyles=f;Modernizr.addTest("checked",function(){return z("#modernizr {position:absolute} #modernizr input {margin-left:10px} #modernizr :checked {margin-left:20px;display:block}",function(e){var t=w("input");return t.setAttribute("type","checkbox"),t.setAttribute("checked","checked"),e.appendChild(t),20===t.offsetLeft})}),z('#modernizr{font:0/0 a}#modernizr:after{content:":)";visibility:hidden;font:7px/1 a}',function(e){Modernizr.addTest("generatedcontent",e.offsetHeight>=7)}),Modernizr.addTest("touchevents",function(){var n;if("ontouchstart"in e||e.DocumentTouch&&t instanceof DocumentTouch)n=!0;else{var r=["@media (",E.join("touch-enabled),("),"heartz",")","{#modernizr{top:9px;position:absolute}}"].join("");z(r,function(e){n=9===e.offsetTop})}return n});var j={elem:w("modernizr")};Modernizr._q.push(function(){delete j.elem});var P={style:j.elem.style};Modernizr._q.unshift(function(){delete P.style});S.testProp=function(e,t,r){return m([e],n,t,r)};S.testAllProps=h;S.prefixed=function(e,t,n){return 0===e.indexOf("@")?k(e):(-1!=e.indexOf("-")&&(e=a(e)),t?h(e,t,n):h(e,"pfx"))};S.testAllProps=v,Modernizr.addTest("boxshadow",v("boxShadow","1px 1px",!0)),Modernizr.addTest("csstransforms",function(){return-1===navigator.userAgent.indexOf("Android 2.")&&v("transform","scale(1)",!0)}),Modernizr.addTest("csstransforms3d",function(){var e=!!v("perspective","1px",!0),t=Modernizr._config.usePrefixes;if(e&&(!t||"webkitPerspective"in b.style)){var n;Modernizr.supports?n="@supports (perspective: 1px)":(n="@media (transform-3d)",t&&(n+=",(-webkit-transform-3d)")),n+="{#modernizr{left:9px;position:absolute;height:5px;margin:0;padding:0;border:0}}",z(n,function(t){e=9===t.offsetLeft&&5===t.offsetHeight})}return e}),Modernizr.addTest("csstransitions",v("transition","all",!0));var A={}.toString;Modernizr.addTest("smil",function(){return!!t.createElementNS&&/SVGAnimate/.test(A.call(t.createElementNS("http://www.w3.org/2000/svg","animate")))}),o(),i(g),delete S.addTest,delete S.addAsyncTest;for(var F=0;F<Modernizr._q.length;F++)Modernizr._q[F]();e.Modernizr=Modernizr}(window,document);