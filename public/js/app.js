import './bootstrap';

document.getElementById('slideLeft').addEventListener('click', function () {
    const container = document.getElementById('offerHolder');
    container.scrollLeft -= 300; // Geser ke kiri sejauh 300px
});

document.getElementById('slideRight').addEventListener('click', function () {
    const container = document.getElementById('offerHolder');
    container.scrollLeft += 300; // Geser ke kanan sejauh 300px
});
