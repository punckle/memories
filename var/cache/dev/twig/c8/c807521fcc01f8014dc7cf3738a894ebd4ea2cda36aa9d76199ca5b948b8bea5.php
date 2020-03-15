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

/* memory/index.html.twig */
class __TwigTemplate_47f4d92e9ef81989779c420882cb71e2e3ebc677bf5a036bca663337c020e043 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "memory/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "memory/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "memory/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Souvenirs, souvenirs";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/memory.css"), "html", null, true);
        echo "\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "
    <header class=\"masthead text-center text-white d-flex\">
        <div class=\"container my-auto\">
            <div class=\"row\">
                <div class=\"col-lg-10 mx-auto\">
                    <h1 class=\"text-uppercase\">
                        <strong>Souvenirs, souvenirs</strong>
                    </h1>
                    <br>
                </div>
            </div>
        </div>
    </header>
    <div class=\"container\">
        <h1 class=\"text-center mt-5 mb-5\">Les derniers souvenirs ajoutés</h1>
        <div class=\"row\">
            ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["latestMemories"]) || array_key_exists("latestMemories", $context) ? $context["latestMemories"] : (function () { throw new RuntimeError('Variable "latestMemories" does not exist.', 26, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["latestMemory"]) {
            // line 27
            echo "                <div class=\"col-md-4\">
                    <div class=\"card bg-light mb-3\">
                        <div class=\"image_outer_container\">
                            <div class=\"image_inner_container text-center\">
                                <img
                                ";
            // line 32
            if (preg_match("{^(https)://}", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["latestMemory"], "user", [], "any", false, false, false, 32), "profilePicture", [], "any", false, false, false, 32))) {
                // line 33
                echo "                                    src=\"";
                (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["latestMemory"], "user", [], "any", false, true, false, 33), "profilePicture", [], "any", true, true, false, 33) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["latestMemory"], "user", [], "any", false, true, false, 33), "profilePicture", [], "any", false, false, false, 33)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["latestMemory"], "user", [], "any", false, true, false, 33), "profilePicture", [], "any", false, false, false, 33), "html", null, true))) : (print (null)));
                echo "\"
                                ";
            } else {
                // line 35
                echo "                                    src=\"/uploads/";
                (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["latestMemory"], "user", [], "any", false, true, false, 35), "profilePicture", [], "any", true, true, false, 35) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["latestMemory"], "user", [], "any", false, true, false, 35), "profilePicture", [], "any", false, false, false, 35)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["latestMemory"], "user", [], "any", false, true, false, 35), "profilePicture", [], "any", false, false, false, 35), "html", null, true))) : (print (null)));
                echo "\"
                                ";
            }
            // line 36
            echo " alt=\"profil\">
                            </div>
                        </div>
                        <h4 class=\"text-center mt-1\">";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["latestMemory"], "title", [], "any", false, false, false, 39), "html", null, true);
            echo "</h4>
                        <p class=\"text-center mt-1\">de ";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["latestMemory"], "user", [], "any", false, false, false, 40), "firstName", [], "any", false, false, false, 40), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["latestMemory"], "user", [], "any", false, false, false, 40), "lastName", [], "any", false, false, false, 40), "html", null, true);
            echo "</p>

                        <a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("memory_show", ["id" => twig_get_attribute($this->env, $this->source, $context["latestMemory"], "id", [], "any", false, false, false, 42)]), "html", null, true);
            echo "\" class=\"btn btn-secondary mx-auto my-2 d-block\">Voir le souvenir</a>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['latestMemory'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "        </div>
        <table id=\"table_memory\" class=\"table table-striped table-bordered\" style=\"width:100%\">
            <thead>
            <tr>
                <td>Contributeur</td>
                <td>Souvenir</td>
            </tr>
            </thead>
            <tbody>
            ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["memories"]) || array_key_exists("memories", $context) ? $context["memories"] : (function () { throw new RuntimeError('Variable "memories" does not exist.', 55, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["memory"]) {
            // line 56
            echo "                <tr>
                    <td value=\"";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["memory"], "id", [], "any", false, false, false, 57), "html", null, true);
            echo "\" class=\"contributeur\">
                        <div class=\"d-flex justify-content-around h-100 align-items-center\">";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["memory"], "user", [], "any", false, false, false, 58), "firstName", [], "any", false, false, false, 58), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["memory"], "user", [], "any", false, false, false, 58), "lastName", [], "any", false, false, false, 58), "html", null, true);
            echo "</div>
                    </td>
                    <td value=\"";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["memory"], "id", [], "any", false, false, false, 60), "html", null, true);
            echo "\" class=\"memory\">
                        <div class=\"d-flex justify-content-around h-100 align-items-center\">";
            // line 61
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["memory"], "title", [], "any", true, true, false, 61)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["memory"], "title", [], "any", false, false, false, 61), "Pas de titre")) : ("Pas de titre")), "html", null, true);
            echo "</div>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['memory'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "            </tbody>
        </table>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 71
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 72
        echo "    <script type=\"text/javascript\" src=\"https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js\"></script>
    <script type=\"text/javascript\" src=\"https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js\"></script>
    <script>
        \$(document).ready( function () {
            \$('#table_memory').DataTable();
        } );
        \$('tbody td:not(.status)').click(function () {
            let id = \$(this).attr('value');
            window.location.href=\"/souvenir/\"+id;
        });
        \$('.contributeur, .memory').hover(function () {
            \$(this).toggleClass('bg-light');
            \$(this).siblings().not('.status').toggleClass('bg-light');
        })
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "memory/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  249 => 72,  239 => 71,  225 => 65,  215 => 61,  211 => 60,  204 => 58,  200 => 57,  197 => 56,  193 => 55,  182 => 46,  172 => 42,  165 => 40,  161 => 39,  156 => 36,  150 => 35,  144 => 33,  142 => 32,  135 => 27,  131 => 26,  113 => 10,  103 => 9,  90 => 6,  80 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Souvenirs, souvenirs{% endblock %}

