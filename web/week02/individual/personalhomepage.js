window.onclick = function(e)
{   var id =  e.target.id;   
 if (id === 'sent')  
 { var txt = document.getElementById('example').value    
   $( "#para" ).empty().append( txt );
 }
}