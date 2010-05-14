 <?php defined('SYSPATH') or die('No direct script access.');

class Model_User extends Model_Auth_User
{
	protected $_has_many = array
	(
		'user_tokens' => array('model' => 'user_token'),
		'roles'       => array('model' => 'role', 'through' => 'roles_users'),
		'projects'    => array(), 
		'tickets'     => array(), 
		'comments'    => array()
	);
	
}
