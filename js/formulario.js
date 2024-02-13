<<<<<<< HEAD
const formulario=document.getElementById('editar');
const inputs=document.querySelectorAll('#editar input');

const expresiones={
    nombre: /^[a-zA-ZÀ-ÿ\s]{4,30}$/, // Letras y espacios, pueden llevar acentos, mínimo 4 caracteres máximo 30.
    apaterno: /^[a-zA-ZÀ-ÿ\s]{4,20}$/, // Letras y espacios, pueden llevar acentos.
    amaterno: /^[a-zA-ZÀ-ÿ\s]{4,20}$/, // Letras y espacios, pueden llevar acentos.
    curp: /^[A-Z]{18,18}$/,
    fnac: /^[0][1-9]|[12][0-9]|3[01]\/|-[0][1-9]|[1][0-2]\2\d{4}$/, //Formato para fecha 
    estado: /^[a-zA-ZÀ-ÿ\s]{4,20}$/, // Letras y espacios, pueden llevar acentos.
    grado: /^\d$/, // 1 a 1 números.
    telefono: /^\d{10,10}$/, // 10 a 10 números.
    correo: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/  
}

const validarFormulario=(e)=>{
    switch (e.target.name){
        case "nombre":   
            validarCampo(expresiones.nombre, e.target,'nombre');
        break;
        case "apaterno":
            validarCampo(expresiones.apaterno, e.target,'apaterno');                       
        break;
        case "amaterno":
            validarCampo(expresiones.amaterno, e.target,'amaterno');            
        break;
        case "curp":
            validarCampo(expresiones.curp, e.target,'curp');            
        break;
        case "fnac":
            validarCampo(expresiones.fnac, e.target,'fnac');            
        break;
        case "estado":
            validarCampo(expresiones.estado, e.target,'estado');            
        break;
        case "grado":
            validarCampo(expresiones.grado, e.target,'grado');            
        break;
        case "telefono":
            validarCampo(expresiones.telefono, e.target,'telefono');            
        break;
        case "correo":
            validarCampo(expresiones.correo, e.target,'correo');            
        break;
    }
}

const validarCampo=(expresion, input, campo)=>{
    if(expresion.test(input.value)){
        document.getElementById(`grupo__${campo}`).classList.remove('editar__grupo-incorrecto');
        document.getElementById(`grupo__${campo}`).classList.add('editar__grupo-correcto');         
        document.querySelector(`#grupo__${campo} i`).classList.remove('fa-solid', 'fa-square-xmark');
        document.querySelector(`#grupo__${campo} i`).classList.add('fa-regular', 'fa-square-check');        
        document.querySelector(`#grupo__${campo} .editar__input-error`).classList.remove('editar__input-error-activo');            
    } else{
        document.getElementById(`grupo__${campo}`).classList.add('editar__grupo-incorrecto');
        document.getElementById(`grupo__${campo}`).classList.remove('editar__grupo-correcto');
        document.querySelector(`#grupo__${campo} i`).classList.remove('fa-regular', 'fa-square-check');
        document.querySelector(`#grupo__${campo} i`).classList.add('fa-solid', 'fa-square-xmark');        
        document.querySelector(`#grupo__${campo} .editar__input-error`).classList.add('editar__input-error-activo');
    }
}

inputs.forEach((input)=>{
    input.addEventListener('keyup', validarFormulario);
    input.addEventListener('blur', validarFormulario);
});

formulario.addEventListener('submit',(e)=>{
    
=======
const formulario=document.getElementById('editar');
const inputs=document.querySelectorAll('#editar input');

const expresiones={
    nombre: /^[a-zA-ZÀ-ÿ\s]{4,30}$/, // Letras y espacios, pueden llevar acentos, mínimo 4 caracteres máximo 30.
    apaterno: /^[a-zA-ZÀ-ÿ\s]{4,20}$/, // Letras y espacios, pueden llevar acentos.
    amaterno: /^[a-zA-ZÀ-ÿ\s]{4,20}$/, // Letras y espacios, pueden llevar acentos.
    curp: /^[A-Z]{18,18}$/,
    fnac: /^[0][1-9]|[12][0-9]|3[01]\/|-[0][1-9]|[1][0-2]\2\d{4}$/, //Formato para fecha 
    estado: /^[a-zA-ZÀ-ÿ\s]{4,20}$/, // Letras y espacios, pueden llevar acentos.
    grado: /^\d$/, // 1 a 1 números.
    telefono: /^\d{10,10}$/, // 10 a 10 números.
    correo: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/  
}

const validarFormulario=(e)=>{
    switch (e.target.name){
        case "nombre":   
            validarCampo(expresiones.nombre, e.target,'nombre');
        break;
        case "apaterno":
            validarCampo(expresiones.apaterno, e.target,'apaterno');                       
        break;
        case "amaterno":
            validarCampo(expresiones.amaterno, e.target,'amaterno');            
        break;
        case "curp":
            validarCampo(expresiones.curp, e.target,'curp');            
        break;
        case "fnac":
            validarCampo(expresiones.fnac, e.target,'fnac');            
        break;
        case "estado":
            validarCampo(expresiones.estado, e.target,'estado');            
        break;
        case "grado":
            validarCampo(expresiones.grado, e.target,'grado');            
        break;
        case "telefono":
            validarCampo(expresiones.telefono, e.target,'telefono');            
        break;
        case "correo":
            validarCampo(expresiones.correo, e.target,'correo');            
        break;
    }
}

const validarCampo=(expresion, input, campo)=>{
    if(expresion.test(input.value)){
        document.getElementById(`grupo__${campo}`).classList.remove('editar__grupo-incorrecto');
        document.getElementById(`grupo__${campo}`).classList.add('editar__grupo-correcto');         
        document.querySelector(`#grupo__${campo} i`).classList.remove('fa-solid', 'fa-square-xmark');
        document.querySelector(`#grupo__${campo} i`).classList.add('fa-regular', 'fa-square-check');        
        document.querySelector(`#grupo__${campo} .editar__input-error`).classList.remove('editar__input-error-activo');            
    } else{
        document.getElementById(`grupo__${campo}`).classList.add('editar__grupo-incorrecto');
        document.getElementById(`grupo__${campo}`).classList.remove('editar__grupo-correcto');
        document.querySelector(`#grupo__${campo} i`).classList.remove('fa-regular', 'fa-square-check');
        document.querySelector(`#grupo__${campo} i`).classList.add('fa-solid', 'fa-square-xmark');        
        document.querySelector(`#grupo__${campo} .editar__input-error`).classList.add('editar__input-error-activo');
    }
}

inputs.forEach((input)=>{
    input.addEventListener('keyup', validarFormulario);
    input.addEventListener('blur', validarFormulario);
});

formulario.addEventListener('submit',(e)=>{
    
>>>>>>> 8d2e818da51b76ede411b462ab63804e0b63a099
});