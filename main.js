function ajouter(){
var nom=document.getElementById("nom").value;
var pr=document.getElementById("pr").value;
var adr=document.getElementById("adr").value;
var tel=document.getElementById("tel").value;
var email=document.getElementById("email").value;

localStorage.setItem("nom",nom);
localStorage.setItem("pr",pr);
localStorage.setItem("adr",adr);
localStorage.setItem("tel",tel);
localStorage.setItem("email",email);

document.getElementById("tab").style.display="inline-table";
document.getElementById("bt").style.display="block";
document.getElementById("tb").innerHTML+="<tr><td>"+localStorage.getItem("nom")+"</td><td>"+localStorage.getItem("pr")+"</td><td>"+localStorage.getItem("tel")+"</td><tr>";
}
function imp(){
    window.print();
}