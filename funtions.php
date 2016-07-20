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

//REMOVE ATUALIZAÇÃO DE CORE E PLUGIN
add_action('after_setup_theme','remove_core_updates');
function remove_core_updates()
{
 if(! current_user_can('update_core')){return;}
 add_action('init', create_function('$a',"remove_action( 'init', 'wp_version_check' );"),2);
 add_filter('pre_option_update_core','__return_null');
 add_filter('pre_site_transient_update_core','__return_null');
}

remove_action('load-update-core.php','wp_update_plugins');
add_filter('pre_site_transient_update_plugins','__return_null');


//FUNÇÃO PARA RESUMO DE POST COM QUANTIDADE PERSONALIZADA DE CARACTERES

function tamanho_resumo($maxchars) 
		{
         $resumo = get_the_content($post->ID);
         $resumo = substr($resumo,0,$maxchars);
		 $tamanhoresumo=strlen($resumo);
		 if ($tamanhoresumo < $maxchars)
         	echo $resumo;
         else
		 	echo $resumo . '...';
		}
//USO: tamanho_resumo('130');
