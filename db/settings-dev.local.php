<?php
$config_directories['sync'] = '../config/sync';
$databases['default']['default'] = array (
  'database' => 'drupal8_dev',
  'username' => 'drupal',
  'password' => 'drupal',
  'prefix' => '',
  'host' => '127.0.0.1',
  'port' => '3306',
  'namespace' => 'Drupal\\Core\\Database\\Driver\\mysql',
  'driver' => 'mysql',
);
$settings['trusted_host_patterns'] = [
  '^drupal8-dev\.w$',
];
$config['environment_indicator.indicator']['name'] = 'Local Development';
$config['environment_indicator.indicator']['bg_color'] = '#30703d';
