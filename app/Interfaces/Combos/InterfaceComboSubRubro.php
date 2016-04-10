<?php namespace App\Interfaces\Combos;
use App\UnDeseo\Repositories\RepoSubRubro;

/**
 * Created by PhpStorm.
 * User: damian
 * Date: 26/12/15
 * Time: 15:18
 */
class InterfaceComboSubRubro implements InterfaceCombo
{
    private $repoSubRubro;

    public function __construct(RepoSubRubro $repoSubRubro)
    {
        $this->repoSubRubro = $repoSubRubro;
    }

    public function getList()
    {
        return $this->repoSubRubro->getList();
    }

    public function getListById($id)
    {
        return $this->repoSubRubro->getListById($id);
    }

    public function getCombo()
    {
        $datos_combo = $this->getList();
        return $this->combo($datos_combo);

    }

    public function getComboById($id)
    {
        $datos_combo = $this->repoSubRubro->getListById($id);
        return $this->combo($datos_combo);
    }

    function combo($datos_combo)
    {
        return \Field::select('id_sub_rubro','Sub Rubro',$datos_combo,null,['id' => 'id_sub_rubro']);

    }


}