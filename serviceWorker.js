const staticCacheName = "cache-v1";
const assets = [
  "/public/index.php?p=accueil",
  "/public/index.php?p=deconnecte",
];

self.addEventListener("install", (e) => {
  e.waitUntil(
    caches.open(staticCacheName).then((cache) => {
      cache.addAll(assets);
      console.log("cache ajouté");
    })
  );
});

self.addEventListener("fetch", (event) => {
  if (assets.some((asset) => event.request.url.indexOf(asset) !== -1)) {
    event.respondWith(
      caches.match(event.request).then(function (response) {
        if (response) {
          return response;
        }

        var fetchRequest = event.request.clone();

        return fetch(fetchRequest).catch(() => {
          return caches.match("/public/index.php?p=deconnecte");
        });
      })
    );
  } else {
    event.respondWith(
      fetch(event.request).catch(() => {
        return caches.match("/public/index.php?p=deconnecte");
      })
      );
      }
      });
      
      self.addEventListener("activate", (e) => {
      e.waitUntil(
      caches.keys().then((keys) => {
      return Promise.all(
      keys
      .filter((key) => key !== staticCacheName)
      .map((key) => caches.delete(key))
      );
      })
      );
      });