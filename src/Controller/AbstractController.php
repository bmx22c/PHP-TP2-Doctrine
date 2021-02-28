<?php

namespace App\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use \Symfony\Component\HttpFoundation\Response;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;
use Twig\TwigFunction;

abstract class AbstractController
{
    public function render($templateName, $data = []):Response
    {
        $loader = new FilesystemLoader(__DIR__ . "/../../templates");
        $twig = new Environment($loader, [
            'cache' => __DIR__ . "/../../var/cache/",
            'debug' => true
        ]);

        $twig->addFunction(new TwigFunction('path', [$this->router, 'generate']));

        return new Response($twig->render($templateName, $data));
        // ob_start();
        // foreach ($data as $k => $v) $$k = $v; // worst line ever
        // include(__DIR__ . "/../../templates/layout.php");
        // $content = ob_get_contents();
        // ob_end_clean();
        // return new Response($content);
    }
    public function redirectTo($path):Response{
        return new RedirectResponse($path);
    }
}