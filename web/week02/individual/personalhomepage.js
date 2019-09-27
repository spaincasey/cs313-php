function comment(){
    var comments = []; 
    let txt = document.querySelector("#example").value;  
    //let txt = document.getElementById('example').value;
    comments.unshift(txt);
    for (var i = 0; i < comments.length; i++) { 
        document.getElementById('para').innerHTML += txt + "<br>"; 
    }
    // // document.getElementById('para').innerHTML = comments; 
    // // $( "#para" ).empty().append( txt );
}