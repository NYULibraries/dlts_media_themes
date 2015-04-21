<?php

/**
 * Implements hook_css_alter().
 * https://api.drupal.org/api/drupal/modules%21system%21system.api.php/function/hook_css_alter/7
 */
// function dlts_embed_css_alter(&$css) { }

/**
 * Implementation of hook_theme().
 */
function dlts_embed_theme() {
  $items = array();

  // Content theming.
  $items['node'] = array(
    'path' => drupal_get_path('theme', 'dlts_embed') .'/templates',
    'template' => 'object',
  );
  
  $items['node']['template'] = 'node';

  return $items;
}

/**
 * Preprocessor for theme('page').
 */
function dlts_embed_preprocess_page(&$vars) {
  // Show a warning if base theme is not present.
  if (!function_exists('tao_theme') && user_access('administer site configuration')) {
    drupal_set_message(t('The dlts_embed theme requires the !tao base theme in order to work properly.', array('!tao' => l('Tao', 'http://drupal.org/project/tao'))), 'warning');
  }
}
