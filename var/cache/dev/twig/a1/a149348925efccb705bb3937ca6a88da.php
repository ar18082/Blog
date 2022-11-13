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
class __TwigTemplate_2e28938bc97b201051005636635acfba extends Template
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
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
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
        <!-- CSS only -->
        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "
       
    </head>
    <body>
        <nav class=\"navbar navbar-expand-lg bg-light\">
            <div class=\"container-fluid\">
                <a class=\"navbar-brand\" href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\">Mon Blog</a>
                <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
                <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                    <ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
                        <li class=\"nav-item\">
                        <a class=\"nav-link active\" aria-current=\"page\" href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_article");
        echo "\">Articles</a>
                        </li>
                        <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tableau");
        echo "\">Tableaux</a>
                        </li>                    
                    </ul>                
                </div>
            </div>
        </nav>
        
        ";
        // line 36
        $this->displayBlock('body', $context, $blocks);
        // line 37
        echo "
        <!-- Footer -->
        <footer class=\"text-center text-lg-start bg-light text-muted\">
        <!-- Section: Social media -->
            <section class=\"d-flex justify-content-center justify-content-lg-between p-4 border-bottom\">
                <!-- Left -->
                <div class=\"me-5 d-none d-lg-block\">
                <span>Get connected with us on social networks:</span>
                </div>
                <!-- Left -->

                <!-- Right -->
                <div>
                <a href=\"\" class=\"me-4 text-reset\">
                    <i class=\"fab fa-facebook-f\"></i>
                </a>
                <a href=\"\" class=\"me-4 text-reset\">
                    <i class=\"fab fa-twitter\"></i>
                </a>
                <a href=\"\" class=\"me-4 text-reset\">
                    <i class=\"fab fa-google\"></i>
                </a>
                <a href=\"\" class=\"me-4 text-reset\">
                    <i class=\"fab fa-instagram\"></i>
                </a>
                <a href=\"\" class=\"me-4 text-reset\">
                    <i class=\"fab fa-linkedin\"></i>
                </a>
                <a href=\"\" class=\"me-4 text-reset\">
                    <i class=\"fab fa-github\"></i>
                </a>
                </div>
                <!-- Right -->
            </section>
            <!-- Section: Social media -->

            <!-- Section: Links  -->
            <section class=\"\">
                <div class=\"container text-center text-md-start mt-5\">
            <!-- Grid row -->
                <div class=\"row mt-3\">
            <!-- Grid column -->
                    <div class=\"col-md-3 col-lg-4 col-xl-3 mx-auto mb-4\">
            <!-- Content -->
                    <h6 class=\"text-uppercase fw-bold mb-4\">
                        <i class=\"fas fa-gem me-3\"></i>Mon Blog Rizzo
                    </h6>
                    <p>
                        Here you can use rows and columns to organize your footer content. Lorem ipsum
                        dolor sit amet, consectetur adipisicing elit.
                    </p>
                    </div>
            <!-- Grid column -->

            <!-- Grid column -->
                    <div class=\"col-md-2 col-lg-2 col-xl-2 mx-auto mb-4\">
            <!-- Links -->
                    <h6 class=\"text-uppercase fw-bold mb-4\">
                        Products
                    </h6>
                    <p>
                        <a href=\"#!\" class=\"text-reset\">Angular</a>
                    </p>
                    <p>
                        <a href=\"#!\" class=\"text-reset\">React</a>
                    </p>
                    <p>
                        <a href=\"#!\" class=\"text-reset\">Vue</a>
                    </p>
                    <p>
                        <a href=\"#!\" class=\"text-reset\">Laravel</a>
                    </p>
                    </div>
            <!-- Grid column -->

            <!-- Grid column -->
                    <div class=\"col-md-3 col-lg-2 col-xl-2 mx-auto mb-4\">
            <!-- Links -->
                    <h6 class=\"text-uppercase fw-bold mb-4\">
                        Useful links
                    </h6>
                    <p>
                        <a href=\"#!\" class=\"text-reset\">Pricing</a>
                    </p>
                    <p>
                        <a href=\"#!\" class=\"text-reset\">Settings</a>
                    </p>
                    <p>
                        <a href=\"#!\" class=\"text-reset\">Orders</a>
                    </p>
                    <p>
                        <a href=\"#!\" class=\"text-reset\">Help</a>
                    </p>
                    </div>
            <!-- Grid column -->

            <!-- Grid column -->
                    <div class=\"col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4\">
            <!-- Links -->
                    <h6 class=\"text-uppercase fw-bold mb-4\">Contact</h6>
                    <p><i class=\"fas fa-home me-3\"></i> New York, NY 10012, US</p>
                    <p>
                        <i class=\"fas fa-envelope me-3\"></i>
                        info@example.com
                    </p>
                    <p><i class=\"fas fa-phone me-3\"></i> + 01 234 567 88</p>
                    <p><i class=\"fas fa-print me-3\"></i> + 01 234 567 89</p>
                    </div>
            <!-- Grid column -->
                </div>
                <!-- Grid row -->
                </div>
            </section>
        <!-- Section: Links  -->

        <!-- Copyright -->
            <div class=\"text-center p-4\" style=\"background-color: rgba(0, 0, 0, 0.05);\">
                © 2021 Copyright:
                <a class=\"text-reset fw-bold\" href=\"https://mdbootstrap.com/\">MDBootstrap.com</a>
            </div>
        <!-- Copyright -->
        </footer>
        <!-- Footer -->
        
       


        <!-- JavaScript Bundle with Popper -->
        ";
        // line 165
        $this->displayBlock('javascripts', $context, $blocks);
        // line 168
        echo "
        <script src=\"https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js\" integrity=\"sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3\" crossorigin=\"anonymous\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js\" integrity=\"sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk\" crossorigin=\"anonymous\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3\" crossorigin=\"anonymous\"></script>
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

        echo "Welcome!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "            ";
        // line 9
        echo "            <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
            <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi\" crossorigin=\"anonymous\">
            <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/screen.css"), "html", null, true);
        echo "\">
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 36
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 165
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 166
        echo "            <script src=\"https://code.jquery.com/jquery-3.4.1.min.js\" integrity=\"sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=\" crossorigin=\"anonymous\"></script>
        ";
        
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
        return array (  319 => 166,  309 => 165,  291 => 36,  279 => 11,  275 => 9,  273 => 8,  263 => 7,  244 => 5,  228 => 168,  226 => 165,  96 => 37,  94 => 36,  84 => 29,  78 => 26,  68 => 19,  60 => 13,  58 => 7,  53 => 5,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Welcome!{% endblock %}</title>
        <!-- CSS only -->
        {% block stylesheets %}
            {# Run `composer require symfony/webpack-encore-bundle` to start using Symfony UX #}
            <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
            <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi\" crossorigin=\"anonymous\">
            <link rel=\"stylesheet\" href=\"{{ asset('css/screen.css') }}\">
        {% endblock %}

       
    </head>
    <body>
        <nav class=\"navbar navbar-expand-lg bg-light\">
            <div class=\"container-fluid\">
                <a class=\"navbar-brand\" href=\"{{path('app_home')}}\">Mon Blog</a>
                <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
                <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                    <ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
                        <li class=\"nav-item\">
                        <a class=\"nav-link active\" aria-current=\"page\" href=\"{{path('app_article')}}\">Articles</a>
                        </li>
                        <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{path('app_tableau')}}\">Tableaux</a>
                        </li>                    
                    </ul>                
                </div>
            </div>
        </nav>
        
        {% block body %}{% endblock %}

        <!-- Footer -->
        <footer class=\"text-center text-lg-start bg-light text-muted\">
        <!-- Section: Social media -->
            <section class=\"d-flex justify-content-center justify-content-lg-between p-4 border-bottom\">
                <!-- Left -->
                <div class=\"me-5 d-none d-lg-block\">
                <span>Get connected with us on social networks:</span>
                </div>
                <!-- Left -->

                <!-- Right -->
                <div>
                <a href=\"\" class=\"me-4 text-reset\">
                    <i class=\"fab fa-facebook-f\"></i>
                </a>
                <a href=\"\" class=\"me-4 text-reset\">
                    <i class=\"fab fa-twitter\"></i>
                </a>
                <a href=\"\" class=\"me-4 text-reset\">
                    <i class=\"fab fa-google\"></i>
                </a>
                <a href=\"\" class=\"me-4 text-reset\">
                    <i class=\"fab fa-instagram\"></i>
                </a>
                <a href=\"\" class=\"me-4 text-reset\">
                    <i class=\"fab fa-linkedin\"></i>
                </a>
                <a href=\"\" class=\"me-4 text-reset\">
                    <i class=\"fab fa-github\"></i>
                </a>
                </div>
                <!-- Right -->
            </section>
            <!-- Section: Social media -->

            <!-- Section: Links  -->
            <section class=\"\">
                <div class=\"container text-center text-md-start mt-5\">
            <!-- Grid row -->
                <div class=\"row mt-3\">
            <!-- Grid column -->
                    <div class=\"col-md-3 col-lg-4 col-xl-3 mx-auto mb-4\">
            <!-- Content -->
                    <h6 class=\"text-uppercase fw-bold mb-4\">
                        <i class=\"fas fa-gem me-3\"></i>Mon Blog Rizzo
                    </h6>
                    <p>
                        Here you can use rows and columns to organize your footer content. Lorem ipsum
                        dolor sit amet, consectetur adipisicing elit.
                    </p>
                    </div>
            <!-- Grid column -->

            <!-- Grid column -->
                    <div class=\"col-md-2 col-lg-2 col-xl-2 mx-auto mb-4\">
            <!-- Links -->
                    <h6 class=\"text-uppercase fw-bold mb-4\">
                        Products
                    </h6>
                    <p>
                        <a href=\"#!\" class=\"text-reset\">Angular</a>
                    </p>
                    <p>
                        <a href=\"#!\" class=\"text-reset\">React</a>
                    </p>
                    <p>
                        <a href=\"#!\" class=\"text-reset\">Vue</a>
                    </p>
                    <p>
                        <a href=\"#!\" class=\"text-reset\">Laravel</a>
                    </p>
                    </div>
            <!-- Grid column -->

            <!-- Grid column -->
                    <div class=\"col-md-3 col-lg-2 col-xl-2 mx-auto mb-4\">
            <!-- Links -->
                    <h6 class=\"text-uppercase fw-bold mb-4\">
                        Useful links
                    </h6>
                    <p>
                        <a href=\"#!\" class=\"text-reset\">Pricing</a>
                    </p>
                    <p>
                        <a href=\"#!\" class=\"text-reset\">Settings</a>
                    </p>
                    <p>
                        <a href=\"#!\" class=\"text-reset\">Orders</a>
                    </p>
                    <p>
                        <a href=\"#!\" class=\"text-reset\">Help</a>
                    </p>
                    </div>
            <!-- Grid column -->

            <!-- Grid column -->
                    <div class=\"col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4\">
            <!-- Links -->
                    <h6 class=\"text-uppercase fw-bold mb-4\">Contact</h6>
                    <p><i class=\"fas fa-home me-3\"></i> New York, NY 10012, US</p>
                    <p>
                        <i class=\"fas fa-envelope me-3\"></i>
                        info@example.com
                    </p>
                    <p><i class=\"fas fa-phone me-3\"></i> + 01 234 567 88</p>
                    <p><i class=\"fas fa-print me-3\"></i> + 01 234 567 89</p>
                    </div>
            <!-- Grid column -->
                </div>
                <!-- Grid row -->
                </div>
            </section>
        <!-- Section: Links  -->

        <!-- Copyright -->
            <div class=\"text-center p-4\" style=\"background-color: rgba(0, 0, 0, 0.05);\">
                © 2021 Copyright:
                <a class=\"text-reset fw-bold\" href=\"https://mdbootstrap.com/\">MDBootstrap.com</a>
            </div>
        <!-- Copyright -->
        </footer>
        <!-- Footer -->
        
       


        <!-- JavaScript Bundle with Popper -->
        {% block javascripts %}
            <script src=\"https://code.jquery.com/jquery-3.4.1.min.js\" integrity=\"sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=\" crossorigin=\"anonymous\"></script>
        {% endblock %}

        <script src=\"https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js\" integrity=\"sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3\" crossorigin=\"anonymous\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js\" integrity=\"sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk\" crossorigin=\"anonymous\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3\" crossorigin=\"anonymous\"></script>
    </body>
</html>
", "base.html.twig", "C:\\Program Files (x86)\\EasyPHP-Devserver-17\\eds-www\\ProjetEcole\\Framework_Symfony\\blog\\templates\\base.html.twig");
    }
}
