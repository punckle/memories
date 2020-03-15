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

/* about/index.html.twig */
class __TwigTemplate_839b5a765cf4fb0129ef2639f93cc76b47928d31e498f7184327453079c5a2e9 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "about/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "about/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "about/index.html.twig", 1);
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

        echo "A propos d'Alain";
        
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
                        <strong>A propos d'Alain</strong>
                    </h1>
                    <br>
                </div>
            </div>
        </div>
    </header>

    <div class=\"row text-center\">
        <div class=\"col-6\"><img src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/collages/Collage_Fotor.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"Responsive image\"></div>
        <div class=\"col-6\"><img src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/collages/Collage_Fotor2.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"Responsive image\"></div>
    </div>

    <div class=\"container mt-5 mb-5\">
        <div class=\"row\">
            <h3>Alain par son papa...</h3>
            <p class=\"text-justify mt-2\">Lorsque nous nous sommes mis à la recherche d'informations pour compléter cette partie du site Internet,
            nous sommes tombés sur un texte de Claude, le papa d'Alain. Ecrit en mai 1961, il nous donne quelques précisions
            sur le chérubin : <br><br>
            <i>\"Cher fils, <br>
                Nous nous sommes promis maintes fois de commencer ici le récit de tes loufoqueries, et chaque fois nous attendions
                d'avoir un peu plus de recul pour juger quelles espiégleries mériteraient qu'on les consigne et quelles catastrophes
                il valait mieux taire. <br>
                Voici donc écrit à posteriori le résumé de tes aventures passées.
                [...] <br>
                Il faut noter tout de même pour la postérité qu'en juillet 60, alors que tu faisais une sérieuse coqueluche
                à l'âge de 3 mois, tu as fais ton baptême de l'air par un vol de 2h à 3600m d'altitude en compagnie d'un
                docteur pilote et de papa. Evidemment, tu ne t'en souviens plus mais à la descente, tu marmonnais des
                \"brmmm, brmmm\" pour expliquer tes sensations.
                [...] <br>
                Récemment, tu fis ta première crise de foie pour avoir englouti à l'improviste 150 grammes de beurre, sacré
                vorace !\"</i></p>
        </div>
        <div class=\"row\">
            <h3>... puis Alain par Alain</h3>
            <p class=\"text-justify mt-2\">Vient ensuite un complément de la part d'Alain lui-même, alors âgé de 17 ans :
                <br><br>
            <i>\"Je me souviens assez bien d'avoir aimé l'eau et le feu. L'eau car ma mère me remplissait le lavabo, me mettais
            une chaise sur laquelle je me tenais debout les deux mains faisant trempette, m'amusant à remplir et vider
            successivement des récipients. Pendant que je m'amusais, je foutais la paix à mes parents et surtout je ne
            faisais pas de bêtises car des bêtises j'en ai faites... Le feu : car chez ma grand-mère (Grand maman) me
            donnait un moule à tarte dans lequel j'allumais du papier et je ne me lassais jamais de regarder le bout
            de papier se consummer. C'était là encore un moyen (dangereux certes) mais efficace pour que je me tienne
            tranquille. En lisant ces quelques lignes, on pourrait penser que j'étais un \"emmerdeur public\". Je ne
            pense pas. Un peu turbulent et nerveux, c'est tout.</i>
            </p>
        </div>
    </div>

    <div class=\"row text-center\">
        <div class=\"col-12\"><img src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/collages/Collage_Fotor3.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"Responsive image\"></div>
    </div>

    <div class=\"container mt-5 mb-5\">
        <div class=\"row\">
            <div class=\"col-md-8 offset-md-2\">
                <ul class=\"timeline\">
                    <li>
                        <a target=\"_blank\" href=\"https://www.totoprayogo.com/#\">Naissance</a>
                        <a href=\"#\" class=\"float-right\">25.03.1960</a>
                        <p class=\"text-justify\">
                            C'est un vendredi, jour de l'Annonciation (ça ne s'invente pas), qu'Alain voit le jour à
                            Strasbourg. Jouflu, sans dents, un peu moins de cheveux qu'aujourd'hui, c'est un beau bébé !
                        </p>
                    </li>
                    <li>
                        <a href=\"#\">Communion</a>
                        <a href=\"#\" class=\"float-right\">1974</a>
                        <p class=\"text-justify\">
                            Alain, alors âgé de 14 ans, fait sa communion pour noyer le poisson. Nous ne sommes pas dupes :
                            ce n'est pas parce qu'il peut désormais être enfant de coeur qu'il n'en reste pas moins
                            \"turbulent et nerveux\" (selon ses dires).
                        </p>
                    </li>
                    <li>
                        <a href=\"#\">Déménagement à Olivet</a>
                        <a href=\"#\" class=\"float-right\">1975</a>
                        <p class=\"text-justify\">
                            C'est dans le Loiret que notre Alsacien va vivre son adolescence et, on s'en doute bien, enchaîner
                            les bêtises au doux son de Abba, John Lennon, Pink Floyd, Bob Marley et compagnie. C'est à
                            cette époque qu'il rencontre Olav, BBH, Jean-Marie et tous les autres.
                        </p>
                    </li>
                    <li>
                        <a href=\"#\">Rencontre avec Valérie</a>
                        <a href=\"#\" class=\"float-right\">1984</a>
                        <p class=\"text-justify\">
                            Si vous êtes un scénariste d'Holywood, n'hésitez pas à nous contacter car cette histoire, beaucoup
                            trop complexe pour être résumée, ferait un très beau film romantique. Pour le casting, Marie
                            propose Hugh Grant jeune dans le rôle d'Alain (il paraît qu'elle trouve qu'il lui ressemble).
                            <br>
                            En gros : ils se rencontrèrent, ce fut le coup de foudre et *SPOILER ALERT* ils se marièrent et
                            eurent beaucoup d'enfants.
                        </p>
                    </li>
                    <li>
                        <a href=\"#\">Mariage avec Valérie</a>
                        <a href=\"#\" class=\"float-right\">06-07.06.1986</a>
                        <p class=\"text-justify\">
                            C'est au cours de ce week-end qu'Alain et Valérie se disent oui pour la vie. C'est d'abord
                            la chouille avec les copains, le 06 juin ; mais pas trop, car il faut avoir l'air frais pour
                            célébrer le mariage avec toute la famille le lendemain. Ce mariage est suivi d'un superbe voyage de noces
                            en Corse, à partir du 19 Juin.
                        </p>
                    </li>
                    <li>
                        <a href=\"#\">Naissance de Lauriane</a>
                        <a href=\"#\" class=\"float-right\">16.03.1987</a>
                        <p class=\"text-justify\">
                            C'est à la clinique Adassa de Strasbourg, le même endroit où les quatre murs de l'établissement
                            ont eu l'honneur d'entendre, pour la première fois, les cris d'Alain presque 27 ans auparavant,
                            que Lauriane voit le jour. Alain et Valérie nagent dans le bonheur avec leur petit \"poisson\".
                        </p>
                    </li>
                    <li>
                        <a href=\"#\">Naissance de Pierrick & Manon</a>
                        <a href=\"#\" class=\"float-right\">15.01.1989</a>
                        <p class=\"text-justify\">
                            La légende veut qu'en apprenant que la famille allait presque doubler du jour au
                            lendemain, Alain aurait été bien heureux de pouvoir se tenir à une étagère dans le cabinet du
                            gynécologue. Quelques mois plus tard, remis de leurs émotions, Alain, Valérie et Lauriane accueillent
                            Pierrick et Manon.
                        </p>
                    </li>
                    <li>
                        <a href=\"#\">Naissance de Marie</a>
                        <a href=\"#\" class=\"float-right\">10.12.1992</a>
                        <p class=\"text-justify\">
                            Pour mettre un peu de bruit dans l'appartement de Lampertheim dans lequel la joyeuse troupe
                            venait d'emménager, Marie, dernière de la tribu, pointa le bout de son nez.
                        </p>
                    </li>
                    <li>
                        <a href=\"#\">Mariage de Lauriane et Steve</a>
                        <a href=\"#\" class=\"float-right\">09.06.2012</a>
                        <p>Le jour où Alain a mené son aînée jusqu'à l'autel, on ne peut qu'imaginer le coup de vieux !
                            Heureusement, Lauriane et Steve avaient tout prévu : pour le maintenir en forme, rien de mieux
                            qu'acheter une maison juste en face de chez Valérie et lui, avec des travaux. De quoi l'occuper
                            pendant quelques mois !
                        </p>
                    </li>
                    <li>
                        <a href=\"#\">Naissance de Nolan</a>
                        <a href=\"#\" class=\"float-right\">27.06.2013</a>
                        <p>C'est après un long travail de 19h pour Lauriane qu'Alain devient Papi pour la première
                            fois. Par ses rires (et ses pleurs), Nolan est venu redonner de la vie (et du désordre aussi)
                            au nid familial, vidé au fur et à mesure par l'envol des 4 enfants.
                        </p>
                    </li>
                    <li>
                        <a href=\"#\">Naissance de Lena</a>
                        <a href=\"#\" class=\"float-right\">01.02.2016</a>
                        <p>C'est bien beau tout ça, mais Alain commençait à s'ennuyer en attendant la retraite. Heureusement,
                            Lauriane et Steve ont pensé à tout : un deuxième enfant, ! Chouette, il va falloir aménager le
                            grenier de leur maison pour y faire une chambre à Nolan et Lena.
                        </p>
                    </li>
                    <li>
                        <a href=\"#\">Mariage de Marie et Benjamin</a>
                        <a href=\"#\" class=\"float-right\">28.07.2018</a>
                        <p>
                            La petite dernière se marie. Encore une qui abandonne le nom de Baillet ! Marie a un nouvel
                            homme dans sa vie, mais Alain restera toujours son papa chéri.
                        </p>
                    </li>
                    <li>
                        <a href=\"#\">Enfin la retraite !</a>
                        <a href=\"#\" class=\"float-right\">Mai 2020</a>
                        <p>
                            A suivre...
                        </p>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class=\"row text-center\">
        <div class=\"col-6\"><img src=\"";
        // line 193
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/collages/Collage_Fotor5.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"Responsive image\"></div>
        <div class=\"col-6\"><img src=\"";
        // line 194
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/collages/Collage_Fotor6.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"Responsive image\"></div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "about/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  310 => 194,  306 => 193,  175 => 65,  132 => 25,  128 => 24,  112 => 10,  102 => 9,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}A propos d'Alain{% endblock %}

