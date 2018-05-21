<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
setlocale(LC_TIME, 'es');

class Expediente extends Model {

	protected $table="expediente";

	public function getDfechasalidaAttribute($fsalida){
        $tiempo = new Carbon($fsalida);
        $fecha =strtoupper($tiempo->formatLocalized('%d.%b.%y'));
        return $fecha;
	}
	public function getFhrecibidoAttribute($fingreso){
        $tiempo = new Carbon($fingreso);
        $fecha =strtoupper($tiempo->formatLocalized('%d.%b.%y %I:%M:%S %p'));
        return $fecha;
	}

        public function getFecha_AperturaAttribute($fapertura){
        $tiempo = new Carbon($fapertura);
        $fecha =strtoupper($tiempo->formatLocalized('%d.%b.%y'));
        return $fecha;
        }

}
