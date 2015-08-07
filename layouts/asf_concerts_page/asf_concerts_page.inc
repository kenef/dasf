<?php
// Plugin definition
$plugin = array(
  'title' => t('ASF Concerts Page'),
  'icon' => 'radix-taylor-flipped.png',
  'category' => t('ASF'),
  'theme' => 'asf_concerts_page',
  'regions' => array(
    'header' => t('Header'),
    'content' => t('Content'),
    'sponsors' => t('Sponsors'),
    'generalprice' => t('General Price'),
    'reservedprice'=> t('Reserved Price'),
  ),
);
