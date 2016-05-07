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
	'SEODESCKEYWRDSCUSTOM_NAME'			=> 'Власний текст в метатегах Description та Keywords',
	'SEODESCKEYWRDSCUSTOM_EXPLAIN'		=> '',
	'SEODESCKEYWRDSCUSTOM_OPTIONS'		=> 'Налаштування',

	'USE_SEODESCCUSTOM'					=> 'Використовувати власний текст в метатегах Description та Keywords',
	'USE_SEODESCCUSTOM_EXPLAIN'			=> '',

	'YES'								=> 'Так',
	'NO'								=> 'Ні',

	'SEODESCCUSTOM'						=> 'Заповніть метатег Description',
	'SEODESCCUSTOM_EXPLAIN'				=> 'Опис форуму або тематика форуму',
	'SEOKEYWRDSCUSTOM'					=> 'Заповніть метатег Keywords',
	'SEOKEYWRDSCUSTOM_EXPLAIN'			=> 'Вкажіть ключові слова через кому. Наприклад: форум, продаж, підтримка і т.д.',
	'SEORIGHTSCUSTOM'					=> 'Заповніть метатег Rights',
	'SEORIGHTSCUSTOM_EXPLAIN'			=> 'ПІП автора-розробника',
	'SEOGENERATORCUSTOM'				=> 'Заповніть метатег Generator',
	'SEOGENERATORCUSTOM_EXPLAIN'		=> 'Даний метатег в першу чергу використовувався розробниками програм для редагування веб-сторінок з метою самореклами - як значення тега розробники таких програм, як правило, вказували назву свого продукту. Наприклад: phpbbguru.net',

	'ACP_SUBMIT_CHANGES'				=> 'Зберегти налаштування',
	'SUBMIT'							=> 'Зберегти',
	'RESET'								=> 'Відмінити',
));
