<?php
/**
 * Created by PhpStorm.
 * User: damian
 * Date: 10/09/15
 * Time: 12:43
 */
namespace App\UnDeseo\Repositories;
use App\UnDeseo\Entities\Aviso;

class RepoAviso extends RepoBase {

    function getModel()
    {
        // TODO: Implement getModel() method.
        return new Aviso();
    }

    public function darAvisos()
    {
        return $this->getModel()
                        ->select("avisos.id_aviso","avisos.titulo","avisos.descripcion","avisos.direccion","avisos.nro","avisos.localidad","rubros.descripcion_rubro","sub_rubros.descripcion_sub_rubro","avisos.telefono","avisos.email")
                        ->join("sub_rubros","avisos.id_sub_rubro", '=',"sub_rubros.id_sub_rubro")
                        ->join("rubros","sub_rubros.id_rubro", '=',"rubros.id_rubro")
                        ->get();
    }

    public function getList()
    {
        $lista = $this->getModel()->lists('nombre', 'id');
        $combo = array('' => 'Seleccione') + $lista;
        return $combo;
    }
}