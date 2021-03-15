<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta tags -->
    <meta charset="UTF-8">
    <meta name="description" content="Choose excellent study programmes abroad in Germany. Apply for top engineering courses, DAAD student exchange, English-taught classes and generous scholarships.">
    <!-- Needed to sent the URL as the referrer from HTTPS to HTTP -->
    <meta name="referrer" content="unsafe-url">
    <script type="text/javascript">
        var _rollbarConfig = {"accessToken":"1b83889ddedb42f4b93c505d7a4530b7","captureUncaught":true,"captureUnhandledRejections":true,"server":{"root":"webpack:\/\/\/.\/"},"payload":{"environment":"production"}};
        !function(r){var e={};function o(n){if(e[n])return e[n].exports;
            var t=e[n]={i:n,l:!1,exports:{}};return r[n].call(t.exports,t,t.exports,o),t.l=!0,t.exports}o.m=r,o.c=e,o.d=function(r,e,n){o.o(r,e)||Object.defineProperty(r,e,{enumerable:!0,get:n})},o.r=function(r){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(r,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(r,"__esModule",{value:!0})},o.t=function(r,e){if(1&e&&(r=o(r)),8&e)return r;
            if(4&e&&"object"==typeof r&&r&&r.__esModule)return r;
            var n=Object.create(null);
            if(o.r(n),Object.defineProperty(n,"default",{enumerable:!0,value:r}),2&e&&"string"!=typeof r)for(var t in r)o.d(n,t,function(e){return r[e]}.bind(null,t));
            return n},o.n=function(r){var e=r&&r.__esModule?function(){return r.default}:function(){return r};return o.d(e,"a",e),e},o.o=function(r,e){return Object.prototype.hasOwnProperty.call(r,e)},o.p="",o(o.s=0)}([function(r,e,o){"use strict";
            var n=o(1),t=o(4);_rollbarConfig=_rollbarConfig||{},_rollbarConfig.rollbarJsUrl=_rollbarConfig.rollbarJsUrl||"https://cdn.rollbar.com/rollbarjs/refs/tags/v2.17.0/rollbar.min.js",_rollbarConfig.async=void 0===_rollbarConfig.async||_rollbarConfig.async;
            var a=n.setupShim(window,_rollbarConfig),l=t(_rollbarConfig);window.rollbar=n.Rollbar,a.loadFull(window,document,!_rollbarConfig.async,_rollbarConfig,l)},function(r,e,o){"use strict";
            var n=o(2);function t(r){return function(){try{return r.apply(this,arguments)}catch(r){try{console.error("[Rollbar]: Internal error",r)}catch(r){}}}}var a=0;function l(r,e){this.options=r,this._rollbarOldOnError=null;var o=a++;
                this.shimId=function(){return o},"undefined"!=typeof window&&window._rollbarShims&&(window._rollbarShims[o]={handler:e,messages:[]})}var i=o(3),s=function(r,e){return new l(r,e)},d=function(r){return new i(s,r)};
            function c(r){return t((function(){var e=this,o=Array.prototype.slice.call(arguments,0),n={shim:e,method:r,args:o,ts:new Date};
                window._rollbarShims[this.shimId()].messages.push(n)}))}l.prototype.loadFull=function(r,e,o,n,a){var l=!1,i=e.createElement("script"),s=e.getElementsByTagName("script")[0],d=s.parentNode;
                i.crossOrigin="",i.src=n.rollbarJsUrl,o||(i.async=!0),i.onload=i.onreadystatechange=t((function(){if(!(l||this.readyState&&"loaded"!==this.readyState&&"complete"!==this.readyState)){i.onload=i.onreadystatechange=null;try{d.removeChild(i)}catch(r){}l=!0,function(){var e;if(void 0===r._rollbarDidLoad){e=new Error("rollbar.js did not load");for(var o,n,t,l,i=0;o=r._rollbarShims[i++];)for(o=o.messages||[];n=o.shift();)for(t=n.args||[],i=0;i<t.length;++i)if("function"==typeof(l=t[i])){l(e);break}}"function"==typeof a&&a(e)}()}})),d.insertBefore(i,s)},l.prototype.wrap=function(r,e,o){try{var n;if(n="function"==typeof e?e:function(){return e||{}},"function"!=typeof r)return r;if(r._isWrap)return r;if(!r._rollbar_wrapped&&(r._rollbar_wrapped=function(){o&&"function"==typeof o&&o.apply(this,arguments);
                try{return r.apply(this,arguments)}catch(o){var e=o;throw e&&("string"==typeof e&&(e=new String(e)),e._rollbarContext=n()||{},e._rollbarContext._wrappedSource=r.toString(),window._rollbarWrappedError=e),e}},r._rollbar_wrapped._isWrap=!0,r.hasOwnProperty))for(var t in r)r.hasOwnProperty(t)&&(r._rollbar_wrapped[t]=r[t]);return r._rollbar_wrapped}catch(e){return r}};
            for(var u="log,debug,info,warn,warning,error,critical,global,configure,handleUncaughtException,handleAnonymousErrors,handleUnhandledRejection,captureEvent,captureDomContentLoaded,captureLoad".split(","),p=0;p<u.length;++p)l.prototype[u[p]]=c(u[p]);
            r.exports={setupShim:function(r,e){if(r){var o=e.globalAlias||"Rollbar";if("object"==typeof r[o])return r[o];r._rollbarShims={},r._rollbarWrappedError=null;
                    var a=new d(e);return t((function(){e.captureUncaught&&(a._rollbarOldOnError=r.onerror,n.captureUncaughtExceptions(r,a,!0),e.wrapGlobalEventHandlers&&n.wrapGlobals(r,a,!0)),e.captureUnhandledRejections&&n.captureUnhandledRejections(r,a,!0);
                        var t=e.autoInstrument;return!1!==e.enabled&&(void 0===t||!0===t||"object"==typeof t&&t.network)&&r.addEventListener&&(r.addEventListener("load",a.captureLoad.bind(a)),r.addEventListener("DOMContentLoaded",a.captureDomContentLoaded.bind(a))),r[o]=a,a}))()}},Rollbar:d}},function(r,e,o){"use strict";function n(r,e,o,n){r._rollbarWrappedError&&(n[4]||(n[4]=r._rollbarWrappedError),n[5]||(n[5]=r._rollbarWrappedError._rollbarContext),r._rollbarWrappedError=null);
            var t=e.handleUncaughtException.apply(e,n);o&&o.apply(r,n),"anonymous"===t&&(e.anonymousErrorsPending+=1)}function t(r,e,o){if(e.hasOwnProperty&&e.hasOwnProperty("addEventListener")){for(var n=e.addEventListener;n._rollbarOldAdd&&n.belongsToShim;)n=n._rollbarOldAdd;
            var t=function(e,o,t){n.call(this,e,r.wrap(o),t)};t._rollbarOldAdd=n,t.belongsToShim=o,e.addEventListener=t;for(var a=e.removeEventListener;a._rollbarOldRemove&&a.belongsToShim;)a=a._rollbarOldRemove;var l=function(r,e,o){a.call(this,r,e&&e._rollbar_wrapped||e,o)};l._rollbarOldRemove=a,l.belongsToShim=o,e.removeEventListener=l}}r.exports={captureUncaughtExceptions:function(r,e,o){if(r){var t;if("function"==typeof e._rollbarOldOnError)t=e._rollbarOldOnError;else if(r.onerror){for(t=r.onerror;t._rollbarOldOnError;)t=t._rollbarOldOnError;e._rollbarOldOnError=t}e.handleAnonymousErrors();
                var a=function(){var o=Array.prototype.slice.call(arguments,0);n(r,e,t,o)};o&&(a._rollbarOldOnError=t),r.onerror=a}},captureUnhandledRejections:function(r,e,o){if(r){"function"==typeof r._rollbarURH&&r._rollbarURH.belongsToShim&&r.removeEventListener("unhandledrejection",r._rollbarURH);
                var n=function(r){var o,n,t;try{o=r.reason}catch(r){o=void 0}try{n=r.promise}catch(r){n="[unhandledrejection] error getting `promise` from event"}try{t=r.detail,!o&&t&&(o=t.reason,n=t.promise)}catch(r){}o||(o="[unhandledrejection] error getting `reason` from event"),e&&e.handleUnhandledRejection&&e.handleUnhandledRejection(o,n)};n.belongsToShim=o,r._rollbarURH=n,r.addEventListener("unhandledrejection",n)}},wrapGlobals:function(r,e,o){if(r){var n,a,l="EventTarget,Window,Node,ApplicationCache,AudioTrackList,ChannelMergerNode,CryptoOperation,EventSource,FileReader,HTMLUnknownElement,IDBDatabase,IDBRequest,IDBTransaction,KeyOperation,MediaController,MessagePort,ModalWindow,Notification,SVGElementInstance,Screen,TextTrack,TextTrackCue,TextTrackList,WebSocket,WebSocketWorker,Worker,XMLHttpRequest,XMLHttpRequestEventTarget,XMLHttpRequestUpload".split(",");for(n=0;n<l.length;++n)r[a=l[n]]&&r[a].prototype&&t(e,r[a].prototype,o)}}}},function(r,e,o){"use strict";function n(r,e){this.impl=r(e,this),this.options=e,function(r){for(var e=function(r){return function(){var e=Array.prototype.slice.call(arguments,0);if(this.impl[r])return this.impl[r].apply(this.impl,e)}},o="log,debug,info,warn,warning,error,critical,global,configure,handleUncaughtException,handleAnonymousErrors,handleUnhandledRejection,_createItem,wrap,loadFull,shimId,captureEvent,captureDomContentLoaded,captureLoad".split(","),n=0;n<o.length;n++)r[o[n]]=e(o[n])}(n.prototype)}n.prototype._swapAndProcessMessages=function(r,e){var o,n,t;for(this.impl=r(this.options);o=e.shift();)n=o.method,t=o.args,this[n]&&"function"==typeof this[n]&&("captureDomContentLoaded"===n||"captureLoad"===n?this[n].apply(this,[t[0],o.ts]):this[n].apply(this,t));return this},r.exports=n},function(r,e,o){"use strict";r.exports=function(r){return function(e){if(!e&&!window._rollbarInitialized){for(var o,n,t=(r=r||{}).globalAlias||"Rollbar",a=window.rollbar,l=function(r){return new a(r)},i=0;o=window._rollbarShims[i++];)n||(n=o.handler),o.handler._swapAndProcessMessages(l,o.messages);window[t]=n,window._rollbarInitialized=!0}}}}]);;</script>
    <script>
        Rollbar.configure( { checkIgnore: function(isUncaught, args, payload) { return !RegExp('/((CPU[ +]OS|iPhone[ +]OS|CPU[ +]iPhone|CPU IPhone OS)[ +]+(13[_.]4|13[_.]7|14[_.]0|14[_.]3)(?:[_.]d+)?)|(Opera Mini(?:/att)?/?(d+)?(?:.d+)?(?:.d+)?)|(SamsungBrowser/13.0)|(Edge/(87|88)(?:.0)?)|((Chromium|Chrome)/8[6-8].0(?:.d+)?)|(Version/14.0(?:.d+)? Safari/)|(Firefox/(83|84).0.d+)|(Firefox/(83|84).0(pre|[ab]d+[a-z]*)?)/').test(payload.client.javascript.browser); } } );
    </script>
    <!-- Full page caching helper -->
    <script type="text/javascript">
        /* Polyfill the CustomEvent object for IE9+ */
        (function () { if ( typeof window.CustomEvent === "function" ) return false; function CustomEvent ( event, params ) { params = params || { bubbles: false, cancelable: false, detail: undefined };
            var evt = document.createEvent( 'CustomEvent' ); evt.initCustomEvent( event, params.bubbles, params.cancelable, params.detail ); return evt; } CustomEvent.prototype = window.Event.prototype; window.CustomEvent = CustomEvent; })();
        var Fupcah = { isLoaded:false, eventName: 'fupcah-loaded', /** * Initialize the fupcah object. * * Checks if there is a tracking cookie available. If this is not the * case it will attempt to load a 1px transparent gif including this * cookie. * * Once the cookie is loaded it will mark the Fupcah object as loaded, * as reflected in the isLoaded variable. * * @return void */ init: function(){ var self = this; if(document.cookie.search('StudyPortals-trck=') < 0){ var fupcah = new Image(); fupcah.onload = function(){ self.callback(); }; fupcah.src = 'https://www.mastersportal.com/Fupcah.php?t=' + Date.now(); document.head.appendChild(fupcah); if(fupcah.complete){ self.callback(); } } else{ self.callback(); } }, /** * Handles the image onload event. * * @return void */ callback: function(){ var event = new CustomEvent(this.eventName); document.dispatchEvent(event); this.isLoaded = true; }, /** * Event subscriber for the onload event of Fupcah. * * This function subscribes a specified callback to Fupcah. This * function will be called as soon as Fupcah is marked as loaded. * * @param {Function} callback * @return void */ onload: function(callback){ if(this.isLoaded){ callback(); } else{ document.addEventListener(this.eventName, callback); } } }; Fupcah.init();
    </script>
    <!-- Mark the time at which the page loaded -->
    <script type="text/javascript">
        if(window && window.performance && window.performance.mark){ performance.mark('page_load_start_mark'); }
    </script>
    <!-- Shortcut icons --> <!-- Shortcut icons --> <!-- Favicon -->
    <link rel="icon" type="image/png" href="//monet-prtl-co.imgix.net/Shared/Favicons/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="//monet-prtl-co.imgix.net/Shared/Favicons/favicon-16x16.png" sizes="16x16">
    <!-- Apple touch icons -->
    <link href="//monet-prtl-co.imgix.net/Shared/TouchIcons/apple-touch-icon.png" rel="apple-touch-icon" />
    <link href="//monet-prtl-co.imgix.net/Shared/TouchIcons/apple-touch-icon-76x76.png" rel="apple-touch-icon" />
    <link href="//monet-prtl-co.imgix.net/Shared/TouchIcons/apple-touch-icon-120x120.png" rel="apple-touch-icon" />
    <link href="//monet-prtl-co.imgix.net/Shared/TouchIcons/apple-touch-icon-152x152.png" rel="apple-touch-icon" />
    <link href="//monet-prtl-co.imgix.net/Shared/TouchIcons/apple-touch-icon-192x192.png" rel="apple-touch-icon" />
    <link href="//monet-prtl-co.imgix.net/Shared/TouchIcons/apple-touch-icon-512x512.png" rel="apple-touch-icon" />
    <!-- Theme color -->
    <meta name="theme-color" content="#247BA0">
    <!-- Mobile viewport -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Progressive Web App manifest -->
    <link rel="manifest" href="https://www.mastersportal.com/manifest.json">
    <!-- Open Sans -->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
    <!-- Linear icon font -->
    <link rel="preconnect" href="https://d1azc1qln24ryf.cloudfront.net" crossorigin>
    <link rel="stylesheet" href="https://d1azc1qln24ryf.cloudfront.net/26905/Studyportalslineariconset/style-cf.css?tqtgr7">
    <script> window.Meta = { reflector_url: 'https://reflector.prtl.co/', sl_external_url: 'https://sl.prtl.co/' }; </script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@studyportals/vue-config@3.0.0/dist/library.min.js"></script>
    <link rel="canonical" href="https://www.mastersportal.com/countries/11/germany.html">
    <title> Find  Masters in Germany 2021 | Country info | Mastersportal.com  </title>
    <link rel="stylesheet" href="https://www.mastersportal.com/dist/master/shared.2b3058c0fcc31b15d920.css">
    <link rel="stylesheet" href="https://www.mastersportal.com/dist/master/86966230c17b2be6c62590d96a801316de437eb3.844162edca97b8a9175d.css">
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-55961456-1', 'auto', {'allowLinker': true});
        ga('require', 'linker');
        ga('linker:autoLink', ['mastersportal.com']);
        ga('require', 'displayfeatures');

        if(typeof premiums != 'undefined'){

            if(premiums.indexOf('display_premium') !== -1){

                ga('set', 'contentGroup1', 'Premium');
            }
            else if(premiums.indexOf('display_regular') !== -1){

                ga('set', 'contentGroup1', 'Basic');
            }
            else{

                ga('set', 'contentGroup1', 'Other');
            }
        }

        if(window.location.href.indexOf('/search/') === -1){

            ga('send', 'pageview');
        }
    </script>
    <!-- This loads the snowplow tracking script -->
    <script>

        !function(e,o,n,a,s,l,t){e[s]||(e.GlobalSnowplowNamespace=e.GlobalSnowplowNamespace||[],e.GlobalSnowplowNamespace.push(s),e[s]=function(){
                (e[s].q=e[s].q||[]).push(arguments)},e[s].q=e[s].q||[],l=o.createElement(n),
                t=o.getElementsByTagName(n)[0],l.async=1,l.src=a,t.parentNode.insertBefore(l,t)
        )}(window,document,"script","//snow.prtl.co/2-17-3.js","snowplow");

    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@studyportals/modal-dll@1.1.8/dist/modal.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@studyportals/multiselect-dll@1.1.0/dist/multiselect.min.css">
    <link rel="preload" href="https://auth.prtl.co/dist/style.f92bdd7749d8cca5a78b.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="stylesheet" href="https://auth.prtl.co/dist/style.f92bdd7749d8cca5a78b.css"><link rel="preload" href="https://decisionmakingservice.prtl.co/dist/style.679db5ec9c17472ba976.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="stylesheet" href="https://decisionmakingservice.prtl.co/dist/style.679db5ec9c17472ba976.css">
    <link rel="preload" href="https://profile-questionnaires.prtl.co/dist/style.09ea3dc040e073586d65.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="stylesheet" href="https://profile-questionnaires.prtl.co/dist/style.09ea3dc040e073586d65.css">
</head>
<body>
<script type="text/javascript" src="https://studentjs.studyportals.com/bundle.js?version=15" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://anonymous-student.prtl.co/dist/bundle.js?version=3" crossorigin="anonymous"></script>
<!-- ProfileCompletenessTracker -->
<div data-module="" class="Module StudyPortals_Shared_Modules_AdUnit_BaseAdUnitController StudyPortals_Shared_Modules_Country_AdUnitController_AdUnitController StudyPortals_Masters_Modules_Country_AdUnitController_AdUnitController">
    <section class="AdUnit">
        <script async="async" src="https://www.googletagservices.com/tag/js/gpt.js"></script>
        <script> var googletag = googletag || {}; googletag.cmd = googletag.cmd || []; </script>
        <script> googletag.cmd.push(function() { var isSearch = window.location.pathname.includes("/search/"); var adUnits = []; var topCount = 0; window.adSlots = {};  adUnits.push({ dimensions: [ 300, 250 ], code: "all__top_visibility/country__top_visibility", containerID: "div-gpt-ad-1574082208197-0" });  adUnits.forEach(adUnit => { var type; switch(adUnit.dimensions[1]){ case 90: type = "advanced"; break; case 100: type = "standard"; break; case 250: type = "top"; break; } var adSlot = googletag.defineSlot( "/21707809931/" + adUnit.code, adUnit.dimensions, adUnit.containerID ).addService(googletag.pubads());
                if(type !== "standard"){ var mapping = googletag.sizeMapping(); if(isSearch && type === "advanced"){ mapping = mapping .addSize([1096,0], [ adUnit.dimensions ]) .addSize([752,0], []) .addSize([743,0], [ adUnit.dimensions ]); } else if(isSearch && topCount === 1){ mapping = mapping .addSize([984,0], [ adUnit.dimensions ]) .addSize([752,0], []) .addSize([648,0], [ adUnit.dimensions ]); } else{ mapping = mapping .addSize([32 + (type === "top" ? 16 * (topCount++) + 300 * (topCount) : 728), 0], [ adUnit.dimensions ]); } adSlot.defineSizeMapping( mapping .addSize([0, 0], []) .build() ); } window.adSlots[type] = window.adSlots.hasOwnProperty(type) ? window.adSlots[type] : [];
                window.adSlots[type].push(adSlot); }); googletag.pubads().enableSingleRequest();
                googletag.pubads().collapseEmptyDivs();  googletag.pubads().setTargeting("country", ["11"]);
                googletag.pubads().setTargeting("level", ["master"]);  if(isSearch){ googletag.pubads().disableInitialLoad();
                    document.dispatchEvent(new Event('gam_loaded')); } googletag.enableServices(); }); </script>
    </section>
</div>
<div id="galactus">
    <header id="NavBar">
        <div id="SearchRow">
            <div id="SearchRowWrapper" class="col1 no-vertical-padding wrapped">
                <div class="SearchRowBackground">

                </div>
                <div id="SearchRowColBlock" class="colblock no-vertical-margin DisplayFlex">
                    <div class="Brand">
                        <a href="/" title="MastersPortal">
                            <img src="img/1.png" alt="MastersPortal" id="PortalLogo" width="150" height="60" >
                        </a>
                    </div>
                    <div class="HeaderToggle">
                        <div data-module="" class="Module StudyPortals_Shared_Modules_HeaderToggle_HeaderToggle">
                            <section id="HeaderToggle">
                            </section>
                        </div>
                    </div>
                    <div data-module="" class="Module StudyPortals_Shared_Modules_HeaderMainMenu_HeaderMainMenu">
                        <nav id="HeaderMainMenu">
                            <a class="Hidden HeaderToggleItem MainMenuShowButton js-showMainMenuButton">
                                <i class="lnr-menu MainMenuIcon HeaderIcon"></i>
                                <div class="HeaderToggleContent"></div>
                            </a>
                            <a class="MainMenuHideButton js-hideMainMenuButton">
                                <i class="lnr-cross MainMenuIcon HeaderIcon"></i>
                            </a>
                            <ul class="MainMenuSections SectionsNavigation">
                                <li class="SectionNavigationItem" data-menu-section="explore">
                                    <a class="SectionNavigationLink js-SectionNavigationLink">
                                        <i class="SectionNavigationIcon lnr-compass2"></i>
                                        <span class="SectionNavigationLabel">Explore</span>
                                    </a>
                                </li>
                                <li class="SectionNavigationItem" data-menu-section="decide">
                                    <a class="SectionNavigationLink js-SectionNavigationLink">
                                        <i class="SectionNavigationIcon lnr-archery"></i> <span class="SectionNavigationLabel">Decide</span>
                                    </a>
                                </li>
                                <li class="SectionNavigationItem" data-menu-section="apply">
                                    <a class="SectionNavigationLink js-SectionNavigationLink">
                                        <i class="SectionNavigationIcon lnr-paper-plane"></i> <span class="SectionNavigationLabel">Apply</span>
                                    </a>
                                </li>
                            </ul>
                            <ul class="MainMenuSections SectionsContent">
                                <li class="SectionNavigationItem" data-menu-section="explore">
                                    <a class="SectionNavigationLink js-SectionNavigationLink">
                                        <i class="SectionNavigationIcon lnr-compass2"></i>
                                        <span class="SectionNavigationLabel">Explore</span>
                                    </a>
                                    <div class="SectionContent" data-menu-section="explore">
                                        <section class="SectionContentColumn SectionContentColumnLeft">
                                            <div class="SubSectionContentTitle">View disciplines</div>
                                            <ul class="SubSectionContentList SubSectionContentListPrimary">
                                                <li>
                                                    <a href="/search-master-degree" title="Agriculture &amp; Forestry">
                                                        <i class="lnr-tree ContentItemIcon Icons"></i> Agriculture &amp; Forestry
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="/search-master-degree" title="Applied Sciences &amp; Professions">
                                                        <i class="lnr-microscope ContentItemIcon Icons">

                                                        </i> Applied Sciences &amp; Professions
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="/search-master-degree" title="Arts, Design &amp; Architecture">
                                                        <i class="lnr-magic-wand ContentItemIcon Icons"></i> Arts, Design &amp; Architecture
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="/search-master-degree" title="Business &amp; Management">
                                                        <i class="lnr-briefcase ContentItemIcon Icons"></i> Business &amp; Management
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="/search-master-degree" title="Computer Science &amp; IT">
                                                        <i class="lnr-cli ContentItemIcon Icons"></i> Computer Science &amp; IT
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="/search-master-degree" title="Education &amp; Training">
                                                        <i class="lnr-book2 ContentItemIcon Icons"></i> Education &amp; Training
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="/search-master-degree" title="Engineering &amp; Technology">
                                                        <i class="lnr-rulers ContentItemIcon Icons"></i> Engineering &amp; Technology
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="/search-master-degree" title="Environmental Studies &amp; Earth Sciences">
                                                        <i class="lnr-earth ContentItemIcon Icons"></i> Environmental Studies &amp; Earth Sciences
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="/search-master-degree" title="Hospitality, Leisure &amp; Sports">
                                                        <i class="lnr-boat ContentItemIcon Icons"></i> Hospitality, Leisure &amp; Sports
                                                    </a>
                                                </li>
                                                <li> <a href="/search-master-degree" title="Humanities">
                                                        <i class="lnr-pen2 ContentItemIcon Icons"></i> Humanities
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="/search-master-degree" title="Journalism &amp; Media">
                                                        <i class="lnr-camera ContentItemIcon Icons"></i> Journalism &amp; Media
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="/search-master-degree" title="Law">
                                                        <i class="lnr-balance ContentItemIcon Icons"></i> Law
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="/search-master-degree" title="Medicine &amp; Health">
                                                        <i class="lnr-first-aid ContentItemIcon Icons"></i> Medicine &amp; Health
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="/search-master-degree" title="Natural Sciences &amp; Mathematics">
                                                        <i class="lnr-beaker ContentItemIcon Icons"></i> Natural Sciences &amp; Mathematics
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="/search-master-degree" title="Social Sciences">
                                                        <i class="lnr-bubbles ContentItemIcon Icons"></i> Social Sciences
                                                    </a>
                                                </li>
                                            </ul>
                                        </section>
                                        <section class="SectionContentColumn SectionContentColumnRight">
                                            <div class="SubSectionContentTitle">Most popular countries</div>
                                            <ul class="SubSectionContentList">
                                                <li class="SubSectionContentItem">
                                                    <a class="ContentItemLink js-ContentItemLink" href="/countries" title="Netherlands">Netherlands</a>
                                                </li>
                                                <li class="SubSectionContentItem">
                                                    <a class="ContentItemLink js-ContentItemLink" href="/countries" title="France">France</a>
                                                </li>
                                                <li class="SubSectionContentItem">
                                                    <a class="ContentItemLink js-ContentItemLink" href="/countries" title="Germany">Germany</a>
                                                </li>
                                                <li class="SubSectionContentItem">
                                                    <a class="ContentItemLink js-ContentItemLink" href="/countries" title="Norway">Norway</a>
                                                </li>
                                                <li class="SubSectionContentItem">
                                                    <a class="ContentItemLink js-ContentItemLink" href="/countries" title="United Kingdom">United Kingdom</a>
                                                </li>
                                                <li class="SubSectionContentItem">
                                                    <a class="ContentItemLink js-ContentItemLink" href="/countries" title="Canada">Canada</a>
                                                </li>
                                                <li class="SubSectionContentItem">
                                                    <a class="ContentItemLink js-ContentItemLink" href="/countries" title="United States">United States</a>
                                                </li>
                                                <li class="SubSectionContentItem">
                                                    <a class="ContentItemLink js-ContentItemLink" href="/countries" title="Australia">Australia</a>
                                                </li>
                                            </ul>
                                            <a class="SubSectionViewAllLink" href="/countries/all" title="View all countries"> View all countries </a>
                                        </section>
                                    </div>
                                </li>
                                <li class="SectionNavigationItem" data-menu-section="decide">
                                    <a class="SectionNavigationLink js-SectionNavigationLink">
                                        <i class="SectionNavigationIcon lnr-archery"></i>
                                        <span class="SectionNavigationLabel">Decide</span>
                                    </a>
                                    <div class="SectionContent SectionContentDecide" data-menu-section="decide">
                                        <div class="SectionContentColumn SectionContentColumnFullWidth">
                                            <div class="SubSectionContentTitle">Tools to help you decide</div>
                                            <a href="https://www.mastersportal.com/articles/2426/how-to-use-our-best-fit-tool.html" class="SubSectionCtaButton" title="Best Fit">
                                                <i class="lnr-clipboard-check SubSectionCtaIcon"></i>
                                                <span class="SubSectionCtaTitle">Best Fit</span>
                                                <span class="SubSectionCtaDescription">Check your budget and academic fit with your study of choice</span>
                                            </a>
                                            <a href="https://www.mastersportal.com/articles/2649/how-student-reviews-can-help-you-find-the-best-university-for-you-in-2021.html" class="SubSectionCtaButton" title="Student Reviews">
                                                <i class="lnr-reviews SubSectionCtaIcon"></i>
                                                <span class="SubSectionCtaTitle">Student Reviews</span>
                                                <span class="SubSectionCtaDescription">What are students saying about your chosen universities?</span>
                                            </a>
                                        </div>
                                        <section class="SectionContentColumn SectionContentColumnFullWidth">
                                            <div class="SubSectionContentTitle">
                                                University rankings per country
                                            </div>
                                            <ul class="SubSectionContentList SubSectionContentListTwoColumns">
                                                <li class="SubSectionContentItem">
                                                    <a class="ContentItemLink js-ContentItemLink" href="https://www.mastersportal.com/ranking-country/1/netherlands.html"> Netherlands </a>
                                                </li>
                                                <li class="SubSectionContentItem">
                                                    <a class="ContentItemLink js-ContentItemLink" href="https://www.mastersportal.com/ranking-country/10/france.html"> France </a>
                                                </li>
                                                <li class="SubSectionContentItem">
                                                    <a class="ContentItemLink js-ContentItemLink" href="https://www.mastersportal.com/ranking-country/11/germany.html"> Germany </a>
                                                </li>
                                                <li class="SubSectionContentItem">
                                                    <a class="ContentItemLink js-ContentItemLink" href="https://www.mastersportal.com/ranking-country/19/norway.html"> Norway </a>
                                                </li>
                                                <li class="SubSectionContentItem">
                                                    <a class="ContentItemLink js-ContentItemLink" href="https://www.mastersportal.com/ranking-country/30/united-kingdom.html"> United Kingdom </a>
                                                </li>
                                                <li class="SubSectionContentItem">
                                                    <a class="ContentItemLink js-ContentItemLink" href="https://www.mastersportal.com/ranking-country/56/canada.html"> Canada </a>
                                                </li>
                                                <li class="SubSectionContentItem">
                                                    <a class="ContentItemLink js-ContentItemLink" href="https://www.mastersportal.com/ranking-country/82/united-states.html"> United States </a>
                                                </li>
                                                <li class="SubSectionContentItem">
                                                    <a class="ContentItemLink js-ContentItemLink" href="https://www.mastersportal.com/ranking-country/202/australia.html"> Australia </a>
                                                </li>
                                            </ul>
                                        </section>
                                    </div>
                                </li>
                                <li class="SectionNavigationItem" data-menu-section="apply">
                                    <a class="SectionNavigationLink js-SectionNavigationLink">
                                        <i class="SectionNavigationIcon lnr-paper-plane"></i>
                                        <span class="SectionNavigationLabel">Apply</span>
                                    </a>
                                    <div class="SectionContent SectionContentColumnFullWidth" data-menu-section="apply">
                                        <section class="SubSectionContent SubSectionContentSecondary">
                                            <div class="SubSectionContentTitle">Tips to apply</div>
                                            <ul class="SubSectionContentList">
                                                <li class="SubSectionContentItem">
                                                    <a class="ContentItemLink js-ContentItemLink" href="https://www.mastersportal.com/articles/379/what-is-a-transcript-of-records-and-when-do-students-need-one.html" title="What Is a Transcript of Records and When Do Students Need One?">
                                                        What Is a Transcript of Records and When Do Students Need One?
                                                    </a>
                                                </li>
                                                <li class="SubSectionContentItem">
                                                    <a class="ContentItemLink js-ContentItemLink" href="https://www.mastersportal.com/articles/406/write-a-successful-motivation-letter-for-your-masters.html" title="Write a Successful Motivation Letter for Your Master's">
                                                        Write a Successful Motivation Letter for Your Master's
                                                    </a>
                                                </li>
                                                <li class="SubSectionContentItem">
                                                    <a class="ContentItemLink js-ContentItemLink" href="https://www.mastersportal.com/articles/1941/how-to-apply-to-universities-worldwide-and-tips-for-being-accepted-in-2021.html" title="How to Apply to Universities Worldwide and Tips for Being Accepted in 2021">
                                                        How to Apply to Universities Worldwide and Tips for Being Accepted in 2021
                                                    </a>
                                                </li>
                                                <li class="SubSectionContentItem">
                                                    <a class="ContentItemLink js-ContentItemLink" href="https://www.mastersportal.com/articles/2589/what-documents-do-you-need-to-apply-for-a-university-abroad.html" title="What Documents Do You Need to Apply for a University Abroad?">
                                                        What Documents Do You Need to Apply for a University Abroad?
                                                    </a>
                                                </li>
                                                <li class="SubSectionContentItem">
                                                    <a class="ContentItemLink js-ContentItemLink" href="https://www.mastersportal.com/articles/2626/6-steps-to-writing-an-awesome-cv-for-your-masters-degree-application.html" title="6 Steps to Writing an Awesome CV for your Master’s Degree Application">
                                                        6 Steps to Writing an Awesome CV for your Master’s Degree Application
                                                    </a>
                                                </li>
                                            </ul>
                                        </section>
                                    </div>
                                </li>
                            </ul>
                            <div id="MainMenuBackground"></div>
                        </nav>
                    </div>
                    <div class="HeaderSearch">
                        <div data-module="" class="Module StudyPortals_Shared_Modules_HeaderSearch_HeaderSearch">
                            <div id="HeaderSearch">
                                <form method="get" action="" class="Form" id="SearchForm">
                                    <div class="InputWrapper">
                                        <input id="What" type="text" value="" name="discipline" class="Keywords AutoCompleteInput" placeholder="What do you want to study?" autocomplete="off" data-type="what" data-order="1" >
                                    </div>
                                    <div class="InputWrapper DesktopOnlyBlock">
                                        <input id="Where" type="text" value="" name="location" class="Keywords AutoCompleteInput" placeholder="Where?" autocomplete="off" data-type="where" data-order="2" >
                                    </div>
                                    <button type="submit" class="SearchButton">
                                        <i class="lnr-magnifier SearchButtonIcon"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="AccountModule HeaderToggleContent">
                        <div data-module="" class="Module StudyPortals_Shared_Modules_Login_HeaderLogin">
                            <div id="HeaderLogin" class="Hidden">
                                <a title="Wishlisted studies" class="Hidden HeaderToggleItem js-wishlistButton">
                                    <i class="lnr-heart WishlistIcon HeaderIcon"></i>
                                    <div class="HeaderToggleContent"></div>
                                </a>
                                <div class="HeaderToggleItem Hidden js-user">
                                    <i class="lnr-user HeaderIcon"> <i class="lnr-notification-inverted ProfilePageIntroductionIcon MobileIcon Hidden"></i>
                                    </i>
                                </div>
                                <a title="Wishlisted studies" class="HeaderWishlistContainer js-wishlistButton">
                                    <i class="lnr-heart WishlistIcon HeaderIcon"></i>
                                    <span class="HeaderWishlistText">Wishlist</span>
                                </a>
                                <button id="LoginButton" class="InUpButton AccountClickable Textlink" data-ga-tracking='{"category":"Profile","action":"Register Incentive Click","label":"Header:Login","event":"click"}'>
                                    <i class="lnr-user UserIcon"></i>
                                    <span class="LoggedInUserText">Sign in</span>
                                </button>
                            </div>
                            <div id="HeaderLoggedIn" class="Hidden">
                                <a title="Wishlisted studies" class="HeaderWishlistContainer DesktopOnlyBlock js-wishlistButton">
                                    <i class="lnr-heart WishlistIcon HeaderIcon"></i>
                                    <span class="HeaderWishlistText">Wishlist</span>
                                </a>
                                <button id="LoggedInToggle" class="InUpButton AccountClickable DesktopOnlyBlock">
                                    <i class="lnr-user UserIcon">
                                        <i class="lnr-notification-inverted ProfilePageIntroductionIcon Hidden"></i>
                                    </i>
                                    <span class="LoggedInUserText"></span>
                                </button>
                                <div id="LoggedInDropDown" class="AccountDropDown">
                                    <ul class="Content">
                                        <li data-clickable="clickable" class="js-menuItem RecommendationsCTA">
                                            <a title="My recommendations" class="MenuItem" href="https://www.mastersportal.com/account/?section=recommendations"> Check personalised recommendations </a>
                                        </li>
                                        <li data-clickable="clickable" class="js-menuItem">
                                            <a title="My account page" class="MenuItem" href="https://www.mastersportal.com/account/#tab:decide"> My profile </a>
                                        </li>
                                        <li data-clickable="clickable" class="js-menuItem">
                                            <a title="My settings page" class="MenuItem" href="https://www.mastersportal.com/account/settings/"> My settings </a>
                                        </li>
                                        <li>
                                            <button id="signOutLink" class="HelperButton MenuItem" data-href="https://www.mastersportal.com/countries/11/germany.html" data-ga-tracking='{"category":"Profile","action":"SignOut","event":"click"}' > Sign out </button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="NavBreadcrumbRow">
            <div class="col1 no-vertical-padding wrapped">
                <div class="colblock no-vertical-margin">
                </div>
            </div>
        </div>
    </header>
    <section id="HeroContainer">
        <div class="HeroContainerHelper">
            <span class="HeroImage js-heroImage" style="background-image: url(&quot;https://storage-prtl-co.imgix.net/endor/countries/11/covers/1546951568_Germany%20-%20314149679.jpg?h=480&amp;fit=crop&amp;w=1920&amp;auto=format,compress&amp;q=40&quot;);"></span>
            <span class="HeroImage HeroImagePlaceholder js-heroImageLowResPlaceholder is-loaded" style="background-image: url(&quot;https://storage-prtl-co.imgix.net/endor/countries/11/covers/1546951568_Germany%20-%20314149679.jpg?h=100&amp;w=240&amp;fit=crop&amp;q=100&amp;blur=100&amp;auto=format,compress&amp;q=40&quot;);"></span>
            <span class="HeroOverlay"></span>
            <div class="HeroContentWrapper">
                <div data-module="" class="Module HeroContentModule StudyPortals_Shared_Modules_Country_HeaderBase_HeaderBase StudyPortals_Masters_Modules_Country_Header_Header">
                    <section class="HeroBackground"></section>
                    <section class="HeroContent">
                        <div class="HeroImageSources js-heroImageSources">
                            <picture class="js-coverImage"> <source media="all and (max-width: 480px)" srcset="//storage-prtl-co.imgix.net/endor/countries/11/covers/1546951568_Germany%20-%20314149679.jpg?h=200&amp;fit=crop&amp;w=480&amp;auto=format,compress&amp;q=40" data-srcset="//storage-prtl-co.imgix.net/endor/countries/11/covers/1546951568_Germany%20-%20314149679.jpg?h=200&amp;fit=crop&amp;w=480&amp;auto=format,compress&amp;q=40">
                                <source media="all and (min-width: 481px) and (max-width: 768px)" srcset="//storage-prtl-co.imgix.net/endor/countries/11/covers/1546951568_Germany%20-%20314149679.jpg?h=200&amp;fit=crop&amp;w=768&amp;auto=format,compress&amp;q=40" data-srcset="//storage-prtl-co.imgix.net/endor/countries/11/covers/1546951568_Germany%20-%20314149679.jpg?h=200&amp;fit=crop&amp;w=768&amp;auto=format,compress&amp;q=40">
                                <source media="all and (min-width: 769px) and (max-width: 1024px)" srcset="//storage-prtl-co.imgix.net/endor/countries/11/covers/1546951568_Germany%20-%20314149679.jpg?h=480&amp;fit=crop&amp;w=1024&amp;auto=format,compress&amp;q=40" data-srcset="//storage-prtl-co.imgix.net/endor/countries/11/covers/1546951568_Germany%20-%20314149679.jpg?h=480&amp;fit=crop&amp;w=1024&amp;auto=format,compress&amp;q=40">
                                <source media="all and (min-width: 1025px)" srcset="//storage-prtl-co.imgix.net/endor/countries/11/covers/1546951568_Germany%20-%20314149679.jpg?h=480&amp;fit=crop&amp;w=1920&amp;auto=format,compress&amp;q=40" data-srcset="//storage-prtl-co.imgix.net/endor/countries/11/covers/1546951568_Germany%20-%20314149679.jpg?h=480&amp;fit=crop&amp;w=1920&amp;auto=format,compress&amp;q=40">
                                <img src="//storage-prtl-co.imgix.net/endor/countries/11/covers/1546951568_Germany%20-%20314149679.jpg?h=480&amp;w=1920&amp;fit=crop&amp;auto=format,compress&amp;q=40" data-src="//storage-prtl-co.imgix.net/endor/countries/11/covers/1546951568_Germany%20-%20314149679.jpg?h=480&amp;w=1920&amp;fit=crop&amp;auto=format,compress&amp;q=40" alt="Germany">
                            </picture>
                        </div>
                        <div class="HeroTextContent">
                            <section id="CountryHeader" data-level="master">
                                <h1>Find Master's Degrees in <span>Germany</span> </h1>
                                <form id="SingleSearch" class="Form" method="get" action="/search">
                                    <input id="KeywordInput" class="js-autoCompleteInput KeywordInput" type="text" name="keywords" autocomplete="off" placeholder="What do you want to study?" data-type="what" data-country="11">
                                    <button type="submit" class="SearchButton"> <i class="lnr-magnifier SearchIcon"></i> <span class="SearchWord">Search</span> </button>
                                    <div class="AutoCompleteContainer Hidden">
                                        <ul class="AutoComplete"></ul>
                                    </div>
                                </form>
                                <div class="js-variation Hidden" data-variation="0"></div>
                            </section>
                        </div>
                    </section>
                </div>
                <div id="BreadcrumbRow">
                    <div class="col1 no-vertical-padding">
                        <div class="no-vertical-margin">  </div>
                    </div>
                    <div class="col1 no-vertical-padding wrapped">
                        <div class="BreadcrumbContainer colblock no-vertical-margin">
                            <div data-module="" class="Module StudyPortals_Shared_Modules_LinkTrailRR_LinkTrailRR">
                                <nav id="LinkTrail">
                                    <ul class="LinkTrail">
                                        <li>
                                            <a href="https://www.mastersportal.com/" title="Home">Home</a>
                                        </li>
                                        <li>
                                            <a href="https://www.mastersportal.com/countries/" title="Countries">Countries</a>
                                        </li>
                                        <li> Germany </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div id="CountryHeaderContainer" class="WhiteBackgroundPane">
        <div class="col1 wrapped">
            <div class="colblock">
                <div data-module="" class="Module StudyPortals_Shared_Modules_Country_Facts_Facts">
                    <section id="CountryFacts">
                        <ul class="CountryFacts">
                            <li class="QuickFact">
                                <i class="CountryQuickFactsLogos lnr-calendar-full"></i>
                                <div class="QFDetails">
                                    <span class="QuickFactsData">Oct-Sep</span>
                                    <span class="QuickFactsLabel">Academic Year</span>
                                </div>
                            </li>
                            <li class="OpenTab QuickFact js-openTab" title="Listed Institutes">
                                <i class="CountryQuickFactsLogos lnr-university"></i>
                                <div class="QFDetails">
                                    <span class="QuickFactsData">Unavailable</span>
                                    <span class="QuickFactsLabel">Listed Institutes</span>
                                </div>
                            </li>
                            <li data-clickable="clickable" class="QuickFact">
                                <i class="CountryQuickFactsLogos lnr-trophy2"></i>
                                <div class="QFDetails">
                                    <a href="https://www.mastersportal.com/ranking-country/11/germany.html" title="Ranked Universities">
                                        <span class="QuickFactsData">69</span>
                                        <span class="QuickFactsLabel">Ranked Universities</span>
                                    </a>
                                </div>
                            </li>
                            <li class="QuickFact HideQFMobile">
                                <i class="CountryQuickFactsLogos lnr-earth"></i>
                                <div class="QFDetails">
                                    <span class="QuickFactsData">250000</span>
                                    <span class="QuickFactsLabel">Int. Students</span>
                                </div>
                            </li>
                            <li class="QuickFact HideQFMobile">
                                <i class="CountryQuickFactsLogos lnr-graduation-hat"></i>
                                <div class="QFDetails">
                                    <span class="QuickFactsData">2500000</span>
                                    <span class="QuickFactsLabel">Students</span>
                                </div>
                            </li>
                            <li class="QuickFact HideQFMobile">
                                <i class="CountryQuickFactsLogos lnr-users2"></i>
                                <div class="QFDetails">
                                    <span class="QuickFactsData">80636124</span>
                                    <span class="QuickFactsLabel">Population</span>
                                </div>
                            </li>
                        </ul>
                    </section>
                </div>
                <div data-module="" class="Module StudyPortals_Shared_Modules_Country_Conversion_Conversion">
                </div>
            </div>
            <div class="colblock">
                <div data-module="" class="Module StudyPortals_Shared_Modules_Country_CountryTest_CountryTest">
                    <aside id="CountryTest" class="HideOnLogin">
                        <img class="Logo" src="//monet-prtl-co.imgix.net/Shared/studyportals_icon_white.svg" alt="Studyportals">
                        <p> Are you sure you can handle the weather in Germany? </p>
                        <a href="/country-test/" data-ga-tracking='{"category":"Profile","action":"Register Incentive Click","label":"Country Test Click"}' title="Take a Free Country Test!" target="_blank" class="TakeTest" > Take the country test! </a>
                    </aside>
                </div>
            </div>
        </div>
    </div>
    <!-- SWITCHABLE CONTENT -->
    <section class="col1 WrappedContent no-vertical-padding">
        <div class="colblock">
            <div data-module="" class="Module StudyPortals_Shared_Modules_Country_ContentSwitcher_ContentSwitcher">
                <div id="ContentSwitcherWrapper" class="ContentSwitcherWrapper">
                    <div id="ContentSwitcher" class="ContentSwitcher">
                        <button type="button" class="ContentButton js-contentButtons" data-id="study"> Study </button>
                        <button type="button" class="ContentButton js-contentButtons" data-id="research_career"> Research &amp; Career </button>
                        <button type="button" class="ContentButton js-contentButtons" data-id="living"> Living </button>
                        <button type="button" class="ContentButton js-contentButtons" data-id="about"> About </button>
                        <button type="button" class="ContentButton js-contentButtons" data-id="institutes"> Universities </button>
                        <button type="button" class="ContentButton js-contentButtons" data-id="visa"> Student visa </button>
                        <button type="button" class="ContentButton js-contentButtons" data-id="work_permit"> Work permit </button>
                        <button type="button" class="ContentButton js-contentButtons" data-id="how_to_apply"> How to Apply </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="SwitchableContent" class="col1 WrappedContent no-vertical-padding">
        <div class="colblock no-vertical-margin">
            <div data-module="Country:study_in" class="Module StudyPortals_Shared_Modules_Country_StudyIn_StudyIn">
                <div id="StudyIn">
                    <h2>Study in Germany</h2>
                    <p>We owe a lot to Germany when it comes to the history of education and universities. Germany is the birthplace of what we call &lsquo;research universities&rsquo; &ndash; big places with ivory towers and libraries where new knowledge is produced every day.
                    <p>This university model has since covered the entire planet, and is basically what most universities are set up for today: to produce knowledge and make new discoveries. Don&rsquo;t you want to
                        <a href="https://www.mastersportal.com/search/masters-degrees/germany/?q=ci-11%7Clv-master" title="study abroad in Germany" target="_blank">study in Germany</a>
                        , the place where it all began?</p>
                    <h4>Why study in Germany</h4>
                    <h5>1. German universities are tution-free</h5>
                    <p>Yes, you've read that right! Almost all public universities in Germany don't charge any tuition fees to international students, regardless of their nationality. This is a huge benefit, one that allows you to only focus on living costs, like accommodation, food, transport, and so on.</p>
                    <h5>2. Germany is at the forefront of Engineering</h5>
                    <p>Engineering and technology in general are highly valued by Germans. Whether we're talking about automobiles, highways, or monumental structures, Germany has it covered.</p>
                    <p>Even Tesla, one of the most important manufacturers of electric vehicles, decided to open a factory in Germany.</p>
                    <h5>3. Top-quality higher education</h5>
                    <p>We've mentioned that German public universities are free, but don't make the mistake of believing that free means low-quality. In Germany, it's exactly the opposite;
                        <a href="https://www.mastersportal.com/ranking-country/11/germany.html" title="Top-ranked universities in Germany" target="_blank">over 60 universities and universities of applied sciences (UAS)</a>
                        are present in the most important international university rankings.</p>
                    <p>German higher education institutions have excellent standards, high expectations, and empower students to become leaders in their academic (and future professional) fields.</p>
                    <h5>4. Achieve German language excellency</h5>
                    <p>Even if you study an English-taught degree, don't miss the opportunity to either improve or start learning German.</p>
                    <p>It is an important language, thanks to Germany's position as one of the world's leading economies. Companies in Germany and other European nations are willing to pay high salaries for graduates with advanced German skills on their CV.</p>
                    <p>It's true that German isn't the easiest language to learn; but if you start with the basics and keep improving slowly, you will soon be surprised by your progress.</p>
                    <h5>5. Excellent job prospects</h5>
                    <p>Graduates with a diploma from German universities are highly valued on job markets, both in Germany and other countries. This happens because everybody recognises the impressive academic level of German education institutions.</p>
                    <p>Whether you want to stay in Germany and become part of their powerful economy or return to your home country or move somewhere else, a German degree will always make you stand out from other job candidates.</p>
                    <h4>What is it like to study in Germany?</h4>
                    <p>Students in Germany enjoy a variety of social events, both at their universities, and around the cities. Take a train to Oktoberfest, find an art festival, or spend a day at one of the many historic museums around every part of Germany.</p>
                    <p><a href="https://www.mastersportal.com/articles/463/tips-and-tricks-you-should-know-when-studying-in-germany.html" title="Tips and tricks for studying in Germany" target="_blank">Germany is also known for offering an exciting multicultural environment</a>
                        ; you&rsquo;ll be in classes with people from all over the world, and you&rsquo;ll notice that several languages are spoken throughout the city you&rsquo;re living in.</p>
                    <p>In your classes, you&rsquo;ll be expected to show attentiveness with the lectures, punctuality, and an interest in participating. This may seem intense&nbsp;but you&rsquo;ll find yourself growing and learning throughout your degree programme.</p>
                    <h4>What to study in Germany</h4>
                    <p>Germany has Bachelor&rsquo;s, Master&rsquo;s and PhD programmes in nearly every subject or field you can imagine, and students all over the world find degree programmes that appeal to them and offer a unique education.</p>
                    <p>Here are some subjects you can find when you go attend a Germany university:</p>
                    <ul>
                        <li>
                            <a href="https://www.mastersportal.com/search/masters-degrees/business-administration-in-germany/?q=ci-11%7Cdi-45%7Clv-master" title="Business Administration degrees in Germany" target="_blank">Business Administration degrees in Germany</a>
                        </li>
                        <li>
                            <a href="https://www.mastersportal.com/search/masters-degrees/mechanical-engineering-in-germany/?q=ci-11%7Cdi-39%7Clv-master" title="Study Mechanical Engineering in Germany" target="_blank">Mechanical Engineering degrees in Germany</a>
                        </li>
                        <li>
                            <a href="https://www.mastersportal.com/search/masters-degrees/computer-science-it-in-germany/?q=ci-11%7Cdi-24%7Clv-master" title="Study Computer Sciences in Germany" target="_blank">Computer Sciences degrees in Germany</a>
                        </li>
                        <li>
                            <a href="https://www.mastersportal.com/search/masters-degrees/biology-in-germany/?q=ci-11%7Cdi-81%7Clv-master" title="Study Biology in Germany" target="_blank">Biology degrees in Germany</a>
                        </li>
                        <li>
                            <a href="https://www.mastersportal.com/search/masters-degrees/economics-in-germany/?q=ci-11%7Cdi-4%7Clv-master" title="Study Economics in Germany" target="_blank">Economics degrees in Germany</a>
                        </li>
                        <li>
                            <a href="https://www.mastersportal.com/search/masters-degrees/environmental-sciences-in-germany/?q=ci-11%7Cdi-315%7Clv-master" title="Study&nbsp;Environmental Sciences in Germany" target="_blank">Environmental Sciences degrees in Germany</a>
                        </li>
                    </ul>
                    <h4>Major cities in Germany</h4>
                    <p>Germany is home to some of the biggest cities in the world, and each one has its own story to tell. Cities all over Germany are perfect for students and can offer you a great cultural life to enjoy time outside of your classes.</p>
                    <p>Check out some of these cities and learn more about what it is like to study there:</p>
                    <ul>
                        <li>
                            <a href="https://www.mastersportal.com/cities/23/berlin.html" title="Study in Berlin" target="_blank">Study in Berlin</a>
                            &nbsp;
                        </li>
                        <li>
                            <a href="https://www.mastersportal.com/cities/325/koln.html" title="Study in Cologne (Koln)" target="_blank">Study in Cologne (Koln)</a>
                        </li>
                        <li>
                            <a href="https://www.mastersportal.com/cities/44/frankfurt-am-main.html" title="Study in Frankfurt am Main" target="_blank">Study in Frankfurt am Main</a>
                            &nbsp;
                        </li>
                        <li>
                            <a href="https://www.mastersportal.eu/cities/24/hamburg.html" title="Study in Hamburg" target="_blank">Study in Hamburg</a>
                        </li>
                        <li>
                            <a href="https://www.mastersportal.com/cities/33/munchen.html" title="Study in&nbsp;Munich" target="_blank">Study in&nbsp;Munich</a>
                            &nbsp;
                        </li>
                    </ul>
                    <h4>Which universities to attend in Germany</h4>
                    <p>You won&rsquo;t have any trouble finding an excellent university to pursue your education in Germany. The whole country has plenty of options and places for you to search for your desired degree options.</p>
                    <p>Germany has different types of universities and institutions, offering classes that can apply to your specific needs. Whether they are those traditional research universities, universities of applied sciences (Fachhochschulen), or specialised art and music institutions, you can find the classes that fit your needs and interests best.</p>
                    <ul>
                        <li>
                            <a href="https://www.mastersportal.com/universities/11376/hochschule-bremen-international-graduate-center.html" title="Hochschule Bremen - International Graduate Center" target="_blank">Hochschule Bremen - International Graduate Center</a>
                        </li>
                        <li>
                            <a href="https://www.mastersportal.com/universities/421/iubh-university-of-applied-sciences.html" title="IUBH University of Applied Science" target="_blank">IUBH University of Applied Science</a>
                        </li>
                        <li>
                            <a href="https://www.mastersportal.com/universities/19945/arden-university-study-center-berlin.html" title="Arden, Study Centre Berlin" target="_blank">Arden, Study Centre Berlin</a>
                        </li>
                        <li>
                            <a href="https://www.mastersportal.com/universities/18308/berlin-school-of-business-and-innovation.html" title="Berlin School of Business and Innovation" target="_blank">Berlin School of Business and Innovation</a>
                        </li>
                        <li>
                            <a href="https://www.mastersportal.com/universities/1928/wismar-university-wings.html" title="Wismar University" target="_blank">Wismar University</a>
                        </li>
                        <li>
                            <a href="https://www.mastersportal.com/universities/17279/university-of-applied-sciences-europe-bits-and-btk.html" title="University of Applied Sciences Europe - BiTS and BTK" target="_blank">University of Applied Sciences Europe - BiTS and BTK</a>
                        </li>
                    </ul>
                    </p>
                    <h2>Practical Information</h2>
                    <p>So, how to apply to a university in Germany? Here are a few important steps:<ul>
                        <li>If you&rsquo;re hoping to be admitted to a university in Germany, follow these steps and make sure to have the right materials prepared for your application.</li>
                    </ul>
                    <ul>
                        <li>Have your graduating certificates (high school or university) ready to show, send, or scan. The application will typically call this an &ldquo;Abitur.&rdquo; You&rsquo;ll want to double check that your degree is recognised by German universities.</li>
                        <li>You might have to take a written entrance examination</li>
                        <li>Make sure to know what the language requirements are, and whether you have to prove skills in German or English before enrolling in a degree programme.</li>
                        <li>Show how you performed as a student, and be sure to know what your Grade Point Average (GPA) was during your studies.</li><li>To help your chances of going to Germany, be sure to apply to more than one university!</li>
                    </ul>
                    <h4>Helpful ways to make sure you qualify for a Germany university</h4>
                    <h5>Take&nbsp;Preparation Courses</h5>
                    <p>These kinds of courses enable degree-seeking students to get an extra educational boost just before they start their Master&rsquo;s degree or other post-graduate degree programmes.</p>
                    <p>Try a pre-M.B.A., pre-Law, or pre-Medicine programme, as well as any other foundation or preparation courses that will allow you to study in the degree programme of your choice.</p>
                    <h5>Improve your English through an&nbsp;English-language prep course</h5>
                    <p>If you&rsquo;re attending a degree programme in Germany, you will sometimes need to prove that your language skills are good enough to participate in the classes and understand the lectures; some schools will require German, while others will require strong English skills. These courses will also prepare you for any of the English-language tests that universities require.</p>
                    <h4>English-language tests</h4>
                    <p>Universities in Germany will want to see proof that you have good English-language skills, so that you can easily succeed in their courses. Almost all German universities accept these official English exams:</p>
                    <ul>
                        <li>
                            <a href="http://link.studyportals.com/take-PTE-article" title="PTE Academic" target="_blank">PTE Academic</a>
                        </li>
                        <li>IELTS</li>
                        <li>TOEFL</li>
                        <li>C1 Advanced</li>
                    </ul>
                    </p>
                </div>
            </div>
            <div data-module="Banner:banner_adunit_country-pages" class="Module StudyPortals_Shared_Modules_AdUnit_BaseAdUnit StudyPortals_Shared_Modules_Country_AdUnit_TopVisibility_TopVisibility">
                <div id="div-gpt-ad-1574082208197-0" class="CountryTopVisibility">
                    <script> googletag.cmd.push(function() { googletag.display('div-gpt-ad-1574082208197-0'); }); </script>
                </div>
            </div>
            <div data-module="MediaThumbnails:media_thumbnails" class="Module StudyPortals_Shared_Modules_MediaThumbnails_MediaThumbnails">  </div>
            <div data-module="MediaGallery:MediaGallery" class="Module StudyPortals_Shared_Modules_MediaGallery_MediaGallery">  </div>
            <div data-module="Country:research_career" class="Module StudyPortals_Shared_Modules_Country_ResearchCareer_ResearchCareer">  </div>
            <div data-module="Country:living" class="Module StudyPortals_Shared_Modules_Country_Living_Living">
                <h2>Living in Germany</h2>
                <p>In terms of tuition fees, Germany is a paradise for international students. Almost all public universities are free for international students, regardless of their country of origin. This means you'll only have to worry about living expenses and other administrative costs.
                <h4>Tuition fees in Germany</h4>
                <p>
                    <a href="https://www.mastersportal.com/articles/358/university-tuition-fees-and-living-costs-in-germany-low-cost-german-degrees.html" title="Tuition fees in Germany" target="_blank">The tuition fees in Germany</a>
                    all depend on where you decide to study. In October 2014, Germany abolished tuition fees for undergraduate and graduate international students (at public universities). However, the south-west state of Baden-W&uuml;rttemberg introduced tuition fees for non-EU/EEA students in the fall of 2017.</p>
                <p>Master&rsquo;s degree students enjoy tuition-free education as long as their degree programme is &ldquo;consecutive&rdquo;, or follows immediately after a Bachelor&rsquo;s degree. However, &ldquo;non-consecutive&rdquo; degrees may require a tuition fee of up to 5,000 EUR per year (at public universities), and 30,000 EUR per year (at private universities).</p>
                <h4>Living costs in Germany</h4>
                <p>Thanks to the people at DAAD, the&nbsp;German Academic Exchange Service, we have a good breakdown of some of the living costs that students ought to expect while studying in Germany. Overall, you should prepare about 700&ndash;1,100 EUR/month.&nbsp;</p>
                <p>Monthly expenses:</p>
                <ul>
                    <li>Rent: 250&ndash;390 EUR</li>
                    <li>Utilities: 100&ndash;200 EUR</li>
                    <li>Food: 170 EUR</li>
                    <li>Clothing: 45 EUR</li>
                    <li>Travel expenses (public transport): 25&ndash;200 EUR</li>
                    <li>Health insurance and medical costs: 80 EUR</li>
                    <li>Phone/internet fees: 35 EUR</li>
                    <li>Course materials (books, learning materials): 20 EUR</li>
                </ul>
                </p>
            </div>
            <div data-module="Country:about" class="Module StudyPortals_Shared_Modules_Country_About_About">
                <h2>About Germany</h2>
                <p>Because of its unique geographical location, Germany is right in the middle of several European countries, languages, histories, and cultures. The official language in Germany is, well&hellip;German, of course! But, in certain areas, you&rsquo;ll also find English, Dutch, French, Turkish, Romani, Danish, and Polish.&nbsp;</p>
                <p>Did you know that Germany is Europe&rsquo;s second largest beer consumer? No wonder everyone associates Germany with those big Beer Steins and Oktoberfest!</p>
                <p>Also, right now, Germany is the world leader in climate and energy policy! What does this mean? Well, at least a third of the country is now powered by renewable energy.</p>
                <p>Germany is a huge country, but if you have a chance to travel, there are several places you&nbsp;must see&nbsp;when you&rsquo;re there.</p>
                <ul>
                    <li>The Rhine Valley</li>
                    <li>Neuschwanstein</li>
                    <li>The Black Forest</li>
                    <li>Cologne Cathedral</li>
                    <li>Minatur Wunderland</li>
                </ul>
            </div>
            <div data-module="Country:institutes" class="Module StudyPortals_Shared_Modules_Country_Institutes_Institutes">
                <div id="CountryStudies">
                    <h2>Universities, colleges and schools in Germany</h2>
                    <div class="City" data-city-name="Aachen">
                        <h3 class="Actuator"> Aachen <span class="InstituteCount"></span>
                            <i class="js-actuator AccordionIcon" data-icon-expendable="lnr-chevron-down" data-icon-retractable="lnr-chevron-up"></i>
                        </h3>
                        <ul class="Content">
                            <li>
                                <a href="https://www.mastersportal.com/universities/19928/aihe-academic-institute-for-higher-education-gmbh.html" title="AIHE  Academic Institute for Higher Education GmbH"> <span>AIHE  Academic Institute for Higher Education GmbH</span> </a>
                                (4 Masters)
                            </li>
                            <li>
                                <a href="https://www.mastersportal.com/universities/18517/accadis-international-school-bad-homburg.html" title="Accadis International School Bad Homburg">
                                    <span>Accadis International School Bad Homburg</span>
                                </a>
                                (9 Masters)
                            </li>
                            <li>
                                <a href="https://www.mastersportal.com/universities/19859/esslingen-university-of-applied-sciences.html" title="Esslingen University of Applied Sciences">
                                    <span>Esslingen University of Applied Sciences</span>
                                </a>
                                (5 Masters)
                            </li>
                            <li>
                                <a href="https://www.mastersportal.com/universities/124/fh-aachen-university-of-applied-sciences.html" title="FH Aachen - University of Applied Sciences">
                                    <span>FH Aachen - University of Applied Sciences</span>
                                </a>
                                (6 Masters)
                            </li>
                            <li>
                                <a href="https://www.mastersportal.com/universities/47/rwth-aachen-university.html" title="RWTH Aachen University">
                                    <span>RWTH Aachen University</span>
                                </a>
                                (16 Masters)
                            </li>
                        </ul>
                    </div>
                    <div class="City" data-city-name="Aalen">
                        <h3 class="Actuator"> Aalen <span class="InstituteCount"></span>
                            <i class="js-actuator AccordionIcon" data-icon-expendable="lnr-chevron-down" data-icon-retractable="lnr-chevron-up"></i>
                        </h3>
                        <ul class="Content">
                            <li>
                                <a href="https://www.mastersportal.com/universities/1289/aalen-university-of-applied-sciences.html" title="Aalen University of Applied Sciences">
                                    <span>Aalen University of Applied Sciences</span> </a> (4 Masters)
                            </li>
                        </ul>
                    </div>
                    <div class="City" data-city-name="Ansbach">
                        <h3 class="Actuator"> Ansbach <span class="InstituteCount"></span>
                            <i class="js-actuator AccordionIcon" data-icon-expendable="lnr-chevron-down" data-icon-retractable="lnr-chevron-up"></i>
                        </h3>
                        <ul class="Content">
                            <li>
                                <a href="https://www.mastersportal.com/universities/1420/ansbach-university-of-applied-science.html" title="Ansbach University of Applied Science">
                                    <span>Ansbach University of Applied Science</span>
                                </a> (1 Master)
                            </li>
                        </ul>
                    </div>
                    <div class="City" data-city-name="Augsburg">
                        <h3 class="Actuator"> Augsburg <span class="InstituteCount"></span>
                            <i class="js-actuator AccordionIcon" data-icon-expendable="lnr-chevron-down" data-icon-retractable="lnr-chevron-up"></i>
                        </h3> <ul class="Content">
                            <li>
                                <a href="https://www.mastersportal.com/universities/1363/university-of-augsburg.html" title="University of Augsburg">
                                    <span>University of Augsburg</span>
                                </a> (1 Master)
                            </li>
                        </ul>
                    </div>
                    <div class="City" data-city-name="Bad Honnef">
                        <h3 class="Actuator"> Bad Honnef <span class="InstituteCount"></span>
                            <i class="js-actuator AccordionIcon" data-icon-expendable="lnr-chevron-down" data-icon-retractable="lnr-chevron-up"></i>
                        </h3>
                        <ul class="Content">
                            <li>
                                <a href="https://www.mastersportal.com/universities/421/iubh-university-of-applied-sciences.html" title="IUBH University of Applied Sciences">
                                    <span>IUBH University of Applied Sciences</span>
                                </a> (26 Masters)
                            </li>
                            <li>
                                <a href="https://www.mastersportal.com/universities/19361/iubh-university-of-applied-sciences-online.html" title="IUBH University of Applied Sciences - Online">
                                    <span>IUBH University of Applied Sciences - Online</span>
                                </a> (18 Masters)
                            </li>
                        </ul>
                    </div>
                    <div class="City" data-city-name="Bayreuth">
                        <h3 class="Actuator"> Bayreuth <span class="InstituteCount"></span>
                            <i class="js-actuator AccordionIcon" data-icon-expendable="lnr-chevron-down" data-icon-retractable="lnr-chevron-up"></i>
                        </h3>
                        <ul class="Content">
                            <li>
                                <a href="https://www.mastersportal.com/universities/46/friedrich-alexander-universitt-erlangen-nrnberg.html" title="Friedrich-Alexander-Universität Erlangen-Nürnberg (FAU)">
                                    <span>Friedrich-Alexander-Universität Erlangen-Nürnberg (FAU)</span>
                                </a> (31 Masters)
                            </li>
                            <li>
                                <a href="https://www.mastersportal.com/universities/233/university-of-bayreuth.html" title="University of Bayreuth">
                                    <span>University of Bayreuth</span>
                                </a> (4 Masters)
                            </li>
                        </ul>
                    </div>
                    <div class="City" data-city-name="Berlin">
                        <h3 class="Actuator"> Berlin <span class="InstituteCount"></span>
                            <i class="js-actuator AccordionIcon" data-icon-expendable="lnr-chevron-down" data-icon-retractable="lnr-chevron-up"></i>
                        </h3>
                        <ul class="Content">
                            <li>
                                <a href="https://www.mastersportal.com/universities/665/alice-salomon-university-of-applied-sciences.html" title="Alice Salomon University of Applied Sciences">
                                    <span>Alice Salomon University of Applied Sciences</span>
                                </a> (1 Master)
                            </li>
                            <li>
                                <a href="https://www.mastersportal.com/universities/19945/arden-university-study-center-berlin.html" title="Arden University, Study Center Berlin">
                                    <span>Arden University, Study Center Berlin</span>
                                </a> (6 Masters)
                            </li>
                            <li>
                                <a href="https://www.mastersportal.com/universities/18520/bbw-university-of-applied-sciences.html" title="BBW University of Applied Sciences">
                                    <span>BBW University of Applied Sciences</span>
                                </a> (3 Masters)
                            </li>
                            <li>
                                <a href="https://www.mastersportal.com/universities/19021/berlin-international-university-of-applied-sciences.html" title="Berlin International University of Applied Sciences">
                                    <span>Berlin International University of Applied Sciences</span>
                                </a> (2 Masters)
                            </li>
                            <li>
                                <a href="https://www.mastersportal.com/universities/18308/berlin-school-of-business-and-innovation.html" title="Berlin School of Business and Innovation">
                                    <span>Berlin School of Business and Innovation</span>
                                </a> (7 Masters)
                            </li>
                            <li>
                                <a href="https://www.mastersportal.com/universities/575/berlin-school-of-economics-and-law.html" title="Berlin School of Economics and Law">
                                    <span>Berlin School of Economics and Law</span>
                                </a> (17 Masters)
                            </li>
                            <li>
                                <a href="https://www.mastersportal.com/universities/1124/beuth-university-of-applied-sciences.html" title="Beuth University of Applied Sciences">
                                    <span>Beuth University of Applied Sciences</span>
                                </a> (1 Master)
                            </li>
                            <li>
                                <a href="https://www.mastersportal.com/universities/864/centre-international-de-formation-europenne-cife.html" title="Centre international de formation européenne - CIFE">
                                    <span>Centre international de formation européenne - CIFE</span>
                                </a> (6 Masters)
                            </li>
                            <li>
                                <a href="https://www.mastersportal.com/universities/131/charit-universittsmedizin-berlin.html" title="Charité - Universitätsmedizin Berlin">
                                    <span>Charité - Universitätsmedizin Berlin</span>
                                </a> (2 Masters)
                            </li>
                            <li>
                                <a href="https://www.mastersportal.com/universities/12360/eit-digital-master-school.html" title="EIT Digital Master School">
                                    <span>EIT Digital Master School</span>
                                </a> (5 Masters)
                            </li>
                            <li>
                                <a href="https://www.mastersportal.com/universities/202/escp-business-school.html" title="ESCP Business School">
                                    <span>ESCP Business School</span>
                                </a> (10 Masters)
                            </li>
                            <li>
                                <a href="https://www.mastersportal.com/universities/977/esmt-berlin.html" title="ESMT Berlin">
                                    <span>ESMT Berlin</span>
                                </a> (9 Masters)
                            </li>
                            <li>
                                <a href="https://www.mastersportal.com/universities/14883/european-academy-in-berlin.html" title="European Academy in Berlin">
                                    <span>European Academy in Berlin</span>
                                </a> (1 Master)
                            </li>
                            <li>
                                <a href="https://www.mastersportal.com/universities/31/freie-universitt-berlin.html" title="Freie Universität Berlin">
                                    <span>Freie Universität Berlin</span>
                                </a> (43 Masters)
                            </li>
                            <li>
                                <a href="https://www.mastersportal.com/universities/14453/fresenius-university-of-applied-sciences.html" title="Fresenius University of Applied Sciences">
                                    <span>Fresenius University of Applied Sciences</span>
                                </a> (11 Masters)
                            </li>
                            <li>
                                <a href="https://www.mastersportal.com/universities/15849/gisma-business-school.html" title="GISMA Business School">
                                    <span>GISMA Business School</span>
                                </a> (24 Masters)
                            </li>
                            <li>
                                <a href="https://www.mastersportal.com/universities/779/hec-paris.html" title="HEC Paris">
                                    <span>HEC Paris</span>
                                </a> (1 Master)
                            </li>
                            <li>
                                <a href="https://www.mastersportal.com/universities/11645/hmkw-university-for-media-communication-and-business.html" title="HMKW University for Media, Communication and Business">
                                    <span>HMKW University for Media, Communication and Business</span>
                                </a> (15 Masters)
                            </li>
                            <li>
                                <a href="https://www.mastersportal.com/universities/517/htw-berlin.html" title="HTW Berlin">
                                    <span>HTW Berlin</span>
                                </a> (7 Masters)
                            </li>
                            <li>
                                <a href="https://www.mastersportal.com/universities/163/hertie-school.html" title="Hertie School">
                                    <span>Hertie School</span>
                                </a> (4 Masters)
                            </li>
                            <li>
                                <a href="https://www.mastersportal.com/universities/44/humboldt-university-berlin.html" title="Humboldt University Berlin">
                                    <span>Humboldt University Berlin</span>
                                </a> (21 Masters)
                            </li>
                            <li>
                                <a href="https://www.mastersportal.com/universities/421/iubh-university-of-applied-sciences.html" title="IUBH University of Applied Sciences">
                                    <span>IUBH University of Applied Sciences</span>
                                </a> (26 Masters)
                            </li>
                            <li>
                                <a href="https://www.mastersportal.com/universities/19361/iubh-university-of-applied-sciences-online.html" title="IUBH University of Applied Sciences - Online">
                                    <span>IUBH University of Applied Sciences - Online</span>
                                </a> (18 Masters)
                            </li>
                            <li>
                                <a href="https://www.mastersportal.com/universities/1437/institute-for-cultural-diplomacy.html" title="Institute for Cultural Diplomacy">
                                    <span>Institute for Cultural Diplomacy</span>
                                </a> (2 Masters)
                            </li>
                            <li>
                                <a href="https://www.mastersportal.com/universities/14287/institute-of-executive-capabilities-steinbeis-university-berlin.html" title="Institute of Executive Capabilities, Steinbeis University Berlin">
                                    <span>Institute of Executive Capabilities, Steinbeis University Berlin</span>
                                </a> (4 Masters)
                            </li>
                            <li>
                                <a href="https://www.mastersportal.com/universities/18715/international-psychoanalytic-university-berlin.html" title="International Psychoanalytic University Berlin">
                                    <span>International Psychoanalytic University Berlin</span>
                                </a> (1 Master)
                            </li>
                            <li>
                                <a href="https://www.mastersportal.com/universities/808/international-school-of-management.html" title="International School of Management (ISM)">
                                    <span>International School of Management (ISM)</span>
                                </a> (23 Masters)
                            </li>
                            <li>
                                <a href="https://www.mastersportal.com/universities/1038/macromedia-university-of-applied-sciences.html" title="Macromedia University of Applied Sciences">
                                    <span>Macromedia University of Applied Sciences</span>
                                </a> (15 Masters)
                            </li>
                            <li>
                                <a href="https://www.mastersportal.com/universities/11214/metfilm-school.html" title="MetFilm School">
                                    <span>MetFilm School</span>
                                </a> (4 Masters)
                            </li>
                            <li>
                                <a href="https://www.mastersportal.com/universities/71/politecnico-di-torino.html" title="Politecnico di Torino">
                                    <span>Politecnico di Torino</span>
                                </a> (5 Masters)
                            </li>
                            <li>
                                <a href="https://www.mastersportal.com/universities/18514/quadriga-university-of-applied-sciences.html" title="Quadriga University of Applied Sciences">
                                    <span>Quadriga University of Applied Sciences</span>
                                </a> (7 Masters)
                            </li>
                            <li>
                                <a href="https://www.mastersportal.com/universities/13352/renac-renewables-academy-ag.html" title="RENAC Renewables Academy AG">
                                    <span>RENAC Renewables Academy AG</span>
                                </a> (1 Master)
                            </li>
                            <li>
                                <a href="https://www.mastersportal.com/universities/308/srh-berlin-university-of-applied-sciences.html" title="SRH Berlin University of Applied Sciences">
                                    <span>SRH Berlin University of Applied Sciences</span>
                                </a> (33 Masters)
                            </li>
                            <li>
                                <a href="https://www.mastersportal.com/universities/18841/school-of-international-business-and-entrepreneurship.html" title="School of International Business and Entrepreneurship (SIBE)">
                                    <span>School of International Business and Entrepreneurship (SIBE)</span>
                                </a> (1 Master)
                            </li>
                            <li>
                                <a href="https://www.mastersportal.com/universities/19795/swiss-school-of-business-and-management.html" title="Swiss School Of Business and Management">
                                    <span>Swiss School Of Business and Management</span>
                                </a> (4 Masters)
                            </li>
                            <li>
                                <a href="https://www.mastersportal.com/universities/278/tu-berlin.html" title="TU Berlin">
                                    <span>TU Berlin</span>
                                </a> (23 Masters)
                            </li>
                            <li>
                                <a href="https://www.mastersportal.com/universities/14017/the-university-of-law-business-school.html" title="The University of Law Business School">
                                    <span>The University of Law Business School</span>
                                </a> (3 Masters)
                            </li>
                            <li>
                                <a href="https://www.mastersportal.com/universities/1481/touro-college-berlin.html" title="Touro College Berlin">
                                    <span>Touro College Berlin</span>
                                </a> (2 Masters)
                            </li>
                            <li>
                                <a href="https://www.mastersportal.com/universities/17279/university-of-europe-for-applied-sciences.html" title="University of Europe for Applied Sciences">
                                    <span>University of Europe for Applied Sciences</span>
                                </a> (17 Masters)
                            </li>
                            <li>
                                <a href="https://www.mastersportal.com/universities/413/whu-otto-beisheim-school-of-management.html" title="WHU - Otto Beisheim School of Management">
                                    <span>WHU - Otto Beisheim School of Management</span>
                                </a> (9 Masters)
                            </li>
                        </ul>
                    </div>
                    <div class="City" data-city-name="Bernburg">
                        <h3 class="Actuator"> Bernburg <span class="InstituteCount"></span>
                            <i class="js-actuator AccordionIcon" data-icon-expendable="lnr-chevron-down" data-icon-retractable="lnr-chevron-up"></i>
                        </h3>
                        <ul class="Content">
                            <li>
                                <a href="https://www.mastersportal.com/universities/1708/anhalt-university-of-applied-sciences.html" title="Anhalt University of Applied Sciences">
                                    <span>Anhalt University of Applied Sciences</span>
                                </a> (7 Masters)
                            </li>
                        </ul>
                    </div>
                    <div class="City" data-city-name="Bielefeld">
                        <h3 class="Actuator"> Bielefeld <span class="InstituteCount"></span>
                            <i class="js-actuator AccordionIcon" data-icon-expendable="lnr-chevron-down" data-icon-retractable="lnr-chevron-up"></i>
                        </h3>
                        <ul class="Content">
                            <li>
                                <a href="https://www.mastersportal.com/universities/527/bielefeld-university.html" title="Bielefeld University">
                                    <span>Bielefeld University</span>
                                </a> (6 Masters)
                            </li>
                            <li>
                                <a href="https://www.mastersportal.com/universities/335/panthon-sorbonne-university.html" title="Panthéon-Sorbonne University">
                                    <span>Panthéon-Sorbonne University</span>
                                </a> (1 Master)
                            </li>
                        </ul>
                    </div>
                    <div class="City" data-city-name="Bochum">
                        <h3 class="Actuator"> Bochum <span class="InstituteCount"></span>
                            <i class="js-actuator AccordionIcon" data-icon-expendable="lnr-chevron-down" data-icon-retractable="lnr-chevron-up"></i>
                        </h3>
                        <ul class="Content">
                            <li>
                                <a href="https://www.mastersportal.com/universities/61/ruhr-university-bochum.html" title="Ruhr University Bochum">
                                    <span>Ruhr University Bochum</span>
                                </a> (15 Masters)
                            </li>
                        </ul>
                    </div>
                    <div class="City" data-city-name="Bonn">
                        <h3 class="Actuator"> Bonn <span class="InstituteCount"></span>
                            <i class="js-actuator AccordionIcon" data-icon-expendable="lnr-chevron-down" data-icon-retractable="lnr-chevron-up"></i>
                        </h3>
                        <ul class="Content">
                            <li>
                                <a href="https://www.mastersportal.com/universities/1309/bonn-rhein-sieg-university-of-applied-sciences.html" title="Bonn-Rhein-Sieg University of Applied Sciences">
                                    <span>Bonn-Rhein-Sieg University of Applied Sciences</span>
                                </a> (10 Masters)
                            </li>
                            <li>
                                <a href="https://www.mastersportal.com/universities/45/university-of-bonn.html" title="University of Bonn">
                                    <span>University of Bonn</span>
                                </a> (25 Masters)
                            </li>
                        </ul>
                    </div>
                    <div class="City" data-city-name="Braunschweig">
                        <h3 class="Actuator"> Braunschweig <span class="InstituteCount"></span>
                            <i class="js-actuator AccordionIcon" data-icon-expendable="lnr-chevron-down" data-icon-retractable="lnr-chevron-up"></i>
                        </h3>
                        <ul class="Content">
                            <li>
                                <a href="https://www.mastersportal.com/universities/536/braunschweig-university-of-technology.html" title="Braunschweig University of Technology">
                                    <span>Braunschweig University of Technology</span>
                                </a> (1 Master)
                            </li>
                            <li>
                                <a href="https://www.mastersportal.com/universities/19922/eit-urban-mobility-master-school.html" title="EIT Urban Mobility Master School">
                                    <span>EIT Urban Mobility Master School</span>
                                </a> (1 Master)
                            </li>
                        </ul>
                    </div>
                    <div class="City" data-city-name="Bremen">
                        <h3 class="Actuator"> Bremen <span class="InstituteCount"></span>
                            <i class="js-actuator AccordionIcon" data-icon-expendable="lnr-chevron-down" data-icon-retractable="lnr-chevron-up"></i>
                        </h3>
                        <ul class="Content">
                            <li>
                                <a href="https://www.mastersportal.com/universities/11376/hochschule-bremen-international-graduate-center.html" title="Hochschule Bremen - International Graduate Center">
                                    <span>Hochschule Bremen - International Graduate Center</span>
                                </a> (22 Masters)
                            </li>
                            <li>
                                <a href="https://www.mastersportal.com/universities/1938/international-max-planck-research-school-of-marine-microbiology.html" title="International Max Planck Research School of Marine Microbiology (IMPRS MarMic)">
                                    <span>International Max Planck Research School of Marine Microbiology (IMPRS MarMic)</span>
                                </a> (1 Master)
                            </li>
                            <li>
                                <a href="https://www.mastersportal.com/universities/408/jacobs-university-bremen.html" title="Jacobs University Bremen">
                                    <span>Jacobs University Bremen</span>
                                </a> (3 Masters)
                            </li>
                            <li>
                                <a href="https://www.mastersportal.com/universities/71/politecnico-di-torino.html" title="Politecnico di Torino">
                                    <span>Politecnico di Torino</span>
                                </a> (5 Masters)
                            </li>
                            <li>
                                <a href="https://www.mastersportal.com/universities/40/university-of-bremen.html" title="University of Bremen">
                                    <span>University of Bremen</span>
                                </a> (25 Masters)
                            </li>
                        </ul>
                    </div>
                    <div class="City" data-city-name="Chemnitz">
                        <h3 class="Actuator"> Chemnitz <span class="InstituteCount"></span>
                            <i class="js-actuator AccordionIcon" data-icon-expendable="lnr-chevron-down" data-icon-retractable="lnr-chevron-up"></i>
                        </h3>
                        <ul class="Content">
                            <li>
                                <a href="https://www.mastersportal.com/universities/10048/chemnitz-university-of-technology.html" title="Chemnitz University of Technology">
                                    <span>Chemnitz University of Technology</span>
                                </a> (9 Masters)
                            </li>
                        </ul>
                    </div>
                    <div class="City" data-city-name="Clausthal-Zellerfeld">
                        <h3 class="Actuator"> Clausthal-Zellerfeld <span class="InstituteCount"></span>
                            <i class="js-actuator AccordionIcon" data-icon-expendable="lnr-chevron-down" data-icon-retractable="lnr-chevron-up"></i>
                        </h3>
                        <ul class="Content">
                            <li>
                                <a href="https://www.mastersportal.com/universities/674/clausthal-university-of-technology.html" title="Clausthal University of Technology">
                                    <span>Clausthal University of Technology</span>
                                </a> (2 Masters)
                            </li>
                        </ul>
                    </div>
                    <div class="City" data-city-name="Coburg">
                        <h3 class="Actuator"> Coburg <span class="InstituteCount"></span>
                            <i class="js-actuator AccordionIcon" data-icon-expendable="lnr-chevron-down" data-icon-retractable="lnr-chevron-up"></i>
                        </h3>
                        <ul class="Content">
                            <li>
                                <a href="https://www.mastersportal.com/universities/818/coburg-university-of-applied-sciences-and-arts.html" title="Coburg University of Applied Sciences and Arts">
                                    <span>Coburg University of Applied Sciences and Arts</span>
                                </a> (2 Masters)
                            </li>
                        </ul>
                    </div>
                    <div class="City" data-city-name="Cottbus">
                        <h3 class="Actuator"> Cottbus <span class="InstituteCount"></span>
                            <i class="js-actuator AccordionIcon" data-icon-expendable="lnr-chevron-down" data-icon-retractable="lnr-chevron-up"></i>
                        </h3>
                        <ul class="Content">
                            <li>
                                <a href="https://www.mastersportal.com/universities/200/the-brandenburg-university-of-technology-cottbus-senftenberg.html" title="The Brandenburg University of Technology Cottbus -  Senftenberg">
                                    <span>The Brandenburg University of Technology Cottbus -  Senftenberg</span>
                                </a> (7 Masters)
                            </li>
                        </ul>
                    </div>
                    <div class="City" data-city-name="Darmstadt">
                        <h3 class="Actuator"> Darmstadt <span class="InstituteCount"></span>
                            <i class="js-actuator AccordionIcon" data-icon-expendable="lnr-chevron-down" data-icon-retractable="lnr-chevron-up"></i>
                        </h3>
                        <ul class="Content">
                            <li>
                                <a href="https://www.mastersportal.com/universities/1359/darmstadt-university-of-applied-sciences.html" title="Darmstadt University of Applied Sciences">
                                    <span>Darmstadt University of Applied Sciences</span>
                                </a> (2 Masters)
                            </li>
                            <li>
                                <a href="https://www.mastersportal.com/universities/53/darmstadt-university-of-technology.html" title="Darmstadt University of Technology">
                                    <span>Darmstadt University of Technology</span>
                                </a> (11 Masters)
                            </li>
                            <li>
                                <a href="https://www.mastersportal.com/universities/19143/eit-rawmaterials-academy.html" title="EIT RawMaterials Academy">
                                    <span>EIT RawMaterials Academy</span>
                                </a> (4 Masters)
                            </li>
                        </ul>
                    </div>
                    <div class="City" data-city-name="Deggendorf">
                        <h3 class="Actuator"> Deggendorf <span class="InstituteCount"></span>
                            <i class="js-actuator AccordionIcon" data-icon-expendable="lnr-chevron-down" data-icon-retractable="lnr-chevron-up"></i>
                        </h3>
                        <ul class="Content">
                            <li>
                                <a href="https://www.mastersportal.com/universities/836/deggendorf-institute-of-technology.html" title="Deggendorf Institute of Technology">
                                    <span>Deggendorf Institute of Technology</span>
                                </a> (7 Masters)
                            </li>
                        </ul>
                    </div>
                    <div class="City" data-city-name="Dortmund">
                        <h3 class="Actuator"> Dortmund <span class="InstituteCount"></span>
                            <i class="js-actuator AccordionIcon" data-icon-expendable="lnr-chevron-down" data-icon-retractable="lnr-chevron-up"></i>
                        </h3>
                        <ul class="Content">
                            <li>
                                <a href="https://www.mastersportal.com/universities/808/international-school-of-management.html" title="International School of Management (ISM)">
                                    <span>International School of Management (ISM)</span>
                                </a> (23 Masters)
                            </li>
                            <li>
                                <a href="https://www.mastersportal.com/universities/60/tu-dortmund-university.html" title="TU Dortmund University"> <span>TU Dortmund University</span>
                                </a> (5 Masters)
                            </li>
                        </ul>
                    </div>
                    <div class="City" data-city-name="Dresden">
                        <h3 class="Actuator"> Dresden <span class="InstituteCount"></span>
                            <i class="js-actuator AccordionIcon" data-icon-expendable="lnr-chevron-down" data-icon-retractable="lnr-chevron-up"></i>
                        </h3>
                        <ul class="Content">
                            <li>
                                <a href="https://www.mastersportal.com/universities/1162/ihe-delft-institute-for-water-education.html" title="IHE Delft Institute for Water Education">
                                    <span>IHE Delft Institute for Water Education</span>
                                </a> (2 Masters)
                            </li>
                            <li>
                                <a href="https://www.mastersportal.com/universities/308/srh-berlin-university-of-applied-sciences.html" title="SRH Berlin University of Applied Sciences">
                                    <span>SRH Berlin University of Applied Sciences</span>
                                </a> (33 Masters)
                            </li>
                            <li>
                                <a href="https://www.mastersportal.com/universities/50/tu-dresden.html" title="TU Dresden">
                                    <span>TU Dresden</span>
                                </a> (17 Masters)
                            </li>
                        </ul>
                    </div>
                    <div class="City" data-city-name="Duisburg">
                        <h3 class="Actuator"> Duisburg <span class="InstituteCount"></span>
                            <i class="js-actuator AccordionIcon" data-icon-expendable="lnr-chevron-down" data-icon-retractable="lnr-chevron-up"></i>
                        </h3>
                        <ul class="Content">
                            <li>
                                <a href="https://www.mastersportal.com/universities/334/university-of-duisburg-essen.html" title="University of Duisburg-Essen">
                                    <span>University of Duisburg-Essen</span>
                                </a> (19 Masters)
                            </li>
                        </ul>
                    </div>
                    <div class="City" data-city-name="Düsseldorf">
                        <h3 class="Actuator"> Düsseldorf <span class="InstituteCount"></span>
                            <i class="js-actuator AccordionIcon" data-icon-expendable="lnr-chevron-down" data-icon-retractable="lnr-chevron-up"></i>
                        </h3>
                        <ul class="Content">
                            <li>
                                <a href="https://www.mastersportal.com/universities/10201/heinrich-heine-university-dsseldorf.html" title="Heinrich Heine University Düsseldorf">
                                    <span>Heinrich Heine University Düsseldorf</span>
                                </a> (1 Master)
                            </li>
                            <li>
                                <a href="https://www.mastersportal.com/universities/71/politecnico-di-torino.html" title="Politecnico di Torino">
                                    <span>Politecnico di Torino</span>
                                </a> (5 Masters)
                            </li>
                            <li>
                                <a href="https://www.mastersportal.com/universities/788/university-of-applied-sciences-dsseldorf.html" title="University of Applied Sciences Düsseldorf">
                                    <span>University of Applied Sciences Düsseldorf</span>
                                </a> (1 Master)
                            </li>
                            <li>
                                <a href="https://www.mastersportal.com/universities/413/whu-otto-beisheim-school-of-management.html" title="WHU - Otto Beisheim School of Management">
                                    <span>WHU - Otto Beisheim School of Management</span>
                                </a> (9 Masters)
                            </li>
                        </ul>
                    </div>
                    <div class="City" data-city-name="Eberswalde">
                        <h3 class="Actuator"> Eberswalde <span class="InstituteCount"></span>
                            <i class="js-actuator AccordionIcon" data-icon-expendable="lnr-chevron-down" data-icon-retractable="lnr-chevron-up"></i>
                        </h3>
                        <ul class="Content">
                            <li>
                                <a href="https://www.mastersportal.com/universities/1177/eberswalde-university-for-sustainable-development.html" title="Eberswalde University for Sustainable Development">
                                    <span>Eberswalde University for Sustainable Development</span>
                                </a> (1 Master)
                            </li>
                        </ul>
                    </div>
                    <div class="City" data-city-name="Emden">
                        <h3 class="Actuator"> Emden <span class="InstituteCount"></span>
                            <i class="js-actuator AccordionIcon" data-icon-expendable="lnr-chevron-down" data-icon-retractable="lnr-chevron-up"></i>
                        </h3>
                        <ul class="Content">
                            <li>
                                <a href="https://www.mastersportal.com/universities/18716/university-of-applied-sciences-emdenleer.html" title="University of Applied Sciences Emden/leer">
                                    <span>University of Applied Sciences Emden/leer</span>
                                </a> (1 Master)
                            </li>
                        </ul>
                    </div>
                    <div class="City" data-city-name="Erfurt">
                        <h3 class="Actuator"> Erfurt <span class="InstituteCount"></span>
                            <i class="js-actuator AccordionIcon" data-icon-expendable="lnr-chevron-down" data-icon-retractable="lnr-chevron-up"></i>
                        </h3>
                        <ul class="Content">
                            <li>
                                <a href="https://www.mastersportal.com/universities/556/university-of-erfurt.html" title="University of Erfurt">
                                    <span>University of Erfurt</span>
                                </a> (3 Masters)
                            </li>
                        </ul>
                    </div>
                    <div class="City" data-city-name="Erlangen">
                        <h3 class="Actuator"> Erlangen <span class="InstituteCount"></span>
                            <i class="js-actuator AccordionIcon" data-icon-expendable="lnr-chevron-down" data-icon-retractable="lnr-chevron-up"></i>
                        </h3>
                        <ul class="Content">
                            <li>
                                <a href="https://www.mastersportal.com/universities/46/friedrich-alexander-universitt-erlangen-nrnberg.html" title="Friedrich-Alexander-Universität Erlangen-Nürnberg (FAU)">
                                    <span>Friedrich-Alexander-Universität Erlangen-Nürnberg (FAU)</span>
                                </a> (31 Masters)
                            </li>
                            <li>
                                <a href="https://www.mastersportal.com/universities/19860/max-planck-school-of-photonics.html" title="Max Planck School of Photonics">
                                    <span>Max Planck School of Photonics</span>
                                </a> (1 Master)
                            </li>
                        </ul>
                    </div>
                    <div class="City" data-city-name="Essen">
                        <h3 class="Actuator"> Essen <span class="InstituteCount"></span>
                            <i class="js-actuator AccordionIcon" data-icon-expendable="lnr-chevron-down" data-icon-retractable="lnr-chevron-up"></i>
                        </h3>
                        <ul class="Content">
                            <li>
                                <a href="https://www.mastersportal.com/universities/585/fom-university-of-applied-sciences.html" title="FOM University of Applied Sciences">
                                    <span>FOM University of Applied Sciences</span>
                                </a> (1 Master)
                            </li>
                            <li>
                                <a href="https://www.mastersportal.com/universities/334/university-of-duisburg-essen.html" title="University of Duisburg-Essen">
                                    <span>University of Duisburg-Essen</span>
                                </a> (19 Masters)
                            </li>
                        </ul>
                    </div>
                    <div class="City" data-city-name="Esslingen">
                        <h3 class="Actuator"> Esslingen <span class="InstituteCount"></span>
                            <i class="js-actuator AccordionIcon" data-icon-expendable="lnr-chevron-down" data-icon-retractable="lnr-chevron-up"></i>
                        </h3>
                        <ul class="Content">
                            <li>
                                <a href="https://www.mastersportal.com/universities/19859/esslingen-university-of-applied-sciences.html" title="Esslingen University of Applied Sciences">
                                    <span>Esslingen University of Applied Sciences</span>
                                </a> (5 Masters)
                            </li>
                        </ul>
                    </div>
                    <div class="City" data-city-name="Flensburg">
                        <h3 class="Actuator"> Flensburg <span class="InstituteCount"></span>
                            <i class="js-actuator AccordionIcon" data-icon-expendable="lnr-chevron-down" data-icon-retractable="lnr-chevron-up"></i>
                        </h3>
                        <ul class="Content">
                            <li>
                                <a href="https://www.mastersportal.com/universities/927/europa-universitt-flensburg.html" title="Europa-Universität Flensburg">
                                    <span>Europa-Universität Flensburg</span>
                                </a> (5 Masters)
                            </li>
                            <li>
                                <a href="https://www.mastersportal.com/universities/913/flensburg-university-of-applied-sciences.html" title="Flensburg University of Applied Sciences">
                                    <span>Flensburg University of Applied Sciences</span>
                                </a> (2 Masters)
                            </li>
                        </ul>
                    </div>
                    <div class="City" data-city-name="Frankfurt (Oder)">
                        <h3 class="Actuator"> Frankfurt (Oder) <span class="InstituteCount"></span>
                            <i class="js-actuator AccordionIcon" data-icon-expendable="lnr-chevron-down" data-icon-retractable="lnr-chevron-up"></i>
                        </h3>
                        <ul class="Content">
                            <li>
                                <a href="https://www.mastersportal.com/universities/282/european-university-viadrina-frankfurt.html" title="European University Viadrina Frankfurt (Oder)">
                                    <span>European University Viadrina Frankfurt (Oder)</span>
                                </a> (2 Masters)
                            </li>
                            <li>
                                <a href="https://www.mastersportal.com/universities/71/politecnico-di-torino.html" title="Politecnico di Torino">
                                    <span>Politecnico di Torino</span>
                                </a> (5 Masters)
                            </li>
                        </ul>
                    </div>
                    <div class="City" data-city-name="Frankfurt am Main">
                        <h3 class="Actuator"> Frankfurt am Main <span class="InstituteCount"></span>
                            <i class="js-actuator AccordionIcon" data-icon-expendable="lnr-chevron-down" data-icon-retractable="lnr-chevron-up"></i>
                        </h3>
                        <ul class="Content">
                            <li>
                                <a href="https://www.mastersportal.com/universities/604/frankfurt-school-of-finance-and-management.html" title="Frankfurt School of Finance and Management">
                                    <span>Frankfurt School of Finance and Management</span>
                                </a> (7 Masters)
                            </li>
                            <li>
                                <a href="https://www.mastersportal.com/universities/687/frankfurt-university-of-applied-science.html" title="Frankfurt University of Applied Science">
                                    <span>Frankfurt University of Applied Science</span>
                                </a> (6 Masters)
                            </li>
                            <li>
                                <a href="https://www.mastersportal.com/universities/54/goethe-university-frankfurt.html" title="Goethe University Frankfurt">
                                    <span>Goethe University Frankfurt</span>
                                </a> (34 Masters)
                            </li>
                            <li>
                                <a href="https://www.mastersportal.com/universities/11645/hmkw-university-for-media-communication-and-business.html" title="HMKW University for Media, Communication and Business">
                                    <span>HMKW University for Media, Communication and Business</span>
                                </a> (15 Masters)
                            </li>
                            <li>
                                <a href="https://www.mastersportal.com/universities/808/international-school-of-management.html" title="International School of Management (ISM)">
                                    <span>International School of Management (ISM)</span>
                                </a> (23 Masters)
                            </li>
                        </ul>
                    </div>
                    <div class="City" data-city-name="Freiberg">
                        <h3 class="Actuator"> Freiberg <span class="InstituteCount"></span>
                            <i class="js-actuator AccordionIcon" data-icon-expendable="lnr-chevron-down" data-icon-retractable="lnr-chevron-up"></i>
                        </h3>
                        <ul class="Content">
                            <li>
                                <a href="https://www.mastersportal.com/universities/19143/eit-rawmaterials-academy.html" title="EIT RawMaterials Academy">
                                    <span>EIT RawMaterials Academy</span>
                                </a> (4 Masters)
                            </li>
                            <li>
                                <a href="https://www.mastersportal.com/universities/747/tu-bergakademie-freiberg.html" title="TU Bergakademie Freiberg">
                                    <span>TU Bergakademie Freiberg</span>
                                </a> (13 Masters)
                            </li>
                        </ul>
                    </div>
                    <div class="City" data-city-name="Freiburg">
                        <h3 class="Actuator"> Freiburg <span class="InstituteCount"></span>
                            <i class="js-actuator AccordionIcon" data-icon-expendable="lnr-chevron-down" data-icon-retractable="lnr-chevron-up"></i>
                        </h3>
                        <ul class="Content">
                            <li>
                                <a href="https://www.mastersportal.com/universities/259/university-of-freiburg.html" title="University of Freiburg">
                                    <span>University of Freiburg</span>
                                </a> (34 Masters)
                            </li>
                            <li>
                                <a href="https://www.mastersportal.com/universities/786/university-of-strasbourg.html" title="University of Strasbourg">
                                    <span>University of Strasbourg</span>
                                </a> (1 Master)
                            </li>
                        </ul>
                    </div>
                    <div class="City" data-city-name="Freising">
                        <h3 class="Actuator"> Freising <span class="InstituteCount"></span>
                            <i class="js-actuator AccordionIcon" data-icon-expendable="lnr-chevron-down" data-icon-retractable="lnr-chevron-up"></i>
                        </h3>
                        <ul class="Content">
                            <li>
                                <a href="https://www.mastersportal.com/universities/41/technical-university-of-munich.html" title="Technical University of Munich">
                                    <span>Technical University of Munich</span>
                                </a> (26 Masters)
                            </li>
                            <li>
                                <a href="https://www.mastersportal.com/universities/1284/weihenstephan-triesdorf-university-of-applied-sciences.html" title="Weihenstephan-Triesdorf University of Applied Sciences">
                                    <span>Weihenstephan-Triesdorf University of Applied Sciences</span>
                                </a> (3 Masters)
                            </li>
                        </ul>
                    </div>
                    <div class="City" data-city-name="Friedrichshafen">
                        <h3 class="Actuator"> Friedrichshafen <span class="InstituteCount"></span>
                            <i class="js-actuator AccordionIcon" data-icon-expendable="lnr-chevron-down" data-icon-retractable="lnr-chevron-up"></i>
                        </h3>
                        <ul class="Content">
                            <li>
                                <a href="https://www.mastersportal.com/universities/630/zeppelin-university.html" title="Zeppelin University">
                                    <span>Zeppelin University</span>
                                </a> (3 Masters)
                            </li>
                        </ul>
                    </div>
                    <div class="City" data-city-name="Fulda">
                        <h3 class="Actuator"> Fulda <span class="InstituteCount"></span>
                            <i class="js-actuator AccordionIcon" data-icon-expendable="lnr-chevron-down" data-icon-retractable="lnr-chevron-up"></i>
                        </h3>
                        <ul class="Content">
                            <li>
                                <a href="https://www.mastersportal.com/universities/1293/fulda-university-of-applied-sciences.html" title="Fulda University of Applied Sciences">
                                    <span>Fulda University of Applied Sciences</span>
                                </a> (6 Masters)
                            </li>
                        </ul>
                    </div>
                    <div class="City" data-city-name="Furtwangen">
                        <h3 class="Actuator"> Furtwangen <span class="InstituteCount"></span>
                            <i class="js-actuator AccordionIcon" data-icon-expendable="lnr-chevron-down" data-icon-retractable="lnr-chevron-up"></i>
                        </h3>
                        <ul class="Content">
                            <li>
                                <a href="https://www.mastersportal.com/universities/156/furtwangen-university.html" title="Furtwangen University">
                                    <span>Furtwangen University</span>
                                </a> (16 Masters)
                            </li>
                        </ul>
                    </div>
                    <div class="City" data-city-name="Garching bei München">
                        <h3 class="Actuator"> Garching bei München <span class="InstituteCount"></span>
                            <i class="js-actuator AccordionIcon" data-icon-expendable="lnr-chevron-down" data-icon-retractable="lnr-chevron-up"></i>
                        </h3>
                        <ul class="Content">
                            <li>
                                <a href="https://www.mastersportal.com/universities/41/technical-university-of-munich.html" title="Technical University of Munich">
                                    <span>Technical University of Munich</span>
                                </a> (26 Masters)
                            </li>
                        </ul>
                    </div>
                    <div class="City" data-city-name="Gießen">
                        <h3 class="Actuator"> Gießen <span class="InstituteCount"></span>
                            <i class="js-actuator AccordionIcon" data-icon-expendable="lnr-chevron-down" data-icon-retractable="lnr-chevron-up"></i>
                        </h3>
                        <ul class="Content">
                            <li>
                                <a href="https://www.mastersportal.com/universities/266/justus-liebig-university-giessen.html" title="Justus Liebig University Giessen">
                                    <span>Justus Liebig University Giessen</span>
                                </a> (4 Masters)
                            </li>
                            <li>
                                <a href="https://www.mastersportal.com/universities/563/university-of-applied-sciences-mittelhessen.html" title="University of Applied Sciences Mittelhessen">
                                    <span>University of Applied Sciences Mittelhessen</span>
                                </a> (9 Masters)
                            </li>
                        </ul>
                    </div>
                    <div class="City" data-city-name="Göttingen">
                        <h3 class="Actuator"> Göttingen <span class="InstituteCount"></span>
                            <i class="js-actuator AccordionIcon" data-icon-expendable="lnr-chevron-down" data-icon-retractable="lnr-chevron-up"></i>
                        </h3>
                        <ul class="Content">
                            <li>
                                <a href="https://www.mastersportal.com/universities/1370/pfh-private-university-of-applied-sciences.html" title="PFH Private University of Applied Sciences">
                                    <span>PFH Private University of Applied Sciences</span>
                                </a> (6 Masters)
                            </li>
                            <li>
                                <a href="https://www.mastersportal.com/universities/554/university-of-gttingen.html" title="University of Göttingen">
                                    <span>University of Göttingen</span>
                                </a> (31 Masters)
                            </li>
                        </ul>
                    </div>
                    <div class="City" data-city-name="Hagen">
                        <h3 class="Actuator"> Hagen <span class="InstituteCount"></span>
                            <i class="js-actuator AccordionIcon" data-icon-expendable="lnr-chevron-down" data-icon-retractable="lnr-chevron-up"></i>
                        </h3>
                        <ul class="Content">
                            <li>
                                <a href="https://www.mastersportal.com/universities/17637/south-westphalia-university-of-applied-sciences.html" title="South Westphalia University of Applied Sciences">
                                    <span>South Westphalia University of Applied Sciences</span>
                                </a> (2 Masters)
                            </li>
                        </ul>
                    </div>
                    <div class="City" data-city-name="Hamburg">
                        <h3 class="Actuator"> Hamburg <span class="InstituteCount"></span>
                            <i class="js-actuator AccordionIcon" data-icon-expendable="lnr-chevron-down" data-icon-retractable="lnr-chevron-up"></i>
                        </h3>
                        <ul class="Content">
                            <li>
                                <a href="https://www.mastersportal.com/universities/13038/brand-university-of-applied-sciences.html" title="Brand University of Applied Sciences">
                                    <span>Brand University of Applied Sciences</span>
                                </a> (3 Masters)
                            </li>
                            <li>
                                <a href="https://www.mastersportal.com/universities/239/bucerius-law-school.html" title="Bucerius Law School">
                                    <span>Bucerius Law School</span>
                                </a> (1 Master)
                            </li>
                            <li>
                                <a href="https://www.mastersportal.com/universities/369/europa-kolleg-hamburg.html" title="Europa Kolleg Hamburg">
                                    <span>Europa Kolleg Hamburg</span>
                                </a> (1 Master)
                            </li>
                            <li>
                                <a href="https://www.mastersportal.com/universities/14453/fresenius-university-of-applied-sciences.html" title="Fresenius University of Applied Sciences">
                                    <span>Fresenius University of Applied Sciences</span>
                                </a> (11 Masters)
                            </li>
                            <li>
                                <a href="https://www.mastersportal.com/universities/15849/gisma-business-school.html" title="GISMA Business School">
                                    <span>GISMA Business School</span>
                                </a> (24 Masters)
                            </li>
                            <li>
                                <a href="https://www.mastersportal.com/universities/1691/hafencity-university-hamburg.html" title="HafenCity University Hamburg (HCU)">
                                    <span>HafenCity University Hamburg (HCU)</span>
                                </a> (2 Masters)
                            </li>
                            <li>
                                <a href="https://www.mastersportal.com/universities/1220/hamburg-school-of-business-administration.html" title="Hamburg School of Business Administration (HSBA)">
                                    <span>Hamburg School of Business Administration (HSBA)</span>
                                </a> (5 Masters)
                            </li>
                            <li>
                                <a href="https://www.mastersportal.com/universities/17103/hamburg-university-of-applied-sciences.html" title="Hamburg University of Applied Sciences">
                                    <span>Hamburg University of Applied Sciences</span>
                                </a> (7 Masters)
                            </li>
                            <li>
                                <a href="https://www.mastersportal.com/universities/19366/hamburg-university-of-technology.html" title="Hamburg University of Technology">
                                    <span>Hamburg University of Technology</span>
                                </a> (1 Master)
                            </li>
                        </ul>
                    </div>
                    <div class="City" data-city-name="Heidelberg"> <h3 class="Actuator"> Heidelberg <span class="InstituteCount"></span> <i class="js-actuator AccordionIcon" data-icon-expendable="lnr-chevron-down" data-icon-retractable="lnr-chevron-up"></i> </h3> <ul class="Content">  <li> <a href="https://www.mastersportal.com/universities/49/heidelberg-university.html" title="Heidelberg University"> <span>Heidelberg University</span> </a> (29 Masters) </li>  <li> <a href="https://www.mastersportal.com/universities/619/pdagogische-hochschule-heidelberg.html" title="Pädagogische Hochschule Heidelberg"> <span>Pädagogische Hochschule Heidelberg</span> </a> (1 Master) </li>  <li> <a href="https://www.mastersportal.com/universities/792/srh-university-heidelberg.html" title="SRH University Heidelberg"> <span>SRH University Heidelberg</span> </a> (9 Masters) </li>  <li> <a href="https://www.mastersportal.com/universities/11/uppsala-university.html" title="Uppsala University"> <span>Uppsala University</span> </a> (1 Master) </li>  </ul> </div>  <div class="City" data-city-name="Heilbronn"> <h3 class="Actuator"> Heilbronn <span class="InstituteCount"></span> <i class="js-actuator AccordionIcon" data-icon-expendable="lnr-chevron-down" data-icon-retractable="lnr-chevron-up"></i> </h3> <ul class="Content">  <li> <a href="https://www.mastersportal.com/universities/546/heilbronn-university.html" title="Heilbronn University"> <span>Heilbronn University</span> </a> (5 Masters) </li>  </ul> </div>
                    <div class="City" data-city-name="Hildesheim"> <h3 class="Actuator"> Hildesheim <span class="InstituteCount"></span> <i class="js-actuator AccordionIcon" data-icon-expendable="lnr-chevron-down" data-icon-retractable="lnr-chevron-up"></i> </h3> <ul class="Content">  <li> <a href="https://www.mastersportal.com/universities/1337/university-of-hildesheim.html" title="University of Hildesheim"> <span>University of Hildesheim</span> </a> (1 Master) </li>  </ul> </div>
                    <div class="City" data-city-name="Hof"> <h3 class="Actuator"> Hof <span class="InstituteCount"></span> <i class="js-actuator AccordionIcon" data-icon-expendable="lnr-chevron-down" data-icon-retractable="lnr-chevron-up"></i> </h3> <ul class="Content">  <li> <a href="https://www.mastersportal.com/universities/516/hof-university-of-applied-sciences.html" title="Hof University of Applied Sciences"> <span>Hof University of Applied Sciences</span> </a> (6 Masters) </li>  </ul> </div>
                    <div class="City" data-city-name="Idstein"> <h3 class="Actuator"> Idstein <span class="InstituteCount"></span> <i class="js-actuator AccordionIcon" data-icon-expendable="lnr-chevron-down" data-icon-retractable="lnr-chevron-up"></i> </h3> <ul class="Content">  <li> <a href="https://www.mastersportal.com/universities/14453/fresenius-university-of-applied-sciences.html" title="Fresenius University of Applied Sciences"> <span>Fresenius University of Applied Sciences</span> </a> (11 Masters) </li>  </ul> </div>
                    <div class="City" data-city-name="Ilmenau"> <h3 class="Actuator"> Ilmenau <span class="InstituteCount"></span> <i class="js-actuator AccordionIcon" data-icon-expendable="lnr-chevron-down" data-icon-retractable="lnr-chevron-up"></i> </h3> <ul class="Content">  <li> <a href="https://www.mastersportal.com/universities/1769/ilmenau-university-of-technology.html" title="Ilmenau University of Technology"> <span>Ilmenau University of Technology</span> </a> (5 Masters) </li>  </ul> </div>
                    <div class="City" data-city-name="Iserlohn"> <h3 class="Actuator"> Iserlohn <span class="InstituteCount"></span> <i class="js-actuator AccordionIcon" data-icon-expendable="lnr-chevron-down" data-icon-retractable="lnr-chevron-up"></i> </h3> <ul class="Content">  <li> <a href="https://www.mastersportal.com/universities/17279/university-of-europe-for-applied-sciences.html" title="University of Europe for Applied Sciences"> <span>University of Europe for Applied Sciences</span> </a> (17 Masters) </li>  </ul> </div>
                    <div class="City" data-city-name="Jena"> <h3 class="Actuator"> Jena <span class="InstituteCount"></span> <i class="js-actuator AccordionIcon" data-icon-expendable="lnr-chevron-down" data-icon-retractable="lnr-chevron-up"></i> </h3> <ul class="Content">  <li> <a href="https://www.mastersportal.com/universities/577/friedrich-schiller-university-jena.html" title="Friedrich Schiller University Jena"> <span>Friedrich Schiller University Jena</span> </a> (5 Masters) </li>  </ul> </div>
                    <div class="City" data-city-name="Kaiserslautern"> <h3 class="Actuator"> Kaiserslautern <span class="InstituteCount"></span> <i class="js-actuator AccordionIcon" data-icon-expendable="lnr-chevron-down" data-icon-retractable="lnr-chevron-up"></i> </h3> <ul class="Content">  <li> <a href="https://www.mastersportal.com/universities/10032/technical-university-of-kaiserslautern.html" title="Technical University of Kaiserslautern"> <span>Technical University of Kaiserslautern</span> </a> (21 Masters) </li>  </ul> </div>
                    <div class="City" data-city-name="Kamp-Lintfort"> <h3 class="Actuator"> Kamp-Lintfort <span class="InstituteCount"></span> <i class="js-actuator AccordionIcon" data-icon-expendable="lnr-chevron-down" data-icon-retractable="lnr-chevron-up"></i> </h3> <ul class="Content">  <li> <a href="https://www.mastersportal.com/universities/833/rhine-waal-university-of-applied-sciences.html" title="Rhine-Waal University of Applied Sciences"> <span>Rhine-Waal University of Applied Sciences</span> </a> (10 Masters) </li>  </ul> </div>
                    <div class="City" data-city-name="Karlsruhe"> <h3 class="Actuator"> Karlsruhe <span class="InstituteCount"></span> <i class="js-actuator AccordionIcon" data-icon-expendable="lnr-chevron-down" data-icon-retractable="lnr-chevron-up"></i> </h3> <ul class="Content">  <li> <a href="https://www.mastersportal.com/universities/11021/eit-innoenergy-master-school.html" title="EIT InnoEnergy Master School"> <span>EIT InnoEnergy Master School</span> </a> (2 Masters) </li>  <li> <a href="https://www.mastersportal.com/universities/628/karlshochschule-international-university.html" title="Karlshochschule International University"> <span>Karlshochschule International University</span> </a> (2 Masters) </li>  <li> <a href="https://www.mastersportal.com/universities/125/karlsruhe-institute-of-technology.html" title="Karlsruhe Institute of Technology (KIT)"> <span>Karlsruhe Institute of Technology (KIT)</span> </a> (11 Masters) </li>  </ul> </div>
                    <div class="City" data-city-name="Kassel"> <h3 class="Actuator"> Kassel <span class="InstituteCount"></span> <i class="js-actuator AccordionIcon" data-icon-expendable="lnr-chevron-down" data-icon-retractable="lnr-chevron-up"></i> </h3> <ul class="Content">  <li> <a href="https://www.mastersportal.com/universities/662/university-of-kassel.html" title="University of Kassel"> <span>University of Kassel</span> </a> (2 Masters) </li>  </ul> </div>
                    <div class="City" data-city-name="Kiel"> <h3 class="Actuator"> Kiel <span class="InstituteCount"></span> <i class="js-actuator AccordionIcon" data-icon-expendable="lnr-chevron-down" data-icon-retractable="lnr-chevron-up"></i> </h3> <ul class="Content">  <li> <a href="https://www.mastersportal.com/universities/59/university-of-kiel.html" title="University of Kiel"> <span>University of Kiel</span> </a> (20 Masters) </li>  </ul> </div>
                    <div class="City" data-city-name="Kleve"> <h3 class="Actuator"> Kleve <span class="InstituteCount"></span> <i class="js-actuator AccordionIcon" data-icon-expendable="lnr-chevron-down" data-icon-retractable="lnr-chevron-up"></i> </h3> <ul class="Content">  <li> <a href="https://www.mastersportal.com/universities/833/rhine-waal-university-of-applied-sciences.html" title="Rhine-Waal University of Applied Sciences"> <span>Rhine-Waal University of Applied Sciences</span> </a> (10 Masters) </li>  </ul> </div>
                    <div class="City" data-city-name="Koblenz"> <h3 class="Actuator"> Koblenz <span class="InstituteCount"></span> <i class="js-actuator AccordionIcon" data-icon-expendable="lnr-chevron-down" data-icon-retractable="lnr-chevron-up"></i> </h3> <ul class="Content">  <li> <a href="https://www.mastersportal.com/universities/852/university-of-koblenz-landau.html" title="University of Koblenz - Landau"> <span>University of Koblenz - Landau</span> </a> (3 Masters) </li>  </ul> </div>
                    <div class="City" data-city-name="Konstanz"> <h3 class="Actuator"> Konstanz <span class="InstituteCount"></span> <i class="js-actuator AccordionIcon" data-icon-expendable="lnr-chevron-down" data-icon-retractable="lnr-chevron-up"></i> </h3> <ul class="Content">  <li> <a href="https://www.mastersportal.com/universities/279/university-of-konstanz.html" title="University of Konstanz"> <span>University of Konstanz</span> </a> (11 Masters) </li>  </ul> </div>
                    <div class="City" data-city-name="Krefeld"> <h3 class="Actuator"> Krefeld <span class="InstituteCount"></span> <i class="js-actuator AccordionIcon" data-icon-expendable="lnr-chevron-down" data-icon-retractable="lnr-chevron-up"></i> </h3> <ul class="Content">  <li> <a href="https://www.mastersportal.com/universities/648/niederrhein-university-of-applied-sciences.html" title="Niederrhein University of Applied Sciences"> <span>Niederrhein University of Applied Sciences</span> </a> (1 Master) </li>  </ul> </div>
                    <div class="City" data-city-name="Köln"> <h3 class="Actuator"> Köln <span class="InstituteCount"></span> <i class="js-actuator AccordionIcon" data-icon-expendable="lnr-chevron-down" data-icon-retractable="lnr-chevron-up"></i> </h3> <ul class="Content">  <li> <a href="https://www.mastersportal.com/universities/1062/cbs-international-business-school.html" title="CBS International Business School"> <span>CBS International Business School</span> </a> (29 Masters) </li>  <li> <a href="https://www.mastersportal.com/universities/14453/fresenius-university-of-applied-sciences.html" title="Fresenius University of Applied Sciences"> <span>Fresenius University of Applied Sciences</span> </a> (11 Masters) </li>  <li> <a href="https://www.mastersportal.com/universities/600/hhl-leipzig-graduate-school-of-management.html" title="HHL Leipzig Graduate School of Management"> <span>HHL Leipzig Graduate School of Management</span> </a> (6 Masters) </li>  <li> <a href="https://www.mastersportal.com/universities/11645/hmkw-university-for-media-communication-and-business.html" title="HMKW University for Media, Communication and Business"> <span>HMKW University for Media, Communication and Business</span> </a> (15 Masters) </li>  <li> <a href="https://www.mastersportal.com/universities/808/international-school-of-management.html" title="International School of Management (ISM)"> <span>International School of Management (ISM)</span> </a> (23 Masters) </li> </ul> </div>
                    <div class="City" data-city-name="Künzelsau"> <h3 class="Actuator"> Künzelsau <span class="InstituteCount"></span> <i class="js-actuator AccordionIcon" data-icon-expendable="lnr-chevron-down" data-icon-retractable="lnr-chevron-up"></i> </h3> <ul class="Content">  <li> <a href="https://www.mastersportal.com/universities/546/heilbronn-university.html" title="Heilbronn University"> <span>Heilbronn University</span> </a> (5 Masters) </li>  </ul> </div>
                    <div class="City" data-city-name="Landau in der Pfalz"> <h3 class="Actuator"> Landau in der Pfalz <span class="InstituteCount"></span> <i class="js-actuator AccordionIcon" data-icon-expendable="lnr-chevron-down" data-icon-retractable="lnr-chevron-up"></i> </h3> <ul class="Content">  <li> <a href="https://www.mastersportal.com/universities/852/university-of-koblenz-landau.html" title="University of Koblenz - Landau"> <span>University of Koblenz - Landau</span> </a> (3 Masters) </li>  </ul> </div>
                    <div class="City" data-city-name="Landshut"> <h3 class="Actuator"> Landshut <span class="InstituteCount"></span> <i class="js-actuator AccordionIcon" data-icon-expendable="lnr-chevron-down" data-icon-retractable="lnr-chevron-up"></i> </h3> <ul class="Content">  <li> <a href="https://www.mastersportal.com/universities/18509/landshut-university-of-applied-sciences.html" title="Landshut University of Applied Sciences"> <span>Landshut University of Applied Sciences</span> </a> (1 Master) </li>  </ul> </div>
                    <div class="City" data-city-name="Leipzig"> <h3 class="Actuator"> Leipzig <span class="InstituteCount"></span> <i class="js-actuator AccordionIcon" data-icon-expendable="lnr-chevron-down" data-icon-retractable="lnr-chevron-up"></i> </h3> <ul class="Content">  <li> <a href="https://www.mastersportal.com/universities/600/hhl-leipzig-graduate-school-of-management.html" title="HHL Leipzig Graduate School of Management"> <span>HHL Leipzig Graduate School of Management</span> </a> (6 Masters) </li>  <li> <a href="https://www.mastersportal.com/universities/241/leipzig-university.html" title="Leipzig University"> <span>Leipzig University</span> </a> (10 Masters) </li>  </ul> </div>
                    <div class="City" data-city-name="Lemgo"> <h3 class="Actuator"> Lemgo <span class="InstituteCount"></span> <i class="js-actuator AccordionIcon" data-icon-expendable="lnr-chevron-down" data-icon-retractable="lnr-chevron-up"></i> </h3> <ul class="Content">  <li> <a href="https://www.mastersportal.com/universities/567/ostwestfalen-lippe-university-of-applied-sciences.html" title="Ostwestfalen - Lippe University of Applied Sciences"> <span>Ostwestfalen - Lippe University of Applied Sciences</span> </a> (1 Master) </li>  </ul> </div>
                    <div class="City" data-city-name="Ludwigsburg"> <h3 class="Actuator"> Ludwigsburg <span class="InstituteCount"></span> <i class="js-actuator AccordionIcon" data-icon-expendable="lnr-chevron-down" data-icon-retractable="lnr-chevron-up"></i> </h3> <ul class="Content">  <li> <a href="https://www.mastersportal.com/universities/17766/ludwigsburg-university-of-education.html" title="Ludwigsburg University of Education"> <span>Ludwigsburg University of Education</span> </a> (1 Master) </li>  </ul> </div>
                    <div class="City" data-city-name="Ludwigshafen am Rhein"> <h3 class="Actuator"> Ludwigshafen am Rhein <span class="InstituteCount"></span> <i class="js-actuator AccordionIcon" data-icon-expendable="lnr-chevron-down" data-icon-retractable="lnr-chevron-up"></i> </h3> <ul class="Content">  <li> <a href="https://www.mastersportal.com/universities/18729/ludwigshafen-university-of-business-and-society.html" title="Ludwigshafen University of Business and Society"> <span>Ludwigshafen University of Business and Society</span> </a> (3 Masters) </li>  </ul> </div>
                    <div class="City" data-city-name="Lübeck"> <h3 class="Actuator"> Lübeck <span class="InstituteCount"></span> <i class="js-actuator AccordionIcon" data-icon-expendable="lnr-chevron-down" data-icon-retractable="lnr-chevron-up"></i> </h3> <ul class="Content">  <li> <a href="https://www.mastersportal.com/universities/11337/lbeck-university-of-applied-sciences.html" title="Lübeck University of Applied Sciences"> <span>Lübeck University of Applied Sciences</span> </a> (1 Master) </li>  <li> <a href="https://www.mastersportal.com/universities/11077/university-of-lbeck.html" title="University of Lübeck"> <span>University of Lübeck</span> </a> (2 Masters) </li>  </ul> </div>
                    <div class="City" data-city-name="Lüneburg"> <h3 class="Actuator"> Lüneburg <span class="InstituteCount"></span> <i class="js-actuator AccordionIcon" data-icon-expendable="lnr-chevron-down" data-icon-retractable="lnr-chevron-up"></i> </h3> <ul class="Content">  <li> <a href="https://www.mastersportal.com/universities/303/leuphana-university-of-lneburg.html" title="Leuphana University of Lüneburg"> <span>Leuphana University of Lüneburg</span> </a> (11 Masters) </li>  </ul> </div>
                    <div class="City" data-city-name="Magdeburg"> <h3 class="Actuator"> Magdeburg <span class="InstituteCount"></span> <i class="js-actuator AccordionIcon" data-icon-expendable="lnr-chevron-down" data-icon-retractable="lnr-chevron-up"></i> </h3> <ul class="Content">  <li> <a href="https://www.mastersportal.com/universities/13926/otto-von-guericke-university-magdeburg.html" title="Otto von Guericke University Magdeburg"> <span>Otto von Guericke University Magdeburg</span> </a> (15 Masters) </li>  </ul> </div>
                    <div class="City" data-city-name="Mainz"> <h3 class="Actuator"> Mainz <span class="InstituteCount"></span> <i class="js-actuator AccordionIcon" data-icon-expendable="lnr-chevron-down" data-icon-retractable="lnr-chevron-up"></i> </h3> <ul class="Content">  <li> <a href="https://www.mastersportal.com/universities/1062/cbs-international-business-school.html" title="CBS International Business School"> <span>CBS International Business School</span> </a> (29 Masters) </li>  <li> <a href="https://www.mastersportal.com/universities/907/johannes-gutenberg-university-mainz.html" title="Johannes Gutenberg University Mainz"> <span>Johannes Gutenberg University Mainz</span> </a> (9 Masters) </li>  <li> <a href="https://www.mastersportal.com/universities/1170/mainz-university-of-applied-sciences.html" title="Mainz University of Applied Sciences"> <span>Mainz University of Applied Sciences</span> </a> (8 Masters) </li>  </ul> </div>
                    <div class="City" data-city-name="Mannheim"> <h3 class="Actuator"> Mannheim <span class="InstituteCount"></span> <i class="js-actuator AccordionIcon" data-icon-expendable="lnr-chevron-down" data-icon-retractable="lnr-chevron-up"></i> </h3> <ul class="Content">  <li> <a href="https://www.mastersportal.com/universities/1131/mannheim-business-school.html" title="Mannheim Business School"> <span>Mannheim Business School</span> </a> (4 Masters) </li>  <li> <a href="https://www.mastersportal.com/universities/17787/mannheim-university-of-applied-sciences.html" title="Mannheim University of Applied Sciences"> <span>Mannheim University of Applied Sciences</span> </a> (1 Master) </li>  <li> <a href="https://www.mastersportal.com/universities/57/university-of-mannheim.html" title="University of Mannheim"> <span>University of Mannheim</span> </a> (9 Masters) </li>  </ul> </div>
                    <div class="City" data-city-name="Marburg an der Lahn"> <h3 class="Actuator"> Marburg an der Lahn <span class="InstituteCount"></span> <i class="js-actuator AccordionIcon" data-icon-expendable="lnr-chevron-down" data-icon-retractable="lnr-chevron-up"></i> </h3> <ul class="Content">  <li> <a href="https://www.mastersportal.com/universities/264/philip-university-in-marburg.html" title="Philip University in Marburg"> <span>Philip University in Marburg</span> </a> (3 Masters) </li>  <li> <a href="https://www.mastersportal.com/universities/118/university-of-kent.html" title="University of Kent"> <span>University of Kent</span> </a> (1 Master) </li>  </ul> </div>
                    <div class="City" data-city-name="Berlin Mitte"> <h3 class="Actuator"> Berlin Mitte <span class="InstituteCount"></span> <i class="js-actuator AccordionIcon" data-icon-expendable="lnr-chevron-down" data-icon-retractable="lnr-chevron-up"></i> </h3> <ul class="Content">  <li> <a href="https://www.mastersportal.com/universities/1731/icn-berlin.html" title="ICN Berlin"> <span>ICN Berlin</span> </a> (4 Masters) </li>  </ul> </div>
                    <div class="City" data-city-name="Mockrehna"> <h3 class="Actuator"> Mockrehna <span class="InstituteCount"></span> <i class="js-actuator AccordionIcon" data-icon-expendable="lnr-chevron-down" data-icon-retractable="lnr-chevron-up"></i> </h3> <ul class="Content">  <li> <a href="https://www.mastersportal.com/universities/342/friedensau-adventist-university.html" title="Friedensau Adventist University"> <span>Friedensau Adventist University</span> </a> (1 Master) </li>  </ul> </div>
                    <div class="City" data-city-name="Munster"> <h3 class="Actuator"> Munster <span class="InstituteCount"></span> <i class="js-actuator AccordionIcon" data-icon-expendable="lnr-chevron-down" data-icon-retractable="lnr-chevron-up"></i> </h3> <ul class="Content">  <li> <a href="https://www.mastersportal.com/universities/12070/university-of-mnster.html" title="University of Münster"> <span>University of Münster</span> </a> (14 Masters) </li>  </ul> </div>
                    <div class="City" data-city-name="München"> <h3 class="Actuator"> München <span class="InstituteCount"></span> <i class="js-actuator AccordionIcon" data-icon-expendable="lnr-chevron-down" data-icon-retractable="lnr-chevron-up"></i> </h3> <ul class="Content">  <li> <a href="https://www.mastersportal.com/universities/474/eu-business-school.html" title="EU Business School"> <span>EU Business School</span> </a> (2 Masters) </li>  <li> <a href="https://www.mastersportal.com/universities/14453/fresenius-university-of-applied-sciences.html" title="Fresenius University of Applied Sciences"> <span>Fresenius University of Applied Sciences</span> </a> (11 Masters) </li><li> <a href="https://www.mastersportal.com/universities/561/munich-business-school.html" title="Munich Business School"> <span>Munich Business School</span> </a> (5 Masters) </li>  <li> <a href="https://www.mastersportal.com/universities/1716/munich-intellectual-property-law-center.html" title="Munich Intellectual Property Law Center (MIPLC)"> <span>Munich Intellectual Property Law Center (MIPLC)</span> </a> (2 Masters) </li>  <li> <a href="https://www.mastersportal.com/universities/537/munich-university-of-applied-sciences.html" title="Munich University of Applied Sciences"> <span>Munich University of Applied Sciences</span> </a> (5 Masters) </li>  <li> <a href="https://www.mastersportal.com/universities/16989/new-european-college.html" title="New European College"> <span>New European College</span> </a> (4 Masters) </li> <li> <a href="https://www.mastersportal.com/universities/1284/weihenstephan-triesdorf-university-of-applied-sciences.html" title="Weihenstephan-Triesdorf University of Applied Sciences"> <span>Weihenstephan-Triesdorf University of Applied Sciences</span> </a> (3 Masters) </li>  </ul> </div>
                    <div class="City" data-city-name="Münster"> <h3 class="Actuator"> Münster <span class="InstituteCount"></span> <i class="js-actuator AccordionIcon" data-icon-expendable="lnr-chevron-down" data-icon-retractable="lnr-chevron-up"></i> </h3> <ul class="Content">  <li> <a href="https://www.mastersportal.com/universities/12070/university-of-mnster.html" title="University of Münster"> <span>University of Münster</span> </a> (14 Masters) </li>  </ul> </div>
                    <div class="City" data-city-name="Nuremberg"> <h3 class="Actuator"> Nuremberg <span class="InstituteCount"></span> <i class="js-actuator AccordionIcon" data-icon-expendable="lnr-chevron-down" data-icon-retractable="lnr-chevron-up"></i> </h3> <ul class="Content">  <li> <a href="https://www.mastersportal.com/universities/46/friedrich-alexander-universitt-erlangen-nrnberg.html" title="Friedrich-Alexander-Universität Erlangen-Nürnberg (FAU)"> <span>Friedrich-Alexander-Universität Erlangen-Nürnberg (FAU)</span> </a> (31 Masters) </li>  <li> <a href="https://www.mastersportal.com/universities/555/technische-hochschule-nrnberg.html" title="Technische Hochschule Nürnberg"> <span>Technische Hochschule Nürnberg</span> </a> (2 Masters) </li>  </ul> </div>
                    <div class="City" data-city-name="Nürtingen"> <h3 class="Actuator"> Nürtingen <span class="InstituteCount"></span> <i class="js-actuator AccordionIcon" data-icon-expendable="lnr-chevron-down" data-icon-retractable="lnr-chevron-up"></i> </h3> <ul class="Content">  <li> <a href="https://www.mastersportal.com/universities/1327/nrtingen-geislingen-university.html" title="Nürtingen-Geislingen University"> <span>Nürtingen-Geislingen University</span> </a> (2 Masters) </li>  </ul> </div>
                    <div class="City" data-city-name="Offenburg"> <h3 class="Actuator"> Offenburg <span class="InstituteCount"></span> <i class="js-actuator AccordionIcon" data-icon-expendable="lnr-chevron-down" data-icon-retractable="lnr-chevron-up"></i> </h3> <ul class="Content">  <li> <a href="https://www.mastersportal.com/universities/299/offenburg-university-of-applied-sciences.html" title="Offenburg University of Applied Sciences"> <span>Offenburg University of Applied Sciences</span> </a> (7 Masters) </li>  </ul> </div>
                    <div class="City" data-city-name="Oldenburg"> <h3 class="Actuator"> Oldenburg <span class="InstituteCount"></span> <i class="js-actuator AccordionIcon" data-icon-expendable="lnr-chevron-down" data-icon-retractable="lnr-chevron-up"></i> </h3> <ul class="Content">  <li> <a href="https://www.mastersportal.com/universities/133/carl-von-ossietzky-university-of-oldenburg.html" title="Carl von Ossietzky University of Oldenburg"> <span>Carl von Ossietzky University of Oldenburg</span> </a> (2 Masters) </li>  </ul> </div>
                    <div class="City" data-city-name="Osnabrück"> <h3 class="Actuator"> Osnabrück <span class="InstituteCount"></span> <i class="js-actuator AccordionIcon" data-icon-expendable="lnr-chevron-down" data-icon-retractable="lnr-chevron-up"></i> </h3> <ul class="Content">  <li> <a href="https://www.mastersportal.com/universities/892/osnabrck-university-of-applied-sciences.html" title="Osnabrück University of Applied Sciences"> <span>Osnabrück University of Applied Sciences</span> </a> (1 Master) </li>  </ul> </div>
                    <div class="City" data-city-name="Paderborn"> <h3 class="Actuator"> Paderborn <span class="InstituteCount"></span> <i class="js-actuator AccordionIcon" data-icon-expendable="lnr-chevron-down" data-icon-retractable="lnr-chevron-up"></i> </h3> <ul class="Content">  <li> <a href="https://www.mastersportal.com/universities/550/university-of-paderborn.html" title="University of Paderborn"> <span>University of Paderborn</span> </a> (8 Masters) </li>  </ul> </div>
                    <div class="City" data-city-name="Passau"> <h3 class="Actuator"> Passau <span class="InstituteCount"></span> <i class="js-actuator AccordionIcon" data-icon-expendable="lnr-chevron-down" data-icon-retractable="lnr-chevron-up"></i> </h3> <ul class="Content">  <li> <a href="https://www.mastersportal.com/universities/740/university-of-passau.html" title="University of Passau"> <span>University of Passau</span> </a> (2 Masters) </li>  </ul> </div>
                    <div class="City" data-city-name="Pforzheim"> <h3 class="Actuator"> Pforzheim <span class="InstituteCount"></span> <i class="js-actuator AccordionIcon" data-icon-expendable="lnr-chevron-down" data-icon-retractable="lnr-chevron-up"></i> </h3> <ul class="Content">  <li> <a href="https://www.mastersportal.com/universities/1123/pforzheim-university.html" title="Pforzheim University"> <span>Pforzheim University</span> </a> (2 Masters) </li>  </ul> </div>
                    <div class="City" data-city-name="Potsdam"> <h3 class="Actuator"> Potsdam <span class="InstituteCount"></span> <i class="js-actuator AccordionIcon" data-icon-expendable="lnr-chevron-down" data-icon-retractable="lnr-chevron-up"></i> </h3> <ul class="Content">  <li> <a href="https://www.mastersportal.com/universities/1062/cbs-international-business-school.html" title="CBS International Business School"> <span>CBS International Business School</span> </a> (29 Masters) </li>  <li> <a href="https://www.mastersportal.com/universities/469/university-of-potsdam.html" title="University of Potsdam"> <span>University of Potsdam</span> </a> (21 Masters) </li>  <li> <a href="https://www.mastersportal.com/universities/19959/xu-exponential-university-of-applied-sciences.html" title="XU Exponential University of Applied Sciences"> <span>XU Exponential University of Applied Sciences</span> </a> (1 Master) </li>  </ul> </div>
                    <div class="City" data-city-name="Ravensburg"> <h3 class="Actuator"> Ravensburg <span class="InstituteCount"></span> <i class="js-actuator AccordionIcon" data-icon-expendable="lnr-chevron-down" data-icon-retractable="lnr-chevron-up"></i> </h3> <ul class="Content">  <li> <a href="https://www.mastersportal.com/universities/17761/university-of-applied-sciences-ravensburg-weingarten.html" title="University of Applied Sciences Ravensburg-Weingarten"> <span>University of Applied Sciences Ravensburg-Weingarten</span> </a> (2 Masters) </li>  </ul> </div>
                    <div class="City" data-city-name="Regensburg"> <h3 class="Actuator"> Regensburg <span class="InstituteCount"></span> <i class="js-actuator AccordionIcon" data-icon-expendable="lnr-chevron-down" data-icon-retractable="lnr-chevron-up"></i> </h3> <ul class="Content">  <li> <a href="https://www.mastersportal.com/universities/406/university-of-regensburg.html" title="University of Regensburg"> <span>University of Regensburg</span> </a> (3 Masters) </li>  </ul> </div>
                    <div class="City" data-city-name="Reutlingen"> <h3 class="Actuator"> Reutlingen <span class="InstituteCount"></span> <i class="js-actuator AccordionIcon" data-icon-expendable="lnr-chevron-down" data-icon-retractable="lnr-chevron-up"></i> </h3> <ul class="Content">  <li> <a href="https://www.mastersportal.com/universities/17760/reutlingen-university.html" title="Reutlingen University"> <span>Reutlingen University</span> </a> (2 Masters) </li>  </ul> </div>
                    <div class="City" data-city-name="Rosenheim"> <h3 class="Actuator"> Rosenheim <span class="InstituteCount"></span> <i class="js-actuator AccordionIcon" data-icon-expendable="lnr-chevron-down" data-icon-retractable="lnr-chevron-up"></i> </h3> <ul class="Content">  <li> <a href="https://www.mastersportal.com/universities/18508/rosenheim-university-of-applied-sciences.html" title="Rosenheim University of Applied Sciences"> <span>Rosenheim University of Applied Sciences</span> </a> (2 Masters) </li>  </ul> </div>
                    <div class="City" data-city-name="Rostock"> <h3 class="Actuator"> Rostock <span class="InstituteCount"></span> <i class="js-actuator AccordionIcon" data-icon-expendable="lnr-chevron-down" data-icon-retractable="lnr-chevron-up"></i> </h3> <ul class="Content">  <li> <a href="https://www.mastersportal.com/universities/13200/itmo-university.html" title="ITMO University"> <span>ITMO University</span> </a> (2 Masters) </li>  <li> <a href="https://www.mastersportal.com/universities/135/university-of-rostock.html" title="University of Rostock"> <span>University of Rostock</span> </a> (1 Master) </li>  </ul> </div>
                    <div class="City" data-city-name="Saarbrücken"> <h3 class="Actuator"> Saarbrücken <span class="InstituteCount"></span> <i class="js-actuator AccordionIcon" data-icon-expendable="lnr-chevron-down" data-icon-retractable="lnr-chevron-up"></i> </h3> <ul class="Content">  <li> <a href="https://www.mastersportal.com/universities/324/saarland-university.html" title="Saarland University"> <span>Saarland University</span> </a> (8 Masters) </li>  </ul> </div>
                    <div class="City" data-city-name="Schmalkalden"> <h3 class="Actuator"> Schmalkalden <span class="InstituteCount"></span> <i class="js-actuator AccordionIcon" data-icon-expendable="lnr-chevron-down" data-icon-retractable="lnr-chevron-up"></i> </h3> <ul class="Content">  <li> <a href="https://www.mastersportal.com/universities/1640/schmalkalden-university-of-applied-sciences.html" title="Schmalkalden University of Applied Sciences"> <span>Schmalkalden University of Applied Sciences</span> </a> (5 Masters) </li>  </ul> </div>
                    <div class="City" data-city-name="Siegen"> <h3 class="Actuator"> Siegen <span class="InstituteCount"></span> <i class="js-actuator AccordionIcon" data-icon-expendable="lnr-chevron-down" data-icon-retractable="lnr-chevron-up"></i> </h3> <ul class="Content">  <li> <a href="https://www.mastersportal.com/universities/615/university-of-siegen.html" title="University of Siegen"> <span>University of Siegen</span> </a> (4 Masters) </li>  </ul> </div>
                    <div class="City" data-city-name="Stade"> <h3 class="Actuator"> Stade <span class="InstituteCount"></span> <i class="js-actuator AccordionIcon" data-icon-expendable="lnr-chevron-down" data-icon-retractable="lnr-chevron-up"></i> </h3> <ul class="Content">  <li> <a href="https://www.mastersportal.com/universities/1370/pfh-private-university-of-applied-sciences.html" title="PFH Private University of Applied Sciences"> <span>PFH Private University of Applied Sciences</span> </a> (6 Masters) </li>  </ul> </div>
                    <div class="City" data-city-name="Stralsund"> <h3 class="Actuator"> Stralsund <span class="InstituteCount"></span> <i class="js-actuator AccordionIcon" data-icon-expendable="lnr-chevron-down" data-icon-retractable="lnr-chevron-up"></i> </h3> <ul class="Content">  <li> <a href="https://www.mastersportal.com/universities/588/hochschule-stralsund-university-of-applied-sciences.html" title="Hochschule Stralsund - University of Applied Sciences"> <span>Hochschule Stralsund - University of Applied Sciences</span> </a> (3 Masters) </li>  </ul> </div>
                    <div class="City" data-city-name="Stuttgart"> <h3 class="Actuator"> Stuttgart <span class="InstituteCount"></span> <i class="js-actuator AccordionIcon" data-icon-expendable="lnr-chevron-down" data-icon-retractable="lnr-chevron-up"></i> </h3> <ul class="Content">  <li> <a href="https://www.mastersportal.com/universities/20018/eit-food.html" title="EIT Food"> <span>EIT Food</span> </a> (1 Master) </li>  <li> <a href="https://www.mastersportal.com/universities/311/stuttgart-university-of-applied-sciences.html" title="Stuttgart University of Applied Sciences"> <span>Stuttgart University of Applied Sciences</span> </a> (5 Masters) </li>  <li> <a href="https://www.mastersportal.com/universities/210/university-of-hohenheim.html" title="University of Hohenheim"> <span>University of Hohenheim</span> </a> (14 Masters) </li>  <li> <a href="https://www.mastersportal.com/universities/48/university-of-stuttgart.html" title="University of Stuttgart"> <span>University of Stuttgart</span> </a> (14 Masters) </li>  </ul> </div>
                    <div class="City" data-city-name="Trier"> <h3 class="Actuator"> Trier <span class="InstituteCount"></span> <i class="js-actuator AccordionIcon" data-icon-expendable="lnr-chevron-down" data-icon-retractable="lnr-chevron-up"></i> </h3> <ul class="Content">  <li> <a href="https://www.mastersportal.com/universities/667/trier-university.html" title="Trier University"> <span>Trier University</span> </a> (5 Masters) </li>  </ul> </div>
                    <div class="City" data-city-name="Tübingen"> <h3 class="Actuator"> Tübingen <span class="InstituteCount"></span> <i class="js-actuator AccordionIcon" data-icon-expendable="lnr-chevron-down" data-icon-retractable="lnr-chevron-up"></i> </h3> <ul class="Content">  <li> <a href="https://www.mastersportal.com/universities/188/university-of-tbingen.html" title="University of Tübingen"> <span>University of Tübingen</span> </a> (29 Masters) </li>  </ul> </div>
                    <div class="City" data-city-name="Zittau"> <h3 class="Actuator"> Zittau <span class="InstituteCount"></span> <i class="js-actuator AccordionIcon" data-icon-expendable="lnr-chevron-down" data-icon-retractable="lnr-chevron-up"></i> </h3> <ul class="Content">  <li> <a href="https://www.mastersportal.com/universities/13200/itmo-university.html" title="ITMO University"> <span>ITMO University</span> </a> (2 Masters) </li>  <li> <a href="https://www.mastersportal.com/universities/50/tu-dresden.html" title="TU Dresden"> <span>TU Dresden</span> </a> (17 Masters) </li>  </ul> </div>
                </div>
            </div>
            <div data-module="Country:visa" class="Module StudyPortals_Shared_Modules_Country_Visa_Visa">
                <script> const visaDestinationCountry = '11'; const visaServiceUrl = 'https://ir01v48xy3.execute-api.eu-west-1.amazonaws.com/prd/'; </script>
                <article id="CountryVisa"></article>
            </div>
            <div data-module="Country:WorkPermitContent" class="Module StudyPortals_Shared_Modules_Country_WorkPermitContent_WorkPermitContent">
                <script> const workPermitDestinationCountry = '11'; const workPermitServiceUrl = 'https://8ofylmmtn1.execute-api.eu-west-1.amazonaws.com/prd/'; </script>
                <section id="WorkPermitContent">
                    <p>11</p>
                    <p>https://8ofylmmtn1.execute-api.eu-west-1.amazonaws.com/prd/</p>
                </section>
            </div>
            <div data-module="Country:how_to_apply_content" class="Module StudyPortals_Shared_Modules_Country_HowToApply_HowToApply">
                <section id="HowToApplyContent">
                    <h2>How to Apply to a Master's in Germany</h2>
                    <p>If you've decided to study a Master's degree at a university in Germany, you will have to gather the right documents to prove that you fit the university requirements. Provide complete personal information, previous qualifications, financial information, and a personal statement.</p>
                    <!-- Australia -->  <!-- Canada -->  <!-- France -->  <!-- Germany -->
                    <h3>What documents do I need to provide to apply in Germany?</h3>
                    <p>Before you start collecting all the documents needed to apply to a university in Germany, you will have to either have to check if your qualifications match those requested by the university with an HZB (Hochschulzugangsberechtigung) or attend an entrance examination (if you’re from outside the EU/EEA).</p>
                    <p>After you are cleared of these, you will need to check a certain process, called Numerus Clausus, which is a thorough process of selection.</p>
                    <p>The final step will be to provide these documents:<p>
                    <ul>
                        <li>Certified copy of your previously completed degree;</li>
                        <li>An official translation of the course modules and grades;</li>
                        <li>A passport photo;</li>
                        <li>Copy of your passport;</li>
                        <li>Proof of language proficiency – German (and / or English);</li>
                        <li>A motivation letter;</li>
                        <li>Proof you covered the application fee.</li>
                    </ul>
                    <h3>Prove your English (or German) skills</h3>
                    <p>If you decide you want to follow a course in German, you will need to provide certification you can study and manage your exams in this language. That’s why you will need to obtain one of these:</p>
                    <ul>
                        <li>DSH (German language exam for university entrance) – available only in Germany;</li>
                        <li>TestDaF – available in 90 countries worldwide.</li>
                    </ul>
                    <p>Otherwise, if you want to study one of the numerous programmes in English, offered by German universities, then you should have:</p>
                    <ul>
                        <li>An IELTS English proficiency test;</li>
                        <li>A TOEFL English proficiency test.</li>
                    </ul>
                    <h3>Application deadlines for Germany</h3>
                    <p>Like any application process, the sooner you start applying, the better. The two enrolment sessions you have to keep an eye on are:</p>
                    <ul>
                        <li>Winter enrolment: between the end of May and 15th of July;</li>
                        <li>Summer enrolment: between the beginning of December and the 15th of January.</li>
                    </ul>
                </section>
            </div>
            <div data-module="" class="Module StudyPortals_Shared_Modules_Country_Conversion_Conversion">
            </div>
        </div>
    </section>
    <!-- //SWITCHABLE CONTENT--> <!-- SWITCHABLE CONTENT-->
    <section id="SwitchableContentBottom" class="col1 WrappedContent no-vertical-padding">
        <div id="BottomSearchColblock" class="colblock">
            <div data-module="" class="Module StudyPortals_Shared_Modules_Country_BottomSearch_BottomSearch">
                <div id="BottomSearch"> <div class="FormContainer">
                        <h2 class="DegreeType">  Find Master's Degrees in Germany </h2>
                        <form id="SingleBottomSearch" class="Form" method="get" action="/search" >
                            <input id="BottomKeywordInput" class="js-autoCompleteInput KeywordInput" type="text" name="keywords" autocomplete="off" placeholder="What do you want to study?" data-type="what" data-country="11" >
                            <button type="submit" class="SearchButton">
                                <i class="lnr-magnifier SearchIcon"></i>
                                <span class="SearchWord">Search</span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //SWITCHABLE CONTENT-->
    <div class="col1 WrappedContent">
        <div class="colblock">
            <div data-module="" class="Module StudyPortals_Shared_Modules_Country_DisciplineSelection_DisciplineSelection">
                <section id="DisciplineSelection">
                    <h2>What degree to study in Germany?</h2>
                    <ul class="DisciplineList">
                        <li class="DisciplineItem ">
                            <a href="https://www.mastersportal.com/search/masters-degrees/agriculture-forestry-in-germany/?q=ci-11|di-54" title="Agriculture &amp; Forestry" class="DisciplineLink">
                                <i class="lnr-tree DisciplineIcon"></i>
                                <div class="InfoContainer">
                                    <span class="DisciplineTitle">Agriculture &amp; Forestry</span>
                                    <span class="DisciplineFacet">36&nbsp;Masters</span>
                                </div>
                            </a>
                        </li>
                        <li class="DisciplineItem ">
                            <a href="https://www.mastersportal.com/search/masters-degrees/applied-sciences-professions-in-germany/?q=ci-11|di-12" title="Applied Sciences &amp; Professions" class="DisciplineLink">
                                <i class="lnr-microscope DisciplineIcon"></i>
                                <div class="InfoContainer">
                                    <span class="DisciplineTitle">Applied Sciences &amp; Professions</span>
                                    <span class="DisciplineFacet">23&nbsp;Masters</span>
                                </div>
                            </a>
                        </li>
                        <li class="DisciplineItem ">
                            <a href="https://www.mastersportal.com/search/masters-degrees/arts-design-architecture-in-germany/?q=ci-11|di-258" title="Arts, Design &amp; Architecture" class="DisciplineLink">
                                <i class="lnr-magic-wand DisciplineIcon"></i>
                                <div class="InfoContainer">
                                    <span class="DisciplineTitle">Arts, Design &amp; Architecture</span>
                                    <span class="DisciplineFacet">71&nbsp;Masters</span>
                                </div>
                            </a>
                        </li>
                        <li class="DisciplineItem ">
                            <a href="https://www.mastersportal.com/search/masters-degrees/business-management-in-germany/?q=ci-11|di-23" title="Business &amp; Management" class="DisciplineLink">
                                <i class="lnr-briefcase DisciplineIcon"></i>
                                <div class="InfoContainer">
                                    <span class="DisciplineTitle">Business &amp; Management</span>
                                    <span class="DisciplineFacet">466&nbsp;Masters</span>
                                </div>
                            </a>
                        </li>
                        <li class="DisciplineItem ">
                            <a href="https://www.mastersportal.com/search/masters-degrees/computer-science-it-in-germany/?q=ci-11|di-24" title="Computer Science &amp; IT" class="DisciplineLink">
                                <i class="lnr-cli DisciplineIcon"></i>
                                <div class="InfoContainer">
                                    <span class="DisciplineTitle">Computer Science &amp; IT</span>
                                    <span class="DisciplineFacet">214&nbsp;Masters</span>
                                </div>
                            </a>
                        </li>
                        <li class="DisciplineItem ">
                            <a href="https://www.mastersportal.com/search/masters-degrees/education-training-in-germany/?q=ci-11|di-289" title="Education &amp; Training" class="DisciplineLink">
                                <i class="lnr-book2 DisciplineIcon"></i>
                                <div class="InfoContainer">
                                    <span class="DisciplineTitle">Education &amp; Training</span>
                                    <span class="DisciplineFacet">22&nbsp;Masters</span>
                                </div>
                            </a>
                        </li>
                        <li class="DisciplineItem ">
                            <a href="https://www.mastersportal.com/search/masters-degrees/engineering-technology-in-germany/?q=ci-11|di-7" title="Engineering &amp; Technology" class="DisciplineLink">
                                <i class="lnr-rulers DisciplineIcon"></i>
                                <div class="InfoContainer">
                                    <span class="DisciplineTitle">Engineering &amp; Technology</span>
                                    <span class="DisciplineFacet">254&nbsp;Masters</span>
                                </div>
                            </a>
                        </li>
                        <li class="DisciplineItem ">
                            <a href="https://www.mastersportal.com/search/masters-degrees/environmental-studies-earth-sciences-in-germany/?q=ci-11|di-117" title="Environmental Studies &amp; Earth Sciences" class="DisciplineLink">
                                <i class="lnr-earth DisciplineIcon"></i>
                                <div class="InfoContainer">
                                    <span class="DisciplineTitle">Environmental Studies &amp; Earth Sciences</span>
                                    <span class="DisciplineFacet">132&nbsp;Masters</span>
                                </div>
                            </a>
                        </li>
                        <li class="DisciplineItem ">
                            <a href="https://www.mastersportal.com/search/masters-degrees/hospitality-leisure-sports-in-germany/?q=ci-11|di-64" title="Hospitality, Leisure &amp; Sports" class="DisciplineLink">
                                <i class="lnr-boat DisciplineIcon"></i>
                                <div class="InfoContainer">
                                    <span class="DisciplineTitle">Hospitality, Leisure &amp; Sports</span>
                                    <span class="DisciplineFacet">23&nbsp;Masters</span>
                                </div>
                            </a>
                        </li>
                        <li class="DisciplineItem ">
                            <a href="https://www.mastersportal.com/search/masters-degrees/humanities-in-germany/?q=ci-11|di-9" title="Humanities" class="DisciplineLink">
                                <i class="lnr-pen2 DisciplineIcon"></i>
                                <div class="InfoContainer">
                                    <span class="DisciplineTitle">Humanities</span>
                                    <span class="DisciplineFacet">110&nbsp;Masters</span>
                                </div>
                            </a>
                        </li>
                        <li class="DisciplineItem ">
                            <a href="https://www.mastersportal.com/search/masters-degrees/journalism-media-in-germany/?q=ci-11|di-58" title="Journalism &amp; Media" class="DisciplineLink">
                                <i class="lnr-camera DisciplineIcon"></i>
                                <div class="InfoContainer">
                                    <span class="DisciplineTitle">Journalism &amp; Media</span>
                                    <span class="DisciplineFacet">26&nbsp;Masters</span>
                                </div>
                            </a>
                        </li>
                        <li class="DisciplineItem ">
                            <a href="https://www.mastersportal.com/search/masters-degrees/law-in-germany/?q=ci-11|di-6" title="Law" class="DisciplineLink">
                                <i class="lnr-balance DisciplineIcon"></i>
                                <div class="InfoContainer">
                                    <span class="DisciplineTitle">Law</span>
                                    <span class="DisciplineFacet">33&nbsp;Masters</span>
                                </div>
                            </a>
                        </li>
                        <li class="DisciplineItem ">
                            <a href="https://www.mastersportal.com/search/masters-degrees/medicine-health-in-germany/?q=ci-11|di-10" title="Medicine &amp; Health" class="DisciplineLink">
                                <i class="lnr-first-aid DisciplineIcon"></i>
                                <div class="InfoContainer">
                                    <span class="DisciplineTitle">Medicine &amp; Health</span>
                                    <span class="DisciplineFacet">76&nbsp;Masters</span>
                                </div>
                            </a>
                        </li>
                        <li class="DisciplineItem ">
                            <a href="https://www.mastersportal.com/search/masters-degrees/natural-sciences-mathematics-in-germany/?q=ci-11|di-11" title="Natural Sciences &amp; Mathematics" class="DisciplineLink">
                                <i class="lnr-beaker DisciplineIcon"></i>
                                <div class="InfoContainer">
                                    <span class="DisciplineTitle">Natural Sciences &amp; Mathematics</span>
                                    <span class="DisciplineFacet">254&nbsp;Masters</span>
                                </div>
                            </a>
                        </li>
                        <li class="DisciplineItem ">
                            <a href="https://www.mastersportal.com/search/masters-degrees/social-sciences-in-germany/?q=ci-11|di-13" title="Social Sciences" class="DisciplineLink">
                                <i class="lnr-bubbles DisciplineIcon"></i>
                                <div class="InfoContainer">
                                    <span class="DisciplineTitle">Social Sciences</span>
                                    <span class="DisciplineFacet">302&nbsp;Masters</span>
                                </div>
                            </a>
                        </li>
                    </ul>
                </section>
            </div>
        </div>
    </div>
    <div id="DetailsInformation" class="col1 WrappedContent">
        <div class="colblock">
            <div data-module="" class="Module StudyPortals_Shared_Modules_Banner_Banner StudyPortals_Shared_Modules_Banner_LeaderboardBanner StudyPortals_Shared_Modules_Banner_CountryLeaderboardBanner">
                <div class="BannerPlaceHolder Empty" data-size="leaderboard" data-id="master_leaderboard_country-pages" data-slot-width="728px" data-slot-height="90px" data-calculate-slots="true"  >
                </div>
            </div>
            <div id="GlobalStudyAwards">
                <div data-module="SPScholarships" class="Module StudyPortals_Shared_Modules_SPScholarships_SPScholarships StudyPortals_Shared_Modules_SPScholarships_SPScholarshipsCountry">
                    <aside id="SPScholarships">
                        <div class="ContentCard">
                            <div class="SPScholarshipsContent">
                                <h2>Win a &euro;<span class="LocaleNumber">10000</span> Scholarship!</h2>
                                <span class="SPScholarshipsDeadline js-scholarshipsDeadline">Deadline: <strong>30 June 2020</strong></span>
                                <p> Apply for the Studyportals Scholarship and win up to &euro;<span class="LocaleNumber">10000</span> to cover your tuition fees. Follow your dream of studying abroad with the help of our scholarship. </p>
                                <a class="NavigatorButton js-scholarshipsButton" href="https://scholarship.mastersportal.com/international-distinction-awards/?utm_source=country_page" target="_blank" title="Apply for scholarship"> Apply for scholarship </a>
                            </div>
                            <div class="ImageContainer">
                                <img loading="lazy" src="//monet-prtl-co.imgix.net/Shared/SP_scholarship.svg" alt="Studyportals scholarships"/>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
    <div id="RelatedInformation" class="WhiteBackgroundPane">
        <div class="col1 wrapped">
            <div class="colblock">
                <div data-module="" class="Module StudyPortals_Shared_Modules_CountryXDegree_EntryPoint_EntryPoint">
                    <article id="CountryXDegreeEntryPoint">
                        <h3> Master's Degrees in Germany </h3>
                        <ul>
                            <li data-clickable="clickable">
                                <a href="/countries/degrees/537051137/master-of-science-in-germany" title="Master of Science (M.Sc.) - 806 programmes">
                                    <strong>Master of Science (M.Sc.)</strong> 806 programmes </a>
                            </li>
                            <li data-clickable="clickable"> <a href="/countries/degrees/537051138/master-of-arts-in-germany" title="Master of Arts (M.A.) - 318 programmes">
                                    <strong>Master of Arts (M.A.)</strong> 318 programmes </a>
                            </li>
                            <li data-clickable="clickable"> <a href="/countries/degrees/537051139/master-of-business-administration-in-germany" title="Master of Business Administration (M.B.A.) - 105 programmes">
                                    <strong>Master of Business Administration (M.B.A.)</strong> 105 programmes </a>
                            </li>
                            <li data-clickable="clickable">
                                <a href="/countries/degrees/537051145/master-of-engineering-in-germany" title="Master of Engineering (M.Eng.) - 36 programmes"> <strong>Master of Engineering (M.Eng.)</strong> 36 programmes </a>
                            </li>
                        </ul>
                    </article>
                </div>
                <div data-module="" class="Module StudyPortals_Shared_Modules_Country_FacebookFeed_FacebookFeed">
                </div>
                <div data-module="" class="Module StudyPortals_Shared_Modules_CountrySpotlightRR_CountrySpotlightRR">
                    <div id="CountrySpotlight">
                        <h2>Where to study abroad?</h2>
                        <div id="CountrySpotlightContainer">
                            <figure data-clickable="clickable">
                                <a href="https://www.mastersportal.com/countries/1/netherlands.html" title="Netherlands">
                                    <span class="Picture" data-file-url="//storage-prtl-co.imgix.net/mp/fce406d2.jpg" data-title="Netherlands" >
                                        <picture>
                                            <source media="all and (max-width: 30em)" srcset="//storage-prtl-co.imgix.net/mp/fce406d2.jpg?w=231&h=154&fit=crop&crop=entropy&auto=format,compress&q=40">
                                            <source media="all and (min-width: 30.063em) and (max-width: 48em)" srcset="//storage-prtl-co.imgix.net/mp/fce406d2.jpg?w=359&h=243&fit=crop&crop=entropy&auto=format,compress&q=40">
                                            <source media="all and (min-width: 48.063em) and (max-width: 80em)" srcset="//storage-prtl-co.imgix.net/mp/fce406d2.jpg?w=410&h=273&fit=crop&crop=entropy&auto=format,compress&q=40">
                                            <source media="all and (min-width: 80.063em)" srcset="//storage-prtl-co.imgix.net/mp/fce406d2.jpg?w=224&h=150&fit=crop&crop=entropy&auto=format,compress&q=40">
                                            <img src="//storage-prtl-co.imgix.net/mp/fce406d2.jpg?w=224&h=150&fit=crop&crop=entropy&auto=format,compress&q=40" alt="Netherlands" loading="lazy" width="143" height="95" > </picture> </span> </a>
                                <figcaption>
                                    <span> Netherlands </span>
                                    <div class="Toggle"> Study abroad
                                        in the Netherlands (also known as Holland), the first non-English-speaking
                                        country to offer Bachelor’s and Master’s degrees taught in English. International
                                        students in the Netherlands love the country because of its tolerant and
                                        inclusive policies. Choose to study in the Netherlands at some of the best
                                        universities and colleges in Europe. </div>
                                </figcaption>
                            </figure>
                            <figure data-clickable="clickable">
                                <a href="https://www.mastersportal.com/countries/7/czech-republic.html" title="Czech Republic">
                                    <span class="Picture" data-file-url="//storage-prtl-co.imgix.net/endor/countries/7/images/1603188237_canva_aerial-view-of-concrete-bridge-and-buildings-surrounded-by-trees.jpg" data-title="Czech Republic" >
                                        <picture>
                                            <source media="all and (max-width: 30em)" srcset="//storage-prtl-co.imgix.net/endor/countries/7/images/1603188237_canva_aerial-view-of-concrete-bridge-and-buildings-surrounded-by-trees.jpg?w=231&h=154&fit=crop&crop=entropy&auto=format,compress&q=40">
                                            <source media="all and (min-width: 30.063em) and (max-width: 48em)" srcset="//storage-prtl-co.imgix.net/endor/countries/7/images/1603188237_canva_aerial-view-of-concrete-bridge-and-buildings-surrounded-by-trees.jpg?w=359&h=243&fit=crop&crop=entropy&auto=format,compress&q=40">
                                            <source media="all and (min-width: 48.063em) and (max-width: 80em)" srcset="//storage-prtl-co.imgix.net/endor/countries/7/images/1603188237_canva_aerial-view-of-concrete-bridge-and-buildings-surrounded-by-trees.jpg?w=410&h=273&fit=crop&crop=entropy&auto=format,compress&q=40">
                                            <source media="all and (min-width: 80.063em)" srcset="//storage-prtl-co.imgix.net/endor/countries/7/images/1603188237_canva_aerial-view-of-concrete-bridge-and-buildings-surrounded-by-trees.jpg?w=224&h=150&fit=crop&crop=entropy&auto=format,compress&q=40">
                                            <img src="//storage-prtl-co.imgix.net/endor/countries/7/images/1603188237_canva_aerial-view-of-concrete-bridge-and-buildings-surrounded-by-trees.jpg?w=224&h=150&fit=crop&crop=entropy&auto=format,compress&q=40" alt="Czech Republic" loading="lazy" width="143" height="95" >
                                        </picture>
                                    </span>
                                </a>
                                <figcaption>
                                    <span> Czech Republic </span>
                                    <div class="Toggle"> Czech Republic is the country with the highest human development in Central and Eastern Europe and has ranked as the third most peaceful country in Europe. Member of the European Union since 2004, the Czech Republic has the Czech koruna as a currency and the beautiful city of Prague as capital.</div>
                                </figcaption>
                            </figure>
                            <figure data-clickable="clickable">
                                <a href="https://www.mastersportal.com/countries/9/finland.html" title="Finland">
                                    <span class="Picture" data-file-url="//storage-prtl-co.imgix.net/mp/fa950397.jpg" data-title="Finland" >
                                        <picture>
                                            <source media="all and (max-width: 30em)" srcset="//storage-prtl-co.imgix.net/mp/fa950397.jpg?w=231&h=154&fit=crop&crop=entropy&auto=format,compress&q=40">
                                            <source media="all and (min-width: 30.063em) and (max-width: 48em)" srcset="//storage-prtl-co.imgix.net/mp/fa950397.jpg?w=359&h=243&fit=crop&crop=entropy&auto=format,compress&q=40">
                                            <source media="all and (min-width: 48.063em) and (max-width: 80em)" srcset="//storage-prtl-co.imgix.net/mp/fa950397.jpg?w=410&h=273&fit=crop&crop=entropy&auto=format,compress&q=40">
                                            <source media="all and (min-width: 80.063em)" srcset="//storage-prtl-co.imgix.net/mp/fa950397.jpg?w=224&h=150&fit=crop&crop=entropy&auto=format,compress&q=40">
                                            <img src="//storage-prtl-co.imgix.net/mp/fa950397.jpg?w=224&h=150&fit=crop&crop=entropy&auto=format,compress&q=40" alt="Finland" loading="lazy" width="143" height="95" >
                                        </picture>
                                    </span>
                                </a>
                                <figcaption>
                                    <span> Finland </span>
                                    <div class="Toggle"> Study in Finland,
                                        the country in northern Europe who has figured out how to provide some of the
                                        best education in the world. Study abroad in Finland, a transparent open civic
                                        society, where education is always a priority. Not to mention you can also find
                                        inexpensive or tuition-free degrees to study in Finland. </div>
                                </figcaption>
                            </figure>
                            <figure data-clickable="clickable">
                                <a href="https://www.mastersportal.com/countries/14/ireland.html" title="Ireland">
                                    <span class="Picture" data-file-url="//storage-prtl-co.imgix.net/mp/79230930.jpg" data-title="Ireland" >
                                        <picture>
                                            <source media="all and (max-width: 30em)" srcset="//storage-prtl-co.imgix.net/mp/79230930.jpg?w=231&h=154&fit=crop&crop=entropy&auto=format,compress&q=40">
                                            <source media="all and (min-width: 30.063em) and (max-width: 48em)" srcset="//storage-prtl-co.imgix.net/mp/79230930.jpg?w=359&h=243&fit=crop&crop=entropy&auto=format,compress&q=40">
                                            <source media="all and (min-width: 48.063em) and (max-width: 80em)" srcset="//storage-prtl-co.imgix.net/mp/79230930.jpg?w=410&h=273&fit=crop&crop=entropy&auto=format,compress&q=40">
                                            <source media="all and (min-width: 80.063em)" srcset="//storage-prtl-co.imgix.net/mp/79230930.jpg?w=224&h=150&fit=crop&crop=entropy&auto=format,compress&q=40">
                                            <img src="//storage-prtl-co.imgix.net/mp/79230930.jpg?w=224&h=150&fit=crop&crop=entropy&auto=format,compress&q=40" alt="Ireland" loading="lazy" width="143" height="95" >
                                        </picture>
                                    </span>
                                </a>
                                <figcaption>
                                    <span> Ireland </span>
                                    <div class="Toggle"> Study abroad
                                        in Ireland, the place where literature meets beautiful landscape, innovation and
                                        a welcoming international climate. By studying in Ireland, you will enjoy the most
                                        welcoming countries in the world and benefit from lots of opportunities in
                                        education and research. </div>
                                </figcaption>
                            </figure>
                            <figure data-clickable="clickable">
                                <a href="https://www.mastersportal.com/countries/19/norway.html" title="Norway">
                                    <span class="Picture" data-file-url="//storage-prtl-co.imgix.net/mp/5ca0a6d4.jpg" data-title="Norway" >
                                        <picture>
                                            <source media="all and (max-width: 30em)" srcset="//storage-prtl-co.imgix.net/mp/5ca0a6d4.jpg?w=231&h=154&fit=crop&crop=entropy&auto=format,compress&q=40">
                                            <source media="all and (min-width: 30.063em) and (max-width: 48em)" srcset="//storage-prtl-co.imgix.net/mp/5ca0a6d4.jpg?w=359&h=243&fit=crop&crop=entropy&auto=format,compress&q=40">
                                            <source media="all and (min-width: 48.063em) and (max-width: 80em)" srcset="//storage-prtl-co.imgix.net/mp/5ca0a6d4.jpg?w=410&h=273&fit=crop&crop=entropy&auto=format,compress&q=40">
                                            <source media="all and (min-width: 80.063em)" srcset="//storage-prtl-co.imgix.net/mp/5ca0a6d4.jpg?w=224&h=150&fit=crop&crop=entropy&auto=format,compress&q=40">
                                            <img src="//storage-prtl-co.imgix.net/mp/5ca0a6d4.jpg?w=224&h=150&fit=crop&crop=entropy&auto=format,compress&q=40" alt="Norway" loading="lazy" width="143" height="95" >
                                        </picture>
                                    </span>
                                </a>
                                <figcaption>
                                    <span> Norway </span>
                                    <div class="Toggle"> Study abroad
                                        in Norway, the country that is consistently ranked by the UN as having the highest
                                        standard of living in the world based largely on average levels of education
                                        and income. Higher studies in Norway are some of the best in Europe. International
                                        students have plenty of English-taught degrees to choose from at universities and
                                        colleges in Norway. </div>
                                </figcaption>
                            </figure>
                            <figure data-clickable="clickable">
                                <a href="https://www.mastersportal.com/countries/20/poland.html" title="Poland">
                                    <span class="Picture" data-file-url="//storage-prtl-co.imgix.net/mp/0b5078c3.jpg" data-title="Poland" >
                                        <picture>
                                            <source media="all and (max-width: 30em)" srcset="//storage-prtl-co.imgix.net/mp/0b5078c3.jpg?w=231&h=154&fit=crop&crop=entropy&auto=format,compress&q=40">
                                            <source media="all and (min-width: 30.063em) and (max-width: 48em)" srcset="//storage-prtl-co.imgix.net/mp/0b5078c3.jpg?w=359&h=243&fit=crop&crop=entropy&auto=format,compress&q=40">
                                            <source media="all and (min-width: 48.063em) and (max-width: 80em)" srcset="//storage-prtl-co.imgix.net/mp/0b5078c3.jpg?w=410&h=273&fit=crop&crop=entropy&auto=format,compress&q=40">
                                            <source media="all and (min-width: 80.063em)" srcset="//storage-prtl-co.imgix.net/mp/0b5078c3.jpg?w=224&h=150&fit=crop&crop=entropy&auto=format,compress&q=40">
                                            <img src="//storage-prtl-co.imgix.net/mp/0b5078c3.jpg?w=224&h=150&fit=crop&crop=entropy&auto=format,compress&q=40" alt="Poland" loading="lazy" width="143" height="95" >
                                        </picture>
                                    </span>
                                </a>
                                <figcaption>
                                    <span> Poland </span>
                                    <div class="Toggle"> Studying in Poland will provide a solid education which will thoroughly prepare you for work in the most advanced labour markets of the world, at the same time stimulating your own personal development. You will also have the unique opportunity of meeting outstanding specialists and renowned intellectuals in your chosen field. </div>
                                </figcaption>
                            </figure>
                            <figure data-clickable="clickable">
                                <a href="https://www.mastersportal.com/countries/26/sweden.html" title="Sweden">
                                    <span class="Picture" data-file-url="//storage-prtl-co.imgix.net/endor/countries/26/images/1511346224_sweden%20cover%20image.jpg" data-title="Sweden" >
                                        <picture>
                                            <source media="all and (max-width: 30em)" srcset="//storage-prtl-co.imgix.net/endor/countries/26/images/1511346224_sweden%20cover%20image.jpg?w=231&h=154&fit=crop&crop=entropy&auto=format,compress&q=40">
                                            <source media="all and (min-width: 30.063em) and (max-width: 48em)" srcset="//storage-prtl-co.imgix.net/endor/countries/26/images/1511346224_sweden%20cover%20image.jpg?w=359&h=243&fit=crop&crop=entropy&auto=format,compress&q=40">
                                            <source media="all and (min-width: 48.063em) and (max-width: 80em)" srcset="//storage-prtl-co.imgix.net/endor/countries/26/images/1511346224_sweden%20cover%20image.jpg?w=410&h=273&fit=crop&crop=entropy&auto=format,compress&q=40">
                                            <source media="all and (min-width: 80.063em)" srcset="//storage-prtl-co.imgix.net/endor/countries/26/images/1511346224_sweden%20cover%20image.jpg?w=224&h=150&fit=crop&crop=entropy&auto=format,compress&q=40">
                                            <img src="//storage-prtl-co.imgix.net/endor/countries/26/images/1511346224_sweden%20cover%20image.jpg?w=224&h=150&fit=crop&crop=entropy&auto=format,compress&q=40" alt="Sweden" loading="lazy" width="143" height="95" >
                                        </picture>
                                    </span>
                                </a>
                                <figcaption>
                                    <span> Sweden </span>
                                    <div class="Toggle"> Study in
                                        Sweden to learn how to conduct top-quality research and develop independent thinking.
                                        People who study abroad in Sweden benefit from integration in a multicultural
                                        society and rigorous Bachelor’s and Master’s degrees at universities and
                                        colleges that look towards the future. </div>
                                </figcaption>
                            </figure>
                            <figure data-clickable="clickable">
                                <a href="https://www.mastersportal.com/countries/27/switzerland.html" title="Switzerland">
                                    <span class="Picture" data-file-url="//storage-prtl-co.imgix.net/endor/countries/27/images/1511346964_Switzerland.jpg" data-title="Switzerland" >
                                        <picture>
                                            <source media="all and (max-width: 30em)" srcset="//storage-prtl-co.imgix.net/endor/countries/27/images/1511346964_Switzerland.jpg?w=231&h=154&fit=crop&crop=entropy&auto=format,compress&q=40">
                                            <source media="all and (min-width: 30.063em) and (max-width: 48em)" srcset="//storage-prtl-co.imgix.net/endor/countries/27/images/1511346964_Switzerland.jpg?w=359&h=243&fit=crop&crop=entropy&auto=format,compress&q=40">
                                            <source media="all and (min-width: 48.063em) and (max-width: 80em)" srcset="//storage-prtl-co.imgix.net/endor/countries/27/images/1511346964_Switzerland.jpg?w=410&h=273&fit=crop&crop=entropy&auto=format,compress&q=40">
                                            <source media="all and (min-width: 80.063em)" srcset="//storage-prtl-co.imgix.net/endor/countries/27/images/1511346964_Switzerland.jpg?w=224&h=150&fit=crop&crop=entropy&auto=format,compress&q=40">
                                            <img src="//storage-prtl-co.imgix.net/endor/countries/27/images/1511346964_Switzerland.jpg?w=224&h=150&fit=crop&crop=entropy&auto=format,compress&q=40" alt="Switzerland" loading="lazy" width="143" height="95" >
                                        </picture>
                                    </span>
                                </a>
                                <figcaption>
                                    <span> Switzerland </span>
                                    <div class="Toggle"> Study abroad
                                        in Switzerland is a federal Republic in western Europe with one of the highest
                                        standards of living. You can study in Switzerland in English even if the
                                        country has four official languages: German (predominant), French, Italian and
                                        Romansh. Switzerland is well known for its quality postgraduate studies, but
                                        you can also find great Bachelor’s and Master’s degree options. </div>
                                </figcaption>
                            </figure>
                            <figure data-clickable="clickable">
                                <a href="https://www.mastersportal.com/countries/30/united-kingdom.html" title="United Kingdom">
                                    <span class="Picture" data-file-url="//storage-prtl-co.imgix.net/mp/d3369e27.jpg" data-title="United Kingdom" >
                                        <picture>
                                            <source media="all and (max-width: 30em)" srcset="//storage-prtl-co.imgix.net/mp/d3369e27.jpg?w=231&h=154&fit=crop&crop=entropy&auto=format,compress&q=40">
                                            <source media="all and (min-width: 30.063em) and (max-width: 48em)" srcset="//storage-prtl-co.imgix.net/mp/d3369e27.jpg?w=359&h=243&fit=crop&crop=entropy&auto=format,compress&q=40">
                                            <source media="all and (min-width: 48.063em) and (max-width: 80em)" srcset="//storage-prtl-co.imgix.net/mp/d3369e27.jpg?w=410&h=273&fit=crop&crop=entropy&auto=format,compress&q=40">
                                            <source media="all and (min-width: 80.063em)" srcset="//storage-prtl-co.imgix.net/mp/d3369e27.jpg?w=224&h=150&fit=crop&crop=entropy&auto=format,compress&q=40">
                                            <img src="//storage-prtl-co.imgix.net/mp/d3369e27.jpg?w=224&h=150&fit=crop&crop=entropy&auto=format,compress&q=40" alt="United Kingdom" loading="lazy" width="143" height="95" >
                                        </picture>
                                    </span>
                                </a>
                                <figcaption>
                                    <span> United Kingdom </span>
                                    <div class="Toggle"> Study in the
                                        UK and feel like you have entered a modern-day fairy tale. Universities and
                                        colleges in the UK - as well as the outstanding facilities they provide - are
                                        mesmerizing for international students. All the modern universities in the
                                        United Kingdom enable you to engage in ground-breaking research, regardless if
                                        you study in Britain, Scotland, Wales or Northern Ireland. </div>
                                </figcaption>
                            </figure>
                            <figure data-clickable="clickable"> <a href="https://www.mastersportal.com/countries/56/canada.html" title="Canada">
                                    <span class="Picture" data-file-url="//storage-prtl-co.imgix.net/endor/countries/56/images/1546950707_Canada.jpg" data-title="Canada" >
                                        <picture>
                                            <source media="all and (max-width: 30em)" srcset="//storage-prtl-co.imgix.net/endor/countries/56/images/1546950707_Canada.jpg?w=231&h=154&fit=crop&crop=entropy&auto=format,compress&q=40">
                                            <source media="all and (min-width: 30.063em) and (max-width: 48em)" srcset="//storage-prtl-co.imgix.net/endor/countries/56/images/1546950707_Canada.jpg?w=359&h=243&fit=crop&crop=entropy&auto=format,compress&q=40">
                                            <source media="all and (min-width: 48.063em) and (max-width: 80em)" srcset="//storage-prtl-co.imgix.net/endor/countries/56/images/1546950707_Canada.jpg?w=410&h=273&fit=crop&crop=entropy&auto=format,compress&q=40">
                                            <source media="all and (min-width: 80.063em)" srcset="//storage-prtl-co.imgix.net/endor/countries/56/images/1546950707_Canada.jpg?w=224&h=150&fit=crop&crop=entropy&auto=format,compress&q=40">
                                            <img src="//storage-prtl-co.imgix.net/endor/countries/56/images/1546950707_Canada.jpg?w=224&h=150&fit=crop&crop=entropy&auto=format,compress&q=40" alt="Canada" loading="lazy" width="143" height="95" >
                                        </picture>
                                    </span>
                                </a>
                                <figcaption>
                                    <span> Canada </span>
                                    <div class="Toggle"> Study in Canada
                                        - one of the strongest economies in the world. By studying abroad in Canada,
                                        you will enjoy a high standard of living, as well as top-level education at
                                        Canadian universities and colleges. The best universities in Canada provide
                                        great degrees and are some of the most welcoming to international students. </div>
                                </figcaption>
                            </figure>
                            <figure data-clickable="clickable">
                                <a href="https://www.mastersportal.com/countries/82/united-states.html" title="United States">
                                    <span class="Picture" data-file-url="//storage-prtl-co.imgix.net/mp/70588891.jpg" data-title="United States" >
                                        <picture>
                                            <source media="all and (max-width: 30em)" srcset="//storage-prtl-co.imgix.net/mp/70588891.jpg?w=231&h=154&fit=crop&crop=entropy&auto=format,compress&q=40">
                                            <source media="all and (min-width: 30.063em) and (max-width: 48em)" srcset="//storage-prtl-co.imgix.net/mp/70588891.jpg?w=359&h=243&fit=crop&crop=entropy&auto=format,compress&q=40">
                                            <source media="all and (min-width: 48.063em) and (max-width: 80em)" srcset="//storage-prtl-co.imgix.net/mp/70588891.jpg?w=410&h=273&fit=crop&crop=entropy&auto=format,compress&q=40">
                                            <source media="all and (min-width: 80.063em)" srcset="//storage-prtl-co.imgix.net/mp/70588891.jpg?w=224&h=150&fit=crop&crop=entropy&auto=format,compress&q=40">
                                            <img src="//storage-prtl-co.imgix.net/mp/70588891.jpg?w=224&h=150&fit=crop&crop=entropy&auto=format,compress&q=40" alt="United States" loading="lazy" width="143" height="95" >
                                        </picture>
                                    </span>
                                </a>
                                <figcaption>
                                    <span> United States </span>
                                    <div class="Toggle"> Study in the
                                        U.S.A, home to some of the most prestigious universities and colleges. The
                                        United States is internationally renowned for top business schools, medical
                                        schools and engineering schools. International students in the U.S. can select
                                        from a huge variety of Bachelor’s and Master’s degrees offered by some of the
                                        best universities in the world. </div>
                                </figcaption>
                            </figure>
                            <figure data-clickable="clickable">
                                <a href="https://www.mastersportal.com/countries/112/israel.html" title="Israel">
                                    <span class="Picture" data-file-url="//storage-prtl-co.imgix.net/endor/countries/112/images/1584971992_cover.jpg" data-title="Israel" >
                                        <picture>
                                            <source media="all and (max-width: 30em)" srcset="//storage-prtl-co.imgix.net/endor/countries/112/images/1584971992_cover.jpg?w=231&h=154&fit=crop&crop=entropy&auto=format,compress&q=40">
                                            <source media="all and (min-width: 30.063em) and (max-width: 48em)" srcset="//storage-prtl-co.imgix.net/endor/countries/112/images/1584971992_cover.jpg?w=359&h=243&fit=crop&crop=entropy&auto=format,compress&q=40">
                                            <source media="all and (min-width: 48.063em) and (max-width: 80em)" srcset="//storage-prtl-co.imgix.net/endor/countries/112/images/1584971992_cover.jpg?w=410&h=273&fit=crop&crop=entropy&auto=format,compress&q=40">
                                            <source media="all and (min-width: 80.063em)" srcset="//storage-prtl-co.imgix.net/endor/countries/112/images/1584971992_cover.jpg?w=224&h=150&fit=crop&crop=entropy&auto=format,compress&q=40">
                                            <img src="//storage-prtl-co.imgix.net/endor/countries/112/images/1584971992_cover.jpg?w=224&h=150&fit=crop&crop=entropy&auto=format,compress&q=40" alt="Israel" loading="lazy" width="143" height="95" >
                                        </picture>
                                    </span>
                                </a>
                                <figcaption>
                                    <span> Israel </span>
                                    <div class="Toggle"> Study abroad
                                        in Israel and explore iconic sites for European and Middle-Eastern culture.
                                        Universities and study centres in Israel offer international students
                                        English-taught Bachelor’s and Master’s degrees. Study in Israel, also known as
                                        the “Start-Up Nation”, with
                                        the world’s highest investment per capita in start-up companies. Israel was
                                        ranked the 3rd most innovative country in the world. </div>
                                </figcaption>
                            </figure>
                            <figure data-clickable="clickable">
                                <a href="https://www.mastersportal.com/countries/202/australia.html" title="Australia">
                                    <span class="Picture" data-file-url="//storage-prtl-co.imgix.net/mp/605559eb.jpg" data-title="Australia" >
                                        <picture>
                                            <source media="all and (max-width: 30em)" srcset="//storage-prtl-co.imgix.net/mp/605559eb.jpg?w=231&h=154&fit=crop&crop=entropy&auto=format,compress&q=40">
                                            <source media="all and (min-width: 30.063em) and (max-width: 48em)" srcset="//storage-prtl-co.imgix.net/mp/605559eb.jpg?w=359&h=243&fit=crop&crop=entropy&auto=format,compress&q=40">
                                            <source media="all and (min-width: 48.063em) and (max-width: 80em)" srcset="//storage-prtl-co.imgix.net/mp/605559eb.jpg?w=410&h=273&fit=crop&crop=entropy&auto=format,compress&q=40">
                                            <source media="all and (min-width: 80.063em)" srcset="//storage-prtl-co.imgix.net/mp/605559eb.jpg?w=224&h=150&fit=crop&crop=entropy&auto=format,compress&q=40">
                                            <img src="//storage-prtl-co.imgix.net/mp/605559eb.jpg?w=224&h=150&fit=crop&crop=entropy&auto=format,compress&q=40" alt="Australia" loading="lazy" width="143" height="95" >
                                        </picture>
                                    </span>
                                </a>
                                <figcaption>
                                    <span> Australia </span>
                                    <div class="Toggle"> Study abroad
                                        in Australia, known for its warm climate, beautiful beaches, the Great
                                        Outback, and exceptional colleges and universities. In addition to these
                                        advantages, international students in Australia will study in the country with the
                                        world’s second highest development index. Study in Australia at top business
                                        school and engineering schools, dominating international education statistics. </div>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer id="Footer" class="js-footer">
        <section id="FooterMain">
            <div class="BgBars">
                <div class="BgBarA">&nbsp;</div>
                <div class="BgBarB">&nbsp;</div>
                <div class="BgBarC">&nbsp;</div>
                <div class="BgBarD">&nbsp;</div>
            </div>
            <div class="FooterMainCol1 col1 no-vertical-padding wrapped">
                <div class="colblock no-top-margin">
                    <div id="FooterScrollToTopWrapper">
                        <div data-module="" class="Module StudyPortals_Shared_Modules_Footer_FooterScrollToTop_FooterScrollToTop">
                            <div id="FooterScrollToTop">
                                <button class="FooterScrollToTopButton" id="js-FooterScrollToTopClick" title="Scroll to top">
                                    <span class="FooterScrollToTopRocket" id="js-FooterScrollToTopAnimate">
                                        <svg id="ToTopRocketSVG" viewBox="0 0 23 64" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <defs>
                                                <path d="M9.41593903 14.1209893c-1.03049752.9923723-1.03049752 2.6043019 0 3.5957737 1.03049747.9914718 2.70681087.9914718 3.73637247 0 1.0304975-.9914718 1.0304975-2.6034014 0-3.5957737-1.0295616-.9914718-2.705875-.9914718-3.73637247 0m4.98214197 4.7934644c-1.7165599 1.6515524-4.51135155 1.6515524-6.22791145 0-1.7165599-1.6515525-1.7165599-4.3396027 0-5.9911551 1.7165599-1.6515525 4.51135155-1.6515525 6.22791145 0 1.7156239 1.6506519 1.7156239 4.3405031 0 5.9911551" id="window"/>
                                                <path d="M9.77787671 35.2286221c-.615865.5934423-.80118608 1.8109444-.53443604 3.5228317.26019828 1.6821701.94532473 3.7794796 2.04040383 6.2496041.9939949-2.2440941 1.6510423-4.1820117 1.9599108-5.779533.4165044-2.1576444.1038921-3.2166551-.2302474-3.7236475-.3360115-.5069924-.9022703-.7555357-1.7296634-.7555357-.6720229.0009005-1.1652765.161193-1.50596779.488982v-.0027016zm2.12838449 12.4469783c-.160986.1557898-.3837456.2485433-.6224167.2485433-.3416273.001801-.6542396-.1891091-.7974422-.4862804-3.35356281-6.9159885-4.00873835-11.4275904-1.9533591-13.4051308.67857466-.6528766 1.6051801-.9833672 2.7508013-.9851682 1.8139002.0009005 2.7498653.837483 3.2150399 1.5407886 1.4619774 2.2071729.6476878 6.5296657-2.4157258 12.8477093-.0439903.0909525-.1038921.1728997-.1750254.2413392l-.001872-.001801z" id="flame"/>
                                                <path d="M18.5004158 19.1617363c-.3051246 4.6917057-2.4700118 7.7696808-2.8565653 8.1415953-.0028079.0027015-.2630062.2440407-1.4348345.4385529-.8180334.1377795-1.8569546.2125226-2.9248907.2125226-1.0660642 0-2.10592139-.0756437-2.92208292-.2134231-1.17182824-.1936117-1.43202652-.4349509-1.43483441-.4376524-.3856176-.371014-2.55237669-3.4498896-2.8575013-8.1415953-.3640904-5.6138375 2.12838452-11.27270103 7.21722653-16.41106435C16.3767111 7.88903527 18.86825 13.5469982 18.5032237 19.1617363h-.0028079zm1.606116 13.1709958c-.5007413-1.4075118-1.3243905-3.0068341-2.678732-4.4782827.671087-.9356396 1.554638-2.5907941 2.1630153-4.730428 1.3693168 2.6124065 1.0492168 6.4125981.5129088 9.2105117l.0028079-.001801zm-17.64762097.0045026c-.53443605-2.7997147-.85640802-6.6008068.51758867-9.2141139.60650535 2.1405345 1.48912039 3.793888 2.16301522 4.7322291-1.35434142 1.4741502-2.17986259 3.0761741-2.68060389 4.4818848zM10.6617085.93972757C7.42888523 4.05012135 5.09646033 7.34692263 3.72807943 10.7436816c-1.12596595 2.8024161-1.60424409 5.6678686-1.41985898 8.5234154.03556668.5331075.09453247 1.0500056.16847371 1.5515949C1.47614753 21.920027.80318866 23.388774.47934475 25.1862106.20323506 26.7071878.17609207 28.4740067.3923 30.4371389c.36783426 3.3013038 1.29818352 6.0073644 1.33749405 6.1217304.1366509.3935269.54847552.6330651.97433962.5682277.18812897-.0297171.35660268-.116167.48295796-.2368366.15911406-.1539888.25739039-.3665114.25926232-.5988453-.00187193-.0099058.00935965-1.1472617.44926323-2.675443.36502636-1.2616276 1.09882296-3.0392527 2.5598644-4.6340725 1.40675547.5916412 3.74386022.6672848 4.82864372.6672848 1.0819756 0 3.4200163-.0747431 4.8239638-.6672848 1.4638494 1.5948198 2.19671 3.3724449 2.5608004 4.633172.4408395 1.5317834.4511351 2.6646367.4511351 2.6745424 0 .4160399.3135483.769944.7394124.837483.2882773.0432249.5700028-.0486281.7656194-.2368366.0945325-.091853.1684738-.2035174.2105922-.3313911.0393105-.114366.9696598-2.8204266 1.3346861-6.1217304.2199518-1.9640327.1909369-3.7290506-.0823649-5.2518288-.3266518-1.7983371-.9968028-3.2634821-1.9992213-4.3666182.0758131-.4988877.132907-1.0166864.1684737-1.5515949.1843851-2.8555468-.293893-5.7209993-1.419859-8.5234154-1.3683809-3.39495793-3.7017418-6.69536129-6.9326931-9.80395403l-.6233527-.59974588-.6224168.59974588h.0028079z" id="rocket"/>
                                            </defs>
                                            <use fill="#1C5A75" xlink:href="#rocket" id="ToTopRocket"/>
                                            <use fill="#1C5A75" xlink:href="#window" id="ToTopRocketWindow"/>
                                            <use fill="#FCAB10" xlink:href="#flame" id="ToTopRocketFlame"/>
                                        </svg>
                                    </span>
                                    <span class="FooterScrollToTopText">Top</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div id="FooterMainInner">
                        <div data-module="" class="Module StudyPortals_Shared_Modules_Footer_FooterAboutUs_FooterAboutUs">
                            <div id="FooterAboutUs">
                                <strong class="Header">About StudyAbroad</strong>
                                <ul class="List">
                                    <li class="ListItem">
                                        <a href="https://studyportals.com/about-us/" class="Link" title="About Studyportals" target="_blank" rel="noopener"> About StudyAbroad </a>
                                    </li>
                                    <li class="ListItem">
                                        <a href="https://studyportals.com/institutions/" class="Link" title="Our Marketing Services" target="_blank" rel="noopener"> Our Marketing Services </a>
                                    </li>
                                    <li class="ListItem">
                                        <a href="https://studyportals.com/careers/" class="Link" title="Careers" target="_blank" rel="noopener"> Careers </a>
                                    </li>
                                    <li class="ListItem">
                                        <a href="https://studyportals.com/contact/" class="Link" title="Contact us" target="_blank" rel="noopener"> Contact us </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div data-module="" class="Module StudyPortals_Shared_Modules_Footer_FooterOurPortals_FooterOurPortals">
                            <nav id="FooterOurPortals">
                                <strong class="Header">Our websites</strong>
                                <ul class="List">
                                    <li class="ListItem">
                                        <a href="https://www.bachelorsportal.com/?redirect=false" class="Link" title="Bachelorsportal.com" target="BachelorsPortal" rel="noopener">Bachelorsportal</a>
                                    </li>
                                    <li class="ListItem">
                                        <a href="https://www.mastersportal.com/?redirect=false" class="Link" title="Mastersportal.com" target="MastersPortal" rel="noopener">Mastersportal</a>
                                    </li>
                                    <li class="ListItem">
                                        <a href="https://www.phdportal.com/?redirect=false" class="Link" title="PhDportal.com" target="PhDPortal" rel="noopener">PhDportal</a>
                                    </li>
                                    <li class="ListItem">
                                        <a href="https://www.distancelearningportal.com/?redirect=false" class="Link" title="DistanceLearningportal.com" target="DistanceLearningPortal" rel="noopener">DistanceLearningportal</a>
                                    </li>
                                    <li class="ListItem">
                                        <a href="https://www.scholarshipportal.com/" class="Link" title="ScholarshipPortal.com" target="ScholarshipPortal" rel="noopener">Scholarshipportal</a>
                                    </li>
                                    <li class="ListItem">
                                        <a href="https://www.shortcoursesportal.com/?redirect=false" class="Link" title="ShortCoursesportal.com" target="ShortCoursesPortal" rel="noopener">ShortCoursesportal</a>
                                    </li>
                                    <li class="ListItem">
                                        <a href="https://admissiontestportal.com/" class="Link" title="AdmissionTestportal.com" target="AdmissionTestPortal" rel="noopener">AdmissionTestportal</a>
                                    </li>
                                    <li class="ListItem">
                                        <a href="https://englishtestportal.com/" class="Link" title="EnglishTestportal.com" target="EnglishTestPortal" rel="noopener">EnglishTestportal</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div>
                            <div data-module="" class="Module StudyPortals_Shared_Modules_Footer_FooterCurrency_FooterCurrency">
                                <div id="FooterCurrency">
                                    <strong class="Header">Nationality & currency</strong>
                                    <button class="DriverButton TuitionPreferencesButton js-showTuitionPreferences" title="Select your currency and country">
                                        <span class="LocationText js-locationText"></span>
                                        <span class="CurrencyText" data-currency-text="Local"></span>
                                    </button>
                                </div>
                            </div>
                            <div data-module="" class="Module StudyPortals_Shared_Modules_Footer_FooterSocialMediaIcons_FooterSocialMediaIcons">
                                <nav id="FooterSocialMediaIcons">
                                    <strong class="Header">Follow us</strong>
                                    <ul class="List">
                                        <li class="ListItem">
                                            <a href="#" class="Link" target="_blank" rel="noopener" title="Like us on Facebook">
                                                <i class="lnr-facebook SocialIcon"></i>
                                            </a>
                                        </li>
                                        <li class="ListItem">
                                            <a href="#" class="Link" target="_blank" rel="noopener" title="Connect to us on LinkedIn">
                                                <i class="lnr-linkedin SocialIcon"></i>
                                            </a>
                                        </li>
                                        <li class="ListItem">
                                            <a href="#" class="Link" target="_blank" rel="noopener" title="Follow us on YouTube">
                                                <i class="lnr-youtube SocialIcon"></i>
                                            </a>
                                        </li>
                                        <li class="ListItem">
                                            <a href="#" class="Link" target="_blank" rel="noopener" title="Follow us on Twitter">
                                                <i class="lnr-twitter SocialIcon"></i>
                                            </a>
                                        </li>
                                        <li class="ListItem">
                                            <a href="#" class="Link" target="_blank" rel="noopener" title="Follow us on Instagram"> <i class="lnr-instagram SocialIcon"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <div data-module="" class="Module StudyPortals_Shared_Modules_Footer_FooterAddToHomescreen_FooterAddToHomescreen">
                                <div id="FooterAddToHomescreen">
                                    <button id="AddToHomeScreen" class="DriverButton Link"> Add to home screen </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="FooterBranding">
            <div class="col1 no-vertical-padding wrapped">
                <div class="colblock FlexBranding">
                    <div class="FooterLogo">
                        <div data-module="" class="Module StudyPortals_Shared_Modules_Footer_FooterLogo_FooterLogo">
                            <img src="img/1.png" class="SPLogo" alt="Studyportals" style="width:120px !important; height:auto;" loading="lazy" >
                        </div>
                    </div>
                    <div class="FooterDisclaimer">
                        <div data-module="" class="Module StudyPortals_Shared_Modules_Footer_FooterDisclaimer_FooterDisclaimer">
                            <div id="FooterDisclaimer">
                                <ul class="LegalList">
                                    <li class="LegalListItem">
                                        <a href="https://studyportals.com/about-us/terms/" rel="noopener" class="LegalLink" title="Terms of use" target="_blank">Terms of Use</a>
                                    </li>
                                    <li class="LegalListItem">
                                        <a href="https://studyportals.com/about-us/privacy-2/" rel="noopener" class="LegalLink" title="Privacy &amp; Cookie statement" target="_blank">Privacy &amp; Cookie statement</a>
                                    </li>
                                    <li class="LegalListItem">
                                        <a href="https://studyportals.com/about-us/disclaimer/" rel="noopener" class="LegalLink" title="Disclaimer" target="_blank">Disclaimer</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="FooterCopyright">
            <div class="FooterCopyrightCol1 col1 no-vertical-padding wrapped">
                <div class="FooterCopyrightColBlock colblock">
                    <div data-module="" class="Module StudyPortals_Shared_Modules_Footer_FooterHiring_FooterHiring">
                        <div id="FooterHiring">
                            <a href="https://studyportals.com/careers/" rel="noopener" class="FooterHiringLink" title="We are hiring!" target="_blank">
                                <span>Crafted with</span>
                                <i class="lnr-heart"></i>
                                <span>by our team of 35 nationalities</span>
                            </a>
                            Copyright &copy; 2007&ndash;2021 StudyAbroad B.V.
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="Hidden">
            <div data-module="" class="Module StudyPortals_Shared_Modules_TuitionSettings_TuitionSettings">
                <div class="Hidden js-notAvailableTextMain">Unavailable</div>
                <aside id="TuitionSettings" class="PopupContent">
                    <span class="SettingsTitle">
                        <i class="lnr-earth SettingsTitleIcon"></i>
                        Nationality &amp; Currency </span>
                    <div class="ProfileQuestionnaire" data-questionnaire="localization_settings" > </div>
                    <div id="CurrencyWrapper">
                        <span class="Hidden currency_rate" data-fromto="EURAED" data-rate="4.351744"></span>
                        <span class="Hidden currency_rate" data-fromto="EURAFN" data-rate="91.938821"></span>
                        <span class="Hidden currency_rate" data-fromto="EURALL" data-rate="123.4511"></span>
                        <span class="Hidden currency_rate" data-fromto="EURAMD" data-rate="622.527744"></span>
                        <span class="Hidden currency_rate" data-fromto="EURANG" data-rate="2.12745"></span>
                        <span class="Hidden currency_rate" data-fromto="EURAOA" data-rate="732.514015"></span>
                        <span class="Hidden currency_rate" data-fromto="EURARS" data-rate="107.212017"></span>
                        <span class="Hidden currency_rate" data-fromto="EURAUD" data-rate="1.549685"></span>
                        <span class="Hidden currency_rate" data-fromto="EURAWG" data-rate="2.132512"></span>
                        <span class="Hidden currency_rate" data-fromto="EURAZN" data-rate="2.009917"></span>
                        <span class="Hidden currency_rate" data-fromto="EURBAM" data-rate="1.953306"></span>
                        <span class="Hidden currency_rate" data-fromto="EURBBD" data-rate="2.393107"></span>
                        <span class="Hidden currency_rate" data-fromto="EURBDT" data-rate="100.501411"></span>
                        <span class="Hidden currency_rate" data-fromto="EURBGN" data-rate="1.955748"></span>
                        <span class="Hidden currency_rate" data-fromto="EURBHD" data-rate="0.446883"></span>
                        <span class="Hidden currency_rate" data-fromto="EURBIF" data-rate="2326.215088"></span>
                        <span class="Hidden currency_rate" data-fromto="EURBMD" data-rate="1.184729"></span>
                        <span class="Hidden currency_rate" data-fromto="EURBND" data-rate="1.598121"></span>
                        <span class="Hidden currency_rate" data-fromto="EURBOB" data-rate="8.184023"></span>
                        <span class="Hidden currency_rate" data-fromto="EURBRL" data-rate="6.961353"></span>
                        <span class="Hidden currency_rate" data-fromto="EURBSD" data-rate="1.185268"></span>
                        <span class="Hidden currency_rate" data-fromto="EURBTC" data-rate="2.2935682E-5"></span>
                        <span class="Hidden currency_rate" data-fromto="EURBTN" data-rate="86.524575"></span>
                        <span class="Hidden currency_rate" data-fromto="EURBWP" data-rate="13.294818"></span>
                        <span class="Hidden currency_rate" data-fromto="EURBYN" data-rate="3.090506"></span>
                        <span class="Hidden currency_rate" data-fromto="EURBYR" data-rate="23220.685366"></span>
                        <span class="Hidden currency_rate" data-fromto="EURBZD" data-rate="2.389112"></span>
                        <span class="Hidden currency_rate" data-fromto="EURCAD" data-rate="1.500963"></span>
                        <span class="Hidden currency_rate" data-fromto="EURCDF" data-rate="2367.088914"></span>
                        <span class="Hidden currency_rate" data-fromto="EURCHF" data-rate="1.109415"></span>
                        <span class="Hidden currency_rate" data-fromto="EURCLF" data-rate="0.031622"></span>
                        <span class="Hidden currency_rate" data-fromto="EURCLP" data-rate="872.547553"></span>
                        <span class="Hidden currency_rate" data-fromto="EURCNY" data-rate="7.731663"></span>
                        <span class="Hidden currency_rate" data-fromto="EURCOP" data-rate="4270.592068"></span>
                        <span class="Hidden currency_rate" data-fromto="EURCRC" data-rate="725.702096"></span>
                        <span class="Hidden currency_rate" data-fromto="EURCUC" data-rate="1.184729"></span>
                        <span class="Hidden currency_rate" data-fromto="EURCUP" data-rate="31.395314"></span>
                        <span class="Hidden currency_rate" data-fromto="EURCVE" data-rate="110.594836"></span>
                        <span class="Hidden currency_rate" data-fromto="EURCZK" data-rate="26.414826"></span>
                        <span class="Hidden currency_rate" data-fromto="EURDJF" data-rate="210.549775"></span>
                        <span class="Hidden currency_rate" data-fromto="EURDKK" data-rate="7.436484"></span>
                        <span class="Hidden currency_rate" data-fromto="EURDOP" data-rate="68.536359"></span>
                        <span class="Hidden currency_rate" data-fromto="EURDZD" data-rate="157.713512"></span>
                        <span class="Hidden currency_rate" data-fromto="EUREGP" data-rate="18.636363"></span>
                        <span class="Hidden currency_rate" data-fromto="EURERN" data-rate="17.771114"></span>
                        <span class="Hidden currency_rate" data-fromto="EURETB" data-rate="47.622893"></span>
                        <span class="Hidden currency_rate" data-fromto="EUREUR" data-rate="1"></span>
                        <span class="Hidden currency_rate" data-fromto="EURFJD" data-rate="2.434322"></span>
                        <span class="Hidden currency_rate" data-fromto="EURFKP" data-rate="0.857391"></span>
                        <span class="Hidden currency_rate" data-fromto="EURGBP" data-rate="0.857305"></span>
                        <span class="Hidden currency_rate" data-fromto="EURGEL" data-rate="3.945163"></span>
                        <span class="Hidden currency_rate" data-fromto="EURGGP" data-rate="0.857391"></span>
                        <span class="Hidden currency_rate" data-fromto="EURGHS" data-rate="6.794391"></span>
                        <span class="Hidden currency_rate" data-fromto="EURGIP" data-rate="0.857391"></span>
                        <span class="Hidden currency_rate" data-fromto="EURGMD" data-rate="60.836343"></span>
                        <span class="Hidden currency_rate" data-fromto="EURGNF" data-rate="11936.142815"></span>
                        <span class="Hidden currency_rate" data-fromto="EURGTQ" data-rate="9.146978"></span>
                        <span class="Hidden currency_rate" data-fromto="EURGYD" data-rate="247.739819"></span>
                        <span class="Hidden currency_rate" data-fromto="EURHKD" data-rate="9.206587"></span>
                        <span class="Hidden currency_rate" data-fromto="EURHNL" data-rate="28.729578"></span>
                        <span class="Hidden currency_rate" data-fromto="EURHRK" data-rate="7.577052"></span>
                        <span class="Hidden currency_rate" data-fromto="EURHTG" data-rate="89.306579"></span>
                        <span class="Hidden currency_rate" data-fromto="EURHUF" data-rate="367.745786"></span>
                        <span class="Hidden currency_rate" data-fromto="EURIDR" data-rate="17028.258626"></span>
                        <span class="Hidden currency_rate" data-fromto="EURILS" data-rate="3.954424"></span>
                        <span class="Hidden currency_rate" data-fromto="EURIMP" data-rate="0.857391"></span>
                        <span class="Hidden currency_rate" data-fromto="EURINR" data-rate="86.8658"></span>
                        <span class="Hidden currency_rate" data-fromto="EURIQD" data-rate="1731.481207"></span>
                        <span class="Hidden currency_rate" data-fromto="EURIRR" data-rate="49883.008101"></span>
                        <span class="Hidden currency_rate" data-fromto="EURISK" data-rate="151.894742"></span>
                        <span class="Hidden currency_rate" data-fromto="EURJEP" data-rate="0.857391"></span>
                        <span class="Hidden currency_rate" data-fromto="EURJMD" data-rate="177.363773"></span>
                        <span class="Hidden currency_rate" data-fromto="EURJOD" data-rate="0.840011"></span>
                        <span class="Hidden currency_rate" data-fromto="EURJPY" data-rate="129.051331"></span>
                        <span class="Hidden currency_rate" data-fromto="EURKES" data-rate="129.971568"></span>
                        <span class="Hidden currency_rate" data-fromto="EURKGS" data-rate="100.46205"></span>
                        <span class="Hidden currency_rate" data-fromto="EURKHR" data-rate="4809.999426"></span>
                        <span class="Hidden currency_rate" data-fromto="EURKMF" data-rate="491.958852"></span>
                        <span class="Hidden currency_rate" data-fromto="EURKPW" data-rate="1066.165874"></span>
                        <span class="Hidden currency_rate" data-fromto="EURKRW" data-rate="1352.770342"></span>
                        <span class="Hidden currency_rate" data-fromto="EURKWD" data-rate="0.358937"></span>
                        <span class="Hidden currency_rate" data-fromto="EURKYD" data-rate="0.987723"></span>
                        <span class="Hidden currency_rate" data-fromto="EURKZT" data-rate="497.786656"></span>
                        <span class="Hidden currency_rate" data-fromto="EURLAK" data-rate="11099.724318"></span>
                        <span class="Hidden currency_rate" data-fromto="EURLBP" data-rate="1806.115972"></span>
                        <span class="Hidden currency_rate" data-fromto="EURLKR" data-rate="232.601084"></span>
                        <span class="Hidden currency_rate" data-fromto="EURLRD" data-rate="206.029637"></span>
                        <span class="Hidden currency_rate" data-fromto="EURLSL" data-rate="18.434595"></span>
                        <span class="Hidden currency_rate" data-fromto="EURLTL" data-rate="3.498196"></span>
                        <span class="Hidden currency_rate" data-fromto="EURLVL" data-rate="0.716631"></span>
                        <span class="Hidden currency_rate" data-fromto="EURLYD" data-rate="5.337232"></span>
                        <span class="Hidden currency_rate" data-fromto="EURMAD" data-rate="10.719443"></span>
                        <span class="Hidden currency_rate" data-fromto="EURMDL" data-rate="20.800717"></span>
                        <span class="Hidden currency_rate" data-fromto="EURMGA" data-rate="4454.580508"></span>
                        <span class="Hidden currency_rate" data-fromto="EURMKD" data-rate="61.61286"></span>
                        <span class="Hidden currency_rate" data-fromto="EURMMK" data-rate="1671.171961"></span>
                        <span class="Hidden currency_rate" data-fromto="EURMNT" data-rate="3376.369645"></span>
                        <span class="Hidden currency_rate" data-fromto="EURMOP" data-rate="9.483803"></span>
                        <span class="Hidden currency_rate" data-fromto="EURMRO" data-rate="422.947994"></span>
                        <span class="Hidden currency_rate" data-fromto="EURMUR" data-rate="47.329731"></span>
                        <span class="Hidden currency_rate" data-fromto="EURMVR" data-rate="18.257387"></span>
                        <span class="Hidden currency_rate" data-fromto="EURMWK" data-rate="924.088837"></span>
                        <span class="Hidden currency_rate" data-fromto="EURMXN" data-rate="25.485859"></span>
                        <span class="Hidden currency_rate" data-fromto="EURMYR" data-rate="4.866277"></span>
                        <span class="Hidden currency_rate" data-fromto="EURMZN" data-rate="88.297704"></span>
                        <span class="Hidden currency_rate" data-fromto="EURNAD" data-rate="18.434232"></span>
                        <span class="Hidden currency_rate" data-fromto="EURNGN" data-rate="450.197346"></span>
                        <span class="Hidden currency_rate" data-fromto="EURNIO" data-rate="41.588669"></span>
                        <span class="Hidden currency_rate" data-fromto="EURNOK" data-rate="10.120369"></span>
                        <span class="Hidden currency_rate" data-fromto="EURNPR" data-rate="138.43908"></span>
                        <span class="Hidden currency_rate" data-fromto="EURNZD" data-rate="1.663857"></span>
                        <span class="Hidden currency_rate" data-fromto="EUROMR" data-rate="0.456097"></span>
                        <span class="Hidden currency_rate" data-fromto="EURPAB" data-rate="1.185268"></span>
                        <span class="Hidden currency_rate" data-fromto="EURPEN" data-rate="4.388831"></span>
                        <span class="Hidden currency_rate" data-fromto="EURPGK" data-rate="4.182212"></span>
                        <span class="Hidden currency_rate" data-fromto="EURPHP" data-rate="57.72017"></span>
                        <span class="Hidden currency_rate" data-fromto="EURPKR" data-rate="186.209761"></span>
                        <span class="Hidden currency_rate" data-fromto="EURPLN" data-rate="4.597346"></span>
                        <span class="Hidden currency_rate" data-fromto="EURPYG" data-rate="7882.312824"></span>
                        <span class="Hidden currency_rate" data-fromto="EURQAR" data-rate="4.313632"></span>
                        <span class="Hidden currency_rate" data-fromto="EURRON" data-rate="4.886176"></span>
                        <span class="Hidden currency_rate" data-fromto="EURRSD" data-rate="117.428235"></span>
                        <span class="Hidden currency_rate" data-fromto="EURRUB" data-rate="88.320587"></span>
                        <span class="Hidden currency_rate" data-fromto="EURRWF" data-rate="1159.849539"></span>
                        <span class="Hidden currency_rate" data-fromto="EURSAR" data-rate="4.444472"></span>
                        <span class="Hidden currency_rate" data-fromto="EURSBD" data-rate="9.457548"></span>
                        <span class="Hidden currency_rate" data-fromto="EURSCR" data-rate="25.123339"></span>
                        <span class="Hidden currency_rate" data-fromto="EURSDG" data-rate="449.601337"></span>
                        <span class="Hidden currency_rate" data-fromto="EURSEK" data-rate="10.168599"></span>
                        <span class="Hidden currency_rate" data-fromto="EURSGD" data-rate="1.599974"></span>
                        <span class="Hidden currency_rate" data-fromto="EURSHP" data-rate="0.857391"></span>
                        <span class="Hidden currency_rate" data-fromto="EURSLL" data-rate="12084.234245"></span>
                        <span class="Hidden currency_rate" data-fromto="EURSOS" data-rate="691.286524"></span>
                        <span class="Hidden currency_rate" data-fromto="EURSRD" data-rate="16.76868"></span>
                        <span class="Hidden currency_rate" data-fromto="EURSTD" data-rate="24028.829172"></span>
                        <span class="Hidden currency_rate" data-fromto="EURSVC" data-rate="10.371596"></span>
                        <span class="Hidden currency_rate" data-fromto="EURSYP" data-rate="607.500184"></span>
                        <span class="Hidden currency_rate" data-fromto="EURSZL" data-rate="18.434518"></span>
                        <span class="Hidden currency_rate" data-fromto="EURTHB" data-rate="36.46576"></span>
                        <span class="Hidden currency_rate" data-fromto="EURTJS" data-rate="13.505645"></span>
                        <span class="Hidden currency_rate" data-fromto="EURTMT" data-rate="4.146551"></span>
                        <span class="Hidden currency_rate" data-fromto="EURTND" data-rate="3.265709"></span>
                        <span class="Hidden currency_rate" data-fromto="EURTOP" data-rate="2.713624"></span>
                        <span class="Hidden currency_rate" data-fromto="EURTRY" data-rate="9.213192"></span>
                        <span class="Hidden currency_rate" data-fromto="EURTTD" data-rate="8.045302"></span>
                        <span class="Hidden currency_rate" data-fromto="EURTWD" data-rate="33.525405"></span>
                        <span class="Hidden currency_rate" data-fromto="EURTZS" data-rate="2747.386228"></span>
                        <span class="Hidden currency_rate" data-fromto="EURUAH" data-rate="32.910866"></span>
                        <span class="Hidden currency_rate" data-fromto="EURUGX" data-rate="4340.290567"></span>
                        <span class="Hidden currency_rate" data-fromto="EURUSD" data-rate="1.184729"></span>
                        <span class="Hidden currency_rate" data-fromto="EURUYU" data-rate="52.054724"></span>
                        <span class="Hidden currency_rate" data-fromto="EURUZS" data-rate="12433.729152"></span>
                        <span class="Hidden currency_rate" data-fromto="EURVEF" data-rate="11.832482"></span>
                        <span class="Hidden currency_rate" data-fromto="EURVND" data-rate="27301.715004"></span>
                        <span class="Hidden currency_rate" data-fromto="EURVUV" data-rate="128.696122"></span>
                        <span class="Hidden currency_rate" data-fromto="EURWST" data-rate="3.000101"></span>
                        <span class="Hidden currency_rate" data-fromto="EURXAF" data-rate="655.093762"></span>
                        <span class="Hidden currency_rate" data-fromto="EURXAG" data-rate="0.047069"></span>
                        <span class="Hidden currency_rate" data-fromto="EURXAU" data-rate="0.000704"></span>
                        <span class="Hidden currency_rate" data-fromto="EURXCD" data-rate="3.201789"></span>
                        <span class="Hidden currency_rate" data-fromto="EURXDR" data-rate="0.829507"></span>
                        <span class="Hidden currency_rate" data-fromto="EURXOF" data-rate="653.970254"></span>
                        <span class="Hidden currency_rate" data-fromto="EURXPF" data-rate="119.835474"></span>
                        <span class="Hidden currency_rate" data-fromto="EURYER" data-rate="296.582358"></span>
                        <span class="Hidden currency_rate" data-fromto="EURZAR" data-rate="18.416495"></span>
                        <span class="Hidden currency_rate" data-fromto="EURZMK" data-rate="10663.902727"></span>
                        <span class="Hidden currency_rate" data-fromto="EURZMW" data-rate="25.986115"></span>
                        <span class="Hidden currency_rate" data-fromto="EURZWL" data-rate="381.483081"></span>
                    </div>
                    <div class="Reason">
                        <p class="ReasonLabel">Why do we ask this?</p>
                        <p class="ReasonExplanation"> If you tell us your nationality, we can show you the visa and tuition information that is most relevant to you.<br/> Also, tell us which currency you'd like to have the fees displayed in. </p>
                    </div>
                </aside>
            </div>
        </div>
    </footer>
</div> <div id="Internal">
    <div data-module="" class="Module StudyPortals_Shared_Modules_Login_AuthBase StudyPortals_Shared_Modules_Login_Auth">
        <div id="AuthPlaceholder"></div>
        <div class="AuthPlaceholder" id="AuthHeaderPlaceholder" data-layout="Header" data-referrer="Header" data-portal-type="master" > </div>
        <div class="AuthPlaceholder" data-layout="Main" data-popup="true" data-referrer="FavouriteStudy" data-portal-type="master" > </div>
    </div>  <div data-module="" class="Module StudyPortals_Shared_Modules_Country_Controller_Controller">  </div>
    <div data-module="" class="Module StudyPortals_Shared_Modules_AutoComplete_AutoCompleteController">
        <script> var defaultSearchParameters = {'levels':['master']}; </script>
    </div>
    <div data-module="" class="Module StudyPortals_Shared_Modules_MediaGalleryLightbox_MediaGalleryLightbox">  </div>
    <div data-module="" class="Module StudyPortals_Shared_Modules_CookieWall_CookieWall"> <aside id="CookieWall" class="Hidden">
            <div class="CookieContainer">
                <p> By continuing to use our website, you agree to our
                    <a href="https://www.studyportals.com/about/privacy/" title="Privacy and Cookie Policy" target="_blank" >Privacy and Cookie Policy</a>.
                </p>
                <a id="CookieButton">
                    <i class="Icon lnr-cross"></i>
                </a>
            </div>
        </aside>
    </div>
    <div data-module="" class="Module StudyPortals_Shared_Modules_DecisionMakingService_DecisionMakingService">
        <div id="wishlistDrawer" >
            <div id="wishlistDrawerContent">
                <header id="wishlistDrawerHeader">
                    <h2 id="wishlistDrawerTitle">Wishlist</h2>
                    <button class="CloseButton" type="button" >
                        <i class="lnr-cross CloseIcon"></i>
                    </button>
                </header>
                <div class="WishlistWrapper">
                    <div id="DecisionMakingServicePlaceholder"></div>
                </div>
                <div class="ComparisonToolWrapper Hidden">
                    <button id="backToWishlist" class="NavigatorButton" > Back to wishlist </button>
                    <div id="ComparisonToolPlaceholder"></div>
                </div>
                <div class="AuthServiceWrapper Hidden">
                    <div class="AuthPlaceholder" data-incentive="Wishlist" data-portal_type="master" data-service-url="https://auth.prtl.co/dist/JS/bundle.js?v=11"> </div>
                </div>
            </div>
        </div>
    </div>
    <div data-module="" class="Module StudyPortals_Shared_Modules_FavouriteCounter_FavouriteCounter">  </div>
    <div data-module="" class="Module StudyPortals_Shared_Modules_HotjarTrigger_HotjarTrigger">  </div>
    <div data-module="" class="Module StudyPortals_Shared_Modules_SlideInElement_SlideInElement StudyPortals_Shared_Modules_SlideInElement_ProfilePageIntroduction_ProfilePageIntroduction">
        <div class="SlideInElementFrame">
            <div class="js-slideInElement SlideInElement" data-name="ProfilePageIntroduction">
                <button type="button" name="slidein" class="js-slideInElementCross SlideInElementCross" data-no-generic-tracking="true">
                    <i class="lnr-cross" data-no-generic-tracking="true"></i>
                </button>
                <div class="js-slideInElementContentWrapper SlideInElementContentWrapper">
                    <button class="DriverButton GoToProfilePage">Check recommended programmes <i class="lnr-arrow-right"></i></button>
                    <p>Go to your profile page to get personalised recommendations!</p>
                </div>
            </div>
        </div>
    </div>
    <div data-module="" class="Module StudyPortals_Shared_Modules_ProfileQuestionnaires_ProfileQuestionnaires">
        <div id="ProfileQuestionnairesPlaceholder"></div>
    </div>
</div>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@studyportals/modal-dll@1.1.8/dist/modal.min.js" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@studyportals/multiselect-dll@1.1.0/dist/multiselect.min.js" crossorigin="anonymous"></script>
<script src="https://www.mastersportal.com/dist/master/shared.a43e9a1f4cb4303ba41d.js"></script>
<script src="https://www.mastersportal.com/dist/master/86966230c17b2be6c62590d96a801316de437eb3.9d63834274944258adfb.js"></script>
<script src="https://asec.prtl.co/opt_in_optimisation/opt_in_optimisation.js"></script>
<script>
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:69598,hjsv:5};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'//static.hotjar.com/c/hotjar-','.js?sv=');
</script><script type="text/javascript">
    /* <![CDATA[ */
    var google_conversion_id = 967130220;
    var google_custom_params = window.google_tag_params;
    var google_remarketing_only = true;
    /* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js"></script><!-- start Dotmailer -->
<script>
    //Wait for the window to load before loading dotmailer, this will ensure this is not render-blocking
    window.addEventListener("load", function() {

        var dm_insight_id ='DM-9954041319-01';

        (function(w,d,u,t,o,c){w['dmtrackingobjectname']=o;c=d.createElement(t);c.async=1;c.src=u;t=d.getElementsByTagName
        (t)[0];t.parentNode.insertBefore(c,t);w[o]=w[o]||function(){(w[o].q=w[o].q||[]).push(arguments);};
        })(window, document, '//static.trackedweb.net/js/_dmptv4.js', 'script', 'dmPt');

        document.dispatchEvent(new Event('DotmailerReady'));
    });
</script>
<!-- end Dotmailer --><!-- start Facebook tracking pixel -->
<script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window,document,'script',
        'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '1412636569002282');
    //track a pageview
    fbq('track', 'PageView');
</script>
<!-- end Facebook tracking pixel -->
<script type="text/javascript" src="https://profile-completeness-tracker.prtl.co/dist/bundle.57f2217374ea56af17d6.js" async crossorigin="anonymous"></script>
<script type="text/javascript" src="https://auth.prtl.co/dist/bundle.f92bdd7749d8cca5a78b.js" async crossorigin="anonymous"></script>
<script type="text/javascript" src="https://decisionmakingservice.prtl.co/dist/bundle.679db5ec9c17472ba976.js" async crossorigin="anonymous"></script>
<script type="text/javascript" src="https://comparisontool.prtl.co/dist/loader.c1e0ad39eb9934369443.js"  crossorigin="anonymous"></script>
<script type="text/javascript" src="https://profile-questionnaires.prtl.co/dist/bundle.09ea3dc040e073586d65.js" async crossorigin="anonymous"></script>
</body>
</html>
