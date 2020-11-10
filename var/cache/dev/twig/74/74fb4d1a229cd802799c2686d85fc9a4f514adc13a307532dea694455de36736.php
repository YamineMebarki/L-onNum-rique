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

/* vendor/swiftmailer/swiftmailer/phpunit.xml.dist */
class __TwigTemplate_214ea69f80fc31c76506f44771baa1204a63def0862ee819d852b9c399712776 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/phpunit.xml.dist"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/phpunit.xml.dist"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>
<phpunit backupGlobals=\"false\"
         backupStaticAttributes=\"false\"
         colors=\"true\"
         convertErrorsToExceptions=\"true\"
         convertNoticesToExceptions=\"true\"
         convertWarningsToExceptions=\"true\"
         processIsolation=\"false\"
         stopOnFailure=\"false\"
         syntaxCheck=\"false\"
         bootstrap=\"tests/bootstrap.php\"
>
    <php>
        <ini name=\"intl.default_locale\" value=\"en\"/>
        <ini name=\"intl.error_level\" value=\"0\"/>
        <ini name=\"memory_limit\" value=\"-1\"/>
        <ini name=\"error_reporting\" value=\"-1\" />
    </php>

    <testsuites>
        <testsuite name=\"SwiftMailer unit tests\">
            <directory>tests/unit</directory>
        </testsuite>
        <testsuite name=\"SwiftMailer acceptance tests\">
            <directory>tests/acceptance</directory>
        </testsuite>
        <testsuite name=\"SwiftMailer bug\">
            <directory>tests/bug</directory>
        </testsuite>
        <testsuite name=\"SwiftMailer smoke tests\">
            <directory>tests/smoke</directory>
        </testsuite>
    </testsuites>

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
        return "vendor/swiftmailer/swiftmailer/phpunit.xml.dist";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?xml version=\"1.0\" encoding=\"UTF-8\"?>
<phpunit backupGlobals=\"false\"
         backupStaticAttributes=\"false\"
         colors=\"true\"
         convertErrorsToExceptions=\"true\"
         convertNoticesToExceptions=\"true\"
         convertWarningsToExceptions=\"true\"
         processIsolation=\"false\"
         stopOnFailure=\"false\"
         syntaxCheck=\"false\"
         bootstrap=\"tests/bootstrap.php\"
>
    <php>
        <ini name=\"intl.default_locale\" value=\"en\"/>
        <ini name=\"intl.error_level\" value=\"0\"/>
        <ini name=\"memory_limit\" value=\"-1\"/>
        <ini name=\"error_reporting\" value=\"-1\" />
    </php>

    <testsuites>
        <testsuite name=\"SwiftMailer unit tests\">
            <directory>tests/unit</directory>
        </testsuite>
        <testsuite name=\"SwiftMailer acceptance tests\">
            <directory>tests/acceptance</directory>
        </testsuite>
        <testsuite name=\"SwiftMailer bug\">
            <directory>tests/bug</directory>
        </testsuite>
        <testsuite name=\"SwiftMailer smoke tests\">
            <directory>tests/smoke</directory>
        </testsuite>
    </testsuites>

    <listeners>
        <listener class=\"Symfony\\Bridge\\PhpUnit\\SymfonyTestsListener\" />
    </listeners>
</phpunit>
", "vendor/swiftmailer/swiftmailer/phpunit.xml.dist", "/var/www/public/DevLaon/templates/vendor/swiftmailer/swiftmailer/phpunit.xml.dist");
    }
}
