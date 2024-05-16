document.addEventListener("DOMContentLoaded", function() {
    var images = [
        'images/auto.png',
        'images/lambo.png',
        'images/slr.png'
    ];
    var currentImageIndex = 0;
    var carImage = document.getElementById('carImage');

    document.querySelector('.arrow.left').addEventListener('click', function() {
        if (currentImageIndex > 0) {
            currentImageIndex--;
        } else {
            currentImageIndex = images.length - 1;
        }
        carImage.src = images[currentImageIndex];
        document.getElementById('configView').children[0].src = images[currentImageIndex];
    });

    document.querySelector('.arrow.right').addEventListener('click', function() {
        if (currentImageIndex < images.length - 1) {
            currentImageIndex++;
        } else {
            currentImageIndex = 0;
        }
        carImage.src = images[currentImageIndex];
        document.getElementById('configView').children[0].src = images[currentImageIndex];
    });
});

function configureCar() {
    var configView = document.getElementById('configView');
    if (configView.style.display === 'none') {
        configView.style.display = 'block';
    } else {
        configView.style.display = 'none';
    }
}