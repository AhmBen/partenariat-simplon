<?php
/*
Plugin Name: Partenariat Simplon
Plugin URI: http://monsite.com
Description: Installation pub Simplon
Version: 0.1
Author: Ahmed
Author URI: http://monsite.com
License: GPL2
*/

//add_action('the_content', 'wp_simplon_part'); //Ajoute a la fin de chaque article automatiquement
add_shortcode( 'simplon', 'wp_simplon_part');
function wp_simplon_part() {
	return '<p><i>La publication de cet article est possible grâce à mon super partenaire <a href="https://simplon.co/">simplon.co</a> - une entreprise de
	l\'économie sociale et solidaire et un réseau de « fabriques » (écoles) qui propose
	des formations GRATUITES pour devenir développeur web.</i></p>';
}
?>
