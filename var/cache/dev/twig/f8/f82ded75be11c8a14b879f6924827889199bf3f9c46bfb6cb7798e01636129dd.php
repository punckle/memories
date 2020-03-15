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

/* memory/show.html.twig */
class __TwigTemplate_f8341e1aeeb3ed62e1bd3cafd30949ecbe62235a1426bfdf4dd42fab0a1c9a20 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "memory/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "memory/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "memory/show.html.twig", 1);
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

        echo "Souvenir de ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["memory"]) || array_key_exists("memory", $context) ? $context["memory"] : (function () { throw new RuntimeError('Variable "memory" does not exist.', 3, $this->source); })()), "user", [], "any", false, false, false, 3), "firstName", [], "any", false, false, false, 3), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["memory"]) || array_key_exists("memory", $context) ? $context["memory"] : (function () { throw new RuntimeError('Variable "memory" does not exist.', 3, $this->source); })()), "user", [], "any", false, false, false, 3), "lastName", [], "any", false, false, false, 3), "html", null, true);
        
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
    <div class=\"container\">
        <h1 class=\"mt-5\">";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["memory"]) || array_key_exists("memory", $context) ? $context["memory"] : (function () { throw new RuntimeError('Variable "memory" does not exist.', 12, $this->source); })()), "title", [], "any", false, false, false, 12), "html", null, true);
        echo "</h1>
        ";
        // line 13
        if ((twig_get_attribute($this->env, $this->source, (isset($context["memory"]) || array_key_exists("memory", $context) ? $context["memory"] : (function () { throw new RuntimeError('Variable "memory" does not exist.', 13, $this->source); })()), "user", [], "any", false, false, false, 13) == twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "user", [], "any", false, false, false, 13))) {
            // line 14
            echo "            <button class=\"btn btn-danger memory\"><a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_memory", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["memory"]) || array_key_exists("memory", $context) ? $context["memory"] : (function () { throw new RuntimeError('Variable "memory" does not exist.', 14, $this->source); })()), "id", [], "any", false, false, false, 14)]), "html", null, true);
            echo "\">Supprimer le souvenir</a></button>
            <button class=\"btn btn-info memory\"><a href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_memory", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["memory"]) || array_key_exists("memory", $context) ? $context["memory"] : (function () { throw new RuntimeError('Variable "memory" does not exist.', 15, $this->source); })()), "id", [], "any", false, false, false, 15)]), "html", null, true);
            echo "\">Editer le souvenir</a></button>
        ";
        }
        // line 17
        echo "    </div>

    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-8 mb-3 text-justify\">
                ";
        // line 22
        echo twig_get_attribute($this->env, $this->source, (isset($context["memory"]) || array_key_exists("memory", $context) ? $context["memory"] : (function () { throw new RuntimeError('Variable "memory" does not exist.', 22, $this->source); })()), "content", [], "any", false, false, false, 22);
        echo "
            </div>
            <div class=\"col\">
                ";
        // line 25
        $context["a"] = twig_get_attribute($this->env, $this->source, (isset($context["memory"]) || array_key_exists("memory", $context) ? $context["memory"] : (function () { throw new RuntimeError('Variable "memory" does not exist.', 25, $this->source); })()), "user", [], "any", false, false, false, 25);
        // line 26
        echo "                <div class=\"row mt-5\">
                    <div class=\"col-md-3 image_inner_container\">
                        <img class=\"rounded-circle\"
                                ";
        // line 29
        if (preg_match("{^(https)://}", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["memory"]) || array_key_exists("memory", $context) ? $context["memory"] : (function () { throw new RuntimeError('Variable "memory" does not exist.', 29, $this->source); })()), "user", [], "any", false, false, false, 29), "profilePicture", [], "any", false, false, false, 29))) {
            // line 30
            echo "                                    src=\"";
            (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["memory"] ?? null), "user", [], "any", false, true, false, 30), "profilePicture", [], "any", true, true, false, 30) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["memory"] ?? null), "user", [], "any", false, true, false, 30), "profilePicture", [], "any", false, false, false, 30)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["memory"] ?? null), "user", [], "any", false, true, false, 30), "profilePicture", [], "any", false, false, false, 30), "html", null, true))) : (print (null)));
            echo "\"
                                ";
        } else {
            // line 32
            echo "                                    src=\"/uploads/";
            (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["memory"] ?? null), "user", [], "any", false, true, false, 32), "profilePicture", [], "any", true, true, false, 32) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["memory"] ?? null), "user", [], "any", false, true, false, 32), "profilePicture", [], "any", false, false, false, 32)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["memory"] ?? null), "user", [], "any", false, true, false, 32), "profilePicture", [], "any", false, false, false, 32), "html", null, true))) : (print (null)));
            echo "\"
                                ";
        }
        // line 33
        echo " alt=\"profil\">
                    </div>
                    <div class=\"col ml-4\">
                        <h3 class=\"userName\"><a href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_details", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["memory"]) || array_key_exists("memory", $context) ? $context["memory"] : (function () { throw new RuntimeError('Variable "memory" does not exist.', 36, $this->source); })()), "user", [], "any", false, false, false, 36), "id", [], "any", false, false, false, 36)]), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["memory"]) || array_key_exists("memory", $context) ? $context["memory"] : (function () { throw new RuntimeError('Variable "memory" does not exist.', 36, $this->source); })()), "user", [], "any", false, false, false, 36), "firstName", [], "any", false, false, false, 36), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["memory"]) || array_key_exists("memory", $context) ? $context["memory"] : (function () { throw new RuntimeError('Variable "memory" does not exist.', 36, $this->source); })()), "user", [], "any", false, false, false, 36), "lastName", [], "any", false, false, false, 36), "html", null, true);
        echo "</a></h3>
                        ";
        // line 37
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["memory"]) || array_key_exists("memory", $context) ? $context["memory"] : (function () { throw new RuntimeError('Variable "memory" does not exist.', 37, $this->source); })()), "user", [], "any", false, false, false, 37), "memories", [], "any", false, false, false, 37)) > 0)) {
            // line 38
            echo "                            <button type=\"button\" class=\"btn btn-primary\">
                                ";
            // line 39
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["memory"]) || array_key_exists("memory", $context) ? $context["memory"] : (function () { throw new RuntimeError('Variable "memory" does not exist.', 39, $this->source); })()), "user", [], "any", false, false, false, 39), "memories", [], "any", false, false, false, 39)), "html", null, true);
            echo "
                                ";
            // line 40
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["memory"]) || array_key_exists("memory", $context) ? $context["memory"] : (function () { throw new RuntimeError('Variable "memory" does not exist.', 40, $this->source); })()), "user", [], "any", false, false, false, 40), "memories", [], "any", false, false, false, 40)) == 1)) {
                echo "souvenir";
            } else {
                echo "souvenirs";
            }
            // line 41
            echo "                            </button>
                        ";
        }
        // line 43
        echo "                    </div>
                </div>
            </div>
        </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "memory/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 43,  197 => 41,  191 => 40,  187 => 39,  184 => 38,  182 => 37,  174 => 36,  169 => 33,  163 => 32,  157 => 30,  155 => 29,  150 => 26,  148 => 25,  142 => 22,  135 => 17,  130 => 15,  125 => 14,  123 => 13,  119 => 12,  115 => 10,  105 => 9,  92 => 6,  82 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Souvenir de {{ memory.user.firstName }} {{ memory.user.lastName }}{% endblock %}

