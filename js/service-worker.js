// --------------------------------------------- //
// Worker Robort start
// --------------------------------------------- //
self.addEventListener("install", (event) => {
    console.log("Service Worker Installed!");
    event.waitUntil(
        caches.open("portfolio-cache").then((cache) => {
            return cache.addAll([
                "/",
                "/index.html",
                "/css/main.css",
                "/css/plugins.css",
                "/logos/portfolio-icon-192x192.png",
                "/logos/portfolio-icon-512x512.png",
            ]);
        })
    );
});

self.addEventListener("fetch", (event) => {
    event.respondWith(
        caches.match(event.request).then((response) => {
            return response || fetch(event.request);
        })
    );
});

// --------------------------------------------- //
// Worker Robort End
// --------------------------------------------- //
