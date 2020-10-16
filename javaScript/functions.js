function show_categories(categories){

    var elements = document.getElementsByClassName('box_products');
    console.log(elements);
    for(var i=0; i<elements.length; i++){
        console.log(elements[i].id);
        if(categories == elements[i].id)
            elements[i].style = "display:inline-block";
        else
            elements[i].style = "display:none";
    }
}



    let show_allCategories = () => {
        let elements = document.getElementsByClassName('box_products');

    for(var i=0; i<elements.length; i++){
            elements[i].style = "display:inline-block";
    }

    };

    let when_zoom = (image) => {
        console.log(image)
        if(image.width == 364)
            image.width = 182;
        else
          image.width = 364;
    }


    let go_to_products = () => {

        window.location.href = "../products.html";
        let cat = show_categories(categories)
        return cat('heavMetal')
    }

// elements[i].style = "display:none"; }
// else
//     {elements[i].else = "display:inline-block";}
