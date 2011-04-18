<?php

/**
 * This is core configuration file.
 */
//date_default_timezone_set('UTC');
/**
 * CakePHP Debug Level:
 */
Configure::write('debug', 0);

/**
 * CakePHP Log Level:
 */
Configure::write('log', true);

/**
 * Application wide charset encoding
 */
Configure::write('App.encoding', 'UTF-8');

/**
 * Uncomment the define below to use CakePHP prefix routes.
 */
Configure::write('Routing.prefixes', array('admin'));

/**
 * Turn off all caching application-wide.
 */
//Configure::write('Cache.disable', true);

/**
 * Enable cache checking.
 */
//Configure::write('Cache.check', true);

/**
 * Defines the default error type when using the log() function.
 */
define('LOG_ERROR', 2);

/**
 * The preferred session handling method. Valid values:
 */
Configure::write('Session.save', 'php');
#Configure::write('Session.save', 'cake');
#Configure::write('Session.save', 'app_session');

/**
 * The model name to be used for the session model.
 */
//Configure::write('Session.model', 'Session');

/**
 * The name of the table used to store CakePHP database sessions.
 */
//Configure::write('Session.table', 'cake_sessions');

/**
 * The DATABASE_CONFIG::$var to use for database session handling.
 */
//Configure::write('Session.database', 'default');

/**
 * The name of CakePHP's session cookie.
 */
Configure::write('Session.cookie', 'CAKEPHP');

/**
 * Session time out time (in seconds).
 */
Configure::write('Session.timeout', '120');

/**
 * If set to false, sessions are not automatically started.
 */
Configure::write('Session.start', true);

/**
 * When set to false, HTTP_USER_AGENT will not be checked in the session.
 */
Configure::write('Session.checkAgent', true);

/**
 * The level of CakePHP security.
 */
Configure::write('Security.level', 'high');

/**
 * A random string used in security hashing methods.
 */
Configure::write('Security.salt', 'DYhG93b0qyJfIxfs2guVoUubWwvniR2G0FgaC9mi');

/**
 * A random numeric string (digits only) used to encrypt/decrypt strings.
 */
Configure::write('Security.cipherSeed', '76859309657453542496749683645');

/**
 * Apply timestamps with the last modified time to static assets (js, css, images).
 */
//Configure::write('Asset.timestamp', true);
/**
 * Compress CSS output by removing comments, whitespace, repeating tags, etc.
 */
//Configure::write('Asset.filter.css', 'css.php');

/**
 * Plug in your own custom JavaScript compressor by dropping a script in your webroot to handle the
 * output, and setting the config below to the name of the script.
 */
//Configure::write('Asset.filter.js', 'custom_javascript_output_filter.php');

/**
 * The classname and database used in CakePHP's access control lists.
 */
Configure::write('Acl.classname', 'DbAcl');
Configure::write('Acl.database', 'default');

/**
 * Cache Engine Configuration
 */
Cache::config('default', array('engine' => 'File'));
