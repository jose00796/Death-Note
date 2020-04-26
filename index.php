<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Death Note</title>
</head>
<body>
<h1 class = "container text-center bg-dark text-white py-4">Death Note</h1>

<div class ="container">

    <form action="proceso.php" method="POST">
    
    <div class="form-group mt-5 ml-5 mr-5">
        <input class="form-control type="text" name="name" required pattern="[A-Za-z]{1,35}" placeholder="Nombre...">
    </div>  
    
    <div class="form-group ml-5 mr-5">
        <input class="form-control" type="text" name = "lastname" required pattern="[A-Za-z]{1,35}" placeholder="Apellido...">
    </div>  

    <div class = "form-group ml-5 mr-5">
        <textarea class = "form-control" name="description" placeholder="Descripcion"></textarea>
    </div>

    <div class="forn-group text-center">
        <button class="btn btn-primary pr-5 pl-5">Enviar</button>
    </div>
        
    </form>
</div>
</body>
</html>