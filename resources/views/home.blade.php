<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Petshop</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>

    <div class="whatsapp-btn" onclick="abrirWhatsApp()">
        <span><img src="img/wasapp.png"></span>
    </div>

    <header>
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="/"><img src="img/logoDogFace.png" id="logo"></a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Nosotros</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Productos
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Perros</a></li>

                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Gatos</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Contactos</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Busca tu producto aquí" aria-label="Search">
                        <button class="btn btn-warning" type="submit">Buscar</button>
                    </form>
                </div>
            </div>
        </nav>
    </header>

    <div class="banner">
        <img src="img/mascotas.jpg" class="card-img-top" alt="..." id="banner">
    </div>

    <div class="Marcas text-center">
        <a href=""><img src="img/vitalcan.jpg" class="card-img-top" alt="..."></a>
        <a href=""> <img src="img/catchow.png" class="card-img-top" alt="..."></a>
        <a href=""> <img src="img/dogchow.png" class="card-img-top" alt="..."></a>
        <a href=""><img src="img/dogui.png" class="card-img-top" alt="..."></a>
        <a href=""><img src="img/eukanuba3.jpg" class="card-img-top" alt="..."></a>
        <a href=""><img src="img/gati.webp" class="card-img-top" alt="..."></a>
        <a href=""><img src="img/oldpince.png" class="card-img-top" alt="..."></a>
        <a href=""><img src="img/pedigree.png" class="card-img-top" alt="..."></a>
    </div>



    <section id="products">



        <!-- Aquí se mostrarán los productos -->



        <div class="row row-cols-1 row-cols-md-3 g-4 mt-4">
            <div class="col">
                <div class="card h-80">
                    <img src="img/dogchowfoot2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Dow Chow Adultos</h5>
                        <p class="card-text">Todos los tamaños exta life.</p>
                    </div>
                    <div class="card-footer bg-warning">
                        <small class="text-body">Last updated 3 mins ago</small>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-80">
                    <img src="img/catchowfoot.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Cat Chow Adultos</h5>
                        <p class="card-text">Defensa Hidro</p>
                    </div>
                    <div class="card-footer bg-warning">
                        <small class="text-body-secondary">Last updated 3 mins ago</small>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-80">
                    <img src="img/gatifoot.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Gati Completo y Balanceado</h5>
                        <p class="card-text">Sabores en carne, pescado y maiz.</p>
                    </div>
                    <div class="card-footer bg-warning">
                        <small class="text-body-secondary">Last updated 3 mins ago</small>
                    </div>
                </div>
            </div>
        </div>


        <div class="row row-cols-2 row-cols-md-3 g-4 mt-4">
            <div class="col">
                <div class="card h-80">
                    <img src="img/PEDIGREE.webp" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Pedigree Adulto</h5>
                        <p class="card-text">Sabor Carne Pollo y Cereales.</p>
                    </div>
                    <div class="card-footer bg-warning">
                        <small class="text-body-secondary">Last updated 3 mins ago</small>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-80">
                    <img src="img/oldfoot.webp" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Old Prince Equilibrium</h5>
                        <p class="card-text">Cachorros.</p>
                    </div>
                    <div class="card-footer bg-warning">
                        <small class="text-body-secondary">Last updated 3 mins ago</small>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-80">
                    <img src="img/doguifoot.webp" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Dogui Adultos</h5>
                        <p class="card-text">15 beneficios para la salud.</p>
                    </div>
                    <div class="card-footer bg-warning">
                        <small class="text-body-secondary">Last updated 3 mins ago</small>
                    </div>
                </div>
            </div>
        </div>


    </section>



    <!-- Footer -->
    
    <footer class="text-center text-black" style="background-color: #AEDEFC;">

        <!-- Grid container -->
        <div class="container">
            <!-- Section: Links -->
            <section class="mt-5">
                <!-- Grid row-->
                <div class="row text-center d-flex justify-content-center pt-5">
                    <!-- Grid column -->
                    <div class="col-md-2">
                        <h6 class="text-uppercase font-weight-bold">
                            <a href="#!" class="text-black">Nosotros</a>
                        </h6>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-2">
                        <h6 class="text-uppercase font-weight-bold">
                            <a href="#!" class="text-black">Productos</a>
                        </h6>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-2">
                        <h6 class="text-uppercase font-weight-bold">
                            <a href="#!" class="text-black">Mas Vendidos</a>
                        </h6>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-2">
                        <h6 class="text-uppercase font-weight-bold">
                            <a href="#!" class="text-black">Ayuda</a>
                        </h6>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-2">
                        <h6 class="text-uppercase font-weight-bold">
                            <a href="#!" class="text-black">Contactos</a>
                        </h6>
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row-->
            </section>
            <!-- Section: Links -->

            <hr class="my-5" />

            <!-- Section: Text -->

            <section class="mb-5">

                <div class="row d-flex justify-content-center">
                    <div class="col-lg-8">
                        <div class="parrafoFooter">
                            <p>

                                ¡Bienvenidos a nuestra tienda <strong>DOG FACE DISTRIBUIDORA</strong> especializada en alimentos para mascotas, donde el amor por los animales es nuestra máxima inspiración! En nuestro rincón dedicado a la salud y felicidad de tus fieles compañeros, nos enorgullece ofrecerte una amplia gama de productos de alta calidad, pensados para satisfacer las necesidades nutricionales específicas de cada tipo de mascota.
                            </p>

                            
                        </div>
                        
                    </div>
                </div>
            </section>
            <!-- Section: Text -->

            <!-- Section: Social -->
            <section class="text-center mb-5">

                <div class="social-icons">
                    <a href="https://www.facebook.com/tu_pagina" target="_blank"><i class="fab fa-facebook"></i></a>
                    <a href="https://twitter.com/tu_cuenta" target="_blank"><i class="fab fa-twitter"></i></a>
                    <a href="https://www.instagram.com/tu_perfil" target="_blank"><i class="fab fa-instagram"></i></a>
                    <a href="https://www.instagram.com/tu_perfil" target="_blank"><i class="fab fa-linkedin"></i></a>
                    <!-- Agrega más enlaces y botones según sea necesario -->
                </div>

            </section>
            <!-- Section: Social -->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">

            <a class="text-black" href="https://mdbootstrap.com/">
                <p>&copy; 2024 Dog Face Distribuidora | Todos los derechos reservados</p>
            </a>

        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->
    </div>
    <!-- End of .container -->


    <script src="app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script>
        function abrirWhatsApp() {
            var telefono = "+5491161931305"; // Reemplaza con tu número de WhatsApp
            var mensaje = "Hola, estoy contactándote desde tu sitio web."; // Mensaje predeterminado
            var link = "https://wa.me/" + telefono + "?text=" + encodeURIComponent(mensaje);
            window.open(link, '_blank');
        }
    </script>

</body>

</html>