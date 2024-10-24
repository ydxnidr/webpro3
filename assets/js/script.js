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

// Alert fade-out functionality
var pesan = document.getElementById('alert');

// Function to fade out the alert
function fadeOut(element) {
    var opacity = 1; // Start with full opacity
    var interval = setInterval(function() {
        if (opacity <= 0) {
            clearInterval(interval);
            element.style.display = 'none'; // Hide the element
        } else {
            opacity -= 0.1; // Decrease opacity
            element.style.opacity = opacity; // Update opacity
        }
    }, 100); // Adjust the interval timing for smoother transition
}

// Show alert after 3 seconds
setTimeout(function() {
    pesan.style.opacity = 1; // Ensure the alert is visible
    fadeOut(pesan); // Start the fade-out effect
}, 3000);

