<?php
/**
*
* @package Custom meta tags Description, Keywords, Rights, Generator Extension
* @copyright (c) 2016 toxi, Roman Pavlovsky <http://serviceplus.in.ua>
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace toxi\seodesckeywrdscustom\acp;

class seodesckeywrdscustom_module
{
	public $u_action;

	function main($id, $mode)
	{
		global $phpbb_container, $user;

		$this->tpl_name		= 'seodesckeywrdscustom_tpl_name';
		$this->page_title	= $user->lang('SEODESCKEYWRDSCUSTOM_TITLE');

		// Get an instance of the admin controller
		$admin_controller = $phpbb_container->get('toxi.seodesckeywrdscustom.admin.controller');

		$admin_controller->display_options();
	}
}
