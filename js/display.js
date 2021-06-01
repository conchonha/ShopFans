var displays = document.querySelectorAll(".hidden");

displays.forEach(display => window.addEventListener("scroll", function() {
    if (window.scrollY > 500) {
        display.classList.remove("hidden");
    } else {
        display.classList.add("hidden");
    }
}))