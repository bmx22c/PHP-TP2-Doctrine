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

/* game/index.html.twig */
class __TwigTemplate_a60808b026362ae246dc19e41e2c76e11c633330d45cd52736df64bac48dc668 extends Template
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
        $this->parent = $this->loadTemplate("layout.html.twig", "game/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "<h1 class=\"text-5xl\">Games </h1>
<a  href=\"/game/add\" class=\"mb-10 px-4 py-2 inline-flex hover:bg-pink-500 bg-pink-600 text-white rounded-full justify-center items-center\"><i class=\"fas fa-plus\"></i>
</a>
";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["games"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["game"]) {
            // line 8
            echo "
<div class=\"flex bg-white md:h-60 h-24\t dark:bg-gray-800 rounded-lg shadow mb-5\">
    <div class=\"flex-none w-24 md:w-60  relative\">
        <img src=\"";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["game"], "image", [], "any", false, false, false, 11), "html", null, true);
            echo "\" class=\"absolute rounded-lg inset-0 w-full h-full object-cover\"/>
    </div>
    <div class=\"flex-auto p-6\">
        <div class=\"flex flex-wrap\">
            <h1 class=\"flex-auto text-xl font-semibold dark:text-gray-50\">
                ";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["game"], "name", [], "any", false, false, false, 16), "html", null, true);
            echo "
            </h1>
            <div class=\"text-xl font-semibold text-gray-500 dark:text-gray-300\">
                <a href=\"/game/show?id=";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["game"], "id", [], "any", false, false, false, 19), "html", null, true);
            echo "\">
                    <i class=\"fas fa-eye\"></i>
                </a>
                <a href=\"/game/edit?id=";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["game"], "id", [], "any", false, false, false, 22), "html", null, true);
            echo "\">
                    <i class=\"fas fa-edit\"></i>
                </a>
                <a href=\"/game/delete?id=";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["game"], "id", [], "any", false, false, false, 25), "html", null, true);
            echo "\"
                   onclick=\"return confirm('Are you sure you want to delete it?')\">
                    <i class=\"fas fa-trash\"></i>
                </a>
            </div>
        </div>
    </div>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['game'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "game/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 25,  84 => 22,  78 => 19,  72 => 16,  64 => 11,  59 => 8,  55 => 7,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"layout.html.twig\" %}

{% block body %}
<h1 class=\"text-5xl\">Games </h1>
<a  href=\"/game/add\" class=\"mb-10 px-4 py-2 inline-flex hover:bg-pink-500 bg-pink-600 text-white rounded-full justify-center items-center\"><i class=\"fas fa-plus\"></i>
</a>
{% for game in games %}

<div class=\"flex bg-white md:h-60 h-24\t dark:bg-gray-800 rounded-lg shadow mb-5\">
    <div class=\"flex-none w-24 md:w-60  relative\">
        <img src=\"{{ game.image }}\" class=\"absolute rounded-lg inset-0 w-full h-full object-cover\"/>
    </div>
    <div class=\"flex-auto p-6\">
        <div class=\"flex flex-wrap\">
            <h1 class=\"flex-auto text-xl font-semibold dark:text-gray-50\">
                {{ game.name }}
            </h1>
            <div class=\"text-xl font-semibold text-gray-500 dark:text-gray-300\">
                <a href=\"/game/show?id={{ game.id }}\">
                    <i class=\"fas fa-eye\"></i>
                </a>
                <a href=\"/game/edit?id={{ game.id }}\">
                    <i class=\"fas fa-edit\"></i>
                </a>
                <a href=\"/game/delete?id={{ game.id }}\"
                   onclick=\"return confirm('Are you sure you want to delete it?')\">
                    <i class=\"fas fa-trash\"></i>
                </a>
            </div>
        </div>
    </div>
</div>
{% endfor %}
{% endblock %}", "game/index.html.twig", "/home/bmx22c/DIMSF-TP2-Part2-master/templates/game/index.html.twig");
    }
}
