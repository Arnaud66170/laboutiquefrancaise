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

/* base.html.twig */
class __TwigTemplate_1f9d3e4550f53cd9584ac13b98be6054 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
        ";
        // line 8
        echo "        ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "
        ";
        // line 12
        $this->displayBlock('javascripts', $context, $blocks);
        // line 15
        echo "
        <style>
            .bd-placeholder-img {
                font-size: 1.125rem;
                text-anchor: middle;
                -webkit-user-select: none;
                -moz-user-select: none;
                user-select: none;
            }

            @media (min-width: 768px) {
                .bd-placeholder-img-lg {
                font-size: 3.5rem;
                }
            }
            
        </style>
    
    </head>
    <body>
    <!-- Custom styles for this template -->
    <link href=\"carousel.css\" rel=\"stylesheet\">
  </head>
  <body>
    
        <header>
        <nav class=\"navbar navbar-expand-md navbar-dark fixed-top bg-dark\">
            <div class=\"container-fluid\">
                <a class=\"navbar-brand\" href=";
        // line 43
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo ">La boutique Française</a>
                <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarCollapse\" aria-controls=\"navbarCollapse\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
                <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
                    <ul class=\"navbar-nav me-auto mb-2 mb-md-0\">
                        <li class=\"nav-item\">
                            <a class=\"nav-link active\" aria-current=\"page\" href=\"#\">Nos produits</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link \" aria-current=\"page\" href=\"#\">Qui sommes-nous ?</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link \" href=\"#\">Contact</a>
                        </li>
                        ";
        // line 61
        echo "                    </ul>
                    <div class=\"navbar-item-custom\" role=\"navigation\"id=\"navbar-custom\">
                        ";
        // line 63
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 63, $this->source); })()), "user", [], "any", false, false, false, 63)) {
            // line 64
            echo "                            <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_account");
            echo "\">Mon compte <small>(";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 64, $this->source); })()), "user", [], "any", false, false, false, 64), "firstname", [], "any", false, false, false, 64), "html", null, true);
            echo ")</small></a> | <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Déconnexion</a> 
                            ";
        } else {
            // line 66
            echo "                                <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Connexion</a> | <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\">Inscription</a> 
                        ";
        }
        // line 68
        echo "                    </div>
                </div>
            </div>
        </nav>
        </header>

    <main>

    ";
        // line 76
        if (        $this->hasBlock("carousel", $context, $blocks)) {
            // line 77
            echo "        <div id=\"myCarousel\" class=\"carousel slide\" data-bs-ride=\"carousel\">
            <div class=\"carousel-indicators\">
            <button type=\"button\" data-bs-target=\"#myCarousel\" data-bs-slide-to=\"0\" class=\"active\" aria-current=\"true\" aria-label=\"Slide 1\"></button>
            <button type=\"button\" data-bs-target=\"#myCarousel\" data-bs-slide-to=\"1\" aria-label=\"Slide 2\"></button>
            <button type=\"button\" data-bs-target=\"#myCarousel\" data-bs-slide-to=\"2\" aria-label=\"Slide 3\"></button>
            </div>
            <div class=\"carousel-inner\">
            <div class=\"carousel-item active\">
                <svg class=\"bd-placeholder-img\" width=\"100%\" height=\"100%\" xmlns=\"http://www.w3.org/2000/svg\" aria-hidden=\"true\" preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\"><rect width=\"100%\" height=\"100%\" fill=\"#777\"/></svg>

                <div class=\"container\">
                <div class=\"carousel-caption text-start\">
                    <h1>Example headline.</h1>
                    <p>Some representative placeholder content for the first slide of the carousel.</p>
                    <p><a class=\"btn btn-lg btn-primary\" href=\"#\">Sign up today</a></p>
                </div>
                </div>
            </div>
            <div class=\"carousel-item\">
                <svg class=\"bd-placeholder-img\" width=\"100%\" height=\"100%\" xmlns=\"http://www.w3.org/2000/svg\" aria-hidden=\"true\" preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\"><rect width=\"100%\" height=\"100%\" fill=\"#777\"/></svg>

                <div class=\"container\">
                <div class=\"carousel-caption\">
                    <h1>Another example headline.</h1>
                    <p>Some representative placeholder content for the second slide of the carousel.</p>
                    <p><a class=\"btn btn-lg btn-primary\" href=\"#\">Learn more</a></p>
                </div>
                </div>
            </div>
            <div class=\"carousel-item\">
                <svg class=\"bd-placeholder-img\" width=\"100%\" height=\"100%\" xmlns=\"http://www.w3.org/2000/svg\" aria-hidden=\"true\" preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\"><rect width=\"100%\" height=\"100%\" fill=\"#777\"/></svg>

                <div class=\"container\">
                <div class=\"carousel-caption text-end\">
                    <h1>One more for good measure.</h1>
                    <p>Some representative placeholder content for the third slide of this carousel.</p>
                    <p><a class=\"btn btn-lg btn-primary\" href=\"#\">Browse gallery</a></p>
                </div>
                </div>
            </div>
            </div>
            <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#myCarousel\" data-bs-slide=\"prev\">
            <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
            <span class=\"visually-hidden\">Previous</span>
            </button>
            <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#myCarousel\" data-bs-slide=\"next\">
            <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
            <span class=\"visually-hidden\">Next</span>
            </button>
        </div>
    ";
        }
        // line 128
        echo "    
        <div class=\"container marketing\">
            ";
        // line 130
        $this->displayBlock('content', $context, $blocks);
        // line 132
        echo "        </div><!-- /.container -->

        <!-- FOOTER -->
        <footer class=\"footer-custom\">
 
            <p>
                &copy; 2017–2022 La boutique française <br/> 
                <small> La boutique 100% made in France <br/> 
                &middot; <a href=\"#\">Privacy</a> 
                &middot; <a href=\"#\">Terms</a></small>
            </p>
        </footer>
    </main>
    </body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "La boutique Française";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "            ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app");
        echo "
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 12
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 13
        echo "            ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app");
        echo "
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 130
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 131
        echo "            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  309 => 131,  299 => 130,  286 => 13,  276 => 12,  263 => 9,  253 => 8,  234 => 5,  209 => 132,  207 => 130,  203 => 128,  150 => 77,  148 => 76,  138 => 68,  130 => 66,  120 => 64,  118 => 63,  114 => 61,  96 => 43,  66 => 15,  64 => 12,  61 => 11,  58 => 8,  53 => 5,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}La boutique Française{% endblock %}</title>
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
        {# Run `composer require symfony/webpack-encore-bundle` to start using Symfony UX #}
        {% block stylesheets %}
            {{ encore_entry_link_tags('app') }}
        {% endblock %}

        {% block javascripts %}
            {{ encore_entry_script_tags('app') }}
        {% endblock %}

        <style>
            .bd-placeholder-img {
                font-size: 1.125rem;
                text-anchor: middle;
                -webkit-user-select: none;
                -moz-user-select: none;
                user-select: none;
            }

            @media (min-width: 768px) {
                .bd-placeholder-img-lg {
                font-size: 3.5rem;
                }
            }
            
        </style>
    
    </head>
    <body>
    <!-- Custom styles for this template -->
    <link href=\"carousel.css\" rel=\"stylesheet\">
  </head>
  <body>
    
        <header>
        <nav class=\"navbar navbar-expand-md navbar-dark fixed-top bg-dark\">
            <div class=\"container-fluid\">
                <a class=\"navbar-brand\" href={{path('app_home')}}>La boutique Française</a>
                <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarCollapse\" aria-controls=\"navbarCollapse\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
                <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
                    <ul class=\"navbar-nav me-auto mb-2 mb-md-0\">
                        <li class=\"nav-item\">
                            <a class=\"nav-link active\" aria-current=\"page\" href=\"#\">Nos produits</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link \" aria-current=\"page\" href=\"#\">Qui sommes-nous ?</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link \" href=\"#\">Contact</a>
                        </li>
                        {# <li class=\"nav-item\">
                            <a class=\"nav-link disabled\" href=\"#\" tabindex=\"-1\" aria-disabled=\"true\">Disabled</a>
                        </li> #}
                    </ul>
                    <div class=\"navbar-item-custom\" role=\"navigation\"id=\"navbar-custom\">
                        {% if app.user %}
                            <a href=\"{{ path('app_account')}}\">Mon compte <small>({{app.user.firstname}})</small></a> | <a href=\"{{ path('app_logout')}}\">Déconnexion</a> 
                            {% else %}
                                <a href=\"{{ path('app_login')}}\">Connexion</a> | <a href=\"{{ path('app_register')}}\">Inscription</a> 
                        {% endif %}
                    </div>
                </div>
            </div>
        </nav>
        </header>

    <main>

    {% if block('carousel') is defined %}
        <div id=\"myCarousel\" class=\"carousel slide\" data-bs-ride=\"carousel\">
            <div class=\"carousel-indicators\">
            <button type=\"button\" data-bs-target=\"#myCarousel\" data-bs-slide-to=\"0\" class=\"active\" aria-current=\"true\" aria-label=\"Slide 1\"></button>
            <button type=\"button\" data-bs-target=\"#myCarousel\" data-bs-slide-to=\"1\" aria-label=\"Slide 2\"></button>
            <button type=\"button\" data-bs-target=\"#myCarousel\" data-bs-slide-to=\"2\" aria-label=\"Slide 3\"></button>
            </div>
            <div class=\"carousel-inner\">
            <div class=\"carousel-item active\">
                <svg class=\"bd-placeholder-img\" width=\"100%\" height=\"100%\" xmlns=\"http://www.w3.org/2000/svg\" aria-hidden=\"true\" preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\"><rect width=\"100%\" height=\"100%\" fill=\"#777\"/></svg>

                <div class=\"container\">
                <div class=\"carousel-caption text-start\">
                    <h1>Example headline.</h1>
                    <p>Some representative placeholder content for the first slide of the carousel.</p>
                    <p><a class=\"btn btn-lg btn-primary\" href=\"#\">Sign up today</a></p>
                </div>
                </div>
            </div>
            <div class=\"carousel-item\">
                <svg class=\"bd-placeholder-img\" width=\"100%\" height=\"100%\" xmlns=\"http://www.w3.org/2000/svg\" aria-hidden=\"true\" preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\"><rect width=\"100%\" height=\"100%\" fill=\"#777\"/></svg>

                <div class=\"container\">
                <div class=\"carousel-caption\">
                    <h1>Another example headline.</h1>
                    <p>Some representative placeholder content for the second slide of the carousel.</p>
                    <p><a class=\"btn btn-lg btn-primary\" href=\"#\">Learn more</a></p>
                </div>
                </div>
            </div>
            <div class=\"carousel-item\">
                <svg class=\"bd-placeholder-img\" width=\"100%\" height=\"100%\" xmlns=\"http://www.w3.org/2000/svg\" aria-hidden=\"true\" preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\"><rect width=\"100%\" height=\"100%\" fill=\"#777\"/></svg>

                <div class=\"container\">
                <div class=\"carousel-caption text-end\">
                    <h1>One more for good measure.</h1>
                    <p>Some representative placeholder content for the third slide of this carousel.</p>
                    <p><a class=\"btn btn-lg btn-primary\" href=\"#\">Browse gallery</a></p>
                </div>
                </div>
            </div>
            </div>
            <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#myCarousel\" data-bs-slide=\"prev\">
            <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
            <span class=\"visually-hidden\">Previous</span>
            </button>
            <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#myCarousel\" data-bs-slide=\"next\">
            <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
            <span class=\"visually-hidden\">Next</span>
            </button>
        </div>
    {% endif %}
    
        <div class=\"container marketing\">
            {% block content %}
            {% endblock %}
        </div><!-- /.container -->

        <!-- FOOTER -->
        <footer class=\"footer-custom\">
 
            <p>
                &copy; 2017–2022 La boutique française <br/> 
                <small> La boutique 100% made in France <br/> 
                &middot; <a href=\"#\">Privacy</a> 
                &middot; <a href=\"#\">Terms</a></small>
            </p>
        </footer>
    </main>
    </body>
</html>
", "base.html.twig", "C:\\wamp64\\www\\laboutiquefrancaise\\templates\\base.html.twig");
    }
}
