<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

/**
 * WC_Admin class.
 */
class RK_Admin {

	/**
	 * Constructor.
	 */
	public function __construct() {		
		add_action( 'admin_menu', array( $this, 'ravikatre_plugin_setup_menu' ) );

	}
	
	
	function ravikatre_plugin_setup_menu(){
		
        add_menu_page( 'RK wc import export', 'RK WC Import Export', 'manage_options', 'rk-admin-dashboard',  array( $this, 'render_page_contents' ) );
		/*add_submenu_page(  'rk-admin-dashboard', 'My Custom Page1', 'My Custom Page 1',
    'manage_options', 'rk-submenu-ravikatre-plugin1', array( $this , 'render_page_contents' ));
		add_submenu_page(  'rk-admin-dashboard', 'My Custom Page2', 'My Custom Page 2',
    'manage_options', 'rk-submenu-ravikatre-plugin2', array( $this , 'render_page_contents' ));*/
		
	}

	function render_page_contents(){
			
		switch($_REQUEST['page']){
			case 'xyz';
			break;
			default:
				require_once 'html/'.$_REQUEST['page'].'.php';
				
				//$this->wc_api();
			break;
		}
			
	}
}
return new RK_Admin();