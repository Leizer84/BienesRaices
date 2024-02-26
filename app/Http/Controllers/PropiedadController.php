<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Propiedad;
class PropiedadController extends Controller
{
    //
    public function index(){
        //Metodo que devuelve  todos los registros en la tabla mapeada
        $propiedades = Propiedad::all(); //Metodo que devuelve todos los registros en la tabla mapeada en el modelo Propiedad
        //return view('home', compact('propiedades'));
        return view('home', compact('propiedades'));
    }

    public function create(){
        return view('crear');
    }

    public function store(Request $request){
        $nvaPropiedad = new Propiedad();
        $nvaPropiedad->color = $request->input('color');
        $nvaPropiedad->metros = $request->input('metros');
        $nvaPropiedad->tipoPropiedad = $request->input('tipoPropiedad');
        $nvaPropiedad->costoxmtr= $request->input('costomtr');
        $nvaPropiedad->codigoDuenio = $request->input('codigoDuenio');
        $nvaPropiedad->domicilio = $request->input('domicilio');
        $nvaPropiedad->save();    
        
        $propiedades = Propiedad::all();
        return redirect('/');
    }

    public function editar($id){
        $propiedad = Propiedad::find($id);
        return view('editar', compact('propiedad'));
        echo $propiedad;
    }

    public function actualizar(Request $request, $id){
        $nvaPropiedad = Propiedad::find($id);
        $nvaPropiedad->color = $request->input('color');
        $nvaPropiedad->metros = $request->input('metros');
        $nvaPropiedad->tipoPropiedad = $request->input('tipoPropiedad');
        $nvaPropiedad->costoxmtr= $request->input('costomtr');
        $nvaPropiedad->codigoDuenio = $request->input('codigoDuenio');
        $nvaPropiedad->domicilio = $request->input('domicilio');
        $nvaPropiedad->save();  
        return redirect('/');  
    }

    public function eliminar($id){
        //$propiedad = Propiedad::where('color', $id);
        $propiedad = Propiedad::find($id);
        return view('eliminar', compact('propiedad'));
    }

    public function destroy($id){
        //$propiedad = Propiedad::where('color', $id);
        $propiedad = Propiedad::find($id);
        $propiedad ->delete();

        return redirect('/');
    }
}
