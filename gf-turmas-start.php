<?php
/*
 * Plugin Name:		GF Turmas Start
 * Plugin URI:		https://novaigreja.com/college
 * Description:		Add on do Gravity Forms para exibir as turmas dinamicamente.
 * Version:			1.0
 * Author:			Nova Digital Team
 * Author URI:		https://novaigreja.com
 * License:			GPL-2.0+
 * License URI:		http://www.gnu.org/licenses/gpl-2.0.txt
 */

// Not called within Wordpress framework
if (!defined('WPINC')) {
    die;
}


/***************
 * global variables
 ***************/

$gf_turmas_start_prefix = 'gf_turmas_start_';
$gf_turmas_start_plugin_name = 'GF Turmas Start';



ini_set('error_log', $_SERVER['DOCUMENT_ROOT'] . '../../logs/error.log');
error_log('GF Turmas Start WordPress plugin');



function gf_turmas_start_enqueue_frontend()
{
    wp_enqueue_script('gf_turmas_start_js', plugins_url('gf-turmas-start/includes/js/dist/gf_turmas_start_functions-min.js', __DIR__), array('jquery'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'gf_turmas_start_enqueue_frontend');
