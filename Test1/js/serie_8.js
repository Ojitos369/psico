function redirSerie9(){
    window.location='serie_9.html';
}
var tiempoTest = document.getElementById('tiempoTest').value;
setTimeout( function (){
    alert('Se termino el tiempo');
    tempo();
    window.location='serie_9.html';
},tiempoTest*1000)

function obtenerValor(nombreGrupo){
    let grupo = document.querySelector(`[name=${nombreGrupo}]`); 
    return grupo.value;
}

function resultado(){
    let puntaje = 0;
    if(obtenerValor('respuesta1')=='V') puntaje++;
    if(obtenerValor('respuesta2')=='F') puntaje++;
    if(obtenerValor('respuesta3')=='V') puntaje++;
    if(obtenerValor('respuesta4')=='V') puntaje++;
    if(obtenerValor('respuesta5')=='V') puntaje++;
    if(obtenerValor('respuesta6')=='F') puntaje++;
    if(obtenerValor('respuesta7')=='F') puntaje++;
    if(obtenerValor('respuesta8')=='V') puntaje++;
    if(obtenerValor('respuesta9')=='V') puntaje++;
    if(obtenerValor('respuesta10')=='F') puntaje++;
    if(obtenerValor('respuesta11')=='F') puntaje++;
    if(obtenerValor('respuesta12')=='F') puntaje++;
    if(obtenerValor('respuesta13')=='V') puntaje++;
    if(obtenerValor('respuesta14')=='V') puntaje++;
    if(obtenerValor('respuesta15')=='V') puntaje++;
    if(obtenerValor('respuesta16')=='V') puntaje++;
    if(obtenerValor('respuesta17')=='F') puntaje++;
    return puntaje;
}

function tempo(){
    redirSerie9();
    alert(resultado()*100/17);
}