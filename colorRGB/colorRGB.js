let hexValRef = document.getElementById("hex-val-ref");
let customAlert = document.getElementById("custom-alert");

function colors() {
    var red = document.getElementById("red").value;
    var green = document.getElementById("green").value;
    var blue = document.getElementById("blue").value;
    document.body.style.backgroundColor =
        'rgb(' + red + ',' + green + ',' + blue + ')';
    hexValRef.value = 'RGB(' + red + ',' + green + ',' + blue + ')';
}

//Function to copy the color code
let copy = (textId) => {
    //Selects the text in the <input> element
    document.getElementById(textId).select();
    //Copies the selected text to clipboard
    document.execCommand("copy");
    //Display Alert
    customAlert.style.transform = "scale(1)";
    setTimeout(() => {
      customAlert.style.transform = "scale(0)";
    }, 2000);
  };


