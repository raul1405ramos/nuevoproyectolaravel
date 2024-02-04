<?php

namespace App\Http\Controllers;

use App\Models\cliente;
use Illuminate\Http\Request;


class ClientController extends Controller
{  

    public function index()
    {
        $cliente = cliente::all();
        return view('cliente.index', compact('cliente'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'correo' => 'required',
            'teléfono' => 'required',
            'dirección' => 'required',
          ]);
          cliente::create($request->all());
          $clientes = cliente::all();
          return redirect()->route('cliente.show', compact('clientes'))
            ->with('success','Post created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $cliente = cliente::all();
        return view('cliente.show', compact('cliente'));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required',
            'correo' => 'required',
            'teléfono' => 'required',
            'dirección' => 'required',
          ]);
          $cliente = cliente::find($id);
          $cliente->update($request->all());
          return redirect()->route('cliente.show')
            ->with('success', 'Post updated successfully.');
        }
        /**
         * Remove the specified resource from storage.
         *
         * @param  int  $id
         * @return IlluminateHttpResponse
         */
         /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $cliente = cliente::find($id);
        $cliente->delete();
        return redirect()->route('cliente.show')
          ->with('success', 'Post deleted successfully');
      }
    
      public function create()
      {
        return view('cliente.create');
      }

    public function edit($id){
        $cliente = cliente::find($id);
        return view('cliente.edit', compact('cliente'));
    }

    }

    
     ?>
    

