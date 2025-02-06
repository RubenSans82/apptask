const password = document.getElementById("password");
const btnregister = document.getElementById("register")
const password2 = document.getElementById("password2")

function checkform() {
    const aviso = document.getElementById("warning").querySelector('p');
    if (password.value == password2.value && password.value !== '') {
        btnregister.disabled = false
        aviso.style.display = "none";
    } else {
        btnregister.disabled = true
        aviso.style.display = "block";
    }
    
}

password.addEventListener('input', checkform)
password2.addEventListener('input', checkform)