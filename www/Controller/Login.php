<?php
/**
 * This class is responsible for the logic behind logging into the system. It should handle the authentication
 * of users and render the proper view.
 *
 * Wish List
 *  - Adding in the authentication. This might be better off in a specific LDAP controller
 */
class Controller_Login extends Controller {

	// The login form
	private $view;

	/**
	 * Construct a new Login controller which initializes a login view
	 */
	public function __construct() {
		$this->view = new View_Login();
	}

	/**
	 * The main action to perform for this controller. In this case, we just want to render the login form.
	 * @return $this
	 */
	public function indexAction() {
		$this->view->render();

		return $this;
	}
}