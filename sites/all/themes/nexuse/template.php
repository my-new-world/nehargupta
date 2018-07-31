<?php
global $base_url;

function nexuse_preprocess_html(&$variables) {
	drupal_add_css('http://fonts.googleapis.com/css?family=Lato:100,300,regular,700,900%7COpen+Sans:300%7CIndie+Flower:regular%7COswald:300,regular,700&amp;subset=latin%2Clatin-ext', array('type' => 'external','media' => 'all'));
	drupal_add_css(
'http://fonts.googleapis.com/css?family=PT+Serif%3A400%2Citalic%2C700%2C700italic&amp;ver=4.2.2', array('type' => 'external','media' => 'all'));
	drupal_add_css('http://fonts.googleapis.com/css?family=Lato%3A100%2C100italic%2C300%2C300italic%2C400%2Citalic%2C700%2C700italic%2C900%2C900italic&amp;ver=4.2.2', array('type' => 'external','media' => 'all'));
	drupal_add_css('http://fonts.googleapis.com/css?family=Open+Sans%3A300%2C300italic%2C400%2Citalic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic&amp;ver=4.2.2', array('type' => 'external','media' => 'all'));

	//drupal_add_js(base_path().path_to_theme().'/js/update.js', array('type' => 'file', 'scope' => 'footer'));
}


function nexuse_form_comment_form_alter(&$form, &$form_state) {
  $form['comment_body']['#after_build'][] = 'nexuse_customize_comment_form';
}

function nexuse_customize_comment_form(&$form) {
  $form[LANGUAGE_NONE][0]['format']['#access'] = FALSE;
  return $form;
}

function nexuse_preprocess_page(&$vars) {

	if (isset($vars['node'])) {
		$vars['theme_hook_suggestions'][] = 'page__'. $vars['node']->type;
	}

	//404 page
	$status = drupal_get_http_header("status");
	if($status == "404 Not Found") {
		$vars['theme_hook_suggestions'][] = 'page__404';
	}


	if (isset($vars['node'])) :
		//print $vars['node']->type;
        if($vars['node']->type == 'page'):

            $node = node_load($vars['node']->nid);
            $output = field_view_field('node', $node, 'field_show_page_title', array('label' => 'hidden'));
            $vars['field_show_page_title'] = $output;
			//sidebar
			$output = field_view_field('node', $node, 'field_sidebar', array('label' => 'hidden'));
            $vars['field_sidebar'] = $output;
        endif;
    endif;


}


// Remove superfish css files.
function nexuse_css_alter(&$css) {
	unset($css[drupal_get_path('module', 'system') . '/system.menus.css']);
	unset($css[drupal_get_path('module', 'system') . '/system.theme.css']);

//	unset($css[drupal_get_path('module', 'system') . '/system.base.css']);
}

function nexuse_form_alter(&$form, &$form_state, $form_id) {
	if ($form_id == 'search_block_form') {
		$form['search_block_form']['#title_display'] = 'invisible'; // Toggle label visibilty
		$form['search_block_form']['#default_value'] = t('Search'); // Set a default value for the textfield
		$form['search_block_form']['#attributes']['id'] = array("mod-search-searchword");
		//disabled submit button
		//unset($form['actions']['submit']);
		unset($form['search_block_form']['#title']);
		$form['search_block_form']['#attributes']['onblur'] = "if (this.value == '') {this.value = 'Search';}";
		$form['search_block_form']['#attributes']['onfocus'] = "if (this.value == 'Search') {this.value = '';}";
	}
	if($form_id == 'contact_site_form'){
		$form['mail']['#attributes']['class'] = array("input-contact-form");
		$form['name']['#attributes']['class'] = array("input-contact-form");
		$form['subject']['#attributes']['class'] = array("input-contact-form");
		$form['message']['#attributes']['class'] = array("message-contact-form");
		$form['actions']['submit']['#attributes']['class'] = array('btn btn-success contact-form-button');
	}
	if ($form_id == 'comment_form') {
		$form['comment_filter']['format'] = array(); // nuke wysiwyg from comments
	}

}