{% block stylesheets %}
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/css/about.css') }}\">
{% endblock %}

{% block body %}
    <header class=\"masthead text-center text-white d-flex\">
        <div class=\"container my-auto\">
            <div class=\"row\">
                <div class=\"col-lg-10 mx-auto\">
                    <h1 class=\"text-uppercase\">
                        <strong>A propos d'Alain</strong>
                    </h1>
                    <br>
                </div>
            </div>
        </div>
    </header>

    <div class=\"row text-center\">
        <div class=\"col-6\"><img src=\"{{ asset('assets/images/collages/Collage_Fotor.jpg') }}\" class=\"img-fluid\" alt=\"Responsive image\"></div>
        <div class=\"col-6\"><img src=\"{{ asset('assets/images/collages/Collage_Fotor2.jpg') }}\" class=\"img-fluid\" alt=\"Responsive image\"></div>
    </div>

    <div class=\"container mt-5 mb-5\">
        <div class=\"row\">
            <h3>Alain par son papa...</h3>
            <p class=\"text-justify mt-2\">Lorsque nous nous sommes mis à la recherche d'informations pour compléter cette partie du site Internet,
            nous sommes tombés sur un texte de Claude, le papa d'Alain. Ecrit en mai 1961, il nous donne quelques précisions
            sur le chérubin : <br><br>
            <i>\"Cher fils, <br>
                Nous nous sommes promis maintes fois de commencer ici le récit de tes loufoqueries, et chaque fois nous attendions
                d'avoir un peu plus de recul pour juger quelles espiégleries mériteraient qu'on les consigne et quelles catastrophes
                il valait mieux taire. <br>
                Voici donc écrit à posteriori le résumé de tes aventures passées.
                [...] <br>
                Il faut noter tout de même pour la postérité qu'en juillet 60, alors que tu faisais une sérieuse coqueluche
                à l'âge de 3 mois, tu as fais ton baptême de l'air par un vol de 2h à 3600m d'altitude en compagnie d'un
                docteur pilote et de papa. Evidemment, tu ne t'en souviens plus mais à la descente, tu marmonnais des
                \"brmmm, brmmm\" pour expliquer tes sensations.
                [...] <br>
                Récemment, tu fis ta première crise de foie pour avoir englouti à l'improviste 150 grammes de beurre, sacré
                vorace !\"</i></p>
        </div>
        <div class=\"row\">
            <h3>... puis Alain par Alain</h3>
            <p class=\"text-justify mt-2\">Vient ensuite un complément de la part d'Alain lui-même, alors âgé de 17 ans :
                <br><br>
            <i>\"Je me souviens assez bien d'avoir aimé l'eau et le feu. L'eau car ma mère me remplissait le lavabo, me mettais
            une chaise sur laquelle je me tenais debout les deux mains faisant trempette, m'amusant à remplir et vider
            successivement des récipients. Pendant que je m'amusais, je foutais la paix à mes parents et surtout je ne
            faisais pas de bêtises car des bêtises j'en ai faites... Le feu : car chez ma grand-mère (Grand maman) me
            donnait un moule à tarte dans lequel j'allumais du papier et je ne me lassais jamais de regarder le bout
            de papier se consummer. C'était là encore un moyen (dangereux certes) mais efficace pour que je me tienne
            tranquille. En lisant ces quelques lignes, on pourrait penser que j'étais un \"emmerdeur public\". Je ne
            pense pas. Un peu turbulent et nerveux, c'est tout.</i>
            </p>
        </div>
    </div>

    <div class=\"row text-center\">
        <div class=\"col-12\"><img src=\"{{ asset('assets/images/collages/Collage_Fotor3.jpg') }}\" class=\"img-fluid\" alt=\"Responsive image\"></div>
    </div>

    <div class=\"container mt-5 mb-5\">
        <div class=\"row\">
            <div class=\"col-md-8 offset-md-2\">
                <ul class=\"timeline\">
                    <li>
                        <a target=\"_blank\" href=\"https://www.totoprayogo.com/#\">Naissance</a>
                        <a href=\"#\" class=\"float-right\">25.03.1960</a>
                        <p class=\"text-justify\">
                            C'est un vendredi, jour de l'Annonciation (ça ne s'invente pas), qu'Alain voit le jour à
                            Strasbourg. Jouflu, sans dents, un peu moins de cheveux qu'aujourd'hui, c'est un beau bébé !
                        </p>
                    </li>
                    <li>
                        <a href=\"#\">Communion</a>
                        <a href=\"#\" class=\"float-right\">1974</a>
                        <p class=\"text-justify\">
                            Alain, alors âgé de 14 ans, fait sa communion pour noyer le poisson. Nous ne sommes pas dupes :
                            ce n'est pas parce qu'il peut désormais être enfant de coeur qu'il n'en reste pas moins
                            \"turbulent et nerveux\" (selon ses dires).
                        </p>
                    </li>
                    <li>
                        <a href=\"#\">Déménagement à Olivet</a>
                        <a href=\"#\" class=\"float-right\">1975</a>
                        <p class=\"text-justify\">
                            C'est dans le Loiret que notre Alsacien va vivre son adolescence et, on s'en doute bien, enchaîner
                            les bêtises au doux son de Abba, John Lennon, Pink Floyd, Bob Marley et compagnie. C'est à
                            cette époque qu'il rencontre Olav, BBH, Jean-Marie et tous les autres.
                        </p>
                    </li>
                    <li>
                        <a href=\"#\">Rencontre avec Valérie</a>
                        <a href=\"#\" class=\"float-right\">1984</a>
                        <p class=\"text-justify\">
                            Si vous êtes un scénariste d'Holywood, n'hésitez pas à nous contacter car cette histoire, beaucoup
                            trop complexe pour être résumée, ferait un très beau film romantique. Pour le casting, Marie
                            propose Hugh Grant jeune dans le rôle d'Alain (il paraît qu'elle trouve qu'il lui ressemble).
                            <br>
                            En gros : ils se rencontrèrent, ce fut le coup de foudre et *SPOILER ALERT* ils se marièrent et
                            eurent beaucoup d'enfants.
                        </p>
                    </li>
                    <li>
                        <a href=\"#\">Mariage avec Valérie</a>
                        <a href=\"#\" class=\"float-right\">06-07.06.1986</a>
                        <p class=\"text-justify\">
                            C'est au cours de ce week-end qu'Alain et Valérie se disent oui pour la vie. C'est d'abord
                            la chouille avec les copains, le 06 juin ; mais pas trop, car il faut avoir l'air frais pour
                            célébrer le mariage avec toute la famille le lendemain. Ce mariage est suivi d'un superbe voyage de noces
                            en Corse, à partir du 19 Juin.
                        </p>
                    </li>
                    <li>
                        <a href=\"#\">Naissance de Lauriane</a>
                        <a href=\"#\" class=\"float-right\">16.03.1987</a>
                        <p class=\"text-justify\">
                            C'est à la clinique Adassa de Strasbourg, le même endroit où les quatre murs de l'établissement
                            ont eu l'honneur d'entendre, pour la première fois, les cris d'Alain presque 27 ans auparavant,
                            que Lauriane voit le jour. Alain et Valérie nagent dans le bonheur avec leur petit \"poisson\".
                        </p>
                    </li>
                    <li>
                        <a href=\"#\">Naissance de Pierrick & Manon</a>
                        <a href=\"#\" class=\"float-right\">15.01.1989</a>
                        <p class=\"text-justify\">
                            La légende veut qu'en apprenant que la famille allait presque doubler du jour au
                            lendemain, Alain aurait été bien heureux de pouvoir se tenir à une étagère dans le cabinet du
                            gynécologue. Quelques mois plus tard, remis de leurs émotions, Alain, Valérie et Lauriane accueillent
                            Pierrick et Manon.
                        </p>
                    </li>
                    <li>
                        <a href=\"#\">Naissance de Marie</a>
                        <a href=\"#\" class=\"float-right\">10.12.1992</a>
                        <p class=\"text-justify\">
                            Pour mettre un peu de bruit dans l'appartement de Lampertheim dans lequel la joyeuse troupe
                            venait d'emménager, Marie, dernière de la tribu, pointa le bout de son nez.
                        </p>
                    </li>
                    <li>
                        <a href=\"#\">Mariage de Lauriane et Steve</a>
                        <a href=\"#\" class=\"float-right\">09.06.2012</a>
                        <p>Le jour où Alain a mené son aînée jusqu'à l'autel, on ne peut qu'imaginer le coup de vieux !
                            Heureusement, Lauriane et Steve avaient tout prévu : pour le maintenir en forme, rien de mieux
                            qu'acheter une maison juste en face de chez Valérie et lui, avec des travaux. De quoi l'occuper
                            pendant quelques mois !
                        </p>
                    </li>
                    <li>
                        <a href=\"#\">Naissance de Nolan</a>
                        <a href=\"#\" class=\"float-right\">27.06.2013</a>
                        <p>C'est après un long travail de 19h pour Lauriane qu'Alain devient Papi pour la première
                            fois. Par ses rires (et ses pleurs), Nolan est venu redonner de la vie (et du désordre aussi)
                            au nid familial, vidé au fur et à mesure par l'envol des 4 enfants.
                        </p>
                    </li>
                    <li>
                        <a href=\"#\">Naissance de Lena</a>
                        <a href=\"#\" class=\"float-right\">01.02.2016</a>
                        <p>C'est bien beau tout ça, mais Alain commençait à s'ennuyer en attendant la retraite. Heureusement,
                            Lauriane et Steve ont pensé à tout : un deuxième enfant, ! Chouette, il va falloir aménager le
                            grenier de leur maison pour y faire une chambre à Nolan et Lena.
                        </p>
                    </li>
                    <li>
                        <a href=\"#\">Mariage de Marie et Benjamin</a>
                        <a href=\"#\" class=\"float-right\">28.07.2018</a>
                        <p>
                            La petite dernière se marie. Encore une qui abandonne le nom de Baillet ! Marie a un nouvel
                            homme dans sa vie, mais Alain restera toujours son papa chéri.
                        </p>
                    </li>
                    <li>
                        <a href=\"#\">Enfin la retraite !</a>
                        <a href=\"#\" class=\"float-right\">Mai 2020</a>
                        <p>
                            A suivre...
                        </p>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class=\"row text-center\">
        <div class=\"col-6\"><img src=\"{{ asset('assets/images/collages/Collage_Fotor5.jpg') }}\" class=\"img-fluid\" alt=\"Responsive image\"></div>
        <div class=\"col-6\"><img src=\"{{ asset('assets/images/collages/Collage_Fotor6.jpg') }}\" class=\"img-fluid\" alt=\"Responsive image\"></div>
    </div>
{% endblock %}
", "about/index.html.twig", "/home/manon/Documents/Projets perso/memories/templates/about/index.html.twig");
    }
}
