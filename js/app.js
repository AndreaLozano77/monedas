
const mainCards = document.querySelector('.main-cards');


try {

    // fetch('../productos/elementos.json')
   fetch('http://localhost/ws_misproductos/',
    { method: 'GET',
      headers:  new Headers({ 'Content-type': 'application/json'}),
      mode: 'cors'
   })
    .then(respuesta => {
        return respuesta.json()
    })
    .then(datos => {
        let contador = 0;
        while (datos.length > contador) {
            
            //creamos los elementos

            let card = document.createElement('div');

            let imgCoin = document.createElement('div');
            let img = document.createElement('img');

            let infoCard = document.createElement('div');

            let titulo = document.createElement('h4');
            let precio = document.createElement('p');

            let buttonCard = document.createElement('a');

            //agregamos los atributos a los elementos creados

            card.setAttribute('class', 'card');

            imgCoin.setAttribute('class', 'img-coin');
            img.setAttribute('class', 'card-img');
            img.setAttribute('src', datos[contador].img);
            img.setAttribute('alt', 'Imagen de representacion');

            infoCard.setAttribute('class', 'info-card');

            titulo.setAttribute('class', 'titulo');
            precio.setAttribute('class', 'precio');

            titulo.innerHTML = datos[contador].nombre;
            precio.innerHTML = datos[contador].precio + "$";

            buttonCard.setAttribute('class', 'button-card');
            buttonCard.setAttribute('href', './form-pedido.html');
            buttonCard.innerHTML = "Ordenar";

            card.appendChild(imgCoin);
            imgCoin.appendChild(img);
            card.appendChild(infoCard);
            infoCard.appendChild(titulo);
            infoCard.appendChild(precio);
            infoCard.appendChild(buttonCard);

            mainCards.appendChild(card);

            contador++;
        }
    })
    
} catch (error) {
    console.log(e);
}