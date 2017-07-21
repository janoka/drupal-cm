<?php
$config['environment_indicator.indicator']['name'] = 'Live';
$config['environment_indicator.indicator']['bg_color'] = '#a2000b';

$config_directories['sync'] = '../config/sync';
$databases['default']['default'] = array (
  'database' => 'drupal8_live',
  'username' => 'drupal',
  'password' => 'drupal',
  'prefix' => '',
  'host' => '127.0.0.1',
  'port' => '3306',
  'namespace' => 'Drupal\\Core\\Database\\Driver\\mysql',
  'driver' => 'mysql',
);
$settings['trusted_host_patterns'] = [
  '^drupal8-live\.w$',
];

# $settings['config_readonly'] = TRUE;

