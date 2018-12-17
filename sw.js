‘use strict’;
importScripts(‘js/sw_toolbox.js’); toolbox.precache([“index.html”,”css/main.css”]); toolbox.router.get(‘/img/\*’, toolbox.cacheFirst); toolbox.router.get(‘/\*’, toolbox.networkFirst, { networkTimeoutSeconds: 5});
