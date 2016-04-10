<?php namespace App\Interfaces\Controllers;
use App\UnDeseo\Manager\ManagerAviso;
use App\UnDeseo\Repositories\RepoAviso;

/**
 * Created by PhpStorm.
 * User: damian
 * Date: 26/12/15
 * Time: 15:00
 */
class InterfaceAviso implements InterfaceBase{

    private $repoAviso;

    public function __construct(RepoAviso $repoAviso)
    {

        $this->repoAviso = $repoAviso;
    }

    public function ValidarDatos($data)
    {
        $manager = $this->darManager($data);
        return $manager->isValid();
    }

    public function darManager($data)
    {
        if($data['id_aviso'] !== "")
            $model   = $this->repoAviso->find($data['id_aviso']);
        else
            $model   = $this->repoAviso->getModel();

        $manager = new ManagerAviso($model,$data);
        return $manager;

    }


}