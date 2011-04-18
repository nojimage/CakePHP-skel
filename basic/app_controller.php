<?php

/**
 * Application Controller
 *
 * @property AuthComponent $Auth
 * @property SessionComponent $Session
 * @property RequestHandlerComponent $RequestHandler
 */
class AppController extends Controller {

    public $uses = array();
    public $components = array(
        'DebugKit.Toolbar',
        'Session',
        'RequestHandler',
    );
    public $helpers = array(
        'Session',
        'Html',
        'Form',
        'Js',
    );
    public $view = 'Theme';
    public $theme = 'default';

    public function beforeFilter() {

    }

    public function beforeRender() {

    }

    public function afterFilter() {

    }

}
