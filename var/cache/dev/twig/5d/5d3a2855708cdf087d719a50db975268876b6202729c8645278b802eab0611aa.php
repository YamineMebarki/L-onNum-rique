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

/* vendor/symfony/browser-kit/phpunit.xml.dist */
class __TwigTemplate_1e5ca3f3b08665d8f2be9f06b216991899a9de602f2c124aabeeec54180d9ce1 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/browser-kit/phpunit.xml.dist"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/browser-kit/phpunit.xml.dist"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>

<phpunit xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"
         xsi:noNamespaceSchemaLocation=\"http://schema.phpunit.de/5.2/phpunit.xsd\"
         backupGlobals=\"false\"
         colors=\"true\"
         bootstrap=\"vendor/autoload.php\"
         failOnRisky=\"true\"
         failOnWarning=\"true\"
>
    <php>
        <ini name=\"error_reporting\" value=\"-1\" />
    </php>

    <testsuites>
        <testsuite name=\"Symfony BrowserKit Component Test Suite\">
            <directory>./Tests/</directory>
        </testsuite>
    </testsuites>

    <filter>
        <whitelist>
            <directory>./</directory>
            <exclude>
                <directory>./Resources</directory>
                <directory>./Tests</directory>
                <directory>./vendor</directory>
            </exclude>
        </whitelist>
    </filter>
</phpunit>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/browser-kit/phpunit.xml.dist";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?xml version=\"1.0\" encoding=\"UTF-8\"?>

<phpunit xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"
         xsi:noNamespaceSchemaLocation=\"http://schema.phpunit.de/5.2/phpunit.xsd\"
         backupGlobals=\"false\"
         colors=\"true\"
         bootstrap=\"vendor/autoload.php\"
         failOnRisky=\"true\"
         failOnWarning=\"true\"
>
    <php>
        <ini name=\"error_reporting\" value=\"-1\" />
    </php>

    <testsuites>
        <testsuite name=\"Symfony BrowserKit Component Test Suite\">
            <directory>./Tests/</directory>
        </testsuite>
    </testsuites>

    <filter>
        <whitelist>
            <directory>./</directory>
            <exclude>
                <directory>./Resources</directory>
                <directory>./Tests</directory>
                <directory>./vendor</directory>
            </exclude>
        </whitelist>
    </filter>
</phpunit>
", "vendor/symfony/browser-kit/phpunit.xml.dist", "/var/www/public/DevLaon/templates/vendor/symfony/browser-kit/phpunit.xml.dist");
    }
}
