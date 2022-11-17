// var computer = document.getElementById("computers");
// var keyboard = document.getElementById("keyboards");
// var mouse = document.getElementById("mouses");
// var speaker = document.getElementById("speakers");


// computer.addEventListener("click" , function(){
//     computer.classList.add("selected");
//     keyboard.classList.remove("selected");
//     mouse.classList.remove("selected");
//     speaker.classList.remove("selected");
// });

// keyboard.addEventListener("click" , function(){
//     keyboard.classList.add("selected");
//     computer.classList.remove("selected");
//     mouse.classList.remove("selected");
//     speaker.classList.remove("selected");
// });

// mouse.addEventListener("click" , function(){
//     mouse.classList.add("selected");
//     computer.classList.remove("selected");
//     mouse.classList.remove("selected");
//     speaker.classList.remove("selected");
// });

// speaker.addEventListener("click" , function(){
//     speaker.classList.add("selected");
//     computer.classList.remove("selected");
//     mouse.classList.remove("selected");
//     speaker.classList.remove("selected");
// });


var categories=document.querySelectorAll('.category');
categories.forEach(cat=>{
    cat.addEventListener('click',function(){
        for(var i=0;i<categories.length;i++)
        {   
            categories[i].classList.remove("selected");
        }
        this.classList.add('selected');
    })
});