<?php namespace App\Models\Core;

use App\Models\Sximo;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Core\Users
 *
 * @property integer $id
 * @property integer $group_id
 * @property string $username
 * @property string $password
 * @property string $email
 * @property string $first_name
 * @property string $last_name
 * @property string $avatar
 * @property boolean $active
 * @property boolean $login_attempt
 * @property string $last_login
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $reminder
 * @property string $activation
 * @property string $remember_token
 * @property integer $last_activity
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Core\Users whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Core\Users whereGroupId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Core\Users whereUsername($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Core\Users wherePassword($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Core\Users whereEmail($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Core\Users whereFirstName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Core\Users whereLastName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Core\Users whereAvatar($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Core\Users whereActive($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Core\Users whereLoginAttempt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Core\Users whereLastLogin($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Core\Users whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Core\Users whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Core\Users whereReminder($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Core\Users whereActivation($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Core\Users whereRememberToken($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Core\Users whereLastActivity($value)
 */
class Users extends Sximo  {
	
	protected $table = 'tb_users';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return " SELECT  tb_users.*,  tb_groups.name 
FROM tb_users LEFT JOIN tb_groups ON tb_groups.group_id = tb_users.group_id ";
	}	

	public static function queryWhere(  ){
		
		return "    WHERE tb_users.id !=''   ";
	}
	
	public static function queryGroup(){
		return "      ";
	}
	

}
