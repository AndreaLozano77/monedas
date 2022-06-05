


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&family=Inter:wght@300;500&family=Poppins:ital,wght@0,200;0,300;1,200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <!-- <link rel="stylesheet" href="./css/tablet.css" media="(min-width: 930px)">
    <link rel="stylesheet" href="./css/phone.css" media="(max-width: 560px)"> -->
    <link rel="stylesheet" href="../css/form-pedido.css">
    <title>Monedas</title>
</head>
<body>
    <header class="header">
        <h1 class="titulo">VENTA DE MONEDAS</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis velit adipisci placeat minima consectetur
            dolores.</p>
    </header>
    <div class="container">
        <h1>FORMULARIO DE PEDIDO</h1>
        <hr>
        <form action="">
            <div style="width: 100%; margin:auto; margin-bottom: 20px;">
                <p><b>NOMBRE:</b><br>
                <?php
                $nombre = $_GET['nombre'];
                echo "$nombre"
                ?>
                </p><br>

                <p><b>DESCRIPCIÓN:</b><br>
                <?php
                $descripcion = $_GET['descripcion'];
                echo "$descripcion"
                ?>
                </p><br>

                <p><b>PRECIO: </b><br>
                <?php
                $precio = $_GET['precio'];
                echo "$" . "$precio"
                ?>
                </p><br>

                <p><b>CANTIDAD: </b><br>
                <?php
                $cantidad = $_GET['cantidad'];
                echo "$cantidad"
                ?>
                </p>

            </div>
            <p>Solo necesita ingresar su dirección de correo electrónico a continuación si es un cliente recurrente.
            Este formulario es solo para una moneda. Vuelva a pulsar el botón 'PEDIR' en la siguiente moneda que desee comprar. 
            Este formulario se mostrará de nuevo. 
            Solo necesita ingresar su dirección de correo electrónico para artículos segundos y posteriores</p>
            <br>
            <hr>
            <label for="">Cantidad:</label>
            <input type="number" name="quantity" id="quantity">
            <label for="">Nombre:</label>
            <input type="text" name="name" id="name">
            <label for="">Email:</label>
            <input type="email" name="email" id="mail">
            <label for="">Dirección:</label>
            <input type="text" name="address" id="address">
            <label for="">Ciudad:</label>
            <input type="text" name="City" id="city">
            <label for="">Zona Postal:</label>
            <input type="text" name="zip" id="zip">
            <label for="">País:</label>
            <input type="text" name="country" id="country">
            <button type="submit" class="btn-submit">Enviar</button>
        </form>
        <br>
        <hr>
        <br><br>
        <p><span>Gracias. Le enviaremos un correo electrónico en breve para confirmar su pedido.</span></p>
    </div>
</body>
</html>