function redirSerie10(){
    window.location='serie_10.html';
}
var tiempoTest = document.getElementById('tiempoTest').value;
setTimeout( function (){
    alert('Se termino el tiempo');
    tempo();
    window.location='serie_10.html';
},tiempoTest*1000)

function obtenerValor(nombreGrupo){
    let grupo = document.getElementsByName(nombreGrupo);
    for(var i = 0; i < (grupo.length); i++){
        if(grupo[i].checked){
            return grupo[i].value
        }
    }
}

function resultado(){
    let puntaje = 0;
    if(obtenerValor('respuesta1')=='D') puntaje++;
    if(obtenerValor('respuesta2')=='E') puntaje++;
    if(obtenerValor('respuesta3')=='C') puntaje++;
    if(obtenerValor('respuesta4')=='A') puntaje++;
    if(obtenerValor('respuesta5')=='C') puntaje++;
    if(obtenerValor('respuesta6')=='D') puntaje++;
    if(obtenerValor('respuesta7')=='E') puntaje++;
    if(obtenerValor('respuesta8')=='A') puntaje++;
    if(obtenerValor('respuesta9')=='D') puntaje++;
    if(obtenerValor('respuesta10')=='C') puntaje++;
    if(obtenerValor('respuesta11')=='E') puntaje++;
    if(obtenerValor('respuesta12')=='E') puntaje++;
    if(obtenerValor('respuesta13')=='A') puntaje++;
    if(obtenerValor('respuesta14')=='E') puntaje++;
    if(obtenerValor('respuesta15')=='E') puntaje++;
    if(obtenerValor('respuesta16')=='A') puntaje++;
    if(obtenerValor('respuesta17')=='D') puntaje++;
    if(obtenerValor('respuesta18')=='E') puntaje++;
    return puntaje;
}

function tempo(){
    redirSerie10()
    alert(resultado()*100/18);
}