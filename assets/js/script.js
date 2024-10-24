// Page Loader
const loader = document.getElementById("loading");

function showLoader() {
    loader.style.opacity = "1";
}

function hideLoader() {
    loader.style.opacity = "0";
    setTimeout(() => {
        loader.classList.add("hidden");
    }, 300);
}

setTimeout(() => {
    showLoader();
    setTimeout(hideLoader, 150);
}, 0);

// Alert
var pesan = document.getElementById('alert');
function fadeOut(element) {
    var opacity = 1;
    var interval = setInterval(function() {
        if (opacity <= 0) {
            clearInterval(interval);
            element.style.display = 'none';
        } else {
            opacity -= 0.1;
            element.style.opacity = opacity; 
        }
    }, 100); 
}
setTimeout(function() {
    pesan.style.opacity = 1;
    fadeOut(pesan);
}, 3000);

