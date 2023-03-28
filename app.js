console.log("oui")
if("serviceWorker" in navigator) {
    console.log("oui2")
    
    navigator.serviceWorker.register("serviceWorker.js")
  
}