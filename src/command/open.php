<?php
namespace varvar\command;

/**
 * 雛形作成
 */
Class open {

    public function __construct() {

    }

    public function create_json() {

        if (!is_file(dirname(__FILE__) . "/varvar.json")) {
            touch("varvar.json");
        }
    }
}