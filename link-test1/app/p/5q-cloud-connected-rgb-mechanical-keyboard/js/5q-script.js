
function showCode(el){
    if(el.innerHTML === "Show Me the Code, I am a Nerd"){
        document.getElementById("show-code-button").innerHTML = "Supermega Amazing Awesome";
    }
    if(el.innerHTML === "Supermega Amazing Awesome"){
        document.getElementById("show-code-button").innerHTML = "Show Me the Code, I am a Nerd";
    }
}