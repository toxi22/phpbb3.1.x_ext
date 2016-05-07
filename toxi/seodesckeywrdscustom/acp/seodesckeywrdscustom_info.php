<?php
/**
*
* @package Custom meta tags Description, Keywords, Rights, Generator Extension
* @copyright (c) 2016 toxi, Roman Pavlovsky <http://serviceplus.in.ua>
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace toxi\seodesckeywrdscustom\acp;

class seodesckeywrdscustom_info
{
	function module()
	{
		return array(
			'filename'	=> '\toxi\seodesckeywrdscustom\acp\seodesckeywrdscustom_module',
			'title'		=> 'SEODESCKEYWRDSCUSTOM_MANAGE',
			'modes'		=> array(
				'manage'	=> array('title' => 'SEODESCKEYWRDSCUSTOM_MANAGE', 'auth' => 'ext_toxi/seodesckeywrdscustom && acl_a_board', 'cat' => array('SEODESCKEYWRDSCUSTOM_CAT')),
			),
		);
	}
}
