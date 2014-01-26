<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Loads a default set of filters and extensions for 
 * Twig based on Kohana helpers
 *
 * @package kohana-twig
 * @author Jonathan Geiger
 */
class Kohana_Twig_Extensions extends Twig_Extension
{
	/**
	 * Returns the added token parsers
	 *
	 * @return array
	 * @author Jonathan Geiger
	 */
	public function getTokenParsers()
	{
		return array(
			new Kohana_Twig_HTML_TokenParser(),
			new Kohana_Twig_Form_TokenParser(),
			new Kohana_Twig_URL_TokenParser(),
			new Kohana_Twig_Cache_TokenParser(),
			new Kohana_Twig_Trans_TokenParser(),
			new Kohana_Twig_Request_TokenParser(),
		);
	}
	
	/**
	 * Returns the added filters
	 *
	 * @return array
	 * @author Jonathan Geiger
	 */
	public function getFilters()
	{
		return array(
			// Translation
			'translate' => new Twig_Filter_Function('__'),
			'trans' => new Twig_Filter_Function('__'),
			'tr' => new Twig_Filter_Function('__'),
			
			// Date and time
			'timestamp' => new Twig_Filter_Function('strtotime'),
			'timesince' => new Twig_Filter_Function('Kohana_Twig_Filters::timesince'),
			'fuzzy_timesince' => new Twig_Filter_Function('Date::fuzzy_span'),
			
			// Strings
			'plural' => new Twig_Filter_Function('Inflector::plural'),
			'singular' => new Twig_Filter_Function('Inflector::singular'),
			'humanize' => new Twig_Filter_Function('Inflector::humanize'),
			
			// HTML 
			'obfuscate' => new Twig_Filter_Function('HTML::obfuscate'),			
			
			// Numbers
			'ordinal' => new Twig_Filter_Function('Kohana_Twig_Filters::ordinal'),
			'num_format' => new Twig_Filter_Function('Num::format'),
			
			// Text
			'limit_words' => new Twig_Filter_Function('Text::limit_words'),
			'limit_chars' => new Twig_Filter_Function('Text::limit_chars'),
			'auto_link' => new Twig_Filter_Function('Text::auto_link'),
			'auto_p' => new Twig_Filter_Function('Text::auto_p'),
			'bytes' => new Twig_Filter_Function('Text::bytes'),

			'urltitle' => new Twig_Filter_Function('URL::title'),
		);
	}
	
	/**
	 * @return string
	 * @author Jonathan Geiger
	 */
	public function getName()
	{
		return 'Kohana_Twig';
	}
}
