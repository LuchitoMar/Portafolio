<?php

namespace App\Http\Controllers; use Illuminate\Http\Request;
use App\Calzado;

class CalzadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    $calzados=Calzado::orderBy('id','DESC')->paginate(3); return view('Calzado.index',compact('calzados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Calzado.create');
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
    $this->validate($request,[ 'calzado'=>'required', 'tipo'=>'required',
    'color'=>'required', 'talla'=>'required', 'marca'=>'required', 'genero'=>'required', 'edades'=>'required']);
    Calzado::create($request->all());
    return redirect()->route('calzado.index')->with('success','Registro creado satisfactoriamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $calzados=Calzado::find($id);
        return view('calzado.show',compact('calzados'));
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
        $calzado=calzado::find($id);
        return view('calzado.edit',compact('calzado'));
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
    $this->validate($request,[ 'calzado'=>'required', 'tipo'=>'required', 'color'=>'required', 'talla'=>'required', 'marca'=>'required', 'genero'=>'required', 'edades'=>'required']);
    calzado::find($id)->update($request->all());
    return redirect()->route('calzado.index')->with('success','Registro actualizado satisfactoriamente');

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
        Calzado::find($id)->delete();
        return redirect()->route('calzado.index')->with('success','Registro eliminado satisfactoriamente');
    }
        /**
    *	Ejemplo de método REST
    *
    *	@return \Illuminate\Http\Response
    */

    public function getCalzados(){
    $calzados=Calzado::all();
    return response()->json($calzados);
    }
}
