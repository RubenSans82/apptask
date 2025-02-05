const password = document.getElementById("password");
const btnregister = document.getElementById("registrar")
const password2 = document.getElementById("password2")

function checkform() {
    var aviso = document.getElementById("aviso")
    if (password.value === password2.value && contraseña.value !== '') {
        btnregister.disabled = false
        aviso.style.display="none"
    } else {
        btnregister.disabled = true
        aviso.style.display="block"
    }
    
}

password.addEventListener('input', checkform)
password2.addEventListener('input', checkform)