<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class factura extends Sximo  {
	
	protected $table = 'cabfactu';
	protected $primaryKey = 'id';
	const LINES_PER_PAGE = 48;


	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT cabfactu.* FROM cabfactu  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE cabfactu.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}

	public function getNextNumFac($ejercicio) {
		$numFac = \DB::table($this->table)->where("ejefac", $ejercicio)->max("numfac");
		return $numFac+1;
	}
	

}
