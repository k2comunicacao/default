FUNCTIONS

//ADD CUSTOM POST TYPE
require( get_template_directory() . '/theme-configs/post-type-depoimento.php' );

// REMOVER ITENS DO MENU 
   function remove_menus(){
  
  remove_menu_page( 'index.php' ); //Dashboard
  remove_menu_page( 'edit.php' ); //Posts
  remove_menu_page( 'edit-comments.php' ); //Posts
  remove_menu_page( 'revslider' ); //RevSlider
  remove_menu_page( 'edit.php?post_type=ivan_vc_projects' ); //Projects
  remove_menu_page( 'vc-general' ); //Visual Composer
  remove_menu_page( 'admin.php?page=yith_wcwl_panel' ); //YITH Plugins
  //remove_menu_page( 'edit.php?post_type=acf' ); //ACF
   }
add_action( 'admin_menu', 'remove_menus',  9999 );

function removes_menus () {
global $menu;
	$restricted = array(__('Slider Revolution'));
	end ($menu);
	while (prev($menu)){
		$value = explode(' ',$menu[key($menu)][0]);
		if(in_array($value[0] != NULL?$value[0]:"" , $restricted)){unset($menu[key($menu)]);}
	}
}
add_action('admin_menu', 'removes_menus');


//REMOVER META TAG GENERATOR
remove_action('wp_head', 'wp_generator');
add_action('init', 'myoverride', 100);
function myoverride() {
    remove_action('wp_head', array(visual_composer(), 'addMetaData'));
}
function remove_revslider_meta_tag() {
    return '';
}
add_filter( 'revslider_meta_generator', 'remove_revslider_meta_tag' );
