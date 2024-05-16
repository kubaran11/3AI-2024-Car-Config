document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("models-link").addEventListener("click", function(event) {
        event.preventDefault(); // Zabraňte výchozímu chování odkazu
        document.querySelector("#blok2").scrollIntoView({ behavior: "smooth" }); // Hladký posun na blok2
    });
});
document.addEventListener("DOMContentLoaded", function() {
    var images = [
        'images/auto.png',
        'images/lambo.png',
        'images/slr.png'
    ];
    var carTypes = [
        'Sedan',
        'Hatchback',
        'Combi'
    ];
    var currentImageIndex = 0;
    var carImage = document.getElementById('carImage');
    var carTypeLabel = document.getElementById('carType');

    function updateCarInfo() {
        carImage.src = images[currentImageIndex];
        carTypeLabel.textContent = carTypes[currentImageIndex];
        document.getElementById('configView').children[0].src = images[currentImageIndex];
    }

    document.querySelector('.arrow.left').addEventListener('click', function() {
        if (currentImageIndex > 0) {
            currentImageIndex--;
        } else {
            currentImageIndex = images.length - 1;
        }
        updateCarInfo();
    });

    document.querySelector('.arrow.right').addEventListener('click', function() {
        if (currentImageIndex < images.length - 1) {
            currentImageIndex++;
        } else {
            currentImageIndex = 0;
        }
        updateCarInfo();
    });

    updateCarInfo(); 
});

function configureCar() {
    // Redirect to index4.php
    window.location.href = 'index4.php';
}