<?php namespace App\Models\Core;

use App\Models\Sximo;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Core\Logs
 *
 * @property integer $auditID
 * @property string $ipaddress
 * @property integer $user_id
 * @property string $module
 * @property string $task
 * @property string $note
 * @property string $logdate
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Core\Logs whereAuditID($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Core\Logs whereIpaddress($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Core\Logs whereUserId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Core\Logs whereModule($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Core\Logs whereTask($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Core\Logs whereNote($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Core\Logs whereLogdate($value)
 */
class Logs extends Sximo  {
	
	protected $table = 'tb_logs';
	protected $primaryKey = 'auditID';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT tb_logs.* FROM tb_logs  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE tb_logs.auditID IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
