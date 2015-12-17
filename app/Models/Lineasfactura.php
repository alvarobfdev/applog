<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class lineasfactura extends Sximo  {
	
	protected $table = 'linfactu';
	protected $primaryKey = 'numlin';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT linfactu.* FROM linfactu  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE linfactu.numlin IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
