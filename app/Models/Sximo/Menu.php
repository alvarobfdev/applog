<?php namespace App\Models\Sximo;

use App\Models\Sximo;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Sximo\Menu
 *
 * @property integer $menu_id
 * @property integer $parent_id
 * @property string $module
 * @property string $url
 * @property string $menu_name
 * @property string $menu_type
 * @property string $role_id
 * @property integer $deep
 * @property integer $ordering
 * @property string $position
 * @property string $menu_icons
 * @property string $active
 * @property string $access_data
 * @property string $allow_guest
 * @property string $menu_lang
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Sximo\Menu whereMenuId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Sximo\Menu whereParentId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Sximo\Menu whereModule($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Sximo\Menu whereUrl($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Sximo\Menu whereMenuName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Sximo\Menu whereMenuType($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Sximo\Menu whereRoleId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Sximo\Menu whereDeep($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Sximo\Menu whereOrdering($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Sximo\Menu wherePosition($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Sximo\Menu whereMenuIcons($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Sximo\Menu whereActive($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Sximo\Menu whereAccessData($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Sximo\Menu whereAllowGuest($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Sximo\Menu whereMenuLang($value)
 */
class Menu extends Sximo {

	protected $table 		= 'tb_menu';
	protected $primaryKey 	= 'menu_id';

	public function __construct() {
		parent::__construct();
	
			
				
	} 

}