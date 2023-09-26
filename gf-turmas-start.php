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


// add_filter('gform_pre_render_1', 'populate_posts');
// add_filter('gform_pre_validation_1', 'populate_posts');
// add_filter('gform_pre_submission_filter_1', 'populate_posts');
// //add_filter('gform_admin_pre_render_1', 'populate_posts');
// function populate_posts($form)
// {

//     foreach ($form['fields'] as $field) {

//         if ($field->type != 'select' || strpos($field->cssClass, 'populate-posts') === false) {
//             continue;
//         }

//         $local_timestamp = GFCommon::get_local_timestamp(time());

//         $turmas = array(
//             (object) [
//                 'nome' => 'Terça 09/09, 19h15',
//                 'data' => strtotime('2023-09-09')
//             ],
//             (object) [
//                 'nome' => 'Domingo 15/10, 18h',
//                 'data' => strtotime('2023-10-15')
//             ],
//             (object) [
//                 'nome' => 'Domingo 05/11, 9h',
//                 'data' => strtotime('2023-11-05')
//             ],
//             (object) [
//                 'nome' => 'Terça 10/11, 19h15',
//                 'data' => strtotime('2023-11-10')
//             ],
//             (object) [
//                 'nome' => 'Domingo 15/11, 18h',
//                 'data' => strtotime('2023-11-15')
//             ],
//             (object) [
//                 'nome' => 'Domingo 05/12, 9h',
//                 'data' => strtotime('2023-12-05')
//             ]
//         );

//         foreach ($turmas as $turma) {
//             if ($turma->data < $local_timestamp) {
//                 continue;
//             }

//             $choices[] = array(
//                 'text'       => $turma->nome,
//                 'value'      => $turma->nome,
//                 'isSelected' => false
//             );
//         }

//         // update 'Select a Post' to whatever you'd like the instructive option to be
//         $field->placeholder = 'Selecione uma turma';
//         $field->choices = $choices;
//     }

//     return $form;
// }
