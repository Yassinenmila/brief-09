<?php

namespace app\core;
class Controller
{

    protected function view(string $view, array $data=[])
    {
        extract($data);

        $viewfile = __DIR__ . '/../views/pages/' . $view . '.php';
        $layoutFile = __DIR__ . '/../views/layout/main.php';

        if (!file_exists($viewfile)) {
            throw new \Exception("View $view not found");
        }

        require $layoutFile;
    }
}
