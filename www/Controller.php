<?php
/**
 * A Controller is responsible for controlling that page's models and views. It can talk to other controllers,
 * gather and process data, and then pass that information to the views to be rendered.
 */
abstract class Controller {

	/**
	 * Construct this Controller, and perform the index action for it.
	 */
	public function __construct() {
		$this->indexAction();
	}

	/**
	 * The main function for the controller to exectute when it is loaded. 
	 * @return $this
	 */
	abstract function indexAction();
}