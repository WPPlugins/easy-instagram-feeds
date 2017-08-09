<?php
/*
Plugin Name: Easy Insta Feeds
Plugin URI:  https://wordpress.org/plugins/easy-instagram-feeds
Description: Basic WordPress Plugin to fetch instagram details & preview in different views
Version:     1.0
Author:      Azhar
License:     GPL2

{Plugin Name} is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.

{Plugin Name} is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with {Plugin Name}. If not, see {License URI}.
*/
class EasyInstaFeeds
{
    public function __construct(){
        add_action( 'init', array( $this,'easyinsta_setup_post_types') );
        register_activation_hook( __FILE__, array( $this,'easyinsta_install') );
        add_action('admin_menu', array( $this, 'easyinsta_options_menu_page' ));
        wp_enqueue_style( 'font-style', plugin_dir_url( __FILE__ ) . 'admin/css/font-awesome.min.css', true );
        add_shortcode('easyinsta_gridview', array( $this, 'easyinsta_grid'));
        add_shortcode('easyinsta_carousel', array( $this, 'easyinsta_carousel'));
    }

    function easyinsta_setup_post_types()
    {
        // register the "book" custom post type
        register_setting( 'easyinsta_options_group', 'easyinsta_insta_username' );

    }


    function easyinsta_install()
    {
        // trigger our function that registers the custom post type
       $this->easyinsta_setup_post_types();

        // clear the permalinks after the post type has been registered
        flush_rewrite_rules();
    }



    function easyinsta_grid($att=null){
        ob_start();
        include_once('/admin/includes/easyinsta_grid.php');
        return ob_get_clean();
    }
    function easyinsta_carousel($att=null){
        ob_start();
        include_once('/admin/includes/easyinsta_carousel.php');
        return ob_get_clean();
    }



    /**
     * Register a theme options menu page.
     */
    function easyinsta_options_menu_page() {


        add_menu_page('Easy Insta Options',
            'Easy Insta Options',
            'administrator',
            'easyinsta_options',
            array( $this, 'easyinsta_options_page' ),
            plugins_url('admin/images/instagram.png', __FILE__),6);

    }

    function easyinsta_options_page(){


        $easyinsta_insta_username=esc_attr( get_option('easyinsta_insta_username') );

        ?>
        <div class="wrap">
            <h1><i class="fa fa-instagram" aria-hidden="true"></i> Easy Insta Options</h1>
            <form method="post" action="options.php">
                <?php
                settings_fields( 'easyinsta_options_group' );
                do_settings_sections( 'easyinsta_options_group' );
                ?>
                <table class="form-table">
                    <tbody>
                    <tr>
                        <td style="width: 100%"><i class="fa fa-user" aria-hidden="true"></i> User Name <input type="text" size="40" name="easyinsta_insta_username" value="<?php echo ($easyinsta_insta_username) ? $easyinsta_insta_username:''; ?>" />
                        eg : https://www.instagram.com/username/
                        </td>
                    </tr>
                   </tbody>
                </table>
                <?php echo submit_button();?>
            </form>
        </div>
    <?php }
}
$easyInstaFeed=new EasyInstaFeeds();