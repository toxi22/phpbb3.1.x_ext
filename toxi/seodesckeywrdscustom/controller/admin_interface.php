<?php
/**
*
* @package Custom meta tags Description, Keywords, Rights, Generator Extension
* @copyright (c) 2016 toxi, Roman Pavlovsky <http://serviceplus.in.ua>
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace toxi\seodesckeywrdscustom\controller;

/**
* Interface for our admin controller
*
* This describes all of the methods we'll use for the admin front-end of this extension
*/
interface admin_interface
{
	/**
	* Display the output for this extension
	*
	* @return null
	* @access public
	*/
	public function display_options();
}
