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
    'subnav' => t('Sub Nav'),
    'content' => t('Content'),
    'sponsors' => t('Sponsors'),
    'location' => t('Location Block'),
    'newsletter' => t('Newsletter Block'),
    'footmenu' => t('Footer Menu'),
    'copy' => t('Copyright Block'),
  ),
);
