function redirSerie6(){
    window.location='serie_6.html';
}
var tiempoTest = document.getElementById('tiempoTest').value;
setTimeout( function (){
    alert('Se termino el tiempo');
    tempo();
    window.location='serie_6.html';
},tiempoTest*1000)

function obtenerValor(nombreGrupo){
    let grupo = document.querySelector(`[name=${nombreGrupo}]`); 
    return grupo.value;
}

function resultado(){
    let puntaje = 0;
    if(obtenerValor('respuesta1')==20) puntaje++;
    if(obtenerValor('respuesta2')==11) puntaje++;
    if(obtenerValor('respuesta3')==50) puntaje++;
    if(obtenerValor('respuesta4')==0.5) puntaje++;
    if(obtenerValor('respuesta5')==12) puntaje++;
    if(obtenerValor('respuesta6')==18) puntaje++;
    if(obtenerValor('respuesta7')==500) puntaje++;
    if(obtenerValor('respuesta8')==2) puntaje++;
    if(obtenerValor('respuesta9')==28) puntaje++;
    if(obtenerValor('respuesta10')==360) puntaje++;
    if(obtenerValor('respuesta11')==12) puntaje++;
    if(obtenerValor('respuesta12')==25) puntaje++;
    return puntaje;
}

function tempo(){
    redirSerie6();
    alert(resultado()*2*100/24);
}