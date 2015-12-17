<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Notification
 *
 * @property integer $id
 * @property integer $userid
 * @property string $url
 * @property string $title
 * @property string $note
 * @property string $created
 * @property string $icon
 * @property string $is_read
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Notification whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Notification whereUserid($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Notification whereUrl($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Notification whereTitle($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Notification whereNote($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Notification whereCreated($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Notification whereIcon($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Notification whereIsRead($value)
 */
class Notification extends Sximo  {
	
	protected $table = 'tb_notification';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT tb_notification.* FROM tb_notification  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE tb_notification.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
