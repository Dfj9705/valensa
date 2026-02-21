<?php

namespace Model;

use Exception;

class Producto extends ActiveRecord
{
    protected static $tabla = 'productos';
    protected static $columnasDB = ['pro_nombre', 'pro_descripcion', 'pro_sku', 'pro_precio_venta_min', 'pro_precio_venta_max', 'pro_precio_costo', 'pro_imagenes', 'pro_activo', 'created_at', 'updated_at'];

    protected static $idTabla = 'pro_id';
    public $pro_id;
    public $pro_nombre;
    public $pro_descripcion;
    public $pro_sku;
    public $pro_precio_venta_min;
    public $pro_precio_venta_max;
    public $pro_precio_costo;
    public $pro_imagenes;
    public $pro_activo;
    public $created_at;
    public $updated_at;

    public function __construct($args = [])
    {
        parent::__construct();
        $this->pro_id = $args['pro_id'] ?? null;
        $this->pro_nombre = $args['pro_nombre'] ?? null;
        $this->pro_descripcion = $args['pro_descripcion'] ?? null;
        $this->pro_sku = $args['pro_sku'] ?? null;
        $this->pro_precio_venta_min = $args['pro_precio_venta_min'] ?? null;
        $this->pro_precio_venta_max = $args['pro_precio_venta_max'] ?? null;
        $this->pro_precio_costo = $args['pro_precio_costo'] ?? null;
        $this->pro_imagenes = $args['pro_imagenes'] ?? null;
        $this->pro_activo = $args['pro_activo'] ?? null;
        $this->created_at = $args['created_at'] ?? date('Y-m-d H:i:s');
        $this->updated_at = $args['updated_at'] ?? date('Y-m-d H:i:s');
    }

    public function getProductos()
    {
        try {
            $anuncios = $this->fetchArray("SELECT * FROM " . self::$tabla . " WHERE pro_activo = 1 ORDER BY pro_nombre ASC");
            return $anuncios;
        } catch (Exception $e) {
            error_log($e->getMessage());
            return [];
        }
    }

    public function getByFilters($filters)
    {
        try {
            $where = "";
            if (!empty($filters['marcas'])) {
                $where .= " AND weapons.brand_id IN (" . implode(',', $filters['marcas']) . ")";
            }
            if (!empty($filters['modelos'])) {
                $where .= " AND weapons.brand_model_id IN (" . implode(',', $filters['modelos']) . ")";
            }
            if (!empty($filters['calibres'])) {
                $where .= " AND weapons.caliber_id IN (" . implode(',', $filters['calibres']) . ")";
            }
            if (!empty($filters['tipos_arma'])) {
                $where .= " AND weapons.weapon_type_id IN (" . implode(',', $filters['tipos_arma']) . ")";
            }

            $query = "SELECT weapons.id, weapons.description, weapons.price, weapons.images, weapons.status, brands.name as brand, brand_models.name as model, calibers.name as caliber, weapon_types.name as weapon_type , weapons.color_text as color_text, weapons.color as color, weapons.barrel_length_mm as barrel_length_mm, weapons.magazine_capacity as magazine_capacity,
            (select count(*) from weapon_units where weapon_units.weapon_id = weapons.id and weapon_units.status = 'IN_STOCK') as stock
            FROM weapons inner join brands on weapons.brand_id = brands.id inner join brand_models on weapons.brand_model_id = brand_models.id inner join calibers on weapons.caliber_id = calibers.id inner join weapon_types on weapons.weapon_type_id = weapon_types.id WHERE weapons.status = 'ACTIVE' " . $where;

            $weapons = $this->fetchArray($query);

            return $weapons;
        } catch (Exception $e) {
            error_log($e->getMessage());
            throw new Exception($e->getMessage());
        }
    }

    public function getProductoById($id)
    {
        try {
            $query = "SELECT * FROM productos WHERE pro_id = $id";

            $producto = $this->fetchFirst($query);
            return $producto;
        } catch (Exception $e) {
            error_log($e->getMessage());
            throw new Exception($e->getMessage());
        }
    }

    public function getStockByProductoId($id)
    {
        try {
            $query = "SELECT 
            (select sum(mop_cantidad) from movimientos_productos where movimientos_productos.pro_id = productos.pro_id and movimientos_productos.mop_tipo = 'entrada')
            + 
            (select sum(mop_cantidad) from movimientos_productos where movimientos_productos.pro_id = productos.pro_id and movimientos_productos.mop_tipo = 'devolucion')
            - 
            (select sum(mop_cantidad) from movimientos_productos where movimientos_productos.pro_id = productos.pro_id and movimientos_productos.mop_tipo = 'salida') 
            - 
            (select sum(mop_cantidad) from movimientos_productos where movimientos_productos.pro_id = productos.pro_id and movimientos_productos.mop_tipo = 'venta') as stock
            FROM productos WHERE pro_id = $id";

            $producto = $this->fetchFirst($query);
            return $producto;
        } catch (Exception $e) {
            error_log($e->getMessage());
            throw new Exception($e->getMessage());
        }
    }
}

