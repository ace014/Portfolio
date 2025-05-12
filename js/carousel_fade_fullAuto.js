document.addEventListener('DOMContentLoaded', function () {
    const images = document.querySelectorAll(".carousel #content img");
    let current = 0;
    const total = images.length;

    images.forEach((img, index) => {
        if (index === current) {
            img.classList.add("active");
            img.style.opacity = 1;
        } else {
            img.classList.remove("active");
            img.style.opacity = 0;
        }
    });

    function switchImage() {
        const old = current;
        const next = (old + 1) % total;

        images[next].classList.add("active");
        images[next].style.opacity = 1;
        images[next].style.zIndex = 0;

        images[old].classList.add("fade-out");
        images[old].style.zIndex = 1;

        setTimeout(() => {
            images[old].classList.remove("fade-out");
            images[old].classList.remove("active");
            images[old].style.opacity = 0;
            images[old].style.zIndex = 0;
        }, 1000); 

        current = next;
    }

    setInterval(switchImage, 5000);
});