const nombre = document.getElementById("name")
const user = document.getElementById("username")
const email = document.getElementById("email")
const pass = document.getElementById("password")
const form = document.getElementById("form")
const parrafo = document.getElementById("warnings")
entrar = false

form.addEventListener("submit", e=> {
    e.preventDefault()
    let warnings = ""
    let regexEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/
    parrafo.innerHTML = ""
    

    if (nombre.value.length < 6) {
        warnings += '<strong class="wmessage">The name is invalid </strong><br>'
        entrar = true
    }
    if (username.value.length < 6) {
        warnings += '<strong class="wmessage">The username is invalid </strong><br>'
        entrar = true
    }

    if (!regexEmail.test(email.value)) {
        warnings += '<strong class="wmessage">The email is invalid</strong> <br>'
        entrar = true
    }

    if (pass.value.length < 8) {
        warnings += '<strong class="wmessage">The password is invalid</strong> <br>'
        entrar = true
    }

    if (entrar == true) {
        parrafo.innerHTML = warnings
    } else {
        parrafo.innerHTML = '<strong class="smessage">Log sent</strong>'
        //document.location.href = './entrenamientos.html';
    }
})


let signUp = document.getElementById("signUp");
let signIn = document.getElementById("signIn");
let nameImput = document.getElementById("nameImput");
let title = document.getElementById("title");

signIn.onclick = function() {
    nameImput.style.maxHeight= "0";
    title.innerHTML= "Formulario";
    signUp.classList.add("signUp");
    signIn.classList.remove("signIn");
}

signUp.onclick = function() {
    nameImput.style.maxHeight = "60px";
    title.innerHTML = "Formulario";
    signUp.classList.remove("signUp");
    signIn.classList.add("signIn");
}
