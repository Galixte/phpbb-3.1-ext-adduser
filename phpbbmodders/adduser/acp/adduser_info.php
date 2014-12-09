<?php
/**
*
* @package ACP Add User
* @copyright (c) 2014 RMcGirr83
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace phpbbmodders\adduser\acp;

/**
* @package module_install
*/
class adduser_info
{
	function module()
	{
		return array(
			'filename'	=> 'phpbbmodders\adduser\acp\adduser_module',
			'title'		=> 'ADD_USER',
			'version'	=> '1.0.0',
			'modes'		=> array(
				'main'	=> array('title' => 'ACP_ADD_USER', 'auth'	=> 'ext_phpbbmodders/adduser && acl_a_user', 'cat'	=> array('ACP_CAT_USERS')),
			),
		);
	}

	function install()
	{
	}

	function uninstall()
	{
	}
}
