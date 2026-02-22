<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset="utf-8">
        <meta name="theme-color" content="#334FA0">
        <title><?= $_ENV['APP_NAME'] ?></title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta name="description" content="Sitio web de Servicios Valensa">
        <meta name="keywords"
            content="maquinaria, pozos, construccion, servicios, maquinaria pesada, pozos profundos, construccion de pozos, servicios de construccion, maquinaria para pozos, maquinaria para construccion">
        <meta name="robots" content="index, follow">
        <link rel="canonical" href="<?= $_ENV['HOST'] ?>">

        <meta property="og:title" content="Servicios Valensa">
        <meta property="og:description" content="Sitio web de Servicios Valensa">
        <meta property="og:image" content="<?= $_ENV['HOST'] ?>/images/logo.jpeg">
        <meta property="og:url" content="<?= $_ENV['HOST'] ?>">
        <meta property="og:type" content="website">
        <meta property="og:image:width" content="300">
        <meta property="og:image:height" content="300">

        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="Servicios Valensa">
        <meta name="twitter:description" content="Sitio web de Servicios Valensa">
        <meta name="twitter:image" content="<?= $_ENV['HOST'] ?>/images/logo.jpeg">
        <meta name="twitter:url" content="<?= $_ENV['HOST'] ?>">

        <meta http-equiv="Content-Language" content="es">

        <meta content="" name="description">

        <meta name="author" content="Abner Daniel Fuentes Juárez">


        <!-- Favicon -->
        <link href="<?= $_ENV['HOST'] ?>/images/logo.png" rel="icon">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Red+Rose:wght@600;700&display=swap"
            rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">

        <link rel="stylesheet" href="<?= $_ENV['HOST'] ?>/build/css/styles.css">
    </head>

    <body>
        <!-- Spinner Start -->
        <div id="spinner"
            class="show position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex flex-column align-items-center justify-content-center bg-light text-dark-50">
            <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
            <p>Servicios Valensa</p>
        </div>
        <!-- Spinner End -->



        <!-- Brand Start -->
        <div class="container-fluid pt-4 pb-5 d-none d-lg-flex bg-light text-dark-50">
            <div class="container pb-2">
                <div class="d-flex align-items-center justify-content-between">
                    <a href="/" class="h1 text-decoration-none fst-italic mb-0  text-dark"><img src="/images/logo.png"
                            alt="" width="60px"><span class="align-middle">Servicios Valensa</span></a>
                    <small></small>


                    <div class="d-flex">
                        <p class="me-3"><span class="align-middle"><i class="bi bi-whatsapp me-2"></i><a
                                    href="https://wa.me/50253682021?text=Hola,%20quiero%20más%20información"
                                    class="text-decoration-none text-dark">+502
                                    53682021</a></span></p>
                        <p><span class="align-middle"><i class="bi bi-envelope me-2"></i><a
                                    href="mailto:<?= $_ENV['EMAIL_TO_ADDRESS'] ?>"
                                    class="text-decoration-none text-dark"><?= $_ENV['EMAIL_TO_ADDRESS'] ?></a></span>

                    </div>

                </div>
            </div>
        </div>
        <!-- Brand End -->


        <!-- Navbar Start -->
        <div class="container-fluid sticky-top bg-light">
            <div class="container">
                <nav class="navbar navbar-expand-lg bg-light py-lg-0 px-0 px-lg-3">
                    <a href="/" class="h2 text-decoration-none d-lg-none fst-italic mb-0  text-white"><img
                            src="/images/logo.png" alt="" width="60px"><span class="align-middle">Servicios
                            Valensa</span></a>
                    <button type="button" class="navbar-toggler me-0 text-white" data-bs-toggle="collapse"
                        data-bs-target="#navbarCollapse">
                        <span class="navbar-toggler-icon text-white"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <div class="navbar-nav text-white">
                            <a href="/" class="nav-item nav-link">Inicio</a>
                            <a href="/mision-vision" class="nav-item nav-link">Misión y Visión</a>
                            <a href="/quienes-somos" class="nav-item nav-link">Quienes somos</a>
                            <a href="/productos" class="nav-item nav-link">Productos</a>
                            <a href="/contacto" class="nav-item nav-link">Contáctenos</a>
                        </div>
                        <div class="ms-auto d-none d-lg-flex">
                            <a class="btn btn-sm-square btn-primary ms-2" target="_blank" aria-label="Enlace a Facebook"
                                href="https://www.facebook.com/share/1CNySxztE8/?mibextid=wwXIfr"><i
                                    class="bi bi-facebook"></i><span class="d-none">Enlace a Facebook</span></a>
                            <a class="btn btn-sm-square btn-primary ms-2"
                                href="https://www.instagram.com/servicios_valensa?igsh=MXJ2amkwcTBlNWdoOA=="
                                target="__blank"><i class="bi bi-instagram"></i></a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Navbar End -->

        <?= $contenido ?>

        <!-- Footer Start -->
        <div class="container-fluid position-relative py-2 wow animate__animated animate__fadeIn bg-light footer"
            data-wow-delay="0.1s">
            <div class="container">
                <div class="row g-5 py-5">
                    <div class="col-lg-12 pe-lg-5">
                        <a href="/" class="text-white text-decoration-none">
                            <h1 class="h1 mb-0 fst-italic">Servicios Valensa</h1>
                        </a>
                        <p class="fs-6 mb-4 fst-italic text-white">Productos y servicios de calidad</p>

                        <p><a class="text-decoration-none text-white" href="tel:+50231862624"><i
                                    class="fa fa-phone-alt me-2"></i>+502 31862624</p></a>
                        <p><a class="text-decoration-none text-white"
                                href="https://wa.me/50253682021?text=Hola,%20quiero%20más%20información"><i
                                    class="fa fa-whatsapp me-2"></i>+502 53682021</p></a>
                        <p><a class="text-decoration-none text-white" href="mailto:<?= $_ENV['EMAIL_TO_ADDRESS'] ?>"><i
                                    class="fa fa-envelope me-2"></i><?= $_ENV['EMAIL_TO_ADDRESS'] ?></p></a>
                        <p class="text-white"><i class="fa fa-map-marker-alt me-2"></i>0 CALLE PARQUE ALDEA AMBERES,
                            SANTA
                            ROSA DE
                            LIMA, SANTA ROSA</p>
                        <div class="d-flex mt-4">
                            <a class="btn btn-lg-square btn-primary me-2"
                                href="https://www.facebook.com/share/1CNySxztE8/?mibextid=wwXIfr" target="__blank"><i
                                    class="bi bi-facebook"></i></a>

                            <a class="btn btn-lg-square btn-primary me-2"
                                href="https://www.instagram.com/servicios_valensa?igsh=MXJ2amkwcTBlNWdoOA=="
                                target="__blank"><i class="bi bi-instagram"></i></a>

                            <!-- <a class="btn btn-lg-square btn-primary me-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-lg-square btn-primary me-2" href="#"><i class="fab fa-instagram"></i></a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Copyright Start -->
        <div class="container-fluid copyright bg-dark text-white-50 py-4">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6 text-center text-md-start">
                        <p class="mb-0 text-center">&copy; <a href="https://procodegt.com"
                                class="text-white text-decoration-none" target="_blank">Procodegt</a>
                            <?= date('Y') ?></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Copyright End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top d-flex align-items-center"
            aria-label="Subir en la página"><i class="fas fa-arrow-up"></i><span class="d-none">Subir</span></a>


        <!-- JavaScript Libraries -->
        <script defer src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        <script defer src="https://kit.fontawesome.com/0ac58cc75c.js"></script>
        <!-- Template Javascript -->
        <script src="<?= $_ENV['HOST'] ?>/build/js/app.js"></script>
        <script src="<?= $_ENV['HOST'] ?>/build/js/main.js"></script>
    </body>

</html>