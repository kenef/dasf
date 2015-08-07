<?php
// Plugin definition
$plugin = array(
  'title' => t('ASF Internal Page'),
  'icon' => 'radix-taylor-flipped.png',
  'category' => t('ASF'),
  'theme' => 'asf_internal_page',
  'regions' => array(
    'sidebar' => t('Sidebar'),
    'header' => t('Header'),
    'quarter1' => t('Quarter 1 Column'),
    'quarter2' => t('Quarter 2 Column'),
    'footer' => t('Footer'),
  ),
);
