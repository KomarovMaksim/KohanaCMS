<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Twig template controller
 *
 * @package    Kohana-Twig
 * @author     John Heathco <jheathco@gmail.com>
 */
abstract class Kohana_Controller_Template_Twig extends Controller
{
	/**
	 * @var Twig_Environment
	 */
	public $environment = 'default';

	/**
	 * @var boolean  Auto-render template after controller method returns
	 */
	public $auto_render = TRUE;

	/**
	 * @var Twig
	 */
	public $template;

	/**
	 * Setup view
	 *
	 * @return void
	 */
	public function before()
	{
		if (empty($this->template))
		{
			// Generate a template name if one wasn't set.
			$this->template = str_replace('_', DIRECTORY_SEPARATOR, $this->request->controller()).DIRECTORY_SEPARATOR.$this->request->action();

			$directory = $this->request->directory();
			
			if ( ! empty($directory))
			{
				$this->template = $this->request->directory().DIRECTORY_SEPARATOR.$this->template;
			}
		}

		if ($this->auto_render)
		{
			// Load the twig template.
			$this->template = Twig::factory($this->template, $this->environment);

			// Return the twig environment
			$this->environment = $this->template->environment();
		}

		return parent::before();
	}

	/**
	 * Renders the template if necessary
	 *
	 * @return void
	 */
	public function after()
	{
		if ($this->auto_render)
		{
			// Auto-render the template
			$this->response->body($this->template);
		}

		return parent::after();
	}

	/**
	 * Switch to an other template.
	 * WARNING : This resets variables and everything set in the previous template !
	 *
	 * @return void
	 */
	public function switch_template($template, $environment = 'default')
	{
		if ($this->auto_render)
		{
			// Load the twig template.
			$this->template = Twig::factory($template, $environment);

			// Return the twig environment
			$this->environment = $this->template->environment();
		}
	}

} // End Controller_Twig
