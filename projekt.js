
document.addEventListener("DOMContentLoaded", function() {
    var cars = [
        { src: '../images/auto.png', info: 'Hatchback' },
        { src: '../images/lambo.png', info: 'Sedan' },
        { src: '../images/slr.png', info: 'Kombi' }
    ];
    var currentImageIndex = 0;
    var carImage = document.getElementById('carImage');
    var configImage = document.getElementById('configImage');
    var carInfo = document.getElementById('carInfo');

    carImage.src = cars[currentImageIndex].src;
    configImage.src = cars[currentImageIndex].src;
    carInfo.textContent = cars[currentImageIndex].info;

    document.querySelector('.arrow.left').addEventListener('click', function() {
        if (currentImageIndex > 0) {
            currentImageIndex--;
        } else {
            currentImageIndex = cars.length - 1;
        }
        updateCarDisplay(currentImageIndex);
    });

    document.querySelector('.arrow.right').addEventListener('click', function() {
        if (currentImageIndex < cars.length - 1) {
            currentImageIndex++;
        } else {
            currentImageIndex = 0;
        }
        updateCarDisplay(currentImageIndex);
    });

    function updateCarDisplay(index) {
        carImage.src = cars[index].src;
        configImage.src = cars[index].src;
        carInfo.textContent = cars[index].info;
    }
});

function scrollToCarPicker() {
    document.querySelector('.car-picker').scrollIntoView({ behavior: 'smooth' });
}

window.addEventListener('scroll', function() {
    var header = document.getElementById('header');
    var carPicker = document.querySelector('.car-picker');
    var carPickerTop = carPicker.offsetTop;
    var carPickerHeight = carPicker.offsetHeight;

    if (window.scrollY >= carPickerTop - carPickerHeight) {
        header.style.display = 'block';
    } else {
        header.style.display = 'none';
    }

});
