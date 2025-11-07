// Menambahkan efek fade-in saat halaman di-scroll
const fadeInElements = document.querySelectorAll('.fade-in');

window.addEventListener('scroll', function() {
    fadeInElements.forEach(function(element) {
        const rect = element.getBoundingClientRect();
        if (rect.top < window.innerHeight) {
            element.style.opacity = 1;
        }
    });
});
