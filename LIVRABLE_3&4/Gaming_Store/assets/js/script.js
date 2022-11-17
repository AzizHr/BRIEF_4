var computer = document.getElementById("computers");
var keyboard = document.getElementById("keyboards");
var mouse = document.getElementById("mouses");
var speaker = document.getElementById("speakers");


computer.addEventListener("click" , function(){
    computer.classList.add("selected");
    keyboard.classList.remove("selected");
    mouse.classList.remove("selected");
    speaker.classList.remove("selected");
});

keyboard.addEventListener("click" , function(){
    keyboard.classList.add("selected");
    computer.classList.remove("selected");
    mouse.classList.remove("selected");
    speaker.classList.remove("selected");
});

mouse.addEventListener("click" , function(){
    mouse.classList.add("selected");
    computer.classList.remove("selected");
    mouse.classList.remove("selected");
    speaker.classList.remove("selected");
});

speaker.addEventListener("click" , function(){
    speaker.classList.add("selected");
    computer.classList.remove("selected");
    mouse.classList.remove("selected");
    speaker.classList.remove("selected");
});