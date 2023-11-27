<?php
// Array de productos (podría ir en otro archivo PHP)
$productos = [
    ["id" => 1, "nombre" => "Arroz 5kg", "imagen" => "images/arroz.jpeg", "descripcion" => "Fundas de 5KG", "precio" => 4.5],
    ["id" => 2, "nombre" => "Lenteja 5kg", "imagen" => "images/lenteja.jpeg", "descripcion" => "Fundas de 5KG", "precio" => 5.2],
    ["id" => 3, "nombre" => "Frejol 5kg", "imagen" => "images/frejol.jpeg", "descripcion" => "Fundas de 5KG", "precio" => 6.3],
    ["id" => 4, "nombre" => "Azucar 5kg", "imagen" => "images/azucar.jpeg", "descripcion" => "Fundas de 5KG", "precio" => 4.8],

];
?>

<!DOCTYPE html>
<html>

  <head>
    <title>Mi Tienda</title>

    <!-- Estilos y JS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="estilos.css" rel="stylesheet">
  </head>

  <body>

    <!-- Navbar -->
    <nav class="navbar navbar bg-light">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="logo.svg" height="40">   
        </a>
      </div>
    </nav>

    <!-- Contenido Principal -->
    <main class="container">
      <div class="row">

        <!-- Listado de Productos -->
        <div class="col-md-8">
        
          <div class="row">
            <?php foreach($productos as $producto): ?>

              <div class="col-md-4">
                <div class="card mb-4">
                  <img class="card-img-top" src="<?= $producto['imagen'] ?>">
                  <div class="card-body">
                    <h5 class="card-title"><?= $producto['nombre'] ?></h5>  
                    <button class="btn btn-primary btn-sm" onclick="agregarAlCarrito(<?= json_encode($producto) ?>)">
                      Agregar
                    </button>
                  </div>
                </div>
              </div>

            <?php endforeach; ?>
          </div>
        
        </div>

        <!-- Carrito -->
        <div class="col-md-4">
          <div id="carrito" class="card">
            <div class="card-body">
              <!-- Aquí se renderiza el carrito con JS -->
            </div>
          </div>
        </div>

      </div>
    </main>

    <!-- Footer -->
    <footer class="bg-light py-4 mt-4">
      <div class="container">
        <p class="text-center text-muted">&copy; 2023 Mi Tienda</p>  
      </div>
    </footer>

    <!-- Archivos JS -->
    <script src="carrito.js"></script>

  </body>
  
</html>