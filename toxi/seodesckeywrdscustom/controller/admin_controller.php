<?php
/**
*
* @package Custom meta tags Description, Keywords, Rights, Generator Extension
* @copyright (c) 2016 toxi, Roman Pavlovsky <http://serviceplus.in.ua>
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace toxi\seodesckeywrdscustom\controller;

use Symfony\Component\DependencyInjection\ContainerInterface;

use toxi\seodesckeywrdscustom\ext;

/**
* Admin controller
*/
class admin_controller implements admin_interface
{
	/** @var \phpbb\config\config */
	protected $config;

	/** @var \phpbb\request\request */
	protected $request;

	/** @var \phpbb\template\template */
	protected $template;

	/** @var \phpbb\user */
	protected $user;

	/** @var \phpbb\log\log */
	protected $log;

	/** @var ContainerInterface */
	protected $container;

	/** @var string Custom form action */
	protected $u_action;

	/**
	* Constructor for admin controller
	*
	* @param \phpbb\config\config		$config		Config object
	* @param \phpbb\request\request		$request	Request object
	* @param \phpbb\template\template	$template	Template object
	* @param \phpbb\user				$user		User object
	* @param \phpbb\log\log				$log
	* @param ContainerInterface			$container	Service container interface
	*
	* @return \phpbb\boardrules\controller\admin_controller
	* @access public
	*/
	public function __construct(\phpbb\config\config $config, \phpbb\request\request $request, \phpbb\template\template $template, \phpbb\user $user, \phpbb\log\log $log, ContainerInterface $container)
	{
		$this->config		= $config;
		$this->request		= $request;
		$this->template		= $template;
		$this->user			= $user;
		$this->log			= $log;
		$this->container	= $container;
	}

	/**
	* Display the options a user can configure for this extension
	*
	* @return null
	* @access public
	*/
	public function display_options()
	{
		// Create a form key for preventing CSRF attacks
		$form_key			= 'seodesckeywrdscustom';
		add_form_key($form_key);

		$this->config_text = $this->container->get('config_text');

		// Is the form being submitted
		if ($this->request->is_set_post('submit'))
		{
			// Is the submitted form is valid
			if (!check_form_key($form_key))
			{
				trigger_error($this->user->lang('FORM_INVALID') . adm_back_link($this->u_action), E_USER_WARNING);
			}

			// If no errors, process the form data
			// Set the options the user configured
			$this->set_options();

			// Add option settings change action to the admin log
			$this->log->add('admin', $this->user->data['user_id'], $this->user->ip, 'SEODESCKEYWRDSCUSTOM_LOG');

			// Option settings have been updated and logged
			// Confirm this to the user and provide link back to previous page
			trigger_error($this->user->lang('CONFIG_UPDATED') . adm_back_link($this->u_action));
		}

		$use_seodesckeywrdscustom_data = $this->config_text->get_array(array('seodesccustom', 'seokeywrdscustom', 'seorightscustom', 'seogeneratorcustom'));

		$this->template->assign_vars(array(
			'USE_SEODESCKEYWRDSCUSTOM'		=> isset($this->config['use_seodesckeywrdscustom']) ? $this->config['use_seodesckeywrdscustom'] : '',

			'SEODESCCUSTOM'					=> $use_seodesckeywrdscustom_data['seodesccustom'],
			'SEOKEYWRDSCUSTOM'				=> $use_seodesckeywrdscustom_data['seokeywrdscustom'],
			'SEORIGHTSCUSTOM'				=> $use_seodesckeywrdscustom_data['seorightscustom'],
			'SEOGENERATORCUSTOM'			=> $use_seodesckeywrdscustom_data['seogeneratorcustom'],

			'U_ACTION'						=> $this->u_action,
		));
	}

	/**
	* Set the options a user can configure
	*
	* @return null
	* @access protected
	*/
	protected function set_options()
	{
		$this->config->set('use_seodesckeywrdscustom', $this->request->variable('use_seodesckeywrdscustom', 0));

		$this->config->set('seodesccustom', $this->request->variable('seodesccustom', '', true));
		$this->config->set('seokeywrdscustom', $this->request->variable('seokeywrdscustom', '', true));
		$this->config->set('seorightscustom', $this->request->variable('seorightscustom', '', true));
		$this->config->set('seogeneratorcustom', $this->request->variable('seogeneratorcustom', '', true));

		$this->config_text->set_array(array('seodesccustom' => ($this->request->variable('seodesccustom', '', true)), 'seokeywrdscustom' => ($this->request->variable('seokeywrdscustom', '', true)), 'seorightscustom' => ($this->request->variable('seorightscustom', '', true)), 'seogeneratorcustom' => ($this->request->variable('seogeneratorcustom', '', true))));
	}
}
