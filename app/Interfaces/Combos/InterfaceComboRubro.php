<?php namespace App\Interfaces\Combos;
use App\UnDeseo\Repositories\RepoRubro;

/**
 * Created by PhpStorm.
 * User: damian
 * Date: 26/12/15
 * Time: 15:18
 */
class InterfaceComboRubro implements InterfaceCombo
{
    private $repoRubro;

    public function __construct(RepoRubro $repoRubro)
    {
        $this->repoRubro = $repoRubro;
    }

    public function getList()
    {
        return $this->repoRubro->getList();
    }

    public function getCombo()
    {
        $datos_combo = $this->getList();
        return \Field::select('id_rubro','Rubro',$datos_combo,null,['id' => 'id_rubro']);

    }

    public function getComboById($id)
    {

    }


}