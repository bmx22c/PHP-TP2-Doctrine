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

/* player/show.html.twig */
class __TwigTemplate_ef3f15a05166cfc8cbbc3ce81107025ffd617fbcd94dd2dba8efe1a0382821fc extends Template
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
        $this->parent = $this->loadTemplate("layout.html.twig", "player/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "<div class=\"flex bg-white md:h-min-22 h-min-20\t dark:bg-gray-800 rounded-lg shadow mb-5 px-10 py-4\">
    <h1 class=\"text-2xl block\">#";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["player"] ?? null), "id", [], "any", false, false, false, 4), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["player"] ?? null), "username", [], "any", false, false, false, 4), "html", null, true);
        echo "</h1>
    ";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["player"] ?? null), "email", [], "any", false, false, false, 5), "html", null, true);
        echo "

    <a href=\"/player/show?id=";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["player"] ?? null), "id", [], "any", false, false, false, 7), "html", null, true);
        echo "\">
        <i class=\"fas fa-eye\"></i>
    </a>
    <a href=\"/player/edit?id=";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["player"] ?? null), "id", [], "any", false, false, false, 10), "html", null, true);
        echo "\">
        <i class=\"fas fa-edit\"></i>
    </a>
    <a href=\"/player/delete?id=";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["player"] ?? null), "id", [], "any", false, false, false, 13), "html", null, true);
        echo "\"
       onclick=\"return confirm('Are you sure you want to delete it?')\">
        <i class=\"fas fa-trash\"></i>
    </a>

    </td>
</div>
";
    }

    public function getTemplateName()
    {
        return "player/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 13,  70 => 10,  64 => 7,  59 => 5,  53 => 4,  50 => 3,  46 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"layout.html.twig\" %}
{% block body %}
<div class=\"flex bg-white md:h-min-22 h-min-20\t dark:bg-gray-800 rounded-lg shadow mb-5 px-10 py-4\">
    <h1 class=\"text-2xl block\">#{{ player.id }} {{ player.username }}</h1>
    {{ player.email }}

    <a href=\"/player/show?id={{ player.id }}\">
        <i class=\"fas fa-eye\"></i>
    </a>
    <a href=\"/player/edit?id={{ player.id }}\">
        <i class=\"fas fa-edit\"></i>
    </a>
    <a href=\"/player/delete?id={{ player.id }}\"
       onclick=\"return confirm('Are you sure you want to delete it?')\">
        <i class=\"fas fa-trash\"></i>
    </a>

    </td>
</div>
{% endblock %}", "player/show.html.twig", "/home/bmx22c/DIMSF-TP2-Part2-master/templates/player/show.html.twig");
    }
}
