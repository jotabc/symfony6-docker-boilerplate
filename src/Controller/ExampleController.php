<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ExampleController
{
    #[Route('/example', name: 'app_example')]
    public function __invoke(): Response
    {
        $html = '<h1>This is a example of the Controller</h1>';
        return new Response(
            '<html><body>'.$html.'</body></html>'
        );
    }
}
