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


function savename(){
    var name = document.getElementById('inputName').value;

    
    
    if(localStorage.getItem('NAME') == null ){
    localStorage.setItem('NAME' , '[]');
    }
    
    var old_name = JSON.parse(localStorage.getItem('NAME'));
     old_name.push(name);


     localStorage.setItem('NAME' , JSON.stringify(old_name));

     alert("your regestration is done thank you");

        }

function savesurname(){
    var surname = document.getElementById('inputSurname').value;
    
    if(localStorage.getItem('SURNAME') == null ){
        localStorage.setItem('SURNAME' , '[]' );
    }
    
    var old_surname = JSON.parse(localStorage.getItem('SURNAME'));
    old_surname.push(surname);
    
    
    localStorage.setItem('SURNAME' , JSON.stringify(old_surname));
    

        }        

  function saveadress(){
    var adress =document.getElementById("inputAddress").value;
            
 if(localStorage.getItem('ADRESS') == null ){
    localStorage.setItem('ADRESS' , '[]' );
      }
            
      var old_adress = JSON.parse(localStorage.getItem('ADRESS'));
      old_adress.push(adress);
            
            
      localStorage.setItem('ADRESS' , JSON.stringify(old_adress));
            
        
    }


    function savephone(){
        var phone =document.getElementById("inputPhone").value;
                
     if(localStorage.getItem('PHONE') == null ){
        localStorage.setItem('PHONE' , '[]' );
          }
                
          var old_phone = JSON.parse(localStorage.getItem('PHONE'));
     old_phone.push(phone);


    localStorage.setItem('PHONE' , JSON.stringify(old_phone));

            
        }    

        function saveemail(){
            var email =document.getElementById("inputEmail").value;
            
         if(localStorage.getItem('EMAIL') == null ) {
            localStorage.setItem('EMAIL' , '[]' );
              }
                    
              var old_email = JSON.parse(localStorage.getItem('EMAIL'));
              old_email.push(email);   
              
              
             localStorage.setItem('EMAIL' , JSON.stringify(old_email));
              
                
            }   
