importScripts(
    'https://storage.googleapis.com/workbox-cdn/releases/4.3.1/workbox-sw.js'
);

workbox.precaching.precacheAndRoute([
  {
    "url": "images/Clock.png",
    "revision": "06bfc2e362d59bdf22bfb26fbcbb8b22"
  },
  {
    "url": "images/night2.jpg",
    "revision": "dff98056d769d3b465590c15a40c1502"
  },
  {
    "url": "sw-base.js",
    "revision": "e7a1afa5aa28fab416b91ab3c4ff3945"
  },
  {
    "url": "offline.html",
    "revision": "375a0734165ea7a3d70fc2f527701f8c"
  }
]);