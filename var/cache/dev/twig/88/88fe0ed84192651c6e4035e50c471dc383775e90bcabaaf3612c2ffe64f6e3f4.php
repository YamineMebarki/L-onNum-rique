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

/* phpunit.xml.dist */
class __TwigTemplate_98b38c42310d393f3867f977fdde701796820ce3750c8437c50dfd86fb0d1805 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "phpunit.xml.dist"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "phpunit.xml.dist"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>

<!-- https://phpunit.readthedocs.io/en/latest/configuration.html -->
<phpunit xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"
         xsi:noNamespaceSchemaLocation=\"bin/.phpunit/phpunit.xsd\"
         backupGlobals=\"false\"
         colors=\"true\"
         bootstrap=\"config/bootstrap.php\"
>
    <php>
        <ini name=\"error_reporting\" value=\"-1\" />
        <server name=\"APP_ENV\" value=\"test\" force=\"true\" />
        <server name=\"SHELL_VERBOSITY\" value=\"-1\" />
        <server name=\"SYMFONY_PHPUNIT_REMOVE\" value=\"\" />
        <server name=\"SYMFONY_PHPUNIT_VERSION\" value=\"7.5\" />
    </php>

    <testsuites>
        <testsuite name=\"Project Test Suite\">
            <directory>tests</directory>
        </testsuite>
    </testsuites>

    <filter>
        <whitelist>
            <directory>src</directory>
        </whitelist>
    </filter>

    <listeners>
        <listener class=\"Symfony\\Bridge\\PhpUnit\\SymfonyTestsListener\" />
    </listeners>
</phpunit>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "phpunit.xml.dist";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?xml version=\"1.0\" encoding=\"UTF-8\"?>

<!-- https://phpunit.readthedocs.io/en/latest/configuration.html -->
<phpunit xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"
         xsi:noNamespaceSchemaLocation=\"bin/.phpunit/phpunit.xsd\"
         backupGlobals=\"false\"
         colors=\"true\"
         bootstrap=\"config/bootstrap.php\"
>
    <php>
        <ini name=\"error_reporting\" value=\"-1\" />
        <server name=\"APP_ENV\" value=\"test\" force=\"true\" />
        <server name=\"SHELL_VERBOSITY\" value=\"-1\" />
        <server name=\"SYMFONY_PHPUNIT_REMOVE\" value=\"\" />
        <server name=\"SYMFONY_PHPUNIT_VERSION\" value=\"7.5\" />
    </php>

    <testsuites>
        <testsuite name=\"Project Test Suite\">
            <directory>tests</directory>
        </testsuite>
    </testsuites>

    <filter>
        <whitelist>
            <directory>src</directory>
        </whitelist>
    </filter>

    <listeners>
        <listener class=\"Symfony\\Bridge\\PhpUnit\\SymfonyTestsListener\" />
    </listeners>
</phpunit>
", "phpunit.xml.dist", "/var/www/public/DevLaon/templates/phpunit.xml.dist");
    }
}
