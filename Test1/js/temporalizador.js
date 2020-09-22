setTimeout(function() {
    var tiempoTest = document.getElementById('tiempoTest').value;
    var time = tiempoTest * 2; /* how long the timer will run (seconds) */
    var initialOffset = '440';
    var i = 1;

    /* Need initial run as interval hasn't yet occured... */
    $('.circle_animation').css('stroke-dashoffset', initialOffset-(1*(initialOffset/time)));

    var interval = setInterval(function() {
        if(i<60){
            $('h2').text(i);
        }else{
            if((i%60)<10){
                $('h2').text((Math.trunc(i/60)+':0'+(i%60)));
            }else{
                $('h2').text((Math.trunc(i/60)+':'+(i%60)));
            }
        }
        if (i == (time/2)+1) {
            clearInterval(interval);
            return;
        }
        $('.circle_animation').css('stroke-dashoffset', initialOffset-((i+1)*(initialOffset/time)));
        i++;
    }, 1000);
}, 0)