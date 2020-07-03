//Get id from clicked delete button and send to delete.php
var deletebutton = document.querySelectorAll(".deletebtn");

deletebutton.forEach(btn=> {
    btn.onclick = function(event){
      var idbutton=event.target.parentElement.dataset.id;
      location.replace('mededelingen_delete.php?id='+idbutton);
 }
});

var deletebutton = document.querySelectorAll(".deleteactiviteit", ".deleteactiviteit *");

deletebutton.forEach(btn=> {
    btn.onclick = function(event){
      var idbutton= event.target.parentElement.dataset.id;
      if(!idbutton){
        var idbutton = event.target.parentElement.parentElement.parentElement.dataset.id;
      }
      location.replace('rooster_delete.php?id='+idbutton);
 }
});