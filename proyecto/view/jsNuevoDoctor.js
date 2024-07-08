var cont =true;

const txtUsuario =  document.getElementById('txtUsuario');
const txtpass = document.getElementById('txtPass');
const txtNom = document.getElementById('txtNombre');
const txtApellidos = document.getElementById('txtApellido');
const txtsexo = document.getElementById('txtsexoD');
const txtEdad = document.getElementById('txtEdad');
const txtEspecialidad = document.getElementById('txtEspecialidad');
const txtTurno = document.getElementById('txtTurno');
const txtTel = document.getElementById('form6Example6');
const txtEmail = document.getElementById('form6Example');
const errorObservaciones = document.getElementById('obersavionesError');
const errorObservaciones1 = document.getElementById('obersavionesError1');
const errorObservaciones2 = document.getElementById('obersavionesError2');
const errorObservaciones3 = document.getElementById('obersavionesError3');
const errorObservaciones4 = document.getElementById('obersavionesError4');
const errorObservaciones5 = document.getElementById('obersavionesError5');
const errorObservaciones6 = document.getElementById('obersavionesError6');
const errorObservaciones7 = document.getElementById('obersavionesError7');
const errorObservaciones8 = document.getElementById('obersavionesError8');
const errorObservaciones9 = document.getElementById('obersavionesError9');
const add = document.getElementById('add');

txtUsuario.addEventListener('keyup', function() {
    const validaciones = this.value.trim();

    if(validaciones.length >= 0 && validaciones.length <= 7){
        errorObservaciones.style.display = 'block';
        errorObservaciones.style.color = 'red';
        add.style.display = 'none';
        cont = false;
    } else {
        cont = true;
        errorObservaciones.style.display = 'none';
    
        if(cont){
            add.style.display = 'block';
        }
    }
});

txtpass.addEventListener('keyup', function() {
    const validaciones = this.value.trim();

    if(validaciones.length >= 0 && validaciones.length <= 7){
        errorObservaciones1.style.display = 'block';
        errorObservaciones1.style.color = 'red';
        add.style.display = 'none';
        cont = false;
    } else {
        cont = true;
        errorObservaciones1.style.display = 'none';
    
        if(cont){
            add.style.display = 'block';
        }
    }
});

txtNom.addEventListener('keyup', function() {
    const validaciones = this.value.trim();

    if(validaciones.length >= 0 && validaciones.length <= 1){
        errorObservaciones2.style.display = 'block';
        errorObservaciones2.style.color = 'red';
        add.style.display = 'none';
        cont = false;
    } else {
        cont = true;
        errorObservaciones2.style.display = 'none';
    
        if(cont){
            add.style.display = 'block';
        }
    }
});

txtApellidos.addEventListener('keyup', function() {
    const validaciones = this.value.trim();

    if(validaciones.length >= 0 && validaciones.length <= 4){
        errorObservaciones3.style.display = 'block';
        errorObservaciones3.style.color = 'red';
        add.style.display = 'none';
        cont = false;
    } else {
        cont = true;
        errorObservaciones3.style.display = 'none';
    
        if(cont){
            add.style.display = 'block';
        }
    }
});



txtEspecialidad.addEventListener('keyup', function() {
    const validaciones = this.value.trim();

    if(validaciones.length >= 0 && validaciones.length <= 1){
        errorObservaciones6.style.display = 'block';
        errorObservaciones6.style.color = 'red';
        add.style.display = 'none';
        cont = false;
    } else {
        cont = true;
        errorObservaciones6.style.display = 'none';
    
        if(cont){
            add.style.display = 'block';
        }
    }
});

txtTel.addEventListener('keyup', function() {
    const validaciones = this.value.trim();

    if(validaciones.length >= 0 && validaciones.length <= 9){
        errorObservaciones8.style.display = 'block';
        errorObservaciones8.style.color = 'red';
        add.style.display = 'none';
        cont = false;
    } else {
        cont = true;
        errorObservaciones8.style.display = 'none';
    
        if(cont){
            add.style.display = 'block';
        }
    }
});

txtEmail.addEventListener('keyup', function() {
    const validaciones = this.value.trim();

    if(validaciones.length >= 0 && validaciones.length <= 9){
        errorObservaciones9.style.display = 'block';
        errorObservaciones9.style.color = 'red';
        add.style.display = 'none';
        cont = false;
    } else {
        cont = true;
        errorObservaciones9.style.display = 'none';
    
        if(cont){
            add.style.display = 'block';
        }
    }
});