window.addEventListener('load', () => { 

    var name = JSON.parse(localStorage.getItem('NAME'));
    var surname = JSON.parse(localStorage.getItem('SURNAME'));
    var adress = JSON.parse(localStorage.getItem('ADRESS'));
    var phone = JSON.parse(localStorage.getItem('PHONE'));
    var email = JSON.parse(localStorage.getItem('EMAIL'));

for(let i=0 ; i< name.length ; i++ )
    {document.getElementById('p').innerHTML +="<span>Name :</span>&nbsp;"+ name [i]+"<br>";
    document.getElementById('p').innerHTML +="<span>Surname :</span>&nbsp;"+ surname [i]+"<br>"
    document.getElementById('p').innerHTML +="<span>Adress :</span>&nbsp;"+ adress [i]+"<br>"
    document.getElementById('p').innerHTML +="<span>Phone :</span>&nbsp;"+ phone [i]+"<br>"
    document.getElementById('p').innerHTML +="<span>Email :</span>&nbsp;"+ email [i]+"<br><br><br>"



}



})