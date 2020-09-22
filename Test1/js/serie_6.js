function redirSerie7(){
    window.location='serie_7.html';
}
var tiempoTest = document.getElementById('tiempoTest').value;
setTimeout( function (){
    alert('Se termino el tiempo');
    tempo();
    window.location='serie_7.html';
},tiempoTest*1000)

function obtenerValor(nombreGrupo){
    let grupo = document.querySelector(`[name=${nombreGrupo}]`);
    return grupo.value;
}

function resultado(){
    let puntaje = 0;
    if(obtenerValor('respuesta1')=='S') puntaje++;
    if(obtenerValor('respuesta2')=='N') puntaje++;
    if(obtenerValor('respuesta3')=='N') puntaje++;
    if(obtenerValor('respuesta4')=='S') puntaje++;
    if(obtenerValor('respuesta5')=='S') puntaje++;
    if(obtenerValor('respuesta6')=='N') puntaje++;
    if(obtenerValor('respuesta7')=='N') puntaje++;
    if(obtenerValor('respuesta8')=='N') puntaje++;
    if(obtenerValor('respuesta9')=='S') puntaje++;
    if(obtenerValor('respuesta10')=='S') puntaje++;
    if(obtenerValor('respuesta11')=='N') puntaje++;
    if(obtenerValor('respuesta12')=='N') puntaje++;
    if(obtenerValor('respuesta13')=='N') puntaje++;
    if(obtenerValor('respuesta14')=='S') puntaje++;
    if(obtenerValor('respuesta15')=='N') puntaje++;
    if(obtenerValor('respuesta16')=='N') puntaje++;
    if(obtenerValor('respuesta17')=='S') puntaje++;
    if(obtenerValor('respuesta18')=='N') puntaje++;
    if(obtenerValor('respuesta19')=='N') puntaje++;
    if(obtenerValor('respuesta20')=='S') puntaje++;
    return puntaje;
}

function tempo(){
    redirSerie7();
    alert(resultado()*100/20);
}