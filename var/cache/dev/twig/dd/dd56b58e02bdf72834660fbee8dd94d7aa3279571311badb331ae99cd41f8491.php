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

/* default/index.html.twig */
class __TwigTemplate_cec6a58beb8a7292ee505a301960ccb72555e53e0526d36cee464e25eee619ff extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'styles' => [$this, 'block_styles'],
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_styles($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "styles"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/home.css"), "html", null, true);
        echo "\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <section class=\"top-posts\">
        ";
        // line 9
        $context["main_article"] = twig_get_attribute($this->env, $this->source, (isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 9, $this->source); })()), "shift", [], "any", false, false, false, 9);
        // line 10
        echo "        <article class=\"main-post top-post\">
            <a href=\"#\" class=\"category-link\">";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["main_article"]) || array_key_exists("main_article", $context) ? $context["main_article"] : (function () { throw new RuntimeError('Variable "main_article" does not exist.', 11, $this->source); })()), "category", [], "any", false, false, false, 11), "html", null, true);
        echo "</a>
            <a href=\"#\">
                <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["main_article"]) || array_key_exists("main_article", $context) ? $context["main_article"] : (function () { throw new RuntimeError('Variable "main_article" does not exist.', 13, $this->source); })()), "image", [], "any", false, false, false, 13), "html", null, true);
        echo "\" alt=\"\" class=\"img-fluid\">
            </a>
            <a href=\"#\" class=\"post-link\">
                <h1>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["main_article"]) || array_key_exists("main_article", $context) ? $context["main_article"] : (function () { throw new RuntimeError('Variable "main_article" does not exist.', 16, $this->source); })()), "title", [], "any", false, false, false, 16), "html", null, true);
        echo "</h1>
            </a>
            <time>";
        // line 18
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["main_article"]) || array_key_exists("main_article", $context) ? $context["main_article"] : (function () { throw new RuntimeError('Variable "main_article" does not exist.', 18, $this->source); })()), "publishedAt", [], "any", false, false, false, 18), "d-m-Y H:i:s"), "html", null, true);
        echo "</time>
            <p>";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["main_article"]) || array_key_exists("main_article", $context) ? $context["main_article"] : (function () { throw new RuntimeError('Variable "main_article" does not exist.', 19, $this->source); })()), "description", [], "any", false, false, false, 19), "html", null, true);
        echo "</p>
            <div class=\"clearfix\"></div>
        </article>
        <div class=\"row posts\">
            <div class=\"col\"></div>
            ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 24, $this->source); })()), "slice", [0 => 3], "method", false, false, false, 24));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 25
            echo "                <div class=\"col-3\">
                <article class=\"post top-post\">
                    <a href=\"#\" class=\"category-link\">";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "category", [], "any", false, false, false, 27), "html", null, true);
            echo "</a>
                    <a href=\"#\">
                        <img src=\"";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "image", [], "any", false, false, false, 29), "html", null, true);
            echo "\" alt=\"\" class=\"img-fluid\">
                    </a>
                    <a href=\"#\" class=\"post-link\">
                        <h3>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, false, 32), "html", null, true);
            echo "</h3>
                    </a>
                    <time>";
            // line 34
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "publishedAt", [], "any", false, false, false, 34), "d-m-Y H:i:s"), "html", null, true);
            echo "</time>
                    <p>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "description", [], "any", false, false, false, 35), "html", null, true);
            echo "</p>
                </article>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "            <div class=\"col\"></div>
        </div>
    </section>
    <section class=\"regular-posts\">
        ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 43, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 44
            echo "            <article class=\"post\">
                <a href=\"#\" class=\"category-link\">";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "category", [], "any", false, false, false, 45), "html", null, true);
            echo "</a>
                <a href=\"#\"><h4>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, false, 46), "html", null, true);
            echo "</h4></a>
                <time>";
            // line 47
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "publishedAt", [], "any", false, false, false, 47), "d-m-Y H:i:s"), "html", null, true);
            echo "</time>
            </article>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "    </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 50,  172 => 47,  168 => 46,  164 => 45,  161 => 44,  157 => 43,  151 => 39,  141 => 35,  137 => 34,  132 => 32,  126 => 29,  121 => 27,  117 => 25,  113 => 24,  105 => 19,  101 => 18,  96 => 16,  90 => 13,  85 => 11,  82 => 10,  80 => 9,  77 => 8,  70 => 7,  60 => 4,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block styles %}
    <link rel=\"stylesheet\" href=\"{{ asset('css/home.css') }}\">
{% endblock %}

{% block body %}
    <section class=\"top-posts\">
        {% set main_article = articles.shift %}
        <article class=\"main-post top-post\">
            <a href=\"#\" class=\"category-link\">{{ main_article.category }}</a>
            <a href=\"#\">
                <img src=\"{{ main_article.image }}\" alt=\"\" class=\"img-fluid\">
            </a>
            <a href=\"#\" class=\"post-link\">
                <h1>{{ main_article.title }}</h1>
            </a>
            <time>{{ main_article.publishedAt | date('d-m-Y H:i:s') }}</time>
            <p>{{ main_article.description }}</p>
            <div class=\"clearfix\"></div>
        </article>
        <div class=\"row posts\">
            <div class=\"col\"></div>
            {% for article in articles.slice(3) %}
                <div class=\"col-3\">
                <article class=\"post top-post\">
                    <a href=\"#\" class=\"category-link\">{{ article.category }}</a>
                    <a href=\"#\">
                        <img src=\"{{ article.image }}\" alt=\"\" class=\"img-fluid\">
                    </a>
                    <a href=\"#\" class=\"post-link\">
                        <h3>{{ article.title }}</h3>
                    </a>
                    <time>{{ article.publishedAt | date('d-m-Y H:i:s') }}</time>
                    <p>{{ article.description }}</p>
                </article>
            </div>
            {% endfor %}
            <div class=\"col\"></div>
        </div>
    </section>
    <section class=\"regular-posts\">
        {% for article in articles %}
            <article class=\"post\">
                <a href=\"#\" class=\"category-link\">{{ article.category }}</a>
                <a href=\"#\"><h4>{{ article.title }}</h4></a>
                <time>{{ article.publishedAt | date('d-m-Y H:i:s') }}</time>
            </article>
        {% endfor %}
    </section>
{% endblock %}
", "default/index.html.twig", "/var/www/new/templates/default/index.html.twig");
    }
}
