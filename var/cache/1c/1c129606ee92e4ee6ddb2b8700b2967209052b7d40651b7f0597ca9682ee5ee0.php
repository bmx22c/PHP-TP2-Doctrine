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

/* game/show.html.twig */
class __TwigTemplate_795f1879a91882f6c59774ae5a1ee44580726312cdee57f32e0709ff8ced50b4 extends Template
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
        $this->parent = $this->loadTemplate("layout.html.twig", "game/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "<div class=\"flex bg-white md:h-60 h-24\t dark:bg-gray-800 rounded-lg shadow mb-5\">
    <div class=\"flex-none w-24 md:w-60  relative\">
        <img src=\"";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["game"] ?? null), "image", [], "any", false, false, false, 5), "html", null, true);
        echo "\" class=\"absolute rounded-lg inset-0 w-full h-full object-cover\"/>
    </div>
    <div class=\"flex-auto p-6\">
        <div class=\"flex flex-wrap\">
            <h1 class=\"flex-auto text-xl font-semibold dark:text-gray-50\">
                ";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["game"] ?? null), "name", [], "any", false, false, false, 10), "html", null, true);
        echo "
            </h1>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "game/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 10,  54 => 5,  50 => 3,  46 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"layout.html.twig\" %}
{% block body %}
<div class=\"flex bg-white md:h-60 h-24\t dark:bg-gray-800 rounded-lg shadow mb-5\">
    <div class=\"flex-none w-24 md:w-60  relative\">
        <img src=\"{{ game.image }}\" class=\"absolute rounded-lg inset-0 w-full h-full object-cover\"/>
    </div>
    <div class=\"flex-auto p-6\">
        <div class=\"flex flex-wrap\">
            <h1 class=\"flex-auto text-xl font-semibold dark:text-gray-50\">
                {{ game.name }}
            </h1>
        </div>
    </div>
</div>
{% endblock %}", "game/show.html.twig", "/home/bmx22c/DIMSF-TP2-Part2-master/templates/game/show.html.twig");
    }
}
