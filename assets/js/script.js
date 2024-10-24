//Page Loader
document.getElementById("loading").style.opacity = "1";
setTimeout(() => {
    document.getElementById("loading").style.opacity = "0";
    setTimeout(() => {
        document.getElementById("loading").classList.add("hidden");
    }, 300);
}, 150);

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

