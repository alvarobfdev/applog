<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class cliente extends Sximo  {
	
	protected $table = 'clientes';
	protected $primaryKey = 'codcli';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT clientes.* FROM clientes  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE clientes.codcli IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
