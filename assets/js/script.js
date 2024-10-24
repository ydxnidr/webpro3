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

//alert
var pesan = document.getElementById('alert');
setTimeout(function() {
    pesan.style.opacity = 1;
    (function fade() {
        if ((pesan.style.opacity -= 0.1) < 0) {
            pesan.style.display = 'hidden';
        } else {
            requestAnimationFrame(fade);
        }
    })();
}, 3000);

