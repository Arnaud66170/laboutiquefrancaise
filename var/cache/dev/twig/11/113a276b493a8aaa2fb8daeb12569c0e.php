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

/* cart/index.html.twig */
class __TwigTemplate_432dea7c664ca22a2773fa8acbcfbc64 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "cart/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Mon panier - La boutique Française ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    <h1>Mon panier</h1>
    Retrouvez ici l'ensemble des produits que vous avez ajouté à votre panier
    <hr>
    MON PANIER

    <table class=\"table mt-3\">
        <thead>
            <tr>
                <th scope=\"col\">Produit</th>
                <th scope=\"col\"></th>
                <th scope=\"col\">Quantité</th>
                <th scope=\"col\">Prix</th>
                <th scope=\"col\">Total</th>
                <th scope=\"col\"></th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 23
        $context["total"] = null;
        // line 24
        echo "            ";
        // line 25
        echo "            ";
        // line 26
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 26, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 27
            echo "                <tr>
                    <th>
                        <img src=\"/uploads/";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 29), "illustration", [], "any", false, false, false, 29), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 29), "name", [], "any", false, false, false, 29), "html", null, true);
            echo "\" height=\"75px\" ><br/>                        
                    </th>
                    <td>
                        ";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 32), "name", [], "any", false, false, false, 32), "html", null, true);
            echo " <br/>
                        <small> ";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 33), "subtitle", [], "any", false, false, false, 33), "html", null, true);
            echo " </small>
                    </td>
                    <td>x ";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
                    <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 36), "price", [], "any", false, false, false, 36) / 100), 2, ",", "."), "html", null, true);
            echo " €</td>
                    <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 37), "price", [], "any", false, false, false, 37) * twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 37)) / 100), 2, ",", "."), "html", null, true);
            echo " €</td>
                    <td>
                        ";
            // line 40
            echo "                        <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/delete.png"), "html", null, true);
            echo "\" height=\"15px\" alt=\"supprimer\">
                    </td>
                </tr>

                ";
            // line 44
            $context["total"] = ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 44, $this->source); })()) + (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 44), "price", [], "any", false, false, false, 44) * twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 44)));
            // line 45
            echo "                ";
            // line 46
            echo "            ";
            // line 47
            echo "            

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "        </tbody>
    </table>
    <div class=\"text-end mb-5\">
        <b>Nombre de produits : </b> ";
        // line 53
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 53, $this->source); })())), "html", null, true);
        echo " <br/>
        <b>Total de mon panier :</b>";
        // line 54
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 54, $this->source); })()) / 100), 2, ",", "."), "html", null, true);
        echo " €<br/>
        <a href=\"\" class=\"btn btn-success btn-block mt-3\">Valider mon panier</a>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "cart/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 54,  179 => 53,  174 => 50,  166 => 47,  164 => 46,  162 => 45,  160 => 44,  152 => 40,  147 => 37,  143 => 36,  139 => 35,  134 => 33,  130 => 32,  122 => 29,  118 => 27,  113 => 26,  111 => 25,  109 => 24,  107 => 23,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mon panier - La boutique Française {% endblock %}

{% block content %}
    <h1>Mon panier</h1>
    Retrouvez ici l'ensemble des produits que vous avez ajouté à votre panier
    <hr>
    MON PANIER

    <table class=\"table mt-3\">
        <thead>
            <tr>
                <th scope=\"col\">Produit</th>
                <th scope=\"col\"></th>
                <th scope=\"col\">Quantité</th>
                <th scope=\"col\">Prix</th>
                <th scope=\"col\">Total</th>
                <th scope=\"col\"></th>
            </tr>
        </thead>
        <tbody>
            {% set total = null %}
            {# {% set total_cart = 0 %} #}
            {# {{dump(cart)}} #}
            {% for product in cart %}
                <tr>
                    <th>
                        <img src=\"/uploads/{{product.product.illustration}}\" alt=\"{{product.product.name}}\" height=\"75px\" ><br/>                        
                    </th>
                    <td>
                        {{product.product.name}} <br/>
                        <small> {{product.product.subtitle}} </small>
                    </td>
                    <td>x {{product.quantity}}</td>
                    <td>{{(product.product.price / 100) | number_format (2, ',', '.')}} €</td>
                    <td>{{((product.product.price * product.quantity) / 100) | number_format (2, ',', '.')}} €</td>
                    <td>
                        {# <a href=\"\" #}
                        <img src=\"{{ asset ('img/delete.png') }}\" height=\"15px\" alt=\"supprimer\">
                    </td>
                </tr>

                {% set total = total + (product.product.price * product.quantity) %}
                {# {% set total_cart = total_cart + product.quantity %} #}
            {# {{dump(total_cart)}} #}
            

            {% endfor %}
        </tbody>
    </table>
    <div class=\"text-end mb-5\">
        <b>Nombre de produits : </b> {{ total|length }} <br/>
        <b>Total de mon panier :</b>{{(total / 100) | number_format (2, ',', '.')}} €<br/>
        <a href=\"\" class=\"btn btn-success btn-block mt-3\">Valider mon panier</a>
    </div>
{% endblock %}
", "cart/index.html.twig", "C:\\wamp64\\www\\laboutiquefrancaise\\templates\\cart\\index.html.twig");
    }
}
