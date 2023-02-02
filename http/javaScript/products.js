sendGETAJAX = (url, callback) => {
    let request = new XMLHttpRequest();
    request.open("GET", url);
    request.send();
}


function addRemoveProduct(){
    let id = this.id.slice(1);
    console.log(id);
    if(this.innerText == "Dodaj do koszyka."){
        this.innerText = "Usun z koszyka.";
        addRemoveProduct.count += 1;
        sendGETAJAX("AJAX/addRemoveProduct.php?add="+id);
    }else{
        addRemoveProduct.count -= 1;
        this.innerText = "Dodaj do koszyka.";
        sendGETAJAX("AJAX/addRemoveProduct.php?remove="+id);
    }
    addRemoveProduct.basket.innerText = addRemoveProduct.count;
}

function startProductsJS (){
    addRemoveProduct.basket = document.getElementById("products-number");
    addRemoveProduct.count =  parseInt(document.getElementById("products-number").innerText);
    let baskets = document.getElementsByClassName("basket");
    for(let i = 0; i<baskets.length; i++){
        baskets[i].addEventListener("click", addRemoveProduct);
    }
}

document.addEventListener("DOMContentLoaded", startProductsJS);