{% block stylesheets %}
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/css/memory.css') }}\">
{% endblock %}

{% block body %}

    <div class=\"container\">
        <h1 class=\"mt-5\">{{ memory.title }}</h1>
        {% if memory.user == app.user %}
            <button class=\"btn btn-danger memory\"><a href=\"{{ path('delete_memory', {'id': memory.id}) }}\">Supprimer le souvenir</a></button>
            <button class=\"btn btn-info memory\"><a href=\"{{ path('edit_memory', {'id': memory.id}) }}\">Editer le souvenir</a></button>
        {% endif %}
    </div>

    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-8 mb-3 text-justify\">
                {{ memory.content | raw }}
            </div>
            <div class=\"col\">
                {% set a = memory.user %}
                <div class=\"row mt-5\">
                    <div class=\"col-md-3 image_inner_container\">
                        <img class=\"rounded-circle\"
                                {% if memory.user.profilePicture matches '{^(https)://}' %}
                                    src=\"{{ memory.user.profilePicture ?? null }}\"
                                {% else %}
                                    src=\"/uploads/{{ memory.user.profilePicture ?? null }}\"
                                {% endif %} alt=\"profil\">
                    </div>
                    <div class=\"col ml-4\">
                        <h3 class=\"userName\"><a href=\"{{ path('user_details', {'id': memory.user.id}) }}\">{{ memory.user.firstName }} {{ memory.user.lastName }}</a></h3>
                        {% if memory.user.memories|length > 0 %}
                            <button type=\"button\" class=\"btn btn-primary\">
                                {{ memory.user.memories|length }}
                                {% if memory.user.memories|length == 1 %}souvenir{% else %}souvenirs{% endif %}
                            </button>
                        {% endif %}
                    </div>
                </div>
            </div>
        </div>
    </div>

{% endblock %}", "memory/show.html.twig", "/home/manon/Documents/Projets perso/memories/templates/memory/show.html.twig");
    }
}
