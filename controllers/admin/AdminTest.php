<?php
<<<<<<< HEAD
Tools::checkPhpVersion();

class AdminTestController extends ModuleAdminController{}
?>
=======
//Tools::checkPhpVersion();
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
>>>>>>> 070d0fa62e84ad91f0dcd029a49f5c0676104a25
