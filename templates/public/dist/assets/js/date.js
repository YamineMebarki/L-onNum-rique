var hour = setInterval(myTimer, 1000);

function myTimer() {
    var d = new Date();
    var h = d.toLocaleTimeString();
    document.getElementById("hour").innerHTML = h
}
/**
 * Created by yamine on 11/10/19.
 */
var date = setInterval(date, 1000);

function date() {
    var d = new Date();
    var dTime = d.getDate();
    document.getElementById("date").innerHTML  = dTime;
}

var days = setInterval(days, 1000);

function days (){
    var d = new Date();
    var tab_days = new Array("Dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi");
    var day = tab_days[d.getDay()];
    document.getElementById("days").innerHTML  = day;
}

var month = setInterval(month, 1000);

function month() {
    var d = new Date();
    var tab_month = new Array("Janvier", "Fevrier", "Mars", "Avril", "Mai", "Juin", "Juillet", "Aout", "Septembre", "Octobre", "Novembre", "Decembre");
    var month = tab_month[d.getMonth()];
    document.getElementById("month").innerHTML  = month;
}

var years = setInterval(years, 1000);

function years(){
var y = new Date();
var year = y.getFullYear();
document.getElementById('years').innerHTML = year ;
}