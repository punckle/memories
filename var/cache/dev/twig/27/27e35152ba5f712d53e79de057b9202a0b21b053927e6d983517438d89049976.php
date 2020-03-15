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

/* admin/users.html.twig */
class __TwigTemplate_cdd484f59b897a885b13062feff5d48bb248557ff5870be57beab2818df2e91c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/users.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/users.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/users.html.twig", 1);
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

        echo "Espace administratuer - Utilisateurs";
        
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
                    <a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
        echo "\" style=\"text-decoration: none; color: darkgray;\"><i class=\"fas fa-arrow-left\"></i></a>&nbsp;&nbsp;<strong>Espace d'administration - Utilisateurs</strong>
                </h1>
            </div>
        </div>
    </header>
    <div class=\"container mt-5\">
        ";
        // line 16
        if ((twig_length_filter($this->env, (isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 16, $this->source); })())) > 0)) {
            // line 17
            echo "        <table id=\"table_id\" class=\"table table-striped table-bordered\" style=\"width:100%\">
            <thead>
            <tr>
                <td>Utilisateur</td>
                <td></td>
            </tr>
            </thead>
            <tbody>
            ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 25, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 26
                echo "                <tr>
                    <td value=\"";
                // line 27
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 27), "html", null, true);
                echo "\" class=\"firstName\">
                        <div class=\"d-flex justify-content-around h-100 align-items-center\">";
                // line 28
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "firstName", [], "any", false, false, false, 28), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "lastName", [], "any", false, false, false, 28), "html", null, true);
                echo "</div>
                    </td>
                    <td>
                        <div class=\"d-flex justify-content-around h-100 align-items-center\">
                            <a href=\"";
                // line 32
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_invitation", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 32)]), "html", null, true);
                echo "\" class=\"btn btn-danger\"><i class=\"far fa-times-circle\"></i></a>
                        </div>
                    </td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "            </tbody>
        </table>
        ";
        } else {
            // line 40
            echo "            <div class=\"alert alert-info\" role=\"alert\">
                Il n'y a aucun utilisateur
            </div>
        ";
        }
        // line 44
        echo "    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 47
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 48
        echo "    <script type=\"text/javascript\" src=\"https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js\"></script>
    <script type=\"text/javascript\" src=\"https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js\"></script>
    <script>
        \$(document).ready( function () {
            \$('#table_id').DataTable();
        } );
        \$('tbody td:not(.status)').click(function () {
            let id = \$(this).attr('value');
            window.location.href=\"/utilisateur/\"+id+\"/details\";
        });
        \$('.firstName, .lastName, .profilePicture').hover(function () {
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
        return "admin/users.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 48,  169 => 47,  158 => 44,  152 => 40,  147 => 37,  136 => 32,  127 => 28,  123 => 27,  120 => 26,  116 => 25,  106 => 17,  104 => 16,  95 => 10,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Espace administratuer - Utilisateurs{% endblock %}

{% block body %}
    <header>
        <div class=\"container my-auto\">
            <div class=\"row\">
                <h1 class=\"mt-3 mx-auto\">
                    <a href=\"{{ path('admin') }}\" style=\"text-decoration: none; color: darkgray;\"><i class=\"fas fa-arrow-left\"></i></a>&nbsp;&nbsp;<strong>Espace d'administration - Utilisateurs</strong>
                </h1>
            </div>
        </div>
    </header>
    <div class=\"container mt-5\">
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
                        </div>
                    </td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
        {% else %}
            <div class=\"alert alert-info\" role=\"alert\">
                Il n'y a aucun utilisateur
            </div>
        {% endif %}
    </div>
{% endblock %}

{% block javascripts %}
    <script type=\"text/javascript\" src=\"https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js\"></script>
    <script type=\"text/javascript\" src=\"https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js\"></script>
    <script>
        \$(document).ready( function () {
            \$('#table_id').DataTable();
        } );
        \$('tbody td:not(.status)').click(function () {
            let id = \$(this).attr('value');
            window.location.href=\"/utilisateur/\"+id+\"/details\";
        });
        \$('.firstName, .lastName, .profilePicture').hover(function () {
            \$(this).toggleClass('bg-light');
            \$(this).siblings().not('.status').toggleClass('bg-light');
        })
    </script>
{% endblock %}", "admin/users.html.twig", "/home/manon/Documents/Projets perso/memories/templates/admin/users.html.twig");
    }
}
