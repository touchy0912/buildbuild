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
    var min ;
    var sec2 ;

 //   var d = new Date()// currrent date with secound hour day month 
 //   var sec = 300-d.getSeconds(); // extraxt second area;
 var sec = startTime+300 -currentTime;
    if (next)
    {
        sec--;
        sec2=sec%60;
        min=Math.floor(sec/60);
        
        if(sec == 0){
        window.location="feedback";
        document.java.submit();
        }
        return  (sec2 < 10 ? min+':'+'0' + sec2 : min+':'+sec2);
    }  else {
                sec2=sec%60;
        min=Math.floor(sec/60);
        return (sec2 < 10 ? min+':'+'0' + sec2 : min+':'+sec2);
    }
}