<?php
/**
*
* @package Custom meta tags Description, Keywords, Rights, Generator Extension
* @copyright (c) 2016 toxi, Roman Pavlovsky <http://serviceplus.in.ua>
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace toxi\seodesckeywrdscustom\event;

/**
* @ignore
*/
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

use toxi\seodesckeywrdscustom\ext;


/**
* Event listener
*/
class listener implements EventSubscriberInterface
{
	/** @var \phpbb\config\config */
	protected $config;

	/** @var \phpbb\template\template */
	protected $template;

	/** @var \phpbb\user */
	protected $user;

	/** @var ContainerInterface */
	protected $container;

	/** @var string phpBB root path */
	protected $root_path;

	/**
	* Constructor for listener
	*
	* @param \phpbb\config\config		$config		phpBB config
	* @param \phpbb\template\template	$template	phpBB template
	* @param \phpbb\user				$user		User object
	* @param ContainerInterface			$container	Service container interface
	* @param string 					$root_path
	*
	* @access public
	*/
	public function __construct(\phpbb\config\config $config, \phpbb\template\template $template, \phpbb\user $user, $container, $root_path)
	{
		$this->config		= $config;
		$this->template		= $template;
		$this->user			= $user;
		$this->container	= $container;
		$this->root_path	= $root_path;
	}

	/**
	* Assign functions defined in this class to event listeners in the core
	*
	* @return array
	* @static
	* @access public
	*/
	static public function getSubscribedEvents()
	{
		return array(
			'core.page_header_after' => 'seodesckeywrdscustom',
		);
	}

	/**
	* Update the template variables
	*
	* @param object $event The event object
	* @return null
	* @access public
	*/
	public function seodesckeywrdscustom($event)
	{

		if ($this->config['use_seodesckeywrdscustom'])
		{
			$this->config_text				= $this->container->get('config_text');
			$use_seodesckeywrdscustom_data	= $this->config_text->get_array(array('seodesccustom','seokeywrdscustom','seorightscustom','seogeneratorcustom'));
			//$this->config['use_seodesckeywrdscustom']		= $use_seodesckeywrdscustom_data['use_seodesckeywrdscustom'];
			$this->config['seodesccustom']		= $use_seodesckeywrdscustom_data['seodesccustom'];
			$this->config['seokeywrdscustom']	= $use_seodesckeywrdscustom_data['seokeywrdscustom'];
			$this->config['seorightscustom']	= $use_seodesckeywrdscustom_data['seorightscustom'];
			$this->config['seogeneratorcustom']	= $use_seodesckeywrdscustom_data['seogeneratorcustom'];
		}

		$this->template->assign_vars(array(
			'USE_SEODESCKEYWRDSCUSTOM'		=> ($this->config['use_seodesckeywrdscustom']) ? true : false,
			'DESCRIPTION'					=> $this->config['seodesccustom'],
			'KEYWORDS'						=> $this->config['seokeywrdscustom'],
			'RIGHTS'						=> $this->config['seorightscustom'],
			'GENERATOR'						=> $this->config['seogeneratorcustom'],
		));
	}

	private function strip_code($text)
	{
		$text = censor_text($text);

		strip_bbcode($text);

		$text = str_replace(array("&quot;", "/", "\n", "\t", "\r"), ' ', $text);

		$text = preg_replace(array("|http(.*)jpg|isU", "@(http(s)?://)?(([a-z0-9.-]+)?[a-z0-9-]+(!?\.[a-z]{2,4}))@"), ' ', $text);

		return preg_replace("/[^A-ZА-ЯЁ.,-–?]+/ui", " ", $text);
	}

}
