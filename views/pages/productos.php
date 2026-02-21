<!-- Page Header Start -->
<div class="container-fluid page-header py-5 wow animate__animated animate__fadeIn" data-wow-delay="0.1s">
    <div class="container text-center py-5 mt-4">
        <h1 class="display-2 text-white mb-3 animated slideInDown">Productos</h1>
    </div>
</div>
<!-- Page Header End -->
<div class="container-fluid py-2">
    <div class="container text-white">
        <div class="row g-0">
            <div class="col-md-12 wow fadeIn" data-wow-delay="0.1s">
                <label for="buscar">Buscar</label>
                <div class="input-group">
                    <input class="form-control" type="search" name="buscar" id="buscar" placeholder="Buscar">
                    <span class="input-group-text"><i class="bi bi-search"></i></span>
                </div>
            </div>
        </div>
        <div class="row g-0">
            <div class="col-md-12 wow fadeIn" data-wow-delay="0.1s">
                <div id="spinner2" class="d-none">
                    <div class="spinner-border text-primary" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                </div>
                <div id="productosDiv" class="py-5">


                </div>
                <div class="d-flex justify-content-center mt-4">
                    <button id="btnMore" class="btn btn-outline-light" type="button" style="display:none;">
                        Mostrar más
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<script src="./build/js/pages/productos.js"></script>