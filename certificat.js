window.addEventListener('load', () => { 

    var name = JSON.parse(localStorage.getItem('NAME'));
    var surname = JSON.parse(localStorage.getItem('SURNAME'));


for(let i=0 ; i< name.length ; i++ )
    {document.getElementById('p').innerHTML +="<body><div class='frame' ><div class='frame2' ><span class='title'>Certificate of Participation</span><br><br><span style='font-size:25px'><i>This is to certify that</i></span><br><br> <div class='name'><span style=' font-size:50px'>"+ name [i]+"&nbsp;"+ surname [i]+"</span></div><br/><br/><span style=font-size:25px><i>has participated in the event</i></span> <br/><br/> <span style='font-size:30px'>event name</span> <br/><br/>  <span style='font-size:25px'><i>dated</i></span><br>  <span style='font-size:30px'> 30 mars 2020</span> </div> </div></body>"+"<br>";
    

}



})