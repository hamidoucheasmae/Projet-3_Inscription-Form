var btn   =document.getElementById("btn");
btn.addEventListener("click",table);
var row=1;

function inscrire (){
  var Nom = document.getElementById("Nom").value;
  var Prenom= document.getElementById("Prenom").value;
 var Telephone = document.getElementById("Telephone").value;
  
  if (!name || !Prenom || !Telephone){
   alert ("please fill all the boxes");
   return;
  }
  
  
  var table = document.getElementById("table");
  
  var newRow = table.insertRow(row);
  var cell1 = newRow.insertCell(0);
  var cell2 = newRow.insertCell(1);
  var cell3 = newRow.insertCell(2);
  
  
  
cell1.innerHTML =Nom ;
cell2.innerHTML =Prenom;
cell3.innerHTML =Telephone;

row++;
  
  
  
  
  
  
}