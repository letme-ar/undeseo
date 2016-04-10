<?php

namespace App\Http\Controllers;

use App\Interfaces\Combos\InterfaceComboRubro;
use App\Interfaces\Combos\InterfaceComboSubRubro;
use App\Interfaces\Controllers\InterfaceAviso;
use App\UnDeseo\Repositories\RepoAviso;
use App\UnDeseo\Repositories\RepoRubro;
use App\UnDeseo\Repositories\RepoSubRubro;
use Illuminate\Http\Request;

use App\Http\Requests;

class AvisoController extends Controller
{

    private $repoAviso;

    public function __construct(RepoAviso $repoAviso)
    {

        $this->repoAviso = $repoAviso;
        $this->ruta_index = route("avisos.index");
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listado = $this->repoAviso->all();
        return view("avisos.listado",compact("listado"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = $this->repoAviso->getModel();
        $model->lat = "-34.484641";
        $model->lng = "-58.726020";
        $data_formulario = ['route' => 'avisos.store', 'method' => 'POST', 'id' => 'form'];
        $ruta_index = $this->ruta_index;
        $action = "Agregar";
        $datos_rubros = (new InterfaceComboRubro(new RepoRubro()))->getList();
        $datos_sub_rubros = [];

        return view("avisos.form",compact("model","data_formulario","ruta_index","action","datos_rubros","datos_sub_rubros"));
    }

    public function validarDatos()
    {
        $data    = \Input::all();
//        dd($data);
        return (new InterfaceAviso(new RepoAviso()))->ValidarDatos($data);
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data    = $request->all();
        $manager = (new InterfaceAviso(new RepoAviso()))->darManager($data);
        $manager->save();
        return redirect()->route('avisos.index');
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
    public function edit($slug,$id)
    {
        $model = $this->repoAviso->find($id);
        $model['id_rubro'] = $model->SubRubro->id_rubro;
        $data_formulario = ['route' => 'avisos.update', 'method' => 'POST', 'id' => 'form'];
        $ruta_index = $this->ruta_index;
        $action = "Editar";
        $datos_rubros = (new InterfaceComboRubro(new RepoRubro()))->getList();
        $datos_sub_rubros = (new InterfaceComboSubRubro(new RepoSubRubro()))->getListById($model->id_rubro);

        return view("avisos.form",compact("model","data_formulario","ruta_index","action","datos_rubros","datos_sub_rubros"));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update()
    {
        $data    = \Input::all();
        $manager = (new InterfaceAviso(new RepoAviso()))->darManager($data);
        $manager->save();
        return redirect()->route('avisos.index');
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
