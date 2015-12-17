<?php namespace App\Models\Sximo;

use App\Models\Sximo;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Sximo\Module
 *
 * @property integer $module_id
 * @property string $module_name
 * @property string $module_title
 * @property string $module_note
 * @property string $module_author
 * @property string $module_created
 * @property string $module_desc
 * @property string $module_db
 * @property string $module_db_key
 * @property string $module_type
 * @property string $module_config
 * @property string $module_lang
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Sximo\Module whereModuleId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Sximo\Module whereModuleName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Sximo\Module whereModuleTitle($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Sximo\Module whereModuleNote($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Sximo\Module whereModuleAuthor($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Sximo\Module whereModuleCreated($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Sximo\Module whereModuleDesc($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Sximo\Module whereModuleDb($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Sximo\Module whereModuleDbKey($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Sximo\Module whereModuleType($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Sximo\Module whereModuleConfig($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Sximo\Module whereModuleLang($value)
 */
class Module extends Sximo {

	protected $table 		= 'tb_module';
	protected $primaryKey 	= 'module_id';

	public function __construct() {
		parent::__construct();
	
			
				
	} 

}