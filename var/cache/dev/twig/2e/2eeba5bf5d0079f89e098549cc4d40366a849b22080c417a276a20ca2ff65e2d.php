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

/* user/settings.html.twig */
class __TwigTemplate_a669520c7f4b1e15f36175c48921a11f7a28e19807816038c7050ef2fdefbef8 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/settings.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/settings.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/settings.html.twig", 1);
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

        echo "Paramètres";
        
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
    <div class=\"container text-center\">
        <div class=\"card mx-auto mt-5\">
            <div class=\"card-header\">
                <h1 class=\"text-center mt-5 mb-5\">Paramètres</h1>
            </div>

            <div class=\"container\">
                <div class=\"row flex-wrap-reverse justify-content-center\">
                    <div class=\"col-md-6\">
                        ";
        // line 20
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), 'form_start');
        echo "
                        <div class=\"my-4\">";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "email", [], "any", false, false, false, 21), 'widget');
        echo "</div>
                        <div class=\"mb-4\">";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "firstName", [], "any", false, false, false, 22), 'widget');
        echo "</div>
                        <div class=\"mb-4\">";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "lastName", [], "any", false, false, false, 23), 'widget');
        echo "</div>
                        <div class=\"mb-4\">";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "profilePicture", [], "any", false, false, false, 24), 'widget');
        echo "</div>
                        <button type=\"button\" class=\"btn btn-info my-4\">
                            <a href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("update_password");
        echo "\" class=\"changePassword\" style=\"text-decoration: none; color: white;\">Changer mon mot de passe</a>
                        </button>
                    </div>
                    <div class=\"col-md-4 row flex-column flex-nowrap mb-5\">
                        <div class=\"col-md-9 mt-3 text-center mx-auto\">
                            <img class=\"rounded-circle\" style=\"width: 200px;height: 200px;\"
                                    ";
        // line 32
        if (preg_match("{^(https)://}", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 32, $this->source); })()), "user", [], "any", false, false, false, 32), "profilePicture", [], "any", false, false, false, 32))) {
            // line 33
            echo "                                        src=\"";
            (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 33), "profilePicture", [], "any", true, true, false, 33) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 33), "profilePicture", [], "any", false, false, false, 33)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 33), "profilePicture", [], "any", false, false, false, 33), "html", null, true))) : (print (null)));
            echo "\"
                                    ";
        } else {
            // line 35
            echo "                                        src=\"/uploads/";
            (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 35), "profilePicture", [], "any", true, true, false, 35) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 35), "profilePicture", [], "any", false, false, false, 35)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 35), "profilePicture", [], "any", false, false, false, 35), "html", null, true))) : (print (null)));
            echo "\"
                                    ";
        }
        // line 36
        echo " alt=\"profil\">
                        </div>
                    </div>
                </div>
                <div class=\"mb-4\">";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "biography", [], "any", false, false, false, 40), 'widget');
        echo "</div>
                <button type=\"submit\" class=\"btn btn-info mb-4\">Sauvegarder les changements</button>
                ";
        // line 42
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), 'form_end');
        echo "
            </div>
            <br>
            <br>
            <div class=\"row justify-content-center\">
                <button type=\"button\" class=\"btn btn-sm btn-danger my-4 col-3\" data-toggle=\"modal\" data-target=\"#myModal\">
                    Supprimer mon compte
                </button>
            </div>
            <!-- Modal -->
            <div id=\"myModal\" class=\"modal fade\" role=\"dialog\">
                <div class=\"modal-dialog\">
                    <!-- Modal content-->
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                        </div>
                        <div class=\"modal-body\">
                            <h4>Êtes-vous certain(e) de vouloir supprimer votre compte ?</h4>
                            <p>Vos souvenirs et votre profil disparaîtront du site.</p>
                        </div>
                        <div class=\"modal-footer\">
                            <button type=\"button\" class=\"button btn-danger\">
                                <a href=\"";
        // line 65
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_account");
        echo "\" style=\"text-decoration: none; color: white;\">Oui</a>
                            </button>
                            <button class=\"button btn-success\" data-dismiss=\"modal\">Non</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 77
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 78
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/settings.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "user/settings.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 78,  227 => 77,  206 => 65,  180 => 42,  175 => 40,  169 => 36,  163 => 35,  157 => 33,  155 => 32,  146 => 26,  141 => 24,  137 => 23,  133 => 22,  129 => 21,  125 => 20,  113 => 10,  103 => 9,  90 => 6,  80 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Paramètres{% endblock %}

{% block stylesheets %}
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/css/user.css') }}\">
{% endblock %}

{% block body %}

    <div class=\"container text-center\">
        <div class=\"card mx-auto mt-5\">
            <div class=\"card-header\">
                <h1 class=\"text-center mt-5 mb-5\">Paramètres</h1>
            </div>

            <div class=\"container\">
                <div class=\"row flex-wrap-reverse justify-content-center\">
                    <div class=\"col-md-6\">
                        {{ form_start(form) }}
                        <div class=\"my-4\">{{ form_widget(form.email) }}</div>
                        <div class=\"mb-4\">{{ form_widget(form.firstName) }}</div>
                        <div class=\"mb-4\">{{ form_widget(form.lastName) }}</div>
                        <div class=\"mb-4\">{{ form_widget(form.profilePicture) }}</div>
                        <button type=\"button\" class=\"btn btn-info my-4\">
                            <a href=\"{{ path('update_password') }}\" class=\"changePassword\" style=\"text-decoration: none; color: white;\">Changer mon mot de passe</a>
                        </button>
                    </div>
                    <div class=\"col-md-4 row flex-column flex-nowrap mb-5\">
                        <div class=\"col-md-9 mt-3 text-center mx-auto\">
                            <img class=\"rounded-circle\" style=\"width: 200px;height: 200px;\"
                                    {% if app.user.profilePicture matches '{^(https)://}' %}
                                        src=\"{{ app.user.profilePicture ?? null }}\"
                                    {% else %}
                                        src=\"/uploads/{{ app.user.profilePicture ?? null }}\"
                                    {% endif %} alt=\"profil\">
                        </div>
                    </div>
                </div>
                <div class=\"mb-4\">{{ form_widget(form.biography) }}</div>
                <button type=\"submit\" class=\"btn btn-info mb-4\">Sauvegarder les changements</button>
                {{ form_end(form) }}
            </div>
            <br>
            <br>
            <div class=\"row justify-content-center\">
                <button type=\"button\" class=\"btn btn-sm btn-danger my-4 col-3\" data-toggle=\"modal\" data-target=\"#myModal\">
                    Supprimer mon compte
                </button>
            </div>
            <!-- Modal -->
            <div id=\"myModal\" class=\"modal fade\" role=\"dialog\">
                <div class=\"modal-dialog\">
                    <!-- Modal content-->
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                        </div>
                        <div class=\"modal-body\">
                            <h4>Êtes-vous certain(e) de vouloir supprimer votre compte ?</h4>
                            <p>Vos souvenirs et votre profil disparaîtront du site.</p>
                        </div>
                        <div class=\"modal-footer\">
                            <button type=\"button\" class=\"button btn-danger\">
                                <a href=\"{{ path('delete_account') }}\" style=\"text-decoration: none; color: white;\">Oui</a>
                            </button>
                            <button class=\"button btn-success\" data-dismiss=\"modal\">Non</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

{% endblock %}

{% block javascripts %}
    <script src=\"{{ asset('assets/js/settings.js') }}\"></script>
{% endblock %}
", "user/settings.html.twig", "/home/manon/Documents/Projets perso/memories/templates/user/settings.html.twig");
    }
}
