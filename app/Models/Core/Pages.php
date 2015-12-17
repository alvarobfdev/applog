<?php namespace App\Models\Core;

use App\Models\Sximo;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Core\Pages
 *
 * @property integer $pageID
 * @property string $title
 * @property string $alias
 * @property string $note
 * @property string $created
 * @property string $updated
 * @property string $filename
 * @property string $status
 * @property string $access
 * @property string $allow_guest
 * @property string $template
 * @property string $metakey
 * @property string $metadesc
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Core\Pages wherePageID($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Core\Pages whereTitle($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Core\Pages whereAlias($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Core\Pages whereNote($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Core\Pages whereCreated($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Core\Pages whereUpdated($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Core\Pages whereFilename($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Core\Pages whereStatus($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Core\Pages whereAccess($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Core\Pages whereAllowGuest($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Core\Pages whereTemplate($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Core\Pages whereMetakey($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Core\Pages whereMetadesc($value)
 */
class Pages extends Sximo  {
	
	protected $table = 'tb_pages';
	protected $primaryKey = 'pageID';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT tb_pages.* FROM tb_pages  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE tb_pages.pageID IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
