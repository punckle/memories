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

/* admin/index.html.twig */
class __TwigTemplate_dab363fd26b5a5dad9bdabd382c0e85ad3876779607fb039b74efcc9f49fc30a extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/index.html.twig", 1);
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

        echo "Espace d'administration";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <header>
        <div class=\"container my-auto\">
            <div class=\"row\">
                <h1 class=\"mt-3 mx-auto\">
                    <strong>Espace d'administration - Tableau de bord</strong>
                </h1>
            </div>
        </div>
    </header>
    <div class=\"container mt-5\">
        <div class=\"row mb-4\">
            <div class=\"col-6 d-flex justify-content-around h-100 align-items-center\">
                <div class=\"card text-white bg-success text-center\" style=\"width: 10rem;\">
                    <a href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_users");
        echo "\" style=\"text-decoration: none; color: white;\"><i class=\"fas fa-users fa-2x my-3\"></i></a><br>
                    <strong>";
        // line 20
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["totalUsers"]) || array_key_exists("totalUsers", $context) ? $context["totalUsers"] : (function () { throw new RuntimeError('Variable "totalUsers" does not exist.', 20, $this->source); })())), "html", null, true);
        echo " utilisateur(s)</strong>
                </div>
            </div>
            <div class=\"col-6 d-flex justify-content-around h-100 align-items-center\">
                <div class=\"card text-white bg-info text-center\" style=\"width: 10rem;\">
                    <a href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_memories");
        echo "\" style=\"text-decoration: none; color: white;\"><i class=\"fas fa-pencil-alt fa-2x my-3\"></i></a><br>
                    <strong>";
        // line 26
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["memories"]) || array_key_exists("memories", $context) ? $context["memories"] : (function () { throw new RuntimeError('Variable "memories" does not exist.', 26, $this->source); })())), "html", null, true);
        echo " souvenir(s)</strong>
                </div>
            </div>
        </div>
        ";
        // line 30
        if ((twig_length_filter($this->env, (isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 30, $this->source); })())) > 0)) {
            // line 31
            echo "        <table id=\"table_id\" class=\"table table-striped table-bordered\" style=\"width:100%\">
            <thead>
            <tr>
                <td>Utilisateur</td>
                <td></td>
            </tr>
            </thead>
            <tbody>
            ";
            // line 39
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 39, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 40
                echo "                <tr>
                    <td value=\"";
                // line 41
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 41), "html", null, true);
                echo "\" class=\"firstName\">
                        <div class=\"d-flex justify-content-around h-100 align-items-center\">";
                // line 42
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "firstName", [], "any", false, false, false, 42), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "lastName", [], "any", false, false, false, 42), "html", null, true);
                echo "</div>
                    </td>
                    <td>
                        <div class=\"d-flex justify-content-around h-100 align-items-center\">
                            <a href=\"";
                // line 46
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_invitation", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 46)]), "html", null, true);
                echo "\" class=\"btn btn-danger\"><i class=\"far fa-times-circle\"></i></a>
                            <a href=\"";
                // line 47
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accept_invitation", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 47)]), "html", null, true);
                echo "\" class=\"btn btn-success\"><i class=\"far fa-check-circle\"></i></a>
                        </div>
                    </td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "            </tbody>
        </table>
        ";
        } else {
            // line 55
            echo "        <div class=\"alert alert-info\" role=\"alert\">
            Il n'y a aucune nouvelle demande
        </div>
        ";
        }
        // line 59
        echo "    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 59,  178 => 55,  173 => 52,  162 => 47,  158 => 46,  149 => 42,  145 => 41,  142 => 40,  138 => 39,  128 => 31,  126 => 30,  119 => 26,  115 => 25,  107 => 20,  103 => 19,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Espace d'administration{% endblock %}

{% block body %}
    <header>
        <div class=\"container my-auto\">
            <div class=\"row\">
                <h1 class=\"mt-3 mx-auto\">
                    <strong>Espace d'administration - Tableau de bord</strong>
                </h1>
            </div>
        </div>
    </header>
    <div class=\"container mt-5\">
        <div class=\"row mb-4\">
            <div class=\"col-6 d-flex justify-content-around h-100 align-items-center\">
                <div class=\"card text-white bg-success text-center\" style=\"width: 10rem;\">
                    <a href=\"{{ path('admin_users') }}\" style=\"text-decoration: none; color: white;\"><i class=\"fas fa-users fa-2x my-3\"></i></a><br>
                    <strong>{{ totalUsers|length }} utilisateur(s)</strong>
                </div>
            </div>
            <div class=\"col-6 d-flex justify-content-around h-100 align-items-center\">
                <div class=\"card text-white bg-info text-center\" style=\"width: 10rem;\">
                    <a href=\"{{ path('admin_memories') }}\" style=\"text-decoration: none; color: white;\"><i class=\"fas fa-pencil-alt fa-2x my-3\"></i></a><br>
                    <strong>{{ memories|length }} souvenir(s)</strong>
                </div>
            </div>
        </div>
        {% if users|length > 0 %}
        <table id=\"table_id\" class=\"table table-striped table-bordered\" style=\"width:100%\">
            <thead>
            <tr>
                <td>Utilisateur</td>
                <td></td>
            </tr>
            </thead>
            <tbody>
            {% for user in users %}
                <tr>
                    <td value=\"{{ user.id }}\" class=\"firstName\">
                        <div class=\"d-flex justify-content-around h-100 align-items-center\">{{ user.firstName }} {{ user.lastName }}</div>
                    </td>
                    <td>
                        <div class=\"d-flex justify-content-around h-100 align-items-center\">
                            <a href=\"{{ path('delete_invitation', {'id': user.id}) }}\" class=\"btn btn-danger\"><i class=\"far fa-times-circle\"></i></a>
                            <a href=\"{{ path('accept_invitation', {'id': user.id}) }}\" class=\"btn btn-success\"><i class=\"far fa-check-circle\"></i></a>
                        </div>
                    </td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
        {% else %}
        <div class=\"alert alert-info\" role=\"alert\">
            Il n'y a aucune nouvelle demande
        </div>
        {% endif %}
    </div>
{% endblock %}
", "admin/index.html.twig", "/home/manon/Documents/Projets perso/memories/templates/admin/index.html.twig");
    }
}
