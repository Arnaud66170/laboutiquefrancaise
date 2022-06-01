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
            </tr>
        </thead>
        <tbody>
            ";
        // line 22
        $context["total"] = null;
        // line 23
        echo "            ";
        $context["total_cart"] = null;
        // line 24
        echo "            ";
        // line 25
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 25, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 26
            echo "                <tr>
                    <th>
                        <img src=\"/uploads/";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 28), "illustration", [], "any", false, false, false, 28), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 28), "name", [], "any", false, false, false, 28), "html", null, true);
            echo "\" height=\"75px\" ><br/>                        
                    </th>
                    <td>
                        ";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 31), "name", [], "any", false, false, false, 31), "html", null, true);
            echo " <br/>
                        <small> ";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 32), "subtitle", [], "any", false, false, false, 32), "html", null, true);
            echo " </small>
                    </td>
                    <td>x ";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 34), "html", null, true);
            echo "</td>
                    <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 35), "price", [], "any", false, false, false, 35) / 100), 2, ",", "."), "html", null, true);
            echo " €</td>
                    <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 36), "price", [], "any", false, false, false, 36) * twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 36)) / 100), 2, ",", "."), "html", null, true);
            echo " €</td>
                </tr>
                    ";
            // line 38
            $context["total"] = ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 38, $this->source); })()) + (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 38), "price", [], "any", false, false, false, 38) * twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 38)));
            // line 39
            echo "            ";
            $context["total_cart"] = ((isset($context["total_cart"]) || array_key_exists("total_cart", $context) ? $context["total_cart"] : (function () { throw new RuntimeError('Variable "total_cart" does not exist.', 39, $this->source); })()) + twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 39));
            // line 40
            echo "            ";
            // line 41
            echo "            

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "        </tbody>
    </table>
    <div class=\"text-end mb-5\">
        <b>Nombre de produits : </b> ";
        // line 47
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 47, $this->source); })())), "html", null, true);
        echo " <br/>
        <b>Total de mon panier :</b>";
        // line 48
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 48, $this->source); })()) / 100), 2, ",", "."), "html", null, true);
        echo " €<br/>
        <a href=\"\" class=\"btn btn-success btn-block\">Valider mon panier</a>
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
        return array (  176 => 48,  172 => 47,  167 => 44,  159 => 41,  157 => 40,  154 => 39,  152 => 38,  147 => 36,  143 => 35,  139 => 34,  134 => 32,  130 => 31,  122 => 28,  118 => 26,  113 => 25,  111 => 24,  108 => 23,  106 => 22,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
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
            </tr>
        </thead>
        <tbody>
            {% set total = null %}
            {% set total_cart = null %}
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
                </tr>
                    {% set total = total + (product.product.price * product.quantity) %}
            {% set total_cart = total_cart + product.quantity %}
            {# {{dump(total_cart)}} #}
            

            {% endfor %}
        </tbody>
    </table>
    <div class=\"text-end mb-5\">
        <b>Nombre de produits : </b> {{ total|length }} <br/>
        <b>Total de mon panier :</b>{{(total / 100) | number_format (2, ',', '.')}} €<br/>
        <a href=\"\" class=\"btn btn-success btn-block\">Valider mon panier</a>
    </div>
{% endblock %}
", "cart/index.html.twig", "C:\\wamp64\\www\\laboutiquefrancaise\\templates\\cart\\index.html.twig");
    }
}
