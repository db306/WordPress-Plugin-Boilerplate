<?php
// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
// Exit if class is already defined
if ( class_exists( 'BP_MVC_Admin_Controller' ) ) {
	return;
}

/**
 * Admin Controller 
 *
 * @class BP_MVC_Admin_Controller 
 * @package app/core
 * @author Abid Omar
 */
abstract class BP_MVC_Admin_Controller {

	public $view;
	private $page_id;
	private $child;
	private $cap;

	/**
	 *
	 * @param string $page_id Page Unique Identifier
	 * @param bool|string $child False if the page is a top level menu, or the parent menu id
	 * @param string $cap
	 *
	 * @return void
	 */
	public function __construct( $page_id, $child = false, $cap = 'manage_options' ) {
		$this->page_id = $page_id;
		$this->child = $child;
		$this->cap = $cap;
		$this->view = new BP_Admin_View();
	}

	public function process_get() {

	}

	public function process_post() {

	}

	abstract public function load_scripts() {

	}

	abstract public function load_styles() {

	}
}
