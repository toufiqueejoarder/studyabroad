@extends('app')

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta tags -->
    <meta charset="UTF-8">
    <meta name="description" content="Choose excellent study programmes abroad in {{$study->country}}. Apply for top engineering courses, DAAD student exchange, English-taught classes and generous scholarships.">
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
    <title> Find  Masters in {{$study->country}} </title>
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
                            <img src="/img/1.png" alt="MastersPortal" id="PortalLogo" width="150" height="60" >
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
                                                    <?php $discipline='Agriculture & Forestry'?>
                                                    <a href="{{URL::to('/search-master-degree/'.$discipline)}}" title="Agriculture &amp; Forestry">
                                                        <i class="lnr-tree ContentItemIcon Icons"></i> Agriculture &amp; Forestry
                                                    </a>
                                                </li>
                                                <li>
                                                    <?php $discipline='Applied Sciences & Professions'?>
                                                    <a href="{{URL::to('/search-master-degree/'.$discipline)}}" title="Applied Sciences &amp; Professions">
                                                        <i class="lnr-microscope ContentItemIcon Icons"></i> Applied Sciences &amp; Professions
                                                    </a>
                                                </li>
                                                <li>
                                                    <?php $discipline='Arts, Design & Architecture'?>
                                                    <a href="{{URL::to('/search-master-degree/'.$discipline)}}" title="Arts, Design &amp; Architecture">
                                                        <i class="lnr-magic-wand ContentItemIcon Icons"></i> Arts, Design &amp; Architecture
                                                    </a>
                                                </li>
                                                <li>
                                                    <?php $discipline='Business & Management'?>
                                                    <a href="{{URL::to('/search-master-degree/'.$discipline)}}" title="Business &amp; Management">
                                                        <i class="lnr-briefcase ContentItemIcon Icons"></i> Business &amp; Management
                                                    </a>
                                                </li>
                                                <li>
                                                    <?php $discipline='Computer Science & IT'?>
                                                    <a href="{{URL::to('/search-master-degree/'.$discipline)}}" title="Computer Science &amp; IT">
                                                        <i class="lnr-cli ContentItemIcon Icons"></i> Computer Science &amp; IT
                                                    </a>
                                                </li>
                                                <li>
                                                    <?php $discipline='Education & Training'?>
                                                    <a href="{{URL::to('/search-master-degree/'.$discipline)}}" title="Education &amp; Training">
                                                        <i class="lnr-book2 ContentItemIcon Icons"></i> Education &amp; Training
                                                    </a>
                                                </li>
                                                <li>
                                                    <?php $discipline='Engineering & Technology'?>
                                                    <a href="{{URL::to('/search-master-degree/'.$discipline)}}" title="Engineering &amp; Technology">
                                                        <i class="lnr-rulers ContentItemIcon Icons"></i> Engineering &amp; Technology
                                                    </a>
                                                </li>
                                                <li>
                                                    <?php $discipline='Environmental Studies & Earth Sciences'?>
                                                    <a href="{{URL::to('/search-master-degree/'.$discipline)}}" title="Environmental Studies &amp; Earth Sciences">
                                                        <i class="lnr-earth ContentItemIcon Icons"></i> Environmental Studies &amp; Earth Sciences
                                                    </a>
                                                </li>
                                                <li>
                                                    <?php $discipline='Hospitality, Leisure & Sports'?>
                                                    <a href="{{URL::to('/search-master-degree/'.$discipline)}}" title="Hospitality, Leisure &amp; Sports">
                                                        <i class="lnr-boat ContentItemIcon Icons"></i> Hospitality, Leisure &amp; Sports
                                                    </a>
                                                </li>
                                                <li>
                                                    <?php $discipline='Humanities'?>
                                                    <a href="{{URL::to('/search-master-degree/'.$discipline)}}" title="Humanities">
                                                        <i class="lnr-pen2 ContentItemIcon Icons"></i> Humanities
                                                    </a>
                                                </li>
                                                <li>
                                                    <?php $discipline='Journalism & Media'?>
                                                    <a href="{{URL::to('/search-master-degree/'.$discipline)}}" title="Journalism &amp; Media">
                                                        <i class="lnr-camera ContentItemIcon Icons"></i> Journalism &amp; Media
                                                    </a>
                                                </li>
                                                <li>
                                                    <?php $discipline='Law'?>
                                                    <a href="{{URL::to('/search-master-degree/'.$discipline)}}" title="Law">
                                                        <i class="lnr-balance ContentItemIcon Icons"></i> Law
                                                    </a>
                                                </li>
                                                <li>
                                                    <?php $discipline='Medicine & Health'?>
                                                    <a href="{{URL::to('/search-master-degree/'.$discipline)}}" title="Medicine &amp; Health">
                                                        <i class="lnr-first-aid ContentItemIcon Icons"></i> Medicine &amp; Health
                                                    </a>
                                                </li>
                                                <li>
                                                    <?php $discipline='Natural Sciences & Mathematics'?>
                                                    <a href="{{URL::to('/search-master-degree/'.$discipline)}}" title="Natural Sciences &amp; Mathematics">
                                                        <i class="lnr-beaker ContentItemIcon Icons"></i> Natural Sciences &amp; Mathematics
                                                    </a>
                                                </li>
                                                <li>
                                                    <?php $discipline='Social Sciences'?>
                                                    <a href="{{URL::to('/search-master-degree/'.$discipline)}}" title="Social Sciences">
                                                        <i class="lnr-bubbles ContentItemIcon Icons"></i> Social Sciences
                                                    </a>
                                                </li>
                                            </ul>
                                        </section>
                                        <section class="SectionContentColumn SectionContentColumnRight">
                                            <div class="SubSectionContentTitle">Most popular countries</div>
                                            <ul class="SubSectionContentList">
                                                <li class="SubSectionContentItem">
                                                    <?php $country='Netherlands'?>
                                                    <a class="ContentItemLink js-ContentItemLink" href="{{URL::to('/search-country/'.$country)}}" title="Netherlands">Netherlands</a>
                                                </li>
                                                <li class="SubSectionContentItem">
                                                    <?php $country='France'?>
                                                    <a class="ContentItemLink js-ContentItemLink" href="{{URL::to('/search-country/'.$country)}}"" title="France">France</a>
                                                </li>
                                                <li class="SubSectionContentItem">
                                                    <?php $country='Germany'?>
                                                    <a class="ContentItemLink js-ContentItemLink" href="{{URL::to('/search-country/'.$country)}}" title="Germany">Germany</a>
                                                </li>
                                                <li class="SubSectionContentItem">
                                                    <?php $country='Norway'?>
                                                    <a class="ContentItemLink js-ContentItemLink" href="{{URL::to('/search-country/'.$country)}}" title="Norway">Norway</a>
                                                </li>
                                                <li class="SubSectionContentItem">
                                                    <?php $country='United Kingdom'?>
                                                    <a class="ContentItemLink js-ContentItemLink" href="{{URL::to('/search-country/'.$country)}}" title="United Kingdom">United Kingdom</a>
                                                </li>
                                                <li class="SubSectionContentItem">
                                                    <?php $country='Canada'?>
                                                    <a class="ContentItemLink js-ContentItemLink" href="{{URL::to('/search-country/'.$country)}}" title="Canada">Canada</a>
                                                </li>
                                                <li class="SubSectionContentItem">
                                                    <?php $country='United States'?>
                                                    <a class="ContentItemLink js-ContentItemLink" href="{{URL::to('/search-country/'.$country)}}" title="United States">United States</a>
                                                </li>
                                                <li class="SubSectionContentItem">
                                                    <?php $country='Australia'?>
                                                    <a class="ContentItemLink js-ContentItemLink" href="{{URL::to('/search-country/'.$country)}}" title="Australia">Australia</a>
                                                </li>
                                            </ul>
                                            <a class="SubSectionViewAllLink" href="/countries/all" title="View all countries"> View all countries </a>
                                        </section>
                                    </div>
                                </li>
                                <li class="SectionNavigationItem" data-menu-section="decide">
                                    <a class="SectionNavigationLink js-SectionNavigationLink">
                                        <i class="SectionNavigationIcon lnr-archery"></i>
                                        <span class="SectionNavigationLabel">Ranks</span>
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
                                <h1>Find Master's Degrees in <span>{{$study->country}}</span> </h1>
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
                                        <li> {{$study->country}} </li>
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
                                    <span class="QuickFactsData">{{$unis->acyr}}</span>
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
                                    <a href="{{URL::to('/search-Ranked-University/'.$unis->country)}}" title="Ranked Universities">
                                        <span class="QuickFactsData">{{$unis->rnkduni}}</span>
                                        <span class="QuickFactsLabel">Ranked Universities</span>
                                    </a>
                                </div>
                            </li>
                            <li class="QuickFact HideQFMobile">
                                <i class="CountryQuickFactsLogos lnr-earth"></i>
                                <div class="QFDetails">
                                    <span class="QuickFactsData">{{$unis->intstd}}</span>
                                    <span class="QuickFactsLabel">Int. Students</span>
                                </div>
                            </li>
                            <li class="QuickFact HideQFMobile">
                                <i class="CountryQuickFactsLogos lnr-graduation-hat"></i>
                                <div class="QFDetails">
                                    <span class="QuickFactsData">{{$unis->totstd}}</span>
                                    <span class="QuickFactsLabel">Students</span>
                                </div>
                            </li>
                            <li class="QuickFact HideQFMobile">
                                <i class="CountryQuickFactsLogos lnr-users2"></i>
                                <div class="QFDetails">
                                    <span class="QuickFactsData">{{$unis->population}}</span>
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
                    <h2>Study in {{$study->country}}</h2>
                    @foreach($Snotes as $item)
                        <p >    {{$item}}</p>
                    @endforeach
                    <h4>Why study in {{$study->country}}</h4>
                    @foreach($Swhystdy as $item)
                        <p >    {{$item}}</p>
                    @endforeach
                    <h4>What is it like to study in {{$study->country}}?</h4>
                    @foreach($Sliketo as $item)
                        <p >    {{$item}}</p>
                    @endforeach
                    <h4>What to study in {{$study->country}}</h4>
                    @foreach($Swtto as $item)
                        <p >    {{$item}}</p>
                    @endforeach
                    <h4>Major cities in {{$study->country}}</h4>
                    @foreach($Smjcity as $item)
                        <p >    {{$item}}</p>
                    @endforeach
                    <h4>Which universities to attend in {{$study->country}}</h4>
                    @foreach($Swcuniat as $item)
                        <p >    {{$item}}</p>
                    @endforeach
                    <h2>Practical Information</h2>
                    @foreach($Spinfo as $item)
                        <p >    {{$item}}</p>
                    @endforeach
                    <h4>Helpful ways to make sure you qualify for a {{$study->country}} university</h4>
                    @foreach($Swtql as $item)
                        <p >{{$item}}</p>
                    @endforeach
                </div>
            </div>

            <div data-module="MediaThumbnails:media_thumbnails" class="Module StudyPortals_Shared_Modules_MediaThumbnails_MediaThumbnails">  </div>
            <div data-module="MediaGallery:MediaGallery" class="Module StudyPortals_Shared_Modules_MediaGallery_MediaGallery">  </div>
            <div data-module="Country:research_career" class="Module StudyPortals_Shared_Modules_Country_ResearchCareer_ResearchCareer">  </div>
            <div data-module="Country:living" class="Module StudyPortals_Shared_Modules_Country_Living_Living">
                <h2>Living in {{$study->country}}</h2>
                @foreach($Lnotes as $item)
                    <p >{{$item}}</p>
                @endforeach
                <h4>Tuition fees in {{$study->country}}</h4>
                @foreach($Ltutnfees as $item)
                    <p >{{$item}}</p>
                @endforeach
                <h4>Living costs in {{$study->country}}</h4>
                @foreach($Lvngc as $item)
                    <p >{{$item}}</p>
                @endforeach
            </div>
            <div data-module="Country:about" class="Module StudyPortals_Shared_Modules_Country_About_About">
                <h2>About {{$study->country}}</h2>
                @foreach($Aboutn as $item)
                    <p >{{$item}}</p>
                @endforeach
            </div>
            <div data-module="Country:institutes" class="Module StudyPortals_Shared_Modules_Country_Institutes_Institutes">
                <div id="CountryStudies">
                    <h2>Universities, colleges and schools in {{$study->country}}</h2>
                    @foreach($universityName as $data)
                        <ul><a href="{{URL::to('/University-view/'.$data->organization)}}" class="FeaturedBy"> {{$data->organization}}</a></ul>
                      
                    @endforeach
                </div>
            </div>
            <div data-module="Country:visa" class="Module StudyPortals_Shared_Modules_Country_Visa_Visa">
                <section id="StudentVisaContent" style="padding: 2rem;">
                    <h4>Student Visa in {{$study->country}}</h4>
                    @foreach($SVisa as $item)
                        <p >{{$item}}</p>
                    @endforeach
                </section>
            </div>
            <div data-module="Country:WorkPermitContent" class="Module StudyPortals_Shared_Modules_Country_WorkPermitContent_WorkPermitContent">

                <section id="WorkPermitContent" style="padding: 2rem;">
                    <h4 class="pb-5">Work Permit in {{$study->country}}</h4>
                    @foreach($WorkP as $item)
                        <p >{{$item}}</p>
                    @endforeach
                </section>
            </div>
            <div data-module="Country:how_to_apply_content" class="Module StudyPortals_Shared_Modules_Country_HowToApply_HowToApply">
                <section id="HowToApplyContent">
                    <h2>How to Apply to a Master's in {{$study->country}}</h2>
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
                        <h2 class="DegreeType">  Find Master's Degrees in {{$study->country}} </h2>
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
    <div id="RelatedInformation" class="WhiteBackgroundPane">
        <div class="col1 wrapped">
            <div class="colblock">
                <div data-module="" class="Module StudyPortals_Shared_Modules_CountrySpotlightRR_CountrySpotlightRR">
                    <div id="CountrySpotlight">
                        <h2>Where to study abroad?</h2>
                        <div id="CountrySpotlightContainer">
                            <figure data-clickable="clickable">
                                <a href="/search-country/Netherlands" title="Netherlands">
                                    <span class="Picture" data-file-url="//storage-prtl-co.imgix.net/mp/fce406d2.jpg" data-title="Netherlands" >
                                        <picture>
                                            <source media="all and (max-width: 30em)" srcset="//storage-prtl-co.imgix.net/mp/fce406d2.jpg?w=231&h=154&fit=crop&crop=entropy&auto=format,compress&q=40">
                                            <source media="all and (min-width: 30.063em) and (max-width: 48em)" srcset="//storage-prtl-co.imgix.net/mp/fce406d2.jpg?w=359&h=243&fit=crop&crop=entropy&auto=format,compress&q=40">
                                            <source media="all and (min-width: 48.063em) and (max-width: 80em)" srcset="//storage-prtl-co.imgix.net/mp/fce406d2.jpg?w=410&h=273&fit=crop&crop=entropy&auto=format,compress&q=40">
                                            <source media="all and (min-width: 80.063em)" srcset="//storage-prtl-co.imgix.net/mp/fce406d2.jpg?w=224&h=150&fit=crop&crop=entropy&auto=format,compress&q=40">
                                            <img src="//storage-prtl-co.imgix.net/mp/fce406d2.jpg?w=224&h=150&fit=crop&crop=entropy&auto=format,compress&q=40" alt="Netherlands" loading="lazy" width="143" height="95" >
                                        </picture>
                                    </span>
                                </a>
                                <figcaption>
                                    <span> Netherlands </span>
                                    <div class="Toggle"> Study abroad in the Netherlands (also known as Holland), the first non-English-speaking
                                        country to offer Bachelor’s and Master’s degrees taught in English. International
                                        students in the Netherlands love the country because of its tolerant and
                                        inclusive policies. Choose to study in the Netherlands at some of the best
                                        universities and colleges in Europe.
                                    </div>
                                </figcaption>
                            </figure>
                            <figure data-clickable="clickable">
                                <a href="/search-country/Czech Republic" title="Czech Republic">
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
                                    <div class="Toggle"> Czech Republic is the country with the highest human development in Central and Eastern Europe and has ranked as the third most peaceful country in Europe. Member of the European Union since 2004, the Czech Republic has the Czech koruna as a currency and the beautiful city of Prague as capital. </div>
                                </figcaption>
                            </figure>
                            <figure data-clickable="clickable">
                                <a href="/search-country/Finland" title="Finland">
                                    <span class="Picture" data-file-url="//storage-prtl-co.imgix.net/mp/fa950397.jpg" data-title="Finland" >
                                        <picture>
                                            <source media="all and (max-width: 30em)" srcset="//storage-prtl-co.imgix.net/mp/fa950397.jpg?w=231&h=154&fit=crop&crop=entropy&auto=format,compress&q=40">
                                            <source media="all and (min-width: 30.063em) and (max-width: 48em)" srcset="//storage-prtl-co.imgix.net/mp/fa950397.jpg?w=359&h=243&fit=crop&crop=entropy&auto=format,compress&q=40">
                                            <source media="all and (min-width: 48.063em) and (max-width: 80em)" srcset="//storage-prtl-co.imgix.net/mp/fa950397.jpg?w=410&h=273&fit=crop&crop=entropy&auto=format,compress&q=40">
                                            <source media="all and (min-width: 80.063em)" srcset="//storage-prtl-co.imgix.net/mp/fa950397.jpg?w=224&h=150&fit=crop&crop=entropy&auto=format,compress&q=40"> <img src="//storage-prtl-co.imgix.net/mp/fa950397.jpg?w=224&h=150&fit=crop&crop=entropy&auto=format,compress&q=40" alt="Finland" loading="lazy" width="143" height="95" >
                                        </picture>
                                    </span>
                                </a>
                                <figcaption>
                                    <span> Finland </span>
                                    <div class="Toggle"> Study in Finland, the country in northern Europe who has figured out how to provide some of the
                                        best education in the world. Study abroad in Finland, a transparent open civic
                                        society, where education is always a priority. Not to mention you can also find
                                        inexpensive or tuition-free degrees to study in Finland. </div>
                                </figcaption>
                            </figure>
                            <figure data-clickable="clickable">
                                <a href="/search-country/Ireland" title="Ireland">
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
                                    <div class="Toggle"> Study abroad in Ireland, the place where literature meets beautiful landscape, innovation and
                                        a welcoming international climate. By studying in Ireland, you will enjoy the most
                                        welcoming countries in the world and benefit from lots of opportunities in
                                        education and research.
                                    </div>
                                </figcaption>
                            </figure>
                            <figure data-clickable="clickable">
                                <a href="/search-country/Norway" title="Norway">
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
                                    <div class="Toggle"> Study abroad in Norway, the country that is consistently ranked by the UN as having the highest
                                        standard of living in the world based largely on average levels of education
                                        and income. Higher studies in Norway are some of the best in Europe. International
                                        students have plenty of English-taught degrees to choose from at universities and
                                        colleges in Norway. </div>
                                </figcaption>
                            </figure>
                            <figure data-clickable="clickable">
                                <a href="/search-country/Poland" title="Poland">
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
                                    <div class="Toggle"> Studying in Poland will provide a solid education which will thoroughly prepare you for work in the most advanced labour markets of the world, at the same time stimulating your own personal development. You will also have the unique opportunity of meeting outstanding specialists and renowned intellectuals in your chosen field.
                                    </div>
                                </figcaption>
                            </figure>
                            <figure data-clickable="clickable">
                                <a href="/search-country/Sweden" title="Sweden">
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
                                    <div class="Toggle"> Study in Sweden to learn how to conduct top-quality research and develop independent thinking.
                                        People who study abroad in Sweden benefit from integration in a multicultural
                                        society and rigorous Bachelor’s and Master’s degrees at universities and
                                        colleges that look towards the future.
                                    </div>
                                </figcaption>
                            </figure>
                            <figure data-clickable="clickable">
                                <a href="/search-country/Switzerland" title="Switzerland">
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
                                    <div class="Toggle"> Study abroad in Switzerland is a federal Republic in western Europe with one of the highest
                                        standards of living. You can study in Switzerland in English even if the
                                        country has four official languages: German (predominant), French, Italian and
                                        Romansh. Switzerland is well known for its quality postgraduate studies, but
                                        you can also find great Bachelor’s and Master’s degree options.
                                    </div>
                                </figcaption>
                            </figure>
                            <figure data-clickable="clickable">
                                <a href="/search-country/United Kingdom" title="United Kingdom">
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
                                    <div class="Toggle"> Study in the UK and feel like you have entered a modern-day fairy tale. Universities and
                                        colleges in the UK - as well as the outstanding facilities they provide - are
                                        mesmerizing for international students. All the modern universities in the
                                        United Kingdom enable you to engage in ground-breaking research, regardless if
                                        you study in Britain, Scotland, Wales or Northern Ireland.
                                    </div>
                                </figcaption>
                            </figure>
                            <figure data-clickable="clickable">
                                <a href="/search-country/Canada" title="Canada">
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
                                        great degrees and are some of the most welcoming to international students.
                                    </div>
                                </figcaption>
                            </figure>
                            <figure data-clickable="clickable">
                                <a href="/search-country/United States" title="United States">
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
                                        best universities in the world.
                                    </div>
                                </figcaption>
                            </figure>
                            <figure data-clickable="clickable">
                                <a href="/search-country/Israel" title="Israel">
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
                                        ranked the 3rd most innovative country in the world.
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="ViewAll">
                            <a href="/countries/all" title="View all countries">View all countries</a>
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
                            <img src="/img/1.png" class="SPLogo" alt="Studyportals" style="width:120px !important; height:auto;" loading="lazy" >
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
