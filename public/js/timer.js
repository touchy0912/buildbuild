calcValues();
var int = setInterval(calcValues, 1000);
function calcValues() {
    $('.counter .to')
        .addClass('hide')
        .removeClass('to')
        .addClass('from')
        .removeClass('hide')
        .addClass('n')
        .find('span:not(.shadow)').each(function (i, el) {
        $(el).text(getSec(true));
    });
    $('.counter .from:not(.n)')
        .addClass('hide')
        .addClass('to')
        .removeClass('from')
        .removeClass('hide')
    .find('span:not(.shadow)').each(function (i, el) {
        $(el).text(getSec(false));
    });
    $('.counter .n').removeClass('n');
}

var startTime = parseInt( new Date() /1000 );
var count =0;
function getSec(next) {
    count +=1;
    var currentTime = parseInt( new Date() /1000 );

 //   var d = new Date()// currrent date with secound hour day month 
 //   var sec = 300-d.getSeconds(); // extraxt second area;
 var sec = startTime+300 -currentTime;
    if (next) {
        sec--;
        if (sec < 0) {
            sec = 299;
        }
    }else if(sec == 0){
        window.location="feedback";
        document.java.submit();
    
    } else if(sec == 300) {
        sec = 0;
    }
    return (sec < 10 ? '0' + sec : sec);
}