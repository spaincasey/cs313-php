function comment(){
    var comments = [];   
    var txt = document.getElementById('example').value   
    comments.append(txt);
    for (var i = 0; i < comments.length; i++) { 
        document.getElementById('para').innerHTML = "<p>" + txt + "</p>"; 
    }
    // document.getElementById('para').innerHTML = comments; 
    // $( "#para" ).empty().append( txt );
}