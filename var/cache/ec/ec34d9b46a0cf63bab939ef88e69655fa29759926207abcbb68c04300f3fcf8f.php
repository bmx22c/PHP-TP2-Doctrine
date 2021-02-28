<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* layout.html.twig */
class __TwigTemplate_205b988920bf617de85692de6cb0c2a51ec7fcebc482a319b276a94f9cb61b87 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\"/>
    <link href=\"https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css\" integrity=\"sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==\" crossorigin=\"anonymous\" />
    <title>Mon super Site</title>
</head>
<body class=\"flex flex-col min-h-screen\">
<div>
    <nav class=\"bg-gray-800 shadow\">
        <div class=\"max-w-7xl mx-auto px-8\">
            <div class=\"flex items-center justify-between h-16\">
                <div class=\"w-full justify-between flex items-center\">
                    <a class=\"flex-shrink-0 text-white\" href=\"/\">My App</a>
                    <div class=\"md:block\">
                        <a class=\"text-gray-300  hover:text-white px-3 py-2 rounded-md text-sm font-medium\" href=\"/\">Home</a>
                        <a class=\"text-gray-300  hover:text-white px-3 py-2 rounded-md text-sm font-medium\" href=\"/game\">Games</a>
                        <a class=\"text-gray-300  hover:text-white px-3 py-2 rounded-md text-sm font-medium\" href=\"/player\">Players</a>
                        <a class=\"text-gray-300  hover:text-white px-3 py-2 rounded-md text-sm font-medium\" href=\"/score\">Scores</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</div>

<main class=\"flex-grow bg-gray-100 flex flex-col\" role=\"main\">
    <div class=\"flex-grow\t w-full max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8 z-20\">
            ";
        // line 30
        $this->displayBlock('body', $context, $blocks);
        // line 31
        echo "        </div>
    </div>
</main>

<footer class=\"bg-gray-800 w-full py-8\">
    <div class=\"max-w-screen-xl mx-auto px-4\">
        <ul class=\"max-w-screen-md mx-auto text-lg font-light flex flex-wrap justify-between\">
            <li class=\"my-2\">
                <a class=\"text-gray-400 hover:text-gray-100 dark:text-gray-300 dark:hover:text-white transition-colors duration-200\"
                   href=\"#\">
                    &copy Florent CHAMBON - 2021
                </a>
            </li>
        </ul>
    </div>
</footer>

</body>
</html>
";
    }

    // line 30
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  94 => 30,  71 => 31,  69 => 30,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\"/>
    <link href=\"https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css\" integrity=\"sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==\" crossorigin=\"anonymous\" />
    <title>Mon super Site</title>
</head>
<body class=\"flex flex-col min-h-screen\">
<div>
    <nav class=\"bg-gray-800 shadow\">
        <div class=\"max-w-7xl mx-auto px-8\">
            <div class=\"flex items-center justify-between h-16\">
                <div class=\"w-full justify-between flex items-center\">
                    <a class=\"flex-shrink-0 text-white\" href=\"/\">My App</a>
                    <div class=\"md:block\">
                        <a class=\"text-gray-300  hover:text-white px-3 py-2 rounded-md text-sm font-medium\" href=\"/\">Home</a>
                        <a class=\"text-gray-300  hover:text-white px-3 py-2 rounded-md text-sm font-medium\" href=\"/game\">Games</a>
                        <a class=\"text-gray-300  hover:text-white px-3 py-2 rounded-md text-sm font-medium\" href=\"/player\">Players</a>
                        <a class=\"text-gray-300  hover:text-white px-3 py-2 rounded-md text-sm font-medium\" href=\"/score\">Scores</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</div>

<main class=\"flex-grow bg-gray-100 flex flex-col\" role=\"main\">
    <div class=\"flex-grow\t w-full max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8 z-20\">
            {% block body %}{% endblock %}
        </div>
    </div>
</main>

<footer class=\"bg-gray-800 w-full py-8\">
    <div class=\"max-w-screen-xl mx-auto px-4\">
        <ul class=\"max-w-screen-md mx-auto text-lg font-light flex flex-wrap justify-between\">
            <li class=\"my-2\">
                <a class=\"text-gray-400 hover:text-gray-100 dark:text-gray-300 dark:hover:text-white transition-colors duration-200\"
                   href=\"#\">
                    &copy Florent CHAMBON - 2021
                </a>
            </li>
        </ul>
    </div>
</footer>

</body>
</html>
", "layout.html.twig", "/home/bmx22c/DIMSF-TP2-Part2-master/templates/layout.html.twig");
    }
}
