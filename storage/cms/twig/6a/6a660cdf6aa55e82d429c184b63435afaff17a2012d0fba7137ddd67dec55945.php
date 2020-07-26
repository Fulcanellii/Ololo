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

/* D:\OSPanel\domains\ololo/themes/demo/partials/site/header.htm */
class __TwigTemplate_21cb2f85de105d4430515c42de704d11b275da2b6f86feeb6b87685597fea2a1 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!-- Nav -->
<!--<nav id=\"layout-nav\" class=\"navbar navbar-fixed-top navbar-autohide\" role=\"navigation\">-->
<!--    <div class=\"container\">-->
<!--        <div class=\"navbar-header\">-->
<!--            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-main-collapse\">-->
<!--                <span class=\"sr-only\">Toggle navigation</span>-->
<!--                <span class=\"icon-bar\"></span>-->
<!--                <span class=\"icon-bar\"></span>-->
<!--                <span class=\"icon-bar\"></span>-->
<!--            </button>-->
<!--            <a class=\"navbar-brand\" href=\"";
        // line 11
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\"><img src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logo.png");
        echo "\" height=\"30px\" alt=\"\"></a>-->
<!--        </div>-->
<!--        <div class=\"collapse navbar-collapse navbar-main-collapse\">-->
<!--            <ul class=\"nav navbar-nav\">-->
<!--                <li class=\"";
        // line 15
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 15), "id", [], "any", false, false, false, 15) == "home")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">Basic concepts</a></li>-->
<!--                <li class=\"";
        // line 16
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 16), "id", [], "any", false, false, false, 16) == "ajax")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("ajax");
        echo "\">AJAX framework</a></li>-->
<!--                <li class=\"";
        // line 17
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 17), "id", [], "any", false, false, false, 17) == "plugins")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("plugins");
        echo "\">Plugin components</a></li>-->
<!--            </ul>-->
<!--        </div>-->
<!--    </div>-->
<!--</nav>-->

<header class=\"header\">
    <nav class=\"navbar fixed-top navbar-expand-lg navbar-dark navbar-autohide\">
        <div class=\"container\">
            <a class=\"navbar-nav\" href=\"";
        // line 26
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\"><img src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logo.png");
        echo "\" height=\"20px\"
                                                                alt=\"\"></a>
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\"
                    aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>

            <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                <ul class=\"navbar-nav ml-auto\">
                    <li class=\"nav-item ";
        // line 35
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 35), "id", [], "any", false, false, false, 35) == "home")) {
            echo "active";
        }
        echo "\">
                        <a class=\"nav-link\" href=\"";
        // line 36
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">Home</a>
                    </li>
                    <li class=\"nav-item ";
        // line 38
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 38), "id", [], "any", false, false, false, 38) == "ajax")) {
            echo "active";
        }
        echo "\">
                        <a class=\"nav-link\" href=\"";
        // line 39
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("ajax");
        echo "\">Contacts</a>
                    </li>
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\"
                           data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            Dropdown
                        </a>
                        <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                            <a class=\"dropdown-item\" href=\"#\">Action</a>
                            <a class=\"dropdown-item\" href=\"#\">Another action</a>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>";
    }

    public function getTemplateName()
    {
        return "D:\\OSPanel\\domains\\ololo/themes/demo/partials/site/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 39,  115 => 38,  110 => 36,  104 => 35,  90 => 26,  74 => 17,  66 => 16,  58 => 15,  49 => 11,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Nav -->
<!--<nav id=\"layout-nav\" class=\"navbar navbar-fixed-top navbar-autohide\" role=\"navigation\">-->
<!--    <div class=\"container\">-->
<!--        <div class=\"navbar-header\">-->
<!--            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-main-collapse\">-->
<!--                <span class=\"sr-only\">Toggle navigation</span>-->
<!--                <span class=\"icon-bar\"></span>-->
<!--                <span class=\"icon-bar\"></span>-->
<!--                <span class=\"icon-bar\"></span>-->
<!--            </button>-->
<!--            <a class=\"navbar-brand\" href=\"{{ 'home'|page }}\"><img src=\"{{ 'assets/images/logo.png'|theme }}\" height=\"30px\" alt=\"\"></a>-->
<!--        </div>-->
<!--        <div class=\"collapse navbar-collapse navbar-main-collapse\">-->
<!--            <ul class=\"nav navbar-nav\">-->
<!--                <li class=\"{% if this.page.id == 'home' %}active{% endif %}\"><a href=\"{{ 'home'|page }}\">Basic concepts</a></li>-->
<!--                <li class=\"{% if this.page.id == 'ajax' %}active{% endif %}\"><a href=\"{{ 'ajax'|page }}\">AJAX framework</a></li>-->
<!--                <li class=\"{% if this.page.id == 'plugins' %}active{% endif %}\"><a href=\"{{ 'plugins'|page }}\">Plugin components</a></li>-->
<!--            </ul>-->
<!--        </div>-->
<!--    </div>-->
<!--</nav>-->

<header class=\"header\">
    <nav class=\"navbar fixed-top navbar-expand-lg navbar-dark navbar-autohide\">
        <div class=\"container\">
            <a class=\"navbar-nav\" href=\"{{ 'home'|page }}\"><img src=\"{{ 'assets/images/logo.png'|theme }}\" height=\"20px\"
                                                                alt=\"\"></a>
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\"
                    aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>

            <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                <ul class=\"navbar-nav ml-auto\">
                    <li class=\"nav-item {% if this.page.id == 'home' %}active{% endif %}\">
                        <a class=\"nav-link\" href=\"{{ 'home'|page }}\">Home</a>
                    </li>
                    <li class=\"nav-item {% if this.page.id == 'ajax' %}active{% endif %}\">
                        <a class=\"nav-link\" href=\"{{ 'ajax'|page }}\">Contacts</a>
                    </li>
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\"
                           data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            Dropdown
                        </a>
                        <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                            <a class=\"dropdown-item\" href=\"#\">Action</a>
                            <a class=\"dropdown-item\" href=\"#\">Another action</a>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>", "D:\\OSPanel\\domains\\ololo/themes/demo/partials/site/header.htm", "");
    }
}
