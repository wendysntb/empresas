<?php

namespace App\Http\Controllers;

use App\Models\CadEmpregado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Session;



class CadEmpregadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $list = CadEmpregado::whereempresa_id($id)->orderby('id')->paginate(10);
        return view('empregados.empregados', compact('list', 'id'));
    }

    public function search(request $request, $id)
    {

        $busca = $request['busca'];

        $list = CadEmpregado::whereempresa_id($id)->Where('nome', 'like', '%'.$busca.'%')->paginate(10);

        return view('empregados.empregados',compact('list', 'busca', 'id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $cad =$id;
        return view('/empregados.create', compact('cad'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id = $request['empresa_id'];
        $cad = $request->all();

        CadEmpregado::create($cad);

        return redirect('empregados/'.$id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CadEmpregado  $cadEmpregado
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, CadEmpregado $cadEmpregado)
    {
        $cad = CadEmpregado::find($request['id']);
 
        return view('/empregados.show', compact('cad'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CadEmpregado  $cadEmpregado
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cad = CadEmpregado::find($id);
        return view('/empregados.edit', compact('cad'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CadEmpregado  $cadEmpregado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CadEmpregado $cadEmpregado)
    {
        $id = $request['id'];
        $cadEmpregado = CadEmpregado::find($id);

        $cadEmpregado->update([
            'nome' => $request['nome'],
            'sobrenome' => $request['sobrenome'],
            'prontuario' => $request['prontuario'],
            'empresa' => $request['empresa_id'],
            'email' => $request['email'],
            'telefone' => $request['telefone'],
                ]);

            return redirect('empregados/show/'.$id);
    }

}
