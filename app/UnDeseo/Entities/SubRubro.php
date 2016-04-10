<?php
/**
 * Created by PhpStorm.
 * User: damian
 * Date: 03/10/15
 * Time: 21:06
 */

namespace App\UnDeseo\Entities;

class SubRubro extends \Eloquent
{
    protected $table = 'sub_rubros';
    protected $fillable = array('id_sub_rubro', 'descripcion_sub_rubro','updated_at','deleted_at');
    protected $primaryKey = 'id_sub_rubro';

    public function Rubro(){
        return $this->hasOne('App\UnDeseo\Entities\Rubro','id_rubro','id_rubro');
    }
}