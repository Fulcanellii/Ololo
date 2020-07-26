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

/* D:\OSPanel\domains\ololo/themes/demo/pages/home.htm */
class __TwigTemplate_8a58efc3063b757776c53ad9e25cd91e473e11251c737c3708526c3021d48a51 extends \Twig\Template
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
        $context["arr"] = twig_get_attribute($this->env, $this->source, ($context["asd"] ?? null), "records", [], "any", false, false, false, 1);
        // line 2
        echo "<!--<div class=\"main_content\">-->
<!--    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["arr"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["ar"]) {
            echo "-->
<!--    <div class=\"main_content__relative\">-->
<!--        <p class=\"main_content__title\">";
            // line 5
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ar"], "title", [], "any", false, false, false, 5), "html", null, true);
            echo "</p>-->
<!--        <img class=\"main_content__img\" src=\"";
            // line 6
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ar"], "featured_images", [], "any", false, false, false, 6), "path", [], "any", false, false, false, 6), "html", null, true);
            echo "\" alt=\"\">-->
<!--    </div>-->
<!--    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ar'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "-->
<!--</div>-->

<div class=\"container\">
    <div class=\"main_content__new\">
        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, ($context["arr"] ?? null), 0, 1));
        foreach ($context['_seq'] as $context["_key"] => $context["ar"]) {
            // line 14
            echo "
        <div class=\"main_content__new__title\">
            ";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ar"], "title", [], "any", false, false, false, 16), "html", null, true);
            echo "
        </div>
        <p class=\"main_content__new__description\">
            ";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ar"], "description", [], "any", false, false, false, 19), "html", null, true);
            echo "
        </p>
        <span class=\"main_content__new__button\">
                <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ar"], "url", [], "any", false, false, false, 22), "html", null, true);
            echo "\">Read More</a>
            </span>
        <img class=\"main_content__new__img\" src=\"";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ar"], "featured_images", [], "any", false, false, false, 24), "path", [], "any", false, false, false, 24), "html", null, true);
            echo "\" alt=\"\">
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ar'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "    </div>
</div>


<div class=\"blog__container\">
    <div class=\"container\">
        <div class=\"blog\">
            <!--            <h2 class=\"blog__header\">Blog</h2>-->
            ";
        // line 34
        $context["paginate"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["blogPosts"] ?? null), "posts", [], "any", false, false, false, 34), "links", [], "method", false, false, false, 34), "toHtml", [], "method", false, false, false, 34);
        // line 35
        echo "            ";
        $context["posts"] = twig_get_attribute($this->env, $this->source, ($context["blogPosts"] ?? null), "posts", [], "any", false, false, false, 35);
        // line 36
        echo "
            <div class=\"blog__grid\">

                ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        foreach ($context['_seq'] as $context["key"] => $context["post"]) {
            if (twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "total", [], "method", false, false, false, 39)) {
                // line 40
                echo "
                <article href=\"";
                // line 41
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, false, 41), "html", null, true);
                echo "\" class=\"blog__article grid-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 41), "html", null, true);
                echo "\">

                    <div class=\"blog__content\">
                        ";
                // line 44
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["post"], "categories", [], "any", false, false, false, 44));
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 45
                    echo "                        <span class=\"blog__tag effect-target\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 45), "html", null, true);
                    echo "</span>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 47
                echo "                        <a class=\"blog__title effect-target\" href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, false, 47), "html", null, true);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 47);
                echo "</a>
                    </div>

                    <div class=\"blog__img\">
                        <a href=\"";
                // line 51
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, false, 51), "html", null, true);
                echo "\">
                            <img class=\"effect-image\" src=\"";
                // line 52
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, false, 52)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null), "path", [], "any", false, false, false, 52), "html", null, true);
                echo "\"
                                 alt=\"";
                // line 53
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, false, 53)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[0] ?? null) : null), "description", [], "any", false, false, false, 53), "html", null, true);
                echo "\">
                        </a>

                    </div>

                </article>

                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "
            </div>

        </div>

    </div>
    <!--Waves Container-->
    <div>
        <svg class=\"waves\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\"
             viewBox=\"0 24 150 28\" preserveAspectRatio=\"none\" shape-rendering=\"auto\">
            <defs>
                <path id=\"gentle-wave\"
                      d=\"M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z\"/>
            </defs>
            <g class=\"parallax\">
                <use xlink:href=\"#gentle-wave\" x=\"48\" y=\"0\" fill=\"rgba(255,255,255,0.7\"/>
                <use xlink:href=\"#gentle-wave\" x=\"48\" y=\"3\" fill=\"rgba(255,255,255,0.5)\"/>
                <use xlink:href=\"#gentle-wave\" x=\"48\" y=\"5\" fill=\"rgba(255,255,255,0.3)\"/>
                <use xlink:href=\"#gentle-wave\" x=\"48\" y=\"7\" fill=\"#fff\"/>
            </g>
        </svg>
    </div>
    <!--Waves end-->
