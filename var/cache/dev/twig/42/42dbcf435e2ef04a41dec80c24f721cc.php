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

/* tableau/index.html.twig */
class __TwigTemplate_854c3c52175356a9d0c1a91e94b721ac extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tableau/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tableau/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "tableau/index.html.twig", 1);
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

        echo "Hello TableauController!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div class=\"example-wrapper\">
    <h1>Hello ";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["controller_name"]) || array_key_exists("controller_name", $context) ? $context["controller_name"] : (function () { throw new RuntimeError('Variable "controller_name" does not exist.', 7, $this->source); })()), "html", null, true);
        echo "! ✅</h1>

    ";
        // line 10
        echo "    <h2>Tableau : longueur ";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["nbrTab"]) || array_key_exists("nbrTab", $context) ? $context["nbrTab"] : (function () { throw new RuntimeError('Variable "nbrTab" does not exist.', 10, $this->source); })())), "html", null, true);
        echo "</h2>
    <table>
        <thead>
            <tr>
                <th>Nombre paire</th>
                <th>Nombre impair</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["nbrTab"]) || array_key_exists("nbrTab", $context) ? $context["nbrTab"] : (function () { throw new RuntimeError('Variable "nbrTab" does not exist.', 19, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
            // line 20
            echo "                ";
            if ((($context["val"] % 2) == 0)) {
                echo " 
                    <tr>
                        <td>";
                // line 22
                echo twig_escape_filter($this->env, $context["val"], "html", null, true);
                echo "</td>            
                    </tr>
                
                ";
            } else {
                // line 26
                echo "                    <tr>
                        <td></td>
                        <td>";
                // line 28
                echo twig_escape_filter($this->env, $context["val"], "html", null, true);
                echo "</td>            
                    </tr>
                ";
            }
            // line 31
            echo "
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </tbody>
    </table>
    <h2>Valeur aléatoire de mon tableau : ";
        // line 35
        echo twig_escape_filter($this->env, twig_random($this->env, (isset($context["nbrTab"]) || array_key_exists("nbrTab", $context) ? $context["nbrTab"] : (function () { throw new RuntimeError('Variable "nbrTab" does not exist.', 35, $this->source); })())), "html", null, true);
        echo "</h2>        
    <table>
        <thead>
            <tr>
                
                <th>String</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stringTab"]) || array_key_exists("stringTab", $context) ? $context["stringTab"] : (function () { throw new RuntimeError('Variable "stringTab" does not exist.', 44, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
            // line 45
            echo "                <tr>
                    <td>";
            // line 46
            echo twig_escape_filter($this->env, $context["val"], "html", null, true);
            echo "</td>            
                </tr>   
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "        </tbody>
    </table>
    <h2>Valeur aléatoire de mon tableau : ";
        // line 51
        echo twig_escape_filter($this->env, twig_random($this->env, (isset($context["stringTab"]) || array_key_exists("stringTab", $context) ? $context["stringTab"] : (function () { throw new RuntimeError('Variable "stringTab" does not exist.', 51, $this->source); })())), "html", null, true);
        echo "</h2>   
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "tableau/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 51,  175 => 49,  166 => 46,  163 => 45,  159 => 44,  147 => 35,  143 => 33,  136 => 31,  130 => 28,  126 => 26,  119 => 22,  113 => 20,  109 => 19,  96 => 10,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello TableauController!{% endblock %}

{% block body %}
<div class=\"example-wrapper\">
    <h1>Hello {{ controller_name }}! ✅</h1>

    {# Afficher les valeurs du tableau #}
    <h2>Tableau : longueur {{ nbrTab|length }}</h2>
    <table>
        <thead>
            <tr>
                <th>Nombre paire</th>
                <th>Nombre impair</th>
            </tr>
        </thead>
        <tbody>
            {% for val in nbrTab %}
                {% if  val % 2 == 0 %} 
                    <tr>
                        <td>{{ val }}</td>            
                    </tr>
                
                {% else %}
                    <tr>
                        <td></td>
                        <td>{{ val }}</td>            
                    </tr>
                {% endif %}

            {% endfor %}
        </tbody>
    </table>
    <h2>Valeur aléatoire de mon tableau : {{ random(nbrTab) }}</h2>        
    <table>
        <thead>
            <tr>
                
                <th>String</th>
            </tr>
        </thead>
        <tbody>
            {% for val in stringTab %}
                <tr>
                    <td>{{ val }}</td>            
                </tr>   
            {% endfor %}
        </tbody>
    </table>
    <h2>Valeur aléatoire de mon tableau : {{ random(stringTab) }}</h2>   
</div>
{% endblock %}
", "tableau/index.html.twig", "C:\\Program Files (x86)\\EasyPHP-Devserver-17\\eds-www\\ProjetEcole\\Framework_Symfony\\blog\\templates\\tableau\\index.html.twig");
    }
}
