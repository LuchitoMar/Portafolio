<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Venta;

class VentaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $ventas=Venta::orderBy('id','DESC')->paginate(3); return view('Venta.index',compact('ventas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Venta.create');
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
        $this->validate($request,[ 'fecha_compra'=>'required', 'tipo_pago'=>'required','monto_pago'=>'required']);
        Venta::create($request->all());
        return redirect()->route('venta.index')->with('success','Registro creado satisfactoriamente');
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
        $ventas=Venta::find($id);
        return view('venta.show',compact('ventas'));
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
        $venta=Venta::find($id);
        return view('venta.edit',compact('venta'));
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
        $this->validate($request,[ 'fecha_compra'=>'required', 'tipo_pago'=>'required','monto_pago'=>'required']);

        venta::find($id)->update($request->all());
        return redirect()->route('venta.index')->with('success','Registro actualizado satisfactoriamente'); 
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
        Venta::find($id)->delete();
        return redirect()->route('venta.index')->with('success','Registro eliminado satisfactoriamente');
    }
    /**
    *	Ejemplo de método REST
    *
    *	@return \Illuminate\Http\Response
    */

    public function getVentas(){
    $ventas=Venta::all();
    return response()->json($ventas);
    }
}
