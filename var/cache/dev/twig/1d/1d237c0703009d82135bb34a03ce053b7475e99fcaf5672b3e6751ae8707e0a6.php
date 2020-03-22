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

/* photo/index.html.twig */
class __TwigTemplate_70ca17dbea3904497c9ba619ddaba9c6a120055e49ea33a03b6713873f92795f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "photo/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "photo/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "photo/index.html.twig", 1);
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

        echo "Souvenirs photographiques";
        
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/about.css"), "html", null, true);
        echo "\">";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
    <header class=\"masthead text-center text-white d-flex\">
        <div class=\"container my-auto\">
            <div class=\"row\">
                <div class=\"col-lg-10 mx-auto\">
                    <h1 class=\"text-uppercase\">
                        <strong>Souvenirs photographiques</strong>
                    </h1>
                    <br>
                </div>
            </div>
        </div>
    </header>
    <div class=\"container mt-5 mb-5\">
        <div class=\"row\">
            <h3>Quelques souvenirs sous forme de photographies</h3>
            <p>
                Certains proches ont préféré partager des souvenirs sous forme de photographies. Celles-ci sont
                également évocatrices de bons souvenirs ! Bon voyage dans le passé !
            </p>
        </div>
        <div class=\"row mt-5 mb-5\">
            <div class=\"col-md-6\">
                <div class=\"card bg-light mb-3\">
                    <h4 class=\"text-center mt-1\">Bruno Bouton-Hugues</h4>
                    <h5 class=\"text-center mt-1\">Les années 1970 dans le Loiret</h5>
                    <a href=\"";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("bbh");
        echo "\" class=\"btn btn-secondary mx-auto my-2 d-block\">Voir le souvenir</a>
                </div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"card bg-light mb-3\">
                    <h4 class=\"text-center mt-1\">Lorette & Denis Mathis</h4>
                    <h5 class=\"text-center mt-1\">Randonnées dans les Vosges</h5>
                    <a href=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mathis");
        echo "\" class=\"btn btn-secondary mx-auto my-2 d-block\">Voir le souvenir</a>
                </div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"card bg-light mb-3\">
                    <h4 class=\"text-center mt-1\">Lauriane Reinbold</h4>
                    <h5 class=\"text-center mt-1\">T'as le look, Coco !</h5>
                    <a href=\"";
        // line 48
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("lauriane1");
        echo "\" class=\"btn btn-secondary mx-auto my-2 d-block\">Voir le souvenir</a>
                </div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"card bg-light mb-3\">
                    <h4 class=\"text-center mt-1\">Lauriane Reinbold</h4>
                    <h5 class=\"text-center mt-1\">Faire campagne avec mon Papa</h5>
                    <a href=\"";
        // line 55
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("lauriane2");
        echo "\" class=\"btn btn-secondary mx-auto my-2 d-block\">Voir le souvenir</a>
                </div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"card bg-light mb-3\">
                    <h4 class=\"text-center mt-1\">Lauriane Reinbold</h4>
                    <h5 class=\"text-center mt-1\">De père en petite-fille</h5>
                    <a href=\"";
        // line 62
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("lauriane3");
        echo "\" class=\"btn btn-secondary mx-auto my-2 d-block\">Voir le souvenir</a>
                </div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"card bg-light mb-3\">
                    <h4 class=\"text-center mt-1\">Manon Baillet</h4>
                    <h5 class=\"text-center mt-1\">Quelques souvenirs photographiques</h5>
                    <a href=\"";
        // line 69
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("manon");
        echo "\" class=\"btn btn-secondary mx-auto my-2 d-block\">Voir le souvenir</a>
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
        return "photo/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 69,  179 => 62,  169 => 55,  159 => 48,  149 => 41,  139 => 34,  111 => 8,  101 => 7,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Souvenirs photographiques{% endblock %}

{% block stylesheets %}
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/css/about.css') }}\">{% endblock %}
{% block body %}

    <header class=\"masthead text-center text-white d-flex\">
        <div class=\"container my-auto\">
            <div class=\"row\">
                <div class=\"col-lg-10 mx-auto\">
                    <h1 class=\"text-uppercase\">
                        <strong>Souvenirs photographiques</strong>
                    </h1>
                    <br>
                </div>
            </div>
        </div>
    </header>
    <div class=\"container mt-5 mb-5\">
        <div class=\"row\">
            <h3>Quelques souvenirs sous forme de photographies</h3>
            <p>
                Certains proches ont préféré partager des souvenirs sous forme de photographies. Celles-ci sont
                également évocatrices de bons souvenirs ! Bon voyage dans le passé !
            </p>
        </div>
        <div class=\"row mt-5 mb-5\">
            <div class=\"col-md-6\">
                <div class=\"card bg-light mb-3\">
                    <h4 class=\"text-center mt-1\">Bruno Bouton-Hugues</h4>
                    <h5 class=\"text-center mt-1\">Les années 1970 dans le Loiret</h5>
                    <a href=\"{{ path('bbh') }}\" class=\"btn btn-secondary mx-auto my-2 d-block\">Voir le souvenir</a>
                </div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"card bg-light mb-3\">
                    <h4 class=\"text-center mt-1\">Lorette & Denis Mathis</h4>
                    <h5 class=\"text-center mt-1\">Randonnées dans les Vosges</h5>
                    <a href=\"{{ path('mathis') }}\" class=\"btn btn-secondary mx-auto my-2 d-block\">Voir le souvenir</a>
                </div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"card bg-light mb-3\">
                    <h4 class=\"text-center mt-1\">Lauriane Reinbold</h4>
                    <h5 class=\"text-center mt-1\">T'as le look, Coco !</h5>
                    <a href=\"{{ path('lauriane1') }}\" class=\"btn btn-secondary mx-auto my-2 d-block\">Voir le souvenir</a>
                </div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"card bg-light mb-3\">
                    <h4 class=\"text-center mt-1\">Lauriane Reinbold</h4>
                    <h5 class=\"text-center mt-1\">Faire campagne avec mon Papa</h5>
                    <a href=\"{{ path('lauriane2') }}\" class=\"btn btn-secondary mx-auto my-2 d-block\">Voir le souvenir</a>
                </div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"card bg-light mb-3\">
                    <h4 class=\"text-center mt-1\">Lauriane Reinbold</h4>
                    <h5 class=\"text-center mt-1\">De père en petite-fille</h5>
                    <a href=\"{{ path('lauriane3') }}\" class=\"btn btn-secondary mx-auto my-2 d-block\">Voir le souvenir</a>
                </div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"card bg-light mb-3\">
                    <h4 class=\"text-center mt-1\">Manon Baillet</h4>
                    <h5 class=\"text-center mt-1\">Quelques souvenirs photographiques</h5>
                    <a href=\"{{ path('manon') }}\" class=\"btn btn-secondary mx-auto my-2 d-block\">Voir le souvenir</a>
                </div>
            </div>
        </div>
    </div>

{% endblock %}", "photo/index.html.twig", "/home/manon/Documents/Projets perso/memories/templates/photo/index.html.twig");
    }
}
