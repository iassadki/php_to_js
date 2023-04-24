<?php

/**
 * Plugin Name: Affichage Variable PHP
 * Description: Récuperation de variables PHP natives de Wordpress pour les passer en Javascript
 * Author: Ilias ASSADKI
 * Version:     1.0.0
 * 
 */


add_shortcode('var_php_to_js', 'affichage_variable');
// shortcode('nom_shortcode','nom_fonction');
 
function affichage_variable() {
    $variable = "Hello World";
    echo "La variable PHP est : " ,$variable;
    $current_user = wp_get_current_user();
    echo "<br/>";
    /**
     * @example Safe usage: $current_user = wp_get_current_user();
     * if ( !($current_user instanceof WP_User) )
     *     return;
     */
    echo 'Username: ' . $current_user->user_login . '<br />';
    echo 'User email: ' . $current_user->user_email . '<br />';
    echo 'User first name: ' . $current_user->user_firstname . '<br />';
    echo 'User last name: ' . $current_user->user_lastname . '<br />';
    echo 'User display name: ' . $current_user->display_name . '<br />';
    echo 'User ID: ' . $current_user->ID . '<br />';
    // echo json_encode($variable);
    
    wp_enqueue_script('affichage_variable', plugins_url('script.js', __FILE__), array(), '1.0', true);

    // echo " <a href='/wp-content/plugins/php_to_js/script.js'> <button id='auth_qiiro_button'> <span class='label_button_qiiro'> LE BOUTON </span> </button> </a>";
    // //google.com
    // wp_enqueue_script('my-script', get_template_directory_uri() . 'script.js', array('jquery'), '1.0', true);
    wp_localize_script('affichage_variable', 'my_script_vars', array(
        'variable' => $variable,
        'user_login' => $current_user->user_login,
        'user_email' => $current_user->user_email,
        'user_firstname' => $current_user->user_firstname,
        'user_lastname' => $current_user->user_lastname,
        'display_name' => $current_user->display_name,
        'ID_' => $current_user->ID,
        //echo " <button> id="auth_qiiro_button"> <span class="label_button_qiiro"> MON ESPACE JURIDIQUE </span> </button> ";
    ));

    echo '<button type="button">Cliquez ici</button>';
    // echo " <button id='auth_qiiro_button'> <span class='label_button_qiiro'> MON ESPACE JURIDIQUE </span> </button> ";
    echo " <button href='https://www.w3schools.com' target='_blank'> LIEN </button> ";
    
}
add_action('wp_enqueue_scripts', 'affichage_variable');

// echo "<script>";
// echo "console.log('Bonjour');";
// echo "</script>";

// function php_to_js_transform()
// {
//     wp_enqueue_script('transform_', plugins_url('script.js', __FILE__), array(), '1.0', true);
// }
// add_action('wp_enqueue_scripts', 'php_to_js_transform');
?>