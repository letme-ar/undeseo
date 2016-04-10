<?php
/**
 * Created by PhpStorm.
 * User: Damian
 * Date: 14/03/15
 * Time: 19:48
 */
namespace App\UnDeseo\Manager;

class ManagerAviso extends ManagerBase{

    public function getRules()
    {
        return  [
            'titulo' => 'required',
            'descripcion' => 'required',
            'id_rubro' => 'required',
            'id_sub_rubro' => 'required',
            'web' => 'url',
            'email' => 'unique:avisos,email,'.$this->getEntity()->id_aviso.",id_aviso"
                ];
    }

    public function getMessages()
    {
        return [];
    }

}