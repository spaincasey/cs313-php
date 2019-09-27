function comment(){   
    var id =  document.querySelector("#example").value;   
    if (id === 'sent')  { 
        var txt = document.getElementById('example').value    
        $( "#para" ).empty().append( txt );
    }
}