function startTime(){
    var today=new Date();
    var h=today.getHours();
    var m=today.getMinutes();
    var s=today.getSeconds();

    document.getElementById('tmr').innerHTML=h + ":" + m + ":" + s;
    t=setTimeout()
}