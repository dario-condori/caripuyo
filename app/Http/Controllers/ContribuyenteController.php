<?php

namespace App\Http\Controllers;

use App\Models\Contribuyente;
use App\Models\LugarExpedido;
use App\Models\TipoDocumento;
use App\Models\TipoPersona;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContribuyenteController extends Controller
{
    public function listado()
    {
        $contribuyentes = Contribuyente::all();
        return view('admin.contribuyente-listado', compact('contribuyentes'));
    }

    public function nuevo()
    {
        $tipoPersona = TipoPersona::all();
        $tipoDocumento = TipoDocumento::all();
        $lugarExpedido = LugarExpedido::all();
        return view('admin.contribuyente-nuevo', compact('tipoPersona','tipoDocumento','lugarExpedido'));
    }

    public function guardar(Request $request)
    {
        $request->validate([
            'nombres' => 'required|string',
            'apellidos' => 'required|string',
            'genero' => 'required|string|min:1|max:1',
            'tipo_persona_id' => 'required|integer',
            'tipo_documento_id' => 'required|integer',
            'numero_documento' => 'required|string|min:5',
            'lugar_expedido_id' => 'required|integer',
            'urbanizacion' => 'required|string',
            'zona' => 'required|string',
            'comunidad' => 'string',
            'manzano' => 'required|string',
            'avenida_calle' => 'required|string',
        ]);
        
        $contribuyente = new Contribuyente();
        $contribuyente->nombres = $request->nombres;
        $contribuyente->apellidos = $request->apellidos;
        $contribuyente->genero = $request->genero;
        $contribuyente->tipo_persona_id = $request->tipo_persona_id;
        $contribuyente->tipo_documento_id = $request->tipo_documento_id;
        $contribuyente->numero_documento = $request->numero_documento;
        $contribuyente->lugar_expedido_id = $request->lugar_expedido_id;
        $contribuyente->urbanizacion = $request->urbanizacion;
        $contribuyente->zona = $request->zona;
        $contribuyente->comunidad = $request->comunidad;
        $contribuyente->manzano = $request->manzano;
        $contribuyente->avenida_calle = $request->avenida_calle;
        $contribuyente->usuario_id = Auth::id();
        $contribuyente->save();

        return to_route('contribuyente.listado');
    }

    /**
     * Método para editar
     */
    public function editar($id)
    {
        $contribuyente = Contribuyente::find($id);
        if(!$contribuyente){
            return to_route('contribuyente.listado')->with('estadoContribuyente', 'No existe el contribuyente solicitado.!!!');
        }
        $tipoPersona = TipoPersona::all();
        $tipoDocumento = TipoDocumento::all();
        $lugarExpedido = LugarExpedido::all();

        return view('admin.contribuyente-editar', compact('contribuyente','tipoPersona','tipoDocumento','lugarExpedido'));
    }

    /**
     * 
     */
    public function actualizar($contribuyente, Request $request)
    {
        $request->validate([
            'nombres' => 'required|string',
            'apellidos' => 'required|string',
            'genero' => 'required|string|min:1|max:1',
            'tipo_persona_id' => 'required|integer',
            'tipo_documento_id' => 'required|integer',
            'numero_documento' => 'required|string|min:5',
            'lugar_expedido_id' => 'required|integer',
            'urbanizacion' => 'required|string',
            'zona' => 'required|string',
            'comunidad' => 'string',
            'manzano' => 'required|string',
            'avenida_calle' => 'required|string',
        ]);
        
        $contribuyente = Contribuyente::find($contribuyente);
        if(!$contribuyente){
            return to_route('contribuyente.listado')->with('estadoContribuyente', 'No existe el contribuyente solicitado.!!!');
        }

        $contribuyente->nombres = $request->nombres;
        $contribuyente->apellidos = $request->apellidos;
        $contribuyente->genero = $request->genero;
        $contribuyente->tipo_persona_id = $request->tipo_persona_id;
        $contribuyente->tipo_documento_id = $request->tipo_documento_id;
        $contribuyente->numero_documento = $request->numero_documento;
        $contribuyente->lugar_expedido_id = $request->lugar_expedido_id;
        $contribuyente->urbanizacion = $request->urbanizacion;
        $contribuyente->zona = $request->zona;
        $contribuyente->comunidad = $request->comunidad;
        $contribuyente->manzano = $request->manzano;
        $contribuyente->avenida_calle = $request->avenida_calle;
        $contribuyente->usuario_id = Auth::id();
        $contribuyente->save();

        return to_route('contribuyente.listado')->with('estadoContribuyente', 'Datos del contribuyente actualizado.!!!');
    }

    public function eliminar($contribuyente)
    {
        $contribuyente = Contribuyente::find($contribuyente);
        if(!$contribuyente){
            return to_route('contribuyente.listado')->with('estadoContribuyente', 'No existe el contribuyente solicitado.!!!');
        }
        $contribuyente->delete();

        return to_route('contribuyente.listado')->with('estadoContribuyente', 'Datos del contribuyente fue eliminado.!!!');
    }
}
