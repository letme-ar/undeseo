<?php

namespace App\Http\Controllers;

use App\Interfaces\Combos\InterfaceComboSubRubro;
use App\UnDeseo\Repositories\RepoRubro;
use App\UnDeseo\Repositories\RepoSubRubro;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class RubroController extends Controller
{
    /**
     * @var \App\UnDeseo\Repositories\RepoRubro
     */
    private $repoRubro;
    /**
     * @var \App\UnDeseo\Repositories\RepoSubRubro
     */
    private $repoSubRubro;

    public function __construct(RepoRubro $repoRubro,RepoSubRubro $repoSubRubro)
    {
        $this->repoRubro = $repoRubro;
        $this->repoSubRubro = $repoSubRubro;
    }

    public function darDatosRubros()
    {
        return $this->repoRubro->getList();
    }

    public function darDatosSubRubros()
    {
        return $this->repoSubRubro->getList();
    }

    public function darComboSubRubrosPorRubro()
    {
        $id_rubro = \Input::get('id_rubro');
//        dd($id_rubro);
        return (new InterfaceComboSubRubro(new RepoSubRubro()))->getComboById($id_rubro);

//        return \Field::select('id_sub_rubro','Sub Rubro',$combo,null,['id' => 'id_sub_rubro']);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
