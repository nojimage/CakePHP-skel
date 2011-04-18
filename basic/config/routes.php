<?php

/**
 * Routes Configuration
 */
Router::connect('/', array('controller' => 'pages', 'action' => 'display', 'home'));

Router::connect('/pages/*', array('controller' => 'pages', 'action' => 'display'));
