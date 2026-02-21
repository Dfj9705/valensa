<?php

namespace Controllers;

use Exception;
use Model\Producto;
use Model\Weapon;


class ProductoController
{
    public static function buscar()
    {
        getHeadersApi();
        $productoObject = new Producto();
        try {
            $productos = $productoObject->getProductos();

            foreach ($productos as $key => $producto) {
                $productos[$key]['disponible'] = $productoObject->getStockByProductoId($producto['pro_id'])['stock'] > 0 ? true : false;
            }
            http_response_code(200);
            echo json_encode([
                'codigo' => 1,
                'mensaje' => 'Productos encontrados',
                'datos' => $productos,
                'request' => $_POST
            ]);
        } catch (Exception $e) {
            http_response_code(500);
            echo json_encode([
                'codigo' => 0,
                'mensaje' => 'Error al buscar armas',
                'datos' => [],
                'request' => $_POST
            ]);
        }
    }
}