</div>";
    }

    public function getTemplateName()
    {
        return "D:\\OSPanel\\domains\\ololo/themes/demo/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 61,  175 => 53,  171 => 52,  167 => 51,  157 => 47,  148 => 45,  144 => 44,  136 => 41,  133 => 40,  122 => 39,  117 => 36,  114 => 35,  112 => 34,  102 => 26,  94 => 24,  89 => 22,  83 => 19,  77 => 16,  73 => 14,  69 => 13,  62 => 8,  53 => 6,  49 => 5,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set arr = asd.records %}
<!--<div class=\"main_content\">-->
<!--    {% for ar in arr %}-->
<!--    <div class=\"main_content__relative\">-->
<!--        <p class=\"main_content__title\">{{ ar.title }}</p>-->
<!--        <img class=\"main_content__img\" src=\"{{ ar.featured_images.path }}\" alt=\"\">-->
<!--    </div>-->
<!--    {% endfor %}-->
<!--</div>-->

<div class=\"container\">
    <div class=\"main_content__new\">
        {% for ar in arr|slice(0, 1) %}

        <div class=\"main_content__new__title\">
            {{ ar.title }}
        </div>
        <p class=\"main_content__new__description\">
            {{ ar.description }}
        </p>
        <span class=\"main_content__new__button\">
                <a href=\"{{ ar.url }}\">Read More</a>
            </span>
        <img class=\"main_content__new__img\" src=\"{{ ar.featured_images.path }}\" alt=\"\">
        {% endfor %}
    </div>
</div>


<div class=\"blog__container\">
    <div class=\"container\">
        <div class=\"blog\">
            <!--            <h2 class=\"blog__header\">Blog</h2>-->
            {% set paginate = blogPosts.posts.links().toHtml() %}
            {% set posts = blogPosts.posts %}

            <div class=\"blog__grid\">

                {% for key, post in posts if posts.total() %}

                <article href=\"{{post.url}}\" class=\"blog__article grid-{{ loop.index }}\">

                    <div class=\"blog__content\">
                        {% for category in post.categories %}
                        <span class=\"blog__tag effect-target\">{{ category.name }}</span>
                        {% endfor %}
                        <a class=\"blog__title effect-target\" href=\"{{post.url}}\">{{ post.title|raw }}</a>
                    </div>

                    <div class=\"blog__img\">
                        <a href=\"{{post.url}}\">
                            <img class=\"effect-image\" src=\"{{ post.featured_images[0].path }}\"
                                 alt=\"{{ post.featured_images[0].description }}\">
                        </a>

                    </div>

                </article>

                {% endfor %}

            </div>

        </div>

    </div>
    <!--Waves Container-->
    <div>
        <svg class=\"waves\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\"
             viewBox=\"0 24 150 28\" preserveAspectRatio=\"none\" shape-rendering=\"auto\">
            <defs>
                <path id=\"gentle-wave\"
                      d=\"M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z\"/>
            </defs>
            <g class=\"parallax\">
                <use xlink:href=\"#gentle-wave\" x=\"48\" y=\"0\" fill=\"rgba(255,255,255,0.7\"/>
                <use xlink:href=\"#gentle-wave\" x=\"48\" y=\"3\" fill=\"rgba(255,255,255,0.5)\"/>
                <use xlink:href=\"#gentle-wave\" x=\"48\" y=\"5\" fill=\"rgba(255,255,255,0.3)\"/>
                <use xlink:href=\"#gentle-wave\" x=\"48\" y=\"7\" fill=\"#fff\"/>
            </g>
        </svg>
    </div>
    <!--Waves end-->
</div>", "D:\\OSPanel\\domains\\ololo/themes/demo/pages/home.htm", "");
    }
}
