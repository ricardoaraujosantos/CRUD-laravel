<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormCreateRequest;

use App\Http\Requests\FormEditRequest;

use App\Models\User;
use App\Services\UploadFile;

class UsuarioController extends Controller
{
    //Create
    public function store(FormCreateRequest $request): \Illuminate\Http\RedirectResponse
    {
        $params = $request->only(['name', 'cpf', 'email', 'password']);

        User::create($params);
        return redirect('/list')->with('msg', "Usuario {$params['name']} cadastrado com sucesso!");
    }

    //Read
    public function index()
    {

        $search = request('search');

        if($search){
            $users = User::where([
                ['cpf', 'like', '%' .$search. '%'] 
            ])->get();

        } else {
            $users = User::all();
        }

        return view('/home', ['users' => $users, 'search' => $search]);
    }

    //Edit/Id
    public function edit($id)
    {
        $user = User::findOrFail($id);

        return view('events.edit', ['user' => $user]); 
    }

    //Update
    public function update(FormEditRequest $request): \Illuminate\Http\RedirectResponse
    {
        $params = $request->only(['name', 'email', 'image']);

        //Image upload
        if($request->hasFile('image')){
          $uploaded = new UploadFile($request->file('image'), 'img/events');
          $fileName = $uploaded->upload();
          $params['image'] = $fileName;

        }
        
        
        User::findOrFail($request->id)->update($params);
        return redirect('/list')->with('msg', "Usuario $request->name atualizado com sucesso!");
    }

    //Delete
    public function destroy($id): \Illuminate\Http\RedirectResponse
    {
        $user = User::findOrFail($id)->delete();

        return redirect('/list')->with('msg', $user ? "Usuario excluido com sucesso!" : "Erro, falha na exclusão!");
    }

    //Register user
    public function registerUser(FormCreateRequest $request): \Illuminate\Http\RedirectResponse
    {
        $params = $request->only(['name', 'cpf', 'email', 'password']);

        User::create($params);
        return redirect('/login')->with('msg', "Cadastro efetuado com sucesso!");
    }

}
