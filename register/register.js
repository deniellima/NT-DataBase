//Name
let nameInput = document.getElementById("name-input");
let nameError = document.getElementById("name-error");
let emptyNameError = document.getElementById("empty-name");

//Email
let emailInput = document.getElementById("email");
let emailError = document.getElementById("email-error");
let emptyEmailError = document.getElementById("empty-email");

//Password
const passwordInput = document.getElementById("password");
const passwordError = document.getElementById("password-error");
const emptyPasswordError = document.getElementById("empty-password");

//Verify Password
let verifyPasswordInput = document.getElementById("verify-password");
let verifyPasswordError = document.getElementById("verify-password-error");
let emptyVerifyPasswordError = document.getElementById("empty-verify-password");

//Submit
let submitButton = document.getElementById("submit-button");

//Valid
let validClasses = document.getElementsByClassName("valid");
let invalidClasses = document.getElementsByClassName("error");

//Password Verification
const isPasswordValid = (password) => {
    const regex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[\$\%\^\&\!@\#\*\(\)\+\=\`\~\?\>\<])/;
    return regex.test(password) && password.length >= 8;
  };

//Text verification (if input contains only text)
const textVerify = (text) => {
  const regex = /^[a-zA-Z]{3,}$/;
  return regex.test(text);
};

//Email verification
const emailVerify = (input) => {
  const regex = /^[a-z0-9_]+@[a-z]{3,}\.[a-z\.]{3,}$/;
  return regex.test(input);
};

//For empty input - accepts(input,empty error for that input and other errors)
const emptyUpdate = (
  inputReference,
  emptyErrorReference,
  otherErrorReference
) => {
  if (!inputReference.value) {
    //input is null/empty
    emptyErrorReference.classList.remove("hide");
    otherErrorReference.classList.add("hide");
    inputReference.classList.add("error");
  } else {
    //input has some content
    emptyErrorReference.classList.add("hide");
  }
};

//For error styling and displaying error message
const errorUpdate = (inputReference, errorReference) => {
  errorReference.classList.remove("hide");
  inputReference.classList.remove("valid");
  inputReference.classList.add("error");
};

//For no errors
const validInput = (inputReference) => {
  inputReference.classList.remove("error");
  inputReference.classList.add("valid");
};

//Name
nameInput.addEventListener("input", () => {
  if (textVerify(nameInput.value)) {
    //If verification returns true
    nameError.classList.add("hide");
    validInput(nameInput);
  } else {
    //for false
    errorUpdate(nameInput, nameError);
    //empty checker
    emptyUpdate(nameInput, emptyNameError, nameError);
  }
});

//Email
emailInput.addEventListener("input", () => {
  if (emailVerify(emailInput.value)) {
    emailError.classList.add("hide");
    validInput(emailInput);
  } else {
    errorUpdate(emailInput, emailError);
    emptyUpdate(emailInput, emptyEmailError, emailError);
  }
});

//Password
const updateErrors = () => {
    if (isPasswordValid(passwordInput.value)) {
      passwordError.classList.add("hide");
      validInput(passwordInput);
    } else {
      errorUpdate(passwordInput, passwordError);
      emptyUpdate(passwordInput, emptyPasswordError, passwordError);
    }
  };  

passwordInput.addEventListener("input", updateErrors);

//Verify password
verifyPasswordInput.addEventListener("input", () => {
  if (verifyPasswordInput.value === passwordInput.value) {
    verifyPasswordError.classList.add("hide");
    validInput(verifyPasswordInput);
  } else {
    errorUpdate(verifyPasswordInput, verifyPasswordError);
    emptyUpdate(passwordInput, emptyVerifyPasswordError, verifyPasswordError);
  }
});

//Submit button
submitButton.addEventListener("click", () => {
  if (validClasses.length == 6 && invalidClasses.length == 0) {
    alert("Success");
  } else {
    alert("Error");
  }
});

/*// Phone
let phoneInput = document.getElementById("phone");
let phoneError = document.getElementById("phone-error");
let emptyPhoneError = document.getElementById("empty-phone");

// Phone verification
const phoneVerify = (input) => {
  // Aqui você pode definir seu próprio padrão de verificação de número de telefone
  // Este é um exemplo básico que verifica se há pelo menos 9 dígitos numéricos
  const regex = /^\d{9,}$/;
  return regex.test(input);
};

// Phone
phoneInput.addEventListener("input", () => {
  if (phoneVerify(phoneInput.value)) {
    phoneError.classList.add("hide");
    validInput(phoneInput);
  } else {
    errorUpdate(phoneInput, phoneError);
    emptyUpdate(phoneInput, emptyPhoneError, phoneError);
  }
});*/

// Adiciona a máscara de telefone ao input
var inputTelefone = document.getElementById('telefone');
inputTelefone.addEventListener('input', function (event) {
    var telefone = event.target.value;
    telefone = telefone.replace(/\D/g, ''); // Remove caracteres não numéricos
    telefone = telefone.replace(/^(\d{2})(\d)/g, '($1) $2'); // Adiciona parênteses em torno do DDD
    telefone = telefone.replace(/(\d)(\d{4})$/, '$1-$2'); // Adiciona hífen entre os últimos dígitos
    event.target.value = telefone;
});