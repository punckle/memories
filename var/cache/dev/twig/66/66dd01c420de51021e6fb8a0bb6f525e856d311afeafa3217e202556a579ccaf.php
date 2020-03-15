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

/* admin/memories.html.twig */
class __TwigTemplate_daa221dffb2df0824806230d38073ce79472d631e7fbcfa3df2d6f957d4728e1 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/memories.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/memories.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/memories.html.twig", 1);
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

        echo "Espace administratuer - Souvenirs";
        
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
        echo "\" style=\"text-decoration: none; color: darkgray;\"><i class=\"fas fa-arrow-left\"></i></a>&nbsp;&nbsp;<strong>Espace d'administration - Souvenirs</strong>
                </h1>
            </div>
        </div>
    </header>
    <div class=\"container mt-5\">
        ";
        // line 16
        if ((twig_length_filter($this->env, (isset($context["memories"]) || array_key_exists("memories", $context) ? $context["memories"] : (function () { throw new RuntimeError('Variable "memories" does not exist.', 16, $this->source); })())) > 0)) {
            // line 17
            echo "            <table id=\"table_id\" class=\"table table-striped table-bordered\" style=\"width:100%\">
                <thead>
                <tr>
                    <td>Date de création</td>
                    <td>Souvenir</td>
                    <td>Utilisateur</td>
                    <td></td>
                </tr>
                </thead>
                <tbody>
                ";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["memories"]) || array_key_exists("memories", $context) ? $context["memories"] : (function () { throw new RuntimeError('Variable "memories" does not exist.', 27, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["memory"]) {
                // line 28
                echo "                    <tr>
                        <td value=\"";
                // line 29
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["memory"], "id", [], "any", false, false, false, 29), "html", null, true);
                echo "\">
                            <div class=\"d-flex justify-content-around h-100 align-items-center\">";
                // line 30
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["memory"], "createdAt", [], "any", false, false, false, 30), "d/m/Y"), "html", null, true);
                echo "</div>
                        </td>
                        <td value=\"";
                // line 32
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["memory"], "id", [], "any", false, false, false, 32), "html", null, true);
                echo "\" class=\"memory\">
                            <div class=\"d-flex justify-content-around h-100 align-items-center\">";
                // line 33
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["memory"], "title", [], "any", false, false, false, 33), "html", null, true);
                echo "</div>
                        </td>
                        <td value=\"";
                // line 35
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["memory"], "id", [], "any", false, false, false, 35), "html", null, true);
                echo "\" class=\"memory\">
                            <div class=\"d-flex justify-content-around h-100 align-items-center\">";
                // line 36
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["memory"], "user", [], "any", false, false, false, 36), "firstName", [], "any", false, false, false, 36), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["memory"], "user", [], "any", false, false, false, 36), "lastName", [], "any", false, false, false, 36), "html", null, true);
                echo "</div>
                        </td>
                        <td>
                            <div class=\"d-flex justify-content-around h-100 align-items-center\">
                                <a href=\"";
                // line 40
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_memory", ["id" => twig_get_attribute($this->env, $this->source, $context["memory"], "id", [], "any", false, false, false, 40)]), "html", null, true);
                echo "\" class=\"btn btn-info\"><i class=\"far fa-edit\"></i></a>
                                <a href=\"";
                // line 41
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_memory", ["id" => twig_get_attribute($this->env, $this->source, $context["memory"], "id", [], "any", false, false, false, 41)]), "html", null, true);
                echo "\" class=\"btn btn-danger\"><i class=\"far fa-times-circle\"></i></a>
                            </div>
                        </td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['memory'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "                </tbody>
            </table>
        ";
        } else {
            // line 49
            echo "            <div class=\"alert alert-info\" role=\"alert\">
                Il n'y a aucun souvenir
            </div>
        ";
        }
        // line 53
        echo "    </div>
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
            window.location.href=\"/souvenir/\"+id;
        });
        \$('.memory').hover(function () {
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
        return "admin/memories.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 57,  193 => 56,  182 => 53,  176 => 49,  171 => 46,  160 => 41,  156 => 40,  147 => 36,  143 => 35,  138 => 33,  134 => 32,  129 => 30,  125 => 29,  122 => 28,  118 => 27,  106 => 17,  104 => 16,  95 => 10,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Espace administratuer - Souvenirs{% endblock %}

{% block body %}
    <header>
        <div class=\"container my-auto\">
            <div class=\"row\">
                <h1 class=\"mt-3 mx-auto\">
                    <a href=\"{{ path('admin') }}\" style=\"text-decoration: none; color: darkgray;\"><i class=\"fas fa-arrow-left\"></i></a>&nbsp;&nbsp;<strong>Espace d'administration - Souvenirs</strong>
                </h1>
            </div>
        </div>
    </header>
    <div class=\"container mt-5\">
        {% if memories|length > 0 %}
            <table id=\"table_id\" class=\"table table-striped table-bordered\" style=\"width:100%\">
                <thead>
                <tr>
                    <td>Date de création</td>
                    <td>Souvenir</td>
                    <td>Utilisateur</td>
                    <td></td>
                </tr>
                </thead>
                <tbody>
                {% for memory in memories %}
                    <tr>
                        <td value=\"{{ memory.id }}\">
                            <div class=\"d-flex justify-content-around h-100 align-items-center\">{{ memory.createdAt|date('d/m/Y') }}</div>
                        </td>
                        <td value=\"{{ memory.id }}\" class=\"memory\">
                            <div class=\"d-flex justify-content-around h-100 align-items-center\">{{ memory.title }}</div>
                        </td>
                        <td value=\"{{ memory.id }}\" class=\"memory\">
                            <div class=\"d-flex justify-content-around h-100 align-items-center\">{{ memory.user.firstName }} {{ memory.user.lastName }}</div>
                        </td>
                        <td>
                            <div class=\"d-flex justify-content-around h-100 align-items-center\">
                                <a href=\"{{ path('edit_memory', {'id': memory.id}) }}\" class=\"btn btn-info\"><i class=\"far fa-edit\"></i></a>
                                <a href=\"{{ path('delete_memory', {'id': memory.id}) }}\" class=\"btn btn-danger\"><i class=\"far fa-times-circle\"></i></a>
                            </div>
                        </td>
                    </tr>
                {% endfor %}
                </tbody>
            </table>
        {% else %}
            <div class=\"alert alert-info\" role=\"alert\">
                Il n'y a aucun souvenir
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
            window.location.href=\"/souvenir/\"+id;
        });
        \$('.memory').hover(function () {
            \$(this).toggleClass('bg-light');
            \$(this).siblings().not('.status').toggleClass('bg-light');
        })
    </script>
{% endblock %}", "admin/memories.html.twig", "/home/manon/Documents/Projets perso/memories/templates/admin/memories.html.twig");
    }
}
