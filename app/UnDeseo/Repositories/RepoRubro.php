<?php
/**
 * Created by PhpStorm.
 * User: damian
 * Date: 03/10/15
 * Time: 21:01
 */
namespace App\UnDeseo\Repositories;
use App\UnDeseo\Entities\Rubro;

class RepoRubro extends RepoBase {

    function getModel()
    {
        // TODO: Implement getModel() method.
        return new Rubro();

    }

    public function getList()
    {
        $lista = $this->getModel()->lists('descripcion_rubro', 'id_rubro')->toArray();
        return $lista;
    }
}