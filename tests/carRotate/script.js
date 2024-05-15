function myFunction() {
    sliderValue = getSliderValue(); // gets the oninput value
}

function getSliderValue() {
    return parseInt(document.getElementById("hallo").value);
}

function updatePrev() {
    var slider = document.getElementById("hallo");
    slider.value = parseInt(slider.value) - 1;
    getSliderValue();
}

function updateNext() {
    var slider = document.getElementById("hallo");
    var newValue = parseInt(slider.value) + 1;
    if (newValue <= parseInt(slider.getAttribute("max"))) {
        slider.value = newValue;
    }
}
