<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contribuyente extends Model
{
    protected $table = 'contribuyente';

    public function getNombreCompletoAttribute()
    {
        return $this->nombres.' '.$this->apellidos;
    }

    public function getDocumentoAttribute()
    {
        return $this->tipoDocumento->sigla_tipo_documento.': '.$this->numero_documento.' ('.$this->lugarExpedido->sigla_lugar_expedido.')';
    }

    public function getPersonaNaturalJuridicaAttribute()
    {
        return $this->tipoPersona->nombre_tipo_persona;
    }

    public function getDireccionAttribute()
    {
        return 'Urb.: '.$this->urbanizacion.', Calle: '.$this->avenida_calle;
    }

    /**
     * Métodos para relaciones
     */

    public function tipoDocumento()
    {
        return $this->belongsTo(TipoDocumento::class);
    }

    public function lugarExpedido()
    {
        return $this->belongsTo(LugarExpedido::class);
    }

    public function tipoPersona()
    {
        return $this->belongsTo(TipoPersona::class);
    }
}
