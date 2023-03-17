let watchlist = document.querySelector("#watchlist");
let windowElement = document.querySelector(".window");
let timeoutId;

watchlist.addEventListener("click", function() {
    windowElement.classList.add("open");
    windowElement.style.display = "block";
});

windowElement.addEventListener("mouseout", function(event) {
    if (!event.relatedTarget || !windowElement.contains(event.relatedTarget)) {
        timeoutId = setTimeout(function() {
            windowElement.classList.remove("open");
            windowElement.style.display = "none";
        }, 500);
    }
});

windowElement.addEventListener("mouseover", function() {
    clearTimeout(timeoutId);
});



/* eBay açılan pəncərə */ 
let ebay = document.querySelector("#eBay");
let myEbayWindow = document.querySelector(".myEbayWindow");

ebay.addEventListener("mouseover", function() {
    myEbayWindow.classList.add("openMyEbay");
    myEbayWindow.style.display = "block"; 
});

myEbayWindow.addEventListener("mouseout", function(event) {
    if (!event.relatedTarget || !myEbayWindow.contains(event.relatedTarget)) {
        myEbayWindow.classList.remove("openMyEbay");
        myEbayWindow.style.display = "none";
    };
});



/* Bildiriş ikonu açılan pəncərə */ 
let notificationIcon = document.querySelector("#bi-bell");
let WindowNotificationScreen = document.querySelector(".openWindowNotification");

notificationIcon.addEventListener("mouseover", function(){
    WindowNotificationScreen.classList.add("openWindowNotification");
   if (WindowNotificationScreen.style.display === "none") {
    WindowNotificationScreen.style.display = "block";
   }
})

WindowNotificationScreen.addEventListener("mouseout", function(event){
    if (!event.relatedTarget || !WindowNotificationScreen.contains (event.relatedTarget)){
        WindowNotificationScreen.style.display = "none";
    }
});

/* Səbət açılan pəncərə */ 
let icon = document.querySelector("#bi-cart");
let openedWindow = document.querySelector(".openStoreWindow");

icon.addEventListener("mouseover", function(){
    openedWindow.classList.add("openWindowNotification");
   if (openedWindow.style.display === "none") {
       openedWindow.style.display = "block";
   }
})

openedWindow.addEventListener("mouseout", function(event){
    if (!event.relatedTarget || !openedWindow.contains (event.relatedTarget)){
        openedWindow.style.display = "none";
    }
})

if (openedWindow.style.display === "block") {
    WindowNotificationScreen.style.display = "none";
    myEbayWindow.style.display = "none";
    windowElement.style.display = "none";
}
if (WindowNotificationScreen.style.display === "block") {
    openedWindow.style.display = "none";
    myEbayWindow.style.display = "none";
    myEbayWindow.classList.remove("myEbayWindow");
    windowElement.style.display = "none";
}
if (myEbayWindow.style.display === "block") {
    WindowNotificationScreen.style.display = "none";
    openedWindow.style.display = "none";
    windowElement.style.display = "none";
}
if (openedWindow.style.display === "block"){
    WindowNotificationScreen.style.display = "none";
    windowElement.style.display = "none";
    myEbayWindow.style.display = "none";
}

/*ShopBy acilan pencere */
let Btn = document.querySelector(".shopBtn");
let windowBtn = document.querySelector(".ShopBtnWindow");

Btn.addEventListener("click", function(){
    windowBtn.classList.add("ShopBtnWindow");
    if (windowBtn.style.display === "none"){
        windowBtn.style.display = "flex";
    } else {
        windowBtn.style.display = "none";
    }
})

windowBtn.addEventListener("mouseout", function(event){
    if (!event.relatedTarget || !windowBtn.contains(event.relatedTarget)){
        windowBtn.style.display = "none";
    }
})




/* carousel interval */
$('.carousel').carousel({
    interval: 2200
});


/* Electronics kateqoriyasinin JS hissesi */
let Electronics = document.querySelector(".electronics");
let eBtn = document.querySelector("#electronicsBtn");
eBtn.addEventListener("mouseover", function(){
      Electronics.classList.add("electronics");
      Electronics.style.display = "flex";
});

Electronics.addEventListener("mouseout", function(event){
    if (!event.relatedTarget || !Electronics.contains(event.relatedTarget)){
        Electronics.style.display = "none";
    }
});

/* Motors kateqoriyasinin JS hissesi */
let motors = document.querySelector(".motors");
let motoBtn = document.querySelector("#motorsBtn");

motoBtn.addEventListener("mouseover", function() {
    motors.classList.add("motors");
    motors.style.display = "flex";
});

motors.addEventListener("mouseout", function (event){
    if (!event.relatedTarget || !motors.contains (event.relatedTarget)){
        motors.style.display = "none";
    }
});

/* Fashion kateqoriyasinin JS hissesi */
let FasionButton = document.querySelector("#FashionBtn");
let WindowFashion = document.querySelector(".fashion-window");

FasionButton.addEventListener("mouseover", function(){
    WindowFashion.classList.add("fashion-window");
    WindowFashion.style.display = "flex";
});

WindowFashion.addEventListener("mouseout", function(event){
    if (!event.relatedTarget || !WindowFashion.contains(event.relatedTarget)){
        WindowFashion.style.display = "none";
    }
});