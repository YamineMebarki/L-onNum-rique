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

/* vendor/symfony/intl/Tests/Data/Bundle/Reader/Fixtures/res/ro_MD.res */
class __TwigTemplate_a689c96441f1ff9c176848b8df542bb6a9a46ede9bfa83a1ed005fbba95f5985 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Tests/Data/Bundle/Reader/Fixtures/res/ro_MD.res"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Tests/Data/Bundle/Reader/Fixtures/res/ro_MD.res"));

        // line 1
        echo " \000Ú'\000\000\000\000\000\000ResB\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000P\000\000\000\t\000\000\000
\000\000\000
\000\000\000\000\000\000\000\000\000\000
\000\000\000Baz\000\000\000B\000a\000m\000\000\000\000 \000\000";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Tests/Data/Bundle/Reader/Fixtures/res/ro_MD.res";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(" \000Ú'\000\000\000\000\000\000ResB\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000P\000\000\000\t\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000Baz\000\000\000B\000a\000m\000\000\000\000 \000\000", "vendor/symfony/intl/Tests/Data/Bundle/Reader/Fixtures/res/ro_MD.res", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Tests/Data/Bundle/Reader/Fixtures/res/ro_MD.res");
    }
}
