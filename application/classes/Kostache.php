<?php defined('SYSPATH') OR die('No direct script access.');

class Kostache extends Kohana_Kostache
{
	/**
	 * Allows for things to be setup in View classes.
	 * Avoids having to extend the constructor and pass around all those parameters.
	 *
	 * @return  void
	 */
	public function _initialize() {}

	public function __construct($template = NULL, array $partials = NULL)
	{
		parent::__construct($template, $partials);

		$this->_initialize();
	}

}
