var categories=document.querySelectorAll('.category');
categories.forEach((cat)=>{
    cat.addEventListener('click',function(event){
        let nom_cat=event.target.id;
        location.replace("./products.php?cat="+nom_cat+"");
    })
});