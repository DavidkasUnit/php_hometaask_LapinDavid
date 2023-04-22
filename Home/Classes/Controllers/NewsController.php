<?php

namespace Phpcourse\Myproject\Classes\Controllers;


use Phpcourse\Myproject\Classes\Interfaces\ControllerMethodName;
use Phpcourse\Myproject\Classes\Rendering\Rendering;
class NewsController implements ControllerMethodName
{
    public function index() : void{

        $news = [
            [
                'title' => 'Перша новина',
                'text' => 'Текст першої новини',
                'date' => '2023-04-20',
            ],
            [
                'title' => 'Друга новина',
                'text' => 'Текст другої новини',
                'date' => '2023-04-22',
            ],
            [
                'title' => 'Третя новина',
                'text' => 'Текст третьої новини',
                'date' => '2023-04-23',
            ],
        ];

            $data =  ['news' => $news,'page' => 'news'];

        new Rendering($data);
    }
}