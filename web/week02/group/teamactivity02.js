function myFunction() {
    alert("clicked"); 
  }

// function change() {
//     let color = document.getElementById("inputColor").value;
//     document.getElementById("div1").style.backgroundColor = color;
// }

function change() {
    let color = document.querySelector("#inputColor").value;
    document.querySelector("#div1").style.backgroundColor = color;
}

function toggle() {
    let display = document.querySelector("#div3").style.display;
    if(display == "none"){
        document.querySelector("#div3").style.display = "block";
    }
    else{
    document.querySelector("#div3").style.display = "none";
    }
}

//document.querySelectorAll(".even")[0].style