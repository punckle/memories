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
                <div class=\"col-md-4 col-sm-12\">
                    <div class=\"card\">
                        <div class=\"card-header\">
                            <h2 class=\"section-heading text-center\">Le projet</h2>
                        </div>
                        <div class=\"card-body text-center\">
                            <p class=\"mb-5\">
                            Le <strong>25 mars 1960</strong>, dans la petite ville de Strasbourg, <strong>Alain</strong> voyait le jour.<br/>
                            En <strong>2020</strong>, le petit Alain a bien grandit (et un peu vieillit, il faut bien l'admettre...).
                            Au courant de ces <strong>60 années</strong>, il a pas mal vécu et rencontré beaucoup de personnes : famille, amis ou
                            connaissances.<br/>
                            Aujourd'hui, nous avons besoin de vous, qui avez marqué la vie d'Alain de près ou de loin.<br/>
                            Nous avons besoin de vous pour lui transmettre un cadeau un peu particulier : <strong>les plus beaux
                                souvenirs</strong> que vous avez avec lui.
                            </p>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-4 col-sm-12\">
                    <div class=\"card\">
                        <div class=\"card-header\">
                            <h2 class=\"section-heading text-center\">Comment ?</h2>
                        </div>
                        <div class=\"card-body text-center\">
                            <p class=\"mb-5\">
                                Rien de plus simple ! Il vous suffit de suivre la procédure suivante :<br/><br>
                                <strong>1.</strong> Cliquez sur le bouton \"Commencer l'aventure\" ci-dessous <i class=\"fas fa-arrow-down\"></i><br/>
                                <strong>2.</strong> Remplissez le formulaire d'inscription<br/>
                                <strong>3.</strong> Un e-mail sera envoyé à l'administrateur du site afin que votre inscription soit validée<br/>
                                <strong>4.</strong> Une fois votre inscription validée, vous pourrez vous connecter afin de participer au projet !<br/>
                                Si vous avez une question, n'hésitez surtout pas à la poser dans le formulaire de Contact
                            </p>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-4 col-sm-12\">
                    <div class=\"card\">
                        <div class=\"card-header\">
                            <h2 class=\"section-heading text-center\">Et après ?</h2>
                        </div>
                        <div class=\"card-body text-center\">
                            <p class=\"mb-5\">
                                Des souvenirs pourront être postés <strong>jusqu'à début mars 2020</strong>. Le site se fera
                                ensuite une beauté pour pouvoir être présenté à Alain le jour de son anniversaire. <br/><br/><br/><br/>
                                <i class=\"fas fa-exclamation-triangle\"></i> <strong>ATTENTION !</strong><br/>
                                Ce projet est TOP SECRET ! Alain ne doit pas être au courant : la surprise n'en sera que
                                plus belle !
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"mx-auto text-center\">
                <hr class=\"light my-4\">
                <a class=\"btn btn-primary btn-xl mb-5\" href=\"";
        // line 80
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("registration");
        echo "\">Commencer l'aventure</a></div>
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
        return array (  184 => 80,  112 => 10,  102 => 9,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
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
                <div class=\"col-md-4 col-sm-12\">
                    <div class=\"card\">
                        <div class=\"card-header\">
                            <h2 class=\"section-heading text-center\">Le projet</h2>
                        </div>
                        <div class=\"card-body text-center\">
                            <p class=\"mb-5\">
                            Le <strong>25 mars 1960</strong>, dans la petite ville de Strasbourg, <strong>Alain</strong> voyait le jour.<br/>
                            En <strong>2020</strong>, le petit Alain a bien grandit (et un peu vieillit, il faut bien l'admettre...).
                            Au courant de ces <strong>60 années</strong>, il a pas mal vécu et rencontré beaucoup de personnes : famille, amis ou
                            connaissances.<br/>
                            Aujourd'hui, nous avons besoin de vous, qui avez marqué la vie d'Alain de près ou de loin.<br/>
                            Nous avons besoin de vous pour lui transmettre un cadeau un peu particulier : <strong>les plus beaux
                                souvenirs</strong> que vous avez avec lui.
                            </p>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-4 col-sm-12\">
                    <div class=\"card\">
                        <div class=\"card-header\">
                            <h2 class=\"section-heading text-center\">Comment ?</h2>
                        </div>
                        <div class=\"card-body text-center\">
                            <p class=\"mb-5\">
                                Rien de plus simple ! Il vous suffit de suivre la procédure suivante :<br/><br>
                                <strong>1.</strong> Cliquez sur le bouton \"Commencer l'aventure\" ci-dessous <i class=\"fas fa-arrow-down\"></i><br/>
                                <strong>2.</strong> Remplissez le formulaire d'inscription<br/>
                                <strong>3.</strong> Un e-mail sera envoyé à l'administrateur du site afin que votre inscription soit validée<br/>
                                <strong>4.</strong> Une fois votre inscription validée, vous pourrez vous connecter afin de participer au projet !<br/>
                                Si vous avez une question, n'hésitez surtout pas à la poser dans le formulaire de Contact
                            </p>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-4 col-sm-12\">
                    <div class=\"card\">
                        <div class=\"card-header\">
                            <h2 class=\"section-heading text-center\">Et après ?</h2>
                        </div>
                        <div class=\"card-body text-center\">
                            <p class=\"mb-5\">
                                Des souvenirs pourront être postés <strong>jusqu'à début mars 2020</strong>. Le site se fera
                                ensuite une beauté pour pouvoir être présenté à Alain le jour de son anniversaire. <br/><br/><br/><br/>
                                <i class=\"fas fa-exclamation-triangle\"></i> <strong>ATTENTION !</strong><br/>
                                Ce projet est TOP SECRET ! Alain ne doit pas être au courant : la surprise n'en sera que
                                plus belle !
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"mx-auto text-center\">
                <hr class=\"light my-4\">
                <a class=\"btn btn-primary btn-xl mb-5\" href=\"{{ path('registration') }}\">Commencer l'aventure</a></div>
        </div>
    </section>

{% endblock %}
", "home/index.html.twig", "/home/manon/Documents/Projets perso/memories/templates/home/index.html.twig");
    }
}
