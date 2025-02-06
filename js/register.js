const password = document.getElementById("password");
const btnregister = document.getElementById("register")
const password2 = document.getElementById("password2")

function checkform() {
    const aviso = document.getElementById("warning");
    if (password.value == password2.value && password.value !== '') {
        btnregister.disabled = false
        aviso.firstChild.style.display = "none";
    } else {
        btnregister.disabled = true
        aviso.firstChild.style.display = "flex";
    }
    
}

password.addEventListener('input', checkform)
password2.addEventListener('input', checkform)