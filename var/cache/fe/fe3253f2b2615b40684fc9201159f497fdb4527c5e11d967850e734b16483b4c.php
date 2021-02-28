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

/* player/index.html.twig */
class __TwigTemplate_65e4b2c142797e53979fdfd33abffc328dc6e0aa689fb1fbacdbbe5a18de60e9 extends Template
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
        $this->parent = $this->loadTemplate("layout.html.twig", "player/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "<h1 class=\"text-5xl\">Player </h1>
<a href=\"/player/add\"
   class=\"mb-10 px-4 py-2 inline-flex hover:bg-pink-500 bg-pink-600 text-white rounded-full justify-center items-center\"><i
            class=\"fas fa-plus\"></i>
</a>

<div class=\"grid grid-cols-5 gap-4\">
    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["players"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["player"]) {
            // line 11
            echo "        <div class=\"shadow-lg rounded float-left bg-white dark:bg-gray-800 p-4\">
            <div class=\"flex-row gap-4 flex justify-center items-center\">
                <div class=\"flex-shrink-0\">

                </div>
                <div class=\" flex flex-col\">
                    <span class=\"text-gray-600 dark:text-white text-lg font-medium\">
                        ";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["player"], "username", [], "any", false, false, false, 18), "html", null, true);
            echo "
                    </span>
                    <span class=\"text-gray-400 text-xs\">
                        ";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["player"], "email", [], "any", false, false, false, 21), "html", null, true);
            echo "
                    </span>
                    <span class=\"text-gray-400 text-xs\">

                        <a class=\"hover:text-gray-600\" href=\"/player/show?id=";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["player"], "id", [], "any", false, false, false, 25), "html", null, true);
            echo "\">
                            <i class=\"fas fa-eye\"></i>
                        </a>
                        <a class=\"hover:text-gray-600\" href=\"/player/edit?id=";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["player"], "id", [], "any", false, false, false, 28), "html", null, true);
            echo "\">
                            <i class=\"fas fa-edit\"></i>
                        </a>
                        <a class=\"hover:text-gray-600\" href=\"/player/delete?id=";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["player"], "id", [], "any", false, false, false, 31), "html", null, true);
            echo "\"
                           onclick=\"return confirm('Are you sure you want to delete it?')\">
                            <i class=\"fas fa-trash\"></i>
                        </a>
                    </span>

                </div>
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['player'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "player/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 41,  97 => 31,  91 => 28,  85 => 25,  78 => 21,  72 => 18,  63 => 11,  59 => 10,  50 => 3,  46 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"layout.html.twig\" %}
{% block body %}
<h1 class=\"text-5xl\">Player </h1>
<a href=\"/player/add\"
   class=\"mb-10 px-4 py-2 inline-flex hover:bg-pink-500 bg-pink-600 text-white rounded-full justify-center items-center\"><i
            class=\"fas fa-plus\"></i>
</a>

<div class=\"grid grid-cols-5 gap-4\">
    {% for player in players %}
        <div class=\"shadow-lg rounded float-left bg-white dark:bg-gray-800 p-4\">
            <div class=\"flex-row gap-4 flex justify-center items-center\">
                <div class=\"flex-shrink-0\">

                </div>
                <div class=\" flex flex-col\">
                    <span class=\"text-gray-600 dark:text-white text-lg font-medium\">
                        {{ player.username }}
                    </span>
                    <span class=\"text-gray-400 text-xs\">
                        {{ player.email }}
                    </span>
                    <span class=\"text-gray-400 text-xs\">

                        <a class=\"hover:text-gray-600\" href=\"/player/show?id={{ player.id }}\">
                            <i class=\"fas fa-eye\"></i>
                        </a>
                        <a class=\"hover:text-gray-600\" href=\"/player/edit?id={{ player.id }}\">
                            <i class=\"fas fa-edit\"></i>
                        </a>
                        <a class=\"hover:text-gray-600\" href=\"/player/delete?id={{ player.id }}\"
                           onclick=\"return confirm('Are you sure you want to delete it?')\">
                            <i class=\"fas fa-trash\"></i>
                        </a>
                    </span>

                </div>
            </div>
        </div>
    {% endfor %}
</div>
{% endblock %}", "player/index.html.twig", "/home/bmx22c/DIMSF-TP2-Part2-master/templates/player/index.html.twig");
    }
}
