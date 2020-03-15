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

/* user/show.html.twig */
class __TwigTemplate_9f90906927baef40a2110350f173c6e8421e05038e484498b898096d907f2635 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/show.html.twig", 1);
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
        <div class=\"row\">
            <div class=\"col-3\">
                <div class=\"d-flex h-100 mt-5\">
                    <div class=\"image_outer_container\">
                        <div class=\"image_inner_container\">
                            <img
                            ";
        // line 18
        if (preg_match("{^(https)://}", twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 18, $this->source); })()), "profilePicture", [], "any", false, false, false, 18))) {
            // line 19
            echo "                                src=\"";
            (((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "profilePicture", [], "any", true, true, false, 19) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "profilePicture", [], "any", false, false, false, 19)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "profilePicture", [], "any", false, false, false, 19), "html", null, true))) : (print (null)));
            echo "\"
                            ";
        } else {
            // line 21
            echo "                                src=\"/uploads/";
            (((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "profilePicture", [], "any", true, true, false, 21) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "profilePicture", [], "any", false, false, false, 21)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "profilePicture", [], "any", false, false, false, 21), "html", null, true))) : (print (null)));
            echo "\"
                            ";
        }
        // line 22
        echo " alt=\"profil\">
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-sm-12\">
                <div class=\"d-flex userName\">
                    <h3>";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 29, $this->source); })()), "firstName", [], "any", false, false, false, 29), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 29, $this->source); })()), "lastName", [], "any", false, false, false, 29), "html", null, true);
        echo "</h3>
                </div>
                <div>
                    ";
        // line 32
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 32, $this->source); })()), "memories", [], "any", false, false, false, 32)) > 0)) {
            // line 33
            echo "                        <button type=\"button\" class=\"btn btn-primary\">
                            ";
            // line 34
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 34, $this->source); })()), "memories", [], "any", false, false, false, 34)), "html", null, true);
            echo "
                            ";
            // line 35
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 35, $this->source); })()), "memories", [], "any", false, false, false, 35)) == 1)) {
                echo "souvenir";
            } else {
                echo "souvenirs";
            }
            // line 36
            echo "                        </button>
                    ";
        }
        // line 38
        echo "                    ";
        if (((isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 38, $this->source); })()) == twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 38, $this->source); })()), "user", [], "any", false, false, false, 38))) {
            // line 39
            echo "                    <button class=\"btn btn-secondary\"><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("settings");
            echo "\">Vos paramètres</a></button>
                    <button class=\"btn btn-secondary\"><a href=\"";
            // line 40
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_memories");
            echo "\">Vos souvenirs</a></button>
                    ";
        }
        // line 42
        echo "                </div>
            </div>
        </div>
        <div class=\"row mt-5\">
            <div class=\"col text-justify\">
                ";
        // line 47
        echo twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 47, $this->source); })()), "biography", [], "any", false, false, false, 47);
        echo "
            </div>
        </div>
        <div class=\"row mt-5\">
            ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 51, $this->source); })()), "memories", [], "any", false, false, false, 51));
        foreach ($context['_seq'] as $context["_key"] => $context["memory"]) {
            // line 52
            echo "            <div class=\"col-md-4\">
                <div class=\"card bg-light mb-3\">
                    <h4 class=\"text-center mt-1\">";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["memory"], "title", [], "any", false, false, false, 54), "html", null, true);
            echo "</h4>
                    <a href=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("memory_show", ["id" => twig_get_attribute($this->env, $this->source, $context["memory"], "id", [], "any", false, false, false, 55)]), "html", null, true);
            echo "\" class=\"btn btn-secondary mx-auto my-2 d-block\">Voir le souvenir</a>
                </div>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['memory'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "        </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "user/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 59,  211 => 55,  207 => 54,  203 => 52,  199 => 51,  192 => 47,  185 => 42,  180 => 40,  175 => 39,  172 => 38,  168 => 36,  162 => 35,  158 => 34,  155 => 33,  153 => 32,  145 => 29,  136 => 22,  130 => 21,  124 => 19,  122 => 18,  112 => 10,  102 => 9,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Les contributeurs{% endblock %}

{% block stylesheets %}
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/css/user.css') }}\">
{% endblock %}

{% block body %}

    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-3\">
                <div class=\"d-flex h-100 mt-5\">
                    <div class=\"image_outer_container\">
                        <div class=\"image_inner_container\">
                            <img
                            {% if user.profilePicture matches '{^(https)://}' %}
                                src=\"{{ user.profilePicture ?? null }}\"
                            {% else %}
                                src=\"/uploads/{{ user.profilePicture ?? null }}\"
                            {% endif %} alt=\"profil\">
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-sm-12\">
                <div class=\"d-flex userName\">
                    <h3>{{ user.firstName }} {{ user.lastName }}</h3>
                </div>
                <div>
                    {% if user.memories|length > 0 %}
                        <button type=\"button\" class=\"btn btn-primary\">
                            {{ user.memories|length }}
                            {% if user.memories|length == 1 %}souvenir{% else %}souvenirs{% endif %}
                        </button>
                    {% endif %}
                    {% if user == app.user %}
                    <button class=\"btn btn-secondary\"><a href=\"{{ path('settings') }}\">Vos paramètres</a></button>
                    <button class=\"btn btn-secondary\"><a href=\"{{ path('user_memories') }}\">Vos souvenirs</a></button>
                    {% endif %}
                </div>
            </div>
        </div>
        <div class=\"row mt-5\">
            <div class=\"col text-justify\">
                {{ user.biography|raw }}
            </div>
        </div>
        <div class=\"row mt-5\">
            {% for memory in user.memories %}
            <div class=\"col-md-4\">
                <div class=\"card bg-light mb-3\">
                    <h4 class=\"text-center mt-1\">{{ memory.title }}</h4>
                    <a href=\"{{ path('memory_show', {'id': memory.id}) }}\" class=\"btn btn-secondary mx-auto my-2 d-block\">Voir le souvenir</a>
                </div>
            </div>
            {% endfor %}
        </div>
    </div>

{% endblock %}", "user/show.html.twig", "/home/manon/Documents/Projets perso/memories/templates/user/show.html.twig");
    }
}
