<?php

//use PrestaShop\Classes\module\Module.php

/**
* 2007-2022 PrestaShop
*
* NOTICE OF LICENSE
*

* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author    PrestaShop SA <contact@prestashop.com>
*  @copyright 2007-2022 PrestaShop SA
*  @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA

*/

use PrestaShop\PrestaShop\Core\Module\WidgetInterface;
use PrestaShop\Module\Mbo\RecommendedModule\RecommendedModule;

if (!defined('_PS_VERSION_')) {
    exit;
}

//class MyBasicModule extends Module implements WidgetInterface
class MyBasicModule extends Module implements WidgetInterface
{
    public $name;
    public $templateFile;
    public $tab;
    public $version;
    public $autor;
   

    public function __construct()
    {
        $this->name = "mybasicmodule";
        $this->tab = "front_office_features";
        $this->version = "1.0";
        $this->autor = "Grzegorz Hys";
        $this->need_instance = 0;
        $this->ps_version_compilancy = [
            "min" => "1.6",
            "max" => _PS_VERSION_
        ];
        $this->bootstrap = true;

        parent::__construct();

        $this->displayName = $this->l("My very first module");
        $this->description = $this->l("This is a great testing module");
        $this->confirmrUninstall = $this->l("Aru you crayzy, you are going to unistall a grat module ?");
        $this->templateFile = "module:mybasicmodule/views/templates/hook/footer.tpl";
        $this->templateFile = "module:mybasicmodule/views/templates/hook/firstFooter.tpl";
    }
    // install method 
    public function install()
    {
        return
            parent::install()
            && $this->registerHook('registerGDPRConsent')
            && $this->dbInstall();       
    }
    //uninstall method 
    public function uninstall():bool
    {
        return  parent::uninstall();
    }
    public function dbInstall(){
        return true;
    }
   /*  
  public function hookdisplayFooter($params)
    {
       // print_r($this->context);
        $this->context->smarty->assign(
            [
                'mojtekst' => "Grzegorz Hys"
            ]
        );
        return $this->fetch("module:mybasicmodule/views/templates/hook/firstFooter.tpl");
    }
  public function hookdisplayNavFullWidth($params)
    {
        $this->context->smarty->assign(
            [
                'idcart' => $this->context->cart->id,
                'myparamtest' => "Prestashop developer",
                'myparamlog' => $this->context->cookie->customer_lastname
            ]
        );   
        return $this->fetch("module:mybasicmodule/views/templates/hook/footer.tpl"); 
    }*/
    public function renderWidget($hookName , array $configuration)
    {    
        return $this->fetch("module:mybasicmodule/views/templates/hook/footer.tpl", $this->getCacheId('mybasicmodule'));
        
    }

    public function getWidgetVariables($hookName, array $configuration)
    {   
        return true;
    }

}