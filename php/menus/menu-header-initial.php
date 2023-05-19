<?php 
    /**
     * php/menus/menu-header-initial.php
     * @package scgolfpanel
     * @author Scott Shealy
     * @version 1.0.0 (2023.05.19)
     * @copyright 2023
    **/
?>

<?php 
    wp_nav_menu(
        array(
            'theme_location' => 'menu-3',
            'menu_id' => 'Header-Initial'
        )
    );
?>