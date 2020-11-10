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

/* vendor/symfony/console/Tests/Fixtures/application_filtered_namespace.txt */
class __TwigTemplate_00de34db334559534c10c555b6914f842c3f9cf14674ed13b6b3f0354e35999e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/console/Tests/Fixtures/application_filtered_namespace.txt"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/console/Tests/Fixtures/application_filtered_namespace.txt"));

        // line 1
        echo "My Symfony application <info>v1.0</info>

<comment>Usage:</comment>
  command [options] [arguments]

<comment>Options:</comment>
  <info>-h, --help</info>            Display this help message
  <info>-q, --quiet</info>           Do not output any message
  <info>-V, --version</info>         Display this application version
  <info>    --ansi</info>            Force ANSI output
  <info>    --no-ansi</info>         Disable ANSI output
  <info>-n, --no-interaction</info>  Do not ask any interactive question
  <info>-v|vv|vvv, --verbose</info>  Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

<comment>Available commands for the \"command4\" namespace:</comment>
  <info>command4:descriptor</info>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/console/Tests/Fixtures/application_filtered_namespace.txt";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("My Symfony application <info>v1.0</info>

<comment>Usage:</comment>
  command [options] [arguments]

<comment>Options:</comment>
  <info>-h, --help</info>            Display this help message
  <info>-q, --quiet</info>           Do not output any message
  <info>-V, --version</info>         Display this application version
  <info>    --ansi</info>            Force ANSI output
  <info>    --no-ansi</info>         Disable ANSI output
  <info>-n, --no-interaction</info>  Do not ask any interactive question
  <info>-v|vv|vvv, --verbose</info>  Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

<comment>Available commands for the \"command4\" namespace:</comment>
  <info>command4:descriptor</info>
", "vendor/symfony/console/Tests/Fixtures/application_filtered_namespace.txt", "/var/www/public/DevLaon/templates/vendor/symfony/console/Tests/Fixtures/application_filtered_namespace.txt");
    }
}
