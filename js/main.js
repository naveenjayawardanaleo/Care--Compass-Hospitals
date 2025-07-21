window.addEventListener("load", function() {
    const preloader = document.getElementById("preloader");
    const content = document.getElementById("content");

    // Hide preloader after a small delay
    setTimeout(() => {
        preloader.classList.add("hide");
        content.style.display = "block"; // Show the main content
    }, 500); // Adjust delay if needed
});