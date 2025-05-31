<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* task/index.html.twig */
class __TwigTemplate_cc2b49b8eb603cbfa35ed9dd30b747ec extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "task/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "task/index.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Hello TaskController!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "
<div class=\"row\">
    <div class=\"col-md-12\">
        <h1 class=\"text-center fs-1 text-uppercase text-primary\">Task to do</h1>
    </div>
    <div class=\"col-12 col-md-12\">
        <div class=\"row\">
        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["tasks"]) || array_key_exists("tasks", $context) ? $context["tasks"] : (function () { throw new RuntimeError('Variable "tasks" does not exist.', 13, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
            // line 14
            yield "            <article class=\" col-12 col-md-4 alert alert-secondary\">
                <h2>";
            // line 15
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["task"], "name", [], "any", false, false, false, 15), "html", null, true);
            yield "</h2>
                <p>";
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["task"], "createdAt", [], "any", false, false, false, 16)), "html", null, true);
            yield "</p>
                <p>";
            // line 17
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["task"], "description", [], "any", false, false, false, 17), "html", null, true);
            yield "</p>
                ";
            // line 18
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["task"], "state", [], "any", false, false, false, 18) == "En entente")) {
                // line 19
                yield "                    <p class=\"text-secondary\"><strong>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["task"], "state", [], "any", false, false, false, 19), "html", null, true);
                yield "</strong></p>
                    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 20
$context["task"], "state", [], "any", false, false, false, 20) == "En cours")) {
                // line 21
                yield "                        <p class=\"text-primary\"><strong>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["task"], "state", [], "any", false, false, false, 21), "html", null, true);
                yield "</strong></p>
                    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 22
$context["task"], "state", [], "any", false, false, false, 22) == "Completé")) {
                // line 23
                yield "                        <p class=\"text-success\"><strong>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["task"], "state", [], "any", false, false, false, 23), "html", null, true);
                yield "</strong></p>
                ";
            }
            // line 25
            yield "                <div class=\"d-flex justify-content-between\">
                    <a href=\"";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_task_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["task"], "id", [], "any", false, false, false, 26)]), "html", null, true);
            yield "\" class=\"btn btn-success\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-pen\" viewBox=\"0 0 16 16\">
                          <path d=\"m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001m-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708z\"/>
                        </svg>
                    </a>
                    <a href=\"";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_task_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["task"], "id", [], "any", false, false, false, 31)]), "html", null, true);
            yield "\" class=\"btn btn-danger\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-archive\" viewBox=\"0 0 16 16\">
                          <path d=\"M0 2a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1v7.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 12.5V5a1 1 0 0 1-1-1zm2 3v7.5A1.5 1.5 0 0 0 3.5 14h9a1.5 1.5 0 0 0 1.5-1.5V5zm13-3H1v2h14zM5 7.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5\"/>
                        </svg>
                    </a>
                </div>
            </article>
            ";
            $context['_iterated'] = true;
        }
        // line 38
        if (!$context['_iterated']) {
            // line 39
            yield "            <article class=\" col-10 alert alert-danger m-auto\">
                <h2 class=\"text-center\">Aucune tâche en cours</h2>
            </article>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['task'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        yield "        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "task/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  185 => 43,  176 => 39,  174 => 38,  162 => 31,  154 => 26,  151 => 25,  145 => 23,  143 => 22,  138 => 21,  136 => 20,  131 => 19,  129 => 18,  125 => 17,  121 => 16,  117 => 15,  114 => 14,  109 => 13,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello TaskController!{% endblock %}

{% block body %}

<div class=\"row\">
    <div class=\"col-md-12\">
        <h1 class=\"text-center fs-1 text-uppercase text-primary\">Task to do</h1>
    </div>
    <div class=\"col-12 col-md-12\">
        <div class=\"row\">
        {% for task in tasks %}
            <article class=\" col-12 col-md-4 alert alert-secondary\">
                <h2>{{ task.name }}</h2>
                <p>{{ task.createdAt|date }}</p>
                <p>{{ task.description }}</p>
                {% if task.state == 'En entente' %}
                    <p class=\"text-secondary\"><strong>{{ task.state }}</strong></p>
                    {% elseif task.state == 'En cours' %}
                        <p class=\"text-primary\"><strong>{{ task.state }}</strong></p>
                    {% elseif task.state == 'Completé'%}
                        <p class=\"text-success\"><strong>{{ task.state }}</strong></p>
                {% endif %}
                <div class=\"d-flex justify-content-between\">
                    <a href=\"{{ path('app_task_edit', { 'id': task.id}) }}\" class=\"btn btn-success\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-pen\" viewBox=\"0 0 16 16\">
                          <path d=\"m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001m-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708z\"/>
                        </svg>
                    </a>
                    <a href=\"{{ path('app_task_delete', { 'id': task.id}) }}\" class=\"btn btn-danger\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-archive\" viewBox=\"0 0 16 16\">
                          <path d=\"M0 2a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1v7.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 12.5V5a1 1 0 0 1-1-1zm2 3v7.5A1.5 1.5 0 0 0 3.5 14h9a1.5 1.5 0 0 0 1.5-1.5V5zm13-3H1v2h14zM5 7.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5\"/>
                        </svg>
                    </a>
                </div>
            </article>
            {% else %}
            <article class=\" col-10 alert alert-danger m-auto\">
                <h2 class=\"text-center\">Aucune tâche en cours</h2>
            </article>
        {% endfor %}
        </div>
    </div>
</div>
{% endblock %}
", "task/index.html.twig", "/var/www/html/templates/task/index.html.twig");
    }
}
