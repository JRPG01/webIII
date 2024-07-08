let contO = true;
let contM = true;
let contC = true;
let contD = true;


const txtObservaciones = document.getElementById('txtObservaciones');
const errorObservaciones = document.getElementById('obersavionesError');
const add = document.getElementById('add');

txtObservaciones.addEventListener('keyup', function() {
    const observaciones = this.value.trim();
    
    if (observaciones.length >= 0 && observaciones.length <= 7) {
        errorObservaciones.style.display = 'block';
        errorObservaciones.style.color = 'red';
        add.style.visibility = 'hidden';
        contO = false;
    } else {
        contO = true;
        errorObservaciones.style.display = 'none';
        
        if(contD && contC && contM && contO){
            add.style.visibility = 'visible';
        }
        
    }
});


const medicamentos = document.getElementById('txtMedicamento');
const errorMedicamentos = document.getElementById('MedicamentosError');

medicamentos.addEventListener('keyup', function() {
    const observaciones = this.value.trim();
    
    if (observaciones.length >= 0 && observaciones.length <= 7) {
        errorMedicamentos.style.display = 'block';
        errorMedicamentos.style.color = 'red';
        add.style.visibility = 'hidden';
        contM = false;
    } else {
        errorMedicamentos.style.display = 'none';
        contM = true;
        if(contD && contC && contM && contO){
            add.style.visibility = 'visible';
        }
    }
});

const idCliente = document.getElementById('txtIdCliente');
const errorCliente = document.getElementById('ClienteError');
const regexNumerosC = /[1-9][0-9]*/;

idCliente.addEventListener('keyup', function() {
    const observaciones = this.value.trim();
    
    if (observaciones.length >= 0 && !regexNumerosC.test(observaciones)) {
        errorCliente.style.display = 'block';
        errorCliente.style.color = 'red';
        add.style.visibility = 'hidden';
        contC = false;
    } else {
        errorCliente.style.display = 'none';
        contC = true;
        if(contD && contC && contM && contO){
            add.style.visibility = 'visible';
        }
    }
});

const idDoctor = document.getElementById('txtIdDoctor');
const errorDoctor = document.getElementById('DoctorError');
const regexNumerosD = /[1-9][0-9]*/;
const addD = document.getElementById('add');

idDoctor.addEventListener('keyup', function() {
    const observaciones = this.value.trim();
    
    if (!regexNumerosD.test(observaciones)) {
        errorDoctor.style.display = 'block';
        errorDoctor.style.color = 'red';
        add.style.visibility = 'hidden';
        contD = false;
    } else {
        errorDoctor.style.display = 'none';
        contD = true;
        if(contD && contC && contM && contO){
            add.style.visibility = 'visible';
        }
    }
});


