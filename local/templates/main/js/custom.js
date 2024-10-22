document.querySelectorAll('.product-image').forEach(item => {
    item.addEventListener('mouseenter', function() {
        const detailedImage = this.getAttribute('data-detailed');
        this.style.backgroundImage = `url(${detailedImage})`;
    });
    
    item.addEventListener('mouseleave', function() {
        const previewImage = this.style.backgroundImage = `url(${this.style.backgroundImage})`;
        this.style.backgroundImage = previewImage;
    });
});
