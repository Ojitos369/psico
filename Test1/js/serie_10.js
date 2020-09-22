function redirSerie(){
    window.location='resultado.html';
}
var tiempoTest = document.getElementById('tiempoTest').value;
setTimeout( function (){
    alert('Se termino el tiempo');
    tempo();
    redirSerie();
},tiempoTest*1000)

function obtenerValor(nombreGrupo, res1, res2){
    let aux = 0;
    let grupo = document.getElementsByName(nombreGrupo);
    if(grupo[0].value==res1) aux++;
    if(grupo[1].value==res2) aux++;
    return aux;
}

function resultado(){
    let puntaje = 0;
    if(obtenerValor('respuesta1',2,1)==2) puntaje++;
    if(obtenerValor('respuesta2',33,38)==2) puntaje++;
    if(obtenerValor('respuesta3',64,128)==2) puntaje++;
    if(obtenerValor('respuesta4',2,2)==2) puntaje++;
    if(obtenerValor('respuesta5',13,13.25)==2) puntaje++;
    if(obtenerValor('respuesta6',20,21)==2) puntaje++;
    if(obtenerValor('respuesta7',0.25,0.125)==2) puntaje++;
    if(obtenerValor('respuesta8',85.3,94.3)==2) puntaje++;
    if(obtenerValor('respuesta9',6,8)==2) puntaje++;
    if(obtenerValor('respuesta10',33,34)==2) puntaje++;
    if(obtenerValor('respuesta11',25,125)==2) puntaje++;
    return puntaje;
}

function tempo(){
    redirSerie();
    alert(resultado()*100/18);
}