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

/* vendor/symfony/translation/Tests/fixtures/resourcebundle/dat/en.res */
class __TwigTemplate_fb2c9ec3cfa7ee2b9c82fc426b219dc35a8fb783fb6d075cb6281cee489cc8af extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/translation/Tests/fixtures/resourcebundle/dat/en.res"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/translation/Tests/fixtures/resourcebundle/dat/en.res"));

        // line 1
        echo " \000�'\000\000\000\000\000\000ResB\000\000\000\000\000\000\000\000\000\000\000\000\000\000 \000\000\000\t\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000symfony\000\000\000\000S\000y\000m\000f\000o\000n\000y\000 \0002\000 \000i\000s\000 \000g\000r\000e\000a\000t\000\000\000��\000\000\t\000\000\000";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/translation/Tests/fixtures/resourcebundle/dat/en.res";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(" \000�'\000\000\000\000\000\000ResB\000\000\000\000\000\000\000\000\000\000\000\000\000\000 \000\000\000\t\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000symfony\000\000\000\000S\000y\000m\000f\000o\000n\000y\000 \0002\000 \000i\000s\000 \000g\000r\000e\000a\000t\000\000\000��\000\000\t\000\000\000", "vendor/symfony/translation/Tests/fixtures/resourcebundle/dat/en.res", "/var/www/public/DevLaon/templates/vendor/symfony/translation/Tests/fixtures/resourcebundle/dat/en.res");
    }
}
