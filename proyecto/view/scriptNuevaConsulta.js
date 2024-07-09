let contO = true;


const txtObservaciones = document.getElementById('txtObservaciones');
const errorObservaciones = document.getElementById('obersavionesError');
const add = document.getElementById('add');

txtObservaciones.addEventListener('keyup', function() {
    const observaciones = this.value.trim();
    
    if (observaciones.length >= 0 && observaciones.length <= 7) {
        errorObservaciones.style.display = 'block';
        errorObservaciones.style.color = 'red';
        add.style.display = 'none';
        contO = false;
    } else {
        contO = true;
        errorObservaciones.style.display = 'none';
        
        if(contO){
            add.style.display = 'block';
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
        add.style.display = 'none';
        contO = false;
    } else {
        errorMedicamentos.style.display = 'none';
        contO = true;
        if(contO){
            add.style.display = 'block';
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
        add.style.display = 'none';
        contO = false;
    } else {
        errorCliente.style.display = 'none';
        contO = true;
        if(contO){
            add.style.display = 'block';
        }
    }
});

const idDoctor = document.getElementById('txtIdDoctor');
const errorDoctor = document.getElementById('DoctorError');
const regexNumerosD = /[1-9][0-9]*/;

idDoctor.addEventListener('keyup', function() {
    const observaciones = this.value.trim();
    
    if (!regexNumerosD.test(observaciones)) {
        errorDoctor.style.display = 'block';
        errorDoctor.style.color = 'red';
        add.style.display = 'none';
        contO = false;
    } else {
        errorDoctor.style.display = 'none';
        contO = true;
        if(contO){
            add.style.display = 'block';
        }
    }
});


