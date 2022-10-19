var name;
/* Get your name */
try {
  fetch("/cookie/getname.php")
  .then(response => response.json())
  .then(function(data){
    name = data["name"];
  });
}
catch(err) {
  name = "you";
}

/* Service worker (powered by PWABuilder) */
if (typeof navigator.serviceWorker !== "undefined") {
    navigator.serviceWorker.register("/core/js/pwabuilder-sw.js");
}