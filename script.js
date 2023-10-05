function validateForm() {
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;

    //  VALIDACION del formulario
    if (username === "" || password === "") {
        alert("Please complete all fields.");
        return false; 
    }

    

    return true; 
}

function resetPassword() {
    var resetEmail = document.getElementById("resetEmail").value;

    

    // Avisa que salio bien
    alert("Password reset request sent to " + resetEmail);

    // VA hacia la pagina de olvide mi contraseña
    window.location.href = "olvidar contraseña.html";

    // Si el formulario esta mal 
    return false;
}
function redirectToHome() {
    // TE lleva a la pagina de inicio 
    window.location.href = "index.html";
}


// obtiene referencias con el DOM
const passwordInput = document.getElementById('password');
const showPasswordButton = document.getElementById('showPassword');

// DA funcion al ojo de la contraseña
showPasswordButton.addEventListener('click', function () {
    if (passwordInput.type === 'password') {
        passwordInput.type = 'text';
    } else { 
        passwordInput.type = 'password';
    }
    function togglePasswordVisibility() {
        const passwordInput = document.getElementById("contrasena");
        if (passwordInput.type === "password") {
            passwordInput.type = "text";
        } else {
            passwordInput.type = "password";
        }
    }
}); 
