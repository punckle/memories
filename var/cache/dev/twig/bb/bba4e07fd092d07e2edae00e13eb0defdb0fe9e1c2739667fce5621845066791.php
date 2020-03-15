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

/* user/index.html.twig */
class __TwigTemplate_47ef171fcdc4172c490c063868c9b980261b331a9d9d3a5490735d707c311533 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/index.html.twig", 1);
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

        echo "Les contributeurs";
        
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/user.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "
    <header class=\"masthead text-center text-white d-flex\">
        <div class=\"container my-auto\">
            <div class=\"row\">
                <div class=\"col-lg-10 mx-auto\">
                    <h1 class=\"text-uppercase\">
                        <strong>Les contributeurs</strong>
                    </h1>
                    <br>
                </div>
            </div>
        </div>
    </header>
    <div class=\"container mt-5\">
        <table id=\"table_id\" class=\"table table-striped table-bordered\" style=\"width:100%\">
            <thead>
            <tr>
                <td></td>
                <td>Prénom Nom</td>
            </tr>
            </thead>
            <tbody>
            ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 33, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 34
            echo "                <tr>
                    <td value=\"";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 35), "html", null, true);
            echo "\" class=\"profilePicture\">
                        <div class=\"d-flex justify-content-around h-100 align-items-center\">
                            <img class=\"rounded-circle\" style=\"width: 64px;height: 64px;\"
                            ";
            // line 38
            if (preg_match("{^(https)://}", twig_get_attribute($this->env, $this->source, $context["user"], "profilePicture", [], "any", false, false, false, 38))) {
                // line 39
                echo "                                src=\"";
                (((twig_get_attribute($this->env, $this->source, $context["user"], "profilePicture", [], "any", true, true, false, 39) &&  !(null === twig_get_attribute($this->env, $this->source, $context["user"], "profilePicture", [], "any", false, false, false, 39)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "profilePicture", [], "any", false, false, false, 39), "html", null, true))) : (print (null)));
                echo "\"
                            ";
            } else {
                // line 41
                echo "                                src=\"/uploads/";
                (((twig_get_attribute($this->env, $this->source, $context["user"], "profilePicture", [], "any", true, true, false, 41) &&  !(null === twig_get_attribute($this->env, $this->source, $context["user"], "profilePicture", [], "any", false, false, false, 41)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "profilePicture", [], "any", false, false, false, 41), "html", null, true))) : (print (null)));
                echo "\"
                            ";
            }
            // line 42
            echo " alt=\"profil\">
                        </div>
                    </td>
                    <td value=\"";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 45), "html", null, true);
            echo "\" class=\"firstName\">
                        <div class=\"d-flex justify-content-around h-100 align-items-center\">";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "firstName", [], "any", false, false, false, 46), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "lastName", [], "any", false, false, false, 46), "html", null, true);
            echo "</div>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "            </tbody>
        </table>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 56
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 57
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
        return "user/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 57,  200 => 56,  186 => 50,  174 => 46,  170 => 45,  165 => 42,  159 => 41,  153 => 39,  151 => 38,  145 => 35,  142 => 34,  138 => 33,  114 => 11,  104 => 10,  90 => 6,  80 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Les contributeurs{% endblock %}

{% block stylesheets %}
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/css/user.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css\">
{% endblock %}

{% block body %}

    <header class=\"masthead text-center text-white d-flex\">
        <div class=\"container my-auto\">
            <div class=\"row\">
                <div class=\"col-lg-10 mx-auto\">
                    <h1 class=\"text-uppercase\">
                        <strong>Les contributeurs</strong>
                    </h1>
                    <br>
                </div>
            </div>
        </div>
    </header>
    <div class=\"container mt-5\">
        <table id=\"table_id\" class=\"table table-striped table-bordered\" style=\"width:100%\">
            <thead>
            <tr>
                <td></td>
                <td>Prénom Nom</td>
            </tr>
            </thead>
            <tbody>
            {% for user in users %}
                <tr>
                    <td value=\"{{ user.id }}\" class=\"profilePicture\">
                        <div class=\"d-flex justify-content-around h-100 align-items-center\">
                            <img class=\"rounded-circle\" style=\"width: 64px;height: 64px;\"
                            {% if user.profilePicture matches '{^(https)://}' %}
                                src=\"{{ user.profilePicture ?? null }}\"
                            {% else %}
                                src=\"/uploads/{{ user.profilePicture ?? null }}\"
                            {% endif %} alt=\"profil\">
                        </div>
                    </td>
                    <td value=\"{{ user.id }}\" class=\"firstName\">
                        <div class=\"d-flex justify-content-around h-100 align-items-center\">{{ user.firstName }} {{ user.lastName }}</div>
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
{% endblock %}", "user/index.html.twig", "/home/manon/Documents/Projets perso/memories/templates/user/index.html.twig");
    }
}
