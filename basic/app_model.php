<?php

/**
 * Application model for Cake.
 */
class AppModel extends Model {

    public $actsAs = array();

    function begin() {
        $this->getDataSource()->begin($this);
    }

    function commit() {
        $this->getDataSource()->commit($this);
    }

    function rollback() {
        $this->getDataSource()->rollback($this);
    }

}