function nexuse_textarea($variables) {
  $element = $variables['element'];
  $element['#attributes']['name'] = $element['#name'];
  $element['#attributes']['id'] = $element['#id'];
  $element['#attributes']['cols'] = $element['#cols'];
  $element['#attributes']['rows'] = $element['#rows'];
  _form_set_class($element, array('form-textarea'));

  $wrapper_attributes = array(
    'class' => array('form-textarea-wrapper'),
  );

  // Add resizable behavior.
  if (!empty($element['#resizable'])) {
    $wrapper_attributes['class'][] = 'resizable';
  }

  $output = '<div' . drupal_attributes($wrapper_attributes) . '>';
  $output .= '<textarea' . drupal_attributes($element['#attributes']) . '>' . check_plain($element['#value']) . '</textarea>';
  $output .= '</div>';
  return $output;
}
function nexuse_breadcrumb($variables) {
	$crumbs ='';
	$breadcrumb = $variables['breadcrumb'];
	if (!empty($breadcrumb)) {
		$crumbs .= '';
		foreach($breadcrumb as $value) {

			$crumbs .= $value.'<i class="fa fa-angle-right"></i>';
		}
		$crumbs .= '<span>'.drupal_get_title().'</span>';
		return $crumbs;
	}else{
		return NULL;
	}
}
//custom main menu
function nexuse_menu_tree__main_menu(array $variables) {
	if (preg_match("/\bexpanded\b/i", $variables['tree'])){
	return '<ul class="menu">' . $variables['tree'] . '</ul>';
	} else {
	return '<ul class="sub-menu">' . $variables['tree'] . '</ul>';
	}
}


/**Override Menu theme */
function nexuse_links__system_main_menu(array $variables) {
       $html = "<ul class='menu'>";
    foreach ($variables['links'] as $link) {
        $html .= "<li>".l($link['title'], $link['path'], $link)."</li>";
    }
    $html .= "</ul>";
    return $html;
}

function nexuse_menu_tree__menu_top_menu($variables) {
	$str = '';
	$str .= '<ul id="menuhlng2">';
		$str .= $variables['tree'];
	$str .= '</ul>';

	return $str;
}
function hook_preprocess_page(&$variables) {
       if (arg(0) == 'node' && is_numeric($nid)) {
    if (isset($variables['page']['content']['system_main']['nodes'][$nid])) {
      $variables['node_content'] =& $variables['page']['content']['system_main']['nodes'][$nid];
      if (empty($variables['node_content']['field_show_page_title'])) {
        $variables['node_content']['field_show_page_title'] = NULL;
      }
    }
  }
}

function getRelatedPosts($ntype,$nid){
	$nids = db_query("SELECT n.nid, title FROM {node} n WHERE n.status = 1 AND n.type = :type AND n.nid <> :nid ORDER BY RAND() LIMIT 0,3", array(':type' => $ntype, ':nid' => $nid))->fetchCol();
	$nodes = node_load_multiple($nids);
	$return_string = '' ;
	if (!empty($nodes)):
		foreach ($nodes as $node) :
			$field_image = field_get_items('node', $node, 'field_image_blog');
			$return_string .= '<div class="column1_3 "><div class="post-relative-entry">';
			$return_string .= '<div class="post-relative-thumb"><a href="'.url("node/" . $node->nid).'">';
			$return_string .= theme('image', array('style_name' => '', 'path' => $field_image[0]['uri'], 'attributes'=>array('alt'=>$node->title)));
			$return_string .= '</a></div>';
			$return_string .= '<a class="post-relative-title" href="'.url("node/" . $node->nid).'">';
			$return_string .= $node->title.'</a>';
			$return_string .= '<div class="post-relative-date">'.format_date($node->created, 'custom', 'F n, Y').'</div>';
			$return_string .= '</div></div>';
		endforeach;
	endif;
	return $return_string;
}

function dad_prev_next($nid = null, $ntype = null, $op = 'p') {
  if ($op == 'p') {
    $sql_op = '<';
    $order = 'DESC';
  } else{
    $sql_op = '>';
    $order = 'ASC';
  }
  
  $id = db_query("SELECT n.nid FROM {node} n 
				   WHERE n.nid $sql_op :nid 
				   AND n.status = 1
				   AND n.type = :type
				   ORDER BY n.nid $order
				   LIMIT 1",array(':nid' => $nid, ':type' => $ntype))->fetchCol();
  if ($id == null){
  		return $nid;
  }else{
	  return $id[0];
  }
	
}
