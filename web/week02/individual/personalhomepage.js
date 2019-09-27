function comment(){
    var comments = [];   
    var txt = document.getElementById('example').value   
    comments.append(txt);
    document.getElementById('para').innerHTML = comments; 
    $( "#para" ).empty().append( txt );
}