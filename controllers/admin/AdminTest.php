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
        $this->bootstrap = true;

        $this->fields_list = [
            'id_test' => [
                'title' => 'The id',
                'align' => 'left'
            ],
            'user_id'=>[
                'title'=>'The user id',
                'align'=> 'left',
            ],
            'comment'=>[
                'title'=>'The comment',
            ]
            ];
            $this->addRowAction('edit');
            $this->addRowAction('delete');
            $this->addRowAction('view');
        parent::__construct();
    }
    public function renderForm()
    {
        $this->fields_form= [
            'legend'=>[
                'title'=>'Nowy komentarz',
                'icon'=>'icon-cog'
            ],
            'input'=>[
                [
                'type'=>'text',
                'label'=>'The user',
                'name'=>'user_id',
                'class'=>'input fixed-with-sm',
                'required'=>true,
                'empty_message'=>'Please fill the input'
                ],
                [
                    'type'=>'text',
                    'label'=>'The comment',
                    'name'=>'comment',
                    'class'=>'input fixed-with-sm',
                    'required'=>true,
                    'empty_message'=>'Please fill the input' 
                
                ]
                ],
            
           
                'submit'=>[
                    'title'=>'Submit a comment'
                ]
                ];
                
        
            return parent::renderForm();
    }
}

