<?php

namespace Configuru\Console;

class Application
{
    public function run()
    {
        $app = \Configuru\Console\Symfony\Application::build();
        $app->run();
    }
}