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

/* about/cgu.html.twig */
class __TwigTemplate_a15718b67efe5088af6a538bd196ce10d408fa302aa8f1cddabd3d6912fe6a1a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "about/cgu.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "about/cgu.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "about/cgu.html.twig", 1);
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

        echo "Conditions générales d'utilisation";
        
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
        echo "    <header class=\"masthead text-center text-white d-flex\">
        <div class=\"container my-auto\">
            <div class=\"row\">
                <div class=\"col-lg-10 mx-auto\">
                    <h1 class=\"text-uppercase\">
                        <strong>Mentions légales</strong>
                    </h1>
                    <br>
                </div>
            </div>
        </div>
    </header>

    <div class=\"container mt-5 mb-5\">
        <p>
            Conformément aux dispositions des Articles 6-III et 19 de la Loi n°2004-575 du 21 juin 2004 pour la Confiance
            dans l’économienumérique, dite L.C.E.N., il est porté à la connaissance des Utilisateurs de ce site
            les présentes mentions légales. <br>
            La connexion et la navigation sur ce site (par l’Utilisateur implique acceptation intégrale et sans réserve
            des présentes mentions légales. <br>
        </p>
        <h4>Article 1 : l'Editeur</h4>
        <p>
            L'édition et la direction de la publication de ce site est assurée par Manon Baillet, dont l'adresse e-mail est
            baillet.manon[at]gmail.com
        </p>
        <h4>Article 2 : l'Hebergeur</h4>
        <p>
            L'hébergeur de ce site est la Société IONOS, dont le siège social est situé au 7 Place de la Gare 57200 Sarreguemines, avec le numéro de
            téléphone 09 70 80 89 11
        <h4>Article 3 : accès au site</h4>
        <p>
            Le site est accessible par tout endroit, 7j/7, 24h/24 sauf cas de force majeure, interruption programmée ou
            non et pouvant découlant d’une nécessité de maintenance. <br>
            En cas de modification, interruption ou suspension des services de ce site ne saurait être tenu responsable.
        </p>
        <h4>Article 4 : collecte des données</h4>
        <p>
            Le site est exempté de déclaration à la Commission Nationale Informatique et Libertés (CNIL) dans la mesure
            où il ne collecteaucune donnée concernant les utilisateurs.
        </p>
        <h4>Article 5 : cookies</h4>
        <p>
            L’Utilisateur est informé que lors de ses visites sur le site, un cookie peut s’installer automatiquement sur
            son logiciel de navigation. <br>
            En naviguant sur le site, il les accepte. <br>
            Un cookie est un élément qui ne permet pas d’identifier l’Utilisateur mais sert à enregistrer des informations
            relatives à la navigation de celui-ci sur le site Internet. L’Utilisateur pourra désactiver ce cookie par
            l’intermédiaire des paramètres figurant au sein de son logiciel de navigation.
        </p>
        <h4>Article 6 : propriété intelectuelle</h4>
        <p>
            Toute utilisation, reproduction, diffusion, commercialisation, modification de toute ou partie de ce site, sans
            autorisationde l’Editeur est prohibée et pourra entraînée des actions et poursuites judiciaires telles que
            notamment prévues par le Code de la propriété intellectuelle et le Code civil.
        </p>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "about/cgu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 10,  102 => 9,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Conditions générales d'utilisation{% endblock %}

{% block stylesheets %}
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/css/memory.css') }}\">
{% endblock %}

{% block body %}
    <header class=\"masthead text-center text-white d-flex\">
        <div class=\"container my-auto\">
            <div class=\"row\">
                <div class=\"col-lg-10 mx-auto\">
                    <h1 class=\"text-uppercase\">
                        <strong>Mentions légales</strong>
                    </h1>
                    <br>
                </div>
            </div>
        </div>
    </header>

    <div class=\"container mt-5 mb-5\">
        <p>
            Conformément aux dispositions des Articles 6-III et 19 de la Loi n°2004-575 du 21 juin 2004 pour la Confiance
            dans l’économienumérique, dite L.C.E.N., il est porté à la connaissance des Utilisateurs de ce site
            les présentes mentions légales. <br>
            La connexion et la navigation sur ce site (par l’Utilisateur implique acceptation intégrale et sans réserve
            des présentes mentions légales. <br>
        </p>
        <h4>Article 1 : l'Editeur</h4>
        <p>
            L'édition et la direction de la publication de ce site est assurée par Manon Baillet, dont l'adresse e-mail est
            baillet.manon[at]gmail.com
        </p>
        <h4>Article 2 : l'Hebergeur</h4>
        <p>
            L'hébergeur de ce site est la Société IONOS, dont le siège social est situé au 7 Place de la Gare 57200 Sarreguemines, avec le numéro de
            téléphone 09 70 80 89 11
        <h4>Article 3 : accès au site</h4>
        <p>
            Le site est accessible par tout endroit, 7j/7, 24h/24 sauf cas de force majeure, interruption programmée ou
            non et pouvant découlant d’une nécessité de maintenance. <br>
            En cas de modification, interruption ou suspension des services de ce site ne saurait être tenu responsable.
        </p>
        <h4>Article 4 : collecte des données</h4>
        <p>
            Le site est exempté de déclaration à la Commission Nationale Informatique et Libertés (CNIL) dans la mesure
            où il ne collecteaucune donnée concernant les utilisateurs.
        </p>
        <h4>Article 5 : cookies</h4>
        <p>
            L’Utilisateur est informé que lors de ses visites sur le site, un cookie peut s’installer automatiquement sur
            son logiciel de navigation. <br>
            En naviguant sur le site, il les accepte. <br>
            Un cookie est un élément qui ne permet pas d’identifier l’Utilisateur mais sert à enregistrer des informations
            relatives à la navigation de celui-ci sur le site Internet. L’Utilisateur pourra désactiver ce cookie par
            l’intermédiaire des paramètres figurant au sein de son logiciel de navigation.
        </p>
        <h4>Article 6 : propriété intelectuelle</h4>
        <p>
            Toute utilisation, reproduction, diffusion, commercialisation, modification de toute ou partie de ce site, sans
            autorisationde l’Editeur est prohibée et pourra entraînée des actions et poursuites judiciaires telles que
            notamment prévues par le Code de la propriété intellectuelle et le Code civil.
        </p>
    </div>
{% endblock %}", "about/cgu.html.twig", "/home/manon/Documents/Projets perso/memories/templates/about/cgu.html.twig");
    }
}
