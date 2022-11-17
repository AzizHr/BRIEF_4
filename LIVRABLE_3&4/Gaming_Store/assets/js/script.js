
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