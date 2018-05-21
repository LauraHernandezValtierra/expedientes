<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Expediente;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class ExpedienteController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$expediente=DB::table('expo_mov')
            ->join('expediente', 'expo_mov.cid_expedi', '=', 'expediente.cid_expediente')
            ->join('tdestpack', 'expo_mov.cid_destin', '=', 'tdestpack.cid_destpack')
            ->join('tclientes', 'expediente.cid_cliente', '=', 'tclientes.cid_cliente')
            ->select('expo_mov.cid_cotiza as cid_cotizacion', 'expediente.cid_expediente', 'expediente.dfecha as dfecha', 'expediente.chora','expo_mov.cid_destin', 'tdestpack.cdestpack as paquete', 'tclientes.capellidop as capellidop', 'tclientes.cid_cliente as cid_cliente','tclientes.cnombre as cnombre','tclientes.capellidom as capellidom', 
'expediente.inicempleado', 'expediente.numempleado', 'expediente.pax', 'expediente.dfechasalida','expediente.nomempleado')
            ->get();
		return view('lista_expedientes',array('expediente' => $expediente));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($exp, $act)
	{
		
		$expediente=DB::table('expo_mov')
            ->join('expediente', 'expo_mov.cid_expedi', '=', 'expediente.cid_expediente')
            ->join('tdestpack', 'expo_mov.cid_destin', '=', 'tdestpack.cid_destpack')
            ->join('tclientes', 'expediente.cid_cliente', '=', 'tclientes.cid_cliente')
            ->join('tfuncionario', 'tclientes.cid_cliente', '=', 'tfuncionario.cid_cliente')
             ->join('tareas', 'expo_mov.nid_area', '=', 'tareas.nid_area')
            ->select('expo_mov.cid_cotiza as cid_cotizacion', 'expediente.cid_expediente as cid_expediente', 'expediente.dfecha as dfecha', 'expediente.chora','expo_mov.cid_destin as cid_destin', 'tdestpack.cdestpack as paquete', 'tclientes.capellidop as capellidop', 'tclientes.cid_cliente as cid_cliente','tclientes.cnombre as cnombre','tclientes.capellidom as capellidom', 
			 	'expediente.inicempleado', 'expediente.numempleado', 'expediente.pax', 'expediente.dfechasalida as dfechasalida','expediente.nomempleado', 'expediente.totpaq', 'expediente.moneda', 'expediente.minapagar as minapagar','expo_mov.observa as observa','expo_mov.nid_area as nid_area','tclientes.cestado as cestado', 'tclientes.cmunicipio as cmunicipio', 'tclientes.clada as clada', 'tclientes.ctelefono as ctelefono', 'tclientes.cext as cext', 'tfuncionario.cid_funcionario', 'tfuncionario.cnombre as fnombre', 'tfuncionario.capellidop as fapellidop', 'tclientes.ctipocliente', 'tclientes.cmail as cmail', 'tclientes.ctipocliente as ctipocliente',  'tareas.carea as area')
            ->where('expediente.cid_expediente', $exp)
            ->first();
            switch ($act) {
            	case 1:
            		return view('resumen', array('expediente' => $expediente));
            		break;
            	case 2:
            		return view('pasajeros', array('expediente' => $expediente));
            		break;
            	
            	default:
            		# code...
            		break;
            }
            
    }
		

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
