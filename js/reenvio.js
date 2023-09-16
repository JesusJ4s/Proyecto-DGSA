if (window.history.replaceState) {
    
    console.log("evitar reenvío")
    window.history.replaceState(null,null,window.location.href)
}
