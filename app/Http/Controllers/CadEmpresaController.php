<?php

namespace App\Http\Controllers;

use App\Models\CadEmpresa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Session;

class CadEmpresaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        $list = CadEmpresa::orderby('id')->paginate(10);
        return view('index', compact('list'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cad = $request->all();

        if($request->hasFile('logotipo')){
            $file = $request->file('logotipo');
            if($file->getMimeType() === 'image/jpeg' || $file->getMimeType() === 'image/jpg') {   
                
                $logo =$file->getClientOriginalName();
                $path = $request->file('logotipo')->storeAs('public/images', $logo);

                $cad['logotipo'] = $logo;
            }
            else {
                return 'Só é permitido imagens JPEG e JPG';
            }
        }

        CadEmpresa::create($cad);
        return redirect('/');

    }

    /**
     * Display the specified resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function search(request $request)
    {
        $busca = $request['busca'];

        $list = CadEmpresa::where('nome', 'like', '%'.$busca.'%')->paginate(10);

        return view('index',compact('list', 'busca'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CadEmpresa  $cadEmpresa
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cad = CadEmpresa::find($id);
        return view('edit', compact('cad'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CadEmpresa  $cadEmpresa
     * @return \Illuminate\Http\Response
     */

    public function show(Request $request, CadEmpresa $cadEmpresa)
    {
        $cad = CadEmpresa::find($request['id']);
 
        return view('show', compact('cad'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CadEmpresa  $cadEmpresa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CadEmpresa $cadEmpresa)
    {
        $id = $request['id'];
        $cadEmpresa = CadEmpresa::find($id);
        if($request->hasFile('logotipo')){
            $file = $request->file('logotipo');
            if($file->getMimeType() === 'image/jpeg' || $file->getMimeType() === 'image/jpg') {        
                $path = $request->file('logotipo')->store('public/images');
            }
            else {
                return 'Só é permitido imagens JPEG e JPG';
            }
        }

        $cadEmpresa->update([
            'nome' => $request['nome'],
            'endereco' => $request['endereco'],
            'logotipo' => $request['logotipo'],
            'website' => $request['website'],
                ]);

            return redirect('/show/'.$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CadEmpresa  $cadEmpresa
     * @return \Illuminate\Http\Response
     */
   
}
