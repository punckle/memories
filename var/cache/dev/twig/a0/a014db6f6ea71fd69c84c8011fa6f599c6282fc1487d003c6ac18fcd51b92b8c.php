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

/* home/index.html.twig */
class __TwigTemplate_c91764a0d5b400ff028b9fe3d11d7824443ea895998e3488993f5833124073d6 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
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

        echo "Accueil";
        
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/home.css"), "html", null, true);
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
                        <strong>Des souvenirs pour les 60 ans d'Alain</strong>
                    </h1>
                    <br>
                </div>
            </div>
        </div>
    </header>
    <section class=\"need bg-primary\" id=\"about\">
        <div class=\"container\">
            <div class=\"row my-5\">
                <div class=\"col mx-auto\"><img src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/home.png"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"Responsive image\"></div>
            </div>
            <p class=\"row\">
                <p class=\"text-justify mt-2\">
                    Le <strong>25 mars 1960</strong>, dans la petite ville de Strasbourg, Alain voyait le jour.
                    <br>
                    En <strong>2020</strong>, le petit Alain a bien grandit (et un peu vieillit, il faut bien l'admettre...). Au courant de ces
                    <strong>60 années</strong>, il a pas mal vécu et rencontré beaucoup de personnes : famille, amis ou connaissances.
                    <br>
                    <br>
                    Cher Alain,
                    <br>
                    Depuis de nombreux mois, ta famille et tes amis se sont donnés rendez-vous sur ce site afin d'y partager
                    quelques mots doux et souvenirs de toi.
                    <br>
                    Aujourd'hui, ce site te permettra de te replonger dans ces moments partagés avec tous et, nous l'espérons, te montrerons
                    à quel point tu as été un élément important dans la vie de tous depuis ces 60 dernières années.
                    <br>
                    <br>
                    <br>
                    <i><strong>Comment utiliser le site ?</strong></i> <br>
                    <ul>
                        <li>
                            Connecte-toi avec les identifiants transmis le jour de ton anniversaire
                        </li>
                        <li>
                            Navigue à travers les pages pour découvrir tous les souvenirs réunis au courant de ces derniers mois
                        </li>
                    </ul>
                    <br>
                    <br>
                </p>
                <p>
                    <i><strong>Et pour les retardataires ?</strong></i> <br>
                        Si certains amis et membres de la famille sont un peu en retard sur le calendrier, pas de panique, il vous est toujours
                        possible de participer au projet. Pour cela, il suffit de : <br>
                    <ul>
                        <li>
                            Cliquez sur le bouton \"Commencer l'aventure\" ci-dessous
                        </li>
                        <li>
                            Remplissez le formulaire d'inscription
                        </li>
                        <li>
                            Un e-mail sera envoyé à l'administrateur du site afin que votre inscription soit validée
                        </li>
                        <li>
                            Surveillez votre boîte mail : une fois votre inscription validée, tout vous sera expliqué dans un e-mail.
                        </li>
                    </ul>
                </p>
            </div>
            <div class=\"mx-auto text-center\">
                <hr class=\"light my-4\">
                ";
        // line 80
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 80, $this->source); })()), "user", [], "any", false, false, false, 80)) {
            // line 81
            echo "                    <a class=\"btn btn-primary btn-xl mb-5\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("memory_creation");
            echo "\">Commencer l'aventure</a>
                ";
        } else {
            // line 83
            echo "                    <a class=\"btn btn-primary btn-xl mb-5\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("registration");
            echo "\">Commencer l'aventure</a>
                ";
        }
        // line 85
        echo "            </div>
        </div>
    </section>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 85,  195 => 83,  189 => 81,  187 => 80,  130 => 26,  112 => 10,  102 => 9,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Accueil{% endblock %}

{% block stylesheets %}
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/css/home.css') }}\">
{% endblock %}

{% block body %}

    <header class=\"masthead text-center text-white d-flex\">
        <div class=\"container my-auto\">
            <div class=\"row\">
                <div class=\"col-lg-10 mx-auto\">
                    <h1 class=\"text-uppercase\">
                        <strong>Des souvenirs pour les 60 ans d'Alain</strong>
                    </h1>
                    <br>
                </div>
            </div>
        </div>
    </header>
    <section class=\"need bg-primary\" id=\"about\">
        <div class=\"container\">
            <div class=\"row my-5\">
                <div class=\"col mx-auto\"><img src=\"{{ asset('assets/images/home.png') }}\" class=\"img-fluid\" alt=\"Responsive image\"></div>
            </div>
            <p class=\"row\">
                <p class=\"text-justify mt-2\">
                    Le <strong>25 mars 1960</strong>, dans la petite ville de Strasbourg, Alain voyait le jour.
                    <br>
                    En <strong>2020</strong>, le petit Alain a bien grandit (et un peu vieillit, il faut bien l'admettre...). Au courant de ces
                    <strong>60 années</strong>, il a pas mal vécu et rencontré beaucoup de personnes : famille, amis ou connaissances.
                    <br>
                    <br>
                    Cher Alain,
                    <br>
                    Depuis de nombreux mois, ta famille et tes amis se sont donnés rendez-vous sur ce site afin d'y partager
                    quelques mots doux et souvenirs de toi.
                    <br>
                    Aujourd'hui, ce site te permettra de te replonger dans ces moments partagés avec tous et, nous l'espérons, te montrerons
                    à quel point tu as été un élément important dans la vie de tous depuis ces 60 dernières années.
                    <br>
                    <br>
                    <br>
                    <i><strong>Comment utiliser le site ?</strong></i> <br>
                    <ul>
                        <li>
                            Connecte-toi avec les identifiants transmis le jour de ton anniversaire
                        </li>
                        <li>
                            Navigue à travers les pages pour découvrir tous les souvenirs réunis au courant de ces derniers mois
                        </li>
                    </ul>
                    <br>
                    <br>
                </p>
                <p>
                    <i><strong>Et pour les retardataires ?</strong></i> <br>
                        Si certains amis et membres de la famille sont un peu en retard sur le calendrier, pas de panique, il vous est toujours
                        possible de participer au projet. Pour cela, il suffit de : <br>
                    <ul>
                        <li>
                            Cliquez sur le bouton \"Commencer l'aventure\" ci-dessous
                        </li>
                        <li>
                            Remplissez le formulaire d'inscription
                        </li>
                        <li>
                            Un e-mail sera envoyé à l'administrateur du site afin que votre inscription soit validée
                        </li>
                        <li>
                            Surveillez votre boîte mail : une fois votre inscription validée, tout vous sera expliqué dans un e-mail.
                        </li>
                    </ul>
                </p>
            </div>
            <div class=\"mx-auto text-center\">
                <hr class=\"light my-4\">
                {% if app.user %}
                    <a class=\"btn btn-primary btn-xl mb-5\" href=\"{{ path('memory_creation') }}\">Commencer l'aventure</a>
                {% else %}
                    <a class=\"btn btn-primary btn-xl mb-5\" href=\"{{ path('registration') }}\">Commencer l'aventure</a>
                {% endif %}
            </div>
        </div>
    </section>

{% endblock %}
", "home/index.html.twig", "/home/manon/Documents/Projets perso/memories/templates/home/index.html.twig");
    }
}
