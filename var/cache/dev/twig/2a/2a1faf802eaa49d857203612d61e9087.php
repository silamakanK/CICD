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

/* @DoctrineMigrations/Collector/icon.svg */
class __TwigTemplate_8378f1f72ecc88446980630b15792d8f extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@DoctrineMigrations/Collector/icon.svg"));

        // line 1
        yield "<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" width=\"24\" height=\"24\">
    <polygon fill=\"#AAA\" points=\"0 0 24 0 24 7 17.5 7 16.5 3 15.5 7 11 7 12 3 3 3 4 7 0 7\" />
    <polygon fill=\"#AAA\" points=\"0 8.5 4.5 8.5 6 15.5 0 15.5\" />
    <polygon fill=\"#AAA\" points=\"10.5 8.5 15 8.5 13.5 15.5 9 15.5\" />
    <polygon fill=\"#AAA\" points=\"18 8.5 24 8.5 24 15.5 19.5 15.5\" />
    <polygon fill=\"#AAA\" points=\"0 17 6.5 17 7.5 21 8.5 17 13 17 12 21 21 21 20 17 24 17 24 24 0 24\" />
</svg>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@DoctrineMigrations/Collector/icon.svg";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" width=\"24\" height=\"24\">
    <polygon fill=\"#AAA\" points=\"0 0 24 0 24 7 17.5 7 16.5 3 15.5 7 11 7 12 3 3 3 4 7 0 7\" />
    <polygon fill=\"#AAA\" points=\"0 8.5 4.5 8.5 6 15.5 0 15.5\" />
    <polygon fill=\"#AAA\" points=\"10.5 8.5 15 8.5 13.5 15.5 9 15.5\" />
    <polygon fill=\"#AAA\" points=\"18 8.5 24 8.5 24 15.5 19.5 15.5\" />
    <polygon fill=\"#AAA\" points=\"0 17 6.5 17 7.5 21 8.5 17 13 17 12 21 21 21 20 17 24 17 24 24 0 24\" />
</svg>
", "@DoctrineMigrations/Collector/icon.svg", "/home/silby/eemi/M1/CICD/Tp/vendor/doctrine/doctrine-migrations-bundle/Resources/views/Collector/icon.svg");
    }
}
