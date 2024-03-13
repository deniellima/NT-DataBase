let pickedColorRef = document.getElementById("picked-color-ref");
let hexValRef = document.getElementById("hex-val-ref");
let customAlert = document.getElementById("custom-alert");

function changeColor() {
  var randomColor = 'rgb(' + Math.round(Math.random() * 255) +
    ',' + Math.round(Math.random() * 255) +
    ',' + Math.round(Math.random() * 255) + ')';

  document.body.style.backgroundColor = randomColor;
  hexValRef.value = randomColor;
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


