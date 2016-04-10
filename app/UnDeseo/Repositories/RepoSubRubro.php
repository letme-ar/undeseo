<?php
/**
 * Created by PhpStorm.
 * User: damian
 * Date: 03/10/15
 * Time: 21:07
 */
namespace App\UnDeseo\Repositories;
use App\UnDeseo\Entities\SubRubro;

class RepoSubRubro extends RepoBase {

    function getModel()
    {
        // TODO: Implement getModel() method.
        return new SubRubro();

    }


    public function getListById($id_rubro)
    {
        if($id_rubro)
        {
            $sql = $this->getModel();
            if($id_rubro) $sql = $sql->where("id_rubro",$id_rubro);
            $lista = $sql->lists('descripcion_sub_rubro', 'id_sub_rubro')->toArray();
        }
        else
        {
            $lista = [];
        }


        return $lista;
    }

    public function getList()
    {
        $sql = $this->getModel();
        $lista = $sql->lists('descripcion_sub_rubro', 'id_sub_rubro')->toArray();
        return $lista;
    }


}
