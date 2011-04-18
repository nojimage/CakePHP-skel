<?php

Configure::write('Site.name', __('Your Site Name', true));

// This sets the cookie domain to ".yourdomain.com" thereby making session persists across all sub-domains
ini_set('session.cookie_domain', env('HTTP_BASE'));

// -- read each environment configuration files
require_once(APP . DS . 'libs' . DS . 'load_env_bootstrap.php');
load_env_bootstrap();