{% block stylesheets %}
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/css/memory.css') }}\">
{% endblock %}

{% block body %}

    <header class=\"masthead text-center text-white d-flex\">
        <div class=\"container my-auto\">
            <div class=\"row\">
                <div class=\"col-lg-10 mx-auto\">
                    <h1 class=\"text-uppercase\">
                        <strong>Souvenirs, souvenirs</strong>
                    </h1>
                    <br>
                </div>
            </div>
        </div>
    </header>
    <div class=\"container\">
        <h1 class=\"text-center mt-5 mb-5\">Les derniers souvenirs ajoutés</h1>
        <div class=\"row\">
            {% for latestMemory in latestMemories %}
                <div class=\"col-md-4\">
                    <div class=\"card bg-light mb-3\">
                        <div class=\"image_outer_container\">
                            <div class=\"image_inner_container text-center\">
                                <img
                                {% if latestMemory.user.profilePicture matches '{^(https)://}' %}
                                    src=\"{{ latestMemory.user.profilePicture ?? null }}\"
                                {% else %}
                                    src=\"/uploads/{{ latestMemory.user.profilePicture ?? null }}\"
                                {% endif %} alt=\"profil\">
                            </div>
                        </div>
                        <h4 class=\"text-center mt-1\">{{ latestMemory.title }}</h4>
                        <p class=\"text-center mt-1\">de {{ latestMemory.user.firstName }} {{ latestMemory.user.lastName }}</p>

                        <a href=\"{{ path('memory_show', {'id': latestMemory.id}) }}\" class=\"btn btn-secondary mx-auto my-2 d-block\">Voir le souvenir</a>
                    </div>
                </div>
            {% endfor %}
        </div>
        <table id=\"table_memory\" class=\"table table-striped table-bordered\" style=\"width:100%\">
            <thead>
            <tr>
                <td>Contributeur</td>
                <td>Souvenir</td>
            </tr>
            </thead>
            <tbody>
            {% for memory in memories %}
                <tr>
                    <td value=\"{{ memory.id }}\" class=\"contributeur\">
                        <div class=\"d-flex justify-content-around h-100 align-items-center\">{{ memory.user.firstName }} {{ memory.user.lastName }}</div>
                    </td>
                    <td value=\"{{ memory.id }}\" class=\"memory\">
                        <div class=\"d-flex justify-content-around h-100 align-items-center\">{{ memory.title|default('Pas de titre') }}</div>
                    </td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
    </div>

{% endblock %}

{% block javascripts %}
    <script type=\"text/javascript\" src=\"https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js\"></script>
    <script type=\"text/javascript\" src=\"https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js\"></script>
    <script>
        \$(document).ready( function () {
            \$('#table_memory').DataTable();
        } );
        \$('tbody td:not(.status)').click(function () {
            let id = \$(this).attr('value');
            window.location.href=\"/souvenir/\"+id;
        });
        \$('.contributeur, .memory').hover(function () {
            \$(this).toggleClass('bg-light');
            \$(this).siblings().not('.status').toggleClass('bg-light');
        })
    </script>
{% endblock %}
", "memory/index.html.twig", "/home/manon/Documents/Projets perso/memories/templates/memory/index.html.twig");
    }
}
