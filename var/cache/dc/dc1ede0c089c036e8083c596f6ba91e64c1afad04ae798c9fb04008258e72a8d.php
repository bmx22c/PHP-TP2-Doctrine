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

/* game/form.html.twig */
class __TwigTemplate_a87d28a03e5d76443ad71d53f8be7c9d002fad01dce8ca9fd9fb38fa720cf53f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("layout.html.twig", "game/form.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "<form class=\"flex flex-col w-full px-4 py-8 bg-white rounded-lg shadow dark:bg-gray-800 sm:px-6 md:px-8 lg:px-10\" method=\"POST\" action=\"#\">
    <div class=\"flex flex-col mb-2\">
        <div class=\" relative \">
            <input type=\"string\"
                   class=\" rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent\"
                   id=\"name\" aria-describedby=\"name\" placeholder=\"Name\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["game"] ?? null), "name", [], "any", false, false, false, 9), "html", null, true);
        echo "\" name=\"name\">
        </div>
    </div>
    <div class=\"flex flex-col mb-2\">
        <div class=\" relative \">
            <input type=\"string\"
                   class=\" rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent\"

                   id=\"image\" aria-describedby=\"image\" placeholder=\"URL\"
                   value=\"";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["game"] ?? null), "image", [], "any", false, false, false, 18), "html", null, true);
        echo "\" name=\"image\">
        </div>
    </div>

    <button type=\"submit\"  class=\"py-2 px-4  bg-gray-600 hover:bg-gray-700 focus:ring-gray-500 focus:ring-offset-gray-200 text-white w-full transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2  rounded-lg \">Save</button>


</form>
";
    }

    public function getTemplateName()
    {
        return "game/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 18,  57 => 9,  50 => 4,  46 => 3,  35 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends \"layout.html.twig\" %}
{% block body %}
<form class=\"flex flex-col w-full px-4 py-8 bg-white rounded-lg shadow dark:bg-gray-800 sm:px-6 md:px-8 lg:px-10\" method=\"POST\" action=\"#\">
    <div class=\"flex flex-col mb-2\">
        <div class=\" relative \">
            <input type=\"string\"
                   class=\" rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent\"
                   id=\"name\" aria-describedby=\"name\" placeholder=\"Name\" value=\"{{ game.name }}\" name=\"name\">
        </div>
    </div>
    <div class=\"flex flex-col mb-2\">
        <div class=\" relative \">
            <input type=\"string\"
                   class=\" rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent\"

                   id=\"image\" aria-describedby=\"image\" placeholder=\"URL\"
                   value=\"{{ game.image }}\" name=\"image\">
        </div>
    </div>

    <button type=\"submit\"  class=\"py-2 px-4  bg-gray-600 hover:bg-gray-700 focus:ring-gray-500 focus:ring-offset-gray-200 text-white w-full transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2  rounded-lg \">Save</button>


</form>
{% endblock %}", "game/form.html.twig", "/home/bmx22c/DIMSF-TP2-Part2-master/templates/game/form.html.twig");
    }
}
