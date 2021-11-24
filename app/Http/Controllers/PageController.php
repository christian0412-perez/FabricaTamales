<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class PageController extends Controller
{
    public function index()
    {
        //$users = DB::table('users')->get();
        $users = User::all();

        $title = 'Lista de usuarios';

//        return view('users.index')
//            ->with('users', User::all())
//            ->with('title', 'Listado de usuarios');

        return view('users.index', compact('title', 'users'));
    }

    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store()
    {
        $data = request()->validate([
            'name' => 'required',
            'celular' => ['required'],
            'bola' => 'required',
            'cambray' => 'required',
            'chipilin' => 'required',
            'elote' => 'required',
            'hierbasanta' => 'required',
            'mole' => 'required',
            'total'
        ], [
            'name.required' => 'El campo nombre es obligatorio',
            'celular.required'=> 'El campo celular es obligatorio',
            'bola.required' => 'El campo tamal de bola es obligatorio',
            'cambray.required' => 'El campo tamal de cambray es obligatorio',
            'chipilin.required' => 'El campo chipilin es obligatorio',
            'elote.required' => 'El campo elote es obligatorio',
            'hierbasanta.required' => 'El campo hierbasanta es obligatorio',
            'mole.required' => 'El campo mole es obligatorio'
        ]);

        User::create([
            'name' => $data['name'],
            'celular' => $data['celular'],
            'bola' => $data['bola'],
            'cambray' => $data['cambray'],
            'chipilin' => $data['chipilin'],
            'elote' => $data['elote'],
            'hierbasanta' => $data['hierbasanta'],
            'mole' => $data['mole'],
            'total' => $data['total']=  ($data['bola']+$data['cambray']+$data['chipilin']+$data['elote']+$data['hierbasanta']+$data['mole'])*15
        ]);
        
        return redirect()->route('users.index')->with('message',('su total a pagar es $'.$data['total'] .' pesos'));
    }

    public function edit(User $user)
    {
        return view('users.edit', ['user' => $user]);
    }
    public function allusers()
    {
                $users = User::all();

                $title = 'Lista de usuarios';
        
                return view('users.allusers', compact('title', 'users'));
    }

    public function update(User $user)
    {
        $data = request()->validate([
            'name' => 'required',
            'celular' => ['required']
        ]);
        $user->update($data);

        return redirect()->route('users.show', ['user' => $user]);
    }

    function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('users.allusers');
    }
}