<?php

function nexuse_form_system_theme_settings_alter(&$form, $form_state) {
	$theme_path = drupal_get_path('theme', 'nexuse');
  	$form['settings'] = array(
      '#type' =>'vertical_tabs',
      '#title' => t('Theme settings'),
      '#weight' => 2,
      '#collapsible' => TRUE,
      '#collapsed' => FALSE,
	  '#attached' => array(
					'css' => array(drupal_get_path('theme', 'nexuse') . '/css/drupalet_base/admin.css'),
					'js' => array(
						drupal_get_path('theme', 'nexuse') . '/js/drupalet_admin/admin.js',
					),
			),
  	);
	
	$form['settings']['general_setting'] = array(
      '#type' => 'fieldset',
      '#title' => t('General Settings'),
      '#collapsible' => TRUE,
      '#collapsed' => FALSE,
  );

  $form['settings']['general_setting']['general_setting_tracking_code'] = array(
      '#type' => 'textarea',
      '#title' => t('Tracking Code'),
      '#default_value' => theme_get_setting('general_setting_tracking_code', 'nexuse'),
  );
  
  $form['settings']['custom_css'] = array(
		  '#type' => 'fieldset',
		  '#title' => t('Custom CSS'),
		  '#collapsible' => TRUE,
		  '#collapsed' => FALSE,
	  );

	$form['settings']['custom_css']['custom_css'] = array(
		  '#type' => 'textarea',
		  '#title' => t('Custom CSS'),
		  '#default_value' => theme_get_setting('custom_css', 'nexuse'),
		  '#description'  => t('<strong>Example:</strong><br/>h1 { font-family: \'Metrophobic\', Arial, serif; font-weight: 400; }')
	  );
	
	$form['settings']['footer'] = array(
      '#type' => 'fieldset',
      '#title' => t('Footer settings'),
      '#collapsible' => TRUE,
      '#collapsed' => FALSE,
  	);
	
	$form['settings']['footer']['footer_copyright_message'] = array(
      '#type' => 'textarea',
      '#title' => t('Copyright message'),
      '#default_value' => theme_get_setting('footer_copyright_message', 'nexuse'),
  	);
	
	$form['settings']['footer']['menu_footer'] = array(
      '#type' => 'textarea',
      '#title' => t('Menu Footer'),
      '#default_value' => theme_get_setting('menu_footer', 'nexuse'),
  	);
	
	$form['settings']['header'] = array(
      '#type' => 'fieldset',
      '#title' => t('Header settings'),
      '#collapsible' => TRUE,
      '#collapsed' => FALSE,
  	);
	
	$form['settings']['header']['header_top_right_message'] = array(
      '#type' => 'textarea',
      '#title' => t('Top right message'),
      '#default_value' => theme_get_setting('header_top_right_message', 'nexuse'),
  	);
	
	$form['settings']['header']['header_social_network'] = array(
      '#type' => 'textarea',
      '#title' => t('Social Network'),
      '#default_value' => theme_get_setting('header_social_network', 'nexuse'),
  	);
	
	$form['settings']['blog'] = array(
      '#type' => 'fieldset',
      '#title' => t('Blog settings'),
      '#collapsible' => TRUE,
      '#collapsed' => FALSE,
  	);
	
	$form['settings']['blog']['blog_style'] = array(

      '#title' => t('Blog List Style'),

      '#type' => 'select',

      '#options' => array('on' => t('Standard'), 'off' => t('Grid')),


  	);
	

}