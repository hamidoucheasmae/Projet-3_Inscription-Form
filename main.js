function ajouter() {
  var Nom=document.getElementsById("Nom").value;
    var Nom=document.getElementsById("Prenom").value;
  var Nom=document.getElementsById("Adresse").value;
  var Nom=document.getElementsById("Telephone").value;
  var Nom=document.getElementsById("Email").value;
}


localStorage.setItem("Nom",Nom);
localStorage.setItem("Prenomom",Prenom);
localStorage.setItem("Adresse",Adresse);
localStorage.setItem("Telephone",Telephone);
localStorage.setItem("Email",Email);


document.getElementById("tab").style.display="inline-table";
document.getElementById("bt").style.display="block";
document.getElementById("tb").innerHTML+="<tr><td>"+localStorage.getItem("nom")+"</td><td>"+localStorage.getItem("pr")+"</td><td>"+localStorage.getItem("tel")+"</td><tr>";
}
function imp(){
    window.print();
}
