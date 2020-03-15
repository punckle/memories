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

/* memory/user_memories.html.twig */
class __TwigTemplate_bd18276b841545c76c564e8e1b6ac316ce63c43a017ba0119044c3068ff8536a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "memory/user_memories.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "memory/user_memories.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "memory/user_memories.html.twig", 1);
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

        echo "Souvenirs de ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 3, $this->source); })()), "firstName", [], "any", false, false, false, 3), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 3, $this->source); })()), "lastName", [], "any", false, false, false, 3), "html", null, true);
        
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
        <h1 class=\"text-center mt-5\">Vos souvenirs</h1>
            ";
        // line 13
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 13, $this->source); })()), "memories", [], "any", false, false, false, 13)) > 0)) {
            // line 14
            echo "                <div class=\"row mt-5\">
                ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 15, $this->source); })()), "memories", [], "any", false, false, false, 15));
            foreach ($context['_seq'] as $context["_key"] => $context["memory"]) {
                // line 16
                echo "                    <div class=\"col-md-4\">
                        <div class=\"card bg-light mb-3\">
                            <div class=\"image_outer_container\">
                                <div class=\"image_inner_container text-center\">
                                    <img
                                    ";
                // line 21
                if (preg_match("{^(https)://}", twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 21, $this->source); })()), "profilePicture", [], "any", false, false, false, 21))) {
                    // line 22
                    echo "                                        src=\"";
                    (((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "profilePicture", [], "any", true, true, false, 22) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "profilePicture", [], "any", false, false, false, 22)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "profilePicture", [], "any", false, false, false, 22), "html", null, true))) : (print (null)));
                    echo "\"
                                    ";
                } else {
                    // line 24
                    echo "                                        src=\"/uploads/";
                    (((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "profilePicture", [], "any", true, true, false, 24) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "profilePicture", [], "any", false, false, false, 24)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "profilePicture", [], "any", false, false, false, 24), "html", null, true))) : (print (null)));
                    echo "\"
                                    ";
                }
                // line 25
                echo " alt=\"profil\">
                                </div>
                            </div>
                            <h4 class=\"text-center mt-1\">";
                // line 28
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["memory"], "title", [], "any", false, false, false, 28), "html", null, true);
                echo "</h4>

                            <a href=\"";
                // line 30
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("memory_show", ["id" => twig_get_attribute($this->env, $this->source, $context["memory"], "id", [], "any", false, false, false, 30)]), "html", null, true);
                echo "\" class=\"btn btn-secondary mx-auto my-2 d-block\">Voir le souvenir</a>
                        </div>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['memory'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "                </div>
            ";
        } else {
            // line 36
            echo "                <div class=\"row mt-5\">
                    <div class=\"col-12 alert alert-info text-center\">
                        <div class=\"col-12\">Vous n'avez pas encore partagé de souvenirs</div>
                        <a href=\"";
            // line 39
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("memory_creation");
            echo "\" class=\"btn btn-info my-4\">Partager un souvenir</a>
                    </div>
                </div>
            ";
        }
        // line 43
        echo "    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "memory/user_memories.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 43,  179 => 39,  174 => 36,  170 => 34,  160 => 30,  155 => 28,  150 => 25,  144 => 24,  138 => 22,  136 => 21,  129 => 16,  125 => 15,  122 => 14,  120 => 13,  115 => 10,  105 => 9,  92 => 6,  82 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Souvenirs de {{ user.firstName }} {{ user.lastName }}{% endblock %}

{% block stylesheets %}
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/css/memory.css') }}\">
{% endblock %}

{% block body %}

    <div class=\"container\">
        <h1 class=\"text-center mt-5\">Vos souvenirs</h1>
            {% if user.memories | length > 0 %}
                <div class=\"row mt-5\">
                {% for memory in user.memories %}
                    <div class=\"col-md-4\">
                        <div class=\"card bg-light mb-3\">
                            <div class=\"image_outer_container\">
                                <div class=\"image_inner_container text-center\">
                                    <img
                                    {% if user.profilePicture matches '{^(https)://}' %}
                                        src=\"{{ user.profilePicture ?? null }}\"
                                    {% else %}
                                        src=\"/uploads/{{ user.profilePicture ?? null }}\"
                                    {% endif %} alt=\"profil\">
                                </div>
                            </div>
                            <h4 class=\"text-center mt-1\">{{ memory.title }}</h4>

                            <a href=\"{{ path('memory_show', {'id': memory.id}) }}\" class=\"btn btn-secondary mx-auto my-2 d-block\">Voir le souvenir</a>
                        </div>
                    </div>
                {% endfor %}
                </div>
            {% else %}
                <div class=\"row mt-5\">
                    <div class=\"col-12 alert alert-info text-center\">
                        <div class=\"col-12\">Vous n'avez pas encore partagé de souvenirs</div>
                        <a href=\"{{ path('memory_creation') }}\" class=\"btn btn-info my-4\">Partager un souvenir</a>
                    </div>
                </div>
            {% endif %}
    </div>

{% endblock %}", "memory/user_memories.html.twig", "/home/manon/Documents/Projets perso/memories/templates/memory/user_memories.html.twig");
    }
}
