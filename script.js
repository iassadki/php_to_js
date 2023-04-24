// // // // // // var xhr = new XMLHttpRequest();
// var pluginURL = '<?php echo plugins_url(); ?>test.smc-cse.fr/httpdocs/wp-content/plugins/php_to_js/plugin.php';
// xhr.open('GET', '/wp-content/plugins/php_to_js/plugin.php', true);

// var pluginURL = '<?php echo plugins_url(); ?>/php_to_js/plugin.php'; 
// // // // // // xhr.open('GET',
// // // // // //          "<?php echo plugins_url( 'plugin.php', __FILE__ ); ?>", 
// // // // // //          true); //
         
// xhr.open('GET', 'plugin.php', true);
// xhr.onload = function () {
//     if (xhr.status === 400) {
//         console.log('Erreur lors de la recherche du fichier');
//     } else {
//         console.log("Fichier trouvé")
//     }
// }

// // // // // // xhr.onload = function () {
// // // // // //     if (xhr.status === 200) {
// // // // // //         var variable = JSON.parse(xhr.responseText);
// // // // // //         console.log(variable);
// // // // // //         console.log("Récuperation reussie")
// // // // // //     } else {
// // // // // //         console.log('Récuperation échouée');
// // // // // //     }
// // // // // // };

// // // // // // xhr.send();



console.log(" ")
console.log("Récupération de variable")
console.log("Variable PHP est :" +my_script_vars.variable);
console.log(" ")
console.log(" ")
console.log("User")
console.log("Username : " +my_script_vars.user_login)
console.log("Email : " +my_script_vars.user_email)
console.log("First name : " +my_script_vars.user_firstname)
console.log("Last name : " +my_script_vars.user_lastname)
console.log("Display name : " +my_script_vars.display_name)
console.log("ID : " +my_script_vars.ID_)