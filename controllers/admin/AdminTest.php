<?php

Tools::checkPhpVersion();
require_once(_PS_MODULE_DIR_ .'mybasicmodule/classes/comment.class.php');
class AdminTestController extends ModuleAdminController
{
    public function __construct()
    {
        $this->table = 'testcomment';
        $this->className = 'CommentTest';
        $this->identifier = CommentTest::$definition['primary'];

        $this->fields_list = [
            'id' => [
                'title' => 'The id',
                'align' => 'center'
            ]
            ];
        parent::__construct();
    }
}

