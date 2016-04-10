<?php
/**
 * Created by PhpStorm.
 * User: damian
 * Date: 30/09/15
 * Time: 19:29
 */
namespace App\UnDeseo\Entities;

class Rubro extends \Eloquent
{
    protected $table = 'rubros';
    protected $fillable = array('id_rubro', 'descripcion_rubro','updated_at','deleted_at');
    protected $primaryKey = 'id_rubro';
}