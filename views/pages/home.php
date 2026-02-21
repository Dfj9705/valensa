<!-- Carousel Start -->
<div class="container-fluid header-carousel px-0 mb-5">
    <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item carousel-item-1 active">

                <div class="carousel-caption">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-lg-7 text-start">
                                <h1
                                    class="display-4 fst-italic text-white wow animate__animated animate__fadeIn mb-3 text-start">
                                    Maquinas perforadoras de pozos
                                </h1>
                                <p
                                    class="fs-4 mb-2 fst-italic text-white wow animate__animated animate__fadeIn text-start">
                                    Maquinas perforadoras de pozos de agua, minería y construcción.
                                </p>
                                <a href="<?= $_ENV['HOST'] ?>/productos/maquinaria"
                                    class="btn btn-primary wow animate__animated animate__fadeIn">Ver
                                    más</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#header-carousel" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#header-carousel" data-bs-slide-to="1" aria-current="false"
                aria-label="Slide 2"></button>
        </div>
    </div>
</div>
<!-- Carousel End -->

<!-- Features Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="row g-0 feature-row">
            <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.1s">
                <div class="feature-1 border h-100 p-5 text-white d-flex flex-column justify-content-between">
                    <h5 class="mb-3 fs-4">Maquinaría para perforaciones</h5>
                    <p class="mb-3">Maquinaría para perforaciones en pozos de agua, minería y construcción.</p>
                    <a href="<?= $_ENV['HOST'] ?>/productos"
                        class="btn btn-primary wow animate__animated animate__fadeIn">Ver
                        más</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                <div class="feature-2 border h-100 p-5 text-white d-flex flex-column justify-content-between">
                    <h5 class="mb-3 fs-4">Accesorios para perforaciones</h5>
                    <p class="mb-3 text-light">Accesorios para perforaciones en pozos de agua, minería y construcción.
                    </p>
                    <a href="<?= $_ENV['HOST'] ?>/productos"
                        class="btn btn-primary wow animate__animated animate__fadeIn">Ver
                        más</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                <div class="feature-3 border h-100 p-5 text-white d-flex flex-column justify-content-between">
                    <h5 class="mb-3 fs-4">Estudios</h5>
                    <p class="mb-3 text-light">Estudios para perforaciones en pozos de agua, minería y construcción.</p>
                    <a target="_blank"
                        href="https://wa.me/50231862624?text=Hola,%20quiero%20más%20información%20sobre%20estudios"
                        class="btn btn-primary wow animate__animated animate__fadeIn">Contactar</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Features End -->
<script src="<?= asset('./build/js/pages/home.js') ?>"></script>