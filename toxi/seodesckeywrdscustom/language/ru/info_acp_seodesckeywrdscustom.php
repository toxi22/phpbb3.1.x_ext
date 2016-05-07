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
	'SEODESCKEYWRDSCUSTOM'				=> 'Пользовательский текст в метатегах Description, Keywords, Rights, Generator',
	'SEODESCKEYWRDSCUSTOM_MANAGE'		=> 'Пользовательский текст в метатегах Description, Keywords, Rights, Generator',
	'SEODESCKEYWRDSCUSTOM_CAT'			=> 'Пользовательский текст в метатегах Description, Keywords, Rights, Generator',
	'SEODESCKEYWRDSCUSTOM_TITLE'		=> 'Пользовательский текст в метатегах Description, Keywords, Rights, Generator',
	'SEODESCKEYWRDSCUSTOM_LOG'         	=> 'SEODESCKEYWRDSCUSTOM_LOG',

	'SEODESCKEYWRDSCUSTOM_NAME'			=> 'Пользовательский текст в метатегах Description, Keywords, Rights, Generator',
	'SEODESCKEYWRDSCUSTOM_EXPLAIN'		=> '',
	'SEODESCKEYWRDSCUSTOM_OPTIONS'		=> 'Настройки',

	'USE_SEODESCCUSTOM'					=> 'Пользовательский текст в метатегах Description, Keywords, Rights, Generator',
	'USE_SEODESCCUSTOM_EXPLAIN'			=> '',

	'YES'								=> 'Да',
	'NO'								=> 'Нет',

	'SEODESCCUSTOM'						=> 'Заполните метатег Description',
	'SEODESCCUSTOM_EXPLAIN'				=> 'Описание форума либо тематики форума',
	'SEOKEYWRDSCUSTOM'					=> 'Заполните метатег Keywords',
	'SEOKEYWRDSCUSTOM_EXPLAIN'			=> 'Укажите ключевые слова через запятую. Например: форум, продажа, поддержка и т.д.',
	'SEORIGHTSCUSTOM'					=> 'Заполните метатег Rights',
	'SEORIGHTSCUSTOM_EXPLAIN'			=> 'Ф.И.О. автора-разработчика',
	'SEOGENERATORCUSTOM'				=> 'Заполните метатег Generator',
	'SEOGENERATORCUSTOM_EXPLAIN'		=> 'Данный метатег в первую очередь использовался разработчиками программ для редактирования веб-страниц с целью саморекламы — в качестве значения тега разработчики таких программ, как правило, указывали название своего продукта. Например: phpbbguru.net',

	'ACP_SUBMIT_CHANGES'				=> 'Применить настройки',
	'SUBMIT'							=> 'Сохранить',
	'RESET'								=> 'Сбросить',
));
