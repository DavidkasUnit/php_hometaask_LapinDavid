<?php

namespace Phpcourse\Myproject\Classes\Rendering;

use Phpcourse\Myproject\Classes\Traits\DebugTrait;
use Smarty;

class Rendering{
    use DebugTrait;
    public function __construct(array $data){
        foreach ($data as $key => $value){
            //echo $key . ' = ' . $value . '<br>';
            self::debugConsole($key . ' = ' . $value . '<br>');
        }
        $smarty = new Smarty();
        $smarty->setTemplateDir('templates/1');
        $smarty->setConfigDir('templates/config');
        $smarty->setCompileDir('templates/compile');
        $smarty->setCacheDir('templates/cache');
//        $smarty->testInstall();
        $smarty->assign($data);
        $smarty->display('index.tpl');

    }
}
