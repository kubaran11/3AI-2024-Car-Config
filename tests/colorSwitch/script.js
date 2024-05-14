var index = 1;

function getColorFromPHP(){
    console.log(index);
    const xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            changeColorbox(this.responseText);
            console.log(this.responseText)
        }
    };
    xhttp.open("GET", "getColorRequest.php?getColorRGB=" + index, true);
    xhttp.send();
    
}

function hexToRgb(hex) {
    var result = /^#?([a-f\d]{2})([a-f\d]{2})([a-f\d]{2})$/i.exec(hex);
    return result ? {
      r: parseInt(result[1], 16),
      g: parseInt(result[2], 16),
      b: parseInt(result[3], 16)
    } : null;
}

  function changeColorbox(color){
    yaklarman = hexToRgb(color);
    document.getElementById("colorbox").style.backgroundColor = "rgb(" + yaklarman.r + "," + yaklarman.g + "," + yaklarman.b + ")";
}

function newPage(){
    getColorFromPHP();
    document.getElementById("indexID").textContent = "Current color index: " + index;
}

function updateNext(){
    if (index < 12){ 
        index += 1; 
        getColorFromPHP();
        document.getElementById("indexID").textContent = "Current color index: " + index;
    }}
    

function updatePrev(){
    if (index > 1){ 
        index -= 1;
        getColorFromPHP();
        document.getElementById("indexID").textContent = "Current color index: " + index;
    }
}
