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

/* player/form.html.twig */
class __TwigTemplate_1b8cf93659168110d8b8363e9c43743115b54ced51828150b4df1383fbfb5f10 extends Template
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
        // line 1
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("layout.html.twig", "player/form.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "<form class=\"flex flex-col w-full px-4 py-8 bg-white rounded-lg shadow dark:bg-gray-800 sm:px-6 md:px-8 lg:px-10\" method=\"POST\" action=\"#\">
    <div class=\"flex flex-col mb-2\">
        <div class=\" relative \">
            <input type=\"string\"
                   class=\" rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent\"
                   id=\"username\" aria-describedby=\"username\" placeholder=\"Username\" value=\"";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["player"] ?? null), "username", [], "any", false, false, false, 8), "html", null, true);
        echo "\" name=\"username\">
        </div>
    </div>
    <div class=\"flex flex-col mb-2\">
        <div class=\" relative \">
            <input type=\"email\"
                   class=\" rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent\"

                   id=\"email\" aria-describedby=\"email\" placeholder=\"example@example.com\"
                   value=\"";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["player"] ?? null), "email", [], "any", false, false, false, 17), "html", null, true);
        echo "\" name=\"email\">
        </div>
    </div>

    <button type=\"submit\"  class=\"py-2 px-4  bg-gray-600 hover:bg-gray-700 focus:ring-gray-500 focus:ring-offset-gray-200 text-white w-full transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2  rounded-lg \">Save</button>
</form>
";
    }

    public function getTemplateName()
    {
        return "player/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 17,  57 => 8,  50 => 3,  46 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"layout.html.twig\" %}
{% block body %}
<form class=\"flex flex-col w-full px-4 py-8 bg-white rounded-lg shadow dark:bg-gray-800 sm:px-6 md:px-8 lg:px-10\" method=\"POST\" action=\"#\">
    <div class=\"flex flex-col mb-2\">
        <div class=\" relative \">
            <input type=\"string\"
                   class=\" rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent\"
                   id=\"username\" aria-describedby=\"username\" placeholder=\"Username\" value=\"{{ player.username }}\" name=\"username\">
        </div>
    </div>
    <div class=\"flex flex-col mb-2\">
        <div class=\" relative \">
            <input type=\"email\"
                   class=\" rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent\"

                   id=\"email\" aria-describedby=\"email\" placeholder=\"example@example.com\"
                   value=\"{{ player.email }}\" name=\"email\">
        </div>
    </div>

    <button type=\"submit\"  class=\"py-2 px-4  bg-gray-600 hover:bg-gray-700 focus:ring-gray-500 focus:ring-offset-gray-200 text-white w-full transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2  rounded-lg \">Save</button>
</form>
{% endblock %}", "player/form.html.twig", "/home/bmx22c/DIMSF-TP2-Part2-master/templates/player/form.html.twig");
    }
}
