<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelGames;

class GameController extends Controller
{
    public $jogo;

    public function __construct()
    {
        $this->jogo = new ModelGames;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listar_jogo = $this->jogo->paginate(3);
        return view('index', compact('listar_jogo'));
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
        $cad_jogo = $this->jogo->create([
            'nome'=>$request->nome,
            'tipo'=>$request->tipo,
            'versao'=>$request->versao,
            'ano'=>$request->ano,
        ]);

        if($cad_jogo)
        {
            return redirect()->route('index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ver_jogo = $this->jogo->find($id);
        return view('show', compact('ver_jogo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit_game = $this->jogo->find($id);
        return view('editar', compact('edit_game'));
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
        $this->jogo->where(['id'=>$id])->update([
            'nome'=>$request->nome,
            'tipo'=>$request->tipo,
            'versao'=>$request->versao,
            'ano'=>$request->ano,
        ]);

        return redirect()->route('index');
    }

    public function delete($id)
    {
        $del_game = $this->jogo->find($id);
        return view('deletar', compact('del_game'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $excluir = $this->jogo->find($id);
        $excluir->delete();

        return redirect()->route('index');
    }
}
