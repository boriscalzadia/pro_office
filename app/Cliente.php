<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = "clientes";

    protected $fillable = ['cliente_id','razon_cliente','nit_cliente','giro_cliente','riva_cliente','nombre_cliente', 'type_cliente','dui_cliente','direccion_cliente','teldirecto_cliente','celular_cliente','correo_cliente','oencargado_cliente', 'ref1nombre_cliente', 'ref1parentesco_cliente', 'ref1telefono_cliente', 'ref1celular_cliente','ref2nombre_cliente', 'ref2parentesco_cliente', 'ref2telefono_cliente', 'ref2celular_cliente','ref1per_nombre_cliente', 'ref1per_telefono_cliente', 'ref1per_celular_cliente', 'ref2per_nombre_cliente', 'ref2per_telefono_cliente', 'ref2per_celular_cliente', 'tcontrato_cliente', 'saludoper_cliente', 'fechain_cliente', 'plazo_cliente'];
    public function salas()
    {
    	# code...
    	return $this->hasMany('App\Sala');
    }
    public function documentos()
    {
    	# code...
    	return $this->hasMany('App\Documento');
    }
    public function serviadd()
    {
        # code...
        return $this->hasMany('App\ServiciosAdicionale');
    }
}
