<?php

class Attributes_model extends Common_model {

    public function __construct() {
        parent::__construct();
        $this->table_name = "attributes";
    }
}
