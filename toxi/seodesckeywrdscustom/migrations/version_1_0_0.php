<?php
/**
*
* @package Custom meta tags Description, Keywords, Rights, Generator Extension
* @copyright (c) 2016 toxi, Roman Pavlovsky <http://serviceplus.in.ua>
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace toxi\seodesckeywrdscustom\migrations;

class version_1_0_0 extends \phpbb\db\migration\migration
{
	public function update_data()
	{
		return array(
			array('config.add', array('version_seodesckeywrdscustom', '1.0.0')),

			// Add the ACP module
			array('module.add', array('acp', 'ACP_CAT_DOT_MODS', 'SEODESCKEYWRDSCUSTOM')),

			array('module.add', array(
				'acp', 'SEODESCKEYWRDSCUSTOM', array(
					'module_basename'	=> '\toxi\seodesckeywrdscustom\acp\seodesckeywrdscustom_module',
					'modes'				=> array('manage'),
				),
			)),
		);
	}
}
