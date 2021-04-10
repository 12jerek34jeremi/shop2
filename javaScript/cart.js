sendGETAJAX = (url) => {
    let request = new XMLHttpRequest();
    request.open("GET", url);
    request.send();
}

function product(id, name, price, how_many){
    this.id = id;
    this.name = name;
    this.price = price;
    this.how_many = how_many;
}

function createJSONArray(){
    let productsEl = document.getElementsByClassName("product");
    let products = [];
    for(let i =0; i<productsEl.length; i++){
        let id = productsEl[i].getElementsByClassName("id")[0].innerText;
        let name = productsEl[i].getElementsByClassName("name")[0].innerText;
        let price = productsEl[i].getElementsByClassName("price")[0].value;
        let howMany = productsEl[i].getElementsByClassName("how-many")[0].value;
        products.push(new product(id, name, price, howMany));
    }
    return JSON.stringify(products);
}


function howMany() {
    let id = this.parentElement.getElementsByClassName("id")[0].innerText;
    sendGETAJAX("AJAX/addRemoveProduct.php?id=" + id + "&how-many=" + this.value);
    count();
}
function sendAndRedirect(wojewodzwo, adres, procucts, totalPrice) {
    let form = document.createElement('form');
    document.body.appendChild(form);
    form.method = 'POST';
    form.action = "orderConfirmation.php";
    form.style.display = "none";
    sendAndRedirect.addInput(form, "wojewodzwo", wojewodzwo);
    sendAndRedirect.addInput(form, "adres", adres);
    sendAndRedirect.addInput(form, "products", procucts);
    sendAndRedirect.addInput(form, "total-price", totalPrice);
    document.body.appendChild(form);
    console.log(form);
    form.submit();
}
sendAndRedirect.addInput = (form, name, value) => {
    let input = document.createElement('input');
    input.type = 'hidden';
    input.name = name;
    input.value = value;
    form.appendChild(input);
}

function order() {
    let wojewodzwo = document.getElementById("wojewodzwo").value;
    let adress = document.getElementById("adress").value;
    if (adress == "") return;

    sendAndRedirect(wojewodzwo, adress, createJSONArray(), count.totalPrice.innerText);
}

function count() {
    let products = document.getElementsByClassName("product");
    let sum = 0.0;
    for (let i = 0; i < products.length; i++) {
        sum += products[i].getElementsByClassName("price")[0].value *
            products[i].getElementsByClassName("how-many")[0].value;
    }
    count.totalPrice.innerText = sum.toFixed(2);
}

function remove() {
    let id = this.parentElement.getElementsByClassName("id")[0].innerText;
    sendGETAJAX("AJAX/addRemoveProduct.php?remove=" + id);
    this.parentNode.remove();
    count();
    remove.productsNumberElement.innerText = --remove.pruductsNumber// = remove.pruductsNumber;
    if (remove.pruductsNumber == 0) {
        let element = document.getElementById("form");
        element.remove();
        element = document.createElement("h1");
        element.innerText = "Twój koszyk jest pusty. Aby coś zamowić, dodaj to najpierw do koszyka.";
        document.getElementById("webpage-content").appendChild(element);
    }
}

startCartJS = () => {
    let inputs = document.getElementsByClassName("how-many");
    for (let i = 0; i < inputs.length; i++) {
        inputs[i].addEventListener("input", howMany);
    }
    count.totalPrice = document.getElementById("total-price");

    let removes = document.getElementsByClassName("remove");
    for (let i = 0; i < removes.length; i++) {
        removes[i].addEventListener("click", remove);
    }
    remove.productsNumberElement = document.getElementById("products-number");
    remove.pruductsNumber = parseInt(remove.productsNumberElement.innerText);
    document.getElementById("order-button").addEventListener("click", order);
};


document.addEventListener("DOMContentLoaded", startCartJS);