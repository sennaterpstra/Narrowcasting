n =  new Date();
y = n.getFullYear();
m = n.getMonth() + 1;
d = n.getDate();
h = n.getHours();
min = n.getMinutes();

if(min < 10){
    min = "0" + min;
}

day = n.getDay();
var dayarray = new Array("Zondag", "Maandag", "Dinsdag", "Woensdag", "Donderdag", "Vrijdag", "Zaterdag")
dday = dayarray[day]

document.getElementById("date").innerHTML = dday + " " + d + "/" + m + "/" + y + " " + h + ":" + min;
