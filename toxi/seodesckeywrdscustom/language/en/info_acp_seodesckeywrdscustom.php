<?php
/**
*
* @package Custom meta tags Description, Keywords, Rights, Generator Extension
* @copyright (c) 2016 toxi, Roman Pavlovsky <http://serviceplus.in.ua>
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'SEODESCKEYWRDSCUSTOM_NAME'			=> 'Custom Text in meta tags Description and Keywords',
	'SEODESCKEYWRDSCUSTOM_EXPLAIN'		=> '',
	'SEODESCKEYWRDSCUSTOM_OPTIONS'		=> 'Settings',

	'USE_SEODESCCUSTOM'					=> 'Use custom text in the meta tags Description and Keywords',
	'USE_SEODESCCUSTOM_EXPLAIN'			=> '',

	'YES'								=> 'Yes',
	'NO'								=> 'No',

	'SEODESCCUSTOM'						=> 'Fill in the Meta Description Tag',
	'SEODESCCUSTOM_EXPLAIN'				=> 'Description forum or forum topic',
	'SEOKEYWRDSCUSTOM'					=> 'Fill in the Meta Keywords tag',
	'SEOKEYWRDSCUSTOM_EXPLAIN'			=> 'Enter keywords, separated by commas. For example: Forum, sales, support, etc.',
	'SEORIGHTSCUSTOM'					=> 'Fill in the Meta Rights tag',
	'SEORIGHTSCUSTOM_EXPLAIN'			=> 'FULL NAME author-developer',
	'SEOGENERATORCUSTOM'				=> 'Fill in the Meta Generator tag',
	'SEOGENERATORCUSTOM_EXPLAIN'		=> 'This meta tag is primarily used by software developers to edit web pages for the purpose of self-promotion - as a tag value of the developers of such programs, as a rule, indicate the name of your product. For example: phpbbguru.net',

	'ACP_SUBMIT_CHANGES'				=> 'Apply settings',
	'SUBMIT'							=> 'Save',
	'RESET'								=> 'Cancel',
));
