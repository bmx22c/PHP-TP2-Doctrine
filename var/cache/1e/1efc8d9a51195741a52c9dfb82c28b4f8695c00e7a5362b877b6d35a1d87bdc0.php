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

/* score/index.html.twig */
class __TwigTemplate_40e66a175065f6805c0653c678f8765d611f00cd7bdf481672f601f784630410 extends Template
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
        $this->parent = $this->loadTemplate("layout.html.twig", "score/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "<div class=\"grid grid-cols-3 gap-4\">

    <table class=\"col-span-2 table p-4 bg-white shadow rounded-lg w-full \">
        <thead>
        <tr class=\"text-left\">
            <th class=\"border-b-2 p-4 dark:border-dark-5 whitespace-nowrap font-normal text-gray-900\">
                User
            </th>
            <th class=\"border-b-2 p-4 dark:border-dark-5 whitespace-nowrap font-normal text-gray-900\">
                Game
            </th>
            <th class=\"border-b-2 p-4 dark:border-dark-5 whitespace-nowrap font-normal text-gray-900\">
                Score
            </th>
            <th class=\"border-b-2 p-4 dark:border-dark-5 whitespace-nowrap font-normal text-gray-900\">

            </th>
        </tr>
        </thead>
        <tbody>
            ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["score"]) {
            // line 24
            echo "                <tr class=\"text-gray-700\">
                    <td class=\"border-b-2 p-4 dark:border-dark-5\">
                        ";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "player", [], "any", false, false, false, 26), "username", [], "any", false, false, false, 26), "html", null, true);
            echo "
                    </td>
                    <td class=\"border-b-2 p-4 dark:border-dark-5\">
                        ";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "game", [], "any", false, false, false, 29), "name", [], "any", false, false, false, 29), "html", null, true);
            echo "
                    </td>
                    <td class=\"border-b-2 p-4 dark:border-dark-5\">
                        ";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["score"], "score", [], "any", false, false, false, 32), "html", null, true);
            echo "
                    </td>
                    <td class=\"border-b-2 p-4 dark:border-dark-5\">
                        <a href=\"/score/delete?id=";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["score"], "id", [], "any", false, false, false, 35), "html", null, true);
            echo "\"
                        onclick=\"return confirm('Are you sure you want to delete it?')\">
                            <i class=\"fas fa-trash\"></i>
                        </a>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['score'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "        </tbody>
    </table>
    <div>
        <form action=\"/score/add#\"
              class=\"mb-6 flex flex-col w-full max-w-md px-4 py-8 bg-white rounded-lg shadow dark:bg-gray-800 sm:px-6 md:px-8 lg:px-10\">
            <div class=\"self-center mb-6 text-xl font-light text-gray-600 sm:text-2xl dark:text-white\">
                Add score
            </div>
            <div>
                <form action=\"#\" autoComplete=\"off\">
                    <div class=\"flex flex-col mb-2\">
                        <div class=\"flex relative \">
                            <select class=\"block w-full text-gray-700 py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-primary-500 focus:border-primary-500\"
                                    id=\"game\" name=\"game\" required>
                                <option disabled selected>game</option>
                                ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["games"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["game"]) {
            // line 58
            echo "                                    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["game"], "id", [], "any", false, false, false, 58), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["game"], "name", [], "any", false, false, false, 58), "html", null, true);
            echo "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['game'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "                            </select>
                        </div>
                    </div>
                    <div class=\"flex flex-col mb-2\">
                        <div class=\"flex relative \">

                            <select class=\"block w-full text-gray-700 py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-primary-500 focus:border-primary-500\"
                                    id=\"player\" name=\"player\" required>
                                <option disabled selected>player</option>
                                ";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["players"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["player"]) {
            // line 70
            echo "                                <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["player"], "id", [], "any", false, false, false, 70), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["player"], "username", [], "any", false, false, false, 70), "html", null, true);
            echo "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['player'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "                            </select>
                        </div>
                    </div>
                    <div class=\"flex flex-col mb-6\">
                        <div class=\"flex relative \">
                            <input class=\" float-left w-1 flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent\"
                                   type=\"number\" class=\"form-control mr-sm-3 pull-right\" name=\"score\" id=\"score\"
                                   placeholder=\"score\" value=\"0\">
                        </div>
                    </div>
                    <div class=\"flex w-full\">
                        <button type=\"submit\"
                                class=\"py-2 px-4  bg-purple-600 hover:bg-purple-700 focus:ring-purple-500 focus:ring-offset-purple-200 text-white w-full transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2  rounded-lg \">
                            Add Score
                        </button>
                    </div>
                </form>
            </div>
        </form>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "score/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 72,  158 => 70,  154 => 69,  143 => 60,  132 => 58,  128 => 57,  111 => 42,  98 => 35,  92 => 32,  86 => 29,  80 => 26,  76 => 24,  72 => 23,  50 => 3,  46 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"layout.html.twig\" %}
{% block body %}
<div class=\"grid grid-cols-3 gap-4\">

    <table class=\"col-span-2 table p-4 bg-white shadow rounded-lg w-full \">
        <thead>
        <tr class=\"text-left\">
            <th class=\"border-b-2 p-4 dark:border-dark-5 whitespace-nowrap font-normal text-gray-900\">
                User
            </th>
            <th class=\"border-b-2 p-4 dark:border-dark-5 whitespace-nowrap font-normal text-gray-900\">
                Game
            </th>
            <th class=\"border-b-2 p-4 dark:border-dark-5 whitespace-nowrap font-normal text-gray-900\">
                Score
            </th>
            <th class=\"border-b-2 p-4 dark:border-dark-5 whitespace-nowrap font-normal text-gray-900\">

            </th>
        </tr>
        </thead>
        <tbody>
            {% for score in scores %}
                <tr class=\"text-gray-700\">
                    <td class=\"border-b-2 p-4 dark:border-dark-5\">
                        {{ score.player.username }}
                    </td>
                    <td class=\"border-b-2 p-4 dark:border-dark-5\">
                        {{ score.game.name }}
                    </td>
                    <td class=\"border-b-2 p-4 dark:border-dark-5\">
                        {{ score.score }}
                    </td>
                    <td class=\"border-b-2 p-4 dark:border-dark-5\">
                        <a href=\"/score/delete?id={{ score.id }}\"
                        onclick=\"return confirm('Are you sure you want to delete it?')\">
                            <i class=\"fas fa-trash\"></i>
                        </a>
                    </td>
                </tr>
            {% endfor %}
        </tbody>
    </table>
    <div>
        <form action=\"/score/add#\"
              class=\"mb-6 flex flex-col w-full max-w-md px-4 py-8 bg-white rounded-lg shadow dark:bg-gray-800 sm:px-6 md:px-8 lg:px-10\">
            <div class=\"self-center mb-6 text-xl font-light text-gray-600 sm:text-2xl dark:text-white\">
                Add score
            </div>
            <div>
                <form action=\"#\" autoComplete=\"off\">
                    <div class=\"flex flex-col mb-2\">
                        <div class=\"flex relative \">
                            <select class=\"block w-full text-gray-700 py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-primary-500 focus:border-primary-500\"
                                    id=\"game\" name=\"game\" required>
                                <option disabled selected>game</option>
                                {% for game in games %}
                                    <option value=\"{{ game.id }}\">{{ game.name }}</option>
                                {% endfor %}
                            </select>
                        </div>
                    </div>
                    <div class=\"flex flex-col mb-2\">
                        <div class=\"flex relative \">

                            <select class=\"block w-full text-gray-700 py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-primary-500 focus:border-primary-500\"
                                    id=\"player\" name=\"player\" required>
                                <option disabled selected>player</option>
                                {% for player in players %}
                                <option value=\"{{ player.id }}\">{{ player.username }}</option>
                                {% endfor %}
                            </select>
                        </div>
                    </div>
                    <div class=\"flex flex-col mb-6\">
                        <div class=\"flex relative \">
                            <input class=\" float-left w-1 flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent\"
                                   type=\"number\" class=\"form-control mr-sm-3 pull-right\" name=\"score\" id=\"score\"
                                   placeholder=\"score\" value=\"0\">
                        </div>
                    </div>
                    <div class=\"flex w-full\">
                        <button type=\"submit\"
                                class=\"py-2 px-4  bg-purple-600 hover:bg-purple-700 focus:ring-purple-500 focus:ring-offset-purple-200 text-white w-full transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2  rounded-lg \">
                            Add Score
                        </button>
                    </div>
                </form>
            </div>
        </form>
    </div>
</div>
{% endblock %}", "score/index.html.twig", "/home/bmx22c/DIMSF-TP2-Part2-master/templates/score/index.html.twig");
    }
}
