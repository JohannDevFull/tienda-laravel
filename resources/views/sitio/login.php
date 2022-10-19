<!DOCTYPE html>
<html lang="en">
    
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Tienda deportiva JSK</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="assets/agency/css/styles.css" rel="stylesheet" />
        <link href="assets/agency/css/mystyle.css" rel="stylesheet" />

    </head>

    <body id="page-top">
        
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top nav-tienda" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top">
                    <!-- <img src="assets/img/navbar-logo.svg" alt="..." /> -->
                    Tienda deportiva JSK
                </a>
                
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link" href="/inicio">Inicio</a></li>
                        <li class="nav-item"><a class="nav-link" href="/ofertas">Ofertas</a></li>
                        <li class="nav-item"><a class="nav-link" href="/tienda">Tienda</a></li>
                        <li class="nav-item">
                            <a type="button" href="/login" class="btn btn-outline-success">Login</a>
                        </li>
                        <!-- <li class="nav-item">
                            <button type="button" class="btn btn-outline-info">Registro</button>
                        </li> -->
                    </ul>
                </div>
            </div>
        </nav>
        
 


        <section class="page-section row " id="services">
            <main class="form-signin w-50 m-auto pt-5">
                <div>
                    <img class="mb-4 " src="/assets/agency/img/tenis.jpg" alt="" width="400" height="300">
                    <h1 class="h3 mb-3 fw-normal">Por favor, registrese</h1>
                
                    <div class="form-floating w-50">
                        <input type="email" class="form-control" id="email" placeholder="name@example.com">
                        <label for="email">Email </label>
                    </div>
                    <div class="form-floating w-50">
                        <input type="password" class="form-control" id="pass" placeholder="Password">
                        <label for="floatingPassword">Clave</label>
                    </div>
                
                    <div class="checkbox mb-3">
                        <label>
                        <input type="checkbox" value="remember-me"> Acuérdate de mí
                        </label>
                    </div>
                    <button class="w-50 btn btn-lg btn-primary" type="submit" onclick="login()">Iniciar sesión</button>
                    <p class="mt-5 mb-3 text-muted">&copy; 2017–2022</p>
                </div>
            </main>
        </section>
        
        
        
        <!-- Footer-->
        <div class="footer">

            <footer class="text-white text-center text-lg-start bg-dark">
              <!-- Grid container -->
              <div class="container p-4">
                <!--Grid row-->
                <div class="row mt-4">
                  <!--Grid column-->
                  <div class="col-lg-4 col-md-12 mb-4 mb-md-0">
                    <h5 class="text-uppercase mb-4">Acerca de la compañía</h5>
          
                    <p><h7>
                      Somos una tienda deportiva autenticada desde el 20 de agosto del 2000 y trabajamos
                      con los mejores productos de colombia y del mundo.
                    </h7></p>
          
                    <div class="mt-4">
                      <!-- Facebook -->
                      <a type="button" class="btn btn-floating btn-light btn-lg"><i class="fab fa-facebook-f"></i></a>
                      <!-- Dribbble -->
                      <a type="button" class="btn btn-floating btn-light btn-lg"><i class="fab fa-dribbble"></i></a>
                      <!-- Twitter -->
                      <a type="button" class="btn btn-floating btn-light btn-lg"><i class="fab fa-twitter"></i></a>
                      <!-- Google + -->
                      <a type="button" class="btn btn-floating btn-light btn-lg"><i class="fab fa-google-plus-g"></i></a>
                      <!-- Linkedin -->
                    </div>
                  </div>
                  <!--Grid column-->
          
                  <!--Grid column-->
                  <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase mb-4 pb-1">buscar algo</h5>
          
                    <div class="form-outline form-white mb-4">
                      <input type="text" id="formControlLg" class="form-control form-control-lg" />
                      <label class="form-label" for="formControlLg">
                        Búsqueda</label>
                    </div>
          
                    <ul class="fa-ul" style="margin-left: 1.65em;">
                      <li class="mb-3">
                        <span class="fa-li"><i class="fas fa-home"></i></span><span class="ms-2">Centro comercial metropolis local 123</span>
                      </li>
                      <li class="mb-3">
                        <span class="fa-li"><i class="fas fa-envelope"></i></span><span class="ms-2">TiendaDeportivajks@gmail.com</span>
                      </li>
                      <li class="mb-3">
                        <span class="fa-li"><i class="fas fa-phone"></i></span><span class="ms-2">+ 48 234 567 88</span>
                      </li>
                    </ul>
                  </div>
                  <!--Grid column-->
          
                  <!--Grid column-->
                  <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase mb-4">Horario de apertura</h5>
          
                    <table class="table text-center text-white">
                      <tbody class="fw-normal">
                        <tr>
                          <td>lunes - viernes:</td>
                          <td>8am - 10pm</td>
                        </tr>
                        <tr>
                          <td>sabados - domingos:</td>
                          <td>8am - 5am</td>
                        </tr>
                        <tr>
                          <td>Festivos:</td>
                          <td>9am - 3pm</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <!--Grid column-->
                </div>
                <!--Grid row-->
              </div>
              <!-- Grid container -->
          
              <!-- Copyright -->
              <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                © 2020 Copyright: Tienda deportiva JKS
              </div>
              <!-- Copyright -->
            </footer>
        
        </div>

       
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="/assets/agency/js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
        
    </body>
</html>
