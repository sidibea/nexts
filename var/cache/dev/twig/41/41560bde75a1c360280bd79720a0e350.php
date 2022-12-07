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

/* home/Category/vertical.html.twig */
class __TwigTemplate_63d875ad6e39f3408d41f37cc2c44209 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/Category/vertical.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["forums"]) || array_key_exists("forums", $context) ? $context["forums"] : (function () { throw new RuntimeError('Variable "forums" does not exist.', 1, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["forum"]) {
            // line 2
            echo "    <li><a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forum_show", ["id" => twig_get_attribute($this->env, $this->source, $context["forum"], "id", [], "any", false, false, false, 2)]), "html", null, true);
            echo "\"><div>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["forum"], "name", [], "any", false, false, false, 2), "html", null, true);
            echo "</div></a> </li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['forum'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "home/Category/vertical.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% for forum in forums %}
    <li><a href=\"{{ path('app_forum_show', { 'id': forum.id }) }}\"><div>{{ forum.name }}</div></a> </li>
{% endfor %}
", "home/Category/vertical.html.twig", "C:\\xampp\\htdocs\\nextscenes\\templates\\home\\Category\\vertical.html.twig");
    }
}
