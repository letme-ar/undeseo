<?php
/**
 * Created by PhpStorm.
 * User: damian
 * Date: 10/09/15
 * Time: 11:49
 */
namespace App\UnDeseo\Entities;

class Aviso extends \Eloquent
{
    protected $table = 'avisos';
    protected $fillable = array('id_aviso', 'titulo','direccion','nro','localidad','id_sub_rubro','descripcion','telefono','email','web','facebook','twitter','lat','lng','created_at','updated_at','deleted_at');
    protected $primaryKey = 'id_aviso';
    public $errors;

    public function SubRubro(){

        return $this->hasOne('App\UnDeseo\Entities\SubRubro','id_sub_rubro','id_sub_rubro');
    }
}