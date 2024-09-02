document.querySelectorAll('.gallery-item').forEach(item => {
    item.addEventListener('click', event => {
        const lightbox = document.getElementById('lightbox');
        const lightboxImg = document.getElementById('lightbox-img');
        lightboxImg.src = event.target.src;
        lightbox.style.display = 'flex';
    });
});

document.querySelector('.close').addEventListener('click', () => {
    document.getElementById('lightbox').style.display = 'none';
});
