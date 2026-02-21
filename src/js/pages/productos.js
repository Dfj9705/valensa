import { Toast } from "../funciones.js";
import GLightbox from 'glightbox';

window.GLightbox = GLightbox;
GLightbox({
    selector: '.glightbox-product',
    loop: true,
    touchNavigation: true,
});

const productosDiv = document.getElementById('productosDiv');
const buscar = document.getElementById('buscar');
const spinner2 = document.getElementById('spinner2');

const buscarProductos = async (e = null) => {
    if (e) e.preventDefault();

    const formData = new FormData();
    productosDiv.innerHTML = ``;
    try {
        spinner2.classList.remove('d-none');
        const url = `/API/productos/buscar`
        const headers = new Headers();
        headers.append('X-Requested-With', 'fetch');
        const config = {
            method: 'POST',
            headers,
            body: formData,
        }

        const respuesta = await fetch(url, config);
        const data = await respuesta.json();
        spinner2.classList.add('d-none');

        const { codigo, mensaje, detalle, datos } = data;
        console.log(datos)

        let icon = "info";
        switch (codigo) {
            case 1:
                icon = "success"
                console.log(data);
                const row = document.createElement('div');
                row.classList.add('row');
                if (datos.length > 0) {
                    datos.forEach(producto => {
                        row.appendChild(construirCardProducto(producto));
                    });
                } else {
                    row.innerHTML = `
                        <div class="col-12">
                            <div class="alert alert-primary" role="alert">
                                No se encontraron productos. Intenta con otros filtros.
                            </div>
                        </div>
                    `;
                }
                productosDiv.appendChild(row);
                break;
            case 2:
                icon = "warning"
                console.log(data);

                break;
            case 0:

                icon = "error"
                console.log(detalle);
                break;

        }

        Toast.fire({
            icon,
            title: mensaje,
        })
    } catch (error) {
        console.log(error);
    }
}

buscarProductos();

const construirCardProducto = (producto) => {
    const div = document.createElement('div');
    const card = document.createElement('div');
    const cardBody = document.createElement('div');
    const cardTitle = document.createElement('h5');
    const cardText = document.createElement('p');
    const carousel = document.createElement('div');
    const badgePrice = document.createElement('span');
    const badgeAvailable = document.createElement('span');
    const cardFooter = document.createElement('div');
    const cardHeader = document.createElement('div');
    const buttonWhatsapp = document.createElement('a')

    cardHeader.classList.add('card-header', 'd-flex', 'justify-content-between', 'align-items-center');
    cardFooter.classList.add('card-footer');
    cardFooter.classList.add('d-flex', 'justify-content-between', 'align-items-center');
    badgePrice.classList.add('badge', 'bg-success-subtle', 'border', 'border-success-subtle', 'text-success', 'float-start', 'fs-5');
    badgePrice.textContent = `Q. ${Number(producto.pro_precio_venta_max).toLocaleString('es-GT', { minimumFractionDigits: 2, maximumFractionDigits: 2 })}`;
    badgeAvailable.classList.add('badge', `${producto.disponible ? 'bg-success' : 'bg-danger'}`, 'float-end');
    badgeAvailable.textContent = `${producto.disponible ? 'Disponible' : 'Agotado'}`;

    carousel.classList.add('carousel', 'slide');
    carousel.id = `carousel-${producto.pro_id}`;
    carousel.setAttribute('data-bs-ride', 'carousel');
    div.classList.add('col-md-4', 'col-lg-4', 'col-12', 'mb-4', 'mb-lg-4', 'mb-xl-4');
    card.classList.add('card');
    card.style.height = '100%';
    cardBody.classList.add('card-body');
    cardTitle.classList.add('card-title');
    cardText.classList.add('card-text');
    cardTitle.textContent = `${producto.pro_nombre}`;
    cardText.textContent = producto.pro_descripcion;
    buttonWhatsapp.classList.add('btn', 'btn-outline-success', 'float-end');
    buttonWhatsapp.innerHTML = '<i class="fa fa-whatsapp me-2"></i> Consultar';
    buttonWhatsapp.href = `https://wa.me/502${process.env.TELEFONO}?text=Hola,%20quiero%20más%20información%20sobre%20el%20producto%20${producto.pro_nombre}`;
    buttonWhatsapp.target = '_blank';
    buttonWhatsapp.style.marginBottom = '0';
    carousel.appendChild(construirCarousel(producto, producto.pro_imagenes));
    cardBody.appendChild(carousel);
    cardBody.appendChild(cardTitle);
    cardBody.appendChild(cardText);
    cardFooter.appendChild(badgePrice);
    cardHeader.appendChild(badgeAvailable);
    cardFooter.appendChild(buttonWhatsapp);
    card.appendChild(cardHeader);
    card.appendChild(cardBody);
    card.appendChild(cardFooter);
    div.appendChild(card);
    return div;
}

const construirCarousel = (producto, images) => {
    const imagesArray = JSON.parse(images);
    const carousel = document.createElement('div');
    const indicators = document.createElement('div');
    indicators.classList.add('carousel-indicators');
    carousel.classList.add('carousel', 'slide');
    carousel.id = `carousel - ${producto.pro_id} `;
    carousel.setAttribute('data-bs-ride', 'carousel');
    const carouselInner = document.createElement('div');
    carouselInner.classList.add('carousel-inner');
    if (imagesArray.length > 0) {
        imagesArray.forEach((image, index) => {
            const carouselItem = document.createElement('div');
            const a = document.createElement('a');
            a.onclick = "return false;";
            a.href = `${process.env.IMAGES_URL}${image}`;
            a.classList.add('glightbox-product', 'd-block');
            a.setAttribute('data-gallery', `product-${producto.pro_id}`);
            a.setAttribute('data-title', producto.pro_nombre);
            const img = document.createElement('img');
            img.src = `${process.env.IMAGES_URL}${image}`;
            img.classList.add('d-block', 'w-100');
            img.alt = producto.pro_nombre;
            img.style = 'cursor: zoom-in;';
            a.appendChild(img);
            carouselItem.appendChild(a);
            carouselItem.classList.add('carousel-item');
            if (index === 0) {
                carouselItem.classList.add('active');
            }
            carouselInner.appendChild(carouselItem);
            const indicator = document.createElement('button');
            indicator.type = 'button';
            indicator.setAttribute('data-bs-target', `#carousel-${producto.pro_id}`);
            indicator.setAttribute('data-bs-slide-to', index);
            indicator.setAttribute('aria-current', index === 0 ? 'true' : '');
            indicator.setAttribute('aria-label', `Slide${index + 1}`);
            if (index === 0) {
                indicator.classList.add('active');
            }
            indicators.appendChild(indicator);
        });
    } else {
        const carouselItem = document.createElement('div');
        carouselItem.classList.add('carousel-item', 'active');
        const carouselImage = document.createElement('img');
        carouselImage.src = `${process.env.HOST}/images/no-image.png`;
        carouselImage.classList.add('d-block', 'w-100');
        carouselItem.appendChild(carouselImage);
        carouselInner.appendChild(carouselItem);
    }
    carousel.appendChild(carouselInner);
    carousel.appendChild(indicators);
    return carousel;
}