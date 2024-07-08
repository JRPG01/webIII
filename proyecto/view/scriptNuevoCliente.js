
var contC=true;

const userC = document.getElementById('userC');
const errorUsuario = document.getElementById('usuarioError');
const add = document.getElementById('add');

const regexUserC = /^[a-z0-9_]{8,12}$/;

userC.addEventListener('keyup', function() {
    const observaciones = this.value.trim();
    
    if (!regexUserC.test(observaciones)) {
        errorUsuario.style.display = 'block';
        errorUsuario.style.color = 'red';
        add.style.display = 'none';
        contC = false;
    } else {
        contC = true;
        errorUsuario.style.display = 'none';
        
        if(contC){
            add.style.display = 'block';
        }
        
    }
});

const passC = document.getElementById('passC');
const contrasenaError = document.getElementById('contrasenaError');

const regexPassC = /^.{8,12}$/;

passC.addEventListener('keyup', function() {
    const observaciones = this.value.trim();
    
    if (!regexPassC.test(observaciones)) {
        contrasenaError.style.display = 'block';
        contrasenaError.style.color = 'red';
        add.style.display = 'none';
        contC = false;
    } else {
        contC = true;
        contrasenaError.style.display = 'none';
        
        if(contC){
            add.style.display = 'block';
        }
        
    }
});


const nombreC = document.getElementById('nombreC');
const nombreError = document.getElementById('nombreError');

const regexNombreC = /^[a-zA-Z ]{1,30}$/;

nombreC.addEventListener('keyup', function() {
    const observaciones = this.value.trim();
    
    if (!regexNombreC.test(observaciones)) {
        nombreError.style.display = 'block';
        nombreError.style.color = 'red';
        add.style.display = 'none';
        contC = false;
    } else {
        contC = true;
        nombreError.style.display = 'none';
        
        if(contC){
            add.style.display = 'block';
        }
        
    }
});

const apellidosC = document.getElementById('apellidosC');
const apellidoError = document.getElementById('apellidoError');

const regexApellidosC = /^[a-zA-Z ]{1,60}$/;

apellidosC.addEventListener('keyup', function() {
    const observaciones = this.value.trim();
    
    if (!regexApellidosC.test(observaciones)) {
        apellidoError.style.display = 'block';
        apellidoError.style.color = 'red';
        add.style.display = 'none';
        contC = false;
    } else {
        contC = true;
        apellidoError.style.display = 'none';
        
        if(contC){
            add.style.display = 'block';
        }
        
    }
});

const sexoC = document.getElementById('sexoC');
const sexoError = document.getElementById('sexoError');

const regexSexoC = /^[12]$/;

sexoC.addEventListener('keyup', function() {
    const observaciones = this.value.trim();
    
    if (!regexSexoC.test(observaciones)) {
        sexoError.style.display = 'block';
        sexoError.style.color = 'red';
        add.style.display = 'none';
        contC = false;
    } else {
        contC = true;
        sexoError.style.display = 'none';
        
        if(contC){
            add.style.display = 'block';
        }
        
    }
});

const edad = document.getElementById('edadC');
const edadError = document.getElementById('edadError');

const regexEdadC = /^[1-9][0-9]{1,}$/;

edad.addEventListener('keyup', function() {
    const observaciones = this.value.trim();
    
    if (!regexEdadC.test(observaciones)) {
        edadError.style.display = 'block';
        edadError.style.color = 'red';
        add.style.display = 'none';
        contC = false;
    } else {
        contC = true;
        edadError.style.display = 'none';
        
        if(contC){
            add.style.display = 'block';
        }
        
    }
});

const tel = document.getElementById('telefono');
const telError = document.getElementById('numeroError');

const regexTel = /^[0-9]{10}$/;

tel.addEventListener('keyup', function() {
    const observaciones = this.value.trim();
    
    if (!regexTel.test(observaciones)) {
        telError.style.display = 'block';
        telError.style.color = 'red';
        add.style.display = 'none';
        contC = false;
    } else {
        contC = true;
        telError.style.display = 'none';
        
        if(contC){
            add.style.display = 'block';
        }
        
    }
});