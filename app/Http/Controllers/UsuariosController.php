<?php

namespace App\Http\Controllers;

use App\Usuarios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UsuariosController extends Controller
{

    function __construct()
    {
        $this->middleware([
            'auth'
            
        ]);
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        //$datos['usuarios']=Usuarios::paginate(5);//variable usuarios utilizada para el foreach
        $datos['usuarios']= Usuarios::name($request->get('name'))->paginate(5);
        return view('usuarios.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('usuarios.create');
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
        $campos=[

            'primer_nombre' => 'required|string|max:100',
            'segundo_nombre' =>  'required|string|max:100',
            'primer_apellido' =>  'required|string|max:100',
            'segundo_apellido' => 'required|string|max:100',
            'foto' =>  'required',
            'tipo_documento' =>  'required|string|max:100',
            'fecha_nacimiento' => 'required|string|max:100',
            'numero_documento' =>  'required|string|max:100',
            'edad' =>  'required|string|max:100',
            'sisben' => 'required|string|max:100',
            'puntaje_sisben' =>  'required|string|max:100',
            'sexo' =>  'required|string|max:100',
            'afiliacion_eps' => 'required|string|max:100',
            'estado_eps' =>  'required|string|max:100',
            'nombre_eps' =>  'required|string|max:100',
            'condicion_poblacion' => 'required|string|max:100',
            'nivel_educativo' =>  'required|string|max:100',
            'organizacion_asociacion' =>  'required|string|max:100',
            'subsidio' => 'required|string|max:100',
            'tipo_subsidio' =>  'required|string|max:100',
            'cual_subsidio' =>  'required|string|max:100',
            'tiempo_libre' =>  'required|string|max:100',
            'departamento' =>  'required|string|max:100',
            'municipio' =>  'required|string|max:100',
            'zona_residencia' =>  'required|string|max:100',
            'direccion' =>  'required|string|max:100',
            'telefono' =>  'required|string|max:100',
            'telefono_movil' =>  'required|string|max:100',
            'correo' =>  'required|string|max:100',
            'nombre_contacto' =>  'required|string|max:100',
            'telefono_parentesco' =>  'required|string|max:100',

            'parentesco' =>  'required|string|max:100',
            'actividad_principal' =>  'required|string|max:100',
            'expectativas' =>  'required|string|max:100',
            'condicion_medica' =>  'required|string|max:100',
            'fecha_ingreso' =>  'required|string|max:100',
            'observaciones' =>  'required|string|max:100',
            'nombre_funcionario' =>  'required|string|max:100'
      

        ];

        $Mensaje=["required"=>':attribute es requerido(a)'];

        $this->validate($request, $campos, $Mensaje);

        ///////////////////////////////////////////////////////

        //$datosUsuarios=request()->all();

        $datosUsuarios=request()->except('_token');

       // Usuarios::insert($datosUsuarios);

        if($request->hasFile('foto')){

            $datosUsuarios['foto']=$request->file('foto')->store('uploads', 'public');//almaneca la foto en base de datos

        }

        Usuarios::insert($datosUsuarios);//insertar los datos en la base de datos
        //return response()->json($datosUsuarios);
        return redirect('usuarios')->with('Mensaje','Usuario agregado con éxito');
        

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function show(Usuarios $usuarios)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function edit($id)

    {
        //
        $usuario= Usuarios::findOrFail($id);

        return view('usuarios.edit',compact('usuario'));



    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $campos=[

            'primer_nombre' => 'required|string|max:100',
            'segundo_nombre' =>  'required|string|max:100',
            'primer_apellido' =>  'required|string|max:100',
            'segundo_apellido' => 'required|string|max:100',
            'foto' =>  'required|string|max:100',
            'tipo_documento' =>  'required|string|max:100',
            'fecha_nacimiento' => 'required|string|max:100',
            'numero_documento' =>  'required|string|max:100',
            'edad' =>  'required|string|max:100',
            'sisben' => 'required|string|max:100',
            'puntaje_sisben' =>  'required|string|max:100',
            'sexo' =>  'required|string|max:100',
            'afiliacion_eps' => 'required|string|max:100',
            'estado_eps' =>  'required|string|max:100',
            'nombre_eps' =>  'required|string|max:100',
            'condicion_poblacion' => 'required|string|max:100',
            'nivel_educativo' =>  'required|string|max:100',
            'organizacion_asociacion' =>  'required|string|max:100',
            'subsidio' => 'required|string|max:100',
            'tipo_subsidio' =>  'required|string|max:100',
            'cual_subsidio' =>  'required|string|max:100',
            'tiempo_libre' =>  'required|string|max:100',
            'departamento' =>  'required|string|max:100',
            'municipio' =>  'required|string|max:100',
            'zona_residencia' =>  'required|string|max:100',
            'direccion' =>  'required|string|max:100',
            'telefono' =>  'required|string|max:100',
            'telefono_movil' =>  'required|string|max:100',
            'correo' =>  'required|string|max:100',
            'nombre_contacto' =>  'required|string|max:100',
            'telefono_parentesco' =>  'required|string|max:100',

            'parentesco' =>  'required|string|max:100',
            'actividad_principal' =>  'required|string|max:100',
            'expectativas' =>  'required|string|max:100',
            'condicion_medica' =>  'required|string|max:100',
            'fecha_ingreso' =>  'required|string|max:100',
            'observaciones' =>  'required|string|max:100',
            'nombre_funcionario' =>  'required|string|max:100'
      

        ];

        $Mensaje=["required"=>':attribute es requerido(a)'];

        $this->validate($request, $campos, $Mensaje);
        /////////////////////////////////////////////////////////////////
        $datosUsuarios=request()->except(['_token','_method']);
        
        if($request->hasFile('foto')){

            $usuario= Usuarios::findOrFail($id);

            Storage::delete('public/'.$usuario->foto);
            $datosUsuarios['foto']=$request->file('foto')->store('uploads', 'public');//almaneca la foto en base de datos

        }
        
        
        Usuarios::where('id','=',$id)->update($datosUsuarios);



        //$usuario= Usuarios::findOrFail($id);
        //return view('usuarios.edit',compact('usuario'));

        return redirect('usuarios')->with('Mensaje','Usuario modificado con éxito');



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $usuario= Usuarios::findOrFail($id);

       if(Storage::delete('public/'.$usuario->foto)){
        Usuarios::destroy($id);


       }

       return redirect('usuarios')->with('Mensaje','Usuario eliminado');



    }
}
