<?php

/**
 * @file
 * Lagoon Drupal 8 production environment configuration file.
 *
 * This file will only be included on production environments.
 *
 * It contains some defaults that the Lagoon team suggests, please edit them as required.
 */

// Don't show any error messages on the site (will still be shown in watchdog)
$config['system.logging']['error_level'] = 'hide';

// Expiration of cached pages on Varnish to 15 min.
$config['system.performance']['cache']['page']['max_age'] = 900;

// Disable CSS and JS Aggregation, as we don't have persistent storage for this Project
$config['system.performance']['css']['preprocess'] = 0;
$config['system.performance']['js']['preprocess'] = 0;

// Disabling stage file proxy on production, with that the module can be enabled even on production.
$config['stage_file_proxy.settings']['origin'] = FALSE;
