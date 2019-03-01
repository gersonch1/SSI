<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $ID_OT
 * @property string $ID_PRODUCTO
 * @property date $FECHA_INICIO
 * @property date $FECHA_TERMINO
 * @property string $OBS
 */

class Producto_ot extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'producto_ot';
    public $timestamps = false;
    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'ID_PRODUCTO_OT';

    /**
     * @var array
     */
    protected $fillable = ['ID_PRODUCTO', 'ID_OT','CANTIDAD'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function producto()
    {
        return $this->hasMany('App\Producto', 'ID_PRODUCTO', 'ID_PRODUCTO');
    }

    public function ordentrabajo()
    {
        return $this->hasMany('App\Orden_trabajo', 'ID_OT', 'ID_OT');
    }

   
}